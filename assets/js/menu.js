var ul_menu=document.getElementById('ul_menu');
ul_menu.style.maxHeight='0px';
function menutoggle(){
    if (ul_menu.style.maxHeight==='0px'){
        ul_menu.style.maxHeight='200px';
    }else {ul_menu.style.maxHeight='0px';}

}
