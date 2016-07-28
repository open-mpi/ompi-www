<?
$subject_val = "Re: [OMPI devel] IOF repair";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 09:05:55 2008" -->
<!-- isoreceived="20080710130555" -->
<!-- sent="Thu, 10 Jul 2008 09:05:34 -0400" -->
<!-- isosent="20080710130534" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF repair" -->
<!-- id="4876091E.8000906_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 09:05:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4296.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4294.php">Jeff Squyres: "[OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4292.php">Ralph Castain: "[OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4296.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4296.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see that Jeff has updated the ticket saying that he is looking at the 
<br>
code to see if he can generate a fix so the below may be superfluous.
<br>
<p>Anyways, what were the issues fixed in 1.3?  I really comes down to how 
<br>
much more pain are we
<br>
giving our users by rolling back to 1.2 or not. 
<br>
<p>Note, I am assuming your comment of &quot;most of our clusters do not...&quot; is 
<br>
referring to LANL's clusters.  I do not believe this statement is  
<br>
correct when you look at the OMPI community as a whole.
<br>
<p>--td
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I have been investigating Ticket #1135 - stdin is read twice if rank=0
</span><br>
<span class="quotelev1">&gt; shares the node with mpirun. Repairing this problem is going to be quite
</span><br>
<span class="quotelev1">&gt; difficult due to the rather terrible spaghetti code in the IOF, and the fact
</span><br>
<span class="quotelev1">&gt; that the IOF in the HNP actually rml.sends the IO to itself multiple times
</span><br>
<span class="quotelev1">&gt; as it cycles through the spaghetti.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, this problem -is- a regression from 1.2. Rather than spending
</span><br>
<span class="quotelev1">&gt; weeks trying to fix it, I see two approaches we could pursue. First, I could
</span><br>
<span class="quotelev1">&gt; repair the problem by essentially returning the IOF to its 1.2 state. This
</span><br>
<span class="quotelev1">&gt; will have to be done by hand as most of the differences are in function
</span><br>
<span class="quotelev1">&gt; calls to utilities that have changed due to the removal of the old NS
</span><br>
<span class="quotelev1">&gt; framework. However, there are a few places where the logic itself has been
</span><br>
<span class="quotelev1">&gt; modified - and the problem must stem from somewhere in there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I make this change, then we will be no better, and no worse, than 1.2.
</span><br>
<span class="quotelev1">&gt; Note that we currently advise people to read from a file instead of from
</span><br>
<span class="quotelev1">&gt; stdin to avoid other issues that were present in 1.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, we could ship 1.3 as-is, and warn users (similar to 1.2) that
</span><br>
<span class="quotelev1">&gt; they should avoiding reading from stdin if there is any chance that rank=0
</span><br>
<span class="quotelev1">&gt; could be co-located with mpirun. Note that most of our clusters do not allow
</span><br>
<span class="quotelev1">&gt; such co-location - but it is permitted by default by OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We already plan to revisit the IOF at next week's technical meeting, with a
</span><br>
<span class="quotelev1">&gt; goal of redefining the IOF's API to a more reduced set that reflects a less
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4296.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4294.php">Jeff Squyres: "[OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4292.php">Ralph Castain: "[OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4296.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4296.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
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
