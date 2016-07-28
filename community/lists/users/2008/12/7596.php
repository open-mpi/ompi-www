<?
$subject_val = "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 08:56:07 2008" -->
<!-- isoreceived="20081224135607" -->
<!-- sent="Wed, 24 Dec 2008 14:55:54 +0100" -->
<!-- isosent="20081224135554" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run" -->
<!-- id="EB680CFD-B212-48BD-A405-5E296914D81E_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40812232255j7c34fcadn3bc20c278c4b1dd3_at_mail.gmail.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-24 08:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7597.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
<li><strong>Previous message:</strong> <a href="7595.php">Teige,  Scott W: "[OMPI users] BTL question"</a>
<li><strong>In reply to:</strong> <a href="7592.php">Sangamesh B: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7599.php">Joe Landman: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Reply:</strong> <a href="7599.php">Joe Landman: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 24.12.2008 um 07:55 schrieb Sangamesh B:
<br>
<p><span class="quotelev1">&gt; Thanks Reuti. That sorted out the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now mpiblast is able to run, but only on single node. i.e. mpiformatdb
</span><br>
<span class="quotelev1">&gt; -&gt; 4 fragments, mpiblast - 4 processes. Since each node is having 4
</span><br>
<span class="quotelev1">&gt; cores, the job will run on a single node and works fine. With 8
</span><br>
<span class="quotelev1">&gt; processes, the job fails with following error message:
</span><br>
<p>I would suggest to search in the SGE mailing list archive for  
<br>
&quot;mpiblast&quot; in the mail body - there are several entries about solving  
<br>
this issue, which might also apply to your case.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; $ cat err.108.OMPI-Blast-Job
</span><br>
<span class="quotelev1">&gt; [0,1,7][btl_openib_component.c:1371:btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; from compute-0-5.local to: compute-0-11.local error polling HP CQ with
</span><br>
<span class="quotelev1">&gt; status LOCAL LENGTH ERROR status number 1 for wr_id 12002616 opcode 42
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:09692] [0,0,0]-[0,1,2] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:09692] [0,0,0]-[0,1,4] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; 4       0.674234        Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [compute-0-5.local:10032] MPI_ABORT invoked on rank 4 in communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 5       1.324   Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [compute-0-5.local:10033] MPI_ABORT invoked on rank 5 in communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 6       1.32842 Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [compute-0-5.local:10034] MPI_ABORT invoked on rank 6 in communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:09692] [0,0,0]-[0,1,3] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; 0       0.674561        Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:09782] MPI_ABORT invoked on rank 0 in communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 1       0.808846        Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:09783] MPI_ABORT invoked on rank 1 in communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 2       0.81484 Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:09784] MPI_ABORT invoked on rank 2 in communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 3       1.32249 Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [compute-0-11.local:09785] MPI_ABORT invoked on rank 3 in communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think its problem with OpenMPI. Its not able to communicate with
</span><br>
<span class="quotelev1">&gt; processes on another node.
</span><br>
<span class="quotelev1">&gt; Please help me to get it working on multiple nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 23, 2008 at 4:45 PM, Reuti &lt;reuti_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 23.12.2008 um 12:03 schrieb Sangamesh B:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I've compiled MPIBLAST-1.5.0-pio app on Rocks 4.3,Voltaire
</span><br>
<span class="quotelev3">&gt;&gt;&gt; infiniband based Linux cluster using Open MPI-1.2.8 + intel 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  The job is not running. Let me explain the configs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SGE job script:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ cat sge_submit.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -N OMPI-Blast-Job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -e err.$JOB_ID.$JOB_NAME
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -o out.$JOB_ID.$JOB_NAME
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -pe orte 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi_intel/1.2.8/bin/mpirun -np $NSLOTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/apps/mpiblast-150-pio_OMPI/bin/mpiblast -p blastp -d
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mtub_CDC1551_.faa -i 586_seq.fasta -o test.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The PE orte is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ qconf -sp orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pe_name           orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots             999
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user_lists        NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xuser_lists       NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; control_slaves    FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job_is_first_task TRUE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you will need here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves    TRUE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; urgency_slots     min
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # /opt/openmpi_intel/1.2.8/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA ras: gridengine (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.2.8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA pls: gridengine (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.2.8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The SGE error and output files for the job are as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat err.88.OMPI-Blast-Job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: executing task of job 88 failed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local:06151] ERROR: A daemon on node compute-0-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to start as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local:06151] ERROR: There may be more information  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local:06151] ERROR: the 'qstat -t' command on the Grid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Engine tasks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local:06151] ERROR: If the problem persists, please  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local:06151] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local:06151] ERROR: The daemon exited unexpectedly with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat out.88.OMPI-Blast-Job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is nothing in output file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The qstat shows that job is running at some node. But on that node,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is no mpiblast processes running  as seen by top command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ps command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ps -ef | grep mpiblast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locuz     4018  4017  0 16:25 ?        00:00:00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi_intel/1.2.8/bin/mpirun -np 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/apps/mpiblast-150-pio_OMPI/bin/mpiblast -p blastp -d
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mtub_CDC1551_.faa -i 586_seq.fasta -o test.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root      4120  4022  0 16:27 pts/0    00:00:00 grep mpiblast
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shows this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ibv_rc_pingpong tests work fine. The output of lsmod:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # lsmod | grep ib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_sdp                 57788  0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rdma_cm                38292  3 rdma_ucm,rds,ib_sdp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_addr                11400  1 rdma_cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_local_sa            14864  1 rdma_cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_mthca              157396  2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_ipoib               83928  0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_umad                20656  0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_ucm                 21256  0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_uverbs              46896  8 rdma_ucm,ib_ucm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_cm                  42536  3 rdma_cm,ib_ipoib,ib_ucm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_sa                  28512  4 rdma_cm,ib_local_sa,ib_ipoib,ib_cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_mad                 43432  5  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_local_sa,ib_mthca,ib_umad,ib_cm,ib_sa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_core                70544  14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rdma_ucm,rds,ib_sdp,rdma_cm,iw_cm,ib_local_sa,ib_mthca,ib_ipoib,ib_u 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mad,ib_ucm,ib_uverbs,ib_cm,ib_sa,ib_mad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ipv6                  285089  23 ib_ipoib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libata                124585  1 ata_piix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scsi_mod              144529  2 libata,sd_mod
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What might be the problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've used Voltaire OFA Roll from rocks - Gridstack.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sangamesh
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
<li><strong>Next message:</strong> <a href="7597.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
<li><strong>Previous message:</strong> <a href="7595.php">Teige,  Scott W: "[OMPI users] BTL question"</a>
<li><strong>In reply to:</strong> <a href="7592.php">Sangamesh B: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7599.php">Joe Landman: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Reply:</strong> <a href="7599.php">Joe Landman: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
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
