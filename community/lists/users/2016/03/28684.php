<?
$subject_val = "Re: [OMPI users] Communication problem (on one node) when network interface is down";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 06:08:06 2016" -->
<!-- isoreceived="20160311110806" -->
<!-- sent="Fri, 11 Mar 2016 20:08:05 +0900" -->
<!-- isosent="20160311110805" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communication problem (on one node) when network interface is down" -->
<!-- id="CAAkFZ5vYXtYY=aGxfSJxLPrO7vSNn-A8WKyFSa3Fjwm86YNxuQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56E29CBB.7020805_at_ens-lyon.fr" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-11 06:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28685.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28683.php">R&#195;&#169;my Gr&#195;&#188;nblatt: "Communication problem (on one node) when network interface is down"</a>
<li><strong>In reply to:</strong> <a href="28683.php">R&#195;&#169;my Gr&#195;&#188;nblatt: "Communication problem (on one node) when network interface is down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28687.php">dpchoudh .: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Reply:</strong> <a href="28687.php">dpchoudh .: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Spawned tasks cannot use the sm nor vader btl so you need an other one
<br>
(tcp, openib, ...)
<br>
self btl is only to send/recvcount with oneself (e.g. it does not work for
<br>
inter process and intra node communications.
<br>
<p>I am pretty sure the lo interface is always discarded by openmpi, so I have
<br>
no solution on top of my head that involves openmpi.
<br>
maybe your bed bet is to use a &quot;dummy&quot; interface, for example tan or tun or
<br>
even a bridge.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On Friday, March 11, 2016, R&#195;&#169;my Gr&#195;&#188;nblatt &lt;remy.grunblatt_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I'm having communications problem between two processes (with one being
</span><br>
<span class="quotelev1">&gt; spawned by the other, on the *same* physical machine). Everything works
</span><br>
<span class="quotelev1">&gt; as expected when I have network interface such as eth0 or wlo1 up, but
</span><br>
<span class="quotelev1">&gt; as soon as they are down, I get errors (such as &#194;&#171; At least one pair of
</span><br>
<span class="quotelev1">&gt; MPI processes are unable to reach each other for MPI communications [&#226;&#128;&#166;] &#194;&#187;).
</span><br>
<span class="quotelev1">&gt; I tried to specify a set of mca parameters including the btl &quot;self&quot;
</span><br>
<span class="quotelev1">&gt; parameter and including the lo interface in btl_tcp_if_include list, as
</span><br>
<span class="quotelev1">&gt; advised by <a href="https://www.open-mpi.org/faq/?category=tcp">https://www.open-mpi.org/faq/?category=tcp</a> but I didn't reach
</span><br>
<span class="quotelev1">&gt; any working state for this code with &quot;external&quot; network interface down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Got any idea about what I might do wrong ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example code that triggers the problem: <a href="https://ptpb.pw/YOjr.tar.gz">https://ptpb.pw/YOjr.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; Ompi_info:  <a href="https://ptpb.pw/Vt_V.txt">https://ptpb.pw/Vt_V.txt</a>
</span><br>
<span class="quotelev1">&gt; Full log: <a href="https://ptpb.pw/JCXn.txt">https://ptpb.pw/JCXn.txt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; R&#195;&#169;my
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28684/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28685.php">Gilles Gouaillardet: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28683.php">R&#195;&#169;my Gr&#195;&#188;nblatt: "Communication problem (on one node) when network interface is down"</a>
<li><strong>In reply to:</strong> <a href="28683.php">R&#195;&#169;my Gr&#195;&#188;nblatt: "Communication problem (on one node) when network interface is down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28687.php">dpchoudh .: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Reply:</strong> <a href="28687.php">dpchoudh .: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
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
