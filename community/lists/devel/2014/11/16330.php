<?
$subject_val = "[OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 02:24:43 2014" -->
<!-- isoreceived="20141125072443" -->
<!-- sent="Mon, 24 Nov 2014 23:24:17 -0800" -->
<!-- isosent="20141125072417" -->
<!-- name="Allan Wu" -->
<!-- email="allwu_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0" -->
<!-- id="CAHT6FhNaUhLtbWbQN0L1DmKMB-mR2WjCeNLAMSL=N81SWjaktA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0<br>
<strong>From:</strong> Allan Wu (<em>allwu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 02:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16331.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16329.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16331.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16331.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Maybe reply:</strong> <a href="16341.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Maybe reply:</strong> <a href="16346.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I have cross-compiled OpenMPI for an embedded ARM Linux. Everything works
<br>
fine for my system based on Linux 3.8.0. I have previously submitted a post
<br>
related to my compilation, which can be found here: <a href="http://www.open-mpi">http://www.open-mpi</a>
<br>
.org/community/lists/devel/2014/04/14440.php. When I recently upgraded my
<br>
Linux kernel to 3.15.0, mpirun begins to stuck at even the helloworld
<br>
program. The program consists only simple APIs: MPI_Init, MPI_Comm_size,
<br>
MPI_Comm_rank, MPI_Finalize. The problem occurs even at 'mpirun -np 1
<br>
./helloworld', and below are the output with --debug-devel (before it got
<br>
stuck):
<br>
[fpga1:00716] sess_dir_finalize: job session dir not empty - leaving
<br>
[fpga1:00716] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0/0
<br>
[fpga1:00716] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0
<br>
[fpga1:00716] top: openmpi-sessions-root_at_fpga1_0
<br>
[fpga1:00716] tmp: /tmp
<br>
[fpga1:00718] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1/0
<br>
[fpga1:00718] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1
<br>
[fpga1:00718] top: openmpi-sessions-root_at_fpga1_0
<br>
[fpga1:00718] tmp: /tmp
<br>
<p>I suspect maybe it is due to incompatible kernel version or some missing
<br>
kernel modules. I tried also with the latest version 1.8.3, and had the
<br>
same problem. Does anyone have any thoughts? I have attached the output of
<br>
'ompi-info --all' with this email.
<br>
<p>Please let me know if I need to provide more information. Thanks in advance!
<br>
<p>Regards,
<br>
<pre>
--
Di Wu (Allan)
PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
Department of Computer Science, UC Los Angeles
Email: allwu_at_[hidden]

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16330/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16330/log.tar.gz">log.tar.gz</a>
</ul>
<!-- attachment="log.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16331.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16329.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16331.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16331.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Maybe reply:</strong> <a href="16341.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Maybe reply:</strong> <a href="16346.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
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
