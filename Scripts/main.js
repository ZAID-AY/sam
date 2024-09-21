// Num Only Verification
function validate(){
    var numero = document.formulaire.telephone.value;
    if(isNaN(numero)){
        document.getElementById("numOnly").innerHTML = "Entrez que des numeros";
        document.getElementById("numOnly").style = "font-size: 15px";
        document.getElementById("telephone").style = "border: 3px solid red";
        return false;
    }
    return true;
}









// // CV
// document.getElementById("cv").addEventListener("change", function () {
//   var fileName = document.getElementById("cv").files[0].name;
//   document.getElementById("cv-file-name").textContent = fileName;
// });
// // Lettre de motivation
// document.getElementById("lettre_motivation").addEventListener("change", function () {
//   var fileName = document.getElementById("lettre_motivation").files[0].name;
//   document.getElementById("lettre-file-name").textContent = fileName;
// });
// // Demande de stage
// document.getElementById("demande_stage").addEventListener("change", function () {
//   var fileName = document.getElementById("demande_stage").files[0].name;
//   document.getElementById("demande-file-name").textContent = fileName;
// });







