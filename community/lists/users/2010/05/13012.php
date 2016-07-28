<?
$subject_val = "Re: [OMPI users] Questions about MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 06:51:24 2010" -->
<!-- isoreceived="20100511105124" -->
<!-- sent="Tue, 11 May 2010 06:49:49 -0400" -->
<!-- isosent="20100511104949" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about MPI_Isend" -->
<!-- id="4BE9364D.9080504_at_oracle.com" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 06:49:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13013.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="13011.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13017.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13017.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gijsbert Wiesenekker wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 11, 2010, at 9:29 , Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Gijsbert,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Ideally I would like to check how many MPI_Isend messages have not 
</span><br>
<span class="quotelev2">&gt;&gt; been processed yet, so that I can stop &gt;sending messages if there are 
</span><br>
<span class="quotelev2">&gt;&gt; 'too many' waiting. Is there a way to do this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can check number of message pending simply using MPI_Test 
</span><br>
<span class="quotelev2">&gt;&gt; function. It return false if the request of message is in pending 
</span><br>
<span class="quotelev2">&gt;&gt; status. The difference with MPI_Wait is in the behaviour of these two 
</span><br>
<span class="quotelev2">&gt;&gt; routines: MPI_Wait is blocking, MPi_Test,  check and returns immediately.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/5/11 Gijsbert Wiesenekker &lt;gijsbert.wiesenekker_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gijsbert.wiesenekker_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     An OpenMPI program of mine that uses MPI_Isend and MPI_Irecv
</span><br>
<span class="quotelev2">&gt;&gt;     crashes after some non-reproducible time my Fedora Linux kernel
</span><br>
<span class="quotelev2">&gt;&gt;     (invalid opcode), which makes it hard to debug (there is no
</span><br>
<span class="quotelev2">&gt;&gt;     trace, even with the debug kernel, and if I run it under valgrind
</span><br>
<span class="quotelev2">&gt;&gt;     it does not crash).
</span><br>
<span class="quotelev2">&gt;&gt;     My guess is that the kernel crash is caused by OpenMPI running
</span><br>
<span class="quotelev2">&gt;&gt;     out if memory because too many MPI_Irecv messages have been sent
</span><br>
<span class="quotelev2">&gt;&gt;     but not been processed yet.
</span><br>
<span class="quotelev2">&gt;&gt;     My questions are:
</span><br>
<span class="quotelev2">&gt;&gt;     What does the OpenMPI specification say about the behaviour of
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Isend when many messages have been sent but have not been
</span><br>
<span class="quotelev2">&gt;&gt;     processed yet? Will it fail? Will it block until more memory
</span><br>
<span class="quotelev2">&gt;&gt;     becomes available (I hope not, because this would cause my
</span><br>
<span class="quotelev2">&gt;&gt;     program to deadlock)?
</span><br>
<span class="quotelev2">&gt;&gt;     Ideally I would like to check how many MPI_Isend messages have
</span><br>
<span class="quotelev2">&gt;&gt;     not been processed yet, so that I can stop sending messages if
</span><br>
<span class="quotelev2">&gt;&gt;     there are 'too many' waiting. Is there a way to do this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Regards,
</span><br>
<span class="quotelev2">&gt;&gt;     Gijsbert
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; www.cineca.it &lt;<a href="http://www.cineca.it/">http://www.cineca.it/</a>&gt;                    Tel:   +39 
</span><br>
<span class="quotelev2">&gt;&gt; 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it/">http://cineca.it/</a>&gt;          
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought that successful returns from MPI_Wait or MPI_test after an 
</span><br>
<span class="quotelev1">&gt; MPI_Isend only meant that the message was received successfully by 
</span><br>
<span class="quotelev1">&gt; OpenMPI and that the buffer could be reused, and not that it was 
</span><br>
<span class="quotelev1">&gt; successfully received by the other processor. Is that correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gijsbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
Correct the completion of an MPI_Isend request only say's the message 
<br>
buffer is no longer needed.  You could use synchronous mode sends 
<br>
MPI_Issend which requests will complete when the message is being 
<br>
processed at the destination (that is matched with a received).
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13012/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13012/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13013.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="13011.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13017.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13017.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
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
