<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 18 04:03:18 2010" -->
<!-- isoreceived="20100918080318" -->
<!-- sent="Sat, 18 Sep 2010 10:03:13 +0200" -->
<!-- isosent="20100918080313" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767" -->
<!-- id="1FBFF0FC-6C81-45FA-BCA8-A4D6A2B333CC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="074FB26D-9F36-4BF0-8AEA-DFA871F04D7D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-09-18 04:03:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8500.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8498.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>In reply to:</strong> <a href="8497.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8500.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8500.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 18, 2010, at 9:19 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Ha! I did that earlier too, but then realized that this error happens only when someone specifies they want-valigrind. I believe the issue here has been discussed before - if someone says &quot;give me valgrind support&quot;, then we should error out if the required level isn't available.
</span><br>
<p>Ya, I had thought of that, but I was testing the &quot;build a nightly tarball&quot; stuff and needed a fix committed so that the build machine wouldn't error out (because it does a fresh svn checkout to build the tarball).  The prior build tarball failures were because it was complaining that Valgrind's version was too small.
<br>
<p>So it's still on my list to go back and figure out what changed (i.e., it didn't complain about valgrind's version before this -- so something must have changed.  We don't use --without-valgrind when configuring, so I'm not sure why it somehow became a fatal error).  :-)
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
<li><strong>Next message:</strong> <a href="8500.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8498.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>In reply to:</strong> <a href="8497.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8500.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8500.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
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
