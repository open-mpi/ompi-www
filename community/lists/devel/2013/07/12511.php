<?
$subject_val = "[OMPI devel] OMPI 1.7 - libevent warning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 11:18:02 2013" -->
<!-- isoreceived="20130701151802" -->
<!-- sent="Mon, 1 Jul 2013 11:17:55 -0400" -->
<!-- isosent="20130701151755" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI 1.7 - libevent warning" -->
<!-- id="3B567906-8DC4-4012-9D61-1CAE513E67D3_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI 1.7 - libevent warning<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 11:17:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12512.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14: error:	../../config/autogen_found_items.m4:274: file	'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Previous message:</strong> <a href="12510.php">Ralph Castain: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI version:1.7.2 on IB system.
<br>
<p>Test: everybody sends to everybody - Irecv, Isend, Wait. In total 1024 process.
<br>
<p>Warning:
<br>
&quot;[warn] opal_libevent2019 each event_base at once.
<br>
[warn] opal_libevent2019_event_base_loop: reentrant invocation.  Only one event_base_loop can run on each event_base at once.&quot;
<br>
<p>The problem doesn't show up with 512 ranks but only with 1024 ranks. 
<br>
My guess, we still have somewhere in openib btl
<br>
blocking free list allocation  that causes recursive call to progress.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12512.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14: error:	../../config/autogen_found_items.m4:274: file	'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Previous message:</strong> <a href="12510.php">Ralph Castain: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
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
