<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 15:59:43 2007" -->
<!-- isoreceived="20070813195943" -->
<!-- sent="Mon, 13 Aug 2007 15:59:28 -0400" -->
<!-- isosent="20070813195928" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="C2E63060.A10B%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070813195216.GD26964_at_minantech.com" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 15:59:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2136.php">Gleb Natapov: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Previous message:</strong> <a href="2134.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2134.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2137.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2137.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/13/07 3:52 PM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Aug 13, 2007 at 09:12:33AM -0600, Galen Shipman wrote:
</span><br>
<span class="quotelev1">&gt; Here are the
</span><br>
<span class="quotelev1">&gt; items we have identified:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
All those things sounds very promising. Is there
<br>
<span class="quotelev1">&gt; tmp branch where you
</span><br>
are going to work on this?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&nbsp;tmp/latency
<br>
<p>Some changes have already gone in - mainly trying to remove as much as
<br>
possible from the isend/send path, before moving on to the list bellow.  Do
<br>
you have cycles to help with this ?
<br>
<p>Rich
<br>
<p><span class="quotelev1">&gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) remove 0 byte optimization of not initializing the convertor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This costs us an &#179;if&#179; in MCA_PML_BASE_SEND_REQUEST_INIT and an  
</span><br>
<span class="quotelev1">&gt; &#179;if&#179; in
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_send_request_start_copy
</span><br>
<span class="quotelev1">&gt; +++
</span><br>
<span class="quotelev1">&gt; Measure the convertor
</span><br>
<span class="quotelev1">&gt; initialization before taking any other action.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) get rid of mca_pml_ob1_send_request_start_prepare and  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_send_request_start_copy by removing the  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA_BTL_FLAGS_SEND_INPLACE flag. Instead we can simply have btl_send  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; return OMPI_SUCCESS if the fragment can be marked as completed and  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_NOT_ON_WIRE if the fragment cannot be marked as complete. This  
</span><br>
<span class="quotelev1">&gt; solves
</span><br>
<span class="quotelev1">&gt; another problem, with IB if there are a bunch of isends  
</span><br>
<span class="quotelev1">&gt; outstanding we end
</span><br>
<span class="quotelev1">&gt; up buffering them all in the btl, marking  
</span><br>
<span class="quotelev1">&gt; completion and never get them on
</span><br>
<span class="quotelev1">&gt; the wire because the BTL runs out of  
</span><br>
<span class="quotelev1">&gt; credits, we never get credits back
</span><br>
<span class="quotelev1">&gt; until finalize because we never  
</span><br>
<span class="quotelev1">&gt; call progress cause the requests are
</span><br>
<span class="quotelev1">&gt; complete.  There is one issue  
</span><br>
<span class="quotelev1">&gt; here, start_prepare calls prepare_src and
</span><br>
<span class="quotelev1">&gt; start_copy calls alloc, I  
</span><br>
<span class="quotelev1">&gt; think we can work around this by just always
</span><br>
<span class="quotelev1">&gt; using prepare_src,  
</span><br>
<span class="quotelev1">&gt; OpenIB BTL will give a fragment off the free list
</span><br>
<span class="quotelev1">&gt; anyway because the  
</span><br>
<span class="quotelev1">&gt; fragment is less than the eager limit.
</span><br>
<span class="quotelev1">&gt; +++
</span><br>
<span class="quotelev1">&gt; Make the
</span><br>
<span class="quotelev1">&gt; BTL return different return codes for the send. If the  
</span><br>
<span class="quotelev1">&gt; fragment is gone,
</span><br>
<span class="quotelev1">&gt; then the PML is responsible of marking the MPI  
</span><br>
<span class="quotelev1">&gt; request as completed and so
</span><br>
<span class="quotelev1">&gt; on. Only the updated BTLs will get any  
</span><br>
<span class="quotelev1">&gt; benefit from this feature. Add a
</span><br>
<span class="quotelev1">&gt; flag into the descriptor to allow or  
</span><br>
<span class="quotelev1">&gt; not the BTL to free the fragment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Add a 3 level flag:
</span><br>
<span class="quotelev1">&gt; - BTL_HAVE_OWNERSHIP : the fragment can be released
</span><br>
<span class="quotelev1">&gt; by the BTL after  
</span><br>
<span class="quotelev1">&gt; the send, and then it report back a special return to the
</span><br>
<span class="quotelev1">&gt; PML
</span><br>
<span class="quotelev1">&gt; - BTL_HAVE_OWNERSHIP_AFTER_CALLBACK : the fragment will be released  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; by the BTL once the completion callback was triggered.
</span><br>
<span class="quotelev1">&gt; - PML_HAVE_OWNERSHIP
</span><br>
<span class="quotelev1">&gt; : the BTL is not allowed to release the fragment  
</span><br>
<span class="quotelev1">&gt; at all (the PML is
</span><br>
<span class="quotelev1">&gt; responsible for this).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Return codes:
</span><br>
<span class="quotelev1">&gt; - done and there will be no
</span><br>
<span class="quotelev1">&gt; callbacks
</span><br>
<span class="quotelev1">&gt; - not done, wait for a callback later
</span><br>
<span class="quotelev1">&gt; - error state
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) Change the remote callback function (and tag value based on what
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; data we are sending), don't use mca_pml_ob1_recv_frag_callback for  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; everything!
</span><br>
<span class="quotelev1">&gt;  I think we need:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_recv_frag_match
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_recv_frag_rndv
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_recv_frag_rget
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_recv_match_ack_copy
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_recv_match_ack_pipeline
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_recv_copy_frag
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_recv_put_request
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_recv_put_fin
</span><br>
<span class="quotelev1">&gt; +++
</span><br>
<span class="quotelev1">&gt; Pass the callback as parameter to the match
</span><br>
<span class="quotelev1">&gt; function will save us 2  
</span><br>
<span class="quotelev1">&gt; switches. Add more registrations in the BTL in
</span><br>
<span class="quotelev1">&gt; order to jump directly  
</span><br>
<span class="quotelev1">&gt; in the correct function (the first 3 require a
</span><br>
<span class="quotelev1">&gt; match while the others  
</span><br>
<span class="quotelev1">&gt; don't). 4 &amp; 4 bits on the tag so each layer will
</span><br>
<span class="quotelev1">&gt; have 4 bits of tags  
</span><br>
<span class="quotelev1">&gt; [i.e. first 4 bits for the protocol tag and lower 4
</span><br>
<span class="quotelev1">&gt; bits they are up  
</span><br>
<span class="quotelev1">&gt; to the protocol] and the registration table will still be
</span><br>
<span class="quotelev1">&gt; local to  
</span><br>
<span class="quotelev1">&gt; each component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4) Get rid of mca_pml_ob1_recv_request_progress; this does the same
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; switch on hdr-&gt;hdr_common.hdr_type that mca_pml_ob1_recv_frag_callback!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I think what we can do here is modify mca_pml_ob1_recv_frag_match to  
</span><br>
<span class="quotelev1">&gt; take
</span><br>
<span class="quotelev1">&gt; a function pointer for what it should call on a successful match.
</span><br>
<span class="quotelev1">&gt;  So based
</span><br>
<span class="quotelev1">&gt; on the receive callback we can pass the correct scheduling  
</span><br>
<span class="quotelev1">&gt; function to
</span><br>
<span class="quotelev1">&gt; invoke into the generic mca_pml_ob1_recv_frag_match
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Recv_request progress
</span><br>
<span class="quotelev1">&gt; is call in a generic way from multiple places,  
</span><br>
<span class="quotelev1">&gt; and we do a big switch
</span><br>
<span class="quotelev1">&gt; inside. In the match function we might want to  
</span><br>
<span class="quotelev1">&gt; pass a function pointer to
</span><br>
<span class="quotelev1">&gt; the successful match progress function.  
</span><br>
<span class="quotelev1">&gt; This way we will be able to
</span><br>
<span class="quotelev1">&gt; specialize what happens after the match,  
</span><br>
<span class="quotelev1">&gt; in a more optimized way. Or the
</span><br>
<span class="quotelev1">&gt; recv_request_match can return the  
</span><br>
<span class="quotelev1">&gt; match and then the caller will have to
</span><br>
<span class="quotelev1">&gt; specialize it's action.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5) Don't initialize the entire request. We can use item 2 below (if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we get back OMPI_SUCCESS from btl_send) then we don't need to fully  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; initialize the request, we need the convertor setup but the rest we  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; pass down the stack in order to setup the match header and setup  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; request if we get OMPI_NOT_ON_WIRE back from btl_send.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we need
</span><br>
<span class="quotelev1">&gt; something like:
</span><br>
<span class="quotelev1">&gt; MCA_PML_BASE_SEND_REQUEST_INIT_CONV
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA_PML_BASE_SEND_REQUEST_INIT_FULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so the first macro just sets up the
</span><br>
<span class="quotelev1">&gt; convertor, the second populates  
</span><br>
<span class="quotelev1">&gt; all the rest of the request state in the
</span><br>
<span class="quotelev1">&gt; case that we will need it  
</span><br>
<span class="quotelev1">&gt; later because the fragment doesn't hit the
</span><br>
<span class="quotelev1">&gt; wire.
</span><br>
<span class="quotelev1">&gt; +++
</span><br>
<span class="quotelev1">&gt; We all agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ &gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 13, 2007, at 9:00 AM, Christian Bell wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On
</span><br>
<span class="quotelev1">&gt; Sun, 12 Aug 2007, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Any objections?  We can
</span><br>
<span class="quotelev1">&gt; discuss what approaches we want to take
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (there's going to be some
</span><br>
<span class="quotelev1">&gt; complications because of the PML driver,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; etc.); perhaps in the Tuesday
</span><br>
<span class="quotelev1">&gt; Mellanox teleconf...?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My main objection is that the only reason you
</span><br>
<span class="quotelev1">&gt; propose to do this  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bogus benchmark? Is there any other
</span><br>
<span class="quotelev1">&gt; reason to implement header  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; caching?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I also hope you don't propose
</span><br>
<span class="quotelev1">&gt; to break layering and somehow cache  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PML headers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in BTL.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Gleb is hitting the main points I wanted to bring up.  We had
</span><br>
<span class="quotelev2">&gt; &gt; examined
</span><br>
<span class="quotelev1">&gt; this header caching in the context of PSM a little while
</span><br>
<span class="quotelev2">&gt; &gt; ago.  0.5us is
</span><br>
<span class="quotelev1">&gt; much more than we had observed -- at 3GHz, 0.5us would
</span><br>
<span class="quotelev2">&gt; &gt; be about 1500
</span><br>
<span class="quotelev1">&gt; cycles of code that has little amounts of branches.
</span><br>
<span class="quotelev2">&gt; &gt; For us, with a much
</span><br>
<span class="quotelev1">&gt; bigger header and more fields to fetch from
</span><br>
<span class="quotelev2">&gt; &gt; different structures, it was
</span><br>
<span class="quotelev1">&gt; more like 350 cycles which is on the
</span><br>
<span class="quotelev2">&gt; &gt; order of 0.1us and not worth the
</span><br>
<span class="quotelev1">&gt; effort (in code complexity,
</span><br>
<span class="quotelev2">&gt; &gt; readability and frankly motivation for
</span><br>
<span class="quotelev1">&gt; performance).  Maybe there's
</span><br>
<span class="quotelev2">&gt; &gt; more to it than just &quot;code caching&quot; -- like
</span><br>
<span class="quotelev1">&gt; sending from pre-pinned
</span><br>
<span class="quotelev2">&gt; &gt; headers or using the RDMA with immediate, etc.
</span><br>
<span class="quotelev1">&gt; But I'd be suprised
</span><br>
<span class="quotelev2">&gt; &gt; to find out that openib btl doesn't do the best thing
</span><br>
<span class="quotelev1">&gt; here.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have pretty good evidence that for CM, the latency difference
</span><br>
<span class="quotelev1">&gt; comes
</span><br>
<span class="quotelev2">&gt; &gt; from the receive-side (in particular opal_progress).  Doesn't the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; openib btl receive-side do something similiar with opal_progress,
</span><br>
<span class="quotelev2">&gt; &gt; i.e.
</span><br>
<span class="quotelev1">&gt; register a callback function?  It probably does something
</span><br>
<span class="quotelev2">&gt; &gt; different like
</span><br>
<span class="quotelev1">&gt; check a few RDMA mailboxes (or per-peer landing pads)
</span><br>
<span class="quotelev2">&gt; &gt; but anything that
</span><br>
<span class="quotelev1">&gt; gets called before or after it as part of
</span><br>
<span class="quotelev2">&gt; &gt; opal_progress is cause for
</span><br>
<span class="quotelev1">&gt; slowdown.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     . . christian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; christian.bell_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; (QLogic Host Solutions Group, formerly
</span><br>
<span class="quotelev1">&gt; Pathscale)
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel
</span><br>
<span class="quotelev1">&gt; mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
   Gleb.
_____________
&gt; __________________________________
devel mailing
&gt; list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2136.php">Gleb Natapov: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Previous message:</strong> <a href="2134.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2134.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2137.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2137.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
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
