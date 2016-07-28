<?
$subject_val = "[OMPI devel] RFC: Enable thread support by default";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  8 22:00:00 2012" -->
<!-- isoreceived="20121209030000" -->
<!-- sent="Sat, 8 Dec 2012 18:59:49 -0800" -->
<!-- isosent="20121209025949" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Enable thread support by default" -->
<!-- id="87B0E547-0D58-41BA-9C17-1403DF63A439_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Enable thread support by default<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-08 21:59:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<li><strong>Previous message:</strong> <a href="11839.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<li><strong>Reply:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:    Enable both OPAL and libevent thread support by default
<br>
<p>WHY:      We need to support threaded operations for MPI-3, and for MPI_THREAD_MULTIPLE.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enabling thread support by default is the only way to ensure we fix all the problems.
<br>
<p>WHEN:   COB, Thurs Dec 13
<br>
<p><p>This was a decision reached at the OMPI Developers meeting, so the RFC is mostly just a &quot;heads up&quot; to everyone that this will happen. We spent some time recently profiling the impact on performance and found it to be significant: 100ns in shared memory latency, and a similar number to TCP message latency. However, without setting the support &quot;on&quot; by default, we will never address those problems. Thus, the group decided that we would enable support by default and being a concerted effort to reduce and/or remove the performance impact.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<li><strong>Previous message:</strong> <a href="11839.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
<li><strong>Reply:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: Enable thread support by default"</a>
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
