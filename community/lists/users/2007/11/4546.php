<?
$subject_val = "Re: [OMPI users] ./configure error on windows while installing	openmpi-1.2.4(latest)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 13:31:22 2007" -->
<!-- isoreceived="20071128183122" -->
<!-- sent="Wed, 28 Nov 2007 19:31:18 +0100" -->
<!-- isosent="20071128183118" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ./configure error on windows while installing	openmpi-1.2.4(latest)" -->
<!-- id="1196274678.18085.419.camel_at_fkpc167.phc.chalmers.se" -->
<!-- inreplyto="DB07E060-FED2-46A5-A196-9B59F8894798_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ./configure error on windows while installing	openmpi-1.2.4(latest)<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 13:31:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4547.php">Bob Soliday: "[OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Previous message:</strong> <a href="4545.php">George Bosilca: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<li><strong>In reply to:</strong> <a href="4545.php">George Bosilca: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4554.php">geetha r: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-11-28 at 13:20 -0500, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; If your F77 compiler do not support array of LOGICAL variables (which  
</span><br>
<span class="quotelev1">&gt; seems to be the case if you look in the config.log file), then you're  
</span><br>
<span class="quotelev1">&gt; left with only one option. Remove the F77 support from the  
</span><br>
<span class="quotelev1">&gt; compilation. This means adding the --disable-mpi-f77 option to the ./ 
</span><br>
<span class="quotelev1">&gt; configure.
</span><br>
<p>It's a lot weirder than that.
<br>
<p>configure: WARNING: *** Fortran 77 REAL*8 does not have expected size!
<br>
configure: WARNING: *** Expected 8, got 8
<br>
configure: WARNING: *** Disabling MPI support for Fortran 77 REAL*8
<br>
<p>Somehow, 8/=8
<br>
<p>:-\
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4547.php">Bob Soliday: "[OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Previous message:</strong> <a href="4545.php">George Bosilca: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<li><strong>In reply to:</strong> <a href="4545.php">George Bosilca: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4554.php">geetha r: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
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
