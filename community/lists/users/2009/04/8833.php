<?
$subject_val = "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 19:03:53 2009" -->
<!-- isoreceived="20090407230353" -->
<!-- sent="Tue, 7 Apr 2009 16:03:35 -0700" -->
<!-- isosent="20090407230335" -->
<!-- name="Steve Lowder" -->
<!-- email="lowder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions" -->
<!-- id="49DBDBC7.5080906_at_nrlmry.navy.mil" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7DB1A086-B5AB-433E-8371-62EC14A7BD5D_at_sun.com" -->
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
<strong>From:</strong> Steve Lowder (<em>lowder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 19:03:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8834.php">Marco: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8832.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8811.php">Iain Bason: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8838.php">Jeff Squyres: "Re: [OMPI users] Interaction between Intel and OpenMPI floating pointexceptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Iain,
<br>
&nbsp;&nbsp;Thanks for the reply, yours sounds like a good suggestion to try to 
<br>
work around this.
<br>
Steve
<br>
<p><p>Iain Bason wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2009, at 7:22 PM, Steve Lowder wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Recently I've been running an MPI code that uses the LAPACK slamch 
</span><br>
<span class="quotelev2">&gt;&gt; routine to determine machine precision parameters.  This software is 
</span><br>
<span class="quotelev2">&gt;&gt; compiled using the latest Intel Fortran compiler and setting the 
</span><br>
<span class="quotelev2">&gt;&gt; -fpe0 argument to watch for certain  floating point errors.  The 
</span><br>
<span class="quotelev2">&gt;&gt; slamch routines crashed and printed an OpenMPI stacktrace to report 
</span><br>
<span class="quotelev2">&gt;&gt; an underflow error, however the Intel -fpe0 setting doesn't abort on 
</span><br>
<span class="quotelev2">&gt;&gt; underflow.  When this software is not compiled and linked with 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI, it ignores the underflow and doesn't abort when compiled 
</span><br>
<span class="quotelev2">&gt;&gt; with  -fpe0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run the MPI version and set --mca opal_signal 6,7,11 the code 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't abort on underflow.  I'd like to know if I'm interpreting 
</span><br>
<span class="quotelev2">&gt;&gt; this behavior correctly, it appears that the mpi versus no mpi cases 
</span><br>
<span class="quotelev2">&gt;&gt; handle underflow differently. I'm assuming OpenMPI has a handler that 
</span><br>
<span class="quotelev2">&gt;&gt; processes the interrupts ahead of the Fortran RTL, stopping 
</span><br>
<span class="quotelev2">&gt;&gt; execution.  Otherwise the Fortran RTL handler would just ignore the 
</span><br>
<span class="quotelev2">&gt;&gt; underflow.  Do I sort of understand what is going on here?  Is there 
</span><br>
<span class="quotelev2">&gt;&gt; another solution short of the --mca opal_signal switch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your analysis sounds about right to me.  There are Fortran intrinsic 
</span><br>
<span class="quotelev1">&gt; routines that can get those machine precision parameters instead of 
</span><br>
<span class="quotelev1">&gt; slamch.  Would it be feasible to modify the code to use them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8834.php">Marco: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8832.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8811.php">Iain Bason: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8838.php">Jeff Squyres: "Re: [OMPI users] Interaction between Intel and OpenMPI floating pointexceptions"</a>
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
