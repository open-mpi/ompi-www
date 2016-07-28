<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 25 11:13:19 2005" -->
<!-- isoreceived="20051025161319" -->
<!-- sent="Tue, 25 Oct 2005 10:13:13 -0600" -->
<!-- isosent="20051025161313" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] HPL &amp;amp; HPCC: Wedged" -->
<!-- id="D870538E-C850-40AC-963C-6715C5D56ED7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.sy0qcunyies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-25 11:13:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0232.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Previous message:</strong> <a href="0230.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<li><strong>In reply to:</strong> <a href="0225.php">Troy Telford: "[O-MPI users] HPL &amp; HPCC: Wedged"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0232.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Reply:</strong> <a href="0232.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Troy,
<br>
<p>Sorry for the delay, I am now able to reproduce this behavior when I  
<br>
do not specify HPL_NO_DATATYPE. If I do specify HPL_NO_DATATYPE the  
<br>
run completes. We will be looking into this now.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p>On Oct 21, 2005, at 5:03 PM, Troy Telford wrote:
<br>
<p><p><span class="quotelev1">&gt; I've been trying out the RC4 builds of OpenMPI; I've been using  
</span><br>
<span class="quotelev1">&gt; Myrinet
</span><br>
<span class="quotelev1">&gt; (gm), Infiniband (mvapi), and TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running a benchmark such as IMB (formerly PALLAS, IIRC), or  
</span><br>
<span class="quotelev1">&gt; even a
</span><br>
<span class="quotelev1">&gt; simple hello world, there are no problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when running HPL (and HPCC, which is a superset of HPL), I  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; run into a problem:  When running HPL (or when the execution  
</span><br>
<span class="quotelev1">&gt; reaches the
</span><br>
<span class="quotelev1">&gt; HPL portion of HPCC), the process seems to get wedged...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no problems compiling and building HPL and HPCC for MPICH  
</span><br>
<span class="quotelev1">&gt; variants
</span><br>
<span class="quotelev1">&gt; ( including MVAPICH, MPICH-GM/MX) and LAM; no problems with the gcc,
</span><br>
<span class="quotelev1">&gt; Intel, PGI, or Pathscale compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The HPL.dat (and hpccinf.txt) can be identical across the  
</span><br>
<span class="quotelev1">&gt; machines.  The
</span><br>
<span class="quotelev1">&gt; machines are identically configured (except for the interconnect).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when running the HPL code (on OpenMPI), HPL will peg the  
</span><br>
<span class="quotelev1">&gt; CPUs,
</span><br>
<span class="quotelev1">&gt; and run until I feel like killing it..  If the 'N' size is larger  
</span><br>
<span class="quotelev1">&gt; than a
</span><br>
<span class="quotelev1">&gt; fraction of a percent of free system memory (0.1% of free memory;  
</span><br>
<span class="quotelev1">&gt; system
</span><br>
<span class="quotelev1">&gt; has 2 GB/CPU, in my case), HPL and HPCC will not finish computing that
</span><br>
<span class="quotelev1">&gt; problem size.  (Case in point -- a N size that is small enough that it
</span><br>
<span class="quotelev1">&gt; takes 1-2 seconds with MPICH, MPICH-GM, MVAPICH, or LAM -- doesn't
</span><br>
<span class="quotelev1">&gt; complete after several minutes on OpenMPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm therefore, somewhat confused; I've seen posts from people who  
</span><br>
<span class="quotelev1">&gt; claim to
</span><br>
<span class="quotelev1">&gt; have run HPL with OpenMPI.  I've had no issues running other  
</span><br>
<span class="quotelev1">&gt; benchmarks on
</span><br>
<span class="quotelev1">&gt; OpenMPI; but HPL-based code seems to wedge itself...  The behavior is
</span><br>
<span class="quotelev1">&gt; consistent when I use Myrinet, Infiniband, or Ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running OpenMPI on Linux (SuSE Enterprise 9, SP2, x86_64).
</span><br>
<span class="quotelev1">&gt; Dual-Opteron 248; 2 GB/CPU
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0232.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Previous message:</strong> <a href="0230.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<li><strong>In reply to:</strong> <a href="0225.php">Troy Telford: "[O-MPI users] HPL &amp; HPCC: Wedged"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0232.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Reply:</strong> <a href="0232.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
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
