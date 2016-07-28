<?
$subject_val = "Re: [OMPI users] problem running with RoCE over 10GbE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 09:15:20 2011" -->
<!-- isoreceived="20111005131520" -->
<!-- sent="Wed, 5 Oct 2011 09:15:15 -0400" -->
<!-- isosent="20111005131515" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running with RoCE over 10GbE" -->
<!-- id="DBCC2D88-CCB0-4C20-BCFD-8F2ED4BEEA53_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E8C55D7.4020407_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 09:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17507.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Previous message:</strong> <a href="17505.php">Andreas Sch&#228;fer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>In reply to:</strong> <a href="17504.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17507.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Reply:</strong> <a href="17507.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Reply:</strong> <a href="17508.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 5, 2011, at 9:04 AM, Yevgeny Kliteynik wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Built OpenMPI with this option &quot;--enable-openib-rdmacm&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Our system has OFED 1.5.2 with librdmacm-1.0.13-1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I noticed this output from configure script:
</span><br>
<span class="quotelev2">&gt;&gt; checking rdma/rdma_cma.h usability... no
</span><br>
<span class="quotelev2">&gt;&gt; checking rdma/rdma_cma.h presence... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for rdma/rdma_cma.h... no
</span><br>
<span class="quotelev2">&gt;&gt; checking whether IBV_LINK_LAYER_ETHERNET is declared... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if RDMAoE support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for infiniband/driver.h... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if dynamic SL is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt; checking if OpenFabrics RDMACM support is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are we missing a build option or a piece of software?
</span><br>
<span class="quotelev2">&gt;&gt; Config.log and output from &quot;ompi_info --all&quot; attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You shouldn't use the &quot;--enable-openib-rdmacm&quot; option - rdmacm
</span><br>
<span class="quotelev1">&gt; support is enabled by default, providing librdmacm is found on
</span><br>
<span class="quotelev1">&gt; the machine.
</span><br>
<p>Actually, this might be a configure bug.  We have lots of other configure options that, even if &quot;foo&quot; support is optional, if you specify &quot;--with-foo&quot;, then OMPI treats it as mandatory.  Specifically, if foo can't be found, it's an error and configure should abort (i.e., let a human figure it out).
<br>
<p>Yevgeny -- can you check that out?
<br>
<p><span class="quotelev1">&gt; So the question is, why OMPI config script didn't find it?
</span><br>
<span class="quotelev1">&gt; OMPI looks for &quot;rdma/rdma_cma.h&quot; header. Do you have it on
</span><br>
<span class="quotelev1">&gt; you build machine?
</span><br>
<span class="quotelev1">&gt; The usual location of this file is /usr/include/rdma/rdma_cma.h
</span><br>
<p>Here's the culprit in config.log:
<br>
<p>configure:118771: checking rdma/rdma_cma.h presence
<br>
configure:118771: gcc -E    conftest.c
<br>
conftest.c:573:27: error: rdma/rdma_cma.h: No such file or directory
<br>
configure:118771: $? = 1
<br>
<p>I'd double check that that file is actually present on your system.  I don't think &lt;&gt; vs. &quot;&quot; will make a difference, though.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17507.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Previous message:</strong> <a href="17505.php">Andreas Sch&#228;fer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>In reply to:</strong> <a href="17504.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17507.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Reply:</strong> <a href="17507.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Reply:</strong> <a href="17508.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
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
