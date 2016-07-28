<?
$subject_val = "Re: [OMPI users] MPI over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 13:17:49 2012" -->
<!-- isoreceived="20120504171749" -->
<!-- sent="Fri, 4 May 2012 10:17:42 -0700" -->
<!-- isosent="20120504171742" -->
<!-- name="Don Armstrong" -->
<!-- email="don_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI over tcp" -->
<!-- id="20120504171742.GO3458_at_rzlab.ucr.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E842E4ECD_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI over tcp<br>
<strong>From:</strong> Don Armstrong (<em>don_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 13:17:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19199.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19197.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19191.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19199.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19199.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 04 May 2012, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; On Behalf Of Don Armstrong
</span><br>
<span class="quotelev2">&gt; &gt;On Thu, 03 May 2012, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. If that works, then you can also run with a debug switch to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; see what connections are being made by MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;You can see the connections being made in the attached log:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;[archimedes:29820] btl: tcp: attempting to connect() to [[60576,1],2] address
</span><br>
<span class="quotelev2">&gt; &gt;138.23.141.162 on port 2001
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I missed that. So, can we simplify the problem. Can you run
</span><br>
<span class="quotelev1">&gt; with np=2 and one process on each node?
</span><br>
<p>It hangs in exactly the same spot without completing the initial
<br>
sm-based message. [Specifically, the GUID sending and acking appears
<br>
to complete on the tcp connection, but the actual traffic is never
<br>
sent, and the
<br>
ompi_request_wait_completion(&amp;sendreq-&gt;req_send.req_base.req_ompi);
<br>
never clears).
<br>
<p><span class="quotelev1">&gt; Also, maybe you can send the ifconfig output from each node. We
</span><br>
<span class="quotelev1">&gt; sometimes see this type of hanging when a node has two different
</span><br>
<span class="quotelev1">&gt; interfaces on the same subnet.
</span><br>
<p>1: lo: &lt;LOOPBACK,UP,LOWER_UP&gt; mtu 16436 qdisc noqueue state UNKNOWN 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 127.0.0.1/8 scope host lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 ::1/128 scope host 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;valid_lft forever preferred_lft forever
<br>
2: eth0: &lt;BROADCAST,MULTICAST,UP,LOWER_UP&gt; mtu 1500 qdisc pfifo_fast state UP qlen 1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;link/ether 00:30:48:7d:82:54 brd ff:ff:ff:ff:ff:ff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 138.23.140.43/23 brd 138.23.141.255 scope global eth0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 172.16.30.79/24 brd 172.16.30.255 scope global eth0:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::230:48ff:fe7d:8254/64 scope link 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;valid_lft forever preferred_lft forever
<br>
3: eth1: &lt;NO-CARRIER,BROADCAST,MULTICAST,UP&gt; mtu 1500 qdisc pfifo_fast state DOWN qlen 1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;link/ether 00:30:48:7d:82:55 brd ff:ff:ff:ff:ff:ff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 fd74:56b0:69d6::2101/118 scope global 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;valid_lft forever preferred_lft forever
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::230:48ff:fe7d:8255/64 scope link 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;valid_lft forever preferred_lft forever
<br>
16: tun0: &lt;POINTOPOINT,MULTICAST,NOARP,UP,LOWER_UP&gt; mtu 1500 qdisc pfifo_fast state UNKNOWN qlen 100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;link/none 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 10.134.0.6/24 brd 10.134.0.255 scope global tun0
<br>
17: tun1: &lt;POINTOPOINT,MULTICAST,NOARP,UP,LOWER_UP&gt; mtu 1500 qdisc pfifo_fast state UNKNOWN qlen 100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;link/none 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 10.137.0.201/24 brd 10.137.0.255 scope global tun1
<br>
<p>1: lo: &lt;LOOPBACK,UP,LOWER_UP&gt; mtu 16436 qdisc noqueue state UNKNOWN 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 127.0.0.1/8 scope host lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 ::1/128 scope host 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;valid_lft forever preferred_lft forever
<br>
2: eth0: &lt;BROADCAST,MULTICAST,UP,LOWER_UP&gt; mtu 1500 qdisc mq state UP qlen 1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;link/ether 00:17:a4:4b:7c:ea brd ff:ff:ff:ff:ff:ff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 172.16.30.110/24 brd 172.16.30.255 scope global eth0:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 138.23.141.162/23 brd 138.23.141.255 scope global eth0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::217:a4ff:fe4b:7cea/64 scope link 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;valid_lft forever preferred_lft forever
<br>
3: eth1: &lt;BROADCAST,MULTICAST&gt; mtu 1500 qdisc noop state DOWN qlen 1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;link/ether 00:17:a4:4b:7c:ec brd ff:ff:ff:ff:ff:ff
<br>
7: tun0: &lt;POINTOPOINT,MULTICAST,NOARP,UP,LOWER_UP&gt; mtu 1500 qdisc pfifo_fast state UNKNOWN qlen 100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;link/none 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 10.134.0.26/24 brd 10.134.0.255 scope global tun0
<br>
<p><span class="quotelev1">&gt; Assuming there are multiple interfaces, can you experiment with the runtime flags outlined here?
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<p>It's already running with btl_tcp_if_include=eth0 and
<br>
oob_tcp_if_include=eth0; the connections are happening only on eth0,
<br>
which has the 138.23.141.16 addresses.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Maybe by restricting to specific interfaces you can figure out which
</span><br>
<span class="quotelev1">&gt; network is the problem.
</span><br>
<p>The network doesn't appear to be the problem, unfortunately.
<br>
&nbsp;
<br>
<p>Don Armstrong
<br>
<p><pre>
-- 
I'm So Meta, Even This Acronym
-- xkcd <a href="http://xkcd.com/917/">http://xkcd.com/917/</a>
<a href="http://www.donarmstrong.com">http://www.donarmstrong.com</a>              <a href="http://rzlab.ucr.edu">http://rzlab.ucr.edu</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19199.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19197.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19191.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19199.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19199.php">TERRY DONTJE: "Re: [OMPI users] MPI over tcp"</a>
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
