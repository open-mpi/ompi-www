<?
$subject_val = "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 13:40:47 2014" -->
<!-- isoreceived="20140718174047" -->
<!-- sent="Fri, 18 Jul 2014 17:28:18 +0000" -->
<!-- isosent="20140718172818" -->
<!-- name="Fab Tillier" -->
<!-- email="ftillier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature" -->
<!-- id="5b33ec1bfb7d465d9c9c0f12e50182d0_at_DFM-CO1MBX15-02.exchange.corp.microsoft.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8337B490252F0944BF1D38541059627E1734864B_at_DLREXMBX01.intra.dlr.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature<br>
<strong>From:</strong> Fab Tillier (<em>ftillier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-18 13:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24814.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Previous message:</strong> <a href="24812.php">Dirk Schubert: "[OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>In reply to:</strong> <a href="24811.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Michael,
<br>
<p>Michael.Rachner_at_[hidden] wrote on Fri, 18 Jul 2014 at 01:58:50
<br>
<p><span class="quotelev1">&gt; Dear Mr. Tillier  and  other MPI-developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am glad to hear that MS-MPI development is still active   and interested in
</span><br>
<span class="quotelev1">&gt; User feature requests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You want User feature requests for your further MS-MPI development?
</span><br>
<p>We are always interested in user feature requests.  The best way is submit suggestions via our beta program's feedback form available here: <a href="https://connect.microsoft.com/HPC/Feedback">https://connect.microsoft.com/HPC/Feedback</a>.  Using the feedback form allows other users to see what features have been requested, vote for them, and helps us prioritize them.  That said, reaching out to us directly as you did last November works too.
<br>
<p><span class="quotelev1">&gt; Here is my request (I am doing Fortran CFD-code development for 
</span><br>
<span class="quotelev1">&gt; decades now under WINDOWS and LINUX):
</span><br>
<span class="quotelev1">&gt;     --Extend MS-MPI to support MPI-3  in Fortran95-codes.
</span><br>
<span class="quotelev1">&gt;       Therein: The most important feature for me (and I think for many 
</span><br>
<span class="quotelev1">&gt; other users  too, but they possibly don't even know that there exist 
</span><br>
<span class="quotelev1">&gt; such a fine feature in MPI-3)
</span><br>
<span class="quotelev1">&gt;        is the MPI-3 shared memory feature. It  requires these 3
</span><br>
<span class="quotelev1">&gt;        MPI-routines:  sbr  MPI_WIN_SHARED_ALLOC, MPI_WIN_SHARED_QUERY, 
</span><br>
<span class="quotelev1">&gt;        MPI_WIN_FREE
</span><br>
<span class="quotelev1">&gt;       along with the Ftn2003 routine  C_F_POINTER   and the Ftn2003 intrinsic
</span><br>
<span class="quotelev1">&gt; module   ISO_C_BINDING    (both already contained in INTEL-Ftn95-
</span><br>
<span class="quotelev1">&gt; compiler).
</span><br>
<span class="quotelev1">&gt;      This shared memory feature allows using the same Fortran array
</span><br>
<span class="quotelev1">&gt;      (reading and writing access) on MPI-processes running on the same
</span><br>
<span class="quotelev1">&gt;      node. A breakthrough in the Fortran world, enabled by MPI-3  . The
</span><br>
<span class="quotelev1">&gt;      savings in storage and the reduction of the amount of MPI-data
</span><br>
<span class="quotelev1">&gt;      transfer can be huge!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My knowledge on the state of the art of realizing that feature by MPI-
</span><br>
<span class="quotelev1">&gt; developers:
</span><br>
<span class="quotelev1">&gt;    - That MPI-3 shared memory feature works fine with MPICH-3.0.4 .
</span><br>
<span class="quotelev1">&gt;    - It does not yet work with OPENMPI-1.8.1 (but shall be working in 1.8.2).
</span><br>
<span class="quotelev1">&gt;    - It still has a bug in MVAPICH2 2.0rc2  (at begin of June 2014
</span><br>
<span class="quotelev1">&gt;    they answered me to look at the problem) .
</span><br>
<span class="quotelev1">&gt;    - It is not supported by INTEL-MPI 4.1.1  (only MPI-2 so far).
</span><br>
<span class="quotelev1">&gt;    - It is not supported by MS-MPI 4.2.4400.0  (only MPI-2 so far).
</span><br>
<span class="quotelev1">&gt; Maybe this encourages you and your MPI-teams to provide that feature 
</span><br>
<span class="quotelev1">&gt; soon.
</span><br>
<p>Thanks to your request last November, I'm pleased to tell you that we should have a beta available shortly that implements the shared memory window functionality.  We will send out a notification to all users that have signed up for our beta when it is available for download.  I hope that will try it out once it is available and provide feedback, so that we can make sure it meets your expectations.
<br>
<p>Thanks,
<br>
-Fab
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24814.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Previous message:</strong> <a href="24812.php">Dirk Schubert: "[OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>In reply to:</strong> <a href="24811.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<!-- nextthread="start" -->
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
