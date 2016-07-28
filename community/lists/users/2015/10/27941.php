<?
$subject_val = "[OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 05:01:06 2015" -->
<!-- isoreceived="20151029090106" -->
<!-- sent="Thu, 29 Oct 2015 10:01:24 +0100" -->
<!-- isosent="20151029090124" -->
<!-- name="Fabian Wein" -->
<!-- email="fabian.wein_at_[hidden]" -->
<!-- subject="[OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="5631E064.9030303_at_fau.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Unable to compile for libnumactl and libnumactl-devel<br>
<strong>From:</strong> Fabian Wein (<em>fabian.wein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 05:01:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27942.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27940.php">Joshua Mora: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27942.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27942.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm new to the list, maybe the issue was somewhere else already 
<br>
solved. I found a similar question in the mailing list archive but no 
<br>
solution.
<br>
<p>By comparing to a similar system I found that for my 4 sockets Opteron 
<br>
system it is necessary to run mpi with -bind-to numa option.
<br>
<p><p>On my ubunut 14.04 system I get
<br>
<p>----------------------
<br>
A request was made to bind a process, but at least one node does NOT
<br>
support binding processes to cpus.
<br>
<p>&nbsp;&nbsp;&nbsp;Node:  leo
<br>
This usually is due to not having libnumactl and libnumactl-devel
<br>
installed on the node.
<br>
-----------------------
<br>
<p>locate libnuma | grep so
<br>
<p>results in
<br>
<p>/usr/lib/x86_64-linux-gnu/libnuma.so
<br>
/usr/lib/x86_64-linux-gnu/libnuma.so.1
<br>
/usr/lib64/libnuma.so
<br>
/usr/lib64/libnuma.so.1
<br>
<p>When I configure hwloc 1.11.1 it detects numa (it tells me at the end 
<br>
of configure)
<br>
and &quot;grep numa config.status&quot;  results in
<br>
S[&quot;HWLOC_LIBS&quot;]=&quot;-lm  -lnuma -lxml2  &quot;
<br>
S[&quot;HWLOC_LINUX_LIBNUMA_LIBS&quot;]=&quot;-lnuma&quot;
<br>
<p>When I configure openmpi-1.10.0 it also finds libnuma
<br>
grep numa config.status
<br>
S[&quot;OMPI_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
<br>
S[&quot;ORTE_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
<br>
S[&quot;OPAL_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
<br>
S[&quot;HWLOC_EMBEDDED_LIBS&quot;]=&quot;-lm  -lnuma&quot;
<br>
S[&quot;HWLOC_LINUX_LIBNUMA_LIBS&quot;]=&quot;-lnuma&quot;
<br>
D[&quot;WRAPPER_EXTRA_LIBS&quot;]=&quot; \&quot;-lm -lnuma -ldl -lutil \&quot;&quot;
<br>
<p>However I have no idea how I could install libnumactl and 
<br>
libnumactl-devel. I cannot google it.
<br>
<p>I built numactl-2.0.9 manually but
<br>
<p>~/tmp/numactl-2.0.9$ ll lib*
<br>
<p>only gives libnuma.a and libnuma.so
<br>
<p>Even the source for open-mpi gives no hint
<br>
/tmp/openmpi-1.10.0$ grep -r numactl
<br>
opal/mca/hwloc/hwloc191/hwloc/README:  * libnuma for memory binding 
<br>
and migration support on Linux (numactl-devel or
<br>
orte/mca/rmaps/base/help-orte-rmaps-base.txt:This usually is due to 
<br>
not having libnumactl and libnumactl-devel
<br>
orte/mca/rmaps/base/help-orte-rmaps-base.txt:contained in the 
<br>
libnumactl and libnumactl-devel packages.
<br>
orte/mca/rmaps/base/help-orte-rmaps-base.txt:contained in the 
<br>
libnumactl and libnumactl-devel packages.
<br>
<p>Please help, I have no idea what to try next. The only options I 
<br>
currently see are to try with mpich or by intel-mpi.
<br>
<p>Thanks,
<br>
<p>Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27942.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27940.php">Joshua Mora: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27942.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27942.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
