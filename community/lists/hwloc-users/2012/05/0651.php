<?
$subject_val = "Re: [hwloc-users] Hwloc error.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 13:33:20 2012" -->
<!-- isoreceived="20120531173320" -->
<!-- sent="Thu, 31 May 2012 11:33:16 -0600" -->
<!-- isosent="20120531173316" -->
<!-- name="John Hanks" -->
<!-- email="john.hanks_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Hwloc error." -->
<!-- id="CAGrHuK44f6GRu+ep1WBbsrZRvgmazqE1+-LKFyP2piY57cSsJQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGrHuK5mQePecokJQhKtVea=aWXaU7Lxi07wj3Bs0-U4_8BWeg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Hwloc error.<br>
<strong>From:</strong> John Hanks (<em>john.hanks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-31 13:33:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/07/0652.php">Carl Smith: "[hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>In reply to:</strong> <a href="0646.php">John Hanks: "Re: [hwloc-users] Hwloc error."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Closing this for the curious. Took a walk to the datacenter and pulled
<br>
this server and a neighbor to compare it to a known good server and
<br>
discovered that two DIMMs were installed in the wrong sockets.
<br>
Correcting that resolved the missing numa nodes.
<br>
<p>Thanks,
<br>
<p>jbh
<br>
<p>On Wed, May 30, 2012 at 11:27 PM, John Hanks &lt;john.hanks_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the advice, I may have gotten lucky. During POST it clearly
</span><br>
<span class="quotelev1">&gt; shows 4 nodes, Node 0, Node1 Node 2 and Node 3 with nodes 0 and 3
</span><br>
<span class="quotelev1">&gt; marked N/A. Have sent a screenshot of that to HP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jbh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 30, 2012 at 1:26 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We don't need any other info on the hwloc side. And we thank you for
</span><br>
<span class="quotelev2">&gt;&gt; testing the big hwloc warning code :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For HP:
</span><br>
<span class="quotelev2">&gt;&gt; * If you're lucky, the BIOS may talk about the number of NUMA nodes
</span><br>
<span class="quotelev2">&gt;&gt; (either on the usual messages during boot, or in the BIOS configuration
</span><br>
<span class="quotelev2">&gt;&gt; menu). See if it says 2 on the broken node instead of 4 on other nodes,
</span><br>
<span class="quotelev2">&gt;&gt; you have something easy to tell HP.
</span><br>
<span class="quotelev2">&gt;&gt; * Otherwise we'll have to dig in the SRAT ACPI info. &quot;dmesg | grep SRAT&quot;
</span><br>
<span class="quotelev2">&gt;&gt; should talk about some &quot;PXM&quot; properties, which are basically NUMA
</span><br>
<span class="quotelev2">&gt;&gt; localities. You should see PXM 1 and 2 on the broken node, and PXM 0, 1,
</span><br>
<span class="quotelev2">&gt;&gt; 2 and 3 on the other ones. SRAT comes from ACPI, if SRAT is broken, the
</span><br>
<span class="quotelev2">&gt;&gt; hardware/firmware is buggy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 30/05/2012 21:06, John Hanks a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I updated the BIOS and still got the error on this host, then I did
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what I should have done in the first place and checked another
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physically identical host. Of the 4 nodes I have that are the same,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only this one exhibits the error. At this point I'm blaming a hardware
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem, if there's any benefit to hwloc for me to send additional
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debugging information I am happy to, otherwise I'm going try to figure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out how what to say to HP to get this node fixed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jbh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, May 30, 2012 at 9:27 AM, John Hanks &lt;john.hanks_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I recently inherited these machines and would bet small amounts of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hard currency they have never seen a BIOS update since birth. I'll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; figure out how to update the BIOS and let you know if the error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; persists.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jbh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, May 30, 2012 at 9:24 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 30, 2012, at 11:22 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i.e. the kernel reports that socket 0 is completely in node 1, while
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; socket 1 is half in node 1 and half in node 2. Do you have more
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; information about what the machine actually contains socket- and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; NUMA-wise? The dell website is not really felpful, it talks about 4-16
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cores for the DL165 G7, while you have 24.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; How old is your Dell BIOS firmware? &#160;You might need to update it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/07/0652.php">Carl Smith: "[hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-users] q about mem binding API usage"</a>
<li><strong>In reply to:</strong> <a href="0646.php">John Hanks: "Re: [hwloc-users] Hwloc error."</a>
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
