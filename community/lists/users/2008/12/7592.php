<?
$subject_val = "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 01:55:52 2008" -->
<!-- isoreceived="20081224065552" -->
<!-- sent="Wed, 24 Dec 2008 12:25:48 +0530" -->
<!-- isosent="20081224065548" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run" -->
<!-- id="cb60cbc40812232255j7c34fcadn3bc20c278c4b1dd3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A4FA0731-AD81-443C-8C93-809225DE40AF_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-24 01:55:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7593.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7591.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7579.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7596.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Reply:</strong> <a href="7596.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Reuti. That sorted out the problem.
<br>
<p>Now mpiblast is able to run, but only on single node. i.e. mpiformatdb
<br>
-&gt; 4 fragments, mpiblast - 4 processes. Since each node is having 4
<br>
cores, the job will run on a single node and works fine. With 8
<br>
processes, the job fails with following error message:
<br>
<p>$ cat err.108.OMPI-Blast-Job
<br>
[0,1,7][btl_openib_component.c:1371:btl_openib_component_progress]
<br>
from compute-0-5.local to: compute-0-11.local error polling HP CQ with
<br>
status LOCAL LENGTH ERROR status number 1 for wr_id 12002616 opcode 42
<br>
[compute-0-11.local:09692] [0,0,0]-[0,1,2] mca_oob_tcp_msg_recv: readv
<br>
failed: Connection reset by peer (104)
<br>
[compute-0-11.local:09692] [0,0,0]-[0,1,4] mca_oob_tcp_msg_recv: readv
<br>
failed: Connection reset by peer (104)
<br>
4       0.674234        Bailing out with signal 15
<br>
[compute-0-5.local:10032] MPI_ABORT invoked on rank 4 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
5       1.324   Bailing out with signal 15
<br>
[compute-0-5.local:10033] MPI_ABORT invoked on rank 5 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
6       1.32842 Bailing out with signal 15
<br>
[compute-0-5.local:10034] MPI_ABORT invoked on rank 6 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
[compute-0-11.local:09692] [0,0,0]-[0,1,3] mca_oob_tcp_msg_recv: readv
<br>
failed: Connection reset by peer (104)
<br>
0       0.674561        Bailing out with signal 15
<br>
[compute-0-11.local:09782] MPI_ABORT invoked on rank 0 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
1       0.808846        Bailing out with signal 15
<br>
[compute-0-11.local:09783] MPI_ABORT invoked on rank 1 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
2       0.81484 Bailing out with signal 15
<br>
[compute-0-11.local:09784] MPI_ABORT invoked on rank 2 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
3       1.32249 Bailing out with signal 15
<br>
[compute-0-11.local:09785] MPI_ABORT invoked on rank 3 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
<p>I think its problem with OpenMPI. Its not able to communicate with
<br>
processes on another node.
<br>
Please help me to get it working on multiple nodes.
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<p><p>On Tue, Dec 23, 2008 at 4:45 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 23.12.2008 um 12:03 schrieb Sangamesh B:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I've compiled MPIBLAST-1.5.0-pio app on Rocks 4.3,Voltaire
</span><br>
<span class="quotelev2">&gt;&gt; infiniband based Linux cluster using Open MPI-1.2.8 + intel 10
</span><br>
<span class="quotelev2">&gt;&gt; compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The job is not running. Let me explain the configs:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SGE job script:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  $ cat sge_submit.sh
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #$ -N OMPI-Blast-Job
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #$ -e err.$JOB_ID.$JOB_NAME
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #$ -o out.$JOB_ID.$JOB_NAME
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe orte 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi_intel/1.2.8/bin/mpirun -np $NSLOTS
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/mpiblast-150-pio_OMPI/bin/mpiblast -p blastp -d
</span><br>
<span class="quotelev2">&gt;&gt; Mtub_CDC1551_.faa -i 586_seq.fasta -o test.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The PE orte is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ qconf -sp orte
</span><br>
<span class="quotelev2">&gt;&gt; pe_name           orte
</span><br>
<span class="quotelev2">&gt;&gt; slots             999
</span><br>
<span class="quotelev2">&gt;&gt; user_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists       NONE
</span><br>
<span class="quotelev2">&gt;&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves    FALSE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task TRUE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you will need here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; control_slaves    TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; urgency_slots     min
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # /opt/openmpi_intel/1.2.8/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The SGE error and output files for the job are as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cat err.88.OMPI-Blast-Job
</span><br>
<span class="quotelev2">&gt;&gt; error: executing task of job 88 failed:
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local:06151] ERROR: A daemon on node compute-0-1.local
</span><br>
<span class="quotelev2">&gt;&gt; failed to start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local:06151] ERROR: There may be more information available
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local:06151] ERROR: the 'qstat -t' command on the Grid
</span><br>
<span class="quotelev2">&gt;&gt; Engine tasks.
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local:06151] ERROR: If the problem persists, please restart
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local:06151] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local:06151] ERROR: The daemon exited unexpectedly with
</span><br>
<span class="quotelev2">&gt;&gt; status 1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cat out.88.OMPI-Blast-Job
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is nothing in output file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The qstat shows that job is running at some node. But on that node,
</span><br>
<span class="quotelev2">&gt;&gt; there is no mpiblast processes running  as seen by top command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ps command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # ps -ef | grep mpiblast
</span><br>
<span class="quotelev2">&gt;&gt; locuz     4018  4017  0 16:25 ?        00:00:00
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi_intel/1.2.8/bin/mpirun -np 4
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/mpiblast-150-pio_OMPI/bin/mpiblast -p blastp -d
</span><br>
<span class="quotelev2">&gt;&gt; Mtub_CDC1551_.faa -i 586_seq.fasta -o test.out
</span><br>
<span class="quotelev2">&gt;&gt; root      4120  4022  0 16:27 pts/0    00:00:00 grep mpiblast
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; shows this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ibv_rc_pingpong tests work fine. The output of lsmod:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # lsmod | grep ib
</span><br>
<span class="quotelev2">&gt;&gt; ib_sdp                 57788  0
</span><br>
<span class="quotelev2">&gt;&gt; rdma_cm                38292  3 rdma_ucm,rds,ib_sdp
</span><br>
<span class="quotelev2">&gt;&gt; ib_addr                11400  1 rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt; ib_local_sa            14864  1 rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt; ib_mthca              157396  2
</span><br>
<span class="quotelev2">&gt;&gt; ib_ipoib               83928  0
</span><br>
<span class="quotelev2">&gt;&gt; ib_umad                20656  0
</span><br>
<span class="quotelev2">&gt;&gt; ib_ucm                 21256  0
</span><br>
<span class="quotelev2">&gt;&gt; ib_uverbs              46896  8 rdma_ucm,ib_ucm
</span><br>
<span class="quotelev2">&gt;&gt; ib_cm                  42536  3 rdma_cm,ib_ipoib,ib_ucm
</span><br>
<span class="quotelev2">&gt;&gt; ib_sa                  28512  4 rdma_cm,ib_local_sa,ib_ipoib,ib_cm
</span><br>
<span class="quotelev2">&gt;&gt; ib_mad                 43432  5 ib_local_sa,ib_mthca,ib_umad,ib_cm,ib_sa
</span><br>
<span class="quotelev2">&gt;&gt; ib_core                70544  14
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rdma_ucm,rds,ib_sdp,rdma_cm,iw_cm,ib_local_sa,ib_mthca,ib_ipoib,ib_umad,ib_ucm,ib_uverbs,ib_cm,ib_sa,ib_mad
</span><br>
<span class="quotelev2">&gt;&gt; ipv6                  285089  23 ib_ipoib
</span><br>
<span class="quotelev2">&gt;&gt; libata                124585  1 ata_piix
</span><br>
<span class="quotelev2">&gt;&gt; scsi_mod              144529  2 libata,sd_mod
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What might be the problem?
</span><br>
<span class="quotelev2">&gt;&gt; We've used Voltaire OFA Roll from rocks - Gridstack.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sangamesh
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7593.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7591.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7579.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7596.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Reply:</strong> <a href="7596.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
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
