<?
$subject_val = "Re: [OMPI devel] IOF repair";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 20:13:42 2008" -->
<!-- isoreceived="20080710001342" -->
<!-- sent="Wed, 9 Jul 2008 20:11:15 -0400" -->
<!-- isosent="20080710001115" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF repair" -->
<!-- id="013A5F5D-76D0-47EF-BE3B-684924BABE90_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C49AA54C.573E%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IOF repair<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-09 20:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4294.php">Jeff Squyres: "[OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4292.php">Ralph Castain: "[OMPI devel] IOF repair"</a>
<li><strong>In reply to:</strong> <a href="4292.php">Ralph Castain: "[OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4295.php">Terry Dontje: "Re: [OMPI devel] IOF repair"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd like to have a look at the diff between the two, but I can't do so  
<br>
until tomorrow at the earliest.
<br>
<p>On Jul 9, 2008, at 7:26 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I have been investigating Ticket #1135 - stdin is read twice if rank=0
</span><br>
<span class="quotelev1">&gt; shares the node with mpirun. Repairing this problem is going to be  
</span><br>
<span class="quotelev1">&gt; quite
</span><br>
<span class="quotelev1">&gt; difficult due to the rather terrible spaghetti code in the IOF, and  
</span><br>
<span class="quotelev1">&gt; the fact
</span><br>
<span class="quotelev1">&gt; that the IOF in the HNP actually rml.sends the IO to itself multiple  
</span><br>
<span class="quotelev1">&gt; times
</span><br>
<span class="quotelev1">&gt; as it cycles through the spaghetti.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, this problem -is- a regression from 1.2. Rather than  
</span><br>
<span class="quotelev1">&gt; spending
</span><br>
<span class="quotelev1">&gt; weeks trying to fix it, I see two approaches we could pursue. First,  
</span><br>
<span class="quotelev1">&gt; I could
</span><br>
<span class="quotelev1">&gt; repair the problem by essentially returning the IOF to its 1.2  
</span><br>
<span class="quotelev1">&gt; state. This
</span><br>
<span class="quotelev1">&gt; will have to be done by hand as most of the differences are in  
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; calls to utilities that have changed due to the removal of the old NS
</span><br>
<span class="quotelev1">&gt; framework. However, there are a few places where the logic itself  
</span><br>
<span class="quotelev1">&gt; has been
</span><br>
<span class="quotelev1">&gt; modified - and the problem must stem from somewhere in there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I make this change, then we will be no better, and no worse, than  
</span><br>
<span class="quotelev1">&gt; 1.2.
</span><br>
<span class="quotelev1">&gt; Note that we currently advise people to read from a file instead of  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; stdin to avoid other issues that were present in 1.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, we could ship 1.3 as-is, and warn users (similar to  
</span><br>
<span class="quotelev1">&gt; 1.2) that
</span><br>
<span class="quotelev1">&gt; they should avoiding reading from stdin if there is any chance that  
</span><br>
<span class="quotelev1">&gt; rank=0
</span><br>
<span class="quotelev1">&gt; could be co-located with mpirun. Note that most of our clusters do  
</span><br>
<span class="quotelev1">&gt; not allow
</span><br>
<span class="quotelev1">&gt; such co-location - but it is permitted by default by OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We already plan to revisit the IOF at next week's technical meeting,  
</span><br>
<span class="quotelev1">&gt; with a
</span><br>
<span class="quotelev1">&gt; goal of redefining the IOF's API to a more reduced set that reflects  
</span><br>
<span class="quotelev1">&gt; a less
</span><br>
<span class="quotelev1">&gt; ambitious requirement. I expect to implement those changes fairly soon
</span><br>
<span class="quotelev1">&gt; thereafter, but that would be targeted to 1.4 - not 1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts on which way we should go?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4294.php">Jeff Squyres: "[OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4292.php">Ralph Castain: "[OMPI devel] IOF repair"</a>
<li><strong>In reply to:</strong> <a href="4292.php">Ralph Castain: "[OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4295.php">Terry Dontje: "Re: [OMPI devel] IOF repair"</a>
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
