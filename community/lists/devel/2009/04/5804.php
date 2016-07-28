<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 21:39:56 2009" -->
<!-- isoreceived="20090408013956" -->
<!-- sent="Tue, 07 Apr 2009 18:39:28 -0700" -->
<!-- isosent="20090408013928" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k" -->
<!-- id="49DC0050.9050505_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A5601627-4717-4982-B554-57277DB12A02_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 21:39:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5805.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5803.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5803.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5805.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5805.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This is interesting. I cannot trigger this deadlock on my AMD cluster  
</span><br>
<span class="quotelev1">&gt; even when I set the sm_min_size to zero. However, on a Intel cluster  
</span><br>
<span class="quotelev1">&gt; this can be triggered pretty easily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I think I finally understood where the problem is coming 
</span><br>
<span class="quotelev1">&gt; from.  r20952 and r20953 are commits that, in addition to the ones 
</span><br>
<span class="quotelev1">&gt; from  yesterday, fix the problem. Please read the log on r20953 to see 
</span><br>
<span class="quotelev1">&gt; how  this happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, please stress it before we move it to the 1.3 branch.
</span><br>
<p>Okay, this fix works for me.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5805.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5803.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5803.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5805.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5805.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
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
