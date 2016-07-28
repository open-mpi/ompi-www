<?
$subject_val = "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 12:16:56 2014" -->
<!-- isoreceived="20140514161656" -->
<!-- sent="Wed, 14 May 2014 10:16:55 -0600" -->
<!-- isosent="20140514161655" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)" -->
<!-- id="20140514161655.GG93343_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5sK5j1R9WmNSjookhZ0wRG4y4BjHCgc-UdSLXr55W6-1w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 12:16:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14805.php">Bert Wesarg: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>Previous message:</strong> <a href="14803.php">George Bosilca: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>In reply to:</strong> <a href="14800.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14807.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14807.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is exactly how I decided to fix it. It looks like it is
<br>
working. Please try r31755 when you get a chance.
<br>
<p>-Nathan
<br>
<p>On Thu, May 15, 2014 at 12:03:53AM +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt;    Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;    &gt; Looks like this is a scif bug. From the documentation: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    and from the source code, scif_poll(...) simply calls poll(...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    at least in MPSS 2.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;    &gt; Since that is not the case I will look through the documentation and
</span><br>
<span class="quotelev1">&gt;    see 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if there is a way other than pthread_cancel. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    what about :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - use a global variable (a boolean called &quot;close_requested&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - update the scif thread so it checks close_requested after each
</span><br>
<span class="quotelev1">&gt;    scif_poll,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    and exits if true
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - when closing btl/scif :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     * set close_requested to true
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     * scif_connect to myself
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     * close this connection
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     * pthread_join(...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    that's a bit heavyweight, but it does the job
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ( and we keep an infinite timeout for scif_poll() so overhead at runtime
</span><br>
<span class="quotelev1">&gt;    is null)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    i can test this approach from tomorrow if needed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Gilles
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14800.php">http://www.open-mpi.org/community/lists/devel/2014/05/14800.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14804/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14805.php">Bert Wesarg: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>Previous message:</strong> <a href="14803.php">George Bosilca: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>In reply to:</strong> <a href="14800.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14807.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14807.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
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
