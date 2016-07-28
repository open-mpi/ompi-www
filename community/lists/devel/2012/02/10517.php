<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 18:03:47 2012" -->
<!-- isoreceived="20120220230347" -->
<!-- sent="Mon, 20 Feb 2012 18:03:42 -0500" -->
<!-- isosent="20120220230342" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966" -->
<!-- id="173236AF-97AF-4877-BAB1-E19C86ED4B19_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DD10EBA7-D8E1-4AC6-BF3F-AFDA05603F58_at_cisco.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 18:03:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10518.php">Paul H. Hargrove: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>Previous message:</strong> <a href="10516.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>In reply to:</strong> <a href="10516.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10519.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10519.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I think we're still going to have another problem with &quot;make dist&quot; -- some of the Java header files are generated.  I'm not sure we have that right in the Makefile.am.
<br>
<p>I committed this fbtl fix; I'll try &quot;make dist&quot; now, but I have to run for a while.  I may or may not get this done by the tarball generation tonight.
<br>
<p><p>On Feb 20, 2012, at 5:59 PM, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Added&#133; thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2012, at 5:41 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's because Jeff forgot to copy the line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_FILES([ompi/mca/fbtl/posix/Makefile])
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From whatever configure.m4 script he used as the base for his new macro :).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2/20/12 3:36 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm afraid this commit breaks the ability to build from a tarball. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; created a tarball from the trunk and then did a configure followed by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;make clean&quot;. The make command failed to execute because it could not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;make clean&quot; in the mca/fbtl/posix directory as there is no Makefile in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked and the Makefile -is- being created when built in an svn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkout, but is -not- being created when built from tarball. This was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done on a Mac.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 20, 2012, at 8:53 AM, jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2012-02-20 10:53:20 EST (Mon, 20 Feb 2012)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 25966
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25966">https://svn.open-mpi.org/trac/ompi/changeset/25966</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ensure that we have aio.h before trying to compile this component.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/ompi/mca/fbtl/posix/configure.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Added: trunk/ompi/mca/fbtl/posix/configure.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =========================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =====
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/fbtl/posix/configure.m4    2012-02-20 10:53:20 EST
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Mon, 20 Feb 2012)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -0,0 +1,33 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# -*- shell-script -*-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Indiana
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         University Research and Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2005 The University of Tennessee and The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         University of Stuttgart.  All rights
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2004-2012 The Regents of the University of California.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2010      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Copyright (c) 2008-2011 University of Houston. All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# $HEADER$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# MCA_fbtl_posix_CONFIG(action-if-can-compile,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#                        [action-if-cant-compile])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# ------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +AC_DEFUN([MCA_ompi_fbtl_posix_CONFIG],[
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    AC_CHECK_HEADER([aio.h],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    [fbtl_posix_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    [fbtl_posix_happy=&quot;no&quot;])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    AS_IF([test &quot;$fbtl_posix_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          [$1],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          [$2])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +])dnl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10518.php">Paul H. Hargrove: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>Previous message:</strong> <a href="10516.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>In reply to:</strong> <a href="10516.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10519.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10519.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
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
