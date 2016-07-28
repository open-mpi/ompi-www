<?
$subject_val = "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 19 11:52:09 2010" -->
<!-- isoreceived="20100319155209" -->
<!-- sent="Fri, 19 Mar 2010 11:52:00 -0400" -->
<!-- isosent="20100319155200" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )" -->
<!-- id="D7886E32-26D5-414D-98A4-29BF702116D3_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BA34E92.2030107_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-19 11:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7640.php">Terry Dontje: "[OMPI devel] vt compilation problem"</a>
<li><strong>Previous message:</strong> <a href="7638.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>In reply to:</strong> <a href="7638.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7642.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pascal,
<br>
<p>I went inside the code, and I have to say it's a long tricky story. Let me try to sort it out:
<br>
<p>- you create two types:
<br>
&nbsp;&nbsp;- the indexed one containing just one element. This type is contiguous as there are no holes around the data, i.e. the size and the extent of this datatype are equal.
<br>
&nbsp;&nbsp;- the resized one. This type resize the previous one by adding a hole in the beginning, thus it is not a contiguous type, even if the memory layout is in a single piece.
<br>
<p>Now, let's go one step up in the ROMIO code attached to your previous email. You get the content of the main type, in this example RESIZED, and them the content of the internal type which is TYPE indexed. When you look if the internal type is contiguous, Open MPI answer yes as the indexed type has its extent equal to its size. While this is true, the fact that this type is resized make it non-contiguous, as by resizing it you explicitly alter the lower bound.
<br>
<p>The fix you proposed in your last email (i.e. modify the ADIO is contig function) is a workaround. Let me think a little bit more about this. I'll be in right here, please read below...
<br>
<p>If I read the MPI 2-2 standard in the Chapter about the Datatypes (page 87), at the section about the MPI_Type_indexed. I have the original typemap, i.e. the one for the MPI_CHAR type (char,0). When I create the indexed type I get the typemap (char, 1). Based on the definition of lower and upper bounds on the page 100, lb is equal to 1 and ub is equal to 2, which make the extent of the indexed type equal to 1. So far so good. Now let's look what the MPI standard says about having multiple of such datatype in an array, aka MPI_Type_contiguous based on your MPI_Type_indexed. As a reminder you indexed type has the typemap (char, 1) and the extent 1. Based on the definition of MPI_Type_contiguous on page 84, the typemap of the MPI_Type_contiguous( 4, your_indexed_type) is: (char,1), (char, 2), (char, 3), (char, 4) which as far as I can say it is __contiguous__. So the Open MPI ompi_datatype_is_contigous_memory correctly returns the fact that the resulting datatype even with a count greater than 1 is contiguous. <br>
Welcome to the fancy world of MPI datatypes.
<br>
<p>Therefore, I think the Open MPI functions __really__ do the correct thing, and the problem is in the COMBINER_RESIZED code. As the datatype is explicitly resized by the user, you should not look if the previous type (types[0]) is contiguous or not, it doesn't matter as it was clearly resized. I wonder what the ROMIO developers had in mind for the ADIOI_Datatype_iscontig function, but it doesn't look like they just want to know if the content is contiguous. I guess this function return true if the content is contiguous AND the content start at the pointer position (displacement zero).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Mar 19, 2010, at 06:14 , Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I went further on my investigations, and I found a solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ADIOI_Datatype_iscontig is defined in the file ompi/mca/io/romio/src/io_romio_module.c as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void ADIOI_Datatype_iscontig(MPI_Datatype datatype, int *flag)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   /*
</span><br>
<span class="quotelev1">&gt;    * Open MPI contiguous check return true for datatype with
</span><br>
<span class="quotelev1">&gt;    * gaps in the beginning and at the end. We have to provide
</span><br>
<span class="quotelev1">&gt;    * a count of 2 in order to get these gaps taken into acount.
</span><br>
<span class="quotelev1">&gt;    */
</span><br>
<span class="quotelev1">&gt;   *flag = ompi_datatype_is_contiguous_memory_layout(datatype, 2);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is clearly written here that the gaps should be taken into account with a count of 2. But that's not everytime the case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your proposition is to modify ROMIO code.
</span><br>
<span class="quotelev1">&gt; So, I propose to fix ADIOI_Datatype_iscontig and add the following code after the call
</span><br>
<span class="quotelev1">&gt; to ompi_datatype_is_contiguous_memory_layout():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   if (*flag) {
</span><br>
<span class="quotelev1">&gt;       MPI_Aint true_extent, true_lb;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       ompi_datatype_get_true_extent(datatype, &amp;true_lb, &amp;true_extent);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       if (true_lb &gt; 0)
</span><br>
<span class="quotelev1">&gt;           *flag = 0;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 18, 2010, at 13:24, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We will disagree on that, but your datatype is contiguous. It doesn't matter that there are gaps in the beginning and at the end, as long as you only send one such datatype the real data that has to go over the network _is_ contiguous. And this is what the Open MPI datatype engine is reporting back.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Apparently, ROMIO expect a contiguous datatype to start from the position 0 relative to the beginning of the user buffer. I don't see why they have such a restrictive view, but I guess the original MPICH datatype engine was not able to distinguish between gaps in the middle and gaps at the beginning and the end of the datatype.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't see how to fix that in ROMIO code. But in case you plan to fix it, the correct solution is to retrieve the true lower bound of the datatype in the contiguous case and add it to st_offset.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 18, 2010, at 12:27 , Pascal Deveze wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, I missed my porting from MPICH2 to OpenMPI concerning the file 
</span><br>
<span class="quotelev2">&gt;&gt; romio/adio/comm/flatten.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (flatten.c in OpenMPI does not support MPI_COMBINER_RESIZED).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the diff:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff -u flatten.c flatten.c.old
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- flatten.c 2010-03-18 17:07:43.000000000 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ flatten.c.old 2010-03-18 17:14:04.000000000 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -525,44 +525,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - /* This is done similar to a type_struct with an lb, datatype, ub */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - /* handle the Lb */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - j = *curr_index;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - flat-&gt;indices[j] = st_offset + adds[0];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - (*curr_index)++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - /* handle the datatype */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - if ((old_combiner != MPI_COMBINER_NAMED) &amp;&amp; (!old_is_contig)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ADIOI_Flatten(types[0], flat, st_offset+adds[0], curr_index);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - /* current type is basic or contiguous */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - j = *curr_index;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - flat-&gt;indices[j] = st_offset;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - MPI_Type_size(types[0], (int*)&amp;old_size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - flat-&gt;blocklens[j] = old_size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - (*curr_index)++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - /* take care of the extent as a UB */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - j = *curr_index;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - flat-&gt;indices[j] = st_offset + adds[0] + adds[1];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - (*curr_index)++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* TODO: FIXME (requires changing prototypes to return errors...) */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FPRINTF(stderr, &quot;Error: Unsupported datatype passed to ADIOI_Flatten\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -827,29 +789,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - /* treat it as a struct with lb, type, ub */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - /* add 2 for lb and ub */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - (*curr_index) += 2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - count += 2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - /* add for datatype */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - if ((old_combiner != MPI_COMBINER_NAMED) &amp;&amp; (!old_is_contig)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - count += ADIOI_Count_contiguous_blocks(types[0], curr_index);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - /* basic or contiguous type */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - count++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - (*curr_index)++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* TODO: FIXME */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FPRINTF(stderr, &quot;Error: Unsupported datatype passed to 
</span><br>
<span class="quotelev2">&gt;&gt; ADIOI_Count_contiguous_blocks, combiner = %d\n&quot;, combiner);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; Pascal Deveze a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I use a very simple datatype defined as follow:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; lng[0]= 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; dsp[0]= 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; err=MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; err=MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Type_commit(&amp;filetype);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This datatype consists of a hole (of length 1 char) followed by a char.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The datatype with hole at the beginning is not correctly handled by 
</span><br>
<span class="quotelev2">&gt;&gt; ROMIO integrated in OpenMPI (I tried with MPICH2 and it worked fine).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; You will see bellow a program to reproduce the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; After investigations, I see that the difference between OpenMPI and 
</span><br>
<span class="quotelev2">&gt;&gt; MPICH appears at line 542 in the file romio/adio/comm/flatten.c:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /* This is done similar to a type_struct with an lb, datatype, ub */
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /* handle the Lb */
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; j = *curr_index;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; flat-&gt;indices[j] = st_offset + adds[0];
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (*curr_index)++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /* handle the datatype */
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig); &lt;========== ligne 542
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; For MPICH2, the datatype is not contiguous, but it is for OpenMPI. 
</span><br>
<span class="quotelev2">&gt;&gt; The routine ADIOI_Datatype_iscontig is
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; quite different in OpenMPI because the datatypes are handled very 
</span><br>
<span class="quotelev2">&gt;&gt; differently. If I reset old_is_contig just after
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; line 542, the problem disappears (Of course, this is not a solution).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am not able to propose a right solution. Can somebody help ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Pascal
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ============ Program to reproduce the problem ========
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; char filename[256]=&quot;VIEW_TEST&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; char buffer[100];
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; int err, i, myid, dsp[3], lng[3];
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Status status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_File fh;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Datatype filetype, offtype;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Aint lb, extent;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; for (i=0; i&lt;sizeof(buffer); i++) buffer[i] = i;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; if (!myid) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_CREATE | 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_MODE_RDWR , MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_File_write(fh, buffer, sizeof(buffer), MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; lng[0]= 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; dsp[0]= 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Type_commit(&amp;filetype);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_RDONLY , 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_File_set_view(fh, 0, MPI_CHAR, filetype,&quot;native&quot;, MPI_INFO_NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_File_read(fh, buffer, 5, MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; printf(&quot;Data: &quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; for (i=0 ; i&lt;5 ; i++) printf(&quot; %x &quot;, buffer[i]);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; if (buffer[1] != 3) printf(&quot;\n =======&gt; test KO : buffer[1]=%d 
</span><br>
<span class="quotelev2">&gt;&gt; instead of %d \n&quot;, buffer[1], 4);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; else printf(&quot;\n =======&gt; test OK\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Type_free(&amp;filetype);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ============ The result of the program with MPICH2 ========
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Data: 1 3 5 7 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; =======&gt; test OK
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ============ The result of the program with OpenMPI ========
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Data: 0 2 4 6 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; =======&gt; test KO : buffer[1]=2 instead of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Comment: Only the first hole is ommited.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="7640.php">Terry Dontje: "[OMPI devel] vt compilation problem"</a>
<li><strong>Previous message:</strong> <a href="7638.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>In reply to:</strong> <a href="7638.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7642.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
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
