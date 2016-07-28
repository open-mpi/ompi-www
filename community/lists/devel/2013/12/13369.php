<?
$subject_val = "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile	again. (recv_*_nb)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 10:46:22 2013" -->
<!-- isoreceived="20131204154622" -->
<!-- sent="Wed, 4 Dec 2013 15:46:21 +0000" -->
<!-- isosent="20131204154621" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile	again. (recv_*_nb)" -->
<!-- id="DFF8ABA9-5DB1-474B-804B-5F21B4D3B956_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1385391563-29584-4-git-send-email-adrian_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile	again. (recv_*_nb)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 10:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13370.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile	again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13368.php">Nathan Hjelm: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13331.php">Adrian Reber: "[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13391.php">Josh Hursey: "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13391.php">Josh Hursey: "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 25, 2013, at 9:59 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; @@ -5616,16 +5597,8 @@ static int do_send_msg_detail(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt;      * Recv the ACK msg
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    if ( 0 &gt; (ret = ompi_rte_recv_buffer(&amp;peer_ref-&gt;proc_name, buffer,
</span><br>
<span class="quotelev1">&gt; -                                         OMPI_CRCP_COORD_BOOKMARK_TAG, 0) ) ) {
</span><br>
<span class="quotelev1">&gt; -        opal_output(mca_crcp_bkmrk_component.super.output_handle,
</span><br>
<span class="quotelev1">&gt; -                    &quot;crcp:bkmrk: do_send_msg_detail: %s --&gt; %s Failed to receive ACK buffer from peer. Return %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; -                    OMPI_NAME_PRINT(OMPI_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; -                    OMPI_NAME_PRINT(&amp;(peer_ref-&gt;proc_name)),
</span><br>
<span class="quotelev1">&gt; -                    ret);
</span><br>
<span class="quotelev1">&gt; -        exit_status = ret;
</span><br>
<span class="quotelev1">&gt; -        goto cleanup;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    ompi_rte_recv_buffer_nb(&amp;peer_ref-&gt;proc_name, OMPI_CRCP_COORD_BOOKMARK_TAG, 0,
</span><br>
<span class="quotelev1">&gt; +                            orte_rml_recv_callback, NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     UNPACK_BUFFER(buffer, recv_response, 1, OPAL_UINT32,
</span><br>
<span class="quotelev1">&gt;                   &quot;crcp:bkmrk: send_msg_details: Failed to unpack the ACK from peer buffer.&quot;);
</span><br>
<p>I see a bunch of hunks like this that I do not think are correct.
<br>
<p>They're replacing orte_rte_recv_buffer() with orte_rte_recv_buffer_nb(), which, by definition, may not actually complete the receive.  Hence, the receive buffer may not be filled by the time orte_rte_recv_buffer_nb() returns, and therefore you can't proceed with the FT processing.  E.g., the UNPACK_BUFFER() statement here may well be undefined because the buffer isn't full yet.
<br>
<p>I'm not sure what this means in terms of overall FT processing -- the fact that UNPACK_BUFFER is erroneous may be fairly obvious, but the other FT processing that occurs below UNPACK_BUFFER, and, indeed, by the caller of this function, may not be able to proceed until this receive completes, either.  
<br>
<p>Ditto for all the other hunks like this.
<br>
<p>If I'm not mistaken, the actual receive will occur in a progress thread, so the cbfunc supplied to orte_rte_recv_buffer_nb() will need to do something in a thread safe manner -- I'm not sure if it will need to transfer control back up to the main thread, or if the FT processing in question is safe to occur in the ORTE progress thread (it would be *much* better if it could occur on the ORTE progress thread so that we can get asynchronous progress of this stuff).
<br>
<p>If I'm correct, then all of those hunks will need to be adapted.  I.e., these aren't just compile errors to be fixed -- they'll also require architectural changes, too.
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
<li><strong>Next message:</strong> <a href="13370.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile	again. (send_*_nb)"</a>
<li><strong>Previous message:</strong> <a href="13368.php">Nathan Hjelm: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13331.php">Adrian Reber: "[OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13391.php">Josh Hursey: "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
<li><strong>Reply:</strong> <a href="13391.php">Josh Hursey: "Re: [OMPI devel] [PATCH 3/4] Trying to get the C/R code to compile again. (recv_*_nb)"</a>
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
