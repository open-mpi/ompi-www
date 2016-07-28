<?
$subject_val = "Re: [OMPI devel] 32 bit openib btl warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 09:25:03 2008" -->
<!-- isoreceived="20080201142503" -->
<!-- sent="Fri, 01 Feb 2008 09:25:00 -0500" -->
<!-- isosent="20080201142500" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 32 bit openib btl warnings" -->
<!-- id="47A32BBC.2050401_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6B999967-BB10-4C86-8B3E-CBEEE122AA72_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 32 bit openib btl warnings<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 09:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>Previous message:</strong> <a href="3112.php">Jeff Squyres: "[OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>In reply to:</strong> <a href="3112.php">Jeff Squyres: "[OMPI devel] 32 bit openib btl warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>Reply:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These were fixed by Gleb yesterday in 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/17346">https://svn.open-mpi.org/trac/ompi/changeset/17346</a>
<br>
<p>Tim
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I noticed these in IBM's MTT runs on the rhc branch last night:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl_openib_frag.c: In function 'out_constructor':
</span><br>
<span class="quotelev1">&gt; btl_openib_frag.c:74: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev1">&gt; different size
</span><br>
<span class="quotelev1">&gt; btl_openib_frag.c: In function 'recv_constructor':
</span><br>
<span class="quotelev1">&gt; btl_openib_frag.c:120: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev1">&gt; different size
</span><br>
<span class="quotelev1">&gt; btl_openib_frag.c: In function 'get_constructor':
</span><br>
<span class="quotelev1">&gt; btl_openib_frag.c:141: warning: cast from pointer to integer of  
</span><br>
<span class="quotelev1">&gt; different size
</span><br>
<span class="quotelev1">&gt; btl_openib_lex.c:1740: warning: 'yy_flex_realloc' defined but not used
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This should be fairly recent with the OMPI trunk; I seem to recall  
</span><br>
<span class="quotelev1">&gt; seeing Ralph merge yesterday.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't test 32 bit builds; do we have some casting / size issues in  
</span><br>
<span class="quotelev1">&gt; 32 bit?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>Previous message:</strong> <a href="3112.php">Jeff Squyres: "[OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>In reply to:</strong> <a href="3112.php">Jeff Squyres: "[OMPI devel] 32 bit openib btl warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>Reply:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
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
