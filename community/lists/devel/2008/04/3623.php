<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 12:03:37 2008" -->
<!-- isoreceived="20080402160337" -->
<!-- sent="Wed, 2 Apr 2008 12:03:17 -0400" -->
<!-- isosent="20080402160317" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="FD315008-13A0-4DBF-80CC-6039FC068FF3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47F3A1D0.5050503_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: changes to modex<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 12:03:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3624.php">Jeff Squyres: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3622.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3618.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3708.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2008, at 11:10 AM, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Is there a reason to rename ompi_modex_{send,recv} to
</span><br>
<span class="quotelev1">&gt; ompi_modex_proc_{send,recv}? It seems simpler (and no more confusing  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; less work) to leave the names alone and add  
</span><br>
<span class="quotelev1">&gt; ompi_modex_node_{send,recv}.
</span><br>
<p>If the arguments don't change, I don't have a strong objection to  
<br>
leaving the names alone.  I think the rationale for a new names is:
<br>
<p>- the arguments may change
<br>
- completely clear names, and good symmetry with *_node_* and *_proc_*
<br>
<p>If the args change, then I think it is best to use new names so that  
<br>
BTL authors (etc.) have time to adapt.  If not, then I minorly prefer  
<br>
the new names, but don't care too much.
<br>
<p><span class="quotelev1">&gt; Another question: Does the receiving process care that the information
</span><br>
<span class="quotelev1">&gt; received applies to a whole node? I ask because maybe we could get the
</span><br>
<span class="quotelev1">&gt; same effect by simply adding a parameter to ompi_modex_send which
</span><br>
<span class="quotelev1">&gt; specifies if the data applies to just the proc or a whole node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, if we have ranks 1 &amp; 2 on n1, and rank 3 on n2, then rank 1  
</span><br>
<span class="quotelev1">&gt; would do:
</span><br>
<span class="quotelev1">&gt; ompi_modex_send(&quot;arch&quot;, arch, &lt;applies to whole node&gt;);
</span><br>
<span class="quotelev1">&gt; then rank 3 would do:
</span><br>
<span class="quotelev1">&gt; ompi_modex_recv(rank 1, &quot;arch&quot;);
</span><br>
<span class="quotelev1">&gt; ompi_modex_recv(rank 2, &quot;arch&quot;);
</span><br>
<p>I'm not sure I understand what you mean.  Proc 3 would get the one  
<br>
blob that was sent from proc 1?
<br>
<p>In the openib btl, I'll likely have both node and proc portions to send.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't really care either way, just wanted to throw out the idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Changes to MPI layer modex API
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: To be mo' betta scalable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: ompi/mpi/runtime/ompi_module_exchange.* and everywhere that
</span><br>
<span class="quotelev2">&gt;&gt; calls ompi_modex_send() and/or ompi_modex_recv()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: COB Fri 4 Apr 2008
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DESCRIPTION:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per some of the scalability discussions that have been occurring  
</span><br>
<span class="quotelev2">&gt;&gt; (some
</span><br>
<span class="quotelev2">&gt;&gt; on-list and some off-list), and per the e-mail I sent out last week
</span><br>
<span class="quotelev2">&gt;&gt; about ongoing work in the openib BTL, Ralph and I put together a  
</span><br>
<span class="quotelev2">&gt;&gt; loose
</span><br>
<span class="quotelev2">&gt;&gt; proposal this morning to make the modex more scalable.  The timeout  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; fairly short because Ralph wanted to start implementing in the near
</span><br>
<span class="quotelev2">&gt;&gt; future, and we didn't anticipate that this would be a contentious
</span><br>
<span class="quotelev2">&gt;&gt; proposal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The theme is to break the modex into two different kinds of data:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Modex data that is specific to a given proc
</span><br>
<span class="quotelev2">&gt;&gt; - Modex data that is applicable to all procs on a given node
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, in the openib BTL, the majority of modex data is
</span><br>
<span class="quotelev2">&gt;&gt; applicable to all processes on the same node (GIDs and LIDs and
</span><br>
<span class="quotelev2">&gt;&gt; whatnot).  It is much more efficient to send only one copy of such
</span><br>
<span class="quotelev2">&gt;&gt; node-specific data to each process (vs. sending ppn copies to each
</span><br>
<span class="quotelev2">&gt;&gt; process).  The spreadsheet I included in last week's e-mail clearly
</span><br>
<span class="quotelev2">&gt;&gt; shows this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Add new modex API functions.  The exact function signatures are
</span><br>
<span class="quotelev2">&gt;&gt; TBD, but they will be generally of the form:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  * int ompi_modex_proc_send(...): send modex data that is specific to
</span><br>
<span class="quotelev2">&gt;&gt; this process.  It is just about exactly the same as the current API
</span><br>
<span class="quotelev2">&gt;&gt; call (ompi_modex_send).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  * int ompi_modex_proc_recv(...): receive modex data from a specified
</span><br>
<span class="quotelev2">&gt;&gt; peer process (indexed on ompi_proc_t*).  It is just about exactly the
</span><br>
<span class="quotelev2">&gt;&gt; same as the current API call (ompi_modex_recv).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  * int ompi_modex_node_send(...): send modex data that is relevant
</span><br>
<span class="quotelev2">&gt;&gt; for all processes in this job on this node.  It is intended that only
</span><br>
<span class="quotelev2">&gt;&gt; one process in a job on a node will call this function.  If more than
</span><br>
<span class="quotelev2">&gt;&gt; one process in a job on a node calls _node_send(), then only one will
</span><br>
<span class="quotelev2">&gt;&gt; &quot;win&quot; (meaning that the data sent by the others will be overwritten).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  * int ompi_modex_node_recv(...): receive modex data that is relevant
</span><br>
<span class="quotelev2">&gt;&gt; for a whole peer node; receive the [&quot;winning&quot;] blob sent by
</span><br>
<span class="quotelev2">&gt;&gt; _node_send() from the source node.  We haven't yet decided what the
</span><br>
<span class="quotelev2">&gt;&gt; node index will be; it may be (ompi_proc_t*) (i.e., _node_recv()  
</span><br>
<span class="quotelev2">&gt;&gt; would
</span><br>
<span class="quotelev2">&gt;&gt; figure out what node the (ompi_proc_t*) resides on and then give you
</span><br>
<span class="quotelev2">&gt;&gt; the data).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Make the existing modex API calls (ompi_modex_send,
</span><br>
<span class="quotelev2">&gt;&gt; ompi_modex_recv) be wrappers around the new &quot;proc&quot; send/receive
</span><br>
<span class="quotelev2">&gt;&gt; calls.  This will provide exactly the same functionality as the
</span><br>
<span class="quotelev2">&gt;&gt; current API (but be sub-optimal at scale).  It will give BTL authors
</span><br>
<span class="quotelev2">&gt;&gt; (etc.) time to update to the new API, potentially taking advantage of
</span><br>
<span class="quotelev2">&gt;&gt; common data across multiple processes on the same node.  We'll likely
</span><br>
<span class="quotelev2">&gt;&gt; put in some opal_output()'s in the wrappers to help identify code  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; is still calling the old APIs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Remove the old API calls (ompi_modex_send, ompi_modex_recv) before
</span><br>
<span class="quotelev2">&gt;&gt; v1.3 is released.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3624.php">Jeff Squyres: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3622.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3618.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3708.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
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
