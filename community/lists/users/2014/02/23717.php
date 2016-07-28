<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 12:37:01 2014" -->
<!-- isoreceived="20140228173701" -->
<!-- sent="Fri, 28 Feb 2014 09:36:54 -0800" -->
<!-- isosent="20140228173654" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="0F21A979-D206-48EF-A1B4-7E6F8DA9D871_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D67303F39678724DA65819E042CB369892A81D0778_at_EXC2.ad.colorado.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI job initializing problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 12:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23718.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23716.php">Beichuan Yan: "[OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23716.php">Beichuan Yan: "[OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23726.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23726.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Almost certainly, the redhat package wasn't built with matching infiniband support and so we aren't picking it up. I'd suggest downloading the latest 1.7.4 or 1.7.5 nightly tarball, or even the latest 1.6 tarball if you want the stable release, and build it yourself so you *know* it was built for your system.
<br>
<p><p>On Feb 28, 2014, at 9:20 AM, Beichuan Yan &lt;beichuan.yan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am running jobs on clusters with Infiniband connection. They installed OpenMPI v1.5.4 via REDHAT 6 yum package). My problem is that although my jobs gets queued and started by PBS PRO quickly, most of the time they don&#146;t really run (occasionally they really run) and give error info like this (even though there are a lot of CPU/IB resource available):
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [r2i6n7][[25564,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.159.156 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; And even though when a job gets started and runs well, it prompts this error:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev1">&gt;   Local host:   r1i2n6
</span><br>
<span class="quotelev1">&gt;   Local device: mlx4_0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1. Here is the info from one of the compute nodes:
</span><br>
<span class="quotelev1">&gt; -bash-4.1$ /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 8C:89:A5:E3:D2:96
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.159.205  Bcast:192.168.159.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::8e89:a5ff:fee3:d296/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:48879864 errors:0 dropped:0 overruns:17 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:39286060 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:54771093645 (51.0 GiB)  TX bytes:37512462596 (34.9 GiB)
</span><br>
<span class="quotelev1">&gt;           Memory:dfc00000-dfc20000
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ifconfig uses the ioctl access method to get the full address information, which limits hardware addresses to 8 bytes.
</span><br>
<span class="quotelev1">&gt; Because Infiniband address has 20 bytes, only the first 8 bytes are displayed correctly.
</span><br>
<span class="quotelev1">&gt; Ifconfig is obsolete! For replacement check ip.
</span><br>
<span class="quotelev1">&gt; ib0       Link encap:InfiniBand  HWaddr 80:00:00:48:FE:C0:00:00:00:00:00:00:00:00:00:00:00:00:00:00
</span><br>
<span class="quotelev1">&gt;           inet addr:10.148.0.114  Bcast:10.148.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::202:c903:fb:3489/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:43807414 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:10534050 errors:0 dropped:24 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:256
</span><br>
<span class="quotelev1">&gt;           RX bytes:47824448125 (44.5 GiB)  TX bytes:44764010514 (41.6 GiB)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:17292 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:17292 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:1492453 (1.4 MiB)  TX bytes:1492453 (1.4 MiB)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -bash-4.1$ chkconfig --list iptables
</span><br>
<span class="quotelev1">&gt; iptables        0:off   1:off   2:on    3:on    4:on    5:on    6:off
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2. I tried various parameters below but none of them can assure my jobs get initialized and run:
</span><br>
<span class="quotelev1">&gt; #TCP=&quot;--mca btl ^tcp&quot;
</span><br>
<span class="quotelev1">&gt; #TCP=&quot;--mca btl self,openib&quot;
</span><br>
<span class="quotelev1">&gt; #TCP=&quot;--mca btl_tcp_if_exclude lo&quot;
</span><br>
<span class="quotelev1">&gt; #TCP=&quot;--mca btl_tcp_if_include eth0&quot;
</span><br>
<span class="quotelev1">&gt; #TCP=&quot;--mca btl_tcp_if_include eth0, ib0&quot;
</span><br>
<span class="quotelev1">&gt; #TCP=&quot;--mca btl_tcp_if_exclude 192.168.0.0/24,127.0.0.1/8 --mca oob_tcp_if_exclude 192.168.0.0/24,127.0.0.1/8&quot;
</span><br>
<span class="quotelev1">&gt; #TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev1">&gt; mpirun $TCP -hostfile $PBS_NODEFILE -np 8 ./paraEllip3d input.txt
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 3. Then I turned to Intel MPI, which surprisingly starts and runs my job correctly each time (though it is a little slower than OpenMPI, maybe 15% slower, but it works each time).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can you please advise? Many thanks.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Beichuan Yan
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23717/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23718.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23716.php">Beichuan Yan: "[OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23716.php">Beichuan Yan: "[OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23726.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23726.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
