<?
$subject_val = "Re: [OMPI users] Open MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 18:56:58 2010" -->
<!-- isoreceived="20101105225658" -->
<!-- sent="Fri, 05 Nov 2010 14:55:32 -0800" -->
<!-- isosent="20101105225532" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI data transfer error" -->
<!-- id="4CD48B64.9020005_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CD47766.8060205_at_ias.edu" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 18:55:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14707.php">Jed Brown: "[OMPI users] Open MPI 1.5 is not detecting oversubscription"</a>
<li><strong>Previous message:</strong> <a href="14705.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14705.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14708.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14708.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Debugging is not a straightforward task.  Even posting the code doesn't 
<br>
necessarily help (since no one may be motivated to help or they can't 
<br>
reproduce the problem or...).  You'll just have to try different things 
<br>
and see what works for you.  Another option is to trace the MPI calls.  
<br>
If a process sends a message, dump out the MPI_Send() arguments.  When a 
<br>
receiver receives, correspondingly dump those arguments.  Etc.  This 
<br>
might be a way of seeing what the program is doing in terms of MPI and 
<br>
thereby getting to suggestion B below.
<br>
<p>How do you trace and sort through the resulting data?  That's another 
<br>
tough question.  Among other things, if you can't find a tool that fits 
<br>
your needs, you can use the PMPI layer to write wrappers.  Writing 
<br>
wrappers is like inserting printf() statements, but doesn't quite have 
<br>
the same amount of moral shame associated with it!
<br>
<p>Prentice Bisbal wrote:
<br>
<p><span class="quotelev1">&gt;Choose one
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;A) Post only the relevant sections of the code. If you have syntax
</span><br>
<span class="quotelev1">&gt;error, it should be in the Send and Receive calls, or one of the lines
</span><br>
<span class="quotelev1">&gt;where the data is copied or read from the array/buffer/whatever that
</span><br>
<span class="quotelev1">&gt;you're sending or receiving.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;B) Try reproducing your problem in a toy program that has only enough
</span><br>
<span class="quotelev1">&gt;code to reproduce your problem. For example, create an array, populate
</span><br>
<span class="quotelev1">&gt;it with data, send it, and then on the receiving end, receive it, and
</span><br>
<span class="quotelev1">&gt;print it out. Something simple like that. I find when I do that, I
</span><br>
<span class="quotelev1">&gt;usually find the error in my code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;But, my code is too long to be posted. 
</span><br>
<span class="quotelev2">&gt;&gt;dozens of files, thousands of lines. 
</span><br>
<span class="quotelev2">&gt;&gt;Do you have better ideas ? 
</span><br>
<span class="quotelev2">&gt;&gt;Any help is appreciated. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Nov. 5 2010
</span><br>
<span class="quotelev2">&gt;&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;From: solarbikedz_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Date: Fri, 5 Nov 2010 11:20:57 -0700
</span><br>
<span class="quotelev2">&gt;&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: [OMPI users] Open MPI data transfer error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;As Prentice said, we can't help you without seeing your code.  openMPI
</span><br>
<span class="quotelev2">&gt;&gt;has stood many trials from many programmers, with many bugs ironed out.
</span><br>
<span class="quotelev2">&gt;&gt;So typically it is unlikely openMPI is the source of your error. 
</span><br>
<span class="quotelev2">&gt;&gt;Without seeing your code the only logical conclusion is that something
</span><br>
<span class="quotelev2">&gt;&gt;is wrong with your programming.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Fri, Nov 5, 2010 at 10:52 AM, Prentice Bisbal &lt;prentice_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&lt;mailto:prentice_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    We can't help you with your coding problem without seeing your code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Jack Bryan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;    &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;    &gt; I have used &quot;cout&quot; in c++ to print the values of data.
</span><br>
<span class="quotelev3">&gt;&gt;    &gt;
</span><br>
<span class="quotelev3">&gt;&gt;    &gt; The sender sends correct data to correct receiver.
</span><br>
<span class="quotelev3">&gt;&gt;    &gt;
</span><br>
<span class="quotelev3">&gt;&gt;    &gt; But, receiver gets wrong data from correct sender.
</span><br>
<span class="quotelev3">&gt;&gt;    &gt;
</span><br>
<span class="quotelev3">&gt;&gt;    &gt; why ?
</span><br>
<span class="quotelev3">&gt;&gt;    &gt;
</span><br>
<span class="quotelev3">&gt;&gt;    &gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;    &gt;
</span><br>
<span class="quotelev3">&gt;&gt;    &gt; Nov. 5 2010
</span><br>
<span class="quotelev3">&gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; Date: Fri, 5 Nov 2010 08:54:22 -0400
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; From: prentice_at_[hidden] &lt;mailto:prentice_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; Subject: Re: [OMPI users] Open MPI data transfer error
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; In my Open MPI program, one master sends data to 3 workers.
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; Two workers can receive their data.
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; But, the third worker can not get their data.
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; Before sending data, the master sends a head information to
</span><br>
<span class="quotelev2">&gt;&gt;    each worker
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; receiver
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; so that each worker knows what the following data package is.
</span><br>
<span class="quotelev2">&gt;&gt;    (such as
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; length, package tag).
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; The third worker can get its head information message from
</span><br>
<span class="quotelev2">&gt;&gt;    master but
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; cannot get its correct
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; data package.
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; It got the data that should be received by first worker, which
</span><br>
<span class="quotelev2">&gt;&gt;    get its
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt; correct data.
</span><br>
<span class="quotelev1">&gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; Jack,
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; Providing the relevant sections of code here would be very helpful.
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; &lt;inside joke&gt;
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; I would tell you to add some printf statements to your code to
</span><br>
<span class="quotelev2">&gt;&gt;    see what
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; data is stored in your variables on the master before it sends
</span><br>
<span class="quotelev2">&gt;&gt;    them to
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; each node, but Jeff Squyres and I agreed to disagree in a civil
</span><br>
<span class="quotelev2">&gt;&gt;    manner
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; on that debugging technique earlier this week, and I'd hate to
</span><br>
<span class="quotelev2">&gt;&gt;    re-open
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; those old wounds by suggesting that technique here. ;)
</span><br>
<span class="quotelev4">&gt;&gt;    &gt;&gt; &lt;/inside joke&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14707.php">Jed Brown: "[OMPI users] Open MPI 1.5 is not detecting oversubscription"</a>
<li><strong>Previous message:</strong> <a href="14705.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14705.php">Prentice Bisbal: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14708.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14708.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
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
