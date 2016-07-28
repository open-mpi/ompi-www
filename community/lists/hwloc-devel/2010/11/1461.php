<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 09:03:37 2010" -->
<!-- isoreceived="20101110140337" -->
<!-- sent="Wed, 10 Nov 2010 15:02:21 +0100" -->
<!-- isosent="20101110140221" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="201011101502.22189.jhladky_at_redhat.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CDA9E0E.3070000_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 09:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1462.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1460.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1rc2"</a>
<li><strong>In reply to:</strong> <a href="1459.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1462.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1462.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Brice,
<br>
<p>On Wednesday, November 10, 2010 02:28:46 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 10/11/2010 14:09, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have found couple of issues with 1.1rc2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1) man hwloc-bind
</span><br>
<span class="quotelev2">&gt; &gt; Following example does not work:
</span><br>
<span class="quotelev2">&gt; &gt; $ hwloc-bind --cpubind node:1 --membind:0 echo hello
</span><br>
<span class="quotelev2">&gt; &gt; Unrecognized option: --membind:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obvious typo in the manpage (should be --membind node:0), I am fixing this.
</span><br>
Thanks!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2) hwloc-bind --get --membind is not working for me (RHEL 6.0)
</span><br>
<span class="quotelev2">&gt; &gt; $ hwloc-bind --membind node:1 --mempolicy interleave -- hwloc-bind --get
</span><br>
<span class="quotelev2">&gt; &gt; -- membind
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_get_membind failed (errno 22 Invalid argument)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You get the same error when running only &quot;hwloc-bind --get --membind&quot;,
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
Yes:
<br>
$ hwloc-bind --get --membind
<br>
hwloc_get_membind failed (errno 22 Invalid argument)
<br>
<p><p><span class="quotelev1">&gt; I am not sure about this one. Do you have NUMA support in your kernel?
</span><br>
<span class="quotelev1">&gt; Is your machine NUMA? Can you send the gather-topology tarball ? (if we
</span><br>
<span class="quotelev1">&gt; don't have it already :))
</span><br>
Yes, it's a NUMA box with NUMA support in kernel.
<br>
<p>Both
<br>
numactl --membind=0 --physcpubind=1 stream/stream
<br>
and
<br>
hwloc-bind --cpubind node:1 --membind node:0 stream/stream
<br>
works nicely.
<br>
<p>I have attached gather-topology tarball.
<br>
<p>Thanks for looking into it! Let me know if you need more information.
<br>
<p><p><span class="quotelev2">&gt; &gt; 3)
</span><br>
<span class="quotelev2">&gt; &gt; $ hwloc-calc --single socket:0
</span><br>
<span class="quotelev2">&gt; &gt; Unrecognized option: --single
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oops, I removed it by mistake, fixing this too.
</span><br>
Great:-)
<br>
<p>Thanks
<br>
Jirka
<br>
<p>

<br><hr>
<ul>
<li>application/x-bzip-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1461/2.6.32-71.el6.x86_64_dell-per610-02.lab.bos.redhat.com_gather-topology.tar.bz2">2.6.32-71.el6.x86_64_dell-per610-02.lab.bos.redhat.com_gather-topology.tar.bz2</a>
</ul>
<!-- attachment="2.6.32-71.el6.x86_64_dell-per610-02.lab.bos.redhat.com_gather-topology.tar.bz2" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1461/2.6.32-71.el6.x86_64_dell-per610-02.lab.bos.redhat.com_gather-topology.output">2.6.32-71.el6.x86_64_dell-per610-02.lab.bos.redhat.com_gather-topology.output</a>
</ul>
<!-- attachment="2.6.32-71.el6.x86_64_dell-per610-02.lab.bos.redhat.com_gather-topology.output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1462.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1460.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1rc2"</a>
<li><strong>In reply to:</strong> <a href="1459.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1462.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1462.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
