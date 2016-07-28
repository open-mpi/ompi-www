<?
$subject_val = "Re: [OMPI devel] Multicast grpcomm now available";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 18:03:25 2011" -->
<!-- isoreceived="20110322220325" -->
<!-- sent="Tue, 22 Mar 2011 18:03:19 -0400" -->
<!-- isosent="20110322220319" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multicast grpcomm now available" -->
<!-- id="ECB2FE67-73CD-49AC-8593-63FFAEEBE50E_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="245C7A6D-CE0F-4D53-8C83-1F9C07A9E3E3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multicast grpcomm now available<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-22 18:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9121.php">Ralph Castain: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<li><strong>Previous message:</strong> <a href="9119.php">Ralph Castain: "[OMPI devel] Multicast grpcomm now available"</a>
<li><strong>In reply to:</strong> <a href="9119.php">Ralph Castain: "[OMPI devel] Multicast grpcomm now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9121.php">Ralph Castain: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<li><strong>Reply:</strong> <a href="9121.php">Ralph Castain: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 22, 2011, at 14:20 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For those interested in trying it, I completed backporting the multicast grpcomm module from my branch over the last weekend. This allows all modex and other ORTE-level collective operations to occur via multicast, which significantly improves the performance of those operations.
</span><br>
<p>Looks promising. Based on my understanding of the multicast protocols and their implementations, I wonder how you overcome some of the limitations of the UDP multicast.
<br>
<p>As the IP multicast is a one-to-many protocol, only broadcast types of collective can be expressed efficiently. So this only cover half the modex operations and half the initial application spawn (not the daemon URI collection). However, this is still better than nothing!
<br>
<p>Unfortunately, multicast over UDP inherit one of the major feature from UDP, it's unreliability. While packet drop can hardly be triggered on a single switch configuration, this is not a reliable approach. I noticed you implemented a fixed size windows (based on a circular ring) to increase the reliability of the UDP rmcast. However, what will happens when thousands modex messages will collide is not yet clear? Apparently, if the lost message is not found on the buffer, no drastic action is taken (aka the job will just hang). Thus, without a __reliability__ layer built-on, this is not a practice we should encourage on a production quality software.
<br>
<p>If we assume the context of a LAN, then there are 3 categories: hub only LAN, switch without IGMP and switch with IGMP control. The first two are similar, the broadcast is going over all output links (it is a flooding protocol: the message will be dropped at the kernel level, if no application awaits for it). For the last class, the output is only going on the segments where hosts have requested it.  Therefore, in order to make sure nobody miss a single multicast, one has to verify that all processes supposed to get involved in the bcast, are readily available for receiving. While this doesn't sound like a big issue, it implies a many-to-one type of operation in the context of ORTE.
<br>
<p>Last issue is about the port/address allocation. It appears that the current implementation relies on MCA parameters (base_multicast_ports) to insure uniqueness of port/multicast address allocation. Therefore, when two mpirun run simultaneously on different machines of the same cluster, the user (or the users) will have to ensure mutual exclusion of the ports.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; In order to use it, you'll need to add --enable-multicast to your configure, and -mca grpcomm mcast to your cmd line. You'll also need a reasonably good udp multicast environment. The new module will work with any launch environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not really focused on scalability in my branch (mostly on resilience), but I did some quick experiments and found that the new module reduced modex time by quite a bit, depending on system and scale of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope to finish my backport over the next week or so - the last part will enable ALL orte system operations to be done via multicast. This eliminates things like the initial TCP connection flood back to the HNP when the daemons are launched. Again, I don't focus much on scalability, so anyone wanting to test that capability at scale will be welcome. I'll send out another note when it is ready.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
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
<p>&quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
<br>
&nbsp;&nbsp;-- Thomas Jefferson, 1799
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9121.php">Ralph Castain: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<li><strong>Previous message:</strong> <a href="9119.php">Ralph Castain: "[OMPI devel] Multicast grpcomm now available"</a>
<li><strong>In reply to:</strong> <a href="9119.php">Ralph Castain: "[OMPI devel] Multicast grpcomm now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9121.php">Ralph Castain: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<li><strong>Reply:</strong> <a href="9121.php">Ralph Castain: "Re: [OMPI devel] Multicast grpcomm now available"</a>
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
