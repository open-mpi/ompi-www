<?
$subject_val = "[hwloc-devel] patch to execute command when using hwloc-bind --get";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 04:38:55 2014" -->
<!-- isoreceived="20140813083855" -->
<!-- sent="Wed, 13 Aug 2014 10:38:53 +0200" -->
<!-- isosent="20140813083853" -->
<!-- name="John Donners" -->
<!-- email="john.donners_at_[hidden]" -->
<!-- subject="[hwloc-devel] patch to execute command when using hwloc-bind --get" -->
<!-- id="53EB241D.7000109_at_surfsara.nl" -->
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
<strong>Subject:</strong> [hwloc-devel] patch to execute command when using hwloc-bind --get<br>
<strong>From:</strong> John Donners (<em>john.donners_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 04:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4171.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Previous message:</strong> <a href="4169.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-15-g1899d09)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4171.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Reply:</strong> <a href="4171.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was somewhat surprised to notice that hwloc-bind doesn't
<br>
execute the command if the --get option is used. This could
<br>
come in handy to check the binding set by other programs,
<br>
e.g. SLURM, mpirun or taskset. The following patch would
<br>
change this.
<br>
<p>--- hwloc-1.9/utils/hwloc-bind.c	2014-03-17 16:42:36.000000000 +0100
<br>
+++ hwloc-1.9/utils/hwloc-bind.c.getproc	2014-08-13 10:24:17.832682576 +0200
<br>
@@ -301,7 +301,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s\n&quot;, s);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(s);
<br>
-    return EXIT_SUCCESS;
<br>
+    if (get_last_cpu_location) {
<br>
+      return EXIT_SUCCESS;
<br>
+    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (got_membind) {
<br>
<p>Please consider this change for the next release of hwloc.
<br>
<p>With regards,
<br>
John
<br>
<p><p>| John Donners | Senior adviseur | Operations, Support &amp; Development | SURFsara | Science Park 140 | 1098 XG Amsterdam | Nederland |
<br>
T (31)6 19039023 | john.donners_at_[hidden] | www.surfsara.nl |
<br>
<p>Aanwezig op | ma | di | wo | do | vr
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4171.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Previous message:</strong> <a href="4169.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-15-g1899d09)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4171.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Reply:</strong> <a href="4171.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
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
