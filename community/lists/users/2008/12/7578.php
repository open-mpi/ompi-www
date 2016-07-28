<?
$subject_val = "[OMPI users] mpiblast + openmpi + gridengine job faila to run";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 06:03:15 2008" -->
<!-- isoreceived="20081223110315" -->
<!-- sent="Tue, 23 Dec 2008 16:33:10 +0530" -->
<!-- isosent="20081223110310" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] mpiblast + openmpi + gridengine job faila to run" -->
<!-- id="cb60cbc40812230303i73ecdf8m1a9e684ddeb4feb5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpiblast + openmpi + gridengine job faila to run<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 06:03:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7579.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Previous message:</strong> <a href="7577.php">Biagio Lucini: "[OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7579.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Reply:</strong> <a href="7579.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;&nbsp;I've compiled MPIBLAST-1.5.0-pio app on Rocks 4.3,Voltaire
<br>
infiniband based Linux cluster using Open MPI-1.2.8 + intel 10
<br>
compilers.
<br>
<p>&nbsp;&nbsp;The job is not running. Let me explain the configs:
<br>
<p>SGE job script:
<br>
<p>&nbsp;$ cat sge_submit.sh
<br>
#!/bin/bash
<br>
<p>#$ -N OMPI-Blast-Job
<br>
<p>#$ -S /bin/bash
<br>
<p>#$ -cwd
<br>
<p>#$ -e err.$JOB_ID.$JOB_NAME
<br>
<p>#$ -o out.$JOB_ID.$JOB_NAME
<br>
<p>#$ -pe orte 4
<br>
<p>/opt/openmpi_intel/1.2.8/bin/mpirun -np $NSLOTS
<br>
/opt/apps/mpiblast-150-pio_OMPI/bin/mpiblast -p blastp -d
<br>
Mtub_CDC1551_.faa -i 586_seq.fasta -o test.out
<br>
<p>The PE orte is:
<br>
<p>$ qconf -sp orte
<br>
pe_name           orte
<br>
slots             999
<br>
user_lists        NONE
<br>
xuser_lists       NONE
<br>
start_proc_args   /bin/true
<br>
stop_proc_args    /bin/true
<br>
allocation_rule   $fill_up
<br>
control_slaves    FALSE
<br>
job_is_first_task TRUE
<br>
urgency_slots     min
<br>
<p># /opt/openmpi_intel/1.2.8/bin/ompi_info | grep gridengine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.8)
<br>
<p>The SGE error and output files for the job are as follows:
<br>
<p>$ cat err.88.OMPI-Blast-Job
<br>
error: executing task of job 88 failed:
<br>
[compute-0-1.local:06151] ERROR: A daemon on node compute-0-1.local
<br>
failed to start as expected.
<br>
[compute-0-1.local:06151] ERROR: There may be more information available from
<br>
[compute-0-1.local:06151] ERROR: the 'qstat -t' command on the Grid
<br>
Engine tasks.
<br>
[compute-0-1.local:06151] ERROR: If the problem persists, please restart the
<br>
[compute-0-1.local:06151] ERROR: Grid Engine PE job
<br>
[compute-0-1.local:06151] ERROR: The daemon exited unexpectedly with status 1.
<br>
<p>$ cat out.88.OMPI-Blast-Job
<br>
<p>There is nothing in output file.
<br>
<p>The qstat shows that job is running at some node. But on that node,
<br>
there is no mpiblast processes running  as seen by top command.
<br>
<p>The ps command:
<br>
<p># ps -ef | grep mpiblast
<br>
locuz     4018  4017  0 16:25 ?        00:00:00
<br>
/opt/openmpi_intel/1.2.8/bin/mpirun -np 4
<br>
/opt/apps/mpiblast-150-pio_OMPI/bin/mpiblast -p blastp -d
<br>
Mtub_CDC1551_.faa -i 586_seq.fasta -o test.out
<br>
root      4120  4022  0 16:27 pts/0    00:00:00 grep mpiblast
<br>
<p>shows this.
<br>
<p>The ibv_rc_pingpong tests work fine. The output of lsmod:
<br>
<p># lsmod | grep ib
<br>
ib_sdp                 57788  0
<br>
rdma_cm                38292  3 rdma_ucm,rds,ib_sdp
<br>
ib_addr                11400  1 rdma_cm
<br>
ib_local_sa            14864  1 rdma_cm
<br>
ib_mthca              157396  2
<br>
ib_ipoib               83928  0
<br>
ib_umad                20656  0
<br>
ib_ucm                 21256  0
<br>
ib_uverbs              46896  8 rdma_ucm,ib_ucm
<br>
ib_cm                  42536  3 rdma_cm,ib_ipoib,ib_ucm
<br>
ib_sa                  28512  4 rdma_cm,ib_local_sa,ib_ipoib,ib_cm
<br>
ib_mad                 43432  5 ib_local_sa,ib_mthca,ib_umad,ib_cm,ib_sa
<br>
ib_core                70544  14
<br>
rdma_ucm,rds,ib_sdp,rdma_cm,iw_cm,ib_local_sa,ib_mthca,ib_ipoib,ib_umad,ib_ucm,ib_uverbs,ib_cm,ib_sa,ib_mad
<br>
ipv6                  285089  23 ib_ipoib
<br>
libata                124585  1 ata_piix
<br>
scsi_mod              144529  2 libata,sd_mod
<br>
<p>What might be the problem?
<br>
We've used Voltaire OFA Roll from rocks - Gridstack.
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7579.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Previous message:</strong> <a href="7577.php">Biagio Lucini: "[OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7579.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Reply:</strong> <a href="7579.php">Reuti: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
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
