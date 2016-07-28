<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  5 14:51:05 2006" -->
<!-- isoreceived="20060405185105" -->
<!-- sent="Wed, 05 Apr 2006 14:48:30 -0400" -->
<!-- isosent="20060405184830" -->
<!-- name="Eric Brunner-Williams" -->
<!-- email="brunner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Send problems on AMD64" -->
<!-- id="200604051848.k35ImUEg024176_at_nic-naa.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="d69e70340604051124k314b7003i91b5a7f1a8154817_at_mail.gmail.com" -->
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
<strong>From:</strong> Eric Brunner-Williams (<em>brunner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-05 14:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0964.php">George Bosilca: "Re: [OMPI users] Send problems on AMD64"</a>
<li><strong>Previous message:</strong> <a href="0962.php">Charles Shuller: "[OMPI users] Send problems on AMD64"</a>
<li><strong>In reply to:</strong> <a href="0962.php">Charles Shuller: "[OMPI users] Send problems on AMD64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0964.php">George Bosilca: "Re: [OMPI users] Send problems on AMD64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Charles,
<br>
<p>I was debugging something that had the same properties.
<br>
<p>I was following the comm struct for corruption-on-free in the read
<br>
phase of a write-then-read test, in mpich-1.2.7p1 (and mpich-1.2.6).
<br>
It only manifested on 64bit nodes, and only when compiled on 64bit
<br>
nodes. The binary when compiled on 32bit and run on 64bit did not
<br>
fail. 
<br>
<p>My smallest test case was two machines, and failure was intermittant,
<br>
both in reported stack trace, and upon size of the buffers being used.
<br>
<p>The app that triggered this was a benchmark from one of the (US) labs
<br>
used for benchmarking i/o on a storage product.
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0964.php">George Bosilca: "Re: [OMPI users] Send problems on AMD64"</a>
<li><strong>Previous message:</strong> <a href="0962.php">Charles Shuller: "[OMPI users] Send problems on AMD64"</a>
<li><strong>In reply to:</strong> <a href="0962.php">Charles Shuller: "[OMPI users] Send problems on AMD64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0964.php">George Bosilca: "Re: [OMPI users] Send problems on AMD64"</a>
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
