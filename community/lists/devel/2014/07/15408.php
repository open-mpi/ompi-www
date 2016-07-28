<?
$subject_val = "Re: [OMPI devel] Further questions about BTL OPAL move...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 18:41:29 2014" -->
<!-- isoreceived="20140731224129" -->
<!-- sent="Thu, 31 Jul 2014 18:41:26 -0400" -->
<!-- isosent="20140731224126" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Further questions about BTL OPAL move..." -->
<!-- id="77A932A8-CBC8-4AE5-B133-FD5ED8F37DCA_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="31D15234-7EBB-4E7D-B5E1-338E5EAEB796_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 18:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15409.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15407.php">Jeff Squyres (jsquyres): "[OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>In reply to:</strong> <a href="15407.php">Jeff Squyres (jsquyres): "[OMPI devel] Further questions about BTL OPAL move..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15413.php">Ralph Castain: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>Reply:</strong> <a href="15413.php">Ralph Castain: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 31, 2014, at 18:26 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Got 2 questions for ya:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I see some orte_* specific symbols/functions in ompi_mpi_init.c.  Was that intentional?  Shouldn&#146;t that stuff be in the RTE framework, or some such?
</span><br>
<p>Good catch. Fixed in r32384.
<br>
<p><span class="quotelev1">&gt; 2. In tracking down some stuff relating to process names, it looks like names are now setting set by ompi/proc/proc.c (i.e., it makes a call to opal_proc_local_set(...)).  And this happens after the RTE is initialized.  Is that right?  Seems a little weird to me &#151; shouldn't the RTE be the one that sets the process names?
</span><br>
<p>In my view the RTE should stay outside any local setting of the process. The RTE role is to move the info around, not to force it on everybody else. When multiple layers will use the BTL (and thus the OPAL level proc), we will have to figure out who will be responsible for setting the data into the OPAL level proc. Meanwhile, OMPI is the only one using this proc.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15407.php">http://www.open-mpi.org/community/lists/devel/2014/07/15407.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15409.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15407.php">Jeff Squyres (jsquyres): "[OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>In reply to:</strong> <a href="15407.php">Jeff Squyres (jsquyres): "[OMPI devel] Further questions about BTL OPAL move..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15413.php">Ralph Castain: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>Reply:</strong> <a href="15413.php">Ralph Castain: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
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
