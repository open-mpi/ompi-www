<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 14:56:28 2012" -->
<!-- isoreceived="20120911185628" -->
<!-- sent="Tue, 11 Sep 2012 11:56:20 -0700" -->
<!-- isosent="20120911185620" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]" -->
<!-- id="CAAvDA15GtvSc+CjkgmC11We=hp42C+rRP2u4Qbq7VDS2JR9QQw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17F2zvEqcT7w1zEywnTv7-ADSGBe7pHS3_9krK42QqQcw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 14:56:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11489.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Previous message:</strong> <a href="11487.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>In reply to:</strong> <a href="11487.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11489.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Reply:</strong> <a href="11489.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI:  This problem is *NOT* specific to NetBSD - it also just showed up for
<br>
me on Solaris-10/SPARC.
<br>
<p>So, I question the &quot;VT compile fix on Solaris&quot; in Jeff's list of changes
<br>
relative to rc1.
<br>
I would guess that refers to a missing header I reported on the trunk (
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/08/11446.php">http://www.open-mpi.org/community/lists/devel/2012/08/11446.php</a>), but I
<br>
wonder what testing was conducted.
<br>
<p>-Paul
<br>
<p>On Tue, Sep 11, 2012 at 11:10 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've not tested any other recent RCs, but had a chance today to run this
</span><br>
<span class="quotelev1">&gt; one on a subset of my normal pile of test platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure why this has only hit me on NetBSD, because the problem
</span><br>
<span class="quotelev1">&gt; looks pretty generic.
</span><br>
<span class="quotelev1">&gt; When looking at
</span><br>
<span class="quotelev1">&gt;    ompi/contrib/vt/vt/extlib/otf/tools/otfaux/Makefile.am
</span><br>
<span class="quotelev1">&gt; I find the following:
</span><br>
<span class="quotelev1">&gt;    otfaux_LDADD = \
</span><br>
<span class="quotelev1">&gt;            $(top_builddir)/otfauxlib/libotfaux.la \
</span><br>
<span class="quotelev1">&gt;            $(top_builddir)/otflib/libotf.la \
</span><br>
<span class="quotelev1">&gt;            $(MATHLIB)
</span><br>
<span class="quotelev1">&gt;    otfaux_DEPENDENCIES = $(otfaux_LDADD)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since &quot;MATHLIB = -lm&quot; the dependencies list &quot;-lm&quot; as a target and results
</span><br>
<span class="quotelev1">&gt; in a build which ends with
</span><br>
<span class="quotelev1">&gt;    Making all in otfaux
</span><br>
<span class="quotelev1">&gt;       CXX    otfaux.o
</span><br>
<span class="quotelev1">&gt;       CXX    Control.o
</span><br>
<span class="quotelev1">&gt;       CXX    Handler.o
</span><br>
<span class="quotelev1">&gt;       CXX    Stats.o
</span><br>
<span class="quotelev1">&gt;     make: don't know how to make -lm. Stop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my testing the following patch resolves the problem by expressing LDADD
</span><br>
<span class="quotelev1">&gt; in terms of DEPENDENCIES, instead of the other way around:
</span><br>
<span class="quotelev1">&gt; --- ompi/contrib/vt/vt/extlib/otf/tools/otfaux/Makefile.am.orig 2012-09-11
</span><br>
<span class="quotelev1">&gt; 10:59:05.000000000 -0700
</span><br>
<span class="quotelev1">&gt; +++ ompi/contrib/vt/vt/extlib/otf/tools/otfaux/Makefile.am      2012-09-11
</span><br>
<span class="quotelev1">&gt; 11:00:08.000000000 -0700
</span><br>
<span class="quotelev1">&gt; @@ -8,11 +8,12 @@
</span><br>
<span class="quotelev1">&gt;         otfaux
</span><br>
<span class="quotelev1">&gt;  endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -otfaux_LDADD = \
</span><br>
<span class="quotelev1">&gt; +otfaux_DEPENDENCIES = \
</span><br>
<span class="quotelev1">&gt;         $(top_builddir)/otfauxlib/libotfaux.la \
</span><br>
<span class="quotelev1">&gt; -       $(top_builddir)/otflib/libotf.la \
</span><br>
<span class="quotelev1">&gt; +       $(top_builddir)/otflib/libotf.la
</span><br>
<span class="quotelev1">&gt; +otfaux_LDADD = \
</span><br>
<span class="quotelev1">&gt; +       $(otfaux_otfaux_DEPENDENCIES) \
</span><br>
<span class="quotelev1">&gt;         $(MATHLIB)
</span><br>
<span class="quotelev1">&gt; -otfaux_DEPENDENCIES = $(otfaux_LDADD)
</span><br>
<span class="quotelev1">&gt;  otfaux_SOURCES = \
</span><br>
<span class="quotelev1">&gt;         Control.h \
</span><br>
<span class="quotelev1">&gt;         Handler.h \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 11, 2012 at 7:10 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.2rc2 is out -- please test:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Changes since rc1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - VT compile fix on Solaris
</span><br>
<span class="quotelev2">&gt;&gt; - rmaps segv fix
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11488/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11489.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Previous message:</strong> <a href="11487.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>In reply to:</strong> <a href="11487.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11489.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Reply:</strong> <a href="11489.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
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
