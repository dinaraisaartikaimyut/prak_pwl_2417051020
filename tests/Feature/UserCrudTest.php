<?php

namespace Tests\Feature;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Str;
use Tests\TestCase;

class UserCrudTest extends TestCase
{
    use DatabaseTransactions;

    public function test_user_can_be_updated_and_deleted_by_uuid(): void
    {
        $kelas = Kelas::create(['nama_kelas' => 'PWL Test']);
        $user = UserModel::create([
            'nama' => 'Pengguna Test',
            'nim' => '2417051000',
            'kelas_id' => $kelas->id,
        ]);

        $this->assertTrue(Str::isUuid($user->id));
        $this->get(route('user.edit', $user->id))->assertOk();

        $this->put(route('user.update', $user->id), [
            'nama' => 'Pengguna Diperbarui',
            'npm' => '2417051001',
            'kelas_id' => $kelas->id,
        ])->assertRedirect(route('user.index'));

        $this->assertDatabaseHas('user', [
            'id' => $user->id,
            'nama' => 'Pengguna Diperbarui',
            'nim' => '2417051001',
            'kelas_id' => $kelas->id,
        ]);

        $this->delete(route('user.destroy', $user->id))
            ->assertRedirect(route('user.index'));

        $this->assertDatabaseMissing('user', ['id' => $user->id]);
    }
}
