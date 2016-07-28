<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 17:36:31 2012" -->
<!-- isoreceived="20120220223631" -->
<!-- sent="Mon, 20 Feb 2012 15:36:21 -0700" -->
<!-- isosent="20120220223621" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966" -->
<!-- id="1BB33CAD-CF42-4642-8866-68688DECDAF5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201202201553.q1KFrLi1006891_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 17:36:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10511.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10509.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10512.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10512.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10513.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10523.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid this commit breaks the ability to build from a tarball. I created a tarball from the trunk and then did a configure followed by &quot;make clean&quot;. The make command failed to execute because it could not &quot;make clean&quot; in the mca/fbtl/posix directory as there is no Makefile in it.
<br>
<p>I checked and the Makefile -is- being created when built in an svn checkout, but is -not- being created when built from tarball. This was done on a Mac.
<br>
<p><p>On Feb 20, 2012, at 8:53 AM, jsquyres_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2012-02-20 10:53:20 EST (Mon, 20 Feb 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 25966
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25966">https://svn.open-mpi.org/trac/ompi/changeset/25966</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Ensure that we have aio.h before trying to compile this component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/fbtl/posix/configure.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/ompi/mca/fbtl/posix/configure.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/fbtl/posix/configure.m4	2012-02-20 10:53:20 EST (Mon, 20 Feb 2012)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,33 @@
</span><br>
<span class="quotelev1">&gt; +# -*- shell-script -*-
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt; +#                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; +#                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; +#                         reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev1">&gt; +#                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2012 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2010      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2008-2011 University of Houston. All rights reserved.
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
<span class="quotelev1">&gt; +# MCA_fbtl_posix_CONFIG(action-if-can-compile, 
</span><br>
<span class="quotelev1">&gt; +#                        [action-if-cant-compile])
</span><br>
<span class="quotelev1">&gt; +# ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +AC_DEFUN([MCA_ompi_fbtl_posix_CONFIG],[
</span><br>
<span class="quotelev1">&gt; +    AC_CHECK_HEADER([aio.h],
</span><br>
<span class="quotelev1">&gt; +                    [fbtl_posix_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; +                    [fbtl_posix_happy=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$fbtl_posix_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; +          [$1],
</span><br>
<span class="quotelev1">&gt; +          [$2])
</span><br>
<span class="quotelev1">&gt; +])dnl
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
<li><strong>Next message:</strong> <a href="10511.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10509.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10512.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10512.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10513.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10523.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
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
