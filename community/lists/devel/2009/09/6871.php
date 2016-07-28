<?
$subject_val = "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol 	visibility of libtool ltdl API in current trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 11:35:06 2009" -->
<!-- isoreceived="20090922153506" -->
<!-- sent="Tue, 22 Sep 2009 12:35:01 -0300" -->
<!-- isosent="20090922153501" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol 	visibility of libtool ltdl API in current trunk" -->
<!-- id="e7ba66e40909220835i5dec63b6jf3f46f09e2101fb6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol 	visibility of libtool ltdl API in current trunk<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 11:35:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6872.php">Jeff Squyres: "[OMPI devel] coll sm ramifications"</a>
<li><strong>Previous message:</strong> <a href="6870.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>In reply to:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Sep 21, 2009 at 9:45 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Ick; I appreciate Lisandro's quandry, but don't quite know what to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm just asking the library &quot;libopen-pal.so&quot; exposing ltdl calls
<br>
wrapped with an &quot;opal_&quot; prefix. This way, the original ltdl calls hare
<br>
hidden (no chance to collide with user code using an incompatible
<br>
libtool version), but Open MPI provides a portable way to dlopen()
<br>
shared libs/dynamic modules. In simple terms, I'm asking
<br>
&quot;libopen-pal.so&quot; to contain ltdl wrapper calls like this one:
<br>
<p>OMPI_DECLSPEC lt_dlhandle opal_lt_dlopenadvise(const char *filename,
<br>
lt_dladvise advise) /* note opal_ prefix! */
<br>
{
<br>
&nbsp;&nbsp;&nbsp;return lt_dlopenadvise(filename,advise); /* original ltdl call*/
<br>
}
<br>
<p><p>Then, third-party code (like mpi4py or any other dynamic MPI module
<br>
for any other dynamic language) can do this:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#if defined(OPEN_MPI)
<br>
typedef void *lt_dlhandle;
<br>
typedef void *lt_dladvise;
<br>
OMPI_DECLSPEC extern lt_dlhandle opal_lt_dlopenadvise(const char *, lt_dladvise)
<br>
#endif
<br>
...
<br>
#if defined(OPEN_MPI)
<br>
/* init advice, not shown ... */
<br>
opal_lt_dlopenadvise(&quot;mpi&quot;, advice);
<br>
/* destroy advice, not shown ... */
<br>
#endif
<br>
MPI_Init(0,0);
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about keeping libltdl fvisibility=hidden inside mpi4py?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Not sure if I was clear enough in my comments above, but mpi4py does
<br>
not bundles/link libtool. Just abuses on libtool availability in
<br>
&quot;libopen-pal.so&quot; for the sake of portability.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2009, at 11:16 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I started down this road a couple months ago. I was using the
</span><br>
<span class="quotelev2">&gt;&gt; lt_dlopen() and friends in the OPAL CRS self module. The visibility
</span><br>
<span class="quotelev2">&gt;&gt; changes broke that functionality. The one solution that I started
</span><br>
<span class="quotelev2">&gt;&gt; implementing was precisely what you suggested, wrapping a subset the
</span><br>
<span class="quotelev2">&gt;&gt; libtool calls and prefixing them with opal_*. The email thread is below:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6531.php">http://www.open-mpi.org/community/lists/devel/2009/07/6531.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem that I hit was that libtool's build system did not play
</span><br>
<span class="quotelev2">&gt;&gt; well with the visibility symbols. This caused dlopen to be disabled
</span><br>
<span class="quotelev2">&gt;&gt; incorrectly. The libtool folks have a patch and, I believe, they are
</span><br>
<span class="quotelev2">&gt;&gt; planning on incorporating in the next release. The email thread is
</span><br>
<span class="quotelev2">&gt;&gt; below:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; <a href="http://thread.gmane.org/gmane.comp.gnu.libtool.patches/9446">http://thread.gmane.org/gmane.comp.gnu.libtool.patches/9446</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So we would (others can speak up if not) certainly consider such a
</span><br>
<span class="quotelev2">&gt;&gt; wrapper, but I think we need to wait for the next libtool release
</span><br>
<span class="quotelev2">&gt;&gt; (unless there is other magic we can do) before it would be usable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do others have any other ideas on how we might get around this in the
</span><br>
<span class="quotelev2">&gt;&gt; mean time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 16, 2009, at 5:59 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi all.. I have to contact you again about the issues related to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dlopen()ing libmpi with RTLD_LOCAL, as many dynamic languages (Python
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in my case) do.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So far, I've been able to manage the issues (despite the &quot;do nothing&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; policy from Open MPI devs, which I understand) in a more or less
</span><br>
<span class="quotelev3">&gt;&gt; &gt; portable manner by taking advantage of the availability of libtool
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ltdl symbols in the Open MPI libraries (specifically, in libopen-pal).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For reference, all this hackery is here:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://code.google.com/p/mpi4py/source/browse/trunk/src/compat/openmpi.h">http://code.google.com/p/mpi4py/source/browse/trunk/src/compat/openmpi.h</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, I noticed that in current trunk (v1.4, IIUC) things have
</span><br>
<span class="quotelev3">&gt;&gt; &gt; changed and libtool symbols are not externally available. Again, I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; understand the reason and acknowledge that such change is a really
</span><br>
<span class="quotelev3">&gt;&gt; &gt; good thing. However, this change has broken all my hackery for
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dlopen()ing libmpi before the call to MPI_Init().
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is there any chance that libopen-pal could provide some properly
</span><br>
<span class="quotelev3">&gt;&gt; &gt; prefixed (let say, using &quot;opal_&quot; as a prefix) wrapper calls to a small
</span><br>
<span class="quotelev3">&gt;&gt; &gt; subset of the libtool ltdl API? The following set of wrapper calls
</span><br>
<span class="quotelev3">&gt;&gt; &gt; would is the minimum required to properly load libmpi in a portable
</span><br>
<span class="quotelev3">&gt;&gt; &gt; manner and cleanup resources (let me abuse of my previous suggestion
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and add the opal_ prefix):
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_lt_dlinit()
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_lt_dlexit()
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_lt_dladvise_init(a)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_lt_dladvise_destroy(a)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_lt_dladvise_global(a)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_lt_dladvise_ext(a)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_lt_dlopenadvise(n,a)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_lt_dlclose(h)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any chance this request could be considered? I would really like to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have this before any Open MPI tarball get released without libtool
</span><br>
<span class="quotelev3">&gt;&gt; &gt; symbols exposed...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ---------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6872.php">Jeff Squyres: "[OMPI devel] coll sm ramifications"</a>
<li><strong>Previous message:</strong> <a href="6870.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>In reply to:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
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
