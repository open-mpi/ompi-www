<?
$subject_val = "Re: [OMPI users] users Digest, Vol 2574, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 12:11:28 2013" -->
<!-- isoreceived="20130514161128" -->
<!-- sent="Tue, 14 May 2013 18:11:01 +0200" -->
<!-- isosent="20130514161101" -->
<!-- name="Andrea Negri" -->
<!-- email="negri.andre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 2574, Issue 1" -->
<!-- id="CAPUxaiSn8jnJEMVBBWXvZwArqxo5u-L_VqNcbQQ99UiiDONz-w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.19.1368547202.3662.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 2574, Issue 1<br>
<strong>From:</strong> Andrea Negri (<em>negri.andre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 12:11:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21899.php">Damien Kick: "[OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="21897.php">Hayato KUNIIE: "[OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21904.php">Hayato KUNIIE: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
<li><strong>Reply:</strong> <a href="21904.php">Hayato KUNIIE: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not an expert of MPI, but I stronly encourage you to use
<br>
<p>use mpi
<br>
implicit none
<br>
<p>This can save a LOT of time in the debug.
<br>
<p><p>On 14 May 2013 18:00,  &lt;users-request_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. MPI_SUM is not defined on the MPI_INTEGER datatype (Hayato KUNIIE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 15 May 2013 00:39:06 +0900
</span><br>
<span class="quotelev1">&gt; From: Hayato KUNIIE &lt;kuni255_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER
</span><br>
<span class="quotelev1">&gt;         datatype
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;51925A9A.50401_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-2022-JP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello I'm kuni255
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I build bewulf type PC Cluster (Cent OS release 6.4). And I studing
</span><br>
<span class="quotelev1">&gt; about MPI.(Open MPI Ver.1.6.4) I tried following sample which using
</span><br>
<span class="quotelev1">&gt; MPI_REDUCE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, Error occured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This cluster system consist of one head node and 2 slave nodes.
</span><br>
<span class="quotelev1">&gt; And sharing home directory in head node by NFS. so Open MPI is installed
</span><br>
<span class="quotelev1">&gt; each nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I test this program on only head node, program is run correctly.
</span><br>
<span class="quotelev1">&gt; and output result.
</span><br>
<span class="quotelev1">&gt; But When I test this program on only slave node, same error occured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please tell me, good idea : )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error message
</span><br>
<span class="quotelev1">&gt; [bwslv01:30793] *** An error occurred in MPI_Reduce: the reduction
</span><br>
<span class="quotelev1">&gt; operation MPI_SUM is not defined on the MPI_INTEGER datatype
</span><br>
<span class="quotelev1">&gt; [bwslv01:30793] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [bwslv01:30793] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt; [bwslv01:30793] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 30793 on
</span><br>
<span class="quotelev1">&gt; node bwslv01 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [bwhead.clnet:02147] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [bwhead.clnet:02147] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
</span><br>
<span class="quotelev1">&gt; to see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fortran90 source code
</span><br>
<span class="quotelev1">&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; parameter(nmax=12)
</span><br>
<span class="quotelev1">&gt; integer n(nmax)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_comm_size(MPI_COMM_WORLD, isize, ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_comm_rank(MPI_COMM_WORLD, irank, ierr)
</span><br>
<span class="quotelev1">&gt; ista=irank*(nmax/isize) + 1
</span><br>
<span class="quotelev1">&gt; iend=ista+(nmax/isize-1)
</span><br>
<span class="quotelev1">&gt; isum=0
</span><br>
<span class="quotelev1">&gt; do i=1,nmax
</span><br>
<span class="quotelev1">&gt; n(i) = i
</span><br>
<span class="quotelev1">&gt; isum = isum + n(i)
</span><br>
<span class="quotelev1">&gt; end do
</span><br>
<span class="quotelev1">&gt; call mpi_reduce(isum, itmp, 1, MPI_INTEGER, MPI_SUM,
</span><br>
<span class="quotelev1">&gt; &amp; 0, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (irank == 0) then
</span><br>
<span class="quotelev1">&gt; isum=itmp
</span><br>
<span class="quotelev1">&gt; WRITE(*,*) isum
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 2574, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21899.php">Damien Kick: "[OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="21897.php">Hayato KUNIIE: "[OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21904.php">Hayato KUNIIE: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
<li><strong>Reply:</strong> <a href="21904.php">Hayato KUNIIE: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
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
