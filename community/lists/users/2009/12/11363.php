<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 01:10:42 2009" -->
<!-- isoreceived="20091202061042" -->
<!-- sent="Tue, 01 Dec 2009 22:12:11 -0800" -->
<!-- isosent="20091202061211" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="4B16053B.2010001_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B15BE4B.9050508_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program deadlocks, on simple send/recv loop<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 01:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11364.php">Terry Frankcombe: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Previous message:</strong> <a href="11362.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11348.php">John R. Cary: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John R. Cary wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (for the web archives)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock and I talked about this .f90 code a bit off list -- he's going 
</span><br>
<span class="quotelev2">&gt;&gt; to investigate with the test author a bit more because both of us are 
</span><br>
<span class="quotelev2">&gt;&gt; a bit confused by the F90 array syntax used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a simple send/recv code written (procedural) C++ that
</span><br>
<span class="quotelev1">&gt; illustrates a similar problem.  It dies at a random number of iterations
</span><br>
<span class="quotelev1">&gt; with openmpi-1.3.2 or .3.  (I have submitted this before.)  On some 
</span><br>
<span class="quotelev1">&gt; machines
</span><br>
<span class="quotelev1">&gt; this goes away with the &quot;-mca btl_sm_num_fifos 8&quot; or
</span><br>
<span class="quotelev1">&gt; &quot;-mca btl ^sm&quot;, so I think this is
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>.
</span><br>
<p>I suppose so.  GCC 4.4.0.  We've made a bit of progress on this 
<br>
recently, but again I don't know how much further we have to go.  I 
<br>
posted a C-only stand-alone example to the ticket, but would appreciate 
<br>
anyone jumping in and looking at it further.  George has taken a peek so 
<br>
far.
<br>
<p><span class="quotelev1">&gt; Since it has barriers after each send/recv pair, I do not understand 
</span><br>
<span class="quotelev1">&gt; how any buffers could fill up.
</span><br>
<p>Right.  For 2043, it seems there is a race condition when two process 
<br>
write to the same, on-node receiver.  It's possible to observe the 
<br>
problem with nothing but repeated barriers.
<br>
<p><span class="quotelev2">&gt;&gt; On Dec 1, 2009, at 10:46 AM, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The attached code, is an example where openmpi/1.3.2 will lock up, if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ran on 48 cores, of IB (4 cores per node),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code loops over recv from all processors on rank 0 and sends from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all other ranks, as far as I know this should work, and I can't see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; why not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
Okay.  Presumably the IB part is irrelevent.  Just having one node with 
<br>
multiple senders sending to a common receiver should do the job.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Note that if I increase the openib eager limit, the program runs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which normally means improper MPI, but I can't on my own figure out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem with this code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
This conflicts with the theory that it's trac 2043.  Similarly, having 
<br>
longer messages *suggests* (but does not prove) that the problem is 
<br>
something else.
<br>
<p><span class="quotelev1">&gt;/**
</span><br>
<span class="quotelev1">&gt; * A simple test program to demonstrate a problem in OpenMPI 1.3
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Make with:
</span><br>
<span class="quotelev1">&gt; * mpicxx -o ompi1.3.3-bug ompi1.3.3-bug.cxx
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Run with:
</span><br>
<span class="quotelev1">&gt; * mpirun -n 3 ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;// mpi includes
</span><br>
<span class="quotelev1">&gt;#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;// std includes
</span><br>
<span class="quotelev1">&gt;#include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;vector&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;// useful hashdefine
</span><br>
<span class="quotelev1">&gt;#define ARRAY_SIZE 250
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/**
</span><br>
<span class="quotelev1">&gt; * Main driver
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;// Initialize MPI
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int rk, sz;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rk);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;sz);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;// Create some data to pass around
</span><br>
<span class="quotelev1">&gt;  std::vector&lt;double&gt; d(ARRAY_SIZE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;// Initialize to some values if we aren't rank 0
</span><br>
<span class="quotelev1">&gt;  if ( rk )
</span><br>
<span class="quotelev1">&gt;    for ( unsigned i = 0; i &lt; ARRAY_SIZE; ++i )
</span><br>
<span class="quotelev1">&gt;      d[i] = 2*i + 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;// Loop until this breaks
</span><br>
<span class="quotelev1">&gt;  unsigned t = 0;
</span><br>
<span class="quotelev1">&gt;  while ( 1 ) {
</span><br>
<span class="quotelev1">&gt;    MPI_Status s;
</span><br>
<span class="quotelev1">&gt;    if ( rk )
</span><br>
<span class="quotelev1">&gt;      MPI_Send( &amp;d[0], d.size(), MPI_DOUBLE, 0, 3, MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt;    else
</span><br>
<span class="quotelev1">&gt;      for ( int i = 1; i &lt; sz; ++i )
</span><br>
<span class="quotelev1">&gt;        MPI_Recv( &amp;d[0], d.size(), MPI_DOUBLE, i, 3, MPI_COMM_WORLD, &amp;s );
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    std::cout &lt;&lt; &quot;Transmission &quot; &lt;&lt; ++t &lt;&lt; &quot; completed.&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;// Finalize MPI
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11364.php">Terry Frankcombe: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Previous message:</strong> <a href="11362.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11348.php">John R. Cary: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
