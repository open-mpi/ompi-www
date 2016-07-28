<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  2 04:38:23 2005" -->
<!-- isoreceived="20050902093823" -->
<!-- sent="Fri, 2 Sep 2005 11:38:13 +0200" -->
<!-- isosent="20050902093813" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="[O-MPI users] Problems running svn7132 with more than on proc per node" -->
<!-- id="200509021138.17975.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-15" -->
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
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-02 04:38:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0128.php">Jeff Squyres: "Re: [O-MPI users] open-mpi team - good job and a question"</a>
<li><strong>Previous message:</strong> <a href="0126.php">Borenstein, Bernard S: "[O-MPI users] open-mpi team - good job and a question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0129.php">Tim S. Woodall: "Re: [O-MPI users] Problems running svn7132 with more than on proc per	node"</a>
<li><strong>Reply:</strong> <a href="0129.php">Tim S. Woodall: "Re: [O-MPI users] Problems running svn7132 with more than on proc per	node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm playing with a copy of svn7132 that built and installed just fine. At 
<br>
first everything seemed ok, unlike earlier it now runs on mvapi 
<br>
automagically :-)
<br>
<p>But then a small testprogram failed and then another. After scratching my head 
<br>
a while I realised that the pattern was that as soon as I had two ranks 
<br>
sharing one node and used &quot;mpi_leave_pinned 1&quot; it broke... (segfaulted)
<br>
<p>Here is a bidirect point-to-point running two ranks on the same host (this one 
<br>
actually starts but segfaults half way through):
<br>
<p>NODEFILE is &quot;n50 n50&quot;
<br>
[cap_at_n50 mpi]$ mpirun --machinefile $PBS_NODEFILE --mca mpi_leave_pinned 1 
<br>
--np 2 mpibibench.ompi7132
<br>
Using Zero pattern.
<br>
starting _bidirect_ lat-bw test.
<br>
Latency:   1.8 &#181;sec   (total)Bandwidth:   0.0 bytes/s (0 x 10000)
<br>
Latency:   2.0 &#181;sec   (total)Bandwidth:   1.0 Mbytes/s (1 x 10000)
<br>
Latency:   2.0 &#181;sec   (total)Bandwidth:   2.0 Mbytes/s (2 x 10000)
<br>
Latency:   1.9 &#181;sec   (total)Bandwidth:   4.2 Mbytes/s (4 x 10000)
<br>
Latency:   2.0 &#181;sec   (total)Bandwidth:   8.1 Mbytes/s (8 x 10000)
<br>
Latency:   2.2 &#181;sec   (total)Bandwidth:  14.8 Mbytes/s (16 x 10000)
<br>
Latency:   2.0 &#181;sec   (total)Bandwidth:  31.7 Mbytes/s (32 x 10000)
<br>
Latency:   2.2 &#181;sec   (total)Bandwidth:  57.3 Mbytes/s (64 x 10000)
<br>
Latency:   2.2 &#181;sec   (total)Bandwidth: 114.3 Mbytes/s (128 x 10000)
<br>
Latency:   2.3 &#181;sec   (total)Bandwidth: 224.8 Mbytes/s (256 x 10000)
<br>
Latency:   2.8 &#181;sec   (total)Bandwidth: 369.8 Mbytes/s (512 x 10000)
<br>
mpirun noticed that job rank 0 with PID 5879 on node &quot;n50&quot; exited on signal 
<br>
11.
<br>
1 additional process aborted (not shown)
<br>
<p>from dmesg:
<br>
mpibibench.ompi[5879]: segfault at 0000000000000000 rip 0000000000000000 rsp 
<br>
0000007fbfffe8e8 error 14
<br>
<p>running on more than one node seems to die instantly (simple all-to-all app):
<br>
<p>NODEFILE is &quot;n50 n50 n49 n49&quot;
<br>
[cap_at_n50 mpi]$ mpirun --machinefile $PBS_NODEFILE --mca mpi_leave_pinned 1 
<br>
--np 4 alltoall.ompi7132
<br>
mpirun noticed that job rank 3 with PID 27857 on node &quot;n49&quot; exited on signal 
<br>
11.
<br>
3 additional processes aborted (not shown)
<br>
<p>and with similar segfault on dmesg
<br>
<p>Either running with one proc per node or skipping mpi_leave_pinned makes it 
<br>
work 100% Is this expected?
<br>
<p>tia,
<br>
&nbsp;Peter
<br>
<p>System config:
<br>
OS: centos-4.1 x86_64 2.6.9-11smp (el4u1)
<br>
ompi: svn7132 vpath build with recommended libtool/autoconf/automake
<br>
compilers: 64-bit icc/ifort 8.1-029
<br>
configure: ./configure --prefix=xxx --with-btl-mvapi=yyy --disable-cxx 
<br>
--disable-f90 --disable-io-romio
<br>
<p><pre>
-- 
------------------------------------------------------------
  Peter Kjellstr&#246;m               |
  National Supercomputer Centre  |
  Sweden                         | <a href="http://www.nsc.liu.se">http://www.nsc.liu.se</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0127/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0128.php">Jeff Squyres: "Re: [O-MPI users] open-mpi team - good job and a question"</a>
<li><strong>Previous message:</strong> <a href="0126.php">Borenstein, Bernard S: "[O-MPI users] open-mpi team - good job and a question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0129.php">Tim S. Woodall: "Re: [O-MPI users] Problems running svn7132 with more than on proc per	node"</a>
<li><strong>Reply:</strong> <a href="0129.php">Tim S. Woodall: "Re: [O-MPI users] Problems running svn7132 with more than on proc per	node"</a>
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
