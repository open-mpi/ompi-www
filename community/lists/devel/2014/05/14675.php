<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  1 09:59:57 2014" -->
<!-- isoreceived="20140501135957" -->
<!-- sent="Thu, 1 May 2014 13:59:55 +0000" -->
<!-- isosent="20140501135955" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base" -->
<!-- id="782B093B-913E-46FF-BA19-3E367C0570D1_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="FABF0DF2-41BF-4134-87A7-D211FDCF042A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-01 09:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14676.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14674.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="14674.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14676.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="14676.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Want to have a phone call/webex to discuss?
<br>
<p><p>On May 1, 2014, at 9:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The problem we'll have with BTLs in opal is going to revolve around that ompi_process_name_t and will occur in a number of places. I've been trying to grok George's statement about accessors and can't figure out a clean way to make that work IF every RTE gets to define the process name a different way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, suppose I define ompi_process_name_t to be a string. I can hash the string down to an opal_identifier_t, but that is a structureless 64-bit value - there is no concept of a jobid or vpid in it. So if you now want to extract a jobid for that identifier, the only way you can do it is to &quot;up-call&quot; back to the RTE to parse it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This means that every RTE would have to initialize OPAL with a registration of its opal_identifier parser function(s), which seems like a really ugly solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe it is time to shift the process identifier down to the opal layer? If we define opal_identifier_t to include the required jobid/vpid, perhaps adding a void* so someone can put whatever they want in it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that I'm not wild about extending the identifier size beyond 64-bits as the memory footprint issue is growing in concern, and I still haven't seen any real use-case proposed for extending it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 1, 2014, at 3:41 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 30, 2014, at 10:01 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why do you need the ompi_process_name_t? Isn&#146;t the opal_identifier_t enough to dig for the info of the peer into the opal_db?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At the moment, I use the ompi_process_name_t for RML sends/receives in the usnic BTL.  I know this will have to change when the BTLs move down to OPAL (when is that going to happen, BTW?).  So my future use case may be somewhat moot.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More detail
</span><br>
<span class="quotelev2">&gt;&gt; ===========
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Why does the usnic BTL use RML sends/receives?&quot;, you ask.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The reason is rooted in the fact that the usnic BTL uses an unreliable, connectionless transport under the covert.  We had some customers have network misconfigurations that resulted in usnic traffic not flowing properly (e.g., MTU mismatches in the network).  But since we don't have a connection-oriented underlying API that will eventually timeout/fail to connect/etc. when there's a problem with the network configuration, we added a &quot;connection validation&quot; service in the usnic BTL that fires up in a thread in the local rank 0 on each server.  This thread provides service to all the MPI processes on its server.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In short: the service thread sends UDP pings and ACKs to peer service threads on other servers (upon demand/upon first send between servers) to verify network connectivity.  If the pings eventually fail/timeout (i.e., don't get ACKs back), the service thread does a show_help and kills the job. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There's more details, but that's the gist of it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This basically gives us the ability to highlight problems in the network and kill the MPI job rather than spin infinitely while trying to deliver MPI/BTL messages to a peer that will never get there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since this is really a server-to-server network connectivity issue (vs. an MPI peer-to-peer connectivity issue), we only need to have one service thread for a whole server.  The other MPI procs on the server use RML to talk to it.  E.g., &quot;Please ping the server where MPI proc X lives,&quot; and so on.  This seemed better than having a service thread in each MPI process.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We've thought a bit about what to do when the BTLs move down to OPAL (since they won't be able to use RML any more), but don't have a final solution yet...  We do still want to be able to utilize this capability even after the BTL move.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14673.php">http://www.open-mpi.org/community/lists/devel/2014/05/14673.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14674.php">http://www.open-mpi.org/community/lists/devel/2014/05/14674.php</a>
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
<li><strong>Next message:</strong> <a href="14676.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14674.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="14674.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14676.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="14676.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base"</a>
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
