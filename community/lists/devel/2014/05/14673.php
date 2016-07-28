<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  1 06:41:37 2014" -->
<!-- isoreceived="20140501104137" -->
<!-- sent="Thu, 1 May 2014 10:41:35 +0000" -->
<!-- isosent="20140501104135" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base" -->
<!-- id="E61BFA9F-F1BA-4BE3-9982-AEB045D2BF12_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="471A2D6D-645F-4866-A8C9-38AA9E4E4172_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-01 06:41:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14674.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14672.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create	of	communicators?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14669.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14674.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="14674.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2014, at 10:01 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Why do you need the ompi_process_name_t? Isn&#146;t the opal_identifier_t enough to dig for the info of the peer into the opal_db?
</span><br>
<p><p>At the moment, I use the ompi_process_name_t for RML sends/receives in the usnic BTL.  I know this will have to change when the BTLs move down to OPAL (when is that going to happen, BTW?).  So my future use case may be somewhat moot.
<br>
<p>More detail
<br>
===========
<br>
<p>&quot;Why does the usnic BTL use RML sends/receives?&quot;, you ask.
<br>
<p>The reason is rooted in the fact that the usnic BTL uses an unreliable, connectionless transport under the covert.  We had some customers have network misconfigurations that resulted in usnic traffic not flowing properly (e.g., MTU mismatches in the network).  But since we don't have a connection-oriented underlying API that will eventually timeout/fail to connect/etc. when there's a problem with the network configuration, we added a &quot;connection validation&quot; service in the usnic BTL that fires up in a thread in the local rank 0 on each server.  This thread provides service to all the MPI processes on its server.
<br>
<p>In short: the service thread sends UDP pings and ACKs to peer service threads on other servers (upon demand/upon first send between servers) to verify network connectivity.  If the pings eventually fail/timeout (i.e., don't get ACKs back), the service thread does a show_help and kills the job. 
<br>
<p>There's more details, but that's the gist of it.
<br>
<p>This basically gives us the ability to highlight problems in the network and kill the MPI job rather than spin infinitely while trying to deliver MPI/BTL messages to a peer that will never get there.
<br>
<p>Since this is really a server-to-server network connectivity issue (vs. an MPI peer-to-peer connectivity issue), we only need to have one service thread for a whole server.  The other MPI procs on the server use RML to talk to it.  E.g., &quot;Please ping the server where MPI proc X lives,&quot; and so on.  This seemed better than having a service thread in each MPI process.
<br>
<p>We've thought a bit about what to do when the BTLs move down to OPAL (since they won't be able to use RML any more), but don't have a final solution yet...  We do still want to be able to utilize this capability even after the BTL move.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14674.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14672.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create	of	communicators?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14669.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14674.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="14674.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	-	trunk/ompi/mca/rte/base"</a>
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
