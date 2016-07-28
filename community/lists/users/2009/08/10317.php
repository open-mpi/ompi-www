<?
$subject_val = "Re: [OMPI users] Memchecker and Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 04:31:35 2009" -->
<!-- isoreceived="20090812083135" -->
<!-- sent="Wed, 12 Aug 2009 10:31:27 +0200" -->
<!-- isosent="20090812083127" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memchecker and Wait" -->
<!-- id="4A827DDF.6070709_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1250045807.3174.291.camel_at_alpaca.lan" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memchecker and Wait<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 04:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10318.php">Jalel Chergui (LIMSI-CNRS) <Jalel.Chergui_at_[hidden]: "[OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
<li><strong>Previous message:</strong> <a href="10316.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<li><strong>In reply to:</strong> <a href="10315.php">Allen Barnett: "[OMPI users] Memchecker and Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10320.php">Allen Barnett: "Re: [OMPI users] Memchecker and Wait"</a>
<li><strong>Reply:</strong> <a href="10320.php">Allen Barnett: "Re: [OMPI users] Memchecker and Wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Allen,
<br>
<p>The invalid reads come from line 30 and 31 of your code, and I guess 
<br>
they are the two 'printf's before MPI_Wait.
<br>
<p>In Open MPI, when memchecker is enabled, OMPI marks the receive buffer 
<br>
as invalid internally, immediately after receive starts for MPI semantic 
<br>
checks, in this case, it just warns the users that they are accessing 
<br>
the receive buffer before the receive has finished, which is not allowed 
<br>
according to the MPI standard.
<br>
<p>For a non-blocking receive, the communication only completes after 
<br>
MPI_Wait is called. After that point, the user buffers are declared 
<br>
valid again, that's why the 'printf's after MPI_Wait don't cause any 
<br>
warnings from Valgrind. Hope this helps. :-)
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>Allen Barnett wrote:
<br>
<span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; I'm trying to use the memchecker/valgrind capability of OpenMPI 1.3.3 to
</span><br>
<span class="quotelev1">&gt; help debug my MPI application. I noticed a rather odd thing: After
</span><br>
<span class="quotelev1">&gt; Waiting on a Recv Request, valgrind declares my receive buffer as
</span><br>
<span class="quotelev1">&gt; invalid memory. Is this just a fluke of valgrind, or is OMPI doing
</span><br>
<span class="quotelev1">&gt; something internally?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is on a 64-bit RHEL 5 system using GCC 4.3.2 and Valgrind 3.4.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is an example:
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int rank, size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if ( size !=  2 ) {
</span><br>
<span class="quotelev1">&gt;     if ( rank == 0 )
</span><br>
<span class="quotelev1">&gt;       printf(&quot;Please run with 2 processes.\n&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 1;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;     char buffer_in[100];
</span><br>
<span class="quotelev1">&gt;     MPI_Request req_in;
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;     memset( buffer_in, 1, sizeof(buffer_in) );
</span><br>
<span class="quotelev1">&gt;     MPI_Recv_init( buffer_in, 100, MPI_CHAR, 1, 123, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; &amp;req_in );
</span><br>
<span class="quotelev1">&gt;     MPI_Start( &amp;req_in );
</span><br>
<span class="quotelev1">&gt;     printf( &quot;Before wait: %p: %d\n&quot;, buffer_in, buffer_in[3] );
</span><br>
<span class="quotelev1">&gt;     printf( &quot;Before wait: %p: %d\n&quot;, buffer_in, buffer_in[4] );
</span><br>
<span class="quotelev1">&gt;     MPI_Wait( &amp;req_in, &amp;status );
</span><br>
<span class="quotelev1">&gt;     printf( &quot;After wait: %p: %d\n&quot;, buffer_in, buffer_in[3] );
</span><br>
<span class="quotelev1">&gt;     printf( &quot;After wait: %p: %d\n&quot;, buffer_in, buffer_in[4] );
</span><br>
<span class="quotelev1">&gt;     MPI_Request_free( &amp;req_in );
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   else {
</span><br>
<span class="quotelev1">&gt;     char buffer_out[100];
</span><br>
<span class="quotelev1">&gt;     memset( buffer_out, 2, sizeof(buffer_out) );
</span><br>
<span class="quotelev1">&gt;     MPI_Send( buffer_out, 100, MPI_CHAR, 0, 123, MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; } 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doing &quot;mpirun -np 2 -mca btl ^sm valgrind ./a.out&quot; yields:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before wait: 0x7ff0003b0: 1
</span><br>
<span class="quotelev1">&gt; Before wait: 0x7ff0003b0: 1
</span><br>
<span class="quotelev1">&gt; ==15487== 
</span><br>
<span class="quotelev1">&gt; ==15487== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==15487==    at 0x400C6B: main (waittest.c:30)
</span><br>
<span class="quotelev1">&gt; ==15487==  Address 0x7ff0003b3 is on thread 1's stack
</span><br>
<span class="quotelev1">&gt; After wait: 0x7ff0003b0: 2
</span><br>
<span class="quotelev1">&gt; ==15487== 
</span><br>
<span class="quotelev1">&gt; ==15487== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==15487==    at 0x400C8B: main (waittest.c:31)
</span><br>
<span class="quotelev1">&gt; ==15487==  Address 0x7ff0003b4 is on thread 1's stack
</span><br>
<span class="quotelev1">&gt; After wait: 0x7ff0003b0: 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, if I run this program with the shared memory BTL active, valgrind
</span><br>
<span class="quotelev1">&gt; reports several &quot;conditional jump or move depends on uninitialized
</span><br>
<span class="quotelev1">&gt; value&quot;s in the SM BTL and about 24k lost bytes at the end (mostly from
</span><br>
<span class="quotelev1">&gt; allocations in MPI_Init).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Allen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10318.php">Jalel Chergui (LIMSI-CNRS) <Jalel.Chergui_at_[hidden]: "[OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
<li><strong>Previous message:</strong> <a href="10316.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<li><strong>In reply to:</strong> <a href="10315.php">Allen Barnett: "[OMPI users] Memchecker and Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10320.php">Allen Barnett: "Re: [OMPI users] Memchecker and Wait"</a>
<li><strong>Reply:</strong> <a href="10320.php">Allen Barnett: "Re: [OMPI users] Memchecker and Wait"</a>
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
