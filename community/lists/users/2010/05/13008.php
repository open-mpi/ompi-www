<?
$subject_val = "Re: [OMPI users] Questions about MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 03:29:19 2010" -->
<!-- isoreceived="20100511072919" -->
<!-- sent="Tue, 11 May 2010 09:29:12 +0200" -->
<!-- isosent="20100511072912" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about MPI_Isend" -->
<!-- id="x2g3a37617f1005110029x895ad5fbib2797a44a9707880_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="36CE392E-8BC8-4FAC-BCFF-EA15624784B5_at_gmail.com" -->
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
<strong>Date:</strong> 2010-05-11 03:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="13007.php">Gijsbert Wiesenekker: "[OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13007.php">Gijsbert Wiesenekker: "[OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gijsbert,
<br>
<p><p><span class="quotelev1">&gt;Ideally I would like to check how many MPI_Isend messages have not been
</span><br>
processed yet, so that I can stop &gt;sending messages if there are 'too many'
<br>
waiting. Is there a way to do this?
<br>
<p><p>you can check number of message pending simply using MPI_Test function. It
<br>
return false if the request of message is in pending status. The difference
<br>
with MPI_Wait is in the behaviour of these two routines: MPI_Wait is
<br>
blocking, MPi_Test,  check and returns immediately.
<br>
<p>Regards.
<br>
<p>2010/5/11 Gijsbert Wiesenekker &lt;gijsbert.wiesenekker_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; An OpenMPI program of mine that uses MPI_Isend and MPI_Irecv crashes after
</span><br>
<span class="quotelev1">&gt; some non-reproducible time my Fedora Linux kernel (invalid opcode), which
</span><br>
<span class="quotelev1">&gt; makes it hard to debug (there is no trace, even with the debug kernel, and
</span><br>
<span class="quotelev1">&gt; if I run it under valgrind it does not crash).
</span><br>
<span class="quotelev1">&gt; My guess is that the kernel crash is caused by OpenMPI running out if
</span><br>
<span class="quotelev1">&gt; memory because too many MPI_Irecv messages have been sent but not been
</span><br>
<span class="quotelev1">&gt; processed yet.
</span><br>
<span class="quotelev1">&gt; My questions are:
</span><br>
<span class="quotelev1">&gt; What does the OpenMPI specification say about the behaviour of MPI_Isend
</span><br>
<span class="quotelev1">&gt; when many messages have been sent but have not been processed yet? Will it
</span><br>
<span class="quotelev1">&gt; fail? Will it block until more memory becomes available (I hope not, because
</span><br>
<span class="quotelev1">&gt; this would cause my program to deadlock)?
</span><br>
<span class="quotelev1">&gt; Ideally I would like to check how many MPI_Isend messages have not been
</span><br>
<span class="quotelev1">&gt; processed yet, so that I can stop sending messages if there are 'too many'
</span><br>
<span class="quotelev1">&gt; waiting. Is there a way to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13008/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="13007.php">Gijsbert Wiesenekker: "[OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13007.php">Gijsbert Wiesenekker: "[OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
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
