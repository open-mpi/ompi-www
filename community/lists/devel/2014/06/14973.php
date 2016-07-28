<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 23:09:15 2014" -->
<!-- isoreceived="20140605030915" -->
<!-- sent="Wed, 4 Jun 2014 20:09:11 -0700" -->
<!-- isosent="20140605030911" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="7164160B-8391-4A92-B058-78087999C08A_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-04 23:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14974.php">George Bosilca: "[OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>Previous message:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14976.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14976.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, the problem is that we can't simply decide that anything called &quot;ib..&quot; is an IB port and should be ignored. There is no naming rule regarding IP interfaces that I've ever heard about that would allow us to make such an assumption, though I admit most people let the system create default names and thus would get something like an &quot;ib..&quot;.
<br>
<p>So we leave it up to the sys admin to configure the system based on their knowledge of what they want to use. On the big clusters at the labs, we commonly put MCA params in the default param file for this purpose as we *don't* want OOB traffic going over the IB fabric.
<br>
<p>But that's the sys admin's choice, not a requirement. I've seen organizations that do it the other way because their Ethernet is really slow.
<br>
<p>In this case, the problem is really in the OOB itself. The local proc is connecting to its local daemon via eth0, which is fine. When it sends a message to mpirun on a different proc, that message goes from the app to the daemon via eth0. The daemon looks for mpirun in its contact list, and sees that it has a direct link to mpirun via this nifty &quot;ib0&quot; interface - and so it uses that one to relay the message along.
<br>
<p>This is where we are hitting the problem - the OOB isn't correctly doing the transfer between those two interfaces like it should. So it is a bug that we need to fix, regardless of any other actions (e.g., if it was an eth1 that was the direct connection, we would still want to transfer the message to the other interface).
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jun 4, 2014, at 7:32 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for the time being, i just found a workaround
</span><br>
<span class="quotelev1">&gt; --mca oob_tcp_if_include eth0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Generally speaking, is openmpi doing the wiser thing ?
</span><br>
<span class="quotelev1">&gt; here is what i mean :
</span><br>
<span class="quotelev1">&gt; the cluster i work on (4k+ nodes) each node has two ip interfaces :
</span><br>
<span class="quotelev1">&gt;  * eth0 (gigabit ethernet) : because of the cluster size, several subnets are used.
</span><br>
<span class="quotelev1">&gt;  * ib0 (IP over IB) : only one subnet
</span><br>
<span class="quotelev1">&gt; i can easily understand such a large cluster is not so common, but on the other hand i do not believe the IP configuration (subnetted gigE and single subnet IPoIB) can be called exotic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if nodes from different eth0 subnets are used, and if i understand correctly your previous replies, orte will &quot;discard&quot; eth0 because nodes cannot contact each other &quot;directly&quot;.
</span><br>
<span class="quotelev1">&gt; directly means the nodes are not on the same subnet. that being said, they can communicate via IP thanks to IP routing (i mean IP routing, i do *not* mean orte routing).
</span><br>
<span class="quotelev1">&gt; that means orte communications will use IPoIB which might not be the best thing to do since establishing an IPoIB connection can be long (especially at scale *and* if the arp table is not populated)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is my understanding correct so far ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bottom line, i would have expected openmpi uses eth0 regardless IP routing is required, and ib0 is simply not used (or eventually used as a fallback option)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this leads to my next question : is the current default ok ? if not should we change it and how ?
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; imho :
</span><br>
<span class="quotelev1">&gt;  - IP routing is not always a bad/slow thing
</span><br>
<span class="quotelev1">&gt;  - gigE can sometimes be better than IPoIB)
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i am fine if at the end :
</span><br>
<span class="quotelev1">&gt; - this issue is fixed
</span><br>
<span class="quotelev1">&gt; - we decide it is up to the sysadmin to make --mca oob_tcp_if_include eth0 the default if this is really thought to be best for the cluster. (and i can try to draft a faq if needed)
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
<span class="quotelev1">&gt; On Wed, Jun 4, 2014 at 11:50 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll work on it - may take a day or two to really fix. Only impacts systems with mismatched interfaces, which is why we aren't generally seeing it.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14972.php">http://www.open-mpi.org/community/lists/devel/2014/06/14972.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14973/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14974.php">George Bosilca: "[OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>Previous message:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14972.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14976.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14976.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
