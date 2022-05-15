var formPanel = document.getElementById('hide-form');
var pdfPanel = document.getElementById('hide-pdf');

function hideForm(){
    formPanel.setAttribute("style","display:none;");
}

function enrollNow(){
    formPanel.setAttribute("style","display:block;");
    window.scrollTo(0,0);
}

function hidePdf(){
    pdfPanel.setAttribute("style","display:none;");
}
function viewSyllabus(){
    pdfPanel.setAttribute("style","display:block;");
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(this.status == 200){
            document.getElementById('fetch-pdf').innerHTML=this.response;
            // alert(this.response)
        }
        // alert(this.response)
        
    }
    xhr.open("GET","http://localhost/PsdToHtml/action.php?action=veiwpdf",true);
    xhr.send();
}