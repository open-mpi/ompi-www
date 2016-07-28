<?
$subject_val = "Re: [hwloc-users] Hwloc error.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 15:06:35 2012" -->
<!-- isoreceived="20120530190635" -->
<!-- sent="Wed, 30 May 2012 13:06:31 -0600" -->
<!-- isosent="20120530190631" -->
<!-- name="John Hanks" -->
<!-- email="john.hanks_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Hwloc error." -->
<!-- id="CAGrHuK59ePSZGLUHCkF+_6LUHqksB4Us2ks0qgCBh6Swyqayug_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGrHuK4XBZNt46gfN1_tCmTY3WZOo4pj0qanvh1+PCpKhnCypw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-05-30 15:06:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0645.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Previous message:</strong> <a href="0643.php">John Hanks: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>In reply to:</strong> <a href="0643.php">John Hanks: "Re: [hwloc-users] Hwloc error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0645.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Reply:</strong> <a href="0645.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I updated the BIOS and still got the error on this host, then I did
<br>
what I should have done in the first place and checked another
<br>
physically identical host. Of the 4 nodes I have that are the same,
<br>
only this one exhibits the error. At this point I'm blaming a hardware
<br>
problem, if there's any benefit to hwloc for me to send additional
<br>
debugging information I am happy to, otherwise I'm going try to figure
<br>
out how what to say to HP to get this node fixed.
<br>
<p>Thanks,
<br>
<p>jbh
<br>
<p>On Wed, May 30, 2012 at 9:27 AM, John Hanks &lt;john.hanks_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I recently inherited these machines and would bet small amounts of
</span><br>
<span class="quotelev1">&gt; hard currency they have never seen a BIOS update since birth. I'll
</span><br>
<span class="quotelev1">&gt; figure out how to update the BIOS and let you know if the error
</span><br>
<span class="quotelev1">&gt; persists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jbh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 30, 2012 at 9:24 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 30, 2012, at 11:22 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i.e. the kernel reports that socket 0 is completely in node 1, while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1 is half in node 1 and half in node 2. Do you have more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information about what the machine actually contains socket- and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NUMA-wise? The dell website is not really felpful, it talks about 4-16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores for the DL165 G7, while you have 24.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How old is your Dell BIOS firmware? &#160;You might need to update it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0645.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Previous message:</strong> <a href="0643.php">John Hanks: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>In reply to:</strong> <a href="0643.php">John Hanks: "Re: [hwloc-users] Hwloc error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0645.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Reply:</strong> <a href="0645.php">Brice Goglin: "Re: [hwloc-users] Hwloc error."</a>
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
