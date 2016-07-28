<?
$subject_val = "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  6 09:34:25 2013" -->
<!-- isoreceived="20131206143425" -->
<!-- sent="Fri, 6 Dec 2013 08:34:25 -0600" -->
<!-- isosent="20131206143425" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)" -->
<!-- id="CAANzjEkEE-PP8_9vW+iFkQGmjNBzurGxxN+DmJuCUtV0XebH7Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DFF8ABA9-5DB1-474B-804B-5F21B4D3B956_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-06 09:34:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13390.php">Josh Hursey: "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="13369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile	again. (recv_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13332.php">Adrian Reber: "[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per my other email, I would suggest #ifdef comments instead of nonblocking
<br>
replacements for the blocking calls. After that modification, I think this
<br>
patch is fine. As was mentioned previously, we will need to go back (after
<br>
things compile) and figure out a new model for this behavior.
<br>
<p>For the existing calls to recv_buffer_nb, converting those to the versions
<br>
without return codes is completely fine and correct. So leave those changes
<br>
in there. It is just when you move from recv_buffer to recv_buffer_nb that
<br>
I would leave some kind of marker for yourself and preserve the prior code.
<br>
<p>After that modification, I think it is ready to be committed.
<br>
<p>Thanks!
<br>
Josh
<br>
<p><p><p>On Wed, Dec 4, 2013 at 9:46 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 25, 2013, at 9:59 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5616,16 +5597,8 @@ static int
</span><br>
<span class="quotelev1">&gt; do_send_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
</span><br>
<span class="quotelev2">&gt; &gt;     /*
</span><br>
<span class="quotelev2">&gt; &gt;      * Recv the ACK msg
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt; -    if ( 0 &gt; (ret = ompi_rte_recv_buffer(&amp;peer_ref-&gt;proc_name, buffer,
</span><br>
<span class="quotelev2">&gt; &gt; -                                         OMPI_CRCP_COORD_BOOKMARK_TAG,
</span><br>
<span class="quotelev1">&gt; 0) ) ) {
</span><br>
<span class="quotelev2">&gt; &gt; -        opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev2">&gt; &gt; -                    &quot;crcp:bkmrk: do_send_msg_detail: %s --&gt; %s Failed
</span><br>
<span class="quotelev1">&gt; to receive ACK buffer from peer. Return %d\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                    OMPI_NAME_PRINT(OMPI_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt; &gt; -                    OMPI_NAME_PRINT(&amp;(peer_ref-&gt;proc_name)),
</span><br>
<span class="quotelev2">&gt; &gt; -                    ret);
</span><br>
<span class="quotelev2">&gt; &gt; -        exit_status = ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_rte_recv_buffer_nb(&amp;peer_ref-&gt;proc_name,
</span><br>
<span class="quotelev1">&gt; OMPI_CRCP_COORD_BOOKMARK_TAG, 0,
</span><br>
<span class="quotelev2">&gt; &gt; +                            orte_rml_recv_callback, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     UNPACK_BUFFER(buffer, recv_response, 1, OPAL_UINT32,
</span><br>
<span class="quotelev2">&gt; &gt;                   &quot;crcp:bkmrk: send_msg_details: Failed to unpack the
</span><br>
<span class="quotelev1">&gt; ACK from peer buffer.&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see a bunch of hunks like this that I do not think are correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They're replacing orte_rte_recv_buffer() with orte_rte_recv_buffer_nb(),
</span><br>
<span class="quotelev1">&gt; which, by definition, may not actually complete the receive.  Hence, the
</span><br>
<span class="quotelev1">&gt; receive buffer may not be filled by the time orte_rte_recv_buffer_nb()
</span><br>
<span class="quotelev1">&gt; returns, and therefore you can't proceed with the FT processing.  E.g., the
</span><br>
<span class="quotelev1">&gt; UNPACK_BUFFER() statement here may well be undefined because the buffer
</span><br>
<span class="quotelev1">&gt; isn't full yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what this means in terms of overall FT processing -- the fact
</span><br>
<span class="quotelev1">&gt; that UNPACK_BUFFER is erroneous may be fairly obvious, but the other FT
</span><br>
<span class="quotelev1">&gt; processing that occurs below UNPACK_BUFFER, and, indeed, by the caller of
</span><br>
<span class="quotelev1">&gt; this function, may not be able to proceed until this receive completes,
</span><br>
<span class="quotelev1">&gt; either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ditto for all the other hunks like this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I'm not mistaken, the actual receive will occur in a progress thread,
</span><br>
<span class="quotelev1">&gt; so the cbfunc supplied to orte_rte_recv_buffer_nb() will need to do
</span><br>
<span class="quotelev1">&gt; something in a thread safe manner -- I'm not sure if it will need to
</span><br>
<span class="quotelev1">&gt; transfer control back up to the main thread, or if the FT processing in
</span><br>
<span class="quotelev1">&gt; question is safe to occur in the ORTE progress thread (it would be *much*
</span><br>
<span class="quotelev1">&gt; better if it could occur on the ORTE progress thread so that we can get
</span><br>
<span class="quotelev1">&gt; asynchronous progress of this stuff).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I'm correct, then all of those hunks will need to be adapted.  I.e.,
</span><br>
<span class="quotelev1">&gt; these aren't just compile errors to be fixed -- they'll also require
</span><br>
<span class="quotelev1">&gt; architectural changes, too.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13391/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13392.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13390.php">Josh Hursey: "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="13369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile	again. (recv_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13332.php">Adrian Reber: "[OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
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
