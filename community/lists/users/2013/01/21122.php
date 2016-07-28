<?
$subject_val = "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 14 13:55:56 2013" -->
<!-- isoreceived="20130114185556" -->
<!-- sent="Mon, 14 Jan 2013 19:55:47 +0100" -->
<!-- isosent="20130114185547" -->
<!-- name="Stefan Mauerberger" -->
<!-- email="stefan.mauerberger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash" -->
<!-- id="1358189747.14220.40.camel_at_WMS005" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.15.1358182802.6449.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash<br>
<strong>From:</strong> Stefan Mauerberger (<em>stefan.mauerberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-14 13:55:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21123.php">Siegmar Gross: "[OMPI users] matrix multiplication in openmpi-1.9a1r27787 with Java"</a>
<li><strong>Previous message:</strong> <a href="21121.php">Said Elnoshokaty: "[OMPI users] Windows MPI with Fortran calling programs"</a>
<li><strong>Maybe in reply to:</strong> <a href="21103.php">Stefan Mauerberger: "[OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2013-01-14 at 12:00 -0500, users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Could you try to run your serial program in Valgrind and see if it
</span><br>
<span class="quotelev1">&gt; reports any erroneous memory access attempts? It could be that GCC's
</span><br>
<span class="quotelev1">&gt; implementation of the automatic allocation is broken and that OMPI's
</span><br>
<span class="quotelev1">&gt; intervention in the memory management process only exposes an already
</span><br>
<span class="quotelev1">&gt; existing problem. 
</span><br>
Well, I heard about Valgrind at some time but I am not comfortable in
<br>
using it. Anyway, I simply considered the following code
<br>
<span class="quotelev1">&gt; PROGRAM main
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     TYPE :: test_typ
</span><br>
<span class="quotelev1">&gt;         REAL, ALLOCATABLE :: a(:)
</span><br>
<span class="quotelev1">&gt;     END TYPE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     TYPE(test_typ) :: xx, yy
</span><br>
<span class="quotelev1">&gt;     TYPE(test_typ), ALLOCATABLE :: conc(:)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     xx = test_typ( [1.0] )
</span><br>
<span class="quotelev1">&gt;     yy = test_typ( [1.0,2.0,3.0] )
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     conc = [ xx, yy ]
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; END PROGRAM main 
</span><br>
and built it with 'gfortran -g test.f90 -o test'. Subsequently, I run it
<br>
in Valgrind, 'valgrind  --track-origins=yes ./test'. The unpleasant
<br>
result is: 
<br>
<span class="quotelev1">&gt; ==19519== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==19519== Copyright (C) 2002-2011, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==19519== Using Valgrind-3.7.0 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==19519== Command: ./test
</span><br>
<span class="quotelev1">&gt; ==19519== 
</span><br>
<span class="quotelev1">&gt; ==19519== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==19519==    at 0x401030: MAIN__ (test_conc.f90:13)
</span><br>
<span class="quotelev1">&gt; ==19519==    by 0x40118B: main (test_conc.f90:15)
</span><br>
<span class="quotelev1">&gt; ==19519==  Uninitialised value was created by a heap allocation
</span><br>
<span class="quotelev1">&gt; ==19519==    at 0x4C2B3F8: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==19519==    by 0x400DCB: MAIN__ (test_conc.f90:13)
</span><br>
<span class="quotelev1">&gt; ==19519==    by 0x40118B: main (test_conc.f90:15)
</span><br>
<span class="quotelev1">&gt; ==19519== 
</span><br>
<span class="quotelev1">&gt; ==19519== 
</span><br>
<span class="quotelev1">&gt; ==19519== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==19519==     in use at exit: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==19519==   total heap usage: 26 allocs, 26 frees, 12,111 bytes allocated
</span><br>
<span class="quotelev1">&gt; ==19519== 
</span><br>
<span class="quotelev1">&gt; ==19519== All heap blocks were freed -- no leaks are possible
</span><br>
<span class="quotelev1">&gt; ==19519== 
</span><br>
<span class="quotelev1">&gt; ==19519== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==19519== ERROR SUMMARY: 2 errors from 1 contexts (suppressed: 2 from 2)
</span><br>
Well, how to interpret ...
<br>
<p>Thanks for that very useful advice. As far as I can see, there seems to
<br>
be something wrong with GCC's array-constructor implementation when
<br>
allocatables are invoked. 
<br>
<p>Cheers, 
<br>
Stefan 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21123.php">Siegmar Gross: "[OMPI users] matrix multiplication in openmpi-1.9a1r27787 with Java"</a>
<li><strong>Previous message:</strong> <a href="21121.php">Said Elnoshokaty: "[OMPI users] Windows MPI with Fortran calling programs"</a>
<li><strong>Maybe in reply to:</strong> <a href="21103.php">Stefan Mauerberger: "[OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
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
