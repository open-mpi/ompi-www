<?
$subject_val = "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  6 16:12:10 2013" -->
<!-- isoreceived="20131206211210" -->
<!-- sent="Fri, 6 Dec 2013 22:12:09 +0100" -->
<!-- isosent="20131206211209" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)" -->
<!-- id="20131206211209.GH6156_at_lisas.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-06 16:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13398.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13396.php">Ralph Castain: "[OMPI devel] OSHMEM to 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13398.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13398.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I saw that the meeting would be available via webex and was planning to
<br>
join. So yes, I will be there and it would be great to hear what
<br>
is discussed about the FT design and what needs to be changed.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p>On Fri, Dec 06, 2013 at 02:36:09PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Good points.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You know, this checkpoint stuff is all on the agenda to discuss next week at the OMPI dev meeting in Chicago.  Ralph correctly points out that since the fundamental design of ORTE has changed (which caused all this FT bit rot), a bunch of the original FT design isn't right (or necessary) any more, anyway.  We need to talk through this stuff to figure out where to go.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adrian: do you want to join us at the meeting via webex?  I think you're in Germany; we can do this part of the OMPI dev meeting first thing Friday morning US Central time, which would put it mid/late-afternoon for you.  It would probably be good for us to be introduced to you, and for you to hear all the discussion about how we think the FT design will need to be changed, etc.
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
<span class="quotelev2">&gt; &gt; Since the blocking semantics are important for correctness of the prior code, I would not just replace send_buffer with send_buffer_nb. This makes the semantics incorrect, and will make things confusing later when you try to sort out prior calls to send_buffer_nb with those that you replaced.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As an alternative I would suggest that you &quot;#ifdef 0&quot; out those sections of code and leave the send_buffer_nb alternative in a comment. Then leave a big TODO comment there for you to go back and fix the semantics - which will likely involve just rewriting large sections of that framework. But at least you will be able to see what was there before when you try to move it to a more nonblocking model.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The bkmrk component is subtle, maybe more that it should be. So keeping the old blocking interfaces there will probably help quite a bit when you get to it later. In that component the blocking calls are critical to correctness, so we will need to sort out how to make that more asynchronous in our redesign.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Other than that modification (#ifdef comments instead of nonblocking replacements), I think this patch is fine. As was mentioned previously, we will need to go back (after things compile) and figure out a new model for this behavior.
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
<span class="quotelev2">&gt; &gt; On Wed, Dec 4, 2013 at 9:58 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Err... upon further thought, I might be totally wrong about emulating blocking.  There might be (probably are?) rules/assumptions in the ORTE layer (of which I am *not* an expert) that disallow you from [emulating] blocking.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If that's the case, then there's architectural issues with converting from blocking to nonblocking on both the sending and the receiving sides that might be a bit thorny to sort out.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 4, 2013, at 10:54 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
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
<span class="quotelev4">&gt; &gt; &gt;&gt; -        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, flags, cbfunc, cbdata) ) ) {
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
<span class="quotelev4">&gt; &gt; &gt;&gt; -        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_buffer(peer, buffer, tag, flags) ) ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; +        if( ORTE_SUCCESS != (ret = orte_rml_ftrm_wrapped_module.send_nb(peer, msg, count, tag, cbfunc, cbdata) ) ) {
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
<span class="quotelev3">&gt; &gt; &gt; This routine accepts an iovec and sends it in a non-blocking fashion.  I'll bet that the caller frees the iovec upon return from the function (because it used to be a blocking send, and freeing it immediately was acceptable).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But now the iovec may well still be in use when this function returns, so the caller should *not* free/reuse the iovec until it knows that the send has complete.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It may be more desirable to keep the blocking send function orte_rml_ftrm_send_buffer() and emulate blocking by invoking send_nb under the covers, but then not returning until the send callback has actually been invoked.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Then the blocking semantics expected by the caller may well be acceptable/safe.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This loses some potential optimizations of asynchronicity, but it may be worth it: a) performance in this part of the code isn't too critical, and b) blocking semantics are usually simpler and easier to maintain, from the caller's perspective.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This idea may also apply to what I said in reply to patch 3...?  (i.e., preserve a blocking send by using the _nb variant under the covers, but not returning until the nonblocking variant has actually completed the receive).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Since this is a fairly large change, I didn't look too closely throughout the rest of this patch.  I assume that there are a few other architectural cases similar to this one.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><pre>
-- 
Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
	The FIELD GUIDE to NORTH AMERICAN MALES
SPECIES:	Cranial Males
SUBSPECIES:	The Hacker (homo computatis)
Plumage:
	All clothes have a slightly crumpled look as though they came off the
	top of the laundry basket.  Style varies with status.  Hacker managers
	wear gray polyester slacks, pink or pastel shirts with wide collars,
	and paisley ties; staff wears cinched-up baggy corduroy pants, white
	or blue shirts with button-down collars, and penholder in pocket.
	Both managers and staff wear running shoes to work, and a black
	plastic digital watch with calculator.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13398.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13396.php">Ralph Castain: "[OMPI devel] OSHMEM to 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13398.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13398.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
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
