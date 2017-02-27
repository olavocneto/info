<?php

namespace Info\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InfoCommand extends Command
{

  protected function configure()
  {
    $this
      ->setName('i')
      ->setDescription('List information about the users runtime environment')
      ->setHelp(<<<EOT
<info>php composer.phar about</info>
EOT
      )
    ;
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $phpVersion = phpversion();
    $composer   = rtrim(shell_exec('composer --version'));
    $os         = php_uname('s');
    $release    = php_uname('r');
    $arch       = php_uname('m');

    $output->write(<<<EOT
<info>Your system information:</info>

PHP Version: {$phpVersion}
Composer Version: {$composer}
OS: $os $release
Arch: $arch


EOT
    );
  }
}