<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 18 16:54:37 2006" -->
<!-- isoreceived="20060118215437" -->
<!-- sent="Wed, 18 Jan 2006 16:54:36 -0500" -->
<!-- isosent="20060118215436" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ompi_get_version" -->
<!-- id="7D74F8A9-56C0-4A52-B021-D3D426C19C35_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060118182216.GD3550_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-18 16:54:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0692.php">Ralf Wildenhues: "Re:  Path detection patch"</a>
<li><strong>Previous message:</strong> <a href="0690.php">George Bosilca: "Path detection patch"</a>
<li><strong>In reply to:</strong> <a href="0687.php">Ralf Wildenhues: "ompi_get_version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0706.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Maybe reply:</strong> <a href="0706.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the patch - I'm going to try to grok it and then commit it  
<br>
this evening.
<br>
<p>Brian
<br>
<p><p>On Jan 18, 2006, at 1:22 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Proposed below is a patch to remove the redundant instance of the
</span><br>
<span class="quotelev1">&gt; version algorithm, together with some cleanup (for unification of
</span><br>
<span class="quotelev1">&gt; the two algorithms, which have diverged a little) and a micro bit
</span><br>
<span class="quotelev1">&gt; more efficiency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One could add a rebuilding rule to config/Makefile.am, if you think  
</span><br>
<span class="quotelev1">&gt; it's
</span><br>
<span class="quotelev1">&gt; useful, just as Automake adds them for 'configure' and Makefiles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you apply this, you should add config/ompi_get_version.m4sh to svn,
</span><br>
<span class="quotelev1">&gt; and remove config/ompi_get_version.sh, as it's now a generated file.
</span><br>
<span class="quotelev1">&gt; The latter should still be distributed so users don't need autom4te
</span><br>
<span class="quotelev1">&gt; (done in patch below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case ompi_get_version.sh may be used in other configure.ac files  
</span><br>
<span class="quotelev1">&gt; than
</span><br>
<span class="quotelev1">&gt; the toplevel one, the script should be generated before autoconf is  
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * config/ompi_get_version.m4sh: New (distributed) file, acts as  
</span><br>
<span class="quotelev1">&gt; input to
</span><br>
<span class="quotelev1">&gt; ompi_get_version.sh.  Common functionality factored in
</span><br>
<span class="quotelev1">&gt; ompi_get_version.m4, generation done by autom4te in autogen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- /dev/null	1970-01-01 12:00:00.000000000 +0000
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_get_version.m4sh	2006-01-18 20:57:14.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,98 @@
</span><br>
<span class="quotelev1">&gt; +m4_define([_m4_divert(SCRIPT)], 100)
</span><br>
<span class="quotelev1">&gt; +m4_divert_push([SCRIPT])dnl
</span><br>
<span class="quotelev1">&gt; +#!/bin/sh
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# ompi_get_version is created from ompi_get_version.m4 and  
</span><br>
<span class="quotelev1">&gt; ompi_get_version.m4sh.
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and  
</span><br>
<span class="quotelev1">&gt; Indiana
</span><br>
<span class="quotelev1">&gt; +#                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 The University of Tennessee and The  
</span><br>
<span class="quotelev1">&gt; University
</span><br>
<span class="quotelev1">&gt; +#                         of Tennessee Research Foundation.  All  
</span><br>
<span class="quotelev1">&gt; rights
</span><br>
<span class="quotelev1">&gt; +#                         reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 High Performance Computing Center  
</span><br>
<span class="quotelev1">&gt; Stuttgart,
</span><br>
<span class="quotelev1">&gt; +#                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# $HEADER$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +m4_include([ompi_get_version.m4])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +srcfile=&quot;$1&quot;
</span><br>
<span class="quotelev1">&gt; +option=&quot;$2&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +case &quot;$option&quot; in
</span><br>
<span class="quotelev1">&gt; +    # svnversion can take a while to run.  If we don't need it,  
</span><br>
<span class="quotelev1">&gt; don't run it.
</span><br>
<span class="quotelev1">&gt; +    --major|--minor|--release|--greek|--base|--help)
</span><br>
<span class="quotelev1">&gt; +        gv_need_svn=0
</span><br>
<span class="quotelev1">&gt; +        ;;
</span><br>
<span class="quotelev1">&gt; +    *)
</span><br>
<span class="quotelev1">&gt; +        gv_need_svn=1
</span><br>
<span class="quotelev1">&gt; +esac
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +if test -z &quot;$srcfile&quot;; then
</span><br>
<span class="quotelev1">&gt; +    option=&quot;--help&quot;
</span><br>
<span class="quotelev1">&gt; +else
</span><br>
<span class="quotelev1">&gt; +    OMPI_GET_VERSION([$srcfile],[OMPI])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if test &quot;$option&quot; = &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt; +	option=&quot;--full&quot;
</span><br>
<span class="quotelev1">&gt; +    fi
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +case &quot;$option&quot; in
</span><br>
<span class="quotelev1">&gt; +    --full|-v|--version)
</span><br>
<span class="quotelev1">&gt; +	echo $OMPI_VERSION
</span><br>
<span class="quotelev1">&gt; +	;;
</span><br>
<span class="quotelev1">&gt; +    --major)
</span><br>
<span class="quotelev1">&gt; +	echo $OMPI_MAJOR_VERSION
</span><br>
<span class="quotelev1">&gt; +	;;
</span><br>
<span class="quotelev1">&gt; +    --minor)
</span><br>
<span class="quotelev1">&gt; +	echo $OMPI_MINOR_VERSION
</span><br>
<span class="quotelev1">&gt; +	;;
</span><br>
<span class="quotelev1">&gt; +    --release)
</span><br>
<span class="quotelev1">&gt; +	echo $OMPI_RELEASE_VERSION
</span><br>
<span class="quotelev1">&gt; +	;;
</span><br>
<span class="quotelev1">&gt; +    --greek)
</span><br>
<span class="quotelev1">&gt; +	echo $OMPI_GREEK_VERSION
</span><br>
<span class="quotelev1">&gt; +	;;
</span><br>
<span class="quotelev1">&gt; +    --svn)
</span><br>
<span class="quotelev1">&gt; +	echo $OMPI_SVN_R
</span><br>
<span class="quotelev1">&gt; +	;;
</span><br>
<span class="quotelev1">&gt; +    --base)
</span><br>
<span class="quotelev1">&gt; +        echo $OMPI_BASE_VERSION
</span><br>
<span class="quotelev1">&gt; +        ;;
</span><br>
<span class="quotelev1">&gt; +    --all)
</span><br>
<span class="quotelev1">&gt; +        echo ${OMPI_VERSION} ${OMPI_MAJOR_VERSION} $ 
</span><br>
<span class="quotelev1">&gt; {OMPI_MINOR_VERSION} ${OMPI_RELEASE_VERSION} ${OMPI_GREEK_VERSION} $ 
</span><br>
<span class="quotelev1">&gt; {OMPI_SVN_R}
</span><br>
<span class="quotelev1">&gt; +        ;;
</span><br>
<span class="quotelev1">&gt; +    -h|--help)
</span><br>
<span class="quotelev1">&gt; +	cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; +$0 &lt;srcfile&gt; [&lt;option&gt;]
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;srcfile&gt; - Text version file
</span><br>
<span class="quotelev1">&gt; +&lt;option&gt;  - One of:
</span><br>
<span class="quotelev1">&gt; +    --full    - Full version number
</span><br>
<span class="quotelev1">&gt; +    --major   - Major version number
</span><br>
<span class="quotelev1">&gt; +    --minor   - Minor version number
</span><br>
<span class="quotelev1">&gt; +    --release - Release version number
</span><br>
<span class="quotelev1">&gt; +    --greek   - Greek (alpha, beta, etc) version number
</span><br>
<span class="quotelev1">&gt; +    --svn     - Subversion repository number
</span><br>
<span class="quotelev1">&gt; +    --all     - Show all version numbers, separated by :
</span><br>
<span class="quotelev1">&gt; +    --base    - Show base version number (no svn number)
</span><br>
<span class="quotelev1">&gt; +    --help    - This message
</span><br>
<span class="quotelev1">&gt; +EOF
</span><br>
<span class="quotelev1">&gt; +        ;;
</span><br>
<span class="quotelev1">&gt; +    *)
</span><br>
<span class="quotelev1">&gt; +        echo &quot;Unrecognized option $option.  Run $0 --help for  
</span><br>
<span class="quotelev1">&gt; options&quot;
</span><br>
<span class="quotelev1">&gt; +        ;;
</span><br>
<span class="quotelev1">&gt; +esac
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# All done
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +exit 0
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_get_version.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_get_version.m4	(revision 8727)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_get_version.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -18,32 +18,30 @@
</span><br>
<span class="quotelev1">&gt;  dnl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  dnl
</span><br>
<span class="quotelev1">&gt; -dnl This file is almost identical in functionality to
</span><br>
<span class="quotelev1">&gt; -dnl ompi_get_version.sh.  It is unfortunate that we have to  
</span><br>
<span class="quotelev1">&gt; duplicate code,
</span><br>
<span class="quotelev1">&gt; -dnl but it is really the only what that I can think to do it.  :- 
</span><br>
<span class="quotelev1">&gt; ( Hence,
</span><br>
<span class="quotelev1">&gt; -dnl if you change the logic here for determining version numbers,  
</span><br>
<span class="quotelev1">&gt; YOU MUST
</span><br>
<span class="quotelev1">&gt; -dnl ALSO CHANGE IT IN ompi_get_version.sh!!
</span><br>
<span class="quotelev1">&gt; -dnl
</span><br>
<span class="quotelev1">&gt; +dnl This file is also used as input to ompi_get_version.sh.
</span><br>
<span class="quotelev1">&gt; +dnl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -AC_DEFUN([OMPI_GET_VERSION],[
</span><br>
<span class="quotelev1">&gt; +m4_define([OMPI_GET_VERSION],[
</span><br>
<span class="quotelev1">&gt;  gv_ver_file=&quot;$1&quot;
</span><br>
<span class="quotelev1">&gt;  gv_prefix=&quot;$2&quot;
</span><br>
<span class="quotelev1">&gt; +: ${gv_need_svn=0}
</span><br>
<span class="quotelev1">&gt; +: ${srcdir=.}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  dnl quote eval to suppress macro expansion with non-GNU m4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -gv_run() {
</span><br>
<span class="quotelev1">&gt; -    str=&quot;${gv_prefix}_${2}=\$gv_${1}&quot;
</span><br>
<span class="quotelev1">&gt; -   [eval] $str
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -if test -n &quot;$gv_ver_file&quot; -a -f &quot;$gv_ver_file&quot;; then
</span><br>
<span class="quotelev1">&gt; -    gv_major_version=&quot;`egrep '^major=' $gv_ver_file | cut -d= -f2`&quot;
</span><br>
<span class="quotelev1">&gt; -    gv_minor_version=&quot;`egrep '^minor=' $gv_ver_file | cut -d= -f2`&quot;
</span><br>
<span class="quotelev1">&gt; -    gv_release_version=&quot;`egrep '^release=' $gv_ver_file | cut -d= - 
</span><br>
<span class="quotelev1">&gt; f2`&quot;
</span><br>
<span class="quotelev1">&gt; -    gv_greek_version=&quot;`egrep '^greek=' $gv_ver_file | cut -d= -f2`&quot;
</span><br>
<span class="quotelev1">&gt; -    gv_want_svn=&quot;`egrep '^want_svn=' $gv_ver_file | cut -d= -f2`&quot;
</span><br>
<span class="quotelev1">&gt; -    gv_svn_r=&quot;`egrep '^svn_r=' $gv_ver_file | cut -d= -f2`&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +if test -n &quot;$gv_ver_file&quot; &amp;&amp; test -f &quot;$gv_ver_file&quot;; then
</span><br>
<span class="quotelev1">&gt; +    [eval] &quot;`sed -n \&quot;\
</span><br>
<span class="quotelev1">&gt; +	t clear
</span><br>
<span class="quotelev1">&gt; +	: clear
</span><br>
<span class="quotelev1">&gt; +	s/^major/gv_&amp;_version/
</span><br>
<span class="quotelev1">&gt; +	s/^minor/gv_&amp;_version/
</span><br>
<span class="quotelev1">&gt; +	s/^release/gv_&amp;_version/
</span><br>
<span class="quotelev1">&gt; +	s/^greek/gv_&amp;_version/
</span><br>
<span class="quotelev1">&gt; +	s/^want_svn/gv_&amp;/
</span><br>
<span class="quotelev1">&gt; +	s/^svn_r/gv_&amp;/
</span><br>
<span class="quotelev1">&gt; +	T
</span><br>
<span class="quotelev1">&gt; +	p\&quot; &lt; \&quot;\$gv_ver_file\&quot;`&quot;
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt;      if test -n &quot;$gv_release_version&quot; -a &quot;$gv_release_version&quot; !=  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;; then
</span><br>
<span class="quotelev1">&gt;  	gv_full_version=&quot;$gv_major_version.$gv_minor_version. 
</span><br>
<span class="quotelev1">&gt; $gv_release_version&quot;
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt; @@ -52,12 +50,14 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      gv_full_version=&quot;${gv_full_version}${gv_greek_version}&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if test &quot;$gv_want_svn&quot; = &quot;1&quot;; then
</span><br>
<span class="quotelev1">&gt; -        if test &quot;$gv_svn_r&quot; = &quot;-1&quot;; then
</span><br>
<span class="quotelev1">&gt; +    gv_base_version=$gv_full_version
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if test &quot;$gv_want_svn&quot; = 1 &amp;&amp; test &quot;$gv_need_svn&quot; = 1; then
</span><br>
<span class="quotelev1">&gt; +        if test &quot;$gv_svn_r&quot; = -1; then
</span><br>
<span class="quotelev1">&gt;              if test -d &quot;$srcdir/.svn&quot;; then
</span><br>
<span class="quotelev1">&gt;                  ver=r`svnversion &quot;$srcdir&quot;`
</span><br>
<span class="quotelev1">&gt;                  # make sure svnversion worked
</span><br>
<span class="quotelev1">&gt; -                if test &quot;$?&quot; != &quot;0&quot; ; then
</span><br>
<span class="quotelev1">&gt; +                if test &quot;$?&quot; != 0 ; then
</span><br>
<span class="quotelev1">&gt;                      ver=svn`date '+%m%d%Y'`
</span><br>
<span class="quotelev1">&gt;                  fi
</span><br>
<span class="quotelev1">&gt;              else
</span><br>
<span class="quotelev1">&gt; @@ -69,14 +69,14 @@
</span><br>
<span class="quotelev1">&gt;      fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # Set the values
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    gv_run full_version    VERSION
</span><br>
<span class="quotelev1">&gt; -    gv_run major_version   MAJOR_VERSION
</span><br>
<span class="quotelev1">&gt; -    gv_run minor_version   MINOR_VERSION
</span><br>
<span class="quotelev1">&gt; -    gv_run release_version RELEASE_VERSION
</span><br>
<span class="quotelev1">&gt; -    gv_run greek_version   GREEK_VERSION
</span><br>
<span class="quotelev1">&gt; -    gv_run want_svn        WANT_SVN
</span><br>
<span class="quotelev1">&gt; -    gv_run svn_r           SVN_R
</span><br>
<span class="quotelev1">&gt; +    [eval] &quot;${gv_prefix}_VERSION=\$gv_full_version
</span><br>
<span class="quotelev1">&gt; +	    ${gv_prefix}_BASE_VERSION=\$gv_base_version
</span><br>
<span class="quotelev1">&gt; +            ${gv_prefix}_MAJOR_VERSION=\$gv_major_version
</span><br>
<span class="quotelev1">&gt; +            ${gv_prefix}_MINOR_VERSION=\$gv_minor_version
</span><br>
<span class="quotelev1">&gt; +            ${gv_prefix}_RELEASE_VERSION=\$gv_release_version
</span><br>
<span class="quotelev1">&gt; +            ${gv_prefix}_GREEK_VERSION=\$gv_greek_version
</span><br>
<span class="quotelev1">&gt; +            ${gv_prefix}_WANT_SVN=\$gv_want_svn
</span><br>
<span class="quotelev1">&gt; +            ${gv_prefix}_SVN_R=\$gv_svn_r&quot;
</span><br>
<span class="quotelev1">&gt;  fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # Clean up
</span><br>
<span class="quotelev1">&gt; Index: config/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/Makefile.am	(revision 8727)
</span><br>
<span class="quotelev1">&gt; +++ config/Makefile.am	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -49,6 +49,7 @@
</span><br>
<span class="quotelev1">&gt;          ompi_configure_options.m4 \
</span><br>
<span class="quotelev1">&gt;          ompi_functions.m4 \
</span><br>
<span class="quotelev1">&gt;          ompi_get_version.m4 \
</span><br>
<span class="quotelev1">&gt; +        ompi_get_version.m4sh \
</span><br>
<span class="quotelev1">&gt;          ompi_get_version.sh \
</span><br>
<span class="quotelev1">&gt;          ompi_make_stripped_flags.m4 \
</span><br>
<span class="quotelev1">&gt;          ompi_mca.m4 \
</span><br>
<span class="quotelev1">&gt; Index: autogen.sh
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- autogen.sh	(revision 8727)
</span><br>
<span class="quotelev1">&gt; +++ autogen.sh	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -40,6 +40,10 @@
</span><br>
<span class="quotelev1">&gt;  if test ! -z &quot;$AUTOCONF&quot;; then
</span><br>
<span class="quotelev1">&gt;      ompi_autoconf_search=&quot;$AUTOCONF&quot;
</span><br>
<span class="quotelev1">&gt;  fi
</span><br>
<span class="quotelev1">&gt; +ompi_autom4te_search=&quot;autom4te&quot;
</span><br>
<span class="quotelev1">&gt; +if test ! -z &quot;$AUTOM4TE&quot;; then
</span><br>
<span class="quotelev1">&gt; +    ompi_autom4te_search=&quot;$AUTOM4TE&quot;
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt;  ompi_libtoolize_search=&quot;libtoolize;glibtoolize&quot;
</span><br>
<span class="quotelev1">&gt;  if test ! -z &quot;$LIBTOOLIZE&quot;; then
</span><br>
<span class="quotelev1">&gt;      ompi_libtoolize_search=&quot;$LIBTOOLIZE&quot;
</span><br>
<span class="quotelev1">&gt; @@ -375,6 +379,12 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      echo &quot;*** Running GNU tools&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    if test -f include/mpi.h.in; then
</span><br>
<span class="quotelev1">&gt; +	cd config
</span><br>
<span class="quotelev1">&gt; +	run_and_check $ompi_autom4te --language=m4sh  
</span><br>
<span class="quotelev1">&gt; ompi_get_version.m4sh -o ompi_get_version.sh
</span><br>
<span class="quotelev1">&gt; +	cd ..
</span><br>
<span class="quotelev1">&gt; +    fi
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      run_and_check $ompi_aclocal
</span><br>
<span class="quotelev1">&gt;      if test &quot;`grep AC_CONFIG_HEADER $file`&quot; != &quot;&quot; -o \
</span><br>
<span class="quotelev1">&gt;  	&quot;`grep AM_CONFIG_HEADER $file`&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt; @@ -1088,6 +1098,7 @@
</span><br>
<span class="quotelev1">&gt;  fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # find all the apps we are going to run
</span><br>
<span class="quotelev1">&gt; +find_app &quot;autom4te&quot;
</span><br>
<span class="quotelev1">&gt;  find_app &quot;aclocal&quot;
</span><br>
<span class="quotelev1">&gt;  find_app &quot;autoheader&quot;
</span><br>
<span class="quotelev1">&gt;  find_app &quot;autoconf&quot;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0692.php">Ralf Wildenhues: "Re:  Path detection patch"</a>
<li><strong>Previous message:</strong> <a href="0690.php">George Bosilca: "Path detection patch"</a>
<li><strong>In reply to:</strong> <a href="0687.php">Ralf Wildenhues: "ompi_get_version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0706.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Maybe reply:</strong> <a href="0706.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
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
