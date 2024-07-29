<?php
/**
 * Helper functions.
 *
 * @package   HybridFilesystem
 * @link      https://themehybrid.com/hybrid-filesystem
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2024, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Filesystem;

if ( ! function_exists( __NAMESPACE__ . '\\join_paths' ) ) {
    /**
     * Join the given paths together.
     *
     * @param  string|null $basePath
     * @param  string      ...$paths
     * @return string
     */
    function join_paths( $basePath, ...$paths ) {
        foreach ( $paths as $index => $path ) {
            if ( empty( $path ) && '0' !== $path ) {
                unset( $paths[ $index ] );
            } else {
                $paths[ $index ] = DIRECTORY_SEPARATOR . ltrim( $path, DIRECTORY_SEPARATOR );
            }
        }

        return $basePath . implode( '', $paths );
    }
}
