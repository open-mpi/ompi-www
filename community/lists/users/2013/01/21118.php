<?
$subject_val = "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 14 04:48:50 2013" -->
<!-- isoreceived="20130114094850" -->
<!-- sent="Mon, 14 Jan 2013 09:48:44 +0000" -->
<!-- isosent="20130114094844" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC903CBC622_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50F057AE.2010604_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2013-01-14 04:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21117.php">Ralph Castain: "Re: [OMPI users] restarting checkpointed applications"</a>
<li><strong>In reply to:</strong> <a href="21110.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21126.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21126.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Gus,
<br>
<p>Automatic allocation (an reallocation) on assignment is among the nifty
<br>
features of Fortran 2003. In this case &quot;conc&quot; is automatically allocated so
<br>
to match the shape of its initialiser array &quot;[ xx, yy ]&quot;. Note that &quot;xx&quot; and
<br>
&quot;yy&quot; are not allocatable though their derived type has an allocatable
<br>
element.
<br>
<p>Kind regards,
<br>
Hristo Iliev
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On Behalf Of Gus Correa
</span><br>
<span class="quotelev1">&gt; Sent: Friday, January 11, 2013 7:19 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Initializing OMPI with invoking the array
</span><br>
<span class="quotelev1">&gt; constructor on Fortran derived types causes the executable to crash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Stefan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't you need to allocate xx, yy and conc, before you use them?
</span><br>
<span class="quotelev1">&gt; In the short program below, they are declared as allocatable, but not
</span><br>
actually
<br>
<span class="quotelev1">&gt; allocated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 01/11/2013 09:58 AM, Stefan Mauerberger wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear Paul!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your reply. This problem seems to get complicated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, I can not reproduce what you are describing. I tried
</span><br>
<span class="quotelev2">&gt; &gt; with some GCCs as 4.7.1, 4.7.2 and 4.8.0 (20121008). As you suggested,
</span><br>
<span class="quotelev2">&gt; &gt; replacing the MPI_Init and MPI_Finalize calls with WRITE(*,*) &quot;foooo&quot;
</span><br>
<span class="quotelev2">&gt; &gt; and commenting out use mpi, everything is just fine. No segfault no
</span><br>
<span class="quotelev2">&gt; &gt; core dump, just the result as I expect it (I put a write(*,*)
</span><br>
<span class="quotelev2">&gt; &gt; size(conc) in, which must print 2). I simply compiled with a bare
</span><br>
<span class="quotelev2">&gt; &gt; mpif90 ... and executed typing mpirun -np 1 ./a.out .
</span><br>
<span class="quotelev2">&gt; &gt; I also tried on three different architectures - all 64-bit - and, as
</span><br>
<span class="quotelev2">&gt; &gt; soon as MPI_Init is invoked, the program gets core dumped.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also tried with IBM's MPI implementation just with the difference
</span><br>
<span class="quotelev2">&gt; &gt; using include 'mpif.h' instead of use mpi. Everything is fine and the
</span><br>
<span class="quotelev2">&gt; &gt; result is as in serial runs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well, it's not surprising that 4.4.x has its problems. Using modern
</span><br>
<span class="quotelev2">&gt; &gt; Fortran as F03, GCC in a version younger than  4.7.x is just mandatory.
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 2013-01-11 at 14:26 +0100, Paul Kapinos wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is hardly an Open MPI issue:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; switch the calls to MPI_Init, MPI_Finalize against
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WRITE(*,*) &quot;foooo&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; comment aut 'USE mpi' .... an see your error (SIGSEGV) again, now
</span><br>
<span class="quotelev3">&gt; &gt;&gt; without any MPI part in the program.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So my suspiction is this is an bug in your GCC version. Especially
</span><br>
<span class="quotelev3">&gt; &gt;&gt; because there is no SIGSEGV using 4.7.2 GCC (whereby it crasehs using
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4.4.6)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==&gt;  Update your compilers!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 01/11/13 14:01, Stefan Mauerberger wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi There!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; First of all, this is my first post here. In case I am doing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; something inappropriate pleas be soft with me. On top of that I am
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; not quite sure whether that issue is related to Open MPI or GCC.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regarding my problem: Well, it is a little bulky, see below. I could
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; figure out that the actual crash is caused by invoking Fortran's
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; array constructor [ xx, yy ] on derived-data-types xx and yy. The
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; one key factor is that those types have allocatable member variables.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Well, that fact points to blame gfortran for that. However, the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; crash does not occur if MPI_Iinit is not called in before. Compiled
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; as a serial program everything works perfectly fine. I am pretty
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sure, the lines I wrote are valid F2003 code.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Here is a minimal working example:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PROGRAM main
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       USE mpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       IMPLICIT NONE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       INTEGER :: ierr
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       TYPE :: test_typ
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           REAL, ALLOCATABLE :: a(:)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       END TYPE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       TYPE(test_typ) :: xx, yy
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       TYPE(test_typ), ALLOCATABLE :: conc(:)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       CALL mpi_init( ierr )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       conc = [ xx, yy ]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       CALL mpi_finalize( ierr )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; END PROGRAM main
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Just compile with mpif90 ... and execute leads to:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; *** glibc detected *** ./a.out: free(): invalid pointer:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0x00007fefd2a147f8 *** ======= Backtrace: =========
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x7eb96)[0x7fefd26dab96]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ./a.out[0x400fdb]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ./a.out(main+0x34)[0x401132]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)[0x7fefd267d
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 76d]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ./a.out[0x400ad9]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; With commenting out 'CALL MPI_Init' and 'MPI_Finalize' everything
</span><br>
<span class="quotelev1">&gt; seems to be fine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What do you think: Is this a OMPI or a GCC related bug?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Stefan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21118/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21119.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21117.php">Ralph Castain: "Re: [OMPI users] restarting checkpointed applications"</a>
<li><strong>In reply to:</strong> <a href="21110.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21126.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Reply:</strong> <a href="21126.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
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
