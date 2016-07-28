<?
$subject_val = "[OMPI users] OpenMPI scaling &gt; 512 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 13:07:11 2008" -->
<!-- isoreceived="20080603170711" -->
<!-- sent="Tue, 3 Jun 2008 10:07:02 -0700" -->
<!-- isosent="20080603170702" -->
<!-- name="Scott Shaw" -->
<!-- email="sshaw_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI scaling &amp;gt; 512 cores" -->
<!-- id="FA0B6D7AD2F82E4EA22697EE4D9DE87131A295_at_mtv-amer001e--3.americas.sgi.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI scaling &gt; 512 cores<br>
<strong>From:</strong> Scott Shaw (<em>sshaw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 13:07:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5782.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5780.php">8mj6tc902_at_[hidden]: "[OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5811.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Maybe reply:</strong> <a href="5811.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Reply:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Reply:</strong> <a href="5818.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I hope this is the right forum for my questions.  I am running into
<br>
a problem when scaling &gt;512 cores on a infiniband cluster which has
<br>
14,336 cores. I am new to openmpi and trying to figure out the right
<br>
-mca options to pass to avoid the &quot;mca_oob_tcp_peer_complete_connect:
<br>
connection failed:&quot; on a cluster which has infiniband HCAs and OFED
<br>
v1.3GA release.  Other MPI implementation like Intel MPI and mvapich
<br>
work fine using uDAPL or VERBs IB layers for MPI communications.
<br>
<p>I find it difficult to understand which network interface or IB layer
<br>
being used. When I explicitly state not to use eth0,lo,ib1, or ib1:0
<br>
interfaces with the cmdline option &quot;-mca oob_tcp_exclude&quot; openmpi will
<br>
continue to probe these interfaces.  For all MPI traffic openmpi should
<br>
use IB0 which is the 10.148 network. But with debugging enabled I see
<br>
references trying the 10.149 network which is IB1.  Below is the
<br>
ifconfig network device output for a compute node.
<br>
<p>Questions:
<br>
<p>1. Is there away to determine which network device is being used and not
<br>
have openmpi fallback to another device? With Intel MPI or HP MPI you
<br>
can state not to use a fallback device.  I thought &quot;-mca
<br>
oob_tcp_exclude&quot; would be the correct option to pass but I maybe wrong. 
<br>
<p>2. How can I determine infiniband openib device is actually being used?
<br>
When running a MPI app I continue to see counters for in/out packets at
<br>
a tcp level increasing when it should be using the IB RDMA device for
<br>
all MPI comms over the IB0 or mtcha0 device? OpenMPI was bundled with
<br>
OFED v1.3 so I am assuming the openib interface should work.  Running
<br>
ompi_info shows btl_open_* references. 
<br>
<p>/usr/mpi/openmpi-1.2-2/intel/bin/mpiexec -mca
<br>
btl_openib_warn_default_gid_prefix 0 -mca oob_tcp_exclude
<br>
eth0,lo,ib1,ib1:0  -mca btl openib,sm,self -machinefile mpd.hosts.$$ -np
<br>
1024 ~/bin/test_ompi &lt; input1
<br>
<p>3. When trying to avoid the &quot;mca_oob_tcp_peer_complete_connect:
<br>
connection failed:&quot; message I tried using &quot;-mca btl openib,sm,self&quot; and
<br>
&quot;-mca btl ^tcp&quot; but I still get these error messages.  In cases with
<br>
using the &quot;-mca btl openib,sm,self&quot; openmpi will retry to use the IB1
<br>
(10.149 net) fabric to establish a connection with a node.  What are my
<br>
options to avoid these connection failed messages?  I suspect openmpi is
<br>
overflowing the tcp buffer on the clients based on large core count of
<br>
this job since I see lots of tcp buffer errors based on netstat -s
<br>
output. I reviewed all of the online FAQs and I am not sure what options
<br>
to pass to get around this issue.
<br>
<p>OBTW, I did check the
<br>
/usr/mpi/openmpi-1.2-2/intel/etc/openmpi-mca-params.conf file and no
<br>
defaults are being specified.
<br>
<p><pre>
----
Ompi_info:
                Open MPI: 1.2.2
   Open MPI SVN revision: r14613
                Open RTE: 1.2.2
   Open RTE SVN revision: r14613
                    OPAL: 1.2.2
       OPAL SVN revision: r14613
                  Prefix: /usr/mpi/openmpi-1.2-2/intel
 Configured architecture: x86_64-suse-linux-gnu
------
Following is the cluster configuration:
1792 nodes with 8 cores per node = 14336 cores
Ofed Rel: OFED-1.3-rc1
IB Device(s): mthca0 FW=1.2.0 Rate=20 Gb/sec (4X DDR) mthca1 FW=1.2.0
Rate=20 Gb/sec (4X DDR) 
Processors: 2 x 4 Cores Intel(R) Xeon(R) CPU X5365 @ 3.00GHz 8192KB
Cache FSB:1333MHz
Total Mem: 16342776 KB    
OS Release: SUSE Linux Enterprise Server 10 (x86_64) VERSION = 10 SP1 
Kernel Ver: 2.6.16.54-0.2.5-smp
------
Ifconfig output:
eth0      Link encap:Ethernet  HWaddr 00:30:48:7B:A7:AC  
          inet addr:192.168.159.41  Bcast:192.168.159.255
Mask:255.255.255.0
          inet6 addr: fe80::230:48ff:fe7b:a7ac/64 Scope:Link
          UP BROADCAST NOTRAILERS RUNNING MULTICAST  MTU:1500  Metric:1
          RX packets:1215826 errors:0 dropped:0 overruns:0 frame:0
          TX packets:1342035 errors:0 dropped:0 overruns:0 carrier:0
          collisions:0 txqueuelen:1000 
          RX bytes:787514337 (751.0 Mb)  TX bytes:170968505 (163.0 Mb)
          Base address:0x2000 Memory:dfa00000-dfa20000 
ib0       Link encap:UNSPEC  HWaddr
80-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00  
          inet addr:10.148.3.73  Bcast:10.148.255.255  Mask:255.255.0.0
          inet6 addr: fe80::230:487b:a7ac:1/64 Scope:Link
          UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
          RX packets:20823896 errors:0 dropped:0 overruns:0 frame:0
          TX packets:19276836 errors:0 dropped:42 overruns:0 carrier:0
          collisions:0 txqueuelen:256 
          RX bytes:176581223103 (168400.9 Mb)  TX bytes:182691213682
(174227.9 Mb)
ib1       Link encap:UNSPEC  HWaddr
80-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00  
          inet addr:10.149.195.73  Bcast:10.149.255.255
Mask:255.255.192.0
          inet6 addr: fe80::230:487b:a7ad:1/64 Scope:Link
          UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
          RX packets:175609 errors:0 dropped:0 overruns:0 frame:0
          TX packets:31175 errors:0 dropped:6 overruns:0 carrier:0
          collisions:0 txqueuelen:256 
          RX bytes:139196236 (132.7 Mb)  TX bytes:4515680 (4.3 Mb)
ib1:0     Link encap:UNSPEC  HWaddr
80-00-04-04-FE-80-00-00-00-00-00-00-00-00-00-00  
          inet addr:10.149.3.73  Bcast:10.149.63.255  Mask:255.255.192.0
          UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
lo        Link encap:Local Loopback  
          inet addr:127.0.0.1  Mask:255.0.0.0
          inet6 addr: ::1/128 Scope:Host
          UP LOOPBACK RUNNING  MTU:16436  Metric:1
          RX packets:30554 errors:0 dropped:0 overruns:0 frame:0
          TX packets:30554 errors:0 dropped:0 overruns:0 carrier:0
          collisions:0 txqueuelen:0 
          RX bytes:54170543 (51.6 Mb)  TX bytes:54170543 (51.6 Mb)
--------
Ibstatus output:
Infiniband device 'mthca0' port 1 status:
        default gid:     fe80:0000:0000:0000:0030:487c:04b4:0001
        base lid:        0x4fb
        sm lid:          0x1
        state:           4: ACTIVE
        phys state:      5: LinkUp
        rate:            20 Gb/sec (4X DDR)
Infiniband device 'mthca1' port 1 status:
        default gid:     fe80:0000:0000:0000:0030:487c:04b5:0001
        base lid:        0x50c
        sm lid:          0x1
        state:           4: ACTIVE
        phys state:      5: LinkUp
        rate:            20 Gb/sec (4X DDR)
--------
Thanks in advance,
Scott
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5782.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5780.php">8mj6tc902_at_[hidden]: "[OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5811.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Maybe reply:</strong> <a href="5811.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Reply:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Reply:</strong> <a href="5818.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
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
