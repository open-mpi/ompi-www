<?
$subject_val = "Re: [OMPI devel] GNU Automake 1.14 released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 30 04:16:09 2013" -->
<!-- isoreceived="20130830081609" -->
<!-- sent="Fri, 30 Aug 2013 10:16:09 +0200" -->
<!-- isosent="20130830081609" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GNU Automake 1.14 released" -->
<!-- id="CAKPyHN1_z-9fYqkO=HtYuGqJnXoYYNB55zgm-Qvycu5-9QQqHw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="51C4407C.1080407_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GNU Automake 1.14 released<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-30 04:16:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12827.php">Bibrak Qamar: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="12825.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12848.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12848.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Fri, Jun 21, 2013 at 2:01 PM, Stefano Lattarini
<br>
&lt;stefano.lattarini_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; We are pleased to announce the GNU Automake 1.14 minor release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - The next major Automake version (2.0) will unconditionally activate
</span><br>
<span class="quotelev1">&gt;     the 'subdir-objects' option.  In order to smooth out the transition,
</span><br>
<span class="quotelev1">&gt;     we now give a warning (in the category 'unsupported') whenever a
</span><br>
<span class="quotelev1">&gt;     source file is present in a subdirectory but the 'subdir-object' is
</span><br>
<span class="quotelev1">&gt;     not enabled.  For example, the following usage will trigger such a
</span><br>
<span class="quotelev1">&gt;     warning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         bin_PROGRAMS = sub/foo
</span><br>
<span class="quotelev1">&gt;         sub_foo_SOURCES = sub/main.c sub/bar.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>we don't understand how this warning should 'smooth' the transition to
<br>
post-1.14 in our project.
<br>
<p>Here is our situation:
<br>
<p>We have a source file which needs to be compiled twice. But with
<br>
different compilers. Thus we can't use per-target flags and we use two
<br>
separate Makefile.am files for this. Because the compilation rules are
<br>
nearly identical, we use a Makefile.common.inc.am file which will be
<br>
included by both Makefile.am's. Here is the directory layout (the
<br>
complete reduced testcase is attached):
<br>
<p>src/foo.c
<br>
src/Makefile.am
<br>
src/Makefile.common.inc.am
<br>
src/second/Makefile.am
<br>
<p>The src/Makefile.am looks like:
<br>
<p>---- 8&lt; src/Makefile.am 8&lt; ---
<br>
SUBDIRS = second
<br>
<p>MY_SRCDIR=.
<br>
include Makefile.common.inc.am
<br>
<p>bin_PROGRAMS=foo
<br>
foo_SOURCES=$(FOO_COMMONSOURCES)
<br>
---- &gt;8 src/Makefile.am &gt;8 ---
<br>
<p>---- 8&lt; src/second/Makefile.am 8&lt; ---
<br>
CC=$(top_srcdir)/bin/wrapper
<br>
<p>MY_SRCDIR=..
<br>
include ../Makefile.common.inc.am
<br>
<p>bin_PROGRAMS=foo-wrapped
<br>
foo_wrapped_SOURCES=$(FOO_COMMONSOURCES)
<br>
---- &gt;8 src/second/Makefile.am &gt;8 ---
<br>
<p>---- 8&lt; src/Makefile.common.inc.am 8&lt; ---
<br>
FOO_COMMONSOURCES = $(MY_SRCDIR)/foo.c
<br>
---- &gt;8 src/Makefile.common.inc.am &gt;8 ---
<br>
<p>This works with automake 1.13.4 as expected. Now, with automake 1.14
<br>
we get the newly introduced warning mentioned above in the release
<br>
statements. Now enabling subdir-objects is not yet an option for us,
<br>
because we use variables in the _SOURCES list and bug 13928 [1] hits
<br>
us.
<br>
<p>So what would be the best transition in this situation? We don't want
<br>
to remove the Makefile.common.inc.am to avoid the resulting redundancy
<br>
in the two Makefile.am files. We also can't use the newly introduced
<br>
%reldir%, because it also throws the warning, and also want to
<br>
maintain compatibly with pre-1.14 automake.
<br>
<p>Any guidance is more than welcomed.
<br>
<p>Kind Regards,
<br>
Matthias Jurenz &amp; Bert Wesarg
<br>
<p>[1] <a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928</a>
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12826/foo-subdir-objects-warnings.tar.gz">foo-subdir-objects-warnings.tar.gz</a>
</ul>
<!-- attachment="foo-subdir-objects-warnings.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12827.php">Bibrak Qamar: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="12825.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12848.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12848.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
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
