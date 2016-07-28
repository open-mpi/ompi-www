<?
$subject_val = "Re: [OMPI devel] IOF repair";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 10:43:05 2008" -->
<!-- isoreceived="20080710144305" -->
<!-- sent="Thu, 10 Jul 2008 08:42:51 -0600" -->
<!-- isosent="20080710144251" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF repair" -->
<!-- id="C49B7C0B.5782%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="487616E9.2030808_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 10:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4299.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4297.php">Terry Dontje: "Re: [OMPI devel] IOF repair"</a>
<li><strong>In reply to:</strong> <a href="4297.php">Terry Dontje: "Re: [OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4300.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can't argue with that...when Jeff gets back from his meeting he forgot
<br>
about, we'll chat and see what makes sense to recommend. The current code is
<br>
&quot;worse&quot; in the sense that we have this new bad behavior on stdin. It is
<br>
&quot;better&quot; in that Rolf and Jeff -did- plug a hole or two from the 1.2 days.
<br>
<p>We'll chat about which is worse and get back to the list on it...
<br>
<p><p>On 7/10/08 8:04 AM, &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This all seems like a 6 of one half dozen of the other decision.  Both
</span><br>
<span class="quotelev1">&gt; solutions suck because there are holes.  So, it comes down to whether we
</span><br>
<span class="quotelev1">&gt; think the current code is worse than 1.2 or not.  If they are the same
</span><br>
<span class="quotelev1">&gt; I'd be inclined to stay with what we have now for fear of inadvertantly
</span><br>
<span class="quotelev1">&gt; borking something else by rolling back the iof.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I believe the changes all pretty much related to an attempt to fix the
</span><br>
<span class="quotelev2">&gt;&gt; iof_flush problem and correction of a different problem affecting the
</span><br>
<span class="quotelev2">&gt;&gt; reading of stdin. Unfortunately, the iof_flush problem still remains, albeit
</span><br>
<span class="quotelev2">&gt;&gt; perhaps in different form, and we now have a new problem in the stdin
</span><br>
<span class="quotelev2">&gt;&gt; behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's the old problem of hastily written spaghetti code to overly-ambitious
</span><br>
<span class="quotelev2">&gt;&gt; requirements, subsequently hacked by multiple people multiple times...so now
</span><br>
<span class="quotelev2">&gt;&gt; when you put your finger in one hole, a leak springs up somewhere else. :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff and I are looking at this in more detail and will get back on it later.
</span><br>
<span class="quotelev2">&gt;&gt; The changes between 1.2 and 1.3 are not that big in terms of lines of code.
</span><br>
<span class="quotelev2">&gt;&gt; It just looks like they are suffering from the kid-and-the-dyke problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My motivation in proposing the rollback was simply that any attempt to
</span><br>
<span class="quotelev2">&gt;&gt; repair this new hole will quite likely open another one somewhere else. So
</span><br>
<span class="quotelev2">&gt;&gt; even if we can &quot;fix&quot; the duplicate stdin problem...did the kid really
</span><br>
<span class="quotelev2">&gt;&gt; improve the situation?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/10/08 7:05 AM, &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see that Jeff has updated the ticket saying that he is looking at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code to see if he can generate a fix so the below may be superfluous.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyways, what were the issues fixed in 1.3?  I really comes down to how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; much more pain are we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; giving our users by rolling back to 1.2 or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note, I am assuming your comment of &quot;most of our clusters do not...&quot; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; referring to LANL's clusters.  I do not believe this statement is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct when you look at the OMPI community as a whole.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have been investigating Ticket #1135 - stdin is read twice if rank=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shares the node with mpirun. Repairing this problem is going to be quite
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; difficult due to the rather terrible spaghetti code in the IOF, and the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fact
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that the IOF in the HNP actually rml.sends the IO to itself multiple times
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as it cycles through the spaghetti.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, this problem -is- a regression from 1.2. Rather than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spending
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; weeks trying to fix it, I see two approaches we could pursue. First, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; repair the problem by essentially returning the IOF to its 1.2 state. This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will have to be done by hand as most of the differences are in function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; calls to utilities that have changed due to the removal of the old NS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; framework. However, there are a few places where the logic itself has been
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; modified - and the problem must stem from somewhere in there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I make this change, then we will be no better, and no worse, than 1.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that we currently advise people to read from a file instead of from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stdin to avoid other issues that were present in 1.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alternatively, we could ship 1.3 as-is, and warn users (similar to 1.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they should avoiding reading from stdin if there is any chance that rank=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could be co-located with mpirun. Note that most of our clusters do not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; such co-location - but it is permitted by default by OMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We already plan to revisit the IOF at next week's technical meeting, with a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; goal of redefining the IOF's API to a more reduced set that reflects a less
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ambitious requirement. I expect to implement those changes fairly soon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thereafter, but that would be targeted to 1.4 - not 1.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any thoughts on which way we should go?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;   
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4299.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4297.php">Terry Dontje: "Re: [OMPI devel] IOF repair"</a>
<li><strong>In reply to:</strong> <a href="4297.php">Terry Dontje: "Re: [OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4300.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
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
