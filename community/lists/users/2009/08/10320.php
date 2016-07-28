<?
$subject_val = "Re: [OMPI users] Memchecker and Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 09:12:15 2009" -->
<!-- isoreceived="20090812131215" -->
<!-- sent="Wed, 12 Aug 2009 09:12:07 -0400" -->
<!-- isosent="20090812131207" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memchecker and Wait" -->
<!-- id="1250082727.3174.324.camel_at_alpaca.lan" -->
<!-- inreplyto="4A827DDF.6070709_at_hlrs.de" -->
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
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 09:12:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10321.php">Manfred Muecke: "[OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>Previous message:</strong> <a href="10319.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<li><strong>In reply to:</strong> <a href="10317.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10329.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<li><strong>Reply:</strong> <a href="10329.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing:
<br>
That is very clever to invalidate the buffer memory until the comm
<br>
completes! However, I guess I'm still confused by my results. Lines 30
<br>
and 31 identified by valgrind are the lines after the Wait, and, if I
<br>
comment out the prints before the Wait, I still get the valgrind errors
<br>
on the &quot;After wait&quot; prints.
<br>
<p>If I add prints after the Request_free calls, then I no longer receive
<br>
the valgrind errors when accessing &quot;buffer_in&quot; from that point on. So,
<br>
it appears that the buffer is marked invalid until the request is freed.
<br>
<p>Perhaps I don't understand the sequence of events in MPI. I thought the
<br>
buffer was ok to use after the Wait, and requests could be safely
<br>
recycled.
<br>
<p>Or maybe valgrind is pointing to the wrong lines, however the addresses
<br>
which it reports as invalid are exactly those in the buffer which are
<br>
being accessed in the post-Wait prints. Here is snippet of a more
<br>
instrumented example program with line numbers.
<br>
----------------------------------------------
<br>
25 MPI_Recv_init( buffer_in, 100, MPI_CHAR, 1, 123, MPI_COMM_WORLD,
<br>
&amp;req_in );
<br>
26 printf( &quot;Before start: %p: %d\n&quot;, &amp;buffer_in[0], buffer_in[0] );
<br>
27 printf( &quot;Before start: %p: %d\n&quot;, &amp;buffer_in[1], buffer_in[1] );
<br>
28 MPI_Start( &amp;req_in );
<br>
29 printf( &quot;Before wait: %p: %d\n&quot;, &amp;buffer_in[2], buffer_in[2] );
<br>
30 printf( &quot;Before wait: %p: %d\n&quot;, &amp;buffer_in[3], buffer_in[3] );
<br>
31 MPI_Wait( &amp;req_in, &amp;status );
<br>
32 printf( &quot;After wait: %p: %d\n&quot;, &amp;buffer_in[4], buffer_in[4] );
<br>
33 printf( &quot;After wait: %p: %d\n&quot;, &amp;buffer_in[5], buffer_in[5] );
<br>
34 MPI_Request_free( &amp;req_in );
<br>
35 printf( &quot;After free: %p: %d\n&quot;, &amp;buffer_in[6], buffer_in[6] );
<br>
36 printf( &quot;After free: %p: %d\n&quot;, &amp;buffer_in[7], buffer_in[7] );
<br>
--------------------------------------------------
<br>
And the valgrind output
<br>
<p>Before start: 0x7ff0003c0: 1
<br>
Before start: 0x7ff0003c1: 1
<br>
Before wait: 0x7ff0003c2: 1
<br>
Before wait: 0x7ff0003c3: 1
<br>
==17395== 
<br>
==17395== Invalid read of size 1
<br>
==17395==    at 0x400CB7: main (waittest.c:32)
<br>
==17395==  Address 0x7ff0003c4 is on thread 1's stack
<br>
After wait: 0x7ff0003c4: 2
<br>
==17395== 
<br>
==17395== Invalid read of size 1
<br>
==17395==    at 0x400CDB: main (waittest.c:33)
<br>
==17395==  Address 0x7ff0003c5 is on thread 1's stack
<br>
After wait: 0x7ff0003c5: 2
<br>
After free: 0x7ff0003c6: 2
<br>
After free: 0x7ff0003c7: 2
<br>
<p>Here valgrind is complaining about the prints on line 32 and 33 and the
<br>
memory addresses are consistent with buffer_in[4] and buffer_in[5]. So,
<br>
I'm still puzzled.
<br>
<p>Thanks,
<br>
Allen
<br>
<p>On Wed, 2009-08-12 at 10:31 +0200, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt; Hi Allen,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The invalid reads come from line 30 and 31 of your code, and I guess 
</span><br>
<span class="quotelev1">&gt; they are the two 'printf's before MPI_Wait.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In Open MPI, when memchecker is enabled, OMPI marks the receive buffer 
</span><br>
<span class="quotelev1">&gt; as invalid internally, immediately after receive starts for MPI semantic 
</span><br>
<span class="quotelev1">&gt; checks, in this case, it just warns the users that they are accessing 
</span><br>
<span class="quotelev1">&gt; the receive buffer before the receive has finished, which is not allowed 
</span><br>
<span class="quotelev1">&gt; according to the MPI standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For a non-blocking receive, the communication only completes after 
</span><br>
<span class="quotelev1">&gt; MPI_Wait is called. After that point, the user buffers are declared 
</span><br>
<span class="quotelev1">&gt; valid again, that's why the 'printf's after MPI_Wait don't cause any 
</span><br>
<span class="quotelev1">&gt; warnings from Valgrind. Hope this helps. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Allen Barnett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi:
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to use the memchecker/valgrind capability of OpenMPI 1.3.3 to
</span><br>
<span class="quotelev2">&gt; &gt; help debug my MPI application. I noticed a rather odd thing: After
</span><br>
<span class="quotelev2">&gt; &gt; Waiting on a Recv Request, valgrind declares my receive buffer as
</span><br>
<span class="quotelev2">&gt; &gt; invalid memory. Is this just a fluke of valgrind, or is OMPI doing
</span><br>
<span class="quotelev2">&gt; &gt; something internally?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is on a 64-bit RHEL 5 system using GCC 4.3.2 and Valgrind 3.4.1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is an example:
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;   int rank, size;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if ( size !=  2 ) {
</span><br>
<span class="quotelev2">&gt; &gt;     if ( rank == 0 )
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;Please run with 2 processes.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;     return 1;
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (rank == 0) {
</span><br>
<span class="quotelev2">&gt; &gt;     char buffer_in[100];
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Request req_in;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;     memset( buffer_in, 1, sizeof(buffer_in) );
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Recv_init( buffer_in, 100, MPI_CHAR, 1, 123, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;req_in );
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Start( &amp;req_in );
</span><br>
<span class="quotelev2">&gt; &gt;     printf( &quot;Before wait: %p: %d\n&quot;, buffer_in, buffer_in[3] );
</span><br>
<span class="quotelev2">&gt; &gt;     printf( &quot;Before wait: %p: %d\n&quot;, buffer_in, buffer_in[4] );
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Wait( &amp;req_in, &amp;status );
</span><br>
<span class="quotelev2">&gt; &gt;     printf( &quot;After wait: %p: %d\n&quot;, buffer_in, buffer_in[3] );
</span><br>
<span class="quotelev2">&gt; &gt;     printf( &quot;After wait: %p: %d\n&quot;, buffer_in, buffer_in[4] );
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Request_free( &amp;req_in );
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;   else {
</span><br>
<span class="quotelev2">&gt; &gt;     char buffer_out[100];
</span><br>
<span class="quotelev2">&gt; &gt;     memset( buffer_out, 2, sizeof(buffer_out) );
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Send( buffer_out, 100, MPI_CHAR, 0, 123, MPI_COMM_WORLD );
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;   return 0;
</span><br>
<span class="quotelev2">&gt; &gt; } 
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Doing &quot;mpirun -np 2 -mca btl ^sm valgrind ./a.out&quot; yields:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Before wait: 0x7ff0003b0: 1
</span><br>
<span class="quotelev2">&gt; &gt; Before wait: 0x7ff0003b0: 1
</span><br>
<span class="quotelev2">&gt; &gt; ==15487== 
</span><br>
<span class="quotelev2">&gt; &gt; ==15487== Invalid read of size 1
</span><br>
<span class="quotelev2">&gt; &gt; ==15487==    at 0x400C6B: main (waittest.c:30)
</span><br>
<span class="quotelev2">&gt; &gt; ==15487==  Address 0x7ff0003b3 is on thread 1's stack
</span><br>
<span class="quotelev2">&gt; &gt; After wait: 0x7ff0003b0: 2
</span><br>
<span class="quotelev2">&gt; &gt; ==15487== 
</span><br>
<span class="quotelev2">&gt; &gt; ==15487== Invalid read of size 1
</span><br>
<span class="quotelev2">&gt; &gt; ==15487==    at 0x400C8B: main (waittest.c:31)
</span><br>
<span class="quotelev2">&gt; &gt; ==15487==  Address 0x7ff0003b4 is on thread 1's stack
</span><br>
<span class="quotelev2">&gt; &gt; After wait: 0x7ff0003b0: 2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, if I run this program with the shared memory BTL active, valgrind
</span><br>
<span class="quotelev2">&gt; &gt; reports several &quot;conditional jump or move depends on uninitialized
</span><br>
<span class="quotelev2">&gt; &gt; value&quot;s in the SM BTL and about 24k lost bytes at the end (mostly from
</span><br>
<span class="quotelev2">&gt; &gt; allocations in MPI_Init).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Allen
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Allen Barnett
Transpire, Inc
E-Mail: allen_at_[hidden]
Skype:  allenbarnett
Ph:     518-887-2930
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10321.php">Manfred Muecke: "[OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>Previous message:</strong> <a href="10319.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<li><strong>In reply to:</strong> <a href="10317.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10329.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<li><strong>Reply:</strong> <a href="10329.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
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
