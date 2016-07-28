<?
$subject_val = "[OMPI devel] Commit r19868";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 19:51:08 2008" -->
<!-- isoreceived="20081031235108" -->
<!-- sent="Fri, 31 Oct 2008 17:50:59 -0600" -->
<!-- isosent="20081031235059" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Commit r19868" -->
<!-- id="76123A2E-CCB8-428F-847C-4D01FDDE4623_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Commit r19868<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 19:50:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4840.php">Ralph Castain: "Re: [OMPI devel] Commit r19868"</a>
<li><strong>Previous message:</strong> <a href="4838.php">Leonardo Fialho: "[OMPI devel] Communications and it cache"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4840.php">Ralph Castain: "Re: [OMPI devel] Commit r19868"</a>
<li><strong>Reply:</strong> <a href="4840.php">Ralph Castain: "Re: [OMPI devel] Commit r19868"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>I made a commit a little earlier that contains modifications that  
<br>
reduces duplicate data storage and represents a first step towards  
<br>
supporting fully routed RML communications, along with a new &quot;radix  
<br>
tree&quot; routed component requested by ORNL.  There will undoubtedly be  
<br>
improvements to these changes over the next few months, but they  
<br>
provide an initial platform for us to more thoroughly investigate the  
<br>
issues involved in fully routing all out-of-band communications.
<br>
<p>A brief outline of the changes include:
<br>
<p>1. removes the direct routed component and adds a new &quot;radix&quot; component
<br>
<p>2. shifts storage of nidmap and pidmap info from the odls to the ess  
<br>
on daemons - this is where the data is stored for everyone else, so it  
<br>
makes no sense to store it someplace different on the daemon. Required  
<br>
adding an API to the ess framework so that a pidmap can be added to  
<br>
the data in the ess when daemons get a comm_spawn request (the ess  
<br>
data store was already setup for this - just didn't have the API yet).
<br>
<p>3. adds an API to the ess framework to obtain the daemon that hosts a  
<br>
specified proc  from the ess pidmap. Because this data is now obtained  
<br>
here, we don't need to keep calling orte_routed.update_route for every  
<br>
proc in our own job - so those calls have been removed from the  
<br>
startup procedure. This eliminates the hash tables in every routed  
<br>
module that essentially duplicated the pidmap already present in the  
<br>
ess - not because anyone was stupid, but rather because the first  
<br>
routed modules were originally written prior to the ess pidmap being  
<br>
created, and everyone copy/pasted from there.
<br>
<p>At the moment, the revised trunk fully routes all communications with  
<br>
two exceptions:
<br>
<p>1. the binomial module still directly routes between all daemons -  
<br>
i.e., communications don't flow along the tree, but instead short- 
<br>
circuit the tree to go directly to the daemon that hosts the target  
<br>
proc. I propose to change this in a later revision, but want to leave  
<br>
something constant for the moment.
<br>
<p>2. all routed modules have daemons sending direct to the HNP itself.  
<br>
This was required for two reasons:
<br>
<p>(a) during startup, the daemons need to &quot;phone home&quot;, but have no  
<br>
knowledge at that moment of the contact info for the other daemons in  
<br>
the routing tree. Thus, they have no choice but to send direct to the  
<br>
HNP. We hope to change this in a later revision by switching to well- 
<br>
known static ports - but for now, we have to go direct.
<br>
<p>(b) in our current shutdown procedure, the outbound message telling  
<br>
the orteds to terminate goes out across the module's routing tree.  
<br>
This xcast procedure causes the daemon to relay the cmd to the next  
<br>
daemons in the tree, and then to execute it. Thus, after relaying the  
<br>
cmd, the daemon dutifully terminates. However, we require each daemon  
<br>
to send a confirming message to return to the HNP so it knows it can  
<br>
exit. That returning message cannot get through because the  
<br>
intermediate daemons have already terminated. I am working on  
<br>
alternative methods for detecting daemon termination  so we can  
<br>
eliminate the return &quot;ack&quot; - but for now, we have to send the &quot;ack&quot;
<br>
direct to the HNP to ensure it gets through.
<br>
<p>Some preliminary tests I've conducted indicate that fully routing  
<br>
communications had no detrimental impact on launch speed nor IB wireup  
<br>
time. I plan to further test this at larger scales, as well as  
<br>
continue to develop the new capabilities.
<br>
<p>Please let me know if you encounter any problems, or have any comments/ 
<br>
suggestions.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4840.php">Ralph Castain: "Re: [OMPI devel] Commit r19868"</a>
<li><strong>Previous message:</strong> <a href="4838.php">Leonardo Fialho: "[OMPI devel] Communications and it cache"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4840.php">Ralph Castain: "Re: [OMPI devel] Commit r19868"</a>
<li><strong>Reply:</strong> <a href="4840.php">Ralph Castain: "Re: [OMPI devel] Commit r19868"</a>
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
