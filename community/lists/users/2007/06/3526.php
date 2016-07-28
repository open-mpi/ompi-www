<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 08:00:57 2007" -->
<!-- isoreceived="20070621120057" -->
<!-- sent="Thu, 21 Jun 2007 08:00:36 -0400" -->
<!-- isosent="20070621120036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI / SLURM Job Issues" -->
<!-- id="88FFB519-3622-4071-B4DB-909C4657BA1E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46796AF6.8090700_at_uark.edu" -->
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
<strong>Date:</strong> 2007-06-21 08:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3527.php">Jeff Squyres: "Re: [OMPI users] openmpi/numa"</a>
<li><strong>Previous message:</strong> <a href="3525.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including	code	attachments"</a>
<li><strong>In reply to:</strong> <a href="3518.php">Jeff Pummill: "[OMPI users] OpenMPI / SLURM Job Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3529.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Reply:</strong> <a href="3529.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Reply:</strong> <a href="3551.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ick; I'm surprised that we don't have this info on the FAQ.  I'll try  
<br>
to rectify that shortly.
<br>
<p>How are you launching your jobs through SLURM?  OMPI currently does  
<br>
not support the &quot;srun -n X my_mpi_application&quot; model for launching  
<br>
MPI jobs.  You must either use the -A option to srun (i.e., get an  
<br>
interactive SLURM allocation) or use the -b option (submit a script  
<br>
that runs on the first node in the allocation).  Your script can be  
<br>
quite short:
<br>
<p>#!/bin/sh
<br>
mpirun my_mpi_application
<br>
<p>Note that OMPI will automatically figure out how many cpu's are in  
<br>
your SLURM allocation, so you don't need to specify &quot;-np X&quot;.  Hence,  
<br>
you can run the same script without modification no matter how many  
<br>
cpus/nodes you get from SLURM.
<br>
<p>It's on the long-term plan to get &quot;srun -n X my_mpi_application&quot;  
<br>
model to work; it just hasn't bubbled up high enough in the priority  
<br>
stack yet... :-\
<br>
<p><p>On Jun 20, 2007, at 1:59 PM, Jeff Pummill wrote:
<br>
<p><span class="quotelev1">&gt; Just started working with OpenMPI / SLURM combo this morning. I can  
</span><br>
<span class="quotelev1">&gt; successfully launch this job from the command line and it runs to  
</span><br>
<span class="quotelev1">&gt; completion, but when launching from SLURM they hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They appear to just sit with no load apparent on the compute nodes  
</span><br>
<span class="quotelev1">&gt; even though SLURM indicates they are running...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jpummil_at_trillion ~]$ sinfo -l
</span><br>
<span class="quotelev1">&gt; Wed Jun 20 12:32:29 2007
</span><br>
<span class="quotelev1">&gt; PARTITION AVAIL  TIMELIMIT   JOB_SIZE ROOT SHARE     GROUPS   
</span><br>
<span class="quotelev1">&gt; NODES       STATE NODELIST
</span><br>
<span class="quotelev1">&gt; debug*       up   infinite 1-infinite   no    no        all       
</span><br>
<span class="quotelev1">&gt; 8   allocated compute-1-[1-8]
</span><br>
<span class="quotelev1">&gt; debug*       up   infinite 1-infinite   no    no        all       
</span><br>
<span class="quotelev1">&gt; 1        idle compute-1-0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jpummil_at_trillion ~]$ squeue -l
</span><br>
<span class="quotelev1">&gt; Wed Jun 20 12:32:20 2007
</span><br>
<span class="quotelev1">&gt;   JOBID PARTITION     NAME     USER    STATE       TIME TIMELIMIT   
</span><br>
<span class="quotelev1">&gt; NODES NODELIST(REASON)
</span><br>
<span class="quotelev1">&gt;      79     debug   mpirun  jpummil  RUNNING       5:27  
</span><br>
<span class="quotelev1">&gt; UNLIMITED      2 compute-1-[1-2]
</span><br>
<span class="quotelev1">&gt;      78     debug   mpirun  jpummil  RUNNING       5:58  
</span><br>
<span class="quotelev1">&gt; UNLIMITED      2 compute-1-[3-4]
</span><br>
<span class="quotelev1">&gt;      77     debug   mpirun  jpummil  RUNNING       7:00  
</span><br>
<span class="quotelev1">&gt; UNLIMITED      2 compute-1-[5-6]
</span><br>
<span class="quotelev1">&gt;      74     debug   mpirun  jpummil  RUNNING      11:39  
</span><br>
<span class="quotelev1">&gt; UNLIMITED      2 compute-1-[7-8]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any known issues of this nature involving OpenMPI and SLURM?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff F. Pummill
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3527.php">Jeff Squyres: "Re: [OMPI users] openmpi/numa"</a>
<li><strong>Previous message:</strong> <a href="3525.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including	code	attachments"</a>
<li><strong>In reply to:</strong> <a href="3518.php">Jeff Pummill: "[OMPI users] OpenMPI / SLURM Job Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3529.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Reply:</strong> <a href="3529.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Reply:</strong> <a href="3551.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
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
