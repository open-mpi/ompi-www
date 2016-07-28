<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 09:17:17 2008" -->
<!-- isoreceived="20080415131717" -->
<!-- sent="Tue, 15 Apr 2008 09:17:15 -0400" -->
<!-- isosent="20080415131715" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="4804AADB.2040509_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] RFC: changes to modex" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-15 09:17:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3709.php">Rolf Vandevaart: "[OMPI devel] MPI_Barrier performance"</a>
<li><strong>Previous message:</strong> <a href="3707.php">Lisandro Dalcin: "[OMPI devel] some possible bugs after trying 1.2.6"</a>
<li><strong>Maybe in reply to:</strong> <a href="3614.php">Jeff Squyres: "[OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hate to bring this up again, but I was thinking that an easy way to 
<br>
reduce the size of the modex would be to reduce the length of the names 
<br>
describing each piece of data.
<br>
<p>More concretely, for a simple run I get the following names, each of 
<br>
which are sent over the wire for every proc (note that this will change 
<br>
depending on the number of btls one has active):
<br>
ompi-proc-info
<br>
btl.openib.1.3
<br>
btl.tcp.1.3
<br>
pml.base.1.0
<br>
btl.udapl.1.3
<br>
<p>So that's 89 bytes of naming overhead (size of strings + dss packing 
<br>
overhead) per process.
<br>
<p>A couple of possible solutions to this:
<br>
1. Send a 32 bit string hashes instead of the strings. This would reduce 
<br>
the per process size from 89 to 20 bytes, but there is always a (slight) 
<br>
possibility of collisions.
<br>
<p>2. Change the way the dss packs strings. Currently, it packs a 32 bit 
<br>
sting length, the string, and a null terminator. It may be good enough 
<br>
to just pack the string a the NULL terminator. This would reduce 
<br>
per-process size from 89 to 69 bytes.
<br>
<p>3. Reduce the length of the names. 'ompi-proc-info' could become simply 
<br>
'pinf', and two of the separators could be removed in the other names 
<br>
(ex: 'btl.openib.1.3' -&gt; 'btlopenib1.3'). This would change the per 
<br>
process size from 89 to 71 bytes.
<br>
<p>4. Do #2 &amp; #3. This would change the per process size from 89 to 51 bytes.
<br>
<p>Anyways, just an idea for consideration.
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt; WHAT: Changes to MPI layer modex API
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: To be mo' betta scalable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mpi/runtime/ompi_module_exchange.* and everywhere that
</span><br>
<span class="quotelev1">&gt; calls ompi_modex_send() and/or ompi_modex_recv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: COB Fri 4 Apr 2008
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DESCRIPTION:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per some of the scalability discussions that have been occurring (some
</span><br>
<span class="quotelev1">&gt; on-list and some off-list), and per the e-mail I sent out last week
</span><br>
<span class="quotelev1">&gt; about ongoing work in the openib BTL, Ralph and I put together a loose
</span><br>
<span class="quotelev1">&gt; proposal this morning to make the modex more scalable. The timeout is
</span><br>
<span class="quotelev1">&gt; fairly short because Ralph wanted to start implementing in the near
</span><br>
<span class="quotelev1">&gt; future, and we didn't anticipate that this would be a contentious
</span><br>
<span class="quotelev1">&gt; proposal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The theme is to break the modex into two different kinds of data:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Modex data that is specific to a given proc
</span><br>
<span class="quotelev1">&gt; - Modex data that is applicable to all procs on a given node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, in the openib BTL, the majority of modex data is
</span><br>
<span class="quotelev1">&gt; applicable to all processes on the same node (GIDs and LIDs and
</span><br>
<span class="quotelev1">&gt; whatnot). It is much more efficient to send only one copy of such
</span><br>
<span class="quotelev1">&gt; node-specific data to each process (vs. sending ppn copies to each
</span><br>
<span class="quotelev1">&gt; process). The spreadsheet I included in last week's e-mail clearly
</span><br>
<span class="quotelev1">&gt; shows this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Add new modex API functions. The exact function signatures are
</span><br>
<span class="quotelev1">&gt; TBD, but they will be generally of the form:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   * int ompi_modex_proc_send(...): send modex data that is specific to
</span><br>
<span class="quotelev1">&gt; this process. It is just about exactly the same as the current API
</span><br>
<span class="quotelev1">&gt; call (ompi_modex_send).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   * int ompi_modex_proc_recv(...): receive modex data from a specified
</span><br>
<span class="quotelev1">&gt; peer process (indexed on ompi_proc_t*). It is just about exactly the
</span><br>
<span class="quotelev1">&gt; same as the current API call (ompi_modex_recv).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   * int ompi_modex_node_send(...): send modex data that is relevant
</span><br>
<span class="quotelev1">&gt; for all processes in this job on this node. It is intended that only
</span><br>
<span class="quotelev1">&gt; one process in a job on a node will call this function. If more than
</span><br>
<span class="quotelev1">&gt; one process in a job on a node calls _node_send(), then only one will
</span><br>
<span class="quotelev1">&gt; &quot;win&quot; (meaning that the data sent by the others will be overwritten).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   * int ompi_modex_node_recv(...): receive modex data that is relevant
</span><br>
<span class="quotelev1">&gt; for a whole peer node; receive the [&quot;winning&quot;] blob sent by
</span><br>
<span class="quotelev1">&gt; _node_send() from the source node. We haven't yet decided what the
</span><br>
<span class="quotelev1">&gt; node index will be; it may be (ompi_proc_t*) (i.e., _node_recv() would
</span><br>
<span class="quotelev1">&gt; figure out what node the (ompi_proc_t*) resides on and then give you
</span><br>
<span class="quotelev1">&gt; the data).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Make the existing modex API calls (ompi_modex_send,
</span><br>
<span class="quotelev1">&gt; ompi_modex_recv) be wrappers around the new &quot;proc&quot; send/receive
</span><br>
<span class="quotelev1">&gt; calls. This will provide exactly the same functionality as the
</span><br>
<span class="quotelev1">&gt; current API (but be sub-optimal at scale). It will give BTL authors
</span><br>
<span class="quotelev1">&gt; (etc.) time to update to the new API, potentially taking advantage of
</span><br>
<span class="quotelev1">&gt; common data across multiple processes on the same node. We'll likely
</span><br>
<span class="quotelev1">&gt; put in some opal_output()'s in the wrappers to help identify code that
</span><br>
<span class="quotelev1">&gt; is still calling the old APIs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Remove the old API calls (ompi_modex_send, ompi_modex_recv) before
</span><br>
<span class="quotelev1">&gt; v1.3 is released.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3709.php">Rolf Vandevaart: "[OMPI devel] MPI_Barrier performance"</a>
<li><strong>Previous message:</strong> <a href="3707.php">Lisandro Dalcin: "[OMPI devel] some possible bugs after trying 1.2.6"</a>
<li><strong>Maybe in reply to:</strong> <a href="3614.php">Jeff Squyres: "[OMPI devel] RFC: changes to modex"</a>
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
