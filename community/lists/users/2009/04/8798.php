<?
$subject_val = "[OMPI users] Interaction between Intel and OpenMPI floating point exceptions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 19:23:00 2009" -->
<!-- isoreceived="20090406232300" -->
<!-- sent="Mon, 6 Apr 2009 16:22:55 -0700" -->
<!-- isosent="20090406232255" -->
<!-- name="Steve Lowder" -->
<!-- email="lowder_at_[hidden]" -->
<!-- subject="[OMPI users] Interaction between Intel and OpenMPI floating point exceptions" -->
<!-- id="49DA8ECF.2010606_at_nrlmry.navy.mil" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Interaction between Intel and OpenMPI floating point exceptions<br>
<strong>From:</strong> Steve Lowder (<em>lowder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 19:22:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8799.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8797.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8811.php">Iain Bason: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Reply:</strong> <a href="8811.php">Iain Bason: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Reply:</strong> <a href="8838.php">Jeff Squyres: "Re: [OMPI users] Interaction between Intel and OpenMPI floating pointexceptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Recently I've been running an MPI code that uses the LAPACK slamch 
<br>
routine to determine machine precision parameters.  This software is 
<br>
compiled using the latest Intel Fortran compiler and setting the -fpe0 
<br>
argument to watch for certain  floating point errors.  The slamch 
<br>
routines crashed and printed an OpenMPI stacktrace to report an 
<br>
underflow error, however the Intel -fpe0 setting doesn't abort on 
<br>
underflow.  When this software is not compiled and linked with OpenMPI, 
<br>
it ignores the underflow and doesn't abort when compiled with  -fpe0.
<br>
<p>When I run the MPI version and set --mca opal_signal 6,7,11 the code 
<br>
doesn't abort on underflow.  I'd like to know if I'm interpreting this 
<br>
behavior correctly, it appears that the mpi versus no mpi cases handle 
<br>
underflow differently. I'm assuming OpenMPI has a handler that processes 
<br>
the interrupts ahead of the Fortran RTL, stopping execution.  Otherwise 
<br>
the Fortran RTL handler would just ignore the underflow.  Do I sort of 
<br>
understand what is going on here?  Is there another solution short of 
<br>
the --mca opal_signal switch?
<br>
<p>thanks
<br>
Steve
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8799.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8797.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8811.php">Iain Bason: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Reply:</strong> <a href="8811.php">Iain Bason: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Reply:</strong> <a href="8838.php">Jeff Squyres: "Re: [OMPI users] Interaction between Intel and OpenMPI floating pointexceptions"</a>
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
