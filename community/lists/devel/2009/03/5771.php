<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 19:11:13 2009" -->
<!-- isoreceived="20090331231113" -->
<!-- sent="Tue, 31 Mar 2009 15:10:43 -0800" -->
<!-- isosent="20090331231043" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49D2A2F3.3020703_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6222190B-E505-48C3-B306-006787032962_at_cisco.com" -->
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
<strong>Date:</strong> 2009-03-31 19:10:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5772.php">Matthias Jurenz: "Re: [OMPI devel] Error in VT"</a>
<li><strong>Previous message:</strong> <a href="5770.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5770.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5754.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 31, 2009, at 3:06 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The thing I was wondering about was memory barriers.  E.g., you
</span><br>
<span class="quotelev2">&gt;&gt; initialize stuff and then post the FIFO pointer.  The other guy sees  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; FIFO pointer before the initialized memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We do do memory barriers during that SM startup sequence.  I haven't  
</span><br>
<span class="quotelev1">&gt; checked in a while, but I thought we were doing the right kinds of  
</span><br>
<span class="quotelev1">&gt; barriers in the right order...
</span><br>
<p>There are certainly *some* barriers.  The particular scenario I asked 
<br>
about didn't seem protected against (IMHO), but I certainly don't 
<br>
understand these issues and remain cautious about any guesses I make 
<br>
until I can demonstrate the problem and a solution.
<br>
<p>Regarding &quot;demonstrating the problem&quot;, I see the Sun MTT logs show some 
<br>
number of Init errors without mca_coll_hierarch involved.  I'll try 
<br>
rerunning on the same machines and see if I can trigger the problem.
<br>
<p><span class="quotelev1">&gt; But George mentioned on the call today that they may have found the  
</span><br>
<span class="quotelev1">&gt; issue, but they're testing it.  He didn't explain what the issue was  
</span><br>
<span class="quotelev1">&gt; in case he was wrong.  ;-)
</span><br>
<p>'kay.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5772.php">Matthias Jurenz: "Re: [OMPI devel] Error in VT"</a>
<li><strong>Previous message:</strong> <a href="5770.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5770.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5754.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
