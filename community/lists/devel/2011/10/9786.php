<?
$subject_val = "Re: [OMPI devel] yyunput warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  6 14:59:17 2011" -->
<!-- isoreceived="20111006185917" -->
<!-- sent="Thu, 6 Oct 2011 14:59:11 -0400" -->
<!-- isosent="20111006185911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] yyunput warnings" -->
<!-- id="3CD1E0CB-E145-42CC-BA9B-74895C3611FF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5028ECF4-0DA8-418C-AFF9-37687CE54CC6_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] yyunput warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-06 14:59:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9787.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Previous message:</strong> <a href="9785.php">Boehm, Swen: "[OMPI devel] yyunput warnings"</a>
<li><strong>In reply to:</strong> <a href="9785.php">Boehm, Swen: "[OMPI devel] yyunput warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9788.php">Boehm, Swen: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Reply:</strong> <a href="9788.php">Boehm, Swen: "Re: [OMPI devel] yyunput warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nifty -- I had no idea that %unput existed.  Do you know how far back it works in flex versions?  We currently say on the web site that developers need at least flex 2.5.4 to build.  Will using an %unput (say, in trunk and v1.5) require a new minimum flex version?
<br>
<p><p>On Oct 6, 2011, at 2:55 PM, Boehm, Swen wrote:
<br>
<p><span class="quotelev1">&gt; Fwiw I created a patch to get rid of the following warnings:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; keyval_lex.c:1251: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev1">&gt; show_help_lex.c:1182: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev1">&gt; carto_file_lex.c:1256: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev1">&gt; util/hostfile/hostfile_lex.c:1665: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file_lex.c:1408: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; let me know what you think.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Swen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_yyunput.diff&gt;_______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9787.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Previous message:</strong> <a href="9785.php">Boehm, Swen: "[OMPI devel] yyunput warnings"</a>
<li><strong>In reply to:</strong> <a href="9785.php">Boehm, Swen: "[OMPI devel] yyunput warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9788.php">Boehm, Swen: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Reply:</strong> <a href="9788.php">Boehm, Swen: "Re: [OMPI devel] yyunput warnings"</a>
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
