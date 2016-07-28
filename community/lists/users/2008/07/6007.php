<?
$subject_val = "[OMPI users] stall with MPI_Scatter and shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 05:25:03 2008" -->
<!-- isoreceived="20080702092503" -->
<!-- sent="Wed, 2 Jul 2008 11:24:51 +0200" -->
<!-- isosent="20080702092451" -->
<!-- name="Willem Vermin" -->
<!-- email="willem_at_[hidden]" -->
<!-- subject="[OMPI users] stall with MPI_Scatter and shared memory" -->
<!-- id="486B4963.2000609_at_sara.nl" -->
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
<strong>Subject:</strong> [OMPI users] stall with MPI_Scatter and shared memory<br>
<strong>From:</strong> Willem Vermin (<em>willem_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-02 05:24:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6008.php">Aditya Vasal: "[OMPI users] Need some help regarding Linpack execution"</a>
<li><strong>Previous message:</strong> <a href="6006.php">Keith Chan: "[OMPI users] Terminating processes started by MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We noticed that the attached mpi program using openmpi (version 1.2.6 or 
<br>
openmpi-1.3a1r18785), stalls.
<br>
<p>compile: mpicc -o scattertest scattertest.c
<br>
run:     mpiexec -n 4 ./scattertest 10000
<br>
<p>This is for a ubuntu 32 bit system, equipped with 1 Gbyte of memory.
<br>
A test on a debian system shows the same results, however on a machine 
<br>
with 8 Gbyte of memory, the number 10000 must be enlarged in order to 
<br>
get a stall happening. The program runs ok when the number is lower:
<br>
<p>&nbsp;&nbsp;&nbsp;mpiexec -n 4 ./scattertest 10
<br>
<p>or when disabling the sm:
<br>
<p>&nbsp;&nbsp;&nbsp;mpiexec -n 4 -mca btl ^sm ./sctattertest 100000
<br>
<p>or when activating the commented out MPI_Barrier call
<br>
<p>The same behaviour is observed with the use of MPI_Scatterv and 
<br>
MPI_Isend - MPI_Irecv
<br>
<p>Please find attached:
<br>
<p>&nbsp;&nbsp;&nbsp;scattertest.c    : the test program
<br>
&nbsp;&nbsp;&nbsp;config.log.bz2   : config.log from configuring openmpi-1.3a1r18785
<br>
&nbsp;&nbsp;&nbsp;ompi_info--all.bz2: output from ompi_info --all
<br>
&nbsp;&nbsp;&nbsp;ifconfig          : output of ifconfig
<br>
<p>Regards,
<br>
<p>Willem
<br>
<p><p><pre>
-- 
Willem Vermin         tel (31)20 5923054/5923000
SARA, Kruislaan 415   fax (31)20 6683167
1098 SJ Amsterdam     willem_at_[hidden]
Nederland




</pre>
<p>
eth0      Link encap:Ethernet  HWaddr 00:12:3F:2B:5D:77  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:145.100.6.148  Bcast:145.100.6.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::212:3fff:fe2b:5d77/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:3918360 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:6003598 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:2628497326 (2.4 GB)  TX bytes:1968595851 (1.8 GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:16 
<br>
<p>lo        Link encap:Local Loopback  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:25381363 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:25381363 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:1022252832 (974.8 MB)  TX bytes:1022252832 (974.8 MB)
<br>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6007/scattertest.c">scattertest.c</a>
</ul>
<!-- attachment="scattertest.c" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6007/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6007/ompi_info--all.bz2">ompi_info--all.bz2</a>
</ul>
<!-- attachment="ompi_info--all.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6008.php">Aditya Vasal: "[OMPI users] Need some help regarding Linpack execution"</a>
<li><strong>Previous message:</strong> <a href="6006.php">Keith Chan: "[OMPI users] Terminating processes started by MPI_Comm_spawn"</a>
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
