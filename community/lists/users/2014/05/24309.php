<?
$subject_val = "Re: [OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 17:41:42 2014" -->
<!-- isoreceived="20140507214142" -->
<!-- sent="Wed, 7 May 2014 16:41:41 -0500" -->
<!-- isosent="20140507214141" -->
<!-- name="Spenser Gilliland" -->
<!-- email="spenser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="CAEBucnD_iDrrwQnAZ6cRpqYeVfCODztrr3t=mdG4CcqQnRi52Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkUGuUdMASCAnx+a-7_V8pihW1Uc30RpEhGwDE3cQTphjg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Alltoall with Vector Datatype<br>
<strong>From:</strong> Spenser Gilliland (<em>spenser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 17:41:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24310.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24308.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24306.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24312.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24312.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p><span class="quotelev1">&gt; Do you mind posting your working example here on the mailing list?
</span><br>
<span class="quotelev1">&gt; This might help future users understanding how to correctly use the
</span><br>
<span class="quotelev1">&gt; MPI datatype.
</span><br>
<p>No problem. I wrote up this simplified example so others can learn to
<br>
use the functionality. This is a matrix transpose operation using MPI
<br>
vector derived types and collective communication. (Terms added to aid
<br>
search engines)
<br>
<p>The result of running this program with a two node cluster is
<br>
<p>Matrix =
<br>
&nbsp;0:     0     1     2     3     4     5     6     7
<br>
&nbsp;0:     8     9    10    11    12    13    14    15
<br>
&nbsp;0:    16    17    18    19    20    21    22    23
<br>
&nbsp;0:    24    25    26    27    28    29    30    31
<br>
&nbsp;1:    32    33    34    35    36    37    38    39
<br>
&nbsp;1:    40    41    42    43    44    45    46    47
<br>
&nbsp;1:    48    49    50    51    52    53    54    55
<br>
&nbsp;1:    56    57    58    59    60    61    62    63
<br>
Matrix =
<br>
&nbsp;0:     0     8    16    24     4    12    20    28
<br>
&nbsp;0:     1     9    17    25     5    13    21    29
<br>
&nbsp;0:     2    10    18    26     6    14    22    30
<br>
&nbsp;0:     3    11    19    27     7    15    23    31
<br>
&nbsp;1:    32    40    48    56    36    44    52    60
<br>
&nbsp;1:    33    41    49    57    37    45    53    61
<br>
&nbsp;1:    34    42    50    58    38    46    54    62
<br>
&nbsp;1:    35    43    51    59    39    47    55    63
<br>
Matrix =
<br>
&nbsp;0:     0     8    16    24    32    40    48    56
<br>
&nbsp;0:     1     9    17    25    33    41    49    57
<br>
&nbsp;0:     2    10    18    26    34    42    50    58
<br>
&nbsp;0:     3    11    19    27    35    43    51    59
<br>
&nbsp;1:     4    12    20    28    36    44    52    60
<br>
&nbsp;1:     5    13    21    29    37    45    53    61
<br>
&nbsp;1:     6    14    22    30    38    46    54    62
<br>
&nbsp;1:     7    15    23    31    39    47    55    63
<br>
<p>/* file: transpose.c
<br>
&nbsp;*
<br>
&nbsp;* Description: Transpose operation using MPI derived datatypes with
<br>
&nbsp;* MPI collective communications.
<br>
&nbsp;*
<br>
&nbsp;* Author: Spenser Gilliland &lt;spenser_at_[hidden]&gt;
<br>
&nbsp;*/
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
<p>#define N (8)
<br>
float matrix[N][N];
<br>
<p>void print_matrix(int wrank, int wrows) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i , j;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(wrank == 0) printf(&quot;Matrix = \n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; N; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(i &gt;= wrank*wrows &amp;&amp; i &lt; (wrank+1)*wrows) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%2d:&quot;, wrank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(j = 0; j &lt; N; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%6.2g&quot;, matrix[i][j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usleep(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int wsize, wrank, wrows;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i, j, k;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int row, col;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float temp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype mpi_all_unaligned_t, mpi_all_t;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;wsize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;wrank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;wrows = N / wsize;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_vector(N, wrows, N, MPI_FLOAT, &amp;mpi_all_unaligned_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_create_resized(mpi_all_unaligned_t, 0,
<br>
wrows*sizeof(float), &amp;mpi_all_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;mpi_all_unaligned_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;mpi_all_t);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; N; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Initialize data on the rows of the matrix owned by this rank */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i &gt;= wrank*wrows &amp;&amp; i &lt; (wrank+1)*wrows) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(j = 0; j &lt; N; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matrix[i][j] = i*N + j;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;print_matrix(wrank, wrows);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Local Transpose */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;row = wrank*wrows;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(k = 0; k &lt; wsize; k++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;col = k*wrows;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for( i = 0; i &lt; wrows; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(j =i+1; j &lt; wrows; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;temp = matrix[row+i][col + j];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matrix[row + i][col + j] = matrix[row + j][col + i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matrix[row + j][col + i] = temp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;print_matrix(wrank, wrows);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Global Transpose */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Alltoall(matrix[wrank*wrows], 1, mpi_all_t,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matrix[wrank*wrows], 1, mpi_all_t,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;print_matrix(wrank, wrows);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Thanks,
<br>
Spenser
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24310.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24308.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24306.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24312.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24312.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
