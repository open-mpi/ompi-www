<?
$subject_val = "Re: [OMPI users] Error launching single-node tasks from multiple-node job.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 10 18:57:53 2013" -->
<!-- isoreceived="20130810225753" -->
<!-- sent="Sat, 10 Aug 2013 18:57:41 -0400" -->
<!-- isosent="20130810225741" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error launching single-node tasks from multiple-node job." -->
<!-- id="DEE54BD5-4EFE-49A9-BD66-36E0C944A2B2_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="023001ce961a$77f71280$67e53780$_at_stanford.edu" -->
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
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-10 18:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22471.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22469.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node	tasks	from	multiple-node job."</a>
<li><strong>In reply to:</strong> <a href="22468.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22471.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lee-Ping
<br>
<p>Something looks amiss.
<br>
PBS_JOBID contains the job name.
<br>
PBS_NODEFILE contains a list (with repetitions up to the number of cores) of the nodes
<br>
that torque assigned to the job.
<br>
<p>Why things get twisted it is hard to tell, it may be something in the Q-Chem scripts 
<br>
(could it be mixing up PBS_JOBID and PBS_NODEFILE?), it may be something else.
<br>
A more remote possibility is if the cluster has a Torque qsub wrapper that may perhaps
<br>
produce the aforementioned confusion.  Unlikely, but possible.
<br>
<p>To sort out, run any simple job (mpiexec -np 32 hostname), or even your very Q-Chem job, 
<br>
but precede it with a bunch of printouts of the PBS environment variables:
<br>
echo $PBS_JOBID
<br>
echo $PBS_NODEFILE
<br>
ls -l $PBS_NODEFILE
<br>
cat $PBS_NODEFILE
<br>
cat $PBS_JOBID [this one should fail, because that is not a file, but may work  
<br>
the PBS variables were messed up along the way]
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
<span class="quotelev1">&gt; It seems the calculation is now working, or at least it didn't crash.  I set
</span><br>
<span class="quotelev1">&gt; the PBS_JOBID environment variable to the name of my custom node file.  That
</span><br>
<span class="quotelev1">&gt; is to say, I set PBS_JOBID=pbs_nodefile.compute-3-3.local.  It appears that
</span><br>
<span class="quotelev1">&gt; ras_tm_module.c is trying to open the file located at
</span><br>
<span class="quotelev1">&gt; /scratch/leeping/$PBS_JOBID for some reason, and it is disregarding the
</span><br>
<span class="quotelev1">&gt; machinefile argument on the command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It'll be a few hours before I know for sure whether the job actually worked.
</span><br>
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
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lee-Ping Wang
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
<span class="quotelev1">&gt; I was puzzled because it still reported a file open failure, so I inserted a
</span><br>
<span class="quotelev1">&gt; print statement into ras_tm_module.c and recompiled.  The results are below.
</span><br>
<span class="quotelev1">&gt; As you can see, it tries to open a different file
</span><br>
<span class="quotelev1">&gt; (/scratch/leeping/272055.certainty.stanford.edu) than the one I specified
</span><br>
<span class="quotelev1">&gt; (/scratch/leeping/pbs_nodefile.compute-3-3.local).
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
<span class="quotelev1">&gt; /scratch/leeping/pbs_nodefile.compute-3-3.local -x HOME -x PWD -x QC -x
</span><br>
<span class="quotelev1">&gt; QCAUX -x QCCLEAN -x QCFILEPREF -x QCLOCALSCR -x QCPLATFORM -x QCREF -x QCRSH
</span><br>
<span class="quotelev1">&gt; -x QCRUNNAME -x QCSCRATCH 
</span><br>
<span class="quotelev1">&gt;                       -np 24 /home/leeping/opt/qchem40/exe/qcprog.exe
</span><br>
<span class="quotelev1">&gt; .B.in.28642.qcin.1 ./qchem28642/ &gt;&gt;B.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; === Error message from compute node ===
</span><br>
<span class="quotelev1">&gt; [compute-3-3.local:28666] Warning: could not find environment variable
</span><br>
<span class="quotelev1">&gt; &quot;QCLOCALSCR&quot;
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
<span class="quotelev1">&gt; [compute-3-3.local:28666] [[56726,0],0] ORTE_ERROR_LOG: File open failure in
</span><br>
<span class="quotelev1">&gt; file ras_tm_module.c at line 155 [compute-3-3.local:28666] [[56726,0],0]
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 87
</span><br>
<span class="quotelev1">&gt; [compute-3-3.local:28666] [[56726,0],0] ORTE_ERROR_LOG: File open failure in
</span><br>
<span class="quotelev1">&gt; file base/ras_base_allocate.c at line 133 [compute-3-3.local:28666]
</span><br>
<span class="quotelev1">&gt; [[56726,0],0] ORTE_ERROR_LOG: File open failure in file
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c at line 72 [compute-3-3.local:28666]
</span><br>
<span class="quotelev1">&gt; [[56726,0],0] ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at
</span><br>
<span class="quotelev1">&gt; line 167
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lee-Ping Wang
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
<span class="quotelev1">&gt; Thank you.  You gave me many helpful suggestions, which I will try out and
</span><br>
<span class="quotelev1">&gt; get back to you.  I will provide more specifics (e.g. how my jobs were
</span><br>
<span class="quotelev1">&gt; submitted) in a future email.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the queue policy, that is a highly political issue because the
</span><br>
<span class="quotelev1">&gt; cluster is a shared resource.  My usual recourse is to use the batch system
</span><br>
<span class="quotelev1">&gt; as effectively as possible within the confines of their policies.  This is
</span><br>
<span class="quotelev1">&gt; why it makes sense to submit a single multiple-node batch job, which then
</span><br>
<span class="quotelev1">&gt; executes several independent single-node tasks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gustavo Correa
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
<span class="quotelev2">&gt;&gt; &quot;pbsdsh&quot; to run single node MPI jobs on each node that is allocated to 
</span><br>
<span class="quotelev2">&gt;&gt; me.  Thus, the MPI jobs on each node are running independently of each 
</span><br>
<span class="quotelev2">&gt;&gt; other and unaware of one another.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even if you use pbdsh to launch separate MPI jobs on individual nodes, you
</span><br>
<span class="quotelev1">&gt; probably (not 100% sure about that), probably need to specify he -hostfile
</span><br>
<span class="quotelev1">&gt; naming the specific node that each job will run on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Still quite confused because you didn't tell how your &quot;qsub&quot; command looks
</span><br>
<span class="quotelev1">&gt; like, what Torque script (if any) it is launching, etc.
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
<span class="quotelev1">&gt; If I understand what you are trying to achieve (and I am not sure I do), one
</span><br>
<span class="quotelev1">&gt; way to do it would be to programatically split the $PBS_NODEFILE into
</span><br>
<span class="quotelev1">&gt; several hostfiles, one per MPI job (so to speak) that you want to launch.
</span><br>
<span class="quotelev1">&gt; Then use each of these nodefiles for each of the MPI jobs.
</span><br>
<span class="quotelev1">&gt; Note that the PBS_NODEFILE has one line per-node-per-core, *not* one line
</span><br>
<span class="quotelev1">&gt; per node.
</span><br>
<span class="quotelev1">&gt; I have no idea how the trick above could be reconciled with the Q-Chem
</span><br>
<span class="quotelev1">&gt; scripts, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Overall, I don't understand why you would benefit from such a complicated
</span><br>
<span class="quotelev1">&gt; scheme, rather than lauching either a big MPI job across all nodes that you
</span><br>
<span class="quotelev1">&gt; requested (if the problem is large enough to benefit from  this many cores),
</span><br>
<span class="quotelev1">&gt; or launch several small single-node jobs (if the problem is small enough to
</span><br>
<span class="quotelev1">&gt; fit well a single node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may want to talk to the cluster managers, because there must be a way to
</span><br>
<span class="quotelev1">&gt; reconcile their queue policies with your needs (if this not already in
</span><br>
<span class="quotelev1">&gt; place).
</span><br>
<span class="quotelev1">&gt; We run tons of parallel single-node jobs here, for problems that fit well a
</span><br>
<span class="quotelev1">&gt; single node.
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
<span class="quotelev2">&gt;&gt; Are you trying to run MPI jobs across several nodes or inside a single
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
<span class="quotelev2">&gt;&gt; launch the MPI processes, regardless of whether you are using one node 
</span><br>
<span class="quotelev2">&gt;&gt; or more than one node.
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
<span class="quotelev2">&gt;&gt; error when submitting single-node jobs.  From reading the mailing list 
</span><br>
<span class="quotelev2">&gt;&gt; archives
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
<span class="quotelev2">&gt;&gt; multi-node job compared to a single-node job?  How does OpenMPI detect
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; it is running under a multi-node allocation?  Is there a way I can 
</span><br>
<span class="quotelev2">&gt;&gt; change OpenMPI's behavior so it always thinks it's running on a single 
</span><br>
<span class="quotelev2">&gt;&gt; node, regardless of the type of job I submit to the batch system?
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
<span class="quotelev3">&gt;&gt;&gt; failure in file ras_tm_module.c at line 153 [compute-1-1.local:10909] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[42009,0],0] ORTE_ERROR_LOG: File open failure in file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ras_tm_module.c at line 153 [compute-1-1.local:10911] [[42011,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 153 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in file ras_tm_module.c at line 87 [compute-1-1.local:10909] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[42009,0],0] ORTE_ERROR_LOG: File open failure in file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ras_tm_module.c at line 87 [compute-1-1.local:10911] [[42011,0],0]
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
<span class="quotelev3">&gt;&gt;&gt; failure in file plm_tm_module.c at line 167 [compute-1-1.local:10909] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[42009,0],0] ORTE_ERROR_LOG: File open failure in file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_tm_module.c at line 167 [compute-1-1.local:10911] [[42011,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at line 167 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22471.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22469.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node	tasks	from	multiple-node job."</a>
<li><strong>In reply to:</strong> <a href="22468.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22471.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
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
