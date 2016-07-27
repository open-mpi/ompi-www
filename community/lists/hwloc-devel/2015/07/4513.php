<?
$subject_val = "Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 26 06:41:26 2015" -->
<!-- isoreceived="20150726104126" -->
<!-- sent="Sun, 26 Jul 2015 03:41:18 -0700" -->
<!-- isosent="20150726104118" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] &amp;quot;make check&amp;quot; of 1.11 broken on x86 RedHat 8" -->
<!-- id="CAAvDA17FbwKN33m2gSz1ahNFuiJbsQx_iB0WRNS78k33k3i0Yg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55B4A518.3070906_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-26 06:41:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4514.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-618-g456708b)"</a>
<li><strong>Previous message:</strong> <a href="4512.php">Brice Goglin: "Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
<li><strong>In reply to:</strong> <a href="4512.php">Brice Goglin: "Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yup, that resolved the problem for me.
<br>
-Paul
<br>
<p>On Sun, Jul 26, 2015 at 2:15 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Maybe try this. It should disable the entire BGQ backend
</span><br>
<span class="quotelev1">&gt; cross-build-testing when Linux doesn't have enough pthread/cpuset support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 21/07/2015 22:02, Paul Hargrove a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I was, at Brice's request, trying out the hwloc-1.11.0 release on all
</span><br>
<span class="quotelev1">&gt; sorts of x86 systems, with and without a patch for the inline asm for the
</span><br>
<span class="quotelev1">&gt; cpuid instruction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I came across the following UNRELATED error during &quot;make check&quot; on a
</span><br>
<span class="quotelev1">&gt; (very old) Red Hat 8 system (that would be something like &quot;Fedora
</span><br>
<span class="quotelev1">&gt; negative-3&quot;):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/BLD/tests/ports'
</span><br>
<span class="quotelev1">&gt;   CC       libhwloc_port_aix_la-topology-aix.lo
</span><br>
<span class="quotelev1">&gt;   CCLD     libhwloc-port-aix.la
</span><br>
<span class="quotelev1">&gt;   CC       libhwloc_port_bgq_la-topology-bgq.lo
</span><br>
<span class="quotelev1">&gt; topology-bgq.c: In function `hwloc_bgq_get_thread_cpubind':
</span><br>
<span class="quotelev1">&gt; topology-bgq.c:115: `cpu_set_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; topology-bgq.c:115: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; topology-bgq.c:115: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; topology-bgq.c:115: parse error before &quot;bg_set&quot;
</span><br>
<span class="quotelev1">&gt; topology-bgq.c:122: `bg_set' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; topology-bgq.c: In function `hwloc_bgq_set_thread_cpubind':
</span><br>
<span class="quotelev1">&gt; topology-bgq.c:151: `cpu_set_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; topology-bgq.c:151: parse error before &quot;bg_set&quot;
</span><br>
<span class="quotelev1">&gt; topology-bgq.c:168: `bg_set' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; make[3]: *** [libhwloc_port_bgq_la-topology-bgq.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The following output from configure might be relevant:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  checking for sched_setaffinity... yes
</span><br>
<span class="quotelev1">&gt; checking for sys/cpuset.h... no
</span><br>
<span class="quotelev1">&gt; checking for cpuset_setaffinity... no
</span><br>
<span class="quotelev1">&gt; checking for library containing pthread_getthrds_np... no
</span><br>
<span class="quotelev1">&gt; checking for cpuset_setid... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;   Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing listhwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4508.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4508.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4512.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4512.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4513/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4514.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-618-g456708b)"</a>
<li><strong>Previous message:</strong> <a href="4512.php">Brice Goglin: "Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
<li><strong>In reply to:</strong> <a href="4512.php">Brice Goglin: "Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
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
