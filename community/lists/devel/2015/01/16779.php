<?
$subject_val = "[OMPI devel] oob_tcp_if_include with subnet is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 07:28:34 2015" -->
<!-- isoreceived="20150112122834" -->
<!-- sent="Mon, 12 Jan 2015 13:28:26 +0100" -->
<!-- isosent="20150112122826" -->
<!-- name="Mark Kettenis" -->
<!-- email="kettenis_at_[hidden]" -->
<!-- subject="[OMPI devel] oob_tcp_if_include with subnet is broken" -->
<!-- id="x7y7fwsgp3p.fsf_at_jop69.nfra.nl" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] oob_tcp_if_include with subnet is broken<br>
<strong>From:</strong> Mark Kettenis (<em>kettenis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-12 07:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16780.php">Ralph Castain: "Re: [OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<li><strong>Previous message:</strong> <a href="16778.php">Howard Pritchard: "Re: [OMPI devel] #327"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16780.php">Ralph Castain: "Re: [OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<li><strong>Reply:</strong> <a href="16780.php">Ralph Castain: "Re: [OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using the --mca oob_tcp_if_include in combination with a subnet
<br>
specification doesn't quite work in OpenMPI 1.8.4.  The problem is
<br>
that the relevant code in orte/mca/oob/tcp/oob_tcp_component.c assumes
<br>
that the network interface indices are in the range [0,
<br>
opal_ifcount()[, but that isn't (always?) the case.  The diff (against
<br>
current git) below fixes this by adopting the method used in the
<br>
equivalent bit of code used for the btl_tcp_if_include parameter in
<br>
ompi/mca/btl/tcp/btl_tcp_component.c:split_and_resolve().
<br>
<p>Thanks,
<br>
<p>Mark
<br>
<p><p>diff --git a/orte/mca/oob/tcp/oob_tcp_component.c b/orte/mca/oob/tcp/oob_tcp_component.c
<br>
index b4fccb8..7057c38 100644
<br>
--- a/orte/mca/oob/tcp/oob_tcp_component.c
<br>
+++ b/orte/mca/oob/tcp/oob_tcp_component.c
<br>
@@ -1124,7 +1124,8 @@ static char **split_and_resolve(char **orig_str, char *name)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argv_prefix);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Go through all interfaces and see if we can find a match */
<br>
-        for (if_index = 0; if_index &lt; opal_ifcount(); if_index++) {
<br>
+        for (if_index = opal_ifbegin(); if_index &gt;= 0;
<br>
+             if_index = opal_ifnext(if_index)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_ifindextoaddr(if_index, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(struct sockaddr*) &amp;if_inaddr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof(if_inaddr));
<br>
@@ -1136,7 +1137,7 @@ static char **split_and_resolve(char **orig_str, char *name)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* If we didn't find a match, keep trying */
<br>
-        if (if_index == opal_ifcount()) {
<br>
+        if (if_index &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_show_help(&quot;help-oob-tcp.txt&quot;, &quot;invalid if_inexclude&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true, name, orte_process_info.nodename, tmp,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Did not find interface matching this subnet&quot;);
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16780.php">Ralph Castain: "Re: [OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<li><strong>Previous message:</strong> <a href="16778.php">Howard Pritchard: "Re: [OMPI devel] #327"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16780.php">Ralph Castain: "Re: [OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<li><strong>Reply:</strong> <a href="16780.php">Ralph Castain: "Re: [OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
