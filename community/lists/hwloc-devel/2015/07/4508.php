<?
$subject_val = "[hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 16:02:47 2015" -->
<!-- isoreceived="20150721200247" -->
<!-- sent="Tue, 21 Jul 2015 13:02:41 -0700" -->
<!-- isosent="20150721200241" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] &amp;quot;make check&amp;quot; of 1.11 broken on x86 RedHat 8" -->
<!-- id="CAAvDA166qJ9LG=yUoi-YdLPzPUTSMWMraSUtQOGe-EydNgrPHA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-21 16:02:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4509.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4507.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4512.php">Brice Goglin: "Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
<li><strong>Reply:</strong> <a href="4512.php">Brice Goglin: "Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was, at Brice's request, trying out the hwloc-1.11.0 release on all sorts
<br>
of x86 systems, with and without a patch for the inline asm for the cpuid
<br>
instruction.
<br>
<p>I came across the following UNRELATED error during &quot;make check&quot; on a (very
<br>
old) Red Hat 8 system (that would be something like &quot;Fedora negative-3&quot;):
<br>
<p>make[3]: Entering directory
<br>
`/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/BLD/tests/ports'
<br>
&nbsp;&nbsp;CC       libhwloc_port_aix_la-topology-aix.lo
<br>
&nbsp;&nbsp;CCLD     libhwloc-port-aix.la
<br>
&nbsp;&nbsp;CC       libhwloc_port_bgq_la-topology-bgq.lo
<br>
topology-bgq.c: In function `hwloc_bgq_get_thread_cpubind':
<br>
topology-bgq.c:115: `cpu_set_t' undeclared (first use in this function)
<br>
topology-bgq.c:115: (Each undeclared identifier is reported only once
<br>
topology-bgq.c:115: for each function it appears in.)
<br>
topology-bgq.c:115: parse error before &quot;bg_set&quot;
<br>
topology-bgq.c:122: `bg_set' undeclared (first use in this function)
<br>
topology-bgq.c: In function `hwloc_bgq_set_thread_cpubind':
<br>
topology-bgq.c:151: `cpu_set_t' undeclared (first use in this function)
<br>
topology-bgq.c:151: parse error before &quot;bg_set&quot;
<br>
topology-bgq.c:168: `bg_set' undeclared (first use in this function)
<br>
make[3]: *** [libhwloc_port_bgq_la-topology-bgq.lo] Error 1
<br>
<p>The following output from configure might be relevant:
<br>
<p>checking for sched_setaffinity... yes
<br>
checking for sys/cpuset.h... no
<br>
checking for cpuset_setaffinity... no
<br>
checking for library containing pthread_getthrds_np... no
<br>
checking for cpuset_setid... no
<br>
<p><p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4508/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4509.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4507.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4512.php">Brice Goglin: "Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
<li><strong>Reply:</strong> <a href="4512.php">Brice Goglin: "Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
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
