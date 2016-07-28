<?
$subject_val = "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 14:44:02 2012" -->
<!-- isoreceived="20120320184402" -->
<!-- sent="Tue, 20 Mar 2012 15:43:56 -0300" -->
<!-- isosent="20120320184356" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)" -->
<!-- id="CABm3_qpVCNGNOBn001xXY6D_M4=J+qtNBaNg7BsTqyx92YXfdg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABm3_qojAFAdxjYef+T3pdsSMV75ZesGCTQAgq08UdAdr_DVgg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-03-20 14:43:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18819.php">Dylan Nelson: "[OMPI users] oMPI hang with IB question"</a>
<li><strong>Previous message:</strong> <a href="18817.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18817.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18844.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18844.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The command I use to compile and run is:
<br>
<p>mpic++ server.cc -o server &amp;&amp; mpic++ client.cc -o client &amp;&amp; mpirun -np 1
<br>
./server
<br>
<p>Rodrigo
<br>
<p>On Tue, Mar 20, 2012 at 3:40 PM, Rodrigo Oliveira &lt;rsilva.oliveira_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi Edgar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the response. The simplified code is attached: server, client
</span><br>
<span class="quotelev1">&gt; and a .h containing some constants. I put some &quot;prints&quot; to show the
</span><br>
<span class="quotelev1">&gt; behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rodrigo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 20, 2012 at 11:47 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; do you have by any chance the actual or a small reproducer? It might be
</span><br>
<span class="quotelev2">&gt;&gt; much easier to hunt the problem down...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/19/2012 8:12 PM, Rodrigo Oliveira wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi there.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am facing a very strange problem when using MPI_Barrier over an
</span><br>
<span class="quotelev3">&gt;&gt; &gt; inter-communicator after some operations I describe bellow:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1) I start a server calling mpirun.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2) The server spawns 2 copies of a client using MPI_Comm_spawn, creating
</span><br>
<span class="quotelev3">&gt;&gt; &gt; an inter-communicator between the two groups. The server group with 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; process (lets name it as A) and the client group with 2 processes
</span><br>
<span class="quotelev2">&gt;&gt; (group B).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3) After that, I need to detach one of the processes (rank 0) in group B
</span><br>
<span class="quotelev3">&gt;&gt; &gt; from the inter-communicator AB. To do that I do the following steps:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Server side:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         .....
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         tmp_inter_comm = client_comm.Create ( client_comm.Get_group ( )
</span><br>
<span class="quotelev2">&gt;&gt; );
</span><br>
<span class="quotelev3">&gt;&gt; &gt; client_comm.Free ( );
</span><br>
<span class="quotelev3">&gt;&gt; &gt; client_comm = tmp_inter_comm;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         .....
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         client_comm.Barrier();
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         .....
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Client side:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         ....
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         rank = 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         tmp_inter_comm = server_comm.Create ( server_comm.Get_group (
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ).Excl ( 1, &amp;rank ) );
</span><br>
<span class="quotelev3">&gt;&gt; &gt; server_comm.Free ( );
</span><br>
<span class="quotelev3">&gt;&gt; &gt; server_comm = tmp_inter_comm;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         .....
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         if (server_comm != MPI::COMM_NULL)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             server_comm.Barrier();
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The problem: everything works fine until the call to Barrier. In that
</span><br>
<span class="quotelev3">&gt;&gt; &gt; point, the server exits the barrier, but the client at the group B does
</span><br>
<span class="quotelev3">&gt;&gt; &gt; not. Observe that we have only one process inside B, because I used Excl
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to remove one process from the original group.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; p.s.: This occurs in the version 1.5.4 and the C++ API.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am very concerned about this problem because this solution plays a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; very important role in my master thesis.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is this an ompi problem or am I doing something wrong?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Rodrigo Oliveira
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18818/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18819.php">Dylan Nelson: "[OMPI users] oMPI hang with IB question"</a>
<li><strong>Previous message:</strong> <a href="18817.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18817.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18844.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18844.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
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
