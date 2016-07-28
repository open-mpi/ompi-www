<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 11:34:39 2009" -->
<!-- isoreceived="20091111163439" -->
<!-- sent="Wed, 11 Nov 2009 17:34:30 +0100" -->
<!-- isosent="20091111163430" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="4AFAE796.1090405_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AF824A3.6090200_at_inria.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 11:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>In reply to:</strong> <a href="0353.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0359.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0359.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just pushed the PLPA stuff to trunk. One problem we have is that we
<br>
cannot the binding-capability in the PLPA-interface. The reason is that
<br>
PLPA wants to bind a thread given by a pid (ie do sched_setaffinity).
<br>
hwloc only has the ability to bind the current thread, or to bind an
<br>
entire process given by a pid.  Would it make sense to add support for
<br>
the CPUBIND_THREAD policy in set_proc_cpubind? (and maybe rename it into
<br>
set_pid_cpubind, or add set_thread_pid_cpubind).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>In reply to:</strong> <a href="0353.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0359.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0359.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
