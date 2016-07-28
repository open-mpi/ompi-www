<?
$subject_val = "[OMPI devel] OBJ_RELEASE() question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 02:41:35 2015" -->
<!-- isoreceived="20150212074135" -->
<!-- sent="Thu, 12 Feb 2015 08:41:34 +0100" -->
<!-- isosent="20150212074134" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] OBJ_RELEASE() question" -->
<!-- id="20150212074134.GU13049_at_lisas.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] OBJ_RELEASE() question<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-12 02:41:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16971.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Previous message:</strong> <a href="16969.php">Ralph Castain: "Re: [OMPI devel] opal_dss.load question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16971.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Reply:</strong> <a href="16971.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At many places all over the code I see
<br>
<p>OBJ_RELEASE(buffer)
<br>
buffer = NULL;
<br>
<p>Looking at the definition of OBJ_RELEASE() this seems unnecessary and
<br>
wrong:
<br>
<p>#define OBJ_RELEASE(object)                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do {                                                                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 == opal_obj_update((opal_object_t *) (object), -1)) {     \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_obj_run_destructors((opal_object_t *) (object));       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(object);                                               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;object = NULL;                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} while (0)
<br>
<p>The object is set to NULL by the macro and only if the opal_obj_update() was
<br>
successful. So it seems setting the buffer manually to NULL after OBJ_RELEASE()
<br>
is unnecessary and if opal_obj_update() failed it also is wrong.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16971.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Previous message:</strong> <a href="16969.php">Ralph Castain: "Re: [OMPI devel] opal_dss.load question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16971.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Reply:</strong> <a href="16971.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
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
