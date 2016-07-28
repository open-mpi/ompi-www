<?
$subject_val = "Re: [OMPI users] Best way to communicate a 2d array with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 15:38:15 2014" -->
<!-- isoreceived="20140822193815" -->
<!-- sent="Fri, 22 Aug 2014 14:38:13 -0500" -->
<!-- isosent="20140822193813" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to communicate a 2d array with Java binding" -->
<!-- id="53F79C25.8040506_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+ssbKUafJ4WBqxCVwfRLx7Y_ZatPW9+tcnXFF0wcE8g+RgLEw_at_mail.gmail.com" -->
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
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-22 15:38:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25136.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25134.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25130.php">Saliya Ekanayake: "[OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25136.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25136.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/22/2014 10:10 AM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've a quick question about the usage of Java binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Say there's a 2 dimensional double array (size m x n) that needs to be
</span><br>
<span class="quotelev1">&gt; sent to another rank. I see two options to get this done,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Copy values to a direct buffer of size m*n and send it
</span><br>
<span class="quotelev1">&gt; 2. Copy values to a 1D array of size m*n and send it
</span><br>
<p>i have no idea about the java mpi bindings, but can you describe the 
<br>
type with an mpi datatype?
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess 2 would internally do the copying to a buffer and use it, so
</span><br>
<span class="quotelev1">&gt; suggesting 1. is the best option. Is this the case or is there a better
</span><br>
<span class="quotelev1">&gt; way to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25130.php">http://www.open-mpi.org/community/lists/users/2014/08/25130.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25136.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25134.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25130.php">Saliya Ekanayake: "[OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25136.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25136.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
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
