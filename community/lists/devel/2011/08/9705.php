<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25098";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 26 20:29:26 2011" -->
<!-- isoreceived="20110827002926" -->
<!-- sent="Fri, 26 Aug 2011 20:29:20 -0400" -->
<!-- isosent="20110827002920" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25098" -->
<!-- id="1529200B-2988-4E87-9512-4F7D6D3E6A1B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201108270016.p7R0GML2014293_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25098<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-26 20:29:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9706.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Previous message:</strong> <a href="9704.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George; that fixed it.
<br>
<p><p><p>On Aug 26, 2011, at 8:16 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2011-08-26 20:16:21 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25098
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25098">https://svn.open-mpi.org/trac/ompi/changeset/25098</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Define ORTE_ENABLE_EPOCH and ORTE_RESIL_ORTE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/config/opal_configure_options.m4 |     7 +++++++                                 
</span><br>
<span class="quotelev1">&gt;   1 files changed, 7 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/config/opal_configure_options.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/config/opal_configure_options.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/config/opal_configure_options.m4	2011-08-26 20:16:21 EDT (Fri, 26 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -420,8 +420,15 @@
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; AC_ARG_ENABLE(resilient-orte,
</span><br>
<span class="quotelev1">&gt;     [AC_HELP_STRING([--enable-resilient-orte], [Enable the resilient runtime code.])])
</span><br>
<span class="quotelev1">&gt; +AS_IF( [test &quot;$enable_resilient_orte&quot; = &quot;yes&quot;], [result=1], [result=0] )
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(ORTE_RESIL_ORTE, [test &quot;$enable_resilient_orte&quot; = &quot;yes&quot;])
</span><br>
<span class="quotelev1">&gt; +AC_DEFINE_UNQUOTED([ORTE_RESIL_ORTE], [$result],
</span><br>
<span class="quotelev1">&gt; +     [Compile a resilient version of Open MPI])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(ORTE_ENABLE_EPOCH, [test &quot;$enable_resilient_orte&quot; = &quot;yes&quot;])
</span><br>
<span class="quotelev1">&gt; +AC_DEFINE_UNQUOTED([ORTE_ENABLE_EPOCH], [$result],
</span><br>
<span class="quotelev1">&gt; +     [Support for epoch in the ORTE process name enabled or not])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Do we want to install binaries?
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
<li><strong>Next message:</strong> <a href="9706.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Previous message:</strong> <a href="9704.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
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
