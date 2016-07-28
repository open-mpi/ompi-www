<?
$subject_val = "[OMPI devel] Further questions about BTL OPAL move...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 18:26:24 2014" -->
<!-- isoreceived="20140731222624" -->
<!-- sent="Thu, 31 Jul 2014 22:26:22 +0000" -->
<!-- isosent="20140731222622" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Further questions about BTL OPAL move..." -->
<!-- id="31D15234-7EBB-4E7D-B5E1-338E5EAEB796_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Further questions about BTL OPAL move...<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 18:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15408.php">George Bosilca: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>Previous message:</strong> <a href="15406.php">Dave Goodell (dgoodell): "[OMPI devel] RFC: namespaces to isolate against code moves"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15408.php">George Bosilca: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>Reply:</strong> <a href="15408.php">George Bosilca: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Got 2 questions for ya:
<br>
<p>1. I see some orte_* specific symbols/functions in ompi_mpi_init.c.  Was that intentional?  Shouldn't that stuff be in the RTE framework, or some such?
<br>
<p>2. In tracking down some stuff relating to process names, it looks like names are now setting set by ompi/proc/proc.c (i.e., it makes a call to opal_proc_local_set(...)).  And this happens after the RTE is initialized.  Is that right?  Seems a little weird to me -- shouldn't the RTE be the one that sets the process names?
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15408.php">George Bosilca: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>Previous message:</strong> <a href="15406.php">Dave Goodell (dgoodell): "[OMPI devel] RFC: namespaces to isolate against code moves"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15408.php">George Bosilca: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>Reply:</strong> <a href="15408.php">George Bosilca: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
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
