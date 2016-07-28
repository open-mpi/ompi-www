<?
$subject_val = "[OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 13:46:43 2010" -->
<!-- isoreceived="20101121184643" -->
<!-- sent="Sun, 21 Nov 2010 19:46:34 +0100" -->
<!-- isosent="20101121184634" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="[OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?" -->
<!-- id="AANLkTimjKifd_SnPifX1c16dbKO7z6qvCyu6bx6pQfQd_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-21 13:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14853.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14851.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14870.php">Jeff Squyres: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>Reply:</strong> <a href="14870.php">Jeff Squyres: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to debug a segfaulting application; the segfault does not
<br>
happen consistently, however, so my guess is that it is due to some
<br>
memory corruption problem which I'm trying to find.
<br>
<p>I'm using code like this:
<br>
<p>&nbsp;&nbsp;MPI_Iprobe(MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;flag, &amp;status);
<br>
&nbsp;&nbsp;if(flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;status, MPI_BYTE, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void* row = xmalloc(size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* ... */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(row, size, MPI_BYTE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status.MPI_SOURCE, status.MPI_TAG, MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;status);
<br>
&nbsp;&nbsp;/* ... */
<br>
&nbsp;&nbsp;}
<br>
<p>Question: is it possible that, in the time my program progresses from
<br>
MPI_Iprobe() to MPI_Recv(), another message has arrived, that matches
<br>
the MPI_Recv(), but is not the one originally matched from
<br>
MPI_Iprobe()?  (e.g. a shorter one)
<br>
<p>In particular, could it be that the size of the message actually
<br>
received by MPI_Recv() does not match `size` (the variable)?
<br>
<p>In case a shorter message (different from the one initially matched)
<br>
was received, can I get the actual message size via a new call to
<br>
MPI_Get_count(&amp;mpi_recv_status ...)?
<br>
<p>(My application is sending variable-length messages from one rank to
<br>
the other at a quite high rate, so such a mismatch could potentially
<br>
be deadly.)
<br>
<p>Best regards,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14853.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14851.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14870.php">Jeff Squyres: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>Reply:</strong> <a href="14870.php">Jeff Squyres: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
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
