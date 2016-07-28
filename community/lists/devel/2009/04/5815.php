<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 11:30:32 2009" -->
<!-- isoreceived="20090413153032" -->
<!-- sent="Mon, 13 Apr 2009 08:30:13 -0700" -->
<!-- isosent="20090413153013" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k, Performance 	degradation ???" -->
<!-- id="49E35A85.6030108_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CC31F770-5070-46BD-96D3-20DBF21000AE_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 11:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Previous message:</strong> <a href="5814.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>In reply to:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I [unfortunately] think that our benchmark performance is  important.  
</span><br>
<span class="quotelev1">&gt; :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I don't know if 64mb is too big, but it should probably be above  
</span><br>
<span class="quotelev1">&gt; zero to avoid the performance degregation.
</span><br>
<p>I don't know if 64 MB is too big.  I think there is no right answer... 
<br>
and you can always find situations for which your answer is the wrong 
<br>
answer.  I chose 64 MB because it's what everyone had lived with before 
<br>
(per_peer_size=32MB with a minimum of np=2 giving 2*32MB).  So, at np=2, 
<br>
we mmap as much memory as before but need less of it.  At large np, we 
<br>
mmap enough memory (jobs will start).  With any luck, we're ahead of 
<br>
where we used to be.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Previous message:</strong> <a href="5814.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>In reply to:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Reply:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
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
