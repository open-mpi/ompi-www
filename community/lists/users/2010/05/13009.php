<?
$subject_val = "Re: [OMPI users] Questions about MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 04:45:03 2010" -->
<!-- isoreceived="20100511084503" -->
<!-- sent="Tue, 11 May 2010 10:44:56 +0200" -->
<!-- isosent="20100511084456" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about MPI_Isend" -->
<!-- id="B233EBB5-8AC1-4E55-AB77-5F8DA2B9FE8D_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="x2g3a37617f1005110029x895ad5fbib2797a44a9707880_at_mail.gmail.com" -->
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
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 04:44:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13010.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
<li><strong>Previous message:</strong> <a href="13008.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13008.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13012.php">Terry Dontje: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13012.php">Terry Dontje: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13013.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 11, 2010, at 9:29 , Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear Gijsbert,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Ideally I would like to check how many MPI_Isend messages have not been processed yet, so that I can stop &gt;sending messages if there are 'too many' waiting. Is there a way to do this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you can check number of message pending simply using MPI_Test function. It return false if the request of message is in pending status. The difference with MPI_Wait is in the behaviour of these two routines: MPI_Wait is blocking, MPi_Test,  check and returns immediately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/5/11 Gijsbert Wiesenekker &lt;gijsbert.wiesenekker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; An OpenMPI program of mine that uses MPI_Isend and MPI_Irecv crashes after some non-reproducible time my Fedora Linux kernel (invalid opcode), which makes it hard to debug (there is no trace, even with the debug kernel, and if I run it under valgrind it does not crash).
</span><br>
<span class="quotelev1">&gt; My guess is that the kernel crash is caused by OpenMPI running out if memory because too many MPI_Irecv messages have been sent but not been processed yet.
</span><br>
<span class="quotelev1">&gt; My questions are:
</span><br>
<span class="quotelev1">&gt; What does the OpenMPI specification say about the behaviour of MPI_Isend when many messages have been sent but have not been processed yet? Will it fail? Will it block until more memory becomes available (I hope not, because this would cause my program to deadlock)?
</span><br>
<span class="quotelev1">&gt; Ideally I would like to check how many MPI_Isend messages have not been processed yet, so that I can stop sending messages if there are 'too many' waiting. Is there a way to do this?
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
<p>I thought that successful returns from MPI_Wait or MPI_test after an MPI_Isend only meant that the message was received successfully by OpenMPI and that the buffer could be reused, and not that it was successfully received by the other processor. Is that correct?
<br>
<p>Gijsbert
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13010.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
<li><strong>Previous message:</strong> <a href="13008.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13008.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13012.php">Terry Dontje: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13012.php">Terry Dontje: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13013.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
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
