<?
$subject_val = "Re: [OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 18:53:02 2009" -->
<!-- isoreceived="20090825225302" -->
<!-- sent="Tue, 25 Aug 2009 15:51:41 -0700" -->
<!-- isosent="20090825225141" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="4A946AFD.9020309_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0C11B4F0-5FF0-4E16-B83D-060D0A589EF9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca_pml_ob1_send blocks<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-25 18:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10487.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>In reply to:</strong> <a href="10481.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10487.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10487.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 24, 2009, at 2:18 PM, Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm seeing MPI_Send block in mca_pml_ob1_send. The packet is shorter
</span><br>
<span class="quotelev2">&gt;&gt; than the eager transmit limit for shared memory (3300 bytes &lt; 4096
</span><br>
<span class="quotelev2">&gt;&gt; bytes). I'm trying to determine if MPI_Send is blocking due to a
</span><br>
<span class="quotelev2">&gt;&gt; deadlock. Will MPI_Send block even when sending a packet eagerly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It can, yes.  Message size is one of multiple factors that can cause  
</span><br>
<span class="quotelev1">&gt; MPI_SEND to block -- so yes, it's even possible for short/eager  
</span><br>
<span class="quotelev1">&gt; messages to block in MPI_SEND.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you tell if the corresponding receive has already been posted and  
</span><br>
<span class="quotelev1">&gt; is making progress in the receiver?
</span><br>
<p>Hi Jeff,
<br>
<p>The receiver posts a single MPI_Irecv in advance, and as soon as it's 
<br>
received a message it posts a new MPI_Irecv. However, there are 
<br>
multiple processes sending to the receiver, and only one MPI_Irecv posted.
<br>
<p>Cheers,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10487.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>In reply to:</strong> <a href="10481.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10487.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10487.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
