<?
$subject_val = "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 00:13:17 2014" -->
<!-- isoreceived="20140523041317" -->
<!-- sent="Fri, 23 May 2014 09:12:56 +0500" -->
<!-- isosent="20140523041256" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to run Open MPI over TCP (Ethernet)" -->
<!-- id="CANFHntDH2qxMr44arwnB8PO9oZ__=Mtwnm=bibed3qPEmAOxmw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E41FEA4A-3B93-42F4-BA13-79DF50ED0679_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to run Open MPI over TCP (Ethernet)<br>
<strong>From:</strong> Bibrak Qamar (<em>bibrakc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 00:12:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24456.php">Iván Cores González: "[OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>In reply to:</strong> <a href="24453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24475.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here the output of ifconfig
<br>
<p>*-bash-3.2$ ssh compute-0-15 /sbin/ifconfig*
<br>
eth0      Link encap:Ethernet  HWaddr 78:E7:D1:61:C6:F4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.1.255.239  Bcast:10.1.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::7ae7:d1ff:fe61:c6f4/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:63715944 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:66225083 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:85950530550 (80.0 GiB)  TX bytes:88970954416 (82.8 GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memory:fbe60000-fbe80000
<br>
<p>ib0       Link encap:InfiniBand  HWaddr
<br>
80:00:00:48:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.15  Bcast:192.168.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::202:c903:a:6f81/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:85388965 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:94530341 errors:0 dropped:72 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:52140667469 (48.5 GiB)  TX bytes:72573030755 (67.5 GiB)
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:394785 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:394785 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:23757752 (22.6 MiB)  TX bytes:23757752 (22.6 MiB)
<br>
<p><p><p>*-bash-3.2$ ssh compute-0-16 /sbin/ifconfig*
<br>
eth0      Link encap:Ethernet  HWaddr 78:E7:D1:61:D6:72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.1.255.238  Bcast:10.1.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::7ae7:d1ff:fe61:d672/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:85494220 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:84183073 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:90136414384 (83.9 GiB)  TX bytes:87205444848 (81.2 GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memory:fbe60000-fbe80000
<br>
<p>ib0       Link encap:InfiniBand  HWaddr
<br>
80:00:00:48:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.16  Bcast:192.168.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::202:c903:a:6f91/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:116291959 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:130137130 errors:0 dropped:107 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:54348901701 (50.6 GiB)  TX bytes:80828495293 (75.2 GiB)
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:394518 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:394518 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:21661017 (20.6 MiB)  TX bytes:21661017 (20.6 MiB)
<br>
<p><p>Bibrak Qamar
<br>
<p><p><p>On Thu, May 22, 2014 at 3:30 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Can you send the output of ifconfig on both compute-0-15.local and
</span><br>
<span class="quotelev1">&gt; compute-0-16.local?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 22, 2014, at 3:30 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am facing problem in running Open MPI using TCP (on 1G Ethernet). In
</span><br>
<span class="quotelev1">&gt; practice the bandwidth must not exceed 1000 Mbps but for some data points
</span><br>
<span class="quotelev1">&gt; (for point-to-point ping pong) it exceeds this limit. I checked with MPICH
</span><br>
<span class="quotelev1">&gt; it works as desired.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Following is the command I issue to run my program on TCP. Am I missing
</span><br>
<span class="quotelev1">&gt; something?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -bash-3.2$ mpirun -np 2  -machinefile machines -N 1 --mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; ./bandwidth.ompi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; The following command line options and corresponding MCA parameter have
</span><br>
<span class="quotelev2">&gt; &gt; been deprecated and replaced as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Command line options:
</span><br>
<span class="quotelev2">&gt; &gt;     Deprecated:  --npernode, -npernode
</span><br>
<span class="quotelev2">&gt; &gt;     Replacement: --map-by ppr:N:node
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Equivalent MCA parameter:
</span><br>
<span class="quotelev2">&gt; &gt;     Deprecated:  rmaps_base_n_pernode, rmaps_ppr_n_pernode
</span><br>
<span class="quotelev2">&gt; &gt;     Replacement: rmaps_base_mapping_policy=ppr:N:node
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The deprecated forms *will* disappear in a future version of Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt; Please update to the new syntax.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world.  I am 1 on compute-0-16.local
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world.  I am 0 on compute-0-15.local
</span><br>
<span class="quotelev2">&gt; &gt; 1    25.66    0.30
</span><br>
<span class="quotelev2">&gt; &gt; 2    25.54    0.60
</span><br>
<span class="quotelev2">&gt; &gt; 4    25.34    1.20
</span><br>
<span class="quotelev2">&gt; &gt; 8    25.27    2.42
</span><br>
<span class="quotelev2">&gt; &gt; 16    25.24    4.84
</span><br>
<span class="quotelev2">&gt; &gt; 32    25.49    9.58
</span><br>
<span class="quotelev2">&gt; &gt; 64    26.44    18.47
</span><br>
<span class="quotelev2">&gt; &gt; 128    26.85    36.37
</span><br>
<span class="quotelev2">&gt; &gt; 256    29.43    66.37
</span><br>
<span class="quotelev2">&gt; &gt; 512    36.02    108.44
</span><br>
<span class="quotelev2">&gt; &gt; 1024    42.03    185.86
</span><br>
<span class="quotelev2">&gt; &gt; 2048    194.30    80.42
</span><br>
<span class="quotelev2">&gt; &gt; 4096    255.21    122.45
</span><br>
<span class="quotelev2">&gt; &gt; 8192    258.85    241.45
</span><br>
<span class="quotelev2">&gt; &gt; 16384    307.96    405.90
</span><br>
<span class="quotelev2">&gt; &gt; 32768    422.78    591.32
</span><br>
<span class="quotelev2">&gt; &gt; 65536    790.11    632.83
</span><br>
<span class="quotelev2">&gt; &gt; 131072    1054.08    948.70
</span><br>
<span class="quotelev2">&gt; &gt; 262144    1618.20    1235.94
</span><br>
<span class="quotelev2">&gt; &gt; 524288    3126.65    1279.33
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Bibrak
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24455/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24456.php">Iván Cores González: "[OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>In reply to:</strong> <a href="24453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24475.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
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
