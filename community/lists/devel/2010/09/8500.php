<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 18 07:39:51 2010" -->
<!-- isoreceived="20100918113951" -->
<!-- sent="Sat, 18 Sep 2010 13:39:44 +0200" -->
<!-- isosent="20100918113944" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767" -->
<!-- id="959AB85C-B899-4B0D-94F0-D6353AF5C70D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1FBFF0FC-6C81-45FA-BCA8-A4D6A2B333CC_at_cisco.com" -->
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
<strong>Date:</strong> 2010-09-18 07:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8501.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8499.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>In reply to:</strong> <a href="8499.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8501.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8501.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 18, 2010, at 10:03 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; So it's still on my list to go back and figure out what changed (i.e., it didn't complain about valgrind's version before this -- so something must have changed.  We don't use --without-valgrind when configuring, so I'm not sure why it somehow became a fatal error).  :-)
</span><br>
<p>I figured out what changed -- it was something we did in ompi_mca.m4.  So I sent Brian a patch (the m4 is a little dicey -- I don't want to make a change without checking with him).    However, he's out on vacation, so it may be a little bit before I get an answer.
<br>
<p>For the moment, <a href="https://svn.open-mpi.org/trac/ompi/changeset/23767">https://svn.open-mpi.org/trac/ompi/changeset/23767</a> is a good enough workaround (I'm not entirely sure it was right for the valgrind component's configure.m4 to AC_MSG_ERROR, anyway).
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
<li><strong>Next message:</strong> <a href="8501.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8499.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>In reply to:</strong> <a href="8499.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8501.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8501.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
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
