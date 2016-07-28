<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 08:00:58 2014" -->
<!-- isoreceived="20140605120058" -->
<!-- sent="Thu, 5 Jun 2014 12:00:56 +0000" -->
<!-- isosent="20140605120056" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="67EA35B4-C90E-4D60-B78D-D1E189459915_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tQOtNXZ8BqvN3h6=8cm44AEvosY16Ea==ectHtu_hurA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-05 08:00:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14978.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14976.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14978.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14978.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another random thought for Gilles situation: why not oob-TCP-if-include ib0?  (And not eth0)
<br>
<p>That should solve his problem, but not the larger issue I raised in my previous email.
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Jun 4, 2014, at 9:32 PM, &quot;Gilles Gouaillardet&quot; &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
<br>
<p>Thanks Ralf,
<br>
<p>for the time being, i just found a workaround
<br>
--mca oob_tcp_if_include eth0
<br>
<p>Generally speaking, is openmpi doing the wiser thing ?
<br>
here is what i mean :
<br>
the cluster i work on (4k+ nodes) each node has two ip interfaces :
<br>
&nbsp;* eth0 (gigabit ethernet) : because of the cluster size, several subnets are used.
<br>
&nbsp;* ib0 (IP over IB) : only one subnet
<br>
i can easily understand such a large cluster is not so common, but on the other hand i do not believe the IP configuration (subnetted gigE and single subnet IPoIB) can be called exotic.
<br>
<p>if nodes from different eth0 subnets are used, and if i understand correctly your previous replies, orte will &quot;discard&quot; eth0 because nodes cannot contact each other &quot;directly&quot;.
<br>
directly means the nodes are not on the same subnet. that being said, they can communicate via IP thanks to IP routing (i mean IP routing, i do *not* mean orte routing).
<br>
that means orte communications will use IPoIB which might not be the best thing to do since establishing an IPoIB connection can be long (especially at scale *and* if the arp table is not populated)
<br>
<p>is my understanding correct so far ?
<br>
<p>bottom line, i would have expected openmpi uses eth0 regardless IP routing is required, and ib0 is simply not used (or eventually used as a fallback option)
<br>
<p>this leads to my next question : is the current default ok ? if not should we change it and how ?
<br>
/*
<br>
imho :
<br>
&nbsp;- IP routing is not always a bad/slow thing
<br>
&nbsp;- gigE can sometimes be better than IPoIB)
<br>
*/
<br>
<p>i am fine if at the end :
<br>
- this issue is fixed
<br>
- we decide it is up to the sysadmin to make --mca oob_tcp_if_include eth0 the default if this is really thought to be best for the cluster. (and i can try to draft a faq if needed)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wed, Jun 4, 2014 at 11:50 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p>I'll work on it - may take a day or two to really fix. Only impacts systems with mismatched interfaces, which is why we aren't generally seeing it.
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14972.php">http://www.open-mpi.org/community/lists/devel/2014/06/14972.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14977/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14978.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14976.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14978.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14978.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
