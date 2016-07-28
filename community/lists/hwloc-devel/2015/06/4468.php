<?
$subject_val = "[hwloc-devel] v1.11.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 13 13:01:36 2015" -->
<!-- isoreceived="20150613170136" -->
<!-- sent="Sat, 13 Jun 2015 10:01:31 -0700" -->
<!-- isosent="20150613170131" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[hwloc-devel] v1.11.0" -->
<!-- id="798C9DA2-0248-4A3D-AE53-9033FF44DF4D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-devel] v1.11.0<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-13 13:01:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4469.php">Brice Goglin: "Re: [hwloc-devel] v1.11.0"</a>
<li><strong>Previous message:</strong> <a href="4467.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-450-g1cc3012)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4469.php">Brice Goglin: "Re: [hwloc-devel] v1.11.0"</a>
<li><strong>Reply:</strong> <a href="4469.php">Brice Goglin: "Re: [hwloc-devel] v1.11.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I&#226;&#128;&#153;ve been working on updating the OMPI hwloc code to the 1.11 version. I reported via Jeff about the config issue, so I updated to the latest nightly tarball of 1.11 to pickup that change. I&#226;&#128;&#153;m now able to configure, but hit one last required change to make it build:
<br>
<p>diff --git a/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c b/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c
<br>
index 8d129d0..01be274 100644
<br>
--- a/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c
<br>
+++ b/opal/mca/hwloc/hwloc1110/hwloc/src/topology.c
<br>
@@ -2599,7 +2599,7 @@ next_noncpubackend:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp; strcmp(topology-&gt;backends-&gt;component-&gt;name, &quot;xml&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *value;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* add a hwlocVersion */
<br>
-    hwloc_obj_add_info(topology-&gt;levels[0][0], &quot;hwlocVersion&quot;, VERSION);
<br>
+    hwloc_obj_add_info(topology-&gt;levels[0][0], &quot;hwlocVersion&quot;, HWLOC_VERSION);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* add a ProcessName */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value = hwloc_progname(topology);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (value) {
<br>
<p><p>I&#226;&#128;&#153;m not sure if this is a prefixing issue when embedded, or a more general problem. Any thoughts?
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4469.php">Brice Goglin: "Re: [hwloc-devel] v1.11.0"</a>
<li><strong>Previous message:</strong> <a href="4467.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-450-g1cc3012)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4469.php">Brice Goglin: "Re: [hwloc-devel] v1.11.0"</a>
<li><strong>Reply:</strong> <a href="4469.php">Brice Goglin: "Re: [hwloc-devel] v1.11.0"</a>
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
