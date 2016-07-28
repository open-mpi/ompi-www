<?
$subject_val = "[OMPI users] Bad performance when scattering big size of data?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 12:53:59 2010" -->
<!-- isoreceived="20101004165359" -->
<!-- sent="Mon, 4 Oct 2010 11:53:51 -0500" -->
<!-- isosent="20101004165351" -->
<!-- name="Storm Zhang" -->
<!-- email="stormzhg_at_[hidden]" -->
<!-- subject="[OMPI users] Bad performance when scattering big size of data?" -->
<!-- id="AANLkTinxqGd9zMVsE82GKK83dw4cReL4qkxdCzr=+AbP_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Bad performance when scattering big size of data?<br>
<strong>From:</strong> Storm Zhang (<em>stormzhg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 12:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14381.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Previous message:</strong> <a href="14379.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14382.php">Doug Reeder: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14382.php">Doug Reeder: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have 64 compute nodes which are dual qual-core and hyperthreaded CPUs. So
<br>
we have 1024 compute units shown in the ROCKS 5.3 system. I'm trying to
<br>
scatter an array from the master node to the compute nodes using mpiCC and
<br>
mpirun using C++.
<br>
<p>Here is my test:
<br>
<p>The array size is 18KB * Number of compute nodes and is scattered to the
<br>
compute nodes 5000 times repeatly.
<br>
<p>The average running time(seconds):
<br>
<p>100 nodes: 170,
<br>
400 nodes: 690,
<br>
500 nodes: 855,
<br>
600 nodes: 2550,
<br>
700 nodes: 2720,
<br>
800 nodes: 2900,
<br>
<p>There is a big jump of running time from 500 nodes to 600 nodes. Don't know
<br>
what's the problem.
<br>
Tried both in OMPI 1.3.2 and OMPI 1.4.2. Running time is a little faster for
<br>
all the tests in 1.4.2 but the jump still exists.
<br>
Tried using either Bcast function or simply Send/Recv which give very close
<br>
results.
<br>
Tried both in running it directly or using SGE and got the same results.
<br>
<p>The code and ompi_info are attached to this email. The direct running
<br>
command is :
<br>
/opt/openmpi/bin/mpirun --mca btl_tcp_if_include eth0 --machinefile
<br>
../machines -np 600 scatttest
<br>
<p>The ifconfig of head node for eth0 is:
<br>
eth0      Link encap:Ethernet  HWaddr 00:26:B9:56:8B:44
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::226:b9ff:fe56:8b44/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:1096060373 errors:0 dropped:2512622 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:513387679 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:832328807459 (775.1 GiB)  TX bytes:250824621959 (233.5
<br>
GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:106 Memory:d6000000-d6012800
<br>
<p>A typical ifconfig of a compute node is:
<br>
eth0      Link encap:Ethernet  HWaddr 00:21:9B:9A:15:AC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.253  Bcast:192.168.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::221:9bff:fe9a:15ac/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:362716422 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:349967746 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:139699954685 (130.1 GiB)  TX bytes:338207741480 (314.9
<br>
GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:82 Memory:d6000000-d6012800
<br>
<p><p>Does anyone help me out of this? It bothers me a lot.
<br>
<p>Thank you very much.
<br>
<p>Linbao
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14380/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14380/scatttest.cpp">scatttest.cpp</a>
</ul>
<!-- attachment="scatttest.cpp" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14380/ompi_info">ompi_info</a>
</ul>
<!-- attachment="ompi_info" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14381.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Previous message:</strong> <a href="14379.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14382.php">Doug Reeder: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14382.php">Doug Reeder: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
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
