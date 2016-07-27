<?
$subject_val = "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 17:39:05 2009" -->
<!-- isoreceived="20091119223905" -->
<!-- sent="Thu, 19 Nov 2009 23:39:00 +0100" -->
<!-- isosent="20091119223900" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2" -->
<!-- id="20091119223900.GN5099_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B05ABAD.8040206_at_sgi.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-19 17:39:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0404.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1365)"</a>
<li><strong>Previous message:</strong> <a href="0402.php">Michael Raymond: "[hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0402.php">Michael Raymond: "[hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0406.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Reply:</strong> <a href="0406.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael Raymond, le Thu 19 Nov 2009 14:33:49 -0600, a &#233;crit :
<br>
<span class="quotelev1">&gt; --- hwloc-0.9.2/src/topology-linux.c	2009-11-03 16:40:31.000000000 -0600
</span><br>
<span class="quotelev1">&gt; +++ hwloc-new//src/topology-linux.c	2009-11-19 14:20:43.630035434 -0600
</span><br>
<span class="quotelev1">&gt; @@ -536,6 +536,10 @@
</span><br>
<span class="quotelev1">&gt;    struct dirent *dirent;
</span><br>
<span class="quotelev1">&gt;    hwloc_obj_t node;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +  if (topology-&gt;ignored_types[HWLOC_OBJ_NODE] ==
</span><br>
<span class="quotelev1">&gt; HWLOC_IGNORE_TYPE_ALWAYS) {
</span><br>
<span class="quotelev1">&gt; +	  return;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;    dir = hwloc_opendir(path, topology-&gt;backend_params.sysfs.root_fd);
</span><br>
<span class="quotelev1">&gt;    if (dir)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<p>Mmm, indeed.  And it will happen on other OSes where we get the
<br>
distances too, e.g. Solaris.  Does the attached more generic patch
<br>
properly fixes it too?
<br>
<p><span class="quotelev1">&gt;   Also I'm concerned about the value of CPUSET_MASK_LEN in
</span><br>
<span class="quotelev1">&gt; hwloc_admin_disable_set_from_cpuset().  It's only 64 characters but our
</span><br>
<span class="quotelev1">&gt; Linux boxes can have to 2048 processors.  I don't think there's any harm
</span><br>
<span class="quotelev1">&gt; in bumping that up a little.
</span><br>
<p>Mmm, even better, we can avoid using a constant size completely, I've
<br>
commited a fix.
<br>
<p>Samuel
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0403/patch">patch</a>
</ul>
<!-- attachment="patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0404.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1365)"</a>
<li><strong>Previous message:</strong> <a href="0402.php">Michael Raymond: "[hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0402.php">Michael Raymond: "[hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0406.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Reply:</strong> <a href="0406.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
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
