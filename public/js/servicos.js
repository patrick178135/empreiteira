function deletar(id){
    Swal.fire({
        title: "tem certeza?",
        text: "Você não pode reverter isso",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim Deletar!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Deletado!",
            text: "Serviço Deletado!",
            icon: "success"
          });
          document.getElementById('form-' + id).submit();
        }
      });
}

function servicocriado(){
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Novo Serviço Criado",
        showConfirmButton: false,
        timer: 1500
      });
}

function editado(){
  Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Serviço Editado",
      showConfirmButton: false,
      timer: 1500
    });
}