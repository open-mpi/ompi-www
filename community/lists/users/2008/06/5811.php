<?
$subject_val = "Re: [OMPI users] OpenMPI scaling &gt; 512 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 14:43:34 2008" -->
<!-- isoreceived="20080604184334" -->
<!-- sent="Wed, 4 Jun 2008 11:43:24 -0700" -->
<!-- isosent="20080604184324" -->
<!-- name="Scott Shaw" -->
<!-- email="sshaw_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI scaling &amp;gt; 512 cores" -->
<!-- id="FA0B6D7AD2F82E4EA22697EE4D9DE87131A598_at_mtv-amer001e--3.americas.sgi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OpenMPI scaling &amp;gt; 512 cores" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI scaling &gt; 512 cores<br>
<strong>From:</strong> Scott Shaw (<em>sshaw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 14:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5812.php">Jeff Squyres: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Previous message:</strong> <a href="5810.php">Jeff Squyres: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Maybe in reply to:</strong> <a href="5781.php">Scott Shaw: "[OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5814.php">흆e Sandgren: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Reply:</strong> <a href="5814.php">흆e Sandgren: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I was wondering if anyone had any comments with regarding to my
<br>
posting of questions.  Am I off base with my questions or is this the
<br>
wrong forum for these types of questions?   
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, I hope this is the right forum for my questions.  I am running
</span><br>
into a
<br>
<span class="quotelev1">&gt; problem when scaling &gt;512 cores on a infiniband cluster which has
</span><br>
14,336
<br>
<span class="quotelev1">&gt; cores. I am new to openmpi and trying to figure out the right -mca
</span><br>
options
<br>
<span class="quotelev1">&gt; to pass to avoid the &quot;mca_oob_tcp_peer_complete_connect: connection
</span><br>
<span class="quotelev1">&gt; failed:&quot; on a cluster which has infiniband HCAs and OFED v1.3GA
</span><br>
release.
<br>
<span class="quotelev1">&gt; Other MPI implementation like Intel MPI and mvapich work fine using
</span><br>
uDAPL
<br>
<span class="quotelev1">&gt; or VERBs IB layers for MPI communications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I find it difficult to understand which network interface or IB layer
</span><br>
<span class="quotelev1">&gt; being used. When I explicitly state not to use eth0,lo,ib1, or ib1:0
</span><br>
<span class="quotelev1">&gt; interfaces with the cmdline option &quot;-mca oob_tcp_exclude&quot; openmpi will
</span><br>
<span class="quotelev1">&gt; continue to probe these interfaces.  For all MPI traffic openmpi
</span><br>
should
<br>
<span class="quotelev1">&gt; use IB0 which is the 10.148 network. But with debugging enabled I see
</span><br>
<span class="quotelev1">&gt; references trying the 10.149 network which is IB1.  Below is the
</span><br>
ifconfig
<br>
<span class="quotelev1">&gt; network device output for a compute node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Questions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Is there away to determine which network device is being used and
</span><br>
not
<br>
<span class="quotelev1">&gt; have openmpi fallback to another device? With Intel MPI or HP MPI you
</span><br>
can
<br>
<span class="quotelev1">&gt; state not to use a fallback device.  I thought &quot;-mca oob_tcp_exclude&quot;
</span><br>
<span class="quotelev1">&gt; would be the correct option to pass but I maybe wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. How can I determine infiniband openib device is actually being
</span><br>
used?
<br>
<span class="quotelev1">&gt; When running a MPI app I continue to see counters for in/out packets
</span><br>
at a
<br>
<span class="quotelev1">&gt; tcp level increasing when it should be using the IB RDMA device for
</span><br>
all
<br>
<span class="quotelev1">&gt; MPI comms over the IB0 or mtcha0 device? OpenMPI was bundled with OFED
</span><br>
<span class="quotelev1">&gt; v1.3 so I am assuming the openib interface should work.  Running
</span><br>
ompi_info
<br>
<span class="quotelev1">&gt; shows btl_open_* references.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/openmpi-1.2-2/intel/bin/mpiexec -mca
</span><br>
<span class="quotelev1">&gt; btl_openib_warn_default_gid_prefix 0 -mca oob_tcp_exclude
</span><br>
<span class="quotelev1">&gt; eth0,lo,ib1,ib1:0  -mca btl openib,sm,self -machinefile mpd.hosts.$$
</span><br>
-np
<br>
<span class="quotelev1">&gt; 1024 ~/bin/test_ompi &lt; input1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. When trying to avoid the &quot;mca_oob_tcp_peer_complete_connect:
</span><br>
connection
<br>
<span class="quotelev1">&gt; failed:&quot; message I tried using &quot;-mca btl openib,sm,self&quot; and &quot;-mca btl
</span><br>
<span class="quotelev1">&gt; ^tcp&quot; but I still get these error messages.  In cases with using the
</span><br>
&quot;-mca
<br>
<span class="quotelev1">&gt; btl openib,sm,self&quot; openmpi will retry to use the IB1 (10.149 net)
</span><br>
fabric
<br>
<span class="quotelev1">&gt; to establish a connection with a node.  What are my options to avoid
</span><br>
these
<br>
<span class="quotelev1">&gt; connection failed messages?  I suspect openmpi is overflowing the tcp
</span><br>
<span class="quotelev1">&gt; buffer on the clients based on large core count of this job since I
</span><br>
see
<br>
<span class="quotelev1">&gt; lots of tcp buffer errors based on netstat -s output. I reviewed all
</span><br>
of
<br>
<span class="quotelev1">&gt; the online FAQs and I am not sure what options to pass to get around
</span><br>
this
<br>
<span class="quotelev1">&gt; issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OBTW, I did check the /usr/mpi/openmpi-1.2-2/intel/etc/openmpi-mca-
</span><br>
<span class="quotelev1">&gt; params.conf file and no defaults are being specified.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ompi_info:
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.2
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.2
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.2
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/mpi/openmpi-1.2-2/intel
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-suse-linux-gnu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Following is the cluster configuration:
</span><br>
<span class="quotelev1">&gt; 1792 nodes with 8 cores per node = 14336 cores
</span><br>
<span class="quotelev1">&gt; Ofed Rel: OFED-1.3-rc1
</span><br>
<span class="quotelev1">&gt; IB Device(s): mthca0 FW=1.2.0 Rate=20 Gb/sec (4X DDR) mthca1 FW=1.2.0
</span><br>
<span class="quotelev1">&gt; Rate=20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev1">&gt; Processors: 2 x 4 Cores Intel(R) Xeon(R) CPU X5365 @ 3.00GHz 8192KB
</span><br>
Cache
<br>
<span class="quotelev1">&gt; FSB:1333MHz
</span><br>
<span class="quotelev1">&gt; Total Mem: 16342776 KB
</span><br>
<span class="quotelev1">&gt; OS Release: SUSE Linux Enterprise Server 10 (x86_64) VERSION = 10 SP1
</span><br>
<span class="quotelev1">&gt; Kernel Ver: 2.6.16.54-0.2.5-smp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ifconfig output:
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:30:48:7B:A7:AC
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.159.41  Bcast:192.168.159.255
</span><br>
<span class="quotelev1">&gt; Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::230:48ff:fe7b:a7ac/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST NOTRAILERS RUNNING MULTICAST  MTU:1500
</span><br>
Metric:1
<br>
<span class="quotelev1">&gt;           RX packets:1215826 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:1342035 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:787514337 (751.0 Mb)  TX bytes:170968505 (163.0 Mb)
</span><br>
<span class="quotelev1">&gt;           Base address:0x2000 Memory:dfa00000-dfa20000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ib0       Link encap:UNSPEC  HWaddr
</span><br>
80-00-04-04-FE-80-00-00-00-00-00-00-
<br>
<span class="quotelev1">&gt; 00-00-00-00
</span><br>
<span class="quotelev1">&gt;           inet addr:10.148.3.73  Bcast:10.148.255.255
</span><br>
Mask:255.255.0.0
<br>
<span class="quotelev1">&gt;           inet6 addr: fe80::230:487b:a7ac:1/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:20823896 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:19276836 errors:0 dropped:42 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:256
</span><br>
<span class="quotelev1">&gt;           RX bytes:176581223103 (168400.9 Mb)  TX bytes:182691213682
</span><br>
<span class="quotelev1">&gt; (174227.9 Mb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ib1       Link encap:UNSPEC  HWaddr
</span><br>
80-00-04-04-FE-80-00-00-00-00-00-00-
<br>
<span class="quotelev1">&gt; 00-00-00-00
</span><br>
<span class="quotelev1">&gt;           inet addr:10.149.195.73  Bcast:10.149.255.255
</span><br>
<span class="quotelev1">&gt; Mask:255.255.192.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::230:487b:a7ad:1/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:175609 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:31175 errors:0 dropped:6 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:256
</span><br>
<span class="quotelev1">&gt;           RX bytes:139196236 (132.7 Mb)  TX bytes:4515680 (4.3 Mb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ib1:0     Link encap:UNSPEC  HWaddr
</span><br>
80-00-04-04-FE-80-00-00-00-00-00-00-
<br>
<span class="quotelev1">&gt; 00-00-00-00
</span><br>
<span class="quotelev1">&gt;           inet addr:10.149.3.73  Bcast:10.149.63.255
</span><br>
Mask:255.255.192.0
<br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
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
<span class="quotelev1">&gt;           RX packets:30554 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:30554 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:54170543 (51.6 Mb)  TX bytes:54170543 (51.6 Mb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ibstatus output:
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mthca0' port 1 status:
</span><br>
<span class="quotelev1">&gt;         default gid:     fe80:0000:0000:0000:0030:487c:04b4:0001
</span><br>
<span class="quotelev1">&gt;         base lid:        0x4fb
</span><br>
<span class="quotelev1">&gt;         sm lid:          0x1
</span><br>
<span class="quotelev1">&gt;         state:           4: ACTIVE
</span><br>
<span class="quotelev1">&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev1">&gt;         rate:            20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mthca1' port 1 status:
</span><br>
<span class="quotelev1">&gt;         default gid:     fe80:0000:0000:0000:0030:487c:04b5:0001
</span><br>
<span class="quotelev1">&gt;         base lid:        0x50c
</span><br>
<span class="quotelev1">&gt;         sm lid:          0x1
</span><br>
<span class="quotelev1">&gt;         state:           4: ACTIVE
</span><br>
<span class="quotelev1">&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev1">&gt;         rate:            20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5812.php">Jeff Squyres: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Previous message:</strong> <a href="5810.php">Jeff Squyres: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Maybe in reply to:</strong> <a href="5781.php">Scott Shaw: "[OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5814.php">흆e Sandgren: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Reply:</strong> <a href="5814.php">흆e Sandgren: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
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
