<?
$subject_val = "[OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 21:21:38 2015" -->
<!-- isoreceived="20150903012138" -->
<!-- sent="Wed, 2 Sep 2015 18:21:35 -0700" -->
<!-- isosent="20150903012135" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.0 issue" -->
<!-- id="7240D54E-14C1-4534-91C2-F7320B2205D1_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-02 21:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17920.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17918.php">Christopher Samuel: "Re: [OMPI devel] PMI2 in Slurm 14.11.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17920.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17920.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Maybe reply:</strong> <a href="17927.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17953.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I regret to say that 1.10.0 is hitting an issue with at least one upstream distro. Apparently, there is a symbol conflict between the PSM and PSM2 libraries that precludes building both of those MTLs at the same time. This is leading the distro to push for release of two OMPI 1.10.0 builds - one with PSM and the other with PSM2.
<br>
<p>IMO, this is a very undesirable situation. I agree with the distro that delaying release for some significant time as this would impact everyone else&#226;&#128;&#153;s users. Therefore, assuming that the PSM team is unable to quickly resolve the problem in their libraries, my inclination is to release an immediate 1.10.1 with the PSM2 MTL removed.
<br>
<p>I&#226;&#128;&#153;m soliciting input - any opinions?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17920.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17918.php">Christopher Samuel: "Re: [OMPI devel] PMI2 in Slurm 14.11.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17920.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17920.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Maybe reply:</strong> <a href="17927.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17953.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
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
