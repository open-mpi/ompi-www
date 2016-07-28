<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 13:24:20 2009" -->
<!-- isoreceived="20090330172420" -->
<!-- sent="Mon, 30 Mar 2009 13:24:13 -0400" -->
<!-- isosent="20090330172413" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="F443DB7B-75AE-47CE-8095-D04580D9FBC8_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7EB6BD7B-D0CA-450C-9255-247F034ED557_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 13:24:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5746.php">Leonardo Fialho: "Re: [OMPI devel] Error in VT"</a>
<li><strong>In reply to:</strong> <a href="5743.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5749.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 30, 2009, at 12:05 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; But don't we need the whole area to be zero filled?
</span><br>
<p>It will be zero-filled on demand using the lseek/touch method.   
<br>
However, the OS may not reserve space for the skipped pages or disk  
<br>
blocks.  Thus one could still get out of memory or file system full  
<br>
errors at arbitrary points.  Presumably one could also get segfaults  
<br>
from an mmap'ed segment whose pages couldn't be allocated when the  
<br>
demand came.
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5746.php">Leonardo Fialho: "Re: [OMPI devel] Error in VT"</a>
<li><strong>In reply to:</strong> <a href="5743.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5749.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
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
