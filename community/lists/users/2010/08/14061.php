<?
$subject_val = "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 17 12:41:58 2010" -->
<!-- isoreceived="20100817164158" -->
<!-- sent="Tue, 17 Aug 2010 09:41:54 -0700" -->
<!-- isosent="20100817164154" -->
<!-- name="Yong Qin" -->
<!-- email="yongqin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..." -->
<!-- id="AANLkTikoHTitck4jDi2eUhSgWBU=Zq3BKsY3aEXaLDct_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.4626.1282063137.1857.users_at_open-mpi.org" -->
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
<strong>From:</strong> Yong Qin (<em>yongqin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-17 12:41:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14062.php">Lisandro Dalcin: "Re: [OMPI users] mpic++ compilation : C++ program with MPI-C calls"</a>
<li><strong>Previous message:</strong> <a href="14060.php">Gus Correa: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<li><strong>Maybe in reply to:</strong> <a href="14050.php">Richard Walsh: "[OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14063.php">Richard Walsh: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Reply:</strong> <a href="14063.php">Richard Walsh: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Richard,
<br>
<p>We have reported this to Intel as a bug in 11.1.072. If I understand
<br>
it correctly you are also compiling Octopus with Intel 11.1.072. As we
<br>
have tested, Intel compilers 11.1.064 and all the 10.x, GNU, PGI,
<br>
etc., do not exhibit this issue at all. We are still waiting for words
<br>
from Intel. But in the mean time, a workaround (revision 6839) has
<br>
been submitted to the trunk. The workaround is actually fairly simple,
<br>
you just need to switch the order of &quot;use parser_m&quot; and &quot;use mpi_m&quot; in
<br>
states.F90.
<br>
<p>Thanks,
<br>
<p>Yong Qin
<br>
<p><span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Mon, 16 Aug 2010 18:55:47 -0400
</span><br>
<span class="quotelev1">&gt; From: Richard Walsh &lt;Richard.Walsh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;designation ...
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;&lt;5E9838FE224683419F586D9DF46A0E25B0498980BF_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; states.F90(1240): error #6404: This name does not have a type, and must have an explicit type. &#160; [MPI_IN_PLACE]
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;call MPI_Allreduce(MPI_IN_PLACE, rho(1, ispin), np, MPI_DOUBLE_PRECISION, MPI_SUM, st%mpi_grp%comm, mpi_err)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14062.php">Lisandro Dalcin: "Re: [OMPI users] mpic++ compilation : C++ program with MPI-C calls"</a>
<li><strong>Previous message:</strong> <a href="14060.php">Gus Correa: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<li><strong>Maybe in reply to:</strong> <a href="14050.php">Richard Walsh: "[OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14063.php">Richard Walsh: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Reply:</strong> <a href="14063.php">Richard Walsh: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
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
