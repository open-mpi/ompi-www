<?
$subject_val = "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 10:47:07 2012" -->
<!-- isoreceived="20120320144707" -->
<!-- sent="Tue, 20 Mar 2012 09:47:00 -0500" -->
<!-- isosent="20120320144700" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)" -->
<!-- id="4F689864.90207_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABm3_qqR1XyEa0CbHDiYWjqKNU6V5MLwNY3FOkmufT4eVq4YJQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 10:47:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18808.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18803.php">Rodrigo Oliveira: "[OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18817.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18817.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
do you have by any chance the actual or a small reproducer? It might be
<br>
much easier to hunt the problem down...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 3/19/2012 8:12 PM, Rodrigo Oliveira wrote:
<br>
<span class="quotelev1">&gt; Hi there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am facing a very strange problem when using MPI_Barrier over an
</span><br>
<span class="quotelev1">&gt; inter-communicator after some operations I describe bellow:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) I start a server calling mpirun.
</span><br>
<span class="quotelev1">&gt; 2) The server spawns 2 copies of a client using MPI_Comm_spawn, creating
</span><br>
<span class="quotelev1">&gt; an inter-communicator between the two groups. The server group with 1
</span><br>
<span class="quotelev1">&gt; process (lets name it as A) and the client group with 2 processes (group B).
</span><br>
<span class="quotelev1">&gt; 3) After that, I need to detach one of the processes (rank 0) in group B
</span><br>
<span class="quotelev1">&gt; from the inter-communicator AB. To do that I do the following steps:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Server side:
</span><br>
<span class="quotelev1">&gt;         .....
</span><br>
<span class="quotelev1">&gt;         tmp_inter_comm = client_comm.Create ( client_comm.Get_group ( ) );
</span><br>
<span class="quotelev1">&gt; client_comm.Free ( );
</span><br>
<span class="quotelev1">&gt; client_comm = tmp_inter_comm;
</span><br>
<span class="quotelev1">&gt;         .....
</span><br>
<span class="quotelev1">&gt;         client_comm.Barrier();
</span><br>
<span class="quotelev1">&gt;         .....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Client side:
</span><br>
<span class="quotelev1">&gt;         ....
</span><br>
<span class="quotelev1">&gt;         rank = 0;
</span><br>
<span class="quotelev1">&gt;         tmp_inter_comm = server_comm.Create ( server_comm.Get_group (
</span><br>
<span class="quotelev1">&gt; ).Excl ( 1, &amp;rank ) );
</span><br>
<span class="quotelev1">&gt; server_comm.Free ( );
</span><br>
<span class="quotelev1">&gt; server_comm = tmp_inter_comm;
</span><br>
<span class="quotelev1">&gt;         .....
</span><br>
<span class="quotelev1">&gt;         if (server_comm != MPI::COMM_NULL)
</span><br>
<span class="quotelev1">&gt;             server_comm.Barrier();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem: everything works fine until the call to Barrier. In that
</span><br>
<span class="quotelev1">&gt; point, the server exits the barrier, but the client at the group B does
</span><br>
<span class="quotelev1">&gt; not. Observe that we have only one process inside B, because I used Excl
</span><br>
<span class="quotelev1">&gt; to remove one process from the original group.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; p.s.: This occurs in the version 1.5.4 and the C++ API.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am very concerned about this problem because this solution plays a
</span><br>
<span class="quotelev1">&gt; very important role in my master thesis.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this an ompi problem or am I doing something wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rodrigo Oliveira
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
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18809/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18808.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18803.php">Rodrigo Oliveira: "[OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18817.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18817.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
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
