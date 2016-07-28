<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 05:51:30 2014" -->
<!-- isoreceived="20140725095130" -->
<!-- sent="Fri, 25 Jul 2014 11:51:27 +0200 (CEST)" -->
<!-- isosent="20140725095127" -->
<!-- name="Peter Breitenlohner" -->
<!-- email="peb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="alpine.LNX.2.00.1407251109250.2271_at_pcl321.mppmu.mpg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="53D10242.9060604_at_tu-dresden.de" -->
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
<strong>From:</strong> Peter Breitenlohner (<em>peb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 05:51:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15264.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15262.php">Ralph Castain: "[OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>In reply to:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15264.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15264.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 24 Jul 2014, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; On 07/24/2014 02:52 PM, Peter Breitenlohner wrote:
</span><br>
<p><span class="quotelev2">&gt;&gt; This typically occurs when you try to create a file (symlink) in a
</span><br>
<span class="quotelev2">&gt;&gt; nonexistent directory.  In such situations the make rules must ensure that
</span><br>
<span class="quotelev2">&gt;&gt; such directories exist, e.g., via
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; some_target: Some_prerequisite
</span><br>
<span class="quotelev2">&gt;&gt;      $(MKDIR_P) hooks
</span><br>
<span class="quotelev2">&gt;&gt;      $(LN_S) $(srcdir)/hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev2">&gt;&gt; hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the dep rules should already ensure this, as it creates the .deps 
</span><br>
<span class="quotelev1">&gt; directory at the end of configure. Though if this is not guaranteed to happen 
</span><br>
<span class="quotelev1">&gt; (maybe it depends on the used compiler) than we would need to ensure it in 
</span><br>
<span class="quotelev1">&gt; the makefile itself.
</span><br>
<p>perhaps true, and I actually don't know where the 'ln -s' comes from.
<br>
<p><span class="quotelev1">&gt; Does someone know the details from autoconf about this?
</span><br>
<p>at least part of the problem comes from the Automake option 'subdir-objects'
<br>
together with the *_SOURCES defined in Makefile.common in the directories
<br>
&nbsp;&nbsp;&nbsp;openmpi-1.8.1/ompi/contrib/vt/vt/tools/{vtunify,vtfilter}/
<br>
defining source files as, e.g.,
<br>
&nbsp;&nbsp;&nbsp;$(VTUNIFYSRCDIR)/hooks/vt_unify_hooks_aevents.cc
<br>
together with
<br>
&nbsp;&nbsp;&nbsp;VTUNIFYSRCDIR = $(srcdir)
<br>
<p>It was never required (nor recommended) to specify explicitly that sources
<br>
are in the source tree, Automake-generated rules always try to find the file
<br>
first in the build tree and then in the source tree.
<br>
<p>Together with 'subdir-objects' and Automake 1.14.1 this has disastrous effects:
<br>
&nbsp;&nbsp;&nbsp;foo_SOURCES = foo.c ${srcdir}/sub/foosub.c
<br>
creates the dependency file
<br>
&nbsp;&nbsp;&nbsp;'${srcdir}'/sub/.deps/foosub.Po
<br>
in the build tree but needs
<br>
&nbsp;&nbsp;&nbsp;${srcdir}/sub/.deps/foosub.Po
<br>
and therefore fails. SIMILARLY
<br>
&nbsp;&nbsp;&nbsp;foo_SOURCES = foo.c $(srcdir)/sub/foosub.c
<br>
creates
<br>
&nbsp;&nbsp;&nbsp;'$(srcdir)'/sub/.deps/foosub.Po
<br>
but needs
<br>
&nbsp;&nbsp;&nbsp;$(srcdir)/sub/.deps/foosub.Po
<br>
and fails. Finally
<br>
&nbsp;&nbsp;&nbsp;foo_SOURCES = foo.c @srcdir@/sub/foosub.c
<br>
tries to create
<br>
&nbsp;&nbsp;&nbsp;sub/foosub.o
<br>
&nbsp;&nbsp;&nbsp;sub/.deps 
<br>
and succeeds if the source tree is writable but 'make distcheck' with its
<br>
read-only source tree fails as demonstrated by the attached tiny tarball.
<br>
<p>Part of all that is due to a bug in Automake 1.14.1 that will probably be
<br>
fixed in 1.14.2, but one should certainly not say explicitly that source
<br>
files are in the source tree.
<br>
<p>Regards
<br>
Peter
<br>

<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15263/foo-1.0.tar.gz">foo-1.0.tar.gz</a>
</ul>
<!-- attachment="foo-1.0.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15264.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15262.php">Ralph Castain: "[OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>In reply to:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15264.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15264.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
