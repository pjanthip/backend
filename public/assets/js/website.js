function setting(method , param) {
    url = baseUrl+'set/'+method+'/'+param;
    window.location.href = url;
}

function settheme(param){
    sessionStorage.setItem('theme', param);
    let theme = sessionStorage.getItem('theme');
    console.log(theme);  // output: john_doe
    layout_change(theme);
}


function logout(){
    url = baseUrl+'logout';
    window.location.href = url;
}

function popup_toast(position_ , icon_ , title_){
    const Toast = Swal.mixin({
        toast: true,
        position: position_,
        showConfirmButton: false,
        timer: 30000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        },
        customClass: {
            popup: 'custom-toast'
        }
      });
      Toast.fire({
        icon: icon_,
        title: title_
      });
}