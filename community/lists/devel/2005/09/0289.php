<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  1 05:38:40 2005" -->
<!-- isoreceived="20050901103840" -->
<!-- sent="Thu, 1 Sep 2005 06:38:33 -0400" -->
<!-- isosent="20050901103833" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  ltdl.h problem" -->
<!-- id="9cf0cd617a8c3fa0aaff321bb06475e7_at_lam-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050901043709.GC5483_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-01 05:38:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0290.php">Jeff Squyres: "Re:  Open MPI Illegal symbol report"</a>
<li><strong>Previous message:</strong> <a href="0288.php">Ralph H. Castain: "RHC development plans"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0286.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0286.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 1, 2005, at 12:37 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt;&gt; For some component it work as expected because on the revision 7106 
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; -I$(top_srcdir)/opal/libltdl has been added to the AM_CPPFLAGS in the
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.am. As most of our code use components there is a dependency
</span><br>
<span class="quotelev2">&gt;&gt; between nearly every file in the ompi source code and the ldtl.h file.
</span><br>
<span class="quotelev2">&gt;&gt; Having to modify all the Makefile.am is a herculean task ...
</span><br>
<p>First off, this is clearly a mistake.  There are only a *very* small 
<br>
number of files in the OPAL base that need ltdl.h.  There's no reason 
<br>
it should be a dependency for the majority of the tree.
<br>
<p>I see the issue in the source code, and I'll fix it 
<br>
(opal/mca/base/base.h, which is widely included throughout the tree, 
<br>
has declarations of some internal functions).
<br>
<p><span class="quotelev1">&gt; Ah, ok, I was blind then, in thinking only the parts that compiled over
</span><br>
<span class="quotelev1">&gt; here used ltdl.h.  There are a couple of ways to add include paths to
</span><br>
<span class="quotelev1">&gt; many Makefile.am's: You could leverage config/Makefile.options, and set
</span><br>
<span class="quotelev1">&gt; a default value for AM_CPPFLAGS (surely you have to change the
</span><br>
<span class="quotelev1">&gt; Makefile.am's once to only add to AM_CPPFLAGS afterwards; or, maybe
</span><br>
<span class="quotelev1">&gt; better, to add some other variable CPPFLAGS_LTDL set in
</span><br>
<span class="quotelev1">&gt; Makefile.options).
</span><br>
<p>I'll add the relevant -I's and fix up all the remaining #include 
<br>
statements while I'm at it (there's a few places where ltdl.h is 
<br>
included).
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} jsquyres_at_[hidden]
{+} <a href="http://www.lam-mpi.org/">http://www.lam-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0290.php">Jeff Squyres: "Re:  Open MPI Illegal symbol report"</a>
<li><strong>Previous message:</strong> <a href="0288.php">Ralph H. Castain: "RHC development plans"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0286.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0286.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
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
