<?
$subject_val = "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 17:58:13 2011" -->
<!-- isoreceived="20111214225813" -->
<!-- sent="Thu, 15 Dec 2011 09:26:54 +1030" -->
<!-- isosent="20111214225654" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5" -->
<!-- id="20111215092654.3950ffaf_at_Gantu.yeoh.info" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DFC98C80-C413-4CBF-A956-BDAAB0A4CE05_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 17:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10121.php">Nathan Hjelm: "[OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10119.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10082.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 13 Dec 2011 20:27:00 -0500
<br>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 13, 2011, at 7:59 PM, Christopher Yeoh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, late to the discussion. This is a spurious warning caused by
</span><br>
<span class="quotelev2">&gt; &gt; passing the NULL pointer to the opal free function which is
</span><br>
<span class="quotelev2">&gt; &gt; actually ok. It was fixed by #2884 - this is why you don't see the
</span><br>
<span class="quotelev2">&gt; &gt; problem in trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a dim recollection that we talked about this before, but I'm
</span><br>
<span class="quotelev1">&gt; going to ask again, anyway...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/changeset/25430">https://svn.open-mpi.org/trac/ompi/changeset/25430</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why are we removing this debug message?  It seems like a useful
</span><br>
<span class="quotelev1">&gt; thing.  It might well be legal to call free(NULL), but it seems like
</span><br>
<span class="quotelev1">&gt; a bad idea to call free if we know the value will be NULL.
</span><br>
<p>Its more that the pointer value might be quite validly NULL. For
<br>
example in this case that is causing the spurious warning a member of a
<br>
struct is set to NULL initially and may or may not be allocated memory
<br>
during the lifetime of the struct, and if it is may be cleaned up
<br>
earlier on by another function and the value set back to NULL. 
<br>
<p>So during the final cleanup of structs that behave this way, we can
<br>
have this:
<br>
<p>if (NULL != foo-&gt;pointer) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(foo-&gt;pointer);
<br>
<p>In the case where we have a non NULL pointer we end up doing two checks
<br>
since the free function already does a NULL pointer check at the
<br>
start before proceeding. Or we can just do:
<br>
<p>free(foo-&gt;pointer)
<br>
<p>If its in a performance critical area and we think that the NULL
<br>
pointer case is going to be very common and not calling free would make
<br>
a difference we can always add a check before calling free.
<br>
<p><span class="quotelev1">&gt; Did we talk about this before, and I was in the minority for thinking
</span><br>
<span class="quotelev1">&gt; removing it was a bad idea?
</span><br>
<p>I don't think we talked much about this before (maybe you are thinking
<br>
of the discussion around use of an assert?). 
<br>
<p>There wasn't much discussion on the ticket
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2884">https://svn.open-mpi.org/trac/ompi/ticket/2884</a>
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10121.php">Nathan Hjelm: "[OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10119.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10082.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
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
