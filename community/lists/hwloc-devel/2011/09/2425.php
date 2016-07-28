<?
$subject_val = "[hwloc-devel] xmlbuffer self check on PPC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 18:05:03 2011" -->
<!-- isoreceived="20110921220503" -->
<!-- sent="Thu, 22 Sep 2011 00:04:58 +0200" -->
<!-- isosent="20110921220458" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="[hwloc-devel] xmlbuffer self check on PPC" -->
<!-- id="CALT_uBR=c-eahkXG6ocxZ12HVJMV+4zHHas+Sni34M+gmXhOsg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-devel] xmlbuffer self check on PPC<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 18:04:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2426.php">Brice Goglin: "Re: [hwloc-devel] xmlbuffer self check on PPC"</a>
<li><strong>Previous message:</strong> <a href="2424.php">Brice Goglin: "[hwloc-devel] multinode/network topology status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2426.php">Brice Goglin: "Re: [hwloc-devel] xmlbuffer self check on PPC"</a>
<li><strong>Reply:</strong> <a href="2426.php">Brice Goglin: "Re: [hwloc-devel] xmlbuffer self check on PPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>how are doing?
<br>
<p>Please can you check following problem on PPC reported both with 1.2.0
<br>
and 1.2.1 version of hwloc?
<br>
<p><a href="https://bugzilla.redhat.com/show_bug.cgi?id=724937">https://bugzilla.redhat.com/show_bug.cgi?id=724937</a>
<br>
<p>Thanks a lot!
<br>
Jiri
<br>
<p>xmlbuffer self-test is failing on PPC. Please see bellow:
<br>
<p>PASS: glibc-sched
<br>
exported to buffer 0x10568a30 length 1835
<br>
re-exported to buffer 0x1056d118 length 1834
<br>
### First exported buffer is:
<br>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000003&quot;
<br>
complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot;
<br>
allowed_cpuset=&quot;0x00000003&quot; local_memory=&quot;16091512832&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;17179869184&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;65536&quot; count=&quot;245537&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;16777216&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;2.6.32-131.6.1.el6.ppc64&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;#1 SMP Mon Jun 20 14:15:43 EDT 2011&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;ppc-comm01&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;ppc&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000003&quot;
<br>
complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot;
<br>
allowed_cpuset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000003&quot;
<br>
complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot;
<br>
allowed_cpuset=&quot;0x00000003&quot; cache_size=&quot;4194304&quot; depth=&quot;2&quot;
<br>
cache_linesize=&quot;128&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000003&quot;
<br>
complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot;
<br>
allowed_cpuset=&quot;0x00000003&quot; cache_size=&quot;65536&quot; depth=&quot;1&quot; cache_linesize=&quot;128&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000003&quot;
<br>
complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot;
<br>
allowed_cpuset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot;
<br>
complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot;
<br>
allowed_cpuset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot;
<br>
complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot;
<br>
allowed_cpuset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
### End of first export buffer
<br>
### Second exported buffer is:
<br>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000003&quot;
<br>
complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot;
<br>
allowed_cpuset=&quot;0x00000003&quot; local_memory=&quot;16091512832&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4294967295&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;65536&quot; count=&quot;245537&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;16777216&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;2.6.32-131.6.1.el6.ppc64&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;#1 SMP Mon Jun 20 14:15:43 EDT 2011&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;ppc-comm01&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;ppc&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000003&quot;
<br>
complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot;
<br>
allowed_cpuset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000003&quot;
<br>
complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot;
<br>
allowed_cpuset=&quot;0x00000003&quot; cache_size=&quot;4194304&quot; depth=&quot;2&quot;
<br>
cache_linesize=&quot;128&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000003&quot;
<br>
complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot;
<br>
allowed_cpuset=&quot;0x00000003&quot; cache_size=&quot;65536&quot; depth=&quot;1&quot; cache_linesize=&quot;128&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000003&quot;
<br>
complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot;
<br>
allowed_cpuset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot;
<br>
complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot;
<br>
allowed_cpuset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot;
<br>
complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot;
<br>
allowed_cpuset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
### End of second export buffer
<br>
FAIL: xmlbuffer
<br>
========================================================
<br>
1 of 26 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2426.php">Brice Goglin: "Re: [hwloc-devel] xmlbuffer self check on PPC"</a>
<li><strong>Previous message:</strong> <a href="2424.php">Brice Goglin: "[hwloc-devel] multinode/network topology status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2426.php">Brice Goglin: "Re: [hwloc-devel] xmlbuffer self check on PPC"</a>
<li><strong>Reply:</strong> <a href="2426.php">Brice Goglin: "Re: [hwloc-devel] xmlbuffer self check on PPC"</a>
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
