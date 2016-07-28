<?
$subject_val = "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 15:21:55 2011" -->
<!-- isoreceived="20110222202155" -->
<!-- sent="Tue, 22 Feb 2011 15:21:50 -0500" -->
<!-- isosent="20110222202150" -->
<!-- name="Xianglong Kong" -->
<!-- email="dinosaur8312_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?" -->
<!-- id="AANLkTi=3_-N7T_bqYmVNqCaWFPMHUztd4MCKP8PjUF6r_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="76097BB0C025054786EFAB631C4A2E3C09504B86_at_MERCMBX03R.na.SAS.com" -->
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
<strong>From:</strong> Xianglong Kong (<em>dinosaur8312_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 15:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15684.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15682.php">Gus Correa: "Re: [OMPI users] WRF Problem running in Parallel"</a>
<li><strong>In reply to:</strong> <a href="15680.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15684.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I tried to add MPI_Barrier and it didn't work. The output is the
<br>
same with the code without MPI_Barrier.
<br>
<p>Any more thoughts?
<br>
<p>Thanks!
<br>
<p>Kong
<br>
<p>On Tue, Feb 22, 2011 at 12:23 PM, Bill Rankin &lt;Bill.Rankin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the reply. But this can not solve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure if this was not your intended meaning (using &quot;can not&quot; instead of &quot;did not&quot;), but did you try it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output indicate that both nodes hang at the second MPI_Wait, and
</span><br>
<span class="quotelev2">&gt;&gt; no one can reaches the MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Flushing the output from stdout and having it make it back to the terminal is a little uncertain when one or more processes hangs or terminate abnormally. &#160;You cannot rely upon completion in this case (someone correct me if I am wrong here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bill
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; ***********************************************
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Hello from processor 0 of 2
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Received one message
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Hello from processor 1 of 2
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Sent one message
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; *******************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any other thoughts or suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kong
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
Xianglong Kong
Department of Mechanical Engineering
University of Rochester
Phone: (585)520-4412
MSN: dinosaur8312_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15684.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15682.php">Gus Correa: "Re: [OMPI users] WRF Problem running in Parallel"</a>
<li><strong>In reply to:</strong> <a href="15680.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15684.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
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
