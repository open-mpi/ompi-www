<?
$subject_val = "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 13 06:06:02 2013" -->
<!-- isoreceived="20130313100602" -->
<!-- sent="Wed, 13 Mar 2013 10:05:57 +0000" -->
<!-- isosent="20130313100557" -->
<!-- name="Iliev, Hristo" -->
<!-- email="Iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'" -->
<!-- id="5A5117ABD18DE547BB3D3FE3D0CB3188322997_at_MBX4.rwth-ad.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51404406.5070207_at_math.tu-dortmund.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'<br>
<strong>From:</strong> Iliev, Hristo (<em>Iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-13 06:05:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21529.php">Paul Kapinos: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Previous message:</strong> <a href="21527.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>In reply to:</strong> <a href="21527.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21529.php">Paul Kapinos: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Reply:</strong> <a href="21529.php">Paul Kapinos: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, it is not a documentation bug. You are replacing the Fortran compiler
<br>
that the wrapper uses with a compiler from a completely different family.
<br>
The FAQ entry advises against messing with the wrapper configuration,
<br>
selected during library build time. Listing all possible effects that might
<br>
result from changing the compiler is not an option.
<br>
<p>&nbsp;
<br>
<p>However, it works if for example you configure Open MPI with the system
<br>
supplied version of gfortran and then specify a later gfortran version, e.g.
<br>
OMPI_FC=gfortran-4.7 (unless the module format has changed in the meantime).
<br>
<p>&nbsp;
<br>
<p>Kind regards,
<br>
<p>Hristo
<br>
<p><pre>
--
Hristo Iliev, PhD &#150; High Performance Computing Team
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23, D 52074 Aachen (Germany)
Phone: +49 241 80 24367 &#150; Fax/UMS: +49 241 80 624367
 
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Dominik Goeddeke
Sent: Wednesday, March 13, 2013 10:17 AM
To: users_at_[hidden]
Subject: Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with
'use mpi'
 
Hi,
thanks, I remember that now. So it is a &quot;documentation bug&quot; in that
particular FAQ entry.
Dominik
On 03/13/2013 09:58 AM, Iliev, Hristo wrote:
Hi, Dominik,
 
gfortran and ifort produce Fortran module files (*.mod) with completely
different and hence incompatible formats. You cannot use a module compiled
with gfortran in ifort and vice versa. That's why many Fortran libraries
come with explicit module interface definitions that have to be compiled
with the specific Fortran compiler before the library can be used as a
module.
 
Hope that helps to clarify the issue.
 
Kind regards,
Hristo
 
--
Hristo Iliev, PhD &#150; High Performance Computing Team
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23, D 52074 Aachen (Germany)
Phone: +49 241 80 24367 &#150; Fax/UMS: +49 241 80 624367
 
 
-----Original Message-----
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
On Behalf Of Dominik Goeddeke
Sent: Tuesday, March 12, 2013 10:32 PM
To: Open MPI Users
Subject: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with
'use mpi'
 
Dear OMPI folks,
 
according to this FAQ entry
 
<a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers</a>-
after-v1.0
 
one way to use the mpif90 compiler wrapper with another compiler than
Open-MPI was built with is to set the envvar OMPI_FC to the other
compiler.
 
Using this simple toy code
 
program test
  implicit none
  include 'mpif.h'
  integer :: ierr
  call MPI_Init(ierr)
  print *, &quot;Hello&quot;
  call MPI_Finalize(ierr)
end program test
 
I indeed see the expected (and documented) behaviour:
 
bash$ export OMPI_FC=ifort
bash$ mpif90 test.f90
bash$ mpirun -np 3 ./a.out
 
Now, If I replace these two lines in the reproducer
 
implicit none
include 'mpif.h'
 
with these two lines (which is actually the MPI-2 way of doing things, as
Jeff
himself praises in this blog entry:
<a href="http://blogs.cisco.com/performance/a-bucket-full-of-new-mpi-fortran">http://blogs.cisco.com/performance/a-bucket-full-of-new-mpi-fortran</a>-
features)
 
use mpi
implicit none
 
I get this as the output of mpif90:
 
test.f90(7): error #7013: This module file was not generated by any
release of this compiler.   [MPI]
use mpi
----^
compilation aborted for test.f90 (code 1)
 
There seems to be no language on this particular problem in the FAQs, so I
assume this is either a documentation bug or an actual bug in the compiler
wrappers. The approach is clearly marked as &quot;not recommended&quot;, but
actually, this problem can be quite a showstopper because on laptops,
people (like me) are often too lazy to compile Open-MPI (and consequently,
valgrind and friends) multiple times, especially since the FAQ says that
this
should work :)
 
I am using the system gcc of ubuntu 12.04 (4.6.3-1ubuntu5) and OMPI 1.6.3.
Of course everything works if I use a properly installed machine that
provides
OpenMPI-builds for different compilers via modules, and also the oldish
&quot;include 'mpif.h'&quot; approach is a sufficient workaround.
 
Thanks for any clarification, hope this reproducer helps,
 
Cheers,
 
Dominik
 
--
Jun.-Prof. Dr. Dominik G&#246;ddeke
Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme Institut f&#252;r Angewandte
Mathematik (LS III) Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t
Dortmund <a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-- 
Jun.-Prof. Dr. Dominik G&#246;ddeke
Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
Institut f&#252;r Angewandte Mathematik (LS III)
Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
<a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
 
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21528/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21528/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21529.php">Paul Kapinos: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Previous message:</strong> <a href="21527.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>In reply to:</strong> <a href="21527.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21529.php">Paul Kapinos: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Reply:</strong> <a href="21529.php">Paul Kapinos: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
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
