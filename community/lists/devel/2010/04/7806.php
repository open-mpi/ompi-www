<?
$subject_val = "Re: [OMPI devel] 1.5 branch broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 08:29:42 2010" -->
<!-- isoreceived="20100426122942" -->
<!-- sent="Mon, 26 Apr 2010 06:29:33 -0600" -->
<!-- isosent="20100426122933" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5 branch broken" -->
<!-- id="335065F8-D5A2-4DC5-8E62-BEDF443B1DCF_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9B365B6A-AA86-4E60-A359-014B194669CE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5 branch broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 08:29:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7807.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7805.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>In reply to:</strong> <a href="7804.php">Jeff Squyres: "[OMPI devel] 1.5 branch broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just delete the offending line - the 1.5 ESS API doesn't contain it.
<br>
<p>On Apr 26, 2010, at 6:22 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/23025">https://svn.open-mpi.org/trac/ompi/changeset/23025</a> broke the v1.5 branch; I get compile failures on Linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;  CC     ess_singleton_module.lo
</span><br>
<span class="quotelev1">&gt; ess_singleton_module.c:89: error: &#145;orte_ess_base_query_sys_info&#146; undeclared here (not in a function)
</span><br>
<span class="quotelev1">&gt; ess_singleton_module.c:91: warning: excess elements in struct initializer
</span><br>
<span class="quotelev1">&gt; ess_singleton_module.c:91: warning: (near initialization for &#145;orte_ess_singleton_module&#146;)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ess_singleton_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7807.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7805.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>In reply to:</strong> <a href="7804.php">Jeff Squyres: "[OMPI devel] 1.5 branch broken"</a>
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
