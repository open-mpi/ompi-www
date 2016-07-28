<?
$subject_val = "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile	again. (send_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 10:54:22 2013" -->
<!-- isoreceived="20131204155422" -->
<!-- sent="Wed, 4 Dec 2013 15:54:21 +0000" -->
<!-- isosent="20131204155421" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile	again. (send_*_nb)" -->
<!-- id="7240FDAC-BE6E-4F33-AFF0-85493726D01A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1385391563-29584-3-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile	again. (send_*_nb)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 10:54:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to	compile	again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile	again. (recv_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13334.php">Adrian Reber: "[OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to	compile	again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to	compile	again. (send_*_nb)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 25, 2013, at 9:59 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  * Send Non-blocking
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; int orte_rml_ftrm_send_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev1">&gt;                           struct iovec* msg,
</span><br>
<span class="quotelev1">&gt;                           int count,
</span><br>
<span class="quotelev1">&gt;                           orte_rml_tag_t tag,
</span><br>
<span class="quotelev1">&gt; -                          int flags,
</span><br>
<span class="quotelev1">&gt;                           orte_rml_callback_fn_t cbfunc,
</span><br>
<span class="quotelev1">&gt;                           void* cbdata)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int ret;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev1">&gt; -                        &quot;orte_rml_ftrm: send_nb(%s, %d, %d, %d )&quot;,
</span><br>
<span class="quotelev1">&gt; -                        ORTE_NAME_PRINT(peer), count, tag, flags);
</span><br>
<span class="quotelev1">&gt; +                        &quot;orte_rml_ftrm: send_nb(%s, %d, %d )&quot;,
</span><br>
<span class="quotelev1">&gt; +                        ORTE_NAME_PRINT(peer), count, tag);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if( NULL != orte_rml_ftrm_wrapped_module.send_nb ) {
</span><br>
<span class="quotelev1">&gt; -        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, flags, cbfunc, cbdata) ) ) {
</span><br>
<span class="quotelev1">&gt; -            return ret;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/*
</span><br>
<span class="quotelev1">&gt; - * Send Buffer
</span><br>
<span class="quotelev1">&gt; - */
</span><br>
<span class="quotelev1">&gt; -int orte_rml_ftrm_send_buffer(orte_process_name_t* peer,
</span><br>
<span class="quotelev1">&gt; -                              opal_buffer_t* buffer,
</span><br>
<span class="quotelev1">&gt; -                              orte_rml_tag_t tag,
</span><br>
<span class="quotelev1">&gt; -                              int flags)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int ret;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev1">&gt; -                        &quot;orte_rml_ftrm: send_buffer(%s, %d, %d )&quot;,
</span><br>
<span class="quotelev1">&gt; -                        ORTE_NAME_PRINT(peer), tag, flags);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if( NULL != orte_rml_ftrm_wrapped_module.send_buffer ) {
</span><br>
<span class="quotelev1">&gt; -        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_buffer(peer, buffer, tag, flags) ) ) {
</span><br>
<span class="quotelev1">&gt; +        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, cbfunc, cbdata) ) ) {
</span><br>
<span class="quotelev1">&gt;             return ret;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<p>Similar to my reply about patch 3, I don't think this hunk is correct.
<br>
<p>This routine accepts an iovec and sends it in a non-blocking fashion.  I'll bet that the caller frees the iovec upon return from the function (because it used to be a blocking send, and freeing it immediately was acceptable).
<br>
<p>But now the iovec may well still be in use when this function returns, so the caller should *not* free/reuse the iovec until it knows that the send has complete.
<br>
<p>It may be more desirable to keep the blocking send function orte_rml_ftrm_send_buffer() and emulate blocking by invoking send_nb under the covers, but then not returning until the send callback has actually been invoked.
<br>
<p>Then the blocking semantics expected by the caller may well be acceptable/safe.
<br>
<p>This loses some potential optimizations of asynchronicity, but it may be worth it: a) performance in this part of the code isn't too critical, and b) blocking semantics are usually simpler and easier to maintain, from the caller's perspective.
<br>
<p>This idea may also apply to what I said in reply to patch 3...?  (i.e., preserve a blocking send by using the _nb variant under the covers, but not returning until the nonblocking variant has actually completed the receive).
<br>
<p>Since this is a fairly large change, I didn't look too closely throughout the rest of this patch.  I assume that there are a few other architectural cases similar to this one.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to	compile	again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile	again. (recv_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13334.php">Adrian Reber: "[OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to	compile	again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to	compile	again. (send_*_nb)"</a>
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
