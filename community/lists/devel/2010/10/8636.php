<?
$subject_val = "Re: [OMPI devel] 1.5.x plans";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 27 10:10:39 2010" -->
<!-- isoreceived="20101027141039" -->
<!-- sent="Wed, 27 Oct 2010 08:10:31 -0600" -->
<!-- isosent="20101027141031" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.x plans" -->
<!-- id="39BD86AA-1AD7-4062-9615-123DC779C535_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0C92ACCA-18D6-49EB-BEB6-69114DEC8218_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.x plans<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-27 10:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8637.php">Jeff Squyres: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Previous message:</strong> <a href="8635.php">Barrett, Brian W: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>In reply to:</strong> <a href="8635.php">Barrett, Brian W: "Re: [OMPI devel] 1.5.x plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8637.php">Jeff Squyres: "Re: [OMPI devel] 1.5.x plans"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 26, 2010, at 3:52 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 26, 2010, at 3:07 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There seem to be 3 obvious options about moving forward (all assume that we do 1.5.1 as described above):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  A. End the 1.5 line (i.e., work towards transitioning it to 1.6), and then re-branch the trunk to be v1.7.
</span><br>
<span class="quotelev2">&gt;&gt;  B. Sync the trunk to the 1.5 branch en masse.  Stabilize that and call it 1.5.2.
</span><br>
<span class="quotelev2">&gt;&gt;  C. Do the same thing as A, but wait at least 6 months (i.e., give the 1.5 series time to mature).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Most people (including me) favored B.  Rich was a little concerned that B spent too much time on maintenance/logistics when we could just be moving forward, and therefore favored either A or C.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any opinions from people who weren't there on the call today?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd vote for !B..  It goes against the whole branch and stabilize approach.  The fact that we've been bad about pushing changes to v1.5 is no reason to whole-sale throw out our release philosophy.  Plus, I know there's stuff in the trunk that shouldn't be in 1.5 (like my recent portals work that's nowhere near ready for prime time).
</span><br>
<p>As I said on the call, this doesn't matter to me. However, I will offer this in support of Brian's position.
<br>
<p>There is a sense out there in user-land that OMPI is no longer reliable - tends to be buggy. This may not totally be fair (I think there is confusion about &quot;feature&quot; release series), but there is validity to that sentiment in that we don't test our features.
<br>
<p>The problem, IMO, is that almost all of these features are not related to the MPI standard - they are runtime features, or new components, or other such things that are not tested by our MTT runs because they require flags to activate them. Thus, while those of us who develop the features test them on our systems, they are not generally tested across the range of supported platforms.
<br>
<p>In addition, new features are rarely tested in subsequent releases as testing them is at the discretion of individuals (who, like me, tend to forget to go back and see if that thing still works).
<br>
<p>My point: we may need to rethink the &quot;feature&quot; series idea as it appears to be eroding confidence in user-land, and we should rethink how we test release candidates. Given those suggestions, it would seem that syncing the trunk to the 1.5 series would be a bad idea, even if we subsequently prune thinks like Brian's portal work.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8637.php">Jeff Squyres: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Previous message:</strong> <a href="8635.php">Barrett, Brian W: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>In reply to:</strong> <a href="8635.php">Barrett, Brian W: "Re: [OMPI devel] 1.5.x plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8637.php">Jeff Squyres: "Re: [OMPI devel] 1.5.x plans"</a>
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
