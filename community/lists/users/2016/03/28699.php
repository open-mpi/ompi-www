<?
$subject_val = "Re: [OMPI users] OpenMP &amp; Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 13 18:08:30 2016" -->
<!-- isoreceived="20160313220830" -->
<!-- sent="Sun, 13 Mar 2016 23:08:09 +0100" -->
<!-- isosent="20160313220809" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP &amp;amp; Open MPI" -->
<!-- id="CAAbhqc6eFmKq24oQBdaht4qmR2Swkmu3SV724pd-DSrndKqw-g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1531299782.594522.1457906680587.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMP &amp; Open MPI<br>
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-13 18:08:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28700.php">Jeff Hammond: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28698.php">Matthew Larkin: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28698.php">Matthew Larkin: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28700.php">Jeff Hammond: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2016-03-13 23:04 GMT+01:00 Matthew Larkin &lt;larkym_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Thanks Nick,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do understand they are different parallel paradigms and I understand the
</span><br>
<span class="quotelev1">&gt; purpose of each.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run mpi processes to exhaust all cores, what is the need or purpose to
</span><br>
<span class="quotelev1">&gt; also use openmp to create threads? I believe there will be no resources left
</span><br>
<span class="quotelev1">&gt; for the forked threads?
</span><br>
No, in that case there is no need to create forked threads.
<br>
However, if you know that your threading performs better at a certain
<br>
level of MPI parallelisation you may instead of increasing MPI
<br>
processors increase threads.
<br>
For instance, instead of launching 8 MPI processors you may launch 2
<br>
MPI processors each forking 4 threads.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from Yahoo Mail on Android
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Mar 13, 2016 at 5:59 PM, Nick Papior
</span><br>
<span class="quotelev1">&gt; &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 2016-03-13 22:02 GMT+01:00 Matthew Larkin &lt;larkym_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My understanding is Open MPI can utilize shared and/or distributed memory
</span><br>
<span class="quotelev2">&gt;&gt; architecture (parallel programming model). OpenMP is soley for shared
</span><br>
<span class="quotelev2">&gt;&gt; memory
</span><br>
<span class="quotelev2">&gt;&gt; systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe Open MPI incorporates OpenMP from some of the other archives I
</span><br>
<span class="quotelev2">&gt;&gt; glanced at.
</span><br>
<span class="quotelev1">&gt; This is not true.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a true statement? If so, is there any need to create a hybrid
</span><br>
<span class="quotelev2">&gt;&gt; model
</span><br>
<span class="quotelev2">&gt;&gt; that uses both OpenMP and Open MPI?
</span><br>
<span class="quotelev1">&gt; Sure there is, they are two different parallel paradigms.
</span><br>
<span class="quotelev1">&gt; Basically MPI is distributed while OpenMP is shared.
</span><br>
<span class="quotelev1">&gt; Try reading about OpenMP on wiki and/or MPI on wiki:
</span><br>
<span class="quotelev1">&gt; OpenMP:
</span><br>
<span class="quotelev1">&gt; <a href="https://en.wikipedia.org/wiki/OpenMP">https://en.wikipedia.org/wiki/OpenMP</a>
</span><br>
<span class="quotelev1">&gt; MPI:
</span><br>
<span class="quotelev1">&gt; <a href="https://en.wikipedia.org/wiki/Message_Passing_Interface">https://en.wikipedia.org/wiki/Message_Passing_Interface</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28696.php">http://www.open-mpi.org/community/lists/users/2016/03/28696.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28700.php">Jeff Hammond: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28698.php">Matthew Larkin: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28698.php">Matthew Larkin: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28700.php">Jeff Hammond: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
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
