<?
$subject_val = "[OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 13:00:42 2009" -->
<!-- isoreceived="20090325170042" -->
<!-- sent="Wed, 25 Mar 2009 18:00:37 +0100" -->
<!-- isosent="20090325170037" -->
<!-- name="Hartmut H&#228;fner" -->
<!-- email="Hartmut.Haefner_at_[hidden]" -->
<!-- subject="[OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1" -->
<!-- id="49CA6335.7090301_at_kit.edu" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1<br>
<strong>From:</strong> Hartmut H&#228;fner (<em>Hartmut.Haefner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 13:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5699.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Previous message:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5699.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Reply:</strong> <a href="5699.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Maybe reply:</strong> <a href="5735.php">Hartmut Häfner: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Support,
<br>
there is a problem with OpenMPI in version 1.3 and version 1.3.1 when 
<br>
using our batch system Slurm. On our parallel computer there are 2 
<br>
queues - one with exclusive usage of slots (cores) (SLURM_OVERCOMMIT=0) 
<br>
within nodes and one without shared usage of slots (SLURM_OVERCOMMIT=1) 
<br>
within nodes. Running a simple MPI-program (I'll send you this program 
<br>
mpi_hello.c as attachment) with SLURM_OVERCOMMIT set to  0   the 
<br>
executable works fine, running it with SLURM_OVERCOMMIT set to 1 it does 
<br>
not work correctly.  Please have a look to  2 files with outputs. 
<br>
Working not correctly means that the MPI-program runs on 1 processor 
<br>
although I have started it (for example) on 4 processors (it does not 
<br>
work correctly for any processor number  not equal to 1).
<br>
<p>This error only occurs for the version 1.3 and 1.3.1. If I am using oder 
<br>
versions of OpenMPI the program works fine.
<br>
<p>In the file Job_101442.out the hostlist (4x icn001) from Slurm is 
<br>
printed, then the content of the file  
<br>
/scratch/JMS_tmpdir/Job_101442/tmp.CCaCM22772 is printed, then the 
<br>
commandline (mpirun ...) is printed, then stdout of the program 
<br>
mpi_hello.c is printed (it runs only on 1 processor!!!) and the 
<br>
environment is printed.
<br>
<p>In the file Job_101440.out the same program is run. The only difference 
<br>
is, that SLURM_OVERCOMMIT is'nt set!
<br>
<p>Under the hood of job_submit ....    salloc -n4  script    is started. 
<br>
In &quot;script&quot; you find the command
<br>
mpirun --hostfile .....  as you can see in both output files.
<br>
<p>Sincerly yours
<br>
<p>H. H&#228;fner
<br>
<p><p><p><p><pre>
-- 
Hartmut H&#228;fner
Karlsruhe Institute of Technology (KIT)
University Karlsruhe (TH)
Steinbuch Centre for Computing (SCC)
Scientific Computing and Applications (SCA)
Zirkel 2 (Campus S&#252;d, Geb. 20.21, Raum 204)
D-76128 Karlsruhe
Fon +49(0)721 608 4869
Fax +49(0)721 32550 
Hartmut.Haefner_at_[hidden]
<a href="http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner">http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner</a> 


</pre>
<p>
Universitaet Karlsruhe / Rechenzentrum   +++ ic1 +++   JMS 2.1 / slurm 1.2.22
<br>
Job 101442 has been submitted at 19.03.2009/17:38:27 on ic1n990
<br>
Command: job_submit -t 10 -m 2000 -c d -p 4 mpirun mpi_helloc
<br>
Job 101442 started at 19.03.2009/17:38:29 on ic1n001
<br>
4 tasks running on 1 nodes overcommited: 4*ic1n001
<br>
================================================================================
<br>
ic1n001
<br>
ic1n001
<br>
ic1n001
<br>
ic1n001
<br>
ic1n001 max_slots=4
<br>
/software/all/openmpi/1.3.1/bin/mpirun         --hostfile /scratch/JMS_tmpdir/Job_101442/tmp.CCaCM22772 /jms/home/jobscript/run mpi_helloc
<br>
size = 1
<br>
rank = 0
<br>
SLURM_NODELIST=ic1n001
<br>
SLURMD_NODENAME=ic1n001
<br>
SLURM_PRIO_PROCESS=0
<br>
SLURM_WAIT=30
<br>
SLURM_NNODES=1
<br>
SLURM_JOBID=101442
<br>
SLURM_TASKS_PER_NODE=1
<br>
SLURM_PARTITION=d
<br>
SLURM_CPUS_PER_TASK=1
<br>
SLURM_JOB_ID=101442
<br>
SLURM_UMASK=0022
<br>
SLURM_NODEID=0
<br>
SLURM_OVERCOMMIT=1
<br>
SLURM_NPROCS=4
<br>
SLURM_TASK_PID=22700
<br>
SLURM_PROCID=0
<br>
SLURM_JOB_NODELIST=ic1n001
<br>
SLURM_LOCALID=0
<br>
SLURM_JOB_CPUS_PER_NODE=1
<br>
SLURM_GTIDS=0
<br>
SLURM_TIMELIMIT=20
<br>
SLURM_JOB_NUM_NODES=1
<br>
JMS_test_quota=n
<br>
JMS_c=d
<br>
JMS_nodes=ic1n001 ic1n001 ic1n001 ic1n001
<br>
JMS_slurm_wait=30
<br>
JMS_jid=101442
<br>
JMS_node0=ic1n001
<br>
JMS_org=kit
<br>
JMS_root=/jms/home
<br>
JMS_e=Job_%j.err
<br>
JMS_submit_time=1237480707
<br>
JMS_sysname=ic1
<br>
JMS_start_time=1237480708
<br>
JMS_i=/dev/null
<br>
JMS_exclusive=2
<br>
JMS_last_start_time=
<br>
JMS_o=Job_%j.out
<br>
JMS_last_jid=
<br>
JMS_event_end=0
<br>
JMS_m=2000
<br>
TEMP=/scratch/JMS_tmpdir/Job_101442
<br>
JMS_p=4
<br>
JMS_nodes_list=ic1n001
<br>
JMS_t=10
<br>
JMS_prio=1
<br>
JMS_threads=1
<br>
JMS_systime=1237480708
<br>
JMS_group=rz00
<br>
JMS_pwd=/home/ws/rz50/softtest
<br>
JMS_submit_command=-t 10 -m 2000 -c d -p 4 mpirun mpi_helloc
<br>
JMS_user=rz50
<br>
JMS_systype=3
<br>
JMS_submit_node=ic1n990
<br>
JMS_A=-
<br>
JMS_Nnodes=1
<br>
JMS_event_begin=0
<br>
JMS_J=
<br>
JMS_node_used=4*ic1n001
<br>
JMS_stdin=/dev/null
<br>
JMS_job=mpirun mpi_helloc
<br>
JMS_version=2.1
<br>
JMS_tasks=4
<br>
TMP=/scratch/JMS_tmpdir/Job_101442
<br>
MPI_TMPDIR=/scratch/JMS_tmpdir/Job_101442
<br>
JMS_stdout=Job_101442.out
<br>
JMS_T=20
<br>
JMS_fat_nodes=n
<br>
JMS_stderr=Job_101442.err
<br>
JMS_test_project=n
<br>
JMS_trace_level=0
<br>
JMS_T_diff=0
<br>
================================================================================
<br>
Job 101442 completed at 19.03.2009/17:38:30 (COMPLETED)
<br>
<p>
<p>
Universitaet Karlsruhe / Rechenzentrum   +++ ic1 +++   JMS 2.1 / slurm 1.2.22
<br>
Job 101440 has been submitted at 19.03.2009/17:30:55 on ic1n990
<br>
Command: job_submit -t 10 -m 2000 -c p -p 4 mpirun mpi_helloc
<br>
Job 101440 started at 19.03.2009/17:30:57 on ic1n029
<br>
4 tasks running on 1 nodes shared: 4*ic1n029
<br>
================================================================================
<br>
ic1n029
<br>
ic1n029
<br>
ic1n029
<br>
ic1n029
<br>
ic1n029 max_slots=4
<br>
/software/all/openmpi/1.3.1/bin/mpirun         --hostfile /scratch/JMS_tmpdir/Job_101440/tmp.KdppsV3849 /jms/home/jobscript/run mpi_helloc
<br>
size = 4
<br>
rank = 0
<br>
size = 4
<br>
rank = 3
<br>
size = 4
<br>
rank = 2
<br>
size = 4
<br>
rank = 1
<br>
SLURM_NODELIST=ic1n029
<br>
SLURM_NODELIST=ic1n029
<br>
SLURM_NODELIST=ic1n029
<br>
SLURMD_NODENAME=ic1n029
<br>
SLURM_PRIO_PROCESS=0
<br>
SLURMD_NODENAME=ic1n029
<br>
SLURM_PRIO_PROCESS=0
<br>
SLURMD_NODENAME=ic1n029
<br>
SLURM_PRIO_PROCESS=0
<br>
SLURM_WAIT=30
<br>
SLURM_NNODES=1
<br>
SLURM_JOBID=101440
<br>
SLURM_TASKS_PER_NODE=4
<br>
SLURM_PARTITION=t
<br>
SLURM_CPUS_PER_TASK=1
<br>
SLURM_JOB_ID=101440
<br>
SLURM_WAIT=30
<br>
SLURM_NNODES=1
<br>
SLURM_JOBID=101440
<br>
SLURM_WAIT=30
<br>
SLURM_NNODES=1
<br>
SLURM_JOBID=101440
<br>
SLURM_TASKS_PER_NODE=4
<br>
SLURM_PARTITION=t
<br>
SLURM_CPUS_PER_TASK=1
<br>
SLURM_JOB_ID=101440
<br>
SLURM_UMASK=0022
<br>
SLURM_NODEID=0
<br>
SLURM_NPROCS=4
<br>
SLURM_TASK_PID=3777
<br>
SLURM_PROCID=0
<br>
SLURM_TASKS_PER_NODE=4
<br>
SLURM_PARTITION=t
<br>
SLURM_CPUS_PER_TASK=1
<br>
SLURM_JOB_ID=101440
<br>
SLURM_UMASK=0022
<br>
SLURM_NODEID=0
<br>
SLURM_NPROCS=4
<br>
SLURM_JOB_NODELIST=ic1n029
<br>
SLURM_LOCALID=0
<br>
SLURM_JOB_CPUS_PER_NODE=4
<br>
SLURM_GTIDS=0
<br>
SLURM_UMASK=0022
<br>
SLURM_NODEID=0
<br>
SLURM_NPROCS=4
<br>
SLURM_TASK_PID=3777
<br>
SLURM_PROCID=0
<br>
SLURM_TASK_PID=3777
<br>
SLURM_PROCID=0
<br>
SLURM_JOB_NODELIST=ic1n029
<br>
SLURM_LOCALID=0
<br>
SLURM_TIMELIMIT=11
<br>
SLURM_JOB_CPUS_PER_NODE=4
<br>
SLURM_GTIDS=0
<br>
SLURM_TIMELIMIT=11
<br>
SLURM_JOB_NODELIST=ic1n029
<br>
SLURM_LOCALID=0
<br>
SLURM_JOB_CPUS_PER_NODE=4
<br>
SLURM_GTIDS=0
<br>
SLURM_TIMELIMIT=11
<br>
SLURM_JOB_NUM_NODES=1
<br>
SLURM_JOB_NUM_NODES=1
<br>
SLURM_JOB_NUM_NODES=1
<br>
SLURM_NODELIST=ic1n029
<br>
SLURMD_NODENAME=ic1n029
<br>
SLURM_PRIO_PROCESS=0
<br>
SLURM_WAIT=30
<br>
SLURM_NNODES=1
<br>
SLURM_JOBID=101440
<br>
SLURM_TASKS_PER_NODE=4
<br>
SLURM_PARTITION=t
<br>
SLURM_CPUS_PER_TASK=1
<br>
SLURM_JOB_ID=101440
<br>
SLURM_UMASK=0022
<br>
SLURM_NODEID=0
<br>
SLURM_NPROCS=4
<br>
SLURM_TASK_PID=3777
<br>
SLURM_PROCID=0
<br>
SLURM_JOB_NODELIST=ic1n029
<br>
SLURM_LOCALID=0
<br>
SLURM_JOB_CPUS_PER_NODE=4
<br>
SLURM_GTIDS=0
<br>
SLURM_TIMELIMIT=11
<br>
SLURM_JOB_NUM_NODES=1
<br>
JMS_test_quota=n
<br>
JMS_c=p
<br>
JMS_nodes=ic1n029 ic1n029 ic1n029 ic1n029
<br>
JMS_slurm_wait=30
<br>
JMS_jid=101440
<br>
JMS_node0=ic1n029
<br>
JMS_org=kit
<br>
JMS_root=/jms/home
<br>
JMS_e=Job_%j.err
<br>
JMS_submit_time=1237480255
<br>
JMS_sysname=ic1
<br>
JMS_start_time=1237480255
<br>
JMS_i=/dev/null
<br>
JMS_exclusive=0
<br>
JMS_last_start_time=
<br>
JMS_o=Job_%j.out
<br>
JMS_last_jid=
<br>
JMS_event_end=0
<br>
JMS_m=2000
<br>
TEMP=/scratch/JMS_tmpdir/Job_101440
<br>
JMS_p=4
<br>
JMS_nodes_list=ic1n029
<br>
JMS_t=10
<br>
JMS_prio=1
<br>
JMS_threads=1
<br>
JMS_systime=1237480255
<br>
JMS_group=rz00
<br>
JMS_pwd=/home/ws/rz50/softtest
<br>
JMS_submit_command=-t 10 -m 2000 -c p -p 4 mpirun mpi_helloc
<br>
JMS_user=rz50
<br>
JMS_systype=3
<br>
JMS_submit_node=ic1n990
<br>
JMS_A=-
<br>
JMS_Nnodes=1
<br>
JMS_event_begin=0
<br>
JMS_J=
<br>
JMS_node_used=4*ic1n029
<br>
JMS_stdin=/dev/null
<br>
JMS_job=mpirun mpi_helloc
<br>
JMS_version=2.1
<br>
JMS_tasks=4
<br>
TMP=/scratch/JMS_tmpdir/Job_101440
<br>
MPI_TMPDIR=/scratch/JMS_tmpdir/Job_101440
<br>
JMS_stdout=Job_101440.out
<br>
JMS_T=11
<br>
JMS_fat_nodes=n
<br>
JMS_stderr=Job_101440.err
<br>
JMS_test_project=n
<br>
JMS_trace_level=0
<br>
JMS_T_diff=0
<br>
JMS_test_quota=n
<br>
JMS_c=p
<br>
JMS_nodes=ic1n029 ic1n029 ic1n029 ic1n029
<br>
JMS_slurm_wait=30
<br>
JMS_jid=101440
<br>
JMS_node0=ic1n029
<br>
JMS_org=kit
<br>
JMS_root=/jms/home
<br>
JMS_e=Job_%j.err
<br>
JMS_submit_time=1237480255
<br>
JMS_sysname=ic1
<br>
JMS_start_time=1237480255
<br>
JMS_i=/dev/null
<br>
JMS_exclusive=0
<br>
JMS_last_start_time=
<br>
JMS_o=Job_%j.out
<br>
JMS_last_jid=
<br>
JMS_event_end=0
<br>
JMS_m=2000
<br>
TEMP=/scratch/JMS_tmpdir/Job_101440
<br>
JMS_p=4
<br>
JMS_nodes_list=ic1n029
<br>
JMS_t=10
<br>
JMS_prio=1
<br>
JMS_threads=1
<br>
JMS_systime=1237480255
<br>
JMS_group=rz00
<br>
JMS_pwd=/home/ws/rz50/softtest
<br>
JMS_submit_command=-t 10 -m 2000 -c p -p 4 mpirun mpi_helloc
<br>
JMS_user=rz50
<br>
JMS_systype=3
<br>
JMS_submit_node=ic1n990
<br>
JMS_A=-
<br>
JMS_Nnodes=1
<br>
JMS_event_begin=0
<br>
JMS_J=
<br>
JMS_node_used=4*ic1n029
<br>
JMS_stdin=/dev/null
<br>
JMS_job=mpirun mpi_helloc
<br>
JMS_version=2.1
<br>
JMS_tasks=4
<br>
TMP=/scratch/JMS_tmpdir/Job_101440
<br>
MPI_TMPDIR=/scratch/JMS_tmpdir/Job_101440
<br>
JMS_stdout=Job_101440.out
<br>
JMS_T=11
<br>
JMS_fat_nodes=n
<br>
JMS_stderr=Job_101440.err
<br>
JMS_test_project=n
<br>
JMS_trace_level=0
<br>
JMS_T_diff=0
<br>
JMS_test_quota=n
<br>
JMS_c=p
<br>
JMS_nodes=ic1n029 ic1n029 ic1n029 ic1n029
<br>
JMS_slurm_wait=30
<br>
JMS_jid=101440
<br>
JMS_node0=ic1n029
<br>
JMS_org=kit
<br>
JMS_root=/jms/home
<br>
JMS_e=Job_%j.err
<br>
JMS_submit_time=1237480255
<br>
JMS_sysname=ic1
<br>
JMS_start_time=1237480255
<br>
JMS_i=/dev/null
<br>
JMS_exclusive=0
<br>
JMS_last_start_time=
<br>
JMS_o=Job_%j.out
<br>
JMS_last_jid=
<br>
JMS_event_end=0
<br>
JMS_m=2000
<br>
TEMP=/scratch/JMS_tmpdir/Job_101440
<br>
JMS_p=4
<br>
JMS_nodes_list=ic1n029
<br>
JMS_t=10
<br>
JMS_prio=1
<br>
JMS_threads=1
<br>
JMS_systime=1237480255
<br>
JMS_group=rz00
<br>
JMS_pwd=/home/ws/rz50/softtest
<br>
JMS_submit_command=-t 10 -m 2000 -c p -p 4 mpirun mpi_helloc
<br>
JMS_user=rz50
<br>
JMS_systype=3
<br>
JMS_submit_node=ic1n990
<br>
JMS_A=-
<br>
JMS_Nnodes=1
<br>
JMS_event_begin=0
<br>
JMS_J=
<br>
JMS_node_used=4*ic1n029
<br>
JMS_stdin=/dev/null
<br>
JMS_job=mpirun mpi_helloc
<br>
JMS_version=2.1
<br>
JMS_tasks=4
<br>
TMP=/scratch/JMS_tmpdir/Job_101440
<br>
MPI_TMPDIR=/scratch/JMS_tmpdir/Job_101440
<br>
JMS_stdout=Job_101440.out
<br>
JMS_T=11
<br>
JMS_fat_nodes=n
<br>
JMS_stderr=Job_101440.err
<br>
JMS_test_project=n
<br>
JMS_trace_level=0
<br>
JMS_T_diff=0
<br>
JMS_test_quota=n
<br>
JMS_c=p
<br>
JMS_nodes=ic1n029 ic1n029 ic1n029 ic1n029
<br>
JMS_slurm_wait=30
<br>
JMS_jid=101440
<br>
JMS_node0=ic1n029
<br>
JMS_org=kit
<br>
JMS_root=/jms/home
<br>
JMS_e=Job_%j.err
<br>
JMS_submit_time=1237480255
<br>
JMS_sysname=ic1
<br>
JMS_start_time=1237480255
<br>
JMS_i=/dev/null
<br>
JMS_exclusive=0
<br>
JMS_last_start_time=
<br>
JMS_o=Job_%j.out
<br>
JMS_last_jid=
<br>
JMS_event_end=0
<br>
JMS_m=2000
<br>
TEMP=/scratch/JMS_tmpdir/Job_101440
<br>
JMS_p=4
<br>
JMS_nodes_list=ic1n029
<br>
JMS_t=10
<br>
JMS_prio=1
<br>
JMS_threads=1
<br>
JMS_systime=1237480255
<br>
JMS_group=rz00
<br>
JMS_pwd=/home/ws/rz50/softtest
<br>
JMS_submit_command=-t 10 -m 2000 -c p -p 4 mpirun mpi_helloc
<br>
JMS_user=rz50
<br>
JMS_systype=3
<br>
JMS_submit_node=ic1n990
<br>
JMS_A=-
<br>
JMS_Nnodes=1
<br>
JMS_event_begin=0
<br>
JMS_J=
<br>
JMS_node_used=4*ic1n029
<br>
JMS_stdin=/dev/null
<br>
JMS_job=mpirun mpi_helloc
<br>
JMS_version=2.1
<br>
JMS_tasks=4
<br>
TMP=/scratch/JMS_tmpdir/Job_101440
<br>
MPI_TMPDIR=/scratch/JMS_tmpdir/Job_101440
<br>
JMS_stdout=Job_101440.out
<br>
JMS_T=11
<br>
JMS_fat_nodes=n
<br>
JMS_stderr=Job_101440.err
<br>
JMS_test_project=n
<br>
JMS_trace_level=0
<br>
JMS_T_diff=0
<br>
================================================================================
<br>
Job 101440 completed at 19.03.2009/17:31:00 (COMPLETED)
<br>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5698/mpi_hello.c">mpi_hello.c</a>
</ul>
<!-- attachment="mpi_hello.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5699.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Previous message:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5699.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Reply:</strong> <a href="5699.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Maybe reply:</strong> <a href="5735.php">Hartmut Häfner: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
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
