<?
$subject_val = "Re: [OMPI devel] OBJ_RELEASE() question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 10:33:31 2015" -->
<!-- isoreceived="20150212153331" -->
<!-- sent="Thu, 12 Feb 2015 07:33:25 -0800" -->
<!-- isosent="20150212153325" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OBJ_RELEASE() question" -->
<!-- id="5390AFAE-F815-427C-8F95-6E2968670317_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54DC87F1.7060503_at_iferc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-12 10:33:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16978.php">Nathan Hjelm: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Previous message:</strong> <a href="16976.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16976.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16982.php">George Bosilca: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Reply:</strong> <a href="16982.php">George Bosilca: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
True - but to directly answer Adrian&#226;&#128;&#153;s question:
<br>
<p>Setting the buffer to NULL is not necessary and definitely a bad example.
<br>
<p><p><span class="quotelev1">&gt; On Feb 12, 2015, at 3:01 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adrian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the case of ompi/group/group_init.c, new_group = NULL is clearly an
</span><br>
<span class="quotelev1">&gt; overkill,
</span><br>
<span class="quotelev1">&gt; but there is nothing wrong with it :
</span><br>
<span class="quotelev1">&gt; it can only be 1 when OBJ_RELEASE is invoked
</span><br>
<span class="quotelev1">&gt; (and hence new_group is already NULL, so no need to NULLify it a second
</span><br>
<span class="quotelev1">&gt; time)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that being said some typing can also be saved by replacing goto
</span><br>
<span class="quotelev1">&gt; error_exit; with return NULL;
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
<span class="quotelev1">&gt; On 2015/02/12 18:48, Adrian Reber wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am not 100% sure I was understood correctly and I am also not sure I
</span><br>
<span class="quotelev2">&gt;&gt; understand the discussion I triggered.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Being not very familiar with the Open MPI code base I often look at
</span><br>
<span class="quotelev2">&gt;&gt; other places in the code for examples how something can/could be done.
</span><br>
<span class="quotelev2">&gt;&gt; Looking at different examples OBJ_RELEASE() I see at some places first a
</span><br>
<span class="quotelev2">&gt;&gt; OBJ_RELEASE() and then the buffer is set to NULL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pcregrep -r -M  'OBJ_RELEASE.*(\n|.).*=(\s)?NULL' *
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; ompi/group/group_init.c:        OBJ_RELEASE (new_group);
</span><br>
<span class="quotelev2">&gt;&gt;        new_group = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/group/group_init.c:        OBJ_RELEASE (new_group);
</span><br>
<span class="quotelev2">&gt;&gt;        new_group = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/group/group_init.c:        OBJ_RELEASE(new_group);
</span><br>
<span class="quotelev2">&gt;&gt;        new_group = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/group/group_init.c:            OBJ_RELEASE (new_group);
</span><br>
<span class="quotelev2">&gt;&gt;            new_group = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/group/group_init.c:        OBJ_RELEASE(new_group);
</span><br>
<span class="quotelev2">&gt;&gt;        new_group = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/group/group_init.c:        OBJ_RELEASE(new_group);
</span><br>
<span class="quotelev2">&gt;&gt;        new_group = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; [... and many more ...]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That was the reason I was looking at the definition of OBJ_RELEASE() and
</span><br>
<span class="quotelev2">&gt;&gt; I saw it already does set the buffer to NULL. Manually setting it to
</span><br>
<span class="quotelev2">&gt;&gt; NULL could theoretically lead to situation where memory is not correctly
</span><br>
<span class="quotelev2">&gt;&gt; free'd (I have not actually seen it).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question is more theoretically that setting the buffer to
</span><br>
<span class="quotelev2">&gt;&gt; NULL is not necessary and a bad example?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 		Adrian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Feb 12, 2015 at 12:45:06AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would be good to know where you are seeing this - as was stated, the macro reduces the ref count and will NULL the pointer if and only if the ref count goes to zero. However, the code may set it to NULL for some other reason that relates to the later use of that particular variable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not used properly, however, it can lead to a memory leak. So it&#226;&#128;&#153;s best that we (a) identify where this was done (I personally don&#226;&#128;&#153;t recall having seen it), and (b) add comments to the code explaining why it explicitly sets the param to NULL (e.g., the object is tracked elsewhere and will later be free&#226;&#128;&#153;d).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 12, 2015, at 12:09 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was just curious as if I am calling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffer = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on a buffer with an object count different to 1, the buffer is not free'd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but set to NULL. If I call it again the buffer is NULL and the original
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffer will not be free'd. Setting the buffer to NULL seems unnecessary.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have not seen this as a problem in the code I was just trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; understand if I have to call only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffer = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and for me the first variant seems to be the correct one.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 		Adrian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Feb 12, 2015 at 04:58:02PM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Adrian,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_obj_update does not fail or success, it returns the new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; obj_reference_count.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can you point to one specific location in the code where you think it is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrong ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OBJ_RELEASE(buffer)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; buffer = NULL;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; could be written as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if (((opal_object_t *)buffer)-&gt;obj_reference_count == 1) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; } else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   buffer = NULL;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that would never ever set buffer to NULL twice, but would be wrong
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; since there is no atomicity here
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* that was for for the &quot;unnecessary&quot; part */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; about the &quot;wrong&quot; part, why do you think the else branch is wrong ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* i mean setting a pointer to NULL is not necessarily wrong */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2015/02/12 16:41, Adrian Reber wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; At many places all over the code I see
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OBJ_RELEASE(buffer)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; buffer = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Looking at the definition of OBJ_RELEASE() this seems unnecessary and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrong:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #define OBJ_RELEASE(object)                                             \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   do {                                                                \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       if (0 == opal_obj_update((opal_object_t *) (object), -1)) {     \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           opal_obj_run_destructors((opal_object_t *) (object));       \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           free(object);                                               \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           object = NULL;                                              \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       }                                                               \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   } while (0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The object is set to NULL by the macro and only if the opal_obj_update() was
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; successful. So it seems setting the buffer manually to NULL after OBJ_RELEASE()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is unnecessary and if opal_obj_update() failed it also is wrong.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 		Adrian
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16970.php">http://www.open-mpi.org/community/lists/devel/2015/02/16970.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16971.php">http://www.open-mpi.org/community/lists/devel/2015/02/16971.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16972.php">http://www.open-mpi.org/community/lists/devel/2015/02/16972.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16973.php">http://www.open-mpi.org/community/lists/devel/2015/02/16973.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16974.php">http://www.open-mpi.org/community/lists/devel/2015/02/16974.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16976.php">http://www.open-mpi.org/community/lists/devel/2015/02/16976.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16978.php">Nathan Hjelm: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Previous message:</strong> <a href="16976.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16976.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16982.php">George Bosilca: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Reply:</strong> <a href="16982.php">George Bosilca: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
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
