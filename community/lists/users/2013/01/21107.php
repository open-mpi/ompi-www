<?
$subject_val = "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 09:59:03 2013" -->
<!-- isoreceived="20130111145903" -->
<!-- sent="Fri, 11 Jan 2013 15:58:54 +0100" -->
<!-- isosent="20130111145854" -->
<!-- name="Stefan Mauerberger" -->
<!-- email="stefan.mauerberger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash" -->
<!-- id="1357916334.11921.54.camel_at_WMS005" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50F012F9.1050501_at_rz.rwth-aachen.de" -->
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
<strong>Date:</strong> 2013-01-11 09:58:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Previous message:</strong> <a href="21106.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="21105.php">Paul Kapinos: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21110.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21110.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Paul!
<br>
<p>Thanks for your reply. This problem seems to get complicated. 
<br>
<p>Unfortunately, I can not reproduce what you are describing. I tried with
<br>
some GCCs as 4.7.1, 4.7.2 and 4.8.0 (20121008). As you suggested,
<br>
replacing the MPI_Init and MPI_Finalize calls with WRITE(*,*) &quot;foooo&quot;
<br>
and commenting out use mpi, everything is just fine. No segfault no core
<br>
dump, just the result as I expect it (I put a write(*,*) size(conc) in,
<br>
which must print 2). I simply compiled with a bare mpif90 ... and
<br>
executed typing mpirun -np 1 ./a.out . 
<br>
I also tried on three different architectures - all 64-bit - and, as
<br>
soon as MPI_Init is invoked, the program gets core dumped.  
<br>
<p>I also tried with IBM's MPI implementation just with the difference
<br>
using include 'mpif.h' instead of use mpi. Everything is fine and the
<br>
result is as in serial runs.
<br>
<p>Well, it's not surprising that 4.4.x has its problems. Using modern
<br>
Fortran as F03, GCC in a version younger than  4.7.x is just mandatory. 
<br>
<p>Cheers, 
<br>
Stefan 
<br>
<p><p><p>On Fri, 2013-01-11 at 14:26 +0100, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; This is hardly an Open MPI issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; switch the calls to MPI_Init, MPI_Finalize against
</span><br>
<span class="quotelev1">&gt; WRITE(*,*) &quot;foooo&quot;
</span><br>
<span class="quotelev1">&gt; comment aut 'USE mpi' .... an see your error (SIGSEGV) again, now without any 
</span><br>
<span class="quotelev1">&gt; MPI part in the program.
</span><br>
<span class="quotelev1">&gt; So my suspiction is this is an bug in your GCC version. Especially because there 
</span><br>
<span class="quotelev1">&gt; is no SIGSEGV using 4.7.2 GCC (whereby it crasehs using 4.4.6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==&gt; Update your compilers!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 01/11/13 14:01, Stefan Mauerberger wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi There!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First of all, this is my first post here. In case I am doing something
</span><br>
<span class="quotelev2">&gt; &gt; inappropriate pleas be soft with me. On top of that I am not quite sure
</span><br>
<span class="quotelev2">&gt; &gt; whether that issue is related to Open MPI or GCC.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regarding my problem: Well, it is a little bulky, see below. I could
</span><br>
<span class="quotelev2">&gt; &gt; figure out that the actual crash is caused by invoking Fortran's array
</span><br>
<span class="quotelev2">&gt; &gt; constructor [ xx, yy ] on derived-data-types xx and yy. The one key
</span><br>
<span class="quotelev2">&gt; &gt; factor is that those types have allocatable member variables.
</span><br>
<span class="quotelev2">&gt; &gt; Well, that fact points to blame gfortran for that. However, the crash
</span><br>
<span class="quotelev2">&gt; &gt; does not occur if MPI_Iinit is not called in before. Compiled as a
</span><br>
<span class="quotelev2">&gt; &gt; serial program everything works perfectly fine. I am pretty sure, the
</span><br>
<span class="quotelev2">&gt; &gt; lines I wrote are valid F2003 code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is a minimal working example:
</span><br>
<span class="quotelev2">&gt; &gt; PROGRAM main
</span><br>
<span class="quotelev2">&gt; &gt;      USE mpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      IMPLICIT NONE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      INTEGER :: ierr
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      TYPE :: test_typ
</span><br>
<span class="quotelev2">&gt; &gt;          REAL, ALLOCATABLE :: a(:)
</span><br>
<span class="quotelev2">&gt; &gt;      END TYPE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      TYPE(test_typ) :: xx, yy
</span><br>
<span class="quotelev2">&gt; &gt;      TYPE(test_typ), ALLOCATABLE :: conc(:)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      CALL mpi_init( ierr )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      conc = [ xx, yy ]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      CALL mpi_finalize( ierr )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; END PROGRAM main
</span><br>
<span class="quotelev2">&gt; &gt; Just compile with mpif90 ... and execute leads to:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** glibc detected *** ./a.out: free(): invalid pointer: 0x00007fefd2a147f8 ***
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x7eb96)[0x7fefd26dab96]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./a.out[0x400fdb]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./a.out(main+0x34)[0x401132]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)[0x7fefd267d76d]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./a.out[0x400ad9]
</span><br>
<span class="quotelev2">&gt; &gt; With commenting out 'CALL MPI_Init' and 'MPI_Finalize' everything seems to be fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What do you think: Is this a OMPI or a GCC related bug?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; Stefan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Previous message:</strong> <a href="21106.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="21105.php">Paul Kapinos: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21110.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21110.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
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
