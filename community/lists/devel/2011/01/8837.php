<?
$subject_val = "[OMPI devel] Problem with attributes attached to communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 10:08:50 2011" -->
<!-- isoreceived="20110106150850" -->
<!-- sent="Thu, 06 Jan 2011 16:08:41 +0100" -->
<!-- isosent="20110106150841" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem with attributes attached to communicators" -->
<!-- id="4D25DAF9.3070400_at_bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] Problem with attributes attached to communicators<br>
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 10:08:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8838.php">George Bosilca: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Previous message:</strong> <a href="8836.php">George Bosilca: "Re: [OMPI devel] source code of collective operations of communication of open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8838.php">George Bosilca: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Reply:</strong> <a href="8838.php">George Bosilca: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Maybe reply:</strong> <a href="8866.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a problem to finish the porting of ROMIO into Open MPI. It is 
<br>
related to the routines MPI_Comm_dup together with MPI_Keyval_create, 
<br>
MPI_Keyval_free, MPI_Attr_get and MPI_Attr_put.
<br>
<p>Here is a simple program that reproduces my problem:
<br>
<p>===========================================
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int copy_fct(MPI_Comm comm, int keyval, void *extra, void *attr_in, void 
<br>
**attr_out, int *flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
}
<br>
<p>int delete_fct(MPI_Comm comm, int keyval, void *attr_val, void *extra) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Keyval_free(&amp;keyval);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
}
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i, found, attribute_val=100, keyval = MPI_KEYVAL_INVALID;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm dupcomm;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;100;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* This simulates the MPI_File_open() */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (keyval == MPI_KEYVAL_INVALID) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Keyval_create((MPI_Copy_function *) copy_fct, 
<br>
(MPI_Delete_function *) delete_fct, &amp;keyval, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Attr_put(MPI_COMM_WORLD, keyval, &amp;attribute_val);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_dup(MPI_COMM_WORLD, &amp;dupcomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_dup(MPI_COMM_WORLD, &amp;dupcomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Attr_get(MPI_COMM_WORLD, keyval, (void *) 
<br>
&amp;attribute_val, &amp;found);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* This simulates the MPI_File_close() */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;dupcomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
===============================================
<br>
I run it on only one process and get the error:
<br>
&nbsp;*** An error occurred in MPI_Attr_get
<br>
*** on communicator MPI_COMM_WORLD
<br>
*** MPI_ERR_OTHER: known error not in list
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>I think this error is displayed because  keyval does not exist any more.
<br>
<p>This programm runs well on MPICH2 (ROMIO is comming with MPICH2).
<br>
This programm runs well when delete_fct() does not call MPI_Keyval_free
<br>
This programm runs well when I call MPI_Keyval_create with 
<br>
&quot;MPI_NULL_COPY_FN&quot; instead of &quot;(MPI_Copy_function *) copy_fct&quot; (this is 
<br>
quite strange : copy_fct does nothing !).
<br>
<p>I suspect that there could be a bug in OpenMPI: In 
<br>
ompi/attribute/attribute.c two functions are calling OBJ_RELEASE: 
<br>
ompi_attr_delete and ompi_attr_free_keyval. So, the
<br>
reference count is decremented twice.
<br>
<p>Pascal
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8838.php">George Bosilca: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Previous message:</strong> <a href="8836.php">George Bosilca: "Re: [OMPI devel] source code of collective operations of communication of open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8838.php">George Bosilca: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Reply:</strong> <a href="8838.php">George Bosilca: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Maybe reply:</strong> <a href="8866.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
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
