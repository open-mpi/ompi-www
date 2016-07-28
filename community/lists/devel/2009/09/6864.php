<?
$subject_val = "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 14:15:22 2009" -->
<!-- isoreceived="20090921181522" -->
<!-- sent="Mon, 21 Sep 2009 20:15:11 +0200" -->
<!-- isosent="20090921181511" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk" -->
<!-- id="20090921181511.GF16925_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="78AFD3C1-8EF8-47CB-9530-D346E9B93C30_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 14:15:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6865.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6863.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>In reply to:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6871.php">Lisandro Dalcin: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol 	visibility of libtool ltdl API in current trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As a workaround, Lisandro could just pre-seed the cache variables of the
<br>
respective configure tests that come out wrong.
<br>
<p>&nbsp;&nbsp;./configure lt_cv_dlopen_self=yes lt_cv_dlopen_self_static=yes
<br>
<p>HTH.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>* Jeff Squyres wrote on Mon, Sep 21, 2009 at 02:45:28PM CEST:
<br>
<span class="quotelev1">&gt; Ick; I appreciate Lisandro's quandry, but don't quite know what to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about keeping libltdl fvisibility=hidden inside mpi4py?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2009, at 11:16 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;So I started down this road a couple months ago. I was using the
</span><br>
<span class="quotelev2">&gt; &gt;lt_dlopen() and friends in the OPAL CRS self module. The visibility
</span><br>
<span class="quotelev2">&gt; &gt;changes broke that functionality. The one solution that I started
</span><br>
<span class="quotelev2">&gt; &gt;implementing was precisely what you suggested, wrapping a subset the
</span><br>
<span class="quotelev2">&gt; &gt;libtool calls and prefixing them with opal_*. The email thread is
</span><br>
<span class="quotelev2">&gt; &gt;below:
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6531.php">http://www.open-mpi.org/community/lists/devel/2009/07/6531.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The problem that I hit was that libtool's build system did not play
</span><br>
<span class="quotelev2">&gt; &gt;well with the visibility symbols. This caused dlopen to be disabled
</span><br>
<span class="quotelev2">&gt; &gt;incorrectly. The libtool folks have a patch and, I believe, they are
</span><br>
<span class="quotelev2">&gt; &gt;planning on incorporating in the next release. The email thread is
</span><br>
<span class="quotelev2">&gt; &gt;below:
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://thread.gmane.org/gmane.comp.gnu.libtool.patches/9446">http://thread.gmane.org/gmane.comp.gnu.libtool.patches/9446</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;So we would (others can speak up if not) certainly consider such a
</span><br>
<span class="quotelev2">&gt; &gt;wrapper, but I think we need to wait for the next libtool release
</span><br>
<span class="quotelev2">&gt; &gt;(unless there is other magic we can do) before it would be usable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Do others have any other ideas on how we might get around this in the
</span><br>
<span class="quotelev2">&gt; &gt;mean time?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-- Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Sep 16, 2009, at 5:59 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all.. I have to contact you again about the issues related to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dlopen()ing libmpi with RTLD_LOCAL, as many dynamic languages
</span><br>
<span class="quotelev2">&gt; &gt;(Python
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in my case) do.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So far, I've been able to manage the issues (despite the &quot;do
</span><br>
<span class="quotelev2">&gt; &gt;nothing&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; policy from Open MPI devs, which I understand) in a more or less
</span><br>
<span class="quotelev3">&gt; &gt;&gt; portable manner by taking advantage of the availability of libtool
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ltdl symbols in the Open MPI libraries (specifically, in
</span><br>
<span class="quotelev2">&gt; &gt;libopen-pal).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For reference, all this hackery is here:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://code.google.com/p/mpi4py/source/browse/trunk/src/compat/openmpi.h">http://code.google.com/p/mpi4py/source/browse/trunk/src/compat/openmpi.h</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, I noticed that in current trunk (v1.4, IIUC) things have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; changed and libtool symbols are not externally available. Again, I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; understand the reason and acknowledge that such change is a really
</span><br>
<span class="quotelev3">&gt; &gt;&gt; good thing. However, this change has broken all my hackery for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dlopen()ing libmpi before the call to MPI_Init().
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there any chance that libopen-pal could provide some properly
</span><br>
<span class="quotelev3">&gt; &gt;&gt; prefixed (let say, using &quot;opal_&quot; as a prefix) wrapper calls to a
</span><br>
<span class="quotelev2">&gt; &gt;small
</span><br>
<span class="quotelev3">&gt; &gt;&gt; subset of the libtool ltdl API? The following set of wrapper calls
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would is the minimum required to properly load libmpi in a portable
</span><br>
<span class="quotelev3">&gt; &gt;&gt; manner and cleanup resources (let me abuse of my previous suggestion
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and add the opal_ prefix):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_lt_dlinit()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_lt_dlexit()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_lt_dladvise_init(a)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_lt_dladvise_destroy(a)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_lt_dladvise_global(a)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_lt_dladvise_ext(a)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_lt_dlopenadvise(n,a)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_lt_dlclose(h)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any chance this request could be considered? I would really like to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have this before any Open MPI tarball get released without libtool
</span><br>
<span class="quotelev3">&gt; &gt;&gt; symbols exposed...
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6865.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6863.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>In reply to:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6871.php">Lisandro Dalcin: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol 	visibility of libtool ltdl API in current trunk"</a>
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
