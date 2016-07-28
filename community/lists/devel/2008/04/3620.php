<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 11:19:55 2008" -->
<!-- isoreceived="20080402151955" -->
<!-- sent="Wed, 02 Apr 2008 09:19:38 -0600" -->
<!-- isosent="20080402151938" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="C419002A.CED7%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47F39DAF.9040807_at_sun.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 11:19:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3621.php">Jon Mason: "[OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3619.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3617.php">Terry Dontje: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3618.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/2/08 8:52 AM, &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
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
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; [...snip...]
</span><br>
<span class="quotelev2">&gt;&gt;   * int ompi_modex_node_send(...): send modex data that is relevant
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
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;   * int ompi_modex_node_recv(...): receive modex data that is relevant
</span><br>
<span class="quotelev2">&gt;&gt; for a whole peer node; receive the [&quot;winning&quot;] blob sent by
</span><br>
<span class="quotelev2">&gt;&gt; _node_send() from the source node.  We haven't yet decided what the
</span><br>
<span class="quotelev2">&gt;&gt; node index will be; it may be (ompi_proc_t*) (i.e., _node_recv() would
</span><br>
<span class="quotelev2">&gt;&gt; figure out what node the (ompi_proc_t*) resides on and then give you
</span><br>
<span class="quotelev2">&gt;&gt; the data).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; The above sounds like there could be race conditions if more than one
</span><br>
<span class="quotelev1">&gt; process on a node is doing
</span><br>
<span class="quotelev1">&gt; ompi_modex_node_send.  That is are you really going to be able to be
</span><br>
<span class="quotelev1">&gt; assured when ompi_modex_node_recv
</span><br>
<span class="quotelev1">&gt; is done that one of the processes is not in the middle of doing
</span><br>
<span class="quotelev1">&gt; ompi_modex_node_send?  I assume
</span><br>
<span class="quotelev1">&gt; there must be some sort of gate that allows you to make sure no one is
</span><br>
<span class="quotelev1">&gt; in the middle of overwriting your data.
</span><br>
<p>The nature of the modex actually precludes this. The modex is implemented as
<br>
a barrier, so the timing actually looks like this:
<br>
<p>1. each proc registers its modex_node[proc]_send calls early in MPI_Init.
<br>
All this does is collect the data locally in a buffer
<br>
<p>2. each proc hits the orte_grpcomm.modex call in MPI_Init. At this point,
<br>
the collected data is sent to the local daemon. The proc &quot;barriers&quot; at this
<br>
point and can go no further until the modex is completed.
<br>
<p>3. when the daemon detects that all local procs have sent it a modex buffer,
<br>
it enters an &quot;allgather&quot; operation across all daemons. When that operation
<br>
completes, each daemon has a complete modex buffer spanning the job.
<br>
<p>4. each daemon &quot;drops&quot; the collected buffer into each local proc
<br>
<p>5. each proc, upon receiving the modex buffer, decodes it and sets up its
<br>
data structs to respond to future modex_recv calls. Once that is completed,
<br>
the proc returns from the orte_grpcomm.modex call and is released from the
<br>
&quot;barrier&quot;.
<br>
<p><p>So we resolve the race condition by including a &quot;barrier&quot; inside the modex.
<br>
This is the current behavior as well - so this represents no change, just a
<br>
different organization of the modex'd data.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3621.php">Jon Mason: "[OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3619.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3617.php">Terry Dontje: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3618.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
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
