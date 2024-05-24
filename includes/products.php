<?php


// dit is mijn prducten array 
$array = [
    "products" => [
        [
            "id" => "1",
            "title" => "Paard",
            "price" => 12.99,
            "cart" => "CartId1",
            "bio" => "Dit is een heel blij paardje. Hij danst wanneer hij blij is. Geef hem 1 appel per dag en hij is blij.",
            "photos" => [
                "photo1" => "paard.png",
                "photo2" => "2paard.png",
                "photo3" => "3paard.png"
            
            ]
        ],
        [
            "id" => "2",
            "title" => "Kip",
            "price" => 4.99,
            "cart" => "CartId2",
            "bio" => "Deze kip legt zilveren eiren. Alleen als je hem goed behandelt. Geef hem 1 high-five per 6 uur.",
            "photos" => [
                "photo1" => "kip.png",
                "photo2" => "2kip.png",
                "photo3" => "3kip.png"
            ]
        ],
	    [
            "id" => "3",
            "title" => "Koe",
            "price" => 259.99,
            "cart" => "CartId3",
            "bio" => "Deze koe heeft de lekkerste melk in de wereld. Maar hij laat je hem alleen melken als je om de dag een leuke mop zegt.",
            "photos" => [
                "photo1" => "koe.png",
                "photo2" => "2koe.png",
                "photo3" => "3koe.png"
            ]
        ],
	    [
            "id" => "4",
            "title" => "Paard 2",
            "price" => 80.50,
            "cart" => "CartId4",
            "bio" => "Dit is de snelte paard van Europa. Zijn favoriete land is Spanje. Als hij in spanje zit dan rent hij het hardst. Rij een rondje op hem 1 keer per week om hem blij te houden. ",
            "photos" => [
                "photo1" => "paard2.png",
                "photo2" => "2paard2.png",
                "photo3" => "3paard2.png"
            ]
        ],
	    [
            "id" => "5",
            "title" => "Kip 2",
            "price" => 5.99,
            "cart" => "CartId5",
            "bio" => "Deze kip is heel bang voor mensen. Als je dichtbij komt dan vliegt hij weg. Hij vliegt hoger dan de wolken. Hij is niet bang voor je als je de kippendans doet elke keer wanneer je hem ziet. ",
            "photos" => [
                "photo1" => "kip2.png",
                "photo2" => "2kip2.png",
                "photo3" => "3kip2.png"
            ]
        ],
	    [
            "id" => "6",
            "title" => "Kip 3",
            "price" => 5.50,
            "cart" => "CartId6",
            "bio" => "Dit is een hele lekkere kip. Maar als je hem op eet dan word je verkouden",
            "photos" => [
                "photo1" => "kip3.png",
                "photo2" => "2kip3.png",
                "photo3" => "3kip3.png"
            ]
        ],
	    [
            "id" => "7",
            "title" => "Kikker",
            "price" => 2.99,
            "cart" => "CartId7",
            "bio" => "Deze kikker kan heel hoog springen. Om precies te zijn 5 meter hoog.",
            "photos" => [
                "photo1" => "kikker.png",
                "photo2" => "2kikker.png",
                "photo3" => "3kikker.png"
            ]
        ],
	    [
            "id" => "8",
            "title" => "Vogel",
            "price" => 10.00,
            "cart" => "CartId8",
            "bio" => "Dit is een 3 jaar oude vogel. Hij is wel heel aardig. Voer 1 keer per dag een leuk gesprekje met hem",
            "photos" => [
                "photo1" => "vogel.png",
                "photo2" => "2vogel.png",
                "photo3" => "3vogel.png"
            ]
        ],
	    [
            "id" => "9",
            "title" => "Vogel 2",
            "price" => 315.00,
            "cart" => "CartId9",
            "bio" => "Deze vogel is heel boos. Ze noemen hem ook wel de Angry Bird. Hij houdt niet van groene slechte varkens. ",
            "photos" => [
                "photo1" => "vogel2.png",
                "photo2" => "2vogel2.png",
                "photo3" => "3vogel2.png"
            ]
        ],
	    [
            "id" => "10",
            "title" => "Vogel 3",
            "price" => 13.50,
            "cart" => "CartId10",
            "bio" => "Deze vogel is heel erg oud. 20 Jaar om precies te zijn. Ze houdt van slapen",
            "photos" => [
                "photo1" => "vogel3.png",
                "photo2" => "2vogel3.png",
                "photo3" => "3vogel3.png"
            ]
        ],
	    [
            "id" => "11",
            "title" => "Kat",
            "price" => 20.00,
            "cart" => "CartId11",
            "bio" => "Deze kat kan er aardig uit zien maar dat is ze niet. Ze houdt neit van mensen en vooral niet van honden. Als je haar een slaapliedje zingt dat valt ze in slaap",
            "photos" => [
                "photo1" => "kat.png",
                "photo2" => "2kat.png",
                "photo3" => "3kat.png"
            ]
        ],
	    [
            "id" => "12",
            "title" => "Hond",
            "price" => 35.00,
            "cart" => "CartId12",
            "bio" => "Deze hond is niet een normale hond. Dit is een bescherm hond. Hij beschermt je tegen alle negatieve energie.",
            "photos" => [
                "photo1" => "hond.png",
                "photo2" => "2hond.png",
                "photo3" => "3hond.png"
            ]
        ],
	    [
            "id" => "13",
            "title" => "Hond 2",
            "price" => 55.00,
            "cart" => "CartId13",
            "bio" => "Deze hond poept veel. Geef hem een luier en verschoon hem om de dag.",
            "photos" => [
                "photo1" => "hond2.png",
                "photo2" => "2hond2.png",
                "photo3" => "3hond2.png"
            ]
        ],
	    [
            "id" => "14",
            "title" => "Hond 3",
            "price" => 49.99,
            "cart" => "CartId14",
            "bio" => "Dit is een hond gemaakt van ijs. Het ziet er heel erg echt uit maar dat is hij niet. Zet het in een koelkast zodat het niet smelt ",
            "photos" => [
                "photo1" => "hond3.png",
                "photo2" => "2hond3.png",
                "photo3" => "3hond3.png"
            ]
        ],
	    [
            "id" => "15",
            "title" => "Hond 4",
            "price" => 999.99,
            "cart" => "CartId15",
            "bio" => "Deze hond is heel goed in muziek maken. Hij heeft heel veel fans.",
            "photos" => [
                "photo1" => "hond4.png",
                "photo2" => "2hond4.png",
                "photo3" => "3hond4.png"
            ]
        ],
	    [
            "id" => "16",
            "title" => "Varken",
            "price" => 150.00,
            "cart" => "CartId16",
            "bio" => "Dit is een varken. Hij houdt van rollen in modder. Hij houdt heel erg van aardappelen dus geef hem 10 er per dag.",
            "photos" => [
                "photo1" => "varken.png",
                "photo2" => "2varken.png",
                "photo3" => "3varken.png"
            ]
        ],
	    [
            "id" => "17",
            "title" => "Ei",
            "price" => 100.00,
            "cart" => "CartId17",
            "bio" => "Dit is een ei. Niemand weet wat hier in zit.",
            "photos" => [
                "photo1" => "ei.png",
                "photo2" => "2ei.png",
                "photo3" => "3ei.png"
            ]
        ],
	    [
            "id" => "18",
            "title" => "Worm",
            "price" => 0.50,
            "cart" => "CartId18",
            "bio" => "Dit is een worm. Hij is gevonden door Freek Fonk hemzelf. Hij komt uit Noord-Afrika.",
            "photos" => [
                "photo1" => "worm.png",
                "photo2" => "2worm.png",
                "photo3" => "3worm.png"
            ]
        ],
	    [
            "id" => "19",
            "title" => "Olifant",
            "price" => 249.99,
            "cart" => "CartId19",
            "bio" => "Deze olifant is heel aardig. Je kan hem gebruiken als douche want hij houdt van water op mensen spuiten.",
            "photos" => [
                "photo1" => "olifant.png",
                "photo2" => "2olifant.png",
                "photo3" => "3olifant.png"
            ]
        ],
	    [
            "id" => "20",
            "title" => "Giraffe",
            "price" => 777.77,
            "cart" => "CartId20",
            "bio" => "Dit is een Giraffe. Hij is 7 jaar oud. Zet hem op een plek waar 7 bomen zijn. Hij houdt van bomen.",
            "photos" => [
                "photo1" => "giraffe.png",
                "photo2" => "2giraffe.png",
                "photo3" => "3giraffe.png"
            ]
        ]
    ],
	   "navigation" => [
        [
            "title" => "Home",
            "url" => "/"
        ],
        [
            "title" => "Producten",
            "url" => "/producten"
        ],
        [
            "title" => "Contact",
            "url" => "/contact"
        ]
    ]
];





?>


