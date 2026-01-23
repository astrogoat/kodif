@php $settings = app(Astrogoat\Kodif\Settings\KodifSettings::class); @endphp

@if($settings->enabled && $settings->site_id)
    <script src="https://autopilot.kodif.io/chat/v1/application/{{ $settings->site_id }}/widget-script"></script>

    <script>
        function openKodifChat() {
            const widgetFrame = document.querySelector('iframe[src*="kodif"]')

            if (widgetFrame && widgetFrame.contentWindow) {
                widgetFrame.contentWindow.postMessage(
                    {
                        type: 'toggle-expanded',
                        isExpanded: true
                    },
                    '*'
                )
            }
        }

        window.openKodifChat = openKodifChat

        const params = new URLSearchParams(window.location.search)

        if (params.get('openKodif') === 'true') {
            setTimeout(() => {
                openKodifChat()
            }, 1000)
        }
    </script>
@endif
