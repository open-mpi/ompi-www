<?
$subject_val = "Re: [hwloc-devel] HWLOC_NBMAXCPUS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 09:28:28 2012" -->
<!-- isoreceived="20120629132828" -->
<!-- sent="Fri, 29 Jun 2012 09:28:23 -0400" -->
<!-- isosent="20120629132823" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] HWLOC_NBMAXCPUS" -->
<!-- id="4FEDAD77.8080808_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c1e083bb-5219-4390-9d57-88da360400b9_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] HWLOC_NBMAXCPUS<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-29 09:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3137.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Previous message:</strong> <a href="3135.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>In reply to:</strong> <a href="3135.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3137.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Reply:</strong> <a href="3137.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How soon will 1.5 be released?  I would like to get it into the OMPI 
<br>
trunk and 1.7.
<br>
<p>--td
<br>
<p>On 6/29/2012 8:19 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Thanks for testing.
</span><br>
<span class="quotelev1">&gt; I'll commit to trunk for sure. I don't know about 1.4 since I am 
</span><br>
<span class="quotelev1">&gt; planning a 1.5 rather than a 1.4.3 in the near future.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I finally got access to the big machine again.  The code you sent
</span><br>
<span class="quotelev1">&gt;     me seems to work nicely.  Are you going to put it back to the
</span><br>
<span class="quotelev1">&gt;     hwloc trunk and 1.4 branches?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 6/25/2012 11:31 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     I'll test out the patch once the test machine is available again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 6/25/2012 3:42 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hello Terry,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Here's a patch that should help. It cleans the code and makes all arrays
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     dynamic. I artificially set the initial array sizes to 4 to experience
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the code on our 24-way T1 machine. I will set it to 256 or so in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     final commit. Please let me know if it helps on your 1440-way machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt;     Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt;     Oracle *- Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt;     95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt;     Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt;     Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;     Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt;     95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt;     Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3136/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3137.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Previous message:</strong> <a href="3135.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>In reply to:</strong> <a href="3135.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3137.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Reply:</strong> <a href="3137.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
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
