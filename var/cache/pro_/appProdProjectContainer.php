<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerK6jojsp\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerK6jojsp/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerK6jojsp.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerK6jojsp\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerK6jojsp\appProdProjectContainer([
    'container.build_hash' => 'K6jojsp',
    'container.build_id' => 'dc0c2bf5',
    'container.build_time' => 1633859232,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerK6jojsp');
