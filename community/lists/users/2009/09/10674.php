<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 21:44:21 2009" -->
<!-- isoreceived="20090918014421" -->
<!-- sent="Fri, 18 Sep 2009 10:44:11 +0900" -->
<!-- isosent="20090918014411" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="4AB2E5EB.8070700_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8E3275C4-A3CD-4497-90D3-1172EF69B43A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multi-threading  with OpenMPI ?<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 21:44:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10675.php">Hodgess, Erin: "[OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10673.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>In reply to:</strong> <a href="10670.php">Jeff Squyres: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10676.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10676.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Jeff, Ralph,
<br>
<p>Yes, I call MPI_COMM_SPAWN in multiple threads simultaneously.
<br>
Because I need to expose my parallel algorithm as a web service, I need 
<br>
multiple clients connect and execute my logic as same time(ie mutiple 
<br>
threads).
<br>
For each client , a new thread is created (by Web service framework) and 
<br>
inside the thread,MPI_Init_Thread() is called if the MPI hasnt been 
<br>
initialized.
<br>
The the thread calls MPI_COMM__SPAWN and create new processes.
<br>
<p>So ,if this is the case isn't there any workarounds ?
<br>
<p>Thanks in advance,
<br>
umanga
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 16, 2009, at 9:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Only the obvious, and not very helpful one: comm_spawn isn't thread
</span><br>
<span class="quotelev2">&gt;&gt; safe at this time. You'll need to serialize your requests to that
</span><br>
<span class="quotelev2">&gt;&gt; function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is likely the cause of your issues if you are calling 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SPAWN in multiple threads simultaneously.  Can you verify?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If not, we'll need to dig a little deeper to figure out what's going 
</span><br>
<span class="quotelev1">&gt; on.  But Ralph is right -- read up on the THREAD_MULTIPLE constraints 
</span><br>
<span class="quotelev1">&gt; (check the OMPI README file) to see if that's what's biting you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10675.php">Hodgess, Erin: "[OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10673.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>In reply to:</strong> <a href="10670.php">Jeff Squyres: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10676.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10676.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
