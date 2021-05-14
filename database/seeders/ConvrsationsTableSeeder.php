<?php

namespace Database\Seeders;

use App\Models\Conversation;
use Illuminate\Database\Seeder;

class ConvrsationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conversation::create([

            'user_id' => 1,

            //contact
            'contact_id' => 2,

            //last message: content and date
            'last_message' => null,
            'last_time' => null,

            // 'listen_notifications'=>,
            // 'has_blocked'=>,

        ]);

        Conversation::create([

            'user_id' => 2,

            //contact
            'contact_id' => 1,

            //last message: content and date
            'last_message' => null,
            'last_time' => null,

            // 'listen_notifications'=>,
            // 'has_blocked'=>,

        ]);
    }
}
