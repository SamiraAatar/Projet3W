
/* --------------Nav -------------------------------- */

const doc = document;
const menuOpen = doc.querySelector(".CacheMenuBurgerOrdi");
const menuClose = doc.querySelector(".close");
const ContenairMenuBurgerMobile = doc.querySelector(".ContenairMenuBurgerMobile");

menuOpen.addEventListener("click", () => {
  ContenairMenuBurgerMobile.classList.add("ContenairMenuBurgerMobile--active");
});

menuClose.addEventListener("click", () => {
  ContenairMenuBurgerMobile.classList.remove("ContenairMenuBurgerMobile--active");
});

/* ------------------formulaire---------------*/

/* Pour recuperer mon formulaire / j'attend que mon form soit envoyé /j'excute la fonction */
document.getElementById('form').addEventListener('submit', function(event) {
  /* / j'annul l'action par defaut (automatiquement) / */
        event.preventDefault();

  /* / je stock le serviceID + TemplateID / */
       const serviceID = 'service_yg8826w';
       const templateID = 'template_ksuektj';
/* / executer une fonction présente dans EmailJS qui comporte le serviceId , templateId et mon formulaire / */
       emailjs.sendForm(serviceID, templateID, this)
/* / une fois excuté passer à la suite de la fonction / */
        .then(() => {
/* / remet le form à 0  / */
           document.getElementById("form").reset();
           alert('votre message a été envoyer');
        }, (err) => {
 /* / si erreur d'envoie envoyer message erreur et stoké sur JSon */
 alert(JSON.stringify(err));
});
});
