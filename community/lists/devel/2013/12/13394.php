<?
$subject_val = "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  6 09:46:47 2013" -->
<!-- isoreceived="20131206144647" -->
<!-- sent="Fri, 6 Dec 2013 08:46:47 -0600" -->
<!-- isosent="20131206144647" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)" -->
<!-- id="CAANzjEkhAzbf=195GaAcvJn8r6rYbJ_U3RncN7Mq_BkvERmqDA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7098F37F-755D-45A6-87B8-51BC296E71E0_at_cisco.com" -->
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
<strong>Date:</strong> 2013-12-06 09:46:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13395.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Calling ibv_fork_init() in the openib BTL"</a>
<li><strong>Previous message:</strong> <a href="13393.php">Josh Hursey: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13397.php">Adrian Reber: "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's a great idea Jeff. I did not know it had made it on the agenda for
<br>
that meeting. I would like to attend, and my Friday morning is pretty open
<br>
at the moment. With timezones, would a doodle poll be useful here or do you
<br>
think we can sort it out via email?
<br>
<p>Thanks.
<br>
<p>Josh
<br>
<p><p>On Fri, Dec 6, 2013 at 8:36 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Good points.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You know, this checkpoint stuff is all on the agenda to discuss next week
</span><br>
<span class="quotelev1">&gt; at the OMPI dev meeting in Chicago.  Ralph correctly points out that since
</span><br>
<span class="quotelev1">&gt; the fundamental design of ORTE has changed (which caused all this FT bit
</span><br>
<span class="quotelev1">&gt; rot), a bunch of the original FT design isn't right (or necessary) any
</span><br>
<span class="quotelev1">&gt; more, anyway.  We need to talk through this stuff to figure out where to go.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adrian: do you want to join us at the meeting via webex?  I think you're
</span><br>
<span class="quotelev1">&gt; in Germany; we can do this part of the OMPI dev meeting first thing Friday
</span><br>
<span class="quotelev1">&gt; morning US Central time, which would put it mid/late-afternoon for you.  It
</span><br>
<span class="quotelev1">&gt; would probably be good for us to be introduced to you, and for you to hear
</span><br>
<span class="quotelev1">&gt; all the discussion about how we think the FT design will need to be
</span><br>
<span class="quotelev1">&gt; changed, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/wiki/Dec13Meeting">https://svn.open-mpi.org/trac/ompi/wiki/Dec13Meeting</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2013, at 9:30 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Since the blocking semantics are important for correctness of the prior
</span><br>
<span class="quotelev1">&gt; code, I would not just replace send_buffer with send_buffer_nb. This makes
</span><br>
<span class="quotelev1">&gt; the semantics incorrect, and will make things confusing later when you try
</span><br>
<span class="quotelev1">&gt; to sort out prior calls to send_buffer_nb with those that you replaced.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As an alternative I would suggest that you &quot;#ifdef 0&quot; out those sections
</span><br>
<span class="quotelev1">&gt; of code and leave the send_buffer_nb alternative in a comment. Then leave a
</span><br>
<span class="quotelev1">&gt; big TODO comment there for you to go back and fix the semantics - which
</span><br>
<span class="quotelev1">&gt; will likely involve just rewriting large sections of that framework. But at
</span><br>
<span class="quotelev1">&gt; least you will be able to see what was there before when you try to move it
</span><br>
<span class="quotelev1">&gt; to a more nonblocking model.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The bkmrk component is subtle, maybe more that it should be. So keeping
</span><br>
<span class="quotelev1">&gt; the old blocking interfaces there will probably help quite a bit when you
</span><br>
<span class="quotelev1">&gt; get to it later. In that component the blocking calls are critical to
</span><br>
<span class="quotelev1">&gt; correctness, so we will need to sort out how to make that more asynchronous
</span><br>
<span class="quotelev1">&gt; in our redesign.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other than that modification (#ifdef comments instead of nonblocking
</span><br>
<span class="quotelev1">&gt; replacements), I think this patch is fine. As was mentioned previously, we
</span><br>
<span class="quotelev1">&gt; will need to go back (after things compile) and figure out a new model for
</span><br>
<span class="quotelev1">&gt; this behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Dec 4, 2013 at 9:58 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Err... upon further thought, I might be totally wrong about emulating
</span><br>
<span class="quotelev1">&gt; blocking.  There might be (probably are?) rules/assumptions in the ORTE
</span><br>
<span class="quotelev1">&gt; layer (of which I am *not* an expert) that disallow you from [emulating]
</span><br>
<span class="quotelev1">&gt; blocking.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If that's the case, then there's architectural issues with converting
</span><br>
<span class="quotelev1">&gt; from blocking to nonblocking on both the sending and the receiving sides
</span><br>
<span class="quotelev1">&gt; that might be a bit thorny to sort out.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 4, 2013, at 10:54 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Nov 25, 2013, at 9:59 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; * Send Non-blocking
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; int orte_rml_ftrm_send_nb(orte_process_name_t* peer,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;                          struct iovec* msg,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;                          int count,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;                          orte_rml_tag_t tag,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -                          int flags,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;                          orte_rml_callback_fn_t cbfunc,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;                          void* cbdata)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    int ret;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -                        &quot;orte_rml_ftrm: send_nb(%s, %d, %d, %d )&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -                        ORTE_NAME_PRINT(peer), count, tag, flags);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +                        &quot;orte_rml_ftrm: send_nb(%s, %d, %d )&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +                        ORTE_NAME_PRINT(peer), count, tag);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    if( NULL != orte_rml_ftrm_wrapped_module.send_nb ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, flags, cbfunc,
</span><br>
<span class="quotelev1">&gt; cbdata) ) ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -            return ret;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -        }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -    }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -    return ORTE_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -}
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -/*
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; - * Send Buffer
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; - */
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -int orte_rml_ftrm_send_buffer(orte_process_name_t* peer,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -                              opal_buffer_t* buffer,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -                              orte_rml_tag_t tag,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -                              int flags)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -{
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -    int ret;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -    opal_output_verbose(20, rml_ftrm_output_handle,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -                        &quot;orte_rml_ftrm: send_buffer(%s, %d, %d )&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -                        ORTE_NAME_PRINT(peer), tag, flags);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -    if( NULL != orte_rml_ftrm_wrapped_module.send_buffer ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send_buffer(peer, buffer, tag, flags) ) ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +        if( ORTE_SUCCESS != (ret =
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, cbfunc, cbdata)
</span><br>
<span class="quotelev1">&gt; ) ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;            return ret;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;        }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Similar to my reply about patch 3, I don't think this hunk is correct.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This routine accepts an iovec and sends it in a non-blocking fashion.
</span><br>
<span class="quotelev1">&gt;  I'll bet that the caller frees the iovec upon return from the function
</span><br>
<span class="quotelev1">&gt; (because it used to be a blocking send, and freeing it immediately was
</span><br>
<span class="quotelev1">&gt; acceptable).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But now the iovec may well still be in use when this function returns,
</span><br>
<span class="quotelev1">&gt; so the caller should *not* free/reuse the iovec until it knows that the
</span><br>
<span class="quotelev1">&gt; send has complete.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It may be more desirable to keep the blocking send function
</span><br>
<span class="quotelev1">&gt; orte_rml_ftrm_send_buffer() and emulate blocking by invoking send_nb under
</span><br>
<span class="quotelev1">&gt; the covers, but then not returning until the send callback has actually
</span><br>
<span class="quotelev1">&gt; been invoked.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Then the blocking semantics expected by the caller may well be
</span><br>
<span class="quotelev1">&gt; acceptable/safe.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This loses some potential optimizations of asynchronicity, but it may
</span><br>
<span class="quotelev1">&gt; be worth it: a) performance in this part of the code isn't too critical,
</span><br>
<span class="quotelev1">&gt; and b) blocking semantics are usually simpler and easier to maintain, from
</span><br>
<span class="quotelev1">&gt; the caller's perspective.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This idea may also apply to what I said in reply to patch 3...?
</span><br>
<span class="quotelev1">&gt;  (i.e., preserve a blocking send by using the _nb variant under the covers,
</span><br>
<span class="quotelev1">&gt; but not returning until the nonblocking variant has actually completed the
</span><br>
<span class="quotelev1">&gt; receive).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Since this is a fairly large change, I didn't look too closely
</span><br>
<span class="quotelev1">&gt; throughout the rest of this patch.  I assume that there are a few other
</span><br>
<span class="quotelev1">&gt; architectural cases similar to this one.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt; &gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev2">&gt; &gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13394/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13395.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Calling ibv_fork_init() in the openib BTL"</a>
<li><strong>Previous message:</strong> <a href="13393.php">Josh Hursey: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13397.php">Adrian Reber: "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
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
