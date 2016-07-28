<?
$subject_val = "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 17:44:31 2013" -->
<!-- isoreceived="20130115224431" -->
<!-- sent="Tue, 15 Jan 2013 17:44:26 -0500" -->
<!-- isosent="20130115224426" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash" -->
<!-- id="50F5DBCA.6000505_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC903CBC622_at_rz-mbx1.win.rz.rwth-aachen.de" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-15 17:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21127.php">Matthias Jurenz: "Re: [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="21125.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.9 in Java and C"</a>
<li><strong>In reply to:</strong> <a href="21118.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hristo, Stefan
<br>
<p>This is more Fortran than MPI or OpenMPI, but anyway ...
<br>
<p>Thank you for clarifying the point on F2003 automatic 
<br>
allocation/reallocation.
<br>
What was illegal in the 20th century
<br>
became legal in the new millenium,
<br>
at least when it comes to Fortran.
<br>
<p><p>I confess I have to read each sentence in Metcalf's book
<br>
several times to try to understand the nifty new Matlabish
<br>
syntax and the semantics of 21st century Fortran ..., and alas,
<br>
I am still interpreting it wrong.
<br>
The only consolation is that even the Gnu compiler seems to be
<br>
in my boat!  :)
<br>
<p>I don't know how much is gained by concatenating arrays that don't
<br>
exist yet (or objects that have an allocatable but not yet allocated
<br>
array as their single component), and how much memory management 
<br>
contortion and fragmentation this may perhaps entail,
<br>
but there may be some advantage to it.
<br>
<p>Stefan reports that if he allocates explicitly the arrays,
<br>
&quot;everything is fine&quot;.
<br>
So, why not?  :)
<br>
At least for portability, as it would allow compilation with
<br>
compilers that are not yet fully F2003 compliant,
<br>
older F90 compilers, etc.
<br>
<p>I may be wrong, but my recollection from a situation that
<br>
happened here years ago,
<br>
and which may bear some similarity to the problem reported by Stefan,
<br>
is that Intel ifort would assign one memory word to
<br>
allocatable arrays, even before they were actually allocated,
<br>
so that you could have a cavalier approach and refer to those
<br>
arrays in the RHS of equations at any time,
<br>
whereas Gnu gfortran required explicit memory allocation before
<br>
those arrays were used.
<br>
At that point the ifort behavior seemed to be a lenient extension,
<br>
whereas the gfortran behavior a more strict compliance to the standard
<br>
(which was still F90 or F95 then, IIRR).
<br>
However, this may have changed on more recent versions of those
<br>
compilers, and also to conform with more recent versions of the Fortran
<br>
standard.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p>On 01/14/2013 04:48 AM, Iliev, Hristo wrote:
<br>
<span class="quotelev1">&gt; Hi, Gus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Automatic allocation (an reallocation) on assignment is among the nifty
</span><br>
<span class="quotelev1">&gt; features of Fortran 2003. In this case &quot;conc&quot; is automatically allocated so
</span><br>
<span class="quotelev1">&gt; to match the shape of its initialiser array &quot;[ xx, yy ]&quot;. Note that &quot;xx&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;yy&quot; are not allocatable though their derived type has an allocatable
</span><br>
<span class="quotelev1">&gt; element.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo Iliev
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, January 11, 2013 7:19 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Initializing OMPI with invoking the array
</span><br>
<span class="quotelev2">&gt;&gt; constructor on Fortran derived types causes the executable to crash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Stefan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Don't you need to allocate xx, yy and conc, before you use them?
</span><br>
<span class="quotelev2">&gt;&gt; In the short program below, they are declared as allocatable, but not
</span><br>
<span class="quotelev1">&gt; actually
</span><br>
<span class="quotelev2">&gt;&gt; allocated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 01/11/2013 09:58 AM, Stefan Mauerberger wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Paul!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your reply. This problem seems to get complicated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, I can not reproduce what you are describing. I tried
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with some GCCs as 4.7.1, 4.7.2 and 4.8.0 (20121008). As you suggested,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; replacing the MPI_Init and MPI_Finalize calls with WRITE(*,*) &quot;foooo&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and commenting out use mpi, everything is just fine. No segfault no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core dump, just the result as I expect it (I put a write(*,*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size(conc) in, which must print 2). I simply compiled with a bare
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90 ... and executed typing mpirun -np 1 ./a.out .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also tried on three different architectures - all 64-bit - and, as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; soon as MPI_Init is invoked, the program gets core dumped.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also tried with IBM's MPI implementation just with the difference
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using include 'mpif.h' instead of use mpi. Everything is fine and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; result is as in serial runs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, it's not surprising that 4.4.x has its problems. Using modern
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran as F03, GCC in a version younger than  4.7.x is just mandatory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stefan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 2013-01-11 at 14:26 +0100, Paul Kapinos wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is hardly an Open MPI issue:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; switch the calls to MPI_Init, MPI_Finalize against
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WRITE(*,*) &quot;foooo&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comment aut 'USE mpi' .... an see your error (SIGSEGV) again, now
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without any MPI part in the program.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So my suspiction is this is an bug in your GCC version. Especially
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because there is no SIGSEGV using 4.7.2 GCC (whereby it crasehs using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4.4.6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==&gt;   Update your compilers!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 01/11/13 14:01, Stefan Mauerberger wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi There!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; First of all, this is my first post here. In case I am doing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something inappropriate pleas be soft with me. On top of that I am
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not quite sure whether that issue is related to Open MPI or GCC.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regarding my problem: Well, it is a little bulky, see below. I could
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; figure out that the actual crash is caused by invoking Fortran's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; array constructor [ xx, yy ] on derived-data-types xx and yy. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one key factor is that those types have allocatable member variables.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Well, that fact points to blame gfortran for that. However, the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; crash does not occur if MPI_Iinit is not called in before. Compiled
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as a serial program everything works perfectly fine. I am pretty
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sure, the lines I wrote are valid F2003 code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is a minimal working example:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PROGRAM main
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        USE mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        INTEGER :: ierr
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        TYPE :: test_typ
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            REAL, ALLOCATABLE :: a(:)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        END TYPE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        TYPE(test_typ) :: xx, yy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        TYPE(test_typ), ALLOCATABLE :: conc(:)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        CALL mpi_init( ierr )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        conc = [ xx, yy ]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        CALL mpi_finalize( ierr )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; END PROGRAM main
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just compile with mpif90 ... and execute leads to:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *** glibc detected *** ./a.out: free(): invalid pointer:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0x00007fefd2a147f8 *** ======= Backtrace: =========
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x7eb96)[0x7fefd26dab96]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./a.out[0x400fdb]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./a.out(main+0x34)[0x401132]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)[0x7fefd267d
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 76d]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./a.out[0x400ad9]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With commenting out 'CALL MPI_Init' and 'MPI_Finalize' everything
</span><br>
<span class="quotelev2">&gt;&gt; seems to be fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What do you think: Is this a OMPI or a GCC related bug?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Stefan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21127.php">Matthias Jurenz: "Re: [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="21125.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.9 in Java and C"</a>
<li><strong>In reply to:</strong> <a href="21118.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
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
