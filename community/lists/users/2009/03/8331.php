<?
$subject_val = "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 15:29:54 2009" -->
<!-- isoreceived="20090305202954" -->
<!-- sent="Thu, 5 Mar 2009 15:29:47 -0500" -->
<!-- isosent="20090305202947" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit" -->
<!-- id="CD734115-6260-442F-A273-55845AAC7AF9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40903042254q6f9a57ebrb96c93ab20e2f66a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 15:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8332.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Previous message:</strong> <a href="8330.php">Gerry Creager: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8308.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8343.php">Ralph Castain: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Reply:</strong> <a href="8343.php">Ralph Castain: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2009, at 1:54 AM, Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt; The fortran application I'm using here is the CPMD-3.11.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think the processor is Nehalem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel(R) Xeon(R) CPU           X5472  @ 3.00GHz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Installation procedure was same on both the clusters. I've not set  
</span><br>
<span class="quotelev1">&gt; mpi_affinity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a memory intensive application, but this job was not using
</span><br>
<span class="quotelev1">&gt; that much amount of memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding CPU &amp; ELAPSED TIMEs, the CPU TIME should be greater than
</span><br>
<span class="quotelev1">&gt; ELAPSED TIME in general (for a parallel program). Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It depends on exactly what you're reporting for ELAPSED time.  Is that  
<br>
wall clock time?  Or user time?  Or something else?
<br>
<p>Ralph and I disagree on this point, but my opinion is that the only  
<br>
meaningful time reported in a parallel application is the wall clock  
<br>
time.  The CPU time can be badly skewed by a variety of things, such  
<br>
as any filesystem IO, network activity (depending on whether you have  
<br>
an OS-bypass network or not), etc.
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
<li><strong>Next message:</strong> <a href="8332.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Previous message:</strong> <a href="8330.php">Gerry Creager: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8308.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8343.php">Ralph Castain: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Reply:</strong> <a href="8343.php">Ralph Castain: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
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
