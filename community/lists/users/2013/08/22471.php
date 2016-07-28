<?
$subject_val = "Re: [OMPI users] Error launching single-node tasks from multiple-node job.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 10 19:18:06 2013" -->
<!-- isoreceived="20130810231806" -->
<!-- sent="Sat, 10 Aug 2013 16:18:06 -0700" -->
<!-- isosent="20130810231806" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error launching single-node tasks from multiple-node job." -->
<!-- id="023801ce961f$df2db3f0$9d891bd0$_at_stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Error launching single-node tasks from multiple-node job." -->
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
<strong>Subject:</strong> Re: [OMPI users] Error launching single-node tasks from multiple-node job.<br>
<strong>From:</strong> Lee-Ping Wang (<em>leeping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-10 19:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22472.php">Ralph Castain: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22470.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Maybe in reply to:</strong> <a href="22460.php">Lee-Ping Wang: "[OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22472.php">Ralph Castain: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Reply:</strong> <a href="22472.php">Ralph Castain: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>I agree that $PBS_JOBID should not point to a file in normal situations,
<br>
because it is the job identifier given by the scheduler.  However,
<br>
ras_tm_module.c actually does search for a file named $PBS_JOBID, and that
<br>
seems to be why it was failing.  You can see this in the source code as well
<br>
(look at ras_tm_module.c, I uploaded it to
<br>
<a href="https://dl.dropboxusercontent.com/u/5381783/ras_tm_module.c">https://dl.dropboxusercontent.com/u/5381783/ras_tm_module.c</a> ).  Once I
<br>
changed the $PBS_JOBID environment variable to the name of the node file,
<br>
things seemed to work - though I agree, it's not very logical.  
<br>
<p>I doubt Q-Chem is causing the issue, because I was able to &quot;fix&quot; things by
<br>
changing $PBS_JOBID before Q-Chem is called.  Also, I provided the command
<br>
line to mpirun in a previous email, where the -machinefile argument
<br>
correctly points to the custom machine file that I created.  The missing
<br>
environment variables should not matter.
<br>
<p>The PBS_NODEFILE created by Torque is
<br>
/opt/torque/aux//272139.certainty.stanford.edu and it never gets touched.  I
<br>
followed the advice in your earlier email and I created my own node file on
<br>
each node called /scratch/leeping/pbs_nodefile.$HOSTNAME, and I set
<br>
PBS_NODEFILE to point to this file.  However, this file does not get used
<br>
either, even if I include it on the mpirun command line, unless I set
<br>
PBS_JOBID to the file name.  
<br>
<p>Finally, I was not able to build OpenMPI 1.4.2 without pbs support.  I used
<br>
the configure flag --without-rte-support, but the build failed halfway
<br>
through.
<br>
<p>Thanks,
<br>
<p>- Lee-Ping
<br>
<p>leeping_at_certainty-a:~/temp$ qsub -I -q debug -l walltime=1:00:00 -l
<br>
nodes=1:ppn=12
<br>
qsub: waiting for job 272139.certainty.stanford.edu to start
<br>
qsub: job 272139.certainty.stanford.edu ready
<br>
<p>leeping_at_compute-140-4:~$ echo $PBS_NODEFILE 
<br>
/opt/torque/aux//272139.certainty.stanford.edu
<br>
<p>leeping_at_compute-140-4:~$ cat $PBS_NODEFILE
<br>
compute-140-4
<br>
compute-140-4
<br>
compute-140-4
<br>
compute-140-4
<br>
compute-140-4
<br>
compute-140-4
<br>
compute-140-4
<br>
compute-140-4
<br>
compute-140-4
<br>
compute-140-4
<br>
compute-140-4
<br>
compute-140-4
<br>
<p>leeping_at_compute-140-4:~$ echo $PBS_JOBID
<br>
272139.certainty.stanford.edu
<br>
<p>leeping_at_compute-140-4:~$ cat $PBS_JOBID
<br>
cat: 272139.certainty.stanford.edu: No such file or directory
<br>
<p>leeping_at_compute-140-4:~$ env | grep PBS
<br>
PBS_VERSION=TORQUE-2.5.3
<br>
PBS_JOBNAME=STDIN
<br>
PBS_ENVIRONMENT=PBS_INTERACTIVE
<br>
PBS_O_WORKDIR=/home/leeping/temp
<br>
PBS_TASKNUM=1
<br>
PBS_O_HOME=/home/leeping
<br>
PBS_MOMPORT=15003
<br>
PBS_O_QUEUE=debug
<br>
PBS_O_LOGNAME=leeping
<br>
PBS_O_LANG=en_US.iso885915
<br>
PBS_JOBCOOKIE=A27B00DAF72024CBEBB7CD3752BDBADC
<br>
PBS_NODENUM=0
<br>
PBS_NUM_NODES=1
<br>
PBS_O_SHELL=/bin/bash
<br>
PBS_SERVER=certainty.stanford.edu
<br>
PBS_JOBID=272139.certainty.stanford.edu
<br>
PBS_O_HOST=certainty-a.local
<br>
PBS_VNODENUM=0
<br>
PBS_QUEUE=debug
<br>
PBS_O_MAIL=/var/spool/mail/leeping
<br>
PBS_NUM_PPN=12
<br>
PBS_NODEFILE=/opt/torque/aux//272139.certainty.stanford.edu
<br>
PBS_O_PATH=/opt/intel/Compiler/11.1/064/bin/intel64:/opt/intel/Compiler/11.1
<br>
/064/bin/intel64:/usr/local/cuda/bin:/home/leeping/opt/psi-4.0b5/bin:/home/l
<br>
eeping/opt/tinker/bin:/home/leeping/opt/cctools/bin:/home/leeping/bin:/home/
<br>
leeping/local/bin:/home/leeping/opt/bin:/usr/kerberos/bin:/usr/java/latest/b
<br>
in:/usr/local/bin:/bin:/usr/bin:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/open
<br>
mpi/bin/:/opt/maui/bin:/opt/torque/bin:/opt/torque/sbin:/opt/rocks/bin:/opt/
<br>
rocks/sbin:/opt/sun-ct/bin:/home/leeping/bin
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gustavo Correa
<br>
Sent: Saturday, August 10, 2013 3:58 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Error launching single-node tasks from
<br>
multiple-node job.
<br>
<p>Lee-Ping
<br>
<p>Something looks amiss.
<br>
PBS_JOBID contains the job name.
<br>
PBS_NODEFILE contains a list (with repetitions up to the number of cores) of
<br>
the nodes that torque assigned to the job.
<br>
<p>Why things get twisted it is hard to tell, it may be something in the Q-Chem
<br>
scripts (could it be mixing up PBS_JOBID and PBS_NODEFILE?), it may be
<br>
something else.
<br>
A more remote possibility is if the cluster has a Torque qsub wrapper that
<br>
may perhaps produce the aforementioned confusion.  Unlikely, but possible.
<br>
<p>To sort out, run any simple job (mpiexec -np 32 hostname), or even your very
<br>
Q-Chem job, but precede it with a bunch of printouts of the PBS environment
<br>
variables:
<br>
echo $PBS_JOBID
<br>
echo $PBS_NODEFILE
<br>
ls -l $PBS_NODEFILE
<br>
cat $PBS_NODEFILE
<br>
cat $PBS_JOBID [this one should fail, because that is not a file, but may
<br>
work the PBS variables were messed up along the way]
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On Aug 10, 2013, at 6:39 PM, Lee-Ping Wang wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the calculation is now working, or at least it didn't crash.  
</span><br>
<span class="quotelev1">&gt; I set the PBS_JOBID environment variable to the name of my custom node 
</span><br>
<span class="quotelev1">&gt; file.  That is to say, I set PBS_JOBID=pbs_nodefile.compute-3-3.local.  
</span><br>
<span class="quotelev1">&gt; It appears that ras_tm_module.c is trying to open the file located at 
</span><br>
<span class="quotelev1">&gt; /scratch/leeping/$PBS_JOBID for some reason, and it is disregarding 
</span><br>
<span class="quotelev1">&gt; the machinefile argument on the command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It'll be a few hours before I know for sure whether the job actually
</span><br>
worked.
<br>
<span class="quotelev1">&gt; I still don't know why things are structured this way, however. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lee-Ping 
</span><br>
<span class="quotelev1">&gt; Wang
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, August 10, 2013 3:07 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error launching single-node tasks from 
</span><br>
<span class="quotelev1">&gt; multiple-node job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried your suggestions.  Here is the command line which executes mpirun.
</span><br>
<span class="quotelev1">&gt; I was puzzled because it still reported a file open failure, so I 
</span><br>
<span class="quotelev1">&gt; inserted a print statement into ras_tm_module.c and recompiled.  The
</span><br>
results are below.
<br>
<span class="quotelev1">&gt; As you can see, it tries to open a different file
</span><br>
<span class="quotelev1">&gt; (/scratch/leeping/272055.certainty.stanford.edu) than the one I 
</span><br>
<span class="quotelev1">&gt; specified (/scratch/leeping/pbs_nodefile.compute-3-3.local).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; === mpirun command line ===
</span><br>
<span class="quotelev1">&gt; /home/leeping/opt/openmpi-1.4.2-intel11-dbg/bin/mpirun -machinefile 
</span><br>
<span class="quotelev1">&gt; /scratch/leeping/pbs_nodefile.compute-3-3.local -x HOME -x PWD -x QC 
</span><br>
<span class="quotelev1">&gt; -x QCAUX -x QCCLEAN -x QCFILEPREF -x QCLOCALSCR -x QCPLATFORM -x QCREF 
</span><br>
<span class="quotelev1">&gt; -x QCRSH -x QCRUNNAME -x QCSCRATCH
</span><br>
<span class="quotelev1">&gt;                       -np 24 /home/leeping/opt/qchem40/exe/qcprog.exe
</span><br>
<span class="quotelev1">&gt; .B.in.28642.qcin.1 ./qchem28642/ &gt;&gt;B.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; === Error message from compute node === [compute-3-3.local:28666] 
</span><br>
<span class="quotelev1">&gt; Warning: could not find environment variable &quot;QCLOCALSCR&quot;
</span><br>
<span class="quotelev1">&gt; [compute-3-3.local:28666] Warning: could not find environment variable 
</span><br>
<span class="quotelev1">&gt; &quot;QCREF&quot;
</span><br>
<span class="quotelev1">&gt; [compute-3-3.local:28666] Warning: could not find environment variable 
</span><br>
<span class="quotelev1">&gt; &quot;QCRUNNAME&quot;
</span><br>
<span class="quotelev1">&gt; Attempting to open /scratch/leeping/272055.certainty.stanford.edu
</span><br>
<span class="quotelev1">&gt; [compute-3-3.local:28666] [[56726,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file ras_tm_module.c at line 155 [compute-3-3.local:28666] 
</span><br>
<span class="quotelev1">&gt; [[56726,0],0]
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 87 
</span><br>
<span class="quotelev1">&gt; [compute-3-3.local:28666] [[56726,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file base/ras_base_allocate.c at line 133 
</span><br>
<span class="quotelev1">&gt; [compute-3-3.local:28666] [[56726,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file base/plm_base_launch_support.c at line 72 
</span><br>
<span class="quotelev1">&gt; [compute-3-3.local:28666] [[56726,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file plm_tm_module.c at line 167
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lee-Ping 
</span><br>
<span class="quotelev1">&gt; Wang
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, August 10, 2013 12:51 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error launching single-node tasks from 
</span><br>
<span class="quotelev1">&gt; multiple-node job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.  You gave me many helpful suggestions, which I will try out 
</span><br>
<span class="quotelev1">&gt; and get back to you.  I will provide more specifics (e.g. how my jobs 
</span><br>
<span class="quotelev1">&gt; were
</span><br>
<span class="quotelev1">&gt; submitted) in a future email.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the queue policy, that is a highly political issue because the 
</span><br>
<span class="quotelev1">&gt; cluster is a shared resource.  My usual recourse is to use the batch 
</span><br>
<span class="quotelev1">&gt; system as effectively as possible within the confines of their 
</span><br>
<span class="quotelev1">&gt; policies.  This is why it makes sense to submit a single multiple-node 
</span><br>
<span class="quotelev1">&gt; batch job, which then executes several independent single-node tasks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gustavo 
</span><br>
<span class="quotelev1">&gt; Correa
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, August 10, 2013 12:39 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error launching single-node tasks from 
</span><br>
<span class="quotelev1">&gt; multiple-node job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Lee-Ping
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2013, at 3:15 PM, Lee-Ping Wang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your reply.  I want to run MPI jobs inside a single 
</span><br>
<span class="quotelev2">&gt;&gt; node, but due to the resource allocation policies on the clusters, I 
</span><br>
<span class="quotelev2">&gt;&gt; could get many more resources if I submit multiple-node &quot;batch jobs&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Once I have a multiple-node batch job, then I can use a command like 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pbsdsh&quot; to run single node MPI jobs on each node that is allocated 
</span><br>
<span class="quotelev2">&gt;&gt; to me.  Thus, the MPI jobs on each node are running independently of 
</span><br>
<span class="quotelev2">&gt;&gt; each other and unaware of one another.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even if you use pbdsh to launch separate MPI jobs on individual nodes, 
</span><br>
<span class="quotelev1">&gt; you probably (not 100% sure about that), probably need to specify he 
</span><br>
<span class="quotelev1">&gt; -hostfile naming the specific node that each job will run on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Still quite confused because you didn't tell how your &quot;qsub&quot; command 
</span><br>
<span class="quotelev1">&gt; looks like, what Torque script (if any) it is launching, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The actual call to mpirun is nontrivial to get, because Q-Chem has a 
</span><br>
<span class="quotelev2">&gt;&gt; complicated series of wrapper scripts which ultimately calls mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I just found this out on the Web.  See my previous email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If the
</span><br>
<span class="quotelev2">&gt;&gt; jobs are failing immediately, then I only have a small window to view 
</span><br>
<span class="quotelev2">&gt;&gt; the actual command through &quot;ps&quot; or something.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you launching the jobs interactively?  
</span><br>
<span class="quotelev1">&gt; I.e., with the -I switch to qsub?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another option is for me to compile OpenMPI without Torque / PBS support.
</span><br>
<span class="quotelev2">&gt;&gt; If I do that, then it won't look for the node file anymore.  Is this 
</span><br>
<span class="quotelev2">&gt;&gt; correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You will need to tell mpiexec where to launch the jobs.
</span><br>
<span class="quotelev1">&gt; If I understand what you are trying to achieve (and I am not sure I 
</span><br>
<span class="quotelev1">&gt; do), one way to do it would be to programatically split the 
</span><br>
<span class="quotelev1">&gt; $PBS_NODEFILE into several hostfiles, one per MPI job (so to speak) that
</span><br>
you want to launch.
<br>
<span class="quotelev1">&gt; Then use each of these nodefiles for each of the MPI jobs.
</span><br>
<span class="quotelev1">&gt; Note that the PBS_NODEFILE has one line per-node-per-core, *not* one 
</span><br>
<span class="quotelev1">&gt; line per node.
</span><br>
<span class="quotelev1">&gt; I have no idea how the trick above could be reconciled with the Q-Chem 
</span><br>
<span class="quotelev1">&gt; scripts, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Overall, I don't understand why you would benefit from such a 
</span><br>
<span class="quotelev1">&gt; complicated scheme, rather than lauching either a big MPI job across 
</span><br>
<span class="quotelev1">&gt; all nodes that you requested (if the problem is large enough to 
</span><br>
<span class="quotelev1">&gt; benefit from  this many cores), or launch several small single-node 
</span><br>
<span class="quotelev1">&gt; jobs (if the problem is small enough to fit well a single node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may want to talk to the cluster managers, because there must be a 
</span><br>
<span class="quotelev1">&gt; way to reconcile their queue policies with your needs (if this not 
</span><br>
<span class="quotelev1">&gt; already in place).
</span><br>
<span class="quotelev1">&gt; We run tons of parallel single-node jobs here, for problems that fit 
</span><br>
<span class="quotelev1">&gt; well a single node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My two cents
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will try your suggestions and get back to you.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gustavo
</span><br>
<span class="quotelev1">&gt; Correa
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, August 10, 2013 12:04 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Error launching single-node tasks from 
</span><br>
<span class="quotelev2">&gt;&gt; multiple-node job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I know nothing about Q-Chem, but I was confused by these sentences:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;That is to say, these tasks are intended to use OpenMPI parallelism 
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev1">&gt; each
</span><br>
<span class="quotelev2">&gt;&gt; node, but no parallelism across nodes. &quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;I do not observe this error when submitting single-node jobs.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Since my jobs are only parallel over the node they're running on, I
</span><br>
<span class="quotelev1">&gt; believe
</span><br>
<span class="quotelev2">&gt;&gt; that a node file of any kind is unnecessary. &quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you trying to run MPI jobs across several nodes or inside a 
</span><br>
<span class="quotelev2">&gt;&gt; single
</span><br>
<span class="quotelev1">&gt; node?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, as far as I know,
</span><br>
<span class="quotelev2">&gt;&gt; if your OpenMPI was compiled with Torque/PBS support, the 
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec/mpirun command will look for the $PBS_NODEFILE to learn in 
</span><br>
<span class="quotelev2">&gt;&gt; which node(s) it
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev2">&gt;&gt; launch the MPI processes, regardless of whether you are using one 
</span><br>
<span class="quotelev2">&gt;&gt; node or more than one node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You didn't send your mpiexec command line (which would help), but 
</span><br>
<span class="quotelev2">&gt;&gt; assuming that Q-Chem allows some level of standard mpiexec command 
</span><br>
<span class="quotelev2">&gt;&gt; options, you
</span><br>
<span class="quotelev1">&gt; could
</span><br>
<span class="quotelev2">&gt;&gt; force passing the $PBS_NODEFILE to it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Something like this (for two nodes with 8 cores each):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -q myqueue
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -N myjob
</span><br>
<span class="quotelev2">&gt;&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt;&gt; ls -l $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt; cat $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -hostfile $PBS_NODEFILE -np 16 ./my-Q-chem-executable 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;parameters
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; Q-chem&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 10, 2013, at 1:51 PM, Lee-Ping Wang wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Recently, I've begun some calculations on a cluster where I submit a
</span><br>
<span class="quotelev2">&gt;&gt; multiple node job to the Torque batch system, and the job executes
</span><br>
<span class="quotelev1">&gt; multiple
</span><br>
<span class="quotelev2">&gt;&gt; single-node parallel tasks.  That is to say, these tasks are intended 
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI parallelism on each node, but no parallelism across nodes. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some background: The actual program being executed is Q-Chem 4.0.  I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.4.2 for this, because Q-Chem is notoriously difficult to 
</span><br>
<span class="quotelev2">&gt;&gt; compile and this is the last known version of OpenMPI that this 
</span><br>
<span class="quotelev2">&gt;&gt; version of Q-Chem
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; known to work with.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My jobs are failing with the error message below; I do not observe 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; error when submitting single-node jobs.  From reading the mailing 
</span><br>
<span class="quotelev2">&gt;&gt; list archives
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/community/lists/users/2010/03/12348.php">http://www.open-mpi.org/community/lists/users/2010/03/12348.php</a>),
</span><br>
<span class="quotelev2">&gt;&gt; I believe it is looking for a PBS node file somewhere.  Since my jobs 
</span><br>
<span class="quotelev2">&gt;&gt; are only parallel over the node they're running on, I believe that a 
</span><br>
<span class="quotelev2">&gt;&gt; node file of any kind is unnecessary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question is: Why is OpenMPI behaving differently when I submit a
</span><br>
<span class="quotelev2">&gt;&gt; multi-node job compared to a single-node job?  How does OpenMPI 
</span><br>
<span class="quotelev2">&gt;&gt; detect
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; it is running under a multi-node allocation?  Is there a way I can 
</span><br>
<span class="quotelev2">&gt;&gt; change OpenMPI's behavior so it always thinks it's running on a 
</span><br>
<span class="quotelev2">&gt;&gt; single node, regardless of the type of job I submit to the batch system?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          Lee-Ping Wang (Postdoc in Dept. of Chemistry, Stanford
</span><br>
<span class="quotelev2">&gt;&gt; University)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file ras_tm_module.c at line 153 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file ras_tm_module.c at line 153 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10911] [[42011,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 153 [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open failure in file ras_tm_module.c at line 87 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file ras_tm_module.c at line 87 [compute-1-1.local:10911] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[42011,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 87 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file base/ras_base_allocate.c at line 133 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file base/ras_base_allocate.c at line 133 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file base/ras_base_allocate.c at line 133 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file base/plm_base_launch_support.c at line 72 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file base/plm_base_launch_support.c at line 72 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file base/plm_base_launch_support.c at line 72 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file plm_tm_module.c at line 167 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file plm_tm_module.c at line 167 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10911] [[42011,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at line 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 167 _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22472.php">Ralph Castain: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22470.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Maybe in reply to:</strong> <a href="22460.php">Lee-Ping Wang: "[OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22472.php">Ralph Castain: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Reply:</strong> <a href="22472.php">Ralph Castain: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
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
