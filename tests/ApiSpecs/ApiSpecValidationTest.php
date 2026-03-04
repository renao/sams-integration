<?php

namespace SAMSPlugin\Tests\ApiSpecs;

use PHPUnit\Framework\TestCase;

final class ApiSpecValidationTest extends TestCase {

    private const API_SPECS_DIR = __DIR__ . '/../../api-specs';
    private const EXPECTED_VERSION = '2.1';

    private const EXPECTED_SERVERS = [
        'flvb.sams-server.de',
        'hessen-volley.de',
        'nwvv.sams-server.de',
        'vvb.sams-server.de',
        'vvsa.sams-server.de',
        'wvv.sams-server.de',
        'www.dvv-ligen.de',
        'www.shvv.de',
        'www.ssvb.org',
        'www.tv-v.de',
        'www.vlw-online.de',
        'www.volley-saar.de',
        'www.volleyball-baden.de',
        'www.volleyball-bundesliga.de',
        'www.vvrp.de',
    ];

    /**
     * Test that all expected API spec files exist
     */
    public function testAllExpectedApiSpecFilesExist() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';
            $this->assertFileExists(
                $filePath,
                "API spec file for {$server} version " . self::EXPECTED_VERSION . " should exist"
            );
        }
    }

    /**
     * Test that all API spec files contain valid JSON
     */
    public function testAllApiSpecFilesContainValidJson() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';
            $content = file_get_contents($filePath);

            $this->assertNotFalse($content, "Should be able to read {$filePath}");

            $decoded = json_decode($content, true);
            $this->assertNotNull(
                $decoded,
                "API spec file {$filePath} should contain valid JSON. Error: " . json_last_error_msg()
            );
            $this->assertIsArray($decoded, "Decoded JSON should be an array/object");
        }
    }

    /**
     * Test that all API spec files are valid OpenAPI 3.x specifications
     */
    public function testAllApiSpecFilesAreValidOpenApiSpecs() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';
            $content = file_get_contents($filePath);
            $spec = json_decode($content, true);

            // Check required OpenAPI fields
            $this->assertArrayHasKey(
                'openapi',
                $spec,
                "{$filePath} should have 'openapi' field"
            );
            $this->assertArrayHasKey(
                'info',
                $spec,
                "{$filePath} should have 'info' field"
            );
            $this->assertArrayHasKey(
                'paths',
                $spec,
                "{$filePath} should have 'paths' field"
            );

            // Verify OpenAPI version is 3.x
            $this->assertMatchesRegularExpression(
                '/^3\.\d+\.\d+$/',
                $spec['openapi'],
                "{$filePath} should use OpenAPI version 3.x"
            );
        }
    }

    /**
     * Test that API version in file content matches filename
     */
    public function testApiVersionInFileMatchesFilename() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';
            $content = file_get_contents($filePath);
            $spec = json_decode($content, true);

            $this->assertArrayHasKey(
                'info',
                $spec,
                "{$filePath} should have 'info' field"
            );
            $this->assertArrayHasKey(
                'version',
                $spec['info'],
                "{$filePath} should have 'info.version' field"
            );
            $this->assertEquals(
                self::EXPECTED_VERSION,
                $spec['info']['version'],
                "API version in {$filePath} should match filename"
            );
        }
    }

    /**
     * Test that all API specs have consistent required info fields
     */
    public function testAllApiSpecsHaveConsistentInfoFields() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';
            $content = file_get_contents($filePath);
            $spec = json_decode($content, true);

            $this->assertArrayHasKey(
                'title',
                $spec['info'],
                "{$filePath} should have 'info.title' field"
            );
            $this->assertArrayHasKey(
                'version',
                $spec['info'],
                "{$filePath} should have 'info.version' field"
            );

            $this->assertIsString($spec['info']['title'], "Title should be a string");
            $this->assertNotEmpty($spec['info']['title'], "Title should not be empty");
        }
    }

    /**
     * Test that all API specs have paths defined
     */
    public function testAllApiSpecsHavePathsDefined() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';
            $content = file_get_contents($filePath);
            $spec = json_decode($content, true);

            $this->assertIsArray(
                $spec['paths'],
                "{$filePath} paths should be an array/object"
            );
            $this->assertNotEmpty(
                $spec['paths'],
                "{$filePath} should have at least one path defined"
            );
        }
    }

    /**
     * Test that all API specs have servers defined
     */
    public function testAllApiSpecsHaveServersDefined() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';
            $content = file_get_contents($filePath);
            $spec = json_decode($content, true);

            $this->assertArrayHasKey(
                'servers',
                $spec,
                "{$filePath} should have 'servers' field"
            );
            $this->assertIsArray(
                $spec['servers'],
                "{$filePath} servers should be an array"
            );
            $this->assertNotEmpty(
                $spec['servers'],
                "{$filePath} should have at least one server defined"
            );

            // Check first server has required url field
            $this->assertArrayHasKey(
                'url',
                $spec['servers'][0],
                "{$filePath} first server should have 'url' field"
            );
        }
    }

    /**
     * Test that all API specs have components defined
     */
    public function testAllApiSpecsHaveComponentsDefined() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';
            $content = file_get_contents($filePath);
            $spec = json_decode($content, true);

            $this->assertArrayHasKey(
                'components',
                $spec,
                "{$filePath} should have 'components' field"
            );
            $this->assertIsArray(
                $spec['components'],
                "{$filePath} components should be an array/object"
            );
        }
    }

    /**
     * Test that API spec files are not empty
     */
    public function testApiSpecFilesAreNotEmpty() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';
            $fileSize = filesize($filePath);

            $this->assertGreaterThan(
                100,
                $fileSize,
                "{$filePath} should not be empty (should be > 100 bytes)"
            );
        }
    }

    /**
     * Test that API specs directory structure is correct
     */
    public function testApiSpecsDirectoryStructureIsCorrect() {
        $this->assertDirectoryExists(
            self::API_SPECS_DIR,
            "API specs directory should exist"
        );

        foreach (self::EXPECTED_SERVERS as $server) {
            $serverDir = self::API_SPECS_DIR . '/' . $server;
            $this->assertDirectoryExists(
                $serverDir,
                "Server directory {$serverDir} should exist"
            );
        }
    }

    /**
     * Test that all API specs have SAMS API title
     */
    public function testAllApiSpecsHaveSamsApiTitle() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';
            $content = file_get_contents($filePath);
            $spec = json_decode($content, true);

            $title = $spec['info']['title'];
            $this->assertStringContainsString(
                'SAMS',
                $title,
                "{$filePath} title should contain 'SAMS'"
            );
        }
    }

    /**
     * Test that all API specs are readable and parseable in a single pass
     */
    public function testAllApiSpecsAreCompletelyParseable() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';

            // Test that the entire file can be loaded and parsed without errors
            $content = @file_get_contents($filePath);
            $this->assertNotFalse($content, "Should be able to read {$filePath}");

            json_decode($content, true);
            $jsonError = json_last_error();

            $this->assertEquals(
                JSON_ERROR_NONE,
                $jsonError,
                "JSON in {$filePath} should be completely valid. Error: " . json_last_error_msg()
            );
        }
    }

    /**
     * Test boundary case: Non-existent version file should not exist
     */
    public function testNonExistentVersionFilesDoNotExist() {
        $nonExistentVersion = '999.999';
        $server = self::EXPECTED_SERVERS[0];
        $filePath = self::API_SPECS_DIR . '/' . $server . '/' . $nonExistentVersion . '.json';

        $this->assertFileDoesNotExist(
            $filePath,
            "Non-existent version file should not exist"
        );
    }

    /**
     * Test regression: Ensure each spec has at least one GET endpoint
     * This ensures the API specs are functional and usable
     */
    public function testAllApiSpecsHaveAtLeastOneGetEndpoint() {
        foreach (self::EXPECTED_SERVERS as $server) {
            $filePath = self::API_SPECS_DIR . '/' . $server . '/' . self::EXPECTED_VERSION . '.json';
            $content = file_get_contents($filePath);
            $spec = json_decode($content, true);

            $hasGetEndpoint = false;
            foreach ($spec['paths'] as $path => $methods) {
                if (isset($methods['get'])) {
                    $hasGetEndpoint = true;
                    break;
                }
            }

            $this->assertTrue(
                $hasGetEndpoint,
                "{$filePath} should have at least one GET endpoint defined"
            );
        }
    }
}