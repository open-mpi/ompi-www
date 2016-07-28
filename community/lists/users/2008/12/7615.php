<?
$subject_val = "[OMPI users] HP CQ with status LOCAL LENGTH ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 29 04:40:17 2008" -->
<!-- isoreceived="20081229094017" -->
<!-- sent="Mon, 29 Dec 2008 15:10:13 +0530" -->
<!-- isosent="20081229094013" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] HP CQ with status LOCAL LENGTH ERROR" -->
<!-- id="cb60cbc40812290140p1a9d3c66h5bf6adbc7b8b5b1f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] HP CQ with status LOCAL LENGTH ERROR<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-29 04:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7616.php">Biagio Lucini: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Previous message:</strong> <a href="7614.php">Terry Frankcombe: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>The MPI-Blast-PIO-1.5.0 is installed with Open MPI 1.2.8 + intel 10
<br>
compilers on Rocks-4.3 + Voltaire Infiniband + Voltaire Grid stack OFA
<br>
roll.
<br>
<p>The 8 process parallel job is submitted through SGE:
<br>
<p>$ cat sge_submit.sh
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
<p>#$ -pe orte 8
<br>
export LD_LIBRARY_PATH=/opt/openmpi_intel/1.2.8/lib:/opt/intel/cce/10.1.018/lib:/opt/gridengine/lib/lx26-amd64
<br>
<p>#$ -V
<br>
<p>/opt/openmpi_intel/1.2.8/bin/mpirun -np $NSLOTS
<br>
/opt/apps/mpiblast-150-pio_OMPI/bin/mpiblast -p blastp -d
<br>
Mtub_CDC1551_.faa -i 586_seq.fasta -o test8.out
<br>
<p>Everytime it is failing with folowing error message:
<br>
<p>$ cat err.117.OMPI-Blast-Job
<br>
[0,1,7][btl_openib_component.c:1371:btl_openib_component_progress]
<br>
from compute-0-5.local to: compute-0-11.local error polling HP CQ with
<br>
status LOCAL LENGTH ERROR status number 1 for wr_id 11990008 opcode 42
<br>
4       0.481518        Bailing out with signal 15
<br>
[compute-0-5.local:25702] MPI_ABORT invoked on rank 4 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
5       0.487255        Bailing out with signal 15
<br>
[compute-0-5.local:25703] MPI_ABORT invoked on rank 5 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
6       0.658543        Bailing out with signal 15
<br>
[compute-0-5.local:25704] MPI_ABORT invoked on rank 6 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
0       0.481974        Bailing out with signal 15
<br>
[compute-0-11.local:25698] MPI_ABORT invoked on rank 0 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
1       0.660788        Bailing out with signal 15
<br>
[compute-0-11.local:25699] MPI_ABORT invoked on rank 1 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
2       0.67406 Bailing out with signal 15
<br>
[compute-0-11.local:25700] MPI_ABORT invoked on rank 2 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
3       0.680739        Bailing out with signal 15
<br>
[compute-0-11.local:25701] MPI_ABORT invoked on rank 3 in communicator
<br>
MPI_COMM_WORLD with errorcode 0
<br>
<p>This happens only with MPIBlast. The parallel gromacs jobs run very well.
<br>
<p>Let me know why this error is appering &amp; how to resolve it? Is it due
<br>
to Rocks Gridstack OFA roll?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7616.php">Biagio Lucini: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Previous message:</strong> <a href="7614.php">Terry Frankcombe: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- nextthread="start" -->
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
