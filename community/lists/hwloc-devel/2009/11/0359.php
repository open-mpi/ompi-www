<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 16:31:08 2009" -->
<!-- isoreceived="20091111213108" -->
<!-- sent="Wed, 11 Nov 2009 22:31:03 +0100" -->
<!-- isosent="20091111213103" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="20091111213103.GW4729_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AFAE796.1090405_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 16:31:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0360.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>In reply to:</strong> <a href="0357.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0368.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 11 Nov 2009 17:34:30 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Would it make sense to add support for the CPUBIND_THREAD policy in
</span><br>
<span class="quotelev1">&gt; set_proc_cpubind? (and maybe rename it into set_pid_cpubind, or add
</span><br>
<span class="quotelev1">&gt; set_thread_pid_cpubind).
</span><br>
<p>I answered in the ticket itself: linux 2.4 insanely mixed the notion of
<br>
pid and threads and it's still a mess.  An application can't get a tid
<br>
without explicitely calling the linux-only system call, while it could
<br>
just use the portable pthread_self() and such.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0360.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>In reply to:</strong> <a href="0357.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0368.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
