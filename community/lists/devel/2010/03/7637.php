<?
$subject_val = "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 18 13:24:53 2010" -->
<!-- isoreceived="20100318172453" -->
<!-- sent="Thu, 18 Mar 2010 13:24:44 -0400" -->
<!-- isosent="20100318172444" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )" -->
<!-- id="6ACF493C-C96E-4E20-A0EF-B0E10D9AACC7_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BA25455.4010108_at_bull.net" -->
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
<strong>Date:</strong> 2010-03-18 13:24:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7638.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7636.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>In reply to:</strong> <a href="7636.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7638.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We will disagree on that, but your datatype is contiguous. It doesn't matter that there are gaps in the beginning and at the end, as long as you only send one such datatype the real data that has to go over the network _is_ contiguous. And this is what the Open MPI datatype engine is reporting back.
<br>
<p>Apparently, ROMIO expect a contiguous datatype to start from the position 0 relative to the beginning of the user buffer. I don't see why they have such a restrictive view, but I guess the original MPICH datatype engine was not able to distinguish between gaps in the middle and gaps at the beginning and the end of the datatype.
<br>
<p>I don't see how to fix that in ROMIO code. But in case you plan to fix it, the correct solution is to retrieve the true lower bound of the datatype in the contiguous case and add it to st_offset.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 18, 2010, at 12:27 , Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, I missed my porting from MPICH2 to OpenMPI concerning the file romio/adio/comm/flatten.c
</span><br>
<span class="quotelev1">&gt; (flatten.c in OpenMPI does not support MPI_COMBINER_RESIZED).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the diff:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -u flatten.c flatten.c.old
</span><br>
<span class="quotelev1">&gt; --- flatten.c   2010-03-18 17:07:43.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ flatten.c.old       2010-03-18 17:14:04.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -525,44 +525,6 @@
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       break;
</span><br>
<span class="quotelev1">&gt; -    case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev1">&gt; -    /* This is done similar to a type_struct with an lb, datatype, ub */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* handle the Lb */
</span><br>
<span class="quotelev1">&gt; -       j = *curr_index;
</span><br>
<span class="quotelev1">&gt; -       flat-&gt;indices[j] = st_offset + adds[0];
</span><br>
<span class="quotelev1">&gt; -       flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -       (*curr_index)++;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -       /* handle the datatype */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -       MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev1">&gt; -                             &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev1">&gt; -       ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -       if ((old_combiner != MPI_COMBINER_NAMED) &amp;&amp; (!old_is_contig)) {
</span><br>
<span class="quotelev1">&gt; -           ADIOI_Flatten(types[0], flat, st_offset+adds[0], curr_index);
</span><br>
<span class="quotelev1">&gt; -       }
</span><br>
<span class="quotelev1">&gt; -       else {
</span><br>
<span class="quotelev1">&gt; -            /* current type is basic or contiguous */
</span><br>
<span class="quotelev1">&gt; -           j = *curr_index;
</span><br>
<span class="quotelev1">&gt; -           flat-&gt;indices[j] = st_offset;
</span><br>
<span class="quotelev1">&gt; -           MPI_Type_size(types[0], (int*)&amp;old_size);
</span><br>
<span class="quotelev1">&gt; -           flat-&gt;blocklens[j] = old_size;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -           (*curr_index)++;
</span><br>
<span class="quotelev1">&gt; -       }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -       /* take care of the extent as a UB */
</span><br>
<span class="quotelev1">&gt; -       j = *curr_index;
</span><br>
<span class="quotelev1">&gt; -       flat-&gt;indices[j] = st_offset + adds[0] + adds[1];
</span><br>
<span class="quotelev1">&gt; -       flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -       (*curr_index)++;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -       break;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;    default:
</span><br>
<span class="quotelev1">&gt;       /* TODO: FIXME (requires changing prototypes to return errors...) */
</span><br>
<span class="quotelev1">&gt;       FPRINTF(stderr, &quot;Error: Unsupported datatype passed to ADIOI_Flatten\n&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -827,29 +789,6 @@
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       break;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev1">&gt; -       /* treat it as a struct with lb, type, ub */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -       /* add 2 for lb and ub */
</span><br>
<span class="quotelev1">&gt; -       (*curr_index) += 2;
</span><br>
<span class="quotelev1">&gt; -       count += 2;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -       /* add for datatype */
</span><br>
<span class="quotelev1">&gt; -       MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev1">&gt; -                                  &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev1">&gt; -       ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -       if ((old_combiner != MPI_COMBINER_NAMED) &amp;&amp; (!old_is_contig)) {
</span><br>
<span class="quotelev1">&gt; -           count += ADIOI_Count_contiguous_blocks(types[0], curr_index);
</span><br>
<span class="quotelev1">&gt; -       }
</span><br>
<span class="quotelev1">&gt; -       else {
</span><br>
<span class="quotelev1">&gt; -        /* basic or contiguous type */
</span><br>
<span class="quotelev1">&gt; -           count++;
</span><br>
<span class="quotelev1">&gt; -           (*curr_index)++;
</span><br>
<span class="quotelev1">&gt; -       }
</span><br>
<span class="quotelev1">&gt; -       break;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;    default:
</span><br>
<span class="quotelev1">&gt;       /* TODO: FIXME */
</span><br>
<span class="quotelev1">&gt;       FPRINTF(stderr, &quot;Error: Unsupported datatype passed to ADIOI_Count_contiguous_blocks, combiner = %d\n&quot;, combiner);
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Pascal Deveze a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I use a very simple datatype defined as follow:
</span><br>
<span class="quotelev2">&gt;&gt;    lng[0]= 1;
</span><br>
<span class="quotelev2">&gt;&gt;   dsp[0]= 1;
</span><br>
<span class="quotelev2">&gt;&gt;   err=MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
</span><br>
<span class="quotelev2">&gt;&gt;   err=MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_commit(&amp;filetype);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This datatype consists of a hole (of length 1 char) followed by a char.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The datatype with hole at the beginning is not correctly handled by ROMIO integrated in OpenMPI (I tried with MPICH2 and it worked fine).
</span><br>
<span class="quotelev2">&gt;&gt; You will see bellow a program to reproduce the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After investigations, I see that the difference between OpenMPI and MPICH appears at line 542 in the file romio/adio/comm/flatten.c:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   case MPI_COMBINER_RESIZED:
</span><br>
<span class="quotelev2">&gt;&gt;   /* This is done similar to a type_struct with an lb, datatype, ub */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   /* handle the Lb */
</span><br>
<span class="quotelev2">&gt;&gt;       j = *curr_index;
</span><br>
<span class="quotelev2">&gt;&gt;       flat-&gt;indices[j] = st_offset + adds[0];
</span><br>
<span class="quotelev2">&gt;&gt;       flat-&gt;blocklens[j] = 0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       (*curr_index)++;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       /* handle the datatype */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
</span><br>
<span class="quotelev2">&gt;&gt;                             &amp;old_ntypes, &amp;old_combiner);
</span><br>
<span class="quotelev2">&gt;&gt;       ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig); &lt;========== ligne 542
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For MPICH2, the datatype is not contiguous, but it is for OpenMPI. The routine ADIOI_Datatype_iscontig is
</span><br>
<span class="quotelev2">&gt;&gt; quite different in OpenMPI because the datatypes are handled very differently. If I reset old_is_contig just after
</span><br>
<span class="quotelev2">&gt;&gt; line 542, the problem disappears (Of course, this is not a solution).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am not able to propose a right solution. Can somebody help ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pascal
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ============ Program to reproduce the problem ========
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; char filename[256]=&quot;VIEW_TEST&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; char buffer[100];
</span><br>
<span class="quotelev2">&gt;&gt; int err, i, myid, dsp[3], lng[3];
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File fh;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Datatype filetype, offtype;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Aint lb, extent;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev2">&gt;&gt; for (i=0; i&lt;sizeof(buffer); i++) buffer[i] = i;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if (!myid) {
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_CREATE | MPI_MODE_RDWR , MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File_write(fh, buffer, sizeof(buffer), MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   lng[0]= 1;
</span><br>
<span class="quotelev2">&gt;&gt;   dsp[0]= 1;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_commit(&amp;filetype);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_RDONLY , MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File_set_view(fh, 0, MPI_CHAR, filetype,&quot;native&quot;, MPI_INFO_NULL);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File_read(fh, buffer, 5, MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Data: &quot;);
</span><br>
<span class="quotelev2">&gt;&gt;   for (i=0 ; i&lt;5 ; i++) printf(&quot; %x &quot;, buffer[i]);
</span><br>
<span class="quotelev2">&gt;&gt;   if (buffer[1] != 3) printf(&quot;\n =======&gt;  test KO : buffer[1]=%d instead of %d \n&quot;, buffer[1], 4);
</span><br>
<span class="quotelev2">&gt;&gt;   else printf(&quot;\n =======&gt; test OK\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Type_free(&amp;filetype);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; ============ The result of the program with MPICH2 ========
</span><br>
<span class="quotelev2">&gt;&gt; Data:  1  3  5  7  9
</span><br>
<span class="quotelev2">&gt;&gt; =======&gt; test OK
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ============ The result of the program with OpenMPI ========
</span><br>
<span class="quotelev2">&gt;&gt; Data:  0  2  4  6  8
</span><br>
<span class="quotelev2">&gt;&gt; =======&gt;  test KO : buffer[1]=2 instead of 4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Comment: Only the first hole is ommited.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="7638.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Previous message:</strong> <a href="7636.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>In reply to:</strong> <a href="7636.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7638.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
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
