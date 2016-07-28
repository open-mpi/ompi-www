<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 17:42:24 2012" -->
<!-- isoreceived="20120220224224" -->
<!-- sent="Mon, 20 Feb 2012 22:41:42 +0000" -->
<!-- isosent="20120220224142" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966" -->
<!-- id="CB6819CD.C188%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1BB33CAD-CF42-4642-8866-68688DECDAF5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 17:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10514.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10512.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>In reply to:</strong> <a href="10510.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10515.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10515.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10516.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's because Jeff forgot to copy the line:
<br>
<p>&nbsp;&nbsp;AC_CONFIG_FILES([ompi/mca/fbtl/posix/Makefile])
<br>
<p><span class="quotelev1">&gt;From whatever configure.m4 script he used as the base for his new macro :).
</span><br>
<p>Brian
<br>
<p>On 2/20/12 3:36 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I'm afraid this commit breaks the ability to build from a tarball. I
</span><br>
<span class="quotelev1">&gt;created a tarball from the trunk and then did a configure followed by
</span><br>
<span class="quotelev1">&gt;&quot;make clean&quot;. The make command failed to execute because it could not
</span><br>
<span class="quotelev1">&gt;&quot;make clean&quot; in the mca/fbtl/posix directory as there is no Makefile in
</span><br>
<span class="quotelev1">&gt;it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I checked and the Makefile -is- being created when built in an svn
</span><br>
<span class="quotelev1">&gt;checkout, but is -not- being created when built from tarball. This was
</span><br>
<span class="quotelev1">&gt;done on a Mac.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Feb 20, 2012, at 8:53 AM, jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-02-20 10:53:20 EST (Mon, 20 Feb 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 25966
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25966">https://svn.open-mpi.org/trac/ompi/changeset/25966</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Ensure that we have aio.h before trying to compile this component.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/fbtl/posix/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Added: trunk/ompi/mca/fbtl/posix/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;=========================================================================
</span><br>
<span class="quotelev2">&gt;&gt;=====
</span><br>
<span class="quotelev2">&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/fbtl/posix/configure.m4    2012-02-20 10:53:20 EST
</span><br>
<span class="quotelev2">&gt;&gt;(Mon, 20 Feb 2012)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -0,0 +1,33 @@
</span><br>
<span class="quotelev2">&gt;&gt; +# -*- shell-script -*-
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and
</span><br>
<span class="quotelev2">&gt;&gt;Indiana
</span><br>
<span class="quotelev2">&gt;&gt; +#                         University Research and Technology
</span><br>
<span class="quotelev2">&gt;&gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2004-2005 The University of Tennessee and The
</span><br>
<span class="quotelev2">&gt;&gt;University
</span><br>
<span class="quotelev2">&gt;&gt; +#                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev2">&gt;&gt; +#                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev2">&gt;&gt; +#                         University of Stuttgart.  All rights
</span><br>
<span class="quotelev2">&gt;&gt;reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2004-2012 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2010      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2008-2011 University of Houston. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; +# 
</span><br>
<span class="quotelev2">&gt;&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; +# 
</span><br>
<span class="quotelev2">&gt;&gt; +# $HEADER$
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +# MCA_fbtl_posix_CONFIG(action-if-can-compile,
</span><br>
<span class="quotelev2">&gt;&gt; +#                        [action-if-cant-compile])
</span><br>
<span class="quotelev2">&gt;&gt; +# ------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; +AC_DEFUN([MCA_ompi_fbtl_posix_CONFIG],[
</span><br>
<span class="quotelev2">&gt;&gt; +    AC_CHECK_HEADER([aio.h],
</span><br>
<span class="quotelev2">&gt;&gt; +                    [fbtl_posix_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; +                    [fbtl_posix_happy=&quot;no&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    AS_IF([test &quot;$fbtl_posix_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; +          [$1],
</span><br>
<span class="quotelev2">&gt;&gt; +          [$2])
</span><br>
<span class="quotelev2">&gt;&gt; +])dnl
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10514.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10512.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>In reply to:</strong> <a href="10510.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10515.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10515.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10516.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
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
