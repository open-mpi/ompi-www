<?
$subject_val = "Re: [OMPI users] large number of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 06:06:41 2007" -->
<!-- isoreceived="20071204110641" -->
<!-- sent="Tue, 04 Dec 2007 20:06:34 +0900" -->
<!-- isosent="20071204110634" -->
<!-- name="hbtcx243_at_[hidden]" -->
<!-- email="hbtcx243_at_[hidden]" -->
<!-- subject="Re: [OMPI users] large number of processes" -->
<!-- id="475534BA.7040800_at_yahoo.co.jp" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="[OMPI users] large number of processes" -->
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
<strong>From:</strong> <a href="mailto:hbtcx243_at_[hidden]?Subject=Re:%20[OMPI%20users]%20large%20number%20of%20processes"><em>hbtcx243_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-12-04 06:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4587.php">Åke Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4585.php">&#197;ke Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers w/	openmpi-1.2.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="4579.php">hbtcx243_at_[hidden]: "[OMPI users] large number of processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; I managed to run a 256 process job on a single node. I ran a simple test
</span><br>
<span class="quotelev1">&gt; in which all processes send a message to all others.
</span><br>
<span class="quotelev1">&gt; This was using Sun's Binary Distribution of Open MPI on Solaris which is
</span><br>
<span class="quotelev1">&gt; based on r16572 of the 1.2 branch. The machine had 8 cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; burl-ct-v40z-0 49 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpirun --mca
</span><br>
<span class="quotelev1">&gt; mpool_sm_max_size 2147483647 -np 256 connectivity_c
</span><br>
<span class="quotelev1">&gt; Connectivity test on 256 processes PASSED.
</span><br>
<span class="quotelev1">&gt; burl-ct-v40z-0 50 =&gt;
</span><br>
<span class="quotelev1">&gt; burl-ct-v40z-0 50 =&gt;/opt/SUNWhpc/HPC7.1/bin/mpirun --mca
</span><br>
<span class="quotelev1">&gt; mpool_sm_max_size 2147483647 -np 300 connectivity_c -v
</span><br>
<span class="quotelev1">&gt; Connectivity test on 300 processes PASSED.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; burl-ct-v40z-0 54 =&gt;limit
</span><br>
<span class="quotelev1">&gt; cputime unlimited
</span><br>
<span class="quotelev1">&gt; filesize unlimited
</span><br>
<span class="quotelev1">&gt; datasize unlimited
</span><br>
<span class="quotelev1">&gt; stacksize 10240 kbytes
</span><br>
<span class="quotelev1">&gt; coredumpsize 0 kbytes
</span><br>
<span class="quotelev1">&gt; vmemoryuse unlimited
</span><br>
<span class="quotelev1">&gt; descriptors 65536
</span><br>
<span class="quotelev1">&gt; burl-ct-v40z-0 55 =&gt;
</span><br>
<p>Thank you for Solaris results.
<br>
I compared your environment with the user limit of our cluster.
<br>
The limit of open files seemed too small even for executing 256
<br>
processes.If we increased the limit,
<br>
I was able to execute 256 processes per node.
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
<li><strong>Next message:</strong> <a href="4587.php">Åke Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4585.php">&#197;ke Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers w/	openmpi-1.2.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="4579.php">hbtcx243_at_[hidden]: "[OMPI users] large number of processes"</a>
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
