<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 15:32:33 2007" -->
<!-- isoreceived="20070627193233" -->
<!-- sent="Wed, 27 Jun 2007 14:32:29 -0500" -->
<!-- isosent="20070627193229" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI / SLURM Job Issues" -->
<!-- id="4682BB4D.1030606_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200706261440.48093.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-27 15:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3554.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] initial setup"</a>
<li><strong>Previous message:</strong> <a href="3552.php">Tim Prins: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>In reply to:</strong> <a href="3552.php">Tim Prins: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the info Tim. That worked perfectly.
<br>
<p>And I now have the OpenMPI FAQ page bookmarked ;-)
<br>
<p><p>Jeff F. Pummill
<br>
<p><p><p>Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you submit a batch script, there is no need to do a salloc. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the Open MPI FAQ for details on how to run on SLURM:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=slurm">http://www.open-mpi.org/faq/?category=slurm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday 27 June 2007 14:21, Jeff Pummill wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hey Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Finally got my test nodes back and was looking at the info you sent. On
</span><br>
<span class="quotelev2">&gt;&gt; the SLURM page, it states the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Open MPI* &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt; relies upon SLURM to allocate
</span><br>
<span class="quotelev2">&gt;&gt; resources for the job and then mpirun to initiate the tasks. When using
</span><br>
<span class="quotelev2">&gt;&gt; salloc command, mpirun's -nolocal option is recommended. For example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ salloc -n4 sh    # allocates 4 processors and spawns shell for job
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 4 -nolocal a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exit          # exits shell spawned by initial salloc command
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; You are saying that I need to use the slurm salloc, then pass SLURM a
</span><br>
<span class="quotelev2">&gt;&gt; script? Or could I just add it all into the script? Fro eaample:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; salloc -n4
</span><br>
<span class="quotelev2">&gt;&gt; mpirun my_mpi_application
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, run with srun -b myscript.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff F. Pummill
</span><br>
<span class="quotelev2">&gt;&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev2">&gt;&gt; University of Arkansas
</span><br>
<span class="quotelev2">&gt;&gt; Fayetteville, Arkansas 72701
</span><br>
<span class="quotelev2">&gt;&gt; (479) 575 - 4590
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;A supercomputer is a device for turning compute-bound
</span><br>
<span class="quotelev2">&gt;&gt; problems into I/O-bound problems.&quot; -Seymour Cray
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ick; I'm surprised that we don't have this info on the FAQ.  I'll try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to rectify that shortly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How are you launching your jobs through SLURM?  OMPI currently does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not support the &quot;srun -n X my_mpi_application&quot; model for launching
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI jobs.  You must either use the -A option to srun (i.e., get an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interactive SLURM allocation) or use the -b option (submit a script
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that runs on the first node in the allocation).  Your script can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quite short:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun my_mpi_application
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that OMPI will automatically figure out how many cpu's are in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your SLURM allocation, so you don't need to specify &quot;-np X&quot;.  Hence,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can run the same script without modification no matter how many
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpus/nodes you get from SLURM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's on the long-term plan to get &quot;srun -n X my_mpi_application&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model to work; it just hasn't bubbled up high enough in the priority
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stack yet... :-\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 20, 2007, at 1:59 PM, Jeff Pummill wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just started working with OpenMPI / SLURM combo this morning. I can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; successfully launch this job from the command line and it runs to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; completion, but when launching from SLURM they hang.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; They appear to just sit with no load apparent on the compute nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; even though SLURM indicates they are running...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [jpummil_at_trillion ~]$ sinfo -l
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Wed Jun 20 12:32:29 2007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PARTITION AVAIL  TIMELIMIT   JOB_SIZE ROOT SHARE     GROUPS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NODES       STATE NODELIST
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; debug*       up   infinite 1-infinite   no    no        all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8   allocated compute-1-[1-8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; debug*       up   infinite 1-infinite   no    no        all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1        idle compute-1-0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [jpummil_at_trillion ~]$ squeue -l
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Wed Jun 20 12:32:20 2007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   JOBID PARTITION     NAME     USER    STATE       TIME TIMELIMIT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NODES NODELIST(REASON)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      79     debug   mpirun  jpummil  RUNNING       5:27
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; UNLIMITED      2 compute-1-[1-2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      78     debug   mpirun  jpummil  RUNNING       5:58
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; UNLIMITED      2 compute-1-[3-4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      77     debug   mpirun  jpummil  RUNNING       7:00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; UNLIMITED      2 compute-1-[5-6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      74     debug   mpirun  jpummil  RUNNING      11:39
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; UNLIMITED      2 compute-1-[7-8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are there any known issues of this nature involving OpenMPI and SLURM?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff F. Pummill
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3553/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3554.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] initial setup"</a>
<li><strong>Previous message:</strong> <a href="3552.php">Tim Prins: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>In reply to:</strong> <a href="3552.php">Tim Prins: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
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
