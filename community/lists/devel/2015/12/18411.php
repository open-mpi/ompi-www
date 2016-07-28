<?
$subject_val = "Re: [OMPI devel] Add an orte tool";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 08:25:50 2015" -->
<!-- isoreceived="20151209132550" -->
<!-- sent="Wed, 9 Dec 2015 13:25:44 +0000" -->
<!-- isosent="20151209132544" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Add an orte tool" -->
<!-- id="11028B00-58C6-4B3D-AE28-F4140A43C965_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5v+Tg723bfeqovwmCTQiU_ChiCo_NSefD==tAakAdvjLw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Add an orte tool<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-09 08:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18412.php">Federico Reghenzani: "Re: [OMPI devel] Add an orte tool"</a>
<li><strong>Previous message:</strong> <a href="18410.php">Gilles Gouaillardet: "Re: [OMPI devel] Add an orte tool"</a>
<li><strong>In reply to:</strong> <a href="18410.php">Gilles Gouaillardet: "Re: [OMPI devel] Add an orte tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18412.php">Federico Reghenzani: "Re: [OMPI devel] Add an orte tool"</a>
<li><strong>Reply:</strong> <a href="18412.php">Federico Reghenzani: "Re: [OMPI devel] Add an orte tool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You also need to add your Makefile to the list in config/orte_config_files.m4 (and re-run autopen.pl).
<br>
<p><p><span class="quotelev1">&gt; On Dec 9, 2015, at 5:01 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Federico,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you also need to update orte/tools/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday, December 9, 2015, Federico Reghenzani &lt;federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to add a new tool under /orte/tools/, I've followed as example the orte-ps and created my orted-restore directory. I've also add the directory path in /orte/Makefile.am, but it seems that /orte/tools/orted-restore/Makefile.am is completely ignored by autogen.sh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did I missed something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Federico Reghenzani
</span><br>
<span class="quotelev1">&gt; __
</span><br>
<span class="quotelev1">&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt; Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18410.php">http://www.open-mpi.org/community/lists/devel/2015/12/18410.php</a>
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
<li><strong>Next message:</strong> <a href="18412.php">Federico Reghenzani: "Re: [OMPI devel] Add an orte tool"</a>
<li><strong>Previous message:</strong> <a href="18410.php">Gilles Gouaillardet: "Re: [OMPI devel] Add an orte tool"</a>
<li><strong>In reply to:</strong> <a href="18410.php">Gilles Gouaillardet: "Re: [OMPI devel] Add an orte tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18412.php">Federico Reghenzani: "Re: [OMPI devel] Add an orte tool"</a>
<li><strong>Reply:</strong> <a href="18412.php">Federico Reghenzani: "Re: [OMPI devel] Add an orte tool"</a>
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
