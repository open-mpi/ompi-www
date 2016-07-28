<?
$subject_val = "Re: [OMPI users] pure static &quot;mpirun&quot; launcher (Jeff Squyres) - now testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 15:46:20 2012" -->
<!-- isoreceived="20120130204620" -->
<!-- sent="Mon, 30 Jan 2012 15:46:15 -0500" -->
<!-- isosent="20120130204615" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pure static &amp;quot;mpirun&amp;quot; launcher (Jeff Squyres) - now testing" -->
<!-- id="AD58105B-8886-483F-BB22-AD282C7CE3B8_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="16F9DC7AC786F7488506CEDBB9F7298B025DB608F25A_at_mailbox1.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] pure static &quot;mpirun&quot; launcher (Jeff Squyres) - now testing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 15:46:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18322.php">Cable, Sam B Civ USAF AFMC AFRL/RVBXI: "[OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>Previous message:</strong> <a href="18320.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher (Jeff Squyres) - now testing"</a>
<li><strong>In reply to:</strong> <a href="18320.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher (Jeff Squyres) - now testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try running a dynamic version of your process through valgrind, or another memory-checking debugger and see if anything shows up.
<br>
<p><p>On Jan 30, 2012, at 2:50 PM, Ilias Miroslav wrote:
<br>
<p><span class="quotelev1">&gt; Well,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the simplest program,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       program main
</span><br>
<span class="quotelev1">&gt;        implicit none
</span><br>
<span class="quotelev1">&gt;        include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;        integer ierr, rank, size
</span><br>
<span class="quotelev1">&gt;        call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;        call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt;        call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierr)
</span><br>
<span class="quotelev1">&gt;        print *, &quot;Hello, world, I am &quot;, rank, &quot; of &quot;, size
</span><br>
<span class="quotelev1">&gt;        call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt;        end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is running, may be my larger application &quot;dirac.x&quot; is hurting static OpenMPI...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ilias_at_194.160.135.47:/tmp/ilias/test/simplest/./home/ilias/bin/ompi_ilp64_static/bin/mpif90 -fdefault-integer-8  hello.f
</span><br>
<span class="quotelev1">&gt; ilias_at_194.160.135.47:/tmp/ilias/test/simplest/.mpirun -v  -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt; Hello, world, I am                     1  of                     2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am                     0  of                     2
</span><br>
<span class="quotelev1">&gt; ilias_at_194.160.135.47:/tmp/ilias/test/simplest/.mpirun -v  -np 1 ./a.out
</span><br>
<span class="quotelev1">&gt; Hello, world, I am                     0  of                     1
</span><br>
<span class="quotelev1">&gt; ilias_at_194.160.135.47:/tmp/ilias/test/simplest/.mpirun -v  -np 4 ./a.out
</span><br>
<span class="quotelev1">&gt; Hello, world, I am                     3  of                     4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am                     1  of                     4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am                     0  of                     4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am                     2  of                     4
</span><br>
<span class="quotelev1">&gt; ilias_at_194.160.135.47:/tmp/ilias/test/simplest/.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: Ilias Miroslav
</span><br>
<span class="quotelev1">&gt; Sent: Monday, January 30, 2012 8:40 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] pure static &quot;mpirun&quot; launcher (Jeff Squyres) - now testing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what segfaulted ? I am not sure...maybe application is bug showing up with static OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I try to compile &amp; run simplest MPI example and I shall let you know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In betweem I am attaching debugger output would help to track this bug:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Backtrace for this error:
</span><br>
<span class="quotelev1">&gt;  + function __restore_rt (0x255B110)
</span><br>
<span class="quotelev1">&gt;    from file sigaction.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; slave (mpi processes are from #10):
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x00000000023622db in sm_fifo_read (fifo=0x7f77cc908300) at btl_sm.h:324
</span><br>
<span class="quotelev1">&gt; #1  0x000000000236309b in mca_btl_sm_component_progress () at btl_sm_component.c:612
</span><br>
<span class="quotelev1">&gt; #2  0x0000000002304f26 in opal_progress () at runtime/opal_progress.c:207
</span><br>
<span class="quotelev1">&gt; #3  0x00000000023c8a77 in opal_condition_wait (c=0xf78bf80, m=0xf78c000) at ../../../../opal/threads/condition.h:100
</span><br>
<span class="quotelev1">&gt; #4  0x00000000023c8eb7 in ompi_request_wait_completion (req=0x10602f00) at ../../../../ompi/request/request.h:378
</span><br>
<span class="quotelev1">&gt; #5  0x00000000023ca661 in mca_pml_ob1_send (buf=0xefbb2a0, count=1000, datatype=0x2901180, dst=1, tag=-17,
</span><br>
<span class="quotelev1">&gt;    sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0xf772b20) at pml_ob1_isend.c:125
</span><br>
<span class="quotelev1">&gt; #6  0x000000000236e978 in ompi_coll_tuned_bcast_intra_split_bintree (buffer=0xefb9360, count=2000, datatype=0x2901180, root=0,
</span><br>
<span class="quotelev1">&gt;    comm=0xf772b20, module=0x1060b7f0, segsize=1024) at coll_tuned_bcast.c:590
</span><br>
<span class="quotelev1">&gt; #7  0x0000000002370834 in ompi_coll_tuned_bcast_intra_dec_fixed (buff=0xefb9360, count=2000, datatype=0x2901180, root=0,
</span><br>
<span class="quotelev1">&gt;    comm=0xf772b20, module=0x1060b7f0) at coll_tuned_decision_fixed.c:262
</span><br>
<span class="quotelev1">&gt; #8  0x0000000002371c52 in mca_coll_sync_bcast (buff=0xefb9360, count=2000, datatype=0x2901180, root=0, comm=0xf772b20,
</span><br>
<span class="quotelev1">&gt;    module=0x1060b590) at coll_sync_bcast.c:44
</span><br>
<span class="quotelev1">&gt; #9  0x0000000002249662 in PMPI_Bcast (buffer=0xefb9360, count=2000, datatype=0x2901180, root=0, comm=0xf772b20) at pbcast.c:110
</span><br>
<span class="quotelev1">&gt; #10 0x000000000221744a in mpi_bcast_f (
</span><br>
<span class="quotelev1">&gt;    buffer=0xefb9360 &quot;\026\372`\031\033\336O@\005\031\001\025\216\260&amp;@\301\343&#219;&#187;\006\375\003@\251L1\aAG\344?\301\343&#219;&#187;\006\375\003@\251L1\aAG\344?HN&amp;n\025\233\\@\252\325WW\005^4_at_8\333&#220;&#152;\236`\027@\025\253\006an\267\367?Ih&#203;&#185;\024W\324?8\021\375\332\372\351\273?8\333&#220;&#152;\236`\027@\025\253\006an\267\367?Ih&#203;&#185;\024W\324?8\021\375\332\372\351\273?\301\343&#219;&#187;\006\375\003@\251L1\aAG\344?\026\372`\031\033\336O@\005\031\001\025\216\260&amp;@\301\343&#219;&#187;\006\375\003@\251L1\aAG\344?\301\343&#219;&#187;\006\375\003@\251L1\aAG\344?8\333&#220;&#152;\236`\027@&quot;...,
</span><br>
<span class="quotelev1">&gt;    count=0x2624818, datatype=0x26037a0, root=0xf73ba90, comm=0x26247a0, ierr=0x7fffbb34ec78) at pbcast_f.c:70
</span><br>
<span class="quotelev1">&gt; #11 0x000000000041ab68 in interface_to_mpi::interface_mpi_bcast_r1 (x=&lt;value optimized out&gt;, ndim=2000, root_proc=0, communicator=0)
</span><br>
<span class="quotelev1">&gt;    at /home/ilias/qch_work/qch_software/dirac_git/dirac-git-repo/interface_mpi/interface_to_mpi.F90:446
</span><br>
<span class="quotelev1">&gt; #12 0x0000000000e95a37 in get_primitf () at /home/ilias/qch_work/qch_software/dirac_git/dirac-git-repo/abacus/herpar.F:1464
</span><br>
<span class="quotelev1">&gt; #13 0x0000000000e99ff7 in sdinit (dmat=..., ndmat=2, irepdm=..., ifctyp=..., itype=9, maxdif=&lt;value optimized out&gt;, iatom=0,
</span><br>
<span class="quotelev1">&gt;    nodv=.TRUE., nopv=.TRUE., nocont=.FALSE., tktime=.FALSE., retur=.FALSE., i2typ=1, icedif=3, screen=9.9999999999999998e-13,
</span><br>
<span class="quotelev1">&gt;    gabrao=..., dmrao=..., dmrso=...) at /home/ilias/qch_work/qch_software/dirac_git/dirac-git-repo/abacus/herpar.F:566
</span><br>
<span class="quotelev1">&gt; #14 0x0000000000e9af35 in her_pardrv (work=..., lwork=&lt;value optimized out&gt;, fmat=..., dmat=..., ndmat=2, irepdm=..., ifctyp=...,
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; and master:
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x000000000058de18 in poll ()
</span><br>
<span class="quotelev1">&gt; #1  0x0000000000496f58 in poll_dispatch ()
</span><br>
<span class="quotelev1">&gt; #2  0x0000000000471649 in opal_libevent2013_event_base_loop ()
</span><br>
<span class="quotelev1">&gt; #3  0x00000000004016ea in orterun (argc=4, argv=0x7fff484b6478) at orterun.c:866
</span><br>
<span class="quotelev1">&gt; #4  0x00000000004005d4 in main (argc=4, argv=0x7fff484b6478) at main.c:13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: Ilias Miroslav
</span><br>
<span class="quotelev1">&gt; Sent: Monday, January 30, 2012 7:24 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: pure static &quot;mpirun&quot; launcher (Jeff Squyres) - now testing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for the fix;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I downloaded the Open MPI trunk and have built it up,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the (most recent) revision 25818 is giving this error and hangs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/ilias/bin/ompi_ilp64_static/bin/mpirun -np 2   ./dirac.x
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; Program received signal 11 (SIGSEGV): Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Backtrace for this error:
</span><br>
<span class="quotelev1">&gt;  + function __restore_rt (0x255B110)
</span><br>
<span class="quotelev1">&gt;    from file sigaction.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configuration:
</span><br>
<span class="quotelev1">&gt;  $ ./configure --prefix=/home/ilias/bin/ompi_ilp64_static --without-memory-manager LDFLAGS=--static --disable-shared --enable-static CXX=g++ CC=gcc F77=gfortran FC=gfortran FFLAGS=-m64 -fdefault-integer-8 FCFLAGS=-m64 -fdefault-integer-8 CFLAGS=-m64 CXXFLAGS=-m64 --enable-ltdl-convenience --no-create --no-recursion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;dirac.x&quot; static executable was obtained with this static openmpi:
</span><br>
<span class="quotelev1">&gt;   write(lupri, '(a)') ' System                   | Linux-2.6.30-1-amd64'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') ' Processor                | x86_64'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') ' Internal math            | ON'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') ' 64-bit integers          | ON'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') ' MPI                      | ON'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') ' Fortran compiler         | /home/ilias/bin/ompi_ilp64_static/bin/mpif90'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') ' Fortran compiler version | GNU Fortran (Debian 4.6.2-9) 4.6.2'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') ' Fortran flags            | -g -fcray-pointer -fbacktrace -DVAR_GFORTRAN -DVAR'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') '                          | _MFDS -fno-range-check -static -fdefault-integer-8'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') '                          |   -O3 -funroll-all-loops'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') ' C compiler               | /home/ilias/bin/ompi_ilp64_static/bin/mpicc'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') ' C compiler version       | gcc (Debian 4.6.2-9) 4.6.2'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') ' C flags                  | -g -static -fpic -O2 -Wno-unused'
</span><br>
<span class="quotelev1">&gt;    write(lupri, '(a)') ' static libraries linking | ON'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ldd dirac.x
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help, please ? How to include MPI-debug statements ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   1. Re: pure static &quot;mpirun&quot; launcher (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Fri, 27 Jan 2012 13:44:49 -0500
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] pure static &quot;mpirun&quot; launcher
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;BE6DBE92-784C-4594-8F4A-397A19C55EEA_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah ha, I think I got it.  There was actually a bug about disabling the memory manager in trunk/v1.5.x/v1.4.x.  I fixed it on the trunk and scheduled it for v1.6 (since we're trying very hard to get v1.5.5 out the door) and v1.4.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the OMPI trunk on RHEL 5 with gcc 4.4.6, I can do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --without-memory-manager LDFLAGS=--static --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And get a fully static set of OMPI executables.  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [10:41] svbu-mpi:~ % cd $prefix/bin
</span><br>
<span class="quotelev1">&gt; [10:41] svbu-mpi:/home/jsquyres/bogus/bin % ldd *
</span><br>
<span class="quotelev1">&gt; mpic++:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; mpicc:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; mpiCC:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; mpicxx:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; mpiexec:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; mpif77:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; mpif90:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; mpirun:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; ompi-clean:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; ompi_info:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; ompi-ps:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; ompi-server:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; ompi-top:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; opal_wrapper:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; ortec++:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; ortecc:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; orteCC:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; orte-clean:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; orted:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; orte-info:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; orte-ps:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; orterun:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; orte-top:
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think the answer here is: it depends on a few factors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Need that bug fix that I just committed.
</span><br>
<span class="quotelev1">&gt; 2. Libtool is stripping out -static (and/or --static?).  So you have to find some other flags to make your compiler/linker do static.
</span><br>
<span class="quotelev1">&gt; 3. Your OS has to support static builds.  For example, RHEL6 doesn't install libc.a by default (it's apparently on the optional DVD, which I don't have).  My RHEL 5.5 install does have it, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2012, at 11:16 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've tried a bunch of variations on this, but I'm actually getting stymied by my underlying OS not supporting static linking properly.  :-\
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do see that Libtool is stripping out the &quot;-static&quot; standalone flag that you passed into LDFLAGS.  Yuck.  What's -Wl,-E?  Can you try &quot;-Wl,-static&quot; instead?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 25, 2012, at 1:24 AM, Ilias Miroslav wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need own static &quot;mpirun&quot; for porting (together with the static executable) onto various (unknown) grid servers. In grid computing one can not expect OpenMPI-ILP64 installtion on each computing element.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff: I tried LDFLAGS in configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ilias_at_194.160.135.47:~/bin/ompi-ilp64_full_static/openmpi-1.4.4/../configure --prefix=/home/ilias/bin/ompi-ilp64_full_static -without-memory-manager --without-libnuma --enable-static --disable-shared CXX=g++ CC=gcc F77=gfortran FC=gfortran FFLAGS=&quot;-m64 -fdefault-integer-8 -static&quot; FCFLAGS=&quot;-m64 -fdefault-integer-8 -static&quot; CFLAGS=&quot;-m64 -static&quot; CXXFLAGS=&quot;-m64 -static&quot;  LDFLAGS=&quot;-static  -Wl,-E&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but still got dynamic, not static &quot;mpirun&quot;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ilias_at_194.160.135.47:~/bin/ompi-ilp64_full_static/bin/.ldd ./mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     linux-vdso.so.1 =&gt;  (0x00007fff6090c000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007fd7277cf000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libnsl.so.1 =&gt; /lib/x86_64-linux-gnu/libnsl.so.1 (0x00007fd7275b7000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007fd7273b3000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007fd727131000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007fd726f15000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007fd726b90000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /lib64/ld-linux-x86-64.so.2 (0x00007fd7279ef000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help please ? config.log is here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://docs.google.com/open?id=0B8qBHKNhZAipNTNkMzUxZDEtNjJmZi00YzY3LWI4MmYtY2RkZDVkMjhiOTM1">https://docs.google.com/open?id=0B8qBHKNhZAipNTNkMzUxZDEtNjJmZi00YzY3LWI4MmYtY2RkZDVkMjhiOTM1</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best, Miro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, 24 Jan 2012 11:55:21 -0500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] pure static &quot;mpirun&quot; launcher
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;A86D3721-9BF8-4A7D-B745-32E60652101F_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ilias: Have you simply tried building Open MPI with flags that force static linking?  E.g., something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --enable-static --disable-shared LDFLAGS=-Wl,-static
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.e., put in LDFLAGS whatever flags your compiler/linker needs to force static linking.  These LDFLAGS will be applied to all of Open MPI's executables, including mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 24, 2012, at 10:28 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Good point! I'm traveling this week with limited resources, but will try to address when able.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 24, 2012, at 7:07 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am 24.01.2012 um 15:49 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm a little confused. Building procs static makes sense as libraries may not be available on compute nodes. However, mpirun is only executed in one place, usually the head node where it was built. So there is less reason to build it purely static.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Are you trying to move mpirun somewhere? Or is it the daemons that mpirun launches that are the real problem?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This depends: if you have a queuing system, the master node of a parallel job may be one of the slave nodes already where the jobscript runs. Nevertheless I have the nodes uniform, but I saw places where it wasn't the case.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; An option would be to have a special queue, which will execute the jobscript always on the headnode (i.e. without generating any load) and use only non-local granted slots for mpirun. For this it might be necssary to have a high number of slots on the headnode for this queue, and request always one slot on this machine in addition to the necessary ones on the computing node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jan 24, 2012, at 5:54 AM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear experts,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; following <a href="http://www.open-mpi.org/faq/?category=building#static-build">http://www.open-mpi.org/faq/?category=building#static-build</a> I successfully build static OpenMPI library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Using such prepared library I succeeded in building parallel static executable - dirac.x (ldd dirac.x-not a dynamic executable).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The problem remains, however,  with the mpirun (orterun) launcher.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; While on the local machine, where I compiled both static OpenMPI &amp; static dirac.x  I am able to launch parallel job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;OpenMPI_static&gt;/mpirun -np 2 dirac.x ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can not lauch it elsewhere, because &quot;mpirun&quot; is dynamically linked, thus machine dependent:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ldd mpirun:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  linux-vdso.so.1 =&gt;  (0x00007fff13792000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007f40f8cab000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  libnsl.so.1 =&gt; /lib/x86_64-linux-gnu/libnsl.so.1 (0x00007f40f8a93000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007f40f888f000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007f40f860d000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f40f83f1000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f40f806c000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  /lib64/ld-linux-x86-64.so.2 (0x00007f40f8ecb000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please how to I build &quot;pure&quot; static mpirun launcher, usable (in my case together with static dirac.x) also on other computers  ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks, Miro
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; RNDr. Miroslav Ilia?, PhD.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Katedra ch?mie
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Fakulta pr?rodn?ch vied
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Univerzita Mateja Bela
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tajovsk?ho 40
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 97400 Bansk? Bystrica
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tel: +421 48 446 7351
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; email : Miroslav.Ilias_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Department of Chemistry
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Faculty of Natural Sciences
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Matej Bel University
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tajovsk?ho 40
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 97400 Banska Bystrica
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slovakia
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tel: +421 48 446 7351
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; email :  Miroslav.Ilias_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; End of users Digest, Vol 2133, Issue 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18322.php">Cable, Sam B Civ USAF AFMC AFRL/RVBXI: "[OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>Previous message:</strong> <a href="18320.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher (Jeff Squyres) - now testing"</a>
<li><strong>In reply to:</strong> <a href="18320.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher (Jeff Squyres) - now testing"</a>
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
