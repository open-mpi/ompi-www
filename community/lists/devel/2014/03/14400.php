<?
$subject_val = "[OMPI devel] doubt on latency result with OpenMPI library";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 04:40:29 2014" -->
<!-- isoreceived="20140327084029" -->
<!-- sent="Thu, 27 Mar 2014 08:40:13 +0000" -->
<!-- isosent="20140327084013" -->
<!-- name="Wang,Yanfei(SYS)" -->
<!-- email="wangyanfei01_at_[hidden]" -->
<!-- subject="[OMPI devel] doubt on latency result with OpenMPI library" -->
<!-- id="90EBD3F3C2BD0E44804EEB54DD5003A45523315D_at_TC-MAIL-MB02.internal.baidu.com" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI devel] doubt on latency result with OpenMPI library<br>
<strong>From:</strong> Wang,Yanfei(SYS) (<em>wangyanfei01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 04:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14401.php">Ralph Castain: "Re: [OMPI devel] doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14399.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;: 	&#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14401.php">Ralph Castain: "Re: [OMPI devel] doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14401.php">Ralph Castain: "Re: [OMPI devel] doubt on latency result with OpenMPI library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi&#163;&#172;
<br>

<br>
HW Test Topology&#163;&#186;
<br>
Ip&#163;&#186;192.168.72.4/24 &#168;C192.168.72.4/24, enable vlan and RoCE
<br>
IB03 server 40G port-- - 40G Ethernet switch ----IB04 server 40G port&#163;&#186; configure it as RoCE link
<br>
IP: 192.168.71.3/24 ---192.168.71.4/24
<br>
IB03 server 10G port &#168;C 10G Ethernet switch &#168;C IB04 server 10G port&#163;&#186; configure it as normal TCP/IP Ethernet link&#163;&#186;&#163;&#168;server management interface&#163;&#169;
<br>

<br>
Mpi configuration&#163;&#186;
<br>
MPI Hosts file&#163;&#186;
<br>
[root_at_bb-nsi-ib04 pt2pt]# cat hosts
<br>
ib03 slots=1
<br>
ib04 slots=1
<br>
DNS hosts
<br>
[root_at_bb-nsi-ib04 pt2pt]# cat /etc/hosts
<br>
192.168.71.3 ib03
<br>
192.168.71.4 ib04
<br>
[root_at_bb-nsi-ib04 pt2pt]#
<br>
This configuration will create 2 nodes for MPI latency evaluation
<br>

<br>
Benchmark:
<br>
osu-micro-benchmarks-4.3
<br>

<br>
result:
<br>

<br>
a.       Enable traffic go between 10G TCP/IP port using following /etc/hosts file
<br>

<br>
root_at_bb-nsi-ib04 pt2pt]# cat /etc/hosts
<br>
192.168.71.3 ib03
<br>
192.168.71.4 ib04
<br>
The average latency is 4.5us of osu_latency, see log following:
<br>
[root_at_bb-nsi-ib04 pt2pt]# mpirun --hostfile hosts -np 2 osu_latency
<br>
# OSU MPI Latency Test v4.3
<br>
# Size          Latency (us)
<br>
0                       4.56
<br>
1                       4.90
<br>
2                       4.90
<br>
4                       4.60
<br>
8                       4.71
<br>
16                      4.72
<br>
32                      5.40
<br>
64                      4.77
<br>
128                     6.74
<br>
256                     7.01
<br>
512                     7.14
<br>
1024                    7.63
<br>
2048                    8.22
<br>
4096                   10.39
<br>
8192                   14.26
<br>
16384                  20.80
<br>
32768                  31.97
<br>
65536                  37.75
<br>
131072                 47.28
<br>
262144                 80.40
<br>
524288                137.65
<br>
1048576               250.17
<br>
2097152               484.71
<br>
4194304               946.01
<br>

<br>

<br>
b.       Enable traffic go between RoCE link using /etc/hosts as following and mpirun &#168;Cmca btl openib,self,sm &#161;&#173;
<br>
[root_at_bb-nsi-ib04 pt2pt]# cat /etc/hosts
<br>
192.168.72.3 ib03
<br>
192.168.72.4 ib04
<br>
Result:
<br>
[root_at_bb-nsi-ib04 pt2pt]# mpirun --hostfile hosts -np 2 --mca btl openib,self,sm --mca btl_openib_cpc_include rdmacm osu_latency
<br>
# OSU MPI Latency Test v4.3
<br>
# Size          Latency (us)
<br>
0                       4.83
<br>
1                       5.17
<br>
2                       5.12
<br>
4                       5.25
<br>
8                       5.38
<br>
16                      5.40
<br>
32                      5.19
<br>
64                      5.04
<br>
128                     6.74
<br>
256                     7.04
<br>
512                     7.34
<br>
1024                    7.91
<br>
2048                    8.17
<br>
4096                   10.39
<br>
8192                   14.22
<br>
16384                  22.05
<br>
32768                  31.68
<br>
65536                  37.57
<br>
131072                 48.25
<br>
262144                 79.98
<br>
524288                137.66
<br>
1048576               251.38
<br>
2097152               485.66
<br>
4194304               947.81
<br>
[root_at_bb-nsi-ib04 pt2pt]#
<br>

<br>
Question:
<br>

<br>
1.       Why do they have similar latency, 5us, which is too small to believe it! In our test environment, it will take more than 50 us to deal with tcp sync and return sync_ack, and also x86 server will take more thans 20us at average to do ip forwarding(test from professional HW tester), so does the latency is reasonable?
<br>

<br>
2.       Normally, the switch will introduces more than 1.5us switch time! Using accelio, a mellanox released opensource rdma library, it will take at least 4 us rtt latency to do simpe ping-pong test. So 5 us MPI latency (TCP/IP and RoCE) above is rather unbelievable&#161;&#173;
<br>

<br>
3.       The fact that the tcp/ip transport and roce RDMA transport acquire same latency  is so puzzling..
<br>

<br>

<br>
Before deeply understanding what happened inside the MPI benchmark, can show us some suggestion? Does the mpirun command works correctly here?
<br>
It must has some mistakes about this test, pls correct me,.
<br>

<br>
Eg: tcp syn&amp;sync ack latency:
<br>
[cid:image001.png_at_01CF49D9.EE47FDA0]
<br>

<br>
Thanks
<br>
-Yanfei
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14400/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-14400/image001.png" alt="image001.png
">
<!-- attachment="image001.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14401.php">Ralph Castain: "Re: [OMPI devel] doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14399.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;: 	&#180;&#240;&#184;&#180;: example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14401.php">Ralph Castain: "Re: [OMPI devel] doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14401.php">Ralph Castain: "Re: [OMPI devel] doubt on latency result with OpenMPI library"</a>
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
