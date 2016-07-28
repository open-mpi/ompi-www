<?
$subject_val = "Re: [OMPI users] Error launching single-node tasks from multiple-node job.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 10 15:23:44 2013" -->
<!-- isoreceived="20130810192344" -->
<!-- sent="Sat, 10 Aug 2013 15:23:33 -0400" -->
<!-- isosent="20130810192333" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error launching single-node tasks from multiple-node job." -->
<!-- id="89A60579-C774-4D57-8467-D9D49511B0F4_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error launching single-node tasks from multiple-node job.<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-10 15:23:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22465.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22463.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
<li><strong>In reply to:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22468.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
... from a (probably obsolete) Q-Chem user guide found on the Web:
<br>
<p>***
<br>
&quot; To run parallel Q-Chem
<br>
using a batch scheduler such as PBS, users may have to modify the
<br>
mpirun command in $QC/bin/parallel.csh
<br>
depending on whether or not the MPI implementation requires the
<br>
-machinefile option to be given. 
<br>
For further details users should read the $QC/README.Parallelle, and contact
<br>
Q-Chem if any problems are encountered (email: support_at_q-
<br>
chem.com). 
<br>
Parallel users should also read the above section on using serial Q-Chem.
<br>
Users can also run Q-Chem's coupled-cluster calculations in parallel on multi-core architectures.
<br>
Please see section 5.12 for detail&quot;
<br>
***
<br>
<p>Guesses:
<br>
1) Q-Chem is launched by a bunch of scripts provided by Q-chem.com or something the like,
<br>
and the mpiexec command line is buried somewhere in those scripts,
<br>
not directly visible by the user.  Right?
<br>
<p>2) Look for the -machinefile switch in their script $QC/bin/parallel.csh
<br>
and replace it by 
<br>
-hostfile $PBS_NODEFILE.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p>On Aug 10, 2013, at 3:03 PM, Gustavo Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Lee-Ping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know nothing about Q-Chem, but I was confused by these sentences:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;That is to say, these tasks are intended to use OpenMPI parallelism on each node, but no parallelism across nodes. &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;I do not observe this error when submitting single-node jobs.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Since my jobs are only parallel over the node they&#146;re running on, I believe that a node file of any kind is unnecessary. &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you trying to run MPI jobs across several nodes or inside a single node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, as far as I know, 
</span><br>
<span class="quotelev1">&gt; if your OpenMPI was compiled with Torque/PBS support, the mpiexec/mpirun command
</span><br>
<span class="quotelev1">&gt; will look for the $PBS_NODEFILE to learn in which node(s) it should launch the MPI
</span><br>
<span class="quotelev1">&gt; processes, regardless of whether you are using one node or more than one node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You didn't send your mpiexec command line (which would help), but assuming that
</span><br>
<span class="quotelev1">&gt; Q-Chem allows some level of standard mpiexec command options, you could force
</span><br>
<span class="quotelev1">&gt; passing the $PBS_NODEFILE to it.
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
<span class="quotelev1">&gt; mpiexec -hostfile $PBS_NODEFILE -np 16 ./my-Q-chem-executable &lt;parameters to Q-chem&gt;
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
<span class="quotelev2">&gt;&gt; Recently, I&#146;ve begun some calculations on a cluster where I submit a multiple node job to the Torque batch system, and the job executes multiple single-node parallel tasks.  That is to say, these tasks are intended to use OpenMPI parallelism on each node, but no parallelism across nodes. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some background: The actual program being executed is Q-Chem 4.0.  I use OpenMPI 1.4.2 for this, because Q-Chem is notoriously difficult to compile and this is the last known version of OpenMPI that this version of Q-Chem is known to work with.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My jobs are failing with the error message below; I do not observe this error when submitting single-node jobs.  From reading the mailing list archives (<a href="http://www.open-mpi.org/community/lists/users/2010/03/12348.php">http://www.open-mpi.org/community/lists/users/2010/03/12348.php</a>), I believe it is looking for a PBS node file somewhere.  Since my jobs are only parallel over the node they&#146;re running on, I believe that a node file of any kind is unnecessary. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question is: Why is OpenMPI behaving differently when I submit a multi-node job compared to a single-node job?  How does OpenMPI detect that it is running under a multi-node allocation?  Is there a way I can change OpenMPI&#146;s behavior so it always thinks it&#146;s running on a single node, regardless of the type of job I submit to the batch system?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -          Lee-Ping Wang (Postdoc in Dept. of Chemistry, Stanford University)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 153
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 153
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 153
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 87
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 87
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 87
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open failure in file base/ras_base_allocate.c at line 133
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open failure in file base/ras_base_allocate.c at line 133
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open failure in file base/ras_base_allocate.c at line 133
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open failure in file base/plm_base_launch_support.c at line 72
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open failure in file base/plm_base_launch_support.c at line 72
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open failure in file base/plm_base_launch_support.c at line 72
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at line 167
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at line 167
</span><br>
<span class="quotelev2">&gt;&gt; [compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at line 167
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22465.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22463.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from	multiple-node job."</a>
<li><strong>In reply to:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22468.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
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
