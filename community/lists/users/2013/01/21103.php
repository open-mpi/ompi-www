<?
$subject_val = "[OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 08:01:52 2013" -->
<!-- isoreceived="20130111130152" -->
<!-- sent="Fri, 11 Jan 2013 14:01:43 +0100" -->
<!-- isosent="20130111130143" -->
<!-- name="Stefan Mauerberger" -->
<!-- email="stefan.mauerberger_at_[hidden]" -->
<!-- subject="[OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash" -->
<!-- id="1357909303.11921.24.camel_at_WMS005" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash<br>
<strong>From:</strong> Stefan Mauerberger (<em>stefan.mauerberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-11 08:01:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21104.php">Jalel Chergui: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21102.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21104.php">Jalel Chergui: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21104.php">Jalel Chergui: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21105.php">Paul Kapinos: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Maybe reply:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Maybe reply:</strong> <a href="21122.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi There! 
<br>
<p>First of all, this is my first post here. In case I am doing something
<br>
inappropriate pleas be soft with me. On top of that I am not quite sure
<br>
whether that issue is related to Open MPI or GCC. 
<br>
<p>Regarding my problem: Well, it is a little bulky, see below. I could
<br>
figure out that the actual crash is caused by invoking Fortran's array
<br>
constructor [ xx, yy ] on derived-data-types xx and yy. The one key
<br>
factor is that those types have allocatable member variables. 
<br>
Well, that fact points to blame gfortran for that. However, the crash
<br>
does not occur if MPI_Iinit is not called in before. Compiled as a
<br>
serial program everything works perfectly fine. I am pretty sure, the
<br>
lines I wrote are valid F2003 code. 
<br>
<p>Here is a minimal working example:
<br>
PROGRAM main
<br>
&nbsp;&nbsp;&nbsp;&nbsp;USE mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;IMPLICIT NONE 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: ierr
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;TYPE :: test_typ
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REAL, ALLOCATABLE :: a(:)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;END TYPE
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;TYPE(test_typ) :: xx, yy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;TYPE(test_typ), ALLOCATABLE :: conc(:)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_init( ierr )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;conc = [ xx, yy ]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_finalize( ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
END PROGRAM main 
<br>
Just compile with mpif90 ... and execute leads to:
<br>
<span class="quotelev1">&gt; *** glibc detected *** ./a.out: free(): invalid pointer: 0x00007fefd2a147f8 ***
</span><br>
<span class="quotelev1">&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x7eb96)[0x7fefd26dab96]
</span><br>
<span class="quotelev1">&gt; ./a.out[0x400fdb]
</span><br>
<span class="quotelev1">&gt; ./a.out(main+0x34)[0x401132]
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)[0x7fefd267d76d]
</span><br>
<span class="quotelev1">&gt; ./a.out[0x400ad9]
</span><br>
With commenting out 'CALL MPI_Init' and 'MPI_Finalize' everything seems to be fine. 
<br>
<p>What do you think: Is this a OMPI or a GCC related bug? 
<br>
<p>Cheers, 
<br>
Stefan 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21104.php">Jalel Chergui: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21102.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21104.php">Jalel Chergui: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21104.php">Jalel Chergui: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21105.php">Paul Kapinos: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Maybe reply:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Maybe reply:</strong> <a href="21122.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
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
