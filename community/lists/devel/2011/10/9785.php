<?
$subject_val = "[OMPI devel] yyunput warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  6 14:55:50 2011" -->
<!-- isoreceived="20111006185550" -->
<!-- sent="Thu, 06 Oct 2011 14:55:45 -0400" -->
<!-- isosent="20111006185545" -->
<!-- name="Boehm, Swen" -->
<!-- email="bohms_at_[hidden]" -->
<!-- subject="[OMPI devel] yyunput warnings" -->
<!-- id="5028ECF4-0DA8-418C-AFF9-37687CE54CC6_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] yyunput warnings<br>
<strong>From:</strong> Boehm, Swen (<em>bohms_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-06 14:55:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Previous message:</strong> <a href="9784.php">Alex Brick: "[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Reply:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fwiw I created a patch to get rid of the following warnings:
<br>
<p>keyval_lex.c:1251: warning: 'yyunput' defined but not used
<br>
show_help_lex.c:1182: warning: 'yyunput' defined but not used
<br>
carto_file_lex.c:1256: warning: 'yyunput' defined but not used
<br>
util/hostfile/hostfile_lex.c:1665: warning: 'yyunput' defined but not used
<br>
rmaps_rank_file_lex.c:1408: warning: 'yyunput' defined but not used
<br>
<p>let me know what you think.
<br>
<p>-- Swen
<br>
<p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9785/ompi_yyunput.diff">ompi_yyunput.diff</a>
</ul>
<!-- attachment="ompi_yyunput.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Previous message:</strong> <a href="9784.php">Alex Brick: "[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Reply:</strong> <a href="9786.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
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
