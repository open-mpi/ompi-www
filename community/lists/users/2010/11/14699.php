<?
$subject_val = "Re: [OMPI users] Open MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 13:52:43 2010" -->
<!-- isoreceived="20101105175243" -->
<!-- sent="Fri, 05 Nov 2010 13:52:31 -0400" -->
<!-- isosent="20101105175231" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI data transfer error" -->
<!-- id="4CD4445F.5080908_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w54669685A9C2F3F8F37D8CCB4C0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI data transfer error<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 13:52:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14700.php">David Zhang: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14698.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14698.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14700.php">David Zhang: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14700.php">David Zhang: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We can't help you with your coding problem without seeing your code.
<br>
<p><p>Jack Bryan wrote:
<br>
<span class="quotelev1">&gt; Thanks, 
</span><br>
<span class="quotelev1">&gt; I have used &quot;cout&quot; in c++ to print the values of data. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The sender sends correct data to correct receiver. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, receiver gets wrong data from correct sender. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; why ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nov. 5 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 5 Nov 2010 08:54:22 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: prentice_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Open MPI data transfer error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jack Bryan wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In my Open MPI program, one master sends data to 3 workers.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Two workers can receive their data.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But, the third worker can not get their data.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Before sending data, the master sends a head information to each worker
</span><br>
<span class="quotelev3">&gt;&gt; &gt; receiver
</span><br>
<span class="quotelev3">&gt;&gt; &gt; so that each worker knows what the following data package is. (such as
</span><br>
<span class="quotelev3">&gt;&gt; &gt; length, package tag).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The third worker can get its head information message from master but
</span><br>
<span class="quotelev3">&gt;&gt; &gt; cannot get its correct
</span><br>
<span class="quotelev3">&gt;&gt; &gt; data package.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It got the data that should be received by first worker, which get its
</span><br>
<span class="quotelev3">&gt;&gt; &gt; correct data.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jack,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Providing the relevant sections of code here would be very helpful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;inside joke&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would tell you to add some printf statements to your code to see what
</span><br>
<span class="quotelev2">&gt;&gt; data is stored in your variables on the master before it sends them to
</span><br>
<span class="quotelev2">&gt;&gt; each node, but Jeff Squyres and I agreed to disagree in a civil manner
</span><br>
<span class="quotelev2">&gt;&gt; on that debugging technique earlier this week, and I'd hate to re-open
</span><br>
<span class="quotelev2">&gt;&gt; those old wounds by suggesting that technique here. ;)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/inside joke&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Prentice
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14700.php">David Zhang: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14698.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14698.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14700.php">David Zhang: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14700.php">David Zhang: "Re: [OMPI users] Open MPI data transfer error"</a>
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
