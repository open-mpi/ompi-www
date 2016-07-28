<?
$subject_val = "Re: [OMPI users] Working directory isn't set properly on Linux cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 09:53:09 2008" -->
<!-- isoreceived="20080623135309" -->
<!-- sent="Mon, 23 Jun 2008 06:52:15 -0700" -->
<!-- isosent="20080623135215" -->
<!-- name="Todd Gamblin" -->
<!-- email="tgamblin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Working directory isn't set properly on Linux cluster" -->
<!-- id="27B2690D-8E97-4C1C-84A9-C1014CF51DCB_at_cs.unc.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9332C14E-07BE-473A-8B87-7FEF6D6E8338_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Working directory isn't set properly on Linux cluster<br>
<strong>From:</strong> Todd Gamblin (<em>tgamblin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 09:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5968.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="5966.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="5966.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5968.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>Reply:</strong> <a href="5968.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for pointing this out (I'm not sure how I got that wrong in the  
<br>
test) -- making the test program do the right thing gives:
<br>
<p><span class="quotelev1">&gt; (merle):test$ mpirun -np 4 test
</span><br>
<span class="quotelev1">&gt; before MPI_Init:
</span><br>
<span class="quotelev1">&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; 	getcwd:	/home/tgamblin/test
</span><br>
<span class="quotelev1">&gt; before MPI_Init:
</span><br>
<span class="quotelev1">&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev1">&gt; 	getcwd:	/home/tgamblin/test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; etc...
</span><br>
<p>-Todd
<br>
<p><p>On Jun 23, 2008, at 5:03 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think the issue here is that your test app is checking $PWD, not  
</span><br>
<span class="quotelev1">&gt; getcwd().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you call getcwd(), you'll get the right answer (see my tests  
</span><br>
<span class="quotelev1">&gt; below).  But your point is noted that perhaps OMPI should be setting  
</span><br>
<span class="quotelev1">&gt; PWD to the correct value before launching the user app.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [5:01] svbu-mpi:~/tmp % salloc -N 1 tcsh
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 5311
</span><br>
<span class="quotelev1">&gt; [5:01] svbu-mpi:~/tmp % mpirun -np 1 pwd
</span><br>
<span class="quotelev1">&gt; /home/jsquyres/tmp
</span><br>
<span class="quotelev1">&gt; [5:01] svbu-mpi:~/tmp % mpirun -np 1 -wdir ~/mpi pwd
</span><br>
<span class="quotelev1">&gt; /home/jsquyres/mpi
</span><br>
<span class="quotelev1">&gt; [5:01] svbu-mpi:~/tmp % cat foo.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main() {
</span><br>
<span class="quotelev1">&gt;  char buf[BUFSIZ];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  getcwd(buf, BUFSIZ);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;CWD is %s\n&quot;, buf);
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; [5:01] svbu-mpi:~/tmp % gcc foo.c -o foo
</span><br>
<span class="quotelev1">&gt; [5:01] svbu-mpi:~/tmp % mpirun -np 1 foo
</span><br>
<span class="quotelev1">&gt; CWD is /home/jsquyres/tmp
</span><br>
<span class="quotelev1">&gt; [5:01] svbu-mpi:~/tmp % mpirun -np 1 -wdir ~/mpi ~/tmp/foo
</span><br>
<span class="quotelev1">&gt; CWD is /home/jsquyres/mpi
</span><br>
<span class="quotelev1">&gt; [5:01] svbu-mpi:~/tmp %
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 22, 2008, at 12:14 AM, Todd Gamblin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having trouble getting OpenMPI to set the working directory  
</span><br>
<span class="quotelev2">&gt;&gt; properly when running jobs on a Linux cluster.  I made a test  
</span><br>
<span class="quotelev2">&gt;&gt; program (at end of post) that recreates the problem pretty well by  
</span><br>
<span class="quotelev2">&gt;&gt; just printing out the results of getcwd().  Here's output both with  
</span><br>
<span class="quotelev2">&gt;&gt; and without using -wdir:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (merle):~$ cd test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (merle):test$ mpirun -np 2 test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before MPI_Init:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before MPI_Init:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after MPI_Init:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after MPI_Init:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (merle):test$ mpirun -np 2 -wdir /home/tgamblin/test test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before MPI_Init:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before MPI_Init:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after MPI_Init:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after MPI_Init:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	PWD:	/home/tgamblin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	getcwd:	/home/tgamblin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shouldn't these print out /home/tgamblin/test?  Also, this is even  
</span><br>
<span class="quotelev2">&gt;&gt; stranger:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (merle):test$ mpirun -np 2 pwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/tgamblin/test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/tgamblin/test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I feel like my program should output the same thing as pwd.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using OpenMPI 1.2.6, and the cluster has 8 nodes, with 2-by  
</span><br>
<span class="quotelev2">&gt;&gt; dual-core woodcrests each (total 32 cores).  There are 2 tcp  
</span><br>
<span class="quotelev2">&gt;&gt; networks on this cluster, one that the head node uses to talk to  
</span><br>
<span class="quotelev2">&gt;&gt; the compute nodes and one (Gigabit) network that the compute nodes  
</span><br>
<span class="quotelev2">&gt;&gt; can reach each other (but not the head node) on.  I have  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_if_include = eth2&quot; in my mca params file to keep the  
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes using the fast interconnect to talk to each other,  
</span><br>
<span class="quotelev2">&gt;&gt; and I've pasted ifconfig output for the head node and for one  
</span><br>
<span class="quotelev2">&gt;&gt; compute node below.  Also, if it helps, the home directories on  
</span><br>
<span class="quotelev2">&gt;&gt; this machine are mounted via autofs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is causing problems b/c I'm using apps that look for the  
</span><br>
<span class="quotelev2">&gt;&gt; config file in the working directory. Please let me know if you  
</span><br>
<span class="quotelev2">&gt;&gt; guys have any idea what's going on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; -Todd
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TEST PROGRAM:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sstream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using namespace std;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void testdir(const char*where) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  char buf[1024];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  getcwd(buf, 1024);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ostringstream tmp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  tmp &lt;&lt; where &lt;&lt; &quot;:&quot; &lt;&lt; endl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      &lt;&lt; &quot;\tPWD:\t&quot;&lt;&lt; getenv(&quot;PWD&quot;) &lt;&lt; endl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      &lt;&lt; &quot;\tgetcwd:\t&quot;&lt;&lt; getenv(&quot;PWD&quot;) &lt;&lt; endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  cout &lt;&lt; tmp.str();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  testdir(&quot;before MPI_Init&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  testdir(&quot;after MPI_Init&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HEAD NODE IFCONFIG:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:18:8B:2F:3D:90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet addr:10.6.1.1  Bcast:10.6.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet6 addr: fe80::218:8bff:fe2f:3d90/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX packets:1579250319 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          TX packets:874273636 errors:0 dropped:0 overruns:0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX bytes:2361367146846 (2.1 TiB)  TX bytes:85373933521  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (79.5 GiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Interrupt:169 Memory:f4000000-f4011100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth0:1    Link encap:Ethernet  HWaddr 00:18:8B:2F:3D:90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet addr:10.6.2.1  Bcast:10.6.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Interrupt:169 Memory:f4000000-f4011100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:18:8B:2F:3D:8E
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet addr:152.54.1.21  Bcast:152.54.3.255  Mask: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 255.255.252.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet6 addr: fe80::218:8bff:fe2f:3d8e/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX packets:14436523 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          TX packets:7357596 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX bytes:2354451258 (2.1 GiB)  TX bytes:2218390772 (2.0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Interrupt:169 Memory:f8000000-f8011100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX packets:540889623 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          TX packets:540889623 errors:0 dropped:0 overruns:0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX bytes:63787539844 (59.4 GiB)  TX bytes:63787539844  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (59.4 GiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; COMPUTE NODE IFCONFIG:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (compute-0-0):~$ ifconfig
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:13:72:FA:42:ED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet addr:10.6.1.254  Bcast:10.6.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet6 addr: fe80::213:72ff:fefa:42ed/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX packets:200637 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          TX packets:165336 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX bytes:187105568 (178.4 MiB)  TX bytes:26263945 (25.0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Interrupt:169 Memory:f8000000-f8011100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth2      Link encap:Ethernet  HWaddr 00:15:17:0E:9E:68
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet addr:10.6.2.254  Bcast:10.6.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet6 addr: fe80::215:17ff:fe0e:9e68/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX packets:20 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          TX packets:8 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX bytes:1280 (1.2 KiB)  TX bytes:590 (590.0 b)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Base address:0xdce0 Memory:fc3e0000-fc400000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX packets:65 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          TX packets:65 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX bytes:4376 (4.2 KiB)  TX bytes:4376 (4.2 KiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5967/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5968.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="5966.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="5966.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5968.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
<li><strong>Reply:</strong> <a href="5968.php">Jeff Squyres: "Re: [OMPI users] Working directory isn't set properly on Linux cluster"</a>
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
