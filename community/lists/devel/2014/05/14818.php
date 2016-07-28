<?
$subject_val = "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 12:33:17 2014" -->
<!-- isoreceived="20140516163317" -->
<!-- sent="Fri, 16 May 2014 12:33:15 -0400" -->
<!-- isosent="20140516163315" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo" -->
<!-- id="CAMJJpkUNy7BeiFfC-SFAnETYz8PRFGmE9Xp1OsJkVevnRhswfg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3601D925FB1_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 12:33:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14819.php">Thomas Naughton: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<li><strong>Previous message:</strong> <a href="14817.php">Rolf vandeVaart: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo"</a>
<li><strong>In reply to:</strong> <a href="14817.php">Rolf vandeVaart: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14826.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Reply:</strong> <a href="14826.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the patch for ob1. It was laying in one of my branches for
<br>
quite some time, it was slightly tested. What was not tested at all is
<br>
the MTL interaction.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Fri, May 16, 2014 at 9:14 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The bfo PML is mostly a duplicate of the ob1 PML but with extra code to handle failover when running with a cluster with multiple IB NICs.   A few observations.
</span><br>
<span class="quotelev1">&gt; 1. Almost no one uses the bfo PML.  I have kept it around just in case someone thinks about failover again.
</span><br>
<span class="quotelev1">&gt; 2. The code where you are saying there is a leak is a duplicate of what is in ob1.  So if memory is not supposed to be allocated in the &quot;open&quot; call, then this is an issue for the ob1 PML as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, we could go forward in a few ways.
</span><br>
<span class="quotelev1">&gt; 1. Just apply your first patch as that seems to fit what Ralph is saying.  And leave ob1 alone.
</span><br>
<span class="quotelev1">&gt; 2. Fix it in both bfo and ob1.  But needs more testing as ob1 is critical.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev2">&gt;&gt;Castain
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Friday, May 16, 2014 8:54 AM
</span><br>
<span class="quotelev2">&gt;&gt;To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: [OMPI devel] RFC : what is the best way to fix the memory leak in
</span><br>
<span class="quotelev2">&gt;&gt;mca/pml/bfo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Memory isn't supposed to allocated in the &quot;open&quot; call, but only after the
</span><br>
<span class="quotelev2">&gt;&gt;component is selected (and thus in the &quot;init&quot; call&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On May 15, 2014, at 10:57 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt;&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is a small memory leak in ompi/mca/pml/bfo/pml_bfo_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in my environment, this module is not used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this means mca_pml_bfo_component_open() and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_bfo_component_close() are invoked but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_bfo_component_init() and mca_pml_bfo_component_fini() are
</span><br>
<span class="quotelev2">&gt;&gt;*not* invoked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_bfo.allocator is currently allocated in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_bfo_component_open() and released in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_bfo_component_fini() this causes a leak (at least in my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment, since mca_pml_bfo_component_fini() is not invoked)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One option is to release the allocator in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_pml_bfo_component_close() An other option is to allocate the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocator in mca_pml_bfo_component_init()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which is the correct/best one ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i attached two patches, which one (if any) should be commited ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance for your insights
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&lt;bfo.allocate_in_init.patch&gt;&lt;bfo.free_in_close.patch&gt;_________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ______________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14815.php">http://www.open-mpi.org/community/lists/devel/2014/05/14815.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt;mpi.org/community/lists/devel/2014/05/14816.php
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14817.php">http://www.open-mpi.org/community/lists/devel/2014/05/14817.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14818/ob1_init_cleanup.patch">ob1_init_cleanup.patch</a>
</ul>
<!-- attachment="ob1_init_cleanup.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14819.php">Thomas Naughton: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<li><strong>Previous message:</strong> <a href="14817.php">Rolf vandeVaart: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo"</a>
<li><strong>In reply to:</strong> <a href="14817.php">Rolf vandeVaart: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14826.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Reply:</strong> <a href="14826.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
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
