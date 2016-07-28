<?
$subject_val = "Re: [OMPI users] bug in MPI_Comm_accept?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 10:18:36 2015" -->
<!-- isoreceived="20150916141836" -->
<!-- sent="Wed, 16 Sep 2015 16:18:21 +0200" -->
<!-- isosent="20150916141821" -->
<!-- name="Jalel Chergui" -->
<!-- email="Jalel.Chergui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_Comm_accept?" -->
<!-- id="55F97A2D.9080801_at_limsi.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55F9776F.9050606_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in MPI_Comm_accept?<br>
<strong>From:</strong> Jalel Chergui (<em>Jalel.Chergui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 10:18:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27587.php">Marcin Krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Previous message:</strong> <a href="27585.php">marcin.krotkiewski: "[OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>In reply to:</strong> <a href="27585.php">marcin.krotkiewski: "[OMPI users] bug in MPI_Comm_accept?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27587.php">Marcin Krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Reply:</strong> <a href="27587.php">Marcin Krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you check with an MPI_Finalize in the receiver ?
<br>
Jalel
<br>
<p>Le 16/09/2015 16:06, marcin.krotkiewski a &#233;crit :
<br>
<span class="quotelev1">&gt; I have run into a freeze / potential bug when using MPI_Comm_accept in 
</span><br>
<span class="quotelev1">&gt; a simple client / server implementation. I have attached two simplest 
</span><br>
<span class="quotelev1">&gt; programs I could produce:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1. mpi-receiver.c opens a port using MPI_Open_port, saves the port 
</span><br>
<span class="quotelev1">&gt; name to a file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  2. mpi-receiver enters infinite loop and waits for connections using 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  3. mpi-sender.c connects to that port using MPI_Comm_connect, sends 
</span><br>
<span class="quotelev1">&gt; one MPI_UNSIGNED_LONG, calls barrier and disconnects using 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_disconnect
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  4. mpi-receiver reads the MPI_UNSIGNED_LONG, prints it, calls barrier 
</span><br>
<span class="quotelev1">&gt; and disconnects using MPI_Comm_disconnect and goes to point 2 - 
</span><br>
<span class="quotelev1">&gt; infinite loop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All works fine, but only exactly 5 times. After that the receiver 
</span><br>
<span class="quotelev1">&gt; hangs in MPI_Recv, after exit from MPI_Comm_accept. That is 100% 
</span><br>
<span class="quotelev1">&gt; repeatable. I have tried with Intel MPI - no such problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I execute the programs using OpenMPI 1.10 as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --mca mpi_leave_pinned 0 ./mpi-receiver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any clues what could be the reason? Am I doing sth wrong, 
</span><br>
<span class="quotelev1">&gt; or is it some problem with internal state of OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27585.php">http://www.open-mpi.org/community/lists/users/2015/09/27585.php</a>
</span><br>
<p><pre>
-- 
*------------------------------------------------------------------------*
  Jalel CHERGUI, LIMSI-CNRS, B&#226;t. 508 - BP 133, 91403 Orsay cedex, FRANCE
  T&#233;l: (33 1) 69 85 81 27     ; T&#233;l&#233;copie: (33 1) 69 85 80 88
  M&#233;l: Jalel.Chergui_at_[hidden] ; R&#233;f&#233;rence: <a href="http://perso.limsi.fr/chergui">http://perso.limsi.fr/chergui</a>
*------------------------------------------------------------------------*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27586/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27587.php">Marcin Krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Previous message:</strong> <a href="27585.php">marcin.krotkiewski: "[OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>In reply to:</strong> <a href="27585.php">marcin.krotkiewski: "[OMPI users] bug in MPI_Comm_accept?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27587.php">Marcin Krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Reply:</strong> <a href="27587.php">Marcin Krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
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
