<?
$subject_val = "Re: [OMPI users] Poor performance on Amazon EC2 with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 19:48:28 2016" -->
<!-- isoreceived="20160309004828" -->
<!-- sent="Wed, 9 Mar 2016 00:48:24 +0000" -->
<!-- isosent="20160309004824" -->
<!-- name="Jackson, Gary L." -->
<!-- email="Gary.Jackson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Poor performance on Amazon EC2 with TCP" -->
<!-- id="D304DC32.27EC8%Gary.Jackson_at_jhuapl.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5upRnACrpu9Xw68Lqv5VFeSi3sf7QH65RaQSNQR1wOXjw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Poor performance on Amazon EC2 with TCP<br>
<strong>From:</strong> Jackson, Gary L. (<em>Gary.Jackson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-08 19:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28664.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28662.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>In reply to:</strong> <a href="28660.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28664.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28664.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope, just one ethernet interface:
<br>
<p>$ ifconfig
<br>
eth0      Link encap:Ethernet  HWaddr 0E:47:0E:0B:59:27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:xxx.xxx.xxx.xxx  Bcast:xxx.xxx.xxx.xxx
<br>
Mask:255.255.252.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::c47:eff:fe0b:5927/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:9001  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:16962 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:11564 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:28613867 (27.2 MiB)  TX bytes:1092650 (1.0 MiB)
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:65536  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:68 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:68 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:6647 (6.4 KiB)  TX bytes:6647 (6.4 KiB)
<br>
<p><p><pre>
-- 
Gary Jackson
From:  users &lt;users-bounces_at_[hidden]&gt; on behalf of Gilles Gouaillardet
&lt;gilles.gouaillardet_at_[hidden]&gt;
Reply-To:  Open MPI Users &lt;users_at_[hidden]&gt;
Date:  Tuesday, March 8, 2016 at 9:39 AM
To:  Open MPI Users &lt;users_at_[hidden]&gt;
Subject:  Re: [OMPI users] Poor performance on Amazon EC2 with TCP
Jason,
how many Ethernet interfaces are there ?
if several, can you try again with one only
mpirun --mca btl_tcp_if_include eth0 ...
Cheers,
Gilles
On Tuesday, March 8, 2016, Jackson, Gary L. &lt;Gary.Jackson_at_[hidden]&gt;
wrote:
I've built OpenMPI 1.10.1 on Amazon EC2. Using NetPIPE, I'm seeing about
half the performance for MPI over TCP as I do with raw TCP. Before I start
digging in to this more deeply, does anyone know what might cause that?
For what it's worth, I see the same issues with MPICH, but I do not see it
with Intel MPI.
-- 
Gary Jackson
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28664.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28662.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>In reply to:</strong> <a href="28660.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28664.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Reply:</strong> <a href="28664.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
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
