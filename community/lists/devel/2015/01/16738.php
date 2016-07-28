<?
$subject_val = "Re: [OMPI devel] ompi-master build error : make can	require	autotools";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 12:02:53 2015" -->
<!-- isoreceived="20150106170253" -->
<!-- sent="Tue, 6 Jan 2015 17:02:51 +0000" -->
<!-- isosent="20150106170251" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-master build error : make can	require	autotools" -->
<!-- id="521985C9-9161-445F-A2E2-794EC50B4E7D_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54AB4B2D.1020004_at_iferc.org" -->
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
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-06 12:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16739.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16737.php">Howard Pritchard: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="16735.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16745.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>Reply:</strong> <a href="16745.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2015, at 8:40 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what if you do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; touch ompi/include/mpi.h.in &amp;&amp; sleep 1 &amp;&amp; touch config/opal_config_pthreads.m4 &amp;&amp; ./autogen.pl &amp;&amp; module unload cisco/autotools/ac269-am1133-lt242 &amp;&amp; ./configure --prefix=$PWD/_prefix &amp;&amp; make
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; autogen.pl nor configure does not touch ompi/include/mpi.h.in, and as a
</span><br>
<span class="quotelev1">&gt; consequence,
</span><br>
<span class="quotelev1">&gt; config/opal_config_pthreads.m4 is newer than ompi/include/mpi.h when
</span><br>
<span class="quotelev1">&gt; make is invoked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then from ompi/include/Makefile:
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

<br>
I don't see that rule in my ompi/include/Makefile.  I only have a couple of mentions of mpi.h.in:
<br>

<br>
----&#226;&#156;&#130;----
<br>
DIST_COMMON = $(top_srcdir)/Makefile.ompi-rules \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(srcdir)/ompi/Makefile.am $(srcdir)/Makefile.in \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(srcdir)/Makefile.am $(srcdir)/mpi.h.in $(srcdir)/mpif.h.in \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(srcdir)/mpif-config.h.in $(am__include_HEADERS_DIST) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(am__nobase_dist_ompi_HEADERS_DIST) $(pkginclude_HEADERS)
<br>
[...]
<br>
am__tagged_files = $(HEADERS) $(SOURCES) $(TAGS_FILES) $(LISP)mpi.h.in
<br>
[...]
<br>
stamp-h2: $(srcdir)/mpi.h.in $(top_builddir)/config.status
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@rm -f stamp-h2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cd $(top_builddir) &amp;&amp; $(SHELL) ./config.status ompi/include/mpi.h
<br>
----&#226;&#156;&#130;----
<br>

<br>
Maybe the rule in your version of ompi/include/Makefile comes from an older, buggy version of automake?
<br>

<br>
<span class="quotelev1">&gt; this means $(AUTOHEADER) is invoked, and then ompi/include/mpi.h.in is
</span><br>
<span class="quotelev1">&gt; touched.
</span><br>

<br>
I don't see $(AUTOHEADER) being invoked by make when I run the commands you listed (with &quot;sleep 1&quot; changed to &quot;sleep 5&quot; to be certain):
<br>

<br>
----&#226;&#156;&#130;----
<br>
make[1]: Entering directory `/home/dgoodell/git/ompi-upstream/ompi'
<br>
Making all in include
<br>
make[2]: Entering directory `/home/dgoodell/git/ompi-upstream/ompi/include'
<br>
make  all-am
<br>
make[3]: Entering directory `/home/dgoodell/git/ompi-upstream/ompi/include'
<br>
&nbsp;&nbsp;GENERATE mpif-sizeof.h
<br>
&nbsp;&nbsp;LN_S     mpi_portable_platform.h
<br>
make[3]: Leaving directory `/home/dgoodell/git/ompi-upstream/ompi/include'
<br>
make[2]: Leaving directory `/home/dgoodell/git/ompi-upstream/ompi/include'
<br>
Making all in datatype
<br>
----&#226;&#156;&#130;----
<br>

<br>
Here are the timestamps on the relevant files after the build completes:
<br>

<br>
----&#226;&#156;&#130;----
<br>
-rw-rw-r-- 1 dgoodell dgoodell     33 2015-01-06 08:21:18.414503328 -0800 ompi/include/stamp-h2
<br>
-rw-rw-r-- 1 dgoodell dgoodell 166283 2015-01-06 08:21:18.408502854 -0800 ompi/include/mpi.h
<br>
-rwxrwxr-x 1 dgoodell dgoodell 246260 2015-01-06 08:21:09.283782006 -0800 config.status*
<br>
-rw-rw-r-- 1 dgoodell dgoodell  18853 2015-01-06 08:17:07.212658002 -0800 config/opal_config_pthreads.m4
<br>
-rw-rw-r-- 1 dgoodell dgoodell 165986 2015-01-06 08:17:02.209262644 -0800 ompi/include/mpi.h.in
<br>
----&#226;&#156;&#130;----
<br>

<br>
-Dave
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16739.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16737.php">Howard Pritchard: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="16735.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16745.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>Reply:</strong> <a href="16745.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
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
