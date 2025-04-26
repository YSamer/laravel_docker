<x-layouts.app :title="__('Checkout Success')">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 py-16 px-8 flex flex-col items-center justify-between gap-4 my-8">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            <span class="block">{{ __('Thank you for your purchase!') }}</span>
        </h2>
        <div class="mt-8 flex mt-0 flex-shrink-0 justify-center">
            <div class="inline-flex rounded-md shadow bg-primary-600">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    {{ __('Back to dashboard') }}
                </a>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 py-16 px-8 flex flex-col items-center justify-between gap-4 my-8">
        <div class="w-full">
            <p class="leading-relaxed text-lg text-gray-500">
                {{ __('Thank you for your purchase! The receipt of your purchase has been sent to the email address you provided during the purchase process.') }}
            </p>
            <p class="mt-4 leading-relaxed text-lg text-gray-500">
                {{ __('If you have any questions or concerns about your purchase, please don\'t hesitate to reach out to us at') }} <a class="text-blue-600 underline" href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a>.
            </p>
        </div>
    </div>
</x-layouts.app>