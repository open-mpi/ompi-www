<?
$subject_val = "Re: [OMPI users] large number of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 11:24:05 2007" -->
<!-- isoreceived="20071203162405" -->
<!-- sent="Mon, 03 Dec 2007 11:28:13 -0500" -->
<!-- isosent="20071203162813" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] large number of processes" -->
<!-- id="47542E9D.4070207_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4753A020.6010408_at_yahoo.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] large number of processes<br>
<strong>From:</strong> Rolf vandeVaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-03 11:28:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4582.php">Jon Mason: "[OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
<li><strong>Previous message:</strong> <a href="4580.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>In reply to:</strong> <a href="4579.php">hbtcx243_at_[hidden]: "[OMPI users] large number of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4586.php">hbtcx243_at_[hidden]: "Re: [OMPI users] large number of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
I managed to run a 256 process job on a single node. I ran a simple test 
<br>
in which all processes send a message to all others.
<br>
This was using Sun's Binary Distribution of Open MPI on Solaris which is 
<br>
based on r16572 of the 1.2 branch.  The machine had 8 cores.
<br>
<p>&nbsp;burl-ct-v40z-0 49 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpirun --mca 
<br>
mpool_sm_max_size 2147483647 -np 256 connectivity_c
<br>
Connectivity test on 256 processes PASSED.
<br>
&nbsp;burl-ct-v40z-0 50 =&gt;
<br>
&nbsp;burl-ct-v40z-0 50 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpirun --mca 
<br>
mpool_sm_max_size 2147483647 -np 300 connectivity_c -v
<br>
Connectivity test on 300 processes PASSED.
<br>
<p>&nbsp;burl-ct-v40z-0 54 =&gt;limit
<br>
cputime     unlimited
<br>
filesize     unlimited
<br>
datasize     unlimited
<br>
stacksize     10240 kbytes
<br>
coredumpsize     0 kbytes
<br>
vmemoryuse     unlimited
<br>
descriptors     65536
<br>
&nbsp;burl-ct-v40z-0 55 =&gt;
<br>
<p><p><p>hbtcx243_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; I installed Open MPI 1.2.4 in Red Hat Enterprise Linux 3. It worked
</span><br>
<span class="quotelev1">&gt; fine in normal usage. I tested executions with extremely many
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 128 --host node0 --mca btl_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev1">&gt; mpool_sm_max_size 2147483647 ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 256 --host node0,node1 --mca btl_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev1">&gt; mpool_sm_max_size 2147483647 ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I specified the mpiexec options like this, the execution succeeded
</span><br>
<span class="quotelev1">&gt; in both cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 256 --host node0 --mca btl_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev1">&gt; mpool_sm_max_size 2147483647 ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that job rank 0 with PID 0 on node node0 exited on
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 252 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 512 --host node0,node1 --mca btl_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev1">&gt; mpool_sm_max_size 2147483647 ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that job rank 0 with PID 0 on node node0 exited on
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 505 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I increased the number of processes, the executions aborted.
</span><br>
<span class="quotelev1">&gt; Could I execute 256 processes per node using Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We would like to execute as large number of processes as possible even if
</span><br>
<span class="quotelev1">&gt; the performance becomes worse.
</span><br>
<span class="quotelev1">&gt; If we use MPICH, we can execute 256 processes per node,
</span><br>
<span class="quotelev1">&gt; but the performance of Open MPI may be better.
</span><br>
<span class="quotelev1">&gt; We understand we must increase the number of open files next because
</span><br>
<span class="quotelev1">&gt; the current implementation uses many sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SUSUKITA, Ryutaro
</span><br>
<span class="quotelev1">&gt; Peta-scale System Interconnect Project
</span><br>
<span class="quotelev1">&gt; Fukuoka Industry, Science &amp; Technology Foundation
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
<li><strong>Next message:</strong> <a href="4582.php">Jon Mason: "[OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
<li><strong>Previous message:</strong> <a href="4580.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>In reply to:</strong> <a href="4579.php">hbtcx243_at_[hidden]: "[OMPI users] large number of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4586.php">hbtcx243_at_[hidden]: "Re: [OMPI users] large number of processes"</a>
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
