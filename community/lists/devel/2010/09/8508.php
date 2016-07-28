<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 11:54:42 2010" -->
<!-- isoreceived="20100920155442" -->
<!-- sent="Mon, 20 Sep 2010 11:54:35 -0400" -->
<!-- isosent="20100920155435" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767" -->
<!-- id="1E4D8F5E-77E0-4CCD-9CE7-DDD375709498_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0A54D86E-88A1-40CF-8EB2-5147BA9FEFCB_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-20 11:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8509.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Previous message:</strong> <a href="8507.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>In reply to:</strong> <a href="8507.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2010, at 11:48 AM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, was out of town last week.  The patch undoes the discussion we had -- we always run component macros, even if the component couldn't build, to solve the issue of AC_CONFIG_FILES needing to always be run.  
</span><br>
<p>Ah RIGHT -- *that* was the reason: AC_CONFIG_FILES.  This is why I asked before I committed.  :-)
<br>
<p><span class="quotelev1">&gt; So the first part of the patch is incorrect and should not be committed.  We might need to make the valgrind configure.m4 macro smarter, but the other option is really painful.
</span><br>
<p>Ok.  I'll do something here; I think the right solution is to:
<br>
<p>- have valgrind AC_MSG_WARN instead of AC_MSG_ERROR (which I committed already)
<br>
- have the memchecker/configure.m4 error if you --enable-memchecker but then no components are available to be compiled
<br>
<p>The latter is important because this is a static-only framework (i.e., a new component can't be introduced at run-tmie via DSO).
<br>
<p><span class="quotelev1">&gt; I think the second issue is a typo and can be changed.  Originally, I think we needed to know whether the component configure failed or the component was told not to build, but that no longer seems necessary.
</span><br>
<p>Cool.  I'll commit just that part tonight.
<br>
<p>Thanks!
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8509.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Previous message:</strong> <a href="8507.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>In reply to:</strong> <a href="8507.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
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
