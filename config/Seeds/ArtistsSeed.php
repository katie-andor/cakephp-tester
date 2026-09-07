<?php
declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * Artists seed.
 */
class ArtistsSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/5/guides/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            'user_id' => 1,
            'name' => 'Audrey Hobert',
            'bio' => 'Audrey Hobert\'s Bio',
            'album_number' => 1,
            'is_band' => false,
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
        ];

        $table = $this->table('artists');
        $table->insert($data)->save();
    }
}
