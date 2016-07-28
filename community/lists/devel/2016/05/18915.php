<?
$subject_val = "Re: [OMPI devel] Process placement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 16:54:53 2016" -->
<!-- isoreceived="20160505205453" -->
<!-- sent="Thu, 5 May 2016 16:54:41 -0400" -->
<!-- isosent="20160505205441" -->
<!-- name="Aur&#195;&#169;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process placement" -->
<!-- id="D8A7F185-3FA5-444F-8D0F-1BCC91BF4A91_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BA2AB99A-0EEF-4E3B-B6CA-8C18212E7C91_at_open-mpi.org" -->
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
<strong>From:</strong> Aur&#195;&#169;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 16:54:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18916.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18914.php">Josh Hursey: "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18761.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18921.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<li><strong>Reply:</strong> <a href="18921.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, 
<br>
<p>I still observe these issues in the current master. (npernode is not respected either).
<br>
<p>Also note that the display_allocation seems to be wrong (slots_inuse=0 when the slot is obviously in use). 
<br>
<p>$ git show 
<br>
4899c89 (HEAD -&gt; master, origin/master, origin/HEAD) Fix a race condition when multiple threads try to create a bml en....Bouteiller  6 hours ago
<br>
<p>$ bin/mpirun -np 12 -hostfile /opt/etc/ib10g.machinefile.ompi -display-allocation -map-by node    hostname 
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer00: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer01: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer02: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer03: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer04: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer05: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer06: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer07: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer08: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer09: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer10: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer11: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer12: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer13: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer14: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dancer15: flags=0x13 slots=8 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
=================================================================
<br>
dancer01
<br>
dancer00
<br>
dancer01
<br>
dancer01
<br>
dancer01
<br>
dancer00
<br>
dancer00
<br>
dancer00
<br>
dancer00
<br>
dancer00
<br>
dancer00
<br>
dancer00
<br>
<p><p><pre>
--
Aur&#195;&#169;lien Bouteiller, Ph.D. ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a> &lt;<a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>&gt;
&gt; Le 13 avr. 2016 &#195;&#160; 13:38, Ralph Castain &lt;rhc_at_[hidden]&gt; a &#195;&#169;crit :
&gt; 
&gt; The &#226;&#128;&#148;map-by node option should now be fixed on master, and PRs waiting for 1.10 and 2.0
&gt; 
&gt; Thx!
&gt; 
&gt;&gt; On Apr 12, 2016, at 6:45 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
&gt;&gt; 
&gt;&gt; FWIW: speaking just to the &#226;&#128;&#148;map-by node issue, Josh Ladd reported the problem on master as well yesterday. I&#226;&#128;&#153;ll be looking into it on Wed.
&gt;&gt; 
&gt;&gt;&gt; On Apr 12, 2016, at 5:53 PM, George Bosilca &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; On Wed, Apr 13, 2016 at 1:59 AM, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
&gt;&gt;&gt; George,
&gt;&gt;&gt; 
&gt;&gt;&gt; about the process binding part
&gt;&gt;&gt; 
&gt;&gt;&gt; On 4/13/2016 7:32 AM, George Bosilca wrote:
&gt;&gt;&gt; Also my processes, despite the fact that I asked for 1 per node, are not bound to the first core. Shouldn&#226;&#128;&#153;t we release the process binding when we know there is a single process per node (as in the above case) ?
&gt;&gt;&gt; did you expect the tasks are bound to the first *core* on each node ?
&gt;&gt;&gt; 
&gt;&gt;&gt; i would expect the tasks are bound to the first *socket* on each node.
&gt;&gt;&gt; 
&gt;&gt;&gt; In this particular instance, where it has been explicitly requested to have a single process per node, I would have expected the process to be unbound (we know there is only one per node). It is the responsibility of the application to bound itself or its thread if necessary. Why are we enforcing a particular binding policy?
&gt;&gt;&gt; 
&gt;&gt;&gt; (since we do not know how many (OpenMP or other) threads will be used by the application, 
&gt;&gt;&gt; --bind-to socket is a good policy imho. in this case (one task per node), no binding at all would mean
&gt;&gt;&gt; the task can migrate from one socket to the other, and/or OpenMP threads are bound accross sockets.
&gt;&gt;&gt; That would trigger some NUMA effects (better bandwidth if memory is locally accessed, but worst performance
&gt;&gt;&gt; is memory is allocated only on one socket).
&gt;&gt;&gt; so imho, --bind-to socket is still my preferred policy, even if there is only one MPI task per node.
&gt;&gt;&gt; 
&gt;&gt;&gt; Open MPI is about MPI ranks/processes. I don't think it is our job to try to figure out how the user handle do with it's own threads.
&gt;&gt;&gt; 
&gt;&gt;&gt; Your justification make sense if the application only uses a single socket. It also make sense if one starts multiple ranks per node, and the internal threads of each MPI process inherit the MPI process binding. However, in the case where there is a single process per node, because there is a mismatch between the number of resources available (hardware threads) and the binding of the parent process, all the threads of the MPI application are [by default] bound on a single socket.
&gt;&gt;&gt; 
&gt;&gt;&gt;  George.
&gt;&gt;&gt; 
&gt;&gt;&gt; PS: That being said I think I'll need to implement the binding code anyway in order to deal with the wide variety of behaviors in the different MPI implementations.
&gt;&gt;&gt; 
&gt;&gt;&gt;  
&gt;&gt;&gt; 
&gt;&gt;&gt; Cheers,
&gt;&gt;&gt; 
&gt;&gt;&gt; Gilles
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18758.php">http://www.open-mpi.org/community/lists/devel/2016/04/18758.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/04/18758.php">http://www.open-mpi.org/community/lists/devel/2016/04/18758.php</a>&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18759.php">http://www.open-mpi.org/community/lists/devel/2016/04/18759.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/04/18759.php">http://www.open-mpi.org/community/lists/devel/2016/04/18759.php</a>&gt;
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18761.php">http://www.open-mpi.org/community/lists/devel/2016/04/18761.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/04/18761.php">http://www.open-mpi.org/community/lists/devel/2016/04/18761.php</a>&gt;
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18915/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18915/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18916.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18914.php">Josh Hursey: "Re: [OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18761.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18921.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<li><strong>Reply:</strong> <a href="18921.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
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
