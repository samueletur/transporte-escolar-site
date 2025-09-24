@if(config('analytics.google.enabled') && config('analytics.google.measurement_id'))
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('analytics.google.measurement_id') }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', '{{ config('analytics.google.measurement_id') }}', {
        page_title: '{{ $title ?? 'Van Confiável' }}',
        page_location: '{{ url()->current() }}',
        custom_map: {
            'custom_parameter_1': 'transporte_escolar'
        }
    });
</script>
@endif