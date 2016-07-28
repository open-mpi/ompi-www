<?
$subject_val = "Re: [OMPI users] Questions about MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 06:55:08 2010" -->
<!-- isoreceived="20100511105508" -->
<!-- sent="Tue, 11 May 2010 12:55:02 +0200" -->
<!-- isosent="20100511105502" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about MPI_Isend" -->
<!-- id="l2n3a37617f1005110355o2588e26bk160743c0c1846620_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B233EBB5-8AC1-4E55-AB77-5F8DA2B9FE8D_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions about MPI_Isend<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 06:55:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13014.php">Richard Treumann: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="13012.php">Terry Dontje: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13014.php">Richard Treumann: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes,
<br>
<p>it's correct, but you can use number of MPI_Test fails on MPI_ISend routines
<br>
to define a limit. Remember that if you use large buffer (more than
<br>
eager_limit) send many times in a few time, maybe it's better to use
<br>
MPI_Send routine than MPI_ISend, to avoid too much buffer memory copy.
<br>
<p>2010/5/11 Gijsbert Wiesenekker &lt;gijsbert.wiesenekker_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 11, 2010, at 9:29 , Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Gijsbert,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Ideally I would like to check how many MPI_Isend messages have not been
</span><br>
<span class="quotelev1">&gt; processed yet, so that I can stop &gt;sending messages if there are 'too many'
</span><br>
<span class="quotelev1">&gt; waiting. Is there a way to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can check number of message pending simply using MPI_Test function. It
</span><br>
<span class="quotelev1">&gt; return false if the request of message is in pending status. The difference
</span><br>
<span class="quotelev1">&gt; with MPI_Wait is in the behaviour of these two routines: MPI_Wait is
</span><br>
<span class="quotelev1">&gt; blocking, MPi_Test,  check and returns immediately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/5/11 Gijsbert Wiesenekker &lt;gijsbert.wiesenekker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An OpenMPI program of mine that uses MPI_Isend and MPI_Irecv crashes after
</span><br>
<span class="quotelev2">&gt;&gt; some non-reproducible time my Fedora Linux kernel (invalid opcode), which
</span><br>
<span class="quotelev2">&gt;&gt; makes it hard to debug (there is no trace, even with the debug kernel, and
</span><br>
<span class="quotelev2">&gt;&gt; if I run it under valgrind it does not crash).
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that the kernel crash is caused by OpenMPI running out if
</span><br>
<span class="quotelev2">&gt;&gt; memory because too many MPI_Irecv messages have been sent but not been
</span><br>
<span class="quotelev2">&gt;&gt; processed yet.
</span><br>
<span class="quotelev2">&gt;&gt; My questions are:
</span><br>
<span class="quotelev2">&gt;&gt; What does the OpenMPI specification say about the behaviour of MPI_Isend
</span><br>
<span class="quotelev2">&gt;&gt; when many messages have been sent but have not been processed yet? Will it
</span><br>
<span class="quotelev2">&gt;&gt; fail? Will it block until more memory becomes available (I hope not, because
</span><br>
<span class="quotelev2">&gt;&gt; this would cause my program to deadlock)?
</span><br>
<span class="quotelev2">&gt;&gt; Ideally I would like to check how many MPI_Isend messages have not been
</span><br>
<span class="quotelev2">&gt;&gt; processed yet, so that I can stop sending messages if there are 'too many'
</span><br>
<span class="quotelev2">&gt;&gt; waiting. Is there a way to do this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Gijsbert
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought that successful returns from MPI_Wait or MPI_test after an
</span><br>
<span class="quotelev1">&gt; MPI_Isend only meant that the message was received successfully by OpenMPI
</span><br>
<span class="quotelev1">&gt; and that the buffer could be reused, and not that it was successfully
</span><br>
<span class="quotelev1">&gt; received by the other processor. Is that correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gijsbert
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13014.php">Richard Treumann: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="13012.php">Terry Dontje: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13014.php">Richard Treumann: "Re: [OMPI users] Questions about MPI_Isend"</a>
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
