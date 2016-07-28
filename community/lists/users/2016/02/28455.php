<?
$subject_val = "Re: [OMPI users] QP creation failure on iWARP adapter";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  6 10:11:33 2016" -->
<!-- isoreceived="20160206151133" -->
<!-- sent="Sat, 6 Feb 2016 09:11:29 -0600" -->
<!-- isosent="20160206151129" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI users] QP creation failure on iWARP adapter" -->
<!-- id="56B60D21.8090905_at_opengridcomputing.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDiKi6kqDiWNocsQWRZqbno7QpAcpWhnU2PES5XuQrgeOw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] QP creation failure on iWARP adapter<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-06 10:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28454.php">dpchoudh .: "[OMPI users] QP creation failure on iWARP adapter"</a>
<li><strong>In reply to:</strong> <a href="28454.php">dpchoudh .: "[OMPI users] QP creation failure on iWARP adapter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/5/2016 2:38 AM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Dear all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a slightly off-topic post, and hopefully people won't mind
</span><br>
<span class="quotelev1">&gt; helping me out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a very simple setup with two PCs, both with identical Chelsio
</span><br>
<span class="quotelev1">&gt; 10GE iWARP adapter connected back-to-back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this setup, the TCP channel works fine (with MPI or otherwise).
</span><br>
<span class="quotelev1">&gt; But somehow, using RDMA semantics, the QP creation fails. This has
</span><br>
<span class="quotelev1">&gt; nothing to do with OpenMPI per se; using standard benchmarking tools
</span><br>
<span class="quotelev1">&gt; such as qperf also shows the same behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have set both the hard and soft limit on locked memory to
</span><br>
<span class="quotelev1">&gt; 'unlimited' and have rebooted both PCs and have verified that 'ulimit
</span><br>
<span class="quotelev1">&gt; -l' shows 'unlimited' on both nodes. Yet, the QP creation fails. In
</span><br>
<span class="quotelev1">&gt; OpenMPI this shows up if I try to use the openib BTL. The OS (on both
</span><br>
<span class="quotelev1">&gt; nodes) is CentOS 7, if that matters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What am I doing wrong?
</span><br>
<p>Hey Durga,  Does rping work over the chelsio interfaces?
<br>
<p>on one node run:  rping -s
<br>
on the other node run: rping -C10 -Vvca &lt;peer-chelsio-ipaddress&gt;
<br>
<p>qperf is pretty old and doesn't work over iwarp.  How about some of the 
<br>
other rdma tools?  ib_write_bw for example?
<br>
<p>Make sure you have these modules loaded:  iw_cxgb4 rdma_ucm
<br>
Make sure you have libibverbs, librdmacm, and libcxgb4 rpms installed
<br>
<p>Does ibv_devinfo -l show the cxgb4_0 device?
<br>
<p>steve
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28454.php">dpchoudh .: "[OMPI users] QP creation failure on iWARP adapter"</a>
<li><strong>In reply to:</strong> <a href="28454.php">dpchoudh .: "[OMPI users] QP creation failure on iWARP adapter"</a>
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
