<?
$subject_val = "Re: [OMPI users] Communication problem (on one node) when network interface is down";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 11:15:16 2016" -->
<!-- isoreceived="20160311161516" -->
<!-- sent="Fri, 11 Mar 2016 11:15:15 -0500" -->
<!-- isosent="20160311161515" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communication problem (on one node) when network interface is down" -->
<!-- id="CAHXxYDheniZrutocxdSiFZMsfMzE0UH1FA0hZYw+s=skOAFTHw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5vYXtYY=aGxfSJxLPrO7vSNn-A8WKyFSa3Fjwm86YNxuQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Communication problem (on one node) when network interface is down<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-11 11:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28688.php">George Bosilca: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28686.php">Saliya Ekanayake: "Re: [OMPI users] Java MPI Code for NAS Benchmarks"</a>
<li><strong>In reply to:</strong> <a href="28684.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Reply:</strong> <a href="28689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p><span class="quotelev1">&gt;From a user standpoint, that does not seem right to me. Why should one need
</span><br>
any kind of network at all if one is entirely dealing with a single node?
<br>
Is there any particular reason OpenMPI does not/cannot use the lo
<br>
(loopback) interface? I'd think it is there for exactly this kind of
<br>
situation.
<br>
<p>Thanks
<br>
Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p>On Fri, Mar 11, 2016 at 6:08 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Spawned tasks cannot use the sm nor vader btl so you need an other one
</span><br>
<span class="quotelev1">&gt; (tcp, openib, ...)
</span><br>
<span class="quotelev1">&gt; self btl is only to send/recvcount with oneself (e.g. it does not work for
</span><br>
<span class="quotelev1">&gt; inter process and intra node communications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am pretty sure the lo interface is always discarded by openmpi, so I
</span><br>
<span class="quotelev1">&gt; have no solution on top of my head that involves openmpi.
</span><br>
<span class="quotelev1">&gt; maybe your bed bet is to use a &quot;dummy&quot; interface, for example tan or tun
</span><br>
<span class="quotelev1">&gt; or even a bridge.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, March 11, 2016, R&#195;&#169;my Gr&#195;&#188;nblatt &lt;remy.grunblatt_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; I'm having communications problem between two processes (with one being
</span><br>
<span class="quotelev2">&gt;&gt; spawned by the other, on the *same* physical machine). Everything works
</span><br>
<span class="quotelev2">&gt;&gt; as expected when I have network interface such as eth0 or wlo1 up, but
</span><br>
<span class="quotelev2">&gt;&gt; as soon as they are down, I get errors (such as &#194;&#171; At least one pair of
</span><br>
<span class="quotelev2">&gt;&gt; MPI processes are unable to reach each other for MPI communications [&#226;&#128;&#166;]
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#187;).
</span><br>
<span class="quotelev2">&gt;&gt; I tried to specify a set of mca parameters including the btl &quot;self&quot;
</span><br>
<span class="quotelev2">&gt;&gt; parameter and including the lo interface in btl_tcp_if_include list, as
</span><br>
<span class="quotelev2">&gt;&gt; advised by <a href="https://www.open-mpi.org/faq/?category=tcp">https://www.open-mpi.org/faq/?category=tcp</a> but I didn't reach
</span><br>
<span class="quotelev2">&gt;&gt; any working state for this code with &quot;external&quot; network interface down.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Got any idea about what I might do wrong ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Example code that triggers the problem: <a href="https://ptpb.pw/YOjr.tar.gz">https://ptpb.pw/YOjr.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt; Ompi_info:  <a href="https://ptpb.pw/Vt_V.txt">https://ptpb.pw/Vt_V.txt</a>
</span><br>
<span class="quotelev2">&gt;&gt; Full log: <a href="https://ptpb.pw/JCXn.txt">https://ptpb.pw/JCXn.txt</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; R&#195;&#169;my
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28684.php">http://www.open-mpi.org/community/lists/users/2016/03/28684.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28687/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28688.php">George Bosilca: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28686.php">Saliya Ekanayake: "Re: [OMPI users] Java MPI Code for NAS Benchmarks"</a>
<li><strong>In reply to:</strong> <a href="28684.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Reply:</strong> <a href="28689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
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
