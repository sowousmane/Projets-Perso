
function functionConnexion(){
  if(document.getElementById('connexion').style.display=='none'){
    document.getElementById('connexion').style.display='block';
    document.getElementById('login').style.display='none';
    document.getElementById('demo').style.display='none';
  }
  else 
  document.getElementById('connexion').style.display='none';
}
function functionLogin(){
  if(document.getElementById('login').style.display=='none'){
    document.getElementById('login').style.display='block';
    document.getElementById('connexion').style.display='none';
    document.getElementById('demo').style.display='none';

  }
  else {
    document.getElementById('login').style.display='none';
    //document.getElementById('InsModal').style.display='block';
  }
}

function functionContact(){
    if(document.getElementById('demo').style.display=='none'){
      document.getElementById('demo').style.display='block';
      document.getElementById('demomo').style.display='none';
  
    }
    else 
    document.getElementById('demo').style.display='none';
  }
  
  function demomofunction (){
    if(document.getElementById('demomo').style.display=='none'){
      document.getElementById('demomo').style.display='block';
      document.getElementById('demo').style.display='none';
  
    }
    else 
    document.getElementById('demomo').style.display='none';
  }

function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("un champ non rempli");
    return false;
  }
}
function functionIns() {
  if(document.getElementById('test').style.display=='none'){
    document.getElementById('test').style.display='block';}
}

function functionEdition(){
  if(document.getElementById('edition').style.display=='none'){
    document.getElementById('edition').style.display='block';

  }
  else 
  document.getElementById('edition').style.display='none';
}


