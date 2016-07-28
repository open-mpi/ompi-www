<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 08:05:40 2014" -->
<!-- isoreceived="20140725120540" -->
<!-- sent="Fri, 25 Jul 2014 14:05:30 +0200" -->
<!-- isosent="20140725120530" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="53D2480A.1040300_at_tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.LNX.2.00.1407251109250.2271_at_pcl321.mppmu.mpg.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8 - compile/dist problem<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 08:05:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>Previous message:</strong> <a href="15263.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15263.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15247.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/25/2014 11:51 AM, Peter Breitenlohner wrote:
<br>
<span class="quotelev1">&gt; On Thu, 24 Jul 2014, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 07/24/2014 02:52 PM, Peter Breitenlohner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This typically occurs when you try to create a file (symlink) in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nonexistent directory.  In such situations the make rules must ensure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such directories exist, e.g., via
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some_target: Some_prerequisite
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      $(MKDIR_P) hooks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      $(LN_S) $(srcdir)/hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But the dep rules should already ensure this, as it creates the .deps
</span><br>
<span class="quotelev2">&gt;&gt; directory at the end of configure. Though if this is not guaranteed to
</span><br>
<span class="quotelev2">&gt;&gt; happen (maybe it depends on the used compiler) than we would need to
</span><br>
<span class="quotelev2">&gt;&gt; ensure it in the makefile itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; perhaps true, and I actually don't know where the 'ln -s' comes from.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does someone know the details from autoconf about this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at least part of the problem comes from the Automake option
</span><br>
<span class="quotelev1">&gt; 'subdir-objects'
</span><br>
<span class="quotelev1">&gt; together with the *_SOURCES defined in Makefile.common in the directories
</span><br>
<span class="quotelev1">&gt;    openmpi-1.8.1/ompi/contrib/vt/vt/tools/{vtunify,vtfilter}/
</span><br>
<span class="quotelev1">&gt; defining source files as, e.g.,
</span><br>
<span class="quotelev1">&gt;    $(VTUNIFYSRCDIR)/hooks/vt_unify_hooks_aevents.cc
</span><br>
<span class="quotelev1">&gt; together with
</span><br>
<span class="quotelev1">&gt;    VTUNIFYSRCDIR = $(srcdir)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was never required (nor recommended) to specify explicitly that sources
</span><br>
<span class="quotelev1">&gt; are in the source tree, Automake-generated rules always try to find the
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; first in the build tree and then in the source tree.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Together with 'subdir-objects' and Automake 1.14.1 this has disastrous
</span><br>
<span class="quotelev1">&gt; effects:
</span><br>
<span class="quotelev1">&gt;    foo_SOURCES = foo.c ${srcdir}/sub/foosub.c
</span><br>
<span class="quotelev1">&gt; creates the dependency file
</span><br>
<span class="quotelev1">&gt;    '${srcdir}'/sub/.deps/foosub.Po
</span><br>
<span class="quotelev1">&gt; in the build tree but needs
</span><br>
<span class="quotelev1">&gt;    ${srcdir}/sub/.deps/foosub.Po
</span><br>
<span class="quotelev1">&gt; and therefore fails. SIMILARLY
</span><br>
<span class="quotelev1">&gt;    foo_SOURCES = foo.c $(srcdir)/sub/foosub.c
</span><br>
<span class="quotelev1">&gt; creates
</span><br>
<span class="quotelev1">&gt;    '$(srcdir)'/sub/.deps/foosub.Po
</span><br>
<span class="quotelev1">&gt; but needs
</span><br>
<span class="quotelev1">&gt;    $(srcdir)/sub/.deps/foosub.Po
</span><br>
<span class="quotelev1">&gt; and fails. Finally
</span><br>
<span class="quotelev1">&gt;    foo_SOURCES = foo.c @srcdir@/sub/foosub.c
</span><br>
<span class="quotelev1">&gt; tries to create
</span><br>
<span class="quotelev1">&gt;    sub/foosub.o
</span><br>
<span class="quotelev1">&gt;    sub/.deps and succeeds if the source tree is writable but 'make
</span><br>
<span class="quotelev1">&gt; distcheck' with its
</span><br>
<span class="quotelev1">&gt; read-only source tree fails as demonstrated by the attached tiny tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Part of all that is due to a bug in Automake 1.14.1 that will probably be
</span><br>
<span class="quotelev1">&gt; fixed in 1.14.2, but one should certainly not say explicitly that source
</span><br>
<span class="quotelev1">&gt; files are in the source tree.
</span><br>
<p>Peter, I was the one who reported this bug to automake:
<br>
<p><a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928</a>
<br>
<p>;-)
<br>
<p>And this bug is /present since the beginning/. But where did you get the 
<br>
impression that this may get fixed in 1.14.2?
<br>
<p>Anyway, this $(LN_S) is there to prevent having variable references in 
<br>
_SOURCES files, thus circumventing the subdir-objects bug in automake. 
<br>
We (in VT) are building some sources twice. Once with the $(CC) compiler 
<br>
and a second time with the $(MPICC) compiler. And for this we are now 
<br>
making symlinks in a new directory, so that it looks like they have the 
<br>
same paths for both builds.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15264/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>Previous message:</strong> <a href="15263.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15263.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15247.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
