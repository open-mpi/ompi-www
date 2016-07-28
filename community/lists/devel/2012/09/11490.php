<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 15:06:30 2012" -->
<!-- isoreceived="20120911190630" -->
<!-- sent="Tue, 11 Sep 2012 21:06:26 +0200" -->
<!-- isosent="20120911190626" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]" -->
<!-- id="CAKPyHN37XnrzYG8Ez7TRp+trtfcey-a2Sf5LrXD_9CwvhmzggA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 15:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11491.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Previous message:</strong> <a href="11489.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>In reply to:</strong> <a href="11487.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Tue, Sep 11, 2012 at 8:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I've not tested any other recent RCs, but had a chance today to run this one
</span><br>
<span class="quotelev1">&gt; on a subset of my normal pile of test platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure why this has only hit me on NetBSD, because the problem looks
</span><br>
<span class="quotelev1">&gt; pretty generic.
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
<span class="quotelev1">&gt; Since &quot;MATHLIB = -lm&quot; the dependencies list &quot;-lm&quot; as a target and results in
</span><br>
<span class="quotelev1">&gt; a build which ends with
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
<p>Thanks. That looks correctly analyzed and fixed. should be in trunk in
<br>
the next 24h.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11491.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Previous message:</strong> <a href="11489.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<li><strong>In reply to:</strong> <a href="11487.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
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
