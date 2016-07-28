<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 30 21:05:07 2006" -->
<!-- isoreceived="20060131020507" -->
<!-- sent="Mon, 30 Jan 2006 18:05:01 -0800" -->
<!-- isosent="20060131020501" -->
<!-- name="Glenn Morris" -->
<!-- email="gmorris_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Trouble combining OpenMPI and OpenMP" -->
<!-- id="8ar76p40fm.fsf_at_iris01.slac.stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="10BDE040-D925-43B3-9DD2-0E52D3AB559A_at_open-mpi.org" -->
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
<strong>From:</strong> Glenn Morris (<em>gmorris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-30 21:05:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0548.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0546.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0537.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for persevering with this. I'm far from sure that the
<br>
information I am providing is of much use, largely because I'm pretty
<br>
confused about what's going on. Anyway...
<br>
<p><p>Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Can you rebuild Open MPI with debugging symbols (just setting CFLAGS
</span><br>
<span class="quotelev1">&gt; to -g during configure should do it), rebuild, and get a full call
</span><br>
<span class="quotelev1">&gt; stack with line numbers?
</span><br>
<p>For (superfluous) thoroughness, I did configure --enable-debug
<br>
--enable-memdebug, plus CFLAGS,FFLAGS,FCFLAGS=-g.
<br>
<p>gdb tells me (abbreviated):
<br>
<p>[New Thread 2853808 (LWP 16590)]
<br>
[New Thread 18697136 (LWP 16591)]
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 18697136 (LWP 16591)]
<br>
0x00e47a92 in _int_free (av=0xe75580, mem=0x9cb4190) at malloc.c:4371
<br>
4371          nextsize = chunksize(nextchunk);
<br>
(gdb) bt
<br>
#0  0x00e47a92 in _int_free (av=0xe75580, mem=0x9cb4190) at malloc.c:4371
<br>
#1  0x00e466fa in free (mem=0x9cb4190) at malloc.c:3501
<br>
#2  0x08154590 in for_deallocate. ()
<br>
#3  0x08154505 in for_dealloc_allocatable ()
<br>
#4  0x0805d71f in spline (x=0x9b37eb0, y=0x9ba5fe8, n=93, yp1=1e+40, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ypn=1e+40, y2=0x9c63fe0) at subroutines.f90:167
<br>
<p>(gdb) bt full 5
<br>
#0  0x00e47a92 in _int_free (av=0xe75580, mem=0x9cb4190) at malloc.c:4371
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = 0x9cb4188
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = 134776
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fb = (mfastbinptr *) 0xe464fd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nextchunk = 0x9cd5000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nextsize = 744
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nextinuse = 15160704
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prevsize = 14968205
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bck = 0x11d48b4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fwd = 0x2e8
<br>
#1  0x00e466fa in free (mem=0x9cb4190) at malloc.c:3501
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ar_ptr = 0xe75580
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = 0x9cb4188
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hook = (void (*)(void *, const void *)) 0
<br>
#2  0x08154590 in for_deallocate. ()
<br>
No symbol table info available.
<br>
#3  0x08154505 in for_dealloc_allocatable ()
<br>
No symbol table info available.
<br>
#4  0x0805d71f in spline (x=0x9b37eb0, y=0x9ba5fe8, n=93, yp1=1e+40, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ypn=1e+40, y2=0x9c63fe0) at subroutines.f90:167
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;un = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sig = 0.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qn = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = 1.8660254037844382
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = 93
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;u = 0x11d4904
<br>
<p><p>Totalview's memory debugger tells me: &quot;Allocator returned a block
<br>
already in use: heap may be corrupted&quot; (at an allocation that gives
<br>
the crash when the associated storage is deallocated).
<br>
<p><p>[valgrind]
<br>
<span class="quotelev1">&gt; The output might be useful to us, if we could take a look (at least,  
</span><br>
<span class="quotelev1">&gt; on the OMPI build that fails).  Again, doing this with a build of  
</span><br>
<span class="quotelev1">&gt; Open MPI that contains debugging symbols would greatly increase the  
</span><br>
<span class="quotelev1">&gt; usefulness to us.
</span><br>
<p>I have to suppress many (irrelevant, I think...) warnings, else
<br>
valgrind stops reporting them before the crash. The final one is:
<br>
<p>==10446== 
<br>
==10446== Invalid read of size 4
<br>
==10446==    at 0x1C02FA92: _int_free (malloc.c:4371)
<br>
==10446==    by 0x1C02E6F9: free (malloc.c:3501)
<br>
==10446==    by 0x815458F: for_deallocate. (in /afs/slac.stanford.edu/g/ki/users/gmorris/cosmomc/benchmarks/cosmomc/coma-mpi-openmp/O0-ompi-1.1a1r8803-ifort9-memdebug/cosmomc)
<br>
==10446==    by 0x8154504: for_dealloc_allocatable (in /afs/slac.stanford.edu/g/ki/users/gmorris/cosmomc/benchmarks/cosmomc/coma-mpi-openmp/O0-ompi-1.1a1r8803-ifort9-memdebug/cosmomc)
<br>
==10446==  Address 0x8FD3004 is not stack'd, malloc'd or (recently) free'd
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x8fd3004
<br>
[0] func:/afs/slac.stanford.edu/g/ki/users/gmorris/tmp/ompi-1.1a1r8803-memdebug-ifort9/lib/libopal.so.0 [0x1c02987a]
<br>
[1] func:[0x52bff000]
<br>
[2] func:/afs/slac.stanford.edu/g/ki/users/gmorris/tmp/ompi-1.1a1r8803-memdebug-ifort9/lib/libopal.so.0(free+0xa6) [0x1c02e6fa]
<br>
[3] func:./cosmomc(for_deallocate.+0x54) [0x8154590]
<br>
[4] func:./cosmomc(for_dealloc_allocatable+0x5b) [0x8154505]
<br>
[...]
<br>
*** End of error message ***
<br>
==10446== 
<br>
==10446== Process terminating with default action of signal 11 (SIGSEGV)
<br>
==10446==  Access not within mapped region at address 0x4
<br>
==10446==    at 0x1C02FA92: _int_free (malloc.c:4371)
<br>
==10446==    by 0x1C02E6F9: free (malloc.c:3501)
<br>
==10446==    by 0x815458F: for_deallocate. (in /afs/slac.stanford.edu/g/ki/users/gmorris/cosmomc/benchmarks/cosmomc/coma-mpi-openmp/O0-ompi-1.1a1r8803-ifort9-memdebug/cosmomc)
<br>
==10446==    by 0x8154504: for_dealloc_allocatable (in /afs/slac.stanford.edu/g/ki/users/gmorris/cosmomc/benchmarks/cosmomc/coma-mpi-openmp/O0-ompi-1.1a1r8803-ifort9-memdebug/cosmomc)
<br>
==10446== 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0548.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0546.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>In reply to:</strong> <a href="0537.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
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
