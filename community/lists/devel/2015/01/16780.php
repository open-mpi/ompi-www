<?
$subject_val = "Re: [OMPI devel] oob_tcp_if_include with subnet is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 08:15:48 2015" -->
<!-- isoreceived="20150112131548" -->
<!-- sent="Mon, 12 Jan 2015 05:15:43 -0800" -->
<!-- isosent="20150112131543" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oob_tcp_if_include with subnet is broken" -->
<!-- id="A5278256-728E-448F-B9A5-721F20050A87_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="x7y7fwsgp3p.fsf_at_jop69.nfra.nl" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oob_tcp_if_include with subnet is broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-12 08:15:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16781.php">Valery: "[OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="16779.php">Mark Kettenis: "[OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<li><strong>In reply to:</strong> <a href="16779.php">Mark Kettenis: "[OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, indeed - thanks! Will include in 1.8.5
<br>
<p><span class="quotelev1">&gt; On Jan 12, 2015, at 4:28 AM, Mark Kettenis &lt;kettenis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the --mca oob_tcp_if_include in combination with a subnet
</span><br>
<span class="quotelev1">&gt; specification doesn't quite work in OpenMPI 1.8.4.  The problem is
</span><br>
<span class="quotelev1">&gt; that the relevant code in orte/mca/oob/tcp/oob_tcp_component.c assumes
</span><br>
<span class="quotelev1">&gt; that the network interface indices are in the range [0,
</span><br>
<span class="quotelev1">&gt; opal_ifcount()[, but that isn't (always?) the case.  The diff (against
</span><br>
<span class="quotelev1">&gt; current git) below fixes this by adopting the method used in the
</span><br>
<span class="quotelev1">&gt; equivalent bit of code used for the btl_tcp_if_include parameter in
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/tcp/btl_tcp_component.c:split_and_resolve().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/oob/tcp/oob_tcp_component.c b/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev1">&gt; index b4fccb8..7057c38 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev1">&gt; @@ -1124,7 +1124,8 @@ static char **split_and_resolve(char **orig_str, char *name)
</span><br>
<span class="quotelev1">&gt;                             argv_prefix);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* Go through all interfaces and see if we can find a match */
</span><br>
<span class="quotelev1">&gt; -        for (if_index = 0; if_index &lt; opal_ifcount(); if_index++) {
</span><br>
<span class="quotelev1">&gt; +        for (if_index = opal_ifbegin(); if_index &gt;= 0;
</span><br>
<span class="quotelev1">&gt; +             if_index = opal_ifnext(if_index)) {
</span><br>
<span class="quotelev1">&gt;             opal_ifindextoaddr(if_index, 
</span><br>
<span class="quotelev1">&gt;                                (struct sockaddr*) &amp;if_inaddr,
</span><br>
<span class="quotelev1">&gt;                                sizeof(if_inaddr));
</span><br>
<span class="quotelev1">&gt; @@ -1136,7 +1137,7 @@ static char **split_and_resolve(char **orig_str, char *name)
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* If we didn't find a match, keep trying */
</span><br>
<span class="quotelev1">&gt; -        if (if_index == opal_ifcount()) {
</span><br>
<span class="quotelev1">&gt; +        if (if_index &lt; 0) {
</span><br>
<span class="quotelev1">&gt;             orte_show_help(&quot;help-oob-tcp.txt&quot;, &quot;invalid if_inexclude&quot;,
</span><br>
<span class="quotelev1">&gt;                            true, name, orte_process_info.nodename, tmp,
</span><br>
<span class="quotelev1">&gt;                            &quot;Did not find interface matching this subnet&quot;);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16779.php">http://www.open-mpi.org/community/lists/devel/2015/01/16779.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16781.php">Valery: "[OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="16779.php">Mark Kettenis: "[OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<li><strong>In reply to:</strong> <a href="16779.php">Mark Kettenis: "[OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<!-- nextthread="start" -->
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
