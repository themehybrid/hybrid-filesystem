<?php

namespace Hybrid\Filesystem\Facades;

use Hybrid\Core\Facades\Facade;

/**
 * @see \Hybrid\Filesystem\FilesystemManager
 *
 * @method static \Hybrid\Contracts\Filesystem\Filesystem drive(string|null $name = null)
 * @method static \Hybrid\Contracts\Filesystem\Filesystem disk(string|null $name = null)
 * @method static \Hybrid\Contracts\Filesystem\Cloud cloud()
 * @method static \Hybrid\Contracts\Filesystem\Filesystem build(string|array $config)
 * @method static \Hybrid\Contracts\Filesystem\Filesystem createLocalDriver(array $config)
 * @method static \Hybrid\Contracts\Filesystem\Filesystem createFtpDriver(array $config)
 * @method static \Hybrid\Contracts\Filesystem\Filesystem createSftpDriver(array $config)
 * @method static \Hybrid\Contracts\Filesystem\Cloud createS3Driver(array $config)
 * @method static \Hybrid\Contracts\Filesystem\Filesystem createScopedDriver(array $config)
 * @method static \Hybrid\Filesystem\FilesystemManager set(string $name, mixed $disk)
 * @method static string getDefaultDriver()
 * @method static string getDefaultCloudDriver()
 * @method static \Hybrid\Filesystem\FilesystemManager forgetDisk(array|string $disk)
 * @method static void purge(string|null $name = null)
 * @method static \Hybrid\Filesystem\FilesystemManager extend(string $driver, \Closure $callback)
 * @method static \Hybrid\Filesystem\FilesystemManager setApplication(\Hybrid\Contracts\Core\Application $app)
 * @method static bool exists(string $path)
 * @method static string|null get(string $path)
 * @method static resource|null readStream(string $path)
 * @method static bool put(string $path, \Psr\Http\Message\StreamInterface|\Hybrid\Http\File|\Hybrid\Http\UploadedFile|string|resource $contents, mixed $options = [])
 * @method static bool writeStream(string $path, resource $resource, array $options = [])
 * @method static string getVisibility(string $path)
 * @method static bool setVisibility(string $path, string $visibility)
 * @method static bool prepend(string $path, string $data)
 * @method static bool append(string $path, string $data)
 * @method static bool delete(string|array $paths)
 * @method static bool copy(string $from, string $to)
 * @method static bool move(string $from, string $to)
 * @method static int size(string $path)
 * @method static int lastModified(string $path)
 * @method static array files(string|null $directory = null, bool $recursive = false)
 * @method static array allFiles(string|null $directory = null)
 * @method static array directories(string|null $directory = null, bool $recursive = false)
 * @method static array allDirectories(string|null $directory = null)
 * @method static bool makeDirectory(string $path)
 * @method static bool deleteDirectory(string $directory)
 * @method static \Hybrid\Filesystem\FilesystemAdapter assertExists(string|array $path, string|null $content = null)
 * @method static \Hybrid\Filesystem\FilesystemAdapter assertMissing(string|array $path)
 * @method static \Hybrid\Filesystem\FilesystemAdapter assertDirectoryEmpty(string $path)
 * @method static bool missing(string $path)
 * @method static bool fileExists(string $path)
 * @method static bool fileMissing(string $path)
 * @method static bool directoryExists(string $path)
 * @method static bool directoryMissing(string $path)
 * @method static string path(string $path)
 * @method static array|null json(string $path, int $flags = 0)
 * @method static \Symfony\Component\HttpFoundation\StreamedResponse response(string $path, string|null $name = null, array $headers = [], string|null $disposition = 'inline')
 * @method static \Symfony\Component\HttpFoundation\StreamedResponse download(string $path, string|null $name = null, array $headers = [])
 * @method static string|false putFile(\Hybrid\Http\File|\Hybrid\Http\UploadedFile|string $path, \Hybrid\Http\File|\Hybrid\Http\UploadedFile|string|array|null $file = null, mixed $options = [])
 * @method static string|false putFileAs(\Hybrid\Http\File|\Hybrid\Http\UploadedFile|string $path, \Hybrid\Http\File|\Hybrid\Http\UploadedFile|string|array|null $file, string|array|null $name = null, mixed $options = [])
 * @method static string|false checksum(string $path, array $options = [])
 * @method static string|false mimeType(string $path)
 * @method static string url(string $path)
 * @method static bool providesTemporaryUrls()
 * @method static string temporaryUrl(string $path, \DateTimeInterface $expiration, array $options = [])
 * @method static array temporaryUploadUrl(string $path, \DateTimeInterface $expiration, array $options = [])
 * @method static \League\Flysystem\FilesystemOperator getDriver()
 * @method static \League\Flysystem\FilesystemAdapter getAdapter()
 * @method static array getConfig()
 * @method static void buildTemporaryUrlsUsing(\Closure $callback)
 * @method static \Hybrid\Filesystem\FilesystemAdapter|mixed when(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 * @method static \Hybrid\Filesystem\FilesystemAdapter|mixed unless(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 * @method static mixed macroCall(string $method, array $parameters)
 * @method static bool has(string $location)
 * @method static string read(string $location)
 * @method static \League\Flysystem\DirectoryListing listContents(string $location, bool $deep = false)
 * @method static int fileSize(string $path)
 * @method static string visibility(string $path)
 * @method static void write(string $location, string $contents, array $config = [])
 * @method static void createDirectory(string $location, array $config = [])
 */
class Storage extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'filesystem';
    }

}