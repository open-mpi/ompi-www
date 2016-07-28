<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 11:13:20 2007" -->
<!-- isoreceived="20070813151320" -->
<!-- sent="Mon, 13 Aug 2007 09:12:33 -0600" -->
<!-- isosent="20070813151233" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="C29B5D28-FCB8-45D9-BD2C-05B4F399AB9E_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="20070813150036.GS31748_at_pathscale.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 11:12:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2124.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2122.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2120.php">Christian Bell: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2132.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2132.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2134.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we need to take a step back from micro-optimizations such as  
<br>
header caching.
<br>
<p>Rich, George, Brian and I are currently looking into latency  
<br>
improvements. We came up with several areas of performance  
<br>
enhancements that can be done with minimal disruption. The progress  
<br>
issue that Christian and others have pointed does appear to be a  
<br>
problem, but will take a bit more work. I would like to see progress  
<br>
in these areas first as I really don't like the idea of caching more  
<br>
endpoint state in OMPI for micro-benchmark latency improvements until  
<br>
we are certain we have done the ground work for improving latency in  
<br>
the general case.
<br>
<p><p><p><p>Here are the items we have identified:
<br>
<p><p>------------------------------------------------------------------------ 
<br>
<pre>
----
1) remove 0 byte optimization of not initializing the convertor
      This costs us an &#147;if&#147; in MCA_PML_BASE_SEND_REQUEST_INIT and an  
&#147;if&#147; in mca_pml_ob1_send_request_start_copy
+++
Measure the convertor initialization before taking any other action.
------------------------------------------------------------------------ 
----
------------------------------------------------------------------------ 
----
2) get rid of mca_pml_ob1_send_request_start_prepare and  
mca_pml_ob1_send_request_start_copy by removing the  
MCA_BTL_FLAGS_SEND_INPLACE flag. Instead we can simply have btl_send  
return OMPI_SUCCESS if the fragment can be marked as completed and  
OMPI_NOT_ON_WIRE if the fragment cannot be marked as complete. This  
solves another problem, with IB if there are a bunch of isends  
outstanding we end up buffering them all in the btl, marking  
completion and never get them on the wire because the BTL runs out of  
credits, we never get credits back until finalize because we never  
call progress cause the requests are complete.  There is one issue  
here, start_prepare calls prepare_src and start_copy calls alloc, I  
think we can work around this by just always using prepare_src,  
OpenIB BTL will give a fragment off the free list anyway because the  
fragment is less than the eager limit.
+++
Make the BTL return different return codes for the send. If the  
fragment is gone, then the PML is responsible of marking the MPI  
request as completed and so on. Only the updated BTLs will get any  
benefit from this feature. Add a flag into the descriptor to allow or  
not the BTL to free the fragment.
Add a 3 level flag:
- BTL_HAVE_OWNERSHIP : the fragment can be released by the BTL after  
the send, and then it report back a special return to the PML
- BTL_HAVE_OWNERSHIP_AFTER_CALLBACK : the fragment will be released  
by the BTL once the completion callback was triggered.
- PML_HAVE_OWNERSHIP : the BTL is not allowed to release the fragment  
at all (the PML is responsible for this).
Return codes:
- done and there will be no callbacks
- not done, wait for a callback later
- error state
------------------------------------------------------------------------ 
----
------------------------------------------------------------------------ 
----
3) Change the remote callback function (and tag value based on what  
data we are sending), don't use mca_pml_ob1_recv_frag_callback for  
everything!
	I think we need:
	mca_pml_ob1_recv_frag_match
	mca_pml_ob1_recv_frag_rndv
	mca_pml_ob1_recv_frag_rget
	
	mca_pml_ob1_recv_match_ack_copy
	mca_pml_ob1_recv_match_ack_pipeline
	
	mca_pml_ob1_recv_copy_frag
	mca_pml_ob1_recv_put_request
	mca_pml_ob1_recv_put_fin
