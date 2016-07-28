<?
$subject_val = "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 10:27:16 2009" -->
<!-- isoreceived="20090902142716" -->
<!-- sent="Wed, 2 Sep 2009 10:27:11 -0400" -->
<!-- isosent="20090902142711" -->
<!-- name="Greg Fischer" -->
<!-- email="greg.a.fischer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)" -->
<!-- id="c615a6650909020727x6a9ad5a4me694e50c7747176_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="665F1A2F-7EBB-46CD-81F6-DA55A5665777_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)<br>
<strong>From:</strong> Greg Fischer (<em>greg.a.fischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 10:27:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10561.php">Lenny Verkhovsky: "Re: [OMPI users] Help: Infiniband interface hang"</a>
<li><strong>Previous message:</strong> <a href="10559.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>In reply to:</strong> <a href="10546.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10577.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that workswithMPICH2)"</a>
<li><strong>Reply:</strong> <a href="10577.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that workswithMPICH2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Jeff.
<br>
<p>OK, I've found the offending code and gotten rid of the fork() warning.  I'm
<br>
still left with this:
<br>
<p>[bl302:26556] *** An error occurred in MPI_Cart_create
<br>
[bl302:26556] *** on communicator MPI_COMM_WORLD
<br>
[bl302:26556] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[bl302:26556] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 4 with PID 13693 on
<br>
node bl316 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[bl316:13691] 7 more processes have sent help message help-mpi-errors.txt /
<br>
mpi_errors_are_fatal
<br>
[bl316:13691] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
<br>
help / error messages
<br>
<p>I'm going to try re-compiling OpenMPI, itself, with the Intel compilers.
<br>
Any other ideas?
<br>
<p><p>On Wed, Sep 2, 2009 at 12:01 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; *Something* in your code is calling fork() -- it may be an indirect call
</span><br>
<span class="quotelev1">&gt; such as system() or popen() or somesuch.  This particular error message is
</span><br>
<span class="quotelev1">&gt; only printed during a &quot;fork pre-hook&quot; that Open MPI installs during MPI_INIT
</span><br>
<span class="quotelev1">&gt; (registered via pthread_atfork()).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Grep through your code for calls to system and popen -- see if any of these
</span><br>
<span class="quotelev1">&gt; are used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no functional difference between &quot;include 'mpif.h'&quot; and &quot;use mpi&quot;
</span><br>
<span class="quotelev1">&gt; in terms of MPI functionality at run time -- the only difference you get is
</span><br>
<span class="quotelev1">&gt; a &quot;better&quot; level of compile-time protection from the Fortran compiler.
</span><br>
<span class="quotelev1">&gt;  Specifically, &quot;use mpi&quot; will introduce strict type checking for many (but
</span><br>
<span class="quotelev1">&gt; not all) of the MPI functions at compile time.  Hence, the compiler will
</span><br>
<span class="quotelev1">&gt; complain if you forget an IERR parameter to an MPI function, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;use mpi&quot; is not perfect, though -- there are many well-documented problems
</span><br>
<span class="quotelev1">&gt; because of the design of the MPI-2 Fortran 90 interface (which are currently
</span><br>
<span class="quotelev1">&gt; being addressed in MPI-3, if you care :-) ).  More generally: &quot;use mpi&quot; will
</span><br>
<span class="quotelev1">&gt; catch *many* compile errors, but not *all* of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But to answer your question succinctly: this problem won't be affected by
</span><br>
<span class="quotelev1">&gt; using &quot;use mpi&quot; or &quot;include 'mpif.h'&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 1, 2009, at 9:02 PM, Greg Fischer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm receiving the error posted at the bottom of this message with a code
</span><br>
<span class="quotelev2">&gt;&gt; compiled with Intel Fortran/C Version 11.1 against OpenMPI version 1.3.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The same code works correctly when compiled against MPICH2.  (We have
</span><br>
<span class="quotelev2">&gt;&gt; re-compiled with OpenMPI to take advantage of newly-installed Infiniband
</span><br>
<span class="quotelev2">&gt;&gt; hardware.  The &quot;ring&quot; test problem appears to work correctly over
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are no &quot;fork()&quot; calls in our code, so I can only guess that
</span><br>
<span class="quotelev2">&gt;&gt; something weird is going on with MPI_COMM_WORLD.  The code in question is a
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 90 code.  Right now, it is being compiled with &quot;include 'mpif.h'&quot;
</span><br>
<span class="quotelev2">&gt;&gt; statements at the beginning of each MPI subroutine, instead of  making use
</span><br>
<span class="quotelev2">&gt;&gt; of the &quot;mpi&quot; modules.  Could this be causing the problem?  How else should I
</span><br>
<span class="quotelev2">&gt;&gt; go about diagnosing the problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; An MPI process has executed an operation involving a call to the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;fork()&quot; system call to create a child process.  Open MPI is currently
</span><br>
<span class="quotelev2">&gt;&gt; operating in a condition that could result in memory corruption or
</span><br>
<span class="quotelev2">&gt;&gt; other system errors; your MPI job may hang, crash, or produce silent
</span><br>
<span class="quotelev2">&gt;&gt; data corruption.  The use of fork() (or system() or other calls that
</span><br>
<span class="quotelev2">&gt;&gt; create child processes) is strongly discouraged.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The process that invoked fork was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Local host:          bl316 (PID 26806)
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_COMM_WORLD rank: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you are *absolutely sure* that your application will successfully
</span><br>
<span class="quotelev2">&gt;&gt; and correctly survive a call to fork(), you may disable this warning
</span><br>
<span class="quotelev2">&gt;&gt; by setting the mpi_warn_on_fork MCA parameter to 0.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [bl205:5014] *** An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev2">&gt;&gt; [bl205:5014] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [bl205:5014] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt;&gt; [bl205:5014] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 4 with PID 5010 on
</span><br>
<span class="quotelev2">&gt;&gt; node bl205 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [bl205:05008] 7 more processes have sent help message help-mpi-errors.txt
</span><br>
<span class="quotelev2">&gt;&gt; / mpi_errors_are_fatal
</span><br>
<span class="quotelev2">&gt;&gt; [bl205:05008] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
</span><br>
<span class="quotelev2">&gt;&gt; help / error messages
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10560/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10561.php">Lenny Verkhovsky: "Re: [OMPI users] Help: Infiniband interface hang"</a>
<li><strong>Previous message:</strong> <a href="10559.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>In reply to:</strong> <a href="10546.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10577.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that workswithMPICH2)"</a>
<li><strong>Reply:</strong> <a href="10577.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that workswithMPICH2)"</a>
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
