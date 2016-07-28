<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 10:05:24 2015" -->
<!-- isoreceived="20151029140524" -->
<!-- sent="Thu, 29 Oct 2015 14:04:54 +0000" -->
<!-- isosent="20151029140454" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel" -->
<!-- id="8C13A87D-4B2A-4E24-B6DB-EDDF073911D8_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B201E968-E99E-4D83-B024-5B580B2C4CF1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 10:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27944.php">BRADLEY, PETER C          PW: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27942.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27942.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27948.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27948.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27950.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>

<br>
If you're compiling Open MPI from source, you need the -devel package so that the libnuma header files are installed (and therefore Open MPI [i.e., the hwloc embedded in Open MPI] can include those header files and then compile support for libnuma).
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Oct 29, 2015, at 7:01 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need to also install libnuma-devel, I&#226;&#128;&#153;m afraid - just has to do with how they chose to split the library
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 29, 2015, at 2:01 AM, Fabian Wein &lt;fabian.wein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm new to the list, maybe the issue was somewhere else already solved. I found a similar question in the mailing list archive but no solution.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; By comparing to a similar system I found that for my 4 sockets Opteron system it is necessary to run mpi with -bind-to numa option.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On my ubunut 14.04 system I get
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------
</span><br>
<span class="quotelev2">&gt;&gt; A request was made to bind a process, but at least one node does NOT
</span><br>
<span class="quotelev2">&gt;&gt; support binding processes to cpus.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Node:  leo
</span><br>
<span class="quotelev2">&gt;&gt; This usually is due to not having libnumactl and libnumactl-devel
</span><br>
<span class="quotelev2">&gt;&gt; installed on the node.
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; locate libnuma | grep so
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; results in
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/x86_64-linux-gnu/libnuma.so
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/x86_64-linux-gnu/libnuma.so.1
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/libnuma.so
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/libnuma.so.1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I configure hwloc 1.11.1 it detects numa (it tells me at the end of configure)
</span><br>
<span class="quotelev2">&gt;&gt; and &quot;grep numa config.status&quot;  results in
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;HWLOC_LIBS&quot;]=&quot;-lm  -lnuma -lxml2  &quot;
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;HWLOC_LINUX_LIBNUMA_LIBS&quot;]=&quot;-lnuma&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I configure openmpi-1.10.0 it also finds libnuma
</span><br>
<span class="quotelev2">&gt;&gt; grep numa config.status
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;OMPI_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;ORTE_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;OPAL_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;HWLOC_EMBEDDED_LIBS&quot;]=&quot;-lm  -lnuma&quot;
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;HWLOC_LINUX_LIBNUMA_LIBS&quot;]=&quot;-lnuma&quot;
</span><br>
<span class="quotelev2">&gt;&gt; D[&quot;WRAPPER_EXTRA_LIBS&quot;]=&quot; \&quot;-lm -lnuma -ldl -lutil \&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However I have no idea how I could install libnumactl and libnumactl-devel. I cannot google it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I built numactl-2.0.9 manually but
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ~/tmp/numactl-2.0.9$ ll lib*
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; only gives libnuma.a and libnuma.so
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Even the source for open-mpi gives no hint
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-1.10.0$ grep -r numactl
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/hwloc/hwloc191/hwloc/README:  * libnuma for memory binding and migration support on Linux (numactl-devel or
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/rmaps/base/help-orte-rmaps-base.txt:This usually is due to not having libnumactl and libnumactl-devel
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/rmaps/base/help-orte-rmaps-base.txt:contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/rmaps/base/help-orte-rmaps-base.txt:contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please help, I have no idea what to try next. The only options I currently see are to try with mpich or by intel-mpi.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fabian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27941.php">http://www.open-mpi.org/community/lists/users/2015/10/27941.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27942.php">http://www.open-mpi.org/community/lists/users/2015/10/27942.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27944.php">BRADLEY, PETER C          PW: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27942.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27942.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27948.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27948.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27950.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
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
