<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 12:29:41 2007" -->
<!-- isoreceived="20070321162941" -->
<!-- sent="Wed, 21 Mar 2007 11:29:34 -0500" -->
<!-- isosent="20070321162934" -->
<!-- name="Sam Adams" -->
<!-- email="smadasam_at_[hidden]" -->
<!-- subject="[OMPI users] threading" -->
<!-- id="faa2718c0703210929h3a9b4436wa255e863f1478bd9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Sam Adams (<em>smadasam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-21 12:29:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2859.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 536, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="2857.php">Nicolas Niclausse: "[OMPI users] segfault with netpipe &amp; ompi 1.2 + MX (32bit only)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2866.php">David Burns: "Re: [OMPI users] threading"</a>
<li><strong>Reply:</strong> <a href="2866.php">David Burns: "Re: [OMPI users] threading"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been looking, but I haven't really found a good answer about
<br>
system level threading.  We are about to get a new cluster of
<br>
dual-processor quad-core nodes or 8 cores per node.  Traditionally I
<br>
would just tell MPI to launch two processes per dual processor single
<br>
core node, but with eight cores on a node, having 8 processes seems
<br>
inefficient.
<br>
<p><p><p>My question is this: does OpenMPI sense that there are multiple cores
<br>
on a node and use something like pthreads instead of creating new
<br>
processes automatically when I request 8 processes for a node, or
<br>
should I run a single process per node and use OpenMP or pthreads
<br>
explicitly to get better performance on a per node basis?
<br>
<p><pre>
-- 
Sam Adams
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2859.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 536, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="2857.php">Nicolas Niclausse: "[OMPI users] segfault with netpipe &amp; ompi 1.2 + MX (32bit only)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2866.php">David Burns: "Re: [OMPI users] threading"</a>
<li><strong>Reply:</strong> <a href="2866.php">David Burns: "Re: [OMPI users] threading"</a>
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
