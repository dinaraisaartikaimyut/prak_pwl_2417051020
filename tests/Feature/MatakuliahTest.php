<?php

namespace Tests\Feature;

use Tests\TestCase;

class MatakuliahTest extends TestCase
{
    public function test_matakuliah_index_page_loads(): void
    {
        $response = $this->get('/matakuliah');

        $response->assertStatus(200);
        $response->assertSeeText('Daftar Mata Kuliah');
    }
}
