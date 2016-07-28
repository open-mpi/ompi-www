<?
$subject_val = "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 10:58:34 2009" -->
<!-- isoreceived="20090407145834" -->
<!-- sent="Tue, 07 Apr 2009 10:58:24 -0400" -->
<!-- isosent="20090407145824" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions" -->
<!-- id="7DB1A086-B5AB-433E-8371-62EC14A7BD5D_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49DA8ECF.2010606_at_nrlmry.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 10:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8810.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8798.php">Steve Lowder: "[OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8833.php">Steve Lowder: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Reply:</strong> <a href="8833.php">Steve Lowder: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2009, at 7:22 PM, Steve Lowder wrote:
<br>
<p><span class="quotelev1">&gt; Recently I've been running an MPI code that uses the LAPACK slamch  
</span><br>
<span class="quotelev1">&gt; routine to determine machine precision parameters.  This software is  
</span><br>
<span class="quotelev1">&gt; compiled using the latest Intel Fortran compiler and setting the - 
</span><br>
<span class="quotelev1">&gt; fpe0 argument to watch for certain  floating point errors.  The  
</span><br>
<span class="quotelev1">&gt; slamch routines crashed and printed an OpenMPI stacktrace to report  
</span><br>
<span class="quotelev1">&gt; an underflow error, however the Intel -fpe0 setting doesn't abort on  
</span><br>
<span class="quotelev1">&gt; underflow.  When this software is not compiled and linked with  
</span><br>
<span class="quotelev1">&gt; OpenMPI, it ignores the underflow and doesn't abort when compiled  
</span><br>
<span class="quotelev1">&gt; with  -fpe0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run the MPI version and set --mca opal_signal 6,7,11 the code  
</span><br>
<span class="quotelev1">&gt; doesn't abort on underflow.  I'd like to know if I'm interpreting  
</span><br>
<span class="quotelev1">&gt; this behavior correctly, it appears that the mpi versus no mpi cases  
</span><br>
<span class="quotelev1">&gt; handle underflow differently. I'm assuming OpenMPI has a handler  
</span><br>
<span class="quotelev1">&gt; that processes the interrupts ahead of the Fortran RTL, stopping  
</span><br>
<span class="quotelev1">&gt; execution.  Otherwise the Fortran RTL handler would just ignore the  
</span><br>
<span class="quotelev1">&gt; underflow.  Do I sort of understand what is going on here?  Is there  
</span><br>
<span class="quotelev1">&gt; another solution short of the --mca opal_signal switch?
</span><br>
<p>Your analysis sounds about right to me.  There are Fortran intrinsic  
<br>
routines that can get those machine precision parameters instead of  
<br>
slamch.  Would it be feasible to modify the code to use them?
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8810.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8798.php">Steve Lowder: "[OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8833.php">Steve Lowder: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Reply:</strong> <a href="8833.php">Steve Lowder: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
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
