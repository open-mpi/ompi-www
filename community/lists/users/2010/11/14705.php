<?
$subject_val = "Re: [OMPI users] Open MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 17:30:19 2010" -->
<!-- isoreceived="20101105213019" -->
<!-- sent="Fri, 05 Nov 2010 17:30:14 -0400" -->
<!-- isosent="20101105213014" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI data transfer error" -->
<!-- id="4CD47766.8060205_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w49F0CDDDFD0DE6F00DF6DBCB4C0_at_phx.gbl" -->
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
<strong>Date:</strong> 2010-11-05 17:30:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14706.php">Eugene Loh: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14704.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14704.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14706.php">Eugene Loh: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14706.php">Eugene Loh: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Choose one
<br>
<p>A) Post only the relevant sections of the code. If you have syntax
<br>
error, it should be in the Send and Receive calls, or one of the lines
<br>
where the data is copied or read from the array/buffer/whatever that
<br>
you're sending or receiving.
<br>
<p>B) Try reproducing your problem in a toy program that has only enough
<br>
code to reproduce your problem. For example, create an array, populate
<br>
it with data, send it, and then on the receiving end, receive it, and
<br>
print it out. Something simple like that. I find when I do that, I
<br>
usually find the error in my code.
<br>
<p>Prentice
<br>
<p><p>Jack Bryan wrote:
<br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, my code is too long to be posted. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dozens of files, thousands of lines. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have better ideas ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nov. 5 2010
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; From: solarbikedz_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Fri, 5 Nov 2010 11:20:57 -0700
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI data transfer error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Prentice said, we can't help you without seeing your code.  openMPI
</span><br>
<span class="quotelev1">&gt; has stood many trials from many programmers, with many bugs ironed out.
</span><br>
<span class="quotelev1">&gt; So typically it is unlikely openMPI is the source of your error. 
</span><br>
<span class="quotelev1">&gt; Without seeing your code the only logical conclusion is that something
</span><br>
<span class="quotelev1">&gt; is wrong with your programming.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 5, 2010 at 10:52 AM, Prentice Bisbal &lt;prentice_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:prentice_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     We can't help you with your coding problem without seeing your code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks,
</span><br>
<span class="quotelev2">&gt;     &gt; I have used &quot;cout&quot; in c++ to print the values of data.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The sender sends correct data to correct receiver.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; But, receiver gets wrong data from correct sender.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; why ?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; thanks
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Nov. 5 2010
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Date: Fri, 5 Nov 2010 08:54:22 -0400
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; From: prentice_at_[hidden] &lt;mailto:prentice_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Subject: Re: [OMPI users] Open MPI data transfer error
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Jack Bryan wrote:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; In my Open MPI program, one master sends data to 3 workers.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; Two workers can receive their data.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; But, the third worker can not get their data.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; Before sending data, the master sends a head information to
</span><br>
<span class="quotelev1">&gt;     each worker
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; receiver
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; so that each worker knows what the following data package is.
</span><br>
<span class="quotelev1">&gt;     (such as
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; length, package tag).
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; The third worker can get its head information message from
</span><br>
<span class="quotelev1">&gt;     master but
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; cannot get its correct
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; data package.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; It got the data that should be received by first worker, which
</span><br>
<span class="quotelev1">&gt;     get its
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt; correct data.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Jack,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Providing the relevant sections of code here would be very helpful.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; &lt;inside joke&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; I would tell you to add some printf statements to your code to
</span><br>
<span class="quotelev1">&gt;     see what
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; data is stored in your variables on the master before it sends
</span><br>
<span class="quotelev1">&gt;     them to
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; each node, but Jeff Squyres and I agreed to disagree in a civil
</span><br>
<span class="quotelev1">&gt;     manner
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; on that debugging technique earlier this week, and I'd hate to
</span><br>
<span class="quotelev1">&gt;     re-open
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; those old wounds by suggesting that technique here. ;)
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; &lt;/inside joke&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; --
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Prentice
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><pre>
-- 
Prentice Bisbal
Linux Software Support Specialist/System Administrator
School of Natural Sciences
Institute for Advanced Study
Princeton, NJ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14706.php">Eugene Loh: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14704.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14704.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14706.php">Eugene Loh: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14706.php">Eugene Loh: "Re: [OMPI users] Open MPI data transfer error"</a>
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
