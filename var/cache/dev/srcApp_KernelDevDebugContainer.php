<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCWYHrwx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCWYHrwx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCWYHrwx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCWYHrwx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerCWYHrwx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'CWYHrwx',
    'container.build_id' => 'caa6a3a5',
    'container.build_time' => 1626342964,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCWYHrwx');
