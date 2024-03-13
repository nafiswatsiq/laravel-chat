<div>
    <div x-data="{ open: false }">
        <div class="w-fit z-50 fixed bottom-0 right-4 border" x-show="open">
            <div class="relative">
                <div class="absolute -top-7 p-1 bg-white rounded-sm border right-0 cursor-pointer flex">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="times" class="w-5 h-5 fill-slate-800 hover:bg-slate-200" wire:click="openChats" x-on:click="open = ! open"><path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg>
                    <a href="/dashboard/chat" wire:navigate>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="external-link-alt" class="w-5 h-5 fill-slate-800 ml-2 hover:bg-slate-200"><path d="M18,10.82a1,1,0,0,0-1,1V19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8A1,1,0,0,1,5,7h7.18a1,1,0,0,0,0-2H5A3,3,0,0,0,2,8V19a3,3,0,0,0,3,3H16a3,3,0,0,0,3-3V11.82A1,1,0,0,0,18,10.82Zm3.92-8.2a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H15a1,1,0,0,0,0,2h3.59L8.29,14.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V9a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"></path></svg>
                    </a>
                </div>
                <div class="w-[20rem] h-[30rem]" wire:loading>
                    <div class="px-4 py-9 max-w-sm w-full mx-auto bg-white border-b-2">
                        <div class="animate-pulse flex space-x-4">
                            <div class="flex-1 space-y-6 py-1">
                                <div class="h-2 bg-slate-400 rounded"></div>
                            </div>
                        </div>
                    </div>
                    @for ($i = 0; $i < 4; $i++)
                        <div class="p-4 max-w-sm w-full mx-auto bg-white">
                            <div class="animate-pulse flex space-x-4">
                                <div class="rounded-full bg-slate-400 h-10 w-10"></div>
                                <div class="flex-1 space-y-6 py-1">
                                    <div class="h-2 bg-slate-400 rounded"></div>
                                    <div class="space-y-3">
                                    <div class="grid grid-cols-3 gap-4">
                                        <div class="h-2 bg-slate-400 rounded col-span-2"></div>
                                        <div class="h-2 bg-slate-400 rounded col-span-1"></div>
                                    </div>
                                    <div class="h-2 bg-slate-400 rounded"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                @if($openChat == true)
                <iframe src="{{ env('APP_URL') }}/dashboard/chat" frameborder="0" class="w-[20rem] h-[30rem]"></iframe>
                @endif
            </div>
        </div>
        <div>
            <button class="fixed bottom-4 right-4 bg-blue-500 text-white px-3 rounded-full border p-2 flex items-center" x-on:click="open = ! open, $wire.openChats()">
                {{ $unreadMessages }} Chat
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="comment" class="fill-white w-5 h-5 ml-1"><path d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"></path></svg>
            </button>
        </div>
    </div>
</div>
