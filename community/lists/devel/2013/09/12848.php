<?
$subject_val = "Re: [OMPI devel] GNU Automake 1.14 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 15:24:04 2013" -->
<!-- isoreceived="20130903192404" -->
<!-- sent="Tue, 3 Sep 2013 19:24:02 +0000" -->
<!-- isosent="20130903192402" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GNU Automake 1.14 released" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F863628_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKPyHN1_z-9fYqkO=HtYuGqJnXoYYNB55zgm-Qvycu5-9QQqHw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 15:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12849.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Previous message:</strong> <a href="12847.php">Ralph Castain: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12826.php">Bert Wesarg: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about sym linking the source file?  Then you would only need a single Makefile.am; you can use different flags depending on which source file you compile.
<br>
<p>While somewhat gross, it's not totally disgusting, and it should work to the same effect...?
<br>
<p><p>On Aug 30, 2013, at 4:16 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 21, 2013 at 2:01 PM, Stefano Lattarini
</span><br>
<span class="quotelev1">&gt; &lt;stefano.lattarini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We are pleased to announce the GNU Automake 1.14 minor release.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  - The next major Automake version (2.0) will unconditionally activate
</span><br>
<span class="quotelev2">&gt;&gt;    the 'subdir-objects' option.  In order to smooth out the transition,
</span><br>
<span class="quotelev2">&gt;&gt;    we now give a warning (in the category 'unsupported') whenever a
</span><br>
<span class="quotelev2">&gt;&gt;    source file is present in a subdirectory but the 'subdir-object' is
</span><br>
<span class="quotelev2">&gt;&gt;    not enabled.  For example, the following usage will trigger such a
</span><br>
<span class="quotelev2">&gt;&gt;    warning:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        bin_PROGRAMS = sub/foo
</span><br>
<span class="quotelev2">&gt;&gt;        sub_foo_SOURCES = sub/main.c sub/bar.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we don't understand how this warning should 'smooth' the transition to
</span><br>
<span class="quotelev1">&gt; post-1.14 in our project.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is our situation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a source file which needs to be compiled twice. But with
</span><br>
<span class="quotelev1">&gt; different compilers. Thus we can't use per-target flags and we use two
</span><br>
<span class="quotelev1">&gt; separate Makefile.am files for this. Because the compilation rules are
</span><br>
<span class="quotelev1">&gt; nearly identical, we use a Makefile.common.inc.am file which will be
</span><br>
<span class="quotelev1">&gt; included by both Makefile.am's. Here is the directory layout (the
</span><br>
<span class="quotelev1">&gt; complete reduced testcase is attached):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; src/foo.c
</span><br>
<span class="quotelev1">&gt; src/Makefile.am
</span><br>
<span class="quotelev1">&gt; src/Makefile.common.inc.am
</span><br>
<span class="quotelev1">&gt; src/second/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The src/Makefile.am looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---- 8&lt; src/Makefile.am 8&lt; ---
</span><br>
<span class="quotelev1">&gt; SUBDIRS = second
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MY_SRCDIR=.
</span><br>
<span class="quotelev1">&gt; include Makefile.common.inc.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bin_PROGRAMS=foo
</span><br>
<span class="quotelev1">&gt; foo_SOURCES=$(FOO_COMMONSOURCES)
</span><br>
<span class="quotelev1">&gt; ---- &gt;8 src/Makefile.am &gt;8 ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---- 8&lt; src/second/Makefile.am 8&lt; ---
</span><br>
<span class="quotelev1">&gt; CC=$(top_srcdir)/bin/wrapper
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MY_SRCDIR=..
</span><br>
<span class="quotelev1">&gt; include ../Makefile.common.inc.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bin_PROGRAMS=foo-wrapped
</span><br>
<span class="quotelev1">&gt; foo_wrapped_SOURCES=$(FOO_COMMONSOURCES)
</span><br>
<span class="quotelev1">&gt; ---- &gt;8 src/second/Makefile.am &gt;8 ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---- 8&lt; src/Makefile.common.inc.am 8&lt; ---
</span><br>
<span class="quotelev1">&gt; FOO_COMMONSOURCES = $(MY_SRCDIR)/foo.c
</span><br>
<span class="quotelev1">&gt; ---- &gt;8 src/Makefile.common.inc.am &gt;8 ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This works with automake 1.13.4 as expected. Now, with automake 1.14
</span><br>
<span class="quotelev1">&gt; we get the newly introduced warning mentioned above in the release
</span><br>
<span class="quotelev1">&gt; statements. Now enabling subdir-objects is not yet an option for us,
</span><br>
<span class="quotelev1">&gt; because we use variables in the _SOURCES list and bug 13928 [1] hits
</span><br>
<span class="quotelev1">&gt; us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So what would be the best transition in this situation? We don't want
</span><br>
<span class="quotelev1">&gt; to remove the Makefile.common.inc.am to avoid the resulting redundancy
</span><br>
<span class="quotelev1">&gt; in the two Makefile.am files. We also can't use the newly introduced
</span><br>
<span class="quotelev1">&gt; %reldir%, because it also throws the warning, and also want to
</span><br>
<span class="quotelev1">&gt; maintain compatibly with pre-1.14 automake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any guidance is more than welcomed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt; Matthias Jurenz &amp; Bert Wesarg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928</a>
</span><br>
<span class="quotelev1">&gt; &lt;foo-subdir-objects-warnings.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12849.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Previous message:</strong> <a href="12847.php">Ralph Castain: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12826.php">Bert Wesarg: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12854.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
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
