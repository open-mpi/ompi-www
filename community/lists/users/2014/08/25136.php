<?
$subject_val = "Re: [OMPI users] Best way to communicate a 2d array with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 15:40:50 2014" -->
<!-- isoreceived="20140822194050" -->
<!-- sent="Fri, 22 Aug 2014 15:40:49 -0400" -->
<!-- isosent="20140822194049" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to communicate a 2d array with Java binding" -->
<!-- id="CA+ssbKXMLdvn8eBbK37kR3LFEKwFCc+xaMKStBqCN087MjxytQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53F79C25.8040506_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to communicate a 2d array with Java binding<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-22 15:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25137.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25135.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25135.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25137.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25137.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, these are all MPI_DOUBLE
<br>
<p><p>On Fri, Aug 22, 2014 at 3:38 PM, Rob Latham &lt;robl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/22/2014 10:10 AM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've a quick question about the usage of Java binding.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Say there's a 2 dimensional double array (size m x n) that needs to be
</span><br>
<span class="quotelev2">&gt;&gt; sent to another rank. I see two options to get this done,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Copy values to a direct buffer of size m*n and send it
</span><br>
<span class="quotelev2">&gt;&gt; 2. Copy values to a 1D array of size m*n and send it
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i have no idea about the java mpi bindings, but can you describe the type
</span><br>
<span class="quotelev1">&gt; with an mpi datatype?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess 2 would internally do the copying to a buffer and use it, so
</span><br>
<span class="quotelev2">&gt;&gt; suggesting 1. is the best option. Is this the case or is there a better
</span><br>
<span class="quotelev2">&gt;&gt; way to do this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/">http://www.open-mpi.org/community/lists/users/2014/08/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 25130.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/">http://www.open-mpi.org/community/lists/users/2014/08/</a>
</span><br>
<span class="quotelev1">&gt; 25135.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25136/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25137.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25135.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25135.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25137.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25137.php">Rob Latham: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
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
