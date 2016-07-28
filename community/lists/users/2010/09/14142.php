<?
$subject_val = "Re: [OMPI users] MPI_Bcast() Vs paired MPI_Send() &amp; MPI_Recv()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 16:09:58 2010" -->
<!-- isoreceived="20100901200958" -->
<!-- sent="Wed, 1 Sep 2010 13:09:54 -0700" -->
<!-- isosent="20100901200954" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast() Vs paired MPI_Send() &amp;amp; MPI_Recv()" -->
<!-- id="AANLkTikGAG8puMhwDbXcB2b8m4L+vcGoD5ysJUg6kbYH_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E7082D019B_at_usa-mv-msg.wipro.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 16:09:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14143.php">Brock Palen: "[OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14141.php">Gus Correa: "Re: [OMPI users] compilation error using pgf90 ver 9.0"</a>
<li><strong>In reply to:</strong> <a href="14140.php">ananda.mudar_at_[hidden]: "[OMPI users] MPI_Bcast() Vs paired MPI_Send() &amp; MPI_Recv()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mpi send and recv are blocking, while you can exit bcast even if other
<br>
processes haven't receive the bcast yet.  A general rule of thumb is
<br>
mpi calls are optimized and almost always perform better than if you
<br>
were to manage the communication youself.
<br>
<p>On 9/1/10, ananda.mudar_at_[hidden] &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I replace MPI_Bcast() with a paired MPI_Send() and MPI_Recv() calls,
</span><br>
<span class="quotelev1">&gt; what kind of impact does it have on the performance of the program? Are
</span><br>
<span class="quotelev1">&gt; there any benchmarks of MPI_Bcast() vs paired MPI_Send() and
</span><br>
<span class="quotelev1">&gt; MPI_Recv()??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to
</span><br>
<span class="quotelev1">&gt; this message are intended for the exclusive use of the addressee(s) and may
</span><br>
<span class="quotelev1">&gt; contain proprietary, confidential or privileged information. If you are not
</span><br>
<span class="quotelev1">&gt; the intended recipient, you should not disseminate, distribute or copy this
</span><br>
<span class="quotelev1">&gt; e-mail. Please notify the sender immediately and destroy all copies of this
</span><br>
<span class="quotelev1">&gt; message and any attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should
</span><br>
<span class="quotelev1">&gt; check this email and any attachments for the presence of viruses. The
</span><br>
<span class="quotelev1">&gt; company accepts no liability for any damage caused by any virus transmitted
</span><br>
<span class="quotelev1">&gt; by this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Sent from my mobile device
David Zhang
University of California, San Diego
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14143.php">Brock Palen: "[OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14141.php">Gus Correa: "Re: [OMPI users] compilation error using pgf90 ver 9.0"</a>
<li><strong>In reply to:</strong> <a href="14140.php">ananda.mudar_at_[hidden]: "[OMPI users] MPI_Bcast() Vs paired MPI_Send() &amp; MPI_Recv()"</a>
<!-- nextthread="start" -->
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
