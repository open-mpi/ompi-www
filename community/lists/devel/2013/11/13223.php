<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 12:10:50 2013" -->
<!-- isoreceived="20131107171050" -->
<!-- sent="Thu, 7 Nov 2013 09:10:40 -0800" -->
<!-- isosent="20131107171040" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source" -->
<!-- id="9F6C9B3B-5746-401D-AA88-B027E9466A58_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyY3c6LNcF8rwwbAOVitiivnsBkYu4euadiq_QoajEJ+MQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 12:10:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source"</a>
<li><strong>Previous message:</strong> <a href="13222.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>In reply to:</strong> <a href="13222.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source"</a>
<li><strong>Reply:</strong> <a href="13224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2013, at 8:54 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; how it is differ from other related stuf kept in svn to support:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - rpm based distros? (dist/linux/)
</span><br>
<span class="quotelev1">&gt; - macos (contrib/dist/macosx-pkg/)
</span><br>
<span class="quotelev1">&gt; - __debian_stuff_could_be_here_as_well
</span><br>
<p>That's a fair point - I'll let the folks who added those directories chime in as to their views on the difference, if any - I think some of those may be historical and quite stale (i.e., they may only be there because we forgot they existed)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; no prob to remove it, i think it is handy, logical  and helps to at least one project member and most likely to others (even ones in denial).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use it to package OMPI into MOFED for debian.
</span><br>
<span class="quotelev1">&gt; Let me know if it helps or we should still remove it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 7, 2013 at 5:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I'm sorry, but I just don't believe this belongs in our code base. If you want to create Debian packages (and I don't understand why), then do so in your own branch of the repo and maintain this stuff there. It just doesn't belong in our shared repository.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please remove it, or explain why this should be here.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2013, at 6:19 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2013-11-07 09:19:27 EST (Thu, 07 Nov 2013)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 29633
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29633">https://svn.open-mpi.org/trac/ompi/changeset/29633</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Move debian/ into contrib
</span><br>
<span class="quotelev2">&gt; &gt; Refs: #3887
</span><br>
<span class="quotelev2">&gt; &gt; reviewer=ompi-rm1.7
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/compile_debian_mlnx_example.in
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/changelog.in
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/compat
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/control.in
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/rules.in
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/source/
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/source/format
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/configure.ac                                      |    11 ++++++++++-
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/Makefile.am                               |     2 ++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/compile_debian_mlnx_example.in |    15 +++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/changelog.in            |     5 +++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/compat                  |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/control.in              |    15 +++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/rules.in                |    17 +++++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/debian/source/format           |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   8 files changed, 66 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/configure.ac        Thu Nov  7 04:28:43 2013        (r29632)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/configure.ac        2013-11-07 09:19:27 EST (Thu, 07 Nov 2013)      (r29633)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1342,6 +1342,12 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     contrib/Makefile
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +    contrib/dist/linux/compile_debian_mlnx_example
</span><br>
<span class="quotelev2">&gt; &gt; +    contrib/dist/linux/debian/changelog
</span><br>
<span class="quotelev2">&gt; &gt; +    contrib/dist/linux/debian/rules
</span><br>
<span class="quotelev2">&gt; &gt; +    contrib/dist/linux/debian/control
</span><br>
<span class="quotelev2">&gt; &gt; +    contrib/dist/linux/debian/copyright:LICENSE
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     test/Makefile
</span><br>
<span class="quotelev2">&gt; &gt;     test/event/Makefile
</span><br>
<span class="quotelev2">&gt; &gt;     test/asm/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1350,7 +1356,10 @@
</span><br>
<span class="quotelev2">&gt; &gt;     test/support/Makefile
</span><br>
<span class="quotelev2">&gt; &gt;     test/threads/Makefile
</span><br>
<span class="quotelev2">&gt; &gt;     test/util/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; -])
</span><br>
<span class="quotelev2">&gt; &gt; +],[
</span><br>
<span class="quotelev2">&gt; &gt; +    chmod +x contrib/dist/linux/debian/rules
</span><br>
<span class="quotelev2">&gt; &gt; +    chmod +x contrib/dist/linux/compile_debian_mlnx_example
</span><br>
<span class="quotelev2">&gt; &gt; +    ])
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_CONFIG_FILES
</span><br>
<span class="quotelev2">&gt; &gt; m4_ifdef([project_orte], [ORTE_CONFIG_FILES])
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/contrib/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/contrib/Makefile.am Thu Nov  7 04:28:43 2013        (r29632)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/contrib/Makefile.am 2013-11-07 09:19:27 EST (Thu, 07 Nov 2013)      (r29633)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -33,6 +33,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; EXTRA_DIST = \
</span><br>
<span class="quotelev2">&gt; &gt;       dist/make_dist_tarball \
</span><br>
<span class="quotelev2">&gt; &gt;       dist/linux/openmpi.spec \
</span><br>
<span class="quotelev2">&gt; &gt; +     dist/linux/compile_debian_mlnx_example.in \
</span><br>
<span class="quotelev2">&gt; &gt; +     dist/linux/debian \
</span><br>
<span class="quotelev2">&gt; &gt;       dist/macosx-pkg/buildpackage.sh \
</span><br>
<span class="quotelev2">&gt; &gt;       dist/macosx-pkg/ReadMe.rtf \
</span><br>
<span class="quotelev2">&gt; &gt;       platform/optimized \
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/contrib/dist/linux/compile_debian_mlnx_example.in
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/contrib/dist/linux/compile_debian_mlnx_example.in   2013-11-07 09:19:27 EST (Thu, 07 Nov 2013)      (r29633)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,15 @@
</span><br>
<span class="quotelev2">&gt; &gt; +INSTALL_DIR=${INSTALL_DIR:-/usr/mpi/gcc}
</span><br>
<span class="quotelev2">&gt; &gt; +PREFIX=${INSTALL_DIR}/openmpi-_at_OMPI_MAJOR_VERSION_at_.@OMPI_MINOR_VERSION_at_.@OMPI_RELEASE_VERSION@
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +MXM_PATH=${MXM_PATH:-/opt/mellanox/mxm}
</span><br>
<span class="quotelev2">&gt; &gt; +FCA_PATH=${FCA_PATH:-/opt/mellanox/fca}
</span><br>
<span class="quotelev2">&gt; &gt; +KNEM_PATH=${KNEM_PATH:-/opt/knem-1.0.90mlnx2}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +[ -d $MXM_PATH ] &amp;&amp; WITH_MXM=&quot;--with-mxm=$MXM_PATH&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +[ -d $FCA_PATH ] &amp;&amp; WITH_FCA=&quot;--with-fca=$FCA_PATH&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +[ -d $KNEM_PATH ] &amp;&amp; WITH_KNEM=&quot;--with-knem=$KNEM_PATH&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +CONFIG_ARGS=${CONFIG_ARGS:-&quot;--prefix=$PREFIX --libdir=$OMPI_PREFIX/lib64 --with-platform=contrib/platform/mellanox/optimized $WITH_MXM $WITH_FCA $WITH_KNEM&quot;}
</span><br>
<span class="quotelev2">&gt; &gt; +export CONFIG_ARGS
</span><br>
<span class="quotelev2">&gt; &gt; +cp -a contrib/dist/linux/debian .
</span><br>
<span class="quotelev2">&gt; &gt; +dpkg-buildpackage -us -uc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/contrib/dist/linux/debian/changelog.in
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/contrib/dist/linux/debian/changelog.in      2013-11-07 09:19:27 EST (Thu, 07 Nov 2013)      (r29633)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,5 @@
</span><br>
<span class="quotelev2">&gt; &gt; +openmpi (@OMPI_MAJOR_VERSION_at_.@OMPI_MINOR_VERSION_at_.@OMPI_RELEASE_VERSION@) unstable; urgency=low
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +  * Initial release.
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; + -- Aleksey Senin &lt;alekseys_at_[hidden]&gt;  Thu, 02 May 2013 10:55:55 +0300
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/contrib/dist/linux/debian/compat
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/contrib/dist/linux/debian/compat    2013-11-07 09:19:27 EST (Thu, 07 Nov 2013)      (r29633)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1 @@
</span><br>
<span class="quotelev2">&gt; &gt; +8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/contrib/dist/linux/debian/control.in
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/contrib/dist/linux/debian/control.in        2013-11-07 09:19:27 EST (Thu, 07 Nov 2013)      (r29633)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,15 @@
</span><br>
<span class="quotelev2">&gt; &gt; +Source: openmpi
</span><br>
<span class="quotelev2">&gt; &gt; +Section: net
</span><br>
<span class="quotelev2">&gt; &gt; +Priority: extra
</span><br>
<span class="quotelev2">&gt; &gt; +Homepage: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt; +Maintainer:  <a href="http://www.open-mpi.org">http://www.open-mpi.org</a>
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +Package: openmpi
</span><br>
<span class="quotelev2">&gt; &gt; +Depends: ${shlibs:Depends}, ${misc:Depends}
</span><br>
<span class="quotelev2">&gt; &gt; +Architecture: all
</span><br>
<span class="quotelev2">&gt; &gt; +Description: Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; + Open MPI is a project combining technologies and resources from
</span><br>
<span class="quotelev2">&gt; &gt; + several other projects (FT-MPI, LA-MPI, LAM/MPI, and PACX-MPI) in
</span><br>
<span class="quotelev2">&gt; &gt; + order to build the best MPI library available.
</span><br>
<span class="quotelev2">&gt; &gt; + This package contains all the tools necessary to compile, link, and run
</span><br>
<span class="quotelev2">&gt; &gt; + Open MPI jobs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/contrib/dist/linux/debian/rules.in
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/contrib/dist/linux/debian/rules.in  2013-11-07 09:19:27 EST (Thu, 07 Nov 2013)      (r29633)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,17 @@
</span><br>
<span class="quotelev2">&gt; &gt; +#!/usr/bin/make -f
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# export DH_VERBOSE=1
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +DPKG_EXPORT_BUILDFLAGS = 1
</span><br>
<span class="quotelev2">&gt; &gt; +include /usr/share/dpkg/buildflags.mk
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +%:
</span><br>
<span class="quotelev2">&gt; &gt; +     dh $@ --parallel
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +override_dh_auto_clean:
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +override_dh_auto_configure:
</span><br>
<span class="quotelev2">&gt; &gt; +     dh_auto_configure -- $(CONFIG_ARGS)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +override_dh_auto_test:
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/contrib/dist/linux/debian/source/format
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/contrib/dist/linux/debian/source/format     2013-11-07 09:19:27 EST (Thu, 07 Nov 2013)      (r29633)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1 @@
</span><br>
<span class="quotelev2">&gt; &gt; +3.0 (native)
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source"</a>
<li><strong>Previous message:</strong> <a href="13222.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>In reply to:</strong> <a href="13222.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source"</a>
<li><strong>Reply:</strong> <a href="13224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source"</a>
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
