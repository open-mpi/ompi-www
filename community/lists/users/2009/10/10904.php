<?
$subject_val = "Re: [OMPI users] Openmpi failure on dual quad linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 10 12:20:45 2009" -->
<!-- isoreceived="20091010162045" -->
<!-- sent="Sat, 10 Oct 2009 10:20:39 -0600" -->
<!-- isosent="20091010162039" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi failure on dual quad linux" -->
<!-- id="4AD0B457.9020008_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AD0B1CB.2020601_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi failure on dual quad linux<br>
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-10 12:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10905.php">Sangamesh B: "[OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Previous message:</strong> <a href="10903.php">John R. Cary: "[OMPI users] Openmpi failure on dual quad linux"</a>
<li><strong>In reply to:</strong> <a href="10903.php">John R. Cary: "[OMPI users] Openmpi failure on dual quad linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More data:
<br>
<p>We have observed this failure on 3 different 8-core, 64-bit boxes, the 
<br>
previously noted
<br>
box plus
<br>
<p>benten.caryjr$ uname -a
<br>
*** 2.6.9-89.0.7.ELsmp #1 SMP Wed Aug 5 14:08:20 EDT 2009 x86_64 x86_64 
<br>
x86_64 GNU/Linux
<br>
*** 2.6.29.4-167.fc11.x86_64 #1 SMP Wed May 27 17:27:08 EDT 2009 x86_64 
<br>
x86_64 x86_64 GNU/Linux
<br>
<p><p>It does not appear to occur on a 4-core, 32-bit box:
<br>
multipole.cary$ uname -a
<br>
*** 2.6.25.14-108.fc9.i686 #1 SMP Mon Aug 4 14:08:11 EDT 2008 i686 
<br>
athlon i386 GNU/Linux
<br>
which has an intermediate kernel.
<br>
<p>JC
<br>
<p><p><p>John R. Cary wrote:
<br>
<span class="quotelev1">&gt; We have been getting hangs and failures of openmpi-1.3.X
</span><br>
<span class="quotelev1">&gt; on an 8-core FC11 box.  Details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux octet.carys.home 2.6.30.5-43.fc11.x86_64 #1 SMP Thu Aug 27 
</span><br>
<span class="quotelev1">&gt; 21:39:52 EDT 2009 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with 2 quad-core cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiler:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g++ (GCC) 4.4.1 20090725 (Red Hat 4.4.1-2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code is later in this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI configured with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=/usr/local/openmpi-1.3.3  
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags=-Wl,-rpath,/usr/local/openmpi-1.3.3/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; used to compile and execute:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3/bin/mpicxx ompi1.3.3-bug.cxx -o ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3/bin/mpirun -np 8 ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hangs on various steps: 10, 39, 125.  Top shows the code
</span><br>
<span class="quotelev1">&gt; using all resources:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  
</span><br>
<span class="quotelev1">&gt; COMMAND          5716 cary      20   0 98.6m 4396 2940 R 100.3  0.0   
</span><br>
<span class="quotelev1">&gt; 0:33.58 ompi1.3.3-bug    5707 cary      20   0 98.7m 4592 3060 R 99.9  
</span><br>
<span class="quotelev1">&gt; 0.0   0:33.57 ompi1.3.3-bug     5710 cary      20   0 98.6m 4388 2932 
</span><br>
<span class="quotelev1">&gt; R 99.9  0.0   0:33.61 ompi1.3.3-bug     5713 cary      20   0 98.6m 
</span><br>
<span class="quotelev1">&gt; 4392 2936 R 99.9  0.0   0:33.61 ompi1.3.3-bug     5719 cary      20   
</span><br>
<span class="quotelev1">&gt; 0 98.6m 4396 2940 R 99.9  0.0   0:33.60 ompi1.3.3-bug     5722 
</span><br>
<span class="quotelev1">&gt; cary      20   0 98.6m 4384 2928 R 99.9  0.0   0:33.61 
</span><br>
<span class="quotelev1">&gt; ompi1.3.3-bug     5728 cary      20   0 98.6m 4408 2952 R 99.9  0.0   
</span><br>
<span class="quotelev1">&gt; 0:33.53 ompi1.3.3-bug     5725 cary      20   0 98.6m 4404 2948 R 
</span><br>
<span class="quotelev1">&gt; 99.6  0.0   0:33.57 ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI configured with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=/usr/local/openmpi-1.2.9  
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags=-Wl,-rpath,/usr/local/openmpi-1.2.9/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; used to compile and execute:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.9/bin/mpicxx ompi1.3.3-bug.cxx -o ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.9/bin/mpirun -np 8 ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; works just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So then I started looking for unitialized variables.  I rebuilt
</span><br>
<span class="quotelev1">&gt; OpenMPI, configured with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=/usr/local/openmpi-1.3.3-valg 
</span><br>
<span class="quotelev1">&gt; --with-valgrind=/contrib/valgrind 
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags=-Wl,-rpath,/usr/local/openmpi-1.3.3-valg/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and used to to compile and execute:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/bin/mpicxx ompi1.3.3-bug.cxx -o 
</span><br>
<span class="quotelev1">&gt; ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/bin/mpirun -np 8 valgrind ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and one can get valgrind to segfault, as shown at the very end of this
</span><br>
<span class="quotelev1">&gt; email.  Other times it hangs on step 1 or another step.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; John Cary
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; THE CODE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat ompi1.3.3-bug.cxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt; * A simple test program to demonstrate a problem in OpenMPI 1.3
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // mpi includes
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // std includes
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;vector&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // useful hashdefine
</span><br>
<span class="quotelev1">&gt; #define ARRAY_SIZE 250
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt; * Main driver
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt; // Initialize MPI
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
<span class="quotelev1">&gt; // Create some data to pass around
</span><br>
<span class="quotelev1">&gt;  std::vector&lt;double&gt; d(ARRAY_SIZE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // Initialize to some values if we aren't rank 0
</span><br>
<span class="quotelev1">&gt;  if ( rk )
</span><br>
<span class="quotelev1">&gt;    for ( unsigned i = 0; i &lt; ARRAY_SIZE; ++i )
</span><br>
<span class="quotelev1">&gt;      d[i] = 2*i + 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // Loop until this breaks
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
<span class="quotelev1">&gt; // Finalize MPI
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; THE VALGRIND RUN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; octet.cary$ /usr/local/openmpi-1.3.3-valg/bin/mpirun -np 8 valgrind 
</span><br>
<span class="quotelev1">&gt; ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; ==902== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==902== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==902== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==902== Command: ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; ==902==
</span><br>
<span class="quotelev1">&gt; ==905== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==905== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==905== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==905== Command: ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; ==905==
</span><br>
<span class="quotelev1">&gt; ==908== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==908== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==908== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==908== Command: ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; ==908==
</span><br>
<span class="quotelev1">&gt; ==911== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==911== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==911== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==911== Command: ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; ==911==
</span><br>
<span class="quotelev1">&gt; ==914== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==914== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==914== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==914== Command: ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; ==914==
</span><br>
<span class="quotelev1">&gt; ==917== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==917== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==917== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==917== Command: ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; ==917==
</span><br>
<span class="quotelev1">&gt; ==920== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==920== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==920== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==920== Command: ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; ==920==
</span><br>
<span class="quotelev1">&gt; ==923== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==923== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==923== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==923== Command: ompi1.3.3-bug
</span><br>
<span class="quotelev1">&gt; ==923==
</span><br>
<span class="quotelev1">&gt; ==917== Warning: client syscall munmap tried to modify addresses 
</span><br>
<span class="quotelev1">&gt; 0xffffffffffffffff-0xffe
</span><br>
<span class="quotelev1">&gt; ==902== Warning: client syscall munmap tried to modify addresses 
</span><br>
<span class="quotelev1">&gt; 0xffffffffffffffff-0xffe
</span><br>
<span class="quotelev1">&gt; ==905== Warning: client syscall munmap tried to modify addresses 
</span><br>
<span class="quotelev1">&gt; 0xffffffffffffffff-0xffe
</span><br>
<span class="quotelev1">&gt; ==914== Warning: client syscall munmap tried to modify addresses 
</span><br>
<span class="quotelev1">&gt; 0xffffffffffffffff-0xffe
</span><br>
<span class="quotelev1">&gt; ==911== Warning: client syscall munmap tried to modify addresses 
</span><br>
<span class="quotelev1">&gt; 0xffffffffffffffff-0xffe
</span><br>
<span class="quotelev1">&gt; ==920== Warning: client syscall munmap tried to modify addresses 
</span><br>
<span class="quotelev1">&gt; 0xffffffffffffffff-0xffe
</span><br>
<span class="quotelev1">&gt; ==923== Warning: client syscall munmap tried to modify addresses 
</span><br>
<span class="quotelev1">&gt; 0xffffffffffffffff-0xffe
</span><br>
<span class="quotelev1">&gt; ==908== Warning: client syscall munmap tried to modify addresses 
</span><br>
<span class="quotelev1">&gt; 0xffffffffffffffff-0xffe
</span><br>
<span class="quotelev1">&gt; ==902== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==902==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==902==
</span><br>
<span class="quotelev1">&gt; ==902== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==902==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==902==
</span><br>
<span class="quotelev1">&gt; ==911== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==911==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==911==
</span><br>
<span class="quotelev1">&gt; ==902== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==902==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==902==
</span><br>
<span class="quotelev1">&gt; ==914==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==914==
</span><br>
<span class="quotelev1">&gt; ==917== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==917==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==917==
</span><br>
<span class="quotelev1">&gt; ==911== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==911==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==911==
</span><br>
<span class="quotelev1">&gt; ==914== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==914==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==914==
</span><br>
<span class="quotelev1">&gt; ==908== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==908==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==908==
</span><br>
<span class="quotelev1">&gt; ==902== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==902==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==902==
</span><br>
<span class="quotelev1">&gt; ==911== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==911==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==911==
</span><br>
<span class="quotelev1">&gt; ==923==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==920== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==923==
</span><br>
<span class="quotelev1">&gt; ==920==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==920==
</span><br>
<span class="quotelev1">&gt; ==914== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==914==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==914==
</span><br>
<span class="quotelev1">&gt; ==917== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==917==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==917==
</span><br>
<span class="quotelev1">&gt; ==917== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==908== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==908==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==908==
</span><br>
<span class="quotelev1">&gt; ==917==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==911==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==911==
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==914== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==914==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==914==
</span><br>
<span class="quotelev1">&gt; ==917==
</span><br>
<span class="quotelev1">&gt; ==923== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==923==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==923==
</span><br>
<span class="quotelev1">&gt; ==920== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==920==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==920==
</span><br>
<span class="quotelev1">&gt; ==908== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==908==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==908==
</span><br>
<span class="quotelev1">&gt; ==923== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==923==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==920==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==923==
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==920==
</span><br>
<span class="quotelev1">&gt; ==905== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==905==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8C1F94D: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==905==
</span><br>
<span class="quotelev1">&gt; ==917== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==917==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==917==
</span><br>
<span class="quotelev1">&gt; ==908== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==908==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==908==
</span><br>
<span class="quotelev1">&gt; ==905== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==905==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8C1FA22: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==905==
</span><br>
<span class="quotelev1">&gt; ==923== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==923==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==923==
</span><br>
<span class="quotelev1">&gt; ==920== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==920==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==920==
</span><br>
<span class="quotelev1">&gt; ==905== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==905==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8C1FA93: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==905==
</span><br>
<span class="quotelev1">&gt; ==917== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==917==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E3EC5F: ompi_free_list_resize (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8C1F630: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==917==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==917==
</span><br>
<span class="quotelev1">&gt; ==908== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==908==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E3EC5F: ompi_free_list_resize (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8C1F630: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==908==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==908==
</span><br>
<span class="quotelev1">&gt; ==923== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==923==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E3EC5F: ompi_free_list_resize (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8C1F630: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==923==
</span><br>
<span class="quotelev1">&gt; ==920== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==920==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E3EC5F: ompi_free_list_resize (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8C1F630: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==920==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==920==
</span><br>
<span class="quotelev1">&gt; ==905== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==905==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8C1F0FC: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==905==
</span><br>
<span class="quotelev1">&gt; ==905== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==905==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E3EC5F: ompi_free_list_resize (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8C1F630: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==905==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==905==
</span><br>
<span class="quotelev1">&gt; ==902== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==902==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E3EC5F: ompi_free_list_resize (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8C1F630: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==902==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==902==
</span><br>
<span class="quotelev1">&gt; ==911== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==911==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E3EC5F: ompi_free_list_resize (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8C1F630: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==911==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==911==
</span><br>
<span class="quotelev1">&gt; ==914== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==914==    at 0x7BDFD64: mca_mpool_sm_alloc (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_mpool_sm.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E3EBDF: ompi_free_list_grow (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E3EC5F: ompi_free_list_resize (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8C1F630: mca_btl_sm_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8816759: mca_bml_r2_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x8400274: mca_pml_ob1_add_procs (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E5B048: ompi_mpi_init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x4E79F65: PMPI_Init (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==914==    by 0x408F99: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==914==
</span><br>
<span class="quotelev1">&gt; [octet:00923] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [octet:00923] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [octet:00923] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [octet:00923] Failing at address: 0x40
</span><br>
<span class="quotelev1">&gt; [octet:00923] [ 0] /lib64/libpthread.so.0 [0x3825c0eee0]
</span><br>
<span class="quotelev1">&gt; [octet:00923] [ 1] 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so [0x8c21009]
</span><br>
<span class="quotelev1">&gt; [octet:00923] [ 2] 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libopen-pal.so.0(opal_progress+0x5a) 
</span><br>
<span class="quotelev1">&gt; [0x5324c9a]
</span><br>
<span class="quotelev1">&gt; [octet:00923] [ 3] /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; [0x4e59d45]
</span><br>
<span class="quotelev1">&gt; [octet:00923] [ 4] 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_coll_tuned.so [0x9ccad2a]
</span><br>
<span class="quotelev1">&gt; [octet:00923] [ 5] 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_coll_tuned.so [0x9cd349e]
</span><br>
<span class="quotelev1">&gt; [octet:00923] [ 6] 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0(MPI_Barrier+0x72) 
</span><br>
<span class="quotelev1">&gt; [0x4e6fa32]
</span><br>
<span class="quotelev1">&gt; [octet:00923] [ 7] ompi1.3.3-bug(main+0x1ee) [0x409152]
</span><br>
<span class="quotelev1">&gt; [octet:00923] [ 8] /lib64/libc.so.6(__libc_start_main+0xfd) 
</span><br>
<span class="quotelev1">&gt; [0x382501ea2d]
</span><br>
<span class="quotelev1">&gt; [octet:00923] [ 9] ompi1.3.3-bug [0x408ea9]
</span><br>
<span class="quotelev1">&gt; [octet:00923] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ==923==
</span><br>
<span class="quotelev1">&gt; ==923== Process terminating with default action of signal 11 (SIGSEGV)
</span><br>
<span class="quotelev1">&gt; ==923==  Access not within mapped region at address 0x40
</span><br>
<span class="quotelev1">&gt; ==923==    at 0x8C21009: mca_btl_sm_component_progress (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x5324C99: opal_progress (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E59D44: ompi_request_default_wait_all (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x9CCAD29: ompi_coll_tuned_sendrecv_actual (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_coll_tuned.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x9CD349D: 
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_barrier_intra_recursivedoubling (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/openmpi/mca_coll_tuned.so)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x4E6FA31: PMPI_Barrier (in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.3-valg/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==923==    by 0x409151: main (in /home/research/cary/ompi1.3.3-bug)
</span><br>
<span class="quotelev1">&gt; ==923==  If you believe this happened as a result of a stack
</span><br>
<span class="quotelev1">&gt; ==923==  overflow in your program's main thread (unlikely but
</span><br>
<span class="quotelev1">&gt; ==923==  possible), you can try to increase the size of the
</span><br>
<span class="quotelev1">&gt; ==923==  main thread stack using the --main-stacksize= flag.
</span><br>
<span class="quotelev1">&gt; ==923==  The main thread stack size used in this run was 10485760.
</span><br>
<span class="quotelev1">&gt; ==923==
</span><br>
<span class="quotelev1">&gt; ==923== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==923==     in use at exit: 2,062,803 bytes in 2,652 blocks
</span><br>
<span class="quotelev1">&gt; ==923==   total heap usage: 10,244 allocs, 7,592 frees, 15,824,029 
</span><br>
<span class="quotelev1">&gt; bytes allocated
</span><br>
<span class="quotelev1">&gt; ==923==
</span><br>
<span class="quotelev1">&gt; ==923== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==923==    definitely lost: 1,700 bytes in 29 blocks
</span><br>
<span class="quotelev1">&gt; ==923==    indirectly lost: 2,400 bytes in 1 blocks
</span><br>
<span class="quotelev1">&gt; ==923==      possibly lost: 2,384 bytes in 22 blocks
</span><br>
<span class="quotelev1">&gt; ==923==    still reachable: 2,056,319 bytes in 2,600 blocks
</span><br>
<span class="quotelev1">&gt; ==923==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==923== Rerun with --leak-check=full to see details of leaked memory
</span><br>
<span class="quotelev1">&gt; ==923==
</span><br>
<span class="quotelev1">&gt; ==923== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==923== Use --track-origins=yes to see where uninitialised values come 
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; ==923== ERROR SUMMARY: 5 errors from 5 contexts (suppressed: 7 from 7)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 7 with PID 923 on node 
</span><br>
<span class="quotelev1">&gt; octet.carys.home exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Tech-X Corp., 5621 Arapahoe Ave, Suite A, Boulder CO 80303
cary_at_[hidden], p 303-448-0727, f 303-448-7756, NEW CELL 303-881-8572
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10905.php">Sangamesh B: "[OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Previous message:</strong> <a href="10903.php">John R. Cary: "[OMPI users] Openmpi failure on dual quad linux"</a>
<li><strong>In reply to:</strong> <a href="10903.php">John R. Cary: "[OMPI users] Openmpi failure on dual quad linux"</a>
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
