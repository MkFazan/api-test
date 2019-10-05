<?php

use Illuminate\Database\Seeder;

class ProfileSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profilles = $this->getData();

        foreach ($profilles as $prof){
            \App\Profile::create([
                'name' => $prof['name'],
                'username' => $prof['username'],
                'img' => $prof['img'],
                'email' => $prof['email'],
                'address' => json_encode($prof['address']),
                'phone' => $prof['phone'],
                'website' => $prof['website'],
                'company' => json_encode($prof['company']),
            ]);
        }
    }

    public function getData(){
        return [
            [
                "id" => 1,
                "name" => "Leanne Graham",
                "username" => "Bret",
                "img" =>"https =>//qph.fs.quoracdn.net/main-qimg-8c5ea2930025b21f9a394cf0a3b95759",
                "email" => "Sincere@april.biz",
                "address" => [
                    "street" => "Kulas Light",
                    "suite" => "Apt. 556",
                    "city" => "Gwenborough",
                    "zipcode" => "92998-3874",
                    "geo" => [
                        "lat" => "-37.3159",
                        "lng" => "81.1496"
                    ]
                ],
                "phone" => "1-770-736-8031 x56442",
                "website" => "hildegard.org",
                "company" => [
                    "name" => "Romaguera-Crona",
                    "catchPhrase" => "Multi-layered client-server neural-net",
                    "bs" => "harness real-time e-markets"
                ]
            ],
            [
                "id" => 2,
                "name" => "Ervin Howell",
                "username" => "Antonette",
                "img" =>"https =>//amp.businessinsider.com/images/5d4ae5ea100a2411da63051d-750-562.jpg",
                "email" => "Shanna@melissa.tv",
                "address" => [
                    "street" => "Victor Plains",
                    "suite" => "Suite 879",
                    "city" => "Wisokyburgh",
                    "zipcode" => "90566-7771",
                    "geo" => [
                        "lat" => "-43.9509",
                        "lng" => "-34.4618"
                    ]
                ],
                "phone" => "010-692-6593 x09125",
                "website" => "anastasia.net",
                "company" => [
                    "name" => "Deckow-Crist",
                    "catchPhrase" => "Proactive didactic contingency",
                    "bs" => "synergize scalable supply-chains"
                ]
            ],
            [
                "id" => 3,
                "name" => "Clementine Bauch",
                "img" =>"https =>//img.freepik.com/free-psd/young-hispanic-brunette-woman-looking-up-while-smiling_1368-41150.jpg?size=626&ext=jpg",
                "username" => "Samantha",
                "email" => "Nathan@yesenia.net",
                "address" => [
                    "street" => "Douglas Extension",
                    "suite" => "Suite 847",
                    "city" => "McKenziehaven",
                    "zipcode" => "59590-4157",
                    "geo" => [
                        "lat" => "-68.6102",
                        "lng" => "-47.0653"
                    ]
                ],
                "phone" => "1-463-123-4447",
                "website" => "ramiro.info",
                "company" => [
                    "name" => "Romaguera-Jacobson",
                    "catchPhrase" => "Face to face bifurcated interface",
                    "bs" => "e-enable strategic applications"
                ]
            ],
            [
                "id" => 4,
                "name" => "Patricia Lebsack",
                "img" =>"https =>//encrypted-tbn0.gstatic.com/images?q=tbn =>ANd9GcQh53xZwvZMDriR8wwhS5eKFFsNFA0DusgzXN59EPtyd-22ypA3YQ",
                "username" => "Karianne",
                "email" => "Julianne.OConner@kory.org",
                "address" => [
                    "street" => "Hoeger Mall",
                    "suite" => "Apt. 692",
                    "city" => "South Elvis",
                    "zipcode" => "53919-4257",
                    "geo" => [
                        "lat" => "29.4572",
                        "lng" => "-164.2990"
                    ]
                ],
                "phone" => "493-170-9623 x156",
                "website" => "kale.biz",
                "company" => [
                    "name" => "Robel-Corkery",
                    "catchPhrase" => "Multi-tiered zero tolerance productivity",
                    "bs" => "transition cutting-edge web services"
                ]
            ],
            [
                "id" => 5,
                "name" => "Chelsey Dietrich",
                "img" =>"https =>//image.shutterstock.com/image-photo/portrait-young-beautiful-cute-cheerful-260nw-666258808.jpg",
                "username" => "Kamren",
                "email" => "Lucio_Hettinger@annie.ca",
                "address" => [
                    "street" => "Skiles Walks",
                    "suite" => "Suite 351",
                    "city" => "Roscoeview",
                    "zipcode" => "33263",
                    "geo" => [
                        "lat" => "-31.8129",
                        "lng" => "62.5342"
                    ]
                ],
                "phone" => "(254)954-1289",
                "website" => "demarco.info",
                "company" => [
                    "name" => "Keebler LLC",
                    "catchPhrase" => "User-centric fault-tolerant solution",
                    "bs" => "revolutionize end-to-end systems"
                ]
            ],
            [
                "id" => 6,
                "name" => "Mrs. Dennis Schulist",
                "img" =>"https =>//ca-times.brightspotcdn.com/dims4/default/f68293b/2147483647/strip/true/crop/2048x1152+0+0/resize/840x473!/quality/90/?url=https%3A%2F%2Fca-times.brightspotcdn.com%2Fca%2Fe1%2F1cce3965c9a2b4f20aed93bd0b90%2Fla-1560957011-xf3aqvrdf1-snap-image",
                "username" => "Leopoldo_Corkery",
                "email" => "Karley_Dach@jasper.info",
                "address" => [
                    "street" => "Norberto Crossing",
                    "suite" => "Apt. 950",
                    "city" => "South Christy",
                    "zipcode" => "23505-1337",
                    "geo" => [
                        "lat" => "-71.4197",
                        "lng" => "71.7478"
                    ]
                ],
                "phone" => "1-477-935-8478 x6430",
                "website" => "ola.org",
                "company" => [
                    "name" => "Considine-Lockman",
                    "catchPhrase" => "Synchronised bottom-line interface",
                    "bs" => "e-enable innovative applications"
                ]
            ],
            [
                "id" => 7,
                "name" => "Kurtis Weissnat",
                "img" =>"https =>//www.biography.com/.image/ar_8 =>10%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cg_faces =>center%2Cq_auto =>good%2Cw_620/MTU0OTkwNDUxOTQ5MDUzNDQ3/kanye-west-attends-the-christian-dior-show-as-part-of-the-paris-fashion-week-womenswear-fall-winter-2015-2016-on-march-6-2015-in-paris-france-photo-by-dominique-charriau-wireimage-square.jpg",
                "username" => "Elwyn.Skiles",
                "email" => "Telly.Hoeger@billy.biz",
                "address" => [
                    "street" => "Rex Trail",
                    "suite" => "Suite 280",
                    "city" => "Howemouth",
                    "zipcode" => "58804-1099",
                    "geo" => [
                        "lat" => "24.8918",
                        "lng" => "21.8984"
                    ]
                ],
                "phone" => "210.067.6132",
                "website" => "elvis.io",
                "company" => [
                    "name" => "Johns Group",
                    "catchPhrase" => "Configurable multimedia task-force",
                    "bs" => "generate enterprise e-tailers"
                ]
            ],
            [
                "id" => 8,
                "name" => "Nicholas Runolfsdottir V",
                "img" =>"https =>//static.imoney.ph/articles/wp-content/uploads/2018/08/entrepreneur-e1534096180395.jpg",
                "username" => "Maxime_Nienow",
                "email" => "Sherwood@rosamond.me",
                "address" => [
                    "street" => "Ellsworth Summit",
                    "suite" => "Suite 729",
                    "city" => "Aliyaview",
                    "zipcode" => "45169",
                    "geo" => [
                        "lat" => "-14.3990",
                        "lng" => "-120.7677"
                    ]
                ],
                "phone" => "586.493.6943 x140",
                "website" => "jacynthe.com",
                "company" => [
                    "name" => "Abernathy Group",
                    "catchPhrase" => "Implemented secondary concept",
                    "bs" => "e-enable extensible e-tailers"
                ]
            ],
            [
                "id" => 9,
                "name" => "Glenna Reichert",
                "img" =>"https =>//image.shutterstock.com/image-photo/pretty-smiling-joyfully-female-fair-260nw-776697943.jpg",
                "username" => "Delphine",
                "email" => "Chaim_McDermott@dana.io",
                "address" => [
                    "street" => "Dayna Park",
                    "suite" => "Suite 449",
                    "city" => "Bartholomebury",
                    "zipcode" => "76495-3109",
                    "geo" => [
                        "lat" => "24.6463",
                        "lng" => "-168.8889"
                    ]
                ],
                "phone" => "(775)976-6794 x41206",
                "website" => "conrad.com",
                "company" => [
                    "name" => "Yost and Sons",
                    "catchPhrase" => "Switchable contextually-based project",
                    "bs" => "aggregate real-time technologies"
                ]
            ],
            [
                "id" => 10,
                "name" => "Clementina DuBuque",
                "img" =>"https =>//image.shutterstock.com/image-photo/horizontal-portrait-pleasantlooking-caucasian-female-260nw-696230005.jpg",
                "username" => "Moriah.Stanton",
                "email" => "Rey.Padberg@karina.biz",
                "address" => [
                    "street" => "Kattie Turnpike",
                    "suite" => "Suite 198",
                    "city" => "Lebsackbury",
                    "zipcode" => "31428-2261",
                    "geo" => [
                        "lat" => "-38.2386",
                        "lng" => "57.2232"
                    ]
                ],
                "phone" => "024-648-3804",
                "website" => "ambrose.net",
                "company" => [
                    "name" => "Hoeger LLC",
                    "catchPhrase" => "Centralized empowering task-force",
                    "bs" => "target end-to-end models"
                ]
            ]
        ];
    }
}
