<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 01:46:44 2009" -->
<!-- isoreceived="20090331054644" -->
<!-- sent="Mon, 30 Mar 2009 21:46:25 -0800" -->
<!-- isosent="20090331054625" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49D1AE31.4040108_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="22C50902-B459-4C98-AF57-EAC10068B3FF_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 01:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5763.php">Sylvain Jeaugey: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5764.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5764.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, George found what looks like a race condition in the sm init  
</span><br>
<span class="quotelev1">&gt; code today -- it looks like we don't call maffinity anywhere in the 
</span><br>
<span class="quotelev1">&gt; sm  btl startup, so we're not actually guaranteed that the memory is 
</span><br>
<span class="quotelev1">&gt; local  to any particular process(or) (!).  This race shouldn't cause 
</span><br>
<span class="quotelev1">&gt; segvs,  though; it should only mean that memory is potentially farther 
</span><br>
<span class="quotelev1">&gt; away  than we intended.
</span><br>
<p>Is this that business that came up recently on one of these mail lists 
<br>
about setting the memory node to -1 rather than using the value we know 
<br>
it should be?  In mca_mpool_sm_alloc(), I do see a call to 
<br>
opal_maffinity_base_bind().
<br>
<p><span class="quotelev1">&gt; The central question is: does &quot;first touch&quot; mean both read and 
</span><br>
<span class="quotelev1">&gt; write?   I.e., is the first process that either reads *or* writes to a 
</span><br>
<span class="quotelev1">&gt; given  location considered &quot;first touch&quot;?  Or is it only the first write?
</span><br>
<p>So, maybe the strategy is to create the shared area, have each process 
<br>
initialize its portion (FIFOs and free lists), have all processes sync, 
<br>
and then move on.  That way, you know all memory will be written by the 
<br>
appropriate owner before it's read by anyone else.  First-touch 
<br>
ownership will be proper and we won't be dependent on zero-filled pages.
<br>
<p>The big question in my mind remains that we don't seem to know how to 
<br>
reproduce the failure (segv) that we're trying to fix.  I, personally, 
<br>
am reluctant to stick fixes into the code for problems I can't observe.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5763.php">Sylvain Jeaugey: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5764.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5764.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
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
