<?
$subject_val = "Re: [OMPI devel] noticing odd message";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 19:10:33 2015" -->
<!-- isoreceived="20150420231033" -->
<!-- sent="Mon, 20 Apr 2015 23:10:22 +0000" -->
<!-- isosent="20150420231022" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] noticing odd message" -->
<!-- id="5F8BDAF6-2134-4187-9111-7B23C9DC9144_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150420225251.GC83505_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 19:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17287.php">Devendar Bureddy: "Re: [OMPI devel] binding output error"</a>
<li><strong>Previous message:</strong> <a href="17285.php">Ralph Castain: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>In reply to:</strong> <a href="17284.php">Nathan Hjelm: "Re: [OMPI devel] noticing odd message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p><span class="quotelev1">&gt; On Apr 20, 2015, at 6:52 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fixed in 359a282e7d31a8a7af3a69ead518ff328862b801. mca_base_var does not
</span><br>
<span class="quotelev1">&gt; currently allow component to be registered with NULL for both the
</span><br>
<span class="quotelev1">&gt; framework and component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 20, 2015 at 04:34:10PM -0600, Howard Pritchard wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Hi Folks,
</span><br>
<span class="quotelev2">&gt;&gt;   Working on master, I&quot;m getting an odd message:
</span><br>
<span class="quotelev2">&gt;&gt;   malloc debug: Request for 1 zeroed elements of size 0 (mca_base_var.c,
</span><br>
<span class="quotelev2">&gt;&gt;   170)
</span><br>
<span class="quotelev2">&gt;&gt;   whenever I launch a job.
</span><br>
<span class="quotelev2">&gt;&gt;   It looks like this can be traced back to this line in
</span><br>
<span class="quotelev2">&gt;&gt;   orte_ess_singleton_component_register:
</span><br>
<span class="quotelev2">&gt;&gt;   mca_base_var_register_synonym(ret &quot;orte&quot;, NULL, NULL, &quot;server&quot;, 0);
</span><br>
<span class="quotelev2">&gt;&gt;   this just recently started appearing, perhaps today, but I've not been
</span><br>
<span class="quotelev2">&gt;&gt;   running
</span><br>
<span class="quotelev2">&gt;&gt;   anything over the weekend.
</span><br>
<span class="quotelev2">&gt;&gt;   Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17279.php">http://www.open-mpi.org/community/lists/devel/2015/04/17279.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17284.php">http://www.open-mpi.org/community/lists/devel/2015/04/17284.php</a>
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
<li><strong>Next message:</strong> <a href="17287.php">Devendar Bureddy: "Re: [OMPI devel] binding output error"</a>
<li><strong>Previous message:</strong> <a href="17285.php">Ralph Castain: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>In reply to:</strong> <a href="17284.php">Nathan Hjelm: "Re: [OMPI devel] noticing odd message"</a>
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
