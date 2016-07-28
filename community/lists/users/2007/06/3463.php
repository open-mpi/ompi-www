<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 17:55:22 2007" -->
<!-- isoreceived="20070611215522" -->
<!-- sent="Mon, 11 Jun 2007 22:55:17 +0100" -->
<!-- isosent="20070611215517" -->
<!-- name="Jonathan Underwood" -->
<!-- email="jonathan.underwood_at_[hidden]" -->
<!-- subject="[OMPI users] TCP connection errors" -->
<!-- id="645d17210706111455n42c1ea09w1855e6ae78b5fa5b_at_mail.gmail.com" -->
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
<strong>From:</strong> Jonathan Underwood (<em>jonathan.underwood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 17:55:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3462.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3468.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am seeing problems with a small linux cluster when running OpenMPI
<br>
jobs. The error message I get is:
<br>
<p>[frontend][0,1,0][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=110
<br>
<p>Following the FAQ, I looked to see what this error code corresponds to:
<br>
<p>$ perl -e 'die$!=110'
<br>
Connection timed out at -e line 1.
<br>
<p>This error message occurs the first time one of the compute nodes,
<br>
which are on a private network, attempts to send data to the frontend
<br>
(from where the job was started with mpirun).
<br>
In actual fact, it seems that the error occurs the first time a
<br>
process on the frontend tries to send data to another process on the
<br>
frontend.
<br>
<p>I tried to play about with  things like --mca btl_tcp_if_exclude
<br>
lo,eth0, but that didn't help matters.  Nothing in the FAQ section on
<br>
TCP and routing actually seemed to help.
<br>
<p><p>Any advice would be very welcome
<br>
<p><p>The network configurations are:
<br>
<p>a) frontend (2 network adapters, eth1 private for the cluster):
<br>
<p>$ /sbin/ifconfig
<br>
eth0      Link encap:Ethernet  HWaddr 00:E0:81:30:A1:CE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:128.40.5.39  Bcast:128.40.5.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::2e0:81ff:fe30:a1ce/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:3496038 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:2833685 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:500939570 (477.7 MiB)  TX bytes:671589665 (640.4 MiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:193
<br>
<p>eth1      Link encap:Ethernet  HWaddr 00:E0:81:30:A1:CF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::2e0:81ff:fe30:a1cf/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:2201778 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:2046572 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:188615778 (179.8 MiB)  TX bytes:247305804 (235.8 MiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:201
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:1528 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:1528 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:363101 (354.5 KiB)  TX bytes:363101 (354.5 KiB)
<br>
<p><p><p>$ /sbin/route
<br>
Kernel IP routing table
<br>
Destination     Gateway         Genmask         Flags Metric Ref    Use Iface
<br>
192.168.1.0     *               255.255.255.0   U     0      0        0 eth1
<br>
128.40.5.0      *               255.255.255.0   U     0      0        0 eth0
<br>
default         128.40.5.245    0.0.0.0         UG    0      0        0 eth0
<br>
<p><p><p>b) Compute nodes:
<br>
<p>$ /sbin/ifconfig
<br>
eth0      Link encap:Ethernet  HWaddr 00:E0:81:30:A0:72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.2  Bcast:192.168.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::2e0:81ff:fe30:a072/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:189207 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:203507 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:23075241 (22.0 MiB)  TX bytes:17693363 (16.8 MiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:193
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:185 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:185 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:12644 (12.3 KiB)  TX bytes:12644 (12.3 KiB)
<br>
<p><p>$ /sbin/route
<br>
Kernel IP routing table
<br>
Destination     Gateway         Genmask         Flags Metric Ref    Use Iface
<br>
192.168.1.0     *               255.255.255.0   U     0      0        0 eth0
<br>
default         frontend.cluste 0.0.0.0         UG    0      0        0 eth0
<br>
<p>TIS
<br>
Jonathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3462.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3468.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
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
