<?php

declare(strict_types=1);

/** @var string $pageTitle */
/** @var array<int, string> $extraStyles */

$pageTitle = $pageTitle ?? 'StreamFlix';
$extraStyles = $extraStyles ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="stylesheet" href="../styles/style.css">
    <?php foreach ($extraStyles as $stylePath): ?>
        <link rel="stylesheet" href="<?= htmlspecialchars($stylePath) ?>">
    <?php endforeach; ?>
</head>
