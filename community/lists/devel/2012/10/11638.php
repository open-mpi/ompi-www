<?
$subject_val = "[OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 12:32:13 2012" -->
<!-- isoreceived="20121025163213" -->
<!-- sent="Thu, 25 Oct 2012 12:32:07 -0400" -->
<!-- isosent="20121025163207" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk" -->
<!-- id="D58AC913-3B5E-4D21-81C1-575ADDAFDEB7_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 12:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11639.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Previous message:</strong> <a href="11637.php">Lirong Jian: "[OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11639.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Reply:</strong> <a href="11639.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Reply:</strong> <a href="11640.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached are the following graphs:
<br>
<p>1. sm NetPipe latencies up to size 150 bytes (run on a Sandy Bride, 2 procs same core)
<br>
2. openib NetPipe latencies up to size 150 bytes (run on 2 old Xeons [pre-Nehalem] with old Mellanox ConnectX IB HCAs)
<br>
3. Same as #1, but all the way up to 8MB
<br>
4. Same as #2, but all the way up to 8MB
<br>
<p>I also attached a tarball of all my raw net pipe numbers (since the graphs are loglog).
<br>
<p>There's definite weirdness here.  Here's some observations:
<br>
<p>a) Trunk openib latency is noticeably better in the mid-range as compared to v1.6 and v1.7.  This is good!  Is this change something that can be brought to v1.6 / v1.7?
<br>
<p>b) The addition of the libnbc progress function to the progress loop has a non-zero impact on latency.  It's most noticeable in graphs #1 and #2.  Can something be done to only add the libnbc progress function to the loop only when NBC operations are ongoing?  Right now, the libnbc progress function is *always* added to the progress loop, even if you never use any NBCs.
<br>
<p>c) There's a noticeable increase in small message latency for the openib BTL in v1.7 as compared to the trunk and v1.6 branches.  I don't know if this is an openib thing, or the result of something else.
<br>
<p>d) The trunk (without libnbc) has the best small message sm latency, period -- even better than v1.6.  Yay!  Is this decrease in latency (compared to v1.6) something that can be brought to v1.7?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>





</pre>
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11638/netpipe-sm-latencies-to-128.pdf">netpipe-sm-latencies-to-128.pdf</a>
</ul>
<!-- attachment="netpipe-sm-latencies-to-128.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11638/netpipe-openib-latencies-to-128.pdf">netpipe-openib-latencies-to-128.pdf</a>
</ul>
<!-- attachment="netpipe-openib-latencies-to-128.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11638/netpipe-sm-latencies.pdf">netpipe-sm-latencies.pdf</a>
</ul>
<!-- attachment="netpipe-sm-latencies.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11638/netpipe-openib-latencies.pdf">netpipe-openib-latencies.pdf</a>
</ul>
<!-- attachment="netpipe-openib-latencies.pdf" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11638/netpipe-latency-numbers.tar.bz2">netpipe-latency-numbers.tar.bz2</a>
</ul>
<!-- attachment="netpipe-latency-numbers.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11639.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Previous message:</strong> <a href="11637.php">Lirong Jian: "[OMPI devel] NIC Failover and Message Stripping of Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11639.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Reply:</strong> <a href="11639.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Reply:</strong> <a href="11640.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
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
