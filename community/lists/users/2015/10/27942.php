<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 10:01:30 2015" -->
<!-- isoreceived="20151029140130" -->
<!-- sent="Thu, 29 Oct 2015 07:01:24 -0700" -->
<!-- isosent="20151029140124" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="B201E968-E99E-4D83-B024-5B580B2C4CF1_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5631E064.9030303_at_fau.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 10:01:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27941.php">Fabian Wein: "[OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27941.php">Fabian Wein: "[OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27945.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to also install libnuma-devel, I&#226;&#128;&#153;m afraid - just has to do with how they chose to split the library
<br>
<p><p><span class="quotelev1">&gt; On Oct 29, 2015, at 2:01 AM, Fabian Wein &lt;fabian.wein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm new to the list, maybe the issue was somewhere else already solved. I found a similar question in the mailing list archive but no solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By comparing to a similar system I found that for my 4 sockets Opteron system it is necessary to run mpi with -bind-to numa option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my ubunut 14.04 system I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind a process, but at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding processes to cpus.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Node:  leo
</span><br>
<span class="quotelev1">&gt; This usually is due to not having libnumactl and libnumactl-devel
</span><br>
<span class="quotelev1">&gt; installed on the node.
</span><br>
<span class="quotelev1">&gt; -----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; locate libnuma | grep so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; results in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib/x86_64-linux-gnu/libnuma.so
</span><br>
<span class="quotelev1">&gt; /usr/lib/x86_64-linux-gnu/libnuma.so.1
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libnuma.so
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libnuma.so.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I configure hwloc 1.11.1 it detects numa (it tells me at the end of configure)
</span><br>
<span class="quotelev1">&gt; and &quot;grep numa config.status&quot;  results in
</span><br>
<span class="quotelev1">&gt; S[&quot;HWLOC_LIBS&quot;]=&quot;-lm  -lnuma -lxml2  &quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;HWLOC_LINUX_LIBNUMA_LIBS&quot;]=&quot;-lnuma&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I configure openmpi-1.10.0 it also finds libnuma
</span><br>
<span class="quotelev1">&gt; grep numa config.status
</span><br>
<span class="quotelev1">&gt; S[&quot;OMPI_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;ORTE_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;OPAL_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;HWLOC_EMBEDDED_LIBS&quot;]=&quot;-lm  -lnuma&quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;HWLOC_LINUX_LIBNUMA_LIBS&quot;]=&quot;-lnuma&quot;
</span><br>
<span class="quotelev1">&gt; D[&quot;WRAPPER_EXTRA_LIBS&quot;]=&quot; \&quot;-lm -lnuma -ldl -lutil \&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However I have no idea how I could install libnumactl and libnumactl-devel. I cannot google it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I built numactl-2.0.9 manually but
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~/tmp/numactl-2.0.9$ ll lib*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; only gives libnuma.a and libnuma.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even the source for open-mpi gives no hint
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-1.10.0$ grep -r numactl
</span><br>
<span class="quotelev1">&gt; opal/mca/hwloc/hwloc191/hwloc/README:  * libnuma for memory binding and migration support on Linux (numactl-devel or
</span><br>
<span class="quotelev1">&gt; orte/mca/rmaps/base/help-orte-rmaps-base.txt:This usually is due to not having libnumactl and libnumactl-devel
</span><br>
<span class="quotelev1">&gt; orte/mca/rmaps/base/help-orte-rmaps-base.txt:contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev1">&gt; orte/mca/rmaps/base/help-orte-rmaps-base.txt:contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please help, I have no idea what to try next. The only options I currently see are to try with mpich or by intel-mpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fabian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27941.php">http://www.open-mpi.org/community/lists/users/2015/10/27941.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27941.php">Fabian Wein: "[OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27941.php">Fabian Wein: "[OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27945.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
