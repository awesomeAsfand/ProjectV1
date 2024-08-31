<?php

namespace App\Providers\Filament;

use DutchCodingCompany\FilamentSocialite\FilamentSocialitePlugin;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use DutchCodingCompany\FilamentSocialite\Provider;
use Filament\Support\Colors;
use Laravel\Socialite\Contracts\User as SocialiteUserContract;
use Illuminate\Contracts\Auth\Authenticatable;
class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('app')
            ->path('/')
            ->login()
            ->registration()
            ->colors([
                'primary' => Color::Violet,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])->plugin(
                FilamentSocialitePlugin::make()
                    ->providers([
                        Provider::make('Google')
                            ->label('Google')
//                            ->icon('fab-gitlab')
                            ->color(Color::hex('#0F9D58'))
                            ->outlined(false)
                            ->stateless(false)
                            ->scopes(['...'])
                            ->with(['...']),
                        Provider::make('facebook')
                            ->label('Facebook')
//                            ->icon('fab-gitlab')
                            ->color(Color::hex('#0165E1'))
                            ->outlined(false)
                            ->stateless(false)
                            ->scopes(['...'])
                            ->with(['...']),
                    ])
//                    // (optional) Override the panel slug to be used in the oauth routes. Defaults to the panel ID.
//                    ->slug('admin')
//                    // (optional) Enable/disable registration of new (socialite-) users.
//                    ->registration(true)
//                    // (optional) Enable/disable registration of new (socialite-) users using a callback.
//                    // In this example, a login flow can only continue if there exists a user (Authenticatable) already.
//                    ->registration(fn (string $provider, SocialiteUserContract $oauthUser, ?Authenticatable $user) => (bool) $user)
//                    // (optional) Change the associated model class.
//                    ->userModelClass(\App\Models\User::class)
//                    // (optional) Change the associated socialite class (see below).
//                    ->socialiteUserModelClass(\App\Models\SocialiteUser::class)
            );
    }
}
