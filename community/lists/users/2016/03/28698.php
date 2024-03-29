<?
$subject_val = "Re: [OMPI users] OpenMP &amp; Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 13 18:04:43 2016" -->
<!-- isoreceived="20160313220443" -->
<!-- sent="Sun, 13 Mar 2016 22:04:40 +0000 (UTC)" -->
<!-- isosent="20160313220440" -->
<!-- name="Matthew Larkin" -->
<!-- email="larkym_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP &amp;amp; Open MPI" -->
<!-- id="1531299782.594522.1457906680587.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc6K3n0CpM9Wd-n6NG3_-4Hc+KpLubyiOX5pFFZwWOfPuQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Matthew Larkin (<em>larkym_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-13 18:04:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28699.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28697.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28697.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28699.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>Reply:</strong> <a href="28699.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Nick,
<br>
I do understand they are different parallel paradigms and I understand the purpose of each.&#194;&#160;
<br>
If I run mpi processes to exhaust all cores, what is the need or purpose to also use openmp to create threads? I believe there will be no resources left for the forked threads?&#194;&#160;
<br>
<p>Sent from Yahoo Mail on Android 
<br>
&nbsp;
<br>
&nbsp;&nbsp;On Sun, Mar 13, 2016 at 5:59 PM, Nick Papior&lt;nickpapior_at_[hidden]&gt; wrote:   2016-03-13 22:02 GMT+01:00 Matthew Larkin &lt;larkym_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding is Open MPI can utilize shared and/or distributed memory
</span><br>
<span class="quotelev1">&gt; architecture (parallel programming model). OpenMP is soley for shared memory
</span><br>
<span class="quotelev1">&gt; systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe Open MPI incorporates OpenMP from some of the other archives I
</span><br>
<span class="quotelev1">&gt; glanced at.
</span><br>
This is not true.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a true statement? If so, is there any need to create a hybrid model
</span><br>
<span class="quotelev1">&gt; that uses both OpenMP and Open MPI?
</span><br>
Sure there is, they are two different parallel paradigms.
<br>
Basically MPI is distributed while OpenMP is shared.
<br>
Try reading about OpenMP on wiki and/or MPI on wiki:
<br>
OpenMP:
<br>
<a href="https://en.wikipedia.org/wiki/OpenMP">https://en.wikipedia.org/wiki/OpenMP</a>
<br>
MPI:
<br>
<a href="https://en.wikipedia.org/wiki/Message_Passing_Interface">https://en.wikipedia.org/wiki/Message_Passing_Interface</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28696.php">http://www.open-mpi.org/community/lists/users/2016/03/28696.php</a>
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28699.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28697.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28697.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28699.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>Reply:</strong> <a href="28699.php">Nick Papior: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
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
