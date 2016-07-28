<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 11:22:48 2007" -->
<!-- isoreceived="20070918152248" -->
<!-- sent="Tue, 18 Sep 2007 17:22:42 +0200" -->
<!-- isosent="20070918152242" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Commit r16105" -->
<!-- id="20070918152242.GC10571_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="16C666C8-D8C2-4FF8-AF6A-D1D3826003B7_at_eecs.utk.edu" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-18 11:22:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2326.php">Paul H. Hargrove: "[OMPI devel] &quot;basic&quot; dlopen() example?"</a>
<li><strong>Previous message:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>In reply to:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep 18, 2007 at 10:57:38AM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; More information about this can be founded in the trac #1127
</span><br>
<span class="quotelev1">&gt; (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1127">https://svn.open-mpi.org/trac/ompi/ticket/1127</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
OK. So the code I cited is only a temporary solution. Thanks.
<br>
<p><span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2007, at 10:20 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 18, 2007 at 09:44:42AM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The setup of a communicators include as a last stage, a collective
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication. As a result, some of the nodes can exit the collective
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before the others and therefore can start sending messages using this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator [while some of the other nodes are still waiting for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective completion]. This will lead to a situation where a node 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a message for a communicator that they are building up.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a bug filled in trac about this. In FT-MPI we temporary put 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages in an internal queue, and deliver them to the right communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only once this communicator is completely created.
</span><br>
<span class="quotelev2">&gt;&gt; In ompi_comm_nextcid() function there is this code for thread_multiple
</span><br>
<span class="quotelev2">&gt;&gt; case:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /* for synchronization purposes, avoids receiving fragments for
</span><br>
<span class="quotelev2">&gt;&gt;     a communicator id, which might not yet been known. For single-threaded
</span><br>
<span class="quotelev2">&gt;&gt;     scenarios, this call is in ompi_comm_activate, for multi-threaded
</span><br>
<span class="quotelev2">&gt;&gt;     scenarios, it has to be already here ( before releasing another
</span><br>
<span class="quotelev2">&gt;&gt;     thread into the cid-allocation loop ) */
</span><br>
<span class="quotelev2">&gt;&gt;  (allredfnct)(&amp;response, &amp;glresponse, 1, MPI_MIN, comm, bridgecomm,
</span><br>
<span class="quotelev2">&gt;&gt;                      local_leader, remote_leader, send_first );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This collective is executed on old communicator after setup of a new
</span><br>
<span class="quotelev2">&gt;&gt; cid. Is this not enough to solve the problem? Some ranks may leave
</span><br>
<span class="quotelev2">&gt;&gt; this collective call earlier than others, but none can leave it before
</span><br>
<span class="quotelev2">&gt;&gt; all ranks enter it and at this stage new communicator is already exists
</span><br>
<span class="quotelev2">&gt;&gt; in all of them. Do I miss something?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 18, 2007, at 9:06 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     In the comment you are saying that &quot;a message for a not yet existing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communicator can happen&quot;. Can you explain in what situation it can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; happen?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2326.php">Paul H. Hargrove: "[OMPI devel] &quot;basic&quot; dlopen() example?"</a>
<li><strong>Previous message:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>In reply to:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
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
