<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  2 08:07:45 2005" -->
<!-- isoreceived="20050902130745" -->
<!-- sent="Fri, 02 Sep 2005 07:07:42 -0600" -->
<!-- isosent="20050902130742" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Problems running svn7132 with more than on proc per	node" -->
<!-- id="43184E9E.2020209_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200509021138.17975.cap_at_nsc.liu.se" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-02 08:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0130.php">Brian Barrett: "Re: [O-MPI users] open-mpi team - good job and a question"</a>
<li><strong>Previous message:</strong> <a href="0128.php">Jeff Squyres: "Re: [O-MPI users] open-mpi team - good job and a question"</a>
<li><strong>In reply to:</strong> <a href="0127.php">Peter Kjellstr&#246;m: "[O-MPI users] Problems running svn7132 with more than on proc per node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Peter,
<br>
<p>We'll look into this...
<br>
<p>Tim
<br>
<p><p>Peter Kjellstr&#246;m wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm playing with a copy of svn7132 that built and installed just fine. At 
</span><br>
<span class="quotelev1">&gt; first everything seemed ok, unlike earlier it now runs on mvapi 
</span><br>
<span class="quotelev1">&gt; automagically :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But then a small testprogram failed and then another. After scratching my head 
</span><br>
<span class="quotelev1">&gt; a while I realised that the pattern was that as soon as I had two ranks 
</span><br>
<span class="quotelev1">&gt; sharing one node and used &quot;mpi_leave_pinned 1&quot; it broke... (segfaulted)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a bidirect point-to-point running two ranks on the same host (this one 
</span><br>
<span class="quotelev1">&gt; actually starts but segfaults half way through):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NODEFILE is &quot;n50 n50&quot;
</span><br>
<span class="quotelev1">&gt; [cap_at_n50 mpi]$ mpirun --machinefile $PBS_NODEFILE --mca mpi_leave_pinned 1 
</span><br>
<span class="quotelev1">&gt; --np 2 mpibibench.ompi7132
</span><br>
<span class="quotelev1">&gt; Using Zero pattern.
</span><br>
<span class="quotelev1">&gt; starting _bidirect_ lat-bw test.
</span><br>
<span class="quotelev1">&gt; Latency:   1.8 &#181;sec   (total)Bandwidth:   0.0 bytes/s (0 x 10000)
</span><br>
<span class="quotelev1">&gt; Latency:   2.0 &#181;sec   (total)Bandwidth:   1.0 Mbytes/s (1 x 10000)
</span><br>
<span class="quotelev1">&gt; Latency:   2.0 &#181;sec   (total)Bandwidth:   2.0 Mbytes/s (2 x 10000)
</span><br>
<span class="quotelev1">&gt; Latency:   1.9 &#181;sec   (total)Bandwidth:   4.2 Mbytes/s (4 x 10000)
</span><br>
<span class="quotelev1">&gt; Latency:   2.0 &#181;sec   (total)Bandwidth:   8.1 Mbytes/s (8 x 10000)
</span><br>
<span class="quotelev1">&gt; Latency:   2.2 &#181;sec   (total)Bandwidth:  14.8 Mbytes/s (16 x 10000)
</span><br>
<span class="quotelev1">&gt; Latency:   2.0 &#181;sec   (total)Bandwidth:  31.7 Mbytes/s (32 x 10000)
</span><br>
<span class="quotelev1">&gt; Latency:   2.2 &#181;sec   (total)Bandwidth:  57.3 Mbytes/s (64 x 10000)
</span><br>
<span class="quotelev1">&gt; Latency:   2.2 &#181;sec   (total)Bandwidth: 114.3 Mbytes/s (128 x 10000)
</span><br>
<span class="quotelev1">&gt; Latency:   2.3 &#181;sec   (total)Bandwidth: 224.8 Mbytes/s (256 x 10000)
</span><br>
<span class="quotelev1">&gt; Latency:   2.8 &#181;sec   (total)Bandwidth: 369.8 Mbytes/s (512 x 10000)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 5879 on node &quot;n50&quot; exited on signal 
</span><br>
<span class="quotelev1">&gt; 11.
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from dmesg:
</span><br>
<span class="quotelev1">&gt; mpibibench.ompi[5879]: segfault at 0000000000000000 rip 0000000000000000 rsp 
</span><br>
<span class="quotelev1">&gt; 0000007fbfffe8e8 error 14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; running on more than one node seems to die instantly (simple all-to-all app):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NODEFILE is &quot;n50 n50 n49 n49&quot;
</span><br>
<span class="quotelev1">&gt; [cap_at_n50 mpi]$ mpirun --machinefile $PBS_NODEFILE --mca mpi_leave_pinned 1 
</span><br>
<span class="quotelev1">&gt; --np 4 alltoall.ompi7132
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 3 with PID 27857 on node &quot;n49&quot; exited on signal 
</span><br>
<span class="quotelev1">&gt; 11.
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and with similar segfault on dmesg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either running with one proc per node or skipping mpi_leave_pinned makes it 
</span><br>
<span class="quotelev1">&gt; work 100% Is this expected?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tia,
</span><br>
<span class="quotelev1">&gt;  Peter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; System config:
</span><br>
<span class="quotelev1">&gt; OS: centos-4.1 x86_64 2.6.9-11smp (el4u1)
</span><br>
<span class="quotelev1">&gt; ompi: svn7132 vpath build with recommended libtool/autoconf/automake
</span><br>
<span class="quotelev1">&gt; compilers: 64-bit icc/ifort 8.1-029
</span><br>
<span class="quotelev1">&gt; configure: ./configure --prefix=xxx --with-btl-mvapi=yyy --disable-cxx 
</span><br>
<span class="quotelev1">&gt; --disable-f90 --disable-io-romio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0130.php">Brian Barrett: "Re: [O-MPI users] open-mpi team - good job and a question"</a>
<li><strong>Previous message:</strong> <a href="0128.php">Jeff Squyres: "Re: [O-MPI users] open-mpi team - good job and a question"</a>
<li><strong>In reply to:</strong> <a href="0127.php">Peter Kjellstr&#246;m: "[O-MPI users] Problems running svn7132 with more than on proc per node"</a>
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
