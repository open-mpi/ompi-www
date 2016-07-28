<?
$subject_val = "Re: [OMPI users] problem with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 25 11:03:20 2010" -->
<!-- isoreceived="20100625150320" -->
<!-- sent="Fri, 25 Jun 2010 08:03:07 -0700" -->
<!-- isosent="20100625150307" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with mpirun" -->
<!-- id="20100625150307.GA2263_at_tosh2egg.ca.sanfran.comcast.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF416F7F9D.CAC3A796-ONC125773F.0031B7D8-C125773F.0031B7DD_at_mpsa.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with mpirun<br>
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-25 11:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13411.php">Немања Илић (Nemanja Ilic): "[OMPI users] Debugging OpenMPI with GDB"</a>
<li><strong>Previous message:</strong> <a href="13409.php">Philippe: "[OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13307.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] problem with mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jun 11, 2010 at 11:03:03AM +0200, asmae.elbahlouli_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Sender: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    i'm doing a tutorial on OpenFoam, but when i run in parallel by typing
</span><br>
<span class="quotelev1">&gt;    &quot;mpirun -np 30 foamProMesh -parallel | tee 2&gt;&amp;1 log/FPM.log&quot;
</span><br>
<p>.....
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [1]     in file autoHexMesh/meshRefinement/meshRefinement.C at line
</span><br>
<span class="quotelev1">&gt;    1180.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Your error is in OpenFoam -- the MPI errors are
<br>
simply MPI cleaning up because OpenFoam bailed.
<br>
<p>If you run the parallel example of open foam
<br>
at <a href="http://www.openfoam.com/docs/user/damBreak.php#x7-610002.3.11">http://www.openfoam.com/docs/user/damBreak.php#x7-610002.3.11</a>
<br>
following the instructions with care
<br>
does it run better.
<br>
<p>The source is full of tutorials and examples but 
<br>
it appears that running in parallel requires changes
<br>
in multiple places when the number of ranks changes.
<br>
<p><p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13411.php">Немања Илић (Nemanja Ilic): "[OMPI users] Debugging OpenMPI with GDB"</a>
<li><strong>Previous message:</strong> <a href="13409.php">Philippe: "[OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13307.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] problem with mpirun"</a>
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
