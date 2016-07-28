<?
$subject_val = "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 11:15:53 2009" -->
<!-- isoreceived="20090917151553" -->
<!-- sent="Thu, 17 Sep 2009 11:16:10 -0400" -->
<!-- isosent="20090917151610" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk" -->
<!-- id="8364C103-0DCD-4ED2-8B27-D85BCB72336D_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40909161459v13248915qbca56f84bdba9290_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 11:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6849.php">Brice Goglin: "[OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Previous message:</strong> <a href="6847.php">Jeff Squyres: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="6842.php">Lisandro Dalcin: "[OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Reply:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I started down this road a couple months ago. I was using the  
<br>
lt_dlopen() and friends in the OPAL CRS self module. The visibility  
<br>
changes broke that functionality. The one solution that I started  
<br>
implementing was precisely what you suggested, wrapping a subset the  
<br>
libtool calls and prefixing them with opal_*. The email thread is below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2009/07/6531.php">http://www.open-mpi.org/community/lists/devel/2009/07/6531.php</a>
<br>
<p>The problem that I hit was that libtool's build system did not play  
<br>
well with the visibility symbols. This caused dlopen to be disabled  
<br>
incorrectly. The libtool folks have a patch and, I believe, they are  
<br>
planning on incorporating in the next release. The email thread is  
<br>
below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://thread.gmane.org/gmane.comp.gnu.libtool.patches/9446">http://thread.gmane.org/gmane.comp.gnu.libtool.patches/9446</a>
<br>
<p>So we would (others can speak up if not) certainly consider such a  
<br>
wrapper, but I think we need to wait for the next libtool release  
<br>
(unless there is other magic we can do) before it would be usable.
<br>
<p>Do others have any other ideas on how we might get around this in the  
<br>
mean time?
<br>
<p>-- Josh
<br>
<p><p>On Sep 16, 2009, at 5:59 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Hi all.. I have to contact you again about the issues related to
</span><br>
<span class="quotelev1">&gt; dlopen()ing libmpi with RTLD_LOCAL, as many dynamic languages (Python
</span><br>
<span class="quotelev1">&gt; in my case) do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far, I've been able to manage the issues (despite the &quot;do nothing&quot;
</span><br>
<span class="quotelev1">&gt; policy from Open MPI devs, which I understand) in a more or less
</span><br>
<span class="quotelev1">&gt; portable manner by taking advantage of the availability of libtool
</span><br>
<span class="quotelev1">&gt; ltdl symbols in the Open MPI libraries (specifically, in libopen-pal).
</span><br>
<span class="quotelev1">&gt; For reference, all this hackery is here:
</span><br>
<span class="quotelev1">&gt; <a href="http://code.google.com/p/mpi4py/source/browse/trunk/src/compat/openmpi.h">http://code.google.com/p/mpi4py/source/browse/trunk/src/compat/openmpi.h</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I noticed that in current trunk (v1.4, IIUC) things have
</span><br>
<span class="quotelev1">&gt; changed and libtool symbols are not externally available. Again, I
</span><br>
<span class="quotelev1">&gt; understand the reason and acknowledge that such change is a really
</span><br>
<span class="quotelev1">&gt; good thing. However, this change has broken all my hackery for
</span><br>
<span class="quotelev1">&gt; dlopen()ing libmpi before the call to MPI_Init().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any chance that libopen-pal could provide some properly
</span><br>
<span class="quotelev1">&gt; prefixed (let say, using &quot;opal_&quot; as a prefix) wrapper calls to a small
</span><br>
<span class="quotelev1">&gt; subset of the libtool ltdl API? The following set of wrapper calls
</span><br>
<span class="quotelev1">&gt; would is the minimum required to properly load libmpi in a portable
</span><br>
<span class="quotelev1">&gt; manner and cleanup resources (let me abuse of my previous suggestion
</span><br>
<span class="quotelev1">&gt; and add the opal_ prefix):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_lt_dlinit()
</span><br>
<span class="quotelev1">&gt; opal_lt_dlexit()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_lt_dladvise_init(a)
</span><br>
<span class="quotelev1">&gt; opal_lt_dladvise_destroy(a)
</span><br>
<span class="quotelev1">&gt; opal_lt_dladvise_global(a)
</span><br>
<span class="quotelev1">&gt; opal_lt_dladvise_ext(a)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_lt_dlopenadvise(n,a)
</span><br>
<span class="quotelev1">&gt; opal_lt_dlclose(h)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any chance this request could be considered? I would really like to
</span><br>
<span class="quotelev1">&gt; have this before any Open MPI tarball get released without libtool
</span><br>
<span class="quotelev1">&gt; symbols exposed...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
<li><strong>Next message:</strong> <a href="6849.php">Brice Goglin: "[OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Previous message:</strong> <a href="6847.php">Jeff Squyres: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="6842.php">Lisandro Dalcin: "[OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Reply:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
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
