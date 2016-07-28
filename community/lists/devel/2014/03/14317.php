<?
$subject_val = "[OMPI devel] 1.7.5 status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 18:50:51 2014" -->
<!-- isoreceived="20140310225051" -->
<!-- sent="Mon, 10 Mar 2014 15:50:23 -0700" -->
<!-- isosent="20140310225023" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.5 status" -->
<!-- id="7F200932-06B7-4B32-91B9-200CED450BCD_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-03-10 18:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14318.php">Dave Goodell (dgoodell): "[OMPI devel] onesided/test_acc2 failures"</a>
<li><strong>Previous message:</strong> <a href="14316.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Here's a quick status for our discussion tomorrow on 1.7.5:
<br>
<p>MPI tests
<br>
<p>* idx_null continues to fail
<br>
<p>* other failures may be fixed due to CMR that came after my tests started
<br>
<p>OSHMEM tests
<br>
<p>* quite a few failures
<br>
<p>* performance tests uniformly fail - finally had to just abort them and set them to be skipped from now on
<br>
<p>Link to OSHMEM failures:
<br>
<p><a href="http://mtt.open-mpi.org/index.php?do_redir=2156">http://mtt.open-mpi.org/index.php?do_redir=2156</a>
<br>
<p>Right now, I'm leaning on releasing 1.7.5 with OSHMEM *disabled* by default, with a plan to enable OSHMEM by default once the code stabilizes and becomes less error prone.
<br>
<p>Talk to you tomorrow
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14318.php">Dave Goodell (dgoodell): "[OMPI devel] onesided/test_acc2 failures"</a>
<li><strong>Previous message:</strong> <a href="14316.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
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
