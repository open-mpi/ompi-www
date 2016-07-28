<?
$subject_val = "[OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 10:43:49 2010" -->
<!-- isoreceived="20100317144349" -->
<!-- sent="Wed, 17 Mar 2010 15:43:43 +0100" -->
<!-- isosent="20100317144343" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )" -->
<!-- id="4BA0EA9F.2040404_at_bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )<br>
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 10:43:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7625.php">Ralph Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="7623.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7636.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Reply:</strong> <a href="7636.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Maybe reply:</strong> <a href="7638.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I use a very simple datatype defined as follow:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lng[0]= 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dsp[0]= 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;err=MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;err=MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;filetype);
<br>
<p>This datatype consists of a hole (of length 1 char) followed by a char.
<br>
<p>The datatype with hole at the beginning is not correctly handled by 
<br>
ROMIO integrated in OpenMPI (I tried with MPICH2 and it worked fine).
<br>
You will see bellow a program to reproduce the problem.
<br>
<p>After investigations, I see that the difference between OpenMPI and 
<br>
MPICH appears at line 542 in the file romio/adio/comm/flatten.c:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;case MPI_COMBINER_RESIZED:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* This is done similar to a type_struct with an lb, datatype, ub */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* handle the Lb */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = *curr_index;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flat-&gt;indices[j] = st_offset + adds[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flat-&gt;blocklens[j] = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(*curr_index)++;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* handle the datatype */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;old_ntypes, &amp;old_combiner);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADIOI_Datatype_iscontig(types[0], &amp;old_is_contig); &lt;========== 
<br>
ligne 542
<br>
<p>For MPICH2, the datatype is not contiguous, but it is for OpenMPI. The 
<br>
routine ADIOI_Datatype_iscontig is
<br>
quite different in OpenMPI because the datatypes are handled very 
<br>
differently. If I reset old_is_contig just after
<br>
line 542, the problem disappears (Of course, this is not a solution).
<br>
<p>I am not able to propose a right solution. Can somebody help ?
<br>
<p>Pascal
<br>
<p>============ Program to reproduce the problem ========
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>char filename[256]=&quot;VIEW_TEST&quot;;
<br>
char buffer[100];
<br>
int err, i, myid, dsp[3], lng[3];
<br>
MPI_Status status;
<br>
MPI_File fh;
<br>
MPI_Datatype filetype, offtype;
<br>
MPI_Aint lb, extent;
<br>
<p>int main(int argc, char **argv) {
<br>
<p>&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
&nbsp;for (i=0; i&lt;sizeof(buffer); i++) buffer[i] = i;
<br>
&nbsp;
<br>
&nbsp;if (!myid) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_CREATE | 
<br>
MPI_MODE_RDWR , MPI_INFO_NULL, &amp;fh);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_write(fh, buffer, sizeof(buffer), MPI_CHAR, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_close(&amp;fh);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;lng[0]= 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dsp[0]= 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_indexed(1, lng, dsp, MPI_CHAR, &amp;offtype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_create_resized(offtype, 0, 2, &amp;filetype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;filetype);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_open(MPI_COMM_SELF, filename, MPI_MODE_RDONLY , 
<br>
MPI_INFO_NULL, &amp;fh);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_set_view(fh, 0, MPI_CHAR, filetype,&quot;native&quot;, MPI_INFO_NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_read(fh, buffer, 5, MPI_CHAR, &amp;status);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Data: &quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0 ; i&lt;5 ; i++) printf(&quot; %x &quot;, buffer[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (buffer[1] != 3) printf(&quot;\n =======&gt;  test KO : buffer[1]=%d 
<br>
instead of %d \n&quot;, buffer[1], 4);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else printf(&quot;\n =======&gt; test OK\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;filetype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_close(&amp;fh);
<br>
&nbsp;}
<br>
&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;MPI_Finalize();
<br>
}
<br>
============ The result of the program with MPICH2 ========
<br>
Data:  1  3  5  7  9
<br>
&nbsp;=======&gt; test OK
<br>
<p>============ The result of the program with OpenMPI ========
<br>
Data:  0  2  4  6  8
<br>
&nbsp;=======&gt;  test KO : buffer[1]=2 instead of 4
<br>
<p>Comment: Only the first hole is ommited.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7625.php">Ralph Castain: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="7623.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7636.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Reply:</strong> <a href="7636.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>Maybe reply:</strong> <a href="7638.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
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
