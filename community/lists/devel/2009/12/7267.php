<?
$subject_val = "[OMPI devel] ORTE thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 28 20:37:11 2009" -->
<!-- isoreceived="20091229013711" -->
<!-- sent="Mon, 28 Dec 2009 18:37:04 -0700" -->
<!-- isosent="20091229013704" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] ORTE thread safety" -->
<!-- id="E4546C8C-272D-477C-9FB3-B9B82D427C3E_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] ORTE thread safety<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-28 20:37:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7268.php">Joshua Hursey: "[OMPI devel] Fwd: [osl-staff] [all-osl-users] OSL systems maintenance"</a>
<li><strong>Previous message:</strong> <a href="7266.php">Ashley Pittman: "[OMPI devel] padb and spawned jobs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I have mentioned this on several recent OMPI telecons, but wanted to (a) ensure people on the calls remember, and (b) alert the broader audience to an upcoming significant change to the ORTE layer to make it thread safe - i.e., to allow operation with --enable-progress-thread set.
<br>
<p>This work will impact almost exclusively the ORTE layer. There may be a few minor changes in the OMPI components that directly interface to ORTE - specifically, the &quot;orte&quot; pubsub and dpm framework components may need some minor changes to be compatible with the final update. However, the ORTE layer will definitely see major change (in the plm and odls base functions and a few other places) as the current implementation cannot support progress threads.
<br>
<p>I will keep the list posted as this work progresses on a side branch. I will try to bring over changes incrementally as much as possible, but expect there will be one large commit required at some point. I expect this all to be completed by end of Jan.
<br>
<p>Just a &quot;heads up&quot; :-)
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7268.php">Joshua Hursey: "[OMPI devel] Fwd: [osl-staff] [all-osl-users] OSL systems maintenance"</a>
<li><strong>Previous message:</strong> <a href="7266.php">Ashley Pittman: "[OMPI devel] padb and spawned jobs"</a>
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
