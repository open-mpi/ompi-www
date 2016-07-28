<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 18:52:36 2007" -->
<!-- isoreceived="20070720225236" -->
<!-- sent="Fri, 20 Jul 2007 18:52:20 -0400" -->
<!-- isosent="20070720225220" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540" -->
<!-- id="478495B9-546B-407B-B5EE-61B3C2AF863D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A13AE0.40400_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-07-20 18:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1973.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1971.php">Aurelien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>In reply to:</strong> <a href="1971.php">Aurelien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok; thanks for the explanation.
<br>
<p>On Jul 20, 2007, at 6:44 PM, Aurelien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; I know. This is the reason it was missing in the first commit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that because we wanted to make as little changes as
</span><br>
<span class="quotelev1">&gt; possible to the original trunk, we designed the framework as a &quot;PML&quot;
</span><br>
<span class="quotelev1">&gt; instead of a new framework (at the mca level). For that reason the
</span><br>
<span class="quotelev1">&gt; autogen/configure mechanism does not recurse properly in the v  
</span><br>
<span class="quotelev1">&gt; framework
</span><br>
<span class="quotelev1">&gt; and the static-components.h files are not generated. We are working  
</span><br>
<span class="quotelev1">&gt; on a
</span><br>
<span class="quotelev1">&gt; fix to this issue; as soon as it is done the static-components.h  
</span><br>
<span class="quotelev1">&gt; will go
</span><br>
<span class="quotelev1">&gt; away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This looks like an improper commit; static-components.h should never
</span><br>
<span class="quotelev2">&gt;&gt; be committed to SVN (it's a generated file), and it should not be in
</span><br>
<span class="quotelev2">&gt;&gt; a component directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason this was added?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 20, 2007, at 6:24 PM, bouteill_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: bouteill
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-07-20 18:24:02 EDT (Fri, 20 Jul 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 15540
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15540">https://svn.open-mpi.org/trac/ompi/changeset/15540</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Missing file...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mca/pml/v/static-components.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added: trunk/ompi/mca/pml/v/static-components.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/pml/v/static-components.h	2007-07-20 18:24:02
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Fri, 20 Jul 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -0,0 +1,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +/*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * $HEADER$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +const mca_base_component_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *mca_pml_v_protocol_base_static_components[] = {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +};
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1973.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1971.php">Aurelien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>In reply to:</strong> <a href="1971.php">Aurelien Bouteiller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
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
