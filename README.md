[![License](https://poser.pugx.org/timitao/behatdbalextension/license.svg)](https://packagist.org/packages/timitao/behatdbalextension)
[![Latest Stable Version](https://poser.pugx.org/timitao/behatdbalextension/v/stable.svg)](https://packagist.org/packages/timitao/behatdbalextension)
[![Latest Unstable Version](https://poser.pugx.org/timitao/behatdbalextension/v/unstable.svg)](https://packagist.org/packages/timitao/behatdbalextension) 
[![Total Downloads](https://poser.pugx.org/timitao/behatdbalextension/downloads.svg)](https://packagist.org/packages/timitao/behatdbalextension)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/31b5fdd5-a66a-4f71-b9e0-b517694a3cbf/mini.png)](https://insight.sensiolabs.com/projects/31b5fdd5-a66a-4f71-b9e0-b517694a3cbf)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/timitao/behatdbalextension/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/timitao/behatdbalextension/?branch=master)
[![Build Status](https://travis-ci.org/timiTao/BehatDbalExtension.svg?branch=master)](https://travis-ci.org/timiTao/BehatDbalExtension)

Behat Dbal Extension
==============

[![Join the chat at https://gitter.im/cherrytech/BehatDbalExtension](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/cherrytech/BehatDbalExtension?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

## Installing extension

The easiest way to install is by using [Composer](https://getcomposer.org):

```bash
$> curl -sS https://getcomposer.org/installer | php
$> php composer.phar require timitao/behatdbalextension='*'
```

or composer.json

    "require": {
        "timitao/behatdbalextension": "*"
    },
    
## Configuration

Check file [behat.yml.dist](https://github.com/timiTao/BehatDbalExtension/blob/master/behat.yml.dist) for full configuration

Is is standard for [DBAL connection](http://symfony.com/doc/current/cookbook/doctrine/dbal.html)

Additional options:
* ``default_connection_alias`` - select default connection from collection. Default value: ``default``
* ``connections`` - collection of connection

## Examples

Look at this [base.feature](https://github.com/timiTao/BehatDbalExtension/blob/master/features/base.feature)

Make sure, to have run mysql with user test@test and table test before run:

    ``php bin/behat``

## Versioning

Staring version ``1.0.0``, will follow [Semantic Versioning v2.0.0](http://semver.org/spec/v2.0.0.html).

## Contributors

* Tomasz Kunicki [TimiTao](http://github.com/timiTao) [lead developer]
