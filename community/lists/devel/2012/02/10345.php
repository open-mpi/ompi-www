<?
$subject_val = "[OMPI devel] thread safety of the self btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 17:57:23 2012" -->
<!-- isoreceived="20120208225723" -->
<!-- sent="Thu, 9 Feb 2012 09:27:31 +1030" -->
<!-- isosent="20120208225731" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="[OMPI devel] thread safety of the self btl" -->
<!-- id="20120209092731.02b4c6fd_at_Gantu.yeoh.info" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] thread safety of the self btl<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 17:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10346.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Previous message:</strong> <a href="10344.php">Barrett, Brian W: "[OMPI devel] Matched probe support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10346.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Reply:</strong> <a href="10346.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Reply:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've noticed that the self btl does not do any locking. It has one
<br>
lock defined but its not actually used anywhere.
<br>
<p>So I'm just wondering if that is an oversight or if there is a reason
<br>
that we know for sure that there will never be concurrent access
<br>
to that particular btl with threads enabled?
<br>
<p>Regards,
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10346.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Previous message:</strong> <a href="10344.php">Barrett, Brian W: "[OMPI devel] Matched probe support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10346.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Reply:</strong> <a href="10346.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Reply:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
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
