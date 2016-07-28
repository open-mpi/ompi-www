<?
$subject_val = "Re: [OMPI devel] v1.5.1: one idea";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 11 09:33:02 2010" -->
<!-- isoreceived="20101011133302" -->
<!-- sent="Mon, 11 Oct 2010 09:32:55 -0400" -->
<!-- isosent="20101011133255" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5.1: one idea" -->
<!-- id="C8D88A47.10770%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6224CFD8-7F38-4496-B7F0-3F957080C23F_at_cisco.com" -->
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
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-11 09:32:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8594.php">Ralph Castain: "[OMPI devel] Threading"</a>
<li><strong>Previous message:</strong> <a href="8592.php">Terry Dontje: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>In reply to:</strong> <a href="8589.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8605.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>Reply:</strong> <a href="8605.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why go to all this effort, and not just fork 1.7 from the trunk, skipping the whole merge process  ?   Seems like it would be much more prudent to spend time on improving the code base, adding missing MPI support, etc., rather than spending the time on a merge.
<br>
<p>Rich
<br>
<p><p>On 10/8/10 6:34 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>On Oct 8, 2010, at 5:36 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I have no problem with that, but remember that it will create an ABI break for any third-party plugin developer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As long as we are comfortable doing that, or create the backward-compatibility we discussed, then this plan is fine by me.
</span><br>
<p>Yes, we will definitely have to make sure we don't break backwards compatibility:
<br>
<p>- MPI API
<br>
- the symbol / filename changes we did for MCA
<br>
<p>I don't think anything else matters, right?
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8594.php">Ralph Castain: "[OMPI devel] Threading"</a>
<li><strong>Previous message:</strong> <a href="8592.php">Terry Dontje: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>In reply to:</strong> <a href="8589.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8605.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>Reply:</strong> <a href="8605.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
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
