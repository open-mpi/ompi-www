<?
$subject_val = "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 15:18:51 2012" -->
<!-- isoreceived="20120404191851" -->
<!-- sent="Wed, 4 Apr 2012 16:18:25 -0300" -->
<!-- isosent="20120404191825" -->
<!-- name="Thatyene Louise Alves de Souza Ramos" -->
<!-- email="thatyene_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)" -->
<!-- id="CAEyYoRqozrqdO1eoSQ-4Xh6yQgEQ-FeOZ0Gbx5R47CKhPOOs1A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F737C95.8040003_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)<br>
<strong>From:</strong> Thatyene Louise Alves de Souza Ramos (<em>thatyene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 15:18:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18942.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18940.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18866.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18942.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18942.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there.
<br>
<p>I've made some tests related to the problem reported by Rodrigo. And I
<br>
think, I'd rather be wrong, that *collective calls like Create and Dup do
<br>
not work with Inter communicators. I've try this in the client group:*
<br>
<p>*MPI::Intercomm tmp_inter_comm;*
<br>
*
<br>
*
<br>
*tmp_inter_comm = server_comm.Create (server_comm.Get_group().Excl(1,
<br>
&amp;rank));*
<br>
*
<br>
*
<br>
*if(server_comm.Get_rank() != rank)*
<br>
* server_comm = tmp_inter_comm.Dup();*
<br>
*else*
<br>
* server_comm = MPI::COMM_NULL;*
<br>
*
<br>
*
<br>
The server_comm is the original inter communicator with the server group.
<br>
<p>I've noticed that the program hangs in the Dup call. It seems that the
<br>
tmp_inter_comm created without one process still has this process, because
<br>
the other processes are waiting for it call the Dup too.
<br>
<p>What do you think?
<br>
<p>On Wed, Mar 28, 2012 at 6:03 PM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; it just uses a different algorithm which avoids the bcast on a
</span><br>
<span class="quotelev1">&gt; communicator of 1 (which is causing the problem here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/28/2012 12:08 PM, Rodrigo Oliveira wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Edgar,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tested the execution of my code using the option -mca coll ^inter as
</span><br>
<span class="quotelev2">&gt; &gt; you suggested and the program worked fine, even when I use 1 server
</span><br>
<span class="quotelev2">&gt; &gt; instance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is the modification caused by this parameter? I did not find an
</span><br>
<span class="quotelev2">&gt; &gt; explanation about the utilization of the module coll inter.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot for your attention and for the solution.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rodrigo Oliveira
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Mar 27, 2012 at 1:10 PM, Rodrigo Oliveira
</span><br>
<span class="quotelev2">&gt; &gt; &lt;rsilva.oliveira_at_[hidden] &lt;mailto:rsilva.oliveira_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Hi Edgar.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Thanks for the response. I just did not understand why the Barrier
</span><br>
<span class="quotelev2">&gt; &gt;     works before I remove one of the client processes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     I tryed it with 1 server and 3 clients and it worked properly. After
</span><br>
<span class="quotelev2">&gt; &gt;     I removed 1 of the clients, it stops working. So, the removal is
</span><br>
<span class="quotelev2">&gt; &gt;     affecting the functionality of Barrier, I guess.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Anyone has an idea?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     On Mon, Mar 26, 2012 at 12:34 PM, Edgar Gabriel &lt;gabriel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;     &lt;mailto:gabriel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         I do not recall on what the agreement was on how to treat the
</span><br>
<span class="quotelev1">&gt; size=1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18941/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18942.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18940.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18866.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18942.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18942.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
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
