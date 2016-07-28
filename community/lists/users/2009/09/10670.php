<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 09:44:33 2009" -->
<!-- isoreceived="20090917134433" -->
<!-- sent="Thu, 17 Sep 2009 09:44:28 -0400" -->
<!-- isosent="20090917134428" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="8E3275C4-A3CD-4497-90D3-1172EF69B43A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="35EBE57B-C557-4FAF-995C-B91AFE8CA7A8_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 09:44:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10671.php">Jeff Squyres: "Re: [OMPI users] How does OpenMPI decided to use which algorithm inMPI_Bcast????????????????"</a>
<li><strong>Previous message:</strong> <a href="10669.php">Jeff Squyres: "Re: [OMPI users] infiniband question"</a>
<li><strong>In reply to:</strong> <a href="10666.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10674.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10674.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 16, 2009, at 9:53 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Only the obvious, and not very helpful one: comm_spawn isn't thread
</span><br>
<span class="quotelev1">&gt; safe at this time. You'll need to serialize your requests to that
</span><br>
<span class="quotelev1">&gt; function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>This is likely the cause of your issues if you are calling  
<br>
MPI_COMM_SPAWN in multiple threads simultaneously.  Can you verify?
<br>
<p>If not, we'll need to dig a little deeper to figure out what's going  
<br>
on.  But Ralph is right -- read up on the THREAD_MULTIPLE constraints  
<br>
(check the OMPI README file) to see if that's what's biting you.
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
<li><strong>Next message:</strong> <a href="10671.php">Jeff Squyres: "Re: [OMPI users] How does OpenMPI decided to use which algorithm inMPI_Bcast????????????????"</a>
<li><strong>Previous message:</strong> <a href="10669.php">Jeff Squyres: "Re: [OMPI users] infiniband question"</a>
<li><strong>In reply to:</strong> <a href="10666.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10674.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10674.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
