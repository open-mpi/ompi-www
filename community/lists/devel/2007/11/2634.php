<?
$subject_val = "Re: [OMPI devel] ORTE process name,, nodeid..";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 09:42:32 2007" -->
<!-- isoreceived="20071119144232" -->
<!-- sent="Mon, 19 Nov 2007 07:42:21 -0700" -->
<!-- isosent="20071119144221" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE process name,, nodeid.." -->
<!-- id="C366EEDD.B588%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C363E54C.1A49%gshipman_at_ornl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-19 09:42:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2635.php">Jeff Squyres: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2633.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2647.php">Tim Prins: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<li><strong>Reply:</strong> <a href="2647.php">Tim Prins: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Galen
<br>
<p>I'm not aware of any continuing discussion to totally remove the process
<br>
name from ORTE - I believe we coalesced to redefining how the jobid was
<br>
established to a procedure that doesn't require a name server. This hasn't
<br>
come over to the trunk yet, but will in the next couple of months.
<br>
<p>Adding a field to the process name is an unfortunately non-trivial exercise
<br>
as it hits a lot of places, including messing with the headers in the RML
<br>
and IOF - and as you know, nobody really wants to mess with that code.
<br>
<p>One way to resolve this would be to add your call to get the pid and nodeid
<br>
of all procs in your job to the CNOS SDS component since every process has
<br>
to call that function anyway. If we go that route, then the question becomes
<br>
how best to expose that data to the OMPI layer. Creating an orte_proc_t just
<br>
for that purpose seems slightly overkill - can anyone think of another
<br>
reason to have such an object?
<br>
<p>An alternative solution might be to incorporate the modex in the new OMPI
<br>
framework I was about to create anyway. This framework was intended to deal
<br>
with publish/lookup of OMPI data to support a variety of methods.
<br>
Originally, we had intended only to include support there for things
<br>
specifically related to MPI_Publish etc., but there is no reason we couldn't
<br>
generalize it to support the general exchange of process &quot;how to connect to
<br>
me&quot; info and include a modex API in it. I was figuring we would need two
<br>
immediate components in it anyway: an ORTE one for when we have full ORTE
<br>
support in the system, and a CNOS one that would...well, I guess just bark
<br>
and say &quot;you can't do publish/lookup on a Cray&quot;. It would be simple to add
<br>
the modex stuff there, and makes some logical sense as well.
<br>
<p>If that makes sense, we can implement the latter approach on the branch
<br>
where we are doing the next major ORTE revision - that's where I was going
<br>
to create the new framework anyway.
<br>
<p>Ralph
<br>
<p><p>On 11/16/07 10:24 PM, &quot;Shipman, Galen M.&quot; &lt;gshipman_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am doing some work on Cray's CNL to support shared memory. To support
</span><br>
<span class="quotelev1">&gt; shared memory I need to know if processes are local or remote. For other
</span><br>
<span class="quotelev1">&gt; systems we simply use the modex in ompi_proc_get_info to get the proc's
</span><br>
<span class="quotelev1">&gt; nodeid. When using CNOS I don't need the modex to get a remote processes
</span><br>
<span class="quotelev1">&gt; nodeid. In fact, I can obtain every processes pid and nodeid (nid/pid) via a
</span><br>
<span class="quotelev1">&gt; single CNOS call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have explored a couple of ways to populate the proc structures on the
</span><br>
<span class="quotelev1">&gt; CRAY. One involves using #if's to do special things in ompi_proc_get_info. I
</span><br>
<span class="quotelev1">&gt; don't like this. The second method involves adding a CNOS nameserver and
</span><br>
<span class="quotelev1">&gt; modifying the orte_process_name_t to include the orte_nodeid_t so that the
</span><br>
<span class="quotelev1">&gt; nameserver can populate all the info if it can. Prior to this change, the
</span><br>
<span class="quotelev1">&gt; orte_nodeid_t was in ompi_proc_t, which doesn't make any sense to me, it is
</span><br>
<span class="quotelev1">&gt; an orte level concept and it is only accessible in the ompi side. I also
</span><br>
<span class="quotelev1">&gt; don't like adding orte_nodeid_t to orte_process_name_t as it really doesn't
</span><br>
<span class="quotelev1">&gt; have anything to do with the a name.. I think it makes more sense to have an
</span><br>
<span class="quotelev1">&gt; orte_proc_t.. Something like the following structure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct orte_process_name_t {
</span><br>
<span class="quotelev1">&gt;     orte_jobid_t jobid;     /**&lt; Job number */
</span><br>
<span class="quotelev1">&gt;     orte_vpid_t vpid;       /**&lt; Process number */
</span><br>
<span class="quotelev1">&gt;     /** &quot;nodeid&quot; on which the proc resides */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Struct orte_proc_t {
</span><br>
<span class="quotelev1">&gt;     opal_list_item_t super;
</span><br>
<span class="quotelev1">&gt;     orte_process_name_t proc_name;
</span><br>
<span class="quotelev1">&gt;     orte_nodeid_t nid;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct ompi_proc_t {
</span><br>
<span class="quotelev1">&gt;     orte_proc_t base;
</span><br>
<span class="quotelev1">&gt;     ..... Etc .....
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know there is some talk about removing the process names,,, not sure how
</span><br>
<span class="quotelev1">&gt; that fits in here but this is what makes sense to me given the current
</span><br>
<span class="quotelev1">&gt; architecture. Any thoughts here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Galen 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2635.php">Jeff Squyres: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2633.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2647.php">Tim Prins: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<li><strong>Reply:</strong> <a href="2647.php">Tim Prins: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
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
