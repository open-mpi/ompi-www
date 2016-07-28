<?
$subject_val = "Re: [OMPI users] Error launching single-node tasks	from	multiple-node job.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 10 15:50:36 2013" -->
<!-- isoreceived="20130810195036" -->
<!-- sent="Sat, 10 Aug 2013 12:50:37 -0700" -->
<!-- isosent="20130810195037" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error launching single-node tasks	from	multiple-node job." -->
<!-- id="021001ce9602$e2ac0b70$a8042250$_at_stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C0B54212-DD20-4393-A1C8-88D504EAD81E_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error launching single-node tasks	from	multiple-node job.<br>
<strong>From:</strong> Lee-Ping Wang (<em>leeping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-10 15:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22467.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node	tasks	from	multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22465.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
<li><strong>In reply to:</strong> <a href="22465.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22467.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node	tasks	from	multiple-node job."</a>
<li><strong>Reply:</strong> <a href="22467.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node	tasks	from	multiple-node job."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>Thank you.  You gave me many helpful suggestions, which I will try out and
<br>
get back to you.  I will provide more specifics (e.g. how my jobs were
<br>
submitted) in a future email.  
<br>
<p>As for the queue policy, that is a highly political issue because the
<br>
cluster is a shared resource.  My usual recourse is to use the batch system
<br>
as effectively as possible within the confines of their policies.  This is
<br>
why it makes sense to submit a single multiple-node batch job, which then
<br>
executes several independent single-node tasks.
<br>
<p>- Lee-Ping
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gustavo Correa
<br>
Sent: Saturday, August 10, 2013 12:39 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Error launching single-node tasks from
<br>
multiple-node job.
<br>
<p>Hi Lee-Ping
<br>
On Aug 10, 2013, at 3:15 PM, Lee-Ping Wang wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your reply.  I want to run MPI jobs inside a single 
</span><br>
<span class="quotelev1">&gt; node, but due to the resource allocation policies on the clusters, I 
</span><br>
<span class="quotelev1">&gt; could get many more resources if I submit multiple-node &quot;batch jobs&quot;.  
</span><br>
<span class="quotelev1">&gt; Once I have a multiple-node batch job, then I can use a command like 
</span><br>
<span class="quotelev1">&gt; &quot;pbsdsh&quot; to run single node MPI jobs on each node that is allocated to 
</span><br>
<span class="quotelev1">&gt; me.  Thus, the MPI jobs on each node are running independently of each 
</span><br>
<span class="quotelev1">&gt; other and unaware of one another.
</span><br>
<p>Even if you use pbdsh to launch separate MPI jobs on individual nodes, you
<br>
probably (not 100% sure about that), probably need to specify he -hostfile
<br>
naming the specific node that each job will run on.
<br>
<p>Still quite confused because you didn't tell how your &quot;qsub&quot; command looks
<br>
like, what Torque script (if any) it is launching, etc.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The actual call to mpirun is nontrivial to get, because Q-Chem has a 
</span><br>
<span class="quotelev1">&gt; complicated series of wrapper scripts which ultimately calls mpirun.
</span><br>
<p>Yes, I just found this out on the Web.  See my previous email.
<br>
<p><span class="quotelev1">&gt; If the
</span><br>
<span class="quotelev1">&gt; jobs are failing immediately, then I only have a small window to view 
</span><br>
<span class="quotelev1">&gt; the actual command through &quot;ps&quot; or something.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Are you launching the jobs interactively?  
<br>
I.e., with the -I switch to qsub?
<br>
<p><p><span class="quotelev1">&gt; Another option is for me to compile OpenMPI without Torque / PBS support.
</span><br>
<span class="quotelev1">&gt; If I do that, then it won't look for the node file anymore.  Is this 
</span><br>
<span class="quotelev1">&gt; correct?
</span><br>
<p>You will need to tell mpiexec where to launch the jobs.
<br>
If I understand what you are trying to achieve (and I am not sure I do), one
<br>
way to do it would be to programatically split the $PBS_NODEFILE into
<br>
several hostfiles, one per MPI job (so to speak) that you want to launch.
<br>
Then use each of these nodefiles for each of the MPI jobs.
<br>
Note that the PBS_NODEFILE has one line per-node-per-core, *not* one line
<br>
per node.
<br>
I have no idea how the trick above could be reconciled with the Q-Chem
<br>
scripts, though.
<br>
<p>Overall, I don't understand why you would benefit from such a complicated
<br>
scheme, rather than lauching either a big MPI job across all nodes that you
<br>
requested (if the problem is large enough to benefit from  this many cores),
<br>
or launch several small single-node jobs (if the problem is small enough to
<br>
fit well a single node).
<br>
<p>You may want to talk to the cluster managers, because there must be a way to
<br>
reconcile their queue policies with your needs (if this not already in
<br>
place).
<br>
We run tons of parallel single-node jobs here, for problems that fit well a
<br>
single node.
<br>
<p><p>My two cents
<br>
Gus Correa
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will try your suggestions and get back to you.  Thanks!
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
Correa
<br>
<span class="quotelev1">&gt; Sent: Saturday, August 10, 2013 12:04 PM
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know nothing about Q-Chem, but I was confused by these sentences:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;That is to say, these tasks are intended to use OpenMPI parallelism on
</span><br>
each
<br>
<span class="quotelev1">&gt; node, but no parallelism across nodes. &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;I do not observe this error when submitting single-node jobs.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Since my jobs are only parallel over the node they're running on, I
</span><br>
believe
<br>
<span class="quotelev1">&gt; that a node file of any kind is unnecessary. &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you trying to run MPI jobs across several nodes or inside a single
</span><br>
node?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, as far as I know,
</span><br>
<span class="quotelev1">&gt; if your OpenMPI was compiled with Torque/PBS support, the mpiexec/mpirun
</span><br>
<span class="quotelev1">&gt; command will look for the $PBS_NODEFILE to learn in which node(s) it
</span><br>
should
<br>
<span class="quotelev1">&gt; launch the MPI processes, regardless of whether you are using one node or
</span><br>
<span class="quotelev1">&gt; more than one node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You didn't send your mpiexec command line (which would help), but assuming
</span><br>
<span class="quotelev1">&gt; that Q-Chem allows some level of standard mpiexec command options, you
</span><br>
could
<br>
<span class="quotelev1">&gt; force passing the $PBS_NODEFILE to it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something like this (for two nodes with 8 cores each):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #PBS -q myqueue
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev1">&gt; #PBS -N myjob
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; ls -l $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -hostfile $PBS_NODEFILE -np 16 ./my-Q-chem-executable &lt;parameters
</span><br>
to
<br>
<span class="quotelev1">&gt; Q-chem&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2013, at 1:51 PM, Lee-Ping Wang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Recently, I've begun some calculations on a cluster where I submit a
</span><br>
<span class="quotelev1">&gt; multiple node job to the Torque batch system, and the job executes
</span><br>
multiple
<br>
<span class="quotelev1">&gt; single-node parallel tasks.  That is to say, these tasks are intended to
</span><br>
use
<br>
<span class="quotelev1">&gt; OpenMPI parallelism on each node, but no parallelism across nodes. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some background: The actual program being executed is Q-Chem 4.0.  I use
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4.2 for this, because Q-Chem is notoriously difficult to compile
</span><br>
<span class="quotelev1">&gt; and this is the last known version of OpenMPI that this version of Q-Chem
</span><br>
is
<br>
<span class="quotelev1">&gt; known to work with.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My jobs are failing with the error message below; I do not observe this
</span><br>
<span class="quotelev1">&gt; error when submitting single-node jobs.  From reading the mailing list
</span><br>
<span class="quotelev1">&gt; archives
</span><br>
(<a href="http://www.open-mpi.org/community/lists/users/2010/03/12348.php">http://www.open-mpi.org/community/lists/users/2010/03/12348.php</a>),
<br>
<span class="quotelev1">&gt; I believe it is looking for a PBS node file somewhere.  Since my jobs are
</span><br>
<span class="quotelev1">&gt; only parallel over the node they're running on, I believe that a node file
</span><br>
<span class="quotelev1">&gt; of any kind is unnecessary. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question is: Why is OpenMPI behaving differently when I submit a
</span><br>
<span class="quotelev1">&gt; multi-node job compared to a single-node job?  How does OpenMPI detect
</span><br>
that
<br>
<span class="quotelev1">&gt; it is running under a multi-node allocation?  Is there a way I can change
</span><br>
<span class="quotelev1">&gt; OpenMPI's behavior so it always thinks it's running on a single node,
</span><br>
<span class="quotelev1">&gt; regardless of the type of job I submit to the batch system?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -          Lee-Ping Wang (Postdoc in Dept. of Chemistry, Stanford
</span><br>
<span class="quotelev1">&gt; University)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev2">&gt;&gt; failure in file ras_tm_module.c at line 153 [compute-1-1.local:10909] 
</span><br>
<span class="quotelev2">&gt;&gt; [[42009,0],0] ORTE_ERROR_LOG: File open failure in file 
</span><br>
<span class="quotelev2">&gt;&gt; ras_tm_module.c at line 153 [compute-1-1.local:10911] [[42011,0],0] 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 153 
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev2">&gt;&gt; failure in file ras_tm_module.c at line 87 [compute-1-1.local:10909] 
</span><br>
<span class="quotelev2">&gt;&gt; [[42009,0],0] ORTE_ERROR_LOG: File open failure in file 
</span><br>
<span class="quotelev2">&gt;&gt; ras_tm_module.c at line 87 [compute-1-1.local:10911] [[42011,0],0] 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 87 
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev2">&gt;&gt; failure in file base/ras_base_allocate.c at line 133 
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev2">&gt;&gt; failure in file base/ras_base_allocate.c at line 133 
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev2">&gt;&gt; failure in file base/ras_base_allocate.c at line 133 
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev2">&gt;&gt; failure in file base/plm_base_launch_support.c at line 72 
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev2">&gt;&gt; failure in file base/plm_base_launch_support.c at line 72 
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev2">&gt;&gt; failure in file base/plm_base_launch_support.c at line 72 
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev2">&gt;&gt; failure in file plm_tm_module.c at line 167 [compute-1-1.local:10909] 
</span><br>
<span class="quotelev2">&gt;&gt; [[42009,0],0] ORTE_ERROR_LOG: File open failure in file 
</span><br>
<span class="quotelev2">&gt;&gt; plm_tm_module.c at line 167 [compute-1-1.local:10911] [[42011,0],0] 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at line 167 
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
<li><strong>Next message:</strong> <a href="22467.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node	tasks	from	multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22465.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
<li><strong>In reply to:</strong> <a href="22465.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22467.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node	tasks	from	multiple-node job."</a>
<li><strong>Reply:</strong> <a href="22467.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node	tasks	from	multiple-node job."</a>
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
