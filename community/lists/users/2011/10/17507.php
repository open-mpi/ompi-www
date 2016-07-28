<?
$subject_val = "Re: [OMPI users] problem running with RoCE over 10GbE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 09:31:21 2011" -->
<!-- isoreceived="20111005133121" -->
<!-- sent="Wed, 5 Oct 2011 13:30:23 +0000" -->
<!-- isosent="20111005133023" -->
<!-- name="Konz, Jeffrey (SSA Solution Centers)" -->
<!-- email="jeffrey.konz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running with RoCE over 10GbE" -->
<!-- id="77486CDD5CFC9449BEE3C555886D8A900195FF_at_G9W0339.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Konz, Jeffrey (SSA Solution Centers) (<em>jeffrey.konz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 09:30:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17508.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Previous message:</strong> <a href="17506.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>In reply to:</strong> <a href="17506.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17508.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, Yevgeny,
<br>
<p>Thanks for your responses.
<br>
<p>We found the problem. Issue was that the librdmacm-devel rpm was not installed on the build system.
<br>
Installed the rpm and re-built OpenMPI. Now RoCE works fine.
<br>
<p>You might the requirement for the librdmacm-devel rpm to the install readme.
<br>
<p>-Jeff
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, October 05, 2011 9:15 AM
</span><br>
<span class="quotelev1">&gt; To: kliteyn_at_[hidden]; Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Konz, Jeffrey (SSA Solution Centers)
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] problem running with RoCE over 10GbE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 5, 2011, at 9:04 AM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Built OpenMPI with this option &quot;--enable-openib-rdmacm&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Our system has OFED 1.5.2 with librdmacm-1.0.13-1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I noticed this output from configure script:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking rdma/rdma_cma.h usability... no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking rdma/rdma_cma.h presence... no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking for rdma/rdma_cma.h... no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking whether IBV_LINK_LAYER_ETHERNET is declared... yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking if RDMAoE support is enabled... yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking for infiniband/driver.h... yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking if dynamic SL is enabled... no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking if OpenFabrics RDMACM support is enabled... no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Are we missing a build option or a piece of software?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Config.log and output from &quot;ompi_info --all&quot; attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You shouldn't use the &quot;--enable-openib-rdmacm&quot; option - rdmacm
</span><br>
<span class="quotelev2">&gt; &gt; support is enabled by default, providing librdmacm is found on
</span><br>
<span class="quotelev2">&gt; &gt; the machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, this might be a configure bug.  We have lots of other
</span><br>
<span class="quotelev1">&gt; configure options that, even if &quot;foo&quot; support is optional, if you
</span><br>
<span class="quotelev1">&gt; specify &quot;--with-foo&quot;, then OMPI treats it as mandatory.  Specifically,
</span><br>
<span class="quotelev1">&gt; if foo can't be found, it's an error and configure should abort (i.e.,
</span><br>
<span class="quotelev1">&gt; let a human figure it out).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yevgeny -- can you check that out?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So the question is, why OMPI config script didn't find it?
</span><br>
<span class="quotelev2">&gt; &gt; OMPI looks for &quot;rdma/rdma_cma.h&quot; header. Do you have it on
</span><br>
<span class="quotelev2">&gt; &gt; you build machine?
</span><br>
<span class="quotelev2">&gt; &gt; The usual location of this file is /usr/include/rdma/rdma_cma.h
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
<span class="quotelev1">&gt; I'd double check that that file is actually present on your system.  I
</span><br>
<span class="quotelev1">&gt; don't think &lt;&gt; vs. &quot;&quot; will make a difference, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17508.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Previous message:</strong> <a href="17506.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>In reply to:</strong> <a href="17506.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17508.php">Yevgeny Kliteynik: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
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
