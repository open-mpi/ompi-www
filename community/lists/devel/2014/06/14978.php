<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 10:01:38 2014" -->
<!-- isoreceived="20140605140138" -->
<!-- sent="Thu, 5 Jun 2014 07:01:34 -0700" -->
<!-- isosent="20140605140134" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="7DCE0E50-B1F0-4651-B8E4-F08C69530603_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="67EA35B4-C90E-4D60-B78D-D1E189459915_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent hangs when exiting with error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-05 10:01:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14979.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14982.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14982.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Because Gilles wants to avoid using IB for TCP messages, and using eth0 also solves the problem (the messages just route)
<br>
<p>On Jun 5, 2014, at 5:00 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Another random thought for Gilles situation: why not oob-TCP-if-include ib0?  (And not eth0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That should solve his problem, but not the larger issue I raised in my previous email. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 4, 2014, at 9:32 PM, &quot;Gilles Gouaillardet&quot; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Ralf,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; for the time being, i just found a workaround
</span><br>
<span class="quotelev2">&gt;&gt; --mca oob_tcp_if_include eth0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Generally speaking, is openmpi doing the wiser thing ?
</span><br>
<span class="quotelev2">&gt;&gt; here is what i mean :
</span><br>
<span class="quotelev2">&gt;&gt; the cluster i work on (4k+ nodes) each node has two ip interfaces :
</span><br>
<span class="quotelev2">&gt;&gt;  * eth0 (gigabit ethernet) : because of the cluster size, several subnets are used.
</span><br>
<span class="quotelev2">&gt;&gt;  * ib0 (IP over IB) : only one subnet
</span><br>
<span class="quotelev2">&gt;&gt; i can easily understand such a large cluster is not so common, but on the other hand i do not believe the IP configuration (subnetted gigE and single subnet IPoIB) can be called exotic.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if nodes from different eth0 subnets are used, and if i understand correctly your previous replies, orte will &quot;discard&quot; eth0 because nodes cannot contact each other &quot;directly&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; directly means the nodes are not on the same subnet. that being said, they can communicate via IP thanks to IP routing (i mean IP routing, i do *not* mean orte routing).
</span><br>
<span class="quotelev2">&gt;&gt; that means orte communications will use IPoIB which might not be the best thing to do since establishing an IPoIB connection can be long (especially at scale *and* if the arp table is not populated)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; is my understanding correct so far ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bottom line, i would have expected openmpi uses eth0 regardless IP routing is required, and ib0 is simply not used (or eventually used as a fallback option)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; this leads to my next question : is the current default ok ? if not should we change it and how ?
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; imho :
</span><br>
<span class="quotelev2">&gt;&gt;  - IP routing is not always a bad/slow thing
</span><br>
<span class="quotelev2">&gt;&gt;  - gigE can sometimes be better than IPoIB)
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i am fine if at the end :
</span><br>
<span class="quotelev2">&gt;&gt; - this issue is fixed
</span><br>
<span class="quotelev2">&gt;&gt; - we decide it is up to the sysadmin to make --mca oob_tcp_if_include eth0 the default if this is really thought to be best for the cluster. (and i can try to draft a faq if needed)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 4, 2014 at 11:50 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll work on it - may take a day or two to really fix. Only impacts systems with mismatched interfaces, which is why we aren't generally seeing it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14972.php">http://www.open-mpi.org/community/lists/devel/2014/06/14972.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14977.php">http://www.open-mpi.org/community/lists/devel/2014/06/14977.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14979.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14982.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14982.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
