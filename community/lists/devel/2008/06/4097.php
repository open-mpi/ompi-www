<?
$subject_val = "[OMPI devel] heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 15:09:43 2008" -->
<!-- isoreceived="20080605190943" -->
<!-- sent="Thu, 5 Jun 2008 15:09:33 -0400" -->
<!-- isosent="20080605190933" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] heterogeneous support" -->
<!-- id="C092C848-0593-49A7-BAA0-E3A04AEC2BA0_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] heterogeneous support<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 15:09:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4098.php">Brian W. Barrett: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="4096.php">Brian W. Barrett: "Re: [OMPI devel] memory manager RFC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4098.php">Brian W. Barrett: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="4098.php">Brian W. Barrett: "Re: [OMPI devel] heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just noticed that heterogeneous MPI support is enabled by default.   
<br>
Do we really want this?  Doesn't it add a little overhead (probably  
<br>
noticeable on shared memory)?
<br>
<p>I'd be comfortable with users specifically having to enable  
<br>
heterogeneous support via configure and having [slightly] better out- 
<br>
of-the-box performance for the common (homogeneous) case.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4098.php">Brian W. Barrett: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="4096.php">Brian W. Barrett: "Re: [OMPI devel] memory manager RFC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4098.php">Brian W. Barrett: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="4098.php">Brian W. Barrett: "Re: [OMPI devel] heterogeneous support"</a>
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
