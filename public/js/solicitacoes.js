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
            text: "Solicitação Deletada!",
            icon: "success"
          });
          document.getElementById('form-' + id).submit();
        }
      });
}

function solicitacaocriada(){
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Nova Solicitação Criada",
        showConfirmButton: false,
        timer: 1500
      });
}

function editado(){
  Swal.fire({
      position: "top-end",
      icon: "success",
      title: "solicitação Editada",
      showConfirmButton: false,
      timer: 1500
    });
}