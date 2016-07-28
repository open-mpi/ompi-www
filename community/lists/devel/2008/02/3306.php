<?
$subject_val = "Re: [OMPI devel] Plan for merging latest ORTE into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 08:40:30 2008" -->
<!-- isoreceived="20080227134030" -->
<!-- sent="Wed, 27 Feb 2008 06:40:12 -0700" -->
<!-- isosent="20080227134012" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Plan for merging latest ORTE into the trunk" -->
<!-- id="C3EAB64C.C647%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44079e5f0802261225ib194bf0t4b8e9f86c195bdd6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Plan for merging latest ORTE into the trunk<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 08:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3307.php">Jeff Squyres: "Re: [OMPI devel] plpa"</a>
<li><strong>Previous message:</strong> <a href="3305.php">Brad Benton: "[OMPI devel] Plan for merging latest ORTE into the trunk"</a>
<li><strong>In reply to:</strong> <a href="3305.php">Brad Benton: "[OMPI devel] Plan for merging latest ORTE into the trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>First, just for those less familiar with svn, let me explain why we need the
<br>
&quot;quiet&quot; time (the rest of you can skip to below). Merges are typically
<br>
simple - you effectively do one every time you commit to the trunk. Since
<br>
most commits only touch a few files, there is rarely a conflict unless two
<br>
or more people happen to be working the same area. Even then, the number of
<br>
files that conflict is usually small and easily fixed.
<br>
<p>Large merges such as this one, however, cover a significant fraction of the
<br>
code base. Accordingly, there is a high likelihood that somebody is working
<br>
on one or more files that will be &quot;touched&quot; by the merge, and therefore
<br>
conflict. Making matters worse, as we approach a release, people typically
<br>
begin committing more frequently as they make that &quot;last push&quot; to get their
<br>
features included in the release, so the odds of being able to build, test,
<br>
and complete a merge before someone changes a &quot;touched&quot; file become pretty
<br>
low.
<br>
<p>As a result, it becomes almost impossible to do a large merge at times like
<br>
this without asking for a &quot;quiet&quot; time - hence the request. The changes to
<br>
most of the files are tiny (usually just a header file), but they do span
<br>
quite a few files.
<br>
======================================================================
<br>
<p>My wife kindly granted me time last night to prepare the merge. I will be
<br>
doing some testing today, but - assuming the trunk today doesn't undergo any
<br>
huge gyrations - I actually should be able to do the commit tonight (Wed) so
<br>
I don't impact the work day tomorrow (Thurs).
<br>
<p>So if you could give me a little quiet time later this evening - say,
<br>
beginning at 8pm Eastern time - I can probably get this done in a couple of
<br>
hours.
<br>
<p>I'll send out a note later today to confirm or revise this plan. Remember,
<br>
once the merge is complete, you will definitely need to both autogen -and-
<br>
clean out your install directory tree - I can guarantee you will be bitten
<br>
by stale libraries if you forget the latter.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 2/26/08 1:25 PM, &quot;Brad Benton&quot; &lt;bradford.benton_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are now at the point where Ralph is ready to merge the changes he has been
</span><br>
<span class="quotelev1">&gt; making to ORTE into the trunk.  This is a major item for the 1.3 release and
</span><br>
<span class="quotelev1">&gt; its inclusion into the trunk will enable it to be tested and stabilized on a
</span><br>
<span class="quotelev1">&gt; wider variety of environments.  To make this merge as smooth as possible, I
</span><br>
<span class="quotelev1">&gt; propose the following procedure and timing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Between now and the morning (EST) of the 28th (Thursday):
</span><br>
<span class="quotelev1">&gt;     - hold off on major changes to the trunk, particularly those that would
</span><br>
<span class="quotelev1">&gt; change the existing directory structure.
</span><br>
<span class="quotelev1">&gt;    - the trunk will not be locked, nor under gatekeeper control, so
</span><br>
<span class="quotelev1">&gt; modifications can still be committed.  But, please use judgement as to what
</span><br>
<span class="quotelev1">&gt; gets checked in between now and Thursday.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Morning (EST) of the 28th (Thursday):
</span><br>
<span class="quotelev1">&gt;     - Ralph will send out a note to the devel list to let people know when he
</span><br>
<span class="quotelev1">&gt; is starting his merge.  At this point, the trunk will become unstable until
</span><br>
<span class="quotelev1">&gt; his merge is finished and initial tests are run.
</span><br>
<span class="quotelev1">&gt;     - During this time, please hold off on any modifications to the trunk.
</span><br>
<span class="quotelev1">&gt;    - Ralph will send out a subsequent note when his merge is done, and the
</span><br>
<span class="quotelev1">&gt; trunk is once again available.  Hopefully this will be within 48 hours of the
</span><br>
<span class="quotelev1">&gt; start of the merge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope that this sequence will be acceptable to the development community.  If
</span><br>
<span class="quotelev1">&gt; not, please surface the concerns here so that we can discuss them and decide
</span><br>
<span class="quotelev1">&gt; how best to proceed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<li><strong>Next message:</strong> <a href="3307.php">Jeff Squyres: "Re: [OMPI devel] plpa"</a>
<li><strong>Previous message:</strong> <a href="3305.php">Brad Benton: "[OMPI devel] Plan for merging latest ORTE into the trunk"</a>
<li><strong>In reply to:</strong> <a href="3305.php">Brad Benton: "[OMPI devel] Plan for merging latest ORTE into the trunk"</a>
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
