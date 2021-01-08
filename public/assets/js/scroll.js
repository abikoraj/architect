window.onscroll=(e)=>{
    var top=window.pageYOffset;
    console.log(top);
    if(top>120){
        $('.canvus_menu').removeClass('d-none');
    }else{
        $('.canvus_menu').addClass('d-none');

    }
}
