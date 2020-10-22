elementProperty.addEventInElement('#schedule','onclick',function () {
    let formdata = new FormData();
    formdata.append('local' , document.getElementById('local').value)
    formdata.append('type' , document.getElementById('type').value)
    formdata.append('name' , document.getElementById('name').value)
    formdata.append('contact' , document.getElementById('contactUser').value)
    formdata.append('status' , 'Aguardando resposta')
    HomeController.createSchedule(formdata).then(response => {
        if(!response.status)
            return swal('Ocorreu um erro em nossos servidores','Contate via whats app', 'info')
        return swal('Seus dados foram enviados com sucesso','Em breve entraremos em contato para mais detalhes','success')
    })
})
