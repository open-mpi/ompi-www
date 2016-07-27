<?
$subject_val = "Re: [hwloc-devel] v1.11.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 13 13:15:35 2015" -->
<!-- isoreceived="20150613171535" -->
<!-- sent="Sat, 13 Jun 2015 10:15:31 -0700" -->
<!-- isosent="20150613171531" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.11.0" -->
<!-- id="8646DFAD-3F59-490A-AFBE-4D7D4F41791B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="557C632A.20208_at_inria.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-13 13:15:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4471.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-588-gad6b8b4)"</a>
<li><strong>Previous message:</strong> <a href="4469.php">Brice Goglin: "Re: [hwloc-devel] v1.11.0"</a>
<li><strong>In reply to:</strong> <a href="4469.php">Brice Goglin: "Re: [hwloc-devel] v1.11.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl - thanks!
<br>
<p><span class="quotelev1">&gt; On Jun 13, 2015, at 10:06 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're basically supposed to use HWLOC_VERSION everywhere.
</span><br>
<span class="quotelev1">&gt; But that requirements was added while the line below was developed in
</span><br>
<span class="quotelev1">&gt; a branch at the same time. That's why it didn't get fixes.
</span><br>
<span class="quotelev1">&gt; I'll review the entire tree in case there's another one missing and
</span><br>
<span class="quotelev1">&gt; fix master and v1.11, thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 13/06/2015 19:01, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;ve been working on updating the OMPI hwloc code to the 1.11 version. I
</span><br>
<span class="quotelev2">&gt;&gt; reported via Jeff about the config issue, so I updated to the latest
</span><br>
<span class="quotelev2">&gt;&gt; nightly tarball of 1.11 to pickup that change. I&#146;m now able to
</span><br>
<span class="quotelev2">&gt;&gt; configure, but hit one last required change to make it build:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *diff --git a/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c*
</span><br>
<span class="quotelev2">&gt;&gt; *index 8d129d0..01be274 100644*
</span><br>
<span class="quotelev2">&gt;&gt; *--- a/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c*
</span><br>
<span class="quotelev2">&gt;&gt; *+++ b/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c*
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2599,7 +2599,7 @@next_noncpubackend:
</span><br>
<span class="quotelev2">&gt;&gt;       &amp;&amp; strcmp(topology-&gt;backends-&gt;component-&gt;name, &quot;xml&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;     char *value;
</span><br>
<span class="quotelev2">&gt;&gt;     /* add a hwlocVersion */
</span><br>
<span class="quotelev2">&gt;&gt; -    hwloc_obj_add_info(topology-&gt;levels[0][0], &quot;hwlocVersion&quot;, VERSION);
</span><br>
<span class="quotelev2">&gt;&gt; +    hwloc_obj_add_info(topology-&gt;levels[0][0], &quot;hwlocVersion&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_VERSION);
</span><br>
<span class="quotelev2">&gt;&gt;     /* add a ProcessName */
</span><br>
<span class="quotelev2">&gt;&gt;     value = hwloc_progname(topology);
</span><br>
<span class="quotelev2">&gt;&gt;     if (value) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m not sure if this is a prefixing issue when embedded, or a more
</span><br>
<span class="quotelev2">&gt;&gt; general problem. Any thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/06/4468.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/06/4468.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/06/4470.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/06/4470.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4471.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-588-gad6b8b4)"</a>
<li><strong>Previous message:</strong> <a href="4469.php">Brice Goglin: "Re: [hwloc-devel] v1.11.0"</a>
<li><strong>In reply to:</strong> <a href="4469.php">Brice Goglin: "Re: [hwloc-devel] v1.11.0"</a>
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
