<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 13:49:23 2010" -->
<!-- isoreceived="20101025174923" -->
<!-- sent="Mon, 25 Oct 2010 11:49:18 -0600" -->
<!-- isosent="20101025174918" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="SNT134-w45AC68ABC78E7556466D78CB410_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AB06684E-F355-4278-972B-5371048F1259_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI program cannot complete<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 13:49:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14601.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14599.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14598.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14601.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14601.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks
<br>
I use         qsub -I nsga2_job.sh        qsub: waiting for job 48270.clusterName to start
<br>
By qstat    I found the job name is none and no results show up. 
<br>
No shell prompt appear, the command line is hang there , no response. 
<br>
Any help is appreciated. 
<br>
Thanks
<br>
Jack 
<br>
Oct. 25 2010
<br>
<span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Mon, 25 Oct 2010 13:39:30 -0400
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI program cannot complete
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you use the interactive mode of PBS to get 5 cores on 1 node?  IIRC, &quot;qsub -I ...&quot; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then you get a shell prompt with your allocated cores and can run stuff interactively.  I don't know if your site allows this, but interactive debugging here might be *significantly* easier than try to automate some debugging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2010, at 1:35 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have to use #PBS to submit any jobs in my cluster. 
</span><br>
<span class="quotelev2">&gt; &gt; I cannot use command line to hang a job on my cluster. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; this is my script: 
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -N jobname
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -l walltime=00:08:00,nodes=1
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -q queuename
</span><br>
<span class="quotelev2">&gt; &gt; COMMAND=/mypath/myprog
</span><br>
<span class="quotelev2">&gt; &gt; NCORES=5
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt; &gt; NODES=`cat $PBS_NODEFILE | wc -l`
</span><br>
<span class="quotelev2">&gt; &gt; NPROC=$(( $NCORES * $NODES ))
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np $NPROC --mca btl self,sm,openib  $COMMAND
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Where should I put the (gdb --batch -ex 'bt full' -ex 'info reg' -pid ZOMBIE_PID) in the script ? 
</span><br>
<span class="quotelev2">&gt; &gt; And how to get ZOMBIE_PID from the script ? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help is appreciated. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Oct. 25 2010
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 25 Oct 2010 19:24:35 +0200
</span><br>
<span class="quotelev2">&gt; &gt; From: jed_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Open MPI program cannot complete
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Oct 25, 2010 at 19:07, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I need to use #PBS parallel job script to submit a job on MPI cluster. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is it not possible to reproduce locally?  Most clusters have a way to submit an interactive job (which would let you start this thing and then inspect individual processes).  Ashley's Padb suggestion will certainly be better in a non-interactive environment.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; Where should I put the (gdb --batch -ex 'bt full' -ex 'info reg' -pid ZOMBIE_PID) in the script ? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is control returning to your script after rank 0 has exited?  In that case, you can just put this on the next line.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; How to get the ZOMBIE_PID ? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;ps&quot; from the command line, or getpid() from C code.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jed
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14600/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14601.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14599.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14598.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14601.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14601.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
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
