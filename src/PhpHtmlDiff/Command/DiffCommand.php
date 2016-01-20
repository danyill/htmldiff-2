<?php
namespace PhpHtmlDiff\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

require dirname(__DIR__) . "/lib/html_diff.php";

/**
 * Class PhpHtmlDiffCommand
 * @package PhpHtmlDiff\Command
 *
 * Computes the Diff between two HTML Files
 */
class DiffCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('diff')
            ->setDescription('Compute Diff')
            ->addArgument(
                'pathSource',
                InputArgument::REQUIRED,
                'What source file do you want to use?'
            )
            ->addArgument(
                'pathCompare',
                InputArgument::REQUIRED,
                'What file do you want to compare with?'
            );
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
        $output->writeln(
            '<head><style>'
            . file_get_contents(dirname(dirname(dirname(__DIR__))) . '/res/css/diff.css')
            . '</style></head>');
        $sourceFile = $input->getArgument('pathSource');
        $targetFile = $input->getArgument('pathCompare');
        $sourceCode = explode("\n", file_get_contents($sourceFile));
        $targetCode = explode("\n", file_get_contents($targetFile));
        array_shift($sourceCode);
        array_shift($targetCode);
        $output->write(html_entity_decode(html_diff(htmlentities(join("\n", $sourceCode)),
            htmlentities(join("\n", $targetCode)))));
    }
}