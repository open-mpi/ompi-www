<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 09:31:49 2009" -->
<!-- isoreceived="20090819133149" -->
<!-- sent="Wed, 19 Aug 2009 09:31:42 -0400" -->
<!-- isosent="20090819133142" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834" -->
<!-- id="EBCB8BB3-E1F7-467E-821D-89F187E5A4EB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200908181912.n7IJCio7032344_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 09:31:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6679.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>Previous message:</strong> <a href="6677.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6679.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>Reply:</strong> <a href="6679.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer --
<br>
<p>Can you update the top-level README as appropriate, too?  There's a  
<br>
section about ob1 vs. cm priority, etc.
<br>
<p>Thanks!
<br>
<p><p>On Aug 18, 2009, at 3:12 PM, &lt;rusraink_at_[hidden]&gt;  
<br>
&lt;rusraink_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: rusraink
</span><br>
<span class="quotelev1">&gt; Date: 2009-08-18 15:12:43 EDT (Tue, 18 Aug 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21834
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21834">https://svn.open-mpi.org/trac/ompi/changeset/21834</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt;  - As described in RFC,
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6618.php">http://www.open-mpi.org/community/lists/devel/2009/08/6618.php</a>
</span><br>
<span class="quotelev1">&gt;    lower the default priority of PML/cm to allow _defined_ behaviour
</span><br>
<span class="quotelev1">&gt;    for systems, where both MTLs and BTLs are available (Portals and  
</span><br>
<span class="quotelev1">&gt; MX).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Keep the previous behaviour of favoring in case of PSM.
</span><br>
<span class="quotelev1">&gt;    Still, the user may select --mca pml cm for apps where applicable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/cm/pml_cm_component.c |    15 ++++++++-------
</span><br>
<span class="quotelev1">&gt;    1 files changed, 8 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/cm/pml_cm_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/cm/pml_cm_component.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/cm/pml_cm_component.c    2009-08-18 15:12:43  
</span><br>
<span class="quotelev1">&gt; EDT (Tue, 18 Aug 2009)
</span><br>
<span class="quotelev1">&gt; @@ -106,7 +106,7 @@
</span><br>
<span class="quotelev1">&gt;                             &quot;CM PML selection priority&quot;,
</span><br>
<span class="quotelev1">&gt;                             false,
</span><br>
<span class="quotelev1">&gt;                             false,
</span><br>
<span class="quotelev1">&gt; -                           30,
</span><br>
<span class="quotelev1">&gt; +                           10,
</span><br>
<span class="quotelev1">&gt;                             &amp;ompi_pml_cm.default_priority);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; @@ -139,12 +139,13 @@
</span><br>
<span class="quotelev1">&gt;      if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt;          *priority = -1;
</span><br>
<span class="quotelev1">&gt;          return NULL;
</span><br>
<span class="quotelev1">&gt; -    } else if(strcmp(ompi_mtl_base_selected_component- 
</span><br>
<span class="quotelev2">&gt; &gt;mtl_version.mca_component_name, &quot;psm&quot;) != 0) {
</span><br>
<span class="quotelev1">&gt; -        /* if mtl is not PSM then back down priority, and require  
</span><br>
<span class="quotelev1">&gt; the user to */
</span><br>
<span class="quotelev1">&gt; -        /*  specify pml cm directly if that is what they want  
</span><br>
<span class="quotelev1">&gt; priority */
</span><br>
<span class="quotelev1">&gt; -        /*  of 1 is sufficient in that case as it is the only pml  
</span><br>
<span class="quotelev1">&gt; that */
</span><br>
<span class="quotelev1">&gt; -        /*  will be considered */
</span><br>
<span class="quotelev1">&gt; -        *priority = 1;
</span><br>
<span class="quotelev1">&gt; +    } else if(strcmp(ompi_mtl_base_selected_component- 
</span><br>
<span class="quotelev2">&gt; &gt;mtl_version.mca_component_name, &quot;psm&quot;) == 0) {
</span><br>
<span class="quotelev1">&gt; +        /*
</span><br>
<span class="quotelev1">&gt; +         * If MTL is PSM then up our priority
</span><br>
<span class="quotelev1">&gt; +         * For every other communication layer having MTLs and  
</span><br>
<span class="quotelev1">&gt; BTLs, the user/admin
</span><br>
<span class="quotelev1">&gt; +         * may still select PML/ob1 (BTLs) or PML/cm (MTLs) if  
</span><br>
<span class="quotelev1">&gt; preferable for the app/site.
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt; +        *priority = 30;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6679.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>Previous message:</strong> <a href="6677.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6679.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>Reply:</strong> <a href="6679.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
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
