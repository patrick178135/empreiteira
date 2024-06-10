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
            text: "Contrato Deletado!",
            icon: "success"
          });
          document.getElementById('form-' + id).submit();
        }
      });
}

function contratocriado(){
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Novo Contrato Criado",
        showConfirmButton: false,
        timer: 1500
      });
}

function editado(){
  Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Contrato Editado",
      showConfirmButton: false,
      timer: 1500
    });
}