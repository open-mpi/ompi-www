<?
$subject_val = "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 08:45:34 2009" -->
<!-- isoreceived="20090921124534" -->
<!-- sent="Mon, 21 Sep 2009 08:45:28 -0400" -->
<!-- isosent="20090921124528" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk" -->
<!-- id="78AFD3C1-8EF8-47CB-9530-D346E9B93C30_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8364C103-0DCD-4ED2-8B27-D85BCB72336D_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 08:45:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6855.php">Terry Dontje: "[OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6853.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>In reply to:</strong> <a href="6848.php">Josh Hursey: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6864.php">Ralf Wildenhues: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Reply:</strong> <a href="6864.php">Ralf Wildenhues: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Reply:</strong> <a href="6871.php">Lisandro Dalcin: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol 	visibility of libtool ltdl API in current trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ick; I appreciate Lisandro's quandry, but don't quite know what to do.
<br>
<p>How about keeping libltdl fvisibility=hidden inside mpi4py?
<br>
<p><p>On Sep 17, 2009, at 11:16 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; So I started down this road a couple months ago. I was using the
</span><br>
<span class="quotelev1">&gt; lt_dlopen() and friends in the OPAL CRS self module. The visibility
</span><br>
<span class="quotelev1">&gt; changes broke that functionality. The one solution that I started
</span><br>
<span class="quotelev1">&gt; implementing was precisely what you suggested, wrapping a subset the
</span><br>
<span class="quotelev1">&gt; libtool calls and prefixing them with opal_*. The email thread is  
</span><br>
<span class="quotelev1">&gt; below:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6531.php">http://www.open-mpi.org/community/lists/devel/2009/07/6531.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem that I hit was that libtool's build system did not play
</span><br>
<span class="quotelev1">&gt; well with the visibility symbols. This caused dlopen to be disabled
</span><br>
<span class="quotelev1">&gt; incorrectly. The libtool folks have a patch and, I believe, they are
</span><br>
<span class="quotelev1">&gt; planning on incorporating in the next release. The email thread is
</span><br>
<span class="quotelev1">&gt; below:
</span><br>
<span class="quotelev1">&gt;    <a href="http://thread.gmane.org/gmane.comp.gnu.libtool.patches/9446">http://thread.gmane.org/gmane.comp.gnu.libtool.patches/9446</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we would (others can speak up if not) certainly consider such a
</span><br>
<span class="quotelev1">&gt; wrapper, but I think we need to wait for the next libtool release
</span><br>
<span class="quotelev1">&gt; (unless there is other magic we can do) before it would be usable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do others have any other ideas on how we might get around this in the
</span><br>
<span class="quotelev1">&gt; mean time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 16, 2009, at 5:59 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all.. I have to contact you again about the issues related to
</span><br>
<span class="quotelev2">&gt; &gt; dlopen()ing libmpi with RTLD_LOCAL, as many dynamic languages  
</span><br>
<span class="quotelev1">&gt; (Python
</span><br>
<span class="quotelev2">&gt; &gt; in my case) do.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So far, I've been able to manage the issues (despite the &quot;do  
</span><br>
<span class="quotelev1">&gt; nothing&quot;
</span><br>
<span class="quotelev2">&gt; &gt; policy from Open MPI devs, which I understand) in a more or less
</span><br>
<span class="quotelev2">&gt; &gt; portable manner by taking advantage of the availability of libtool
</span><br>
<span class="quotelev2">&gt; &gt; ltdl symbols in the Open MPI libraries (specifically, in libopen- 
</span><br>
<span class="quotelev1">&gt; pal).
</span><br>
<span class="quotelev2">&gt; &gt; For reference, all this hackery is here:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://code.google.com/p/mpi4py/source/browse/trunk/src/compat/openmpi.h">http://code.google.com/p/mpi4py/source/browse/trunk/src/compat/openmpi.h</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I noticed that in current trunk (v1.4, IIUC) things have
</span><br>
<span class="quotelev2">&gt; &gt; changed and libtool symbols are not externally available. Again, I
</span><br>
<span class="quotelev2">&gt; &gt; understand the reason and acknowledge that such change is a really
</span><br>
<span class="quotelev2">&gt; &gt; good thing. However, this change has broken all my hackery for
</span><br>
<span class="quotelev2">&gt; &gt; dlopen()ing libmpi before the call to MPI_Init().
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there any chance that libopen-pal could provide some properly
</span><br>
<span class="quotelev2">&gt; &gt; prefixed (let say, using &quot;opal_&quot; as a prefix) wrapper calls to a  
</span><br>
<span class="quotelev1">&gt; small
</span><br>
<span class="quotelev2">&gt; &gt; subset of the libtool ltdl API? The following set of wrapper calls
</span><br>
<span class="quotelev2">&gt; &gt; would is the minimum required to properly load libmpi in a portable
</span><br>
<span class="quotelev2">&gt; &gt; manner and cleanup resources (let me abuse of my previous suggestion
</span><br>
<span class="quotelev2">&gt; &gt; and add the opal_ prefix):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; opal_lt_dlinit()
</span><br>
<span class="quotelev2">&gt; &gt; opal_lt_dlexit()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; opal_lt_dladvise_init(a)
</span><br>
<span class="quotelev2">&gt; &gt; opal_lt_dladvise_destroy(a)
</span><br>
<span class="quotelev2">&gt; &gt; opal_lt_dladvise_global(a)
</span><br>
<span class="quotelev2">&gt; &gt; opal_lt_dladvise_ext(a)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; opal_lt_dlopenadvise(n,a)
</span><br>
<span class="quotelev2">&gt; &gt; opal_lt_dlclose(h)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any chance this request could be considered? I would really like to
</span><br>
<span class="quotelev2">&gt; &gt; have this before any Open MPI tarball get released without libtool
</span><br>
<span class="quotelev2">&gt; &gt; symbols exposed...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev2">&gt; &gt; ---------------
</span><br>
<span class="quotelev2">&gt; &gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a  
</span><br>
<span class="quotelev1">&gt; (CIMEC)
</span><br>
<span class="quotelev2">&gt; &gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica  
</span><br>
<span class="quotelev1">&gt; (INTEC)
</span><br>
<span class="quotelev2">&gt; &gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev2">&gt; &gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev2">&gt; &gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6855.php">Terry Dontje: "[OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6853.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>In reply to:</strong> <a href="6848.php">Josh Hursey: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6864.php">Ralf Wildenhues: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Reply:</strong> <a href="6864.php">Ralf Wildenhues: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Reply:</strong> <a href="6871.php">Lisandro Dalcin: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol 	visibility of libtool ltdl API in current trunk"</a>
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
