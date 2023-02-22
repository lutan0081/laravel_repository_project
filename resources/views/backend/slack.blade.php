<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center t-color">
                    {{ __("Slackテスト") }}
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="pb-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <form method="post" action="{{ route('slack.sendSlackNotification') }}">
                            @csrf
                            <div class="grid grid-cols-1 text-black">

                                <div class="grid grid-cols-1 px-5 text-black">

                                    <div class="bg-100">
                                        <div class="grid grid-cols-1">
                                            <div class="mb-6">
                                                <label for="contents" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">通知内容</label>
                                                <textarea id="message" name="contents" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                           <div class="flex justify-center">
                                <button type="submit" class="mx-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">送信</button>
                           </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
