<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 10:59:07 2015" -->
<!-- isoreceived="20150220155907" -->
<!-- sent="Fri, 20 Feb 2015 15:59:05 +0000" -->
<!-- isosent="20150220155905" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2" -->
<!-- id="90F4D702-9469-4A6E-8766-86BED344FFA7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150220124625.A5465260267_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 10:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17010.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<li><strong>Previous message:</strong> <a href="17008.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17010.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<li><strong>Reply:</strong> <a href="17010.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 20, 2015, at 6:46 AM, gitdub_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi-tests&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  ff3dee227f572c21fc6d35ed78cb359578a2661e (commit)
</span><br>
<span class="quotelev1">&gt;      from  3ca024f4025d0582c5365e960af5b857a2cf8ca4 (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-tests/commit/ff3dee227f572c21fc6d35ed78cb359578a2661e">https://github.com/open-mpi/ompi-tests/commit/ff3dee227f572c21fc6d35ed78cb359578a2661e</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit ff3dee227f572c21fc6d35ed78cb359578a2661e
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Fri Feb 20 04:46:12 2015 -0800
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Cisco: stop testing the intel compiler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/cisco/mtt/community/cisco-ompi-core-testing-master.ini b/cisco/mtt/community/cisco-ompi-core-testing-master.ini
</span><br>
<span class="quotelev1">&gt; index 942c152..465890f 100644
</span><br>
<span class="quotelev1">&gt; --- a/cisco/mtt/community/cisco-ompi-core-testing-master.ini
</span><br>
<span class="quotelev1">&gt; +++ b/cisco/mtt/community/cisco-ompi-core-testing-master.ini
</span><br>
<span class="quotelev1">&gt; @@ -105,7 +105,9 @@ ompi_configure_arguments = CC=clang CXX=clang++ --disable-mpi-fortran &quot;CFLAGS=-g
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -[MPI install: Intel-12.1]
</span><br>
<span class="quotelev1">&gt; +# Intel compiler borked their 2015 update 2, which broke all my other
</span><br>
<span class="quotelev1">&gt; +# intel compiler installs. :-( :-( :-(
</span><br>
<span class="quotelev1">&gt; +[SKPI MPI install: Intel-12.1]
</span><br>
<p>I think you mean &quot;SKIP&quot; :-)
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17010.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<li><strong>Previous message:</strong> <a href="17008.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17010.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<li><strong>Reply:</strong> <a href="17010.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
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
