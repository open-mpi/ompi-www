<?
$subject_val = "[hwloc-devel] Current memory binding policy";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 09:12:29 2011" -->
<!-- isoreceived="20110105141229" -->
<!-- sent="Wed, 5 Jan 2011 09:12:24 -0500" -->
<!-- isosent="20110105141224" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Current memory binding policy" -->
<!-- id="75DF78FB-8C14-4A6B-9FF1-A59FCDCBEC57_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Current memory binding policy<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 09:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1784.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1782.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1786.php">Samuel Thibault: "Re: [hwloc-devel] Current memory binding policy"</a>
<li><strong>Maybe reply:</strong> <a href="1786.php">Samuel Thibault: "Re: [hwloc-devel] Current memory binding policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Quick clarification question: hwloc_alloc_membind() says --
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Returns -1 with errno set to ENOSYS if the action is not 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;supported and HWLOC_MEMBIND_STRICT is given.
<br>
<p>But it also returns -1/ENOSYS if the current memory policy is STRICT, even if STRICT was not passed in flags.  
<br>
<p>Right?
<br>
<p>(ditto for EXDEV, and ditto for other similar functions)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1784.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1782.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1786.php">Samuel Thibault: "Re: [hwloc-devel] Current memory binding policy"</a>
<li><strong>Maybe reply:</strong> <a href="1786.php">Samuel Thibault: "Re: [hwloc-devel] Current memory binding policy"</a>
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
