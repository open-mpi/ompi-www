<?
$subject_val = "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 20:52:51 2009" -->
<!-- isoreceived="20090923005251" -->
<!-- sent="Tue, 22 Sep 2009 20:52:46 -0400" -->
<!-- isosent="20090923005246" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?" -->
<!-- id="6BEC49C3-13CD-483C-8170-AF0E8CFBABDE_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 20:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10733.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10731.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10711.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10734.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10734.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Johnathan --
<br>
<p>Sorry for the delay in replying; thanks for posting again.
<br>
<p>I'm actually unable to replicate your problem.  :-(  I have a new  
<br>
intel 8 core X5570 box; I'm running at np6 and np8 on both Open MPI  
<br>
1.3.2 and 1.3.3 and am not seeing the problem you're seeing.  I even  
<br>
made your sample program worse -- I made a and b be 100,000 element  
<br>
real arrays (increasing the count args in MPI_SENDRECV to 100,000 as  
<br>
well), and increased nsteps to 150,000,000.  No hangs.  :-\
<br>
<p>The version of the compiler *usually* isn't significant, so gcc 4.x  
<br>
should be fine.
<br>
<p>Yes, the sm flow control issue was a significant fix, but the blocking  
<br>
nature of MPI_SENDRECV means that you shouldn't have run into the  
<br>
problems that were fixed (the main issues had to do with fast senders  
<br>
exhausting resources of slow receivers -- but MPI_SENDRECV is  
<br>
synchronous so the senders should always be matching the speed of the  
<br>
receivers).
<br>
<p>Just for giggles, what happens if you change
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (leftneighbour .eq. -1) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leftneighbour = nprocs-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rightneighbour .eq. nprocs) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rightneighbour = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>to
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (leftneighbour .eq. -1) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leftneighbour = MPI_PROC_NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rightneighbour .eq. nprocs) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rightneighbour = MPI_PROC_NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p><p><p>On Sep 21, 2009, at 5:09 PM, Jonathan Dursi wrote:
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
<span class="quotelev1">&gt; workarounds/clues:  that is, setting btl_sm_num_fifos to at least  
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
<span class="quotelev1">&gt; 	Jonathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jonathan Dursi     &lt;ljdursi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10733.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10731.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10711.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10734.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10734.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
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
