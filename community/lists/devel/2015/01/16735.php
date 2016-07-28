<?
$subject_val = "Re: [OMPI devel] ompi-master build error : make can require	autotools";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 21:40:48 2015" -->
<!-- isoreceived="20150106024048" -->
<!-- sent="Tue, 06 Jan 2015 11:40:45 +0900" -->
<!-- isosent="20150106024045" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-master build error : make can require	autotools" -->
<!-- id="54AB4B2D.1020004_at_iferc.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E7A30F25-A600-4456-8845-10F3D3A1B72F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi-master build error : make can require	autotools<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-05 21:40:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16736.php">Nathan Hjelm: "[OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16734.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<li><strong>In reply to:</strong> <a href="16734.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16738.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>Reply:</strong> <a href="16738.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>what if you do
<br>
<p>touch ompi/include/mpi.h.in &amp;&amp; sleep 1 &amp;&amp; touch config/opal_config_pthreads.m4 &amp;&amp; ./autogen.pl &amp;&amp; module unload cisco/autotools/ac269-am1133-lt242 &amp;&amp; ./configure --prefix=$PWD/_prefix &amp;&amp; make
<br>
<p><p>autogen.pl nor configure does not touch ompi/include/mpi.h.in, and as a
<br>
consequence,
<br>
config/opal_config_pthreads.m4 is newer than ompi/include/mpi.h when
<br>
make is invoked.
<br>
<p>then from ompi/include/Makefile:
<br>
<p>$(srcdir)/mpi.h.in:  $(am__configure_deps)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;($(am__cd) $(top_srcdir) &amp;&amp; $(AUTOHEADER))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f stamp-h2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;touch $@
<br>
<p>this means $(AUTOHEADER) is invoked, and then ompi/include/mpi.h.in is
<br>
touched.
<br>
1) in this scenario, $(AUTOHEADER) is invoked for nothing, but make has
<br>
no way to know it ...
<br>
2) make will touch ompi/include/mpi.h.in so the next make invokation
<br>
will not call $(AUTOHEADER)
<br>
<p><p>makes sense ?
<br>
<p><p>could this be seen as an autotools flaw ?
<br>
(e.g. autogen.pl invokes autotools that should have touched
<br>
ompi/include/mpi.h.in in order to avoid
<br>
the issue discussed here)
<br>
and/or could/should this be handled in autogen.pl ?
<br>
(e.g. manually touch ompi/include/mpi.h.in and some other files)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
On 2015/01/06 8:25, Dave Goodell (dgoodell) wrote:
<br>
<span class="quotelev1">&gt; I just attempted to reproduce this issue and was unable to.  I did this on a RHEL6 box with master hash ce2008a:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev1">&gt; $ touch config/opal_config_pthreads.m4 &amp;&amp; ./autogen.pl &amp;&amp; module unload cisco/autotools/ac269-am1133-lt242 &amp;&amp; ./configure --prefix=$PWD/_prefix &amp;&amp; make
</span><br>
<span class="quotelev1">&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which did exactly what I expected and only ran configure once, the time that I explicitly requested it to be run.  I even ran it again to make sure that the timestamp on opal_config_ptrheads.m4 was the only source state difference between the two runs.  So I don't know what is causing your problem, but it's not the rule you pointed out in the generated makefile.  Perhaps you are building on NFS and this is causing you some timestamp headaches?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 22, 2014, at 8:13 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Dave,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes, i did experience this exact behaviour.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;by accident&quot; meant i ran autogen.pl with the required autotools versions.
</span><br>
<span class="quotelev2">&gt;&gt; then, i ran configure and make with the RHEL6 stock autotools (that are too old for OMPI)
</span><br>
<span class="quotelev2">&gt;&gt; configure worked just fine, but make crashed because of outdated autotools
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if i ran make with the latest autotools, i would probably have not noticed the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; note the issue occurs only when make is invoked for the first time.
</span><br>
<span class="quotelev2">&gt;&gt; if make success, autoheader does touch mpif.h.in, so the next make do not require autotools.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if i read between the lines, it seems autoheader is not (correctly) invoked by autogen.pl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; please let me know if you cannot reproduce this issue.
</span><br>
<span class="quotelev2">&gt;&gt; (and once again, this is a very minor annoyance, and since tarballs are
</span><br>
<span class="quotelev2">&gt;&gt; generated with make dist, tarballs are very likely unaffected, so bottom line,
</span><br>
<span class="quotelev2">&gt;&gt; only developers that update m4 files can be affected)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 23, 2014 at 2:26 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 22, 2014, at 2:42 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff and all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i just found &quot;by accident&quot; that make can require autotools.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from (generated) ompi/include/Makefile :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $(srcdir)/mpi.h.in:  $(am__configure_deps)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ($(am__cd) $(top_srcdir) &amp;&amp; $(AUTOHEADER))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        rm -f stamp-h2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        touch $@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and $(am__configure_deps) is a bunch (all?) of .m4 files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from a pragmatic point of view, it means that if update a m4 file, run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autogen.pl and configure,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then, the first invokation of make will run $(AUTOHEADER)
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you actually experienced this exact behavior?  The sequence you mention above shouldn't cause autoheader to be invoked by make.  Running autogen.pl will invoke autoheader after the m4 files were touched, so the mpi.h.in file will be newer than its m4 dependencies, which should mean that this make rule won't be executed.
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16713.php">http://www.open-mpi.org/community/lists/devel/2014/12/16713.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16717.php">http://www.open-mpi.org/community/lists/devel/2014/12/16717.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16734.php">http://www.open-mpi.org/community/lists/devel/2015/01/16734.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16736.php">Nathan Hjelm: "[OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16734.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<li><strong>In reply to:</strong> <a href="16734.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16738.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>Reply:</strong> <a href="16738.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
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
