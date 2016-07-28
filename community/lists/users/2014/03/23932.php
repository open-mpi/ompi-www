<?
$subject_val = "Re: [OMPI users] testsome returns negative indices [diagnosis]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 16:31:22 2014" -->
<!-- isoreceived="20140321203122" -->
<!-- sent="Fri, 21 Mar 2014 20:31:21 +0000" -->
<!-- isosent="20140321203121" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] testsome returns negative indices [diagnosis]" -->
<!-- id="76596019-55B7-42D7-B577-C30277B2BA07_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="532C9D85.2020609_at_biostat.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] testsome returns negative indices [diagnosis]<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 16:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23933.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault"</a>
<li><strong>Previous message:</strong> <a href="23931.php">Joshua Ladd: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<li><strong>In reply to:</strong> <a href="23930.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2014, at 4:13 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; There was a problem in the R code that cause MPI_Request objects to be reused before the original request completed.
</span><br>
<span class="quotelev1">&gt; Things are working much better now, though some bugs remain (not necessarily related to MPI_Isend or Testsome).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just for the record, isend in Rmpi is unreliable because the objects being sent are subject to garbage collection (by R) before the send completes.  I am working on modifications to Rmpi to fix that.
</span><br>
<p>Cool.
<br>
<p><span class="quotelev2">&gt;&gt; What should the integer size be for MPI on 64 bit architectures, specifically linux gcc (Debian 4.4.5-8) 4.4.5?
</span><br>
<span class="quotelev1">&gt; I think it's still 32 bits and the problems were elsewhere.
</span><br>
<p>It'll be whatever C defines an &quot;int&quot; to be.  It's usually 32 bits, even for 64 bit applications.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23933.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault"</a>
<li><strong>Previous message:</strong> <a href="23931.php">Joshua Ladd: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<li><strong>In reply to:</strong> <a href="23930.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<!-- nextthread="start" -->
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
