<?
$subject_val = "Re: [OMPI users] Poor performance on Amazon EC2 with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 20:13:45 2016" -->
<!-- isoreceived="20160309011345" -->
<!-- sent="Wed, 9 Mar 2016 10:13:44 +0900" -->
<!-- isosent="20160309011344" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Poor performance on Amazon EC2 with TCP" -->
<!-- id="CAAkFZ5tQ2c-sNj1y1Zut5N+ATQ75HYqwOjk83ER9Yid00z=8ZA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D304DC32.27EC8%Gary.Jackson_at_jhuapl.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-08 20:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28665.php">Rayson Ho: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28663.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>In reply to:</strong> <a href="28663.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28665.php">Rayson Ho: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jackson,
<br>
<p>i am surprised with the MTU value ...
<br>
IIRC, MTU for ethernet jumbo frame is 9000, not 9001.
<br>
<p>can you run tracepath on both boxes (to check which mtu is used) ?
<br>
<p>then, can you try to set MTU=1500 on both boxes
<br>
(warning, get ready to lose the connection) and try again with
<br>
openmpi and intelmpi ?
<br>
then, can you increase mtu to 6000 and then 9000 and see how things evolve ?
<br>
<p>also, did you configure OpenMPI with IPv6 support ?
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wed, Mar 9, 2016 at 9:48 AM, Jackson, Gary L.
<br>
&lt;Gary.Jackson_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Nope, just one ethernet interface:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 0E:47:0E:0B:59:27
</span><br>
<span class="quotelev1">&gt;           inet addr:xxx.xxx.xxx.xxx  Bcast:xxx.xxx.xxx.xxx
</span><br>
<span class="quotelev1">&gt; Mask:255.255.252.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::c47:eff:fe0b:5927/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:9001  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:16962 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:11564 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:28613867 (27.2 MiB)  TX bytes:1092650 (1.0 MiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:68 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:68 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:6647 (6.4 KiB)  TX bytes:6647 (6.4 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gary Jackson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From:  users &lt;users-bounces_at_[hidden]&gt; on behalf of Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To:  Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:  Tuesday, March 8, 2016 at 9:39 AM
</span><br>
<span class="quotelev1">&gt; To:  Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject:  Re: [OMPI users] Poor performance on Amazon EC2 with TCP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jason,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how many Ethernet interfaces are there ?
</span><br>
<span class="quotelev1">&gt; if several, can you try again with one only
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include eth0 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, March 8, 2016, Jackson, Gary L. &lt;Gary.Jackson_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've built OpenMPI 1.10.1 on Amazon EC2. Using NetPIPE, I'm seeing about
</span><br>
<span class="quotelev1">&gt; half the performance for MPI over TCP as I do with raw TCP. Before I start
</span><br>
<span class="quotelev1">&gt; digging in to this more deeply, does anyone know what might cause that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For what it's worth, I see the same issues with MPICH, but I do not see it
</span><br>
<span class="quotelev1">&gt; with Intel MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gary Jackson
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28663.php">http://www.open-mpi.org/community/lists/users/2016/03/28663.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28665.php">Rayson Ho: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28663.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>In reply to:</strong> <a href="28663.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28665.php">Rayson Ho: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
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
