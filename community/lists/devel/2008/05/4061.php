<?
$subject_val = "Re: [OMPI devel] Notes from mem hooks call today";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 19:09:51 2008" -->
<!-- isoreceived="20080528230951" -->
<!-- sent="Wed, 28 May 2008 16:09:42 -0700" -->
<!-- isosent="20080528230942" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Notes from mem hooks call today" -->
<!-- id="adaiqwyowjt.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0805281717090.11431_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Notes from mem hooks call today<br>
<strong>From:</strong> Roland Dreier (<em>rdreier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-28 19:09:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Previous message:</strong> <a href="4060.php">Brian W. Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>In reply to:</strong> <a href="4060.php">Brian W. Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Reply:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Reply:</strong> <a href="4063.php">Patrick Geoffray: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; I think Patrick's point is that it's not too much more expensive to do the 
</span><br>
<span class="quotelev1"> &gt; syscall on Linux vs just doing the cache lookup, particularly in the 
</span><br>
<span class="quotelev1"> &gt; context of a long message.  And it means that upper layer protocols like 
</span><br>
<span class="quotelev1"> &gt; MPI don't have to deal with caches (and since MPI implementors hate 
</span><br>
<span class="quotelev1"> &gt; registration caches only slightly less than we hate MPI_CANCEL, that will 
</span><br>
<span class="quotelev1"> &gt; make us happy).
</span><br>
<p>Stick in a separate library then?
<br>
<p>I don't think we want the complexity in the kernel -- I personally would
<br>
argue against merging it upstream; and given that the userspace solution
<br>
is actually faster, it becomes pretty hard to justify.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Previous message:</strong> <a href="4060.php">Brian W. Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>In reply to:</strong> <a href="4060.php">Brian W. Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Reply:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Reply:</strong> <a href="4063.php">Patrick Geoffray: "Re: [OMPI devel] Notes from mem hooks call today"</a>
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
