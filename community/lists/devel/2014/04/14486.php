<?
$subject_val = "[OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 07:50:59 2014" -->
<!-- isoreceived="20140410115059" -->
<!-- sent="Thu, 10 Apr 2014 14:50:28 +0300" -->
<!-- isosent="20140410115028" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes" -->
<!-- id="CAEcYPwDcyS-mPJiPdxLuX_0aLs_7iS2VnmFAmOcE0JLOQC1XFQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 07:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<li><strong>Previous message:</strong> <a href="14485.php">Anthony Alba: "[OMPI devel] [SOLVED] Re: Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<li><strong>Reply:</strong> <a href="14487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm testing openmpi-1.8.
<br>
<p>MPI_Get_error_string() for the following error classes is failing. I
<br>
guess you just forgot to update the list of error strings.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERR_RMA_RANGE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERR_RMA_ATTACH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERR_RMA_FLAVOR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERR_RMA_SHARED
<br>
<p>I'm attaching a simple test code for you to verify the issue.
<br>
<p>Additionally, please update the following comment in mpi.h
<br>
<p>/* Per MPI-3 p349 47, MPI_ERR_LASTCODE must be &gt;= the last predefined
<br>
&nbsp;&nbsp;&nbsp;MPI_ERR_&lt;foo&gt; code.  So just set it equal to the last code --
<br>
&nbsp;&nbsp;&nbsp;MPI_ERR_RMA_FLAVOR, in this case. */
<br>
#define MPI_ERR_LASTCODE              MPI_ERR_RMA_SHARED
<br>
<p>The comment is wrong, the last predefined error class is
<br>
MPI_ERR_RMA_SHARED and not  MPI_ERR_RMA_FLAVOR.
<br>
<p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (UNL/CONICET)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
3000 Santa Fe, Argentina
Tel: +54-342-4511594 (ext 1016)
Tel/Fax: +54-342-4511169

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14486/geterrstr.c">geterrstr.c</a>
</ul>
<!-- attachment="geterrstr.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<li><strong>Previous message:</strong> <a href="14485.php">Anthony Alba: "[OMPI devel] [SOLVED] Re: Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<li><strong>Reply:</strong> <a href="14487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
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
