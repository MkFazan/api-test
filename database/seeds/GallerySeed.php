<?php

use Illuminate\Database\Seeder;

class GallerySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = $this->getData();

        foreach ($images as $img) {
            \App\Gallery::create([
                'img' => $img['img']
            ]);
        }
    }

    public function getData(){
        return [
            [
                "id" => 1,
                "img" => "https://miro.medium.com/max/1000/0*nk9nP4O2uX7kFVYN",
            ],
            [
                "id" => 2,
                "img" => "https://en.es-static.us/upl/2019/02/how-life-began-artist.jpg",
            ],
            [
                "id" => 3,
                "img" => "https://www.wanderlustworker.com/wp-content/uploads/2017/09/everything-happens-for-a-reason.jpg",
            ],
            [
                "id" => 4,
                "img" => "https://images.theconversation.com/files/257890/original/file-20190208-174890-1tn0xbx.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=496&fit=clip",
            ],
            [
                "id" => 5,
                "img" => "https://keshavbhatt.com/wp-content/uploads/2018/09/Keshav-Bhatt-life-coach-Are-You-Living-Your-Best-Life.jpg",
            ],
            [
                "id" => 6,
                "img" => "https://brewminate.com/wp-content/uploads/2016/12/Life06.jpeg",
            ],
            [
                "id" => 7,
                "img" => "https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fcelinnedacosta%2Ffiles%2F2018%2F07%2FScreen-Shot-2018-07-31-at-12.09.30-AM-copy-1200x802.jpg",
            ],
            [
                "id" => 8,
                "img" => "https://images.unsplash.com/photo-1505816014357-96b5ff457e9a?ixlib=rb-1.2.1&w=1000&q=80",
            ],
            [
                "id" => 9,
                "img" => "https://www.success.com/wp-content/uploads/legacy/sites/default/files/main/articles/thewaronfeelings.jpg",
            ],
            [
                "id" => 10,
                "img" => "https://www.sciencealert.com/images/articles/processed/origins_life_earth_1024.jpg",
            ],
            [
                "id" => 12,
                "img" => "https://cdn.technologyreview.com/i/images/nasa-hs201427a-hubbleultradeepfield2014-20140603_0.jpg?sw=959&cx=0&cy=0&cw=2300&ch=1294",
            ],
            [
                "id" => 13,
                "img" => "https://cdn.sunlife.com/static/ph/Insurance/Income%20continuation/Sun%20Smarter%20Life%20Classic/Insurance-Income%20Continuation-Sun%20Smarter%20Life%20Classic.jpg",
            ],
            [
                "id" => 14,
                "img" => "https://www.finerminds.com/wp-content/uploads/2015/09/Inspirational-people.jpg",
            ],
            [
                "id" => 15,
                "img" => "https://images.unsplash.com/photo-1484100356142-db6ab6244067?ixlib=rb-1.2.1&w=1000&q=80",
            ],
            [
                "id" => 16,
                "img" => "https://cdn.lifehack.org/wp-content/uploads/2013/05/26035928/key-to-success.001.jpeg",
            ],
            [
                "id" => 17,
                "img" => "https://image.sciencenordic.com/1445856.jpg?imageId=1445856&width=480&height=274",
            ],
            [
                "id" => 18,
                "img" => "https://cdn.lifehack.org/wp-content/uploads/2014/07/i-don-t-know-what-to-do--1024x697.jpeg",
            ],
            [
                "id" => 19,
                "img" => "http://hpf-happify-marty-prod-user-uploads.happify.com/cms_uploads/en_US/img/happifiers/how-to-find-meaning-of-your-life-1_33bdf91.jpg",
            ],
            [
                "id" => 20,
                "img" => "https://upload.wikimedia.org/wikipedia/commons/0/08/This_is_your_life_title_sequence.jpg",
            ]
        ];
    }
}
