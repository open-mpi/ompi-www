<?
$subject_val = "Re: [OMPI devel] ompi-master build error : make can require	autotools";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 18:25:03 2015" -->
<!-- isoreceived="20150105232503" -->
<!-- sent="Mon, 5 Jan 2015 23:25:00 +0000" -->
<!-- isosent="20150105232500" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-master build error : make can require	autotools" -->
<!-- id="E7A30F25-A600-4456-8845-10F3D3A1B72F_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5sZMmWtFy+guHX_18aSSr1aHFArY-9S8qrp687-kMdthg_at_mail.gmail.com" -->
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
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-05 18:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16735.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<li><strong>Previous message:</strong> <a href="16733.php">Paul Kapinos: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16717.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16735.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<li><strong>Reply:</strong> <a href="16735.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just attempted to reproduce this issue and was unable to.  I did this on a RHEL6 box with master hash ce2008a:
<br>

<br>
----&#226;&#156;&#130;----
<br>
$ touch config/opal_config_pthreads.m4 &amp;&amp; ./autogen.pl &amp;&amp; module unload cisco/autotools/ac269-am1133-lt242 &amp;&amp; ./configure --prefix=$PWD/_prefix &amp;&amp; make
<br>
----&#226;&#156;&#130;----
<br>

<br>
Which did exactly what I expected and only ran configure once, the time that I explicitly requested it to be run.  I even ran it again to make sure that the timestamp on opal_config_ptrheads.m4 was the only source state difference between the two runs.  So I don't know what is causing your problem, but it's not the rule you pointed out in the generated makefile.  Perhaps you are building on NFS and this is causing you some timestamp headaches?
<br>

<br>
-Dave
<br>

<br>
On Dec 22, 2014, at 8:13 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Hi Dave,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, i did experience this exact behaviour.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;by accident&quot; meant i ran autogen.pl with the required autotools versions.
</span><br>
<span class="quotelev1">&gt; then, i ran configure and make with the RHEL6 stock autotools (that are too old for OMPI)
</span><br>
<span class="quotelev1">&gt; configure worked just fine, but make crashed because of outdated autotools
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if i ran make with the latest autotools, i would probably have not noticed the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; note the issue occurs only when make is invoked for the first time.
</span><br>
<span class="quotelev1">&gt; if make success, autoheader does touch mpif.h.in, so the next make do not require autotools.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if i read between the lines, it seems autoheader is not (correctly) invoked by autogen.pl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; please let me know if you cannot reproduce this issue.
</span><br>
<span class="quotelev1">&gt; (and once again, this is a very minor annoyance, and since tarballs are
</span><br>
<span class="quotelev1">&gt; generated with make dist, tarballs are very likely unaffected, so bottom line,
</span><br>
<span class="quotelev1">&gt; only developers that update m4 files can be affected)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 23, 2014 at 2:26 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Dec 22, 2014, at 2:42 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; Have you actually experienced this exact behavior?  The sequence you mention above shouldn't cause autoheader to be invoked by make.  Running autogen.pl will invoke autoheader after the m4 files were touched, so the mpi.h.in file will be newer than its m4 dependencies, which should mean that this make rule won't be executed.
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16713.php">http://www.open-mpi.org/community/lists/devel/2014/12/16713.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16717.php">http://www.open-mpi.org/community/lists/devel/2014/12/16717.php</a>
</span><br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16735.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<li><strong>Previous message:</strong> <a href="16733.php">Paul Kapinos: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16717.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16735.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<li><strong>Reply:</strong> <a href="16735.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
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
