<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 11:04:50 2015" -->
<!-- isoreceived="20150220160450" -->
<!-- sent="Fri, 20 Feb 2015 16:04:48 +0000" -->
<!-- isosent="20150220160448" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2" -->
<!-- id="FBA06E86-53D7-4A94-863A-69DB9EE752C4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="90F4D702-9469-4A6E-8766-86BED344FFA7_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 11:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17011.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17009.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<li><strong>In reply to:</strong> <a href="17009.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I did.  I saw it as I typed it, but it doesn't really matter -- as long as the section name doesn't begin with &quot;MPI Install&quot;, it'll get skpied.  And it'll get skipped, too.  ;-)
<br>
<p><p><span class="quotelev1">&gt; On Feb 20, 2015, at 10:59 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2015, at 6:46 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt;&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt;&gt; the project &quot;open-mpi/ompi-tests&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt;&gt;      via  ff3dee227f572c21fc6d35ed78cb359578a2661e (commit)
</span><br>
<span class="quotelev2">&gt;&gt;     from  3ca024f4025d0582c5365e960af5b857a2cf8ca4 (commit)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi-tests/commit/ff3dee227f572c21fc6d35ed78cb359578a2661e">https://github.com/open-mpi/ompi-tests/commit/ff3dee227f572c21fc6d35ed78cb359578a2661e</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; commit ff3dee227f572c21fc6d35ed78cb359578a2661e
</span><br>
<span class="quotelev2">&gt;&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Fri Feb 20 04:46:12 2015 -0800
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Cisco: stop testing the intel compiler
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/cisco/mtt/community/cisco-ompi-core-testing-master.ini b/cisco/mtt/community/cisco-ompi-core-testing-master.ini
</span><br>
<span class="quotelev2">&gt;&gt; index 942c152..465890f 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/cisco/mtt/community/cisco-ompi-core-testing-master.ini
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/cisco/mtt/community/cisco-ompi-core-testing-master.ini
</span><br>
<span class="quotelev2">&gt;&gt; @@ -105,7 +105,9 @@ ompi_configure_arguments = CC=clang CXX=clang++ --disable-mpi-fortran &quot;CFLAGS=-g
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -[MPI install: Intel-12.1]
</span><br>
<span class="quotelev2">&gt;&gt; +# Intel compiler borked their 2015 update 2, which broke all my other
</span><br>
<span class="quotelev2">&gt;&gt; +# intel compiler installs. :-( :-( :-(
</span><br>
<span class="quotelev2">&gt;&gt; +[SKPI MPI install: Intel-12.1]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you mean &quot;SKIP&quot; :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17011.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17009.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<li><strong>In reply to:</strong> <a href="17009.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
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
