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
        $output->writeln('<info>PHP HTML Diff</info>');
        $sourceFile = $input->getArgument('pathSource');
        $targetFile = $input->getArgument('pathCompare');
        $output->write(html_diff(file_get_contents($sourceFile), file_get_contents($targetFile)));
    }
}