<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 16 14:25:59 2006" -->
<!-- isoreceived="20060716182559" -->
<!-- sent="Sun, 16 Jul 2006 12:25:35 -0600" -->
<!-- isosent="20060716182535" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi, LSF and GM" -->
<!-- id="C8990D81-E107-428B-B294-6E2002308FAC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44BA2D2D.1010700_at_ntlworld.com" -->
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
<strong>Date:</strong> 2006-07-16 14:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1627.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Previous message:</strong> <a href="1625.php">Keith Refson: "[OMPI users] Openmpi, LSF and GM"</a>
<li><strong>In reply to:</strong> <a href="1625.php">Keith Refson: "[OMPI users] Openmpi, LSF and GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1641.php">Keith Refson: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Reply:</strong> <a href="1641.php">Keith Refson: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2006, at 6:12 AM, Keith Refson wrote:
<br>
<p><span class="quotelev1">&gt; The compile of openmpi 1.1 was without problems and
</span><br>
<span class="quotelev1">&gt; appears to have correctly built the GM btl.
</span><br>
<span class="quotelev1">&gt; $ ompi_info -a | egrep &quot;\bgm\b|_gm_&quot;
</span><br>
<span class="quotelev1">&gt;                MCA mpool: gm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: gm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<p>Ok, so GM support is definitely built into your build of Open MPI,  
<br>
which is a good start.
<br>
<p><span class="quotelev1">&gt; However I have been unable to sey up a parallel run which uses gm.
</span><br>
<span class="quotelev1">&gt; If I start a run using the openmpi mpirun command, the program  
</span><br>
<span class="quotelev1">&gt; executes
</span><br>
<span class="quotelev1">&gt; correctly in parallel. However the timings appear to suggest that  
</span><br>
<span class="quotelev1">&gt; it is
</span><br>
<span class="quotelev1">&gt; using tcp, and the command executed on the node looks  like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orted --bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 -- 
</span><br>
<span class="quotelev1">&gt; nodename
</span><br>
<span class="quotelev1">&gt; scarf-cn001.rl.ac.uk --universe
</span><br>
<span class="quotelev1">&gt; cse0000_at_[hidden]:default-universe-28588 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.1:52491;tcp://130.246.142.1:52491&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.1:52491;t
</span><br>
<p>Right, orted is just a starter for the MPI processes -- the  
<br>
information on interconnects to use and that kind of stuff is passed  
<br>
through the out-of-band communication mechanism.  orted doesn't  
<br>
really care which interconnect the MPI process is going to use, so we  
<br>
don't pass it on the command line.
<br>
<p><span class="quotelev1">&gt; Furthermore if attempt to start with the mpirun arguments &quot;--mca btl
</span><br>
<span class="quotelev1">&gt; gm,self,^tcp&quot; the run aborts at the MPI_INIT call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Q1:  Is there anything else I have to do to get openmpi to use gm?
</span><br>
<p>The command line you want is:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np X -mca btl gm,sm,self &lt;other arguments&gt;
<br>
<p>If this causes an error during MPI_INIT or early in your application,  
<br>
it would be useful to see all the output form the parallel run.  That  
<br>
likely indicates that there is something wrong with the  
<br>
initialization of the interconnect.
<br>
<p><span class="quotelev1">&gt; Q2:  Is there any way of diagnosing which btl is actually being used
</span><br>
<span class="quotelev1">&gt;      and why?  None &quot;-v&quot; option to mpirun, &quot;-mca btl   
</span><br>
<span class="quotelev1">&gt; btl_base_verbose&quot;
</span><br>
<span class="quotelev1">&gt;      or &quot;-mca btl  btl_gm_debug=1&quot; make any difference or produce any
</span><br>
<span class="quotelev1">&gt;      more output
</span><br>
<p>The arguments you want would look like:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np X -mca btl gm,sm,self -mca btl_base_verbose 1 -mca  
<br>
btl_gm_debug 1 &lt;other arguments&gt;
<br>
<p><span class="quotelev1">&gt; Q3:  Is there a way to make openmpi work with the LSF commands?  So  
</span><br>
<span class="quotelev1">&gt; far
</span><br>
<span class="quotelev1">&gt;      I have constructed a hostfile from the LSF environment variable
</span><br>
<span class="quotelev1">&gt;      LSB_HOSTS and used the openmpi mpirun command to start the
</span><br>
<span class="quotelev1">&gt;      parallel executable.
</span><br>
<p>Currently, we do not have tight LSF integration for Open MPI, like we  
<br>
do for PBS, SLURM, and BProc.  This is mainly because the only LSF  
<br>
machines the development team regularly uses are BProc machines,  
<br>
which do not use the traditional startup and allocation mechanisms of  
<br>
LSF.  I believe it is on our feature request list, but I also don't  
<br>
believe we have a timeline for implementation.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1627.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Previous message:</strong> <a href="1625.php">Keith Refson: "[OMPI users] Openmpi, LSF and GM"</a>
<li><strong>In reply to:</strong> <a href="1625.php">Keith Refson: "[OMPI users] Openmpi, LSF and GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1641.php">Keith Refson: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Reply:</strong> <a href="1641.php">Keith Refson: "Re: [OMPI users] Openmpi, LSF and GM"</a>
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
