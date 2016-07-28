<?
$subject_val = "Re: [OMPI devel] Process placement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 13:38:29 2016" -->
<!-- isoreceived="20160413173829" -->
<!-- sent="Wed, 13 Apr 2016 10:38:25 -0700" -->
<!-- isosent="20160413173825" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process placement" -->
<!-- id="BA2AB99A-0EEF-4E3B-B6CA-8C18212E7C91_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="733D5702-13B6-4447-A2BD-BFE0A8F2CDF3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Process placement<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-13 13:38:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18762.php">Howard Pritchard: "[OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Previous message:</strong> <a href="18760.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<li><strong>In reply to:</strong> <a href="18760.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18915.php">Aurélien Bouteiller: "Re: [OMPI devel] Process placement"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18915.php">Aurélien Bouteiller: "Re: [OMPI devel] Process placement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The &#226;&#128;&#148;map-by node option should now be fixed on master, and PRs waiting for 1.10 and 2.0
<br>
<p>Thx!
<br>
<p><span class="quotelev1">&gt; On Apr 12, 2016, at 6:45 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: speaking just to the &#226;&#128;&#148;map-by node issue, Josh Ladd reported the problem on master as well yesterday. I&#226;&#128;&#153;ll be looking into it on Wed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 12, 2016, at 5:53 PM, George Bosilca &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Apr 13, 2016 at 1:59 AM, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; about the process binding part
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 4/13/2016 7:32 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Also my processes, despite the fact that I asked for 1 per node, are not bound to the first core. Shouldn&#226;&#128;&#153;t we release the process binding when we know there is a single process per node (as in the above case) ?
</span><br>
<span class="quotelev2">&gt;&gt; did you expect the tasks are bound to the first *core* on each node ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i would expect the tasks are bound to the first *socket* on each node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In this particular instance, where it has been explicitly requested to have a single process per node, I would have expected the process to be unbound (we know there is only one per node). It is the responsibility of the application to bound itself or its thread if necessary. Why are we enforcing a particular binding policy?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (since we do not know how many (OpenMP or other) threads will be used by the application, 
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to socket is a good policy imho. in this case (one task per node), no binding at all would mean
</span><br>
<span class="quotelev2">&gt;&gt; the task can migrate from one socket to the other, and/or OpenMP threads are bound accross sockets.
</span><br>
<span class="quotelev2">&gt;&gt; That would trigger some NUMA effects (better bandwidth if memory is locally accessed, but worst performance
</span><br>
<span class="quotelev2">&gt;&gt; is memory is allocated only on one socket).
</span><br>
<span class="quotelev2">&gt;&gt; so imho, --bind-to socket is still my preferred policy, even if there is only one MPI task per node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI is about MPI ranks/processes. I don't think it is our job to try to figure out how the user handle do with it's own threads.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your justification make sense if the application only uses a single socket. It also make sense if one starts multiple ranks per node, and the internal threads of each MPI process inherit the MPI process binding. However, in the case where there is a single process per node, because there is a mismatch between the number of resources available (hardware threads) and the binding of the parent process, all the threads of the MPI application are [by default] bound on a single socket.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: That being said I think I'll need to implement the binding code anyway in order to deal with the wide variety of behaviors in the different MPI implementations.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18758.php">http://www.open-mpi.org/community/lists/devel/2016/04/18758.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/04/18758.php">http://www.open-mpi.org/community/lists/devel/2016/04/18758.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18759.php">http://www.open-mpi.org/community/lists/devel/2016/04/18759.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18761/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18762.php">Howard Pritchard: "[OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Previous message:</strong> <a href="18760.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<li><strong>In reply to:</strong> <a href="18760.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18915.php">Aurélien Bouteiller: "Re: [OMPI devel] Process placement"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18915.php">Aurélien Bouteiller: "Re: [OMPI devel] Process placement"</a>
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
