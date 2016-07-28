<?
$subject_val = "Re: [OMPI devel] OBJ_RELEASE() question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 03:09:54 2015" -->
<!-- isoreceived="20150212080954" -->
<!-- sent="Thu, 12 Feb 2015 09:09:53 +0100" -->
<!-- isosent="20150212080953" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OBJ_RELEASE() question" -->
<!-- id="20150212080953.GV13049_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54DC5D0A.5020507_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OBJ_RELEASE() question<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-12 03:09:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16973.php">Ralph Castain: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Previous message:</strong> <a href="16971.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16971.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16973.php">Ralph Castain: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Reply:</strong> <a href="16973.php">Ralph Castain: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was just curious as if I am calling
<br>
<p>OBJ_RELEASE(buffer);
<br>
buffer = NULL;
<br>
<p>on a buffer with an object count different to 1, the buffer is not free'd
<br>
but set to NULL. If I call it again the buffer is NULL and the original
<br>
buffer will not be free'd. Setting the buffer to NULL seems unnecessary.
<br>
<p>I have not seen this as a problem in the code I was just trying to
<br>
understand if I have to call only
<br>
<p>OBJ_RELEASE(buffer);
<br>
<p>or
<br>
<p>OBJ_RELEASE(buffer);
<br>
buffer = NULL;
<br>
<p>and for me the first variant seems to be the correct one.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p>On Thu, Feb 12, 2015 at 04:58:02PM +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Adrian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_obj_update does not fail or success, it returns the new
</span><br>
<span class="quotelev1">&gt; obj_reference_count.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you point to one specific location in the code where you think it is
</span><br>
<span class="quotelev1">&gt; wrong ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(buffer)
</span><br>
<span class="quotelev1">&gt; buffer = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could be written as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (((opal_object_t *)buffer)-&gt;obj_reference_count == 1) {
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt; } else {
</span><br>
<span class="quotelev1">&gt;     buffer = NULL;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that would never ever set buffer to NULL twice, but would be wrong
</span><br>
<span class="quotelev1">&gt; since there is no atomicity here
</span><br>
<span class="quotelev1">&gt; /* that was for for the &quot;unnecessary&quot; part */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; about the &quot;wrong&quot; part, why do you think the else branch is wrong ?
</span><br>
<span class="quotelev1">&gt; /* i mean setting a pointer to NULL is not necessarily wrong */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2015/02/12 16:41, Adrian Reber wrote:
</span><br>
<span class="quotelev2">&gt; &gt; At many places all over the code I see
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OBJ_RELEASE(buffer)
</span><br>
<span class="quotelev2">&gt; &gt; buffer = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Looking at the definition of OBJ_RELEASE() this seems unnecessary and
</span><br>
<span class="quotelev2">&gt; &gt; wrong:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #define OBJ_RELEASE(object)                                             \
</span><br>
<span class="quotelev2">&gt; &gt;     do {                                                                \
</span><br>
<span class="quotelev2">&gt; &gt;         if (0 == opal_obj_update((opal_object_t *) (object), -1)) {     \
</span><br>
<span class="quotelev2">&gt; &gt;             opal_obj_run_destructors((opal_object_t *) (object));       \
</span><br>
<span class="quotelev2">&gt; &gt;             free(object);                                               \
</span><br>
<span class="quotelev2">&gt; &gt;             object = NULL;                                              \
</span><br>
<span class="quotelev2">&gt; &gt;         }                                                               \
</span><br>
<span class="quotelev2">&gt; &gt;     } while (0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The object is set to NULL by the macro and only if the opal_obj_update() was
</span><br>
<span class="quotelev2">&gt; &gt; successful. So it seems setting the buffer manually to NULL after OBJ_RELEASE()
</span><br>
<span class="quotelev2">&gt; &gt; is unnecessary and if opal_obj_update() failed it also is wrong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 		Adrian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16970.php">http://www.open-mpi.org/community/lists/devel/2015/02/16970.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16971.php">http://www.open-mpi.org/community/lists/devel/2015/02/16971.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16973.php">Ralph Castain: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Previous message:</strong> <a href="16971.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16971.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16973.php">Ralph Castain: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Reply:</strong> <a href="16973.php">Ralph Castain: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
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
