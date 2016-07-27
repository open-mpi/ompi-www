<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 14:03:36 2012" -->
<!-- isoreceived="20120203190336" -->
<!-- sent="Fri, 03 Feb 2012 11:03:12 -0800" -->
<!-- isosent="20120203190312" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu" -->
<!-- id="4F2C2F70.9060603_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120203180110.GA10030_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 14:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2805.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2803.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2800.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2807.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/3/2012 10:01 AM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Paul H. Hargrove, le Wed 01 Feb 2012 20:18:59 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; So if qemu's emulation were at fault, then one would expect more wide-spread
</span><br>
<span class="quotelev2">&gt;&gt; problems and a generally unstable system.
</span><br>
<span class="quotelev2">&gt;&gt; While -mabi=64 is not the default in user-space, it IS the way the linux
</span><br>
<span class="quotelev2">&gt;&gt; kernel is built and thus should be well tested.
</span><br>
<span class="quotelev1">&gt; Except that it does not use floating point operations. I've commited a
</span><br>
<span class="quotelev1">&gt; &quot;fix&quot;. It makes the failures change. I got fun things with the mips64
</span><br>
<span class="quotelev1">&gt; libc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fprintf(stderr,&quot;%f\n&quot;, min_distance);
</span><br>
<span class="quotelev1">&gt; fprintf(stderr,&quot;%f\n&quot;, accuracy);
</span><br>
<span class="quotelev1">&gt; fprintf(stderr,&quot;%f %f\n&quot;, min_distance, min_distance);
</span><br>
<span class="quotelev1">&gt; fprintf(stderr,&quot;%f %f\n&quot;, min_distance, accuracy);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will print
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.0
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 2.0 2.0
</span><br>
<span class="quotelev1">&gt; 0.0 0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ! It seems lenny on qemu-mips64 is not really stable with floats yet :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p>Now I am confused.  My qeum is simulating the 5Kc processor.
<br>
I have been configuring w/ CFLAGS=&quot;-march=5kc -mabi=64&quot;
<br>
5Kc = single issue no floating-point
<br>
5Kf = adds floating-point unit that can issue indep. of integer unit.
<br>
<p>So, are the references to floating-point some thing *I* should retest on 
<br>
my platform?
<br>
Perhaps the &quot;lenny on qemu-mips64&quot; is saying the SOFT FP support is broken?
<br>
Or perhaps this is something discovered in testing that is unrelated to 
<br>
my failure?
<br>
I could use a clue.
<br>
<p>-Paul [who might try again today to get qemu/mips64/squeeze working]
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2805.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2803.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2800.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2807.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
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