+++
Pass the callback as parameter to the match function will save us 2  
switches. Add more registrations in the BTL in order to jump directly  
in the correct function (the first 3 require a match while the others  
don't). 4 &amp; 4 bits on the tag so each layer will have 4 bits of tags  
[i.e. first 4 bits for the protocol tag and lower 4 bits they are up  
to the protocol] and the registration table will still be local to  
each component.
------------------------------------------------------------------------ 
----
------------------------------------------------------------------------ 
----
4) Get rid of mca_pml_ob1_recv_request_progress; this does the same  
switch on hdr-&gt;hdr_common.hdr_type that mca_pml_ob1_recv_frag_callback!
	I think what we can do here is modify mca_pml_ob1_recv_frag_match to  
take a function pointer for what it should call on a successful match.
	So based on the receive callback we can pass the correct scheduling  
function to invoke into the generic mca_pml_ob1_recv_frag_match
Recv_request progress is call in a generic way from multiple places,  
and we do a big switch inside. In the match function we might want to  
pass a function pointer to the successful match progress function.  
This way we will be able to specialize what happens after the match,  
in a more optimized way. Or the recv_request_match can return the  
match and then the caller will have to specialize it's action.
------------------------------------------------------------------------ 
----
------------------------------------------------------------------------ 
----
5) Don't initialize the entire request. We can use item 2 below (if  
we get back OMPI_SUCCESS from btl_send) then we don't need to fully  
initialize the request, we need the convertor setup but the rest we  
can pass down the stack in order to setup the match header and setup  
the request if we get OMPI_NOT_ON_WIRE back from btl_send.
I think we need something like:
MCA_PML_BASE_SEND_REQUEST_INIT_CONV
and
MCA_PML_BASE_SEND_REQUEST_INIT_FULL
so the first macro just sets up the convertor, the second populates  
all the rest of the request state in the case that we will need it  
later because the fragment doesn't hit the wire.
+++
We all agreed.
------------------------------------------------------------------------ 
----
On Aug 13, 2007, at 9:00 AM, Christian Bell wrote:
&gt; On Sun, 12 Aug 2007, Gleb Natapov wrote:
&gt;
&gt;&gt;&gt; Any objections?  We can discuss what approaches we want to take
&gt;&gt;&gt; (there's going to be some complications because of the PML driver,
&gt;&gt;&gt; etc.); perhaps in the Tuesday Mellanox teleconf...?
&gt;&gt;&gt;
&gt;&gt; My main objection is that the only reason you propose to do this  
&gt;&gt; is some
&gt;&gt; bogus benchmark? Is there any other reason to implement header  
&gt;&gt; caching?
&gt;&gt; I also hope you don't propose to break layering and somehow cache  
&gt;&gt; PML headers
&gt;&gt; in BTL.
&gt;
&gt; Gleb is hitting the main points I wanted to bring up.  We had
&gt; examined this header caching in the context of PSM a little while
&gt; ago.  0.5us is much more than we had observed -- at 3GHz, 0.5us would
&gt; be about 1500 cycles of code that has little amounts of branches.
&gt; For us, with a much bigger header and more fields to fetch from
&gt; different structures, it was more like 350 cycles which is on the
&gt; order of 0.1us and not worth the effort (in code complexity,
&gt; readability and frankly motivation for performance).  Maybe there's
&gt; more to it than just &quot;code caching&quot; -- like sending from pre-pinned
&gt; headers or using the RDMA with immediate, etc.  But I'd be suprised
&gt; to find out that openib btl doesn't do the best thing here.
&gt;
&gt; I have pretty good evidence that for CM, the latency difference comes
&gt; from the receive-side (in particular opal_progress).  Doesn't the
&gt; openib btl receive-side do something similiar with opal_progress,
&gt; i.e. register a callback function?  It probably does something
&gt; different like check a few RDMA mailboxes (or per-peer landing pads)
&gt; but anything that gets called before or after it as part of
&gt; opal_progress is cause for slowdown.
&gt;
&gt;     . . christian
&gt;
&gt; -- 
&gt; christian.bell_at_[hidden]
&gt; (QLogic Host Solutions Group, formerly Pathscale)
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2124.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2122.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2120.php">Christian Bell: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2132.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2132.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2134.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
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
