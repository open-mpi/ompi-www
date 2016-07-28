<?
$subject_val = "[OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 10:21:22 2008" -->
<!-- isoreceived="20080402142122" -->
<!-- sent="Wed, 2 Apr 2008 10:21:12 -0400" -->
<!-- isosent="20080402142112" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: changes to modex" -->
<!-- id="168065BB-DC8B-4DD6-B3C0-EB50728F916D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: changes to modex<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 10:21:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3615.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3613.php">Josh Hursey: "Re: [OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3615.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3615.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3617.php">Terry Dontje: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3618.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Maybe reply:</strong> <a href="3708.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Changes to MPI layer modex API
<br>
<p>WHY: To be mo' betta scalable
<br>
<p>WHERE: ompi/mpi/runtime/ompi_module_exchange.* and everywhere that  
<br>
calls ompi_modex_send() and/or ompi_modex_recv()
<br>
<p>TIMEOUT: COB Fri 4 Apr 2008
<br>
<p>DESCRIPTION:
<br>
<p>Per some of the scalability discussions that have been occurring (some  
<br>
on-list and some off-list), and per the e-mail I sent out last week  
<br>
about ongoing work in the openib BTL, Ralph and I put together a loose  
<br>
proposal this morning to make the modex more scalable.  The timeout is  
<br>
fairly short because Ralph wanted to start implementing in the near  
<br>
future, and we didn't anticipate that this would be a contentious  
<br>
proposal.
<br>
<p>The theme is to break the modex into two different kinds of data:
<br>
<p>- Modex data that is specific to a given proc
<br>
- Modex data that is applicable to all procs on a given node
<br>
<p>For example, in the openib BTL, the majority of modex data is  
<br>
applicable to all processes on the same node (GIDs and LIDs and  
<br>
whatnot).  It is much more efficient to send only one copy of such  
<br>
node-specific data to each process (vs. sending ppn copies to each  
<br>
process).  The spreadsheet I included in last week's e-mail clearly  
<br>
shows this.
<br>
<p>1. Add new modex API functions.  The exact function signatures are  
<br>
TBD, but they will be generally of the form:
<br>
<p>&nbsp;&nbsp;* int ompi_modex_proc_send(...): send modex data that is specific to  
<br>
this process.  It is just about exactly the same as the current API  
<br>
call (ompi_modex_send).
<br>
<p>&nbsp;&nbsp;* int ompi_modex_proc_recv(...): receive modex data from a specified  
<br>
peer process (indexed on ompi_proc_t*).  It is just about exactly the  
<br>
same as the current API call (ompi_modex_recv).
<br>
<p>&nbsp;&nbsp;* int ompi_modex_node_send(...): send modex data that is relevant  
<br>
for all processes in this job on this node.  It is intended that only  
<br>
one process in a job on a node will call this function.  If more than  
<br>
one process in a job on a node calls _node_send(), then only one will  
<br>
&quot;win&quot; (meaning that the data sent by the others will be overwritten).
<br>
<p>&nbsp;&nbsp;* int ompi_modex_node_recv(...): receive modex data that is relevant  
<br>
for a whole peer node; receive the [&quot;winning&quot;] blob sent by  
<br>
_node_send() from the source node.  We haven't yet decided what the  
<br>
node index will be; it may be (ompi_proc_t*) (i.e., _node_recv() would  
<br>
figure out what node the (ompi_proc_t*) resides on and then give you  
<br>
the data).
<br>
<p>2. Make the existing modex API calls (ompi_modex_send,  
<br>
ompi_modex_recv) be wrappers around the new &quot;proc&quot; send/receive  
<br>
calls.  This will provide exactly the same functionality as the  
<br>
current API (but be sub-optimal at scale).  It will give BTL authors  
<br>
(etc.) time to update to the new API, potentially taking advantage of  
<br>
common data across multiple processes on the same node.  We'll likely  
<br>
put in some opal_output()'s in the wrappers to help identify code that  
<br>
is still calling the old APIs.
<br>
<p>3. Remove the old API calls (ompi_modex_send, ompi_modex_recv) before  
<br>
v1.3 is released.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3615.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3613.php">Josh Hursey: "Re: [OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3615.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3615.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3617.php">Terry Dontje: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3618.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Maybe reply:</strong> <a href="3708.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
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
