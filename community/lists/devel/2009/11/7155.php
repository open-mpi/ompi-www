<?
$subject_val = "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 27 20:24:32 2009" -->
<!-- isoreceived="20091128012432" -->
<!-- sent="Fri, 27 Nov 2009 20:24:22 -0500" -->
<!-- isosent="20091128012422" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t" -->
<!-- id="B20E3643-2FAE-4056-87E8-B25A40CFAD9D_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C732AED8.27C3%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-27 20:24:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7156.php">Lenny Verkhovsky: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
<li><strong>Previous message:</strong> <a href="7154.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7148.php">Barrett, Brian W: "[OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7157.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>Reply:</strong> <a href="7157.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>This is a pretty big change to be done with a so short notice, especially over the Thanksgiving weekend. I do have a lots of concerns about this approach, but I lack the time to expand on this right now. I'll be back at work on Monday and I'll give detailed informations. Please delay the deadline until at least Wednesday.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 25, 2009, at 11:52 , Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Add a void* extra_state field to ompi_request_t
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: When we added the req_complete_cb field so that internal pieces of OMPI
</span><br>
<span class="quotelev1">&gt; who generated requests (such as the OSC components using the PML) could be
</span><br>
<span class="quotelev1">&gt; async notified when the request completed (ie, the PML request the OSC
</span><br>
<span class="quotelev1">&gt; component had initiated was finished), we neglected to add any type of
</span><br>
<span class="quotelev1">&gt; &quot;extra state&quot; associated with that request/callback.  So the completion
</span><br>
<span class="quotelev1">&gt; callback is almost worthless, because the upper layer has a hard time
</span><br>
<span class="quotelev1">&gt; figuring out which thing it was working on it can now progress due to the
</span><br>
<span class="quotelev1">&gt; given (lower?) request completing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: One line in each of ompi/request/request.[hc].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: ASAP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Sunday, Nov 29.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More Details
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is probably not even worth an RFC, which is why I'm not giving a very
</span><br>
<span class="quotelev1">&gt; long timeout (that, and if I don't get this done during the holiday weekend,
</span><br>
<span class="quotelev1">&gt; it will never get done).  The changes are a single line in request.h adding
</span><br>
<span class="quotelev1">&gt; a void* extra_state variable to the ompi_request_t and another single line
</span><br>
<span class="quotelev1">&gt; in request.c to initialize the field to NULL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While looking for some other code, I stumbled upon the OSC changes I made a
</span><br>
<span class="quotelev1">&gt; long time ago to try to use req_complete_cb instead of registering a
</span><br>
<span class="quotelev1">&gt; progress function.  The code is actually a lot cleaner that way, and means
</span><br>
<span class="quotelev1">&gt; no progress functions for the one-side components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The down side is that it adds another 8 bytes to ompi_request_t, which is
</span><br>
<span class="quotelev1">&gt; already larger than I'd like.  But on the flip side, we have an 8 byte field
</span><br>
<span class="quotelev1">&gt; (the callback) which is totally unusable without the extra_state field.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7156.php">Lenny Verkhovsky: "Re: [OMPI devel] [PATCH] Improving heterogeneous IB clusterssupport."</a>
<li><strong>Previous message:</strong> <a href="7154.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7148.php">Barrett, Brian W: "[OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7157.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>Reply:</strong> <a href="7157.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
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
