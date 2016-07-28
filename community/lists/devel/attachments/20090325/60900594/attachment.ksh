Universitaet Karlsruhe / Rechenzentrum   +++ ic1 +++   JMS 2.1 / slurm 1.2.22
Job 101442 has been submitted at 19.03.2009/17:38:27 on ic1n990
Command: job_submit -t 10 -m 2000 -c d -p 4 mpirun mpi_helloc
Job 101442 started at 19.03.2009/17:38:29 on ic1n001
4 tasks running on 1 nodes overcommited: 4*ic1n001
================================================================================
ic1n001
ic1n001
ic1n001
ic1n001
ic1n001 max_slots=4
/software/all/openmpi/1.3.1/bin/mpirun         --hostfile /scratch/JMS_tmpdir/Job_101442/tmp.CCaCM22772 /jms/home/jobscript/run mpi_helloc
size = 1
rank = 0
SLURM_NODELIST=ic1n001
SLURMD_NODENAME=ic1n001
SLURM_PRIO_PROCESS=0
SLURM_WAIT=30
SLURM_NNODES=1
SLURM_JOBID=101442
SLURM_TASKS_PER_NODE=1
SLURM_PARTITION=d
SLURM_CPUS_PER_TASK=1
SLURM_JOB_ID=101442
SLURM_UMASK=0022
SLURM_NODEID=0
SLURM_OVERCOMMIT=1
SLURM_NPROCS=4
SLURM_TASK_PID=22700
SLURM_PROCID=0
SLURM_JOB_NODELIST=ic1n001
SLURM_LOCALID=0
SLURM_JOB_CPUS_PER_NODE=1
SLURM_GTIDS=0
SLURM_TIMELIMIT=20
SLURM_JOB_NUM_NODES=1
JMS_test_quota=n
JMS_c=d
JMS_nodes=ic1n001 ic1n001 ic1n001 ic1n001
JMS_slurm_wait=30
JMS_jid=101442
JMS_node0=ic1n001
JMS_org=kit
JMS_root=/jms/home
JMS_e=Job_%j.err
JMS_submit_time=1237480707
JMS_sysname=ic1
JMS_start_time=1237480708
JMS_i=/dev/null
JMS_exclusive=2
JMS_last_start_time=
JMS_o=Job_%j.out
JMS_last_jid=
JMS_event_end=0
JMS_m=2000
TEMP=/scratch/JMS_tmpdir/Job_101442
JMS_p=4
JMS_nodes_list=ic1n001
JMS_t=10
JMS_prio=1
JMS_threads=1
JMS_systime=1237480708
JMS_group=rz00
JMS_pwd=/home/ws/rz50/softtest
JMS_submit_command=-t 10 -m 2000 -c d -p 4 mpirun mpi_helloc
JMS_user=rz50
JMS_systype=3
JMS_submit_node=ic1n990
JMS_A=-
JMS_Nnodes=1
JMS_event_begin=0
JMS_J=
JMS_node_used=4*ic1n001
JMS_stdin=/dev/null
JMS_job=mpirun mpi_helloc
JMS_version=2.1
JMS_tasks=4
TMP=/scratch/JMS_tmpdir/Job_101442
MPI_TMPDIR=/scratch/JMS_tmpdir/Job_101442
JMS_stdout=Job_101442.out
JMS_T=20
JMS_fat_nodes=n
JMS_stderr=Job_101442.err
JMS_test_project=n
JMS_trace_level=0
JMS_T_diff=0
================================================================================
Job 101442 completed at 19.03.2009/17:38:30 (COMPLETED)
