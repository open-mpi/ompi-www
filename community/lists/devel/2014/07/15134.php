<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 03:28:18 2014" -->
<!-- isoreceived="20140714072818" -->
<!-- sent="Mon, 14 Jul 2014 09:28:08 +0200" -->
<!-- isosent="20140714072808" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent" -->
<!-- id="53C38688.50403_at_tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1F65F058-2C7D-4C1A-A50B-A344D406AE78_at_cisco.com" -->
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
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-14 03:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15135.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Previous message:</strong> <a href="15133.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>In reply to:</strong> <a href="15117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk:	contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15135.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Reply:</strong> <a href="15135.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/12/2014 05:35 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Mike --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you contact the VT folks before making this change?
</span><br>
<p>Have you consider bug #13928: 
<br>
<a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928</a>
<br>
<p>It is a blocker for the 'subdir-objects'-by-default. And maybe the VT 
<br>
build system hits this bug.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 12, 2014, at 8:38 AM, &lt;svn-commit-mailer_at_[hidden]&gt; &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 32225
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32225">https://svn.open-mpi.org/trac/ompi/changeset/32225</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; BUILD: support new automake
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; new automake requires subdirs-object directive, to resolve this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 09:43:37 automake: warning: possible forward-incompatibility.
</span><br>
<span class="quotelev2">&gt;&gt; 09:43:37 automake: At least a source file is in a subdirectory, but the 'subdir-objects'
</span><br>
<span class="quotelev2">&gt;&gt; 09:43:37 automake: automake option hasn't been enabled.  For now, the corresponding output
</span><br>
<span class="quotelev2">&gt;&gt; 09:43:37 automake: object file(s) will be placed in the top-level directory.  However,
</span><br>
<span class="quotelev2">&gt;&gt; 09:43:37 automake: this behaviour will change in future Automake versions: they will
</span><br>
<span class="quotelev2">&gt;&gt; 09:43:37 automake: unconditionally cause object files to be placed in the same subdirectory
</span><br>
<span class="quotelev2">&gt;&gt; 09:43:37 automake: of the corresponding sources.
</span><br>
<span class="quotelev2">&gt;&gt; 09:43:37 automake: You are advised to start using 'subdir-objects' option throughout your
</span><br>
<span class="quotelev2">&gt;&gt; 09:43:37 automake: project, to avoid future incompatibilities.
</span><br>
<span class="quotelev2">&gt;&gt; 09:43:37 tools/otfmerge/Makefile.common:13: warning: source file '$(OTFMERGESRCDIR)/otfmerge.c' is in a subdirectory,
</span><br>
<span class="quotelev2">&gt;&gt; 09:43:37 tools/otfmerge/Makefile.common:13: but option 'subdir-objects' is disabled
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.8.2:reviewer=ompi-rm1.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/contrib/build-mca-comps-outside-of-tree/configure.ac |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/contrib/vt/vt/configure.ac                      |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac           |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/opal/mca/event/libevent2021/libevent/configure.ac    |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;    4 files changed, 4 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/contrib/build-mca-comps-outside-of-tree/configure.ac
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/contrib/build-mca-comps-outside-of-tree/configure.ac	Sat Jul 12 08:29:30 2014	(r32224)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/contrib/build-mca-comps-outside-of-tree/configure.ac	2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)	(r32225)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -25,7 +25,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_MACRO_DIR(config)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -AM_INIT_AUTOMAKE([foreign dist-bzip2 no-define 1.11])
</span><br>
<span class="quotelev2">&gt;&gt; +AM_INIT_AUTOMAKE([foreign dist-bzip2 no-define 1.11 subdir-objects])
</span><br>
<span class="quotelev2">&gt;&gt; AM_SILENT_RULES([yes])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; AC_LANG([C])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/contrib/vt/vt/configure.ac
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/contrib/vt/vt/configure.ac	Sat Jul 12 08:29:30 2014	(r32224)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/contrib/vt/vt/configure.ac	2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)	(r32225)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -5,7 +5,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; AC_INIT([VampirTrace], [m4_normalize(esyscmd([cat VERSION]))], [vampirsupport_at_[hidden]], [VampirTrace])
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_MACRO_DIR(config/m4)
</span><br>
<span class="quotelev2">&gt;&gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev2">&gt;&gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_HEADERS(config.h)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # If Automake supports silent rules, enable them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac	Sat Jul 12 08:29:30 2014	(r32224)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/contrib/vt/vt/extlib/otf/configure.ac	2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)	(r32225)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -8,7 +8,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_MACRO_DIR(config/m4)
</span><br>
<span class="quotelev2">&gt;&gt; AC_CANONICAL_SYSTEM
</span><br>
<span class="quotelev2">&gt;&gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev2">&gt;&gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_HEADERS([config.h])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # If Automake supports silent rules, enable them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/mca/event/libevent2021/libevent/configure.ac
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/mca/event/libevent2021/libevent/configure.ac	Sat Jul 12 08:29:30 2014	(r32224)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/mca/event/libevent2021/libevent/configure.ac	2014-07-12 08:38:15 EDT (Sat, 12 Jul 2014)	(r32225)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -13,7 +13,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_MACRO_DIR([m4])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Open MPI: changed to one 1 arg AM INIT_AUTOMAKE
</span><br>
<span class="quotelev2">&gt;&gt; -AM_INIT_AUTOMAKE([foreign])
</span><br>
<span class="quotelev2">&gt;&gt; +AM_INIT_AUTOMAKE([foreign subdir-objects])
</span><br>
<span class="quotelev2">&gt;&gt; # Open MPI: changed AM CONFIG_HEADER to AC CONFIG_HEADERS
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_HEADERS(config.h)
</span><br>
<span class="quotelev2">&gt;&gt; AC_DEFINE(NUMERIC_VERSION, 0x02001500, [Numeric representation of the version])
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15134/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15135.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Previous message:</strong> <a href="15133.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>In reply to:</strong> <a href="15117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk:	contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15135.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Reply:</strong> <a href="15135.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
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
