<?
$subject_val = "Re: [OMPI users] Porting MPI-3 C-program to Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 13:13:41 2016" -->
<!-- isoreceived="20160422171341" -->
<!-- sent="Fri, 22 Apr 2016 10:07:44 -0700" -->
<!-- isosent="20160422170744" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Porting MPI-3 C-program to Fortran" -->
<!-- id="571A5A60.9060801_at_reachone.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="871t5xoc5q.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Porting MPI-3 C-program to Fortran<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-22 13:07:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28998.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28996.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>In reply to:</strong> <a href="28996.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29025.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Reply:</strong> <a href="29025.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for replying, but the difference between what can be done in C vs 
<br>
fortran is still my problem.  I apologize for my rudimentary 
<br>
understanding of C, but here is a brief summary:
<br>
<p>In my originally attached C-program 'testmpi3.c' we have:
<br>
<p>&nbsp;&nbsp;&nbsp;int **shar_pntr : declare pointer variable (a pointer to a pointer?)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
<p>&nbsp;&nbsp;MPI_Win_shared_query (win, maps_shm[j], &amp;sz, &amp;dsp_unit, &amp;shar_pntr[j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On each rank this call returns an address in 'shar_pntr' for each 
<br>
'j' index
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the addresses are in shared memory on the node, but from the 
<br>
address space of another process
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
<p>&nbsp;&nbsp;halo[j] = shar_pntr[j][0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This assignment statement stores in 'halo[j]' the variable at the 
<br>
'shar_pntr[j][0]' address, which is what we want
<br>
<p>----------------------------------------------------------------------------------------------------------
<br>
<p>In my originally attached fortran program 'testmpi3.f90' we have:
<br>
<p><p>integer(kind=MPI_ADDRESS_KIND),dimension(:),allocatable :: shar_pntr
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(shar_pntr(0:1))
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
<p>call mpi_win_shared_query(iwin,maps_shm(j),isizew,idisp,shar_pntr(j),ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;On each rank this call also returns an address in 'shar_pntr' for 
<br>
each 'j' index
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as above, the addresses are in shared memory on the node, but from 
<br>
the address space of another process
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
<p>&nbsp;&nbsp;halo(j)= shar_pntr(j)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This assignment statement stores in 'halo(j)' what is in 
<br>
'shar_pntr(j)', the address! That's what fortran should do, but it isn't 
<br>
what is needed here
<br>
<p>------------------------------------------------------------------------------------------------
<br>
<p>So, how can 'testmpi3.f90' be changed to do what 'testmpi3.c' does?
<br>
<p>T. Rosmond
<br>
<p><p><p><p><p><p>On 04/22/2016 09:12 AM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Jeff Hammond &lt;jeff.science_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI uses void** arguments to pass pointer by reference so it can be
</span><br>
<span class="quotelev2">&gt;&gt; updated. In Fortran, you always pass by reference so you don't need
</span><br>
<span class="quotelev2">&gt;&gt; this.
</span><br>
<span class="quotelev1">&gt; I don't know if it's relevant in this case, but that's not generally
</span><br>
<span class="quotelev1">&gt; true (even for Fortran 77, for which I used to know the standard
</span><br>
<span class="quotelev1">&gt; more-or-less by heart).  It definitely isn't true for gfortran, and I'm
</span><br>
<span class="quotelev1">&gt; confident not for the Intel compiler, or it would miss optimizations.
</span><br>
<span class="quotelev1">&gt; You may get away with assuming call-by-reference, but you're likely to
</span><br>
<span class="quotelev1">&gt; get bitten if you don't obey the argument association rules.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28996.php">http://www.open-mpi.org/community/lists/users/2016/04/28996.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28998.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28996.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>In reply to:</strong> <a href="28996.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29025.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Reply:</strong> <a href="29025.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
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
