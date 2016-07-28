<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 15:26:32 2007" -->
<!-- isoreceived="20070711192632" -->
<!-- sent="Wed, 11 Jul 2007 13:26:22 -0600" -->
<!-- isosent="20070711192622" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Recursive use of &amp;quot;orterun&amp;quot;" -->
<!-- id="C2BA8AFE.9E64%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.61.0707111149140.25340_at_globe.wustl.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 15:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3647.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Previous message:</strong> <a href="3645.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<li><strong>In reply to:</strong> <a href="3644.php">Lev Gelb: "[OMPI users] Recursive use of &quot;orterun&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm unaware of any issues that would cause it to fail just because it is
<br>
being run via that interface.
<br>
<p>The error message is telling us that the procs got launched, but then
<br>
orterun went away unexpectedly. Are you seeing your procs complete? We do
<br>
sometimes see that message due to a race condition between the daemons
<br>
spawned to support the application procs and orterun itself (see other
<br>
recent notes in this forum).
<br>
<p>If your procs are not completing, then it would mean that either the
<br>
connecting fabric is failing for some reason, or orterun is terminating
<br>
early. If you could add --debug-daemons -mca odls_base_verbose 1 to the
<br>
os.system command, the output from that might help us understand why it is
<br>
failing.
<br>
<p>Ralph
<br>
<p><p><p>On 7/11/07 10:49 AM, &quot;Lev Gelb&quot; &lt;gelb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to port an application to use OpenMPI, and running
</span><br>
<span class="quotelev1">&gt; into a problem.  The program (written in Python, parallelized
</span><br>
<span class="quotelev1">&gt; using either of &quot;pypar&quot; or &quot;pyMPI&quot;) itself invokes &quot;mpirun&quot;
</span><br>
<span class="quotelev1">&gt; in order to manage external, parallel processes, via something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     orterun -np 2 python myapp.py
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where myapp.py contains:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     os.system('orterun -np 2 nwchem.x nwchem.inp &gt; nwchem.out')
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have this working under both LAM-MPI and MPICH on a variety
</span><br>
<span class="quotelev1">&gt; of different machines.  However, with OpenMPI,  all I get is an
</span><br>
<span class="quotelev1">&gt; immediate return from the system call and the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;OOB: Connection to HNP lost&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have verified that the command passed to os.system is correct,
</span><br>
<span class="quotelev1">&gt; and even that it runs correctly if &quot;myapp.py&quot; doesn't invoke any
</span><br>
<span class="quotelev1">&gt; MPI calls of its own.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm testing openMPI on a single box, so there's no machinefile-stuff currently
</span><br>
<span class="quotelev1">&gt; active.  The system is running Fedora Core 6 x86-64, I'm using the latest
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.3-1.src.rpm rebuilt on the machine in question,
</span><br>
<span class="quotelev1">&gt; I can provide additional configuration details if necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, in advance, for any help or advice,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lev
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Lev Gelb Associate Professor Department of Chemistry, Washington University in
</span><br>
<span class="quotelev1">&gt; St. Louis, St. Louis, MO 63130  USA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; email: gelb_at_[hidden]
</span><br>
<span class="quotelev1">&gt; phone: (314)935-5026 fax:   (314)935-4481
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.chemistry.wustl.edu/~gelb">http://www.chemistry.wustl.edu/~gelb</a>
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="3647.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Previous message:</strong> <a href="3645.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<li><strong>In reply to:</strong> <a href="3644.php">Lev Gelb: "[OMPI users] Recursive use of &quot;orterun&quot;"</a>
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
