<?
$subject_val = "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 11 10:58:47 2009" -->
<!-- isoreceived="20091211155847" -->
<!-- sent="Fri, 11 Dec 2009 10:58:39 -0500" -->
<!-- isosent="20091211155839" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t" -->
<!-- id="F1D9AC12-58D1-4ED5-9705-5DEE45A24FBC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C73861F9.7321%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-11 10:58:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7222.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Previous message:</strong> <a href="7220.php">Ralph Castain: "Re: [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7157.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked about this on the phone yesterday.
<br>
<p>Brian, Jeff, Terry, and Rolf were there.  George was able to join for a short period of time.
<br>
<p>George's objections seemed to be twofold (please correct if wrong!):
<br>
<p>1. Why not change all 3 function pointers to take an additional (void*)?  George misunderstood that the other 2 function pointers are mandated by MPI semantics and cannot be changed -- Brian is only proposing to change the one not-mandated-by-MPI function pointer signature that we have in ompi_request_t.
<br>
<p>2. UTK has apparently implemented a different solution; they modified ompi_free_list_t to add an additional N bytes after each request that can be used for whatever purpose you want.  This gets around the issue where an entity that wants to cache additional information on an ompi_request_t is not the entity that allocates the request, and therefore cannot do a &quot;super&quot; kind of trick that we usually use to cache additional information on a fixed struct.  However, George alluded to some issues with reallocing lists of requests to make this work (it wasn't exactly clear what/how, but he did say it was during MPI_INIT before any requests are actually used), but this issue alone seems like a dealbreaker because the one-sided stuff is lazily loaded (i.e., after MPI_INIT) -- re-allocing any existing requests at this point is not possible because their pointer values will change.
<br>
<p>So I *think* we came down to it being ok to add the extra (void*) into the 1 callback function signature that Brian was proposing (I'm not 100% sure because George had to leave early).
<br>
<p>George -- Rich -- this is your last chance to object...  Otherwise, I think we say it's ok for Brian to implement this whenever he gets to it (likely over the Christmas break).
<br>
<p><p><p>On Nov 29, 2009, at 7:38 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure.  Since I had talked to you and Jeff about it a year ago (when you
</span><br>
<span class="quotelev1">&gt; added the callback) and you didn't complain, I assumed you two would be the
</span><br>
<span class="quotelev1">&gt; only ones to care and wouldn't complain this time.  Guess I should have
</span><br>
<span class="quotelev1">&gt; known better :).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/27/09 18:24 , &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brian,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is a pretty big change to be done with a so short notice, especially over
</span><br>
<span class="quotelev2">&gt; &gt; the Thanksgiving weekend. I do have a lots of concerns about this approach,
</span><br>
<span class="quotelev2">&gt; &gt; but I lack the time to expand on this right now. I'll be back at work on
</span><br>
<span class="quotelev2">&gt; &gt; Monday and I'll give detailed informations. Please delay the deadline until at
</span><br>
<span class="quotelev2">&gt; &gt; least Wednesday.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;     george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 25, 2009, at 11:52 , Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WHAT: Add a void* extra_state field to ompi_request_t
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WHY: When we added the req_complete_cb field so that internal pieces of OMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; who generated requests (such as the OSC components using the PML) could be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; async notified when the request completed (ie, the PML request the OSC
</span><br>
<span class="quotelev3">&gt; &gt;&gt; component had initiated was finished), we neglected to add any type of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;extra state&quot; associated with that request/callback.  So the completion
</span><br>
<span class="quotelev3">&gt; &gt;&gt; callback is almost worthless, because the upper layer has a hard time
</span><br>
<span class="quotelev3">&gt; &gt;&gt; figuring out which thing it was working on it can now progress due to the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; given (lower?) request completing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WHERE: One line in each of ompi/request/request.[hc].
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WHEN: ASAP
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; TIMEOUT: Sunday, Nov 29.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; More Details
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is probably not even worth an RFC, which is why I'm not giving a very
</span><br>
<span class="quotelev3">&gt; &gt;&gt; long timeout (that, and if I don't get this done during the holiday weekend,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it will never get done).  The changes are a single line in request.h adding
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a void* extra_state variable to the ompi_request_t and another single line
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in request.c to initialize the field to NULL.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; While looking for some other code, I stumbled upon the OSC changes I made a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; long time ago to try to use req_complete_cb instead of registering a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; progress function.  The code is actually a lot cleaner that way, and means
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no progress functions for the one-side components.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The down side is that it adds another 8 bytes to ompi_request_t, which is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; already larger than I'd like.  But on the flip side, we have an 8 byte field
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (the callback) which is totally unusable without the extra_state field.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;    Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;    Sandia National Laboratories
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7222.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Previous message:</strong> <a href="7220.php">Ralph Castain: "Re: [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7157.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<!-- nextthread="start" -->
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
