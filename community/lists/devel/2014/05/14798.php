<?
$subject_val = "Re: [OMPI devel] opal_free_list_t annoyance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 10:48:35 2014" -->
<!-- isoreceived="20140514144835" -->
<!-- sent="Wed, 14 May 2014 10:48:33 -0400" -->
<!-- isosent="20140514144833" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_free_list_t annoyance" -->
<!-- id="CAMJJpkXsOcgBvf6c0UbJ-PGT54KpsXAmXHGhQYeR++sJZV9yxw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140513210155.GD93343_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_free_list_t annoyance<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 10:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14799.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14797.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>In reply to:</strong> <a href="14785.php">Nathan Hjelm: "[OMPI devel] opal_free_list_t annoyance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14898.php">Dave Goodell (dgoodell): "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, if the constructor is called then the destructor should be as
<br>
well. Adding the destructor call might be a good idea, despite the
<br>
fact that it delays everything till the end of the execution. The
<br>
benefits during the execution is minimal, it only keeps valgrind happy
<br>
at the end.
<br>
<p>Btw, can we merge the two free lists? They looks pretty similar
<br>
(except the mpool stuff).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Tue, May 13, 2014 at 5:01 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; While tracking down memory leaks in components I ran into an interesting
</span><br>
<span class="quotelev1">&gt; issue. osc/rdma uses an opal_free_list_t (not an ompi_free_list_t) for
</span><br>
<span class="quotelev1">&gt; buffer fragments. The fragment class allocates a buffer as part in the
</span><br>
<span class="quotelev1">&gt; constructor and frees the buffer in the destructor. The problem is that
</span><br>
<span class="quotelev1">&gt; the item constructor is called but the destructor is never called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked into the issue and I see what is happening. When growing the free
</span><br>
<span class="quotelev1">&gt; list we call the constructor for each item we allocate (see
</span><br>
<span class="quotelev1">&gt; opal_free_list.c:113) but the free list destructor does not invoke the
</span><br>
<span class="quotelev1">&gt; destructor. This is different from ompi_free_list_t which does invoke
</span><br>
<span class="quotelev1">&gt; the destructor on each constructed item.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question is. Is this difference intentional? It seems a little odd
</span><br>
<span class="quotelev1">&gt; that the free list does not call the item destructor given that it
</span><br>
<span class="quotelev1">&gt; calls the constructor. If this is intentional is there a reason for this
</span><br>
<span class="quotelev1">&gt; behavior? If not I plan on &quot;fixing&quot; the opal_free_list_t destructor to
</span><br>
<span class="quotelev1">&gt; call the item destructor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14785.php">http://www.open-mpi.org/community/lists/devel/2014/05/14785.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14799.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14797.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>In reply to:</strong> <a href="14785.php">Nathan Hjelm: "[OMPI devel] opal_free_list_t annoyance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14898.php">Dave Goodell (dgoodell): "Re: [OMPI devel] opal_free_list_t annoyance"</a>
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
