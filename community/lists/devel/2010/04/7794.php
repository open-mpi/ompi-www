<?
$subject_val = "Re: [OMPI devel] New OMPI MPI extension";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 12:40:24 2010" -->
<!-- isoreceived="20100422164024" -->
<!-- sent="Thu, 22 Apr 2010 12:40:20 -0400" -->
<!-- isosent="20100422164020" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New OMPI MPI extension" -->
<!-- id="08EF8FAA-759D-4830-94ED-925CBEB87BF1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="l2n73a01bf21004220934x164a05bdhcf10a8fb56b7024e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New OMPI MPI extension<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 12:40:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7795.php">Ralph Castain: "[OMPI devel] Errmgr update"</a>
<li><strong>Previous message:</strong> <a href="7793.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>In reply to:</strong> <a href="7793.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2010, at 12:34 PM, Rayson Ho wrote:
<br>
<p><span class="quotelev1">&gt; Seems like OMPI_Affinity_str() 's finest granularity is at the core
</span><br>
<span class="quotelev1">&gt; level. However, in SGE (Sun Grid Engine) we also offer thread level
</span><br>
<span class="quotelev1">&gt; (SMT) binding:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://wikis.sun.com/display/gridengine62u5/Using+Job+to+Core+Binding">http://wikis.sun.com/display/gridengine62u5/Using+Job+to+Core+Binding</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will OpenMPI support thread level binding in the future??
</span><br>
<p>Yes, but two things have to happen first:
<br>
<p>1. Successfully import hwloc.  I tried importing hwloc 1.0rc1 earlier this week and ran into some problems; I unfortunately got side-tracked before I could fix them.  I need to fix those and get hwloc 1.0 out the door (it isn't clear to me yet if the problem was in OMPI or hwloc; but I want to resolve it before hwloc hits v1.0).
<br>
<p>2. Update our internal handling inside OMPI to understand hardware threads (and possibly boards).  Our current internal APIs were written before hardware threads really mattered to HPC, so we need to do some updates.  It probably won't be too hard to do, but it does touch a bunch of places in OPAL and ORTE.
<br>
<p>This likely puts OMPI hardware thread support in the 1.5.1 or 1.5.2 timeframe.
<br>
<p><span class="quotelev1">&gt; BTW, another 2 typos in README:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1193    subdirectory off &lt;- directory &quot;of&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1199 thse extensions &lt;- &quot;these&quot; extensions
</span><br>
<p>Awesome; thanks!  I had apparently enabled &quot;typo-mode&quot; in emacs when I wrote this stuff.  :-)
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
<li><strong>Next message:</strong> <a href="7795.php">Ralph Castain: "[OMPI devel] Errmgr update"</a>
<li><strong>Previous message:</strong> <a href="7793.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>In reply to:</strong> <a href="7793.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
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
