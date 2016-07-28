<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 13:25:19 2011" -->
<!-- isoreceived="20111005172519" -->
<!-- sent="Wed, 5 Oct 2011 13:25:14 -0400" -->
<!-- isosent="20111005172514" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234" -->
<!-- id="86FCAD70-D657-42BC-903E-488809404E6D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201110051714.p95HEP1J003885_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 13:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9777.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9775.php">Xin He: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9777.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Reply:</strong> <a href="9777.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems like this should be a field in ompi_info output, too...
<br>
<p>Maybe a component can effect a &quot;license&quot; m4 variable, or somesuch...?
<br>
<p><p>On Oct 5, 2011, at 1:14 PM, hjelmn_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn
</span><br>
<span class="quotelev1">&gt; Date: 2011-10-05 13:14:24 EDT (Wed, 05 Oct 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25234
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25234">https://svn.open-mpi.org/trac/ompi/changeset/25234</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; first cut at general pmi check
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/config/orte_check_pmi.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/orte/config/orte_check_pmi.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/config/orte_check_pmi.m4	2011-10-05 13:14:24 EDT (Wed, 05 Oct 2011)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,59 @@
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
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2009      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2011      Los Alamos National Security, LLC. All rights
</span><br>
<span class="quotelev1">&gt; +#                         reserved.
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
<span class="quotelev1">&gt; +# ORTE_CHECK_PMI(prefix, [action-if-found], [action-if-not-found])
</span><br>
<span class="quotelev1">&gt; +# --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +AC_DEFUN([ORTE_CHECK_PMI],[
</span><br>
<span class="quotelev1">&gt; +	AC_ARG_WITH([pmi],
</span><br>
<span class="quotelev1">&gt; +                    [AC_HELP_STRING([--with-pmi],
</span><br>
<span class="quotelev1">&gt; +                            [Build PMI support (default: no)])],
</span><br>
<span class="quotelev1">&gt; +		    [], with_pmi=no)
</span><br>
<span class="quotelev1">&gt; +	orte_enable_pmi=0
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	AC_MSG_CHECKING([if user requested PMI support])
</span><br>
<span class="quotelev1">&gt; +	AS_IF([test &quot;$with_pmi&quot; = &quot;no&quot;], [
</span><br>
<span class="quotelev1">&gt; +		AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; +		orte_want_pmi_support=no],[
</span><br>
<span class="quotelev1">&gt; +		AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt; +		AS_IF([test ! -z &quot;$with_pmi&quot; -a &quot;$with_pmi&quot; != &quot;yes&quot;],[
</span><br>
<span class="quotelev1">&gt; +			AS_IF([test -d &quot;$with_pmi/lib64&quot;], LDFLAGS=&quot;$LDFLAGS -L$with_pmi/lib64&quot;,
</span><br>
<span class="quotelev1">&gt; +			    LDFLAGS=&quot;$LDFLAGS -L$with_pmi/lib&quot;)
</span><br>
<span class="quotelev1">&gt; +			CFLAGS=&quot;$CFLAGS -I$with_pmi/include&quot;],[])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +		orte_want_pmi_support=yes
</span><br>
<span class="quotelev1">&gt; +		orte_have_pmi_support=no
</span><br>
<span class="quotelev1">&gt; +		AC_MSG_CHECKING([if PMI support installed])
</span><br>
<span class="quotelev1">&gt; +		AC_CHECK_HEADERS([pmi.h slurm/pmi.h],[orte_have_pmi_support=yes] [break],[],[AC_INCLUDES_DEFAULT])
</span><br>
<span class="quotelev1">&gt; +		AC_CHECK_LIB([pmi],[PMI_Init],[],orte_have_pmi_support=no)
</span><br>
<span class="quotelev1">&gt; +	        AS_IF([test &quot;$orte_have_pmi_support&quot; = &quot;yes&quot;], [
</span><br>
<span class="quotelev1">&gt; +			AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt; +			AC_MSG_WARN([PMI SUPPORT HAS BEEN INCLUDED - RESULTING])
</span><br>
<span class="quotelev1">&gt; +			AC_MSG_WARN([BINARIES ARE SUBJECT TO ADDITIONAL LICENSING])
</span><br>
<span class="quotelev1">&gt; +			AC_MSG_WARN([RESTRICTIONS - SEE THE SLURM LICENSE FOR INFO])
</span><br>
<span class="quotelev1">&gt; +			orte_enable_pmi=1] [$2],[
</span><br>
<span class="quotelev1">&gt; +			AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; +			AC_MSG_WARN([PMI support requested (via --with-pmi) but not found.])
</span><br>
<span class="quotelev1">&gt; +			AC_MSG_ERROR([Aborting.])] [$3])])
</span><br>
<span class="quotelev1">&gt; +   AC_DEFINE_UNQUOTED([WANT_PMI_SUPPORT],
</span><br>
<span class="quotelev1">&gt; +                      [$orte_enable_pmi],
</span><br>
<span class="quotelev1">&gt; +                      [Whether we want PMI support])
</span><br>
<span class="quotelev1">&gt; +])
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9777.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9775.php">Xin He: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9777.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Reply:</strong> <a href="9777.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
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
