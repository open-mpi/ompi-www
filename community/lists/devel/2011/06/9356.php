<?
$subject_val = "Re: [OMPI devel] VT support for 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 10 09:29:15 2011" -->
<!-- isoreceived="20110610132915" -->
<!-- sent="Fri, 10 Jun 2011 09:29:08 -0400" -->
<!-- isosent="20110610132908" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT support for 1.5" -->
<!-- id="9BA5432E-F373-4A6A-885D-1430FE546DAD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201106101116.13038.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT support for 1.5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-10 09:29:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9357.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9355.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9344.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9391.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Reply:</strong> <a href="9391.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 10, 2011, at 5:16 AM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; There are different ways to fix the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Apply the attached patch on ltmain.sh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch excludes the target library name from searching *.la libraries.
</span><br>
<p>Does your patch work for vpath builds, too?  If so, isn't this something that should be submitted upstream?
<br>
<p><span class="quotelev1">&gt; 2. Rename the VT's libutil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would prevents name conflicts with dependency libraries.
</span><br>
<p>This is my preference; can't it just be renamed to libvtutil or something?
<br>
<p><span class="quotelev1">&gt; 3. Clear list of dependency libraries when building VT's libutil.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This could be done by adding LIBS= to the Makefile.am in 
</span><br>
<span class="quotelev1">&gt; ompi/contrib/vt/vt/util/. The VT's libutil has no dependencies to other 
</span><br>
<span class="quotelev1">&gt; libraries except libc.
</span><br>
<p>That seems like it would work, but feels a bit hack-ish.
<br>
<p><span class="quotelev1">&gt; 4. Perform &quot;make clean&quot; or remove ompi/contrib/vt/vt/util/libutil.la after re-
</span><br>
<span class="quotelev1">&gt; configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nonsense - it cannot be required from the user.
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev1">&gt; My favorite suggestion is 1. It would be just another patch in addition to the set of Libtool patches invoked by autogen.
</span><br>
<p>Keep in mind that most (all?) of those are for handling older versions of the GNU Autotools, and/or for patches that have been submitted upstream but are not part of an official release yet.  Or, they are for v1.5.x where we have &quot;locked in&quot; the versions of the GNU autotools for the entire series and won't upgrade, even if never versions fix the things we've put in patches for.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="9357.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9355.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9344.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9391.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Reply:</strong> <a href="9391.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
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
