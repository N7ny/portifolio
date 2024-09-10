
const dinosaurs = [
    {
        name: "Tiranossauro",
        image: "img/Jurassic_world_dominion_t_rex_render_png_by_junior3dsymas_df1l0ap-fullview.webp",
        info: [
            "Carnívoro",
            "12 metros de comprimento",
            "3,65 metros de altura",
            "Podiam pesar 8 toneladas.",
            "Possuía mandíbulas poderosas, sendo considerada a mordida mais forte entre todos os animais que já existiram no planeta."
        ]
    },
    {
        name: "Velociraptor",
        image: "img/velo.png",
        info: [
            "Carnívoro",
            "2 metros de comprimento",
            "0,5 metros de altura",
            "Pesava até 15 kg.",
            "Muito ágil e inteligente, caçava em grupos."
        ]
    },
    {
        name: "Triceratops",
        image: "img/tri.webp",
        info: [
            "Herbívoro",
            "9 metros de comprimento",
            "3 metros de altura",
            "Podia pesar até 12 toneladas.",
            "Tinha três chifres e uma grande proteção óssea na cabeça."
        ]
    },
    {
        name: "Carnotauro",
        image: "img/car.webp",
        info: [
            "Carnívoro",
            "7 metros de comprimento e podia alcançar até 3 metros de altura",
            "Existe muita discussão sobre esse animal. Inicialmente, possuía patas anteriores extremamente curtas, sendo praticamente vestigiais."
        ]
    },
    {
        name: "Dilophosaurus",
        image: "img/Dilophosaurus_Render.webp",
        info: [
            "Carnívoro",
            "7 metros de comprimento e 2,5 metros de altura",
            "Adulto pesava entre 400 e 450 quilos"
        ]
    },
    {
        name: "Brachiosaurus",
        image: "img/braq.webp",
        info: [
            "Herbívoro",
            "26m de comprimento",
            "Pesava cerca de 35 toneladas"
        ]
    },
    {
        name: "Ankylosaurus",
        image: "img/anq.webp",
        info: [
            "Herbívoro",
            "Pesavam entre 7 a 9 toneladas",
            "Mediam cerca de 9m de comprimento e 2m de altura"
        ]
    },
    {
        name: "Archaeopteryx",
        image: "img/arch.webp",
        info: [
            "Carnívoro",
            "Tamanho de um corvo tinha penas grandes",
            "Dentes afiados, mãos e uma longa cauda óssea"
        ]
    },
    {
        name: "Brontosaurus",
        image: "img/bronto.png",
        info: [
            "Herbívoro",
            "20 metros de comprimento",
            "30 toneladas",
            "Tinha a cauda parecida com um chicote"
        ]
    },
    {
        name: "Parasaurolophus",
        image: "img/para.webp",
        info: [
            "Herbívoro",
            "Armaduras de osso",
            "Tinham dentes pequenos e afiados"
        ]
    },
    {
        name: "Spinosaurus",
        image: "img/spi.webp",
        info: [
            "O maior predador carnívoro",
            "Parece uma mistura entre um pato e um crocodilo",
            "Primeiro dinossauro semiaquático"
        ]
    },
    {
        name: "Stegosaurus",
        image: "img/ste.webp",
        info: [
            "Herbívoro",
            "Grandes placas ósseas nas costas e no rabo",
            "5 e 7 metros de comprimento",
            "Uma cabeça considerada desproporcional para o tamanho do corpo e dentes pequenos"
        ]
    }
];


let currentDinoIndex = 0;


const dinoName = document.getElementById('dinoName');
const dinoInfo = document.getElementById('dinoInfo');
const img2 = document.getElementById('img2');


function updateDinosaur() {
    const currentDino = dinosaurs[currentDinoIndex];
    
    dinoName.textContent = currentDino.name;
    img2.src = currentDino.image;

    const infoList = currentDino.info.map(info => `<li>${info}</li>`).join('');
    dinoInfo.innerHTML = `<h1>Descrição:</h3><ul>${infoList}</ul>`;

    // Verifica se o dinossauro é "Dilophosaurus" e mostra um alerta
    if (currentDino.name.includes("Dilophosaurus")) {
        alert("e o fav desse dev 🤓☝️");
    }
}


function nextDinosaur() {
    currentDinoIndex = (currentDinoIndex + 1) % dinosaurs.length;
    updateDinosaur();
}


function prevDinosaur() {
    currentDinoIndex = (currentDinoIndex - 1 + dinosaurs.length) % dinosaurs.length;
    updateDinosaur();
}

document.getElementById('nextButton').addEventListener('click', nextDinosaur);
document.getElementById('prevButton').addEventListener('click', prevDinosaur);

updateDinosaur();
