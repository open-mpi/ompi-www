<?
$subject_val = "[OMPI users] OMPI error in MPI_Cart_create (in code that works with MPICH2)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 14:02:41 2009" -->
<!-- isoreceived="20090901180241" -->
<!-- sent="Tue, 1 Sep 2009 14:02:35 -0400" -->
<!-- isosent="20090901180235" -->
<!-- name="Greg Fischer" -->
<!-- email="greg.a.fischer_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI error in MPI_Cart_create (in code that works with MPICH2)" -->
<!-- id="c615a6650909011102t2ca773a5h80105013fc4cf1b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OMPI error in MPI_Cart_create (in code that works with MPICH2)<br>
<strong>From:</strong> Greg Fischer (<em>greg.a.fischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-01 14:02:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10536.php">Dorian Krause: "Re: [OMPI users] problems with one sided MPI"</a>
<li><strong>Previous message:</strong> <a href="10534.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10546.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<li><strong>Reply:</strong> <a href="10546.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm receiving the error posted at the bottom of this message with a code
<br>
compiled with Intel Fortran/C Version 11.1 against OpenMPI version 1.3.2.
<br>
<p>The same code works correctly when compiled against MPICH2.  (We have
<br>
re-compiled with OpenMPI to take advantage of newly-installed Infiniband
<br>
hardware.  The &quot;ring&quot; test problem appears to work correctly over
<br>
Infiniband.)
<br>
<p>There are no &quot;fork()&quot; calls in our code, so I can only guess that something
<br>
weird is going on with MPI_COMM_WORLD.  The code in question is a Fortran 90
<br>
code.  Right now, it is being compiled with &quot;include 'mpif.h'&quot; statements at
<br>
the beginning of each MPI subroutine, instead of  making use of the &quot;mpi&quot;
<br>
modules.  Could this be causing the problem?  How else should I go about
<br>
diagnosing the problem?
<br>
<p>Thanks,
<br>
Greg
<br>
<p>--------------------------------------------------------------------------
<br>
An MPI process has executed an operation involving a call to the
<br>
&quot;fork()&quot; system call to create a child process.  Open MPI is currently
<br>
operating in a condition that could result in memory corruption or
<br>
other system errors; your MPI job may hang, crash, or produce silent
<br>
data corruption.  The use of fork() (or system() or other calls that
<br>
create child processes) is strongly discouraged.
<br>
<p>The process that invoked fork was:
<br>
<p>&nbsp;&nbsp;Local host:          bl316 (PID 26806)
<br>
&nbsp;&nbsp;MPI_COMM_WORLD rank: 0
<br>
<p>If you are *absolutely sure* that your application will successfully
<br>
and correctly survive a call to fork(), you may disable this warning
<br>
by setting the mpi_warn_on_fork MCA parameter to 0.
<br>
--------------------------------------------------------------------------
<br>
[bl205:5014] *** An error occurred in MPI_Cart_create
<br>
[bl205:5014] *** on communicator MPI_COMM_WORLD
<br>
[bl205:5014] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[bl205:5014] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 4 with PID 5010 on
<br>
node bl205 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[bl205:05008] 7 more processes have sent help message help-mpi-errors.txt /
<br>
mpi_errors_are_fatal
<br>
[bl205:05008] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
<br>
help / error messages
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10535/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10536.php">Dorian Krause: "Re: [OMPI users] problems with one sided MPI"</a>
<li><strong>Previous message:</strong> <a href="10534.php">Lenny Verkhovsky: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10546.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<li><strong>Reply:</strong> <a href="10546.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
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
