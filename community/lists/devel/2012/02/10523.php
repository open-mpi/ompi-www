<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 19:03:12 2012" -->
<!-- isoreceived="20120221000312" -->
<!-- sent="Mon, 20 Feb 2012 18:03:11 -0600" -->
<!-- isosent="20120221000311" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966" -->
<!-- id="4F42DF3F.1040103_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 19:03:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10524.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Previous message:</strong> <a href="10522.php">Ralph Castain: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>In reply to:</strong> <a href="10510.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10524.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10524.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
just out of curiosity, what platform did not have support for the aio
<br>
operations?
<br>
<p>Also, the proper solution will be to not compile the section using the
<br>
aio functions, but still compile the rest of the module. I will try to
<br>
implement that properly ASAP. The POSIX is the most basic module that
<br>
shall be used if everything else breaks, so disabling it basically means
<br>
that we should not compile OMPIO at all.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 2/20/2012 4:36 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I'm afraid this commit breaks the ability to build from a tarball. I created a tarball from the trunk and then did a configure followed by &quot;make clean&quot;. The make command failed to execute because it could not &quot;make clean&quot; in the mca/fbtl/posix directory as there is no Makefile in it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked and the Makefile -is- being created when built in an svn checkout, but is -not- being created when built from tarball. This was done on a Mac.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2012, at 8:53 AM, jsquyres_at_[hidden] wrote:
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
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/fbtl/posix/configure.m4	2012-02-20 10:53:20 EST (Mon, 20 Feb 2012)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -0,0 +1,33 @@
</span><br>
<span class="quotelev2">&gt;&gt; +# -*- shell-script -*-
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev2">&gt;&gt; +#                         University Research and Technology
</span><br>
<span class="quotelev2">&gt;&gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev2">&gt;&gt; +#                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev2">&gt;&gt; +#                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev2">&gt;&gt; +#                         University of Stuttgart.  All rights reserved.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10523/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10524.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Previous message:</strong> <a href="10522.php">Ralph Castain: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>In reply to:</strong> <a href="10510.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10524.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Reply:</strong> <a href="10524.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
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
