import { register } from '@tokens-studio/sd-transforms';
import StyleDictionary from 'style-dictionary';

// will register them on StyleDictionary object
// that is installed as a dependency of this package.
// register(StyleDictionary);

register(StyleDictionary, {
    excludeParentKeys: true,
});

/*
register(StyleDictionary, {
    tokenSetOrder: [
        'bs/global',
        'Colors/Mode 1',
        'FontStyles/Mode 1',
        'Padding/Mode 1'
    ]
});
*/


const sd = new StyleDictionary({
    // make sure to have source match your token files!
    // be careful about accidentally matching your package.json or similar files that are not tokens
    source: ['token.json'],
    preprocessors: ['tokens-studio'], // <-- since 0.16.0 this must be explicit
    platforms: {
        css: {
            transformGroup: 'tokens-studio', // <-- apply the tokens-studio transformGroup to apply all transforms
            // transforms: ['name/kebab'], // <-- add a token name transform for generating token names, default is camel
            // transformGroup: 'css',
            transforms: ['name/kebab'],
            buildPath: 'Resources/Public/scss/',
            files: [
                {
                    destination: 'variables-figma.scss',
                    format: 'scss/variables',
                },
            ],
        },
    },
});

// typo3conf/ext/figma_token_studio/Resources/Public/scss/variables-figma.scss

await sd.cleanAllPlatforms();
await sd.buildAllPlatforms();