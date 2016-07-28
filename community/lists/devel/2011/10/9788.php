<?
$subject_val = "Re: [OMPI devel] yyunput warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  6 15:25:49 2011" -->
<!-- isoreceived="20111006192549" -->
<!-- sent="Thu, 06 Oct 2011 15:25:43 -0400" -->
<!-- isosent="20111006192543" -->
<!-- name="Boehm, Swen" -->
<!-- email="bohms_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] yyunput warnings" -->
<!-- id="BC40EA3A-645C-4EDF-B41B-410C710CF02E_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3CD1E0CB-E145-42CC-BA9B-74895C3611FF_at_cisco.com" -->
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
<strong>From:</strong> Boehm, Swen (<em>bohms_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-06 15:25:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9789.php">George Bosilca: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Previous message:</strong> <a href="9787.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>In reply to:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9790.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Reply:</strong> <a href="9790.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know if it works with 2.5.4 for sure but I have seen lexer files that handle differences between 2.5.4 and 2.5.33 and they don't handle %option noun put differently. I would assume it will work. Maybe someone still using 2.5.4 can validate this.
<br>
<p>-- Swen
<br>
<p>On Oct 6, 2011, at 2:59 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Nifty -- I had no idea that %unput existed.  Do you know how far back it works in flex versions?  We currently say on the web site that developers need at least flex 2.5.4 to build.  Will using an %unput (say, in trunk and v1.5) require a new minimum flex version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 6, 2011, at 2:55 PM, Boehm, Swen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fwiw I created a patch to get rid of the following warnings:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; keyval_lex.c:1251: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; show_help_lex.c:1182: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; carto_file_lex.c:1256: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; util/hostfile/hostfile_lex.c:1665: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_rank_file_lex.c:1408: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; let me know what you think.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Swen
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_yyunput.diff&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; hxxp://www.cisco.com/web/about/doing_business/legal/cri/
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
<span class="quotelev1">&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9789.php">George Bosilca: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Previous message:</strong> <a href="9787.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>In reply to:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9790.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Reply:</strong> <a href="9790.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
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
