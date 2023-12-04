/*SweetAlert Init*/

$(function() {
	"use strict";
	
	var SweetAlert = function() {};

    //examples 
    SweetAlert.prototype.init = function() {
        
    //Basic
    $('#sa-basic').on('click',function(e){
	    swal({   
			title: "Here's a message!",   
            confirmButtonColor: "#2879ff",   
        });
		return false;
    });

    //A title with a text under
    $('#sa-title').on('click',function(e){
	    swal({   
			title: "Here's a message!",   
            text: "Lorem ipsum dolor sit amet",
			confirmButtonColor: "#2879ff",   
        });
		return false;
    });

    //Success Message
	$('#sa-success').on('click',function(e){
        swal({   
			title: "good job!",   
             type: "success", 
			text: "Lorem ipsum dolor sit amet",
			confirmButtonColor: "#01c853",   
        });
		return false;
    });

    //Warning Message
    $('#sa-warning,.sa-warning').on('click',function(e){
	    swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#fec107",   
            confirmButtonText: "Yes, delete it!",   
            closeOnConfirm: false 
        }, function(){   
            swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
        });
		return false;
    });

    //Parameter
	$('#sa-params').on('click',function(e){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#fec107",   
            confirmButtonText: "Yes, delete it!",   
            cancelButtonText: "No, cancel plx!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {     
                swal("Deleted!", "Your imaginary file has been deleted.", "success");   
            } else {     
                swal("Cancelled", "Your imaginary file is safe :)", "error");   
            } 
        });
		return false;
    });

    //Custom Image
	$('#sa-image').on('click',function(e){
		swal({   
            title: "John!",   
            text: "Recently joined twitter",   
            imageUrl: "dist/img/user.png" ,
			confirmButtonColor: "#e91e63",   
			
        });
		return false;
    });

    //Auto Close Timer
	$('#sa-close').on('click',function(e){
        swal({   
            title: "Auto close alert!",   
            text: "I will close in 2 seconds.",   
            timer: 2000,   
            showConfirmButton: false 
        });
		return false;
    });


    },
    //init
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert;
	
	$.SweetAlert.init();
});




/************************* MES EVENEMENTS LIEES AVEC LIVEWIRE CYCLE *****************************/


window.addEventListener('swal:modal', event => { 
    swal({
        title: event.detail.message,
        text: event.detail.text,
        icon: event.detail.type,
        type: event.detail.type
    });
});


window.addEventListener('swal:modalSupprimer', event => { 
    swal({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.type,
        type: event.detail.type
    });
});

window.addEventListener('swal:modalUpdate', event => { 
    swal({
        title: event.detail.message,
        text: event.detail.text,
        icon: event.detail.type,
        type: event.detail.type
    });
});



window.addEventListener('swal:modalDeleteUtilisateurs', event => { 
        swal({   
        title: event.detail.title,   
        text: event.detail.text,   
        type: event.detail.type,  
        showCancelButton: true,   
        confirmButtonColor: "#fec107",   
        confirmButtonText: "Supprimer",   
        cancelButtonText: "Annuler",   
        closeOnConfirm: false,   
        closeOnCancel: false 
    }, function(isConfirm){   
        if (isConfirm) {     
            window.livewire.emit('SupprimerUtilisateur',event.detail.id);  
        } else {     
            swal("Annuler", "Merci d'avoir Annuler", "error");   
        } 
    });
});




window.addEventListener('closeModaleModifySousCategorie' , event => {
    $('#EditSousCategorie').modal('hide');
});
window.addEventListener('closeModaleModifyImageSousCategorie' , event => {
    $('#checkSubCategorie').modal('hide');
});

