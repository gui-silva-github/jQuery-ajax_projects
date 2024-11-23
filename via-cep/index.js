let video = document.querySelector('video')

let button = document.querySelector('button')

navigator.mediaDevices.getUserMedia({video:true})
.then(stream => {
    video.srcObject = stream
    video.play()
})
.catch(error =>{
    console.log(error)
})

document.querySelector('button').addEventListener('click', ()=>{
    let canvas = document.querySelector('canvas')
    canvas.height = video.videoHeight
    canvas.width = video.videoHeight
    let context = canvas.getContext('2d')
    context.drawImage(video, 0, 0)
    let link = document.createElement('a')
    link.download = 'foto.png'
    link.href = canvas.toDataURL()
    link.textContent = "Clique para baixar a imagem"
    link.classList = 'text-success'
    document.body.appendChild(link)
    button.remove()
    video.remove()
})

let h3 = document.querySelector("h3")

let map

function success(pos){
    let cords = pos.coords

    let latitude = cords.latitude
    let longitude = cords.longitude

    let duas = `<span>${latitude}, ${longitude}</span>`
    h3.innerHTML += duas;

    if (map === undefined){
        map = L.map('mapid').setView([latitude, longitude], 17)
    } else {
        map.remove()
        map = L.map('mapid').setView([latitude, longitude], 17)
    }

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map)

    let marker = L.marker([latitude, longitude]).addTo(map);
}

function error(err){
    console.log(err)
}

let watchID = navigator.geolocation.getCurrentPosition(success, error, {
    enableHighAccuracy: true,
    timeout: 5000
})

new Vue({
    el: "#appCep",
    data: {
        endereco: {
            cep: null,
            logradouro: null,
            estado: null,
            cidade: null,
            bairro: null,
            siafi: null,
            ibge: null,
            ddd: null,
            gia: null
        }
    },
    methods: {
        alterarCep(){
            axios({
                method: "get",
                url: `https://viacep.com.br/ws/${this.endereco.cep}/json`,
                responseType: 'json'
            }).then(response => {
                let bean = response.data
                this.endereco.logradouro = bean.logradouro
                this.endereco.bairro = bean.bairro
                this.endereco.estado = bean.uf
                this.endereco.cidade = bean.localidade
                this.endereco.siafi = bean.siafi
                this.endereco.ddd = bean.ddd
                this.endereco.ibge = bean.ibge
                this.endereco.gia = bean.gia
            })
        }
    }
})