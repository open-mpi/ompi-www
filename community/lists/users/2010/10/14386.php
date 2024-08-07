<?
$subject_val = "Re: [OMPI users] Bad performance when scattering big size of data?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 15:49:10 2010" -->
<!-- isoreceived="20101004194910" -->
<!-- sent="Mon, 4 Oct 2010 14:48:55 -0500" -->
<!-- isosent="20101004194855" -->
<!-- name="Storm Zhang" -->
<!-- email="stormzhg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad performance when scattering big size of data?" -->
<!-- id="AANLkTinftiRzHRQbAeoJA_=su5BNDYUt8Bo5SoXG7zDr_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A304D485-1810-4233-BAF9-FA079F6C8671_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad performance when scattering big size of data?<br>
<strong>From:</strong> Storm Zhang (<em>stormzhg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 15:48:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14387.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14385.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>In reply to:</strong> <a href="14384.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14387.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14387.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot, Ralgh. As I said, I also tried to use SGE(also showing 1024
<br>
available for parallel tasks) which only assign 34-38 compute nodes which
<br>
only has 272-304 real cores for 500 procs running. The running time is
<br>
consistent with 100 procs and not a lot fluctuations due to the number of
<br>
machines' changing. So I guess it is not related to hyperthreading. Correct
<br>
me if I'm wrong.
<br>
<p>BTW, how to bind the proc to the core? I tried --bind-to-core or
<br>
-bind-to-core but neither works. Is it for OpenMP, not for OpenMPI?
<br>
<p>Linbao
<br>
<p><p>On Mon, Oct 4, 2010 at 12:27 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Some of what you are seeing is the natural result of context
</span><br>
<span class="quotelev1">&gt; switching....some thoughts regarding the results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. You didn't bind your procs to cores when running with #procs &lt; #cores,
</span><br>
<span class="quotelev1">&gt; so you're performance in those scenarios will also be less than max.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Once the number of procs exceeds the number of cores, you guarantee a
</span><br>
<span class="quotelev1">&gt; lot of context switching, so performance will definitely take a hit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Sometime in the not-too-distant-future, OMPI will (hopefully) become
</span><br>
<span class="quotelev1">&gt; hyperthread aware. For now, we don't see them as separate processing units.
</span><br>
<span class="quotelev1">&gt; So as far as OMPI is concerned, you only have 512 computing units to work
</span><br>
<span class="quotelev1">&gt; with, not 1024.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bottom line is that you are running oversubscribed, so OMPI turns down your
</span><br>
<span class="quotelev1">&gt; performance so that the machine doesn't hemorrhage as it context switches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2010, at 11:06 AM, Doug Reeder wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my experience hyperthreading can't really deliver two cores worth of
</span><br>
<span class="quotelev1">&gt; processing simultaneously for processes expecting sole use of a core. Since
</span><br>
<span class="quotelev1">&gt; you really have 512 cores I'm not surprised that you see a performance hit
</span><br>
<span class="quotelev1">&gt; when requesting &gt; 512 compute units. We should really get input from a
</span><br>
<span class="quotelev1">&gt; hyperthreading expert, preferably form intel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2010, at 9:53 AM, Storm Zhang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have 64 compute nodes which are dual qual-core and hyperthreaded CPUs.
</span><br>
<span class="quotelev1">&gt; So we have 1024 compute units shown in the ROCKS 5.3 system. I'm trying to
</span><br>
<span class="quotelev1">&gt; scatter an array from the master node to the compute nodes using mpiCC and
</span><br>
<span class="quotelev1">&gt; mpirun using C++.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is my test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The array size is 18KB * Number of compute nodes and is scattered to the
</span><br>
<span class="quotelev1">&gt; compute nodes 5000 times repeatly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The average running time(seconds):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 100 nodes: 170,
</span><br>
<span class="quotelev1">&gt; 400 nodes: 690,
</span><br>
<span class="quotelev1">&gt; 500 nodes: 855,
</span><br>
<span class="quotelev1">&gt; 600 nodes: 2550,
</span><br>
<span class="quotelev1">&gt; 700 nodes: 2720,
</span><br>
<span class="quotelev1">&gt; 800 nodes: 2900,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a big jump of running time from 500 nodes to 600 nodes. Don't
</span><br>
<span class="quotelev1">&gt; know what's the problem.
</span><br>
<span class="quotelev1">&gt; Tried both in OMPI 1.3.2 and OMPI 1.4.2. Running time is a little faster
</span><br>
<span class="quotelev1">&gt; for all the tests in 1.4.2 but the jump still exists.
</span><br>
<span class="quotelev1">&gt; Tried using either Bcast function or simply Send/Recv which give very close
</span><br>
<span class="quotelev1">&gt; results.
</span><br>
<span class="quotelev1">&gt; Tried both in running it directly or using SGE and got the same results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code and ompi_info are attached to this email. The direct running
</span><br>
<span class="quotelev1">&gt; command is :
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun --mca btl_tcp_if_include eth0 --machinefile
</span><br>
<span class="quotelev1">&gt; ../machines -np 600 scatttest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ifconfig of head node for eth0 is:
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:26:B9:56:8B:44
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::226:b9ff:fe56:8b44/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:1096060373 errors:0 dropped:2512622 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:513387679 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:832328807459 (775.1 GiB)  TX bytes:250824621959 (233.5
</span><br>
<span class="quotelev1">&gt; GiB)
</span><br>
<span class="quotelev1">&gt;           Interrupt:106 Memory:d6000000-d6012800
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A typical ifconfig of a compute node is:
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:21:9B:9A:15:AC
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.1.253  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::221:9bff:fe9a:15ac/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:362716422 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:349967746 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:139699954685 (130.1 GiB)  TX bytes:338207741480 (314.9
</span><br>
<span class="quotelev1">&gt; GiB)
</span><br>
<span class="quotelev1">&gt;           Interrupt:82 Memory:d6000000-d6012800
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone help me out of this? It bothers me a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linbao
</span><br>
<span class="quotelev1">&gt; &lt;scatttest.cpp&gt;&lt;ompi_info&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14386/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14387.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14385.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>In reply to:</strong> <a href="14384.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14387.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14387.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
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
