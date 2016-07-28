<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 23:13:16 2014" -->
<!-- isoreceived="20141016031316" -->
<!-- sent="Wed, 15 Oct 2014 20:13:12 -0700" -->
<!-- isosent="20141016031312" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40" -->
<!-- id="EA122699-DEB3-4557-BD64-CCAC4A9B0D31_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="543F36B6.8050307_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-15 23:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16051.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16049.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>In reply to:</strong> <a href="16049.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16051.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Reply:</strong> <a href="16051.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 15, 2014, at 8:08 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; let me quickly reply about this one :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/10/16 12:00, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I also don't understand some of the changes in this commit. For example, why did you replace the OPAL_MODEX_SEND_STRING macro with essentially a hard-coded replica of that macro?
</span><br>
<span class="quotelev1">&gt; OPAL_MODEX_SEND_STRING put a key of type OPAL_BYTE_OBJECT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in ompi_proc_complete_init:
</span><br>
<span class="quotelev1">&gt;                OPAL_MODEX_RECV_VALUE(ret, OPAL_DSTORE_ARCH,
</span><br>
<span class="quotelev1">&gt; (opal_proc_t*)&amp;proc-&gt;super,
</span><br>
<span class="quotelev1">&gt;                                      (void**)&amp;ui32ptr, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a key of type OPAL_UINT32 is expected, and an key of type
</span><br>
<span class="quotelev1">&gt; OPAL_BYTE_OBJECT was sent
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i chose to &quot;fix&quot; the sender (e.g. send a key of type OPAL_UINT32)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; should i have &quot;fixed&quot; the receiver instead ?
</span><br>
<p>Hmmm...probably the receiver, but let me take a look at it. The two should have mirrored each other, which is why I couldn't understand the change. The problem may be that the recv should be recv_string, but I need to look at the two macros and see why the mirrors weren't used.
<br>
<p><span class="quotelev2">&gt;&gt; Would you mind reverting this until we can better understand what is going on, and decide on a path forward?
</span><br>
<span class="quotelev1">&gt; no problem
</span><br>
<span class="quotelev1">&gt; based on my previous comment, shall i also revert the change in
</span><br>
<span class="quotelev1">&gt; ompi/proc/proc.c as well ?
</span><br>
<p>I'd revert the commit as a whole. Let's look at the hetero issue in its entirety and figure out how we want to handle it.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16049.php">http://www.open-mpi.org/community/lists/devel/2014/10/16049.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16051.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16049.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>In reply to:</strong> <a href="16049.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16051.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Reply:</strong> <a href="16051.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
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
