<?
$subject_val = "[OMPI devel] MPI_Comm_spawn crashes with the openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 04:54:35 2014" -->
<!-- isoreceived="20140930085435" -->
<!-- sent="Tue, 30 Sep 2014 17:54:41 +0900" -->
<!-- isosent="20140930085441" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_spawn crashes with the openib btl" -->
<!-- id="542A6FD1.5050002_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Comm_spawn crashes with the openib btl<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 04:54:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15943.php">Manuel Rodríguez Pascual: "[OMPI devel] recomended software stack for development?"</a>
<li><strong>Previous message:</strong> <a href="15941.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15950.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<li><strong>Reply:</strong> <a href="15950.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>the dynamic/spawn test from the ibm test suite crashes if the openib btl
<br>
is detected
<br>
(the test can be ran on one node with an IB port)
<br>
<p>here is what happens :
<br>
<p>in mca_btl_openib_proc_create,
<br>
the macro
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_MODEX_RECV(rc, &amp;mca_btl_openib_component.super.btl_version,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc, &amp;message, &amp;msg_size);
<br>
does not find any information *but*
<br>
rc is OPAL_SUCCESS
<br>
msg_size is not updated (e.g. left uninitialized)
<br>
message is not updated (e.g. left uninitialized)
<br>
<p>then, if msg_size is unitialized with a non zero value, and if message
<br>
is uninitialized with
<br>
a non valid address, a crash will occur when accessing message.
<br>
<p>/* i am not debating here the fact that there is no information returned,
<br>
i am simply discussing the crash */
<br>
<p>a simple workaround is to initialize msg_size to zero.
<br>
<p>that being said, is this the correct fix ?
<br>
<p>one possible alternate fix is to update the OPAL_MODEX_RECV_STRING macro
<br>
like this :
<br>
<p>/* from opal/mca/pmix/pmix.h */
<br>
#define OPAL_MODEX_RECV_STRING(r, s, p, d, sz)                          \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do {                                                                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_value_t *kv;                                               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_SUCCESS == ((r) = opal_pmix.get(&amp;(p)-&gt;proc_name,       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(s), &amp;kv))) {          \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != kv)
<br>
{                                               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*(d) =
<br>
kv-&gt;data.bo.bytes;                                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*(sz) =
<br>
kv-&gt;data.bo.size;                                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kv-&gt;data.bo.bytes = NULL; /* protect the data
<br>
*/            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
OBJ_RELEASE(kv);                                            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*(sz) = 0;                    \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(r) = OPAL_ERR_NOT_FOUND;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                     \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} while(0);
<br>
<p>/*
<br>
*(sz) = 0; and (r) = OPAL_ERR_NOT_FOUND; can be seen as redundant, *(sz)
<br>
*or* (r) could be set
<br>
*/
<br>
<p>and an other alternate fix is to update the end of the native_get
<br>
function like this :
<br>
<p>/* from opal/mca/pmix/native/pmix_native.c */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (found) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*kv = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_SUCCESS == rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_SUCCESS == ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = OPAL_ERR_NOT_FOUND;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
<p>Could you please advise ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15943.php">Manuel Rodríguez Pascual: "[OMPI devel] recomended software stack for development?"</a>
<li><strong>Previous message:</strong> <a href="15941.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15950.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<li><strong>Reply:</strong> <a href="15950.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
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
