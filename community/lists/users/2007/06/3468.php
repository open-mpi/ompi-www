<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 00:09:24 2007" -->
<!-- isoreceived="20070612040924" -->
<!-- sent="Tue, 12 Jun 2007 00:08:48 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20070612040848" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP connection errors" -->
<!-- id="Pine.WNT.4.64.0706120005310.1488_at_voyager" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="645d17210706111455n42c1ea09w1855e6ae78b5fa5b_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 00:08:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3469.php">Terry Frankcombe: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Previous message:</strong> <a href="3467.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>In reply to:</strong> <a href="3463.php">Jonathan Underwood: "[OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3476.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3476.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jonathan,
<br>
<p>It will be difficult to make it works in this configuration. The problem 
<br>
is that on the head node the network interface that have to be used is 
<br>
eth1 while on the compute nodes is eth0. Therefore, the tcp_if_include 
<br>
will not help ...
<br>
<p>Now, if you only start processes on the compute nodes you will not have to 
<br>
face this problem. Right now, I think this is the safest approach.
<br>
<p>We have a patch for this kind of problems, but it's not yet in the trunk. 
<br>
I let you know as soon as we commit it and then you will have to use the 
<br>
unstable version until the patch make its way into a stable version.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Mon, 11 Jun 2007, Jonathan Underwood wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am seeing problems with a small linux cluster when running OpenMPI
</span><br>
<span class="quotelev1">&gt; jobs. The error message I get is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [frontend][0,1,0][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=110
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following the FAQ, I looked to see what this error code corresponds to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ perl -e 'die$!=110'
</span><br>
<span class="quotelev1">&gt; Connection timed out at -e line 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error message occurs the first time one of the compute nodes,
</span><br>
<span class="quotelev1">&gt; which are on a private network, attempts to send data to the frontend
</span><br>
<span class="quotelev1">&gt; (from where the job was started with mpirun).
</span><br>
<span class="quotelev1">&gt; In actual fact, it seems that the error occurs the first time a
</span><br>
<span class="quotelev1">&gt; process on the frontend tries to send data to another process on the
</span><br>
<span class="quotelev1">&gt; frontend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to play about with  things like --mca btl_tcp_if_exclude
</span><br>
<span class="quotelev1">&gt; lo,eth0, but that didn't help matters.  Nothing in the FAQ section on
</span><br>
<span class="quotelev1">&gt; TCP and routing actually seemed to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice would be very welcome
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The network configurations are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) frontend (2 network adapters, eth1 private for the cluster):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:E0:81:30:A1:CE
</span><br>
<span class="quotelev1">&gt;          inet addr:128.40.5.39  Bcast:128.40.5.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: fe80::2e0:81ff:fe30:a1ce/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:3496038 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:2833685 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;          RX bytes:500939570 (477.7 MiB)  TX bytes:671589665 (640.4 MiB)
</span><br>
<span class="quotelev1">&gt;          Interrupt:193
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:E0:81:30:A1:CF
</span><br>
<span class="quotelev1">&gt;          inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: fe80::2e0:81ff:fe30:a1cf/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:2201778 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:2046572 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;          RX bytes:188615778 (179.8 MiB)  TX bytes:247305804 (235.8 MiB)
</span><br>
<span class="quotelev1">&gt;          Interrupt:201
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;          UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:1528 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:1528 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;          RX bytes:363101 (354.5 KiB)  TX bytes:363101 (354.5 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /sbin/route
</span><br>
<span class="quotelev1">&gt; Kernel IP routing table
</span><br>
<span class="quotelev1">&gt; Destination     Gateway         Genmask         Flags Metric Ref    Use Iface
</span><br>
<span class="quotelev1">&gt; 192.168.1.0     *               255.255.255.0   U     0      0        0 eth1
</span><br>
<span class="quotelev1">&gt; 128.40.5.0      *               255.255.255.0   U     0      0        0 eth0
</span><br>
<span class="quotelev1">&gt; default         128.40.5.245    0.0.0.0         UG    0      0        0 eth0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) Compute nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:E0:81:30:A0:72
</span><br>
<span class="quotelev1">&gt;          inet addr:192.168.1.2  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: fe80::2e0:81ff:fe30:a072/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:189207 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:203507 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;          RX bytes:23075241 (22.0 MiB)  TX bytes:17693363 (16.8 MiB)
</span><br>
<span class="quotelev1">&gt;          Interrupt:193
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;          UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:185 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:185 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;          RX bytes:12644 (12.3 KiB)  TX bytes:12644 (12.3 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /sbin/route
</span><br>
<span class="quotelev1">&gt; Kernel IP routing table
</span><br>
<span class="quotelev1">&gt; Destination     Gateway         Genmask         Flags Metric Ref    Use Iface
</span><br>
<span class="quotelev1">&gt; 192.168.1.0     *               255.255.255.0   U     0      0        0 eth0
</span><br>
<span class="quotelev1">&gt; default         frontend.cluste 0.0.0.0         UG    0      0        0 eth0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIS
</span><br>
<span class="quotelev1">&gt; Jonathan
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
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3469.php">Terry Frankcombe: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Previous message:</strong> <a href="3467.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>In reply to:</strong> <a href="3463.php">Jonathan Underwood: "[OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3476.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3476.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
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
