<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Mahasiswa;
use App\Models\Pengaduan;
use App\Models\Petugas;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define("admin", fn (Petugas $petugas) => $petugas->level === "admin");
        Gate::define("pengaduan_mahasiswa", fn (Mahasiswa $mahasiswa, Pengaduan $pengaduan) => $mahasiswa->id === $pengaduan->id_mahasiswa);
    }
}
