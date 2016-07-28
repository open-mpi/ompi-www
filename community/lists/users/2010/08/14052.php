<?
$subject_val = "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 19:11:29 2010" -->
<!-- isoreceived="20100816231129" -->
<!-- sent="Mon, 16 Aug 2010 16:12:51 -0700" -->
<!-- isosent="20100816231251" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..." -->
<!-- id="53352ADD-61C9-4E00-9626-3A124014FC86_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E9838FE224683419F586D9DF46A0E25B0498980BF_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 19:12:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14053.php">Manoj Vaghela: "[OMPI users] mpic++ compilation : C++ program with MPI-C calls"</a>
<li><strong>Previous message:</strong> <a href="14051.php">Gokhan Kir: "Re: [OMPI users] A Problem with RAxML"</a>
<li><strong>In reply to:</strong> <a href="14050.php">Richard Walsh: "[OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14061.php">Yong Qin: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_IN_PLACE is defined in both mpif.h and the &quot;mpi&quot; Fortran module.
<br>
<p>Does the subroutine in question have &quot;include mpif.h&quot; or &quot;use mpi&quot;?
<br>
<p><p>On Aug 16, 2010, at 3:55 PM, Richard Walsh wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a fortran code (Octopus 3.2) that is bombing during a build in a routine that uses:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_Allreduce(MPI_IN_PLACE, rho(1, ispin), np, MPI_DOUBLE_PRECISION, MPI_SUM, st%mpi_grp%comm, mpi_err)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with the error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; states.F90(1240): error #6404: This name does not have a type, and must have an explicit type.   [MPI_IN_PLACE]
</span><br>
<span class="quotelev1">&gt;        call MPI_Allreduce(MPI_IN_PLACE, rho(1, ispin), np, MPI_DOUBLE_PRECISION, MPI_SUM, st%mpi_grp%comm, mpi_err)
</span><br>
<span class="quotelev1">&gt; ---------------------------^
</span><br>
<span class="quotelev1">&gt; compilation aborted for states_oct.f90 (code 1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This suggests that MPI_IN_PLACE is missing from the mpi.h header.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rbw
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Walsh
</span><br>
<span class="quotelev1">&gt; Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt; CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt; 718-982-3319
</span><br>
<span class="quotelev1">&gt; 612-382-4620
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reason does give the heart pause;
</span><br>
<span class="quotelev1">&gt; As the heart gives reason fits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yet, to live where reason always rules;
</span><br>
<span class="quotelev1">&gt; Is to kill one's heart with wits.
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Gokhan Kir [gkir_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 16, 2010 5:43 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] A Problem with RAxML
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am currently using RAxML 7.0, and recently I got a problem. Even though I Googled  it, I couldn't find a satisfying answer.
</span><br>
<span class="quotelev1">&gt; I got this message from BATCH_ERRORs file &quot; raxmlHPC-MPI: topologies.c:179: restoreTL: Assertion `n &gt;= 0 &amp;&amp; n &lt; rl-&gt;max' failed. &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is appreciated,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gokhan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Think green before you print this email.
</span><br>
<span class="quotelev1">&gt; 
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14053.php">Manoj Vaghela: "[OMPI users] mpic++ compilation : C++ program with MPI-C calls"</a>
<li><strong>Previous message:</strong> <a href="14051.php">Gokhan Kir: "Re: [OMPI users] A Problem with RAxML"</a>
<li><strong>In reply to:</strong> <a href="14050.php">Richard Walsh: "[OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14061.php">Yong Qin: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
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
