<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib	contrib/dist/linux debian debian/source";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 12:35:23 2013" -->
<!-- isoreceived="20131106173523" -->
<!-- sent="Wed, 6 Nov 2013 17:35:21 +0000" -->
<!-- isosent="20131106173521" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib	contrib/dist/linux debian debian/source" -->
<!-- id="839F9587-C9A4-4B45-A8AE-71D236732677_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131106125028.DB4B1160EE2_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib	contrib/dist/linux debian debian/source<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 12:35:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13207.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>Previous message:</strong> <a href="13205.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13209.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>Reply:</strong> <a href="13209.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>Why not put these packaging files in &quot;/contrib/dist/...&quot; in SVN and then symlink them to &quot;/debian&quot; as a step in your build script?  Top level names are (somewhat) precious and should not be added casually.
<br>
<p>-Dave
<br>
<p>On Nov 6, 2013, at 4:50 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29615
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29615">https://svn.open-mpi.org/trac/ompi/changeset/29615</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; packaging: add support for debian + example
</span><br>
<span class="quotelev1">&gt; unfortunately the debian packaging files should reside in the root folder
</span><br>
<span class="quotelev1">&gt; and cannot be placed under contrib/dist/... tree.
</span><br>
<span class="quotelev1">&gt; developed by Aleksey, reviewed by miked
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.4:reviewer=ompi-gk1.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/contrib/dist/linux/compile_debian_mlnx_example.in
</span><br>
<span class="quotelev1">&gt;   trunk/debian/
</span><br>
<span class="quotelev1">&gt;   trunk/debian/changelog.in
</span><br>
<span class="quotelev1">&gt;   trunk/debian/compat
</span><br>
<span class="quotelev1">&gt;   trunk/debian/control.in
</span><br>
<span class="quotelev1">&gt;   trunk/debian/rules.in
</span><br>
<span class="quotelev1">&gt;   trunk/debian/source/
</span><br>
<span class="quotelev1">&gt;   trunk/debian/source/format
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/Makefile.am                                       |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/configure.ac                                      |    11 ++++++++++-                             
</span><br>
<span class="quotelev1">&gt;   trunk/contrib/Makefile.am                               |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/contrib/dist/linux/compile_debian_mlnx_example.in |    27 +++++++++++++++++++++++++++             
</span><br>
<span class="quotelev1">&gt;   trunk/debian/changelog.in                               |     5 +++++                                   
</span><br>
<span class="quotelev1">&gt;   trunk/debian/compat                                     |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/debian/control.in                                 |    18 ++++++++++++++++++                      
</span><br>
<span class="quotelev1">&gt;   trunk/debian/rules.in                                   |    17 +++++++++++++++++                       
</span><br>
<span class="quotelev1">&gt;   trunk/debian/source/format                              |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   9 files changed, 81 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/Makefile.am	Wed Nov  6 01:19:03 2013	(r29614)
</span><br>
<span class="quotelev1">&gt; +++ trunk/Makefile.am	2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)	(r29615)
</span><br>
<span class="quotelev1">&gt; @@ -20,7 +20,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SUBDIRS = config contrib $(MCA_PROJECT_SUBDIRS) test
</span><br>
<span class="quotelev1">&gt; EXTRA_DIST = README INSTALL VERSION Doxyfile LICENSE autogen.pl autogen.sh \
</span><br>
<span class="quotelev1">&gt; -             README.JAVA.txt
</span><br>
<span class="quotelev1">&gt; +             README.JAVA.txt debian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; include examples/Makefile.include
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/configure.ac	Wed Nov  6 01:19:03 2013	(r29614)
</span><br>
<span class="quotelev1">&gt; +++ trunk/configure.ac	2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)	(r29615)
</span><br>
<span class="quotelev1">&gt; @@ -1341,6 +1341,11 @@
</span><br>
<span class="quotelev1">&gt;     config/Makefile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     contrib/Makefile
</span><br>
<span class="quotelev1">&gt; +    contrib/dist/linux/compile_debian_mlnx_example
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    debian/changelog
</span><br>
<span class="quotelev1">&gt; +    debian/rules
</span><br>
<span class="quotelev1">&gt; +    debian/control
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     test/Makefile
</span><br>
<span class="quotelev1">&gt;     test/event/Makefile
</span><br>
<span class="quotelev1">&gt; @@ -1350,7 +1355,11 @@
</span><br>
<span class="quotelev1">&gt;     test/support/Makefile
</span><br>
<span class="quotelev1">&gt;     test/threads/Makefile
</span><br>
<span class="quotelev1">&gt;     test/util/Makefile
</span><br>
<span class="quotelev1">&gt; -])
</span><br>
<span class="quotelev1">&gt; +],[
</span><br>
<span class="quotelev1">&gt; +    chmod +x debian/rules
</span><br>
<span class="quotelev1">&gt; +    chmod +x contrib/dist/linux/compile_debian_mlnx_example
</span><br>
<span class="quotelev1">&gt; +    cp LICENSE debian/copyright
</span><br>
<span class="quotelev1">&gt; +    ])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OPAL_CONFIG_FILES
</span><br>
<span class="quotelev1">&gt; m4_ifdef([project_orte], [ORTE_CONFIG_FILES])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/contrib/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/contrib/Makefile.am	Wed Nov  6 01:19:03 2013	(r29614)
</span><br>
<span class="quotelev1">&gt; +++ trunk/contrib/Makefile.am	2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)	(r29615)
</span><br>
<span class="quotelev1">&gt; @@ -33,6 +33,7 @@
</span><br>
<span class="quotelev1">&gt; EXTRA_DIST = \
</span><br>
<span class="quotelev1">&gt; 	dist/make_dist_tarball \
</span><br>
<span class="quotelev1">&gt; 	dist/linux/openmpi.spec \
</span><br>
<span class="quotelev1">&gt; +	dist/linux/compile_debian_mlnx_example.in \
</span><br>
<span class="quotelev1">&gt; 	dist/macosx-pkg/buildpackage.sh \
</span><br>
<span class="quotelev1">&gt; 	dist/macosx-pkg/ReadMe.rtf \
</span><br>
<span class="quotelev1">&gt; 	platform/optimized \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/contrib/dist/linux/compile_debian_mlnx_example.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- /dev/null	00:00:00 1970	(empty, because file is newly added)
</span><br>
<span class="quotelev1">&gt; +++ trunk/contrib/dist/linux/compile_debian_mlnx_example.in	2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)	(r29615)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,27 @@
</span><br>
<span class="quotelev1">&gt; +INSTALL_DIR=${INSTALL_DIR:-/usr/mpi/gcc}
</span><br>
<span class="quotelev1">&gt; +PREFIX=${INSTALL_DIR}/openmpi-_at_OMPI_MAJOR_VERSION_at_.@OMPI_MINOR_VERSION_at_.@OMPI_RELEASE_VERSION@
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +MAINTEINER=${MAINTEINER:-&quot;Mellanox Ltd. &lt;support_at_[hidden]&gt;&quot;}
</span><br>
<span class="quotelev1">&gt; +UPLOADER=${UPLOADER:-&quot;$MAINTEINER&quot;}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +MXM_PATH=${MXM_PATH:-/opt/mellanox/mxm}
</span><br>
<span class="quotelev1">&gt; +FCA_PATH=${FCA_PATH:-/opt/mellanox/fca}
</span><br>
<span class="quotelev1">&gt; +KNEM_PATH=${KNEM_PATH:-/opt/knem-1.0.90mlnx2}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +[ -d $MXM_PATH ] &amp;&amp; WITH_MXM=&quot;--with-mxm=$MXM_PATH&quot;
</span><br>
<span class="quotelev1">&gt; +[ -d $FCA_PATH ] &amp;&amp; WITH_FCA=&quot;--with-fca=$FCA_PATH&quot;
</span><br>
<span class="quotelev1">&gt; +[ -d $KNEM_PATH ] &amp;&amp; WITH_KNEM=&quot;--with-knem=$KNEM_PATH&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +CONFIG_ARGS=${CONFIG_ARGS:-&quot;--prefix=$PREFIX
</span><br>
<span class="quotelev1">&gt; +    --libdir=$OMPI_PREFIX/lib64 \
</span><br>
<span class="quotelev1">&gt; +	--localstatedir=/var
</span><br>
<span class="quotelev1">&gt; +	--sharedstatedir=/var/lib
</span><br>
<span class="quotelev1">&gt; +	--infodir=/usr/share/info \
</span><br>
<span class="quotelev1">&gt; +	--with-platform=contrib/platform/mellanox/optimized  \
</span><br>
<span class="quotelev1">&gt; +	$WITH_MXM \
</span><br>
<span class="quotelev1">&gt; +	$WITH_FCA \
</span><br>
<span class="quotelev1">&gt; +	$WITH_KNEM \
</span><br>
<span class="quotelev1">&gt; +	&quot;}
</span><br>
<span class="quotelev1">&gt; +sed -ie &quot;s/XXXMAINTEINERXXX/$MAINTEINER/; s/XXXUPLOADERXXX/$UPLOADER/&quot; debian/control
</span><br>
<span class="quotelev1">&gt; +export CONFIG_ARGS
</span><br>
<span class="quotelev1">&gt; +dpkg-buildpackage -us -uc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/debian/changelog.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- /dev/null	00:00:00 1970	(empty, because file is newly added)
</span><br>
<span class="quotelev1">&gt; +++ trunk/debian/changelog.in	2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)	(r29615)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,5 @@
</span><br>
<span class="quotelev1">&gt; +openmpi (@OMPI_MAJOR_VERSION_at_.@OMPI_MINOR_VERSION_at_.@OMPI_RELEASE_VERSION@) unstable; urgency=low
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  * Initial release.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + -- Aleksey Senin &lt;alekseys_at_[hidden]&gt;  Thu, 02 May 2013 10:55:55 +0300
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/debian/compat
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- /dev/null	00:00:00 1970	(empty, because file is newly added)
</span><br>
<span class="quotelev1">&gt; +++ trunk/debian/compat	2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)	(r29615)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1 @@
</span><br>
<span class="quotelev1">&gt; +8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/debian/control.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- /dev/null	00:00:00 1970	(empty, because file is newly added)
</span><br>
<span class="quotelev1">&gt; +++ trunk/debian/control.in	2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)	(r29615)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,18 @@
</span><br>
<span class="quotelev1">&gt; +Source: openmpi
</span><br>
<span class="quotelev1">&gt; +Section: net
</span><br>
<span class="quotelev1">&gt; +Priority: extra
</span><br>
<span class="quotelev1">&gt; +Homepage: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; +Maintainer:  XXXMAINTEINERXXX
</span><br>
<span class="quotelev1">&gt; +Uploaders: XXXUPLOADERXXX
</span><br>
<span class="quotelev1">&gt; +Build-Depends: dpkg-dev (&gt;= 1.16.1~), debhelper (&gt;= 8.0.0~), libibverbs-dev (&gt;= 1.1.1), gfortran, gcc (&gt;= 4:4.1.2), chrpath, quilt, libcr-dev [amd64 armel armhf i386 powerpc], autoconf (&gt;= 2.59), automake, libtool, libltdl-dev
</span><br>
<span class="quotelev1">&gt; +Standards-Version: 3.9.3
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Package: openmpi
</span><br>
<span class="quotelev1">&gt; +Depends: ${shlibs:Depends}, ${misc:Depends}
</span><br>
<span class="quotelev1">&gt; +Architecture: amd64
</span><br>
<span class="quotelev1">&gt; +Description: Open MPI
</span><br>
<span class="quotelev1">&gt; + Open MPI is a project combining technologies and resources from
</span><br>
<span class="quotelev1">&gt; + several other projects (FT-MPI, LA-MPI, LAM/MPI, and PACX-MPI) in
</span><br>
<span class="quotelev1">&gt; + order to build the best MPI library available.
</span><br>
<span class="quotelev1">&gt; + This package contains all the tools necessary to compile, link, and run
</span><br>
<span class="quotelev1">&gt; + Open MPI jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/debian/rules.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- /dev/null	00:00:00 1970	(empty, because file is newly added)
</span><br>
<span class="quotelev1">&gt; +++ trunk/debian/rules.in	2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)	(r29615)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,17 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/bin/make -f
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# export DH_VERBOSE=1
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +DPKG_EXPORT_BUILDFLAGS = 1
</span><br>
<span class="quotelev1">&gt; +include /usr/share/dpkg/buildflags.mk
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%:
</span><br>
<span class="quotelev1">&gt; +	dh $@ --parallel
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +override_dh_auto_clean:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +override_dh_auto_configure:
</span><br>
<span class="quotelev1">&gt; +	./configure $(CONFIG_ARGS)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +override_dh_auto_test:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/debian/source/format
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- /dev/null	00:00:00 1970	(empty, because file is newly added)
</span><br>
<span class="quotelev1">&gt; +++ trunk/debian/source/format	2013-11-06 07:50:28 EST (Wed, 06 Nov 2013)	(r29615)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1 @@
</span><br>
<span class="quotelev1">&gt; +3.0 (native)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13207.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>Previous message:</strong> <a href="13205.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13209.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>Reply:</strong> <a href="13209.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
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
