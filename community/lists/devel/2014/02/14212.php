<?
$subject_val = "[OMPI devel] 1.7.5 status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 21 16:19:22 2014" -->
<!-- isoreceived="20140221211922" -->
<!-- sent="Fri, 21 Feb 2014 13:18:11 -0800" -->
<!-- isosent="20140221211811" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.5 status" -->
<!-- id="5DF0BE0B-1EAC-4020-BCE6-AFFDF57A302B_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.5 status<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-21 16:18:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14213.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14211.php">Josh Hursey: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14213.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Reply:</strong> <a href="14213.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Just an end-of-week status update on the 1.7.5 branch. With most CMRs applied, it doesn't look too bad. We still have failures in the following MPI functions:
<br>
<p>* intercomm_create - was supposed to be fixed by the coll/ml CMR, but apparently was not
<br>
<p>* datatype/idx_null
<br>
<p>* collective/ireduce_loc 
<br>
<p>* collective/ibcast_struct
<br>
<p>* topology/distgraph1
<br>
<p>The shmem code is showing roughly a 20% failure rate on its test suite. Some of those are due to running with too many processors (test errors out with that message), but the majority of them are OSHMEM calling abort for some reason. This is with TCP under CentOS using gcc.
<br>
<p>My test results are here:  <a href="http://mtt.open-mpi.org/index.php?do_redir=2154">http://mtt.open-mpi.org/index.php?do_redir=2154</a>
<br>
<p>I'd like to see us resolve the MPI problems, or at least certify that they are not a regression from 1.7.4. I'm comfortable releasing the shmem code in a &quot;as good as we can get&quot; mode (since there is no apparent damage to the MPI side), with an accompanying &quot;known defects&quot; file and a plan on fixing the problems.
<br>
<p>Still on the table:
<br>
<p>* usnic UDP upgrade
<br>
<p>* ob1 optimization
<br>
<p>* SGI xpmem support
<br>
<p>* direct modex option
<br>
<p>* atomics selection
<br>
<p>HTH
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14213.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14211.php">Josh Hursey: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14213.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Reply:</strong> <a href="14213.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 status"</a>
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
