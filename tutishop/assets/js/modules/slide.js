elementProperty.addEventInElement('.delete-slide','onclick',function () {
    let id = this.getAttribute('id');
    SwalCustom.dialogConfirm('Deseja deletar esse slide?','Essa ação é irreversivel',status => {
        if(!status)
            return false;

        SlideController.delete(id).then(response => {
            if(!response.status)
                return swal('Erro ao excluir','Contate o suporte','info');

            swal('Excluido com sucesso','','success');
            elementProperty.getElement('.slide'+id, blog => {
                blog.style.display = 'none';
            })

        })
    })
})
