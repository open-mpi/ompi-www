<?
$subject_val = "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  4 19:58:18 2013" -->
<!-- isoreceived="20130704235818" -->
<!-- sent="Thu, 4 Jul 2013 16:58:11 -0700" -->
<!-- isosent="20130704235811" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] example program &amp;quot;ring&amp;quot; hangs when running across multiple hardware nodes" -->
<!-- id="4F6D56F2-B2EB-4E79-A67F-78876D6179AA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="529B6039-C577-4F1C-B2B3-F8E8546D988E_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-04 19:58:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22236.php">basma a.azeem: "[OMPI users] checkpoint-restart of version 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="22234.php">Gustavo Correa: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes"</a>
<li><strong>In reply to:</strong> <a href="22234.php">Gustavo Correa: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22240.php">Jed O. Kaplan: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes (SOLVED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You also might want to check that you don't have any firewalls between those nodes. This is a typical cause of what you describe.
<br>
<p><p>On Jul 4, 2013, at 4:25 PM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jed 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could try to select only ethernet interface that match your node's IP addresses,
</span><br>
<span class="quotelev1">&gt; which seems to be en2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The en1 interface seems to be an external IP. 
</span><br>
<span class="quotelev1">&gt; Not sure about en3, but it is awkward that it has a 
</span><br>
<span class="quotelev1">&gt; different IP than en2, but in the same subnet.
</span><br>
<span class="quotelev1">&gt; I wonder if this may be the reason for the program hanging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may need to search all nodes ifconfig for a consistent set of interfaces/IP addresses,
</span><br>
<span class="quotelev1">&gt; and tailor your mpiexec command line and your hostfile accordingly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Say, something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -mca btl_tcp_if_include en2 -hostfile your_hostfile -np 43 ./ring_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this FAQ (actually, all of them are very informative):
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 4, 2013, at 6:37 PM, Jed O. Kaplan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear openmpi gurus,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am running openmpi 1.7.2 on a homogenous cluster of Apple XServes
</span><br>
<span class="quotelev2">&gt;&gt; running OS X 10.6.8. My hardware nodes are connected through four
</span><br>
<span class="quotelev2">&gt;&gt; gigabit ethernet connections; I have no infiniband or other high-speed
</span><br>
<span class="quotelev2">&gt;&gt; interconnect. The problem I describe below is the same if I use openmpi
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.5. My openmpi installation is compiled with Intel icc and ifort. See
</span><br>
<span class="quotelev2">&gt;&gt; the attached result of ompi_info --all for more details on my
</span><br>
<span class="quotelev2">&gt;&gt; installation and runtime parameters, and other diagnostic information
</span><br>
<span class="quotelev2">&gt;&gt; below
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My problem is that I noticed that inter-hardware communication hangs in
</span><br>
<span class="quotelev2">&gt;&gt; one of my own programs; I thought this was the fault of my own bad
</span><br>
<span class="quotelev2">&gt;&gt; programming, so I tried some of the example programs that are
</span><br>
<span class="quotelev2">&gt;&gt; distributed with the openmpi source code. In the program &quot;ring_*&quot; using
</span><br>
<span class="quotelev2">&gt;&gt; whichever of the APIs (c, cxx, fortran etc.), I have the same faulty
</span><br>
<span class="quotelev2">&gt;&gt; behavior that I noticed in my own program: if I run the program on a
</span><br>
<span class="quotelev2">&gt;&gt; single hardware node (with multiple processes) it works fine. As soon as
</span><br>
<span class="quotelev2">&gt;&gt; I run the program across hardware nodes, it hangs. Below you will find
</span><br>
<span class="quotelev2">&gt;&gt; an example of the program output and other diagnostic information.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This problem has really frustrated me. Unfortunately I am not
</span><br>
<span class="quotelev2">&gt;&gt; experienced enough with openmpi to get more into the debugging.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance for any help you can give me!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jed Kaplan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --- DETAILS OF MY PROBLEM ---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- this run works because it is only on one hardware node --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; jkaplan_at_grkapsrv2:~/openmpi_examples &gt;  mpirun --prefix /usr/local
</span><br>
<span class="quotelev2">&gt;&gt; --hostfile arvehosts.txt -np 3 ring_c
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sending 10 to 1, tag 201 (3 processes in ring)
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 exiting
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 exiting
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 exiting
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- this run hangs when running over two hardware nodes --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; jkaplan_at_grkapsrv2:~/openmpi_examples &gt;  mpirun --prefix /usr/local
</span><br>
<span class="quotelev2">&gt;&gt; --hostfile arvehosts.txt -np 4 ring_c
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sending 10 to 1, tag 201 (4 processes in ring)
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev2">&gt;&gt; ... hangs forever ...
</span><br>
<span class="quotelev2">&gt;&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- here is what my hostfile looks like --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; jkaplan_at_grkapsrv2:~/openmpi_examples &gt; cat arvehosts.txt 
</span><br>
<span class="quotelev2">&gt;&gt; #host file for ARVE group mac servers
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 10.0.0.21 slots=3
</span><br>
<span class="quotelev2">&gt;&gt; 10.0.0.31 slots=8
</span><br>
<span class="quotelev2">&gt;&gt; 10.0.0.41 slots=8
</span><br>
<span class="quotelev2">&gt;&gt; 10.0.0.51 slots=8
</span><br>
<span class="quotelev2">&gt;&gt; 10.0.0.61 slots=8 
</span><br>
<span class="quotelev2">&gt;&gt; 10.0.0.71 slots=8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- results of ifconfig - this looks pretty much the same on all of my
</span><br>
<span class="quotelev2">&gt;&gt; servers, with different ip addresses of course --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; jkaplan_at_grkapsrv2:~/openmpi_examples &gt; ifconfig
</span><br>
<span class="quotelev2">&gt;&gt; lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; mtu 16384
</span><br>
<span class="quotelev2">&gt;&gt; 	inet6 ::1 prefixlen 128 
</span><br>
<span class="quotelev2">&gt;&gt; 	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1 
</span><br>
<span class="quotelev2">&gt;&gt; 	inet 127.0.0.1 netmask 0xff000000 
</span><br>
<span class="quotelev2">&gt;&gt; gif0: flags=8010&lt;POINTOPOINT,MULTICAST&gt; mtu 1280
</span><br>
<span class="quotelev2">&gt;&gt; stf0: flags=0&lt;&gt; mtu 1280
</span><br>
<span class="quotelev2">&gt;&gt; en0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev2">&gt;&gt; 	ether 00:24:36:f3:dc:fc 
</span><br>
<span class="quotelev2">&gt;&gt; 	inet6 fe80::224:36ff:fef3:dcfc%en0 prefixlen 64 scopeid 0x4 
</span><br>
<span class="quotelev2">&gt;&gt; 	inet 128.178.107.85 netmask 0xffffff00 broadcast 128.178.107.255
</span><br>
<span class="quotelev2">&gt;&gt; 	media: autoselect (1000baseT &lt;full-duplex&gt;)
</span><br>
<span class="quotelev2">&gt;&gt; 	status: active
</span><br>
<span class="quotelev2">&gt;&gt; en1: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev2">&gt;&gt; 	ether 00:24:36:f3:dc:fa 
</span><br>
<span class="quotelev2">&gt;&gt; 	inet6 fe80::224:36ff:fef3:dcfa%en1 prefixlen 64 scopeid 0x5 
</span><br>
<span class="quotelev2">&gt;&gt; 	inet 10.0.0.2 netmask 0xff000000 broadcast 10.255.255.255
</span><br>
<span class="quotelev2">&gt;&gt; 	media: autoselect (1000baseT &lt;full-duplex,flow-control&gt;)
</span><br>
<span class="quotelev2">&gt;&gt; 	status: active
</span><br>
<span class="quotelev2">&gt;&gt; en2: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev2">&gt;&gt; 	ether 00:24:36:f5:ba:4e 
</span><br>
<span class="quotelev2">&gt;&gt; 	inet6 fe80::224:36ff:fef5:ba4e%en2 prefixlen 64 scopeid 0x6 
</span><br>
<span class="quotelev2">&gt;&gt; 	inet 10.0.0.21 netmask 0xff000000 broadcast 10.255.255.255
</span><br>
<span class="quotelev2">&gt;&gt; 	media: autoselect (1000baseT &lt;full-duplex,flow-control&gt;)
</span><br>
<span class="quotelev2">&gt;&gt; 	status: active
</span><br>
<span class="quotelev2">&gt;&gt; en3: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev2">&gt;&gt; 	ether 00:24:36:f5:ba:4f 
</span><br>
<span class="quotelev2">&gt;&gt; 	inet6 fe80::224:36ff:fef5:ba4f%en3 prefixlen 64 scopeid 0x7 
</span><br>
<span class="quotelev2">&gt;&gt; 	inet 10.0.0.22 netmask 0xff000000 broadcast 10.255.255.255
</span><br>
<span class="quotelev2">&gt;&gt; 	media: autoselect (1000baseT &lt;full-duplex,flow-control&gt;)
</span><br>
<span class="quotelev2">&gt;&gt; 	status: active
</span><br>
<span class="quotelev2">&gt;&gt; fw0: flags=8822&lt;BROADCAST,SMART,SIMPLEX,MULTICAST&gt; mtu 4078
</span><br>
<span class="quotelev2">&gt;&gt; 	lladdr 04:1e:64:ff:fe:f8:aa:d2 
</span><br>
<span class="quotelev2">&gt;&gt; 	media: autoselect &lt;full-duplex&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	status: inactive
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22236.php">basma a.azeem: "[OMPI users] checkpoint-restart of version 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="22234.php">Gustavo Correa: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes"</a>
<li><strong>In reply to:</strong> <a href="22234.php">Gustavo Correa: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22240.php">Jed O. Kaplan: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes (SOLVED)"</a>
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
