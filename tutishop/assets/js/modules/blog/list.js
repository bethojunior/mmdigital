elementProperty.addEventInElement('.delete-blog','onclick',function () {
    let id = this.getAttribute('id');
    SwalCustom.dialogConfirm('Deseja deletar esse blog?','Essa ação é irreversivel',status => {
        if(!status)
            return false;

        BlogController.delete(id).then(response => {
            if(!response.status)
                return swal('Erro ao excluir','Contate o suporte','info');

            swal('Excluido com sucesso','','success');
            elementProperty.getElement('.blog'+id, blog => {
                blog.style.display = 'none';
            })

        })
    })
})
