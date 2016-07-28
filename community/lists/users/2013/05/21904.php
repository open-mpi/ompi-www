<?
$subject_val = "Re: [OMPI users] users Digest, Vol 2574, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 18:03:41 2013" -->
<!-- isoreceived="20130514220341" -->
<!-- sent="Wed, 15 May 2013 07:03:35 +0900" -->
<!-- isosent="20130514220335" -->
<!-- name="Hayato KUNIIE" -->
<!-- email="kuni255_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 2574, Issue 1" -->
<!-- id="5192B4B7.5000707_at_oita.email.ne.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPUxaiSn8jnJEMVBBWXvZwArqxo5u-L_VqNcbQQ99UiiDONz-w_at_mail.gmail.com" -->
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
<strong>From:</strong> Hayato KUNIIE (<em>kuni255_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 18:03:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="21903.php">Damien Kick: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="21898.php">Andrea Negri: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I proclaimed implicit definition of type to add 'implicit node'.
<br>
And I change include 'mpif.h' to use mpi.
<br>
But Unfortunately I couldn't get more information.
<br>
<p>Error occuring on only slave node is to feel uneasy.
<br>
But I have no idea except this.
<br>
<p><p><p>(2013/05/15 1:11), Andrea Negri wrote:
<br>
<span class="quotelev1">&gt; I'm not an expert of MPI, but I stronly encourage you to use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This can save a LOT of time in the debug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14 May 2013 18:00,  &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt;&gt;          users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt;&gt;          <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt;&gt;          users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt;&gt;          users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     1. MPI_SUM is not defined on the MPI_INTEGER datatype (Hayato KUNIIE)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 15 May 2013 00:39:06 +0900
</span><br>
<span class="quotelev2">&gt;&gt; From: Hayato KUNIIE &lt;kuni255_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER
</span><br>
<span class="quotelev2">&gt;&gt;          datatype
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;51925A9A.50401_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-2022-JP
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello I'm kuni255
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I build bewulf type PC Cluster (Cent OS release 6.4). And I studing
</span><br>
<span class="quotelev2">&gt;&gt; about MPI.(Open MPI Ver.1.6.4) I tried following sample which using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_REDUCE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, Error occured.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This cluster system consist of one head node and 2 slave nodes.
</span><br>
<span class="quotelev2">&gt;&gt; And sharing home directory in head node by NFS. so Open MPI is installed
</span><br>
<span class="quotelev2">&gt;&gt; each nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I test this program on only head node, program is run correctly.
</span><br>
<span class="quotelev2">&gt;&gt; and output result.
</span><br>
<span class="quotelev2">&gt;&gt; But When I test this program on only slave node, same error occured.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please tell me, good idea : )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error message
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** An error occurred in MPI_Reduce: the reduction
</span><br>
<span class="quotelev2">&gt;&gt; operation MPI_SUM is not defined on the MPI_INTEGER datatype
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 1 with PID 30793 on
</span><br>
<span class="quotelev2">&gt;&gt; node bwslv01 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [bwhead.clnet:02147] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev2">&gt;&gt; [bwhead.clnet:02147] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
</span><br>
<span class="quotelev2">&gt;&gt; to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 source code
</span><br>
<span class="quotelev2">&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt; parameter(nmax=12)
</span><br>
<span class="quotelev2">&gt;&gt; integer n(nmax)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_comm_size(MPI_COMM_WORLD, isize, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_comm_rank(MPI_COMM_WORLD, irank, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; ista=irank*(nmax/isize) + 1
</span><br>
<span class="quotelev2">&gt;&gt; iend=ista+(nmax/isize-1)
</span><br>
<span class="quotelev2">&gt;&gt; isum=0
</span><br>
<span class="quotelev2">&gt;&gt; do i=1,nmax
</span><br>
<span class="quotelev2">&gt;&gt; n(i) = i
</span><br>
<span class="quotelev2">&gt;&gt; isum = isum + n(i)
</span><br>
<span class="quotelev2">&gt;&gt; end do
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_reduce(isum, itmp, 1, MPI_INTEGER, MPI_SUM,
</span><br>
<span class="quotelev2">&gt;&gt; &amp; 0, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (irank == 0) then
</span><br>
<span class="quotelev2">&gt;&gt; isum=itmp
</span><br>
<span class="quotelev2">&gt;&gt; WRITE(*,*) isum
</span><br>
<span class="quotelev2">&gt;&gt; endif
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
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
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 2574, Issue 1
</span><br>
<span class="quotelev2">&gt;&gt; **************************************
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="21903.php">Damien Kick: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="21898.php">Andrea Negri: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
<!-- nextthread="start" -->
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
