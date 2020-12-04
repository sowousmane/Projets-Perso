
var x = document.getElementById("caroussel1");
var y = document.getElementById("welcome1");
var app = new Vue ({
    el:'#app',
    data: {
        courses:  'Vue.js',
        image:'./CV_fullstack_SOW.jpg',
        CVvisible: false,
        CvVis: false,
        /*alt:'It\'s not as visible as clicking in the link below '*/
    
        CvOrCoverLetter:[
            { 
                id:1,
                image:'./CV_fullstack_SOW.jpg',
                typeFile: 'CV'
            },
            {
                id:2,
                image:'./LM_fullstack_Sow.jpg',
                typeFile: 'cover letter'
            }
        ],
        todos: [
            { text: 'C/C++' },
            { text: 'JAVA' },
            { text: 'UML' },
            { text: 'OCAML' },
            { text: 'Complexité' },
            { text: 'SHELL' },
            { text: 'LC3' }
        ],
        Lang: [
            { LangWeb: 'HTML 5' },
            { LangWeb: 'CSS/JSON' },
            { LangWeb: 'PHP' },
            { LangWeb: 'Vue.js/Node.js' },
            { LangWeb: 'multimédia' },
            { LangWeb: 'Angular 8' }
        ],
        BaseDeDonnee:[
            { DB: 'Oracle' },
            { DB: 'Access' },
            { DB: 'Mysql' },
            { DB: 'PlSql' },
            { DB: 'MongoDb' },
            { DB: 'MAriaDb' }
        ],
        Reseau:[
            { rsx: 'Reseau TCP/IP' },
            { rsx: 'Système et réseau' },
            { rsx: 'Administration système' }
          ],
        Api:[
            { API: 'Bootstrap' },
            { API: 'Laravel' }
          ],
         
        cms:[
            { CMS: 'WordPress' }
        ]
    }, 
    methods: {
    
        ShowMeCap:function(){
          if(this.CVvisible===true)  
            this.CVvisible=false
          else
            this.CVvisible=false
           
        }
    }
})
// an function that check if our CV is hidden then give use the choice
// to show the CV else that give use the possibilitie to go to the home
/* 
function myFunction() {
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } 
  else {
    x.style.display = "none";
    y.style.display = "block";
  }
} */
