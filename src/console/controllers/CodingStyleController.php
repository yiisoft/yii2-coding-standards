<?php

namespace yii\console\controllers;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command fix coding style.
 *
 * Usage:
 * `yii coding-style path/to/file` or `yii coding-style --standard=PSR12 path`
 */
class CodingStyleController extends Controller
{
    /**
     * @var @inheritDoc
     */
    public $defaultAction = 'fix';
    
    /**
     * @var string Coding standard, by default, use `Yii2`
     */
    public $standard = '@vendor/yiisoft/yii2-coding-standards/Yii2';

    /**
     * @inheritDoc
     */
    public function options($actionID)
    {
        return \array_merge(parent::options($actionID), ['standard']);
    }

    /**
     * Fix coding style.
     *
     * @param string $file Path to file
     * @return int Exit code
     */
    public function actionFix($file)
    {
        if (!\class_exists('PHP_CodeSniffer\Runner')) {
            require_once Yii::getAlias('@vendor/squizlabs/php_codesniffer/autoload.php');
        }

        if (!\defined('PHP_CODESNIFFER_CBF')) {
            \define('PHP_CODESNIFFER_CBF', true);
        }

        if ($file[0] === '@') {
            $file = Yii::getAlias($file);
        }
        if ($this->standard[0] === '@') {
            $this->standard = Yii::getAlias($this->standard);
        }

        try {
            $runner = new \PHP_CodeSniffer\Runner();
            $runner->config = new \PHP_CodeSniffer\Config(
                [
                    'yii',
                    '--standard=' . $this->standard,
                    $file
                ]
            );
            $runner->config->verbosity = 0;
            $runner->config->tabWidth = 4;
            $runner->init();
            // Override some of the command line settings that might break the fixes
            $runner->config->showProgress = false;
            $runner->config->generator = null;
            $runner->config->explain = false;
            $runner->config->interactive = false;
            $runner->config->cache = false;
            $runner->config->showSources = false;
            $runner->config->recordErrors = false;
            $runner->config->reportFile = null;
            $runner->config->reports = ['cbf' => null];
            $runner->reporter = new \PHP_CodeSniffer\Reporter($runner->config);
            $runner->processFile(
                new \PHP_CodeSniffer\Files\LocalFile(
                    $runner->config->files[1],
                    $runner->ruleset,
                    $runner->config
                )
            );
            $runner->reporter->printReports();
        } catch (\Throwable $e) {
            Yii::warning((string) $e);
            $this->stderr($e->getMessage());
            return ExitCode::UNSPECIFIED_ERROR;
        }

        return ExitCode::OK;
    }
}
