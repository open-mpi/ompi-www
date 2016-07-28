<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 18:38:53 2007" -->
<!-- isoreceived="20070720223853" -->
<!-- sent="Fri, 20 Jul 2007 18:38:35 -0400" -->
<!-- isosent="20070720223835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540" -->
<!-- id="96ABBB97-588B-4671-A950-532F9F5E1EDD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200707202224.l6KMO373008787_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-20 18:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1971.php">Aurelien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>Previous message:</strong> <a href="1969.php">Jeff Squyres: "Re: [OMPI devel] Removal of cellid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1971.php">Aurelien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>Reply:</strong> <a href="1971.php">Aurelien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like an improper commit; static-components.h should never  
<br>
be committed to SVN (it's a generated file), and it should not be in  
<br>
a component directory.
<br>
<p>Is there a reason this was added?
<br>
<p><p>On Jul 20, 2007, at 6:24 PM, bouteill_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bouteill
</span><br>
<span class="quotelev1">&gt; Date: 2007-07-20 18:24:02 EDT (Fri, 20 Jul 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15540
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15540">https://svn.open-mpi.org/trac/ompi/changeset/15540</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Missing file...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/v/static-components.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added: trunk/ompi/mca/pml/v/static-components.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/v/static-components.h	2007-07-20 18:24:02  
</span><br>
<span class="quotelev1">&gt; EDT (Fri, 20 Jul 2007)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,10 @@
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * $HEADER$
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +const mca_base_component_t  
</span><br>
<span class="quotelev1">&gt; *mca_pml_v_protocol_base_static_components[] = {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  NULL
</span><br>
<span class="quotelev1">&gt; +};
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1971.php">Aurelien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>Previous message:</strong> <a href="1969.php">Jeff Squyres: "Re: [OMPI devel] Removal of cellid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1971.php">Aurelien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>Reply:</strong> <a href="1971.php">Aurelien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
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
