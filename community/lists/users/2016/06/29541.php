<?
$subject_val = "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 06:43:53 2016" -->
<!-- isoreceived="20160624104353" -->
<!-- sent="Fri, 24 Jun 2016 10:43:50 +0000" -->
<!-- isosent="20160624104350" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers" -->
<!-- id="DAE44F2B-6FD4-4D1C-9E7A-DBEF4E339323_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="576D001A.7070601_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-24 06:43:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29542.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29540.php">knawnd_at_[hidden]: "[OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>In reply to:</strong> <a href="29540.php">knawnd_at_[hidden]: "[OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29542.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Reply:</strong> <a href="29542.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nikolay --
<br>
<p>Thanks for all the detail!  That helps a tremendous amount.
<br>
<p>Open MPI actually uses IP networks in *two* ways:
<br>
<p>1. for command and control
<br>
2. for MPI communications
<br>
<p>Your use of btl_tcp_if_include regulates #2, but not #1 -- you need to add another MCA param to regulate #1.  Try this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_tcp_if_include venet0:0 --mca oob_tcp_if_include venet0:0 ...
<br>
<p>See if that works.
<br>
<p><p><span class="quotelev1">&gt; On Jun 24, 2016, at 5:40 AM, knawnd_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to build a cluster for MPI jobs using OpenVZ containers (<a href="https://openvz.org/Main_Page">https://openvz.org/Main_Page</a>).
</span><br>
<span class="quotelev1">&gt; I've been successfully using openvz+openmpi during many years but can't make it work with OpenMPI 1.10.x.
</span><br>
<span class="quotelev1">&gt; So I have a server with openvz support enabled. The output of it's ifconfig:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_server]$ ifconfig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth0   Link encap:Ethernet  HWaddr **************************
</span><br>
<span class="quotelev1">&gt;          inet addr:10.0.50.35  Bcast:10.0.50.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: fe80::ec4:7aff:feb0:cf7e/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:6117448 errors:103 dropped:0 overruns:0 frame:56
</span><br>
<span class="quotelev1">&gt;          TX packets:765411 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;          RX bytes:3608033195 (3.3 GiB)  TX bytes:70005631 (66.7 MiB)
</span><br>
<span class="quotelev1">&gt;          Memory:fb120000-fb13ffff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;          UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:52 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:52 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;          RX bytes:3788 (3.6 KiB)  TX bytes:3788 (3.6 KiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; venet0 Link encap:UNSPEC  HWaddr 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;          inet6 addr: fe80::1/128 Scope:Link
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST POINTOPOINT RUNNING NOARP  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:486052 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:805540 errors:0 dropped:17 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;          RX bytes:26815645 (25.5 MiB)  TX bytes:1186438623 (1.1 GiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are two openvz containers running on that server:
</span><br>
<span class="quotelev1">&gt; [root_at_server ~]# vzlist -a
</span><br>
<span class="quotelev1">&gt;      CTID      NPROC STATUS    IP_ADDR         HOSTNAME
</span><br>
<span class="quotelev1">&gt;       110         16 running   10.0.50.40      ct110.domain.org
</span><br>
<span class="quotelev1">&gt;       111         11 running   10.0.50.41      ct111.domain.org
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On one of the container I've built openmpi 1.10.3 with the following commands:
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/opt/openmpi/1.10.3 CXX=g++ --with-cuda=/usr/local/cuda CC=gcc CFLAGS=-m64 CXXFLAGS=-m64 2&gt;&amp;1|tee ~/openmpi-1.10.3_v1.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ make -j20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root]$ make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So openmpi was installed in /opt/openmpi/1.10.3/. The second container is a exact clone of the first one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The passwordless ssh was enabled across both containers:
</span><br>
<span class="quotelev1">&gt; [user_at_ct110 ~]$ ssh 10.0.50.41
</span><br>
<span class="quotelev1">&gt; Last login: Fri Jun 24 16:49:03 2016 from 10.0.50.40
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [user_at_ct111 ~]$ ssh 10.0.50.40
</span><br>
<span class="quotelev1">&gt; Last login: Fri Jun 24 16:37:35 2016 from 10.0.50.41
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the simple test via mpi does not work:
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 -host 10.0.50.41 hostname
</span><br>
<span class="quotelev1">&gt; [ct111.domain.org:00899] [[13749,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;  one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;  settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;  Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;  Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;  (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;  one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;  lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;  them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;  and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although an evironment on the host with 10.0.50.41 ip address seems OK:
</span><br>
<span class="quotelev1">&gt; [user_at_ct110 ~]$ ssh 10.0.50.41 env|grep PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=:/usr/local/cuda/lib64:/opt/openmpi/1.10.3/lib
</span><br>
<span class="quotelev1">&gt; PATH=/usr/local/bin:/bin:/usr/bin:/home/user/bin:/usr/local/cuda/bin:/opt/openmpi/1.10.3/bin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ifconfig output from the inside containers:
</span><br>
<span class="quotelev1">&gt; [root_at_ct110 /]# ifconfig
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;          UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:38 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:38 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;          RX bytes:4559 (4.4 KiB)  TX bytes:4559 (4.4 KiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; venet0    Link encap:UNSPEC  HWaddr 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;          inet addr:127.0.0.1  P-t-P:127.0.0.1  Bcast:0.0.0.0  Mask:255.255.255.255
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST POINTOPOINT RUNNING NOARP  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:772 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:853 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;          RX bytes:112128 (109.5 KiB)  TX bytes:122092 (119.2 KiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; venet0:0  Link encap:UNSPEC  HWaddr 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;          inet addr:10.0.50.40  P-t-P:10.0.50.40  Bcast:10.0.50.40  Mask:255.255.255.255
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST POINTOPOINT RUNNING NOARP  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_ct111 /]# ifconfig
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;          UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:24 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:24 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;          RX bytes:1200 (1.1 KiB)  TX bytes:1200 (1.1 KiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; venet0    Link encap:UNSPEC  HWaddr 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;          inet addr:127.0.0.1  P-t-P:127.0.0.1  Bcast:0.0.0.0  Mask:255.255.255.255
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST POINTOPOINT RUNNING NOARP  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:855 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:774 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;          RX bytes:122212 (119.3 KiB)  TX bytes:112304 (109.6 KiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; venet0:0  Link encap:UNSPEC  HWaddr 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;          inet addr:10.0.50.41  P-t-P:10.0.50.41  Bcast:10.0.50.41  Mask:255.255.255.255
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST POINTOPOINT RUNNING NOARP  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exactly the same error I get if I try to restrict network interface to venet0:0:
</span><br>
<span class="quotelev1">&gt; [user_at_ct110 ~]$ /opt/openmpi/1.10.3/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include venet0:0  -np 1 -host 10.0.50.41 hostname
</span><br>
<span class="quotelev1">&gt; [ct111.domain.org:00945] [[13704,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [ ... snip....]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although I can successfully run hostname and hello.bin executable from the same container where I submit from:
</span><br>
<span class="quotelev1">&gt; [user_at_ct110 hello]$ /opt/openmpi/1.10.3/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include venet0:0  -np 1 -host 10.0.50.40 hostname
</span><br>
<span class="quotelev1">&gt; ct110.domain.org
</span><br>
<span class="quotelev1">&gt; [user_at_ct110 hello]$ /opt/openmpi/1.10.3/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include venet0:0  -np 1 -host 10.0.50.40 ./hello.bin
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 0 (name=ct110.domain.org ) out of 1
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.000002
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Iptables is off on both containers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would assume that I faced with bug #3339 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/3339">https://svn.open-mpi.org/trac/ompi/ticket/3339</a>) but I have another cluster based on openvz containers with openmpi 1.6.5 which works perfectly for a several years.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would appreciate any help on that issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Nikolay.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29540.php">http://www.open-mpi.org/community/lists/users/2016/06/29540.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29542.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29540.php">knawnd_at_[hidden]: "[OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>In reply to:</strong> <a href="29540.php">knawnd_at_[hidden]: "[OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29542.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Reply:</strong> <a href="29542.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
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
