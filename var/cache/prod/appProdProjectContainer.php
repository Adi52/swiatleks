<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTqgjbi5\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTqgjbi5/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerTqgjbi5.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerTqgjbi5\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerTqgjbi5\appProdProjectContainer([
    'container.build_hash' => 'Tqgjbi5',
    'container.build_id' => '3c815a3a',
    'container.build_time' => 1633881895,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTqgjbi5');
