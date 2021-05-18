<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create(
            [

                'from_id' => 1,

                //to
                'to_id' => 2,

                //content
                'content' => 'Hola, ¿cómo estás?',
            ]
        );

        Message::create(
            [

                'from_id' => 2,

                //to
                'to_id' => 1,

                //content
                'content' => 'Bien gracias, ¿y tú?',
            ]
        );

        Message::create(
            [

                'from_id' => 2,

                //to
                'to_id' => 1,

                //content
                'content' => 'Bien gracias, ¿y tú?',
            ]
        );

        Message::create(
            [

                'from_id' => 1,

                //to
                'to_id' => 3,

                //content
                'content' => 'Hola, usuario 3',
            ]
        );

        Message::create(
            [

                'from_id' => 3,

                //to
                'to_id' => 1,

                //content
                'content' => 'Hola, Usuario 1',
            ]
        );
    }
}
