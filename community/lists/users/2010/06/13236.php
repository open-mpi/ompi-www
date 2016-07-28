<?
$subject_val = "[OMPI users] Behaviour of MPI_Cancel when using 'large' messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 01:53:25 2010" -->
<!-- isoreceived="20100607055325" -->
<!-- sent="Mon, 7 Jun 2010 07:53:19 +0200" -->
<!-- isosent="20100607055319" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="[OMPI users] Behaviour of MPI_Cancel when using 'large' messages" -->
<!-- id="30252122-5026-42E7-BB9B-CA670E7C9523_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Behaviour of MPI_Cancel when using 'large' messages<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 01:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13237.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13235.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13243.php">Jovana Knezevic: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>Maybe reply:</strong> <a href="13243.php">Jovana Knezevic: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following code tries to send a message, but if it takes too long the message is cancelled:
<br>
<p>&nbsp;&nbsp;#define DEADLOCK_ABORT   (30.0)
<br>
<p>&nbsp;&nbsp;MPI_Isend(message, count, MPI_BYTE, comm_id,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_MESSAGE_TAG, MPI_COMM_WORLD, &amp;request);
<br>
<p>&nbsp;&nbsp;t0 = time(NULL);
<br>
&nbsp;&nbsp;cancelled = FALSE;
<br>
<p>&nbsp;&nbsp;while(TRUE)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//do some work
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//test if message is delivered or cancelled
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Test(&amp;request, &amp;flag, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (flag) break;
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//test if it takes too long
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t1 = time(NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wall = difftime(t1, t0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (!cancelled and (wall &gt; DEADLOCK_ABORT))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Cancel(&amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cancelled = TRUE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_printf(&quot;cancelled!\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>Now if I use a message size of about 5000 bytes and the message cannot be delivered after DEADLOCK_ABORT seconds the MPI_Cancel is executed, but still MPI_Test never returns TRUE, so it looks like the message cannot be cancelled for some reason.
<br>
I am using OpenMPI 1.4.2 on Fedora Core 13.
<br>
Any ideas?
<br>
<p>Thanks,
<br>
Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13237.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13235.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13243.php">Jovana Knezevic: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>Maybe reply:</strong> <a href="13243.php">Jovana Knezevic: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
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
