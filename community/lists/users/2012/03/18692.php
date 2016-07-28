<?
$subject_val = "Re: [OMPI users] Scatter+Group Communicator Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 08:22:32 2012" -->
<!-- isoreceived="20120306132232" -->
<!-- sent="Tue, 6 Mar 2012 14:28:02 +0100" -->
<!-- isosent="20120306132802" -->
<!-- name="nadia.derbey_at_[hidden]" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scatter+Group Communicator Issue" -->
<!-- id="OF48B7BC0D.F81F4254-ONC12579B9.004A133C-C12579B9.004A68B5_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49372F4C-2674-44F7-BC33-50A9BFCD6534_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scatter+Group Communicator Issue<br>
<strong>From:</strong> <a href="mailto:nadia.derbey_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Scatter%2BGroup%20Communicator%20Issue"><em>nadia.derbey_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-03-06 08:28:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18693.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Previous message:</strong> <a href="18691.php">Timothy Stitt: "[OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>In reply to:</strong> <a href="18691.php">Timothy Stitt: "[OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18693.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Reply:</strong> <a href="18693.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Isn't it because you're calling MPI_Scatter() even on rank 2 which is not 
<br>
part of your new_comm?
<br>
<p>Regards,
<br>
Nadia
<br>
<p>users-bounces_at_[hidden] wrote on 03/06/2012 01:52:06 PM:
<br>
<p><span class="quotelev1">&gt; De : Timothy Stitt &lt;Timothy.Stitt.9_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 03/06/2012 01:52 PM
</span><br>
<span class="quotelev1">&gt; Objet : [OMPI users] Scatter+Group Communicator Issue
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am scratching my head over what I think should be a relatively 
</span><br>
<span class="quotelev1">&gt; simple group communicator operation. I am hoping some kind person 
</span><br>
<span class="quotelev1">&gt; can put me out of my misery and figure out what I'm doing wrong. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically, I am trying to scatter a set of values to a subset of 
</span><br>
<span class="quotelev1">&gt; process ranks (hence the need for a group communicator). When I run 
</span><br>
<span class="quotelev1">&gt; the sample code over 4 processes (and scattering to 3 processes), I 
</span><br>
<span class="quotelev1">&gt; am getting a group-communicator related error in the scatter operation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [stats.crc.nd.edu:29285] *** An error occurred in MPI_Scatter
</span><br>
<span class="quotelev2">&gt; &gt; [stats.crc.nd.edu:29285] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [stats.crc.nd.edu:29285] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; [stats.crc.nd.edu:29285] *** MPI_ERRORS_ARE_FATAL (your MPI job 
</span><br>
<span class="quotelev1">&gt; will now abort)
</span><br>
<span class="quotelev2">&gt; &gt;  Complete - Rank           1
</span><br>
<span class="quotelev2">&gt; &gt;  Complete - Rank           0
</span><br>
<span class="quotelev2">&gt; &gt;  Complete - Rank           3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The actual test code is below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program scatter_bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   use mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   implicit none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer :: ierr,my_rank,procValues(3),procRanks(3)
</span><br>
<span class="quotelev1">&gt;   integer :: in_cnt,orig_group,new_group,new_comm,out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_COMM_RANK(MPI_COMM_WORLD,my_rank,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   procRanks=(/0,1,3/)
</span><br>
<span class="quotelev1">&gt;   procValues=(/0,434,268/)
</span><br>
<span class="quotelev1">&gt;   in_cnt=3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ! Create sub-communicator
</span><br>
<span class="quotelev1">&gt;   call MPI_COMM_GROUP(MPI_COMM_WORLD, orig_group, ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_Group_incl(orig_group, in_cnt, procRanks, new_group, ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_COMM_CREATE(MPI_COMM_WORLD, new_group, new_comm, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_SCATTER(procValues, 1, MPI_INTEGER, out, 1, MPI_INTEGER, 
</span><br>
<span class="quotelev1">&gt; 0, new_comm, ierr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *,&quot;Complete - Rank&quot;, my_rank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end program scatter_bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any advice you can give.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18692/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18693.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Previous message:</strong> <a href="18691.php">Timothy Stitt: "[OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>In reply to:</strong> <a href="18691.php">Timothy Stitt: "[OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18693.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Reply:</strong> <a href="18693.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
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
