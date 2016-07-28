<?
$subject_val = "[OMPI devel] 1.3 staging area?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 17:55:24 2008" -->
<!-- isoreceived="20081210225524" -->
<!-- sent="Wed, 10 Dec 2008 15:55:16 -0700" -->
<!-- isosent="20081210225516" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.3 staging area?" -->
<!-- id="5160D912-CB84-49AE-9A6D-FE58D89B3572_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] 1.3 staging area?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 17:55:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5036.php">Brian Barrett: "[OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5034.php">Shiqing Fan: "[OMPI devel] RFC: windows branch merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5037.php">Jeff Squyres: "Re: [OMPI devel] 1.3 staging area?"</a>
<li><strong>Reply:</strong> <a href="5037.php">Jeff Squyres: "Re: [OMPI devel] 1.3 staging area?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>I'm a tad concerned about our ability to test proposed CMR's for the  
<br>
1.3 branch. Given the long delays in getting 1.3 out, and the rapidly  
<br>
looming 1.4 milestones that many of us have in our individual  
<br>
projects, it is clear that the trunk is going to quickly diverge  
<br>
significantly from what is in the 1.3 branch. In addition, we are  
<br>
going to see quite a few commits occurring within a restricted time  
<br>
period.
<br>
<p>Thus, the fact that some proposed change does or does not pass MTT  
<br>
tests on the trunk at some given point in time is no longer a reliable  
<br>
indicator of its behavior in 1.3. Likewise, it will be difficult to  
<br>
isolate that &quot;this commit is okay&quot; when MTT can really only tell us  
<br>
the state of the aggregated code base.
<br>
<p>Let me hasten to point out that this has been a recurring problem with  
<br>
every major release. We have discussed the problem on several  
<br>
occasions, but failed to reach consensus on a solution.
<br>
<p>I would like to propose that we create a 1.3 staging branch. This  
<br>
branch would be opened on an individual-at-a-time basis for them to  
<br>
commit proposed CMR's for the 1.3 branch. We would ask that people  
<br>
please include the staging branch in their MTT testing on occasions  
<br>
when a change has been made. Once the proposed change has been  
<br>
validated, then it can be brought over as a single (and easy) merge to  
<br>
the 1.3 release branch.
<br>
<p>I realize this may slow the passage of bug fixes somewhat, and  
<br>
obviously we should apply this on a case-by-case basis (e.g., a simple  
<br>
removal of an unused variable would hardly merit such a step).  
<br>
However, I believe that something like the IOF patch that needs to  
<br>
eventually move to 1.3, and the Windows upgrade, are examples that  
<br>
probably do merit this step.
<br>
<p>Just a suggestion - hope it helps.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5036.php">Brian Barrett: "[OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5034.php">Shiqing Fan: "[OMPI devel] RFC: windows branch merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5037.php">Jeff Squyres: "Re: [OMPI devel] 1.3 staging area?"</a>
<li><strong>Reply:</strong> <a href="5037.php">Jeff Squyres: "Re: [OMPI devel] 1.3 staging area?"</a>
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
