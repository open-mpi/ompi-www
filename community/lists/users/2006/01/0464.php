<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  3 12:48:43 2006" -->
<!-- isoreceived="20060103174843" -->
<!-- sent="Tue, 3 Jan 2006 12:48:36 -0500" -->
<!-- isosent="20060103174836" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] (no subject)" -->
<!-- id="7597F036-2C82-4B38-B9B8-78671597541D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="59397.70.210.27.171.1135976507.squirrel_at_loginhost.osc.edu" -->
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
<strong>Date:</strong> 2006-01-03 12:48:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0465.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0455.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0500.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="0500.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 30, 2005, at 4:01 PM, Michael L. Stokes wrote:
<br>
<p><span class="quotelev2">&gt;&gt; On Dec 30, 2005, at 1:05 PM, Michael L. Stokes wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have compiled and installed OpenMPI on a SUSE based SGI PRISM (8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor model).  I configured the build with --with- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; device=ch_shmem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; otherwise I took all the defaults. I installed as root using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; install prefix. SO good so far.  Then I compile my hello world  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; project
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using mpiCC, and again this looks good. I run ldd on the executable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was convinced that is is using the OpenMPI libs and not the MPT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libs.
</span><br>
<p>I noticed you are using a fairly old version of Open MPI (from before  
<br>
we officially released v1.0.1).  Could you try either v1.0.1 or a new  
<br>
nightly tarball and see if you get the same results.  I'm also a  
<br>
little concerned about the output from mpirun -d -- can you double  
<br>
check that you are using the mpirun from the right installation path  
<br>
(and not one from an older version of Open MPI or LAM or MPICH or  
<br>
something?).
<br>
<p>Thanks,
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
<li><strong>Next message:</strong> <a href="0465.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0455.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0500.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="0500.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
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
