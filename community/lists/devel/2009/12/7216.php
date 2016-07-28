<?
$subject_val = "Re: [OMPI devel] RFC: Branch off of trunk for v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 09:09:17 2009" -->
<!-- isoreceived="20091210140917" -->
<!-- sent="Thu, 10 Dec 2009 09:09:09 -0500" -->
<!-- isosent="20091210140909" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Branch off of trunk for v1.5" -->
<!-- id="C7466B35.66CE%rlgraham_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200912100855.46756.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Branch off of trunk for v1.5<br>
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 09:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7217.php">Lisandro Dalcin: "[OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7215.php">Rainer Keller: "[OMPI devel] RFC: Branch off of trunk for v1.5"</a>
<li><strong>In reply to:</strong> <a href="7215.php">Rainer Keller: "[OMPI devel] RFC: Branch off of trunk for v1.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This makes sense to me, unless there are features on the trunk that
<br>
absolutely should not be in 1.5.  This seems to be a far more manageable way
<br>
to handle 1.5 - much less error prone, and much less time consuming.
<br>
<p>Rich
<br>
<p><p>On 12/10/09 8:55 AM, &quot;Keller, Rainer H.&quot; &lt;keller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT: Branch (again) for v1.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Heavy divergence of trunk vs. v1.5 with few associated CMR's
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: v1.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Tuesday, Dec. 15th 2009 after the teleconference
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Dec. 15th, 2009
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More Details
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With v1.4 finally being out in the wild, we'd like to advance on the feature
</span><br>
<span class="quotelev1">&gt; release v1.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There have been some quite radical changes on the trunk recently that make the
</span><br>
<span class="quotelev1">&gt; tracking of divergence vs. v1.5 needlessly hard (please see the overview of
</span><br>
<span class="quotelev1">&gt; action items patches if we do not follow this RFC).  Paired with this, most
</span><br>
<span class="quotelev1">&gt; developers have not been filing v1.5 CMR's; someone would need to chase down
</span><br>
<span class="quotelev1">&gt; everything that has happened on the trunk and &quot;encourage&quot; developers to then
</span><br>
<span class="quotelev1">&gt; file relevant CMRs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Re-branching will likely cause some &quot;I told you so&quot;'s.  We tip our hats to
</span><br>
<span class="quotelev1">&gt; acknowledge that you were right.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We hope that re-branching, paired with the new automatically-create-CMRs-via-
</span><br>
<span class="quotelev1">&gt; SVN-commit-messages feature will help keep a new v1.5 branch in much better
</span><br>
<span class="quotelev1">&gt; shape.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The most relevant question for the discussion would seem to be: is there
</span><br>
<span class="quotelev1">&gt; anything on the trunk that is not intended for v1.5?  Let's discuss next
</span><br>
<span class="quotelev1">&gt; Tuesday.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regardless of whether we re-branch or not, we'd like to ask all to ramp up
</span><br>
<span class="quotelev1">&gt; v1.5 MTT-testing, possibly even by adding other test applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Jeff and Rainer
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7217.php">Lisandro Dalcin: "[OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7215.php">Rainer Keller: "[OMPI devel] RFC: Branch off of trunk for v1.5"</a>
<li><strong>In reply to:</strong> <a href="7215.php">Rainer Keller: "[OMPI devel] RFC: Branch off of trunk for v1.5"</a>
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
