var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");
var solution = document.getElementById("solution2");
var contact = document.getElementById("contact");
var pageWidth = document.documentElement.clientWidth;

if(pageWidth>960){
	closeNav;
}

openBtn.onclick = openNav;
solution.onclick = closeNav;
closeBtn.onclick = closeNav;



/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}

const form = document.querySelector("form");
const formFields = {
  entreprise: document.getElementById("entreprise"),
  nom: document.getElementById("nom"),
  prenom: document.getElementById("prenom"),
  tel: document.getElementById("tel"),
  message: document.getElementById("message"),
};

for (const field of Object.values(formFields)) {
  field.addEventListener("input", () => {
    const nomEntreprise = formFields.entreprise.value;
    const nomnom = formFields.nom.value;
    const nomprenom = formFields.prenom.value;
    const nomtel = formFields.tel.value;
    const nommessage = formFields.message.value;

    const subject = `Demande de contact depuis ${nomEntreprise} - Taxe CSPE`;
    form.setAttribute(
      "action",
      `mailto:contact@energiewatt.fr?subject=${encodeURIComponent(
        subject
      )}&body=Nom%20de%20votre%20entreprise%20:%20${encodeURIComponent(
        nomEntreprise
      )}%0D%0A%0D%0ANom%20:%20${encodeURIComponent(
        nomnom
      )}%0D%0A%0D%0APrénom%20:%20${encodeURIComponent(
        nomprenom
      )}%0D%0A%0D%0ATéléphone%20:%20${encodeURIComponent(
        nomtel
      )}%0D%0A%0D%0AMessage%20:%20${encodeURIComponent(
        nommessage
      )}%0D%0A`
    );
  });
}