<?
$subject_val = "Re: [OMPI users] Error launching single-node tasks from	multiple-node job.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 10 15:15:06 2013" -->
<!-- isoreceived="20130810191506" -->
<!-- sent="Sat, 10 Aug 2013 12:15:07 -0700" -->
<!-- isosent="20130810191507" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error launching single-node tasks from	multiple-node job." -->
<!-- id="020301ce95fd$ed8453e0$c88cfba0$_at_stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B4E4CAA0-A3DF-4110-82D5-699A9EB97CA0_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error launching single-node tasks from	multiple-node job.<br>
<strong>From:</strong> Lee-Ping Wang (<em>leeping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-10 15:15:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22464.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>In reply to:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22465.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
<li><strong>Reply:</strong> <a href="22465.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>Thank you for your reply.  I want to run MPI jobs inside a single node, but
<br>
due to the resource allocation policies on the clusters, I could get many
<br>
more resources if I submit multiple-node &quot;batch jobs&quot;.  Once I have a
<br>
multiple-node batch job, then I can use a command like &quot;pbsdsh&quot; to run
<br>
single node MPI jobs on each node that is allocated to me.  Thus, the MPI
<br>
jobs on each node are running independently of each other and unaware of one
<br>
another.
<br>
<p>The actual call to mpirun is nontrivial to get, because Q-Chem has a
<br>
complicated series of wrapper scripts which ultimately calls mpirun.  If the
<br>
jobs are failing immediately, then I only have a small window to view the
<br>
actual command through &quot;ps&quot; or something.
<br>
<p>Another option is for me to compile OpenMPI without Torque / PBS support.
<br>
If I do that, then it won't look for the node file anymore.  Is this
<br>
correct? 
<br>
<p>I will try your suggestions and get back to you.  Thanks!
<br>
<p>- Lee-Ping
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gustavo Correa
<br>
Sent: Saturday, August 10, 2013 12:04 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Error launching single-node tasks from
<br>
multiple-node job.
<br>
<p>Hi Lee-Ping
<br>
<p>I know nothing about Q-Chem, but I was confused by these sentences:
<br>
<p>&quot;That is to say, these tasks are intended to use OpenMPI parallelism on each
<br>
node, but no parallelism across nodes. &quot;
<br>
<p>&quot;I do not observe this error when submitting single-node jobs.&quot;
<br>
<p>&quot;Since my jobs are only parallel over the node they're running on, I believe
<br>
that a node file of any kind is unnecessary. &quot;
<br>
<p>Are you trying to run MPI jobs across several nodes or inside a single node?
<br>
<p>***
<br>
<p>Anyway, as far as I know,
<br>
if your OpenMPI was compiled with Torque/PBS support, the mpiexec/mpirun
<br>
command will look for the $PBS_NODEFILE to learn in which node(s) it should
<br>
launch the MPI processes, regardless of whether you are using one node or
<br>
more than one node.
<br>
<p>You didn't send your mpiexec command line (which would help), but assuming
<br>
that Q-Chem allows some level of standard mpiexec command options, you could
<br>
force passing the $PBS_NODEFILE to it.
<br>
<p>Something like this (for two nodes with 8 cores each):
<br>
<p>#PBS -q myqueue
<br>
#PBS -l nodes=2:ppn=8
<br>
#PBS -N myjob
<br>
cd $PBS_O_WORKDIR
<br>
ls -l $PBS_NODEFILE
<br>
cat $PBS_NODEFILE
<br>
<p>mpiexec -hostfile $PBS_NODEFILE -np 16 ./my-Q-chem-executable &lt;parameters to
<br>
Q-chem&gt;
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On Aug 10, 2013, at 1:51 PM, Lee-Ping Wang wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Recently, I've begun some calculations on a cluster where I submit a
</span><br>
multiple node job to the Torque batch system, and the job executes multiple
<br>
single-node parallel tasks.  That is to say, these tasks are intended to use
<br>
OpenMPI parallelism on each node, but no parallelism across nodes. 
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Some background: The actual program being executed is Q-Chem 4.0.  I use
</span><br>
OpenMPI 1.4.2 for this, because Q-Chem is notoriously difficult to compile
<br>
and this is the last known version of OpenMPI that this version of Q-Chem is
<br>
known to work with.
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My jobs are failing with the error message below; I do not observe this
</span><br>
error when submitting single-node jobs.  From reading the mailing list
<br>
archives (<a href="http://www.open-mpi.org/community/lists/users/2010/03/12348.php">http://www.open-mpi.org/community/lists/users/2010/03/12348.php</a>),
<br>
I believe it is looking for a PBS node file somewhere.  Since my jobs are
<br>
only parallel over the node they're running on, I believe that a node file
<br>
of any kind is unnecessary. 
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My question is: Why is OpenMPI behaving differently when I submit a
</span><br>
multi-node job compared to a single-node job?  How does OpenMPI detect that
<br>
it is running under a multi-node allocation?  Is there a way I can change
<br>
OpenMPI's behavior so it always thinks it's running on a single node,
<br>
regardless of the type of job I submit to the batch system?
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -          Lee-Ping Wang (Postdoc in Dept. of Chemistry, Stanford
</span><br>
University)
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file ras_tm_module.c at line 153 [compute-1-1.local:10909] 
</span><br>
<span class="quotelev1">&gt; [[42009,0],0] ORTE_ERROR_LOG: File open failure in file 
</span><br>
<span class="quotelev1">&gt; ras_tm_module.c at line 153 [compute-1-1.local:10911] [[42011,0],0] 
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 153 
</span><br>
<span class="quotelev1">&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file ras_tm_module.c at line 87 [compute-1-1.local:10909] 
</span><br>
<span class="quotelev1">&gt; [[42009,0],0] ORTE_ERROR_LOG: File open failure in file 
</span><br>
<span class="quotelev1">&gt; ras_tm_module.c at line 87 [compute-1-1.local:10911] [[42011,0],0] 
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 87 
</span><br>
<span class="quotelev1">&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file base/ras_base_allocate.c at line 133 
</span><br>
<span class="quotelev1">&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file base/ras_base_allocate.c at line 133 
</span><br>
<span class="quotelev1">&gt; [compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file base/ras_base_allocate.c at line 133 
</span><br>
<span class="quotelev1">&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file base/plm_base_launch_support.c at line 72 
</span><br>
<span class="quotelev1">&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file base/plm_base_launch_support.c at line 72 
</span><br>
<span class="quotelev1">&gt; [compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file base/plm_base_launch_support.c at line 72 
</span><br>
<span class="quotelev1">&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open 
</span><br>
<span class="quotelev1">&gt; failure in file plm_tm_module.c at line 167 [compute-1-1.local:10909] 
</span><br>
<span class="quotelev1">&gt; [[42009,0],0] ORTE_ERROR_LOG: File open failure in file 
</span><br>
<span class="quotelev1">&gt; plm_tm_module.c at line 167 [compute-1-1.local:10911] [[42011,0],0] 
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at line 167 
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
<li><strong>Next message:</strong> <a href="22464.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>In reply to:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22465.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
<li><strong>Reply:</strong> <a href="22465.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
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
