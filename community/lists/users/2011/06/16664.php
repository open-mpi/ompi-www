<?
$subject_val = "[OMPI users] Problem with MPI_Intercomm_create";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  1 05:01:16 2011" -->
<!-- isoreceived="20110601090116" -->
<!-- sent="Wed, 01 Jun 2011 11:00:42 +0200" -->
<!-- isosent="20110601090042" -->
<!-- name="Fr&#195;&#169;d&#195;&#169;ric Feyel" -->
<!-- email="mcffeyel_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_Intercomm_create" -->
<!-- id="76d28e95802cc83389924e14bb189838_at_localhost" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_Intercomm_create<br>
<strong>From:</strong> Fr&#195;&#169;d&#195;&#169;ric Feyel (<em>mcffeyel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-01 05:00:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16665.php">Shiqing Fan: "[OMPI users] Fwd: Re: Re: Sorry! You were supposed to get help about: But	couldn't open help-orterun.txt"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16663.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16669.php">David Zhang: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16669.php">David Zhang: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a problem using MPI_Intercomm_create.
<br>
<p>I 5 tasks, let's say T0, T1, T2, T3, T4 resulting from two spawn
<br>
operations by T0.
<br>
<p>So I have two intra-communicator :
<br>
<p>intra0 contains : T0, T1, T2
<br>
intra1 contains : T0, T3, T4
<br>
<p>my goal is to make a collective loop to build a single intra-communicator
<br>
containing T0, T1, T2, T3, T4
<br>
<p>I tried to do it using MPI_Intercomm_create and MPI_Intercom_merge calls,
<br>
but without success (I always get MPI internal errors).
<br>
<p>What I am doing :
<br>
<p>on T0 :
<br>
*******
<br>
<p>MPI_Intercom_create(intra0,0,intra1,0,1,&amp;new_com)
<br>
<p>on T1 and T2 :
<br>
**************
<br>
<p>MPI_Intercom_create(intra0,0,MPI_COMM_WORLD,0,1,&amp;new_com)
<br>
<p>on T3 and T4 :
<br>
**************
<br>
<p>MPI_Intercom_create(intra1,0,MPI_COMM_WORLD,0,1,&amp;new_com)
<br>
<p><p>I'm certainly missing something. Could anybody help me to solve this
<br>
problem ?
<br>
<p>Best regards,
<br>
<p>Fr&#195;&#169;d&#195;&#169;ric.
<br>
<p>PS : of course I did an extensive web search without finding anything
<br>
usefull on my problem.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16665.php">Shiqing Fan: "[OMPI users] Fwd: Re: Re: Sorry! You were supposed to get help about: But	couldn't open help-orterun.txt"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16663.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16669.php">David Zhang: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16669.php">David Zhang: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
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
