<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 12:50:43 2013" -->
<!-- isoreceived="20131106175043" -->
<!-- sent="Wed, 6 Nov 2013 19:50:41 +0200" -->
<!-- isosent="20131106175041" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source" -->
<!-- id="CAAO1KyZnEy064WSKsK_frfkjsby9NAc3VWE_H9DDw+gPVkJf=g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="839F9587-C9A4-4B45-A8AE-71D236732677_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 12:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13210.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Previous message:</strong> <a href="13208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] debian/ directory"</a>
<li><strong>In reply to:</strong> <a href="13206.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib	contrib/dist/linux debian debian/source"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
this sounds like a good idea, will give it a try.
<br>
Thx
<br>
M
<br>
<p><p>On Wed, Nov 6, 2013 at 7:35 PM, Dave Goodell (dgoodell)
<br>
&lt;dgoodell_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why not put these packaging files in &quot;/contrib/dist/...&quot; in SVN and then
</span><br>
<span class="quotelev1">&gt; symlink them to &quot;/debian&quot; as a step in your build script?  Top level names
</span><br>
<span class="quotelev1">&gt; are (somewhat) precious and should not be added casually.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2013, at 4:50 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 29615
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29615">https://svn.open-mpi.org/trac/ompi/changeset/29615</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; packaging: add support for debian + example
</span><br>
<span class="quotelev2">&gt; &gt; unfortunately the debian packaging files should reside in the root folder
</span><br>
<span class="quotelev2">&gt; &gt; and cannot be placed under contrib/dist/... tree.
</span><br>
<span class="quotelev2">&gt; &gt; developed by Aleksey, reviewed by miked
</span><br>
<span class="quotelev2">&gt; &gt; cmr=v1.7.4:reviewer=ompi-gk1.7
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/compile_debian_mlnx_example.in
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/changelog.in
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/compat
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/control.in
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/rules.in
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/source/
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/source/format
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/Makefile.am                                       |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/configure.ac                                      |    11
</span><br>
<span class="quotelev1">&gt; ++++++++++-
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/Makefile.am                               |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/dist/linux/compile_debian_mlnx_example.in |    27
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/changelog.in                               |     5 +++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/compat                                     |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/control.in                                 |    18
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/rules.in                                   |    17
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/debian/source/format                              |     1 +
</span><br>
<span class="quotelev2">&gt; &gt;   9 files changed, 81 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/Makefile.am Wed Nov  6 01:19:03 2013        (r29614)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/Makefile.am 2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)
</span><br>
<span class="quotelev1">&gt;  (r29615)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -20,7 +20,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SUBDIRS = config contrib $(MCA_PROJECT_SUBDIRS) test
</span><br>
<span class="quotelev2">&gt; &gt; EXTRA_DIST = README INSTALL VERSION Doxyfile LICENSE autogen.plautogen.sh \
</span><br>
<span class="quotelev2">&gt; &gt; -             README.JAVA.txt
</span><br>
<span class="quotelev2">&gt; &gt; +             README.JAVA.txt debian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; include examples/Makefile.include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/configure.ac        Wed Nov  6 01:19:03 2013        (r29614)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/configure.ac        2013-11-06 07:50:28 EST (Wed, 06 Nov
</span><br>
<span class="quotelev1">&gt; 2013)      (r29615)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1341,6 +1341,11 @@
</span><br>
<span class="quotelev2">&gt; &gt;     config/Makefile
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     contrib/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; +    contrib/dist/linux/compile_debian_mlnx_example
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    debian/changelog
</span><br>
<span class="quotelev2">&gt; &gt; +    debian/rules
</span><br>
<span class="quotelev2">&gt; &gt; +    debian/control
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     test/Makefile
</span><br>
<span class="quotelev2">&gt; &gt;     test/event/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1350,7 +1355,11 @@
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
<span class="quotelev2">&gt; &gt; +    chmod +x debian/rules
</span><br>
<span class="quotelev2">&gt; &gt; +    chmod +x contrib/dist/linux/compile_debian_mlnx_example
</span><br>
<span class="quotelev2">&gt; &gt; +    cp LICENSE debian/copyright
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/contrib/Makefile.am Wed Nov  6 01:19:03 2013        (r29614)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/contrib/Makefile.am 2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)
</span><br>
<span class="quotelev1">&gt;      (r29615)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -33,6 +33,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; EXTRA_DIST = \
</span><br>
<span class="quotelev2">&gt; &gt;       dist/make_dist_tarball \
</span><br>
<span class="quotelev2">&gt; &gt;       dist/linux/openmpi.spec \
</span><br>
<span class="quotelev2">&gt; &gt; +     dist/linux/compile_debian_mlnx_example.in \
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/contrib/dist/linux/compile_debian_mlnx_example.in
</span><br>
<span class="quotelev1">&gt; 2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)      (r29615)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,27 @@
</span><br>
<span class="quotelev2">&gt; &gt; +INSTALL_DIR=${INSTALL_DIR:-/usr/mpi/gcc}
</span><br>
<span class="quotelev2">&gt; &gt; +PREFIX=${INSTALL_DIR}/openmpi-_at_OMPI_MAJOR_VERSION_at_.@OMPI_MINOR_VERSION@
</span><br>
<span class="quotelev1">&gt; ._at_OMPI_RELEASE_VERSION@
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +MAINTEINER=${MAINTEINER:-&quot;Mellanox Ltd. &lt;support_at_[hidden]&gt;&quot;}
</span><br>
<span class="quotelev2">&gt; &gt; +UPLOADER=${UPLOADER:-&quot;$MAINTEINER&quot;}
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
<span class="quotelev2">&gt; &gt; +CONFIG_ARGS=${CONFIG_ARGS:-&quot;--prefix=$PREFIX
</span><br>
<span class="quotelev2">&gt; &gt; +    --libdir=$OMPI_PREFIX/lib64 \
</span><br>
<span class="quotelev2">&gt; &gt; +     --localstatedir=/var
</span><br>
<span class="quotelev2">&gt; &gt; +     --sharedstatedir=/var/lib
</span><br>
<span class="quotelev2">&gt; &gt; +     --infodir=/usr/share/info \
</span><br>
<span class="quotelev2">&gt; &gt; +     --with-platform=contrib/platform/mellanox/optimized  \
</span><br>
<span class="quotelev2">&gt; &gt; +     $WITH_MXM \
</span><br>
<span class="quotelev2">&gt; &gt; +     $WITH_FCA \
</span><br>
<span class="quotelev2">&gt; &gt; +     $WITH_KNEM \
</span><br>
<span class="quotelev2">&gt; &gt; +     &quot;}
</span><br>
<span class="quotelev2">&gt; &gt; +sed -ie &quot;s/XXXMAINTEINERXXX/$MAINTEINER/; s/XXXUPLOADERXXX/$UPLOADER/&quot;
</span><br>
<span class="quotelev1">&gt; debian/control
</span><br>
<span class="quotelev2">&gt; &gt; +export CONFIG_ARGS
</span><br>
<span class="quotelev2">&gt; &gt; +dpkg-buildpackage -us -uc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/debian/changelog.in
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/debian/changelog.in 2013-11-06 07:50:28 EST (Wed, 06 Nov
</span><br>
<span class="quotelev1">&gt; 2013)      (r29615)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,5 @@
</span><br>
<span class="quotelev2">&gt; &gt; +openmpi (@OMPI_MAJOR_VERSION_at_.@OMPI_MINOR_VERSION@
</span><br>
<span class="quotelev1">&gt; ._at_OMPI_RELEASE_VERSION@) unstable; urgency=low
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +  * Initial release.
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; + -- Aleksey Senin &lt;alekseys_at_[hidden]&gt;  Thu, 02 May 2013 10:55:55
</span><br>
<span class="quotelev1">&gt; +0300
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/debian/compat
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/debian/compat       2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)
</span><br>
<span class="quotelev1">&gt;      (r29615)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1 @@
</span><br>
<span class="quotelev2">&gt; &gt; +8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/debian/control.in
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/debian/control.in   2013-11-06 07:50:28 EST (Wed, 06 Nov
</span><br>
<span class="quotelev1">&gt; 2013)      (r29615)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -0,0 +1,18 @@
</span><br>
<span class="quotelev2">&gt; &gt; +Source: openmpi
</span><br>
<span class="quotelev2">&gt; &gt; +Section: net
</span><br>
<span class="quotelev2">&gt; &gt; +Priority: extra
</span><br>
<span class="quotelev2">&gt; &gt; +Homepage: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt; +Maintainer:  XXXMAINTEINERXXX
</span><br>
<span class="quotelev2">&gt; &gt; +Uploaders: XXXUPLOADERXXX
</span><br>
<span class="quotelev2">&gt; &gt; +Build-Depends: dpkg-dev (&gt;= 1.16.1~), debhelper (&gt;= 8.0.0~),
</span><br>
<span class="quotelev1">&gt; libibverbs-dev (&gt;= 1.1.1), gfortran, gcc (&gt;= 4:4.1.2), chrpath, quilt,
</span><br>
<span class="quotelev1">&gt; libcr-dev [amd64 armel armhf i386 powerpc], autoconf (&gt;= 2.59), automake,
</span><br>
<span class="quotelev1">&gt; libtool, libltdl-dev
</span><br>
<span class="quotelev2">&gt; &gt; +Standards-Version: 3.9.3
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +Package: openmpi
</span><br>
<span class="quotelev2">&gt; &gt; +Depends: ${shlibs:Depends}, ${misc:Depends}
</span><br>
<span class="quotelev2">&gt; &gt; +Architecture: amd64
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
<span class="quotelev2">&gt; &gt; Added: trunk/debian/rules.in
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/debian/rules.in     2013-11-06 07:50:28 EST (Wed, 06 Nov
</span><br>
<span class="quotelev1">&gt; 2013)      (r29615)
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
<span class="quotelev2">&gt; &gt; +     ./configure $(CONFIG_ARGS)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +override_dh_auto_test:
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Added: trunk/debian/source/format
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- /dev/null 00:00:00 1970   (empty, because file is newly added)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/debian/source/format        2013-11-06 07:50:28 EST (Wed, 06
</span><br>
<span class="quotelev1">&gt; Nov 2013)      (r29615)
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13209/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13210.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Previous message:</strong> <a href="13208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] debian/ directory"</a>
<li><strong>In reply to:</strong> <a href="13206.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib	contrib/dist/linux debian debian/source"</a>
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
