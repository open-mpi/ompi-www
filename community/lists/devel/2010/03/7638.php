<?
$subject_val = "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 19 06:14:48 2010" -->
<!-- isoreceived="20100319101448" -->
<!-- sent="Fri, 19 Mar 2010 11:14:42 +0100" -->
<!-- isosent="20100319101442" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )" -->
<!-- id="4BA34E92.2030107_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BA33380.8010801_at_bull.net" -->
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
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-19 06:14:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7639.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7637.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Maybe in reply to:</strong> <a href="7624.php">Pascal Deveze: "[OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7639.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Reply:</strong> <a href="7639.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Reply:</strong> <a href="7642.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>I went further on my investigations, and I found a solution.
<br>
<p>ADIOI_Datatype_iscontig is defined in the file 
<br>
ompi/mca/io/romio/src/io_romio_module.c as:
<br>
<p>void ADIOI_Datatype_iscontig(MPI_Datatype datatype, int *flag)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Open MPI contiguous check return true for datatype with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* gaps in the beginning and at the end. We have to provide
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* a count of 2 in order to get these gaps taken into acount.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*flag = ompi_datatype_is_contiguous_memory_layout(datatype, 2);
<br>
}
<br>
<p>It is clearly written here that the gaps should be taken into account 
<br>
with a count of 2. But that's not everytime the case.
<br>
<p>Your proposition is to modify ROMIO code.
<br>
So, I propose to fix ADIOI_Datatype_iscontig and add the following code 
<br>
after the call
<br>
to ompi_datatype_is_contiguous_memory_layout():
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (*flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint true_extent, true_lb;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_datatype_get_true_extent(datatype, &amp;true_lb, &amp;true_extent);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (true_lb &gt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*flag = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Regards,
<br>
<p>Pascal
<br>
<p>On Mar 18, 2010, at 13:24, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; We will disagree on that, but your datatype is contiguous. It doesn't 
</span><br>
<span class="quotelev1">&gt; matter that there are gaps in the beginning and at the end, as long as 
</span><br>
<span class="quotelev1">&gt; you only send one such datatype the real data that has to go over the 
</span><br>
<span class="quotelev1">&gt; network _is_ contiguous. And this is what the Open MPI datatype engine 
</span><br>
<span class="quotelev1">&gt; is reporting back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Apparently, ROMIO expect a contiguous datatype to start from the 
</span><br>
<span class="quotelev1">&gt; position 0 relative to the beginning of the user buffer. I don't see 
</span><br>
<span class="quotelev1">&gt; why they have such a restrictive view, but I guess the original MPICH 
</span><br>
<span class="quotelev1">&gt; datatype engine was not able to distinguish between gaps in the middle 
</span><br>
<span class="quotelev1">&gt; and gaps at the beginning and the end of the datatype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see how to fix that in ROMIO code. But in case you plan to fix 
</span><br>
<span class="quotelev1">&gt; it, the correct solution is to retrieve the true lower bound of the 
</span><br>
<span class="quotelev1">&gt; datatype in the contiguous case and add it to st_offset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 18, 2010, at 12:27 , Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Sorry, I missed my porting from MPICH2 to OpenMPI concerning the file 
</span><br>
<span class="quotelev1">&gt; romio/adio/comm/flatten.c
</span><br>
<span class="quotelev2">&gt;&gt;  (flatten.c in OpenMPI does not support MPI_COMBINER_RESIZED).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Here is the diff:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  diff -u flatten.c flatten.c.old
</span><br>
<span class="quotelev2">&gt;&gt;  --- flatten.c 2010-03-18 17:07:43.000000000 +0100
</span><br>
<span class="quotelev2">&gt;&gt;  +++ flatten.c.old 2010-03-18 17:14:04.000000000 +0100
</span><br>
<span class="quotelev2">&gt;&gt;  @@ -525,44 +525,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;  break;
</span><br>
<span class="quotelev2">&gt;&gt;  - case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev2">&gt;&gt;  - /* This is done similar to a type_struct with an lb, datatype, ub */
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - /* handle the Lb */
</span><br>
<span class="quotelev2">&gt;&gt;  - j = *curr_index;
</span><br>
<span class="quotelev2">&gt;&gt;  - flat-&gt;indices[j] = st_offset + adds[0];
</span><br>
<span class="quotelev2">&gt;&gt;  - flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - (*curr_index)++;
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - /* handle the datatype */
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev2">&gt;&gt;  - &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev2">&gt;&gt;  - ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig);
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - if ((old_combiner != MPI_COMBINER_NAMED) &amp;&amp; (!old_is_contig)) {
</span><br>
<span class="quotelev2">&gt;&gt;  - ADIOI_Flatten(types[0], flat, st_offset+adds[0], curr_index);
</span><br>
<span class="quotelev2">&gt;&gt;  - }
</span><br>
<span class="quotelev2">&gt;&gt;  - else {
</span><br>
<span class="quotelev2">&gt;&gt;  - /* current type is basic or contiguous */
</span><br>
<span class="quotelev2">&gt;&gt;  - j = *curr_index;
</span><br>
<span class="quotelev2">&gt;&gt;  - flat-&gt;indices[j] = st_offset;
</span><br>
<span class="quotelev2">&gt;&gt;  - MPI_Type_size(types[0], (int*)&amp;old_size);
</span><br>
<span class="quotelev2">&gt;&gt;  - flat-&gt;blocklens[j] = old_size;
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - (*curr_index)++;
</span><br>
<span class="quotelev2">&gt;&gt;  - }
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - /* take care of the extent as a UB */
</span><br>
<span class="quotelev2">&gt;&gt;  - j = *curr_index;
</span><br>
<span class="quotelev2">&gt;&gt;  - flat-&gt;indices[j] = st_offset + adds[0] + adds[1];
</span><br>
<span class="quotelev2">&gt;&gt;  - flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - (*curr_index)++;
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - break;
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  default:
</span><br>
<span class="quotelev2">&gt;&gt;  /* TODO: FIXME (requires changing prototypes to return errors...) */
</span><br>
<span class="quotelev2">&gt;&gt;  FPRINTF(stderr, &quot;Error: Unsupported datatype passed to 
</span><br>
<span class="quotelev2">&gt;&gt; ADIOI_Flatten\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;  @@ -827,29 +789,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;  break;
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev2">&gt;&gt;  - /* treat it as a struct with lb, type, ub */
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - /* add 2 for lb and ub */
</span><br>
<span class="quotelev2">&gt;&gt;  - (*curr_index) += 2;
</span><br>
<span class="quotelev2">&gt;&gt;  - count += 2;
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - /* add for datatype */
</span><br>
<span class="quotelev2">&gt;&gt;  - MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev2">&gt;&gt;  - &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev2">&gt;&gt;  - ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig);
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  - if ((old_combiner != MPI_COMBINER_NAMED) &amp;&amp; (!old_is_contig)) {
</span><br>
<span class="quotelev2">&gt;&gt;  - count += ADIOI_Count_contiguous_blocks(types[0], curr_index);
</span><br>
<span class="quotelev2">&gt;&gt;  - }
</span><br>
<span class="quotelev2">&gt;&gt;  - else {
</span><br>
<span class="quotelev2">&gt;&gt;  - /* basic or contiguous type */
</span><br>
<span class="quotelev2">&gt;&gt;  - count++;
</span><br>
<span class="quotelev2">&gt;&gt;  - (*curr_index)++;
</span><br>
<span class="quotelev2">&gt;&gt;  - }
</span><br>
<span class="quotelev2">&gt;&gt;  - break;
</span><br>
<span class="quotelev2">&gt;&gt;  -
</span><br>
<span class="quotelev2">&gt;&gt;  default:
</span><br>
<span class="quotelev2">&gt;&gt;  /* TODO: FIXME */
</span><br>
<span class="quotelev2">&gt;&gt;  FPRINTF(stderr, &quot;Error: Unsupported datatype passed to 
</span><br>
<span class="quotelev1">&gt; ADIOI_Count_contiguous_blocks, combiner = %d\n&quot;, combiner);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Pascal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Pascal Deveze a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I use a very simple datatype defined as follow:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lng[0]= 1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dsp[0]= 1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; err=MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; err=MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Type_commit(&amp;filetype);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This datatype consists of a hole (of length 1 char) followed by a 
</span><br>
<span class="quotelev2">&gt;&gt; char.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The datatype with hole at the beginning is not correctly handled by 
</span><br>
<span class="quotelev1">&gt; ROMIO integrated in OpenMPI (I tried with MPICH2 and it worked fine).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; You will see bellow a program to reproduce the problem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; After investigations, I see that the difference between OpenMPI and 
</span><br>
<span class="quotelev1">&gt; MPICH appears at line 542 in the file romio/adio/comm/flatten.c:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /* This is done similar to a type_struct with an lb, datatype, ub */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /* handle the Lb */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; j = *curr_index;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; flat-&gt;indices[j] = st_offset + adds[0];
</span><br>
<span class="quotelev3">&gt;&gt; &gt; flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (*curr_index)++;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /* handle the datatype */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig); &lt;========== 
</span><br>
<span class="quotelev2">&gt;&gt; ligne 542
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For MPICH2, the datatype is not contiguous, but it is for OpenMPI. 
</span><br>
<span class="quotelev1">&gt; The routine ADIOI_Datatype_iscontig is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; quite different in OpenMPI because the datatypes are handled very 
</span><br>
<span class="quotelev1">&gt; differently. If I reset old_is_contig just after
</span><br>
<span class="quotelev3">&gt;&gt; &gt; line 542, the problem disappears (Of course, this is not a solution).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am not able to propose a right solution. Can somebody help ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Pascal
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ============ Program to reproduce the problem ========
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; char filename[256]=&quot;VIEW_TEST&quot;;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; char buffer[100];
</span><br>
<span class="quotelev3">&gt;&gt; &gt; int err, i, myid, dsp[3], lng[3];
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File fh;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Datatype filetype, offtype;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Aint lb, extent;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for (i=0; i&lt;sizeof(buffer); i++) buffer[i] = i;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; if (!myid) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_CREATE | 
</span><br>
<span class="quotelev1">&gt; MPI_MODE_RDWR , MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_write(fh, buffer, sizeof(buffer), MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lng[0]= 1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dsp[0]= 1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Type_commit(&amp;filetype);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_RDONLY , 
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_set_view(fh, 0, MPI_CHAR, filetype,&quot;native&quot;, MPI_INFO_NULL);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_read(fh, buffer, 5, MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; printf(&quot;Data: &quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for (i=0 ; i&lt;5 ; i++) printf(&quot; %x &quot;, buffer[i]);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; if (buffer[1] != 3) printf(&quot;\n =======&gt; test KO : buffer[1]=%d 
</span><br>
<span class="quotelev1">&gt; instead of %d \n&quot;, buffer[1], 4);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; else printf(&quot;\n =======&gt; test OK\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Type_free(&amp;filetype);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ============ The result of the program with MPICH2 ========
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Data: 1 3 5 7 9
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =======&gt; test OK
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ============ The result of the program with OpenMPI ========
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Data: 0 2 4 6 8
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =======&gt; test KO : buffer[1]=2 instead of 4
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Comment: Only the first hole is ommited.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7639.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7637.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Maybe in reply to:</strong> <a href="7624.php">Pascal Deveze: "[OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7639.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Reply:</strong> <a href="7639.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Reply:</strong> <a href="7642.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
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
