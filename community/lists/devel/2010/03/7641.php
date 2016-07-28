<?
$subject_val = "Re: [OMPI devel] devel Digest, Vol 1613, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 06:19:23 2010" -->
<!-- isoreceived="20100322101923" -->
<!-- sent="Mon, 22 Mar 2010 11:19:16 +0100" -->
<!-- isosent="20100322101916" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 1613, Issue 1" -->
<!-- id="4BA74424.6080600_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BA73CCC.6060704_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] devel Digest, Vol 1613, Issue 1<br>
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 06:19:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7642.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7640.php">Terry Dontje: "[OMPI devel] vt compilation problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>You are right.
<br>
&nbsp;- I agree with you: The Open MPI ompi_datatype_is_contigous_memory runs 
<br>
correctly.
<br>
&nbsp;- The problem comes with ROMIO: They need a function that returns true 
<br>
if the content is contiguous AND the content start at the pointer 
<br>
position (displacement zero).
<br>
&nbsp;- MPI Datatypes are a fanny world  ;-)
<br>
<p>If you take a look at source 
<br>
ompi/mca/io/romio/romio/adio/common/iscontig.c you will see:
<br>
<p>#if (defined(MPICH) || defined(MPICH2))
<br>
/* MPICH2 also provides this routine */
<br>
void MPIR_Datatype_iscontig(MPI_Datatype datatype, int *flag);
<br>
<p>void ADIOI_Datatype_iscontig(MPI_Datatype datatype, int *flag)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPIR_Datatype_iscontig(datatype, flag);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* if it is MPICH2 and the datatype is reported as contigous,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check if the true_lb is non-zero, and if so, mark the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;datatype as noncontiguous */
<br>
#ifdef MPICH2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (*flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint true_extent, true_lb;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_true_extent(datatype, &amp;true_lb, &amp;true_extent);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (true_lb &gt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*flag = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif
<br>
}
<br>
#elif ....
<br>
<p>My proposition is just to take these 12 last lines and put them into 
<br>
ompi/mca/io/romio/src/io_romio_module.c to
<br>
conform to what ROMIO wants.
<br>
If my proposition is accepted, just take my patch:
<br>
<p>diff -u ompi/mca/io/romio/src/io_romio_module.c 
<br>
ompi/mca/io/romio/src/io_romio_module.c.OLD
<br>
--- ompi/mca/io/romio/src/io_romio_module.c     2010-03-19 
<br>
11:19:57.000000000 +0100
<br>
+++ ompi/mca/io/romio/src/io_romio_module.c.OLD 2010-03-22 
<br>
11:05:57.000000000 +0100
<br>
@@ -133,12 +133,4 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* a count of 2 in order to get these gaps taken into acount.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*flag = ompi_datatype_is_contiguous_memory_layout(datatype, 2);
<br>
-    if (*flag) {
<br>
-        MPI_Aint true_extent, true_lb;
<br>
-
<br>
-        ompi_datatype_get_true_extent(datatype, &amp;true_lb, &amp;true_extent);
<br>
-
<br>
-        if (true_lb &gt; 0)
<br>
-            *flag = 0;
<br>
-    }
<br>
&nbsp;}
<br>
<p>Pascal
<br>
<p><p><p>On Mar 19, 2010, at 11:52, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pascal,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I went inside the code, and I have to say it's a long tricky story. 
</span><br>
<span class="quotelev1">&gt; Let me try to sort it out:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - you create two types:
</span><br>
<span class="quotelev1">&gt;   - the indexed one containing just one element. This type is 
</span><br>
<span class="quotelev1">&gt; contiguous as there are no holes around the data, i.e. the size and 
</span><br>
<span class="quotelev1">&gt; the extent of this datatype are equal.
</span><br>
<span class="quotelev1">&gt;   - the resized one. This type resize the previous one by adding a 
</span><br>
<span class="quotelev1">&gt; hole in the beginning, thus it is not a contiguous type, even if the 
</span><br>
<span class="quotelev1">&gt; memory layout is in a single piece.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, let's go one step up in the ROMIO code attached to your previous 
</span><br>
<span class="quotelev1">&gt; email. You get the content of the main type, in this example RESIZED, 
</span><br>
<span class="quotelev1">&gt; and them the content of the internal type which is TYPE indexed. When 
</span><br>
<span class="quotelev1">&gt; you look if the internal type is contiguous, Open MPI answer yes as 
</span><br>
<span class="quotelev1">&gt; the indexed type has its extent equal to its size. While this is true, 
</span><br>
<span class="quotelev1">&gt; the fact that this type is resized make it non-contiguous, as by 
</span><br>
<span class="quotelev1">&gt; resizing it you explicitly alter the lower bound.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fix you proposed in your last email (i.e. modify the ADIO is 
</span><br>
<span class="quotelev1">&gt; contig function) is a workaround. Let me think a little bit more about 
</span><br>
<span class="quotelev1">&gt; this. I'll be in right here, please read below...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I read the MPI 2-2 standard in the Chapter about the Datatypes 
</span><br>
<span class="quotelev1">&gt; (page 87), at the section about the MPI_Type_indexed. I have the 
</span><br>
<span class="quotelev1">&gt; original typemap, i.e. the one for the MPI_CHAR type (char,0). When I 
</span><br>
<span class="quotelev1">&gt; create the indexed type I get the typemap (char, 1). Based on the 
</span><br>
<span class="quotelev1">&gt; definition of lower and upper bounds on the page 100, lb is equal to 1 
</span><br>
<span class="quotelev1">&gt; and ub is equal to 2, which make the extent of the indexed type equal 
</span><br>
<span class="quotelev1">&gt; to 1. So far so good. Now let's look what the MPI standard says about 
</span><br>
<span class="quotelev1">&gt; having multiple of such datatype in an array, aka MPI_Type_contiguous 
</span><br>
<span class="quotelev1">&gt; based on your MPI_Type_indexed. As a reminder you indexed type has the 
</span><br>
<span class="quotelev1">&gt; typemap (char, 1) and the extent 1. Based on the definition of 
</span><br>
<span class="quotelev1">&gt; MPI_Type_contiguous on page 84, the typemap of the 
</span><br>
<span class="quotelev1">&gt; MPI_Type_contiguous( 4, your_indexed_type) is: (char,1), (char, 2), 
</span><br>
<span class="quotelev1">&gt; (char, 3), (char, 4) which as far as I can say it is __contiguous__. 
</span><br>
<span class="quotelev1">&gt; So the Open MPI ompi_datatype_is_contigous_memory correctly returns 
</span><br>
<span class="quotelev1">&gt; the fact that the resulting datatype even with a co!
</span><br>
<span class="quotelev1">&gt;  unt greater than 1 is contiguous. Welcome to the fancy world of MPI 
</span><br>
<span class="quotelev1">&gt; datatypes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore, I think the Open MPI functions __really__ do the correct 
</span><br>
<span class="quotelev1">&gt; thing, and the problem is in the COMBINER_RESIZED code. As the 
</span><br>
<span class="quotelev1">&gt; datatype is explicitly resized by the user, you should not look if the 
</span><br>
<span class="quotelev1">&gt; previous type (types[0]) is contiguous or not, it doesn't matter as it 
</span><br>
<span class="quotelev1">&gt; was clearly resized. I wonder what the ROMIO developers had in mind 
</span><br>
<span class="quotelev1">&gt; for the ADIOI_Datatype_iscontig function, but it doesn't look like 
</span><br>
<span class="quotelev1">&gt; they just want to know if the content is contiguous. I guess this 
</span><br>
<span class="quotelev1">&gt; function return true if the content is contiguous AND the content 
</span><br>
<span class="quotelev1">&gt; start at the pointer position (displacement zero).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 19, 2010, at 06:14 , Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Hi George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I went further on my investigations, and I found a solution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ADIOI_Datatype_iscontig is defined in the file 
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/io/romio/src/io_romio_module.c as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void ADIOI_Datatype_iscontig(MPI_Datatype datatype, int *flag)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   /*
</span><br>
<span class="quotelev2">&gt;&gt;    * Open MPI contiguous check return true for datatype with
</span><br>
<span class="quotelev2">&gt;&gt;    * gaps in the beginning and at the end. We have to provide
</span><br>
<span class="quotelev2">&gt;&gt;    * a count of 2 in order to get these gaps taken into acount.
</span><br>
<span class="quotelev2">&gt;&gt;    */
</span><br>
<span class="quotelev2">&gt;&gt;   *flag = ompi_datatype_is_contiguous_memory_layout(datatype, 2);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is clearly written here that the gaps should be taken into account 
</span><br>
<span class="quotelev2">&gt;&gt; with a count of 2. But that's not everytime the case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your proposition is to modify ROMIO code.
</span><br>
<span class="quotelev2">&gt;&gt; So, I propose to fix ADIOI_Datatype_iscontig and add the following 
</span><br>
<span class="quotelev2">&gt;&gt; code after the call
</span><br>
<span class="quotelev2">&gt;&gt; to ompi_datatype_is_contiguous_memory_layout():
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if (*flag) {
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Aint true_extent, true_lb;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       ompi_datatype_get_true_extent(datatype, &amp;true_lb, &amp;true_extent);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       if (true_lb &gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;           *flag = 0;
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pascal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 18, 2010, at 13:24, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We will disagree on that, but your datatype is contiguous. It 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't matter that there are gaps in the beginning and at the end, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as long as you only send one such datatype the real data that has to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go over the network _is_ contiguous. And this is what the Open MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; datatype engine is reporting back.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apparently, ROMIO expect a contiguous datatype to start from the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; position 0 relative to the beginning of the user buffer. I don't see 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; why they have such a restrictive view, but I guess the original 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH datatype engine was not able to distinguish between gaps in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the middle and gaps at the beginning and the end of the datatype.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't see how to fix that in ROMIO code. But in case you plan to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fix it, the correct solution is to retrieve the true lower bound of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the datatype in the contiguous case and add it to st_offset.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 18, 2010, at 12:27 , Pascal Deveze wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry, I missed my porting from MPICH2 to OpenMPI concerning the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; romio/adio/comm/flatten.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (flatten.c in OpenMPI does not support MPI_COMBINER_RESIZED).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the diff:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; diff -u flatten.c flatten.c.old
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- flatten.c 2010-03-18 17:07:43.000000000 +0100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ flatten.c.old 2010-03-18 17:14:04.000000000 +0100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -525,44 +525,6 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - /* This is done similar to a type_struct with an lb, datatype, ub */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - /* handle the Lb */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - j = *curr_index;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - flat-&gt;indices[j] = st_offset + adds[0];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - (*curr_index)++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - /* handle the datatype */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - if ((old_combiner != MPI_COMBINER_NAMED) &amp;&amp; (!old_is_contig)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - ADIOI_Flatten(types[0], flat, st_offset+adds[0], curr_index);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - /* current type is basic or contiguous */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - j = *curr_index;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - flat-&gt;indices[j] = st_offset;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - MPI_Type_size(types[0], (int*)&amp;old_size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - flat-&gt;blocklens[j] = old_size;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - (*curr_index)++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - /* take care of the extent as a UB */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - j = *curr_index;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - flat-&gt;indices[j] = st_offset + adds[0] + adds[1];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - (*curr_index)++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* TODO: FIXME (requires changing prototypes to return errors...) */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FPRINTF(stderr, &quot;Error: Unsupported datatype passed to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ADIOI_Flatten\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -827,29 +789,6 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - /* treat it as a struct with lb, type, ub */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - /* add 2 for lb and ub */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - (*curr_index) += 2;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - count += 2;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - /* add for datatype */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - if ((old_combiner != MPI_COMBINER_NAMED) &amp;&amp; (!old_is_contig)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - count += ADIOI_Count_contiguous_blocks(types[0], curr_index);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - /* basic or contiguous type */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - count++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - (*curr_index)++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* TODO: FIXME */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FPRINTF(stderr, &quot;Error: Unsupported datatype passed to         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ADIOI_Count_contiguous_blocks, combiner = %d\n&quot;, combiner);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pascal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pascal Deveze a ?crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I use a very simple datatype defined as follow:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lng[0]= 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dsp[0]= 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; err=MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; err=MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Type_commit(&amp;filetype);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This datatype consists of a hole (of length 1 char) followed by a 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; char.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The datatype with hole at the beginning is not correctly handled 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; by           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ROMIO integrated in OpenMPI (I tried with MPICH2 and it worked fine).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You will see bellow a program to reproduce the problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; After investigations, I see that the difference between OpenMPI 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH appears at line 542 in the file romio/adio/comm/flatten.c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* This is done similar to a type_struct with an lb, datatype, ub */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* handle the Lb */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; j = *curr_index;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flat-&gt;indices[j] = st_offset + adds[0];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (*curr_index)++;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* handle the datatype */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig); &lt;========== 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ligne 542
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For MPICH2, the datatype is not contiguous, but it is for OpenMPI. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The routine ADIOI_Datatype_iscontig is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; quite different in OpenMPI because the datatypes are handled very 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; differently. If I reset old_is_contig just after
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line 542, the problem disappears (Of course, this is not a solution).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am not able to propose a right solution. Can somebody help ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Pascal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ============ Program to reproduce the problem ========
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; char filename[256]=&quot;VIEW_TEST&quot;;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; char buffer[100];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int err, i, myid, dsp[3], lng[3];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_File fh;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Datatype filetype, offtype;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Aint lb, extent;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for (i=0; i&lt;sizeof(buffer); i++) buffer[i] = i;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if (!myid) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_CREATE |           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_MODE_RDWR , MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_File_write(fh, buffer, sizeof(buffer), MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lng[0]= 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dsp[0]= 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Type_commit(&amp;filetype);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_RDONLY ,           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_File_set_view(fh, 0, MPI_CHAR, filetype,&quot;native&quot;, MPI_INFO_NULL);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_File_read(fh, buffer, 5, MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; printf(&quot;Data: &quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for (i=0 ; i&lt;5 ; i++) printf(&quot; %x &quot;, buffer[i]);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if (buffer[1] != 3) printf(&quot;\n =======&gt; test KO : buffer[1]=%d 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead of %d \n&quot;, buffer[1], 4);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; else printf(&quot;\n =======&gt; test OK\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Type_free(&amp;filetype);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ============ The result of the program with MPICH2 ========
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Data: 1 3 5 7 9
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =======&gt; test OK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ============ The result of the program with OpenMPI ========
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Data: 0 2 4 6 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =======&gt; test KO : buffer[1]=2 instead of 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Comment: Only the first hole is ommited.
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
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of devel Digest, Vol 1613, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7642.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7640.php">Terry Dontje: "[OMPI devel] vt compilation problem"</a>
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
