<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 15 09:39:16 2006" -->
<!-- isoreceived="20060615133916" -->
<!-- sent="Thu, 15 Jun 2006 07:39:14 -0600" -->
<!-- isosent="20060615133914" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with open MPI and Slurm" -->
<!-- id="1150378754.30726.3.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="AF293AF0A07C8A44A6098DA99D03713005EC8BA7_at_pnlmse24.pnl.gov" -->
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
<strong>Date:</strong> 2006-06-15 09:39:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1420.php">Martin Schafföner: "[OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Previous message:</strong> <a href="1418.php">Doolittle, Joshua: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<li><strong>In reply to:</strong> <a href="1416.php">Doolittle, Joshua: "[OMPI users] Trouble with open MPI and Slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1423.php">Doolittle, Joshua: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<li><strong>Reply:</strong> <a href="1423.php">Doolittle, Joshua: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2006-06-14 at 10:05 -0700, Doolittle, Joshua wrote:
<br>
<span class="quotelev1">&gt; I am running Open MPI version 1.0.2 and slurm 1.1.0.  I can run slurm
</span><br>
<span class="quotelev1">&gt; jobs, and I can run mpi jobs.  However, when I run a mpi job in slurm
</span><br>
<span class="quotelev1">&gt; batch mode with 4 processes, the processes do not talk to each other.
</span><br>
<span class="quotelev1">&gt; They act like they are the only process.  I'm running these in slurm
</span><br>
<span class="quotelev1">&gt; batch mode.  The job that I'm running is a simple mpi optimized hello
</span><br>
<span class="quotelev1">&gt; world.  I'm running these on an opteron (x86_64) blade system from a
</span><br>
<span class="quotelev1">&gt; head node.  Any help would be greatly appreciated.
</span><br>
<p>How are you running your batch job?  Unlike some MPI implementations,  
<br>
Open MPI jobs  can not be started under SLURM without the use of  
<br>
mpirun.  You can either run mpirun under an interactive session:
<br>
<p>&nbsp;&nbsp;&nbsp;srun -N 4 -A
<br>
&nbsp;&nbsp;&nbsp;mpirun -np 4 ./foobar
<br>
<p>or from a batch script:
<br>
<p>&nbsp;&nbsp;&nbsp;echo &quot;mpirun -np 4 ./foobar&quot; &gt; foo.sh
<br>
&nbsp;&nbsp;&nbsp;chmod +x foo.sh
<br>
&nbsp;&nbsp;&nbsp;srun -N 4 -b foo.sh
<br>
<p>But you can't submit your application directly without mpirun.  This  
<br>
is a feature we would like to support in the future, but there are  
<br>
some licensing issues (we would have to link with their GPL'ed  
<br>
libraries, which wouldn't work so well for us).
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
<li><strong>Next message:</strong> <a href="1420.php">Martin Schafföner: "[OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Previous message:</strong> <a href="1418.php">Doolittle, Joshua: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<li><strong>In reply to:</strong> <a href="1416.php">Doolittle, Joshua: "[OMPI users] Trouble with open MPI and Slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1423.php">Doolittle, Joshua: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<li><strong>Reply:</strong> <a href="1423.php">Doolittle, Joshua: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
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
