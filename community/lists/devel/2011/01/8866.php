<?
$subject_val = "Re: [OMPI devel] Problem with attributes attached to communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 07:55:21 2011" -->
<!-- isoreceived="20110113125521" -->
<!-- sent="Thu, 13 Jan 2011 13:55:09 +0100" -->
<!-- isosent="20110113125509" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with attributes attached to communicators" -->
<!-- id="4D2EF62D.8070405_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EAFA78C2-04DE-46B1-9E70-9AC9240B2180_at_mcs.anl.gov" -->
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
<strong>Date:</strong> 2011-01-13 07:55:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8867.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8865.php">Jeff Squyres: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
<li><strong>Maybe in reply to:</strong> <a href="8837.php">Pascal Deveze: "[OMPI devel] Problem with attributes attached to communicators"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A new patch in ROMIO solves this problem
<br>
Thanks to Dave.
<br>
<p>Pascal
<br>
<p>Dave Goodell a &#233;crit :
<br>
<span class="quotelev1">&gt; Hmm... Apparently I was too optimistic about my untested patch.  I'll work with Rob this afternoon to straighten this out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2011, at 5:53 AM CST, Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Dave,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your proposed patch does not work when the call to MPI_File_open() is done on MPI_COMM_SELF.
</span><br>
<span class="quotelev2">&gt;&gt; For example, with the romio test program &quot;simple.c&quot;, I got the fatal error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 ./simple -fname /tmp//TEST
</span><br>
<span class="quotelev2">&gt;&gt; Fatal error in MPI_Attr_put: Invalid keyval, error stack:
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Attr_put(131): MPI_Attr_put(comm=0x84000000, keyval=603979776, attr_value=0x2279fa0) failed
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Attr_put(89).: Attribute key was MPI_KEYVAL_INVALID
</span><br>
<span class="quotelev2">&gt;&gt; APPLICATION TERMINATED WITH THE EXIT STRING: Hangup (signal 1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pascal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dave Goodell a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try this (untested) patch instead:
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Dave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 7, 2011, at 3:50 AM CST, Rob Latham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Pascal.  I'm really happy that you have been working with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI folks to re-sync romio.  I meant to ask you how that work was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; progressing, so thanks for the email!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I need copy Dave Goodell on this conversation because he helped me
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; understand the keyval issues when we last worked on this two years
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ago.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dave, some background.  We added some code in ROMIO to address ticket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 222:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://trac.mcs.anl.gov/projects/mpich2/ticket/222">http://trac.mcs.anl.gov/projects/mpich2/ticket/222</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But that code apparently makes OpenMPI unhappy.  I think when we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; talked about this I remember it came down to a, shall we say,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different interpretation of the standard between MPICH2 and OpenMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In case it's not clear from the nesting of messages, here's Pascal's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extraction of the ROMIO keyval code:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8837.php">http://www.open-mpi.org/community/lists/devel/2011/01/8837.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and here's the OpenMPI developer's response:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8838.php">http://www.open-mpi.org/community/lists/devel/2011/01/8838.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think this is related to a discussion I had a couple years ago:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/03/8409.php">http://www.open-mpi.org/community/lists/users/2009/03/8409.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, to eventually answer your question yes I do have some remarks, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have no answers.  It's been a couple of years since I added those
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; frees...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==rob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Jan 07, 2011 at 09:47:17AM +0100, Pascal Deveze wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Rob,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As you perhaps remember, I was porting ROMIO on OpenMPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The job is quite finished, I only have a problem with the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocation/dealocation of Keyval (cb_config_list_keyval in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; adio/common/cb_config_list.c).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As the alogorithm runs on MPICH2, I asked for help on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  mailing list.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I just received the following answer from George Bosilca.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The solution I found to run ROMIO with OpenMPI is to delete the line:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MPI_Keyval_free(&amp;keyval);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the function ADIOI_cb_delete_name_array
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (romio/adio/common/cb_config_list.c).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do you have any remarks about that ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Pascal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------- Message original --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sujet: 	Re: [OMPI devel] Problem with attributes attached to communicators
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: 	Thu, 6 Jan 2011 13:15:14 -0500
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; De: 	George Bosilca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; R&#233;pondre &#224;: 	Open MPI Developers 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Pour: 	Open MPI Developers 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; R&#233;f&#233;rences: 	
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;4D25DAF9.3070400_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_create_keyval and MPI_Comm_free_keyval are the functions you should use in order to be MPI 2.2 compliant.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Based on my understanding of the MPI standard, your application is incorrect, and therefore the MPICH behavior is incorrect. The delete function is not there for you to delete the keyval (!) but to delete the attribute. Here is what the MPI standard states about this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Note that it is not erroneous to free an attribute key that is in use, because the actual free does not transpire until after all references (in other communicators on the process) to the key have been freed. These references need to be explictly freed by the program, either via calls to MPI_COMM_DELETE_ATTR that free one attribute instance, or by calls to MPI_COMM_FREE that free all attribute instances associated with the freed communicator.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 6, 2011, at 10:08 , Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have a problem to finish the porting of ROMIO into Open MPI. It is related to the routines MPI_Comm_dup together with MPI_Keyval_create, MPI_Keyval_free, MPI_Attr_get and MPI_Attr_put.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here is a simple program that reproduces my problem:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ===========================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int copy_fct(MPI_Comm comm, int keyval, void *extra, void *attr_in, void **attr_out, int *flag) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; return MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int delete_fct(MPI_Comm comm, int keyval, void *attr_val, void *extra) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Keyval_free(&amp;keyval);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; return MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int i, found, attribute_val=100, keyval = MPI_KEYVAL_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm dupcomm;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for (i=0; i&lt;100;i++) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     /* This simulates the MPI_File_open() */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     if (keyval == MPI_KEYVAL_INVALID) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             MPI_Keyval_create((MPI_Copy_function *) copy_fct, (MPI_Delete_function *) delete_fct, &amp;keyval, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             MPI_Attr_put(MPI_COMM_WORLD, keyval, &amp;attribute_val);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             MPI_Comm_dup(MPI_COMM_WORLD, &amp;dupcomm);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     else {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             MPI_Comm_dup(MPI_COMM_WORLD, &amp;dupcomm);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             MPI_Attr_get(MPI_COMM_WORLD, keyval, (void *) &amp;attribute_val, &amp;found);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     /* This simulates the MPI_File_close() */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Comm_free(&amp;dupcomm);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ===============================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I run it on only one process and get the error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Attr_get
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I think this error is displayed because  keyval does not exist any more.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This programm runs well on MPICH2 (ROMIO is comming with MPICH2).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This programm runs well when delete_fct() does not call MPI_Keyval_free
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This programm runs well when I call MPI_Keyval_create with &quot;MPI_NULL_COPY_FN&quot; instead of &quot;(MPI_Copy_function *) copy_fct&quot; (this is quite strange : copy_fct does nothing !).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I suspect that there could be a bug in OpenMPI: In ompi/attribute/attribute.c two functions are calling OBJ_RELEASE: ompi_attr_delete and ompi_attr_free_keyval. So, the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; reference count is decremented twice.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Pascal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rob Latham
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Argonne National Lab, IL USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/src/mpi/romio/adio/common/cb_config_list.c b/src/mpi/romio/adio/common/cb_config_list.c
</span><br>
<span class="quotelev2">&gt;&gt; index ca03677..29fb1f6 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/src/mpi/romio/adio/common/cb_config_list.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/src/mpi/romio/adio/common/cb_config_list.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -405,8 +405,12 @@ int ADIOI_cb_delete_name_array(MPI_Comm comm,
</span><br>
<span class="quotelev2">&gt;&gt;     ADIOI_UNREFERENCED_ARG(extra);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     array = (ADIO_cb_name_array) attr_val;
</span><br>
<span class="quotelev2">&gt;&gt; -    if (array == NULL)
</span><br>
<span class="quotelev2">&gt;&gt; -	    goto fn_exit;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (array == NULL) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (comm == MPI_COMM_SELF) {
</span><br>
<span class="quotelev2">&gt;&gt; +            MPI_Keyval_free(&amp;cb_config_list_keyval);
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +        goto fn_exit;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt;     array-&gt;refct--;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if (array-&gt;refct &lt;= 0) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -422,7 +426,6 @@ int ADIOI_cb_delete_name_array(MPI_Comm comm,
</span><br>
<span class="quotelev2">&gt;&gt; 	ADIOI_Free(array);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; fn_exit:
</span><br>
<span class="quotelev2">&gt;&gt; -    MPI_Keyval_free(&amp;keyval);
</span><br>
<span class="quotelev2">&gt;&gt;     return MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8866/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8867.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8865.php">Jeff Squyres: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
<li><strong>Maybe in reply to:</strong> <a href="8837.php">Pascal Deveze: "[OMPI devel] Problem with attributes attached to communicators"</a>
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
