<?php

namespace Ecg\MagentoFinder;

use Symfony\Component\Console\Application as SimfonyApplication,
    Symfony\Component\Console\Input\InputInterface;

class Application extends SimfonyApplication
{
    protected function getCommandName(InputInterface $input)
    {
        return 'magento-finder';
    }

    protected function getDefaultCommands()
    {
        $defaultCommands = parent::getDefaultCommands();
        $defaultCommands[] = new Command();
        return $defaultCommands;
    }

    public function getDefinition()
    {
        $inputDefinition = parent::getDefinition();
        $inputDefinition->setArguments();
        return $inputDefinition;
    }
}
