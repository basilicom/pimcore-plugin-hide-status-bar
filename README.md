## Synopsis

This Pimcore <http://www.pimcore.org> plugin modifies the
backend so that non-admin users do not see the bottom
status bar anymore.

## Code Example / Method of Operation

The status bar is simply hidden via $('#pimcore_statusbar').hide();

## Motivation

Ordinary users sometimes can not judge the significance of minor
version updates and/or notices regarding the maintenance job.

In order to not confuse them, we simply hide the status bar.

## Installation

Add "basilicom-pimcore-plugin/hide-status-bar" as a requirement to the
composer.json in the toplevel directory of your Pimcore installation.

Example:

    {
        "require": {
            "basilicom-pimcore-plugin/hide-status-bar": ">=1.0.0"
        }
    }

## API Reference

* n/a

## Tests

* none

## Contributors

* Fabian Fischer <fabian.fischer@basilicom.de>

## License

* BSD-3-Clause
