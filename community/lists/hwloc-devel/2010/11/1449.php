<?
$subject_val = "Re: [hwloc-devel] 1.0.3 .so version number";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  9 12:35:31 2010" -->
<!-- isoreceived="20101109173531" -->
<!-- sent="Tue, 9 Nov 2010 18:35:17 +0100" -->
<!-- isosent="20101109173517" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0.3 .so version number" -->
<!-- id="20101109173516.GK5785_at_const.umh.ac.be" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="119316346.419494.1289225881018.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0.3 .so version number<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-09 12:35:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1450.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1448.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3rc1r2757)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1441.php">Jeff Squyres: "[hwloc-devel] 1.0.3 .so version number"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 08 Nov 2010 15:18:01 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Here's a Trac colorized diff between the 1.0 branch from r2349 and the current HEAD:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset?old_path=/branches/v1.0&amp;old=2349&amp;new_path=/branches/v1.0&amp;new=HEAD">https://svn.open-mpi.org/trac/hwloc/changeset?old_path=/branches/v1.0&amp;old=2349&amp;new_path=/branches/v1.0&amp;new=HEAD</a>):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only interface change I see is this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -hwloc_linux_set_tid_cpubind(hwloc_topology_t topology __hwloc_attribute_unused, pid_t tid, hwloc_const_cpuset_t hwloc_set)
</span><br>
<span class="quotelev1">&gt; +hwloc_linux_set_tid_cpubind(hwloc_topology_t topology __hwloc_attribute_unused, pid_t tid __hwloc_attribute_unused, hwloc_const_cpuset_t hwloc_set __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which I don't believe impacts shared library linking (i.e., if an app used hwloc_linux_set_tid_cpubind() and compiled against hwloc 1.0.2, I believe it would still link successfully against the 1.0.3 libhwloc.  As such, I believe that this is a non-event, in terms of shared library versioning.
</span><br>
<p>I believe too.
<br>
<p><span class="quotelev1">&gt; I believe the version number should be 0:2:0.
</span><br>
<p>New implementation of the same interface, yes.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1450.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1448.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3rc1r2757)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1441.php">Jeff Squyres: "[hwloc-devel] 1.0.3 .so version number"</a>
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
