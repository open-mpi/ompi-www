<?
$subject_val = "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 13:14:47 2009" -->
<!-- isoreceived="20090325171447" -->
<!-- sent="Wed, 25 Mar 2009 11:14:36 -0600" -->
<!-- isosent="20090325171436" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1" -->
<!-- id="F9C3D58B-D7B5-43E7-9D61-8D379220E7D1_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49CA6335.7090301_at_kit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 13:14:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5700.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer	Negative	Value"</a>
<li><strong>Previous message:</strong> <a href="5698.php">Hartmut H&#228;fner: "[OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>In reply to:</strong> <a href="5698.php">Hartmut H&#228;fner: "[OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5735.php">Hartmut Häfner: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The answer is simple: the SLURM environmental variables when you set  
<br>
SLURM_OVERCOMMIT=1 are telling us that only one slot/node is available  
<br>
for your use. This is done by the SLURM_TASKS_PER_NODE envar.
<br>
<p>So we can only launch 1 proc/node as this is all SLURM is allowing us  
<br>
to do.
<br>
<p>Ralph
<br>
<p><p>On Mar 25, 2009, at 11:00 AM, Hartmut H&#228;fner wrote:
<br>
<p><span class="quotelev1">&gt; Dear Support,
</span><br>
<span class="quotelev1">&gt; there is a problem with OpenMPI in version 1.3 and version 1.3.1  
</span><br>
<span class="quotelev1">&gt; when using our batch system Slurm. On our parallel computer there  
</span><br>
<span class="quotelev1">&gt; are 2 queues - one with exclusive usage of slots (cores)  
</span><br>
<span class="quotelev1">&gt; (SLURM_OVERCOMMIT=0) within nodes and one without shared usage of  
</span><br>
<span class="quotelev1">&gt; slots (SLURM_OVERCOMMIT=1) within nodes. Running a simple MPI- 
</span><br>
<span class="quotelev1">&gt; program (I'll send you this program mpi_hello.c as attachment) with  
</span><br>
<span class="quotelev1">&gt; SLURM_OVERCOMMIT set to  0   the executable works fine, running it  
</span><br>
<span class="quotelev1">&gt; with SLURM_OVERCOMMIT set to 1 it does not work correctly.  Please  
</span><br>
<span class="quotelev1">&gt; have a look to  2 files with outputs. Working not correctly means  
</span><br>
<span class="quotelev1">&gt; that the MPI-program runs on 1 processor although I have started it  
</span><br>
<span class="quotelev1">&gt; (for example) on 4 processors (it does not work correctly for any  
</span><br>
<span class="quotelev1">&gt; processor number  not equal to 1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error only occurs for the version 1.3 and 1.3.1. If I am using  
</span><br>
<span class="quotelev1">&gt; oder versions of OpenMPI the program works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the file Job_101442.out the hostlist (4x icn001) from Slurm is  
</span><br>
<span class="quotelev1">&gt; printed, then the content of the file  /scratch/JMS_tmpdir/ 
</span><br>
<span class="quotelev1">&gt; Job_101442/tmp.CCaCM22772 is printed, then the commandline  
</span><br>
<span class="quotelev1">&gt; (mpirun ...) is printed, then stdout of the program mpi_hello.c is  
</span><br>
<span class="quotelev1">&gt; printed (it runs only on 1 processor!!!) and the environment is  
</span><br>
<span class="quotelev1">&gt; printed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the file Job_101440.out the same program is run. The only  
</span><br>
<span class="quotelev1">&gt; difference is, that SLURM_OVERCOMMIT is'nt set!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Under the hood of job_submit ....    salloc -n4  script    is  
</span><br>
<span class="quotelev1">&gt; started. In &quot;script&quot; you find the command
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile .....  as you can see in both output files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerly yours
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; H. H&#228;fner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Hartmut H&#228;fner
</span><br>
<span class="quotelev1">&gt; Karlsruhe Institute of Technology (KIT)
</span><br>
<span class="quotelev1">&gt; University Karlsruhe (TH)
</span><br>
<span class="quotelev1">&gt; Steinbuch Centre for Computing (SCC)
</span><br>
<span class="quotelev1">&gt; Scientific Computing and Applications (SCA)
</span><br>
<span class="quotelev1">&gt; Zirkel 2 (Campus S&#252;d, Geb. 20.21, Raum 204)
</span><br>
<span class="quotelev1">&gt; D-76128 Karlsruhe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fon +49(0)721 608 4869
</span><br>
<span class="quotelev1">&gt; Fax +49(0)721 32550 Hartmut.Haefner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner">http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner</a>
</span><br>
<span class="quotelev1">&gt; #include &lt;cstdio&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; int rank;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; int size;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; printf(&quot;size = %d\n&quot;, size);
</span><br>
<span class="quotelev1">&gt; printf(&quot;rank = %d\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt; system(&quot;env | grep SLURM&quot;);
</span><br>
<span class="quotelev1">&gt; system(&quot;env | grep JMS&quot;);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; Universitaet Karlsruhe / Rechenzentrum   +++ ic1 +++   JMS 2.1 /  
</span><br>
<span class="quotelev1">&gt; slurm 1.2.22
</span><br>
<span class="quotelev1">&gt; Job 101442 has been submitted at 19.03.2009/17:38:27 on ic1n990
</span><br>
<span class="quotelev1">&gt; Command: job_submit -t 10 -m 2000 -c d -p 4 mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; Job 101442 started at 19.03.2009/17:38:29 on ic1n001
</span><br>
<span class="quotelev1">&gt; 4 tasks running on 1 nodes overcommited: 4*ic1n001
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; ic1n001
</span><br>
<span class="quotelev1">&gt; ic1n001
</span><br>
<span class="quotelev1">&gt; ic1n001
</span><br>
<span class="quotelev1">&gt; ic1n001
</span><br>
<span class="quotelev1">&gt; ic1n001 max_slots=4
</span><br>
<span class="quotelev1">&gt; /software/all/openmpi/1.3.1/bin/mpirun         --hostfile /scratch/ 
</span><br>
<span class="quotelev1">&gt; JMS_tmpdir/Job_101442/tmp.CCaCM22772 /jms/home/jobscript/run  
</span><br>
<span class="quotelev1">&gt; mpi_helloc
</span><br>
<span class="quotelev1">&gt; size = 1
</span><br>
<span class="quotelev1">&gt; rank = 0
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=ic1n001
</span><br>
<span class="quotelev1">&gt; SLURMD_NODENAME=ic1n001
</span><br>
<span class="quotelev1">&gt; SLURM_PRIO_PROCESS=0
</span><br>
<span class="quotelev1">&gt; SLURM_WAIT=30
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=101442
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=1
</span><br>
<span class="quotelev1">&gt; SLURM_PARTITION=d
</span><br>
<span class="quotelev1">&gt; SLURM_CPUS_PER_TASK=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=101442
</span><br>
<span class="quotelev1">&gt; SLURM_UMASK=0022
</span><br>
<span class="quotelev1">&gt; SLURM_NODEID=0
</span><br>
<span class="quotelev1">&gt; SLURM_OVERCOMMIT=1
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev1">&gt; SLURM_TASK_PID=22700
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=0
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=ic1n001
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=1
</span><br>
<span class="quotelev1">&gt; SLURM_GTIDS=0
</span><br>
<span class="quotelev1">&gt; SLURM_TIMELIMIT=20
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=1
</span><br>
<span class="quotelev1">&gt; JMS_test_quota=n
</span><br>
<span class="quotelev1">&gt; JMS_c=d
</span><br>
<span class="quotelev1">&gt; JMS_nodes=ic1n001 ic1n001 ic1n001 ic1n001
</span><br>
<span class="quotelev1">&gt; JMS_slurm_wait=30
</span><br>
<span class="quotelev1">&gt; JMS_jid=101442
</span><br>
<span class="quotelev1">&gt; JMS_node0=ic1n001
</span><br>
<span class="quotelev1">&gt; JMS_org=kit
</span><br>
<span class="quotelev1">&gt; JMS_root=/jms/home
</span><br>
<span class="quotelev1">&gt; JMS_e=Job_%j.err
</span><br>
<span class="quotelev1">&gt; JMS_submit_time=1237480707
</span><br>
<span class="quotelev1">&gt; JMS_sysname=ic1
</span><br>
<span class="quotelev1">&gt; JMS_start_time=1237480708
</span><br>
<span class="quotelev1">&gt; JMS_i=/dev/null
</span><br>
<span class="quotelev1">&gt; JMS_exclusive=2
</span><br>
<span class="quotelev1">&gt; JMS_last_start_time=
</span><br>
<span class="quotelev1">&gt; JMS_o=Job_%j.out
</span><br>
<span class="quotelev1">&gt; JMS_last_jid=
</span><br>
<span class="quotelev1">&gt; JMS_event_end=0
</span><br>
<span class="quotelev1">&gt; JMS_m=2000
</span><br>
<span class="quotelev1">&gt; TEMP=/scratch/JMS_tmpdir/Job_101442
</span><br>
<span class="quotelev1">&gt; JMS_p=4
</span><br>
<span class="quotelev1">&gt; JMS_nodes_list=ic1n001
</span><br>
<span class="quotelev1">&gt; JMS_t=10
</span><br>
<span class="quotelev1">&gt; JMS_prio=1
</span><br>
<span class="quotelev1">&gt; JMS_threads=1
</span><br>
<span class="quotelev1">&gt; JMS_systime=1237480708
</span><br>
<span class="quotelev1">&gt; JMS_group=rz00
</span><br>
<span class="quotelev1">&gt; JMS_pwd=/home/ws/rz50/softtest
</span><br>
<span class="quotelev1">&gt; JMS_submit_command=-t 10 -m 2000 -c d -p 4 mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; JMS_user=rz50
</span><br>
<span class="quotelev1">&gt; JMS_systype=3
</span><br>
<span class="quotelev1">&gt; JMS_submit_node=ic1n990
</span><br>
<span class="quotelev1">&gt; JMS_A=-
</span><br>
<span class="quotelev1">&gt; JMS_Nnodes=1
</span><br>
<span class="quotelev1">&gt; JMS_event_begin=0
</span><br>
<span class="quotelev1">&gt; JMS_J=
</span><br>
<span class="quotelev1">&gt; JMS_node_used=4*ic1n001
</span><br>
<span class="quotelev1">&gt; JMS_stdin=/dev/null
</span><br>
<span class="quotelev1">&gt; JMS_job=mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; JMS_version=2.1
</span><br>
<span class="quotelev1">&gt; JMS_tasks=4
</span><br>
<span class="quotelev1">&gt; TMP=/scratch/JMS_tmpdir/Job_101442
</span><br>
<span class="quotelev1">&gt; MPI_TMPDIR=/scratch/JMS_tmpdir/Job_101442
</span><br>
<span class="quotelev1">&gt; JMS_stdout=Job_101442.out
</span><br>
<span class="quotelev1">&gt; JMS_T=20
</span><br>
<span class="quotelev1">&gt; JMS_fat_nodes=n
</span><br>
<span class="quotelev1">&gt; JMS_stderr=Job_101442.err
</span><br>
<span class="quotelev1">&gt; JMS_test_project=n
</span><br>
<span class="quotelev1">&gt; JMS_trace_level=0
</span><br>
<span class="quotelev1">&gt; JMS_T_diff=0
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; Job 101442 completed at 19.03.2009/17:38:30 (COMPLETED)
</span><br>
<span class="quotelev1">&gt; Universitaet Karlsruhe / Rechenzentrum   +++ ic1 +++   JMS 2.1 /  
</span><br>
<span class="quotelev1">&gt; slurm 1.2.22
</span><br>
<span class="quotelev1">&gt; Job 101440 has been submitted at 19.03.2009/17:30:55 on ic1n990
</span><br>
<span class="quotelev1">&gt; Command: job_submit -t 10 -m 2000 -c p -p 4 mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; Job 101440 started at 19.03.2009/17:30:57 on ic1n029
</span><br>
<span class="quotelev1">&gt; 4 tasks running on 1 nodes shared: 4*ic1n029
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; ic1n029
</span><br>
<span class="quotelev1">&gt; ic1n029
</span><br>
<span class="quotelev1">&gt; ic1n029
</span><br>
<span class="quotelev1">&gt; ic1n029
</span><br>
<span class="quotelev1">&gt; ic1n029 max_slots=4
</span><br>
<span class="quotelev1">&gt; /software/all/openmpi/1.3.1/bin/mpirun         --hostfile /scratch/ 
</span><br>
<span class="quotelev1">&gt; JMS_tmpdir/Job_101440/tmp.KdppsV3849 /jms/home/jobscript/run  
</span><br>
<span class="quotelev1">&gt; mpi_helloc
</span><br>
<span class="quotelev1">&gt; size = 4
</span><br>
<span class="quotelev1">&gt; rank = 0
</span><br>
<span class="quotelev1">&gt; size = 4
</span><br>
<span class="quotelev1">&gt; rank = 3
</span><br>
<span class="quotelev1">&gt; size = 4
</span><br>
<span class="quotelev1">&gt; rank = 2
</span><br>
<span class="quotelev1">&gt; size = 4
</span><br>
<span class="quotelev1">&gt; rank = 1
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURMD_NODENAME=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURM_PRIO_PROCESS=0
</span><br>
<span class="quotelev1">&gt; SLURMD_NODENAME=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURM_PRIO_PROCESS=0
</span><br>
<span class="quotelev1">&gt; SLURMD_NODENAME=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURM_PRIO_PROCESS=0
</span><br>
<span class="quotelev1">&gt; SLURM_WAIT=30
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=101440
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=4
</span><br>
<span class="quotelev1">&gt; SLURM_PARTITION=t
</span><br>
<span class="quotelev1">&gt; SLURM_CPUS_PER_TASK=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=101440
</span><br>
<span class="quotelev1">&gt; SLURM_WAIT=30
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=101440
</span><br>
<span class="quotelev1">&gt; SLURM_WAIT=30
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=101440
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=4
</span><br>
<span class="quotelev1">&gt; SLURM_PARTITION=t
</span><br>
<span class="quotelev1">&gt; SLURM_CPUS_PER_TASK=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=101440
</span><br>
<span class="quotelev1">&gt; SLURM_UMASK=0022
</span><br>
<span class="quotelev1">&gt; SLURM_NODEID=0
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev1">&gt; SLURM_TASK_PID=3777
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=0
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=4
</span><br>
<span class="quotelev1">&gt; SLURM_PARTITION=t
</span><br>
<span class="quotelev1">&gt; SLURM_CPUS_PER_TASK=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=101440
</span><br>
<span class="quotelev1">&gt; SLURM_UMASK=0022
</span><br>
<span class="quotelev1">&gt; SLURM_NODEID=0
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=4
</span><br>
<span class="quotelev1">&gt; SLURM_GTIDS=0
</span><br>
<span class="quotelev1">&gt; SLURM_UMASK=0022
</span><br>
<span class="quotelev1">&gt; SLURM_NODEID=0
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev1">&gt; SLURM_TASK_PID=3777
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=0
</span><br>
<span class="quotelev1">&gt; SLURM_TASK_PID=3777
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=0
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev1">&gt; SLURM_TIMELIMIT=11
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=4
</span><br>
<span class="quotelev1">&gt; SLURM_GTIDS=0
</span><br>
<span class="quotelev1">&gt; SLURM_TIMELIMIT=11
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=4
</span><br>
<span class="quotelev1">&gt; SLURM_GTIDS=0
</span><br>
<span class="quotelev1">&gt; SLURM_TIMELIMIT=11
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=1
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURMD_NODENAME=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURM_PRIO_PROCESS=0
</span><br>
<span class="quotelev1">&gt; SLURM_WAIT=30
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=101440
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=4
</span><br>
<span class="quotelev1">&gt; SLURM_PARTITION=t
</span><br>
<span class="quotelev1">&gt; SLURM_CPUS_PER_TASK=1
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=101440
</span><br>
<span class="quotelev1">&gt; SLURM_UMASK=0022
</span><br>
<span class="quotelev1">&gt; SLURM_NODEID=0
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev1">&gt; SLURM_TASK_PID=3777
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=0
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=ic1n029
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=4
</span><br>
<span class="quotelev1">&gt; SLURM_GTIDS=0
</span><br>
<span class="quotelev1">&gt; SLURM_TIMELIMIT=11
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=1
</span><br>
<span class="quotelev1">&gt; JMS_test_quota=n
</span><br>
<span class="quotelev1">&gt; JMS_c=p
</span><br>
<span class="quotelev1">&gt; JMS_nodes=ic1n029 ic1n029 ic1n029 ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_slurm_wait=30
</span><br>
<span class="quotelev1">&gt; JMS_jid=101440
</span><br>
<span class="quotelev1">&gt; JMS_node0=ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_org=kit
</span><br>
<span class="quotelev1">&gt; JMS_root=/jms/home
</span><br>
<span class="quotelev1">&gt; JMS_e=Job_%j.err
</span><br>
<span class="quotelev1">&gt; JMS_submit_time=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_sysname=ic1
</span><br>
<span class="quotelev1">&gt; JMS_start_time=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_i=/dev/null
</span><br>
<span class="quotelev1">&gt; JMS_exclusive=0
</span><br>
<span class="quotelev1">&gt; JMS_last_start_time=
</span><br>
<span class="quotelev1">&gt; JMS_o=Job_%j.out
</span><br>
<span class="quotelev1">&gt; JMS_last_jid=
</span><br>
<span class="quotelev1">&gt; JMS_event_end=0
</span><br>
<span class="quotelev1">&gt; JMS_m=2000
</span><br>
<span class="quotelev1">&gt; TEMP=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; JMS_p=4
</span><br>
<span class="quotelev1">&gt; JMS_nodes_list=ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_t=10
</span><br>
<span class="quotelev1">&gt; JMS_prio=1
</span><br>
<span class="quotelev1">&gt; JMS_threads=1
</span><br>
<span class="quotelev1">&gt; JMS_systime=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_group=rz00
</span><br>
<span class="quotelev1">&gt; JMS_pwd=/home/ws/rz50/softtest
</span><br>
<span class="quotelev1">&gt; JMS_submit_command=-t 10 -m 2000 -c p -p 4 mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; JMS_user=rz50
</span><br>
<span class="quotelev1">&gt; JMS_systype=3
</span><br>
<span class="quotelev1">&gt; JMS_submit_node=ic1n990
</span><br>
<span class="quotelev1">&gt; JMS_A=-
</span><br>
<span class="quotelev1">&gt; JMS_Nnodes=1
</span><br>
<span class="quotelev1">&gt; JMS_event_begin=0
</span><br>
<span class="quotelev1">&gt; JMS_J=
</span><br>
<span class="quotelev1">&gt; JMS_node_used=4*ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_stdin=/dev/null
</span><br>
<span class="quotelev1">&gt; JMS_job=mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; JMS_version=2.1
</span><br>
<span class="quotelev1">&gt; JMS_tasks=4
</span><br>
<span class="quotelev1">&gt; TMP=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; MPI_TMPDIR=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; JMS_stdout=Job_101440.out
</span><br>
<span class="quotelev1">&gt; JMS_T=11
</span><br>
<span class="quotelev1">&gt; JMS_fat_nodes=n
</span><br>
<span class="quotelev1">&gt; JMS_stderr=Job_101440.err
</span><br>
<span class="quotelev1">&gt; JMS_test_project=n
</span><br>
<span class="quotelev1">&gt; JMS_trace_level=0
</span><br>
<span class="quotelev1">&gt; JMS_T_diff=0
</span><br>
<span class="quotelev1">&gt; JMS_test_quota=n
</span><br>
<span class="quotelev1">&gt; JMS_c=p
</span><br>
<span class="quotelev1">&gt; JMS_nodes=ic1n029 ic1n029 ic1n029 ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_slurm_wait=30
</span><br>
<span class="quotelev1">&gt; JMS_jid=101440
</span><br>
<span class="quotelev1">&gt; JMS_node0=ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_org=kit
</span><br>
<span class="quotelev1">&gt; JMS_root=/jms/home
</span><br>
<span class="quotelev1">&gt; JMS_e=Job_%j.err
</span><br>
<span class="quotelev1">&gt; JMS_submit_time=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_sysname=ic1
</span><br>
<span class="quotelev1">&gt; JMS_start_time=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_i=/dev/null
</span><br>
<span class="quotelev1">&gt; JMS_exclusive=0
</span><br>
<span class="quotelev1">&gt; JMS_last_start_time=
</span><br>
<span class="quotelev1">&gt; JMS_o=Job_%j.out
</span><br>
<span class="quotelev1">&gt; JMS_last_jid=
</span><br>
<span class="quotelev1">&gt; JMS_event_end=0
</span><br>
<span class="quotelev1">&gt; JMS_m=2000
</span><br>
<span class="quotelev1">&gt; TEMP=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; JMS_p=4
</span><br>
<span class="quotelev1">&gt; JMS_nodes_list=ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_t=10
</span><br>
<span class="quotelev1">&gt; JMS_prio=1
</span><br>
<span class="quotelev1">&gt; JMS_threads=1
</span><br>
<span class="quotelev1">&gt; JMS_systime=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_group=rz00
</span><br>
<span class="quotelev1">&gt; JMS_pwd=/home/ws/rz50/softtest
</span><br>
<span class="quotelev1">&gt; JMS_submit_command=-t 10 -m 2000 -c p -p 4 mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; JMS_user=rz50
</span><br>
<span class="quotelev1">&gt; JMS_systype=3
</span><br>
<span class="quotelev1">&gt; JMS_submit_node=ic1n990
</span><br>
<span class="quotelev1">&gt; JMS_A=-
</span><br>
<span class="quotelev1">&gt; JMS_Nnodes=1
</span><br>
<span class="quotelev1">&gt; JMS_event_begin=0
</span><br>
<span class="quotelev1">&gt; JMS_J=
</span><br>
<span class="quotelev1">&gt; JMS_node_used=4*ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_stdin=/dev/null
</span><br>
<span class="quotelev1">&gt; JMS_job=mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; JMS_version=2.1
</span><br>
<span class="quotelev1">&gt; JMS_tasks=4
</span><br>
<span class="quotelev1">&gt; TMP=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; MPI_TMPDIR=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; JMS_stdout=Job_101440.out
</span><br>
<span class="quotelev1">&gt; JMS_T=11
</span><br>
<span class="quotelev1">&gt; JMS_fat_nodes=n
</span><br>
<span class="quotelev1">&gt; JMS_stderr=Job_101440.err
</span><br>
<span class="quotelev1">&gt; JMS_test_project=n
</span><br>
<span class="quotelev1">&gt; JMS_trace_level=0
</span><br>
<span class="quotelev1">&gt; JMS_T_diff=0
</span><br>
<span class="quotelev1">&gt; JMS_test_quota=n
</span><br>
<span class="quotelev1">&gt; JMS_c=p
</span><br>
<span class="quotelev1">&gt; JMS_nodes=ic1n029 ic1n029 ic1n029 ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_slurm_wait=30
</span><br>
<span class="quotelev1">&gt; JMS_jid=101440
</span><br>
<span class="quotelev1">&gt; JMS_node0=ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_org=kit
</span><br>
<span class="quotelev1">&gt; JMS_root=/jms/home
</span><br>
<span class="quotelev1">&gt; JMS_e=Job_%j.err
</span><br>
<span class="quotelev1">&gt; JMS_submit_time=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_sysname=ic1
</span><br>
<span class="quotelev1">&gt; JMS_start_time=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_i=/dev/null
</span><br>
<span class="quotelev1">&gt; JMS_exclusive=0
</span><br>
<span class="quotelev1">&gt; JMS_last_start_time=
</span><br>
<span class="quotelev1">&gt; JMS_o=Job_%j.out
</span><br>
<span class="quotelev1">&gt; JMS_last_jid=
</span><br>
<span class="quotelev1">&gt; JMS_event_end=0
</span><br>
<span class="quotelev1">&gt; JMS_m=2000
</span><br>
<span class="quotelev1">&gt; TEMP=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; JMS_p=4
</span><br>
<span class="quotelev1">&gt; JMS_nodes_list=ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_t=10
</span><br>
<span class="quotelev1">&gt; JMS_prio=1
</span><br>
<span class="quotelev1">&gt; JMS_threads=1
</span><br>
<span class="quotelev1">&gt; JMS_systime=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_group=rz00
</span><br>
<span class="quotelev1">&gt; JMS_pwd=/home/ws/rz50/softtest
</span><br>
<span class="quotelev1">&gt; JMS_submit_command=-t 10 -m 2000 -c p -p 4 mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; JMS_user=rz50
</span><br>
<span class="quotelev1">&gt; JMS_systype=3
</span><br>
<span class="quotelev1">&gt; JMS_submit_node=ic1n990
</span><br>
<span class="quotelev1">&gt; JMS_A=-
</span><br>
<span class="quotelev1">&gt; JMS_Nnodes=1
</span><br>
<span class="quotelev1">&gt; JMS_event_begin=0
</span><br>
<span class="quotelev1">&gt; JMS_J=
</span><br>
<span class="quotelev1">&gt; JMS_node_used=4*ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_stdin=/dev/null
</span><br>
<span class="quotelev1">&gt; JMS_job=mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; JMS_version=2.1
</span><br>
<span class="quotelev1">&gt; JMS_tasks=4
</span><br>
<span class="quotelev1">&gt; TMP=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; MPI_TMPDIR=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; JMS_stdout=Job_101440.out
</span><br>
<span class="quotelev1">&gt; JMS_T=11
</span><br>
<span class="quotelev1">&gt; JMS_fat_nodes=n
</span><br>
<span class="quotelev1">&gt; JMS_stderr=Job_101440.err
</span><br>
<span class="quotelev1">&gt; JMS_test_project=n
</span><br>
<span class="quotelev1">&gt; JMS_trace_level=0
</span><br>
<span class="quotelev1">&gt; JMS_T_diff=0
</span><br>
<span class="quotelev1">&gt; JMS_test_quota=n
</span><br>
<span class="quotelev1">&gt; JMS_c=p
</span><br>
<span class="quotelev1">&gt; JMS_nodes=ic1n029 ic1n029 ic1n029 ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_slurm_wait=30
</span><br>
<span class="quotelev1">&gt; JMS_jid=101440
</span><br>
<span class="quotelev1">&gt; JMS_node0=ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_org=kit
</span><br>
<span class="quotelev1">&gt; JMS_root=/jms/home
</span><br>
<span class="quotelev1">&gt; JMS_e=Job_%j.err
</span><br>
<span class="quotelev1">&gt; JMS_submit_time=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_sysname=ic1
</span><br>
<span class="quotelev1">&gt; JMS_start_time=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_i=/dev/null
</span><br>
<span class="quotelev1">&gt; JMS_exclusive=0
</span><br>
<span class="quotelev1">&gt; JMS_last_start_time=
</span><br>
<span class="quotelev1">&gt; JMS_o=Job_%j.out
</span><br>
<span class="quotelev1">&gt; JMS_last_jid=
</span><br>
<span class="quotelev1">&gt; JMS_event_end=0
</span><br>
<span class="quotelev1">&gt; JMS_m=2000
</span><br>
<span class="quotelev1">&gt; TEMP=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; JMS_p=4
</span><br>
<span class="quotelev1">&gt; JMS_nodes_list=ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_t=10
</span><br>
<span class="quotelev1">&gt; JMS_prio=1
</span><br>
<span class="quotelev1">&gt; JMS_threads=1
</span><br>
<span class="quotelev1">&gt; JMS_systime=1237480255
</span><br>
<span class="quotelev1">&gt; JMS_group=rz00
</span><br>
<span class="quotelev1">&gt; JMS_pwd=/home/ws/rz50/softtest
</span><br>
<span class="quotelev1">&gt; JMS_submit_command=-t 10 -m 2000 -c p -p 4 mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; JMS_user=rz50
</span><br>
<span class="quotelev1">&gt; JMS_systype=3
</span><br>
<span class="quotelev1">&gt; JMS_submit_node=ic1n990
</span><br>
<span class="quotelev1">&gt; JMS_A=-
</span><br>
<span class="quotelev1">&gt; JMS_Nnodes=1
</span><br>
<span class="quotelev1">&gt; JMS_event_begin=0
</span><br>
<span class="quotelev1">&gt; JMS_J=
</span><br>
<span class="quotelev1">&gt; JMS_node_used=4*ic1n029
</span><br>
<span class="quotelev1">&gt; JMS_stdin=/dev/null
</span><br>
<span class="quotelev1">&gt; JMS_job=mpirun mpi_helloc
</span><br>
<span class="quotelev1">&gt; JMS_version=2.1
</span><br>
<span class="quotelev1">&gt; JMS_tasks=4
</span><br>
<span class="quotelev1">&gt; TMP=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; MPI_TMPDIR=/scratch/JMS_tmpdir/Job_101440
</span><br>
<span class="quotelev1">&gt; JMS_stdout=Job_101440.out
</span><br>
<span class="quotelev1">&gt; JMS_T=11
</span><br>
<span class="quotelev1">&gt; JMS_fat_nodes=n
</span><br>
<span class="quotelev1">&gt; JMS_stderr=Job_101440.err
</span><br>
<span class="quotelev1">&gt; JMS_test_project=n
</span><br>
<span class="quotelev1">&gt; JMS_trace_level=0
</span><br>
<span class="quotelev1">&gt; JMS_T_diff=0
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; Job 101440 completed at 19.03.2009/17:31:00 (COMPLETED)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5700.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer	Negative	Value"</a>
<li><strong>Previous message:</strong> <a href="5698.php">Hartmut H&#228;fner: "[OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>In reply to:</strong> <a href="5698.php">Hartmut H&#228;fner: "[OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5735.php">Hartmut Häfner: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
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
