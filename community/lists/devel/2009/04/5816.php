<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 11:36:04 2009" -->
<!-- isoreceived="20090413153604" -->
<!-- sent="Mon, 13 Apr 2009 11:35:59 -0400" -->
<!-- isosent="20090413153559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k, Performance 	degradation ???" -->
<!-- id="FD0445D2-62FD-4D2E-A899-4B8395B542FB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49E35A85.6030108_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 11:35:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5817.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Previous message:</strong> <a href="5815.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>In reply to:</strong> <a href="5815.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5817.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5817.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok.  Let's go with 64MB.  Is that already on the v1.3 branch?
<br>
<p>George -- any opinions?
<br>
<p><p><p>On Apr 13, 2009, at 11:30 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I [unfortunately] think that our benchmark performance is   
</span><br>
<span class="quotelev1">&gt; important.
</span><br>
<span class="quotelev2">&gt; &gt; :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I don't know if 64mb is too big, but it should probably be above
</span><br>
<span class="quotelev2">&gt; &gt; zero to avoid the performance degregation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if 64 MB is too big.  I think there is no right answer...
</span><br>
<span class="quotelev1">&gt; and you can always find situations for which your answer is the wrong
</span><br>
<span class="quotelev1">&gt; answer.  I chose 64 MB because it's what everyone had lived with  
</span><br>
<span class="quotelev1">&gt; before
</span><br>
<span class="quotelev1">&gt; (per_peer_size=32MB with a minimum of np=2 giving 2*32MB).  So, at  
</span><br>
<span class="quotelev1">&gt; np=2,
</span><br>
<span class="quotelev1">&gt; we mmap as much memory as before but need less of it.  At large np, we
</span><br>
<span class="quotelev1">&gt; mmap enough memory (jobs will start).  With any luck, we're ahead of
</span><br>
<span class="quotelev1">&gt; where we used to be.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5817.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Previous message:</strong> <a href="5815.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>In reply to:</strong> <a href="5815.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5817.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5817.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
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
