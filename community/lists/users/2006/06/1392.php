<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 12 09:46:42 2006" -->
<!-- isoreceived="20060612134642" -->
<!-- sent="Mon, 12 Jun 2006 09:46:28 -0400" -->
<!-- isosent="20060612134628" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] F90 interfaces again" -->
<!-- id="0DE727E7-CAED-4CAF-8D25-C650DFAC5A57_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0606091233180.13490_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-12 09:46:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1393.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Previous message:</strong> <a href="1391.php">Michael Alexander: "[OMPI users] CfP Workshop on XEN in HPC Cluster and Grid Computing Environments (XHPC)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1393.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 9, 2006, at 12:33 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 8 Jun 2006, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             call MPI_WAITALL(3,sp_request,MPI_STATUSES_IGNORE,ier)
</span><br>
<span class="quotelev2">&gt;&gt;                                                                   1
</span><br>
<span class="quotelev2">&gt;&gt; Error: Generic subroutine 'mpi_waitall' at (1) is not consistent with
</span><br>
<span class="quotelev2">&gt;&gt; a specific subroutine interface
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Issue, 3rd argument of MPI_WAITALL expects an integer array normally,
</span><br>
<span class="quotelev2">&gt;&gt; but this constant is permitted by the standard.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is with OpenMPI 1.2a1r10186,  I can check the details of the
</span><br>
<span class="quotelev2">&gt;&gt; scripts and generated files next week for whatever is the latest
</span><br>
<span class="quotelev2">&gt;&gt; version.  But odds are this has not been spotted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which compiler are you using?  I'm trying to replicate, and  
</span><br>
<span class="quotelev1">&gt; gfortran isn't getting mad at me (which is weird, because I would  
</span><br>
<span class="quotelev1">&gt; have expected it to get very angry at me).
</span><br>
<p>I'm using g95 and I configure with:
<br>
<p>./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90- 
<br>
size=large --enable-static --with-f90-max-array-dim=3
<br>
<p>Downloaded &quot;openmpi-1.2a1r10297&quot; today.
<br>
<p>Looking at the scripts I believe this problem was fixed between 10186  
<br>
and 10297.
<br>
<p>I can't test until I check for and if needed implement my fixes to  
<br>
the other interfaces I mentioned previously.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1393.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Previous message:</strong> <a href="1391.php">Michael Alexander: "[OMPI users] CfP Workshop on XEN in HPC Cluster and Grid Computing Environments (XHPC)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1393.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
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
