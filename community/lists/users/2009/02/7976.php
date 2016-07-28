<?
$subject_val = "Re: [OMPI users] MPI_Test bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 09:44:32 2009" -->
<!-- isoreceived="20090205144432" -->
<!-- sent="Thu, 5 Feb 2009 09:44:26 -0500" -->
<!-- isosent="20090205144426" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Test bug?" -->
<!-- id="OFCE005FCA.1260333A-ON85257554.005094D6-85257554.0050F90E_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0902050248o30707cffl21a12b65d8af9e9e_at_mail.gmail.com" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 09:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7977.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7975.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>In reply to:</strong> <a href="7973.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Test bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8068.php">Jeff Squyres: "Re: [OMPI users] MPI_Test bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One difference is that putting a blocking send before the irecv is a
<br>
classic &quot;unsafe&quot; MPI program. It depends on eager send buffering to
<br>
complete the MPI_Send so the MPI_Irecv can be posted.  The example with
<br>
MPI_Send first would be allowed to hang.
<br>
<p>The original program is correct and safe MPI.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 02/05/2009 05:48:34 AM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] MPI_Test bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 02/05/2009 05:49 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt; thanks four your quick reply. But what's the difference?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/2/5 jody &lt;jody.xha_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Gabriele
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't you reverse the order of your send and recv from
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Irecv(buffer_recv, bufferLen, MPI_INT, recv_to, tag,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;request);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Send(buffer_send, bufferLen, MPI_INT, send_to, tag,
</span><br>
MPI_COMM_WORLD);
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Send(buffer_send, bufferLen, MPI_INT, send_to, tag,
</span><br>
MPI_COMM_WORLD);
<br>
<span class="quotelev2">&gt; &gt;    MPI_Irecv(buffer_recv, bufferLen, MPI_INT, recv_to, tag,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;request);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ?
</span><br>
<span class="quotelev2">&gt; &gt; Jody
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Feb 5, 2009 at 11:37 AM, Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt; &lt;g.fatigati_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear OpenMPI developer,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; i have found a very strange behaviour of MPI_Test. I'm using OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.2 over Infiniband interconnection net.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've tried to implement net check with a series of MPI_Irecv and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Send  beetwen processors, testing with MPI_Wait the end of Irecv.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For strange reasons, i've noted that, when i launch the test in one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node, it works well. If i launch over 2 or more procs over different
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes, MPI_Test fails many time before to tell that the IRecv is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; finished.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've tried that it fails also after one minutes, with very small
</span><br>
<span class="quotelev3">&gt; &gt;&gt; buffer( less than eager limit). It's impossible that the communication
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is pending after one minutes, with 10 integer sended. To solve this,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I need to implement a loop over MPI_Test, and only after 3 or 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Test it returns that IRecv finished successful. Is it possible
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that MPI_Test needs to call many time also if the communication is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; already finished?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In attach you have my simple C test program.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Parallel programmer
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7977.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7975.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>In reply to:</strong> <a href="7973.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Test bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8068.php">Jeff Squyres: "Re: [OMPI users] MPI_Test bug?"</a>
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
