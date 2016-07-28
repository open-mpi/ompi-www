<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk:	contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 12 12:23:47 2014" -->
<!-- isoreceived="20140712162347" -->
<!-- sent="Sat, 12 Jul 2014 16:23:46 +0000" -->
<!-- isosent="20140712162346" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk:	contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent" -->
<!-- id="BA60E02A-38C4-41AF-AC38-346CCEC4DAD2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140712123816.2DAD815FF7D_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk:	contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-12 12:23:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15123.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Previous message:</strong> <a href="15121.php">Siddhartha Jana: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Maybe in reply to:</strong> <a href="15117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk:	contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15123.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Reply:</strong> <a href="15123.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>Was this actually necessary in the libevent directory too?  What version of &quot;new&quot; automake are you referring to -- 1.14?  (I'm not sure I've tried 1.14.x... my cluster version is still at 1.13.x....)
<br>
<p><p><p>On Jul 12, 2014, at 8:38 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32225
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32225">https://svn.open-mpi.org/trac/ompi/changeset/32225</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; BUILD: support new automake
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; new automake requires subdirs-object directive, to resolve this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 09:43:37 automake: warning: possible forward-incompatibility.
</span><br>
<span class="quotelev1">&gt; 09:43:37 automake: At least a source file is in a subdirectory, but the 'subdir-objects'
</span><br>
<span class="quotelev1">&gt; 09:43:37 automake: automake option hasn't been enabled.  For now, the corresponding output
</span><br>
<span class="quotelev1">&gt; 09:43:37 automake: object file(s) will be placed in the top-level directory.  However,
</span><br>
<span class="quotelev1">&gt; 09:43:37 automake: this behaviour will change in future Automake versions: they will
</span><br>
<span class="quotelev1">&gt; 09:43:37 automake: unconditionally cause object files to be placed in the same subdirectory
</span><br>
<span class="quotelev1">&gt; 09:43:37 automake: of the corresponding sources.
</span><br>
<span class="quotelev1">&gt; 09:43:37 automake: You are advised to start using 'subdir-objects' option throughout your
</span><br>
<span class="quotelev1">&gt; 09:43:37 automake: project, to avoid future incompatibilities.
</span><br>
<span class="quotelev1">&gt; 09:43:37 tools/otfmerge/Makefile.common:13: warning: source file '$(OTFMERGESRCDIR)/otfmerge.c' is in a subdirectory,
</span><br>
<span class="quotelev1">&gt; 09:43:37 tools/otfmerge/Makefile.common:13: but option 'subdir-objects' is disabled
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr=v1.8.2:reviewer=ompi-rm1.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/contrib/build-mca-comps-outside-of-tree/configure.ac |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/contrib/vt/vt/configure.ac                      |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac           |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/event/libevent2021/libevent/configure.ac    |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   4 files changed, 4 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/contrib/build-mca-comps-outside-of-tree/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/contrib/build-mca-comps-outside-of-tree/configure.ac	Sat Jul 12 08:29:30 2014	(r32224)
</span><br>
<span class="quotelev1">&gt; +++ trunk/contrib/build-mca-comps-outside-of-tree/configure.ac	2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)	(r32225)
</span><br>
<span class="quotelev1">&gt; @@ -25,7 +25,7 @@
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_MACRO_DIR(config)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -AM_INIT_AUTOMAKE([foreign dist-bzip2 no-define 1.11])
</span><br>
<span class="quotelev1">&gt; +AM_INIT_AUTOMAKE([foreign dist-bzip2 no-define 1.11 subdir-objects])
</span><br>
<span class="quotelev1">&gt; AM_SILENT_RULES([yes])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AC_LANG([C])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/contrib/vt/vt/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/contrib/vt/vt/configure.ac	Sat Jul 12 08:29:30 2014	(r32224)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/contrib/vt/vt/configure.ac	2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)	(r32225)
</span><br>
<span class="quotelev1">&gt; @@ -5,7 +5,7 @@
</span><br>
<span class="quotelev1">&gt; AC_INIT([VampirTrace], [m4_normalize(esyscmd([cat VERSION]))], [vampirsupport_at_[hidden]], [VampirTrace])
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_MACRO_DIR(config/m4)
</span><br>
<span class="quotelev1">&gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev1">&gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_HEADERS(config.h)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # If Automake supports silent rules, enable them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac	Sat Jul 12 08:29:30 2014	(r32224)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac	2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)	(r32225)
</span><br>
<span class="quotelev1">&gt; @@ -8,7 +8,7 @@
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_MACRO_DIR(config/m4)
</span><br>
<span class="quotelev1">&gt; AC_CANONICAL_SYSTEM
</span><br>
<span class="quotelev1">&gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev1">&gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_HEADERS([config.h])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # If Automake supports silent rules, enable them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/event/libevent2021/libevent/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/event/libevent2021/libevent/configure.ac	Sat Jul 12 08:29:30 2014	(r32224)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/event/libevent2021/libevent/configure.ac	2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)	(r32225)
</span><br>
<span class="quotelev1">&gt; @@ -13,7 +13,7 @@
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_MACRO_DIR([m4])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Open MPI: changed to one 1 arg AM INIT_AUTOMAKE
</span><br>
<span class="quotelev1">&gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev1">&gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev1">&gt; # Open MPI: changed AM CONFIG_HEADER to AC CONFIG_HEADERS
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_HEADERS(config.h)
</span><br>
<span class="quotelev1">&gt; AC_DEFINE(NUMERIC_VERSION, 0x02001500, [Numeric representation of the version])
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="15123.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Previous message:</strong> <a href="15121.php">Siddhartha Jana: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Maybe in reply to:</strong> <a href="15117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk:	contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15123.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Reply:</strong> <a href="15123.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
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
