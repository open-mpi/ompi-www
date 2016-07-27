<?
$subject_val = "Re: [hwloc-devel] HWLOC_NBMAXCPUS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 11:21:27 2012" -->
<!-- isoreceived="20120629152127" -->
<!-- sent="Fri, 29 Jun 2012 17:21:20 +0200" -->
<!-- isosent="20120629152120" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] HWLOC_NBMAXCPUS" -->
<!-- id="37b32c17-3e37-4c88-976d-6f4e283a0831_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4FEDAD77.8080808_at_oracle.com" -->
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
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-29 11:21:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3138.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Previous message:</strong> <a href="3136.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>In reply to:</strong> <a href="3136.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In July hopefully.
<br>
Brice
<br>
<p><p>TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; a &#195;&#169;crit :
<br>
<p>How soon will 1.5 be released?  I would like to get it into the OMPI trunk and 1.7.
<br>
<p>--td
<br>
<p>On 6/29/2012 8:19 AM, Brice Goglin wrote: 
<br>
<p>Thanks for testing.
<br>
I'll commit to trunk for sure. I don't know about 1.4 since I am planning a 1.5 rather than a 1.4.3 in the near future.
<br>
Brice
<br>
<p><p><p>TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; a &#195;&#169;crit : 
<br>
<p>I finally got access to the big machine again.  The code you sent me seems to work nicely.  Are you going to put it back to the hwloc trunk and 1.4 branches?
<br>
<p>--td
<br>
<p>On 6/25/2012 11:31 AM, TERRY DONTJE wrote: 
<br>
<p>I'll test out the patch once the test machine is available again.
<br>
<p>--td
<br>
<p>On 6/25/2012 3:42 AM, Brice Goglin wrote: 
<br>
<p>Hello Terry, Here's a patch that should help. It cleans the code and makes all arrays dynamic. I artificially set the initial array sizes to 4 to experience the code on our 24-way T1 machine. I will set it to 256 or so in the final commit. Please let me know if it helps on your 1440-way machine. Brice 
<br>
<p><p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]
_______________________________________________ hwloc-devel mailing list hwloc-devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a> 
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]
_______________________________________________ hwloc-devel mailing list hwloc-devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a> 
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3137/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3138.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Previous message:</strong> <a href="3136.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>In reply to:</strong> <a href="3136.php">TERRY DONTJE: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
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
