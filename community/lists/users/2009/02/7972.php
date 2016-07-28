<?
$subject_val = "Re: [OMPI users] MPI_Test bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 05:46:44 2009" -->
<!-- isoreceived="20090205104644" -->
<!-- sent="Thu, 5 Feb 2009 11:46:39 +0100" -->
<!-- isosent="20090205104639" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Test bug?" -->
<!-- id="9b0da5ce0902050246m3b902a14r23ceec2a5b519f36_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3a37617f0902050237q5fde6f1aidd0ddb741e27e13e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Test bug?<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 05:46:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7973.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Previous message:</strong> <a href="7971.php">Gabriele Fatigati: "[OMPI users] MPI_Test bug?"</a>
<li><strong>In reply to:</strong> <a href="7971.php">Gabriele Fatigati: "[OMPI users] MPI_Test bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7973.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="7973.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Test bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gabriele
<br>
<p>Shouldn't you reverse the order of your send and recv from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(buffer_recv, bufferLen, MPI_INT, recv_to, tag,
<br>
MPI_COMM_WORLD, &amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buffer_send, bufferLen, MPI_INT, send_to, tag, MPI_COMM_WORLD);
<br>
<p>to
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buffer_send, bufferLen, MPI_INT, send_to, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(buffer_recv, bufferLen, MPI_INT, recv_to, tag,
<br>
MPI_COMM_WORLD, &amp;request);
<br>
<p>?
<br>
Jody
<br>
<p>On Thu, Feb 5, 2009 at 11:37 AM, Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI developer,
</span><br>
<span class="quotelev1">&gt; i have found a very strange behaviour of MPI_Test. I'm using OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2 over Infiniband interconnection net.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to implement net check with a series of MPI_Irecv and
</span><br>
<span class="quotelev1">&gt; MPI_Send  beetwen processors, testing with MPI_Wait the end of Irecv.
</span><br>
<span class="quotelev1">&gt; For strange reasons, i've noted that, when i launch the test in one
</span><br>
<span class="quotelev1">&gt; node, it works well. If i launch over 2 or more procs over different
</span><br>
<span class="quotelev1">&gt; nodes, MPI_Test fails many time before to tell that the IRecv is
</span><br>
<span class="quotelev1">&gt; finished.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried that it fails also after one minutes, with very small
</span><br>
<span class="quotelev1">&gt; buffer( less than eager limit). It's impossible that the communication
</span><br>
<span class="quotelev1">&gt; is pending after one minutes, with 10 integer sended. To solve this,
</span><br>
<span class="quotelev1">&gt; I need to implement a loop over MPI_Test, and only after 3 or 4
</span><br>
<span class="quotelev1">&gt; MPI_Test it returns that IRecv finished successful. Is it possible
</span><br>
<span class="quotelev1">&gt; that MPI_Test needs to call many time also if the communication is
</span><br>
<span class="quotelev1">&gt; already finished?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In attach you have my simple C test program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7973.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Previous message:</strong> <a href="7971.php">Gabriele Fatigati: "[OMPI users] MPI_Test bug?"</a>
<li><strong>In reply to:</strong> <a href="7971.php">Gabriele Fatigati: "[OMPI users] MPI_Test bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7973.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="7973.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Test bug?"</a>
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
