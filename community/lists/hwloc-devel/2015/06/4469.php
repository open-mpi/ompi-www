<?
$subject_val = "Re: [hwloc-devel] v1.11.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 13 13:06:52 2015" -->
<!-- isoreceived="20150613170652" -->
<!-- sent="Sat, 13 Jun 2015 19:06:50 +0200" -->
<!-- isosent="20150613170650" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.11.0" -->
<!-- id="557C632A.20208_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="798C9DA2-0248-4A3D-AE53-9033FF44DF4D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] v1.11.0<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-13 13:06:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4470.php">Ralph Castain: "Re: [hwloc-devel] v1.11.0"</a>
<li><strong>Previous message:</strong> <a href="4468.php">Ralph Castain: "[hwloc-devel] v1.11.0"</a>
<li><strong>In reply to:</strong> <a href="4468.php">Ralph Castain: "[hwloc-devel] v1.11.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4470.php">Ralph Castain: "Re: [hwloc-devel] v1.11.0"</a>
<li><strong>Reply:</strong> <a href="4470.php">Ralph Castain: "Re: [hwloc-devel] v1.11.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're basically supposed to use HWLOC_VERSION everywhere.
<br>
But that requirements was added while the line below was developed in
<br>
a branch at the same time. That's why it didn't get fixes.
<br>
I'll review the entire tree in case there's another one missing and
<br>
fix master and v1.11, thanks.
<br>
<p>Brice
<br>
<p><p><p><p>Le 13/06/2015 19:01, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;ve been working on updating the OMPI hwloc code to the 1.11 version. I
</span><br>
<span class="quotelev1">&gt; reported via Jeff about the config issue, so I updated to the latest
</span><br>
<span class="quotelev1">&gt; nightly tarball of 1.11 to pickup that change. I&#146;m now able to
</span><br>
<span class="quotelev1">&gt; configure, but hit one last required change to make it build:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *diff --git a/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c
</span><br>
<span class="quotelev1">&gt; b/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c*
</span><br>
<span class="quotelev1">&gt; *index 8d129d0..01be274 100644*
</span><br>
<span class="quotelev1">&gt; *--- a/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c*
</span><br>
<span class="quotelev1">&gt; *+++ b/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c*
</span><br>
<span class="quotelev1">&gt; @@ -2599,7 +2599,7 @@next_noncpubackend:
</span><br>
<span class="quotelev1">&gt;        &amp;&amp; strcmp(topology-&gt;backends-&gt;component-&gt;name, &quot;xml&quot;)) {
</span><br>
<span class="quotelev1">&gt;      char *value;
</span><br>
<span class="quotelev1">&gt;      /* add a hwlocVersion */
</span><br>
<span class="quotelev1">&gt; -    hwloc_obj_add_info(topology-&gt;levels[0][0], &quot;hwlocVersion&quot;, VERSION);
</span><br>
<span class="quotelev1">&gt; +    hwloc_obj_add_info(topology-&gt;levels[0][0], &quot;hwlocVersion&quot;,
</span><br>
<span class="quotelev1">&gt; HWLOC_VERSION);
</span><br>
<span class="quotelev1">&gt;      /* add a ProcessName */
</span><br>
<span class="quotelev1">&gt;      value = hwloc_progname(topology);
</span><br>
<span class="quotelev1">&gt;      if (value) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m not sure if this is a prefixing issue when embedded, or a more
</span><br>
<span class="quotelev1">&gt; general problem. Any thoughts?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/06/4468.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/06/4468.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4470.php">Ralph Castain: "Re: [hwloc-devel] v1.11.0"</a>
<li><strong>Previous message:</strong> <a href="4468.php">Ralph Castain: "[hwloc-devel] v1.11.0"</a>
<li><strong>In reply to:</strong> <a href="4468.php">Ralph Castain: "[hwloc-devel] v1.11.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4470.php">Ralph Castain: "Re: [hwloc-devel] v1.11.0"</a>
<li><strong>Reply:</strong> <a href="4470.php">Ralph Castain: "Re: [hwloc-devel] v1.11.0"</a>
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
