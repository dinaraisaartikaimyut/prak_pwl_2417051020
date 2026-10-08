<?php

namespace Tests\Feature;

use App\Models\Matakuliah;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Str;
use Tests\TestCase;

class MatakuliahTest extends TestCase
{
    use DatabaseTransactions;

    public function test_matakuliah_index_page_loads(): void
    {
        $response = $this->get('/matakuliah');

        $response->assertStatus(200);
        $response->assertSeeText('Daftar Mata Kuliah');
    }

    public function test_matakuliah_can_be_updated_and_deleted_by_uuid(): void
    {
        $matakuliah = Matakuliah::create([
            'kode_matakuliah' => 'PWL-TEST',
            'nama_matakuliah' => 'Pemrograman Web',
            'sks' => 3,
        ]);

        $this->assertTrue(Str::isUuid($matakuliah->id));
        $this->get(route('matakuliah.edit', $matakuliah->id))->assertOk();

        $this->put(route('matakuliah.update', $matakuliah->id), [
            'kode_matakuliah' => 'PWL-UPDATED',
            'nama_matakuliah' => 'Pemrograman Web Lanjut',
            'sks' => 4,
        ])->assertRedirect(route('matakuliah.index'));

        $this->assertDatabaseHas('mata_kuliah', [
            'id' => $matakuliah->id,
            'kode_matakuliah' => 'PWL-UPDATED',
            'nama_matakuliah' => 'Pemrograman Web Lanjut',
            'sks' => 4,
        ]);

        $this->delete(route('matakuliah.destroy', $matakuliah->id))
            ->assertRedirect(route('matakuliah.index'));

        $this->assertDatabaseMissing('mata_kuliah', ['id' => $matakuliah->id]);
    }
}
