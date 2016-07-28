<?
$subject_val = "[OMPI users] Wrong values when reading file with MPI IO";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 14:54:12 2016" -->
<!-- isoreceived="20160407185412" -->
<!-- sent="Thu, 07 Apr 2016 20:54:16 +0200" -->
<!-- isosent="20160407185416" -->
<!-- name="david.froger.ml_at_[hidden]" -->
<!-- email="david.froger.ml_at_[hidden]" -->
<!-- subject="[OMPI users] Wrong values when reading file with MPI IO" -->
<!-- id="a7f0afbc537020afdfc05da57429533d_at_mailoo.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Wrong values when reading file with MPI IO<br>
<strong>From:</strong> <a href="mailto:david.froger.ml_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Wrong%20values%20when%20reading%20file%20with%20MPI%20IO"><em>david.froger.ml_at_[hidden]</em></a><br>
<strong>Date:</strong> 2016-04-07 14:54:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28904.php">Edgar Gabriel: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Previous message:</strong> <a href="28902.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28904.php">Edgar Gabriel: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Reply:</strong> <a href="28904.php">Edgar Gabriel: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Maybe reply:</strong> <a href="28907.php">David Froger: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Here is a simple `C` program reading a file in parallel with `MPI IO`:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdlib.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &quot;mpi.h&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define N 10
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;main( int argc, char **argv )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size( MPI_COMM_WORLD, &amp;size );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i0 = N *  rank / size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i1 = N * (rank+1) / size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;rank: %d, i0: %d, i1: %d\n&quot;, rank, i0, i1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double* data = malloc( (i1-i0)*sizeof(double) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0 ; i &lt; i1-i0 ; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data[i] = 123.;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File f;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_open(MPI_COMM_WORLD, &quot;data.bin&quot;, MPI_MODE_RDONLY,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, &amp;f);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_set_view(f, i0, MPI_DOUBLE, MPI_DOUBLE, &quot;native&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_read(f, data, i1-i0, MPI_DOUBLE, &amp;status);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;status, MPI_DOUBLE, &amp;count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;rank %d, %d value read\n&quot;, rank, count);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0 ; i &lt; i1-i0 ; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;rank: %d index: %d value: %.2f\n&quot;, rank, i, 
<br>
data[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_close(&amp;f);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(data);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>With one processus:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./read_mpi_io
<br>
<p>Values read are correct:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0, i0: 0, i1: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 0, 10 value read
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 0 value: 0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 1 value: 1.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 2 value: 2.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 3 value: 3.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 4 value: 4.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 5 value: 5.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 6 value: 6.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 7 value: 7.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 8 value: 8.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 9 value: 9.00
<br>
<p>But with two processus:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -n 2 ./read_mpi_io
<br>
<p>I get wrong values (zeros):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0, i0: 0, i1: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 1, i0: 5, i1: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 0, 5 value read
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 0 value: 0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 1, 5 value read
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 1 index: 0 value: 0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 1 value: 1.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 2 value: 2.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 1 index: 1 value: 0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 1 index: 2 value: 0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 1 index: 3 value: 0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 1 index: 4 value: 0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 3 value: 3.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank: 0 index: 4 value: 4.00
<br>
<p><p>What's wrong in my C code?
<br>
<p>Thanks,
<br>
David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28904.php">Edgar Gabriel: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Previous message:</strong> <a href="28902.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28904.php">Edgar Gabriel: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Reply:</strong> <a href="28904.php">Edgar Gabriel: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Maybe reply:</strong> <a href="28907.php">David Froger: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
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
