The ```pinfo-php``` command prints out useful information about your system’s PHP environment and dependencies. This includes things such as your PHP, Composer, OS version, and arch. If submitting an issue on Github, pasting the output of this command can help others diagnose the issue more quickly.

## Installation / Usage

``` bash
# install
composer global require olavocneto/pinfo-php

# use
pinfo-php

# output
Your system information:

PHP Version: 7.0.11
Composer Version: Composer version 1.3.2 2017-01-27 18:23:41
OS: Linux 4.4.0-38-generic
Arch: x86_64

```

## Build Setup

``` bash
# install dependencies
composer install -o
```

## Acknowledgments
- https://github.com/composer/composer
- https://github.com/driftyco/ionic-cli