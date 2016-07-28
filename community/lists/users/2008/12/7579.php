<?
$subject_val = "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 06:15:32 2008" -->
<!-- isoreceived="20081223111532" -->
<!-- sent="Tue, 23 Dec 2008 12:15:15 +0100" -->
<!-- isosent="20081223111515" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run" -->
<!-- id="A4FA0731-AD81-443C-8C93-809225DE40AF_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40812230303i73ecdf8m1a9e684ddeb4feb5_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-12-23 06:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7580.php">Win Than Aung: "[OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7578.php">Sangamesh B: "[OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>In reply to:</strong> <a href="7578.php">Sangamesh B: "[OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7592.php">Sangamesh B: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Reply:</strong> <a href="7592.php">Sangamesh B: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 23.12.2008 um 12:03 schrieb Sangamesh B:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I've compiled MPIBLAST-1.5.0-pio app on Rocks 4.3,Voltaire
</span><br>
<span class="quotelev1">&gt; infiniband based Linux cluster using Open MPI-1.2.8 + intel 10
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   The job is not running. Let me explain the configs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SGE job script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ cat sge_submit.sh
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #$ -N OMPI-Blast-Job
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #$ -e err.$JOB_ID.$JOB_NAME
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #$ -o out.$JOB_ID.$JOB_NAME
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi_intel/1.2.8/bin/mpirun -np $NSLOTS
</span><br>
<span class="quotelev1">&gt; /opt/apps/mpiblast-150-pio_OMPI/bin/mpiblast -p blastp -d
</span><br>
<span class="quotelev1">&gt; Mtub_CDC1551_.faa -i 586_seq.fasta -o test.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The PE orte is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ qconf -sp orte
</span><br>
<span class="quotelev1">&gt; pe_name           orte
</span><br>
<span class="quotelev1">&gt; slots             999
</span><br>
<span class="quotelev1">&gt; user_lists        NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists       NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves    FALSE
</span><br>
<span class="quotelev1">&gt; job_is_first_task TRUE
</span><br>
<p>you will need here:
<br>
<p>control_slaves    TRUE
<br>
job_is_first_task FALSE
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; urgency_slots     min
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # /opt/openmpi_intel/1.2.8/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The SGE error and output files for the job are as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat err.88.OMPI-Blast-Job
</span><br>
<span class="quotelev1">&gt; error: executing task of job 88 failed:
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06151] ERROR: A daemon on node compute-0-1.local
</span><br>
<span class="quotelev1">&gt; failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06151] ERROR: There may be more information  
</span><br>
<span class="quotelev1">&gt; available from
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06151] ERROR: the 'qstat -t' command on the Grid
</span><br>
<span class="quotelev1">&gt; Engine tasks.
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06151] ERROR: If the problem persists, please  
</span><br>
<span class="quotelev1">&gt; restart the
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06151] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06151] ERROR: The daemon exited unexpectedly  
</span><br>
<span class="quotelev1">&gt; with status 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat out.88.OMPI-Blast-Job
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is nothing in output file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The qstat shows that job is running at some node. But on that node,
</span><br>
<span class="quotelev1">&gt; there is no mpiblast processes running  as seen by top command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ps command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ps -ef | grep mpiblast
</span><br>
<span class="quotelev1">&gt; locuz     4018  4017  0 16:25 ?        00:00:00
</span><br>
<span class="quotelev1">&gt; /opt/openmpi_intel/1.2.8/bin/mpirun -np 4
</span><br>
<span class="quotelev1">&gt; /opt/apps/mpiblast-150-pio_OMPI/bin/mpiblast -p blastp -d
</span><br>
<span class="quotelev1">&gt; Mtub_CDC1551_.faa -i 586_seq.fasta -o test.out
</span><br>
<span class="quotelev1">&gt; root      4120  4022  0 16:27 pts/0    00:00:00 grep mpiblast
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shows this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ibv_rc_pingpong tests work fine. The output of lsmod:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # lsmod | grep ib
</span><br>
<span class="quotelev1">&gt; ib_sdp                 57788  0
</span><br>
<span class="quotelev1">&gt; rdma_cm                38292  3 rdma_ucm,rds,ib_sdp
</span><br>
<span class="quotelev1">&gt; ib_addr                11400  1 rdma_cm
</span><br>
<span class="quotelev1">&gt; ib_local_sa            14864  1 rdma_cm
</span><br>
<span class="quotelev1">&gt; ib_mthca              157396  2
</span><br>
<span class="quotelev1">&gt; ib_ipoib               83928  0
</span><br>
<span class="quotelev1">&gt; ib_umad                20656  0
</span><br>
<span class="quotelev1">&gt; ib_ucm                 21256  0
</span><br>
<span class="quotelev1">&gt; ib_uverbs              46896  8 rdma_ucm,ib_ucm
</span><br>
<span class="quotelev1">&gt; ib_cm                  42536  3 rdma_cm,ib_ipoib,ib_ucm
</span><br>
<span class="quotelev1">&gt; ib_sa                  28512  4 rdma_cm,ib_local_sa,ib_ipoib,ib_cm
</span><br>
<span class="quotelev1">&gt; ib_mad                 43432  5  
</span><br>
<span class="quotelev1">&gt; ib_local_sa,ib_mthca,ib_umad,ib_cm,ib_sa
</span><br>
<span class="quotelev1">&gt; ib_core                70544  14
</span><br>
<span class="quotelev1">&gt; rdma_ucm,rds,ib_sdp,rdma_cm,iw_cm,ib_local_sa,ib_mthca,ib_ipoib,ib_uma 
</span><br>
<span class="quotelev1">&gt; d,ib_ucm,ib_uverbs,ib_cm,ib_sa,ib_mad
</span><br>
<span class="quotelev1">&gt; ipv6                  285089  23 ib_ipoib
</span><br>
<span class="quotelev1">&gt; libata                124585  1 ata_piix
</span><br>
<span class="quotelev1">&gt; scsi_mod              144529  2 libata,sd_mod
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What might be the problem?
</span><br>
<span class="quotelev1">&gt; We've used Voltaire OFA Roll from rocks - Gridstack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
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
<li><strong>Next message:</strong> <a href="7580.php">Win Than Aung: "[OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7578.php">Sangamesh B: "[OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>In reply to:</strong> <a href="7578.php">Sangamesh B: "[OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7592.php">Sangamesh B: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Reply:</strong> <a href="7592.php">Sangamesh B: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
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
