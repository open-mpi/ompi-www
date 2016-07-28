<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 16:54:43 2009" -->
<!-- isoreceived="20090331205443" -->
<!-- sent="Tue, 31 Mar 2009 16:54:23 -0400" -->
<!-- isosent="20090331205423" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="6222190B-E505-48C3-B306-006787032962_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D2699D.9030608_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 16:54:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5771.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5769.php">Jeff Squyres: "[OMPI devel] mallopt fixes"</a>
<li><strong>In reply to:</strong> <a href="5768.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5771.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5771.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2009, at 3:06 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; The thing I was wondering about was memory barriers.  E.g., you
</span><br>
<span class="quotelev1">&gt; initialize stuff and then post the FIFO pointer.  The other guy sees  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; FIFO pointer before the initialized memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>We do do memory barriers during that SM startup sequence.  I haven't  
<br>
checked in a while, but I thought we were doing the right kinds of  
<br>
barriers in the right order...
<br>
<p>But George mentioned on the call today that they may have found the  
<br>
issue, but they're testing it.  He didn't explain what the issue was  
<br>
in case he was wrong.  ;-)
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
<li><strong>Next message:</strong> <a href="5771.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5769.php">Jeff Squyres: "[OMPI devel] mallopt fixes"</a>
<li><strong>In reply to:</strong> <a href="5768.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5771.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5771.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
