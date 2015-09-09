
{% for entry in craft.entries.section('fundamentals') %}

<tr>
	<td valign="top">
		&nbsp;&nbsp;
		<i class="material-icons">fast_forward</i>
	</td>

	<td class="egg">
		<a href="{{ entry.url }}">
			{{ entry.title }}
			{{ loop.index }}
		</a>
	</td>
	
	<td align="right">  </td>
	<td align="right">  </td>
	<td>&nbsp;</td>
	<td class="neg">
		<p class="neg"> </br> </p>
	</td>
</tr>

{% endfor %}
