<?
$subject_val = "[OMPI devel] getting config.guess/config.sub from upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 15:46:00 2008" -->
<!-- isoreceived="20080304204600" -->
<!-- sent="Tue, 4 Mar 2008 21:45:47 +0100" -->
<!-- isosent="20080304204547" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] getting config.guess/config.sub from upstream" -->
<!-- id="20080304204547.GB18788_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> [OMPI devel] getting config.guess/config.sub from upstream<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 15:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3355.php">Jeff Squyres: "Re: [OMPI devel] getting config.guess/config.sub from upstream"</a>
<li><strong>Previous message:</strong> <a href="3353.php">Greg Watson: "[OMPI devel] Fwd: OpenMPI changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3355.php">Jeff Squyres: "Re: [OMPI devel] getting config.guess/config.sub from upstream"</a>
<li><strong>Reply:</strong> <a href="3355.php">Jeff Squyres: "Re: [OMPI devel] getting config.guess/config.sub from upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Please note that the CVS repo for config.guess and config.sub is
<br>
outdated, development has moved to use git.
<br>
ompi_trunk/config/distscript.csh could be adjusted to pull from
<br>
&lt;<a href="http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.guess;hb=master">http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.guess;hb=master</a>&gt;
<br>
and likewise for config.sub.  I'm too dumb to fix the csh script though,
<br>
for me it seems to always fail the download (it did that before, too).
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3355.php">Jeff Squyres: "Re: [OMPI devel] getting config.guess/config.sub from upstream"</a>
<li><strong>Previous message:</strong> <a href="3353.php">Greg Watson: "[OMPI devel] Fwd: OpenMPI changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3355.php">Jeff Squyres: "Re: [OMPI devel] getting config.guess/config.sub from upstream"</a>
<li><strong>Reply:</strong> <a href="3355.php">Jeff Squyres: "Re: [OMPI devel] getting config.guess/config.sub from upstream"</a>
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
