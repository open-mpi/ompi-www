<?
$subject_val = "[OMPI devel] &quot;Fake&quot; mpool usage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 10:05:29 2012" -->
<!-- isoreceived="20121018140529" -->
<!-- sent="Thu, 18 Oct 2012 14:04:25 +0000" -->
<!-- isosent="20121018140425" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;quot;Fake&amp;quot; mpool usage" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD239CBEEF_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] &quot;Fake&quot; mpool usage<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 10:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11607.php">Jeff Squyres: "[OMPI devel] 1.6.3rc2"</a>
<li><strong>Previous message:</strong> <a href="11605.php">George Bosilca: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All -
<br>
<p>I'm trying to clean up the MX situation in 1.7 with regards to the fake
<br>
mpool and have some questions.  It looks like the point of the fake mpool
<br>
is to translate a memory hook release into a free call in some other
<br>
library.  My question is why we're using the mpool to do that.  Since opal
<br>
allows multiple registrations to the alloc/release hooks, it would appear
<br>
that one could just register another handler and bypass the mpool
<br>
infrastructure altogether.  Can anyone comment on this?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11607.php">Jeff Squyres: "[OMPI devel] 1.6.3rc2"</a>
<li><strong>Previous message:</strong> <a href="11605.php">George Bosilca: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
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
