<?
$subject_val = "Re: [OMPI users] MPI_Test bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 05:48:39 2009" -->
<!-- isoreceived="20090205104839" -->
<!-- sent="Thu, 5 Feb 2009 11:48:34 +0100" -->
<!-- isosent="20090205104834" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Test bug?" -->
<!-- id="3a37617f0902050248o30707cffl21a12b65d8af9e9e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0902050246m3b902a14r23ceec2a5b519f36_at_mail.gmail.com" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 05:48:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7974.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Previous message:</strong> <a href="7972.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>In reply to:</strong> <a href="7972.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7974.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="7974.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="7975.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="7976.php">Richard Treumann: "Re: [OMPI users] MPI_Test bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody,
<br>
thanks four your quick reply. But what's the difference?
<br>
<p>2009/2/5 jody &lt;jody.xha_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi Gabriele
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't you reverse the order of your send and recv from
</span><br>
<span class="quotelev1">&gt;    MPI_Irecv(buffer_recv, bufferLen, MPI_INT, recv_to, tag,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;request);
</span><br>
<span class="quotelev1">&gt;    MPI_Send(buffer_send, bufferLen, MPI_INT, send_to, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Send(buffer_send, bufferLen, MPI_INT, send_to, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    MPI_Irecv(buffer_recv, bufferLen, MPI_INT, recv_to, tag,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;request);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 5, 2009 at 11:37 AM, Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI developer,
</span><br>
<span class="quotelev2">&gt;&gt; i have found a very strange behaviour of MPI_Test. I'm using OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.2 over Infiniband interconnection net.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried to implement net check with a series of MPI_Irecv and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Send  beetwen processors, testing with MPI_Wait the end of Irecv.
</span><br>
<span class="quotelev2">&gt;&gt; For strange reasons, i've noted that, when i launch the test in one
</span><br>
<span class="quotelev2">&gt;&gt; node, it works well. If i launch over 2 or more procs over different
</span><br>
<span class="quotelev2">&gt;&gt; nodes, MPI_Test fails many time before to tell that the IRecv is
</span><br>
<span class="quotelev2">&gt;&gt; finished.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried that it fails also after one minutes, with very small
</span><br>
<span class="quotelev2">&gt;&gt; buffer( less than eager limit). It's impossible that the communication
</span><br>
<span class="quotelev2">&gt;&gt; is pending after one minutes, with 10 integer sended. To solve this,
</span><br>
<span class="quotelev2">&gt;&gt; I need to implement a loop over MPI_Test, and only after 3 or 4
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Test it returns that IRecv finished successful. Is it possible
</span><br>
<span class="quotelev2">&gt;&gt; that MPI_Test needs to call many time also if the communication is
</span><br>
<span class="quotelev2">&gt;&gt; already finished?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In attach you have my simple C test program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7974.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Previous message:</strong> <a href="7972.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>In reply to:</strong> <a href="7972.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7974.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="7974.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="7975.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="7976.php">Richard Treumann: "Re: [OMPI users] MPI_Test bug?"</a>
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
