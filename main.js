const cleaveCC = new Cleave("#cardNumber", {
    creditCard: true,
    delimiter: "-",
    onCreditCardTypeChanged: function (type) {
      const cardBrand = document.getElementById("cardBrand"),
        visa = "fab fa-cc-visa",
        mastercard = "fab fa-cc-mastercard",
        amex = "fab fa-cc-amex",
        diners = "fab fa-cc-diners-club",
        jcb = "fab fa-cc-jcb",
        discover = "fab fa-cc-discover";
  
      switch (type) {
        case "visa":
          cardBrand.setAttribute("class", visa);
          break;
        case "mastercard":
          cardBrand.setAttribute("class", mastercard);
          break;
        case "amex":
          cardBrand.setAttribute("class", amex);
          break;
        case "diners":
          cardBrand.setAttribute("class", diners);
          break;
        case "jcb":
          cardBrand.setAttribute("class", jcb);
          break;
        case "discover":
          cardBrand.setAttribute("class", discover);
          break;
        default:
          cardBrand.setAttribute("class", "");
          break;
      }
    },
  });
  
  const cleaveDate = new Cleave("#cardExpiry", {
    date: true,
    datePattern: ["m", "y"],
  });
  
  const cleaveCCV = new Cleave("#cardCcv", {
    blocks: [3],
  });
  const sr= ScrollReveal({
    distance: '60px',
    duration: 2500,
    delay: 400,
    reset: true
  })
  let menu = document.querySelector('#menu-icon');
  let navbar = document.querySelector('.navbar');
  menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
  }
  window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
  }
  sr.reveal('.text', {delay: 200, origin: 'top'})
  sr.reveal('.form-container form', {delay: 800, origin: 'left'})
  sr.reveal('.heading', {delay: 800, origin: 'left'})
  sr.reveal('.ride-container .box', {delay: 600, origin: 'left'})
  sr.reveal('.services-container .box', {delay: 600, origin: 'left'})
  sr.reveal('.about-container .box', {delay: 600, origin: 'left'})
  sr.reveal('.reviews-container .box', {delay: 600, origin: 'left'})
  sr.reveal('.newsletter .box', {delay: 400, origin: 'bottom'})
  