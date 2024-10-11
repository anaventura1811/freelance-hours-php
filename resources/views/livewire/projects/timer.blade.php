@props(['spacing'])

<div 
    wire:poll.1s
    {{
        $attributes->class([
            'flex items-center justify-between text-[14px]',
            'mt-4' => $spacing == App\CardTimer::addSpacing,
            'pl-2' => $spacing == App\CardTimer::removeSpacing,
        ])
    }}
    >
    <div class="text-[#8C8C9A]  leading-6 pr-2">Encerra em:</div>
    <div class="font-bold flex items-center space-x-1">
        <span class="text-white ">{{ $days }}</span><span>:</span>
        <span class="text-white ">{{ $hours }}</span><span>:</span>
        <span class="text-white ">{{ $minutes }}</span><span>:</span>
        <span class="text-white ">{{ $seconds }}</span>
    </div>
</div>