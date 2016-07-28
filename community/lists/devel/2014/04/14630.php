<?
$subject_val = "Re: [OMPI devel] mosix patches";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 11:08:59 2014" -->
<!-- isoreceived="20140428150859" -->
<!-- sent="Mon, 28 Apr 2014 15:08:58 +0000" -->
<!-- isosent="20140428150858" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mosix patches" -->
<!-- id="9FBB5825-AC81-48AC-ADE2-FFF6B06B06DF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E70A0426-34A2-48B0-A86C-192BFC2D31EB_at_inasan.ru" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mosix patches<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 11:08:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14631.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14629.php">VandeVondele  Joost: "[OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<li><strong>In reply to:</strong> <a href="14593.php">Pavel V. Kaygorodov: "[OMPI devel] mosix patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14640.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Reply:</strong> <a href="14640.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If it helps, I just updated that to the most recent OMPI trunk SVN revision.  There were at least 3 files that had conflicts, though:
<br>
<p>Skipped 'opal/mca/hwloc/base/hwloc_base_util.c' -- Node remains in conflict
<br>
Skipped 'ompi/mca/btl/usnic/btl_usnic_frag.c' -- Node remains in conflict
<br>
Skipped 'orte/mca/ess/hnp/ess_hnp_module.c' -- Node remains in conflict
<br>
<p>Alex will have to fix those, though...
<br>
<p><p>On Apr 24, 2014, at 12:07 PM, Pavel V. Kaygorodov &lt;pasha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is current status of mosix support in OpenMPI?
</span><br>
<span class="quotelev1">&gt; I have tried patches from <a href="http://www.cs.huji.ac.il/wikis/MediaWiki/mosix/index.php/Process_migration_for_OpenMPI">http://www.cs.huji.ac.il/wikis/MediaWiki/mosix/index.php/Process_migration_for_OpenMPI</a> but without any success, even on 1.6 branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With best regards, 
</span><br>
<span class="quotelev1">&gt;  Pavel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14593.php">http://www.open-mpi.org/community/lists/devel/2014/04/14593.php</a>
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
<li><strong>Next message:</strong> <a href="14631.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14629.php">VandeVondele  Joost: "[OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<li><strong>In reply to:</strong> <a href="14593.php">Pavel V. Kaygorodov: "[OMPI devel] mosix patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14640.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Reply:</strong> <a href="14640.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
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
