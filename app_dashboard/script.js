$(document).ready(() => {
	
    $('#documentacao').on('click', ()=>{
        // $('#pagina').load('documentacao.php')

        /*$.get('documentacao.php', data => {
            $('#pagina').html(data)
        })*/

        $.post('documentacao.php', data => {
            $('#pagina').html(data)
        })
    })

    $('#suporte').on('click', ()=>{
        /// $('#pagina').load('suporte.php')

        /*$.get('suporte.php', data => {
            $('#pagina').html(data)
        })*/

        $.post('suporte.php', data => {
            $('#pagina').html(data)
        })
    })

    // Ajax
    $('#competencia').on('change', e => {
        
        let competencia = $(e.target).val()

        $.ajax({
            type: 'GET',
            url: 'app.php',
            data: `competencia=${competencia}`,
            dataType: 'json',
            success: dados => { 
                $('#numeroVendas').html(dados.numeroVendas)
                $('#totalVendas').html(dados.totalVendas)
                $('#clientes_ativos').html(dados.clientes_ativos)
                $('#clientes_inativos').html(dados.clientes_inativos)
                $('#reclamacoes').html(dados.reclamacoes)
                $('#elogios').html(dados.elogios)
                $('#sugestoes').html(dados.sugestoes)
                $('#totalDespesas').html(dados.totalDespesas)
             },
            error: erro => { console.log(erro) }
        })

    })

})