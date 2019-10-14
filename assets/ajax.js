(function() {

  const contenu = document.getElementById("contenu");
  const links = document.querySelectorAll('.testload');           
  const close = document.getElementById("close");
  const tempClose = document.getElementById("tempClose");

  links.forEach(function(element) {
  // console.log(element.getAttribute('data-box'));            
  
  element.addEventListener('click', function(e) {
    e.preventDefault();              
    contenu.classList.add("visible");
    close.classList.add("visible");
    tempClose.classList.remove("visible");
    let url = this.getAttribute('data-box');
    makeRequest(url);
  });
  });

  close.addEventListener('click', function () {                    
    contenu.classList.remove("visible");
    tempClose.classList.add("visible");
    this.classList.remove("visible");              
  });

let httpRequest;         
function makeRequest(url) {
  httpRequest = new XMLHttpRequest();        
  if (!httpRequest) {
    alert('Abandon :( Impossible de créer une instance de XMLHTTP');
    return false;
  }
  httpRequest.onreadystatechange = showContents;            
  httpRequest.open('GET',url, true);            
  httpRequest.send();
}


function showContents() {
  if (httpRequest.readyState === XMLHttpRequest.DONE) {
    if (httpRequest.status === 200) {
                  
      contenu.innerHTML = JSON.parse(httpRequest.responseText);      
      console.log(JSON.parse(httpRequest.responseText));  
                      
    } else {
      alert('Il y a eu un problème avec la requête.' [links]);
    }
  }
}
})();