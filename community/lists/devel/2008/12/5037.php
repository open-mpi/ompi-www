<?
$subject_val = "Re: [OMPI devel] 1.3 staging area?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 10:27:21 2008" -->
<!-- isoreceived="20081211152721" -->
<!-- sent="Thu, 11 Dec 2008 10:25:51 -0500" -->
<!-- isosent="20081211152551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 staging area?" -->
<!-- id="CECFA290-C227-4024-8186-05A14EFCD174_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5160D912-CB84-49AE-9A6D-FE58D89B3572_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 staging area?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 10:25:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5038.php">Jeff Squyres: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Previous message:</strong> <a href="5036.php">Brian Barrett: "[OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="5035.php">Ralph Castain: "[OMPI devel] 1.3 staging area?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that this sounds reasonable.  It's actually not too much of a  
<br>
change from the existing CMR process:
<br>
<p>- if your commit is applicable to the trunk, do so
<br>
*** if you intend your commit to go to the v1.3 branch, also commit it  
<br>
there (potentially adjusting the patch to commit cleanly in the v1.3  
<br>
staging area)
<br>
- file a CMR for the r number in the v1.3 staging area
<br>
- the release tech will merge the v1.3 staging commit to the v1.3 tree
<br>
<p>*** is the only new step.
<br>
<p><p>On Dec 10, 2008, at 5:55 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a tad concerned about our ability to test proposed CMR's for the  
</span><br>
<span class="quotelev1">&gt; 1.3 branch. Given the long delays in getting 1.3 out, and the  
</span><br>
<span class="quotelev1">&gt; rapidly looming 1.4 milestones that many of us have in our  
</span><br>
<span class="quotelev1">&gt; individual projects, it is clear that the trunk is going to quickly  
</span><br>
<span class="quotelev1">&gt; diverge significantly from what is in the 1.3 branch. In addition,  
</span><br>
<span class="quotelev1">&gt; we are going to see quite a few commits occurring within a  
</span><br>
<span class="quotelev1">&gt; restricted time period.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus, the fact that some proposed change does or does not pass MTT  
</span><br>
<span class="quotelev1">&gt; tests on the trunk at some given point in time is no longer a  
</span><br>
<span class="quotelev1">&gt; reliable indicator of its behavior in 1.3. Likewise, it will be  
</span><br>
<span class="quotelev1">&gt; difficult to isolate that &quot;this commit is okay&quot; when MTT can really  
</span><br>
<span class="quotelev1">&gt; only tell us the state of the aggregated code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me hasten to point out that this has been a recurring problem  
</span><br>
<span class="quotelev1">&gt; with every major release. We have discussed the problem on several  
</span><br>
<span class="quotelev1">&gt; occasions, but failed to reach consensus on a solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to propose that we create a 1.3 staging branch. This  
</span><br>
<span class="quotelev1">&gt; branch would be opened on an individual-at-a-time basis for them to  
</span><br>
<span class="quotelev1">&gt; commit proposed CMR's for the 1.3 branch. We would ask that people  
</span><br>
<span class="quotelev1">&gt; please include the staging branch in their MTT testing on occasions  
</span><br>
<span class="quotelev1">&gt; when a change has been made. Once the proposed change has been  
</span><br>
<span class="quotelev1">&gt; validated, then it can be brought over as a single (and easy) merge  
</span><br>
<span class="quotelev1">&gt; to the 1.3 release branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I realize this may slow the passage of bug fixes somewhat, and  
</span><br>
<span class="quotelev1">&gt; obviously we should apply this on a case-by-case basis (e.g., a  
</span><br>
<span class="quotelev1">&gt; simple removal of an unused variable would hardly merit such a  
</span><br>
<span class="quotelev1">&gt; step). However, I believe that something like the IOF patch that  
</span><br>
<span class="quotelev1">&gt; needs to eventually move to 1.3, and the Windows upgrade, are  
</span><br>
<span class="quotelev1">&gt; examples that probably do merit this step.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just a suggestion - hope it helps.
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li><strong>Next message:</strong> <a href="5038.php">Jeff Squyres: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Previous message:</strong> <a href="5036.php">Brian Barrett: "[OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="5035.php">Ralph Castain: "[OMPI devel] 1.3 staging area?"</a>
<!-- nextthread="start" -->
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
