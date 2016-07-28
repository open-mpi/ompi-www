<?
$subject_val = "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 08:19:26 2013" -->
<!-- isoreceived="20130111131926" -->
<!-- sent="Fri, 11 Jan 2013 14:19:21 +0100" -->
<!-- isosent="20130111131921" -->
<!-- name="Jalel Chergui" -->
<!-- email="Jalel.Chergui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash" -->
<!-- id="50F01159.7050100_at_limsi.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1357909303.11921.24.camel_at_WMS005" -->
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
<strong>From:</strong> Jalel Chergui (<em>Jalel.Chergui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-11 08:19:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21105.php">Paul Kapinos: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21103.php">Stefan Mauerberger: "[OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>In reply to:</strong> <a href="21103.php">Stefan Mauerberger: "[OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21105.php">Paul Kapinos: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Can you try to allocate conc array before inititialization ?
<br>
<p>Regards,
<br>
Jalel
<br>
Le 11/01/2013 14:01, Stefan Mauerberger a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi There!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all, this is my first post here. In case I am doing something
</span><br>
<span class="quotelev1">&gt; inappropriate pleas be soft with me. On top of that I am not quite sure
</span><br>
<span class="quotelev1">&gt; whether that issue is related to Open MPI or GCC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding my problem: Well, it is a little bulky, see below. I could
</span><br>
<span class="quotelev1">&gt; figure out that the actual crash is caused by invoking Fortran's array
</span><br>
<span class="quotelev1">&gt; constructor [ xx, yy ] on derived-data-types xx and yy. The one key
</span><br>
<span class="quotelev1">&gt; factor is that those types have allocatable member variables.
</span><br>
<span class="quotelev1">&gt; Well, that fact points to blame gfortran for that. However, the crash
</span><br>
<span class="quotelev1">&gt; does not occur if MPI_Iinit is not called in before. Compiled as a
</span><br>
<span class="quotelev1">&gt; serial program everything works perfectly fine. I am pretty sure, the
</span><br>
<span class="quotelev1">&gt; lines I wrote are valid F2003 code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a minimal working example:
</span><br>
<span class="quotelev1">&gt; PROGRAM main
</span><br>
<span class="quotelev1">&gt;      USE mpi
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      INTEGER :: ierr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      TYPE :: test_typ
</span><br>
<span class="quotelev1">&gt;          REAL, ALLOCATABLE :: a(:)
</span><br>
<span class="quotelev1">&gt;      END TYPE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      TYPE(test_typ) :: xx, yy
</span><br>
<span class="quotelev1">&gt;      TYPE(test_typ), ALLOCATABLE :: conc(:)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      CALL mpi_init( ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      conc = [ xx, yy ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      CALL mpi_finalize( ierr )
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; END PROGRAM main
</span><br>
<span class="quotelev1">&gt; Just compile with mpif90 ... and execute leads to:
</span><br>
<span class="quotelev2">&gt;&gt; *** glibc detected *** ./a.out: free(): invalid pointer: 0x00007fefd2a147f8 ***
</span><br>
<span class="quotelev2">&gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev2">&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x7eb96)[0x7fefd26dab96]
</span><br>
<span class="quotelev2">&gt;&gt; ./a.out[0x400fdb]
</span><br>
<span class="quotelev2">&gt;&gt; ./a.out(main+0x34)[0x401132]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)[0x7fefd267d76d]
</span><br>
<span class="quotelev2">&gt;&gt; ./a.out[0x400ad9]
</span><br>
<span class="quotelev1">&gt; With commenting out 'CALL MPI_Init' and 'MPI_Finalize' everything seems to be fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you think: Is this a OMPI or a GCC related bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Stefan
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
*------------------------------------------------------------------------*
  Jalel CHERGUI, LIMSI-CNRS, B&#226;t. 508 - BP 133, 91403 Orsay cedex, FRANCE
  T&#233;l: (33 1) 69 85 81 27     ; T&#233;l&#233;copie: (33 1) 69 85 80 88
  M&#233;l: Jalel.Chergui_at_[hidden] ; R&#233;f&#233;rence: <a href="http://perso.limsi.fr/chergui">http://perso.limsi.fr/chergui</a>
*------------------------------------------------------------------------*
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21105.php">Paul Kapinos: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21103.php">Stefan Mauerberger: "[OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>In reply to:</strong> <a href="21103.php">Stefan Mauerberger: "[OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21105.php">Paul Kapinos: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
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
