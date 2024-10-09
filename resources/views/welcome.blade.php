<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Diafragmaat.nl</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        @vite('resources/css/app.css')
        @fluxStyles
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <flux:main>
    <div class="flex items-center justify-center h-screen">
        <div class="p-8 rounded-lg bg-gray-500/20 space-y-8">
            <flux:heading level="1" size="lg">Hello Fluxer!</flux:heading>
            <flux:subheading>
                <flux:modal.trigger name="opendarnit">
                    <flux:button>open modal</flux:button>
                </flux:modal.trigger>
                <flux:modal name="opendarnit" class="min-w-[22rem] space-y-6">
                    <div>
                    <flux:heading size="lg">NOW you see me?</flux:heading>
                    </div>
                </flux:modal>
            </flux:subheading>
            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
        </div>
    </div>
    </flux:main>
        @fluxScripts
    </body>
</html>
