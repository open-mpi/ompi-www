<?
$subject_val = "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 08:56:17 2013" -->
<!-- isoreceived="20130116135617" -->
<!-- sent="Wed, 16 Jan 2013 13:56:12 +0000" -->
<!-- isosent="20130116135612" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380BB9AD_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1358161702.14220.14.camel_at_WMS005" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 08:56:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21128.php">borja mf: "[OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>In reply to:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21122.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I can replicate the behavior with gfortran 4.7.2:
<br>
<p>- program runs &quot;fine&quot; with no MPI_Init/MPI_Finalize
<br>
- program dumps core when MPI_Init/MPI_Finalize are called (at the &quot;conc = [ xx, yy ]&quot; statement)
<br>
<p>I notice that even if I disable Open MPI's memory hooking, the coredump still occurs.
<br>
<p>Sidenote: there's a few ways to disable OMPI's memory hooking; one of the easiest is to set the environment variable FAKEROOTKEY to any value, because OMPI disables its memory hooking in Debian Fakeroot environments.  For example:
<br>
<p>-----
<br>
% setenv FAKEROOTKEY 0
<br>
% mpifort -g arrays.f90 &amp;&amp; ./a.out
<br>
*** glibc detected *** ./a.out: free(): invalid pointer: 0x000000369ef9cf48 ***
<br>
...etc.
<br>
-----
<br>
<p>Specifically: with OMPI's memory hooking disabled, we don't modify the behavior of malloc/free/memalign/realloc.
<br>
<p>I'm not sure what Open MPI is doing to anger the gfortran gods, but I did note that when I run the program without MPI_Init/MPI_Finalize, valgrind complains:
<br>
<p>-----
<br>
==7269== Conditional jump or move depends on uninitialised value(s)
<br>
==7269==    at 0x4015B0: MAIN__ (arrays.f90:20)
<br>
==7269==    by 0x401795: main (arrays.f90:26)
<br>
-----
<br>
<p>Line 20 is the &quot;conc = [ xx, yy ]&quot; statement.
<br>
<p>I'm not enough of a Fortran guru to know what that means (to my eyes, xx and yy were just initialized above that -- perhaps it's complaining about conc?), but there you go.  :-)
<br>
<p><p><p>On Jan 14, 2013, at 6:08 AM, Stefan Mauerberger &lt;stefan.mauerberger_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, I missed to emphasize one thing: It is my intension to exploit
</span><br>
<span class="quotelev1">&gt; F2003's lhs-(re)allocate feature. Meaning, it is totally legal in F03 to
</span><br>
<span class="quotelev1">&gt; write something like that:
</span><br>
<span class="quotelev1">&gt; integer, allocatable :: array(:)
</span><br>
<span class="quotelev1">&gt; array = [ 1,2,3,4 ]
</span><br>
<span class="quotelev1">&gt; array = [ 1 ]
</span><br>
<span class="quotelev1">&gt; where 'array' gets automatically (re)allocated. One more thing I should
</span><br>
<span class="quotelev1">&gt; mention: In case 'array' is manually allocate, everything is fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, lets do a little case study and make my suggested minimal example a
</span><br>
<span class="quotelev1">&gt; little more exhaustive:
</span><br>
<span class="quotelev1">&gt; PROGRAM main
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    IMPLICIT NONE 
</span><br>
<span class="quotelev1">&gt;    !INCLUDE 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    INTEGER :: ierr 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    TYPE :: test_typ
</span><br>
<span class="quotelev1">&gt;        REAL, ALLOCATABLE :: a(:)
</span><br>
<span class="quotelev1">&gt;    END TYPE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    TYPE(test_typ) :: xx, yy
</span><br>
<span class="quotelev1">&gt;    TYPE(test_typ), ALLOCATABLE :: conc(:)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    !CALL mpi_init( ierr )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    xx = test_typ( a=[1.0] )
</span><br>
<span class="quotelev1">&gt;    yy = test_typ( a=[2.0,1.0] )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    conc = [ xx, yy ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    WRITE(*,*) SIZE(conc)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    !CALL mpi_finalize( ierr )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; END PROGRAM main 
</span><br>
<span class="quotelev1">&gt; Note: For the beginning all MPI-stuff is commented out; xx and yy are
</span><br>
<span class="quotelev1">&gt; initialized and their member-variable 'a' is allocated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For now, assume it as purely serial. That piece of code complies and
</span><br>
<span class="quotelev1">&gt; runs properly with: 
</span><br>
<span class="quotelev1">&gt; * gfortran 4.7.1, 4.7.2 and 4.8.0 (experimental)
</span><br>
<span class="quotelev1">&gt; * ifort 12.1 and 13.0 (-assume realloc_lhs)
</span><br>
<span class="quotelev1">&gt; * nagfort 5.3
</span><br>
<span class="quotelev1">&gt; On the contrary it terminates, throwing a segfault, with
</span><br>
<span class="quotelev1">&gt; * pgfortran 12.9
</span><br>
<span class="quotelev1">&gt; Well, for the following lets simply drop PGI. In addition, according to
</span><br>
<span class="quotelev1">&gt; 'The Fortran 2003 Handbook' published by Springer in 2009, the
</span><br>
<span class="quotelev1">&gt; usage of the array constructor [...] is appropriate and valid. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a second step lets try to compile and run it invoking OMPI, just
</span><br>
<span class="quotelev1">&gt; considering INCLUDE 'mpif.h':
</span><br>
<span class="quotelev1">&gt; * gfortran: all right 
</span><br>
<span class="quotelev1">&gt; * ifort: all right
</span><br>
<span class="quotelev1">&gt; * nagfor: all right
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, lets initialize MPI by calling MPI_Init() and MPI_Finalize():
</span><br>
<span class="quotelev1">&gt; * gfortran + OMPI: *** glibc detected *** ./a.out: free(): invalid
</span><br>
<span class="quotelev1">&gt; pointer ...
</span><br>
<span class="quotelev1">&gt; * gfortran + Intel-MPI: *** glibc detected *** ./a.out: free(): invalid
</span><br>
<span class="quotelev1">&gt; pointer ...
</span><br>
<span class="quotelev1">&gt; * ifort + OMPI: all right 
</span><br>
<span class="quotelev1">&gt; * nagfor + OMPI: all right (-thread_safe)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, you are right, this is a very strong indication to blame gfortran
</span><br>
<span class="quotelev1">&gt; for that!  However, it gets even more confusing. Instead of linking
</span><br>
<span class="quotelev1">&gt; against OMPI, the following results are obtained by invoking IBM's MPI
</span><br>
<span class="quotelev1">&gt; implementation:
</span><br>
<span class="quotelev1">&gt; * gfortran + IBM-MPI: all right
</span><br>
<span class="quotelev1">&gt; * ifort + IBM-MPI: all right 
</span><br>
<span class="quotelev1">&gt; Isn't that weired? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions? Might it be useful to submit a bug-report to GCC
</span><br>
<span class="quotelev1">&gt; developers? 
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21128.php">borja mf: "[OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>In reply to:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21122.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
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
