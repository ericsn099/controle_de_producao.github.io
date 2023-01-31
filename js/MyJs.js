

/*ARRAY DE ANIMAIS */
const Animais = [
	{ id: 1, img: '../assets/images/dog.jpg', title: 'Caramelo', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
	{ id: 2, img: '../assets/images/fish.jpg', title: 'Nemo', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
	{ id: 3, img: '../assets/images/cat.jpg', title: 'Tom', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
	{ id: 4, img: '../assets/images/dog1.png', title: 'Vegita', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
	{ id: 5, img: '../assets/images/dog2.png', title: 'Goku', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
	{ id: 6, img: '../assets/images/cat1.png', title: 'Naruto', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
	{ id: 7, img: '../assets/images/cat2.png', title: 'Seya', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
	{ id: 8, img: '../assets/images/dog3.png', title: 'Xuxa', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
	{ id: 9, img: '../assets/images/cat.jpg', title: 'Floquinho', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
]






Animais.map((item, index) => {
	//Clonando o card 
	let animal = document.querySelector('.clone .animais-card').cloneNode(true);
	//Adicionando o card na tela
	document.querySelector('.animais-grid').append(animal);

	//Adicionando as propriedades 

	animal.querySelector('.animal-img img').src = item.img;
	animal.querySelector('.animal-desc .h5').innerHTML = item.title;
	animal.querySelector('.desc-animal').innerHTML = item.desc;


});

