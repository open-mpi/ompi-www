<?
$subject_val = "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 14 06:46:14 2013" -->
<!-- isoreceived="20130114114614" -->
<!-- sent="Mon, 14 Jan 2013 11:46:07 +0000" -->
<!-- isosent="20130114114607" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC903CBD6AE_at_rz-mbx1.win.rz.rwth-aachen.de" -->
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
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-14 06:46:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21121.php">Said Elnoshokaty: "[OMPI users] Windows MPI with Fortran calling programs"</a>
<li><strong>Previous message:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>In reply to:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some MPI libraries (including OMPI and IMPI) hook the system memory
<br>
management routines like 'malloc' and 'free' (used behind the scenes by
<br>
Fortran on Unix). This is usually performed in order to manage memory
<br>
registration for RDMA-based networks like InfiniBand. I would guess that
<br>
Open MPI installs these hooks at the time when MPI_INIT is called and that's
<br>
why you see the problem after MPI_INIT was called but not if the call is
<br>
commented out.
<br>
<p>Could you try to run your serial program in Valgrind and see if it reports
<br>
any erroneous memory access attempts? It could be that GCC's implementation
<br>
of the automatic allocation is broken and that OMPI's intervention in the
<br>
memory management process only exposes an already existing problem.
<br>
<p>Kind regards,
<br>
Hristo
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On Behalf Of Stefan Mauerberger
</span><br>
<span class="quotelev1">&gt; Sent: Monday, January 14, 2013 12:08 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Initializing OMPI with invoking the array
</span><br>
<span class="quotelev1">&gt; constructor on Fortran derived types causes the executable to crash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I missed to emphasize one thing: It is my intension to exploit
</span><br>
F2003's
<br>
<span class="quotelev1">&gt; lhs-(re)allocate feature. Meaning, it is totally legal in F03 to write
</span><br>
something
<br>
<span class="quotelev1">&gt; like that:
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
little
<br>
<span class="quotelev1">&gt; more exhaustive:
</span><br>
<span class="quotelev1">&gt; PROGRAM main
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt;     !INCLUDE 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     INTEGER :: ierr
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
<span class="quotelev1">&gt;     !CALL mpi_init( ierr )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     xx = test_typ( a=[1.0] )
</span><br>
<span class="quotelev1">&gt;     yy = test_typ( a=[2.0,1.0] )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     conc = [ xx, yy ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     WRITE(*,*) SIZE(conc)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     !CALL mpi_finalize( ierr )
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
<span class="quotelev1">&gt; For now, assume it as purely serial. That piece of code complies and runs
</span><br>
<span class="quotelev1">&gt; properly with:
</span><br>
<span class="quotelev1">&gt;  * gfortran 4.7.1, 4.7.2 and 4.8.0 (experimental)
</span><br>
<span class="quotelev1">&gt;  * ifort 12.1 and 13.0 (-assume realloc_lhs)
</span><br>
<span class="quotelev1">&gt;  * nagfort 5.3
</span><br>
<span class="quotelev1">&gt; On the contrary it terminates, throwing a segfault, with
</span><br>
<span class="quotelev1">&gt;  * pgfortran 12.9
</span><br>
<span class="quotelev1">&gt; Well, for the following lets simply drop PGI. In addition, according to
</span><br>
'The
<br>
<span class="quotelev1">&gt; Fortran 2003 Handbook' published by Springer in 2009, the usage of the
</span><br>
array
<br>
<span class="quotelev1">&gt; constructor [...] is appropriate and valid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a second step lets try to compile and run it invoking OMPI, just
</span><br>
considering
<br>
<span class="quotelev1">&gt; INCLUDE 'mpif.h':
</span><br>
<span class="quotelev1">&gt;  * gfortran: all right
</span><br>
<span class="quotelev1">&gt;  * ifort: all right
</span><br>
<span class="quotelev1">&gt;  * nagfor: all right
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, lets initialize MPI by calling MPI_Init() and MPI_Finalize():
</span><br>
<span class="quotelev1">&gt;  * gfortran + OMPI: *** glibc detected *** ./a.out: free(): invalid
</span><br>
pointer ...
<br>
<span class="quotelev1">&gt;  * gfortran + Intel-MPI: *** glibc detected *** ./a.out: free(): invalid
</span><br>
pointer
<br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  * ifort + OMPI: all right
</span><br>
<span class="quotelev1">&gt;  * nagfor + OMPI: all right (-thread_safe)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, you are right, this is a very strong indication to blame gfortran
</span><br>
for that!
<br>
<span class="quotelev1">&gt; However, it gets even more confusing. Instead of linking against OMPI, the
</span><br>
<span class="quotelev1">&gt; following results are obtained by invoking IBM's MPI
</span><br>
<span class="quotelev1">&gt; implementation:
</span><br>
<span class="quotelev1">&gt;  * gfortran + IBM-MPI: all right
</span><br>
<span class="quotelev1">&gt;  * ifort + IBM-MPI: all right
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
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21120/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21121.php">Said Elnoshokaty: "[OMPI users] Windows MPI with Fortran calling programs"</a>
<li><strong>Previous message:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>In reply to:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
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
