<?
$subject_val = "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 18 12:27:05 2010" -->
<!-- isoreceived="20100318162705" -->
<!-- sent="Thu, 18 Mar 2010 17:27:01 +0100" -->
<!-- isosent="20100318162701" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )" -->
<!-- id="4BA25455.4010108_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BA0EA9F.2040404_at_bull.net" -->
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
<strong>Date:</strong> 2010-03-18 12:27:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7637.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7635.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>In reply to:</strong> <a href="7624.php">Pascal Deveze: "[OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7637.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Reply:</strong> <a href="7637.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Sorry, I missed my porting from MPICH2 to OpenMPI concerning the file 
<br>
romio/adio/comm/flatten.c
<br>
(flatten.c in OpenMPI does not support MPI_COMBINER_RESIZED).
<br>
<p>Here is the diff:
<br>
<p>&nbsp;diff -u flatten.c flatten.c.old
<br>
--- flatten.c   2010-03-18 17:07:43.000000000 +0100
<br>
+++ flatten.c.old       2010-03-18 17:14:04.000000000 +0100
<br>
@@ -525,44 +525,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;
<br>
-    case MPI_COMBINER_RESIZED:
<br>
-    /* This is done similar to a type_struct with an lb, datatype, ub */
<br>
-
<br>
-    /* handle the Lb */
<br>
-       j = *curr_index;
<br>
-       flat-&gt;indices[j] = st_offset + adds[0];
<br>
-       flat-&gt;blocklens[j] = 0;
<br>
-
<br>
-       (*curr_index)++;
<br>
-
<br>
-       /* handle the datatype */
<br>
-
<br>
-       MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
<br>
-                             &amp;old_ntypes, &amp;old_combiner);
<br>
-       ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig);
<br>
-
<br>
-       if ((old_combiner != MPI_COMBINER_NAMED) &amp;&amp; (!old_is_contig)) {
<br>
-           ADIOI_Flatten(types[0], flat, st_offset+adds[0], curr_index);
<br>
-       }
<br>
-       else {
<br>
-            /* current type is basic or contiguous */
<br>
-           j = *curr_index;
<br>
-           flat-&gt;indices[j] = st_offset;
<br>
-           MPI_Type_size(types[0], (int*)&amp;old_size);
<br>
-           flat-&gt;blocklens[j] = old_size;
<br>
-
<br>
-           (*curr_index)++;
<br>
-       }
<br>
-
<br>
-       /* take care of the extent as a UB */
<br>
-       j = *curr_index;
<br>
-       flat-&gt;indices[j] = st_offset + adds[0] + adds[1];
<br>
-       flat-&gt;blocklens[j] = 0;
<br>
-
<br>
-       (*curr_index)++;
<br>
-
<br>
-       break;
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* TODO: FIXME (requires changing prototypes to return errors...) */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FPRINTF(stderr, &quot;Error: Unsupported datatype passed to 
<br>
ADIOI_Flatten\n&quot;);
<br>
@@ -827,29 +789,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
-
<br>
-    case MPI_COMBINER_RESIZED:
<br>
-       /* treat it as a struct with lb, type, ub */
<br>
-
<br>
-       /* add 2 for lb and ub */
<br>
-       (*curr_index) += 2;
<br>
-       count += 2;
<br>
-
<br>
-       /* add for datatype */
<br>
-       MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
<br>
-                                  &amp;old_ntypes, &amp;old_combiner);
<br>
-       ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig);
<br>
-
<br>
-       if ((old_combiner != MPI_COMBINER_NAMED) &amp;&amp; (!old_is_contig)) {
<br>
-           count += ADIOI_Count_contiguous_blocks(types[0], curr_index);
<br>
-       }
<br>
-       else {
<br>
-        /* basic or contiguous type */
<br>
-           count++;
<br>
-           (*curr_index)++;
<br>
-       }
<br>
-       break;
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* TODO: FIXME */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FPRINTF(stderr, &quot;Error: Unsupported datatype passed to 
<br>
ADIOI_Count_contiguous_blocks, combiner = %d\n&quot;, combiner);
<br>
<p><p>Regards,
<br>
<p>Pascal
<br>
<p>Pascal Deveze a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use a very simple datatype defined as follow:
</span><br>
<span class="quotelev1">&gt;     lng[0]= 1;
</span><br>
<span class="quotelev1">&gt;    dsp[0]= 1;
</span><br>
<span class="quotelev1">&gt;    err=MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
</span><br>
<span class="quotelev1">&gt;    err=MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_commit(&amp;filetype);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This datatype consists of a hole (of length 1 char) followed by a char.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The datatype with hole at the beginning is not correctly handled by 
</span><br>
<span class="quotelev1">&gt; ROMIO integrated in OpenMPI (I tried with MPICH2 and it worked fine).
</span><br>
<span class="quotelev1">&gt; You will see bellow a program to reproduce the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After investigations, I see that the difference between OpenMPI and 
</span><br>
<span class="quotelev1">&gt; MPICH appears at line 542 in the file romio/adio/comm/flatten.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev1">&gt;    /* This is done similar to a type_struct with an lb, datatype, ub */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* handle the Lb */
</span><br>
<span class="quotelev1">&gt;        j = *curr_index;
</span><br>
<span class="quotelev1">&gt;        flat-&gt;indices[j] = st_offset + adds[0];
</span><br>
<span class="quotelev1">&gt;        flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        (*curr_index)++;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        /* handle the datatype */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev1">&gt;                              &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev1">&gt;        ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig); &lt;========== 
</span><br>
<span class="quotelev1">&gt; ligne 542
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For MPICH2, the datatype is not contiguous, but it is for OpenMPI. The 
</span><br>
<span class="quotelev1">&gt; routine ADIOI_Datatype_iscontig is
</span><br>
<span class="quotelev1">&gt; quite different in OpenMPI because the datatypes are handled very 
</span><br>
<span class="quotelev1">&gt; differently. If I reset old_is_contig just after
</span><br>
<span class="quotelev1">&gt; line 542, the problem disappears (Of course, this is not a solution).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not able to propose a right solution. Can somebody help ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pascal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============ Program to reproduce the problem ========
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; char filename[256]=&quot;VIEW_TEST&quot;;
</span><br>
<span class="quotelev1">&gt; char buffer[100];
</span><br>
<span class="quotelev1">&gt; int err, i, myid, dsp[3], lng[3];
</span><br>
<span class="quotelev1">&gt; MPI_Status status;
</span><br>
<span class="quotelev1">&gt; MPI_File fh;
</span><br>
<span class="quotelev1">&gt; MPI_Datatype filetype, offtype;
</span><br>
<span class="quotelev1">&gt; MPI_Aint lb, extent;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev1">&gt; for (i=0; i&lt;sizeof(buffer); i++) buffer[i] = i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (!myid) {
</span><br>
<span class="quotelev1">&gt;    MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_CREATE | 
</span><br>
<span class="quotelev1">&gt; MPI_MODE_RDWR , MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev1">&gt;    MPI_File_write(fh, buffer, sizeof(buffer), MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev1">&gt;    MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    lng[0]= 1;
</span><br>
<span class="quotelev1">&gt;    dsp[0]= 1;
</span><br>
<span class="quotelev1">&gt;    MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_commit(&amp;filetype);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_RDONLY , 
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev1">&gt;    MPI_File_set_view(fh, 0, MPI_CHAR, filetype,&quot;native&quot;, MPI_INFO_NULL);
</span><br>
<span class="quotelev1">&gt;    MPI_File_read(fh, buffer, 5, MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Data: &quot;);
</span><br>
<span class="quotelev1">&gt;    for (i=0 ; i&lt;5 ; i++) printf(&quot; %x &quot;, buffer[i]);
</span><br>
<span class="quotelev1">&gt;    if (buffer[1] != 3) printf(&quot;\n =======&gt;  test KO : buffer[1]=%d 
</span><br>
<span class="quotelev1">&gt; instead of %d \n&quot;, buffer[1], 4);
</span><br>
<span class="quotelev1">&gt;    else printf(&quot;\n =======&gt; test OK\n&quot;);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_free(&amp;filetype);
</span><br>
<span class="quotelev1">&gt;    MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ============ The result of the program with MPICH2 ========
</span><br>
<span class="quotelev1">&gt; Data:  1  3  5  7  9
</span><br>
<span class="quotelev1">&gt; =======&gt; test OK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============ The result of the program with OpenMPI ========
</span><br>
<span class="quotelev1">&gt; Data:  0  2  4  6  8
</span><br>
<span class="quotelev1">&gt; =======&gt;  test KO : buffer[1]=2 instead of 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comment: Only the first hole is ommited.
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7637.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7635.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<li><strong>In reply to:</strong> <a href="7624.php">Pascal Deveze: "[OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7637.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Reply:</strong> <a href="7637.php">George Bosilca: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
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
