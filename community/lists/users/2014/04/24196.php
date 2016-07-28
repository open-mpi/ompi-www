<?
$subject_val = "[OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 02:10:03 2014" -->
<!-- isoreceived="20140415061003" -->
<!-- sent="Tue, 15 Apr 2014 11:10:01 +0500" -->
<!-- isosent="20140415061001" -->
<!-- name="Muhammad Ansar Javed" -->
<!-- email="muhammad.ansar_at_[hidden]" -->
<!-- subject="[OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet" -->
<!-- id="CACztQg0Mfru2SLKSW5XaRw5FoTDSaiQxZ9SX_mdC0JPZHgx9eg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet<br>
<strong>From:</strong> Muhammad Ansar Javed (<em>muhammad.ansar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 02:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24197.php">Cristian Butincu: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Previous message:</strong> <a href="24195.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24202.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Reply:</strong> <a href="24202.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am trying to benchmark Open MPI performance on 10G Ethernet network
<br>
between two hosts. The performance numbers of benchmarks are less than
<br>
expected. The maximum bandwidth achieved by OMPI-C is 5678 Mbps and I was
<br>
expecting around 9000+ Mbps. Moreover latency is also quite higher than
<br>
expected, ranging from 37 to 59 us. Here is complete set of numbers.
<br>
<p><p><p>*LatencyOpen MPI C    Size    Time (us)*
<br>
1         37.76
<br>
2         37.75
<br>
4         37.78
<br>
8         55.17
<br>
16       37.89
<br>
32       39.08
<br>
64       37.78
<br>
128     59.46
<br>
256     39.37
<br>
512     40.39
<br>
1024   47.18
<br>
2048   47.84
<br>
<p><p><p><p>*BandwidthOpen MPI C    Size (Bytes)    Bandwidth (Mbps)*
<br>
2048               412.22
<br>
4096               539.59
<br>
8192               827.73
<br>
16384             1655.35
<br>
32768             3274.3
<br>
65536             1995.22
<br>
131072           3270.84
<br>
262144           4316.22
<br>
524288           5019.46
<br>
1048576         5236.17
<br>
2097152         5362.61
<br>
4194304         5495.2
<br>
8388608         5565.32
<br>
16777216       5678.32
<br>
<p><p>My environments consists of two hosts having point-to-point (switch-less)
<br>
10Gbps Ethernet connection.  Environment (OS, user, directory structure
<br>
etc) on both hosts is exactly same. There is no NAS or shared file system
<br>
between both hosts. Following are configuration and job launching commands
<br>
that I am using. Moreover, I have attached output of script ompi_info --all.
<br>
<p>Configuration commmand: ./configure --enable-mpi-java
<br>
--prefix=/home/mpj/installed/openmpi_installed CC=/usr/bin/gcc
<br>
--disable-mpi-fortran
<br>
<p>Job launching command: mpirun -np 2 -hostfile machines -npernode 1
<br>
./latency.out
<br>
<p>Are these numbers okay? If not then please suggest performance tuning
<br>
steps...
<br>
<p>Thanks
<br>
<p><pre>
--
Ansar Javed
HPC Lab
SEECS NUST
Contact: +92 334 438 9394
Email: muhammad.ansar_at_[hidden]

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24196/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24196/ompi_info.tar.bz2">ompi_info.tar.bz2</a>
</ul>
<!-- attachment="ompi_info.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24197.php">Cristian Butincu: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Previous message:</strong> <a href="24195.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24202.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Reply:</strong> <a href="24202.php">Ralph Castain: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
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
