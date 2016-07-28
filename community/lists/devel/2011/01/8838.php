<?
$subject_val = "Re: [OMPI devel] Problem with attributes attached to communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 13:15:20 2011" -->
<!-- isoreceived="20110106181520" -->
<!-- sent="Thu, 6 Jan 2011 13:15:14 -0500" -->
<!-- isosent="20110106181514" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with attributes attached to communicators" -->
<!-- id="B73665FE-7F16-4156-ACB6-755CA827167F_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D25DAF9.3070400_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem with attributes attached to communicators<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 13:15:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8839.php">Jeff Squyres: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Previous message:</strong> <a href="8837.php">Pascal Deveze: "[OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>In reply to:</strong> <a href="8837.php">Pascal Deveze: "[OMPI devel] Problem with attributes attached to communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8848.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Reply:</strong> <a href="8848.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Comm_create_keyval and MPI_Comm_free_keyval are the functions you should use in order to be MPI 2.2 compliant.
<br>
<p>Based on my understanding of the MPI standard, your application is incorrect, and therefore the MPICH behavior is incorrect. The delete function is not there for you to delete the keyval (!) but to delete the attribute. Here is what the MPI standard states about this:
<br>
<p><span class="quotelev1">&gt; Note that it is not erroneous to free an attribute key that is in use, because the actual free does not transpire until after all references (in other communicators on the process) to the key have been freed. These references need to be explictly freed by the program, either via calls to MPI_COMM_DELETE_ATTR that free one attribute instance, or by calls to MPI_COMM_FREE that free all attribute instances associated with the freed communicator.
</span><br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jan 6, 2011, at 10:08 , Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; I have a problem to finish the porting of ROMIO into Open MPI. It is related to the routines MPI_Comm_dup together with MPI_Keyval_create, MPI_Keyval_free, MPI_Attr_get and MPI_Attr_put.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a simple program that reproduces my problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===========================================
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int copy_fct(MPI_Comm comm, int keyval, void *extra, void *attr_in, void **attr_out, int *flag) {
</span><br>
<span class="quotelev1">&gt;   return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int delete_fct(MPI_Comm comm, int keyval, void *attr_val, void *extra) {
</span><br>
<span class="quotelev1">&gt;   MPI_Keyval_free(&amp;keyval);
</span><br>
<span class="quotelev1">&gt;   return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;   int i, found, attribute_val=100, keyval = MPI_KEYVAL_INVALID;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm dupcomm;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   for (i=0; i&lt;100;i++) {
</span><br>
<span class="quotelev1">&gt;       /* This simulates the MPI_File_open() */
</span><br>
<span class="quotelev1">&gt;       if (keyval == MPI_KEYVAL_INVALID) {
</span><br>
<span class="quotelev1">&gt;               MPI_Keyval_create((MPI_Copy_function *) copy_fct, (MPI_Delete_function *) delete_fct, &amp;keyval, NULL);
</span><br>
<span class="quotelev1">&gt;               MPI_Attr_put(MPI_COMM_WORLD, keyval, &amp;attribute_val);
</span><br>
<span class="quotelev1">&gt;               MPI_Comm_dup(MPI_COMM_WORLD, &amp;dupcomm);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       else {
</span><br>
<span class="quotelev1">&gt;               MPI_Comm_dup(MPI_COMM_WORLD, &amp;dupcomm);
</span><br>
<span class="quotelev1">&gt;               MPI_Attr_get(MPI_COMM_WORLD, keyval, (void *) &amp;attribute_val, &amp;found);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       /* This simulates the MPI_File_close() */
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_free(&amp;dupcomm);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; ===============================================
</span><br>
<span class="quotelev1">&gt; I run it on only one process and get the error:
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Attr_get
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this error is displayed because  keyval does not exist any more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This programm runs well on MPICH2 (ROMIO is comming with MPICH2).
</span><br>
<span class="quotelev1">&gt; This programm runs well when delete_fct() does not call MPI_Keyval_free
</span><br>
<span class="quotelev1">&gt; This programm runs well when I call MPI_Keyval_create with &quot;MPI_NULL_COPY_FN&quot; instead of &quot;(MPI_Copy_function *) copy_fct&quot; (this is quite strange : copy_fct does nothing !).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect that there could be a bug in OpenMPI: In ompi/attribute/attribute.c two functions are calling OBJ_RELEASE: ompi_attr_delete and ompi_attr_free_keyval. So, the
</span><br>
<span class="quotelev1">&gt; reference count is decremented twice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal
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
<li><strong>Next message:</strong> <a href="8839.php">Jeff Squyres: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Previous message:</strong> <a href="8837.php">Pascal Deveze: "[OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>In reply to:</strong> <a href="8837.php">Pascal Deveze: "[OMPI devel] Problem with attributes attached to communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8848.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Reply:</strong> <a href="8848.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
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
