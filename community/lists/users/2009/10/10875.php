<?
$subject_val = "Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 16:16:52 2009" -->
<!-- isoreceived="20091002201652" -->
<!-- sent="Fri, 02 Oct 2009 13:17:46 -0700" -->
<!-- isosent="20091002201746" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?" -->
<!-- id="4AC65FEA.6060701_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AAFDA21.9090207_at_scinet.utoronto.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 +	gcc4.4?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-02 16:17:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10876.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10874.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10656.php">Jonathan Dursi: "[OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 + gcc4.4?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jonathan Dursi wrote:
<br>
<p><span class="quotelev1">&gt; We have here installed a couple of installations of OpenMPI 1.3.2, and 
</span><br>
<span class="quotelev1">&gt; we are having real problems with single-node jobs randomly hanging 
</span><br>
<span class="quotelev1">&gt; when using the shared memory BTL, particularly (but perhaps not only) 
</span><br>
<span class="quotelev1">&gt; when using the version compiled with gcc 4.4.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The very trivial attached program, which just does a series of 
</span><br>
<span class="quotelev1">&gt; SENDRECVs   rightwards through MPI_COMM_WORLD, hangs extremely 
</span><br>
<span class="quotelev1">&gt; reliably when run like so on an 8 core box:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 6 -mca btl self,sm ./diffusion-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (the test example was based on a simple fortran example of MPIing the 
</span><br>
<span class="quotelev1">&gt; 1d diffusion equation).   The hanging seems to always occur within the 
</span><br>
<span class="quotelev1">&gt; first 500 or so iterations - but sometimes between the 10th and 20th 
</span><br>
<span class="quotelev1">&gt; and sometimes not until the late 400s.   The hanging occurs both on a 
</span><br>
<span class="quotelev1">&gt; new dual socket quad core nehalem box, and an older harpertown machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running without sm, however, seems to work fine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 6 -mca btl self,tcp ./diffusion-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; never gives any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?  I notice a mention of `improved flow control in sm' 
</span><br>
<span class="quotelev1">&gt; in the ChangeLog to 1.3.3; is that a significant bugfix?
</span><br>
<p>I filed a trac ticket on this.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10876.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10874.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10656.php">Jonathan Dursi: "[OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 + gcc4.4?"</a>
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
