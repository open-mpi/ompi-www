<?
$subject_val = "Re: [OMPI devel] [2.0.0rc] memory:patcher fragility";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 12:48:59 2016" -->
<!-- isoreceived="20160507164859" -->
<!-- sent="Sat, 7 May 2016 16:48:48 +0000" -->
<!-- isosent="20160507164848" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc] memory:patcher fragility" -->
<!-- id="6D989BEA-3E77-41C0-9F67-AE8040D4CDD0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA14opPPHCqLfymdLCZ2B2pPj_FDFMrdiKDPA2xwUYPssbA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc] memory:patcher fragility<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-07 12:48:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18939.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Previous message:</strong> <a href="18937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] opal/mca/timer/aix?"</a>
<li><strong>In reply to:</strong> <a href="18935.php">Paul Hargrove: "[OMPI devel] [2.0.0rc] memory:patcher fragility"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul -- opened PR here: <a href="https://github.com/open-mpi/ompi/pull/1653">https://github.com/open-mpi/ompi/pull/1653</a>
<br>
<p><span class="quotelev1">&gt; On May 6, 2016, at 10:42 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed that opal/mca/memory/patcher/memory_patcher_component.c includes &lt;sys/syscall.h&gt; without ever checking (not even in the .m4 fragment) that this header exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the moment, AIX is the only O/S I've encountered that doesn't have a sys/syscall.h.
</span><br>
<span class="quotelev1">&gt; However, I think the possibility of others needs to be considered.
</span><br>
<span class="quotelev1">&gt; My recommendation is that the .m4 disqualify the component if sys/syscall.h does not exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was actually surprised that on AIX memory:patcher was compiled despite all of the &quot;no&quot; results in the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- MCA component memory:patcher (m4 configuration macro, priority 41)
</span><br>
<span class="quotelev1">&gt; checking for MCA component memory:patcher compile mode... static
</span><br>
<span class="quotelev1">&gt; checking for __curbrk symbol... no
</span><br>
<span class="quotelev1">&gt; checking whether __mmap prototype exists... yes
</span><br>
<span class="quotelev1">&gt; checking whether __mmap symbol exists... no
</span><br>
<span class="quotelev1">&gt; checking whether __syscall prototype exists... no
</span><br>
<span class="quotelev1">&gt; checking whether __syscall symbol exists... no
</span><br>
<span class="quotelev1">&gt; checking linux/mman.h usability... no
</span><br>
<span class="quotelev1">&gt; checking linux/mman.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for linux/mman.h... no
</span><br>
<span class="quotelev1">&gt; checking if MCA component memory:patcher can compile... yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18935.php">http://www.open-mpi.org/community/lists/devel/2016/05/18935.php</a>
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
<li><strong>Next message:</strong> <a href="18939.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<li><strong>Previous message:</strong> <a href="18937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] opal/mca/timer/aix?"</a>
<li><strong>In reply to:</strong> <a href="18935.php">Paul Hargrove: "[OMPI devel] [2.0.0rc] memory:patcher fragility"</a>
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
