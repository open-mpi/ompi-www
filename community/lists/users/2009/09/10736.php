<?
$subject_val = "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 00:56:45 2009" -->
<!-- isoreceived="20090923045645" -->
<!-- sent="Tue, 22 Sep 2009 21:57:42 -0700" -->
<!-- isosent="20090923045742" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?" -->
<!-- id="4AB9AAC6.30105_at_sun.com" -->
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
<strong>Date:</strong> 2009-09-23 00:57:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10737.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10735.php">Rahul Nabar: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10711.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10738.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10738.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jonathan Dursi wrote:
<br>
<p><span class="quotelev1">&gt; Continuing the conversation with myself:
</span><br>
<span class="quotelev1">&gt;
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
<p>The btl_sm_num_fifos thing doesn't on the surface make much sense to 
<br>
me.  That presumably controls the number of receive FIFOs per process.  
<br>
The default became 1, which could threaten to change behavior if 
<br>
multiple senders all send to the same FIFO.  But your sample program has 
<br>
just one-to-one connections.  Each receiver has only one sender.  So, 
<br>
the number of FIFOs shouldn't matter.  Bumping the number up only means 
<br>
you allocate some FIFOs that are never used.
<br>
<p>Hmm.  Continuing the conversation with myself, maybe that's not entirely 
<br>
true.  Whatever fragments are sent by a process must be received back 
<br>
from the receiver.  So, a process receives not only messages from its 
<br>
left but also return fragments from its right.  Still, why would np-1 
<br>
FIFOs be needed?  Why not just 2?
<br>
<p>And, as Jeff points out, everyone should be staying in pretty good sync 
<br>
with the Sendrecv pattern.  So, how could there be a problem at all?
<br>
<p>Like Jeff, my attempts so far to reproduce the problem (with 
<br>
hardware/software conveniently accessible to me) have come up empty.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10737.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10735.php">Rahul Nabar: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10711.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10738.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10738.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
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
