@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
<table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="100%" cellpadding="0" cellspacing="0">
                <h1 style="font-size: 20px;">A new message from contact form!</h1>
            </td>
        </tr>
        <tr>
            <td width="100%" cellpadding="0" cellspacing="0">
                <p><b>From:</b> {{ $contactName }} <i>({{ $contactEmail }})</i></p>
                <p><b>Message:</b></p>
                <p>{{ $contactMessage }}</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: #777777;"><i>That's it! Cheers!</i></p>
            </td>
        </tr>
    </table>
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
