<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 17:08:34 2010" -->
<!-- isoreceived="20100826210834" -->
<!-- sent="Thu, 26 Aug 2010 15:08:23 -0600" -->
<!-- isosent="20100826210823" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665" -->
<!-- id="409FF9E0-C6BF-43EB-954C-E9DE9855A8B3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100826193900.GA41232_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 17:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8398.php">Paul H. Hargrove: "[OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8396.php">Samuel K. Gutierrez: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8391.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you put it in the Makefile.am EXTRA_DIST?
<br>
<p>On Aug 26, 2010, at 1:39 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; This fixes Libtool for an SVN checkout, but does not seem to get into
</span><br>
<span class="quotelev1">&gt; the nightly trunk tarball.  Why is that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Aug/25/2010 03:40:18PM, emallove_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: emallove
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2010-08-25 15:40:17 EDT (Wed, 25 Aug 2010)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 23665
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23665">https://svn.open-mpi.org/trac/ompi/changeset/23665</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Patch `ltmain.sh` in `autogen.sh` per this Libtool thread:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mail-archive.com/libtool&#64;gnu.org/msg11249.html">http://www.mail-archive.com/libtool&#64;gnu.org/msg11249.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/config/ltmain_pgi_tp.diff
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/autogen.sh |     8 ++++++++                                
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 8 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/autogen.sh	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/autogen.sh	2010-08-25 15:40:17 EDT (Wed, 25 Aug 2010)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -11,6 +11,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt; #                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2007-2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2010      Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; # Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -442,6 +443,13 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	echo &quot;** Adjusting libltdl for OMPI :-(&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +        echo &quot;   ++ patching PGI -tp bug in ltmain.sh&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +        if test -z &quot;`grep -w tp config/ltmain.sh`&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt; +            patch -N -p0 &lt; config/ltmain_pgi_tp.diff
</span><br>
<span class="quotelev2">&gt;&gt; +        else
</span><br>
<span class="quotelev2">&gt;&gt; +            echo &quot;      -- your libtool doesn't need this! yay!&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +        fi
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;         echo &quot;   ++ preopen error masking ib libltdl&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         if test -r opal/libltdl/loaders/preopen.c; then
</span><br>
<span class="quotelev2">&gt;&gt;             patch -N -p0 &lt; config/libltdl-preopen-error.diff
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Added: trunk/config/ltmain_pgi_tp.diff
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/config/ltmain_pgi_tp.diff	2010-08-25 15:40:17 EDT (Wed, 25 Aug 2010)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -0,0 +1,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; +--- config/ltmain.sh
</span><br>
<span class="quotelev2">&gt;&gt; ++++ config/ltmain.sh
</span><br>
<span class="quotelev2">&gt;&gt; +@@ -4765,7 +4765,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; +       # -p, -pg, --coverage, -fprofile-* pass through profiling flag for GCC
</span><br>
<span class="quotelev2">&gt;&gt; +       # @file GCC response files
</span><br>
<span class="quotelev2">&gt;&gt; +       -64|-mips[0-9]|-r[0-9][0-9]*|-xarch=*|-xtarget=*|+DA*|+DD*|-q*|-m*| \
</span><br>
<span class="quotelev2">&gt;&gt; +-      -t[45]*|-txscale*|-p|-pg|--coverage|-fprofile-*|-F*|@*)
</span><br>
<span class="quotelev2">&gt;&gt; ++      -t[45]*|-txscale*|-p|-pg|--coverage|-fprofile-*|-F*|@*|-tp|-tp=*)
</span><br>
<span class="quotelev2">&gt;&gt; +         func_quote_for_eval &quot;$arg&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +        arg=&quot;$func_quote_for_eval_result&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +         func_append compile_command &quot; $arg&quot;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="8398.php">Paul H. Hargrove: "[OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8396.php">Samuel K. Gutierrez: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8391.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23665"</a>
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
