<?
$subject_val = "[OMPI devel] Using BLCR tools to checkpoint Open MPI applications";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 15:52:19 2011" -->
<!-- isoreceived="20110727195219" -->
<!-- sent="Wed, 27 Jul 2011 12:52:46 -0700" -->
<!-- isosent="20110727195246" -->
<!-- name="Eric Roman" -->
<!-- email="ERoman_at_[hidden]" -->
<!-- subject="[OMPI devel] Using BLCR tools to checkpoint Open MPI applications" -->
<!-- id="20110727195246.GC1924_at_iocane.lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Using BLCR tools to checkpoint Open MPI applications<br>
<strong>From:</strong> Eric Roman (<em>ERoman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-27 15:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9563.php">Greg Watson: "Re: [OMPI devel] orte question"</a>
<li><strong>Previous message:</strong> <a href="9561.php">Josh Hursey: "[OMPI devel] Fwd: Upgrade trac on sourcehaven"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9580.php">Josh Hursey: "Re: [OMPI devel] Using BLCR tools to checkpoint Open MPI applications"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9580.php">Josh Hursey: "Re: [OMPI devel] Using BLCR tools to checkpoint Open MPI applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI Developers,
<br>
<p>We've been working on using Torque's checkpoint/restart support, along with BLCR
<br>
and Open MPI's C/R support, to perform C/R on parallel jobs running under
<br>
Torque.  The main issue here is that Open MPI requires the use of
<br>
ompi-checkpoint and ompi-restart commands to checkpoint the application, but
<br>
Torque uses cr_checkpoint and cr_restart to checkpoint job scripts, so an
<br>
adapter is required between the two interfaces.  I've written a small program,
<br>
called cr_mpirun, that meets this purpose.
<br>
<p>This code is now available on the BLCR web site that should enable you to use
<br>
BLCR cr_checkpoint and cr_restart commands to checkpoint Open MPI applications.
<br>
You can download it at the following URL:
<br>
<p><a href="https://upc-bugs.lbl.gov/blcr-dist/cr_mpirun/cr_mpirun-210.tar.gz">https://upc-bugs.lbl.gov/blcr-dist/cr_mpirun/cr_mpirun-210.tar.gz</a>
<br>
<p>This code can be used fairly reliably to invoke cr_checkpoint and cr_restart on
<br>
Open MPI applications.  In turn, this enables you to use Torque's
<br>
checkpoint/restart support on parallel jobs.  I've tested mainly with qhold and
<br>
qrls, but have also experimented with using Maui's preemptee and preemptor
<br>
classes.  
<br>
<p>This release is intended as a development release, meaning that this release is
<br>
not suitable for general production use, but should be used for testing.  There
<br>
are a number of issues that need to be worked out, and we need feedback from
<br>
Torque and Open MPI developers, and from users interested in testing or filing
<br>
bug reports.  
<br>
<p>There is a list of known issues documented in the BUGS file in the release.
<br>
There are HOWTO files in the release that describe the implementation,
<br>
workarounds for current problems, and usage of cr_mpirun.  
<br>
<p>Thanks for your interest.
<br>
<p>Sincerely,
<br>
Eric Roman
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9563.php">Greg Watson: "Re: [OMPI devel] orte question"</a>
<li><strong>Previous message:</strong> <a href="9561.php">Josh Hursey: "[OMPI devel] Fwd: Upgrade trac on sourcehaven"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9580.php">Josh Hursey: "Re: [OMPI devel] Using BLCR tools to checkpoint Open MPI applications"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9580.php">Josh Hursey: "Re: [OMPI devel] Using BLCR tools to checkpoint Open MPI applications"</a>
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
