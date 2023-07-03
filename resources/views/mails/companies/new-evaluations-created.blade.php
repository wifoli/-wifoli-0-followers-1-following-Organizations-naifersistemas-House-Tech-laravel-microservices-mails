<x-mail::message>
    # Introduction

    Você recebeu uma nova avaliação.

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
