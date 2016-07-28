<?
$subject_val = "Re: [OMPI devel] OBJ_RELEASE() question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 02:58:01 2015" -->
<!-- isoreceived="20150212075801" -->
<!-- sent="Thu, 12 Feb 2015 16:58:02 +0900" -->
<!-- isosent="20150212075802" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OBJ_RELEASE() question" -->
<!-- id="54DC5D0A.5020507_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20150212074134.GU13049_at_lisas.de" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-12 02:58:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16972.php">Adrian Reber: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Previous message:</strong> <a href="16970.php">Adrian Reber: "[OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16970.php">Adrian Reber: "[OMPI devel] OBJ_RELEASE() question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16972.php">Adrian Reber: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Reply:</strong> <a href="16972.php">Adrian Reber: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian,
<br>
<p>opal_obj_update does not fail or success, it returns the new
<br>
obj_reference_count.
<br>
<p><p>can you point to one specific location in the code where you think it is
<br>
wrong ?
<br>
<p>OBJ_RELEASE(buffer)
<br>
buffer = NULL;
<br>
<p>could be written as
<br>
<p>if (((opal_object_t *)buffer)-&gt;obj_reference_count == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(buffer);
<br>
} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buffer = NULL;
<br>
}
<br>
<p>that would never ever set buffer to NULL twice, but would be wrong
<br>
since there is no atomicity here
<br>
/* that was for for the &quot;unnecessary&quot; part */
<br>
<p>about the &quot;wrong&quot; part, why do you think the else branch is wrong ?
<br>
/* i mean setting a pointer to NULL is not necessarily wrong */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 2015/02/12 16:41, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; At many places all over the code I see
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(buffer)
</span><br>
<span class="quotelev1">&gt; buffer = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the definition of OBJ_RELEASE() this seems unnecessary and
</span><br>
<span class="quotelev1">&gt; wrong:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define OBJ_RELEASE(object)                                             \
</span><br>
<span class="quotelev1">&gt;     do {                                                                \
</span><br>
<span class="quotelev1">&gt;         if (0 == opal_obj_update((opal_object_t *) (object), -1)) {     \
</span><br>
<span class="quotelev1">&gt;             opal_obj_run_destructors((opal_object_t *) (object));       \
</span><br>
<span class="quotelev1">&gt;             free(object);                                               \
</span><br>
<span class="quotelev1">&gt;             object = NULL;                                              \
</span><br>
<span class="quotelev1">&gt;         }                                                               \
</span><br>
<span class="quotelev1">&gt;     } while (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The object is set to NULL by the macro and only if the opal_obj_update() was
</span><br>
<span class="quotelev1">&gt; successful. So it seems setting the buffer manually to NULL after OBJ_RELEASE()
</span><br>
<span class="quotelev1">&gt; is unnecessary and if opal_obj_update() failed it also is wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16970.php">http://www.open-mpi.org/community/lists/devel/2015/02/16970.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16972.php">Adrian Reber: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Previous message:</strong> <a href="16970.php">Adrian Reber: "[OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16970.php">Adrian Reber: "[OMPI devel] OBJ_RELEASE() question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16972.php">Adrian Reber: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Reply:</strong> <a href="16972.php">Adrian Reber: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
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
