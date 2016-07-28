<?
$subject_val = "Re: [OMPI devel] ompi-master build error : make can require autotools";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 21:13:32 2014" -->
<!-- isoreceived="20141223021332" -->
<!-- sent="Tue, 23 Dec 2014 11:13:30 +0900" -->
<!-- isosent="20141223021330" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-master build error : make can require autotools" -->
<!-- id="CAAkFZ5sZMmWtFy+guHX_18aSSr1aHFArY-9S8qrp687-kMdthg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="12224D72-7C1A-455B-8014-B7FEDA831838_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi-master build error : make can require autotools<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-22 21:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16718.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="16716.php">Ralph Castain: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>In reply to:</strong> <a href="16713.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16734.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16734.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>
<p>yes, i did experience this exact behaviour.
<br>
<p>&quot;by accident&quot; meant i ran autogen.pl with the required autotools versions.
<br>
then, i ran configure and make with the RHEL6 stock autotools (that are too
<br>
old for OMPI)
<br>
configure worked just fine, but make crashed because of outdated autotools
<br>
<p>if i ran make with the latest autotools, i would probably have not noticed
<br>
the issue.
<br>
<p>note the issue occurs only when make is invoked for the first time.
<br>
if make success, autoheader does touch mpif.h.in, so the next make do not
<br>
require autotools.
<br>
<p>if i read between the lines, it seems autoheader is not (correctly) invoked
<br>
by autogen.pl
<br>
<p>please let me know if you cannot reproduce this issue.
<br>
(and once again, this is a very minor annoyance, and since tarballs are
<br>
generated with make dist, tarballs are very likely unaffected, so bottom
<br>
line,
<br>
only developers that update m4 files can be affected)
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tue, Dec 23, 2014 at 2:26 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Dec 22, 2014, at 2:42 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff and all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i just found &quot;by accident&quot; that make can require autotools.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; for example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; from (generated) ompi/include/Makefile :
</span><br>
<span class="quotelev2">&gt; &gt; $(srcdir)/mpi.h.in:  $(am__configure_deps)
</span><br>
<span class="quotelev2">&gt; &gt;        ($(am__cd) $(top_srcdir) &amp;&amp; $(AUTOHEADER))
</span><br>
<span class="quotelev2">&gt; &gt;        rm -f stamp-h2
</span><br>
<span class="quotelev2">&gt; &gt;        touch $@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and $(am__configure_deps) is a bunch (all?) of .m4 files.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; from a pragmatic point of view, it means that if update a m4 file, run
</span><br>
<span class="quotelev2">&gt; &gt; autogen.pl and configure,
</span><br>
<span class="quotelev2">&gt; &gt; then, the first invokation of make will run $(AUTOHEADER)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you actually experienced this exact behavior?  The sequence you
</span><br>
<span class="quotelev1">&gt; mention above shouldn't cause autoheader to be invoked by make.  Running
</span><br>
<span class="quotelev1">&gt; autogen.pl will invoke autoheader after the m4 files were touched, so the
</span><br>
<span class="quotelev1">&gt; mpi.h.in file will be newer than its m4 dependencies, which should mean
</span><br>
<span class="quotelev1">&gt; that this make rule won't be executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16713.php">http://www.open-mpi.org/community/lists/devel/2014/12/16713.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16717/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16718.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="16716.php">Ralph Castain: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>In reply to:</strong> <a href="16713.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16734.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16734.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
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
