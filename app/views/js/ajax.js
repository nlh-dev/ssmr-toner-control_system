const AjaxForms = document.querySelectorAll(".AjaxForm");

AjaxForms.forEach(forms => {

    forms.addEventListener("submit", function(e){
        
        e.preventDefault();

        Swal.fire({
            title: '¿Deseas realiza esta Acción?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed){

                let data = new FormData(this);
                let method = this.getAttribute("method");
                let action = this.getAttribute("action");

                let header = new Headers();

                let config = {
                    method: method,
                    headers: header,
                    mode: "cors",
                    cache: "no-cache",
                    body: data,
                };

                fetch(action, config)
                .then(response => response.json())
                .then(response => {
                    console.log(response);
                    return ajaxAlert(response);
                })
                .catch(error =>{
                    console.log('Error:' , error);
                });

            }
        });

    });

});

function ajaxAlert(alert){
    
    if (alert.type == "simple") {
        Swal.fire({
            icon: alert.icon,
            title: alert.title,
            text: alert.text,
            confirmButtonText: "Aceptar",
            confirmButtonColor: '#3085d6'
          });
    }else if (alert.type == "recharge") {
        Swal.fire({
            icon: alert.icon,
            title: alert.title,
            text: alert.text,
            confirmButtonText: "Aceptar"
          }).then((result) => {
            if (result.isConfirmed) {
                location.reload();
            }
          });
    }else if (alert.type == "clean"){
        Swal.fire({
            icon: alert.icon,
            title: alert.title,
            text: alert.text,
            confirmButtonText: "Aceptar"
          }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector(".AjaxForm").reset();
            }
          });
    }else if (alert.type == "redirect"){
        window.location.href = alert.url;
    }
}
