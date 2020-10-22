elementProperty.addEventInElement('.update','onclick',function () {
    let id = this.getAttribute('id');

    SwalCustom.dialogConfirm('Deseja alterar o status para cliente atendido?','',status => {
        if(!status)
            return false;

        var formData = new FormData();
        formData.append('id', id);
        formData.append('status','Cliente atendido');
        ScheduleController.updateStatus(formData).then(response => {
            console.log(response)
        })
    })

})
