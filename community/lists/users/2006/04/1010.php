<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 18:34:53 2006" -->
<!-- isoreceived="20060410223453" -->
<!-- sent="Mon, 10 Apr 2006 18:34:07 -0400" -->
<!-- isosent="20060410223407" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] Incorrect behavior for attributes attached to MPI_COMM_SELF." -->
<!-- id="CEECA3BE5A1E334EBB71ADD1B9ABEF820107F420_at_webmail.imi.nrc.ca" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 18:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1011.php">Aniruddha Shet: "[OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1009.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>It looks like there is a problem in OpenMPI 1.0.2 with how MPI_COMM_SELF attributes callback functions are handled by MPI_Finalize().
<br>
<p>The following C program register a callback function associated with the MPI_COMM_SELF communicator to be called during the first steps of MPI_Finalize(). As shown in this example, this can be used to make sure that global MPI_Datatype variables associated to global datatypes are freed by calling MPI_Type_free() before program exit (and thus preventing ugly memory leaks/outstanding allocations when run in valgrind for example). This mechanism is used by the library I'm working on as well as by PetSc library.
<br>
<p>The program works by taking advantage of the MPI-2 Standard Section 4.8 &quot;Allowing User Function at Process Termination&quot;. As it says, the MPI_Finalize() function calls the delete callback associated to the MPI_COMM_SELF attribute &quot;before any other part of MPI are affected&quot;. It also says that &quot;calling MPI_Finalized() will return false in any of these callback functions&quot;.
<br>
<p>Section 4.9 of the MPI-2 Standard: &quot;Determining Whether MPI Has Finished&quot; moreover says that it can be determined if MPI is active by calling MPI_Finalized(). It also reaffirm that MPI is active in the callback functions invoked by MPI_Finalize().
<br>
<p>I think that an &quot;active&quot; MPI library here means that basic MPI functions like MPI_Type_free() can be called.
<br>
<p>The following small program therefore seems to conform to the MPI standard.
<br>
<p>However where I run it (compiled with OpenMPI 1.0.2 mpicc), I get the following message:
<br>
<p>*** An error occurred in MPI_Type_free
<br>
*** after MPI was finalized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>Note that this program works well with mpich2.
<br>
<p>Please have a look at this problem.
<br>
<p>Thanks,
<br>
<p>Martin Audet
<br>
<p><p><p>#include &lt;assert.h&gt;
<br>
#include &lt;stddef.h&gt;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>static int attr_delete_function(MPI_Comm p_comm, int p_keyval, void *p_attribute_val, void * p_extra_state)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;assert(p_attribute_val != NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;/* Get a reference on the datatype received. */
<br>
&nbsp;&nbsp;&nbsp;MPI_Datatype *const cur_datatype = (MPI_Datatype *)(p_attribute_val);
<br>
<p>&nbsp;&nbsp;&nbsp;/* Free it if non null.  */
<br>
&nbsp;&nbsp;&nbsp;if (*cur_datatype != MPI_DATATYPE_NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(cur_datatype);                                   assert(*cur_datatype == MPI_DATATYPE_NULL);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
}
<br>
<p><p>/* If p_datatype refer to a non null MPI datatype, this function will register a callback       */
<br>
/*  function to free p_datatype and set it to MPI_DATATYPE_NULL. This callback will be          */
<br>
/*  called during the first steps of the MPI_Finalize() function when the state of the MPI      */
<br>
/*  library still allows MPI functions to be called. This is done by associating an             */
<br>
/*  attribute to the MPI_COMM_SELF communicator as allowed by the MPI 2 standard (section 4.8). */
<br>
static void add_type_free_callback(MPI_Datatype *p_datatype)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int keyval;
<br>
<p>&nbsp;&nbsp;&nbsp;assert(p_datatype != NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;/* First create the keyval.                                               */
<br>
&nbsp;&nbsp;&nbsp;/*  No callback function will be called when MPI_COMM_SELF is duplicated  */
<br>
&nbsp;&nbsp;&nbsp;/*  and attr_delete_function() will be called when MPI_COMM_SELF is       */
<br>
&nbsp;&nbsp;&nbsp;/*  freed (e.g. during MPI_Finalize()).                                   */
<br>
&nbsp;&nbsp;&nbsp;/*  Since many callback can be associated with MPI_COMM_SELF to free many */
<br>
&nbsp;&nbsp;&nbsp;/*  datatypes, a new keyval has to be created every time.                 */
<br>
&nbsp;&nbsp;&nbsp;MPI_Keyval_create(MPI_NULL_COPY_FN, &amp;attr_delete_function, &amp;keyval, NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;/* Then associate this keyval to MPI_COMM_SELF and make sure the pointer  */
<br>
&nbsp;&nbsp;&nbsp;/* to the datatype p_datatype is passed to the callback.                  */
<br>
&nbsp;&nbsp;&nbsp;MPI_Attr_put(MPI_COMM_SELF, keyval, p_datatype);
<br>
<p>&nbsp;&nbsp;&nbsp;/* Free the keyval because it is no longer needed.                        */
<br>
&nbsp;&nbsp;&nbsp;MPI_Keyval_free(&amp;keyval);
<br>
}
<br>
<p>typedef struct {
<br>
&nbsp;&nbsp;&nbsp;short ss;
<br>
&nbsp;&nbsp;&nbsp;int   ii;
<br>
} glb_struct_t;
<br>
<p>MPI_Datatype glb_dtype = MPI_DATATYPE_NULL;
<br>
<p>static void calc_glb_dtype(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;const int NB_MEM = 3; 
<br>
&nbsp;&nbsp;&nbsp;static int          len_tbl[3]  = { 1,                          1,                          1                    };
<br>
&nbsp;&nbsp;&nbsp;static MPI_Aint     disp_tbl[3] = { offsetof(glb_struct_t, ss), offsetof(glb_struct_t, ii), sizeof(glb_struct_t) };
<br>
&nbsp;&nbsp;&nbsp;static MPI_Datatype type_tbl[3] = { MPI_SHORT,                  MPI_INT,                    MPI_UB               };
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Type_struct(NB_MEM, len_tbl, disp_tbl, type_tbl, &amp;glb_dtype);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;glb_dtype);
<br>
<p>&nbsp;&nbsp;&nbsp;add_type_free_callback(&amp;glb_dtype);
<br>
}
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;calc_glb_dtype();
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1011.php">Aniruddha Shet: "[OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1009.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
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
