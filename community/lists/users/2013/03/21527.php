<?
$subject_val = "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 13 05:17:00 2013" -->
<!-- isoreceived="20130313091700" -->
<!-- sent="Wed, 13 Mar 2013 10:16:54 +0100" -->
<!-- isosent="20130313091654" -->
<!-- name="Dominik Goeddeke" -->
<!-- email="dominik.goeddeke_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'" -->
<!-- id="51404406.5070207_at_math.tu-dortmund.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5A5117ABD18DE547BB3D3FE3D0CB3188322954_at_MBX4.rwth-ad.de" -->
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
<strong>From:</strong> Dominik Goeddeke (<em>dominik.goeddeke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-13 05:16:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21528.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Previous message:</strong> <a href="21526.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>In reply to:</strong> <a href="21526.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21528.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Reply:</strong> <a href="21528.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>thanks, I remember that now. So it is a &quot;documentation bug&quot; in that 
<br>
particular FAQ entry.
<br>
<p>Dominik
<br>
<p>On 03/13/2013 09:58 AM, Iliev, Hristo wrote:
<br>
<span class="quotelev1">&gt; Hi, Dominik,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gfortran and ifort produce Fortran module files (*.mod) with completely
</span><br>
<span class="quotelev1">&gt; different and hence incompatible formats. You cannot use a module compiled
</span><br>
<span class="quotelev1">&gt; with gfortran in ifort and vice versa. That's why many Fortran libraries
</span><br>
<span class="quotelev1">&gt; come with explicit module interface definitions that have to be compiled
</span><br>
<span class="quotelev1">&gt; with the specific Fortran compiler before the library can be used as a
</span><br>
<span class="quotelev1">&gt; module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps to clarify the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, PhD -- High Performance Computing Team
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23, D 52074 Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Phone: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Dominik Goeddeke
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, March 12, 2013 10:32 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with
</span><br>
<span class="quotelev2">&gt;&gt; 'use mpi'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OMPI folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; according to this FAQ entry
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers</a>-
</span><br>
<span class="quotelev2">&gt;&gt; after-v1.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; one way to use the mpif90 compiler wrapper with another compiler than
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI was built with is to set the envvar OMPI_FC to the other
</span><br>
<span class="quotelev1">&gt; compiler.
</span><br>
<span class="quotelev2">&gt;&gt; Using this simple toy code
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    include 'mpif.h'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    integer :: ierr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    call MPI_Init(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    print *, &quot;Hello&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    call MPI_Finalize(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end program test
</span><br>
<span class="quotelev2">&gt;&gt; I indeed see the expected (and documented) behaviour:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash$ export OMPI_FC=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash$ mpif90 test.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash$ mpirun -np 3 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; Now, If I replace these two lines in the reproducer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt; with these two lines (which is actually the MPI-2 way of doing things, as
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt; himself praises in this blog entry:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://blogs.cisco.com/performance/a-bucket-full-of-new-mpi-fortran">http://blogs.cisco.com/performance/a-bucket-full-of-new-mpi-fortran</a>-
</span><br>
<span class="quotelev2">&gt;&gt; features)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; I get this as the output of mpif90:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test.f90(7): error #7013: This module file was not generated by any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; release of this compiler.   [MPI]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation aborted for test.f90 (code 1)
</span><br>
<span class="quotelev2">&gt;&gt; There seems to be no language on this particular problem in the FAQs, so I
</span><br>
<span class="quotelev2">&gt;&gt; assume this is either a documentation bug or an actual bug in the compiler
</span><br>
<span class="quotelev2">&gt;&gt; wrappers. The approach is clearly marked as &quot;not recommended&quot;, but
</span><br>
<span class="quotelev2">&gt;&gt; actually, this problem can be quite a showstopper because on laptops,
</span><br>
<span class="quotelev2">&gt;&gt; people (like me) are often too lazy to compile Open-MPI (and consequently,
</span><br>
<span class="quotelev2">&gt;&gt; valgrind and friends) multiple times, especially since the FAQ says that
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; should work :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the system gcc of ubuntu 12.04 (4.6.3-1ubuntu5) and OMPI 1.6.3.
</span><br>
<span class="quotelev2">&gt;&gt; Of course everything works if I use a properly installed machine that
</span><br>
<span class="quotelev1">&gt; provides
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI-builds for different compilers via modules, and also the oldish
</span><br>
<span class="quotelev2">&gt;&gt; &quot;include 'mpif.h'&quot; approach is a sufficient workaround.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any clarification, hope this reproducer helps,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dominik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jun.-Prof. Dr. Dominik G&#246;ddeke
</span><br>
<span class="quotelev2">&gt;&gt; Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme Institut f&#252;r Angewandte
</span><br>
<span class="quotelev2">&gt;&gt; Mathematik (LS III) Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t
</span><br>
<span class="quotelev2">&gt;&gt; Dortmund <a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
</span><br>
<span class="quotelev2">&gt;&gt; Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
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
<p><p><pre>
-- 
Jun.-Prof. Dr. Dominik G&#246;ddeke
Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
Institut f&#252;r Angewandte Mathematik (LS III)
Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
<a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21527/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21528.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Previous message:</strong> <a href="21526.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>In reply to:</strong> <a href="21526.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21528.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Reply:</strong> <a href="21528.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
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
