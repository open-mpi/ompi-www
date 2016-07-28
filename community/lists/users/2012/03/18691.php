<?
$subject_val = "[OMPI users] Scatter+Group Communicator Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 07:52:12 2012" -->
<!-- isoreceived="20120306125212" -->
<!-- sent="Tue, 6 Mar 2012 07:52:06 -0500" -->
<!-- isosent="20120306125206" -->
<!-- name="Timothy Stitt" -->
<!-- email="Timothy.Stitt.9_at_[hidden]" -->
<!-- subject="[OMPI users] Scatter+Group Communicator Issue" -->
<!-- id="49372F4C-2674-44F7-BC33-50A9BFCD6534_at_nd.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Scatter+Group Communicator Issue<br>
<strong>From:</strong> Timothy Stitt (<em>Timothy.Stitt.9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 07:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18692.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Previous message:</strong> <a href="18690.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18692.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Reply:</strong> <a href="18692.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am scratching my head over what I think should be a relatively simple group communicator operation. I am hoping some kind person can put me out of my misery and figure out what I'm doing wrong. 
<br>
<p>Basically, I am trying to scatter a set of values to a subset of process ranks (hence the need for a group communicator). When I run the sample code over 4 processes (and scattering to 3 processes), I am getting a group-communicator related error in the scatter operation:
<br>
<p><span class="quotelev1">&gt; [stats.crc.nd.edu:29285] *** An error occurred in MPI_Scatter
</span><br>
<span class="quotelev1">&gt; [stats.crc.nd.edu:29285] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [stats.crc.nd.edu:29285] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [stats.crc.nd.edu:29285] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;  Complete - Rank           1
</span><br>
<span class="quotelev1">&gt;  Complete - Rank           0
</span><br>
<span class="quotelev1">&gt;  Complete - Rank           3
</span><br>
<p>The actual test code is below:
<br>
<p>program scatter_bug
<br>
<p>&nbsp;&nbsp;use mpi
<br>
<p>&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;integer :: ierr,my_rank,procValues(3),procRanks(3)
<br>
&nbsp;&nbsp;integer :: in_cnt,orig_group,new_group,new_comm,out
<br>
<p>&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,my_rank,ierr)
<br>
<p>&nbsp;&nbsp;procRanks=(/0,1,3/)
<br>
&nbsp;&nbsp;procValues=(/0,434,268/)
<br>
&nbsp;&nbsp;in_cnt=3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;! Create sub-communicator
<br>
&nbsp;&nbsp;call MPI_COMM_GROUP(MPI_COMM_WORLD, orig_group, ierr)
<br>
&nbsp;&nbsp;call MPI_Group_incl(orig_group, in_cnt, procRanks, new_group, ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_CREATE(MPI_COMM_WORLD, new_group, new_comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;call MPI_SCATTER(procValues, 1, MPI_INTEGER, out, 1, MPI_INTEGER, 0, new_comm, ierr);
<br>
<p>&nbsp;&nbsp;print *,&quot;Complete - Rank&quot;, my_rank
<br>
<p>end program scatter_bug
<br>
&nbsp;&nbsp;
<br>
Thanks in advance for any advice you can give.
<br>
<p>Regards.
<br>
<p>Tim.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18692.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Previous message:</strong> <a href="18690.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18692.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Reply:</strong> <a href="18692.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
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
