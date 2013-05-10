<?php
/**
 * @author    Jacek Wysocki <jacek.wysocki@gmail.com>
 */
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Test2Command extends Command
{
    protected function configure()
    {
        $this
            ->setName('say:nothing')
            ->setDescription('Says nothing');
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("nothing <info>nothing</info> <error>nothing</error>");
    }
}