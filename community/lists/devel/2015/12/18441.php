<?
$subject_val = "Re: [OMPI devel] [Open MPI Announce] Open MPI v2.0.0rc1 is available";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 09:57:07 2015" -->
<!-- isoreceived="20151221145707" -->
<!-- sent="Sat, 19 Dec 2015 14:45:26 -0800" -->
<!-- isosent="20151219224526" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI Announce] Open MPI v2.0.0rc1 is available" -->
<!-- id="CAAvDA14RCL6nstQYiK0vYJ9QtdrBC1ET6huDFL7BFEsuvqg3_Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F9F19C49-B8ED-4A4C-9355-BD8D3CC1C92B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Open MPI Announce] Open MPI v2.0.0rc1 is available<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-19 17:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18442.php">Paul Hargrove: "[OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
<li><strong>Previous message:</strong> <a href="18440.php">Paul Hargrove: "[OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
<li><strong>In reply to:</strong> <a href="18430.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI v2.0.0rc1 is available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 2.0.0rc1 tarball has some issues with FCFLAGS missing from (at least)
<br>
some pthreads-related configure probes.
<br>
See my devel list posts related to the 1.10.2 release candidate for more
<br>
information.
<br>
<p>The 1.10.2rc1 tarball also showed at least one link command was missing
<br>
FCFLAGS, but I cannot determine if that is the case in 2.0.0rc1 since the
<br>
configure failure has become fatal.
<br>
<p>-Paul
<br>
<p>On Sat, Dec 19, 2015 at 6:49 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Just in time for the holidays, the Open MPI Team, representing a
</span><br>
<span class="quotelev1">&gt; consortium of research, academic, and industry partners, is pleased to
</span><br>
<span class="quotelev1">&gt; announce the first release candidate of the upcoming v2.0.0 series:
</span><br>
<span class="quotelev1">&gt; v2.0.0rc1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The v2.x series is a new series which includes many new features and
</span><br>
<span class="quotelev1">&gt; under-the-hood improvements.  Many of these features and improvements were
</span><br>
<span class="quotelev1">&gt; discussed in the Open MPI SC'15 State of the Union BOF; the slides are
</span><br>
<span class="quotelev1">&gt; available here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://blogs.cisco.com/performance/slides-from-open-mpi-sc15-sotu-bof">http://blogs.cisco.com/performance/slides-from-open-mpi-sc15-sotu-bof</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, as the change in the first digit indicates, the v2.x series
</span><br>
<span class="quotelev1">&gt; is not (binary) backwards compatible with the v1.10 series.  Specifically:
</span><br>
<span class="quotelev1">&gt; MPI and OpenSHMEM applications will need to be recompiled against v2.0.0,
</span><br>
<span class="quotelev1">&gt; and will need to use the v2.x &quot;mpirun&quot; and support libraries.  Slides 9-12
</span><br>
<span class="quotelev1">&gt; in the BOF slides (linked above) explain Open MPI's (relatively new)
</span><br>
<span class="quotelev1">&gt; version numbering scheme.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We do not expect to release v2.0.0 until January at the earliest; we
</span><br>
<span class="quotelev1">&gt; wanted to make some early release candidates available to the Open MPI user
</span><br>
<span class="quotelev1">&gt; community to get some real-world testing, and to get feedback before the
</span><br>
<span class="quotelev1">&gt; final release becomes available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The v2.0.0 release candidate tarballs are available at the same location
</span><br>
<span class="quotelev1">&gt; where the final release tarballs will be available:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v2.x/">http://www.open-mpi.org/software/ompi/v2.x/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Happy holidays!
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; announce mailing list
</span><br>
<span class="quotelev1">&gt; announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/announce">http://www.open-mpi.org/mailman/listinfo.cgi/announce</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/announce/2015/12/0081.php">http://www.open-mpi.org/community/lists/announce/2015/12/0081.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18441/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18442.php">Paul Hargrove: "[OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
<li><strong>Previous message:</strong> <a href="18440.php">Paul Hargrove: "[OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
<li><strong>In reply to:</strong> <a href="18430.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI v2.0.0rc1 is available"</a>
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
