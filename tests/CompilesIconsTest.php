<?php

declare(strict_types=1);

namespace Tests;

use dobron\BladeMaterialSymbols\BladeGoogleMaterialDesignSymbols700ServiceProvider;
use Orchestra\Testbench\TestCase;
use BladeUI\Icons\BladeIconsServiceProvider;
use Spatie\Snapshots\MatchesSnapshots;

class CompilesIconsTest extends TestCase
{
    use MatchesSnapshots;

    /**
     * Declared to satisfy older testbench/Laravel versions that reference this
     * static property from MakesHttpRequests without always declaring it first,
     * which causes "Access to undeclared static property" on PHP 8.3+.
     */
    public static $latestResponse;

    public function testIconCanBeCompiled()
    {
        $result = svg('gms:700-fact_check-fill-outlined')->toHtml();
        $this->assertMatchesXmlSnapshot($result);
    }

    public function testIconContainsClasses()
    {
        $result = svg('gms:700-done_outline-fill-outlined', 'w-6 h-6 text-gray-500')->toHtml();
        $this->assertMatchesXmlSnapshot($result);
    }

    public function testIconContainsStyles()
    {
        $result = svg('gms:700-wb_sunny-fill-sharp', ['style' => 'color: #555'])->toHtml();
        $this->assertMatchesXmlSnapshot($result);
    }

    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            BladeGoogleMaterialDesignSymbols700ServiceProvider::class,
        ];
    }
}
