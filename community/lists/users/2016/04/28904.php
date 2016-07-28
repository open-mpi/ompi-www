<?
$subject_val = "Re: [OMPI users] Wrong values when reading file with MPI IO";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 15:22:28 2016" -->
<!-- isoreceived="20160407192228" -->
<!-- sent="Thu, 7 Apr 2016 14:22:26 -0500" -->
<!-- isosent="20160407192226" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wrong values when reading file with MPI IO" -->
<!-- id="5706B372.3050306_at_central.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="a7f0afbc537020afdfc05da57429533d_at_mailoo.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Wrong values when reading file with MPI IO<br>
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-07 15:22:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28905.php">david.froger.ml_at_[hidden]: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Previous message:</strong> <a href="28903.php">david.froger.ml_at_[hidden]: "[OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>In reply to:</strong> <a href="28903.php">david.froger.ml_at_[hidden]: "[OMPI users] Wrong values when reading file with MPI IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28905.php">david.froger.ml_at_[hidden]: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Reply:</strong> <a href="28905.php">david.froger.ml_at_[hidden]: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of Open MPI did you execute your test with?
<br>
Edgar
<br>
<p>On 4/7/2016 1:54 PM, david.froger.ml_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a simple `C` program reading a file in parallel with `MPI IO`:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;       #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       #define N 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       main( int argc, char **argv )
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;           int rank, size;
</span><br>
<span class="quotelev1">&gt;           MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;           MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev1">&gt;           MPI_Comm_size( MPI_COMM_WORLD, &amp;size );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           int i0 = N *  rank / size;
</span><br>
<span class="quotelev1">&gt;           int i1 = N * (rank+1) / size;
</span><br>
<span class="quotelev1">&gt;           printf(&quot;rank: %d, i0: %d, i1: %d\n&quot;, rank, i0, i1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           int i;
</span><br>
<span class="quotelev1">&gt;           double* data = malloc( (i1-i0)*sizeof(double) );
</span><br>
<span class="quotelev1">&gt;           for (i = 0 ; i &lt; i1-i0 ; i++)
</span><br>
<span class="quotelev1">&gt;               data[i] = 123.;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           MPI_File f;
</span><br>
<span class="quotelev1">&gt;           MPI_File_open(MPI_COMM_WORLD, &quot;data.bin&quot;, MPI_MODE_RDONLY,
</span><br>
<span class="quotelev1">&gt;                         MPI_INFO_NULL, &amp;f);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           MPI_File_set_view(f, i0, MPI_DOUBLE, MPI_DOUBLE, &quot;native&quot;,
</span><br>
<span class="quotelev1">&gt;                             MPI_INFO_NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           MPI_Status status;
</span><br>
<span class="quotelev1">&gt;           MPI_File_read(f, data, i1-i0, MPI_DOUBLE, &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           int count;
</span><br>
<span class="quotelev1">&gt;           MPI_Get_count(&amp;status, MPI_DOUBLE, &amp;count);
</span><br>
<span class="quotelev1">&gt;           printf(&quot;rank %d, %d value read\n&quot;, rank, count);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           for (i = 0 ; i &lt; i1-i0 ; i++) {
</span><br>
<span class="quotelev1">&gt;               printf(&quot;rank: %d index: %d value: %.2f\n&quot;, rank, i,
</span><br>
<span class="quotelev1">&gt; data[i]);
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           MPI_File_close(&amp;f);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           free(data);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           return 0;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With one processus:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       ./read_mpi_io
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Values read are correct:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       rank: 0, i0: 0, i1: 10
</span><br>
<span class="quotelev1">&gt;       rank 0, 10 value read
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 0 value: 0.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 1 value: 1.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 2 value: 2.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 3 value: 3.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 4 value: 4.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 5 value: 5.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 6 value: 6.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 7 value: 7.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 8 value: 8.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 9 value: 9.00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But with two processus:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       mpirun -n 2 ./read_mpi_io
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get wrong values (zeros):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       rank: 0, i0: 0, i1: 5
</span><br>
<span class="quotelev1">&gt;       rank: 1, i0: 5, i1: 10
</span><br>
<span class="quotelev1">&gt;       rank 0, 5 value read
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 0 value: 0.00
</span><br>
<span class="quotelev1">&gt;       rank 1, 5 value read
</span><br>
<span class="quotelev1">&gt;       rank: 1 index: 0 value: 0.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 1 value: 1.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 2 value: 2.00
</span><br>
<span class="quotelev1">&gt;       rank: 1 index: 1 value: 0.00
</span><br>
<span class="quotelev1">&gt;       rank: 1 index: 2 value: 0.00
</span><br>
<span class="quotelev1">&gt;       rank: 1 index: 3 value: 0.00
</span><br>
<span class="quotelev1">&gt;       rank: 1 index: 4 value: 0.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 3 value: 3.00
</span><br>
<span class="quotelev1">&gt;       rank: 0 index: 4 value: 4.00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's wrong in my C code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28903.php">http://www.open-mpi.org/community/lists/users/2016/04/28903.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28905.php">david.froger.ml_at_[hidden]: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Previous message:</strong> <a href="28903.php">david.froger.ml_at_[hidden]: "[OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>In reply to:</strong> <a href="28903.php">david.froger.ml_at_[hidden]: "[OMPI users] Wrong values when reading file with MPI IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28905.php">david.froger.ml_at_[hidden]: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Reply:</strong> <a href="28905.php">david.froger.ml_at_[hidden]: "Re: [OMPI users] Wrong values when reading file with MPI IO"</a>
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
