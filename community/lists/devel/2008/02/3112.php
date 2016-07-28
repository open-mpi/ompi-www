<?
$subject_val = "[OMPI devel] 32 bit openib btl warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 09:14:21 2008" -->
<!-- isoreceived="20080201141421" -->
<!-- sent="Fri, 1 Feb 2008 09:14:00 -0500" -->
<!-- isosent="20080201141400" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 32 bit openib btl warnings" -->
<!-- id="6B999967-BB10-4C86-8B3E-CBEEE122AA72_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] 32 bit openib btl warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 09:14:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3113.php">Tim Prins: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>Previous message:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3113.php">Tim Prins: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>Reply:</strong> <a href="3113.php">Tim Prins: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed these in IBM's MTT runs on the rhc branch last night:
<br>
<p>btl_openib_frag.c: In function 'out_constructor':
<br>
btl_openib_frag.c:74: warning: cast from pointer to integer of  
<br>
different size
<br>
btl_openib_frag.c: In function 'recv_constructor':
<br>
btl_openib_frag.c:120: warning: cast from pointer to integer of  
<br>
different size
<br>
btl_openib_frag.c: In function 'get_constructor':
<br>
btl_openib_frag.c:141: warning: cast from pointer to integer of  
<br>
different size
<br>
btl_openib_lex.c:1740: warning: 'yy_flex_realloc' defined but not used
<br>
<p>This should be fairly recent with the OMPI trunk; I seem to recall  
<br>
seeing Ralph merge yesterday.
<br>
<p>I don't test 32 bit builds; do we have some casting / size issues in  
<br>
32 bit?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3113.php">Tim Prins: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>Previous message:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3113.php">Tim Prins: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>Reply:</strong> <a href="3113.php">Tim Prins: "Re: [OMPI devel] 32 bit openib btl warnings"</a>
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
