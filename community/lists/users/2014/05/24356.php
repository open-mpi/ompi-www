<?
$subject_val = "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 12:56:34 2014" -->
<!-- isoreceived="20140514165634" -->
<!-- sent="Wed, 14 May 2014 09:54:56 -0700" -->
<!-- isosent="20140514165456" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742" -->
<!-- id="D01CDFC8-E5BC-43BF-9ACF-E7CDC55F99B7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201405141606.s4EG6L7I006608_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 12:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24357.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24355.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>In reply to:</strong> <a href="24355.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24357.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, that's an interesting naming scheme :-)
<br>
<p>Try adding &quot;-mca oob_base_verbose 10 --report-uri -&quot; on your cmd line and let's see what it thinks is happening
<br>
<p><p>On May 14, 2014, at 9:06 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What are the interfaces on these machines?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 111 ifconfig -a
</span><br>
<span class="quotelev1">&gt; lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu 8232 index 1
</span><br>
<span class="quotelev1">&gt;        inet 127.0.0.1 netmask ff000000 
</span><br>
<span class="quotelev1">&gt; bge0: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 1500 index 2
</span><br>
<span class="quotelev1">&gt;        inet 193.174.24.39 netmask ffffffe0 broadcast 193.174.24.63
</span><br>
<span class="quotelev1">&gt; tyr fd1026 112 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 112 ssh sunpc1 ifconfig -a
</span><br>
<span class="quotelev1">&gt; lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu 8232 index 1
</span><br>
<span class="quotelev1">&gt;        inet 127.0.0.1 netmask ff000000 
</span><br>
<span class="quotelev1">&gt; nge0: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 1500 index 2
</span><br>
<span class="quotelev1">&gt;        inet 193.174.26.210 netmask ffffffc0 broadcast 193.174.26.255
</span><br>
<span class="quotelev1">&gt; tyr fd1026 113 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 113 ssh linpc1 /sbin/ifconfig -a
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:14:4F:23:FD:A8  
</span><br>
<span class="quotelev1">&gt;          inet addr:193.174.26.208  Bcast:193.174.26.255  Mask:255.255.255.192
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:18052524 errors:127 dropped:0 overruns:0 frame:127
</span><br>
<span class="quotelev1">&gt;          TX packets:15917888 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:1000 
</span><br>
<span class="quotelev1">&gt;          RX bytes:4158294157 (3965.6 Mb)  TX bytes:12060556809 (11501.8 Mb)
</span><br>
<span class="quotelev1">&gt;          Interrupt:23 Base address:0x4000 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:14:4F:23:FD:A9  
</span><br>
<span class="quotelev1">&gt;          BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:1000 
</span><br>
<span class="quotelev1">&gt;          RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;          Interrupt:45 Base address:0xa000 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback  
</span><br>
<span class="quotelev1">&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;          UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:1083 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:1083 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:0 
</span><br>
<span class="quotelev1">&gt;          RX bytes:329323 (321.6 Kb)  TX bytes:329323 (321.6 Kb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 114 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you need something else?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 14, 2014, at 7:45 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just installed openmpi-1.8.2a1r31742 on my machines (Solaris 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sun C5.12 and still have the following problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 102 which mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.8.2_64_cc/bin/mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Killed by signal 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 104 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The command works fine with openmpi-1.6.6rc1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 102 which mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.6.6_64_cc/bin/mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 104 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have reported the problem before and I would be grateful, if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somebody could solve it. Please let me know if I can provide any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24356/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24357.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24355.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>In reply to:</strong> <a href="24355.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24357.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
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
