<?
$subject_val = "[OMPI devel] Prepping for 1.8.4 release";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 11:46:14 2014" -->
<!-- isoreceived="20141106164614" -->
<!-- sent="Thu, 6 Nov 2014 08:46:10 -0800" -->
<!-- isosent="20141106164610" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="[OMPI devel] Prepping for 1.8.4 release" -->
<!-- id="6AFF83BA-F831-47BE-9F15-61F285986EC3_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Prepping for 1.8.4 release<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 11:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16236.php">Howard Pritchard: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>Previous message:</strong> <a href="16234.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16236.php">Howard Pritchard: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>Reply:</strong> <a href="16236.php">Howard Pritchard: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>Reply:</strong> <a href="16237.php">Joshua Ladd: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey folks
<br>
<p>Here is the NEWS I have for 1.8.4 so far - please respond with any additions/mods you would like to suggest
<br>
<p>+1.8.4
<br>
+-----
<br>
+- Removed inadvertent change that set --enable-mpi-thread-multiple &quot;on&quot;
<br>
+  by default, thus impacting performance for non-threaded apps
<br>
+- Significantly reduced startup time by optimizing internal hash table
<br>
+  implementation
<br>
+- Fixed segfault in neighborhood collectives under certain use-cases
<br>
+- Fixed Solaris support
<br>
+- Fixed PMI configure tests for certain Slurm installation patterns
<br>
+- Fixed param registration issue in Java bindings
<br>
+- Several man page fixes
<br>
+- Silence several warnings and close some memory leaks
<br>
+- Add new PML to improve MXM performance
<br>
+- Re-enabled the use of CMA and knem in the shared memory BTL
<br>
+- Updated mpirun manpage to correctly explain new map/rank/binding options
<br>
+- Numerous updates and performance improvements to OSHMEM
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16236.php">Howard Pritchard: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>Previous message:</strong> <a href="16234.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16236.php">Howard Pritchard: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>Reply:</strong> <a href="16236.php">Howard Pritchard: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>Reply:</strong> <a href="16237.php">Joshua Ladd: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
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
