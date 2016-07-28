<?
$subject_val = "Re: [OMPI users] Infiniband problem, kernel mismatch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 11:01:53 2010" -->
<!-- isoreceived="20101122160153" -->
<!-- sent="Mon, 22 Nov 2010 11:01:48 -0500" -->
<!-- isosent="20101122160148" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband problem, kernel mismatch" -->
<!-- id="F0BA3D05-E1D0-417D-9046-1F3A78613CF8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinCt3WC=50GMYDLh31faGiMv1EVMwAXvV43-x7h_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband problem, kernel mismatch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 11:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14864.php">Jeff Squyres: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14862.php">Jeff Squyres: "Re: [OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
<li><strong>In reply to:</strong> <a href="14834.php">HeeJin Kim: "[OMPI users] Infiniband problem, kernel mismatch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14986.php">Peter Kjellström: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 18, 2010, at 7:03 PM, HeeJin Kim wrote:
<br>
<p><span class="quotelev1">&gt; I'm using Mellanox infiniband network card and trying to run it with openmpi.
</span><br>
<span class="quotelev1">&gt; The problem is that I can connect and communicate between nodes, but I'm not sure whether it is in a correct state or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two version of openmpi, one is compiled with mca-btl-openib and the other is without btl-openib.(I checked it in ompi_info)
</span><br>
<p>You should ensure that the version of Open MPI available on all nodes is the same exact version.
<br>
<p><span class="quotelev1">&gt; And my jobs are running well using the openmpi without btl-openib, 
</span><br>
<span class="quotelev1">&gt; but when I run the exactly same job using openmpi with btl-openmpi, I meet the  following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mlx4: There is a mismatch between the kernel and the userspace libraries: Kernel does not support XRC. Exiting.
</span><br>
<p>At first blush, this sounds like a problem with your OFED installation.  You should contact your IB vendor for assistance.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14864.php">Jeff Squyres: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14862.php">Jeff Squyres: "Re: [OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
<li><strong>In reply to:</strong> <a href="14834.php">HeeJin Kim: "[OMPI users] Infiniband problem, kernel mismatch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14986.php">Peter Kjellström: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
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
