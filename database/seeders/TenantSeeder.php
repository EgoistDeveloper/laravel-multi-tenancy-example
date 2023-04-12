<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tenant = Tenant::create([
            'name' => 'Multi Tenant Test',
        ]);
        $tenant->domains()->create(['domain' => 'multi-tenant.test']);

        // Tenant::all()->runForEach(function () {
        //     User::factory()->create();
        // });
    }
}
