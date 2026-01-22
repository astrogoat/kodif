@php $settings = app(Astrogoat\Kodif\Settings\KodifSettings::class); @endphp

@if($settings->enabled && $settings->site_id)
    <script src="https://autopilot.kodif.io/chat/v1/application/{{ $settings->site_id }}/widget-script"></script>
@endif
