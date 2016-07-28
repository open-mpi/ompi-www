<?
$subject_val = "Re: [OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 13:09:14 2014" -->
<!-- isoreceived="20140507170914" -->
<!-- sent="Wed, 7 May 2014 13:09:10 -0400" -->
<!-- isosent="20140507170910" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="4C1B5E01-E44A-4EA5-A47A-BAA4464EDF74_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAEBucnA_mz8pgr24zheqOLfN7Ne5NGVB_rneEyW-vcWHc3vySQ_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 13:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24305.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24303.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24301.php">Spenser Gilliland: "[OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24305.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24305.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Spenser,
<br>
<p>There are several issues with the code you provided.
<br>
<p>1. You are using a 1D process grid to create a 2D block cyclic distribution. That&#146;s just not possible.
<br>
<p>2. You forgot to take in account the extent of the datatype. By default the extent of a vector type is starting from the first byte till the last, thus in your case it encompass all the data from the other processes. You have to resize the datatype, in order to be able to jump to the correct data for the next processor.
<br>
<p>I put below a modified version of your code, that is doing something closer to what you expect. 
<br>
<p>Have you look at subarray and array constructs? They might help with the special datatype you want, or at least they can give you a hint on how to correctly construct the type.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>void print_matrix(float* A, int size, int wrank)
<br>
{
<br>
&nbsp;&nbsp;int i, j;
<br>
&nbsp;&nbsp;for(i = 0; i &lt; size; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;&lt;%2d&gt; &quot;, wrank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; size; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%6.2g &quot;, A[i*size+j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
}
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;float A[4][4];
<br>
&nbsp;&nbsp;int i, j, wsize, wrank;
<br>
&nbsp;&nbsp;MPI_Datatype temp, mpi_all_t;
<br>
<p>&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;wsize); // Assume 2
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;wrank);
<br>
<p>&nbsp;&nbsp;MPI_Type_vector(4, 4/wsize, 4, MPI_FLOAT, &amp;temp);
<br>
&nbsp;&nbsp;MPI_Type_create_resized(temp, 0, 4/wsize*sizeof(float), &amp;mpi_all_t);
<br>
&nbsp;&nbsp;MPI_Type_free(&amp;temp);
<br>
&nbsp;&nbsp;MPI_Type_commit(&amp;mpi_all_t);
<br>
<p>&nbsp;&nbsp;for(i = 0; i &lt; 4; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; 4; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A[i][j] = i*4+j;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Alltoall(A, 1, mpi_all_t,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A, 1, mpi_all_t,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;print_matrix(A, 4, wrank);
<br>
&nbsp;&nbsp;MPI_Type_free(&amp;mpi_all_t);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p>On May 7, 2014, at 04:48 , Spenser Gilliland &lt;spenser_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've recently started working with MPI and I noticed that when a
</span><br>
<span class="quotelev1">&gt; Alltoall is utilized with a vector datatype, the call only uses the
</span><br>
<span class="quotelev1">&gt; extent to determine the location for the back to back transactions.
</span><br>
<span class="quotelev1">&gt; This makes using the vector type with collective communicators
</span><br>
<span class="quotelev1">&gt; difficult.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For Example:
</span><br>
<span class="quotelev1">&gt; Using the code at the bottom.  I think I should get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0  1  8  9
</span><br>
<span class="quotelev1">&gt; 4  5 12 13
</span><br>
<span class="quotelev1">&gt; 2  3 10 11
</span><br>
<span class="quotelev1">&gt; 6  7 14 15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the result is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0  1  2  3
</span><br>
<span class="quotelev1">&gt; 4  5  8  9
</span><br>
<span class="quotelev1">&gt; 6  7 10 11
</span><br>
<span class="quotelev1">&gt; x  x 14 15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this the way it is supposed to be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI: This is version 1.6.2 in Rocks 6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Spenser
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; float A[4][4];
</span><br>
<span class="quotelev1">&gt; int wsize, wrank;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;wsize); // Assume 2
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;wrank);
</span><br>
<span class="quotelev1">&gt; MPI_Type_vector(4/wsize, 4/wsize, 4, MPI_FLOAT, &amp;mpi_all_t);
</span><br>
<span class="quotelev1">&gt; MPI_Type_commit(&amp;mpi_all_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for(int i = 0; i &lt; 4; i++) for (j = 0; j &lt; 4; j++) {
</span><br>
<span class="quotelev1">&gt;   A[i][j] = i*4+j;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Alltoall(A[rank*4/wsize*4], 1, mpi_all_t,
</span><br>
<span class="quotelev1">&gt;                     A[rank*4/wsize*4], 1, mpi_all_t,
</span><br>
<span class="quotelev1">&gt;                     MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for(int i = 0; i &lt; 4; i++) {
</span><br>
<span class="quotelev1">&gt;   for (j = 0; j &lt; 4; j++) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;%6.2g&quot;)
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Spenser Gilliland
</span><br>
<span class="quotelev1">&gt; Computer Engineer
</span><br>
<span class="quotelev1">&gt; Doctoral Candidate
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24305.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24303.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24301.php">Spenser Gilliland: "[OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24305.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24305.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
