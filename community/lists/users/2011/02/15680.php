<?
$subject_val = "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 12:23:23 2011" -->
<!-- isoreceived="20110222172323" -->
<!-- sent="Tue, 22 Feb 2011 17:23:11 +0000" -->
<!-- isosent="20110222172311" -->
<!-- name="Bill Rankin" -->
<!-- email="Bill.Rankin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?" -->
<!-- id="76097BB0C025054786EFAB631C4A2E3C09504B86_at_MERCMBX03R.na.SAS.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinNxyb-a4EjrNBPcdNgL__rRMj0kCrxk+O-DQC8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?<br>
<strong>From:</strong> Bill Rankin (<em>Bill.Rankin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 12:23:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15681.php">Barrett, Brian W: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Previous message:</strong> <a href="15679.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15679.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15683.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15683.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply. But this can not solve the problem.
</span><br>
<p>Not sure if this was not your intended meaning (using &quot;can not&quot; instead of &quot;did not&quot;), but did you try it?
<br>
<p><span class="quotelev1">&gt; The output indicate that both nodes hang at the second MPI_Wait, and
</span><br>
<span class="quotelev1">&gt; no one can reaches the MPI_Finalize.
</span><br>
<p>Flushing the output from stdout and having it make it back to the terminal is a little uncertain when one or more processes hangs or terminate abnormally.  You cannot rely upon completion in this case (someone correct me if I am wrong here).
<br>
<p>-bill
<br>
<p><p>&nbsp;
<br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; ***********************************************
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Hello from processor 0 of 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Received one message
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Hello from processor 1 of 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Sent one message
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; *******************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any other thoughts or suggestions?
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kong
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15681.php">Barrett, Brian W: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Previous message:</strong> <a href="15679.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15679.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15683.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15683.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
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
