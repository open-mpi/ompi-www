<?
$subject_val = "Re: [OMPI devel] Commit r19868";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 19:53:49 2008" -->
<!-- isoreceived="20081031235349" -->
<!-- sent="Fri, 31 Oct 2008 17:53:37 -0600" -->
<!-- isosent="20081031235337" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Commit r19868" -->
<!-- id="2693401B-8917-4DB7-8535-4400AE0D0123_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="76123A2E-CCB8-428F-847C-4D01FDDE4623_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Commit r19868<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 19:53:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4841.php">Timothy Hayes: "[OMPI devel] Amateur Guidance"</a>
<li><strong>Previous message:</strong> <a href="4839.php">Ralph Castain: "[OMPI devel] Commit r19868"</a>
<li><strong>In reply to:</strong> <a href="4839.php">Ralph Castain: "[OMPI devel] Commit r19868"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Crumby - referenced wrong commit. My commit was r19866. My apologies  
<br>
to George, the author of 19868 that cleaned up a problem created by my  
<br>
commit.
<br>
<p>Ralph
<br>
<p>On Oct 31, 2008, at 5:50 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I made a commit a little earlier that contains modifications that  
</span><br>
<span class="quotelev1">&gt; reduces duplicate data storage and represents a first step towards  
</span><br>
<span class="quotelev1">&gt; supporting fully routed RML communications, along with a new &quot;radix  
</span><br>
<span class="quotelev1">&gt; tree&quot; routed component requested by ORNL.  There will undoubtedly be  
</span><br>
<span class="quotelev1">&gt; improvements to these changes over the next few months, but they  
</span><br>
<span class="quotelev1">&gt; provide an initial platform for us to more thoroughly investigate  
</span><br>
<span class="quotelev1">&gt; the issues involved in fully routing all out-of-band communications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A brief outline of the changes include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. removes the direct routed component and adds a new &quot;radix&quot;  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. shifts storage of nidmap and pidmap info from the odls to the ess  
</span><br>
<span class="quotelev1">&gt; on daemons - this is where the data is stored for everyone else, so  
</span><br>
<span class="quotelev1">&gt; it makes no sense to store it someplace different on the daemon.  
</span><br>
<span class="quotelev1">&gt; Required adding an API to the ess framework so that a pidmap can be  
</span><br>
<span class="quotelev1">&gt; added to the data in the ess when daemons get a comm_spawn request  
</span><br>
<span class="quotelev1">&gt; (the ess data store was already setup for this - just didn't have  
</span><br>
<span class="quotelev1">&gt; the API yet).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. adds an API to the ess framework to obtain the daemon that hosts  
</span><br>
<span class="quotelev1">&gt; a specified proc  from the ess pidmap. Because this data is now  
</span><br>
<span class="quotelev1">&gt; obtained here, we don't need to keep calling  
</span><br>
<span class="quotelev1">&gt; orte_routed.update_route for every proc in our own job - so those  
</span><br>
<span class="quotelev1">&gt; calls have been removed from the startup procedure. This eliminates  
</span><br>
<span class="quotelev1">&gt; the hash tables in every routed module that essentially duplicated  
</span><br>
<span class="quotelev1">&gt; the pidmap already present in the ess - not because anyone was  
</span><br>
<span class="quotelev1">&gt; stupid, but rather because the first routed modules were originally  
</span><br>
<span class="quotelev1">&gt; written prior to the ess pidmap being created, and everyone copy/ 
</span><br>
<span class="quotelev1">&gt; pasted from there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment, the revised trunk fully routes all communications  
</span><br>
<span class="quotelev1">&gt; with two exceptions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. the binomial module still directly routes between all daemons -  
</span><br>
<span class="quotelev1">&gt; i.e., communications don't flow along the tree, but instead short- 
</span><br>
<span class="quotelev1">&gt; circuit the tree to go directly to the daemon that hosts the target  
</span><br>
<span class="quotelev1">&gt; proc. I propose to change this in a later revision, but want to  
</span><br>
<span class="quotelev1">&gt; leave something constant for the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. all routed modules have daemons sending direct to the HNP itself.  
</span><br>
<span class="quotelev1">&gt; This was required for two reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) during startup, the daemons need to &quot;phone home&quot;, but have no  
</span><br>
<span class="quotelev1">&gt; knowledge at that moment of the contact info for the other daemons  
</span><br>
<span class="quotelev1">&gt; in the routing tree. Thus, they have no choice but to send direct to  
</span><br>
<span class="quotelev1">&gt; the HNP. We hope to change this in a later revision by switching to  
</span><br>
<span class="quotelev1">&gt; well-known static ports - but for now, we have to go direct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) in our current shutdown procedure, the outbound message telling  
</span><br>
<span class="quotelev1">&gt; the orteds to terminate goes out across the module's routing tree.  
</span><br>
<span class="quotelev1">&gt; This xcast procedure causes the daemon to relay the cmd to the next  
</span><br>
<span class="quotelev1">&gt; daemons in the tree, and then to execute it. Thus, after relaying  
</span><br>
<span class="quotelev1">&gt; the cmd, the daemon dutifully terminates. However, we require each  
</span><br>
<span class="quotelev1">&gt; daemon to send a confirming message to return to the HNP so it knows  
</span><br>
<span class="quotelev1">&gt; it can exit. That returning message cannot get through because the  
</span><br>
<span class="quotelev1">&gt; intermediate daemons have already terminated. I am working on  
</span><br>
<span class="quotelev1">&gt; alternative methods for detecting daemon termination  so we can  
</span><br>
<span class="quotelev1">&gt; eliminate the return &quot;ack&quot; - but for now, we have to send the &quot;ack&quot;
</span><br>
<span class="quotelev1">&gt; direct to the HNP to ensure it gets through.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some preliminary tests I've conducted indicate that fully routing  
</span><br>
<span class="quotelev1">&gt; communications had no detrimental impact on launch speed nor IB  
</span><br>
<span class="quotelev1">&gt; wireup time. I plan to further test this at larger scales, as well  
</span><br>
<span class="quotelev1">&gt; as continue to develop the new capabilities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if you encounter any problems, or have any  
</span><br>
<span class="quotelev1">&gt; comments/suggestions.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4841.php">Timothy Hayes: "[OMPI devel] Amateur Guidance"</a>
<li><strong>Previous message:</strong> <a href="4839.php">Ralph Castain: "[OMPI devel] Commit r19868"</a>
<li><strong>In reply to:</strong> <a href="4839.php">Ralph Castain: "[OMPI devel] Commit r19868"</a>
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
