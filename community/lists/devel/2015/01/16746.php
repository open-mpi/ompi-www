<?
$subject_val = "Re: [OMPI devel] ompi-master build error : make can	require	autotools";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 21:52:41 2015" -->
<!-- isoreceived="20150107025241" -->
<!-- sent="Tue, 6 Jan 2015 18:52:37 -0800" -->
<!-- isosent="20150107025237" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-master build error : make can	require	autotools" -->
<!-- id="D9BA04E5-CCD0-4FFB-A0C2-B83161AD5C59_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54AC9E6C.2040804_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi-master build error : make can	require	autotools<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-06 21:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16747.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16745.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>In reply to:</strong> <a href="16745.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16748.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<li><strong>Reply:</strong> <a href="16748.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 1.12 series had a set of problems caused by a changeover in the maintainers, so it should never be used. I&#226;&#128;&#153;m not sure if any of those issues are behind this problem, but it could be so.
<br>
<p>Anyway, I think pretty much all of us are using automake 1.14 by this time. We can discuss how far up to move the requirement, but I think 1.14 would be the right place.
<br>
<p><p><span class="quotelev1">&gt; On Jan 6, 2015, at 6:48 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is an automake issue indeed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i use automake 1.12.2 (as advised at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/source/building.php">http://www.open-mpi.org/source/building.php</a>, and
</span><br>
<span class="quotelev1">&gt; this is the version used to build the snapshots)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; automake 1.12.2 adds the following line in ompi/include/Makefile.in :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $(srcdir)/mpi.h.in:  $(am__configure_deps)
</span><br>
<span class="quotelev1">&gt;        ($(am__cd) $(top_srcdir) &amp;&amp; $(AUTOHEADER))
</span><br>
<span class="quotelev1">&gt;        rm -f stamp-h2
</span><br>
<span class="quotelev1">&gt;        touch $@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there is no such line with automake 1.14
</span><br>
<span class="quotelev1">&gt; (it seems you are using automake 1.13.3, which does not issue such lines)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bottom line, both web site and build systems should be updated in order
</span><br>
<span class="quotelev1">&gt; to use
</span><br>
<span class="quotelev1">&gt; a more recent automake version (but which one ?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; On 2015/01/07 2:02, Dave Goodell (dgoodell) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 5, 2015, at 8:40 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dave,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what if you do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; touch ompi/include/mpi.h.in &amp;&amp; sleep 1 &amp;&amp; touch config/opal_config_pthreads.m4 &amp;&amp; ./autogen.pl &amp;&amp; module unload cisco/autotools/ac269-am1133-lt242 &amp;&amp; ./configure --prefix=$PWD/_prefix &amp;&amp; make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autogen.pl nor configure does not touch ompi/include/mpi.h.in, and as a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consequence,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config/opal_config_pthreads.m4 is newer than ompi/include/mpi.h when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make is invoked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then from ompi/include/Makefile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $(srcdir)/mpi.h.in:  $(am__configure_deps)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       ($(am__cd) $(top_srcdir) &amp;&amp; $(AUTOHEADER))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       rm -f stamp-h2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       touch $@
</span><br>
<span class="quotelev2">&gt;&gt; I don't see that rule in my ompi/include/Makefile.  I only have a couple of mentions of mpi.h.in:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev2">&gt;&gt; DIST_COMMON = $(top_srcdir)/Makefile.ompi-rules \
</span><br>
<span class="quotelev2">&gt;&gt;        $(srcdir)/ompi/Makefile.am $(srcdir)/Makefile.in \
</span><br>
<span class="quotelev2">&gt;&gt;        $(srcdir)/Makefile.am $(srcdir)/mpi.h.in $(srcdir)/mpif.h.in \
</span><br>
<span class="quotelev2">&gt;&gt;        $(srcdir)/mpif-config.h.in $(am__include_HEADERS_DIST) \
</span><br>
<span class="quotelev2">&gt;&gt;        $(am__nobase_dist_ompi_HEADERS_DIST) $(pkginclude_HEADERS)
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; am__tagged_files = $(HEADERS) $(SOURCES) $(TAGS_FILES) $(LISP)mpi.h.in
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; stamp-h2: $(srcdir)/mpi.h.in $(top_builddir)/config.status
</span><br>
<span class="quotelev2">&gt;&gt;        @rm -f stamp-h2
</span><br>
<span class="quotelev2">&gt;&gt;        cd $(top_builddir) &amp;&amp; $(SHELL) ./config.status ompi/include/mpi.h
</span><br>
<span class="quotelev2">&gt;&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the rule in your version of ompi/include/Makefile comes from an older, buggy version of automake?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this means $(AUTOHEADER) is invoked, and then ompi/include/mpi.h.in is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; touched.
</span><br>
<span class="quotelev2">&gt;&gt; I don't see $(AUTOHEADER) being invoked by make when I run the commands you listed (with &quot;sleep 1&quot; changed to &quot;sleep 5&quot; to be certain):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Entering directory `/home/dgoodell/git/ompi-upstream/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; Making all in include
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/dgoodell/git/ompi-upstream/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt; make  all-am
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/home/dgoodell/git/ompi-upstream/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt;  GENERATE mpif-sizeof.h
</span><br>
<span class="quotelev2">&gt;&gt;  LN_S     mpi_portable_platform.h
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/dgoodell/git/ompi-upstream/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/dgoodell/git/ompi-upstream/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt; Making all in datatype
</span><br>
<span class="quotelev2">&gt;&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here are the timestamps on the relevant files after the build completes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev2">&gt;&gt; -rw-rw-r-- 1 dgoodell dgoodell     33 2015-01-06 08:21:18.414503328 -0800 ompi/include/stamp-h2
</span><br>
<span class="quotelev2">&gt;&gt; -rw-rw-r-- 1 dgoodell dgoodell 166283 2015-01-06 08:21:18.408502854 -0800 ompi/include/mpi.h
</span><br>
<span class="quotelev2">&gt;&gt; -rwxrwxr-x 1 dgoodell dgoodell 246260 2015-01-06 08:21:09.283782006 -0800 config.status*
</span><br>
<span class="quotelev2">&gt;&gt; -rw-rw-r-- 1 dgoodell dgoodell  18853 2015-01-06 08:17:07.212658002 -0800 config/opal_config_pthreads.m4
</span><br>
<span class="quotelev2">&gt;&gt; -rw-rw-r-- 1 dgoodell dgoodell 165986 2015-01-06 08:17:02.209262644 -0800 ompi/include/mpi.h.in
</span><br>
<span class="quotelev2">&gt;&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Dave
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16738.php">http://www.open-mpi.org/community/lists/devel/2015/01/16738.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16745.php">http://www.open-mpi.org/community/lists/devel/2015/01/16745.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16747.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16745.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>In reply to:</strong> <a href="16745.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16748.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<li><strong>Reply:</strong> <a href="16748.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
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
