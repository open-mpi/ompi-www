<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 10:58:27 2008" -->
<!-- isoreceived="20080922145827" -->
<!-- sent="Mon, 22 Sep 2008 10:58:21 -0400" -->
<!-- isosent="20080922145821" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="AD9E2A2B-5DDE-45B0-8114-61B4099F0048_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48535380809220710y6f775740lc04da30ee983fa3b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 10:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6654.php">Jeff Squyres: "Re: [OMPI users] Migrating from MPICH-1.2.6 to OpenMPI-1.2.7"</a>
<li><strong>Previous message:</strong> <a href="6652.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6652.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2008, at 10:10 AM, Brian Harker wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the reply...crap, $HOME/openmpi/lib does contains all the
</span><br>
<span class="quotelev1">&gt; various lilbmpi* files as well as mpi.mod,
</span><br>
<p>That should be correct.
<br>
<p><span class="quotelev1">&gt; but still get the same
</span><br>
<span class="quotelev1">&gt; error at compile-time.  Yes, I made sure to specifically build openMPI
</span><br>
<span class="quotelev1">&gt; with ifort 10.1.012, and did run the --showme command right after
</span><br>
<span class="quotelev1">&gt; installation to make sure the wrapper compiler was using ifort as
</span><br>
<span class="quotelev1">&gt; well.
</span><br>
<p>Ok, good.
<br>
<p><span class="quotelev1">&gt; Before posting to this mailing list, I did uninstall and re-install
</span><br>
<span class="quotelev1">&gt; openMPI several times to make sure I had a clean install.  Still no
</span><br>
<span class="quotelev1">&gt; luck.  :(
</span><br>
<p>Ok.  Have you checked around your machine to ensure that there is no  
<br>
other mpi.mod that the compiler is finding first?  E.g., in your  
<br>
MPICH2 installation?  Or is Open MPI installed by your distro,  
<br>
perchance?  You might want to try a &quot;rpm -qa | grep openmpi&quot; (or  
<br>
whatever your distro's equivalent is to check already-installed  
<br>
packages).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6654.php">Jeff Squyres: "Re: [OMPI users] Migrating from MPICH-1.2.6 to OpenMPI-1.2.7"</a>
<li><strong>Previous message:</strong> <a href="6652.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6652.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6657.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
