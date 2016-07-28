<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 14:34:08 2012" -->
<!-- isoreceived="20120621183408" -->
<!-- sent="Thu, 21 Jun 2012 14:34:03 -0400" -->
<!-- isosent="20120621183403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="35909658-EF80-49C2-B7E8-773FBB762608_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6461DBD9-4ADB-48AC-89F9-51BD98C85BF0_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB compile error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 14:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11147.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11145.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11144.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 21, 2012, at 11:10 AM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; OpenIB BTL is the primary source cause for existence of the OOB UD component.
</span><br>
<p>Err.. I'm confused.  These are two unrelated things.
<br>
<p>I.e., there's no reason to think that OOB and MPI transport/protocol types are related.  Indeed, we've been using TCP OOB and Verbs MPI transport/protocols for years.  
<br>
<p><span class="quotelev1">&gt; OFUD - with all the respect, this components is a leftover of the DR PML, which was removed from the trunk. I'm not sure why we keep OFUD in the trunk.
</span><br>
<p>I'll know within the next month or three as to whether I'm interested in BTL ofud.
<br>
<p><span class="quotelev1">&gt; Bottom line, on this stage the renaming seems totally confusing. 
</span><br>
<p><p>Why?  OpenFabrics support is what both openib and ud (and hwloc and ofud) are all looking for.  The name &quot;OpenIB&quot; has been defunct for *YEARS*.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11147.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11145.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11144.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
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
