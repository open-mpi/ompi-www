<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 18:48:41 2007" -->
<!-- isoreceived="20070720224841" -->
<!-- sent="Fri, 20 Jul 2007 18:44:48 -0400" -->
<!-- isosent="20070720224448" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540" -->
<!-- id="46A13AE0.40400_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="96ABBB97-588B-4671-A950-532F9F5E1EDD_at_cisco.com" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-20 18:44:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1972.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>Previous message:</strong> <a href="1970.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>In reply to:</strong> <a href="1970.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1972.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>Reply:</strong> <a href="1972.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know. This is the reason it was missing in the first commit.
<br>
<p>The problem is that because we wanted to make as little changes as 
<br>
possible to the original trunk, we designed the framework as a &quot;PML&quot; 
<br>
instead of a new framework (at the mca level). For that reason the 
<br>
autogen/configure mechanism does not recurse properly in the v framework 
<br>
and the static-components.h files are not generated. We are working on a 
<br>
fix to this issue; as soon as it is done the static-components.h will go 
<br>
away.
<br>
<p>Aurelien
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This looks like an improper commit; static-components.h should never  
</span><br>
<span class="quotelev1">&gt; be committed to SVN (it's a generated file), and it should not be in  
</span><br>
<span class="quotelev1">&gt; a component directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a reason this was added?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 20, 2007, at 6:24 PM, bouteill_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Author: bouteill
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-07-20 18:24:02 EDT (Fri, 20 Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 15540
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15540">https://svn.open-mpi.org/trac/ompi/changeset/15540</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Missing file...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/v/static-components.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Added: trunk/ompi/mca/pml/v/static-components.h
</span><br>
<span class="quotelev2">&gt;&gt; ====================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/v/static-components.h	2007-07-20 18:24:02  
</span><br>
<span class="quotelev2">&gt;&gt; EDT (Fri, 20 Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -0,0 +1,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; +/*
</span><br>
<span class="quotelev2">&gt;&gt; + * $HEADER$
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +const mca_base_component_t  
</span><br>
<span class="quotelev2">&gt;&gt; *mca_pml_v_protocol_base_static_components[] = {
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +  NULL
</span><br>
<span class="quotelev2">&gt;&gt; +};
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1972.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>Previous message:</strong> <a href="1970.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>In reply to:</strong> <a href="1970.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1972.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>Reply:</strong> <a href="1972.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
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
