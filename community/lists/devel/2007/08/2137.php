<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 16:10:54 2007" -->
<!-- isoreceived="20070813201054" -->
<!-- sent="Mon, 13 Aug 2007 23:10:47 +0300" -->
<!-- isosent="20070813201047" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="20070813201046.GF26964_at_minantech.com" -->
<!-- charset="cp1255" -->
<!-- inreplyto="C2E63060.A10B%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 16:10:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2138.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Previous message:</strong> <a href="2136.php">Gleb Natapov: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>In reply to:</strong> <a href="2135.php">Richard Graham: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2110.php">Terry D. Dontje: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 13, 2007 at 03:59:28PM -0400, Richard Graham wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/13/07 3:52 PM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Aug 13, 2007 at 09:12:33AM -0600, Galen Shipman wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Here are the
</span><br>
<span class="quotelev2">&gt; &gt; items we have identified:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; All those things sounds very promising. Is there
</span><br>
<span class="quotelev2">&gt; &gt; tmp branch where you
</span><br>
<span class="quotelev1">&gt; are going to work on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  tmp/latency
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some changes have already gone in - mainly trying to remove as much as
</span><br>
<span class="quotelev1">&gt; possible from the isend/send path, before moving on to the list bellow.  Do
</span><br>
<span class="quotelev1">&gt; you have cycles to help with this ?
</span><br>
I am very interested, not sure about cycles though. I'll get back from
<br>
my vacation next week and look over this list one more time to see where
<br>
I can help.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1) remove 0 byte optimization of not initializing the convertor
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This costs us an &#179;if&#179; in MCA_PML_BASE_SEND_REQUEST_INIT and an  
</span><br>
<span class="quotelev2">&gt; &gt; &#179;if&#179; in
</span><br>
<span class="quotelev2">&gt; &gt; mca_pml_ob1_send_request_start_copy
</span><br>
<span class="quotelev2">&gt; &gt; +++
</span><br>
<span class="quotelev2">&gt; &gt; Measure the convertor
</span><br>
<span class="quotelev2">&gt; &gt; initialization before taking any other action.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2) get rid of mca_pml_ob1_send_request_start_prepare and  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mca_pml_ob1_send_request_start_copy by removing the  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MCA_BTL_FLAGS_SEND_INPLACE flag. Instead we can simply have btl_send  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; return OMPI_SUCCESS if the fragment can be marked as completed and  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_NOT_ON_WIRE if the fragment cannot be marked as complete. This  
</span><br>
<span class="quotelev2">&gt; &gt; solves
</span><br>
<span class="quotelev2">&gt; &gt; another problem, with IB if there are a bunch of isends  
</span><br>
<span class="quotelev2">&gt; &gt; outstanding we end
</span><br>
<span class="quotelev2">&gt; &gt; up buffering them all in the btl, marking  
</span><br>
<span class="quotelev2">&gt; &gt; completion and never get them on
</span><br>
<span class="quotelev2">&gt; &gt; the wire because the BTL runs out of  
</span><br>
<span class="quotelev2">&gt; &gt; credits, we never get credits back
</span><br>
<span class="quotelev2">&gt; &gt; until finalize because we never  
</span><br>
<span class="quotelev2">&gt; &gt; call progress cause the requests are
</span><br>
<span class="quotelev2">&gt; &gt; complete.  There is one issue  
</span><br>
<span class="quotelev2">&gt; &gt; here, start_prepare calls prepare_src and
</span><br>
<span class="quotelev2">&gt; &gt; start_copy calls alloc, I  
</span><br>
<span class="quotelev2">&gt; &gt; think we can work around this by just always
</span><br>
<span class="quotelev2">&gt; &gt; using prepare_src,  
</span><br>
<span class="quotelev2">&gt; &gt; OpenIB BTL will give a fragment off the free list
</span><br>
<span class="quotelev2">&gt; &gt; anyway because the  
</span><br>
<span class="quotelev2">&gt; &gt; fragment is less than the eager limit.
</span><br>
<span class="quotelev2">&gt; &gt; +++
</span><br>
<span class="quotelev2">&gt; &gt; Make the
</span><br>
<span class="quotelev2">&gt; &gt; BTL return different return codes for the send. If the  
</span><br>
<span class="quotelev2">&gt; &gt; fragment is gone,
</span><br>
<span class="quotelev2">&gt; &gt; then the PML is responsible of marking the MPI  
</span><br>
<span class="quotelev2">&gt; &gt; request as completed and so
</span><br>
<span class="quotelev2">&gt; &gt; on. Only the updated BTLs will get any  
</span><br>
<span class="quotelev2">&gt; &gt; benefit from this feature. Add a
</span><br>
<span class="quotelev2">&gt; &gt; flag into the descriptor to allow or  
</span><br>
<span class="quotelev2">&gt; &gt; not the BTL to free the fragment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Add a 3 level flag:
</span><br>
<span class="quotelev2">&gt; &gt; - BTL_HAVE_OWNERSHIP : the fragment can be released
</span><br>
<span class="quotelev2">&gt; &gt; by the BTL after  
</span><br>
<span class="quotelev2">&gt; &gt; the send, and then it report back a special return to the
</span><br>
<span class="quotelev2">&gt; &gt; PML
</span><br>
<span class="quotelev2">&gt; &gt; - BTL_HAVE_OWNERSHIP_AFTER_CALLBACK : the fragment will be released  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; by the BTL once the completion callback was triggered.
</span><br>
<span class="quotelev2">&gt; &gt; - PML_HAVE_OWNERSHIP
</span><br>
<span class="quotelev2">&gt; &gt; : the BTL is not allowed to release the fragment  
</span><br>
<span class="quotelev2">&gt; &gt; at all (the PML is
</span><br>
<span class="quotelev2">&gt; &gt; responsible for this).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Return codes:
</span><br>
<span class="quotelev2">&gt; &gt; - done and there will be no
</span><br>
<span class="quotelev2">&gt; &gt; callbacks
</span><br>
<span class="quotelev2">&gt; &gt; - not done, wait for a callback later
</span><br>
<span class="quotelev2">&gt; &gt; - error state
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 3) Change the remote callback function (and tag value based on what
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; data we are sending), don't use mca_pml_ob1_recv_frag_callback for  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; everything!
</span><br>
<span class="quotelev2">&gt; &gt;  I think we need:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  mca_pml_ob1_recv_frag_match
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  mca_pml_ob1_recv_frag_rndv
</span><br>
<span class="quotelev2">&gt; &gt;  mca_pml_ob1_recv_frag_rget
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  mca_pml_ob1_recv_match_ack_copy
</span><br>
<span class="quotelev2">&gt; &gt;  mca_pml_ob1_recv_match_ack_pipeline
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  mca_pml_ob1_recv_copy_frag
</span><br>
<span class="quotelev2">&gt; &gt;  mca_pml_ob1_recv_put_request
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  mca_pml_ob1_recv_put_fin
</span><br>
<span class="quotelev2">&gt; &gt; +++
</span><br>
<span class="quotelev2">&gt; &gt; Pass the callback as parameter to the match
</span><br>
<span class="quotelev2">&gt; &gt; function will save us 2  
</span><br>
<span class="quotelev2">&gt; &gt; switches. Add more registrations in the BTL in
</span><br>
<span class="quotelev2">&gt; &gt; order to jump directly  
</span><br>
<span class="quotelev2">&gt; &gt; in the correct function (the first 3 require a
</span><br>
<span class="quotelev2">&gt; &gt; match while the others  
</span><br>
<span class="quotelev2">&gt; &gt; don't). 4 &amp; 4 bits on the tag so each layer will
</span><br>
<span class="quotelev2">&gt; &gt; have 4 bits of tags  
</span><br>
<span class="quotelev2">&gt; &gt; [i.e. first 4 bits for the protocol tag and lower 4
</span><br>
<span class="quotelev2">&gt; &gt; bits they are up  
</span><br>
<span class="quotelev2">&gt; &gt; to the protocol] and the registration table will still be
</span><br>
<span class="quotelev2">&gt; &gt; local to  
</span><br>
<span class="quotelev2">&gt; &gt; each component.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 4) Get rid of mca_pml_ob1_recv_request_progress; this does the same
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; switch on hdr-&gt;hdr_common.hdr_type that mca_pml_ob1_recv_frag_callback!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I think what we can do here is modify mca_pml_ob1_recv_frag_match to  
</span><br>
<span class="quotelev2">&gt; &gt; take
</span><br>
<span class="quotelev2">&gt; &gt; a function pointer for what it should call on a successful match.
</span><br>
<span class="quotelev2">&gt; &gt;  So based
</span><br>
<span class="quotelev2">&gt; &gt; on the receive callback we can pass the correct scheduling  
</span><br>
<span class="quotelev2">&gt; &gt; function to
</span><br>
<span class="quotelev2">&gt; &gt; invoke into the generic mca_pml_ob1_recv_frag_match
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Recv_request progress
</span><br>
<span class="quotelev2">&gt; &gt; is call in a generic way from multiple places,  
</span><br>
<span class="quotelev2">&gt; &gt; and we do a big switch
</span><br>
<span class="quotelev2">&gt; &gt; inside. In the match function we might want to  
</span><br>
<span class="quotelev2">&gt; &gt; pass a function pointer to
</span><br>
<span class="quotelev2">&gt; &gt; the successful match progress function.  
</span><br>
<span class="quotelev2">&gt; &gt; This way we will be able to
</span><br>
<span class="quotelev2">&gt; &gt; specialize what happens after the match,  
</span><br>
<span class="quotelev2">&gt; &gt; in a more optimized way. Or the
</span><br>
<span class="quotelev2">&gt; &gt; recv_request_match can return the  
</span><br>
<span class="quotelev2">&gt; &gt; match and then the caller will have to
</span><br>
<span class="quotelev2">&gt; &gt; specialize it's action.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 5) Don't initialize the entire request. We can use item 2 below (if
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; we get back OMPI_SUCCESS from btl_send) then we don't need to fully  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; initialize the request, we need the convertor setup but the rest we  
</span><br>
<span class="quotelev2">&gt; &gt; can
</span><br>
<span class="quotelev2">&gt; &gt; pass down the stack in order to setup the match header and setup  
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; request if we get OMPI_NOT_ON_WIRE back from btl_send.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think we need
</span><br>
<span class="quotelev2">&gt; &gt; something like:
</span><br>
<span class="quotelev2">&gt; &gt; MCA_PML_BASE_SEND_REQUEST_INIT_CONV
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MCA_PML_BASE_SEND_REQUEST_INIT_FULL
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; so the first macro just sets up the
</span><br>
<span class="quotelev2">&gt; &gt; convertor, the second populates  
</span><br>
<span class="quotelev2">&gt; &gt; all the rest of the request state in the
</span><br>
<span class="quotelev2">&gt; &gt; case that we will need it  
</span><br>
<span class="quotelev2">&gt; &gt; later because the fragment doesn't hit the
</span><br>
<span class="quotelev2">&gt; &gt; wire.
</span><br>
<span class="quotelev2">&gt; &gt; +++
</span><br>
<span class="quotelev2">&gt; &gt; We all agreed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 13, 2007, at 9:00 AM, Christian Bell wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On
</span><br>
<span class="quotelev2">&gt; &gt; Sun, 12 Aug 2007, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Any objections?  We can
</span><br>
<span class="quotelev2">&gt; &gt; discuss what approaches we want to take
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; (there's going to be some
</span><br>
<span class="quotelev2">&gt; &gt; complications because of the PML driver,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; etc.); perhaps in the Tuesday
</span><br>
<span class="quotelev2">&gt; &gt; Mellanox teleconf...?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; My main objection is that the only reason you
</span><br>
<span class="quotelev2">&gt; &gt; propose to do this  
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; is some
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; bogus benchmark? Is there any other
</span><br>
<span class="quotelev2">&gt; &gt; reason to implement header  
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; caching?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I also hope you don't propose
</span><br>
<span class="quotelev2">&gt; &gt; to break layering and somehow cache  
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; PML headers
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; in BTL.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gleb is hitting the main points I wanted to bring up.  We had
</span><br>
<span class="quotelev3">&gt; &gt; &gt; examined
</span><br>
<span class="quotelev2">&gt; &gt; this header caching in the context of PSM a little while
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ago.  0.5us is
</span><br>
<span class="quotelev2">&gt; &gt; much more than we had observed -- at 3GHz, 0.5us would
</span><br>
<span class="quotelev3">&gt; &gt; &gt; be about 1500
</span><br>
<span class="quotelev2">&gt; &gt; cycles of code that has little amounts of branches.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For us, with a much
</span><br>
<span class="quotelev2">&gt; &gt; bigger header and more fields to fetch from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; different structures, it was
</span><br>
<span class="quotelev2">&gt; &gt; more like 350 cycles which is on the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; order of 0.1us and not worth the
</span><br>
<span class="quotelev2">&gt; &gt; effort (in code complexity,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; readability and frankly motivation for
</span><br>
<span class="quotelev2">&gt; &gt; performance).  Maybe there's
</span><br>
<span class="quotelev3">&gt; &gt; &gt; more to it than just &quot;code caching&quot; -- like
</span><br>
<span class="quotelev2">&gt; &gt; sending from pre-pinned
</span><br>
<span class="quotelev3">&gt; &gt; &gt; headers or using the RDMA with immediate, etc.
</span><br>
<span class="quotelev2">&gt; &gt; But I'd be suprised
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to find out that openib btl doesn't do the best thing
</span><br>
<span class="quotelev2">&gt; &gt; here.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have pretty good evidence that for CM, the latency difference
</span><br>
<span class="quotelev2">&gt; &gt; comes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from the receive-side (in particular opal_progress).  Doesn't the
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openib btl receive-side do something similiar with opal_progress,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i.e.
</span><br>
<span class="quotelev2">&gt; &gt; register a callback function?  It probably does something
</span><br>
<span class="quotelev3">&gt; &gt; &gt; different like
</span><br>
<span class="quotelev2">&gt; &gt; check a few RDMA mailboxes (or per-peer landing pads)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but anything that
</span><br>
<span class="quotelev2">&gt; &gt; gets called before or after it as part of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_progress is cause for
</span><br>
<span class="quotelev2">&gt; &gt; slowdown.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     . . christian
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; christian.bell_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (QLogic Host Solutions Group, formerly
</span><br>
<span class="quotelev2">&gt; &gt; Pathscale)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel
</span><br>
<span class="quotelev2">&gt; &gt; mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Gleb.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _____________
</span><br>
<span class="quotelev2">&gt; &gt; __________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing
</span><br>
<span class="quotelev2">&gt; &gt; list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2138.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Previous message:</strong> <a href="2136.php">Gleb Natapov: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>In reply to:</strong> <a href="2135.php">Richard Graham: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2110.php">Terry D. Dontje: "Re: [OMPI devel] openib btl header caching"</a>
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
