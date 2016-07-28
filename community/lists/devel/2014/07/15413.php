<?
$subject_val = "Re: [OMPI devel] Further questions about BTL OPAL move...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 19:30:41 2014" -->
<!-- isoreceived="20140731233041" -->
<!-- sent="Thu, 31 Jul 2014 16:30:34 -0700" -->
<!-- isosent="20140731233034" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Further questions about BTL OPAL move..." -->
<!-- id="19C1D0EE-A188-48D6-B9C6-B511738483ED_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="77A932A8-CBC8-4AE5-B133-FD5ED8F37DCA_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Further questions about BTL OPAL move...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 19:30:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15414.php">Paul Hargrove: "[OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15412.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15408.php">George Bosilca: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15453.php">Ralph Castain: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15453.php">Ralph Castain: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 31, 2014, at 3:41 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 31, 2014, at 18:26 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Got 2 questions for ya:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. I see some orte_* specific symbols/functions in ompi_mpi_init.c.  Was that intentional?  Shouldn&#146;t that stuff be in the RTE framework, or some such?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good catch. Fixed in r32384.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. In tracking down some stuff relating to process names, it looks like names are now setting set by ompi/proc/proc.c (i.e., it makes a call to opal_proc_local_set(...)).  And this happens after the RTE is initialized.  Is that right?  Seems a little weird to me &#151; shouldn't the RTE be the one that sets the process names?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my view the RTE should stay outside any local setting of the process. The RTE role is to move the info around, not to force it on everybody else. When multiple layers will use the BTL (and thus the OPAL level proc), we will have to figure out who will be responsible for setting the data into the OPAL level proc. Meanwhile, OMPI is the only one using this proc.
</span><br>
<p><p>Uhhhh....not exactly. The dstore and pmi frameworks depend on it, and that the name matches the one in the RTE. So ORTE is going to have to set that proc object, and I imagine STCI will too.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15407.php">http://www.open-mpi.org/community/lists/devel/2014/07/15407.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15408.php">http://www.open-mpi.org/community/lists/devel/2014/07/15408.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15414.php">Paul Hargrove: "[OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15412.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15408.php">George Bosilca: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15453.php">Ralph Castain: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15453.php">Ralph Castain: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
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
