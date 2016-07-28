<?
$subject_val = "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 12:57:25 2015" -->
<!-- isoreceived="20151218175725" -->
<!-- sent="Fri, 18 Dec 2015 11:57:20 -0600" -->
<!-- isosent="20151218175720" -->
<!-- name="Rezaul Karim Raju" -->
<!-- email="raju.cse.buet_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated" -->
<!-- id="CAOQ1qztja0kKWoVVyio_FGuv9aSwEGj6Gs+hyTh_WaKn5sWO3Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="566FDD35.8030202_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated<br>
<strong>From:</strong> Rezaul Karim Raju (<em>raju.cse.buet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-18 12:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1232.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>Previous message:</strong> <a href="1230.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>In reply to:</strong> <a href="1226.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1245.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1245.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>Thanks for your time and nice explanation.
<br>
I have looked at the issue with location return (the page proportion across
<br>
multiple node &amp; physical allocation). Are you thinking to add this
<br>
function..? Like if we think list of node or nodes where the array is
<br>
allocated (only if physically allocated otherwise NULL) is it possible..?
<br>
<p>I am looking for getting the physical location of data allocated by OS
<br>
default policy. Appreciate any better idea and please share with me.
<br>
<p>Best Regards,
<br>
- Raju
<br>
<p>On Tue, Dec 15, 2015 at 3:28 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 15/12/2015 07:21, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 15/12/2015 05:57, Rezaul Karim Raju a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *OUTPUT: *
</span><br>
<span class="quotelev1">&gt; *Policy--&gt;* buffer(Array: A) *membind [default OS binding] Policy is:= 1
</span><br>
<span class="quotelev1">&gt; [1 refers to *HWLOC_MEMBIND_FIRSTTOUCH
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0">https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0</a>&gt;
</span><br>
<span class="quotelev1">&gt; *]*
</span><br>
<span class="quotelev1">&gt; *Nodeset --&gt; *buffer(Array: A) bound to nodeset* 0x000000ff *with contains
</span><br>
<span class="quotelev1">&gt; *:*
</span><br>
<span class="quotelev1">&gt;  node #0 (OS index 0) with 8387047424 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #1 (OS index 1) with 8471617536 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #2 (OS index 2) with 8471621632 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #3 (OS index 3) with 8471617536 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #4 (OS index 4) with 8471621632 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #5 (OS index 5) with 8471617536 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #6 (OS index 6) with 8471621632 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #7 (OS index 7) with 8471564288 bytes of memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *why it shows allocated memory is bound to all available nodeset..? should
</span><br>
<span class="quotelev1">&gt; it not be allocated to a specific nodeset one ..?*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are confusing the &quot;binding&quot; and the &quot;actual location&quot;. Your memory
</span><br>
<span class="quotelev1">&gt; buffer isn't bound to a specific location by default. But Linux has to
</span><br>
<span class="quotelev1">&gt; allocate it somewhere. So your buffer is &quot;located&quot; in some node after the
</span><br>
<span class="quotelev1">&gt; allocation, but it is not &quot;bound&quot; there (what get_area_membind returns)
</span><br>
<span class="quotelev1">&gt; which means Linux could have allocated it somewhere else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc cannot currently return the &quot;location&quot; of a memory buffer. I have
</span><br>
<span class="quotelev1">&gt; been thinking about adding this feature in the past, but it looks like you
</span><br>
<span class="quotelev1">&gt; are the first actual user requesting this. We could add something like
</span><br>
<span class="quotelev1">&gt; hwloc_get_last_memory_location(topology, input buffer, outputnodeset)
</span><br>
<span class="quotelev1">&gt; At least on Linux that's possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For clarity, this is similar to the difference between hwloc_get_cpubind()
</span><br>
<span class="quotelev1">&gt; and hwloc_get_last_cpu_location(): A task always runs on a specific PU,
</span><br>
<span class="quotelev1">&gt; even if it is not bound to anything specific PU.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, there is already an issue for this:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/issues/97">https://github.com/open-mpi/hwloc/issues/97</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Feel to comment there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1226.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1226.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
------------------------
RaJu, Rezaul Karim
Graduate Student (PhD) | Computer Science | University of Houston
Research in High Performance Computing Tools
Houston, Texas-77004
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1232.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>Previous message:</strong> <a href="1230.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>In reply to:</strong> <a href="1226.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1245.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1245.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
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
