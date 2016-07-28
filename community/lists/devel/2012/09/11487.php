<?
$subject_val = "[OMPI devel] 1.6.2rc2 VT build failure [with patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 14:10:30 2012" -->
<!-- isoreceived="20120911181030" -->
<!-- sent="Tue, 11 Sep 2012 11:10:24 -0700" -->
<!-- isosent="20120911181024" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.2rc2 VT build failure [with patch]" -->
<!-- id="CAAvDA17F2zvEqcT7w1zEywnTv7-ADSGBe7pHS3_9krK42QqQcw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.2rc2 VT build failure [with patch]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 14:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11488.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Previous message:</strong> <a href="11486.php">Jeff Squyres: "[OMPI devel] 1.6.2rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11488.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Reply:</strong> <a href="11488.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Reply:</strong> <a href="11490.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've not tested any other recent RCs, but had a chance today to run this
<br>
one on a subset of my normal pile of test platforms.
<br>
<p>I am not sure why this has only hit me on NetBSD, because the problem looks
<br>
pretty generic.
<br>
When looking at
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/vt/vt/extlib/otf/tools/otfaux/Makefile.am
<br>
I find the following:
<br>
&nbsp;&nbsp;&nbsp;otfaux_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/otfauxlib/libotfaux.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/otflib/libotf.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(MATHLIB)
<br>
&nbsp;&nbsp;&nbsp;otfaux_DEPENDENCIES = $(otfaux_LDADD)
<br>
<p>Since &quot;MATHLIB = -lm&quot; the dependencies list &quot;-lm&quot; as a target and results
<br>
in a build which ends with
<br>
&nbsp;&nbsp;&nbsp;Making all in otfaux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXX    otfaux.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXX    Control.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXX    Handler.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXX    Stats.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make: don't know how to make -lm. Stop
<br>
<p>In my testing the following patch resolves the problem by expressing LDADD
<br>
in terms of DEPENDENCIES, instead of the other way around:
<br>
--- ompi/contrib/vt/vt/extlib/otf/tools/otfaux/Makefile.am.orig 2012-09-11
<br>
10:59:05.000000000 -0700
<br>
+++ ompi/contrib/vt/vt/extlib/otf/tools/otfaux/Makefile.am      2012-09-11
<br>
11:00:08.000000000 -0700
<br>
@@ -8,11 +8,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;otfaux
<br>
&nbsp;endif
<br>
<p>-otfaux_LDADD = \
<br>
+otfaux_DEPENDENCIES = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/otfauxlib/libotfaux.la \
<br>
-       $(top_builddir)/otflib/libotf.la \
<br>
+       $(top_builddir)/otflib/libotf.la
<br>
+otfaux_LDADD = \
<br>
+       $(otfaux_otfaux_DEPENDENCIES) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(MATHLIB)
<br>
-otfaux_DEPENDENCIES = $(otfaux_LDADD)
<br>
&nbsp;otfaux_SOURCES = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Control.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Handler.h \
<br>
<p><p>-Paul
<br>
<p><p>On Tue, Sep 11, 2012 at 7:10 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 1.6.2rc2 is out -- please test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changes since rc1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - VT compile fix on Solaris
</span><br>
<span class="quotelev1">&gt; - rmaps segv fix
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
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11487/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11488.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Previous message:</strong> <a href="11486.php">Jeff Squyres: "[OMPI devel] 1.6.2rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11488.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Reply:</strong> <a href="11488.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>Reply:</strong> <a href="11490.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
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
