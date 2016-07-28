<?
$subject_val = "[OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 19:00:52 2010" -->
<!-- isoreceived="20100816230052" -->
<!-- sent="Mon, 16 Aug 2010 18:55:47 -0400" -->
<!-- isosent="20100816225547" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="[OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..." -->
<!-- id="5E9838FE224683419F586D9DF46A0E25B0498980BF_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ...<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 18:55:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14051.php">Gokhan Kir: "Re: [OMPI users] A Problem with RAxML"</a>
<li><strong>Previous message:</strong> <a href="14049.php">Richard Walsh: "Re: [OMPI users] A Problem with RAxML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14052.php">Jeff Squyres: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Reply:</strong> <a href="14052.php">Jeff Squyres: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Maybe reply:</strong> <a href="14061.php">Yong Qin: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I have a fortran code (Octopus 3.2) that is bombing during a build in a routine that uses:
<br>
<p>call MPI_Allreduce(MPI_IN_PLACE, rho(1, ispin), np, MPI_DOUBLE_PRECISION, MPI_SUM, st%mpi_grp%comm, mpi_err)
<br>
<p>with the error message:
<br>
<p>states.F90(1240): error #6404: This name does not have a type, and must have an explicit type.   [MPI_IN_PLACE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Allreduce(MPI_IN_PLACE, rho(1, ispin), np, MPI_DOUBLE_PRECISION, MPI_SUM, st%mpi_grp%comm, mpi_err)
<br>
---------------------------^
<br>
compilation aborted for states_oct.f90 (code 1)
<br>
<p>This suggests that MPI_IN_PLACE is missing from the mpi.h header.
<br>
<p>Any thoughts?
<br>
<p>rbw
<br>
<p>Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
718-982-3319
<br>
612-382-4620
<br>
<p>Reason does give the heart pause;
<br>
As the heart gives reason fits.
<br>
<p>Yet, to live where reason always rules;
<br>
Is to kill one's heart with wits.
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Gokhan Kir [gkir_at_[hidden]]
<br>
Sent: Monday, August 16, 2010 5:43 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] A Problem with RAxML
<br>
<p>Hi,
<br>
I am currently using RAxML 7.0, and recently I got a problem. Even though I Googled  it, I couldn't find a satisfying answer.
<br>
I got this message from BATCH_ERRORs file &quot; raxmlHPC-MPI: topologies.c:179: restoreTL: Assertion `n &gt;= 0 &amp;&amp; n &lt; rl-&gt;max' failed. &quot;
<br>
<p>Any help is appreciated,
<br>
<p>Thanks,
<br>
<p><pre>
--
Gokhan
Think green before you print this email.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14051.php">Gokhan Kir: "Re: [OMPI users] A Problem with RAxML"</a>
<li><strong>Previous message:</strong> <a href="14049.php">Richard Walsh: "Re: [OMPI users] A Problem with RAxML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14052.php">Jeff Squyres: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Reply:</strong> <a href="14052.php">Jeff Squyres: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Maybe reply:</strong> <a href="14061.php">Yong Qin: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
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
