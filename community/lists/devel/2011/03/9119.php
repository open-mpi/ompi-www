<?
$subject_val = "[OMPI devel] Multicast grpcomm now available";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 14:20:22 2011" -->
<!-- isoreceived="20110322182022" -->
<!-- sent="Tue, 22 Mar 2011 12:20:12 -0600" -->
<!-- isosent="20110322182012" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Multicast grpcomm now available" -->
<!-- id="245C7A6D-CE0F-4D53-8C83-1F9C07A9E3E3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Multicast grpcomm now available<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-22 14:20:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9120.php">George Bosilca: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<li><strong>Previous message:</strong> <a href="9118.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9120.php">George Bosilca: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<li><strong>Reply:</strong> <a href="9120.php">George Bosilca: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>For those interested in trying it, I completed backporting the multicast grpcomm module from my branch over the last weekend. This allows all modex and other ORTE-level collective operations to occur via multicast, which significantly improves the performance of those operations.
<br>
<p>In order to use it, you'll need to add --enable-multicast to your configure, and -mca grpcomm mcast to your cmd line. You'll also need a reasonably good udp multicast environment. The new module will work with any launch environment.
<br>
<p>I'm not really focused on scalability in my branch (mostly on resilience), but I did some quick experiments and found that the new module reduced modex time by quite a bit, depending on system and scale of course.
<br>
<p>I hope to finish my backport over the next week or so - the last part will enable ALL orte system operations to be done via multicast. This eliminates things like the initial TCP connection flood back to the HNP when the daemons are launched. Again, I don't focus much on scalability, so anyone wanting to test that capability at scale will be welcome. I'll send out another note when it is ready.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9120.php">George Bosilca: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<li><strong>Previous message:</strong> <a href="9118.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9120.php">George Bosilca: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<li><strong>Reply:</strong> <a href="9120.php">George Bosilca: "Re: [OMPI devel] Multicast grpcomm now available"</a>
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
