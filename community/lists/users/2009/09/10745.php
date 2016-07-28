<?
$subject_val = "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 15:04:27 2009" -->
<!-- isoreceived="20090923190427" -->
<!-- sent="Wed, 23 Sep 2009 12:05:22 -0700" -->
<!-- isosent="20090923190522" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?" -->
<!-- id="4ABA7172.8000503_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AB7EB8F.20704_at_scinet.utoronto.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-23 15:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10746.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallelscaling of vasp using openmpi)"</a>
<li><strong>Previous message:</strong> <a href="10744.php">Peter Kjellstrom: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10711.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10875.php">Eugene Loh: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jonathan Dursi wrote:
<br>
<p><span class="quotelev1">&gt; Continuing the conversation with myself:
</span><br>
<p>Sorry to interrupt...  :^)
<br>
<p>Okay, I managed to reproduce the hang.  I'll try to look at this.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Google pointed me to Trac ticket #1944, which spoke of deadlocks in 
</span><br>
<span class="quotelev1">&gt; looped collective operations; there is no collective operation 
</span><br>
<span class="quotelev1">&gt; anywhere in this sample code, but trying one of the suggested 
</span><br>
<span class="quotelev1">&gt; workarounds/clues:   that is, setting btl_sm_num_fifos to at least 
</span><br>
<span class="quotelev1">&gt; (np-1) seems to make things work quite reliably, for both OpenMPI 
</span><br>
<span class="quotelev1">&gt; 1.3.2 and 1.3.3; that is, while this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 6 -mca btl sm,self ./diffusion-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; invariably hangs (at random-seeming numbers of iterations) with 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.3.2 and sometimes hangs (maybe 10% of the time, again 
</span><br>
<span class="quotelev1">&gt; seemingly randomly) with 1.3.3,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 6 -mca btl tcp,self ./diffusion-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 6 -mca btl_sm_num_fifos 5 -mca btl sm,self ./diffusion-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; always succeeds, with (as one might guess) the second being much 
</span><br>
<span class="quotelev1">&gt; faster...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Jonathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10746.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallelscaling of vasp using openmpi)"</a>
<li><strong>Previous message:</strong> <a href="10744.php">Peter Kjellstrom: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10711.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10875.php">Eugene Loh: "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?"</a>
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
