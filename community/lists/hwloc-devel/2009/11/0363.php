<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 19:03:22 2009" -->
<!-- isoreceived="20091112000322" -->
<!-- sent="Thu, 12 Nov 2009 01:03:14 +0100" -->
<!-- isosent="20091112000314" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333" -->
<!-- id="20091112000314.GF4729_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AFB4964.4010800_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 19:03:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0364.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0364.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0370.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 12 Nov 2009 00:31:48 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; The problem is that our hwloc/Linux does not implement
</span><br>
<span class="quotelev1">&gt; set_proc_cpubind() so far.
</span><br>
<p>But it can implement one that assumes that the target process is
<br>
singlethreaded, i.e. in hwloc_set_proc_cpubind distinguish between
<br>
HWLOC_CPUBIND_PROCESS being set or not, or by just passing the policy
<br>
flag as such to OS hooks.
<br>
<p><span class="quotelev1">&gt; * document in hwloc.h that it may bind a single thread if the
</span><br>
<span class="quotelev1">&gt; application (wrongly) passes a tid
</span><br>
<p>I'd really rather avoid even mentioning tids in the hwloc documentation
<br>
except saying &quot;don't use that, it's not portable, don't even ask, you'd
<br>
be horrified&quot;.
<br>
<p><span class="quotelev1">&gt; * document that hwloc_plpa_sched_setaffinity now works on processes
</span><br>
<span class="quotelev1">&gt; instead of pids and that application should use thread_t and
</span><br>
<span class="quotelev1">&gt; set_thread_cpubind for local threads
</span><br>
<p>Or pass 0 to express &quot;the current thread&quot;, which was already valid for
<br>
plpa_sched_setaffinity, and _is_ portable (and should already have been
<br>
the only thing that truly portable applications use).
<br>
<p><span class="quotelev1">&gt; * maybe return -ENOSYS on Linux if STRICT is given?
</span><br>
<p>I guess you mean return 0 if STRICT is not given, and mean &quot;it's not
<br>
strict because we haven't actually done it for all the threads, or even
<br>
not at all&quot;?  I'd really rather not lie like this.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0364.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0364.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0370.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
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
