
// app vue js
var app = new Vue ({
    el:'#app',
    data: {
       
      
    
        destinations: [
	    {   id: 1,
		country: "Emirates Arabes Unis",
		place: 'Dubaï',
		label: 'Hyatt Regency Creek',
		rating: '★★★★★',
		upto: 'Dès 67€',
		redirect_label: 'VERS LES EMIRATS ARABES UNIS — DUBAÏ',
		tags:[
			    {
				"classname": "premium",
				"label": "Premium"
			    },
			    {
				"classname": "option",
				"label": "Surclassement offert"
			    }
			],
		link: '',
		image: "images/HYATT_REGENCY_CREEK.png"
	    },
	    {   id:2,
		country: "Emirates Arabes Unis",
		place: "Dubaï",
		label: "Fairmont Dubaï",
		rating: "★★★★★",
		upto: "Dès 99€",
		redirect_label: "VERS LES EMIRATS ARABES UNIS — DUBAÏ",
		tags:[
		    {
		        "classname": "premium",
		        "label": "Premium"
		    },
		    {
		        "classname": "option",
		        "label": "Rooftop"
		    }
		],
		link: "",
		image:"images/FAIRMONT_DUBAI.png"
	    },
	    {   id:3,
		country: "Maurice",
		place: "Grand Rivière",
		label: "Laguna Beach Hotel & Spa",
		rating: "★★★★",
		upto: "Jusqu'à -64%",
		redirect_label: "VERS MAURICE — GRAND RIVIÈRE",
		tags:[
		    {
		        "classname": "premium",
		        "label": "Tout inclus"
		    },
		    {
		        "classname": "option",
		        "label": "Spa"
		    }
		],
        link: "",
        image:"images/CLOS_DU_LITTORAL.png"
        
	    },
	    {   id: 4,
		country: "Indonésie",
		place: "Bali & Gili",
		label: "Combiné Sthala - Marc - Patra",
		rating: "0",
		upto: "Dès 469€",
		redirect_label: "VERS L'INDONÉSIE — BALI & GILI",
		tags:[
		    {
		        "classname": "premium",
		        "label": "Combiné"
		    },
		    {
		        "classname": "option",
		        "label": "Petit déjeuner inclus"
		    }
		],
		link: "",
		image: "images/LAGUNA_BEACH.png"
	    },
	    {   id:5,
		country: "Maldives",
		place: "Atoll de Noonu",
		label: "Noku Maldives",
		rating: "★★★★★",
		upto: "Jusqu'à -36%",
		redirect_label: "VERS MALDIVES — ATOLL DE NOONU",
		tags:[
		    {
		        "classname": "premium",
		        "label": "Premium"
		    },
		    {
		        "classname": "option",
		        "label": "Massage offert"
		    }
		],
		link: "",
		image: "images/NOKU_MALDIVES.png"
	    },
	    {   id:6,
		country: "Thaïlande",
		place: "Koh Samui",
		label: "Impiana Resort Samui",
		rating: "★★★★",
		upto: "Jusqu'à -70%",
		redirect_label: "VERS LA THAÏLANDE — KOH SAMUI",
		tags:[
		    {
		        "classname": "premium",
		        "label": "Massage offert"
		    },
		    {
		        "classname": "option",
		        "label": "Surclassement offert"
		    }
		],
		link: "",
		image: "images/IMPIANA_RESORT_SAMUI.png"
	    }
	  ],
	  deuxiemeListe:[
	{   id:1,
		country: "Maurice",
		place: "Grand Baie",
		label: "Clos du Littoral",
		rating: "★★★★",
		upto: "Dès 538€",
		redirect_label: "VERS MAURICE — GRAND BAIE",
		tags:[
		    {
		        "classname": "premium",
		        "label": "Premium"
		    },
		    {
		        "classname": "option",
		        "label": "Villas avec Piscine Privée"
		    }
		],
		link: "",
		image: "images/ENTRE_CULTURE_ET_PLAGES.png"
	    },
	    {  id:2,
		country: "Sri Lanka",
		place: "Sri Lanka",
		label: "Echappée SriLankaise",
		rating: "★★★",
		upto: "Dès 699€",
		redirect_label: "VERS LE SRI LANKA",
		tags:[
		    {
		        "classname": "premium",
		        "label": "Circuit"
		    },
		    {
		        "classname": "option",
		        "label": "Privatif"
		    }
		],
		link: "",
		image: "images/ECHAPEE_SRI_LANKAISE.png"
	    },
	    {   id: 3,
		country: "Vietnam",
		place: "De Hanoï à Hoi An",
		label: "Entre Culture et Plages",
		rating: "★★★★",
		upto: "Dès 779€",
		redirect_label: "VERS LE VIETNAM — DE HANOÏ À HOI AN",
		tags:[
		    {
		        "classname": "premium",
		        "label": "Circuit"
		    },
		    {
		        "classname": "option",
		        "label": "Privatif"
		    }
		],
		link: "",
		image: "images/STHALA_MARC_PATRA.png"
		},
		{
			id: 4,
			country: "Japon",
			place: "Tokyo",
			label: "Grand Arc Hanzomon",
			rating: "★★★",
			upto: "Dès 114€",
			redirect_label: "VERS LE JAPON — GRAND ARC HANZOMON",
			tags:[
				{
					"classname": "premium",
					"label": "City Break"
				},
				{
					"classname": "option",
					"label": "Insolite"
				}
				],
			link: '',
			image: "images/JAPON1.jpg"
		},{
			id: 5,
			country: "FRANCE",
			place: 'Montpellier',
			label: 'CARNON',
			rating: '★★★★★',
			upto: 'Dès 67€',
			redirect_label: 'VERS LA FRANCE — Montpellier',
			tags:[
					{
					"classname": "premium",
					"label": "Premium"
					},
					{
					"classname": "option",
					"label": "SPA  PISCINE INTERIEUR "
					}
				],
			link: '',
			image: "images/p6.png"
		},
		
		
		{   id: 6,
			country: "FRANCE",
			place: 'NICE',
			label: 'Mona Lisa',
			rating: '★★★★★',
			upto: 'Dès 67€',
			redirect_label: 'VERS LA FRANCE — NICE',
			tags:[
					{
					"classname": "premium",
					"label": "Premium"
					},
					{
					"classname": "option",
					"label": "SPA  PISCINE INTERIEUR "
					}
				],
			link: '',
			image: "images/p3.png"
		}
	  ]
    }, 
  
})


// a function that checks whether a div is open closes it if not opens it Doubai
var x = document.getElementById('Maurice1');
var y = document.getElementById('pictures');

function myFunction() {
 	if (x.style.display === 'none'){
		
			x.style.display = 'block';
			
			y.style.display = 'none';
		
		}
		
	else {
		x.style.display = 'none';
		
		y.style.display = 'block';
  }
}
// Doubai


//

