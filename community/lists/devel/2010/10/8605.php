<?
$subject_val = "Re: [OMPI devel] v1.5.1: one idea";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 09:05:59 2010" -->
<!-- isoreceived="20101014130559" -->
<!-- sent="Thu, 14 Oct 2010 09:05:54 -0400" -->
<!-- isosent="20101014130554" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5.1: one idea" -->
<!-- id="B3EF48F5-899F-4EB1-BC41-8AD4A7576369_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C8D88A47.10770%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5.1: one idea<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 09:05:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8606.php">Ralf Wildenhues: "Re: [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8604.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="8593.php">Graham, Richard L.: "Re: [OMPI devel] v1.5.1: one idea"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8590.php">Terry Dontje: "Re: [OMPI devel] v1.5.1: one idea"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry, Rich and I talked about this a little bit in Chicago at the Forum meeting.
<br>
<p>It's not yet clear what is the Right direction to go here.  We certainly don't want to go another 8 months before releasing 1.5.1.
<br>
<p><p>On Oct 11, 2010, at 9:32 AM, Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt; Why go to all this effort, and not just fork 1.7 from the trunk, skipping the whole merge process  ?   Seems like it would be much more prudent to spend time on improving the code base, adding missing MPI support, etc., rather than spending the time on a merge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/8/10 6:34 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 8, 2010, at 5:36 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have no problem with that, but remember that it will create an ABI break for any third-party plugin developer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As long as we are comfortable doing that, or create the backward-compatibility we discussed, then this plan is fine by me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, we will definitely have to make sure we don't break backwards compatibility:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - MPI API
</span><br>
<span class="quotelev1">&gt; - the symbol / filename changes we did for MCA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think anything else matters, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8606.php">Ralf Wildenhues: "Re: [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8604.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="8593.php">Graham, Richard L.: "Re: [OMPI devel] v1.5.1: one idea"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8590.php">Terry Dontje: "Re: [OMPI devel] v1.5.1: one idea"</a>
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
