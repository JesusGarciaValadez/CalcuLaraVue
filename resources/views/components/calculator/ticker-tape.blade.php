<div class="bg-yellow-200 text-right font-base font-light w-full h-auto overflow-hidden p-5 relative bottom-0 max-h-96 mb-5">
    <ul class="m-0 p-0 w-full relative h-auto bottom-0 flex flex-col-reverse">
        <li class="list-none relative py-2 border-b border-dashed border-gray-800 w-full flex flex-row align-center justify-end">
            <p class="block">
                <sup class="font-base text-xs align-top">@{{ operation }}</sup>
                @{{ result }}
            </p>
            <button class="align-baseline items-center px-2 ml-2 border border-red-500 rounded-full inline-block text-red-800 font-normal cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">×</button>
        </li>
    </ul>
</div>
