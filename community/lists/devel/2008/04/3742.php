<?
$subject_val = "[OMPI devel] Loadbalancing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 11:09:31 2008" -->
<!-- isoreceived="20080423150931" -->
<!-- sent="Wed, 23 Apr 2008 09:09:17 -0600" -->
<!-- isosent="20080423150917" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Loadbalancing" -->
<!-- id="C434AD3D.D342%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Loadbalancing<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 11:09:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3743.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Previous message:</strong> <a href="3741.php">Jeff Squyres: "Re: [OMPI devel] Communication problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3757.php">Jeff Squyres: "Re: [OMPI devel] Loadbalancing"</a>
<li><strong>Reply:</strong> <a href="3757.php">Jeff Squyres: "Re: [OMPI devel] Loadbalancing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added a new &quot;loadbalance&quot; feature to OMPI today in r18252.
<br>
<p>Brief summary: adding --loadbalance to the mpirun cmd line will cause the
<br>
round-robin mapper to balance your specified #procs across the available
<br>
nodes.
<br>
<p>More detail:
<br>
Several users had noted that mapping byslot always caused us to
<br>
preferentially load the first nodes in an allocation, potentially leaving
<br>
other nodes unused. If they mapped bynode, of course, this wouldn't happen -
<br>
but then they were forced to a specific rank-to-node relationship.
<br>
<p>What they wanted was to have the ranks numbered byslot, but to have the ppn
<br>
balanced across the entire allocation.
<br>
<p>This is now supported via the --loadbalance cmd line option. Here is an
<br>
example of its affect (again, remember that loadbalance only impacts mapping
<br>
byslot):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;no-lb              lb         bynode
<br>
node0:      0,1,2,3            0,1,2       0,3,6
<br>
node1:      4,5,6              3,4         1,4
<br>
node2:                         5,6         2,5
<br>
<p><p>As you can see, the affect of --loadbalance is to balance the ppn across all
<br>
the available nodes while retaining byslot rank associations. In this case,
<br>
instead of leaving one node unused, we take advantage of all available
<br>
resources.
<br>
<p>Hope this proves helpful
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3743.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Previous message:</strong> <a href="3741.php">Jeff Squyres: "Re: [OMPI devel] Communication problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3757.php">Jeff Squyres: "Re: [OMPI devel] Loadbalancing"</a>
<li><strong>Reply:</strong> <a href="3757.php">Jeff Squyres: "Re: [OMPI devel] Loadbalancing"</a>
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
