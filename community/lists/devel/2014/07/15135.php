<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 08:11:15 2014" -->
<!-- isoreceived="20140714121115" -->
<!-- sent="Mon, 14 Jul 2014 14:11:07 +0200" -->
<!-- isosent="20140714121107" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent" -->
<!-- id="53C3C8DB.3050206_at_tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53C38688.50403_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-14 08:11:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15136.php">Rolf vandeVaart: "[OMPI devel] Hangs on the trunk"</a>
<li><strong>Previous message:</strong> <a href="15134.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>In reply to:</strong> <a href="15134.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r29732 already fixes the automake issue in the trunk. I reopened the CMR 
<br>
#4786 for moving this revision to the v1.8 branch.
<br>
<p>Matthias
<br>
<p>PS: Sorry for the delay. I had then forgotten to create a CMR for this fix.
<br>
<p><p>On 14.07.2014 09:28, Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; On 07/12/2014 05:35 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Mike --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you contact the VT folks before making this change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you consider bug #13928: 
</span><br>
<span class="quotelev1">&gt; <a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is a blocker for the 'subdir-objects'-by-default. And maybe the VT 
</span><br>
<span class="quotelev1">&gt; build system hits this bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 12, 2014, at 8:38 AM, &lt;svn-commit-mailer_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 32225
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32225">https://svn.open-mpi.org/trac/ompi/changeset/32225</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BUILD: support new automake
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new automake requires subdirs-object directive, to resolve this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:43:37 automake: warning: possible forward-incompatibility.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:43:37 automake: At least a source file is in a subdirectory, but 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the 'subdir-objects'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:43:37 automake: automake option hasn't been enabled.  For now, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the corresponding output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:43:37 automake: object file(s) will be placed in the top-level 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory.  However,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:43:37 automake: this behaviour will change in future Automake 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions: they will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:43:37 automake: unconditionally cause object files to be placed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the same subdirectory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:43:37 automake: of the corresponding sources.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:43:37 automake: You are advised to start using 'subdir-objects' 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option throughout your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:43:37 automake: project, to avoid future incompatibilities.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:43:37 tools/otfmerge/Makefile.common:13: warning: source file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '$(OTFMERGESRCDIR)/otfmerge.c' is in a subdirectory,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09:43:37 tools/otfmerge/Makefile.common:13: but option 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'subdir-objects' is disabled
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmr=v1.8.2:reviewer=ompi-rm1.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/contrib/build-mca-comps-outside-of-tree/configure.ac |     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/contrib/vt/vt/configure.ac |     2 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac |     2 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/mca/event/libevent2021/libevent/configure.ac |     2 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    4 files changed, 4 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/contrib/build-mca-comps-outside-of-tree/configure.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/contrib/build-mca-comps-outside-of-tree/configure.ac Sat 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jul 12 08:29:30 2014    (r32224)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/contrib/build-mca-comps-outside-of-tree/configure.ac 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)    (r32225)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -25,7 +25,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CONFIG_MACRO_DIR(config)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -AM_INIT_AUTOMAKE([foreign dist-bzip2 no-define 1.11])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +AM_INIT_AUTOMAKE([foreign dist-bzip2 no-define 1.11 subdir-objects])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AM_SILENT_RULES([yes])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_LANG([C])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/contrib/vt/vt/configure.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/contrib/vt/vt/configure.ac    Sat Jul 12 08:29:30 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014    (r32224)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/contrib/vt/vt/configure.ac    2014-07-12 08:38:15 EDT 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 12 Jul 2014)    (r32225)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -5,7 +5,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_INIT([VampirTrace], [m4_normalize(esyscmd([cat VERSION]))], 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vampirsupport_at_[hidden]], [VampirTrace])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CONFIG_MACRO_DIR(config/m4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CONFIG_HEADERS(config.h)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # If Automake supports silent rules, enable them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac    Sat Jul 12 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 08:29:30 2014    (r32224)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac 2014-07-12 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 08:38:15 EDT (Sat, 12 Jul 2014)    (r32225)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -8,7 +8,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CONFIG_MACRO_DIR(config/m4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CANONICAL_SYSTEM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CONFIG_HEADERS([config.h])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # If Automake supports silent rules, enable them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/mca/event/libevent2021/libevent/configure.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/event/libevent2021/libevent/configure.ac Sat Jul 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12 08:29:30 2014    (r32224)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/mca/event/libevent2021/libevent/configure.ac 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)    (r32225)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -13,7 +13,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CONFIG_MACRO_DIR([m4])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Open MPI: changed to one 1 arg AM INIT_AUTOMAKE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Open MPI: changed AM CONFIG_HEADER to AC CONFIG_HEADERS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CONFIG_HEADERS(config.h)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFINE(NUMERIC_VERSION, 0x02001500, [Numeric representation of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the version])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15134.php">http://www.open-mpi.org/community/lists/devel/2014/07/15134.php</a>
</span><br>
<p><pre>
-- 
Matthias Jurenz
Technische Universit&#228;t Dresden
Center for Information Services and High Performance Computing (ZIH)
01062 Dresden, Germany
Phone: +49 (351) 463-31945
Fax: +49 (351) 463-37773
E-Mail: matthias.jurenz_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15135/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15136.php">Rolf vandeVaart: "[OMPI devel] Hangs on the trunk"</a>
<li><strong>Previous message:</strong> <a href="15134.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>In reply to:</strong> <a href="15134.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
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
