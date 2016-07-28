<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 12 12:54:00 2014" -->
<!-- isoreceived="20140712165400" -->
<!-- sent="Sat, 12 Jul 2014 09:53:23 -0700" -->
<!-- isosent="20140712165323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent" -->
<!-- id="F86A7B92-DC27-49F2-87C4-48810E2452AB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyYjirVWpxyZptE3SWzkecJQ56SJ9Dh=MwbCsaV_7KNvsg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-12 12:53:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15126.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>Previous message:</strong> <a href="15124.php">Mike Dubman: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="15123.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15134.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, let's clarify a couple of things:
<br>
<p>1. this wasn't &quot;necessary&quot; in the sense that OMPI won't build without the change. It was &quot;desirable&quot; in terms of eliminating some long-standing warnings coming from those areas due to changes in automake in anticipation of a compatibility break when automake 2.0 is released. In other words, these are &quot;deprecation&quot; warnings.
<br>
<p>2. I have advised Matthias and Bert about the situation before, but they were concerned about the proposed change being installed in their code base because of potential backward compatibility issues. However, we are requiring automake 1.12.2 as a minimum level, and this is backward compatible to that level (I checked on the web site, and verified on my machines).
<br>
<p>This is why I allowed it into 1.8.2 at this time. It silenced the warnings, and given our minimum AM requirement, was compatible. I wouldn't necessarily advise the VT folks to ingest it as I believe they are trying to stay compatible to older versions of AM (same situation for libevent), but that's up to them.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Jul 12, 2014, at 9:26 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yep
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 12, 2014 7:23 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Mike --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Was this actually necessary in the libevent directory too?  What version of &quot;new&quot; automake are you referring to -- 1.14?  (I'm not sure I've tried 1.14.x... my cluster version is still at 1.13.x....)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 12, 2014, at 8:38 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 32225
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32225">https://svn.open-mpi.org/trac/ompi/changeset/32225</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; BUILD: support new automake
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; new automake requires subdirs-object directive, to resolve this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 09:43:37 automake: warning: possible forward-incompatibility.
</span><br>
<span class="quotelev2">&gt; &gt; 09:43:37 automake: At least a source file is in a subdirectory, but the 'subdir-objects'
</span><br>
<span class="quotelev2">&gt; &gt; 09:43:37 automake: automake option hasn't been enabled.  For now, the corresponding output
</span><br>
<span class="quotelev2">&gt; &gt; 09:43:37 automake: object file(s) will be placed in the top-level directory.  However,
</span><br>
<span class="quotelev2">&gt; &gt; 09:43:37 automake: this behaviour will change in future Automake versions: they will
</span><br>
<span class="quotelev2">&gt; &gt; 09:43:37 automake: unconditionally cause object files to be placed in the same subdirectory
</span><br>
<span class="quotelev2">&gt; &gt; 09:43:37 automake: of the corresponding sources.
</span><br>
<span class="quotelev2">&gt; &gt; 09:43:37 automake: You are advised to start using 'subdir-objects' option throughout your
</span><br>
<span class="quotelev2">&gt; &gt; 09:43:37 automake: project, to avoid future incompatibilities.
</span><br>
<span class="quotelev2">&gt; &gt; 09:43:37 tools/otfmerge/Makefile.common:13: warning: source file '$(OTFMERGESRCDIR)/otfmerge.c' is in a subdirectory,
</span><br>
<span class="quotelev2">&gt; &gt; 09:43:37 tools/otfmerge/Makefile.common:13: but option 'subdir-objects' is disabled
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cmr=v1.8.2:reviewer=ompi-rm1.8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/build-mca-comps-outside-of-tree/configure.ac |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/contrib/vt/vt/configure.ac                      |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac           |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/opal/mca/event/libevent2021/libevent/configure.ac    |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;   4 files changed, 4 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/contrib/build-mca-comps-outside-of-tree/configure.ac
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/contrib/build-mca-comps-outside-of-tree/configure.ac        Sat Jul 12 08:29:30 2014        (r32224)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/contrib/build-mca-comps-outside-of-tree/configure.ac        2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)      (r32225)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -25,7 +25,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev2">&gt; &gt; AC_CONFIG_MACRO_DIR(config)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -AM_INIT_AUTOMAKE([foreign dist-bzip2 no-define 1.11])
</span><br>
<span class="quotelev2">&gt; &gt; +AM_INIT_AUTOMAKE([foreign dist-bzip2 no-define 1.11 subdir-objects])
</span><br>
<span class="quotelev2">&gt; &gt; AM_SILENT_RULES([yes])
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; AC_LANG([C])
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/contrib/vt/vt/configure.ac
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/contrib/vt/vt/configure.ac     Sat Jul 12 08:29:30 2014        (r32224)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/contrib/vt/vt/configure.ac     2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)      (r32225)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -5,7 +5,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; AC_INIT([VampirTrace], [m4_normalize(esyscmd([cat VERSION]))], [vampirsupport_at_[hidden]], [VampirTrace])
</span><br>
<span class="quotelev2">&gt; &gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev2">&gt; &gt; AC_CONFIG_MACRO_DIR(config/m4)
</span><br>
<span class="quotelev2">&gt; &gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev2">&gt; &gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev2">&gt; &gt; AC_CONFIG_HEADERS(config.h)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # If Automake supports silent rules, enable them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac  Sat Jul 12 08:29:30 2014        (r32224)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac  2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)      (r32225)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -8,7 +8,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev2">&gt; &gt; AC_CONFIG_MACRO_DIR(config/m4)
</span><br>
<span class="quotelev2">&gt; &gt; AC_CANONICAL_SYSTEM
</span><br>
<span class="quotelev2">&gt; &gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev2">&gt; &gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev2">&gt; &gt; AC_CONFIG_HEADERS([config.h])
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # If Automake supports silent rules, enable them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/opal/mca/event/libevent2021/libevent/configure.ac
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/opal/mca/event/libevent2021/libevent/configure.ac   Sat Jul 12 08:29:30 2014        (r32224)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/opal/mca/event/libevent2021/libevent/configure.ac   2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)      (r32225)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -13,7 +13,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; AC_CONFIG_MACRO_DIR([m4])
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Open MPI: changed to one 1 arg AM INIT_AUTOMAKE
</span><br>
<span class="quotelev2">&gt; &gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev2">&gt; &gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev2">&gt; &gt; # Open MPI: changed AM CONFIG_HEADER to AC CONFIG_HEADERS
</span><br>
<span class="quotelev2">&gt; &gt; AC_CONFIG_HEADERS(config.h)
</span><br>
<span class="quotelev2">&gt; &gt; AC_DEFINE(NUMERIC_VERSION, 0x02001500, [Numeric representation of the version])
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15122.php">http://www.open-mpi.org/community/lists/devel/2014/07/15122.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15123.php">http://www.open-mpi.org/community/lists/devel/2014/07/15123.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15126.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>Previous message:</strong> <a href="15124.php">Mike Dubman: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="15123.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15134.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
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
