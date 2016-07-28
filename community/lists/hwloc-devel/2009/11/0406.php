<?
$subject_val = "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 09:18:57 2009" -->
<!-- isoreceived="20091120141857" -->
<!-- sent="Fri, 20 Nov 2009 08:18:53 -0600" -->
<!-- isosent="20091120141853" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2" -->
<!-- id="4B06A54D.20703_at_sgi.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091119223900.GN5099_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Michael Raymond (<em>mraymond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-20 09:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0407.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0405.php">Brice Goglin: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>In reply to:</strong> <a href="0403.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0407.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Reply:</strong> <a href="0407.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;It looks like I spoke too soon on the fix.  That solves the problem
<br>
but it keeps the Miscs from being created and in some situations I'd
<br>
like to keep the Miscs but not the nodes.  The attached patch does that
<br>
for me.
<br>
<p>Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Michael Raymond, le Thu 19 Nov 2009 14:33:49 -0600, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; --- hwloc-0.9.2/src/topology-linux.c	2009-11-03 16:40:31.000000000 -0600
</span><br>
<span class="quotelev2">&gt;&gt; +++ hwloc-new//src/topology-linux.c	2009-11-19 14:20:43.630035434 -0600
</span><br>
<span class="quotelev2">&gt;&gt; @@ -536,6 +536,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;    struct dirent *dirent;
</span><br>
<span class="quotelev2">&gt;&gt;    hwloc_obj_t node;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +  if (topology-&gt;ignored_types[HWLOC_OBJ_NODE] ==
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_IGNORE_TYPE_ALWAYS) {
</span><br>
<span class="quotelev2">&gt;&gt; +	  return;
</span><br>
<span class="quotelev2">&gt;&gt; +  }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;    dir = hwloc_opendir(path, topology-&gt;backend_params.sysfs.root_fd);
</span><br>
<span class="quotelev2">&gt;&gt;    if (dir)
</span><br>
<span class="quotelev2">&gt;&gt;      {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmm, indeed.  And it will happen on other OSes where we get the
</span><br>
<span class="quotelev1">&gt; distances too, e.g. Solaris.  Does the attached more generic patch
</span><br>
<span class="quotelev1">&gt; properly fixes it too?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Also I'm concerned about the value of CPUSET_MASK_LEN in
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_admin_disable_set_from_cpuset().  It's only 64 characters but our
</span><br>
<span class="quotelev2">&gt;&gt; Linux boxes can have to 2048 processors.  I don't think there's any harm
</span><br>
<span class="quotelev2">&gt;&gt; in bumping that up a little.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmm, even better, we can avoid using a constant size completely, I've
</span><br>
<span class="quotelev1">&gt; commited a fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Michael A. Raymond
Message Passing Toolkit Team
Silicon Graphics Inc
(651) 683-3434

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0406/hwloc.diff">hwloc.diff</a>
</ul>
<!-- attachment="hwloc.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0407.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0405.php">Brice Goglin: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>In reply to:</strong> <a href="0403.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0407.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Reply:</strong> <a href="0407.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
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
