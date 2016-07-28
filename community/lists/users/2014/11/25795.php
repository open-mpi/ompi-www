<?
$subject_val = "Re: [OMPI users] mpirun fails across nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 02:59:06 2014" -->
<!-- isoreceived="20141113075906" -->
<!-- sent="Thu, 13 Nov 2014 12:59:06 +0500" -->
<!-- isosent="20141113075906" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails across nodes" -->
<!-- id="CAMvdAsLoDu4P1OAdyyx9bDzKE-EBh9DFvHqaznSsHqkfPEvpUg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5464641F.1050601_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun fails across nodes<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-13 02:59:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25796.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Previous message:</strong> <a href="25794.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>In reply to:</strong> <a href="25794.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25796.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Reply:</strong> <a href="25796.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;I don't see it running
<br>
<p>[pmdtest_at_compute-01-01 ~]$ netstat -nr
<br>
Kernel IP routing table
<br>
Destination     Gateway         Genmask         Flags   MSS Window  irtt Iface
<br>
192.168.108.0   0.0.0.0         255.255.255.0   U         0 0          0 ib0
<br>
169.254.0.0     0.0.0.0         255.255.0.0     U         0 0          0 ib0
<br>
239.0.0.0       0.0.0.0         255.0.0.0       U         0 0          0 eth0
<br>
10.0.0.0        0.0.0.0         255.0.0.0       U         0 0          0 eth0
<br>
0.0.0.0         10.0.0.1        0.0.0.0         UG        0 0          0 eth0
<br>
[pmdtest_at_compute-01-01 ~]$ exit
<br>
logout
<br>
Connection to compute-01-01 closed.
<br>
[pmdtest_at_pmd ~]$ ssh compute-01-06
<br>
Last login: Thu Nov 13 12:06:14 2014 from compute-01-01.private.dns.zone
<br>
[pmdtest_at_compute-01-06 ~]$ netstat -nr
<br>
Kernel IP routing table
<br>
Destination     Gateway         Genmask         Flags   MSS Window  irtt Iface
<br>
192.168.108.0   0.0.0.0         255.255.255.0   U         0 0          0 ib0
<br>
169.254.0.0     0.0.0.0         255.255.0.0     U         0 0          0 ib0
<br>
239.0.0.0       0.0.0.0         255.0.0.0       U         0 0          0 eth0
<br>
10.0.0.0        0.0.0.0         255.0.0.0       U         0 0          0 eth0
<br>
0.0.0.0         10.0.0.1        0.0.0.0         UG        0 0          0 eth0
<br>
[pmdtest_at_compute-01-06 ~]$
<br>
&lt;span class=&quot;sewlz7y85hpkn4b&quot;&gt;&lt;br&gt;&lt;/span&gt;
<br>
<p>On Thu, Nov 13, 2014 at 12:56 PM, Gilles Gouaillardet
<br>
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This is really weird ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is the loopback interface up and running on both nodes and with the same
</span><br>
<span class="quotelev1">&gt; ip ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you run on both compute nodes ?
</span><br>
<span class="quotelev1">&gt; netstat -nr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/11/13 16:50, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Now it looks through the loopback address
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [pmdtest_at_pmd ~]$ mpirun --host compute-01-01,compute-01-06 --mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_if_exclude ib0 ring_c
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-01-01.private.dns.zone][[37713,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() to 127.0.0.1 failed: Connection refused (111)
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev2">&gt;&gt; [pmd.pakmet.com:30867] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / no active ports found
</span><br>
<span class="quotelev2">&gt;&gt; [pmd.pakmet.com:30867] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev2">&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Nov 13, 2014 at 12:46 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca btl ^openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disables the openib btl, which is native infiniband only.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib0 is treated as any TCP interface and then handled by the tcp btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an other option is you to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca btl_tcp_if_exclude ib0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/11/13 16:43, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You are right it is running on 10.0.0.0 interface [pmdtest_at_pmd ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --mca btl ^openib --host compute-01-01,compute-01-06 --mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_tcp_if_include 10.0.0.0/8 ring_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pmdtest_at_pmd ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While the ip addresses 192.168.108* are for ib interface.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  [root_at_compute-01-01 ~]# ifconfig
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:24:E8:59:4C:2A
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet addr:10.0.0.3  Bcast:10.255.255.255  Mask:255.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet6 addr: fe80::224:e8ff:fe59:4c2a/64 Scope:Link
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX packets:65588 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           TX packets:14184 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX bytes:18692977 (17.8 MiB)  TX bytes:1834122 (1.7 MiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Interrupt:169 Memory:dc000000-dc012100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ib0       Link encap:InfiniBand  HWaddr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 80:00:00:48:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet addr:192.168.108.14  Bcast:192.168.108.255  Mask:255.255.255.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           UP BROADCAST MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           collisions:0 txqueuelen:256
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So the point is why mpirun is following the ib  path while I it has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; been disabled. Possible solutions?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Nov 13, 2014 at 12:32 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun complains about the 192.168.108.10 ip address, but ping reports a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10.0.0.8 address
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is the 192.168.* network a point to point network (for example between a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; host and a mic) so two nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cannot ping each other via this address ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* e.g. from compute-01-01 can you ping the 192.168.108.* ip address of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-01-06 ? */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; could you also run
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --mca btl ^openib --host compute-01-01,compute-01-06 --mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_tcp_if_include 10.0.0.0/8 ring_c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and see whether it helps ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2014/11/13 16:24, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Same result in both cases
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [pmdtest_at_pmd ~]$ mpirun --mca btl ^openib --host
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compute-01-01,compute-01-06 ring_c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-01-01.private.dns.zone][[47139,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [pmdtest_at_compute-01-01 ~]$ mpirun --mca btl ^openib --host
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compute-01-01,compute-01-06 ring_c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-01-01.private.dns.zone][[11064,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Nov 13, 2014 at 12:11 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it seems you messed up the command line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; could you try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun --mca btl ^openib --host compute-01-01,compute-01-06 ring_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; can you also try to run mpirun from a compute node instead of the head
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; node ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 2014/11/13 16:07, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is what I see when disabling openib support.\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmdtest_at_pmd ~]$ mpirun --host --mca btl ^openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-01-01,compute-01-06 ring_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh:  orted: Temporary failure in name resolution
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh:  orted: Temporary failure in name resolution
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A daemon (pid 7608) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; While nodes can still ssh each other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmdtest_at_compute-01-01 ~]$ ssh compute-01-06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Last login: Thu Nov 13 12:05:58 2014 from compute-01-01.private.dns.zone
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmdtest_at_compute-01-06 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Nov 13, 2014 at 12:03 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Hi Jefff
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No firewall is enabled. Running the diagnostics I found that non
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communication mpi job is running . While ring_c remains stuck. There
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are of course warnings for open fabrics but in my case I an running
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; application by disabling openib., Please see below
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [pmdtest_at_pmd ~]$ mpirun --host compute-01-01,compute-01-06 hello_c.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WARNING: There is at least one OpenFabrics device found but there are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; no active ports detected (or Open MPI was unable to use them).  This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is most certainly not what you wanted.  Check your cables, subnet
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; manager configuration, etc.  The openib BTL will be ignored for this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; job.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Local host: compute-01-01.private.dns.zone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmd.pakmet.com:06386] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; help-mpi-btl-openib.txt / no active ports found
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmd.pakmet.com:06386] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmdtest_at_pmd ~]$ mpirun --host compute-01-01,compute-01-06 ring_c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WARNING: There is at least one OpenFabrics device found but there are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; no active ports detected (or Open MPI was unable to use them).  This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is most certainly not what you wanted.  Check your cables, subnet
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; manager configuration, etc.  The openib BTL will be ignored for this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; job.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Local host: compute-01-01.private.dns.zone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-01-01.private.dns.zone][[54687,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmd.pakmet.com:15965] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; help-mpi-btl-openib.txt / no active ports found
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmd.pakmet.com:15965] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;span class=&quot;sewh9wyhn1gq30p&quot;&gt;&lt;br&gt;&lt;/span&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Nov 12, 2014 at 7:32 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have firewalling enabled on either server?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; See this FAQ item:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 12, 2014, at 4:57 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear All
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I need your advice. While trying to run mpirun job across nodes I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; following error. It seems that the two nodes i.e, compute-01-01 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-01-06 are not able to communicate with each other. While nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; see each other on ping.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmdtest_at_pmd ERA_CLM45]$ mpirun -np 16 -hostfile hostlist --mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ^openib ../bin/regcmMPICLM45 regcm.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-01-06.private.dns.zone][[48897,1],7][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-01-06.private.dns.zone][[48897,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-01-06.private.dns.zone][[48897,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-01-01.private.dns.zone][[48897,1],10][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-01-01.private.dns.zone][[48897,1],12][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-01-01.private.dns.zone][[48897,1],14][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmdtest_at_pmd ERA_CLM45]$ ssh compute-01-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Last login: Wed Nov 12 09:48:53 2014 from pmd-eth0.private.dns.zone
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmdtest_at_compute-01-01 ~]$ ping compute-01-06
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PING compute-01-06.private.dns.zone (10.0.0.8) 56(84) bytes of data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 64 bytes from compute-01-06.private.dns.zone (10.0.0.8): icmp_seq=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ttl=64 time=0.108 ms
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 64 bytes from compute-01-06.private.dns.zone (10.0.0.8): icmp_seq=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ttl=64 time=0.088 ms
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --- compute-01-06.private.dns.zone ping statistics ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2 packets transmitted, 2 received, 0% packet loss, time 999ms
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rtt min/avg/max/mdev = 0.088/0.098/0.108/0.010 ms
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pmdtest_at_compute-01-01 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ahsan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25792.php">http://www.open-mpi.org/community/lists/users/2014/11/25792.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25794.php">http://www.open-mpi.org/community/lists/users/2014/11/25794.php</a>
</span><br>
<p><p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25796.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Previous message:</strong> <a href="25794.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>In reply to:</strong> <a href="25794.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25796.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Reply:</strong> <a href="25796.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun fails across nodes"</a>
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
