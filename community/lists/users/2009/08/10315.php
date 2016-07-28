<?
$subject_val = "[OMPI users] Memchecker and Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 22:56:56 2009" -->
<!-- isoreceived="20090812025656" -->
<!-- sent="Tue, 11 Aug 2009 22:56:46 -0400" -->
<!-- isosent="20090812025646" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="[OMPI users] Memchecker and Wait" -->
<!-- id="1250045807.3174.291.camel_at_alpaca.lan" -->
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
<strong>Subject:</strong> [OMPI users] Memchecker and Wait<br>
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 22:56:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10316.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<li><strong>Previous message:</strong> <a href="10314.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10317.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<li><strong>Reply:</strong> <a href="10317.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
I'm trying to use the memchecker/valgrind capability of OpenMPI 1.3.3 to
<br>
help debug my MPI application. I noticed a rather odd thing: After
<br>
Waiting on a Recv Request, valgrind declares my receive buffer as
<br>
invalid memory. Is this just a fluke of valgrind, or is OMPI doing
<br>
something internally?
<br>
<p>This is on a 64-bit RHEL 5 system using GCC 4.3.2 and Valgrind 3.4.1.
<br>
<p>Here is an example:
<br>
----------------------------------------------------------
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;if ( size !=  2 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( rank == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Please run with 2 processes.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 1;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char buffer_in[100];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request req_in;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memset( buffer_in, 1, sizeof(buffer_in) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv_init( buffer_in, 100, MPI_CHAR, 1, 123, MPI_COMM_WORLD,
<br>
&amp;req_in );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start( &amp;req_in );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;Before wait: %p: %d\n&quot;, buffer_in, buffer_in[3] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;Before wait: %p: %d\n&quot;, buffer_in, buffer_in[4] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait( &amp;req_in, &amp;status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;After wait: %p: %d\n&quot;, buffer_in, buffer_in[3] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;After wait: %p: %d\n&quot;, buffer_in, buffer_in[4] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free( &amp;req_in );
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char buffer_out[100];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memset( buffer_out, 2, sizeof(buffer_out) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send( buffer_out, 100, MPI_CHAR, 0, 123, MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
} 
<br>
----------------------------------------------------------
<br>
<p>Doing &quot;mpirun -np 2 -mca btl ^sm valgrind ./a.out&quot; yields:
<br>
<p>Before wait: 0x7ff0003b0: 1
<br>
Before wait: 0x7ff0003b0: 1
<br>
==15487== 
<br>
==15487== Invalid read of size 1
<br>
==15487==    at 0x400C6B: main (waittest.c:30)
<br>
==15487==  Address 0x7ff0003b3 is on thread 1's stack
<br>
After wait: 0x7ff0003b0: 2
<br>
==15487== 
<br>
==15487== Invalid read of size 1
<br>
==15487==    at 0x400C8B: main (waittest.c:31)
<br>
==15487==  Address 0x7ff0003b4 is on thread 1's stack
<br>
After wait: 0x7ff0003b0: 2
<br>
<p>Also, if I run this program with the shared memory BTL active, valgrind
<br>
reports several &quot;conditional jump or move depends on uninitialized
<br>
value&quot;s in the SM BTL and about 24k lost bytes at the end (mostly from
<br>
allocations in MPI_Init).
<br>
<p>Thanks,
<br>
Allen
<br>
<p><pre>
-- 
Allen Barnett
Transpire, Inc
E-Mail: allen_at_[hidden]
Skype:  allenbarnett
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10316.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<li><strong>Previous message:</strong> <a href="10314.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10317.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<li><strong>Reply:</strong> <a href="10317.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
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
