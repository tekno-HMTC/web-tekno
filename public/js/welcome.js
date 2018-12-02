function pindahTab() {
  var pilihan = document.getElementById('selectPilihan').value;
  switch(pilihan) {
    case "1":
        document.getElementById('pilihan1').style.display = "block";
        document.getElementById('pilihan2').style.display = "none";
        document.getElementById('pilihan3').style.display = "none";
        break;
    case "2":
        document.getElementById('pilihan1').style.display = "none";
        document.getElementById('pilihan2').style.display = "block";
        document.getElementById('pilihan3').style.display = "none";
        break;
    case "3":
        document.getElementById('pilihan1').style.display = "none";
        document.getElementById('pilihan2').style.display = "none";
        document.getElementById('pilihan3').style.display = "block";
        break;
    default:
      document.getElementById('pilihan1').style.display = "block";
      document.getElementById('pilihan2').style.display = "none";
      document.getElementById('pilihan3').style.display = "none";
  }
}

function tampilanPenjelasan(index) {
  var textArr = new Array();
  switch (index) {
    case "1":
      textArr[0] = "Tekno";
      textArr[1] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
      break;
    case "2":
      textArr[0] = "Dagri";
      textArr[1] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
      break;
    case "3":
      textArr[0] = "Hublu";
      textArr[1] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
      break;
    case "4":
      textArr[0] = "KDPM";
      textArr[1] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
      break;
    case "5":
      textArr[0] = "Pengpro";
      textArr[1] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
      break;
    case "6":
      textArr[0] = "Medfo";
      textArr[1] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
      break;
    case "7":
      textArr[0] = "Kesma";
      textArr[1] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
      break;
    case "8":
      textArr[0] = "Sosmas";
      textArr[1] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
      break;
    case "9":
      textArr[0] = "KWU";
      textArr[1] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
      break;
  }
  return textArr;
}

function tampilkanPenjelasan1() {
  var card = document.getElementById('CardDptDsc1');
  var textArr = tampilanPenjelasan(document.getElementById("selectPilihan1").value);
  card.getElementsByClassName("card-header")[0].innerHTML = textArr[0];
  card.getElementsByClassName("card-text")[0].innerHTML = textArr[1];
  card.style.display = "block";
}

function tampilkanPenjelasan2(){
  var card = document.getElementById('CardDptDsc2');
  var textArr = tampilanPenjelasan(document.getElementById("selectPilihan2").value);
  card.getElementsByClassName("card-header")[0].innerHTML = textArr[0];
  card.getElementsByClassName("card-text")[0].innerHTML = textArr[1];
  card.style.display = "block";
}

function tampilkanPenjelasan3() {
  var card = document.getElementById('CardDptDsc3');
  var textArr = tampilanPenjelasan(document.getElementById("selectPilihan3").value);
  card.getElementsByClassName("card-header")[0].innerHTML = textArr[0];
  card.getElementsByClassName("card-text")[0].innerHTML = textArr[1];
  card.style.display = "block";
}

function togglePilihan(){

}
