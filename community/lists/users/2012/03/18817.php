<?
$subject_val = "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 14:40:54 2012" -->
<!-- isoreceived="20120320184054" -->
<!-- sent="Tue, 20 Mar 2012 15:40:49 -0300" -->
<!-- isosent="20120320184049" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)" -->
<!-- id="CABm3_qojAFAdxjYef+T3pdsSMV75ZesGCTQAgq08UdAdr_DVgg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4F689864.90207_at_cs.uh.edu" -->
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
<strong>From:</strong> Rodrigo Oliveira (<em>rsilva.oliveira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 14:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18818.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18816.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18809.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18818.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18818.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Edgar.
<br>
<p>Thanks for the response. The simplified code is attached: server, client
<br>
and a .h containing some constants. I put some &quot;prints&quot; to show the
<br>
behavior.
<br>
<p>Regards
<br>
<p>Rodrigo
<br>
<p><p>On Tue, Mar 20, 2012 at 11:47 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; do you have by any chance the actual or a small reproducer? It might be
</span><br>
<span class="quotelev1">&gt; much easier to hunt the problem down...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/19/2012 8:12 PM, Rodrigo Oliveira wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi there.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am facing a very strange problem when using MPI_Barrier over an
</span><br>
<span class="quotelev2">&gt; &gt; inter-communicator after some operations I describe bellow:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) I start a server calling mpirun.
</span><br>
<span class="quotelev2">&gt; &gt; 2) The server spawns 2 copies of a client using MPI_Comm_spawn, creating
</span><br>
<span class="quotelev2">&gt; &gt; an inter-communicator between the two groups. The server group with 1
</span><br>
<span class="quotelev2">&gt; &gt; process (lets name it as A) and the client group with 2 processes (group
</span><br>
<span class="quotelev1">&gt; B).
</span><br>
<span class="quotelev2">&gt; &gt; 3) After that, I need to detach one of the processes (rank 0) in group B
</span><br>
<span class="quotelev2">&gt; &gt; from the inter-communicator AB. To do that I do the following steps:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Server side:
</span><br>
<span class="quotelev2">&gt; &gt;         .....
</span><br>
<span class="quotelev2">&gt; &gt;         tmp_inter_comm = client_comm.Create ( client_comm.Get_group ( )
</span><br>
<span class="quotelev1">&gt; );
</span><br>
<span class="quotelev2">&gt; &gt; client_comm.Free ( );
</span><br>
<span class="quotelev2">&gt; &gt; client_comm = tmp_inter_comm;
</span><br>
<span class="quotelev2">&gt; &gt;         .....
</span><br>
<span class="quotelev2">&gt; &gt;         client_comm.Barrier();
</span><br>
<span class="quotelev2">&gt; &gt;         .....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Client side:
</span><br>
<span class="quotelev2">&gt; &gt;         ....
</span><br>
<span class="quotelev2">&gt; &gt;         rank = 0;
</span><br>
<span class="quotelev2">&gt; &gt;         tmp_inter_comm = server_comm.Create ( server_comm.Get_group (
</span><br>
<span class="quotelev2">&gt; &gt; ).Excl ( 1, &amp;rank ) );
</span><br>
<span class="quotelev2">&gt; &gt; server_comm.Free ( );
</span><br>
<span class="quotelev2">&gt; &gt; server_comm = tmp_inter_comm;
</span><br>
<span class="quotelev2">&gt; &gt;         .....
</span><br>
<span class="quotelev2">&gt; &gt;         if (server_comm != MPI::COMM_NULL)
</span><br>
<span class="quotelev2">&gt; &gt;             server_comm.Barrier();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem: everything works fine until the call to Barrier. In that
</span><br>
<span class="quotelev2">&gt; &gt; point, the server exits the barrier, but the client at the group B does
</span><br>
<span class="quotelev2">&gt; &gt; not. Observe that we have only one process inside B, because I used Excl
</span><br>
<span class="quotelev2">&gt; &gt; to remove one process from the original group.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; p.s.: This occurs in the version 1.5.4 and the C++ API.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am very concerned about this problem because this solution plays a
</span><br>
<span class="quotelev2">&gt; &gt; very important role in my master thesis.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this an ompi problem or am I doing something wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rodrigo Oliveira
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
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18817/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-chdr attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18817/constants.h">constants.h</a>
</ul>
<!-- attachment="constants.h" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18817/server.cc">server.cc</a>
</ul>
<!-- attachment="server.cc" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18817/client.cc">client.cc</a>
</ul>
<!-- attachment="client.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18818.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18816.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18809.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18818.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18818.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
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
