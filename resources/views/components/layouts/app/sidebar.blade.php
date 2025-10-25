<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
<flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark"/>

    <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
        <x-app-logo/>
    </a>

    <flux:navlist variant="outline">
        <flux:navlist.group :heading="__('Pages')" class="grid">
            <flux:navlist.item icon="clipboard" :href="route('dashboard')" :current="request()->routeIs('dashboard')"
                               wire:navigate>{{ __('My Card') }}</flux:navlist.item>

            <flux:navlist.item icon="calendar" :href="route('situations')" :current="request()->routeIs('situations')"
                               wire:navigate>{{ __('Situations') }}</flux:navlist.item>
            {{--            <flux:navlist.item icon="hashtag" :href="route('cards')" :current="request()->routeIs('cards')"--}}
            {{--                               wire:navigate>{{ __('Cards') }}</flux:navlist.item>--}}
            <flux:navlist.item icon="users" :href="route('users')" :current="request()->routeIs('users')"
                               wire:navigate>{{ __('Players') }}</flux:navlist.item>
        </flux:navlist.group>


        <flux:navlist.group :heading="__('Other Links')" class="grid">
            <a href="https://music.apple.com/ca/playlist/karens-party-mix/pl.u-gxblk87s6AzK7"
               class="h-10 lg:h-8 relative flex items-center gap-3 rounded-lg  py-0 text-start w-full px-3 my-px text-zinc-500 dark:text-white/80 data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content) data-current:bg-white dark:data-current:bg-white/[7%] data-current:border data-current:border-zinc-200 dark:data-current:border-transparent hover:text-zinc-800 dark:hover:text-white dark:hover:bg-white/[7%] hover:bg-zinc-800/5  border border-transparent"
               data-flux-navlist-item="data-flux-navlist-item">
                <div class="relative">
                    <svg class="shrink-0 [:where(&amp;)]:size-6 size-4!" data-flux-icon="" data-slot="icon" fill="none"
                         stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m9 9 10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z"></path>
                    </svg>
                </div>

                <div
                    class="flex-1 text-sm font-medium leading-none whitespace-nowrap [[data-nav-footer]_&amp;]:hidden [[data-nav-sidebar]_[data-nav-footer]_&amp;]:block"
                    data-content="">Karen's Party Mix
                </div>
            </a>


            <a href="https://www.crowd.live/TRWZZ"
               class="h-10 lg:h-8 relative flex items-center gap-3 rounded-lg  py-0 text-start w-full px-3 my-px text-zinc-500 dark:text-white/80 data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content) data-current:bg-white dark:data-current:bg-white/[7%] data-current:border data-current:border-zinc-200 dark:data-current:border-transparent hover:text-zinc-800 dark:hover:text-white dark:hover:bg-white/[7%] hover:bg-zinc-800/5  border border-transparent"
               data-flux-navlist-item="data-flux-navlist-item">
                <div class="relative">
                    <svg class="shrink-0 [:where(&amp;)]:size-6 size-4!" data-flux-icon="" data-slot="icon" fill="none"
                         stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 0 1-.657.643 48.39 48.39 0 0 1-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 0 1-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 0 0-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 0 1-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 0 0 .657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 0 1-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 0 0 5.427-.63 48.05 48.05 0 0 0 .582-4.717.532.532 0 0 0-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 0 0 .658-.663 48.422 48.422 0 0 0-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 0 1-.61-.58v0Z"></path>
                    </svg>

                </div>

                <div
                    class="flex-1 text-sm font-medium leading-none whitespace-nowrap [[data-nav-footer]_&amp;]:hidden [[data-nav-sidebar]_[data-nav-footer]_&amp;]:block"
                    data-content="">Party Trivia
                </div>
            </a>

            <a href="https://photos.google.com/share/AF1QipMgYtUgvHaS6G7cW9dvy-vwEQTUL7pp41g__toR_2QGt_iBrH72_uqnxtJ5YNOoWw?key=dW9JbHdIY1E5OTZ6dWV2WWg1MTlDbVF6dGtXLXlR"
               class="h-10 lg:h-8 relative flex items-center gap-3 rounded-lg  py-0 text-start w-full px-3 my-px text-zinc-500 dark:text-white/80 data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content) data-current:bg-white dark:data-current:bg-white/[7%] data-current:border data-current:border-zinc-200 dark:data-current:border-transparent hover:text-zinc-800 dark:hover:text-white dark:hover:bg-white/[7%] hover:bg-zinc-800/5  border border-transparent"
               data-flux-navlist-item="data-flux-navlist-item">
                <div class="relative">
                    <svg class="shrink-0 [:where(&amp;)]:size-6 size-4!" data-flux-icon="" data-slot="icon" fill="none"
                         stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"></path>
                    </svg>


                </div>

                <div
                    class="flex-1 text-sm font-medium leading-none whitespace-nowrap [[data-nav-footer]_&amp;]:hidden [[data-nav-sidebar]_[data-nav-footer]_&amp;]:block"
                    data-content="">Google Photos Album
                </div>
            </a>


        </flux:navlist.group>
    </flux:navlist>

    <flux:spacer/>


    <!-- Desktop User Menu -->
    <flux:dropdown class="hidden lg:block" position="bottom" align="start">
        <flux:profile
            :name="auth()->user()->name"
            :initials="auth()->user()->initials()"
            icon:trailing="chevrons-up-down"
        />

        <flux:menu class="w-[220px]">
            <flux:menu.radio.group>
                <div class="p-0 text-sm font-normal">
                    <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                        <div class="grid flex-1 text-start text-sm leading-tight">
                            <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                            <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                </div>
            </flux:menu.radio.group>

            <flux:menu.separator/>

            <flux:menu.radio.group>
                <flux:menu.item :href="route('settings.profile')" icon="cog"
                                wire:navigate>{{ __('Settings') }}</flux:menu.item>
            </flux:menu.radio.group>

            <flux:menu.separator/>

            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                    {{ __('Log Out') }}
                </flux:menu.item>
            </form>
        </flux:menu>
    </flux:dropdown>
</flux:sidebar>

<!-- Mobile User Menu -->
<flux:header class="lg:hidden">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>

    <flux:spacer/>

    <flux:dropdown position="top" align="end">
        <flux:profile
            :initials="auth()->user()->initials()"
            icon-trailing="chevron-down"
        />

        <flux:menu>
            <flux:menu.radio.group>
                <div class="p-0 text-sm font-normal">
                    <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                        <div class="grid flex-1 text-start text-sm leading-tight">
                            <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                            <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                </div>
            </flux:menu.radio.group>

            <flux:menu.separator/>

            <flux:menu.radio.group>
                <flux:menu.item :href="route('settings.profile')" icon="cog"
                                wire:navigate>{{ __('Settings') }}</flux:menu.item>
            </flux:menu.radio.group>

            <flux:menu.separator/>

            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                    {{ __('Log Out') }}
                </flux:menu.item>
            </form>
        </flux:menu>
    </flux:dropdown>
</flux:header>

{{ $slot }}

@fluxScripts
@livewire('notifications') {{-- Only required if you wish to send flash notifications --}}

@filamentScripts
</body>
</html>
