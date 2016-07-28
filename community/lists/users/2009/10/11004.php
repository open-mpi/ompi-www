<?
$subject_val = "Re: [OMPI users] collective communications broken on more than 4 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 12:22:51 2009" -->
<!-- isoreceived="20091029162251" -->
<!-- sent="Thu, 29 Oct 2009 10:22:45 -0600" -->
<!-- isosent="20091029162245" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective communications broken on more than 4 cores" -->
<!-- id="4AE9C155.10809_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1N3WCc-0007Ag-3E_at_gauvain.u-strasbg.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] collective communications broken on more than 4 cores<br>
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 12:22:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11005.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11003.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="11003.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This also appears to fix a bug I had reported that did not involve 
<br>
collective calls.
<br>
The code is appended.  When run on 64 bit architecture with
<br>
<p>iter.cary$ gcc --version
<br>
gcc (GCC) 4.4.0 20090506 (Red Hat 4.4.0-4)
<br>
Copyright (C) 2009 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>iter.cary$ uname -a
<br>
Linux iter.txcorp.com 2.6.29.4-167.fc11.x86_64 #1 SMP Wed May 27 
<br>
17:27:08 EDT 2009 x86_64 x86_64 x86_64 GNU/Linux
<br>
iter.cary$ mpicc -show
<br>
gcc -I/usr/local/openmpi-1.3.2-nodlopen/include -pthread 
<br>
-L/usr/local/torque-2.4.0b1/lib -Wl,--rpath 
<br>
-Wl,/usr/local/torque-2.4.0b1/lib 
<br>
-Wl,-rpath,/usr/local/openmpi-1.3.2-nodlopen/lib 
<br>
-L/usr/local/openmpi-1.3.2-nodlopen/lib -lmpi -lopen-rte -lopen-pal 
<br>
-ltorque -ldl -lnsl -lutil -lm
<br>
<p>as
<br>
<p>&nbsp;&nbsp;mpirun -n 3 ompi1.3.3-bug
<br>
<p>it hangs after some 100-500 iterations.  When run
<br>
<p>&nbsp;&nbsp;mpirun -n 3 -mca btl ^sm ./ompi1.3.3-bug
<br>
<p>or
<br>
<p>&nbsp;&nbsp;mpirun -n 3 -mca btl_sm_num_fifos 5 ./ompi1.3.3-bug
<br>
<p>it seems to work fine.
<br>
<p>Valgrind points to some issues:
<br>
<p>==29641== Syscall param sched_setaffinity(mask) points to unaddressable 
<br>
byte(s)
<br>
==29641==    at 0x30B5EDAA79: syscall (in /lib64/libc-2.10.1.so)
<br>
==29641==    by 0x54B5098: opal_paffinity_linux_plpa_api_probe_init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-pal.so.0.0.0)
<br>
==29641==    by 0x54B7394: opal_paffinity_linux_plpa_init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-pal.so.0.0.0)
<br>
==29641==    by 0x54B5D39: 
<br>
opal_paffinity_linux_plpa_have_topology_information (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-pal.so.0.0.0)
<br>
==29641==    by 0x54B4F3F: linux_module_init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-pal.so.0.0.0)
<br>
==29641==    by 0x54B2D03: opal_paffinity_base_select (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-pal.so.0.0.0)
<br>
==29641==    by 0x548C3D3: opal_init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-pal.so.0.0.0)
<br>
==29641==    by 0x520F09C: orte_init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-rte.so.0.0.0)
<br>
==29641==    by 0x4E67D26: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29641==    by 0x4E87195: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29641==    by 0x408011: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==29641==  Address 0x0 is not stack'd, malloc'd or (recently) free'd
<br>
<p>==29641== Warning: client syscall munmap tried to modify addresses 
<br>
0xffffffffffffffff-0xffe
<br>
==29640== Warning: client syscall munmap tried to modify addresses 
<br>
0xffffffffffffffff-0xffe
<br>
==29639== Warning: client syscall munmap tried to modify addresses 
<br>
0xffffffffffffffff-0xffe
<br>
==29641==
<br>
==29641== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
==29641==    at 0x30B5ED67AB: writev (in /lib64/libc-2.10.1.so)
<br>
==29641==    by 0x5241686: mca_oob_tcp_msg_send_handler (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-rte.so.0.0.0)
<br>
==29641==    by 0x52426BC: mca_oob_tcp_peer_send (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-rte.so.0.0.0)
<br>
==29641==    by 0x52450EC: mca_oob_tcp_send_nb (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-rte.so.0.0.0)
<br>
==29641==    by 0x5255B33: orte_rml_oob_send_buffer (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-rte.so.0.0.0)
<br>
==29641==    by 0x5230682: allgather (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-rte.so.0.0.0)
<br>
==29641==    by 0x5230179: modex (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-rte.so.0.0.0)
<br>
==29641==    by 0x4E68199: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29641==    by 0x4E87195: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29641==    by 0x408011: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==29641==  Address 0x5c89aef is 87 bytes inside a block of size 128 alloc'd
<br>
==29641==    at 0x4A0763E: malloc (vg_replace_malloc.c:207)
<br>
==29641==    by 0x548D76A: opal_dss_buffer_extend (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-pal.so.0.0.0)
<br>
==29641==    by 0x548E780: opal_dss_pack (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-pal.so.0.0.0)
<br>
==29641==    by 0x5230620: allgather (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-rte.so.0.0.0)
<br>
==29641==    by 0x5230179: modex (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libopen-rte.so.0.0.0)
<br>
==29641==    by 0x4E68199: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29641==    by 0x4E87195: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29641==    by 0x408011: main (in /home/research/cary/ompi1.3.3-bug)
<br>
<p><p>==29640== Conditional jump or move depends on uninitialised value(s)
<br>
==29640==    at 0x4EF26A4: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29640==    by 0x4E4BEEF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29640==    by 0x4EA8793: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29640==    by 0x4E9E6E9: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29640==    by 0x4F0B564: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29640==    by 0x4E68288: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29640==    by 0x4E87195: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.2-nodlopen/lib/libmpi.so.0.0.0)
<br>
==29640==    by 0x408011: main (in /home/research/cary/ompi1.3.3-bug)
<br>
<p><p>....John Cary
<br>
<p><p><p><p><p><p><p><p>Vincent Loechner wrote:
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It seems that the calls to collective communication are not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; returning for some MPI processes, when the number of processes is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; greater or equal to 5. It's reproduceable, on two different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; architectures, with two different versions of OpenMPI (1.3.2 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.3.3). It was working correctly with OpenMPI version 1.2.7.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does it work if you turn off the shared memory transport layer;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that is,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -n 6 -mca btl ^sm ./testmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes it does, on both my configurations (AMD and Intel processor).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it seems that the shared memory synchronization process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broken.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Presumably that is this bug:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes it is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I also found by trial and error that increasing the number of fifos, eg
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_sm_num_fifos 5
</span><br>
<span class="quotelev2">&gt;&gt; on a 6-processor job, apparently worked around the problem.
</span><br>
<span class="quotelev2">&gt;&gt; But yes, something seems broken in OpenMP shared memory transport with  
</span><br>
<span class="quotelev2">&gt;&gt; gcc 4.4.x.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, same for me: -mca btl_sm_num_fifos 5 worked.
</span><br>
<span class="quotelev1">&gt; Thanks for your answer Jonathan.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I may help the developpers in any way to track this bug get into
</span><br>
<span class="quotelev1">&gt; contact with me.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>iter.cary$ cat ompi1.3.3-bug.cxx
<br>
/**
<br>
&nbsp;* A simple test program to demonstrate a problem in OpenMPI 1.3
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
<p><pre>
-- 
Tech-X Corp., 5621 Arapahoe Ave, Suite A, Boulder CO 80303
cary_at_[hidden], p 303-448-0727, f 303-448-7756, NEW CELL 303-881-8572
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11005.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11003.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="11003.php">Vincent Loechner: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- nextthread="start" -->
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
