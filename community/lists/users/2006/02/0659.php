<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 14 15:05:59 2006" -->
<!-- isoreceived="20060214200559" -->
<!-- sent="Tue, 14 Feb 2006 15:05:48 -0500" -->
<!-- isosent="20060214200548" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem:  MPI_Comm_rank always returns 0" -->
<!-- id="198363DC-20AC-4C72-9B14-879E1589E6E0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43F22AAA.4080806_at_llnl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-14 15:05:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0660.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="0658.php">Mike Haskell: "[OMPI users] Problem:  MPI_Comm_rank always returns 0"</a>
<li><strong>In reply to:</strong> <a href="0658.php">Mike Haskell: "[OMPI users] Problem:  MPI_Comm_rank always returns 0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2006, at 2:08 PM, Mike Haskell wrote:
<br>
<p><span class="quotelev1">&gt; odev2_at_mhaskell:  srun -N4 -n4 --nodelist=odev[0-3,6] `pwd`/hello
</span><br>
<span class="quotelev1">&gt; 1 of 4:  Hello world!
</span><br>
<span class="quotelev1">&gt; 3 of 4:  Hello world!
</span><br>
<span class="quotelev1">&gt; 2 of 4:  Hello world!
</span><br>
<span class="quotelev1">&gt; 0 of 4:  Hello world!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run it with OpenMPI (openmpi-1.0.2a4), I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; odev2_at_mhaskell:  srun -N4 -n4 --nodelist=odev[0-3,6] `pwd`/hello
</span><br>
<span class="quotelev1">&gt; 0 of 1:  Hello world!
</span><br>
<span class="quotelev1">&gt; 0 of 1:  Hello world!
</span><br>
<span class="quotelev1">&gt; 0 of 1:  Hello world!
</span><br>
<span class="quotelev1">&gt; 0 of 1:  Hello world!
</span><br>
<p>This is actually not a mode that we support in SLURM [yet] -- we  
<br>
currently require the use of mpirun.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;srun -N4 -n4 -A ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 4 hello
<br>
<p>The &quot;-A&quot; option to srun will give you an interactive shell where you  
<br>
can run mpirun as many times as you'd like.  The mpirun will  
<br>
automatically get the hostnames from SLURM -- no need to provide a  
<br>
hostfile or anything like that.
<br>
<p>Similarly, you can write a script and submit it to slurm with the -b  
<br>
switch (where only one copy of the script runs, not N copies).  You'd  
<br>
put the mpirun command in there, and just like with the interactive  
<br>
mode, it'll get the hosts from SLURM, etc.
<br>
<p>(FWIW, we use SLURM on our clusters too -- these two modes have  
<br>
worked quite well for us; let us know if you have problems with them)
<br>
<p>Hope that helps!
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0660.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="0658.php">Mike Haskell: "[OMPI users] Problem:  MPI_Comm_rank always returns 0"</a>
<li><strong>In reply to:</strong> <a href="0658.php">Mike Haskell: "[OMPI users] Problem:  MPI_Comm_rank always returns 0"</a>
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
