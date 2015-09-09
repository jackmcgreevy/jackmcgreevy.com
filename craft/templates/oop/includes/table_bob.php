<?php

$oopPages = array( 'playground', 'fundamentals', 'project', 'database', 'user', 'session');

$section = "oopPages[0]";

?>

<table class="bob">

	<tbody>				

		<tr class="filler">
			<td colspan="6" valign="top" align="right">
				
			</td>
		</tr>

		<tr class="filler">
			<td colspan="6" valign="top" align="right">
				
			</td>
		</tr>				

		<tr class="ham">
			<th valign="top">
				&nbsp;
				<i class="material-icons medium lightcyan">play_for_work</i>
			</th>
			<th>
				<a href="?C=N;O=D">Name</a>
			</th>
			<th>
				<a href="?C=M;O=A">Last Modified</a>
			</th>
			<th>
				<a href="?C=SL;O=A">Size</a>
			</th>
			<th>
				<a href="?C=D;O=A">Name</a>
			</th>
			<td>&nbsp;</td>
		</tr>

		{% include 'oop/includes/table-meat.php' %}

		<tr>
			<td valign="top">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<i class="material-icons">fast_forward</i>
			</td>
			<td class="egg">
				<a href="{{ url('project') }}"> Lesson 3 - OOP Project </a>
			</td>
			<td align="right"> ~ </td>
			<td align="right"> ~ </td>
			<td>&nbsp;</td>
			<td class="neg"><p class="neg"></br></p></td>
		</tr>

		<tr>
			<td valign="top">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<i class="material-icons">fast_forward</i>
			</td>
			<td class="egg">
				<a href="{{ url('database') }}"> Lesson 4 - Database Class </a>
			</td>
			<td align="right"> ~ </td>
			<td align="right"> ~ </td>
			<td>&nbsp;</td>
			<td class="neg"><p class="neg"></br></p></td>
		</tr>

		<tr>
			<td valign="top">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<i class="material-icons">fast_forward</i>
			</td>
			<td class="egg">
				<a href="{{ url('user') }}"> Lesson 5 - The User Class </a>
			</td>
			<td align="right"> ~ </td>
			<td align="right"> ~ </td>
			<td>&nbsp;</td>
			<td class="neg"><p class="neg"></br></p></td>
		</tr>

		<tr>
			<td valign="top">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<i class="material-icons">fast_forward</i>
			</td>
			<td class="egg">
				<a href="{{ url('session') }}"> Lesson 6 - The Session Class </a>
			</td>
			<td align="right"> ~ </td>
			<td align="right"> ~ </td>
			<td>&nbsp;</td>
			<td class="neg"><p class="neg"></br></p></td>
		</tr>

	</tbody>

</table>