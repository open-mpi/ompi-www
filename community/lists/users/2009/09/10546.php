<?
$subject_val = "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 00:01:08 2009" -->
<!-- isoreceived="20090902040108" -->
<!-- sent="Wed, 2 Sep 2009 07:01:03 +0300" -->
<!-- isosent="20090902040103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)" -->
<!-- id="665F1A2F-7EBB-46CD-81F6-DA55A5665777_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c615a6650909011102t2ca773a5h80105013fc4cf1b_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 00:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10547.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Previous message:</strong> <a href="10545.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10535.php">Greg Fischer: "[OMPI users] OMPI error in MPI_Cart_create (in code that works with MPICH2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10560.php">Greg Fischer: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<li><strong>Reply:</strong> <a href="10560.php">Greg Fischer: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*Something* in your code is calling fork() -- it may be an indirect  
<br>
call such as system() or popen() or somesuch.  This particular error  
<br>
message is only printed during a &quot;fork pre-hook&quot; that Open MPI  
<br>
installs during MPI_INIT (registered via pthread_atfork()).
<br>
<p>Grep through your code for calls to system and popen -- see if any of  
<br>
these are used.
<br>
<p>There is no functional difference between &quot;include 'mpif.h'&quot; and &quot;use  
<br>
mpi&quot; in terms of MPI functionality at run time -- the only difference  
<br>
you get is a &quot;better&quot; level of compile-time protection from the  
<br>
Fortran compiler.  Specifically, &quot;use mpi&quot; will introduce strict type  
<br>
checking for many (but not all) of the MPI functions at compile time.   
<br>
Hence, the compiler will complain if you forget an IERR parameter to  
<br>
an MPI function, for example.
<br>
<p>&quot;use mpi&quot; is not perfect, though -- there are many well-documented  
<br>
problems because of the design of the MPI-2 Fortran 90 interface  
<br>
(which are currently being addressed in MPI-3, if you care :-) ).   
<br>
More generally: &quot;use mpi&quot; will catch *many* compile errors, but not  
<br>
*all* of them.
<br>
<p>But to answer your question succinctly: this problem won't be affected  
<br>
by using &quot;use mpi&quot; or &quot;include 'mpif.h'&quot;.
<br>
<p><p><p>On Sep 1, 2009, at 9:02 PM, Greg Fischer wrote:
<br>
<p><span class="quotelev1">&gt; I'm receiving the error posted at the bottom of this message with a  
</span><br>
<span class="quotelev1">&gt; code compiled with Intel Fortran/C Version 11.1 against OpenMPI  
</span><br>
<span class="quotelev1">&gt; version 1.3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same code works correctly when compiled against MPICH2.  (We  
</span><br>
<span class="quotelev1">&gt; have re-compiled with OpenMPI to take advantage of newly-installed  
</span><br>
<span class="quotelev1">&gt; Infiniband hardware.  The &quot;ring&quot; test problem appears to work  
</span><br>
<span class="quotelev1">&gt; correctly over Infiniband.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are no &quot;fork()&quot; calls in our code, so I can only guess that  
</span><br>
<span class="quotelev1">&gt; something weird is going on with MPI_COMM_WORLD.  The code in  
</span><br>
<span class="quotelev1">&gt; question is a Fortran 90 code.  Right now, it is being compiled with  
</span><br>
<span class="quotelev1">&gt; &quot;include 'mpif.h'&quot; statements at the beginning of each MPI  
</span><br>
<span class="quotelev1">&gt; subroutine, instead of  making use of the &quot;mpi&quot; modules.  Could this  
</span><br>
<span class="quotelev1">&gt; be causing the problem?  How else should I go about diagnosing the  
</span><br>
<span class="quotelev1">&gt; problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process has executed an operation involving a call to the
</span><br>
<span class="quotelev1">&gt; &quot;fork()&quot; system call to create a child process.  Open MPI is currently
</span><br>
<span class="quotelev1">&gt; operating in a condition that could result in memory corruption or
</span><br>
<span class="quotelev1">&gt; other system errors; your MPI job may hang, crash, or produce silent
</span><br>
<span class="quotelev1">&gt; data corruption.  The use of fork() (or system() or other calls that
</span><br>
<span class="quotelev1">&gt; create child processes) is strongly discouraged.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The process that invoked fork was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:          bl316 (PID 26806)
</span><br>
<span class="quotelev1">&gt;   MPI_COMM_WORLD rank: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are *absolutely sure* that your application will successfully
</span><br>
<span class="quotelev1">&gt; and correctly survive a call to fork(), you may disable this warning
</span><br>
<span class="quotelev1">&gt; by setting the mpi_warn_on_fork MCA parameter to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [bl205:5014] *** An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev1">&gt; [bl205:5014] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [bl205:5014] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [bl205:5014] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 4 with PID 5010 on
</span><br>
<span class="quotelev1">&gt; node bl205 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [bl205:05008] 7 more processes have sent help message help-mpi- 
</span><br>
<span class="quotelev1">&gt; errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [bl205:05008] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to  
</span><br>
<span class="quotelev1">&gt; see all help / error messages
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10547.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Previous message:</strong> <a href="10545.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10535.php">Greg Fischer: "[OMPI users] OMPI error in MPI_Cart_create (in code that works with MPICH2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10560.php">Greg Fischer: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<li><strong>Reply:</strong> <a href="10560.php">Greg Fischer: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
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
