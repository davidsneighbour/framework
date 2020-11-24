<?php

declare(strict_types=1);

/**
 * This configuration will be read and overlaid on top of the
 * default configuration. Command line arguments will be applied
 * after this file is read.
 *
 * @see https://github.com/phan/phan
 * @see https://github.com/phan/phan/wiki/Phan-Config-Settings
 *
 */
return [
    /**
     * @see https://github.com/phan/phan/wiki/Phan-Config-Settings#configuring-files
     */
    'directory_list' => [
        'lib',
    ],
    'file_list' => [
        'titan-framework.php',
        'titan-framework-checker.php',
        'titan-framework-embedder.php',
    ],
    'exclude_analysis_directory_list' => [
        'vendor',
    ],
    // 'exclude_file_list' => [],
    'exclude_file_regex' => '@^vendor/.*/(tests|Tests)/@',
    /**
     * @see https://github.com/phan/phan/wiki/Phan-Config-Settings#issue-filtering
     */
    //'baseline_path' => '.phan/baseline.php',
    // 'disable_file_based_suppression' => true,
    // 'disable_line_based_suppression' => true,
    // 'disable_suppression' => true,
    'minimum_severity' => \Phan\Issue::SEVERITY_CRITICAL, // change after initial
    // 'suppress_issue_types' => [],
    /**
     * @see https://github.com/phan/phan/wiki/Phan-Config-Settings#analysis
     */
    'allow_missing_properties' => true, // set to false after initial refactoring
    'analyze_signature_compatibility' => true,
    'backward_compatibility_checks' => false,
    'cache_polyfill_asts' => true,
    'enable_extended_internal_return_type_plugins' => true,
    'error_prone_truthy_condition_detection' => true,
    'ignore_undeclared_functions_with_known_signatures' => false,
    'inherit_phpdoc_types' => false,
    // @see https://github.com/phan/phan/tree/master/.phan/plugins
    'plugins' => [
        'AlwaysReturnPlugin',
        'AvoidableGetterPlugin',
        'ConstantVariablePlugin',
        'DeprecateAliasPlugin',
        'DollarDollarPlugin',
        'DuplicateArrayKeyPlugin',
        'DuplicateConstantPlugin',
        'DuplicateExpressionPlugin',
        'EmptyMethodAndFunctionPlugin',
        'EmptyStatementListPlugin',
        'FFIAnalysisPlugin',
        'HasPHPDocPlugin',
        'InlineHTMLPlugin',
        'InvalidVariableIssetPlugin',
        'InvokePHPNativeSyntaxCheckPlugin',
        'LoopVariableReusePlugin',
        'MoreSpecificElementTypePlugin',
        'NoAssertPlugin',
        'NonBoolBranchPlugin',
        'NonBoolInLogicalArithPlugin',
        'NotFullyQualifiedUsagePlugin',
        'NumericalComparisonPlugin',
        'PHPDocInWrongCommentPlugin',
        'PHPDocRedundantPlugin',
        'PHPDocToRealTypesPlugin',
        'PHPUnitAssertionPlugin',
        'PHPUnitNotDeadCodePlugin',
        'PossiblyStaticMethodPlugin',
        'PreferNamespaceUsePlugin',
        'PregRegexCheckerPlugin',
        'PrintfCheckerPlugin',
        'RedundantAssignmentPlugin',
        //'RemoveDebugStatementPlugin',
        //'ShortArrayPlugin',
        //'SimplifyExpressionPlugin',
        'SleepCheckerPlugin',
        'StrictComparisonPlugin',
        'StrictLiteralComparisonPlugin',
        'SuspiciousParamOrderPlugin',
        'UnknownClassElementAccessPlugin',
        'UnknownElementTypePlugin',
        'UnreachableCodePlugin',
        'UnsafeCodePlugin',
        'UnusedSuppressionPlugin',
        'UseReturnValuePlugin',
        'WhitespacePlugin',
    ],
    //'processes' => 4,
    'simplify_ast' => false,
    'warn_about_relative_include_statement' => true,
    'warn_about_undocumented_throw_statements' => true,
    /**
     * @see http://github.com/phan/phan/wiki/Phan-Config-Settings#analysis-of-a-php-version
     */
    'allow_method_param_type_widening' => true,
    'pretend_newer_core_methods_exist' => false,
    'target_php_version' => '7.4',
    /**
     * @see https://github.com/phan/phan/wiki/Phan-Config-Settings#type-casting
     */
    'strict_method_checking' => true,
    'strict_object_checking' => true,
    'strict_param_checking' => true,
    'strict_property_checking' => true,
    'strict_return_checking' => true,
    /**
     * @see https://github.com/phan/phan/wiki/Phan-Config-Settings#dead-code-detection
     */
    // 'constant_variable_detection' => true,
    'dead_code_detection' => false,
    // 'dead_code_detection_prefer_false_negative' => true, // try setting to false
    // 'force_tracking_references' => true,
    // 'redundant_condition_detection' => true,
    // 'unused_variable_detection' => true,
    // 'warn_about_redundant_use_namespaced_class' => true,
    /**
     * @see http://github.com/phan/phan/wiki/Phan-Config-Settings#output
     */
    'color_issue_messages_if_supported' => true,
    'color_scheme' => [
        'FILE' => 'red',
    ],
    'skip_slow_php_options_warning' => true,

];
