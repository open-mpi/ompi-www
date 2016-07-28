<?
$subject_val = "Re: [OMPI devel] Multi-rail on openib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 04:27:29 2009" -->
<!-- isoreceived="20090609082729" -->
<!-- sent="Tue, 09 Jun 2009 11:27:29 +0300" -->
<!-- isosent="20090609082729" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-rail on openib" -->
<!-- id="4A2E1CF1.40206_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="88815dc10906081434k6bbdb597id1f7f783b018308a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multi-rail on openib<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 04:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6194.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6192.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6194.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most of the IB protocols used by MPI target a LID.   There is no
</span><br>
<span class="quotelev1">&gt; existing notification path I know of that can replace LID-xyz with
</span><br>
<span class="quotelev1">&gt; LID-123.  The subnet manager might be able to do this but begs
</span><br>
<span class="quotelev1">&gt; security issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting problem.....
</span><br>
<span class="quotelev1">&gt;   
</span><br>
It is not exactly correct. For migration between ports
<br>
on the same HCA you may use IB APM feature. It is already implemented
<br>
in Open MPI 1.3.X
<br>
<p>In case of port migration between different HCA we need to do it in 
<br>
software. And I guess it is
<br>
what Sylvain is doing.
<br>
<p>Pasha.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6194.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6192.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6194.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
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
