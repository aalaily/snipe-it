@extends('emails/layouts/default')

@section('content')
<p>Hello {{{ $first_name }}},</p>


<p>The following item has been checkin. 

<table>
	<tr>
		<td style="background-color:#ccc">
			Asset Name:
		</td>
		<td>
			<strong>{{{ $item_name }}}</strong>
		</td>
	</tr>
	@if ($item_tag)
		<tr>
			<td style="background-color:#ccc">
				Asset Tag:
			</td>
			<td>
				<strong>{{{ $item_tag }}}</strong>
			</td>
		</tr>
	@endif
	<tr>
		<td style="background-color:#ccc">
			Checkin Date:
		</td>
		<td>
			<strong>{{{ $checkin_date }}}</strong>
		</td>
	</tr>
	@if ($note)
		<tr>
			<td style="background-color:#ccc">
				Additional Notes:
			</td>
			<td>
				<strong>{{{ $note }}}</strong>
			</td>
		</tr>
	@endif
</table>

<p>{{{ Setting::getSettings()->site_name }}}</p>
@stop
