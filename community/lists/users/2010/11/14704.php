<?
$subject_val = "Re: [OMPI users] Open MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 16:58:48 2010" -->
<!-- isoreceived="20101105205848" -->
<!-- sent="Fri, 5 Nov 2010 14:58:43 -0600" -->
<!-- isosent="20101105205843" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI data transfer error" -->
<!-- id="SNT134-w49F0CDDDFD0DE6F00DF6DBCB4C0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTimV1++SpNd=iP-sFcAHRfN6cNiY_5VjxvF02yGo_at_mail.gmail.com" -->
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
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 16:58:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14705.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14703.php">Joshua Bernstein: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>In reply to:</strong> <a href="14700.php">David Zhang: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14705.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14705.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
But, my code is too long to be posted. 
<br>
dozens of files, thousands of lines. 
<br>
Do you have better ideas ? 
<br>
Any help is appreciated. 
<br>
Jack
<br>
Nov. 5 2010
<br>
From: solarbikedz_at_[hidden]
<br>
Date: Fri, 5 Nov 2010 11:20:57 -0700
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Open MPI data transfer error
<br>
<p>As Prentice said, we can't help you without seeing your code.  openMPI has stood many trials from many programmers, with many bugs ironed out. So typically it is unlikely openMPI is the source of your error.  Without seeing your code the only logical conclusion is that something is wrong with your programming. 
<br>
<p><p><p>On Fri, Nov 5, 2010 at 10:52 AM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<p><p>We can't help you with your coding problem without seeing your code.
<br>
<p><p><p><p><p>Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<p><span class="quotelev1">&gt; I have used &quot;cout&quot; in c++ to print the values of data.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; The sender sends correct data to correct receiver.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; But, receiver gets wrong data from correct sender.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; why ?
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; thanks
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Nov. 5 2010
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev2">&gt;&gt; Date: Fri, 5 Nov 2010 08:54:22 -0400
</span><br>
<p><span class="quotelev2">&gt;&gt; From: prentice_at_[hidden]
</span><br>
<p><span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<p><span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Open MPI data transfer error
</span><br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<p><span class="quotelev2">&gt;&gt; Jack Bryan wrote:
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt;
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt;
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; In my Open MPI program, one master sends data to 3 workers.
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt;
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; Two workers can receive their data.
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt;
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; But, the third worker can not get their data.
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt;
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; Before sending data, the master sends a head information to each worker
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; receiver
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; so that each worker knows what the following data package is. (such as
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; length, package tag).
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt;
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; The third worker can get its head information message from master but
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; cannot get its correct
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; data package.
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt;
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; It got the data that should be received by first worker, which get its
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt; correct data.
</span><br>
<p><span class="quotelev3">&gt;&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<p><span class="quotelev2">&gt;&gt; Jack,
</span><br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<p><span class="quotelev2">&gt;&gt; Providing the relevant sections of code here would be very helpful.
</span><br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<p><span class="quotelev2">&gt;&gt; &lt;inside joke&gt;
</span><br>
<p><span class="quotelev2">&gt;&gt; I would tell you to add some printf statements to your code to see what
</span><br>
<p><span class="quotelev2">&gt;&gt; data is stored in your variables on the master before it sends them to
</span><br>
<p><span class="quotelev2">&gt;&gt; each node, but Jeff Squyres and I agreed to disagree in a civil manner
</span><br>
<p><span class="quotelev2">&gt;&gt; on that debugging technique earlier this week, and I'd hate to re-open
</span><br>
<p><span class="quotelev2">&gt;&gt; those old wounds by suggesting that technique here. ;)
</span><br>
<p><span class="quotelev2">&gt;&gt; &lt;/inside joke&gt;
</span><br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<p><span class="quotelev2">&gt;&gt; --
</span><br>
<p><span class="quotelev2">&gt;&gt; Prentice
</span><br>
<p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14704/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14705.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14703.php">Joshua Bernstein: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>In reply to:</strong> <a href="14700.php">David Zhang: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14705.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14705.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
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
