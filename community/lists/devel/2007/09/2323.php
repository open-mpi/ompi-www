<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 10:20:12 2007" -->
<!-- isoreceived="20070918142012" -->
<!-- sent="Tue, 18 Sep 2007 16:20:04 +0200" -->
<!-- isosent="20070918142004" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Commit r16105" -->
<!-- id="20070918142004.GB10571_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="04F907EC-7B0E-4C1F-972B-B81AF4A0C3F2_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-09-18 10:20:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>Previous message:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>In reply to:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>Reply:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep 18, 2007 at 09:44:42AM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The setup of a communicators include as a last stage, a collective 
</span><br>
<span class="quotelev1">&gt; communication. As a result, some of the nodes can exit the collective 
</span><br>
<span class="quotelev1">&gt; before the others and therefore can start sending messages using this 
</span><br>
<span class="quotelev1">&gt; communicator [while some of the other nodes are still waiting for the 
</span><br>
<span class="quotelev1">&gt; collective completion]. This will lead to a situation where a node receive 
</span><br>
<span class="quotelev1">&gt; a message for a communicator that they are building up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a bug filled in trac about this. In FT-MPI we temporary put these 
</span><br>
<span class="quotelev1">&gt; messages in an internal queue, and deliver them to the right communicator 
</span><br>
<span class="quotelev1">&gt; only once this communicator is completely created.
</span><br>
In ompi_comm_nextcid() function there is this code for thread_multiple
<br>
case:
<br>
<p>&nbsp;/* for synchronization purposes, avoids receiving fragments for 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;a communicator id, which might not yet been known. For single-threaded
<br>
&nbsp;&nbsp;&nbsp;&nbsp;scenarios, this call is in ompi_comm_activate, for multi-threaded
<br>
&nbsp;&nbsp;&nbsp;&nbsp;scenarios, it has to be already here ( before releasing another
<br>
&nbsp;&nbsp;&nbsp;&nbsp;thread into the cid-allocation loop ) */
<br>
&nbsp;(allredfnct)(&amp;response, &amp;glresponse, 1, MPI_MIN, comm, bridgecomm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_leader, remote_leader, send_first );
<br>
<p>This collective is executed on old communicator after setup of a new
<br>
cid. Is this not enough to solve the problem? Some ranks may leave
<br>
this collective call earlier than others, but none can leave it before
<br>
all ranks enter it and at this stage new communicator is already exists
<br>
in all of them. Do I miss something?
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2007, at 9:06 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     In the comment you are saying that &quot;a message for a not yet existing
</span><br>
<span class="quotelev2">&gt;&gt; communicator can happen&quot;. Can you explain in what situation it can
</span><br>
<span class="quotelev2">&gt;&gt; happen?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
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
<li><strong>Next message:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>Previous message:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>In reply to:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>Reply:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI devel] Commit r16105"</a>
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
