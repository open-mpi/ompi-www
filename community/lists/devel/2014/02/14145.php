<?
$subject_val = "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 11:34:58 2014" -->
<!-- isoreceived="20140214163458" -->
<!-- sent="Fri, 14 Feb 2014 16:34:56 +0000" -->
<!-- isosent="20140214163456" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING" -->
<!-- id="CD6D7EA1-F03B-4A29-9959-A6F139C641DA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140214163131.GL24474_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 11:34:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14146.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14144.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14143.php">Adrian Reber: "[OMPI devel] mca_base_component_var_register() MCA_BASE_VAR_TYPE_STRING"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14147.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Believe it or not, this is actually one of the areas of the OMPI code base that is fairly well documented (gasp!).  :-)
<br>
<p>Check out opal/mca/base/mca_var.h for MCA vars (i.e., MPI_T control variables), and mca_pvar.h for MPI_T performance variables.
<br>
<p><p><p>On Feb 14, 2014, at 11:31 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to find out how to deal with string variables. Do I have to
</span><br>
<span class="quotelev1">&gt; allocate the memory before calling mca_base_component_var_register() or
</span><br>
<span class="quotelev1">&gt; not? It seems it does a strdup() meaning it has to be free()'d while
</span><br>
<span class="quotelev1">&gt; closing the component. Looking at other occurrences of string variables
</span><br>
<span class="quotelev1">&gt; I see different usages. Sometimes it set to NULL sometimes not. Before
</span><br>
<span class="quotelev1">&gt; following a wrong example maybe someone can tell me what the correct
</span><br>
<span class="quotelev1">&gt; usage is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
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
<li><strong>Next message:</strong> <a href="14146.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14144.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14143.php">Adrian Reber: "[OMPI devel] mca_base_component_var_register() MCA_BASE_VAR_TYPE_STRING"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14147.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
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
