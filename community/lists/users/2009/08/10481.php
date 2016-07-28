<?
$subject_val = "Re: [OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 10:14:23 2009" -->
<!-- isoreceived="20090825141423" -->
<!-- sent="Tue, 25 Aug 2009 10:14:18 -0400" -->
<!-- isosent="20090825141418" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="0C11B4F0-5FF0-4E16-B83D-060D0A589EF9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A92D974.7030706_at_bcgsc.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-25 10:14:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10482.php">Jayanta Roy: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile 	errors"</a>
<li><strong>Previous message:</strong> <a href="10480.php">Jason Palmer: "[OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>In reply to:</strong> <a href="10466.php">Shaun Jackman: "[OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10486.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10486.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2009, at 2:18 PM, Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; I'm seeing MPI_Send block in mca_pml_ob1_send. The packet is shorter
</span><br>
<span class="quotelev1">&gt; than the eager transmit limit for shared memory (3300 bytes &lt; 4096
</span><br>
<span class="quotelev1">&gt; bytes). I'm trying to determine if MPI_Send is blocking due to a
</span><br>
<span class="quotelev1">&gt; deadlock. Will MPI_Send block even when sending a packet eagerly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>It can, yes.  Message size is one of multiple factors that can cause  
<br>
MPI_SEND to block -- so yes, it's even possible for short/eager  
<br>
messages to block in MPI_SEND.
<br>
<p>Can you tell if the corresponding receive has already been posted and  
<br>
is making progress in the receiver?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10482.php">Jayanta Roy: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile 	errors"</a>
<li><strong>Previous message:</strong> <a href="10480.php">Jason Palmer: "[OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>In reply to:</strong> <a href="10466.php">Shaun Jackman: "[OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10486.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10486.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
