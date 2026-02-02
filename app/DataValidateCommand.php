<?php

namespace App;

use DateTimeImmutable;
use Tempest\Console\ConsoleCommand;
use Tempest\Console\HasConsole;

final class DataValidateCommand
{
    use HasConsole;

    #[ConsoleCommand]
    public function __invoke(): void
    {
        $inputPath = __DIR__ . '/../test-data.csv';
        $actualPath = __DIR__ . '/../test-data-actual.json';
        $expectedPath = __DIR__ . '/../test-data-expected.json';

        $this->console->call('data:parse', [$inputPath, $actualPath]);

        $actual = file_get_contents($actualPath);
        $expected = file_get_contents($expectedPath);

        if ($actual !== $expected) {
            $this->console->error("Validation failed! Contents of {$actualPath} did not match {$expectedPath}");
        } else {
            $this->console->success('Validation passed!');
        }
    }
}