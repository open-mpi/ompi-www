<?
$subject_val = "Re: [OMPI users] Open MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 14:21:22 2010" -->
<!-- isoreceived="20101105182122" -->
<!-- sent="Fri, 5 Nov 2010 11:20:57 -0700" -->
<!-- isosent="20101105182057" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI data transfer error" -->
<!-- id="AANLkTimV1++SpNd=iP-sFcAHRfN6cNiY_5VjxvF02yGo_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CD4445F.5080908_at_ias.edu" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 14:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14701.php">Joshua Bernstein: "[OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>Previous message:</strong> <a href="14699.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14699.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14704.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14704.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Prentice said, we can't help you without seeing your code.  openMPI has
<br>
stood many trials from many programmers, with many bugs ironed out. So
<br>
typically it is unlikely openMPI is the source of your error.  Without
<br>
seeing your code the only logical conclusion is that something is wrong with
<br>
your programming.
<br>
<p>On Fri, Nov 5, 2010 at 10:52 AM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We can't help you with your coding problem without seeing your code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; I have used &quot;cout&quot; in c++ to print the values of data.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The sender sends correct data to correct receiver.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But, receiver gets wrong data from correct sender.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; why ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nov. 5 2010
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Fri, 5 Nov 2010 08:54:22 -0400
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: prentice_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] Open MPI data transfer error
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jack Bryan wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; In my Open MPI program, one master sends data to 3 workers.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Two workers can receive their data.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; But, the third worker can not get their data.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Before sending data, the master sends a head information to each
</span><br>
<span class="quotelev1">&gt; worker
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; receiver
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; so that each worker knows what the following data package is. (such as
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; length, package tag).
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; The third worker can get its head information message from master but
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; cannot get its correct
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; data package.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; It got the data that should be received by first worker, which get its
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; correct data.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jack,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Providing the relevant sections of code here would be very helpful.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;inside joke&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would tell you to add some printf statements to your code to see what
</span><br>
<span class="quotelev3">&gt; &gt;&gt; data is stored in your variables on the master before it sends them to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; each node, but Jeff Squyres and I agreed to disagree in a civil manner
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on that debugging technique earlier this week, and I'd hate to re-open
</span><br>
<span class="quotelev3">&gt; &gt;&gt; those old wounds by suggesting that technique here. ;)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;/inside joke&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Prentice
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
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14700/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14701.php">Joshua Bernstein: "[OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>Previous message:</strong> <a href="14699.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14699.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14704.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14704.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
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
