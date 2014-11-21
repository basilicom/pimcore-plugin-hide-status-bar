HideStatusBar Pimcore Plugin
================================================

[![Codacy Badge](https://www.codacy.com/project/badge/fd29fac5440e4fb2a06dcbb365cc6698)](https://www.codacy.com/public/basilicom/pimcorepluginhidestatusbar)
[![Dependency Status](https://www.versioneye.com/user/projects/545f22beeb8df292d50000d3/badge.svg?style=flat)](https://www.versioneye.com/user/projects/545f22beeb8df292d50000d3)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/basilicom/pimcore-plugin-hide-status-bar/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/basilicom/pimcore-plugin-hide-status-bar/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/basilicom/pimcore-plugin-hide-status-bar/badges/build.png?b=master)](https://scrutinizer-ci.com/g/basilicom/pimcore-plugin-hide-status-bar/build-status/master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/67a6b57d-a46a-4711-813f-121b0896da3f/mini.png)](https://insight.sensiolabs.com/projects/67a6b57d-a46a-4711-813f-121b0896da3f)

Developer info: [Pimcore at basilicom](http://basilicom.de/en/pimcore)

## Synopsis

This Pimcore <http://www.pimcore.org> plugin modifies the
backend so that non-admin users do not see the bottom
status bar anymore.

## Code Example / Method of Operation

The status bar is simply hidden via:

    $('#pimcore_statusbar').hide();

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
