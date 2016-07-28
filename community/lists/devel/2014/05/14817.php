<?
$subject_val = "Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 09:14:13 2014" -->
<!-- isoreceived="20140516131413" -->
<!-- sent="Fri, 16 May 2014 06:14:09 -0700" -->
<!-- isosent="20140516131409" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601D925FB1_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6586690E-1BFC-4730-8295-6AC841D597A5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 09:14:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14818.php">George Bosilca: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Previous message:</strong> <a href="14816.php">Ralph Castain: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>In reply to:</strong> <a href="14816.php">Ralph Castain: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14818.php">George Bosilca: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Reply:</strong> <a href="14818.php">George Bosilca: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The bfo PML is mostly a duplicate of the ob1 PML but with extra code to handle failover when running with a cluster with multiple IB NICs.   A few observations.
<br>
1. Almost no one uses the bfo PML.  I have kept it around just in case someone thinks about failover again.
<br>
2. The code where you are saying there is a leak is a duplicate of what is in ob1.  So if memory is not supposed to be allocated in the &quot;open&quot; call, then this is an issue for the ob1 PML as well.
<br>
<p>So, we could go forward in a few ways.
<br>
1. Just apply your first patch as that seems to fit what Ralph is saying.  And leave ob1 alone.
<br>
2. Fix it in both bfo and ob1.  But needs more testing as ob1 is critical.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev1">&gt;Castain
</span><br>
<span class="quotelev1">&gt;Sent: Friday, May 16, 2014 8:54 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] RFC : what is the best way to fix the memory leak in
</span><br>
<span class="quotelev1">&gt;mca/pml/bfo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Memory isn't supposed to allocated in the &quot;open&quot; call, but only after the
</span><br>
<span class="quotelev1">&gt;component is selected (and thus in the &quot;init&quot; call&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On May 15, 2014, at 10:57 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there is a small memory leak in ompi/mca/pml/bfo/pml_bfo_component.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in my environment, this module is not used.
</span><br>
<span class="quotelev2">&gt;&gt; this means mca_pml_bfo_component_open() and
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_bfo_component_close() are invoked but
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_bfo_component_init() and mca_pml_bfo_component_fini() are
</span><br>
<span class="quotelev1">&gt;*not* invoked.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_bfo.allocator is currently allocated in
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_bfo_component_open() and released in
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_bfo_component_fini() this causes a leak (at least in my
</span><br>
<span class="quotelev2">&gt;&gt; environment, since mca_pml_bfo_component_fini() is not invoked)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One option is to release the allocator in
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_bfo_component_close() An other option is to allocate the
</span><br>
<span class="quotelev2">&gt;&gt; allocator in mca_pml_bfo_component_init()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which is the correct/best one ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i attached two patches, which one (if any) should be commited ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for your insights
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&lt;bfo.allocate_in_init.patch&gt;&lt;bfo.free_in_close.patch&gt;_________________
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14815.php">http://www.open-mpi.org/community/lists/devel/2014/05/14815.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/devel/2014/05/14816.php
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14818.php">George Bosilca: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Previous message:</strong> <a href="14816.php">Ralph Castain: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>In reply to:</strong> <a href="14816.php">Ralph Castain: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14818.php">George Bosilca: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Reply:</strong> <a href="14818.php">George Bosilca: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
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
