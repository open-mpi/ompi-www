<?
$subject_val = "Re: [OMPI users] MPI over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 15:12:36 2012" -->
<!-- isoreceived="20120504191236" -->
<!-- sent="Fri, 04 May 2012 15:12:31 -0400" -->
<!-- isosent="20120504191231" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI over tcp" -->
<!-- id="4FA42A1F.6080706_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120504171742.GO3458_at_rzlab.ucr.edu" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 15:12:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19200.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19198.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19198.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19200.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19200.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/4/2012 1:17 PM, Don Armstrong wrote:
<br>
<span class="quotelev1">&gt; On Fri, 04 May 2012, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Don Armstrong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 03 May 2012, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. If that works, then you can also run with a debug switch to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see what connections are being made by MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can see the connections being made in the attached log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [archimedes:29820] btl: tcp: attempting to connect() to [[60576,1],2] address
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 138.23.141.162 on port 2001
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I missed that. So, can we simplify the problem. Can you run
</span><br>
<span class="quotelev2">&gt;&gt; with np=2 and one process on each node?
</span><br>
<span class="quotelev1">&gt; It hangs in exactly the same spot without completing the initial
</span><br>
<span class="quotelev1">&gt; sm-based message. [Specifically, the GUID sending and acking appears
</span><br>
<span class="quotelev1">&gt; to complete on the tcp connection, but the actual traffic is never
</span><br>
<span class="quotelev1">&gt; sent, and the
</span><br>
<span class="quotelev1">&gt; ompi_request_wait_completion(&amp;sendreq-&gt;req_send.req_base.req_ompi);
</span><br>
<span class="quotelev1">&gt; never clears).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, maybe you can send the ifconfig output from each node. We
</span><br>
<span class="quotelev2">&gt;&gt; sometimes see this type of hanging when a node has two different
</span><br>
<span class="quotelev2">&gt;&gt; interfaces on the same subnet.
</span><br>
<span class="quotelev1">&gt; 1: lo:&lt;LOOPBACK,UP,LOWER_UP&gt;  mtu 16436 qdisc noqueue state UNKNOWN
</span><br>
<span class="quotelev1">&gt;      link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
</span><br>
<span class="quotelev1">&gt;      inet 127.0.0.1/8 scope host lo
</span><br>
<span class="quotelev1">&gt;      inet6 ::1/128 scope host
</span><br>
<span class="quotelev1">&gt;         valid_lft forever preferred_lft forever
</span><br>
<span class="quotelev1">&gt; 2: eth0:&lt;BROADCAST,MULTICAST,UP,LOWER_UP&gt;  mtu 1500 qdisc pfifo_fast state UP qlen 1000
</span><br>
<span class="quotelev1">&gt;      link/ether 00:30:48:7d:82:54 brd ff:ff:ff:ff:ff:ff
</span><br>
<span class="quotelev1">&gt;      inet 138.23.140.43/23 brd 138.23.141.255 scope global eth0
</span><br>
<span class="quotelev1">&gt;      inet 172.16.30.79/24 brd 172.16.30.255 scope global eth0:1
</span><br>
<span class="quotelev1">&gt;      inet6 fe80::230:48ff:fe7d:8254/64 scope link
</span><br>
<span class="quotelev1">&gt;         valid_lft forever preferred_lft forever
</span><br>
<span class="quotelev1">&gt; 3: eth1:&lt;NO-CARRIER,BROADCAST,MULTICAST,UP&gt;  mtu 1500 qdisc pfifo_fast state DOWN qlen 1000
</span><br>
<span class="quotelev1">&gt;      link/ether 00:30:48:7d:82:55 brd ff:ff:ff:ff:ff:ff
</span><br>
<span class="quotelev1">&gt;      inet6 fd74:56b0:69d6::2101/118 scope global
</span><br>
<span class="quotelev1">&gt;         valid_lft forever preferred_lft forever
</span><br>
<span class="quotelev1">&gt;      inet6 fe80::230:48ff:fe7d:8255/64 scope link
</span><br>
<span class="quotelev1">&gt;         valid_lft forever preferred_lft forever
</span><br>
<span class="quotelev1">&gt; 16: tun0:&lt;POINTOPOINT,MULTICAST,NOARP,UP,LOWER_UP&gt;  mtu 1500 qdisc pfifo_fast state UNKNOWN qlen 100
</span><br>
<span class="quotelev1">&gt;      link/none
</span><br>
<span class="quotelev1">&gt;      inet 10.134.0.6/24 brd 10.134.0.255 scope global tun0
</span><br>
<span class="quotelev1">&gt; 17: tun1:&lt;POINTOPOINT,MULTICAST,NOARP,UP,LOWER_UP&gt;  mtu 1500 qdisc pfifo_fast state UNKNOWN qlen 100
</span><br>
<span class="quotelev1">&gt;      link/none
</span><br>
<span class="quotelev1">&gt;      inet 10.137.0.201/24 brd 10.137.0.255 scope global tun1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1: lo:&lt;LOOPBACK,UP,LOWER_UP&gt;  mtu 16436 qdisc noqueue state UNKNOWN
</span><br>
<span class="quotelev1">&gt;      link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
</span><br>
<span class="quotelev1">&gt;      inet 127.0.0.1/8 scope host lo
</span><br>
<span class="quotelev1">&gt;      inet6 ::1/128 scope host
</span><br>
<span class="quotelev1">&gt;         valid_lft forever preferred_lft forever
</span><br>
<span class="quotelev1">&gt; 2: eth0:&lt;BROADCAST,MULTICAST,UP,LOWER_UP&gt;  mtu 1500 qdisc mq state UP qlen 1000
</span><br>
<span class="quotelev1">&gt;      link/ether 00:17:a4:4b:7c:ea brd ff:ff:ff:ff:ff:ff
</span><br>
<span class="quotelev1">&gt;      inet 172.16.30.110/24 brd 172.16.30.255 scope global eth0:1
</span><br>
<span class="quotelev1">&gt;      inet 138.23.141.162/23 brd 138.23.141.255 scope global eth0
</span><br>
<span class="quotelev1">&gt;      inet6 fe80::217:a4ff:fe4b:7cea/64 scope link
</span><br>
<span class="quotelev1">&gt;         valid_lft forever preferred_lft forever
</span><br>
<span class="quotelev1">&gt; 3: eth1:&lt;BROADCAST,MULTICAST&gt;  mtu 1500 qdisc noop state DOWN qlen 1000
</span><br>
<span class="quotelev1">&gt;      link/ether 00:17:a4:4b:7c:ec brd ff:ff:ff:ff:ff:ff
</span><br>
<span class="quotelev1">&gt; 7: tun0:&lt;POINTOPOINT,MULTICAST,NOARP,UP,LOWER_UP&gt;  mtu 1500 qdisc pfifo_fast state UNKNOWN qlen 100
</span><br>
<span class="quotelev1">&gt;      link/none
</span><br>
<span class="quotelev1">&gt;      inet 10.134.0.26/24 brd 10.134.0.255 scope global tun0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assuming there are multiple interfaces, can you experiment with the runtime flags outlined here?
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt; It's already running with btl_tcp_if_include=eth0 and
</span><br>
<span class="quotelev1">&gt; oob_tcp_if_include=eth0; the connections are happening only on eth0,
</span><br>
<span class="quotelev1">&gt; which has the 138.23.141.16 addresses.
</span><br>
Sorry if this is a stupid question but what is eth0:1 (it's under 
<br>
eth0).  Are the 172.16.30.X addresses pingable to each other?
<br>
<p><p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19199/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19200.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19198.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19198.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19200.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19200.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
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
