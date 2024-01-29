<?php

arch('src')
    ->expect('ThiagoBarros\FileCounter')
    ->toUseStrictTypes()
    ->toBeClasses()
    ->classes->toBeFinal()
    ->classes->toExtendNothing()
    ->classes->toImplementNothing()
    ->toUseNothing()
    ->not->toHaveConstructor();
