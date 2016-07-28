<?
$subject_val = "[OMPI devel] 1.7.4 status update";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 21 18:41:53 2014" -->
<!-- isoreceived="20140121234153" -->
<!-- sent="Tue, 21 Jan 2014 15:41:18 -0800" -->
<!-- isosent="20140121234118" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4 status update" -->
<!-- id="A5DE4550-447E-4EC3-A5D7-D2B07D5FD982_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4 status update<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-21 18:41:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13831.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Reply:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I think it is safe to say that we are not going to get a release candidate out tonight - more Fortran problems have surfaced, along with the need to complete the ROMIO review. I have therefore concluded we cannot release 1.7.4 this week. This leaves us with a couple of options:
<br>
<p>1. continue down this path, hopefully releasing 1.7.4 sometime next week, followed by 1.7.5 in the latter half of Feb. The risk here is that any further slippage in 1.7.4/5 means that we will not release it as we must roll 1.8.0 by mid-March. I'm not too concerned about most of those cmr's as they could be considered minor bug fixes and pushed to the 1.8 series, but it leaves oshmem potentially pushed into 1.9.0.
<br>
<p>2. &quot;promote&quot; all the 1.7.5 cmr's into 1.7.4 and just do a single release before ending the series. This eases the immediate schedule crunch, but means we will have to deal with all the bugs that surface when we destabilize the 1.7 branch again.
<br>
<p><p>I'm open to suggestions. Please be prepared to discuss at next Tues telecon.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13831.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Reply:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
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
