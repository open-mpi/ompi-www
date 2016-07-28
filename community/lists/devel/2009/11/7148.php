<?
$subject_val = "[OMPI devel] RFC: Add extra_state field to ompi_request_t";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 25 11:53:05 2009" -->
<!-- isoreceived="20091125165305" -->
<!-- sent="Wed, 25 Nov 2009 09:52:24 -0700" -->
<!-- isosent="20091125165224" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Add extra_state field to ompi_request_t" -->
<!-- id="C732AED8.27C3%bwbarre_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Add extra_state field to ompi_request_t<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-25 11:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7149.php">Nadia Derbey: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated	SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>Previous message:</strong> <a href="7147.php">George Bosilca: "Re: [OMPI devel] progress threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7155.php">George Bosilca: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>Reply:</strong> <a href="7155.php">George Bosilca: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add a void* extra_state field to ompi_request_t
<br>
<p>WHY: When we added the req_complete_cb field so that internal pieces of OMPI
<br>
who generated requests (such as the OSC components using the PML) could be
<br>
async notified when the request completed (ie, the PML request the OSC
<br>
component had initiated was finished), we neglected to add any type of
<br>
&quot;extra state&quot; associated with that request/callback.  So the completion
<br>
callback is almost worthless, because the upper layer has a hard time
<br>
figuring out which thing it was working on it can now progress due to the
<br>
given (lower?) request completing.
<br>
<p>WHERE: One line in each of ompi/request/request.[hc].
<br>
<p>WHEN: ASAP
<br>
<p>TIMEOUT: Sunday, Nov 29.
<br>
<p>More Details
<br>
------------
<br>
<p>This is probably not even worth an RFC, which is why I'm not giving a very
<br>
long timeout (that, and if I don't get this done during the holiday weekend,
<br>
it will never get done).  The changes are a single line in request.h adding
<br>
a void* extra_state variable to the ompi_request_t and another single line
<br>
in request.c to initialize the field to NULL.
<br>
<p>While looking for some other code, I stumbled upon the OSC changes I made a
<br>
long time ago to try to use req_complete_cb instead of registering a
<br>
progress function.  The code is actually a lot cleaner that way, and means
<br>
no progress functions for the one-side components.
<br>
<p>The down side is that it adds another 8 bytes to ompi_request_t, which is
<br>
already larger than I'd like.  But on the flip side, we have an 8 byte field
<br>
(the callback) which is totally unusable without the extra_state field.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7149.php">Nadia Derbey: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated	SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>Previous message:</strong> <a href="7147.php">George Bosilca: "Re: [OMPI devel] progress threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7155.php">George Bosilca: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>Reply:</strong> <a href="7155.php">George Bosilca: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
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
