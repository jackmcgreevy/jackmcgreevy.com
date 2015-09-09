{% set oop = array [ 'playground', 'fundamentals', 'project', 'database', 'user', 'session' ] %}

{% set oopPages = ['playground', 'fundamentals', 'project', 'database', 'user', 'session'] %}

{% set entries = craft.entries.section('oop') %}

{% set value = -1 + 1 %}

{% set array = [0, 1, 2, 3, 4, 5] %}

{% set candle = array %}

{% set handle = candle.0 + 1 %}



{% for key,value in array_path %}
	Key : {{ key }}
	Value : {{ value }}
{% endfor %}

	

	<tr>
		<td valign="top">
			&nbsp;&nbsp;&nbsp;&nbsp;
			<i class="material-icons">fast_forward</i>
		</td>
		<td class="egg">
			{% if loop.first %}
			<a href="{{ url('playground') }}"> {{ oop[0] }} </a>
			{% elseif %}
			<a href="{{ value }}"> {{ oop[0] }} </a>
			{{ key.0 |title }} 
			{% else %}
			{{ key.1 |title }} 
			 
			{% endif %} 
		</td>
		<td align="right"> ~ </td>
		<td align="right"> ~ </td>
		<td>&nbsp;</td>
		<td class="neg"><p class="neg"></br></p></td>
	</tr>
	
{% endfor %}	
