<?
$subject_val = "Re: [OMPI users] Questions about MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 09:38:09 2010" -->
<!-- isoreceived="20100511133809" -->
<!-- sent="Tue, 11 May 2010 09:38:01 -0400" -->
<!-- isosent="20100511133801" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about MPI_Isend" -->
<!-- id="OFC4180822.F17E38FB-ON85257720.004A74FD-85257720.004AE48E_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 09:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13015.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
<li><strong>Previous message:</strong> <a href="13013.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13007.php">Gijsbert Wiesenekker: "[OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13018.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13018.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI standard requires that when there is a free running task posting
<br>
isends to a task that is not keeping up on receives, the sending task will
<br>
switch to synchronous isend BEFORE the receive side runs out of memory  and
<br>
fails.
<br>
<p>There should be no need for the sender to us MPI_Issend because the MPI
<br>
library should do it for you (under the covers)
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p>|------------&gt;
<br>
| From:      |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;--------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|Gijsbert Wiesenekker &lt;gijsbert.wiesenekker_at_[hidden]&gt;                                                                                             |
<br>
<span class="quotelev1">  &gt;--------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| To:        |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;--------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|Open MPI Users &lt;users_at_[hidden]&gt;                                                                                                               |
<br>
<span class="quotelev1">  &gt;--------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| Date:      |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;--------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|05/11/2010 03:19 AM                                                                                                                               |
<br>
<span class="quotelev1">  &gt;--------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| Subject:   |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;--------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|[OMPI users] Questions about MPI_Isend                                                                                                            |
<br>
<span class="quotelev1">  &gt;--------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
|------------&gt;
<br>
| Sent by:   |
<br>
|------------&gt;
<br>
<span class="quotelev1">  &gt;--------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
&nbsp;&nbsp;|users-bounces_at_[hidden]                                                                                                                        |
<br>
<span class="quotelev1">  &gt;--------------------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<p><p><p><p><p>An OpenMPI program of mine that uses MPI_Isend and MPI_Irecv crashes after
<br>
some non-reproducible time my Fedora Linux kernel (invalid opcode), which
<br>
makes it hard to debug (there is no trace, even with the debug kernel, and
<br>
if I run it under valgrind it does not crash).
<br>
My guess is that the kernel crash is caused by OpenMPI running out if
<br>
memory because too many MPI_Irecv messages have been sent but not been
<br>
processed yet.
<br>
My questions are:
<br>
What does the OpenMPI specification say about the behaviour of MPI_Isend
<br>
when many messages have been sent but have not been processed yet? Will it
<br>
fail? Will it block until more memory becomes available (I hope not,
<br>
because this would cause my program to deadlock)?
<br>
Ideally I would like to check how many MPI_Isend messages have not been
<br>
processed yet, so that I can stop sending messages if there are 'too many'
<br>
waiting. Is there a way to do this?
<br>
<p>Regards,
<br>
Gijsbert
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>
<p><p>

<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13014/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13014/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13014/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13015.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
<li><strong>Previous message:</strong> <a href="13013.php">Gabriele Fatigati: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13007.php">Gijsbert Wiesenekker: "[OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13018.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="13018.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
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
