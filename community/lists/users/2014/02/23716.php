<?
$subject_val = "[OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 12:20:06 2014" -->
<!-- isoreceived="20140228172006" -->
<!-- sent="Fri, 28 Feb 2014 10:20:20 -0700" -->
<!-- isosent="20140228172020" -->
<!-- name="Beichuan Yan" -->
<!-- email="beichuan.yan_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI job initializing problem" -->
<!-- id="D67303F39678724DA65819E042CB369892A81D0778_at_EXC2.ad.colorado.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI job initializing problem<br>
<strong>From:</strong> Beichuan Yan (<em>beichuan.yan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 12:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23717.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23715.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23717.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23717.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I am running jobs on clusters with Infiniband connection. They installed OpenMPI v1.5.4 via REDHAT 6 yum package). My problem is that although my jobs gets queued and started by PBS PRO quickly, most of the time they don't really run (occasionally they really run) and give error info like this (even though there are a lot of CPU/IB resource available):
<br>
<p>[r2i6n7][[25564,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.159.156 failed: Connection refused (111)
<br>
<p>And even though when a job gets started and runs well, it prompts this error:
<br>
--------------------------------------------------------------------------
<br>
WARNING: There was an error initializing an OpenFabrics device.
<br>
&nbsp;&nbsp;Local host:   r1i2n6
<br>
&nbsp;&nbsp;Local device: mlx4_0
<br>
--------------------------------------------------------------------------
<br>
<p>1. Here is the info from one of the compute nodes:
<br>
-bash-4.1$ /sbin/ifconfig
<br>
eth0      Link encap:Ethernet  HWaddr 8C:89:A5:E3:D2:96
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.159.205  Bcast:192.168.159.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::8e89:a5ff:fee3:d296/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:48879864 errors:0 dropped:0 overruns:17 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:39286060 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:54771093645 (51.0 GiB)  TX bytes:37512462596 (34.9 GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memory:dfc00000-dfc20000
<br>
<p>Ifconfig uses the ioctl access method to get the full address information, which limits hardware addresses to 8 bytes.
<br>
Because Infiniband address has 20 bytes, only the first 8 bytes are displayed correctly.
<br>
Ifconfig is obsolete! For replacement check ip.
<br>
ib0       Link encap:InfiniBand  HWaddr 80:00:00:48:FE:C0:00:00:00:00:00:00:00:00:00:00:00:00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.148.0.114  Bcast:10.148.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::202:c903:fb:3489/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:43807414 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:10534050 errors:0 dropped:24 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:47824448125 (44.5 GiB)  TX bytes:44764010514 (41.6 GiB)
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:17292 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:17292 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:1492453 (1.4 MiB)  TX bytes:1492453 (1.4 MiB)
<br>
<p>-bash-4.1$ chkconfig --list iptables
<br>
iptables        0:off   1:off   2:on    3:on    4:on    5:on    6:off
<br>
<p>2. I tried various parameters below but none of them can assure my jobs get initialized and run:
<br>
#TCP=&quot;--mca btl ^tcp&quot;
<br>
#TCP=&quot;--mca btl self,openib&quot;
<br>
#TCP=&quot;--mca btl_tcp_if_exclude lo&quot;
<br>
#TCP=&quot;--mca btl_tcp_if_include eth0&quot;
<br>
#TCP=&quot;--mca btl_tcp_if_include eth0, ib0&quot;
<br>
#TCP=&quot;--mca btl_tcp_if_exclude 192.168.0.0/24,127.0.0.1/8 --mca oob_tcp_if_exclude 192.168.0.0/24,127.0.0.1/8&quot;
<br>
#TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
<br>
mpirun $TCP -hostfile $PBS_NODEFILE -np 8 ./paraEllip3d input.txt
<br>
<p>3. Then I turned to Intel MPI, which surprisingly starts and runs my job correctly each time (though it is a little slower than OpenMPI, maybe 15% slower, but it works each time).
<br>
<p>Can you please advise? Many thanks.
<br>
<p>Sincerely,
<br>
Beichuan Yan
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23716/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23717.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23715.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23717.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23717.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
