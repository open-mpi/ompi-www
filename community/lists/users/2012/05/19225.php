<?
$subject_val = "[OMPI users] ompi mca mxm version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 23:02:25 2012" -->
<!-- isoreceived="20120509030225" -->
<!-- sent="Wed, 9 May 2012 11:02:14 +0800" -->
<!-- isosent="20120509030214" -->
<!-- name="Derek Gerstmann" -->
<!-- email="derek.gerstmann_at_[hidden]" -->
<!-- subject="[OMPI users] ompi mca mxm version" -->
<!-- id="C9014FCE-5F7A-4280-B876-A75FFD3AAC6B_at_uwa.edu.au" -->
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
<strong>Subject:</strong> [OMPI users] ompi mca mxm version<br>
<strong>From:</strong> Derek Gerstmann (<em>derek.gerstmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 23:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19226.php">Mike Dubman: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Previous message:</strong> <a href="19224.php">Jeff Squyres (jsquyres): "[OMPI users] The Architecture of Open Source Applications (vol 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19226.php">Mike Dubman: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Reply:</strong> <a href="19226.php">Mike Dubman: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Maybe reply:</strong> <a href="19247.php">Derek Gerstmann: "Re: [OMPI users] ompi mca mxm version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What versions of OpenMPI and the Mellanox MXM libraries have been tested and verified to work?
<br>
<p>We are currently trying to build OpenMPI v1.5.5 against the MXM 1.0.601 (included in the MLNX_OFED_LINUX-1.5.3-3.0.0 distribution) and are getting build errors.
<br>
<p>Specifically, there's a single undefined type (mxm_wait_t) being used in the OpenMPI tree:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.5.5/ompi/mca/mtl/mxm/mtl_mxm_send.c:44	mxm_wait_t wait;
<br>
<p>There is no mxm_wait_t defined anywhere in the current MXM API (/opt/mellanox/mxm/include/mxm/api), which suggests a version mismatch.
<br>
<p>The OpenMPI v1.6 branch has a note in the readme saying &quot;Minor Fixes for Mellanox MXM&quot; were added, but the same undefined mxm_wait_t is still being used.
<br>
<p>What versions of OpenMPI and MXM are verified to work?
<br>
<p>Thanks!
<br>
<p>-[dg]
<br>
<p>Derek Gerstmann, PhD Student
<br>
The University of Western Australia (UWA)
<br>
<p>w: <a href="http://local.ivec.uwa.edu.au/~derek">http://local.ivec.uwa.edu.au/~derek</a>
<br>
e: derek.gerstmann [at] icrar.org
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19226.php">Mike Dubman: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Previous message:</strong> <a href="19224.php">Jeff Squyres (jsquyres): "[OMPI users] The Architecture of Open Source Applications (vol 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19226.php">Mike Dubman: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Reply:</strong> <a href="19226.php">Mike Dubman: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Maybe reply:</strong> <a href="19247.php">Derek Gerstmann: "Re: [OMPI users] ompi mca mxm version"</a>
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
