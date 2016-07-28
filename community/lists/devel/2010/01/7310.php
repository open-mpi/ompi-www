<?
$subject_val = "Re: [OMPI devel] RFC: silently allow component open() to fail";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 11:34:12 2010" -->
<!-- isoreceived="20100112163412" -->
<!-- sent="Tue, 12 Jan 2010 11:34:07 -0500" -->
<!-- isosent="20100112163407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: silently allow component open() to fail" -->
<!-- id="7148180D-1772-4E8D-A3C5-9B2212DCEC61_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F2E71B78-4314-488E-B001-0637B6CC1C01_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: silently allow component open() to fail<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-12 11:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7311.php">Jeff Squyres: "[OMPI devel] 1.5 - re-branch and MTT"</a>
<li><strong>Previous message:</strong> <a href="7309.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>In reply to:</strong> <a href="7283.php">Jeff Squyres: "[OMPI devel] RFC: silently allow component open() to fail"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forgot to include the patch itself -- here's a mercurial commit showing the change:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/ummunot/changeset/d0dd138df4e5/">http://bitbucket.org/jsquyres/ummunot/changeset/d0dd138df4e5/</a>
<br>
<p>If no one objects (and I don't think that anyone will), I'll commit later today.
<br>
<p><p><p>On Jan 7, 2010, at 3:03 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Make the MCA base not print an error message when a component.open() function returns OPAL_ERR_NOT_AVAILABLE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: There's currently no silent way for a component to disqualify itself during component.open().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: opal/mca/base/mca_base_components.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: &quot;Soon&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Next Tuesday teleconf, 12 Jan 2009 (short timeout because I don't expect this to be controverial)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm bringing this up because technically this is in the very core of the MCA loading process, so it should go by a few other eyes instead of just committing it.  That being said, it's a pretty simple thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The rationale here is that some components may know right away during their component register or open functions that they want to be disqualified from the entire process.  In the code today, however, if any component register or open function returns != OPAL_SUCCESS, an error message is printed, like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [hostname:pid] mca: base: components_open: component btl / foo open function failed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I think that there *are* cases where a component can know that it wants to disqualify itself right away, and therefore it should be able to return some sort of sentinel value from component.register() or component.open() that indicates &quot;just go ahead and silently disqualify / discard me now&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I came across this case in the merge of the ummunotify stuff with the ptmalloc2 component.  It's quite possible that, at run time, the component will determine that neither of those mechanisms are available, and therefore it wants to disqualify itself (it'll know this during component.open()).  Right now, there's no way to do so without causing an error message.  My proposal fixes this case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think that this is a big deal; I just wanted other people to eyeball it and ensure I'm not proposing anything insane.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7311.php">Jeff Squyres: "[OMPI devel] 1.5 - re-branch and MTT"</a>
<li><strong>Previous message:</strong> <a href="7309.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>In reply to:</strong> <a href="7283.php">Jeff Squyres: "[OMPI devel] RFC: silently allow component open() to fail"</a>
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
