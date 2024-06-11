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
            text: "Funcionário Deletado!",
            icon: "success"
          });
          document.getElementById('form-' + id).submit();
        }
      });
}

function funcionariocriado(){
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Novo Funcionário Criado",
        showConfirmButton: false,
        timer: 1500
      });
}

function editado(){
  Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Funcionário Editado",
      showConfirmButton: false,
      timer: 1500
    });
}