<?
$subject_val = "Re: [OMPI users] Communication problem (on one node) when network interface is down";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 11:20:42 2016" -->
<!-- isoreceived="20160311162042" -->
<!-- sent="Fri, 11 Mar 2016 16:20:25 +0000" -->
<!-- isosent="20160311162025" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communication problem (on one node) when network interface is down" -->
<!-- id="53D48F74-810C-4A98-B4FE-96BFCF77520C_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAHXxYDheniZrutocxdSiFZMsfMzE0UH1FA0hZYw+s=skOAFTHw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-11 11:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28690.php">dpchoudh .: "[OMPI users] IB question (slightly off topic)"</a>
<li><strong>Previous message:</strong> <a href="28688.php">George Bosilca: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>In reply to:</strong> <a href="28687.php">dpchoudh .: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28692.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Reply:</strong> <a href="28692.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's set by default in btl_tcp_if_exclude (because in most cases, you *do* want to exclude the loopback interface -- it's much slower than other shared memory types of scenarios).  But this value can certainly be overridden:
<br>

<br>
mpirun --mca btl_tcp_if_exclude '' ....
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Mar 11, 2016, at 11:15 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From a user standpoint, that does not seem right to me. Why should one need any kind of network at all if one is entirely dealing with a single node? Is there any particular reason OpenMPI does not/cannot use the lo (loopback) interface? I'd think it is there for exactly this kind of situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 11, 2016 at 6:08 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Spawned tasks cannot use the sm nor vader btl so you need an other one (tcp, openib, ...)
</span><br>
<span class="quotelev1">&gt; self btl is only to send/recvcount with oneself (e.g. it does not work for inter process and intra node communications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am pretty sure the lo interface is always discarded by openmpi, so I have no solution on top of my head that involves openmpi.
</span><br>
<span class="quotelev1">&gt; maybe your bed bet is to use a &quot;dummy&quot; interface, for example tan or tun or even a bridge.
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
<span class="quotelev1">&gt; On Friday, March 11, 2016, R&#195;&#169;my Gr&#195;&#188;nblatt &lt;remy.grunblatt_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
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
<span class="quotelev1">&gt; Example code that triggers the problem: <a href="https://ptpb.pw/YOjr.tar.gz">https://ptpb.pw/YOjr.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; Ompi_info:  <a href="https://ptpb.pw/Vt_V.txt">https://ptpb.pw/Vt_V.txt</a>
</span><br>
<span class="quotelev1">&gt; Full log: <a href="https://ptpb.pw/JCXn.txt">https://ptpb.pw/JCXn.txt</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28684.php">http://www.open-mpi.org/community/lists/users/2016/03/28684.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28687.php">http://www.open-mpi.org/community/lists/users/2016/03/28687.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28690.php">dpchoudh .: "[OMPI users] IB question (slightly off topic)"</a>
<li><strong>Previous message:</strong> <a href="28688.php">George Bosilca: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>In reply to:</strong> <a href="28687.php">dpchoudh .: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28692.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Reply:</strong> <a href="28692.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
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
