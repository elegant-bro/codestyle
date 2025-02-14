<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__,
    ])
    ->exclude([
        'var',
        'vendor',
        'tests/_output',
        'tests/Support/_generated',
    ])
    ->notName([
        '*Kernel.php',
    ])
;

$config = new PhpCsFixer\Config();
return
    $config->setRules([
        '@DoctrineAnnotation' => true,
        '@PSR12' => true,

        //array fixers
        'no_trailing_comma_in_singleline' => true,
        'trailing_comma_in_multiline' => [
            'elements' => [
                'arguments',
                'arrays',
                'match',
                'parameters',
            ],
        ],
        'array_syntax' => ['syntax' => 'short'],
        //end array fixers

        //strict types
        'strict_param' => true,
        'strict_comparison' => true,
        'is_null' => true,
        'declare_strict_types' => true,
        'fully_qualified_strict_types' => true,
        //end strict types

        //clean code
        'no_unused_imports' => true,
        'ordered_imports' => ['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'alpha'],
        'no_empty_statement' => true,
        'protected_to_private' => true,
        'no_unneeded_control_parentheses' => ['statements' => ['break', 'clone', 'continue', 'echo_print', 'negative_instanceof', 'others', 'return', 'switch_case', 'yield', 'yield_from']],
        'no_unneeded_curly_braces' => true,
        'yoda_style' => ['equal' => true, 'identical' => true, 'less_and_greater' => true],
        'final_class' => true,
        'cast_spaces' => ['space' => 'none'],
        'class_attributes_separation' => [
            'elements' => [
                'const' => 'only_if_meta',
                'method' => 'one',
                'property' => 'one',
                'trait_import' => 'none',
                'case' => 'none',
            ],
        ],
        'class_reference_name_casing' => false,
        'clean_namespace' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'date_time_create_from_format_call' => true,
        'heredoc_indentation' => [
            'indentation' => 'start_plus_one',
        ],
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'heredoc_to_nowdoc' => true,
        'lambda_not_used_import' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'method_chaining_indentation' => true,
        'no_useless_else' => true,
        'no_useless_nullsafe_operator' => true, //possibly risky
        'no_useless_return' => true,
        'no_useless_sprintf' => true,
        'operator_linebreak' => [
            'only_booleans' => true,
            'position' => 'end',
        ],
        'space_after_semicolon' => [
            'remove_in_empty_for_expressions' => true,
        ],
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'single_line_empty_body' => true,
        'method_argument_space' => [
            'keep_multiple_spaces_after_comma' => false,
            'on_multiline' => 'ensure_fully_multiline',
        ],
        'type_declaration_spaces' => true,
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'new_line_for_chained_calls',
        ],
        'function_declaration' => [
            'closure_fn_spacing' => 'none',
            'closure_function_spacing' => 'none',
        ],
        //clean code end

        //extended psr 12
        'no_whitespace_before_comma_in_array' => true,
        'concat_space' => ['spacing' => 'one'],
        'binary_operator_spaces' => ['default' => 'single_space'],
        'blank_line_between_import_groups' => false,
        'no_unreachable_default_argument_value' => true,
        //end extended psr 12

        //lang migration
        'implode_call' => true,
        'modernize_types_casting' => true,
        'no_alias_functions' => true,
        'random_api_migration' => true,
        'regular_callable_call' => true,
        'self_accessor' => true,
        'self_static_accessor' => true,
        'simple_to_complex_string_variable' => true,
        'static_lambda' => true,
        'switch_continue_to_break' => true,
        'ternary_to_null_coalescing' => true,
        'use_arrow_functions' => true,
        'void_return' => true,
        //end lang migration

        //phpunit
        'php_unit_mock' => true,
        'php_unit_mock_short_will_return' => true,
        'php_unit_namespaced' => true,
//      commented because of once is instance method and assert is static method
//        'php_unit_test_case_static_method_calls' => [
//            'call_type' => 'this',
//        ],
        //end phpunit

        //phpdoc
        'phpdoc_param_order' => true,
        'no_superfluous_phpdoc_tags' => [
            'allow_mixed' => true,
            'allow_unused_params' => false,
            'remove_inheritdoc' => false,
        ],
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_align' => [
            'align' => 'left',
        ],
        'phpdoc_indent' => true,
        'phpdoc_no_package' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'phpdoc_var_annotation_correct_order' => true,
        'phpdoc_var_without_name' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_phpdoc' => true,
        'phpdoc_no_alias_tag' => true,
        //end phpdoc
    ])
        ->setFinder($finder)
        ->setUsingCache(false)
        ->setRiskyAllowed(true)
    ;
