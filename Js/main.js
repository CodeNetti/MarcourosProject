const header = document.querySelector('.header')

window.addEventListener("scroll", () => {
    
    header.classList.toggle('scroll', window.scrollY>7)
});

const menuHambuguer = document.querySelector("#menu-hamburguer")

menuHambuguer.addEventListener("click", () => {

    let nav = document.querySelector(".navMobile")
    menuHambuguer.classList.toggle("hamburguerActive")
    nav.classList.toggle('active')
})

function fecharNav(){
    let nav = document.querySelector(".navMobile")
    let input = document.querySelector("#menu-hamburguer")
    input.checked = false;
    nav.classList.toggle('active')
}

const fecharMobile = ()=>{
    let nav = document.querySelector(".navMobile")
    nav.classList.remove('active')
    removerFundo()
}
document.addEventListener('DOMContentLoaded', (event) => {
    const quadradinhosC = document.querySelector('#Maps');
    if (quadradinhosC) { // Verifica se o elemento existe
        quadradinhosC.addEventListener('click', () => {
            window.open('https://www.google.com/maps/place/Marcouro+Revestimento+Automotivo/@-23.5157134,-46.7228063,15z/data=!4m2!3m1!1s0x0:0x671df2aebf78cd1d?sa=X&ved=1t:2428&ictx=111');
        });
    }
});
document.addEventListener('DOMContentLoaded', (event) => {
    const quadradinhosC = document.querySelector('#Wpp');
    if (quadradinhosC) { // Verifica se o elemento existe
        quadradinhosC.addEventListener('click', () => {
            window.open('https://wa.me/5511914463667?text=Olá! Vim pelo site! Gostaria de saber mais.', '_blank');
        });
    }
});
document.addEventListener('DOMContentLoaded', (event) => {
    const emailButton = document.querySelector('#Mail');
    if (emailButton) {
        emailButton.addEventListener('click', () => {
            window.location.href = 'mailto:marcouros123@gmail.com';
        });
    } 
});





//FUNÇÃO SUBMIT


function showConfirmation() {
    alert("Ótimo, recebemos seu E-mail, Entraremos em contato");
}
function scrollToContact() {
    var contatoSection = document.getElementById("sobre-nos");
    var offset = 100; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToSobre() {
    var contatoSection = document.getElementById("sobre-nos");
    var offset = 133; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToDayCare() {
    var contatoSection = document.getElementById("Servico");
    var offset = 80; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToPlanoDaySobre(){
    var contatoSection = document.getElementById("desc-zen");
    var offset = 80; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToPlanoHospedagem() {
    var contatoSection = document.getElementById("planoHospedagem");
    var offset = 80; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToPlanoHospedagemSobre() {
    var contatoSection = document.getElementById("desc-zen");
    var offset = 80; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToEmail() {
    var contatoSection = document.getElementById("Ctc");
    var offset = 260; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToInicio() {
    console.log("Função scrollToInicio chamada");
    var contatoSection = document.getElementById("banner");
    var offset = 133; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}
function scrollToInicioB() {
    console.log("Função scrollToInicio chamada");
    var contatoSection = document.getElementById("Top");
    var offset = 133; // Ajuste este valor para definir a quantidade de deslocamento para cima
    var topPos = contatoSection.offsetTop - offset;
    window.scrollTo({ top: topPos, behavior: "smooth" });
}


//const slider = document.querySelectorAll('.slider');
//const numSlides = slider.length;
//let currentSlide = 0;

//function hideSlider() {
 //slider.forEach(item => item.classList.remove('active'));
//}

//function showSlider() {
 // slider[currentSlide].classList.add('active');
//}

//function nextSlider() {
 // hideSlider();
  //currentSlide = (currentSlide + 1) % numSlides;
 // showSlider();
//}

// Função para iniciar o temporizador
//function startSlider() {
 // showSlider(); // Exibe o primeiro slide ao carregar a página
 
 // setInterval(nextSlider, 4000);
//}

// Inicia o temporizador
//startSlider();



//FUNÇÃO do drop down

document.addEventListener('DOMContentLoaded', function () {
    function toggleDropdown(element) {
        var dropdown = element.nextElementSibling;
        while (dropdown && dropdown.tagName !== 'UL') {
            dropdown = dropdown.nextElementSibling;
        }

        if (dropdown) {
            if (dropdown.classList.contains('expanded')) {
                dropdown.classList.remove('expanded');
                dropdown.style.maxHeight = '0';
            } else {
                dropdown.classList.add('expanded');
                dropdown.style.maxHeight = '2000px';
            }
            
        }
    }

    var mainDropdowns = ['DropEntrega', 'DropPagamento', 'DropGarantia'];
    mainDropdowns.forEach(function(id) {
        var clickDrop = document.getElementById(id);
        if (clickDrop) {
            clickDrop.addEventListener('click', function (e) {
                e.preventDefault();
                toggleDropdown(this);
            });
        }
    });

    var paymentDropdowns = ['DropDinheiro', 'DropCartao'];
    paymentDropdowns.forEach(function(id) {
        var clickDrop = document.getElementById(id);
        if (clickDrop) {
            clickDrop.addEventListener('click', function (e) {
                e.preventDefault();
                toggleDropdown(this);
            });
        }
    });
});











