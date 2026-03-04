<?php

namespace SAMSPlugin\Tests\Scripts;

use PHPUnit\Framework\TestCase;

final class DownloadApiSpecsTest extends TestCase {

    private const SCRIPT_PATH = __DIR__ . '/../../download-api-specs.sh';
    private const API_SPECS_DIR = __DIR__ . '/../../api-specs';

    private const EXPECTED_BASE_URLS = [
        'https://www.volleyball-bundesliga.de',
        'https://www.dvv-ligen.de',
        'https://www.shvv.de',
        'https://www.vvrp.de',
        'https://www.volleyball-baden.de',
        'https://www.ssvb.org',
        'https://nwvv.sams-server.de',
        'https://www.tv-v.de',
        'https://www.vlw-online.de',
        'https://hessen-volley.de',
        'https://www.volley-saar.de',
        'https://vvb.sams-server.de',
        'https://vvsa.sams-server.de',
        'https://wvv.sams-server.de',
        'https://flvb.sams-server.de',
    ];

    /**
     * Test that the download script file exists
     */
    public function testDownloadScriptExists() {
        $this->assertFileExists(
            self::SCRIPT_PATH,
            'download-api-specs.sh script should exist'
        );
    }

    /**
     * Test that the download script is executable or readable
     */
    public function testDownloadScriptIsReadable() {
        $this->assertFileIsReadable(
            self::SCRIPT_PATH,
            'download-api-specs.sh script should be readable'
        );
    }

    /**
     * Test that the download script contains expected base URLs
     */
    public function testDownloadScriptContainsExpectedBaseUrls() {
        $content = file_get_contents(self::SCRIPT_PATH);

        foreach (self::EXPECTED_BASE_URLS as $url) {
            $this->assertStringContainsString(
                $url,
                $content,
                "Script should contain URL: {$url}"
            );
        }
    }

    /**
     * Test that the download script uses correct API endpoint
     */
    public function testDownloadScriptUsesCorrectApiEndpoint() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertStringContainsString(
            '/api/v2/swagger.json',
            $content,
            'Script should use /api/v2/swagger.json endpoint'
        );
    }

    /**
     * Test that the download script uses curl for HTTP requests
     */
    public function testDownloadScriptUsesCurl() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertStringContainsString(
            'curl',
            $content,
            'Script should use curl for downloading'
        );
    }

    /**
     * Test that the download script uses jq for JSON parsing
     */
    public function testDownloadScriptUsesJqForJsonParsing() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertStringContainsString(
            'jq',
            $content,
            'Script should use jq for JSON parsing'
        );
    }

    /**
     * Test that the download script extracts API version from JSON
     */
    public function testDownloadScriptExtractsApiVersion() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertStringContainsString(
            '.info.version',
            $content,
            'Script should extract .info.version from JSON'
        );
    }

    /**
     * Test that the download script creates directory structure
     */
    public function testDownloadScriptCreatesDirectoryStructure() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertStringContainsString(
            'mkdir',
            $content,
            'Script should create directories with mkdir'
        );
    }

    /**
     * Test that the download script saves to api-specs directory
     */
    public function testDownloadScriptSavesToApiSpecsDirectory() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertStringContainsString(
            'api-specs',
            $content,
            'Script should save files to api-specs directory'
        );
    }

    /**
     * Test that the download script has proper error handling for empty content
     */
    public function testDownloadScriptHasErrorHandlingForEmptyContent() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertMatchesRegularExpression(
            '/if.*-z.*content/i',
            $content,
            'Script should check for empty content'
        );
    }

    /**
     * Test that the download script uses a loop to process URLs
     */
    public function testDownloadScriptUsesLoopToProcessUrls() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertStringContainsString(
            'for url in',
            $content,
            'Script should use a for loop to process URLs'
        );
    }

    /**
     * Test that the download script has a base_urls array
     */
    public function testDownloadScriptHasBaseUrlsArray() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertStringContainsString(
            'base_urls=(',
            $content,
            'Script should define base_urls array'
        );
    }

    /**
     * Test that the script removes protocol from URL for directory naming
     */
    public function testDownloadScriptRemovesProtocolFromUrlForDirectoryNaming() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertMatchesRegularExpression(
            '/sed.*https/',
            $content,
            'Script should remove https:// from URLs for directory naming'
        );
    }

    /**
     * Test that all expected base URLs count matches script content
     */
    public function testAllExpectedBaseUrlsArePresentInScript() {
        $content = file_get_contents(self::SCRIPT_PATH);
        $foundCount = 0;

        foreach (self::EXPECTED_BASE_URLS as $url) {
            if (strpos($content, $url) !== false) {
                $foundCount++;
            }
        }

        $this->assertEquals(
            count(self::EXPECTED_BASE_URLS),
            $foundCount,
            'All ' . count(self::EXPECTED_BASE_URLS) . ' expected base URLs should be present in script'
        );
    }

    /**
     * Test that the script is a bash script (has shebang or bash commands)
     */
    public function testDownloadScriptIsBashScript() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $hasBashElements =
            strpos($content, 'base_urls=(') !== false &&
            strpos($content, 'for ') !== false &&
            strpos($content, 'done') !== false;

        $this->assertTrue(
            $hasBashElements,
            'Script should be a valid bash script with arrays and loops'
        );
    }

    /**
     * Test regression: Script should handle continuation on error
     */
    public function testDownloadScriptContinuesOnError() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertStringContainsString(
            'continue',
            $content,
            'Script should use continue to skip failed downloads and proceed with others'
        );
    }

    /**
     * Test that script generates appropriate filenames based on version
     */
    public function testDownloadScriptGeneratesVersionBasedFilenames() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertMatchesRegularExpression(
            '/\$\{?api_version\}?\.json/',
            $content,
            'Script should generate filenames like ${api_version}.json'
        );
    }

    /**
     * Test boundary case: Script should not contain hardcoded version numbers
     * This ensures the script is version-agnostic and works with any API version
     */
    public function testDownloadScriptDoesNotHardcodeVersionNumbers() {
        $content = file_get_contents(self::SCRIPT_PATH);

        // Remove the base_urls array section which legitimately contains URLs
        $contentWithoutUrls = preg_replace('/base_urls=\([^)]+\)/', '', $content);

        // Check that version numbers like "2.1" are not hardcoded in the logic
        $this->assertStringNotContainsString(
            '/2.1.json',
            $contentWithoutUrls,
            'Script should not hardcode version numbers like 2.1 in paths'
        );
    }

    /**
     * Test that the API specs directory exists (created by the script)
     */
    public function testApiSpecsDirectoryExists() {
        $this->assertDirectoryExists(
            self::API_SPECS_DIR,
            'api-specs directory should exist'
        );
    }

    /**
     * Test edge case: Script should use silent mode for curl (-s flag)
     */
    public function testDownloadScriptUsesSilentCurl() {
        $content = file_get_contents(self::SCRIPT_PATH);

        $this->assertMatchesRegularExpression(
            '/curl\s+-s/',
            $content,
            'Script should use curl with -s (silent) flag'
        );
    }
}