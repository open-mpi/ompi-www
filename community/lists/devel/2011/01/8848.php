<?
$subject_val = "Re: [OMPI devel] Problem with attributes attached to communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 10 06:54:11 2011" -->
<!-- isoreceived="20110110115411" -->
<!-- sent="Mon, 10 Jan 2011 12:53:57 +0100" -->
<!-- isosent="20110110115357" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with attributes attached to communicators" -->
<!-- id="4D2AF355.9030203_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B73665FE-7F16-4156-ACB6-755CA827167F_at_eecs.utk.edu" -->
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
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-10 06:53:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8849.php">Jeff Squyres: "Re: [OMPI devel] Datatype question"</a>
<li><strong>Previous message:</strong> <a href="8847.php">Jeff Squyres: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>In reply to:</strong> <a href="8838.php">George Bosilca: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8866.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>Your proposed patch does not work when the call to MPI_File_open() is 
<br>
done on MPI_COMM_SELF.
<br>
For example, with the romio test program &quot;simple.c&quot;, I got the fatal error:
<br>
<p>mpirun -np 1 ./simple -fname /tmp//TEST
<br>
Fatal error in MPI_Attr_put: Invalid keyval, error stack:
<br>
MPI_Attr_put(131): MPI_Attr_put(comm=0x84000000, keyval=603979776, 
<br>
attr_value=0x2279fa0) failed
<br>
MPI_Attr_put(89).: Attribute key was MPI_KEYVAL_INVALID
<br>
APPLICATION TERMINATED WITH THE EXIT STRING: Hangup (signal 1)
<br>
<p>Pascal
<br>
<p>Dave Goodell a &#233;crit :
<br>
<span class="quotelev1">&gt; Try this (untested) patch instead:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 7, 2011, at 3:50 AM CST, Rob Latham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Pascal.  I'm really happy that you have been working with the
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI folks to re-sync romio.  I meant to ask you how that work was
</span><br>
<span class="quotelev2">&gt;&gt; progressing, so thanks for the email!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need copy Dave Goodell on this conversation because he helped me
</span><br>
<span class="quotelev2">&gt;&gt; understand the keyval issues when we last worked on this two years
</span><br>
<span class="quotelev2">&gt;&gt; ago.  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dave, some background.  We added some code in ROMIO to address ticket
</span><br>
<span class="quotelev2">&gt;&gt; 222:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://trac.mcs.anl.gov/projects/mpich2/ticket/222">http://trac.mcs.anl.gov/projects/mpich2/ticket/222</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But that code apparently makes OpenMPI unhappy.  I think when we
</span><br>
<span class="quotelev2">&gt;&gt; talked about this I remember it came down to a, shall we say,
</span><br>
<span class="quotelev2">&gt;&gt; different interpretation of the standard between MPICH2 and OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In case it's not clear from the nesting of messages, here's Pascal's
</span><br>
<span class="quotelev2">&gt;&gt; extraction of the ROMIO keyval code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8837.php">http://www.open-mpi.org/community/lists/devel/2011/01/8837.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and here's the OpenMPI developer's response:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8838.php">http://www.open-mpi.org/community/lists/devel/2011/01/8838.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think this is related to a discussion I had a couple years ago:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/03/8409.php">http://www.open-mpi.org/community/lists/users/2009/03/8409.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, to eventually answer your question yes I do have some remarks, but
</span><br>
<span class="quotelev2">&gt;&gt; I have no answers.  It's been a couple of years since I added those
</span><br>
<span class="quotelev2">&gt;&gt; frees...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 07, 2011 at 09:47:17AM +0100, Pascal Deveze wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Rob,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you perhaps remember, I was porting ROMIO on OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The job is quite finished, I only have a problem with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation/dealocation of Keyval (cb_config_list_keyval in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adio/common/cb_config_list.c).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As the alogorithm runs on MPICH2, I asked for help on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] mailing list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just received the following answer from George Bosilca.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The solution I found to run ROMIO with OpenMPI is to delete the line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Keyval_free(&amp;keyval);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the function ADIOI_cb_delete_name_array
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (romio/adio/common/cb_config_list.c).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any remarks about that ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pascal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------- Message original --------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sujet: 	Re: [OMPI devel] Problem with attributes attached to communicators
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 	Thu, 6 Jan 2011 13:15:14 -0500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; De: 	George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; R&#233;pondre &#224;: 	Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pour: 	Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; R&#233;f&#233;rences: 	&lt;4D25DAF9.3070400_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_create_keyval and MPI_Comm_free_keyval are the functions you should use in order to be MPI 2.2 compliant.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Based on my understanding of the MPI standard, your application is incorrect, and therefore the MPICH behavior is incorrect. The delete function is not there for you to delete the keyval (!) but to delete the attribute. Here is what the MPI standard states about this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that it is not erroneous to free an attribute key that is in use, because the actual free does not transpire until after all references (in other communicators on the process) to the key have been freed. These references need to be explictly freed by the program, either via calls to MPI_COMM_DELETE_ATTR that free one attribute instance, or by calls to MPI_COMM_FREE that free all attribute instances associated with the freed communicator.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 6, 2011, at 10:08 , Pascal Deveze wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a problem to finish the porting of ROMIO into Open MPI. It is related to the routines MPI_Comm_dup together with MPI_Keyval_create, MPI_Keyval_free, MPI_Attr_get and MPI_Attr_put.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is a simple program that reproduces my problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===========================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int copy_fct(MPI_Comm comm, int keyval, void *extra, void *attr_in, void **attr_out, int *flag) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; return MPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int delete_fct(MPI_Comm comm, int keyval, void *attr_val, void *extra) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Keyval_free(&amp;keyval);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; return MPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int i, found, attribute_val=100, keyval = MPI_KEYVAL_INVALID;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm dupcomm;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for (i=0; i&lt;100;i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /* This simulates the MPI_File_open() */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if (keyval == MPI_KEYVAL_INVALID) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             MPI_Keyval_create((MPI_Copy_function *) copy_fct, (MPI_Delete_function *) delete_fct, &amp;keyval, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             MPI_Attr_put(MPI_COMM_WORLD, keyval, &amp;attribute_val);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             MPI_Comm_dup(MPI_COMM_WORLD, &amp;dupcomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             MPI_Comm_dup(MPI_COMM_WORLD, &amp;dupcomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             MPI_Attr_get(MPI_COMM_WORLD, keyval, (void *) &amp;attribute_val, &amp;found);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /* This simulates the MPI_File_close() */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_free(&amp;dupcomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===============================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I run it on only one process and get the error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** An error occurred in MPI_Attr_get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think this error is displayed because  keyval does not exist any more.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This programm runs well on MPICH2 (ROMIO is comming with MPICH2).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This programm runs well when delete_fct() does not call MPI_Keyval_free
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This programm runs well when I call MPI_Keyval_create with &quot;MPI_NULL_COPY_FN&quot; instead of &quot;(MPI_Copy_function *) copy_fct&quot; (this is quite strange : copy_fct does nothing !).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suspect that there could be a bug in OpenMPI: In ompi/attribute/attribute.c two functions are calling OBJ_RELEASE: ompi_attr_delete and ompi_attr_free_keyval. So, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reference count is decremented twice.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pascal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Rob Latham
</span><br>
<span class="quotelev2">&gt;&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev2">&gt;&gt; Argonne National Lab, IL USA
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>
<p>
<p>
diff --git a/src/mpi/romio/adio/common/cb_config_list.c b/src/mpi/romio/adio/common/cb_config_list.c
<br>
index ca03677..29fb1f6 100644
<br>
--- a/src/mpi/romio/adio/common/cb_config_list.c
<br>
+++ b/src/mpi/romio/adio/common/cb_config_list.c
<br>
@@ -405,8 +405,12 @@ int ADIOI_cb_delete_name_array(MPI_Comm comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADIOI_UNREFERENCED_ARG(extra);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array = (ADIO_cb_name_array) attr_val;
<br>
-    if (array == NULL)
<br>
-	    goto fn_exit;
<br>
+    if (array == NULL) {
<br>
+        if (comm == MPI_COMM_SELF) {
<br>
+            MPI_Keyval_free(&amp;cb_config_list_keyval);
<br>
+        }
<br>
+        goto fn_exit;
<br>
+    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array-&gt;refct--;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (array-&gt;refct &lt;= 0) {
<br>
@@ -422,7 +426,6 @@ int ADIOI_cb_delete_name_array(MPI_Comm comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADIOI_Free(array);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;fn_exit:
<br>
-    MPI_Keyval_free(&amp;keyval);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8848/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8849.php">Jeff Squyres: "Re: [OMPI devel] Datatype question"</a>
<li><strong>Previous message:</strong> <a href="8847.php">Jeff Squyres: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>In reply to:</strong> <a href="8838.php">George Bosilca: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8866.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
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
