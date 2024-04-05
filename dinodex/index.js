const dinossauros = [
  { nome: "Tiranossauro", imagem: "https://www.thoughtco.com/thmb/3UmJeVfo3K1QR4KL-zyEAX0BGoc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/artwork-of-a-tyrannosaurus-rex-hunting-140891386-5b9ae2e146e0fb0025fa90e6.jpg", descricao:  ["Carnívoro","12 metros de comprimento, 3,65 metros de altura", "Podiam pesar oito toneladas.", "Possuía mandíbulas poderosas, sendo considerada a mordida mais forte entre todos os animais que já existiram no planeta."] },
  { nome: "Triceratops", imagem: "https://i.natgeofe.com/n/b96b572c-98e2-4ec2-a714-08a6b95cf646/triceratopshorridus_hexdcb_3x4.jpg", descricao: [" Herbívoro","Viveu durante o Cretáceo, de 68 a 66 milhões de anos atrás", "Tinha 9 m de comprimento, 3 m de altura", " 6 toneladas"]},
  { nome: "Velociraptor", imagem: "https://i.pinimg.com/originals/09/0b/d1/090bd1d96a3932147536b744c0a41301.jpg", descricao: ["Carnívoro","1,5 metros de comprimento e cerca de 60 cm de altura","50 Kg", "Alcançava velocidades semelhantes a de um leopardo"]},
  {nome: "Carnotauro", imagem: "https://i.natgeofe.com/n/5b0b2346-5994-41ee-a0ff-fec15d8671a4/Carnotaurus.jpg", descricao: ["Carnívoro","7 metros de comprimento e podia alcançar até 3 metros de altura", "Existe muita discussão sobre esse animal. Inicialmente, possuía patas anteriores extremamente curtas, sendo praticamente vestigiais."]},
  {nome: "Dilophosaurus", imagem: "https://hallmark.com.au/cdn/shop/files/QXI7207_101.jpg?v=1687930216", descricao: ["Carnívoro", "7 metros de comprimento e 2,5 metros de altura", "Adulto pesava entre 400 e 450 quilos"]},
  {nome: "Brachiosaurus", imagem: "https://www.wildrepublic.com/wp-content/uploads/2018/07/Brachiosaurus-3025-xl.jpg", descricao: ["Herbívoro","26m de comprimento","Pesava cerca de 35 toneladas"]},
  {nome: "Ankylosaurus ", imagem: "https://m.media-amazon.com/images/I/712H0JsnCJL._AC_UF894,1000_QL80_.jpg", descricao: ["Herbívoro", "Pesavam entre 7 a 9 toneladas", "Mediam cerca de 9m de comprimento e 2m de altura"]},
  {nome: "Archaeopteryx ", imagem: "https://images.newscientist.com/wp-content/uploads/2019/05/28150114/dga-1140282.jpg?width=800", descricao: ["Carnívoro","Tamanho de um corvo tinha penas grandes", "Dentes afiados, mãos e uma longa cauda óssea"]},
  {nome: "Brontosaurus ", imagem: "https://th-thumbnailer.cdn-si-edu.com/62fExYWeZ7E58tQ6yaIlNApxadE=/1000x750/filters:no_upscale()/https://tf-cmsv2-smithsonianmag-media.s3.amazonaws.com/filer/c9/e8/c9e8e98e-b405-448e-9432-81587b92dda9/new-bronto.jpg", descricao: ["Herbívoro", "20 metros de comprimento", "30 toneladas", "Tinha a cauda parecida com um chicote"]},
  {nome: "Parasaurolophus", imagem: "https://facts.net/wp-content/uploads/2023/12/10-parasaurolophus-facts-for-kids-1702367302.jpeg", descricao: [" Herbívoro", "Armaduras de osso", "Tinham dentes pequenos e afiados"]},
  {nome: "Spinosaurus", imagem: "https://th-thumbnailer.cdn-si-edu.com/x7EYLZthe8sNVN1T2qvYdVJm7vM=/fit-in/1600x0/https%3A%2F%2Ftf-cmsv2-smithsonianmag-media.s3.amazonaws.com%2Ffiler%2Fc7%2F1f%2Fc71f9f48-0b40-4883-b0bf-b981e5e5443e%2Fistock-146818770.jpg", descricao: ["O maior predador carnívoro", "Parece uma mistura entre um pato e um crocodilo", "primeiro dinossauro semiaquático"]},
  {nome: "Stegosaurus", imagem: "https://cdn.mos.cms.futurecdn.net/owYTb9X5fKpeBhgiaxD73b-1200-80.jpg", descricao: [" Herbívoro", "Grandes placas ósseas das costas e do rabo", "5 e 7 metros de comprimento", "Uma cabeça considerada desproporcional para o tamanho do corpo e dentes pequenos"]},

  
];

const dinoList = document.getElementById('dinoList');

dinossauros.forEach(dino => {
  const dinoCard = document.createElement('div');
  dinoCard.classList.add('dino-card');
  let descricaoHTML = "<ul>";
    dino.descricao.forEach(item => {
        descricaoHTML += `<li>${item}</li>`;
    });
    descricaoHTML += "</ul>";
    dinoCard.innerHTML = `
        <img src="${dino.imagem}" alt="${dino.nome}">
        <h3>${dino.nome}</h3>
        <ul>${descricaoHTML}</ul>
  `;
  dinoList.appendChild(dinoCard);

});
