<?
$subject_val = "Re: [OMPI users] problem running with RoCE over 10GbE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 09:35:35 2011" -->
<!-- isoreceived="20111005133535" -->
<!-- sent="Wed, 05 Oct 2011 15:35:29 +0200" -->
<!-- isosent="20111005133529" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running with RoCE over 10GbE" -->
<!-- id="4E8C5D21.2000805_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DBCC2D88-CCB0-4C20-BCFD-8F2ED4BEEA53_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem running with RoCE over 10GbE<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 09:35:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17509.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Previous message:</strong> <a href="17507.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>In reply to:</strong> <a href="17506.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17509.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Reply:</strong> <a href="17509.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05-Oct-11 3:15 PM, Jeff Squyres wrote:
<br>
<span class="quotelev2">&gt;&gt; You shouldn't use the &quot;--enable-openib-rdmacm&quot; option - rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; support is enabled by default, providing librdmacm is found on
</span><br>
<span class="quotelev2">&gt;&gt; the machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, this might be a configure bug.  We have lots of other configure options that, even if &quot;foo&quot; support is optional, if you specify &quot;--with-foo&quot;, then OMPI treats it as mandatory.  Specifically, if foo can't be found, it's an error and configure should abort (i.e., let a human figure it out).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yevgeny -- can you check that out?
</span><br>
<p>Yep, indeed - configure doesn't abort when &quot;--enable-openib-rdmacm&quot;
<br>
is provided and &quot;rdma/rdma_cma.h&quot; is not found.
<br>
<p>-- YK 
<br>
<p>&nbsp;
<br>
<span class="quotelev2">&gt;&gt; So the question is, why OMPI config script didn't find it?
</span><br>
<span class="quotelev2">&gt;&gt; OMPI looks for &quot;rdma/rdma_cma.h&quot; header. Do you have it on
</span><br>
<span class="quotelev2">&gt;&gt; you build machine?
</span><br>
<span class="quotelev2">&gt;&gt; The usual location of this file is /usr/include/rdma/rdma_cma.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the culprit in config.log:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:118771: checking rdma/rdma_cma.h presence
</span><br>
<span class="quotelev1">&gt; configure:118771: gcc -E    conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c:573:27: error: rdma/rdma_cma.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:118771: $? = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd double check that that file is actually present on your system.  I don't think&lt;&gt;  vs. &quot;&quot; will make a difference, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17509.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Previous message:</strong> <a href="17507.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>In reply to:</strong> <a href="17506.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17509.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Reply:</strong> <a href="17509.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
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
