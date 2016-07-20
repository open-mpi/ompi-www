<?
$subject_val = "Re: [hwloc-users] hwloc on systems with more than 64 cpus?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 15:28:12 2010" -->
<!-- isoreceived="20100524192812" -->
<!-- sent="Mon, 24 May 2010 21:28:01 +0200" -->
<!-- isosent="20100524192801" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on systems with more than 64 cpus?" -->
<!-- id="201005242128.02384.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4BF7A707.8080506_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc on systems with more than 64 cpus?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 15:28:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0085.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0083.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0083.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0085.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0085.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Saturday 22 May 2010 11:42:31 am Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; On 17/05/2010 17:41, Jirka Hladky wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I don't have system with 128 CPUs, but according to man page it's
</span><br>
<span class="quotelev2">&gt; &gt; 0x80000000000000000000000000000000
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have attached the source code as well.  See str_to_cpuset function. It
</span><br>
<span class="quotelev2">&gt; &gt; supports cpuset hex mask of any length.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I understand your point to use hwloc-bind. However, I still believe that
</span><br>
<span class="quotelev2">&gt; &gt; supporting taskset would be a useful feature and very easy to implement
</span><br>
<span class="quotelev2">&gt; &gt; (you basically just convert physical CPU # into hex). taskset is
</span><br>
<span class="quotelev2">&gt; &gt; currently THE user-space program to set CPU affinity.  I understand that
</span><br>
<span class="quotelev2">&gt; &gt; it's probably too late for this release. But perhaps you can consider it
</span><br>
<span class="quotelev2">&gt; &gt; for the next release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Jirka,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have added --taskset options to hwloc-calc, hwloc-bind and lstopo. It
</span><br>
<span class="quotelev1">&gt; uses some new hwloc_cpuset_taskset_snprint/asprintf/sscanf() functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the patch at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset?new=2120%40trunk&amp;old=2119%40t">https://svn.open-mpi.org/trac/hwloc/changeset?new=2120%40trunk&amp;old=2119%40t</a>
</span><br>
<span class="quotelev1">&gt; runk (applies to trunk, but not to 1.0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The easiest way for you to test it might be tomorrow's nightly tarball
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/">http://www.open-mpi.org/software/hwloc/nightly/trunk/</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>Hi Brice,
<br>
<p>thanks a lot for the patch. I have tested hwloc-1.1a1r2130 from May 22.
<br>
<p>I have tested it on the box with 64 cores.
<br>
<p><p>lstopo --taskset --cpuset
<br>
works as expected. Correct taskset string is generated. That's great news!! 
<br>
:-)
<br>
<p>What's confusing is that --taskset alone (without --cpuset) has no effect at 
<br>
all. IMHO, --cpuset and --taskset should be mutually exclusive options.
<br>
<p>I was not able to get hwloc-distrib working together with hwloc-calc to get 
<br>
expected output:
<br>
hwloc-distrib --single 8
<br>
0x00000001
<br>
0x00000010
<br>
0x00000002
<br>
0x00000020
<br>
0x00000004
<br>
0x00000040
<br>
0x00000008
<br>
0x00000080
<br>
<p>but
<br>
hwloc-distrib --single 8 | xargs hwloc-calc --taskset
<br>
will produce
<br>
0xff ???
<br>
<p>Could you please suggest what am I doing wrong or  perhaps add support of 
<br>
--taskset to
<br>
hwloc-distrib
<br>
command directly?
<br>
<p>Thanks a lot for looking into it!!!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0085.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0083.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0083.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0085.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Reply:</strong> <a href="0085.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
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
