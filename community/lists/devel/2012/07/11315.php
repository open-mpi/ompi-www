<?
$subject_val = "Re: [OMPI devel] Blame the compiler &#133;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 24 09:05:05 2012" -->
<!-- isoreceived="20120724130505" -->
<!-- sent="Tue, 24 Jul 2012 09:05:00 -0400" -->
<!-- isosent="20120724130500" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Blame the compiler &amp;#133;" -->
<!-- id="3B125C7A-7B79-41D2-9AEF-267CA0955F90_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E1F2CB9E-FB3F-4750-91F5-B53E496CB693_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Blame the compiler &#133;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-24 09:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11316.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<li><strong>Previous message:</strong> <a href="11314.php">George Bosilca: "[OMPI devel] Blame the compiler &#133;"</a>
<li><strong>In reply to:</strong> <a href="11314.php">George Bosilca: "[OMPI devel] Blame the compiler &#133;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2012, at 8:31 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; These compilers guys that enforce standards with random limitations because they understand the benefit of never-ending &quot;help&quot; messages &#133; ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; show_help_lex.c:1185: warning: 'input' defined but not used
</span><br>
<p>Is that one fixable?
<br>
<p><span class="quotelev1">&gt; ../../../../ompi/opal/mca/hwloc/base/hwloc_base_open.c: In function 'opal_hwloc_base_open':
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/opal/mca/hwloc/base/hwloc_base_open.c:99: warning: string length '556' is greater than the length '509' ISO C90 compilers are required to support
</span><br>
<p>Fair enough; I shortened the help message and CMR'ed it -- throwing the review to you.  :-)
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
<li><strong>Next message:</strong> <a href="11316.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_Cancel should not cancel a request if it has a matched recv frag"</a>
<li><strong>Previous message:</strong> <a href="11314.php">George Bosilca: "[OMPI devel] Blame the compiler &#133;"</a>
<li><strong>In reply to:</strong> <a href="11314.php">George Bosilca: "[OMPI devel] Blame the compiler &#133;"</a>
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
