<?
$subject_val = "Re: [OMPI users] mpi_barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 29 07:12:35 2013" -->
<!-- isoreceived="20130929111235" -->
<!-- sent="Sun, 29 Sep 2013 12:11:51 +0100" -->
<!-- isosent="20130929111151" -->
<!-- name="Huangwei" -->
<!-- email="hz283_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_barrier" -->
<!-- id="CAOQ90zFftuk9dswS2TDaJMSa7U0XxKn6ZB9ETfGBtBc8XRThFg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CFE0D14C-A4C7-4157-97E8-8636513C54F6_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_barrier<br>
<strong>From:</strong> Huangwei (<em>hz283_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-29 07:11:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22731.php">Siegmar Gross: "[OMPI users] Error compiling openmpi-1.9a1r29292"</a>
<li><strong>Previous message:</strong> <a href="22729.php">George Bosilca: "Re: [OMPI users] mpi_barrier"</a>
<li><strong>In reply to:</strong> <a href="22729.php">George Bosilca: "Re: [OMPI users] mpi_barrier"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear George,
<br>
<p>Please see below.
<br>
<p><p>On 29 September 2013 01:03, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2013, at 01:19 , Huangwei &lt;hz283_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my code I implement mpi_send/mpi_receive for an three dimensional real
</span><br>
<span class="quotelev1">&gt; array, and process is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; all other processors send the array to rank 0 and then rank 0 receives the
</span><br>
<span class="quotelev1">&gt; array and put these arrays into a complete array. Then mpi_bcast is called
</span><br>
<span class="quotelev1">&gt; to send the complete array from rank 0 to all others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This pattern of communication reminds me of an MPI_Allgather (or the more
</span><br>
<span class="quotelev1">&gt; flexible version MPI_Allgatherv).
</span><br>
<span class="quotelev1">&gt;
</span><br>
I tried  MPI_Allgatherv in my case and found that it is a little slower
<br>
than mpi_send and mpi_recv pairs. The array that needed to be transferred
<br>
is not small. Generally, from your experience which option is more
<br>
efficient (need less wall time for this data transferring of large data).
<br>
Thanks.
<br>
<p><span class="quotelev1">&gt;  This is very basic usage of mpi_send and mpi_receive. In my fortran code
</span><br>
<span class="quotelev1">&gt; I found that if I added call mpi_barrier(...) before the mpi_send and
</span><br>
<span class="quotelev1">&gt; mpi_receive statements the wall time (60s) for this sending and receiving
</span><br>
<span class="quotelev1">&gt; will be much lower than that if mpi_barrier is not called (2s). I used
</span><br>
<span class="quotelev1">&gt; mpi_wtime to count the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a parallel application each process is out of sync to the others. I
</span><br>
<span class="quotelev1">&gt; have no idea how you measure your time in the original version but I guess
</span><br>
<span class="quotelev1">&gt; that in the MPI_Barrier case you start your timer after the barrier. As the
</span><br>
<span class="quotelev1">&gt; barrier put in sync all processes, you only measure the real time to
</span><br>
<span class="quotelev1">&gt; exchange the data, which might seem shorter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think mpi_send and mpi_recv are blocking subroutines and thus no
</span><br>
<span class="quotelev1">&gt; additional mpi_barrier is needed. Can anybody tell me what is the reason
</span><br>
<span class="quotelev1">&gt; for this phenomena? Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, these operations are indeed blocking, which is why you see the
</span><br>
<span class="quotelev1">&gt; slowdown. If one single process is late to send its contribution, the
</span><br>
<span class="quotelev1">&gt; entire operation is be penalized (as the root , aka. process zero, is
</span><br>
<span class="quotelev1">&gt; waiting for contributions in order). So you should either try to use the
</span><br>
<span class="quotelev1">&gt; collective pattern I highlighted before, switch to using non-blocking
</span><br>
<span class="quotelev1">&gt; point-to-point instead of blocking, or look into the potential benefit of
</span><br>
<span class="quotelev1">&gt; using a non-blocking collective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Huangwei
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22730/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22731.php">Siegmar Gross: "[OMPI users] Error compiling openmpi-1.9a1r29292"</a>
<li><strong>Previous message:</strong> <a href="22729.php">George Bosilca: "Re: [OMPI users] mpi_barrier"</a>
<li><strong>In reply to:</strong> <a href="22729.php">George Bosilca: "Re: [OMPI users] mpi_barrier"</a>
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
