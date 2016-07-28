<?
$subject_val = "Re: [OMPI users] OpenMPI with bounds checking";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 10:37:26 2008" -->
<!-- isoreceived="20080617143726" -->
<!-- sent="Tue, 17 Jun 2008 10:37:14 -0400" -->
<!-- isosent="20080617143714" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with bounds checking" -->
<!-- id="66BF10DB-D44C-4DED-91E5-5B0DC45E2317_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0806140458x16457edav8848f32f633d47b3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with bounds checking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 10:37:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5905.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Previous message:</strong> <a href="5903.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5875.php">Gabriele Fatigati: "[OMPI users] OpenMPI with bounds checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5905.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5905.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5937.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid that we've never tested OMPI under these conditions; I  
<br>
don't know exactly what xgcc is testing for, so I don't know why it  
<br>
would fail.  There could be weird interactions between the OFED stack  
<br>
and xgcc...?  (i.e., memory &quot;appears&quot; from the kernel via ibv_*  
<br>
function calls, etc.)
<br>
<p><p>On Jun 14, 2008, at 7:58 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Hi Open MPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled OpenMPI 1.2.6 with xgcc, a gcc version with bounds- 
</span><br>
<span class="quotelev1">&gt; checking support. But i have a problem with a simply MPI application  
</span><br>
<span class="quotelev1">&gt; compiled with -fbounds-checking flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The job doesn't works and it is locked to MPI_Init(), doing nothing.  
</span><br>
<span class="quotelev1">&gt; It is a very strange behaviour. I tried to increase various  
</span><br>
<span class="quotelev1">&gt; Infiniband timeout, like btl_openib_ib_timeout, orte_abort_timeout  
</span><br>
<span class="quotelev1">&gt; and btl_openib_ib_min_rnr_timer without results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden] _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5905.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Previous message:</strong> <a href="5903.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5875.php">Gabriele Fatigati: "[OMPI users] OpenMPI with bounds checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5905.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5905.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5937.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
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
