<?
$subject_val = "[OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 04:48:39 2014" -->
<!-- isoreceived="20140507084839" -->
<!-- sent="Wed, 7 May 2014 03:48:39 -0500" -->
<!-- isosent="20140507084839" -->
<!-- name="Spenser Gilliland" -->
<!-- email="spenser_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="CAEBucnA_mz8pgr24zheqOLfN7Ne5NGVB_rneEyW-vcWHc3vySQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Alltoall with Vector Datatype<br>
<strong>From:</strong> Spenser Gilliland (<em>spenser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 04:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24302.php">Gus Correa: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="24300.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24304.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24304.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've recently started working with MPI and I noticed that when a
<br>
Alltoall is utilized with a vector datatype, the call only uses the
<br>
extent to determine the location for the back to back transactions.
<br>
This makes using the vector type with collective communicators
<br>
difficult.
<br>
<p>For Example:
<br>
Using the code at the bottom.  I think I should get
<br>
<p>&nbsp;0  1  8  9
<br>
&nbsp;4  5 12 13
<br>
&nbsp;2  3 10 11
<br>
&nbsp;6  7 14 15
<br>
<p>However, the result is
<br>
<p>&nbsp;0  1  2  3
<br>
&nbsp;4  5  8  9
<br>
&nbsp;6  7 10 11
<br>
&nbsp;x  x 14 15
<br>
<p>Is this the way it is supposed to be?
<br>
<p>FYI: This is version 1.6.2 in Rocks 6
<br>
<p>Thanks,
<br>
Spenser
<br>
<p>float A[4][4];
<br>
int wsize, wrank;
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;wsize); // Assume 2
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;wrank);
<br>
MPI_Type_vector(4/wsize, 4/wsize, 4, MPI_FLOAT, &amp;mpi_all_t);
<br>
MPI_Type_commit(&amp;mpi_all_t);
<br>
<p>for(int i = 0; i &lt; 4; i++) for (j = 0; j &lt; 4; j++) {
<br>
&nbsp;&nbsp;&nbsp;A[i][j] = i*4+j;
<br>
}
<br>
<p>MPI_Alltoall(A[rank*4/wsize*4], 1, mpi_all_t,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A[rank*4/wsize*4], 1, mpi_all_t,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
<p>for(int i = 0; i &lt; 4; i++) {
<br>
&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; 4; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%6.2g&quot;)
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
}
<br>
<p><pre>
-- 
Spenser Gilliland
Computer Engineer
Doctoral Candidate
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24302.php">Gus Correa: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="24300.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24304.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24304.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
