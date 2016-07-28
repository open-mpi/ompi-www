<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 19:23:03 2009" -->
<!-- isoreceived="20091112002303" -->
<!-- sent="Thu, 12 Nov 2009 01:22:58 +0100" -->
<!-- isosent="20091112002258" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333" -->
<!-- id="20091112002258.GH4729_at_const.famille.thibault.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091112000314.GF4729_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2009-11-11 19:22:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0371.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0371.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another way to go is in hwloc_plpa_sched_setaffinity put in
<br>
#ifdef HWLOC_LINUX_SYS some code that calls the internal
<br>
hwloc_linux_set_tid_cpubind (with a strong comment that nobody else
<br>
should call it), so that
<br>
<p>- existing linux plpa users can have the same behavior, but we can
<br>
&nbsp;&nbsp;document here that calling hwloc_plpa_sched_setaffinity with a pid
<br>
&nbsp;&nbsp;different than zero portably means something only for single-threaded
<br>
&nbsp;&nbsp;processes.
<br>
- non-linux plpa users are restricted to what really is portable.
<br>
- we don't have to cripple the hwloc interface (i.e. document that we
<br>
&nbsp;&nbsp;accept non-portable input) just for the linuxish interface.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0371.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0371.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
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
