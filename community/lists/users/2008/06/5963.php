<?
$subject_val = "[OMPI users] Working directory isn't set properly on Linux cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 22 00:15:10 2008" -->
<!-- isoreceived="20080622041510" -->
<!-- sent="Sat, 21 Jun 2008 21:14:25 -0700" -->
<!-- isosent="20080622041425" -->
<!-- name="Todd Gamblin" -->
<!-- email="tgamblin_at_[hidden]" -->
<!-- subject="[OMPI users] Working directory isn't set properly on Linux cluster" -->
<!-- id="A122BDC7-4CF3-4D68-960A-D4BAE8CAFA7C_at_cs.unc.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Working directory isn't set properly on Linux cluster<br>
<strong>From:</strong> Todd Gamblin (<em>tgamblin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-22 00:14:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5964.php">Aditya Vasal: "[OMPI users] Query related to OMPI_MCA_ns_nds_vpid environment variable"</a>
<li><strong>Previous message:</strong> <a href="5962.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5966.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>Reply:</strong> <a href="5966.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having trouble getting OpenMPI to set the working directory  
<br>
properly when running jobs on a Linux cluster.  I made a test program  
<br>
(at end of post) that recreates the problem pretty well by just  
<br>
printing out the results of getcwd().  Here's output both with and  
<br>
without using -wdir:
<br>
<p><span class="quotelev1">&gt; (merle):~$ cd test
</span><br>
<span class="quotelev1">&gt; (merle):test$ mpirun -np 2 test
</span><br>
<span class="quotelev1">&gt; before MPI_Init:
</span><br>
<span class="quotelev1">&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; before MPI_Init:
</span><br>
<span class="quotelev1">&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; after MPI_Init:
</span><br>
<span class="quotelev1">&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; after MPI_Init:
</span><br>
<span class="quotelev1">&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; (merle):test$ mpirun -np 2 -wdir /home/tgamblin/test test
</span><br>
<span class="quotelev1">&gt; before MPI_Init:
</span><br>
<span class="quotelev1">&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; before MPI_Init:
</span><br>
<span class="quotelev1">&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; after MPI_Init:
</span><br>
<span class="quotelev1">&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; after MPI_Init:
</span><br>
<span class="quotelev1">&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; 	getcwd:	/home/tgamblin
</span><br>
<p><p>Shouldn't these print out /home/tgamblin/test?  Also, this is even  
<br>
stranger:
<br>
<p><span class="quotelev1">&gt; (merle):test$ mpirun -np 2 pwd
</span><br>
<span class="quotelev1">&gt; /home/tgamblin/test
</span><br>
<span class="quotelev1">&gt; /home/tgamblin/test
</span><br>
<p><p>I feel like my program should output the same thing as pwd.
<br>
<p>I'm using OpenMPI 1.2.6, and the cluster has 8 nodes, with 2-by dual- 
<br>
core woodcrests each (total 32 cores).  There are 2 tcp networks on  
<br>
this cluster, one that the head node uses to talk to the compute nodes  
<br>
and one (Gigabit) network that the compute nodes can reach each other  
<br>
(but not the head node) on.  I have &quot;btl_tcp_if_include = eth2&quot; in my  
<br>
mca params file to keep the compute nodes using the fast interconnect  
<br>
to talk to each other, and I've pasted ifconfig output for the head  
<br>
node and for one compute node below.  Also, if it helps, the home  
<br>
directories on this machine are mounted via autofs.
<br>
<p>This is causing problems b/c I'm using apps that look for the config  
<br>
file in the working directory. Please let me know if you guys have any  
<br>
idea what's going on.
<br>
<p>Thanks!
<br>
-Todd
<br>
<p><p>TEST PROGRAM:
<br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sstream&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void testdir(const char*where) {
</span><br>
<span class="quotelev1">&gt;   char buf[1024];
</span><br>
<span class="quotelev1">&gt;   getcwd(buf, 1024);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ostringstream tmp;
</span><br>
<span class="quotelev1">&gt;   tmp &lt;&lt; where &lt;&lt; &quot;:&quot; &lt;&lt; endl
</span><br>
<span class="quotelev1">&gt;       &lt;&lt; &quot;\tPWD:\t&quot;&lt;&lt; getenv(&quot;PWD&quot;) &lt;&lt; endl
</span><br>
<span class="quotelev1">&gt;       &lt;&lt; &quot;\tgetcwd:\t&quot;&lt;&lt; getenv(&quot;PWD&quot;) &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;   cout &lt;&lt; tmp.str();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;   testdir(&quot;before MPI_Init&quot;);
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   testdir(&quot;after MPI_Init&quot;);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>HEAD NODE IFCONFIG:
<br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:18:8B:2F:3D:90
</span><br>
<span class="quotelev1">&gt;           inet addr:10.6.1.1  Bcast:10.6.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::218:8bff:fe2f:3d90/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:1579250319 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:874273636 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:2361367146846 (2.1 TiB)  TX bytes:85373933521  
</span><br>
<span class="quotelev1">&gt; (79.5 GiB)
</span><br>
<span class="quotelev1">&gt;           Interrupt:169 Memory:f4000000-f4011100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth0:1    Link encap:Ethernet  HWaddr 00:18:8B:2F:3D:90
</span><br>
<span class="quotelev1">&gt;           inet addr:10.6.2.1  Bcast:10.6.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           Interrupt:169 Memory:f4000000-f4011100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:18:8B:2F:3D:8E
</span><br>
<span class="quotelev1">&gt;           inet addr:152.54.1.21  Bcast:152.54.3.255  Mask: 
</span><br>
<span class="quotelev1">&gt; 255.255.252.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::218:8bff:fe2f:3d8e/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:14436523 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:7357596 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:2354451258 (2.1 GiB)  TX bytes:2218390772 (2.0 GiB)
</span><br>
<span class="quotelev1">&gt;           Interrupt:169 Memory:f8000000-f8011100
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
<span class="quotelev1">&gt;           RX packets:540889623 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:540889623 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:63787539844 (59.4 GiB)  TX bytes:63787539844  
</span><br>
<span class="quotelev1">&gt; (59.4 GiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>COMPUTE NODE IFCONFIG:
<br>
<span class="quotelev1">&gt; (compute-0-0):~$ ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:13:72:FA:42:ED
</span><br>
<span class="quotelev1">&gt;           inet addr:10.6.1.254  Bcast:10.6.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::213:72ff:fefa:42ed/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:200637 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:165336 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:187105568 (178.4 MiB)  TX bytes:26263945 (25.0 MiB)
</span><br>
<span class="quotelev1">&gt;           Interrupt:169 Memory:f8000000-f8011100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth2      Link encap:Ethernet  HWaddr 00:15:17:0E:9E:68
</span><br>
<span class="quotelev1">&gt;           inet addr:10.6.2.254  Bcast:10.6.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::215:17ff:fe0e:9e68/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:20 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:8 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:1280 (1.2 KiB)  TX bytes:590 (590.0 b)
</span><br>
<span class="quotelev1">&gt;           Base address:0xdce0 Memory:fc3e0000-fc400000
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
<span class="quotelev1">&gt;           RX packets:65 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:65 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:4376 (4.2 KiB)  TX bytes:4376 (4.2 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5963/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5964.php">Aditya Vasal: "[OMPI users] Query related to OMPI_MCA_ns_nds_vpid environment variable"</a>
<li><strong>Previous message:</strong> <a href="5962.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5966.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>Reply:</strong> <a href="5966.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
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
