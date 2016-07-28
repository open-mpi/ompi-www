<?
$subject_val = "[OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 05:40:46 2016" -->
<!-- isoreceived="20160624094046" -->
<!-- sent="Fri, 24 Jun 2016 12:40:42 +0300" -->
<!-- isosent="20160624094042" -->
<!-- name="knawnd_at_[hidden]" -->
<!-- email="knawnd_at_[hidden]" -->
<!-- subject="[OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers" -->
<!-- id="576D001A.7070601_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers<br>
<strong>From:</strong> <a href="mailto:knawnd_at_[hidden]?Subject=Re:%20[OMPI%20users]%20tcp_peer_send_blocking:%20send()%20to%20socket%209%20failed:%20Broken%20pipe%20(32)%20on%20openvz%20containers"><em>knawnd_at_[hidden]</em></a><br>
<strong>Date:</strong> 2016-06-24 05:40:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29541.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29539.php">Ralph Castain: "Re: [OMPI users] Fwd: Run MPI in Firewall Enviroment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29541.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Reply:</strong> <a href="29541.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all!
<br>
<p>I am trying to build a cluster for MPI jobs using OpenVZ containers (<a href="https://openvz.org/Main_Page">https://openvz.org/Main_Page</a>).
<br>
I've been successfully using openvz+openmpi during many years but can't make it work with OpenMPI 
<br>
1.10.x.
<br>
So I have a server with openvz support enabled. The output of it's ifconfig:
<br>
<p>[root_at_server]$ ifconfig
<br>
<p>eth0   Link encap:Ethernet  HWaddr **************************
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.0.50.35  Bcast:10.0.50.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::ec4:7aff:feb0:cf7e/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:6117448 errors:103 dropped:0 overruns:0 frame:56
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:765411 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:3608033195 (3.3 GiB)  TX bytes:70005631 (66.7 MiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memory:fb120000-fb13ffff
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:65536  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:52 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:52 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:3788 (3.6 KiB)  TX bytes:3788 (3.6 KiB)
<br>
<p>venet0 Link encap:UNSPEC  HWaddr 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::1/128 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST POINTOPOINT RUNNING NOARP  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:486052 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:805540 errors:0 dropped:17 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:26815645 (25.5 MiB)  TX bytes:1186438623 (1.1 GiB)
<br>
<p>There are two openvz containers running on that server:
<br>
[root_at_server ~]# vzlist -a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CTID      NPROC STATUS    IP_ADDR         HOSTNAME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;110         16 running   10.0.50.40      ct110.domain.org
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;111         11 running   10.0.50.41      ct111.domain.org
<br>
<p>On one of the container I've built openmpi 1.10.3 with the following commands:
<br>
$ ./configure --prefix=/opt/openmpi/1.10.3 CXX=g++ --with-cuda=/usr/local/cuda CC=gcc CFLAGS=-m64 
<br>
CXXFLAGS=-m64 2&gt;&amp;1|tee ~/openmpi-1.10.3_v1.log
<br>
<p>$ make -j20
<br>
<p>[root]$ make install
<br>
<p>So openmpi was installed in /opt/openmpi/1.10.3/. The second container is a exact clone of the first 
<br>
one.
<br>
<p>The passwordless ssh was enabled across both containers:
<br>
[user_at_ct110 ~]$ ssh 10.0.50.41
<br>
Last login: Fri Jun 24 16:49:03 2016 from 10.0.50.40
<br>
<p>[user_at_ct111 ~]$ ssh 10.0.50.40
<br>
Last login: Fri Jun 24 16:37:35 2016 from 10.0.50.41
<br>
<p>But the simple test via mpi does not work:
<br>
mpirun -np 1 -host 10.0.50.41 hostname
<br>
[ct111.domain.org:00899] [[13749,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken 
<br>
pipe (32)
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
<p>* not finding the required libraries and/or binaries on
<br>
&nbsp;&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p>* lack of authority to execute on one or more specified nodes.
<br>
&nbsp;&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p>* the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
<br>
&nbsp;&nbsp;&nbsp;Please check with your sys admin to determine the correct location to use.
<br>
<p>*  compilation of the orted with dynamic libraries when static are required
<br>
&nbsp;&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
&nbsp;&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p>* an inability to create a connection back to mpirun due to a
<br>
&nbsp;&nbsp;&nbsp;lack of common network interfaces and/or no route found between
<br>
&nbsp;&nbsp;&nbsp;them. Please check network connectivity (including firewalls
<br>
&nbsp;&nbsp;&nbsp;and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
<p>Although an evironment on the host with 10.0.50.41 ip address seems OK:
<br>
[user_at_ct110 ~]$ ssh 10.0.50.41 env|grep PATH
<br>
LD_LIBRARY_PATH=:/usr/local/cuda/lib64:/opt/openmpi/1.10.3/lib
<br>
PATH=/usr/local/bin:/bin:/usr/bin:/home/user/bin:/usr/local/cuda/bin:/opt/openmpi/1.10.3/bin
<br>
<p>The ifconfig output from the inside containers:
<br>
[root_at_ct110 /]# ifconfig
<br>
lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:65536  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:38 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:38 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:4559 (4.4 KiB)  TX bytes:4559 (4.4 KiB)
<br>
<p>venet0    Link encap:UNSPEC  HWaddr 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  P-t-P:127.0.0.1  Bcast:0.0.0.0  Mask:255.255.255.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST POINTOPOINT RUNNING NOARP  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:772 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:853 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:112128 (109.5 KiB)  TX bytes:122092 (119.2 KiB)
<br>
<p>venet0:0  Link encap:UNSPEC  HWaddr 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.0.50.40  P-t-P:10.0.50.40  Bcast:10.0.50.40  Mask:255.255.255.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST POINTOPOINT RUNNING NOARP  MTU:1500  Metric:1
<br>
<p>[root_at_ct111 /]# ifconfig
<br>
lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:65536  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:24 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:24 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:1200 (1.1 KiB)  TX bytes:1200 (1.1 KiB)
<br>
<p>venet0    Link encap:UNSPEC  HWaddr 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  P-t-P:127.0.0.1  Bcast:0.0.0.0  Mask:255.255.255.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST POINTOPOINT RUNNING NOARP  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:855 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:774 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:122212 (119.3 KiB)  TX bytes:112304 (109.6 KiB)
<br>
<p>venet0:0  Link encap:UNSPEC  HWaddr 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.0.50.41  P-t-P:10.0.50.41  Bcast:10.0.50.41  Mask:255.255.255.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST POINTOPOINT RUNNING NOARP  MTU:1500  Metric:1
<br>
<p>Exactly the same error I get if I try to restrict network interface to venet0:0:
<br>
[user_at_ct110 ~]$ /opt/openmpi/1.10.3/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include venet0:0 
<br>
&nbsp;&nbsp;-np 1 -host 10.0.50.41 hostname
<br>
[ct111.domain.org:00945] [[13704,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken 
<br>
pipe (32)
<br>
[ ... snip....]
<br>
<p>Although I can successfully run hostname and hello.bin executable from the same container where I 
<br>
submit from:
<br>
[user_at_ct110 hello]$ /opt/openmpi/1.10.3/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include 
<br>
venet0:0  -np 1 -host 10.0.50.40 hostname
<br>
ct110.domain.org
<br>
[user_at_ct110 hello]$ /opt/openmpi/1.10.3/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include 
<br>
venet0:0  -np 1 -host 10.0.50.40 ./hello.bin
<br>
Hello world! from processor 0 (name=ct110.domain.org ) out of 1
<br>
wall clock time = 0.000002
<br>
<p>Iptables is off on both containers.
<br>
<p>I would assume that I faced with bug #3339 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/3339">https://svn.open-mpi.org/trac/ompi/ticket/3339</a>) but I 
<br>
have another cluster based on openvz containers with openmpi 1.6.5 which works perfectly for a 
<br>
several years.
<br>
<p>I would appreciate any help on that issue.
<br>
<p>Best regards,
<br>
Nikolay.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29541.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29539.php">Ralph Castain: "Re: [OMPI users] Fwd: Run MPI in Firewall Enviroment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29541.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Reply:</strong> <a href="29541.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
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
