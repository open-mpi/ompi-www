<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 13:35:30 2010" -->
<!-- isoreceived="20101025173530" -->
<!-- sent="Mon, 25 Oct 2010 11:35:25 -0600" -->
<!-- isosent="20101025173525" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="SNT134-w548BE7E7EF0D0E05C878BDCB410_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTinFxAq3uBojbaBKxgJFt=OXZ-NO++JtjsjLM-B9_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-10-25 13:35:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14598.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14596.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14596.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14598.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14598.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14599.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks
<br>
I have to use #PBS to submit any jobs in my cluster. I cannot use command line to hang a job on my cluster. 
<br>
this is my script: --------------------------------------#!/bin/bash#PBS -N jobname#PBS -l walltime=00:08:00,nodes=1#PBS -q queuenameCOMMAND=/mypath/myprogNCORES=5
<br>
cd $PBS_O_WORKDIRNODES=`cat $PBS_NODEFILE | wc -l`NPROC=$(( $NCORES * $NODES ))
<br>
mpirun -np $NPROC --mca btl self,sm,openib  $COMMAND
<br>
-------------------------------------------
<br>
<p>Where should I put the (gdb --batch -ex 'bt full' -ex 'info reg' -pid ZOMBIE_PID) in the script ? And how to get ZOMBIE_PID from the script ? 
<br>
Any help is appreciated. 
<br>
thanks
<br>
Oct. 25 2010
<br>
Date: Mon, 25 Oct 2010 19:24:35 +0200
<br>
From: jed_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Open MPI program cannot complete
<br>
<p>On Mon, Oct 25, 2010 at 19:07, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p>I need to use #PBS parallel job script to submit a job on MPI cluster. 
<br>
Is it not possible to reproduce locally?  Most clusters have a way to submit an interactive job (which would let you start this thing and then inspect individual processes).  Ashley's Padb suggestion will certainly be better in a non-interactive environment.
<br>
&nbsp;Where should I put the (gdb --batch -ex 'bt full' -ex 'info reg' -pid ZOMBIE_PID) in the script ? 
<br>
<p>Is control returning to your script after rank 0 has exited?  In that case, you can just put this on the next line. 
<br>
How to get the ZOMBIE_PID ? 
<br>
<p>&quot;ps&quot; from the command line, or getpid() from C code.
<br>
Jed
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14598.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14596.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14596.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14598.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14598.php">Jeff Squyres: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14599.php">Jed Brown: "Re: [OMPI users] Open MPI program cannot complete"</a>
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
