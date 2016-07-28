<?
$subject_val = "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  6 09:30:16 2013" -->
<!-- isoreceived="20131206143016" -->
<!-- sent="Fri, 6 Dec 2013 08:30:15 -0600" -->
<!-- isosent="20131206143015" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)" -->
<!-- id="CAANzjEnEAFz96t76Y8q7PK3Lqgazg_Y+T8kyyVRdcG1fwg5+Wg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="907A4DA8-800B-4A2A-A4DC-6DDE776D92E4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-06 09:30:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13391.php">Josh Hursey: "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13389.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
<li><strong>In reply to:</strong> <a href="13371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to	compile	again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since the blocking semantics are important for correctness of the prior
<br>
code, I would not just replace send_buffer with send_buffer_nb. This makes
<br>
the semantics incorrect, and will make things confusing later when you try
<br>
to sort out prior calls to send_buffer_nb with those that you replaced.
<br>
<p>As an alternative I would suggest that you &quot;#ifdef 0&quot; out those sections of
<br>
code and leave the send_buffer_nb alternative in a comment. Then leave a
<br>
big TODO comment there for you to go back and fix the semantics - which
<br>
will likely involve just rewriting large sections of that framework. But at
<br>
least you will be able to see what was there before when you try to move it
<br>
to a more nonblocking model.
<br>
<p>The bkmrk component is subtle, maybe more that it should be. So keeping the
<br>
old blocking interfaces there will probably help quite a bit when you get
<br>
to it later. In that component the blocking calls are critical to
<br>
correctness, so we will need to sort out how to make that more asynchronous
<br>
in our redesign.
<br>
<p>Other than that modification (#ifdef comments instead of nonblocking
<br>
replacements), I think this patch is fine. As was mentioned previously, we
<br>
will need to go back (after things compile) and figure out a new model for
<br>
this behavior.
<br>
<p>Thanks!
<br>
Josh
<br>
<p><p><p>On Wed, Dec 4, 2013 at 9:58 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Err... upon further thought, I might be totally wrong about emulating
</span><br>
<span class="quotelev1">&gt; blocking.  There might be (probably are?) rules/assumptions in the ORTE
</span><br>
<span class="quotelev1">&gt; layer (of which I am *not* an expert) that disallow you from [emulating]
</span><br>
<span class="quotelev1">&gt; blocking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that's the case, then there's architectural issues with converting from
</span><br>
<span class="quotelev1">&gt; blocking to nonblocking on both the sending and the receiving sides that
</span><br>
<span class="quotelev1">&gt; might be a bit thorny to sort out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2013, at 10:54 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 25, 2013, at 9:59 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * Send Non-blocking
</span><br>
<span class="quotelev3">&gt; &gt;&gt; */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; int orte_rml_ftrm_send_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                          struct iovec* msg,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                          int count,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                          orte_rml_tag_t tag,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                          int flags,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                          orte_rml_callback_fn_t cbfunc,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                          void* cbdata)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    int ret;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                        &quot;orte_rml_ftrm: send_nb(%s, %d, %d, %d )&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                        ORTE_NAME_PRINT(peer), count, tag, flags);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +                        &quot;orte_rml_ftrm: send_nb(%s, %d, %d )&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +                        ORTE_NAME_PRINT(peer), count, tag);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    if( NULL != orte_rml_ftrm_wrapped_module.send_nb ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, flags, cbfunc,
</span><br>
<span class="quotelev1">&gt; cbdata) ) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -            return ret;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -        }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    return ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -}
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -/*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - * Send Buffer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -int orte_rml_ftrm_send_buffer(orte_process_name_t* peer,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                              opal_buffer_t* buffer,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                              orte_rml_tag_t tag,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                              int flags)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -{
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    int ret;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                        &quot;orte_rml_ftrm: send_buffer(%s, %d, %d )&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                        ORTE_NAME_PRINT(peer), tag, flags);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    if( NULL != orte_rml_ftrm_wrapped_module.send_buffer ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send_buffer(peer, buffer, tag, flags) ) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, cbfunc, cbdata)
</span><br>
<span class="quotelev1">&gt; ) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            return ret;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Similar to my reply about patch 3, I don't think this hunk is correct.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This routine accepts an iovec and sends it in a non-blocking fashion.
</span><br>
<span class="quotelev1">&gt;  I'll bet that the caller frees the iovec upon return from the function
</span><br>
<span class="quotelev1">&gt; (because it used to be a blocking send, and freeing it immediately was
</span><br>
<span class="quotelev1">&gt; acceptable).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But now the iovec may well still be in use when this function returns,
</span><br>
<span class="quotelev1">&gt; so the caller should *not* free/reuse the iovec until it knows that the
</span><br>
<span class="quotelev1">&gt; send has complete.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It may be more desirable to keep the blocking send function
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_send_buffer() and emulate blocking by invoking send_nb under
</span><br>
<span class="quotelev1">&gt; the covers, but then not returning until the send callback has actually
</span><br>
<span class="quotelev1">&gt; been invoked.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then the blocking semantics expected by the caller may well be
</span><br>
<span class="quotelev1">&gt; acceptable/safe.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This loses some potential optimizations of asynchronicity, but it may be
</span><br>
<span class="quotelev1">&gt; worth it: a) performance in this part of the code isn't too critical, and
</span><br>
<span class="quotelev1">&gt; b) blocking semantics are usually simpler and easier to maintain, from the
</span><br>
<span class="quotelev1">&gt; caller's perspective.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This idea may also apply to what I said in reply to patch 3...?  (i.e.,
</span><br>
<span class="quotelev1">&gt; preserve a blocking send by using the _nb variant under the covers, but not
</span><br>
<span class="quotelev1">&gt; returning until the nonblocking variant has actually completed the receive).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Since this is a fairly large change, I didn't look too closely
</span><br>
<span class="quotelev1">&gt; throughout the rest of this patch.  I assume that there are a few other
</span><br>
<span class="quotelev1">&gt; architectural cases similar to this one.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13390/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13391.php">Josh Hursey: "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13389.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
<li><strong>In reply to:</strong> <a href="13371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to	compile	again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
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
