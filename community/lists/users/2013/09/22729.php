<?
$subject_val = "Re: [OMPI users] mpi_barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 28 20:03:18 2013" -->
<!-- isoreceived="20130929000318" -->
<!-- sent="Sun, 29 Sep 2013 02:03:15 +0200" -->
<!-- isosent="20130929000315" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_barrier" -->
<!-- id="CFE0D14C-A4C7-4157-97E8-8636513C54F6_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOQ90zEr7vnn1UUGHFGN13Js8=hssEC0mBO6P0rGH5M4o5_tXA_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-28 20:03:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22730.php">Huangwei: "Re: [OMPI users] mpi_barrier"</a>
<li><strong>Previous message:</strong> <a href="22728.php">Huangwei: "[OMPI users] mpi_barrier"</a>
<li><strong>In reply to:</strong> <a href="22728.php">Huangwei: "[OMPI users] mpi_barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22730.php">Huangwei: "Re: [OMPI users] mpi_barrier"</a>
<li><strong>Reply:</strong> <a href="22730.php">Huangwei: "Re: [OMPI users] mpi_barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 29, 2013, at 01:19 , Huangwei &lt;hz283_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my code I implement mpi_send/mpi_receive for an three dimensional real array, and process is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; all other processors send the array to rank 0 and then rank 0 receives the array and put these arrays into a complete array. Then mpi_bcast is called to send the complete array from rank 0 to all others. 
</span><br>
<p>This pattern of communication reminds me of an MPI_Allgather (or the more flexible version MPI_Allgatherv). 
<br>
<p><span class="quotelev1">&gt; This is very basic usage of mpi_send and mpi_receive. In my fortran code I found that if I added call mpi_barrier(...) before the mpi_send and mpi_receive statements the wall time (60s) for this sending and receiving will be much lower than that if mpi_barrier is not called (2s). I used mpi_wtime to count the time. 
</span><br>
<p>In a parallel application each process is out of sync to the others. I have no idea how you measure your time in the original version but I guess that in the MPI_Barrier case you start your timer after the barrier. As the barrier put in sync all processes, you only measure the real time to exchange the data, which might seem shorter.
<br>
<p><span class="quotelev1">&gt; I think mpi_send and mpi_recv are blocking subroutines and thus no additional mpi_barrier is needed. Can anybody tell me what is the reason for this phenomena? Thank you very much. 
</span><br>
<p>Yes, these operations are indeed blocking, which is why you see the slowdown. If one single process is late to send its contribution, the entire operation is be penalized (as the root , aka. process zero, is waiting for contributions in order). So you should either try to use the collective pattern I highlighted before, switch to using non-blocking point-to-point instead of blocking, or look into the potential benefit of using a non-blocking collective.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt;  
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22729/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22730.php">Huangwei: "Re: [OMPI users] mpi_barrier"</a>
<li><strong>Previous message:</strong> <a href="22728.php">Huangwei: "[OMPI users] mpi_barrier"</a>
<li><strong>In reply to:</strong> <a href="22728.php">Huangwei: "[OMPI users] mpi_barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22730.php">Huangwei: "Re: [OMPI users] mpi_barrier"</a>
<li><strong>Reply:</strong> <a href="22730.php">Huangwei: "Re: [OMPI users] mpi_barrier"</a>
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
