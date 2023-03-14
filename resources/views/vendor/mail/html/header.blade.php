@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('image/Fit Academy 2022 Logo PNG.png') }}" class="logo" alt="FitAcademy Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
