<?
$subject_val = "[OMPI users] Openmpi failure on dual quad linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 10 12:09:53 2009" -->
<!-- isoreceived="20091010160953" -->
<!-- sent="Sat, 10 Oct 2009 10:09:47 -0600" -->
<!-- isosent="20091010160947" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi failure on dual quad linux" -->
<!-- id="4AD0B1CB.2020601_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi failure on dual quad linux<br>
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-10 12:09:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10904.php">John R. Cary: "Re: [OMPI users] Openmpi failure on dual quad linux"</a>
<li><strong>Previous message:</strong> <a href="10902.php">ankur pachauri: "[OMPI users] MPI_Send and MPI_Recv not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10904.php">John R. Cary: "Re: [OMPI users] Openmpi failure on dual quad linux"</a>
<li><strong>Reply:</strong> <a href="10904.php">John R. Cary: "Re: [OMPI users] Openmpi failure on dual quad linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have been getting hangs and failures of openmpi-1.3.X
<br>
on an 8-core FC11 box.  Details:
<br>
<p>Machine:
<br>
<p>Linux octet.carys.home 2.6.30.5-43.fc11.x86_64 #1 SMP Thu Aug 27 
<br>
21:39:52 EDT 2009 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>with 2 quad-core cpus.
<br>
<p>Compiler:
<br>
<p>g++ (GCC) 4.4.1 20090725 (Red Hat 4.4.1-2)
<br>
<p>The code is later in this email.
<br>
<p><p>OpenMPI configured with
<br>
<p>../configure --prefix=/usr/local/openmpi-1.3.3  
<br>
--with-wrapper-ldflags=-Wl,-rpath,/usr/local/openmpi-1.3.3/lib
<br>
<p>used to compile and execute:
<br>
<p>/usr/local/openmpi-1.3.3/bin/mpicxx ompi1.3.3-bug.cxx -o ompi1.3.3-bug
<br>
/usr/local/openmpi-1.3.3/bin/mpirun -np 8 ompi1.3.3-bug
<br>
<p>hangs on various steps: 10, 39, 125.  Top shows the code
<br>
using all resources:
<br>
<p>&nbsp;&nbsp;PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  
<br>
COMMAND          
<br>
&nbsp;5716 cary      20   0 98.6m 4396 2940 R 100.3  0.0   0:33.58 
<br>
ompi1.3.3-bug    
<br>
&nbsp;5707 cary      20   0 98.7m 4592 3060 R 99.9  0.0   0:33.57 
<br>
ompi1.3.3-bug     
<br>
&nbsp;5710 cary      20   0 98.6m 4388 2932 R 99.9  0.0   0:33.61 
<br>
ompi1.3.3-bug     
<br>
&nbsp;5713 cary      20   0 98.6m 4392 2936 R 99.9  0.0   0:33.61 
<br>
ompi1.3.3-bug     
<br>
&nbsp;5719 cary      20   0 98.6m 4396 2940 R 99.9  0.0   0:33.60 
<br>
ompi1.3.3-bug     
<br>
&nbsp;5722 cary      20   0 98.6m 4384 2928 R 99.9  0.0   0:33.61 
<br>
ompi1.3.3-bug     
<br>
&nbsp;5728 cary      20   0 98.6m 4408 2952 R 99.9  0.0   0:33.53 
<br>
ompi1.3.3-bug     
<br>
&nbsp;5725 cary      20   0 98.6m 4404 2948 R 99.6  0.0   0:33.57 ompi1.3.3-bug 
<br>
<p><p>OpenMPI configured with
<br>
<p>../configure --prefix=/usr/local/openmpi-1.2.9  
<br>
--with-wrapper-ldflags=-Wl,-rpath,/usr/local/openmpi-1.2.9/lib
<br>
<p>used to compile and execute:
<br>
<p>/usr/local/openmpi-1.2.9/bin/mpicxx ompi1.3.3-bug.cxx -o ompi1.3.3-bug
<br>
/usr/local/openmpi-1.2.9/bin/mpirun -np 8 ompi1.3.3-bug
<br>
<p>works just fine.
<br>
<p><p>So then I started looking for unitialized variables.  I rebuilt
<br>
OpenMPI, configured with
<br>
<p>../configure --prefix=/usr/local/openmpi-1.3.3-valg 
<br>
--with-valgrind=/contrib/valgrind 
<br>
--with-wrapper-ldflags=-Wl,-rpath,/usr/local/openmpi-1.3.3-valg/lib
<br>
<p>and used to to compile and execute:
<br>
<p>/usr/local/openmpi-1.3.3-valg/bin/mpicxx ompi1.3.3-bug.cxx -o ompi1.3.3-bug
<br>
/usr/local/openmpi-1.3.3-valg/bin/mpirun -np 8 valgrind ompi1.3.3-bug
<br>
<p><p>and one can get valgrind to segfault, as shown at the very end of this
<br>
email.  Other times it hangs on step 1 or another step.
<br>
<p>John Cary
<br>
<p>THE CODE
<br>
<p>$ cat ompi1.3.3-bug.cxx
<br>
<p><p>/**
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
<p>THE VALGRIND RUN
<br>
<p>octet.cary$ /usr/local/openmpi-1.3.3-valg/bin/mpirun -np 8 valgrind 
<br>
ompi1.3.3-bug
<br>
==902== Memcheck, a memory error detector
<br>
==902== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
<br>
==902== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
<br>
==902== Command: ompi1.3.3-bug
<br>
==902==
<br>
==905== Memcheck, a memory error detector
<br>
==905== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
<br>
==905== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
<br>
==905== Command: ompi1.3.3-bug
<br>
==905==
<br>
==908== Memcheck, a memory error detector
<br>
==908== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
<br>
==908== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
<br>
==908== Command: ompi1.3.3-bug
<br>
==908==
<br>
==911== Memcheck, a memory error detector
<br>
==911== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
<br>
==911== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
<br>
==911== Command: ompi1.3.3-bug
<br>
==911==
<br>
==914== Memcheck, a memory error detector
<br>
==914== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
<br>
==914== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
<br>
==914== Command: ompi1.3.3-bug
<br>
==914==
<br>
==917== Memcheck, a memory error detector
<br>
==917== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
<br>
==917== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
<br>
==917== Command: ompi1.3.3-bug
<br>
==917==
<br>
==920== Memcheck, a memory error detector
<br>
==920== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
<br>
==920== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
<br>
==920== Command: ompi1.3.3-bug
<br>
==920==
<br>
==923== Memcheck, a memory error detector
<br>
==923== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
<br>
==923== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
<br>
==923== Command: ompi1.3.3-bug
<br>
==923==
<br>
==917== Warning: client syscall munmap tried to modify addresses 
<br>
0xffffffffffffffff-0xffe
<br>
==902== Warning: client syscall munmap tried to modify addresses 
<br>
0xffffffffffffffff-0xffe
<br>
==905== Warning: client syscall munmap tried to modify addresses 
<br>
0xffffffffffffffff-0xffe
<br>
==914== Warning: client syscall munmap tried to modify addresses 
<br>
0xffffffffffffffff-0xffe
<br>
==911== Warning: client syscall munmap tried to modify addresses 
<br>
0xffffffffffffffff-0xffe
<br>
==920== Warning: client syscall munmap tried to modify addresses 
<br>
0xffffffffffffffff-0xffe
<br>
==923== Warning: client syscall munmap tried to modify addresses 
<br>
0xffffffffffffffff-0xffe
<br>
==908== Warning: client syscall munmap tried to modify addresses 
<br>
0xffffffffffffffff-0xffe
<br>
==902== Conditional jump or move depends on uninitialised value(s)
<br>
==902==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==902==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==902==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==902==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==902==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==902==
<br>
==902== Conditional jump or move depends on uninitialised value(s)
<br>
==902==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==902==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==902==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==902==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==902==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==902==
<br>
==911== Conditional jump or move depends on uninitialised value(s)
<br>
==911==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==911==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==911==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==911==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==911==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==911==
<br>
==902== Conditional jump or move depends on uninitialised value(s)
<br>
==902==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==902==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==902==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==902==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==902==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914== Conditional jump or move depends on uninitialised value(s)
<br>
==902==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==902==
<br>
==914==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==914==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==914==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==914==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==914==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==914==
<br>
==917== Conditional jump or move depends on uninitialised value(s)
<br>
==917==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==917==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==917==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==917==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==917==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==917==
<br>
==911== Conditional jump or move depends on uninitialised value(s)
<br>
==911==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==911==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==911==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==911==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==911==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==911==
<br>
==914== Conditional jump or move depends on uninitialised value(s)
<br>
==914==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==914==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==914==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==914==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==914==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==914==
<br>
==908== Conditional jump or move depends on uninitialised value(s)
<br>
==908==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==908==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==908==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==908==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==908==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==908==
<br>
==902== Conditional jump or move depends on uninitialised value(s)
<br>
==902==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==902==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==902==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==902==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==902==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==902==
<br>
==911== Conditional jump or move depends on uninitialised value(s)
<br>
==911==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==911==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923== Conditional jump or move depends on uninitialised value(s)
<br>
==911==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==911==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==911==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==911==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==911==
<br>
==923==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==923==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==920== Conditional jump or move depends on uninitialised value(s)
<br>
==923==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==923==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==923==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==923==
<br>
==920==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==920==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==920==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==920==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==920==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==920==
<br>
==914== Conditional jump or move depends on uninitialised value(s)
<br>
==914==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==914==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==914==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==914==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==914==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==914==
<br>
==917== Conditional jump or move depends on uninitialised value(s)
<br>
==917==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==917==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==917==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==917==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==917==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==917==
<br>
==917== Conditional jump or move depends on uninitialised value(s)
<br>
==908== Conditional jump or move depends on uninitialised value(s)
<br>
==908==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==908==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==908==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==908==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==908==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==908==
<br>
==917==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==917==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==917==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==917==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==917==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911== Conditional jump or move depends on uninitialised value(s)
<br>
==911==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==911==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==911==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==911==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==911==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==911==
<br>
==917==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==914== Conditional jump or move depends on uninitialised value(s)
<br>
==914==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==914==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==914==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==914==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==914==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==914==
<br>
==917==
<br>
==923== Conditional jump or move depends on uninitialised value(s)
<br>
==923==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==923==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==923==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==923==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==923==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==923==
<br>
==920== Conditional jump or move depends on uninitialised value(s)
<br>
==920==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==920==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==920==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==920==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==920==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==920==
<br>
==908== Conditional jump or move depends on uninitialised value(s)
<br>
==908==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==908==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==908==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==908==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==908==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==908==
<br>
==923== Conditional jump or move depends on uninitialised value(s)
<br>
==923==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==923==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920== Conditional jump or move depends on uninitialised value(s)
<br>
==920==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==920==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==923==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==923==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==923==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==923==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==923==
<br>
==920==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==920==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==920==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==920==
<br>
==905== Conditional jump or move depends on uninitialised value(s)
<br>
==905==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==905==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==905==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==905==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==905==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==905==
<br>
==917== Conditional jump or move depends on uninitialised value(s)
<br>
==917==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==917==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==917==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==917==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==917==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==917==
<br>
==908== Conditional jump or move depends on uninitialised value(s)
<br>
==908==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==908==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==908==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==908==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==908==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==908==
<br>
==905== Conditional jump or move depends on uninitialised value(s)
<br>
==905==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==905==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==905==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==905==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==905==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==905==
<br>
==923== Conditional jump or move depends on uninitialised value(s)
<br>
==923==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==923==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==923==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==923==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==923==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==923==
<br>
==920== Conditional jump or move depends on uninitialised value(s)
<br>
==920==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==920==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==920==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==920==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==920==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==920==
<br>
==905== Conditional jump or move depends on uninitialised value(s)
<br>
==905==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==905==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==905==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==905==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==905==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==905==
<br>
==917== Conditional jump or move depends on uninitialised value(s)
<br>
==917==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==917==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x4E3EC5F: ompi_free_list_resize (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x8C1F630: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==917==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==917==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==917==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==917==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==917==
<br>
==908== Conditional jump or move depends on uninitialised value(s)
<br>
==908==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==908==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x4E3EC5F: ompi_free_list_resize (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x8C1F630: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==908==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==908==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==908==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==908==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==908==
<br>
==923== Conditional jump or move depends on uninitialised value(s)
<br>
==923==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==923==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x4E3EC5F: ompi_free_list_resize (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x8C1F630: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==923==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==923==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==923==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==923==
<br>
==920== Conditional jump or move depends on uninitialised value(s)
<br>
==920==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==920==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x4E3EC5F: ompi_free_list_resize (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x8C1F630: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==920==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==920==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==920==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==920==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==920==
<br>
==905== Conditional jump or move depends on uninitialised value(s)
<br>
==905==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==905==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==905==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==905==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==905==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==905==
<br>
==905== Conditional jump or move depends on uninitialised value(s)
<br>
==905==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==905==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x4E3EC5F: ompi_free_list_resize (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x8C1F630: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==905==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==905==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==905==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==905==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==905==
<br>
==902== Conditional jump or move depends on uninitialised value(s)
<br>
==902==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==902==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x4E3EC5F: ompi_free_list_resize (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x8C1F630: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==902==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==902==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==902==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==902==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==902==
<br>
==911== Conditional jump or move depends on uninitialised value(s)
<br>
==911==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==911==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x4E3EC5F: ompi_free_list_resize (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x8C1F630: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==911==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==911==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==911==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==911==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==911==
<br>
==914== Conditional jump or move depends on uninitialised value(s)
<br>
==914==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
<br>
==914==    by 0x4E3EBDF: ompi_free_list_grow (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x4E3EC5F: ompi_free_list_resize (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x8C1F630: mca_btl_sm_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==914==    by 0x8816759: mca_bml_r2_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
<br>
==914==    by 0x8400274: mca_pml_ob1_add_procs (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
<br>
==914==    by 0x4E5B048: ompi_mpi_init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x4E79F65: PMPI_Init (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==914==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==914==
<br>
[octet:00923] *** Process received signal ***
<br>
[octet:00923] Signal: Segmentation fault (11)
<br>
[octet:00923] Signal code: Address not mapped (1)
<br>
[octet:00923] Failing at address: 0x40
<br>
[octet:00923] [ 0] /lib64/libpthread.so.0 [0x3825c0eee0]
<br>
[octet:00923] [ 1] 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so [0x8c21009]
<br>
[octet:00923] [ 2] 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libopen-pal.so.0(opal_progress+0x5a) 
<br>
[0x5324c9a]
<br>
[octet:00923] [ 3] /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0 [0x4e59d45]
<br>
[octet:00923] [ 4] 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_coll_tuned.so [0x9ccad2a]
<br>
[octet:00923] [ 5] 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_coll_tuned.so [0x9cd349e]
<br>
[octet:00923] [ 6] 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0(MPI_Barrier+0x72) [0x4e6fa32]
<br>
[octet:00923] [ 7] ompi1.3.3-bug(main+0x1ee) [0x409152]
<br>
[octet:00923] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd) [0x382501ea2d]
<br>
[octet:00923] [ 9] ompi1.3.3-bug [0x408ea9]
<br>
[octet:00923] *** End of error message ***
<br>
==923==
<br>
==923== Process terminating with default action of signal 11 (SIGSEGV)
<br>
==923==  Access not within mapped region at address 0x40
<br>
==923==    at 0x8C21009: mca_btl_sm_component_progress (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
<br>
==923==    by 0x5324C99: opal_progress (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libopen-pal.so.0.0.0)
<br>
==923==    by 0x4E59D44: ompi_request_default_wait_all (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x9CCAD29: ompi_coll_tuned_sendrecv_actual (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_coll_tuned.so)
<br>
==923==    by 0x9CD349D: ompi_coll_tuned_barrier_intra_recursivedoubling 
<br>
(in /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_coll_tuned.so)
<br>
==923==    by 0x4E6FA31: PMPI_Barrier (in 
<br>
/usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
<br>
==923==    by 0x409151: main (in /home/research/cary/ompi1.3.3-bug)
<br>
==923==  If you believe this happened as a result of a stack
<br>
==923==  overflow in your program's main thread (unlikely but
<br>
==923==  possible), you can try to increase the size of the
<br>
==923==  main thread stack using the --main-stacksize= flag.
<br>
==923==  The main thread stack size used in this run was 10485760.
<br>
==923==
<br>
==923== HEAP SUMMARY:
<br>
==923==     in use at exit: 2,062,803 bytes in 2,652 blocks
<br>
==923==   total heap usage: 10,244 allocs, 7,592 frees, 15,824,029 bytes 
<br>
allocated
<br>
==923==
<br>
==923== LEAK SUMMARY:
<br>
==923==    definitely lost: 1,700 bytes in 29 blocks
<br>
==923==    indirectly lost: 2,400 bytes in 1 blocks
<br>
==923==      possibly lost: 2,384 bytes in 22 blocks
<br>
==923==    still reachable: 2,056,319 bytes in 2,600 blocks
<br>
==923==         suppressed: 0 bytes in 0 blocks
<br>
==923== Rerun with --leak-check=full to see details of leaked memory
<br>
==923==
<br>
==923== For counts of detected and suppressed errors, rerun with: -v
<br>
==923== Use --track-origins=yes to see where uninitialised values come from
<br>
==923== ERROR SUMMARY: 5 errors from 5 contexts (suppressed: 7 from 7)
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 7 with PID 923 on node octet.carys.home 
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p><pre>
-- 
Tech-X Corp., 5621 Arapahoe Ave, Suite A, Boulder CO 80303
cary_at_[hidden], p 303-448-0727, f 303-448-7756, NEW CELL 303-881-8572
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10904.php">John R. Cary: "Re: [OMPI users] Openmpi failure on dual quad linux"</a>
<li><strong>Previous message:</strong> <a href="10902.php">ankur pachauri: "[OMPI users] MPI_Send and MPI_Recv not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10904.php">John R. Cary: "Re: [OMPI users] Openmpi failure on dual quad linux"</a>
<li><strong>Reply:</strong> <a href="10904.php">John R. Cary: "Re: [OMPI users] Openmpi failure on dual quad linux"</a>
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
