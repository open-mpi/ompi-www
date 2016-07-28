<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 08:14:30 2006" -->
<!-- isoreceived="20060224131430" -->
<!-- sent="Fri, 24 Feb 2006 08:14:29 -0500" -->
<!-- isosent="20060224131429" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure failure on Solaris Opteron with Sun Studio 11" -->
<!-- id="EC98AE3F-322F-42CA-A410-DA0AD0DD6FFF_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43FEDF15.4090408_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-24 08:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0698.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="0696.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="0691.php">Pierre Valiron: "[OMPI users] Configure failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0704.php">Pierre Valiron: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<li><strong>Reply:</strong> <a href="0704.php">Pierre Valiron: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2006, at 5:25 AM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; I have tried to build the 1.0.2a8 version on Solaris Opteron with  
</span><br>
<span class="quotelev1">&gt; Sun Studio 11.
</span><br>
<span class="quotelev1">&gt; The configure fails on attempting to guess the largest fortran  
</span><br>
<span class="quotelev1">&gt; integer. I attach my build script, and output from configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully there is a simple fix.
</span><br>
<p>Open MPI has both a Fortran 77 and Fortran 90 bindings layer, so we  
<br>
configure and test both compilers.  You need to add two more  
<br>
environment variables to get Open MPI configured correctly:
<br>
<p>F77=f77
<br>
FCFLAGS=&quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
<p>The F77 / FFLAGS set the Fortran 77 compiler and its associated  
<br>
flags.  FC / FCFLAGS set the Fortran (90,95,03) compiler and its  
<br>
associated flags.
<br>
<p>Because F77 was unset, configure tried using the g77 it found in your  
<br>
path.  But because FFLAGS *was* set, it tried using the arguments in  
<br>
FFLAGS, which are for Sun's compiler, not gcc.
<br>
<p>Hope this makes sense,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0698.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="0696.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="0691.php">Pierre Valiron: "[OMPI users] Configure failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0704.php">Pierre Valiron: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<li><strong>Reply:</strong> <a href="0704.php">Pierre Valiron: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
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
