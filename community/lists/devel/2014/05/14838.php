<?
$subject_val = "[OMPI devel] RFC: remove PMI component in OMPI/RTE framework";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 25 13:08:27 2014" -->
<!-- isoreceived="20140525170827" -->
<!-- sent="Sun, 25 May 2014 10:08:23 -0700" -->
<!-- isosent="20140525170823" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: remove PMI component in OMPI/RTE framework" -->
<!-- id="B90142C0-9D3A-4113-B370-C5C73ADAE12B_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: remove PMI component in OMPI/RTE framework<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-25 13:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14839.php">Gilles Gouaillardet: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<li><strong>Previous message:</strong> <a href="14837.php">Siddhartha Jana: "[OMPI devel] Threshold for pinning down user-buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14851.php">Thomas Naughton: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14851.php">Thomas Naughton: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:  remove stale and unmaintained component in ompi/rte framework
<br>
<p>WHY:   because it is unused, unmaintained, and doesn't even compile?
<br>
<p>WHEN:  without objections, after telecon on June 9
<br>
<p>HOW:   svn del ompi/rte/pmi
<br>
<p>This was a component added by Brian as a test of the ompi/rte framework while we developed that system. It never really had any purpose other than to provide an alternative to ORTE while we tested the revised integration. So far as we know, nobody ever used it in an actual installation.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14839.php">Gilles Gouaillardet: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<li><strong>Previous message:</strong> <a href="14837.php">Siddhartha Jana: "[OMPI devel] Threshold for pinning down user-buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14851.php">Thomas Naughton: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14851.php">Thomas Naughton: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
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
