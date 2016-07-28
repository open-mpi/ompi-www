<?
$subject_val = "Re: [OMPI devel] noticing odd message";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 18:52:52 2015" -->
<!-- isoreceived="20150420225252" -->
<!-- sent="Mon, 20 Apr 2015 16:52:51 -0600" -->
<!-- isosent="20150420225251" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] noticing odd message" -->
<!-- id="20150420225251.GC83505_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj666DJkrQ8CRE+in7sGaKRPtHy3aySiMmV7z6_CGvL4yg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] noticing odd message<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 18:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17285.php">Ralph Castain: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Previous message:</strong> <a href="17283.php">Ralph Castain: "Re: [OMPI devel] binding output error"</a>
<li><strong>In reply to:</strong> <a href="17279.php">Howard Pritchard: "[OMPI devel] noticing odd message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17285.php">Ralph Castain: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Reply:</strong> <a href="17285.php">Ralph Castain: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Reply:</strong> <a href="17286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] noticing odd message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in 359a282e7d31a8a7af3a69ead518ff328862b801. mca_base_var does not
<br>
currently allow component to be registered with NULL for both the
<br>
framework and component.
<br>
<p>-Nathan
<br>
<p>On Mon, Apr 20, 2015 at 04:34:10PM -0600, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt;    Hi Folks,
</span><br>
<span class="quotelev1">&gt;    Working on master, I&quot;m getting an odd message:
</span><br>
<span class="quotelev1">&gt;    malloc debug: Request for 1 zeroed elements of size 0 (mca_base_var.c,
</span><br>
<span class="quotelev1">&gt;    170)
</span><br>
<span class="quotelev1">&gt;    whenever I launch a job.
</span><br>
<span class="quotelev1">&gt;    It looks like this can be traced back to this line in
</span><br>
<span class="quotelev1">&gt;    orte_ess_singleton_component_register:
</span><br>
<span class="quotelev1">&gt;    mca_base_var_register_synonym(ret &quot;orte&quot;, NULL, NULL, &quot;server&quot;, 0);
</span><br>
<span class="quotelev1">&gt;    this just recently started appearing, perhaps today, but I've not been
</span><br>
<span class="quotelev1">&gt;    running
</span><br>
<span class="quotelev1">&gt;    anything over the weekend.
</span><br>
<span class="quotelev1">&gt;    Howard
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17279.php">http://www.open-mpi.org/community/lists/devel/2015/04/17279.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17284/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17285.php">Ralph Castain: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Previous message:</strong> <a href="17283.php">Ralph Castain: "Re: [OMPI devel] binding output error"</a>
<li><strong>In reply to:</strong> <a href="17279.php">Howard Pritchard: "[OMPI devel] noticing odd message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17285.php">Ralph Castain: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Reply:</strong> <a href="17285.php">Ralph Castain: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Reply:</strong> <a href="17286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] noticing odd message"</a>
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
