<?
$subject_val = "Re: [OMPI users] Program hangs on send when run with nodes on remote machine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 20:46:22 2011" -->
<!-- isoreceived="20110805004622" -->
<!-- sent="Thu, 4 Aug 2011 20:46:16 -0400" -->
<!-- isosent="20110805004616" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs on send when run with nodes on remote machine" -->
<!-- id="F344F301-AD7B-4E83-B0DF-A6E0010725A6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFfXFGyMki=ROK3s0ekwz6nd0OJ=oSQ4Uyi8az8a=r1rkKQhEA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program hangs on send when run with nodes on remote machine<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 20:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17023.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<li><strong>Previous message:</strong> <a href="17021.php">Anthony Chan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="17019.php">Keith Manville: "[OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that in the worker, you have:
<br>
<p>eth2      Link encap:Ethernet  HWaddr 00:1b:21:77:c5:d4  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.155  Bcast:192.168.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::21b:21ff:fe77:c5d4/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:9225846 errors:0 dropped:75175 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:8 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:1336628768 (1.3 GB)  TX bytes:552 (552.0 B)
<br>
<p>eth3      Link encap:Ethernet  HWaddr 00:1b:21:77:c5:d5  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.156  Bcast:192.168.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::21b:21ff:fe77:c5d5/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:26481809 errors:0 dropped:75059 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:18030236 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:70061260271 (70.0 GB)  TX bytes:11844181778 (11.8 GB)
<br>
<p>Two different NICs are on the same subnet -- that doesn't seem like a good idea...?  I think this topic has come up on the users list before, and, IIRC, the general consensus is &quot;don't do that&quot; because it's not clear as to which NIC Linux will actually send outgoing traffic across bound for the 192.168.1.x subnet.
<br>
<p><p><p>On Aug 4, 2011, at 1:59 PM, Keith Manville wrote:
<br>
<p><span class="quotelev1">&gt; I am having trouble running my MPI program on multiple nodes. I can
</span><br>
<span class="quotelev1">&gt; run multiple processes on a single node, and I can spawn processes on
</span><br>
<span class="quotelev1">&gt; on remote nodes, but when I call Send from a remote node, the node
</span><br>
<span class="quotelev1">&gt; never returns, even though there is an appropriate Recv waiting. I'm
</span><br>
<span class="quotelev1">&gt; pretty sure this is an issue with my configuration, not my code. I've
</span><br>
<span class="quotelev1">&gt; tried some other sample programs I found and had the same problem of
</span><br>
<span class="quotelev1">&gt; hanging on a send from one host to another.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's an in depth description:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wrote a quick test program where each process with rank &gt; 1 sends an
</span><br>
<span class="quotelev1">&gt; int to the master (rank 0), and the master receives until it gets
</span><br>
<span class="quotelev1">&gt; something from every other process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My test program works fine when I run multiple processes on a single machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; either the local node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./mpirun -n 4 ./mpi-test
</span><br>
<span class="quotelev1">&gt; Hi I'm localhost:2
</span><br>
<span class="quotelev1">&gt; Hi I'm localhost:1
</span><br>
<span class="quotelev1">&gt; localhost:1 sending 11...
</span><br>
<span class="quotelev1">&gt; localhost:2 sending 12...
</span><br>
<span class="quotelev1">&gt; localhost:2 sent 12
</span><br>
<span class="quotelev1">&gt; localhost:1 sent 11
</span><br>
<span class="quotelev1">&gt; Hi I'm localhost:0
</span><br>
<span class="quotelev1">&gt; localhost:0 received 11 from 1
</span><br>
<span class="quotelev1">&gt; localhost:0 received 12 from 2
</span><br>
<span class="quotelev1">&gt; Hi I'm localhost:3
</span><br>
<span class="quotelev1">&gt; localhost:3 sending 13...
</span><br>
<span class="quotelev1">&gt; localhost:3 sent 13
</span><br>
<span class="quotelev1">&gt; localhost:0 received 13 from 3
</span><br>
<span class="quotelev1">&gt; all workers checked in!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or a remote one:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./mpirun -np 2 -host remotehost ./mpi-test
</span><br>
<span class="quotelev1">&gt; Hi I'm remotehost:0
</span><br>
<span class="quotelev1">&gt; remotehost:0 received 11 from 1
</span><br>
<span class="quotelev1">&gt; all workers checked in!
</span><br>
<span class="quotelev1">&gt; Hi I'm remotehost:1
</span><br>
<span class="quotelev1">&gt; remotehost:1 sending 11...
</span><br>
<span class="quotelev1">&gt; remotehost:1 sent 11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I try to run the master locally and the worker(s) remotely
</span><br>
<span class="quotelev1">&gt; (this is the way I am actually interested in running it), Send never
</span><br>
<span class="quotelev1">&gt; returns and it hangs indefinitely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./mpirun -np 2 -host localhost,remotehost ./mpi-test
</span><br>
<span class="quotelev1">&gt; Hi I'm localhost:0
</span><br>
<span class="quotelev1">&gt; Hi I'm remotehost:1
</span><br>
<span class="quotelev1">&gt; remotehost:1 sending 11...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to see if it would work, I tried spawning the master on the
</span><br>
<span class="quotelev1">&gt; remotehost and the worker on the localhost.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./mpirun -np 2 -host remotehost,localhost ./mpi-test
</span><br>
<span class="quotelev1">&gt; Hi I'm localhost:1
</span><br>
<span class="quotelev1">&gt; localhost:1 sending 11...
</span><br>
<span class="quotelev1">&gt; localhost:1 sent 11
</span><br>
<span class="quotelev1">&gt; Hi I'm remotehost:0
</span><br>
<span class="quotelev1">&gt; remotehost:0 received 0 from 1
</span><br>
<span class="quotelev1">&gt; all workers checked in!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't hang on Send, but the wrong value is received.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what's going on? I've attached my code, my config.log,
</span><br>
<span class="quotelev1">&gt; ifconfig output, and ompi_info output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Keith
</span><br>
<span class="quotelev1">&gt; &lt;mpi.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17023.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<li><strong>Previous message:</strong> <a href="17021.php">Anthony Chan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="17019.php">Keith Manville: "[OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<!-- nextthread="start" -->
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
