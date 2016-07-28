<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 20:09:41 2009" -->
<!-- isoreceived="20091202010941" -->
<!-- sent="Tue, 01 Dec 2009 18:09:31 -0700" -->
<!-- isosent="20091202010931" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="4B15BE4B.9050508_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EBEA51C5-668D-4470-9A20-A7EEBC6B07A8_at_cisco.com" -->
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
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 20:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11349.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11347.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>In reply to:</strong> <a href="11343.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11363.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11363.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; (for the web archives)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock and I talked about this .f90 code a bit off list -- he's going 
</span><br>
<span class="quotelev1">&gt; to investigate with the test author a bit more because both of us are 
</span><br>
<span class="quotelev1">&gt; a bit confused by the F90 array syntax used.
</span><br>
Attached is a simple send/recv code written (procedural) C++ that
<br>
illustrates a similar problem.  It dies at a random number of iterations
<br>
with openmpi-1.3.2 or .3.  (I have submitted this before.)  On some 
<br>
machines
<br>
this goes away with the &quot;-mca btl_sm_num_fifos 8&quot; or
<br>
&quot;-mca btl ^sm&quot;, so I think this is
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>.
<br>
<p><p>Since it has barriers after each send/recv pair, I do not understand how
<br>
any buffers could fill up.
<br>
<p>Various stats:
<br>
<p>iter.cary$ uname -a
<br>
Linux iter.txcorp.com 2.6.29.4-167.fc11.x86_64 #1 SMP Wed May 27 
<br>
17:27:08 EDT 2009 x86_64 x86_64 x86_64 GNU/Linux
<br>
iter.cary$ g++ --version
<br>
g++ (GCC) 4.4.0 20090506 (Red Hat 4.4.0-4)
<br>
Copyright (C) 2009 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>iter.cary$ mpicxx -show
<br>
g++ -I/usr/local/openmpi-1.3.2-nodlopen/include -pthread 
<br>
-L/usr/local/torque-2.4.0b1/lib -Wl,--rpath 
<br>
-Wl,/usr/local/torque-2.4.0b1/lib 
<br>
-Wl,-rpath,/usr/local/openmpi-1.3.2-nodlopen/lib 
<br>
-L/usr/local/openmpi-1.3.2-nodlopen/lib -lmpi_cxx -lmpi -lopen-rte 
<br>
-lopen-pal -ltorque -ldl -lnsl -lutil -lm
<br>
<p>Seen failures on 64 bit hardware only.
<br>
<p><p>John Cary
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 1, 2009, at 10:46 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The attached code, is an example where openmpi/1.3.2 will lock up, if
</span><br>
<span class="quotelev2">&gt;&gt; ran on 48 cores, of IB (4 cores per node),
</span><br>
<span class="quotelev2">&gt;&gt; The code loops over recv from all processors on rank 0 and sends from
</span><br>
<span class="quotelev2">&gt;&gt; all other ranks, as far as I know this should work, and I can't see
</span><br>
<span class="quotelev2">&gt;&gt; why not.
</span><br>
<span class="quotelev2">&gt;&gt; Note yes I know we can do the same thing with a gather, this is a
</span><br>
<span class="quotelev2">&gt;&gt; simple case to demonstrate the issue.
</span><br>
<span class="quotelev2">&gt;&gt; Note that if I increase the openib eager limit, the program runs,
</span><br>
<span class="quotelev2">&gt;&gt; which normally means improper MPI, but I can't on my own figure out
</span><br>
<span class="quotelev2">&gt;&gt; the problem with this code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any input on why code like this locks up, unless we up the eager
</span><br>
<span class="quotelev2">&gt;&gt; buffer would be helpful, as we should be be having to up the buffer
</span><br>
<span class="quotelev2">&gt;&gt; size, just to make code run, makes me feel hacky and dirty.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;sendbuf.f90&gt;&lt;ATT9198877.txt&gt;&lt;ATT9198879.txt&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<br><p>
/**
<br>
&nbsp;* A simple test program to demonstrate a problem in OpenMPI 1.3
<br>
&nbsp;*
<br>
&nbsp;* Make with:
<br>
&nbsp;* mpicxx -o ompi1.3.3-bug ompi1.3.3-bug.cxx
<br>
&nbsp;*
<br>
&nbsp;* Run with:
<br>
&nbsp;* mpirun -n 3 ompi1.3.3-bug
<br>
&nbsp;*/
<br>
<p>// mpi includes
<br>
#include &lt;mpi.h&gt;
<br>
<p>// std includes
<br>
#include &lt;iostream&gt;
<br>
#include &lt;vector&gt;
<br>
<p>// useful hashdefine
<br>
#define ARRAY_SIZE 250
<br>
<p>/**
<br>
&nbsp;* Main driver
<br>
&nbsp;*/
<br>
int main(int argc, char** argv) {
<br>
// Initialize MPI
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;int rk, sz;
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rk);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;sz);
<br>
<p>// Create some data to pass around
<br>
&nbsp;&nbsp;std::vector&lt;double&gt; d(ARRAY_SIZE);
<br>
<p>// Initialize to some values if we aren't rank 0
<br>
&nbsp;&nbsp;if ( rk )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for ( unsigned i = 0; i &lt; ARRAY_SIZE; ++i )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d[i] = 2*i + 1;
<br>
<p>// Loop until this breaks
<br>
&nbsp;&nbsp;unsigned t = 0;
<br>
&nbsp;&nbsp;while ( 1 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status s;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( rk )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send( &amp;d[0], d.size(), MPI_DOUBLE, 0, 3, MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( int i = 1; i &lt; sz; ++i )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( &amp;d[0], d.size(), MPI_DOUBLE, i, 3, MPI_COMM_WORLD, &amp;s );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Transmission &quot; &lt;&lt; ++t &lt;&lt; &quot; completed.&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;}
<br>
<p>// Finalize MPI
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11349.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11347.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>In reply to:</strong> <a href="11343.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11363.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11363.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
