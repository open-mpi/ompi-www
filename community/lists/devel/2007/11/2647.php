<?
$subject_val = "Re: [OMPI devel] ORTE process name,, nodeid..";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 20:20:56 2007" -->
<!-- isoreceived="20071120012056" -->
<!-- sent="Mon, 19 Nov 2007 21:20:43 -0400" -->
<!-- isosent="20071120012043" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE process name,, nodeid.." -->
<!-- id="200711192020.44082.tprins_at_cs.indiana.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C366EEDD.B588%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ORTE process name,, nodeid..<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-19 20:20:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2648.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="2646.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2634.php">Ralph H Castain: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2649.php">Ralph Castain: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<li><strong>Reply:</strong> <a href="2649.php">Ralph Castain: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 19 November 2007 09:42:21 am Ralph H Castain wrote:
<br>
&lt;snip&gt;
<br>
<span class="quotelev1">&gt; An alternative solution might be to incorporate the modex in the new OMPI
</span><br>
<span class="quotelev1">&gt; framework I was about to create anyway. This framework was intended to deal
</span><br>
<span class="quotelev1">&gt; with publish/lookup of OMPI data to support a variety of methods.
</span><br>
<span class="quotelev1">&gt; Originally, we had intended only to include support there for things
</span><br>
<span class="quotelev1">&gt; specifically related to MPI_Publish etc., but there is no reason we
</span><br>
<span class="quotelev1">&gt; couldn't generalize it to support the general exchange of process &quot;how to
</span><br>
<span class="quotelev1">&gt; connect to me&quot; info and include a modex API in it. I was figuring we would
</span><br>
<span class="quotelev1">&gt; need two immediate components in it anyway: an ORTE one for when we have
</span><br>
<span class="quotelev1">&gt; full ORTE support in the system, and a CNOS one that would...well, I guess
</span><br>
<span class="quotelev1">&gt; just bark and say &quot;you can't do publish/lookup on a Cray&quot;. It would be
</span><br>
<span class="quotelev1">&gt; simple to add the modex stuff there, and makes some logical sense as well.
</span><br>
I think this approach is fundamentally flawed. Our frameworks are designed to 
<br>
abstract out something, to allow for multiple implementations. However, doing 
<br>
this would put two completely different things (the modex and the MPI 
<br>
pub/sub) together in one framework. While this may be convenient for the 
<br>
cray, it would be very inconvenient for someone who wanted to do the MPI 
<br>
pub/sub via a ldap server (as has been discussed). The key here is that MPI 
<br>
pub/sub is for very small amounts of data, accessed infrequently and in a 
<br>
non-performance-critical manner, whereas the modex is for rather large 
<br>
amounts of information (on big jobs) that has to be exchanged efficiently.
<br>
<p>Before anyone misunderstands, I am *not* proposing that we add a modex 
<br>
framework to ompi. Rather, I think this is a case where the RSL could make 
<br>
things really easy.
<br>
<p>The RSL defines a process attribute system. One of the original ideas (later 
<br>
retracted, but now that I think about it I may re-add it) was to have some 
<br>
predefined attribute keys, that the runtime would set so we could look up 
<br>
information about any process. 
<br>
<p>So in the case of the cray, the rsl_init function would query to get all the 
<br>
info it wants, and then populate the info into its (local) process attribute 
<br>
data store.
<br>
<p>In other systems each process would set the information in rsl_init and it 
<br>
would be exchanged in the normal modex method.
<br>
<p>Then, the information would be looked up (locally) using the 'get' function on 
<br>
both platforms.
<br>
<p>Simple, eh?
<br>
<p>As an alternative to this, I think we could apply these same ideas into a 
<br>
specialized ORTE system, but it would not be as clean, and would tie our 
<br>
system closer to ORTE. I am not going to argue whether this is good or bad, 
<br>
but I am just mentioning it as a consequence.
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that makes sense, we can implement the latter approach on the branch
</span><br>
<span class="quotelev1">&gt; where we are doing the next major ORTE revision - that's where I was going
</span><br>
<span class="quotelev1">&gt; to create the new framework anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/16/07 10:24 PM, &quot;Shipman, Galen M.&quot; &lt;gshipman_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I am doing some work on Cray's CNL to support shared memory. To support
</span><br>
<span class="quotelev2">&gt; &gt; shared memory I need to know if processes are local or remote. For other
</span><br>
<span class="quotelev2">&gt; &gt; systems we simply use the modex in ompi_proc_get_info to get the proc's
</span><br>
<span class="quotelev2">&gt; &gt; nodeid. When using CNOS I don't need the modex to get a remote processes
</span><br>
<span class="quotelev2">&gt; &gt; nodeid. In fact, I can obtain every processes pid and nodeid (nid/pid)
</span><br>
<span class="quotelev2">&gt; &gt; via a single CNOS call.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have explored a couple of ways to populate the proc structures on the
</span><br>
<span class="quotelev2">&gt; &gt; CRAY. One involves using #if's to do special things in
</span><br>
<span class="quotelev2">&gt; &gt; ompi_proc_get_info. I don't like this. The second method involves adding
</span><br>
<span class="quotelev2">&gt; &gt; a CNOS nameserver and modifying the orte_process_name_t to include the
</span><br>
<span class="quotelev2">&gt; &gt; orte_nodeid_t so that the nameserver can populate all the info if it can.
</span><br>
<span class="quotelev2">&gt; &gt; Prior to this change, the orte_nodeid_t was in ompi_proc_t, which doesn't
</span><br>
<span class="quotelev2">&gt; &gt; make any sense to me, it is an orte level concept and it is only
</span><br>
<span class="quotelev2">&gt; &gt; accessible in the ompi side. I also don't like adding orte_nodeid_t to
</span><br>
<span class="quotelev2">&gt; &gt; orte_process_name_t as it really doesn't have anything to do with the a
</span><br>
<span class="quotelev2">&gt; &gt; name.. I think it makes more sense to have an orte_proc_t.. Something
</span><br>
<span class="quotelev2">&gt; &gt; like the following structure:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; struct orte_process_name_t {
</span><br>
<span class="quotelev2">&gt; &gt;     orte_jobid_t jobid;     /**&lt; Job number */
</span><br>
<span class="quotelev2">&gt; &gt;     orte_vpid_t vpid;       /**&lt; Process number */
</span><br>
<span class="quotelev2">&gt; &gt;     /** &quot;nodeid&quot; on which the proc resides */
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Struct orte_proc_t {
</span><br>
<span class="quotelev2">&gt; &gt;     opal_list_item_t super;
</span><br>
<span class="quotelev2">&gt; &gt;     orte_process_name_t proc_name;
</span><br>
<span class="quotelev2">&gt; &gt;     orte_nodeid_t nid;
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; struct ompi_proc_t {
</span><br>
<span class="quotelev2">&gt; &gt;     orte_proc_t base;
</span><br>
<span class="quotelev2">&gt; &gt;     ..... Etc .....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know there is some talk about removing the process names,,, not sure
</span><br>
<span class="quotelev2">&gt; &gt; how that fits in here but this is what makes sense to me given the
</span><br>
<span class="quotelev2">&gt; &gt; current architecture. Any thoughts here?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Galen
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
<li><strong>Next message:</strong> <a href="2648.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="2646.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2634.php">Ralph H Castain: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2649.php">Ralph Castain: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<li><strong>Reply:</strong> <a href="2649.php">Ralph Castain: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
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
