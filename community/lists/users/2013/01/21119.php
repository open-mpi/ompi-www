<?
$subject_val = "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 14 06:08:32 2013" -->
<!-- isoreceived="20130114110832" -->
<!-- sent="Mon, 14 Jan 2013 12:08:22 +0100" -->
<!-- isosent="20130114110822" -->
<!-- name="Stefan Mauerberger" -->
<!-- email="stefan.mauerberger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash" -->
<!-- id="1358161702.14220.14.camel_at_WMS005" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50F0551D.5040508_at_rz.rwth-aachen.de" -->
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
<strong>Date:</strong> 2013-01-14 06:08:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21120.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21118.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Maybe in reply to:</strong> <a href="21103.php">Stefan Mauerberger: "[OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21120.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21120.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I missed to emphasize one thing: It is my intension to exploit
<br>
F2003's lhs-(re)allocate feature. Meaning, it is totally legal in F03 to
<br>
write something like that:
<br>
integer, allocatable :: array(:)
<br>
array = [ 1,2,3,4 ]
<br>
array = [ 1 ]
<br>
where 'array' gets automatically (re)allocated. One more thing I should
<br>
mention: In case 'array' is manually allocate, everything is fine.
<br>
<p>Ok, lets do a little case study and make my suggested minimal example a
<br>
little more exhaustive:
<br>
PROGRAM main
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;IMPLICIT NONE 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;!INCLUDE 'mpif.h'
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;!CALL mpi_init( ierr )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;xx = test_typ( a=[1.0] )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;yy = test_typ( a=[2.0,1.0] )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;conc = [ xx, yy ]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;WRITE(*,*) SIZE(conc)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;!CALL mpi_finalize( ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
END PROGRAM main 
<br>
Note: For the beginning all MPI-stuff is commented out; xx and yy are
<br>
initialized and their member-variable 'a' is allocated. 
<br>
<p>For now, assume it as purely serial. That piece of code complies and
<br>
runs properly with: 
<br>
&nbsp;* gfortran 4.7.1, 4.7.2 and 4.8.0 (experimental)
<br>
&nbsp;* ifort 12.1 and 13.0 (-assume realloc_lhs)
<br>
&nbsp;* nagfort 5.3
<br>
On the contrary it terminates, throwing a segfault, with
<br>
&nbsp;* pgfortran 12.9
<br>
Well, for the following lets simply drop PGI. In addition, according to
<br>
'The Fortran 2003 Handbook' published by Springer in 2009, the
<br>
usage of the array constructor [...] is appropriate and valid. 
<br>
<p>As a second step lets try to compile and run it invoking OMPI, just
<br>
considering INCLUDE 'mpif.h':
<br>
&nbsp;* gfortran: all right 
<br>
&nbsp;* ifort: all right
<br>
&nbsp;* nagfor: all right
<br>
<p>Finally, lets initialize MPI by calling MPI_Init() and MPI_Finalize():
<br>
&nbsp;* gfortran + OMPI: *** glibc detected *** ./a.out: free(): invalid
<br>
pointer ...
<br>
&nbsp;* gfortran + Intel-MPI: *** glibc detected *** ./a.out: free(): invalid
<br>
pointer ...
<br>
&nbsp;* ifort + OMPI: all right 
<br>
&nbsp;* nagfor + OMPI: all right (-thread_safe)
<br>
<p>Well, you are right, this is a very strong indication to blame gfortran
<br>
for that!  However, it gets even more confusing. Instead of linking
<br>
against OMPI, the following results are obtained by invoking IBM's MPI
<br>
implementation:
<br>
&nbsp;* gfortran + IBM-MPI: all right
<br>
&nbsp;* ifort + IBM-MPI: all right 
<br>
Isn't that weired? 
<br>
<p>Any suggestions? Might it be useful to submit a bug-report to GCC
<br>
developers? 
<br>
<p>Cheers, 
<br>
Stefan 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21120.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21118.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Maybe in reply to:</strong> <a href="21103.php">Stefan Mauerberger: "[OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21120.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21120.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
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
