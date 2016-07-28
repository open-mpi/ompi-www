<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 14:37:11 2011" -->
<!-- isoreceived="20111005183711" -->
<!-- sent="Wed, 5 Oct 2011 14:37:06 -0400" -->
<!-- isosent="20111005183706" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234" -->
<!-- id="15D03B0D-C587-4033-B4F6-C6F702309F1E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAB1FDFB.8269%bwbarre_at_sandia.gov" -->
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
<strong>Date:</strong> 2011-10-05 14:37:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9779.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Previous message:</strong> <a href="9777.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>In reply to:</strong> <a href="9777.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9779.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Reply:</strong> <a href="9779.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 5, 2011, at 2:30 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; I don't think we need to go that far; in fact, we really shouldn't use m4
</span><br>
<span class="quotelev1">&gt; macros to enforce license policies like that.
</span><br>
<p>I'm not talking about enforcement -- I'm talking about notification.
<br>
<p><span class="quotelev1">&gt; But more importantly, we should remove that particular warning from this
</span><br>
<span class="quotelev1">&gt; test, since the test is used in places other than SLURM, which don't have
</span><br>
<span class="quotelev1">&gt; negative licensing impact.
</span><br>
<p>Fair enough; is there a way to tell the difference between BSD-friendly PMI and not-BSD-friendly PMI?
<br>
<p><p><span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/5/11 11:25 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems like this should be a field in ompi_info output, too...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe a component can effect a &quot;license&quot; m4 variable, or somesuch...?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 5, 2011, at 1:14 PM, hjelmn_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: hjelmn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2011-10-05 13:14:24 EDT (Wed, 05 Oct 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 25234
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25234">https://svn.open-mpi.org/trac/ompi/changeset/25234</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first cut at general pmi check
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/orte/config/orte_check_pmi.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added: trunk/orte/config/orte_check_pmi.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/orte/config/orte_check_pmi.m4    2011-10-05 13:14:24 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Wed, 05 Oct 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -0,0 +1,59 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# -*- shell-script -*-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indiana
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#                         University Research and Technology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# Copyright (c) 2004-2005 The University of Tennessee and The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#                         reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#                         University of Stuttgart.  All rights
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# Copyright (c) 2009      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# Copyright (c) 2011      Los Alamos National Security, LLC. All rights
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#                         reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# $HEADER$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# ORTE_CHECK_PMI(prefix, [action-if-found], [action-if-not-found])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# --------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +AC_DEFUN([ORTE_CHECK_PMI],[
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_ARG_WITH([pmi],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    [AC_HELP_STRING([--with-pmi],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            [Build PMI support (default: no)])],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            [], with_pmi=no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    orte_enable_pmi=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_MSG_CHECKING([if user requested PMI support])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AS_IF([test &quot;$with_pmi&quot; = &quot;no&quot;], [
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        AC_MSG_RESULT([no])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        orte_want_pmi_support=no],[
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        AS_IF([test ! -z &quot;$with_pmi&quot; -a &quot;$with_pmi&quot; != &quot;yes&quot;],[
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            AS_IF([test -d &quot;$with_pmi/lib64&quot;], LDFLAGS=&quot;$LDFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L$with_pmi/lib64&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                LDFLAGS=&quot;$LDFLAGS -L$with_pmi/lib&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            CFLAGS=&quot;$CFLAGS -I$with_pmi/include&quot;],[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        orte_want_pmi_support=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        orte_have_pmi_support=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        AC_MSG_CHECKING([if PMI support installed])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        AC_CHECK_HEADERS([pmi.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurm/pmi.h],[orte_have_pmi_support=yes]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [break],[],[AC_INCLUDES_DEFAULT])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        AC_CHECK_LIB([pmi],[PMI_Init],[],orte_have_pmi_support=no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            AS_IF([test &quot;$orte_have_pmi_support&quot; = &quot;yes&quot;], [
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            AC_MSG_WARN([PMI SUPPORT HAS BEEN INCLUDED - RESULTING])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            AC_MSG_WARN([BINARIES ARE SUBJECT TO ADDITIONAL LICENSING])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            AC_MSG_WARN([RESTRICTIONS - SEE THE SLURM LICENSE FOR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INFO])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            orte_enable_pmi=1] [$2],[
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            AC_MSG_RESULT([no])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            AC_MSG_WARN([PMI support requested (via --with-pmi) but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not found.])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            AC_MSG_ERROR([Aborting.])] [$3])])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +   AC_DEFINE_UNQUOTED([WANT_PMI_SUPPORT],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                      [$orte_enable_pmi],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                      [Whether we want PMI support])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9779.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Previous message:</strong> <a href="9777.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>In reply to:</strong> <a href="9777.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9779.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Reply:</strong> <a href="9779.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
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
