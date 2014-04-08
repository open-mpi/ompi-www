<?php

function str_code($code) {
    print("

<p><table width=100% border=0 cellpadding=5 cellspacing=0 class=example>
<tr class=example>
<td class=example><pre>$code</pre></td>
</tr>
</table></p>\n\n");
}

function print_code($code) {
    print(str_code($code));
}
