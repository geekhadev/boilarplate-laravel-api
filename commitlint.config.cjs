module.exports = {
    extends: ['@commitlint/config-conventional'],
    rules: {
        'type-case': [2, 'always', 'lower-case'],
        'type-enum': [2, 'always', [
            'feat',
            'fix',
            'docs',
            'refac',
            'perf',
            'config',
            'test'
        ]],
        'scope-case': [2, 'always', 'lower-case'],
        'subject-case': [2, 'always', 'lower-case'],
        'type-max-length': [2, 'always', 6],
        'subject-max-length': [2, 'always', 50],
        'body-max-length': [2, 'always', 80],
    }
};
