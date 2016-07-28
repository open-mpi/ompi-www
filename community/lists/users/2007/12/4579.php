<?
$subject_val = "[OMPI users] large number of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 01:20:22 2007" -->
<!-- isoreceived="20071203062022" -->
<!-- sent="Mon, 03 Dec 2007 15:20:16 +0900" -->
<!-- isosent="20071203062016" -->
<!-- name="hbtcx243_at_[hidden]" -->
<!-- email="hbtcx243_at_[hidden]" -->
<!-- subject="[OMPI users] large number of processes" -->
<!-- id="4753A020.6010408_at_yahoo.co.jp" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI users] large number of processes<br>
<strong>From:</strong> <a href="mailto:hbtcx243_at_[hidden]?Subject=Re:%20[OMPI%20users]%20large%20number%20of%20processes"><em>hbtcx243_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-12-03 01:20:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4580.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Previous message:</strong> <a href="4578.php">de Almeida, Valmor F.: "[OMPI users] Segmentation fault: intel 10.1.008 compilers w/ openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4581.php">Rolf vandeVaart: "Re: [OMPI users] large number of processes"</a>
<li><strong>Reply:</strong> <a href="4581.php">Rolf vandeVaart: "Re: [OMPI users] large number of processes"</a>
<li><strong>Maybe reply:</strong> <a href="4586.php">hbtcx243_at_[hidden]: "Re: [OMPI users] large number of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I installed Open MPI 1.2.4 in Red Hat Enterprise Linux 3. It worked
<br>
fine in normal usage. I tested executions with extremely many
<br>
processes.
<br>
<p>$ mpiexec -n 128 --host node0 --mca btl_tcp_if_include eth0 --mca
<br>
mpool_sm_max_size 2147483647 ./cpi
<br>
<p>$ mpiexec -n 256 --host node0,node1 --mca btl_tcp_if_include eth0 --mca
<br>
mpool_sm_max_size 2147483647 ./cpi
<br>
<p>If I specified the mpiexec options like this, the execution succeeded
<br>
in both cases.
<br>
<p>$ mpiexec -n 256 --host node0 --mca btl_tcp_if_include eth0 --mca
<br>
mpool_sm_max_size 2147483647 ./cpi
<br>
<p>mpiexec noticed that job rank 0 with PID 0 on node node0 exited on
<br>
signal 15 (Terminated).
<br>
252 additional processes aborted (not shown)
<br>
<p>$ mpiexec -n 512 --host node0,node1 --mca btl_tcp_if_include eth0 --mca
<br>
mpool_sm_max_size 2147483647 ./cpi
<br>
<p>mpiexec noticed that job rank 0 with PID 0 on node node0 exited on
<br>
signal 15 (Terminated).
<br>
505 additional processes aborted (not shown)
<br>
<p>If I increased the number of processes, the executions aborted.
<br>
Could I execute 256 processes per node using Open MPI?
<br>
<p>We would like to execute as large number of processes as possible even if
<br>
the performance becomes worse.
<br>
If we use MPICH, we can execute 256 processes per node,
<br>
but the performance of Open MPI may be better.
<br>
We understand we must increase the number of open files next because
<br>
the current implementation uses many sockets.
<br>
<p>SUSUKITA, Ryutaro
<br>
Peta-scale System Interconnect Project
<br>
Fukuoka Industry, Science &amp; Technology Foundation
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4580.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Previous message:</strong> <a href="4578.php">de Almeida, Valmor F.: "[OMPI users] Segmentation fault: intel 10.1.008 compilers w/ openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4581.php">Rolf vandeVaart: "Re: [OMPI users] large number of processes"</a>
<li><strong>Reply:</strong> <a href="4581.php">Rolf vandeVaart: "Re: [OMPI users] large number of processes"</a>
<li><strong>Maybe reply:</strong> <a href="4586.php">hbtcx243_at_[hidden]: "Re: [OMPI users] large number of processes"</a>
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
