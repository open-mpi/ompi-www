<?
$subject_val = "Re: [OMPI devel] opal_{lifo,fifo} hang on ppc in master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 12:41:41 2015" -->
<!-- isoreceived="20150701164141" -->
<!-- sent="Wed, 1 Jul 2015 09:39:10 -0700" -->
<!-- isosent="20150701163910" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_{lifo,fifo} hang on ppc in master" -->
<!-- id="CAAvDA15cqwCsxYKHT2Aw87QkaX1rsuLzbtF0R8mM4S9onV-aAA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] opal_{lifo,fifo} hang on ppc in master" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_{lifo,fifo} hang on ppc in master<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 12:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17589.php">Nathan Hjelm: "Re: [OMPI devel] opal_lifo hangs on ppc in master"</a>
<li><strong>Previous message:</strong> <a href="17587.php">Paul Hargrove: "[OMPI devel] opal_lifo hangs on ppc in master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And I just found that after I kill opal_lifo, the opal_fifo test hangs too.
<br>
Output was not shown by &quot;make check&quot;, but here is what I see manually:
<br>
<p>$ ./test/class/opal_lifo
<br>
Single thread test. Time: 0 s 35084 us 35 nsec/poppush
<br>
Atomics thread finished. Time: 0 s 197821 us 197 nsec/poppush
<br>
^C
<br>
<p>$ ./test/class/opal_fifo
<br>
Single thread test. Time: 0 s 47514 us 47 nsec/poppush
<br>
Atomics thread finished. Time: 0 s 142369 us 142 nsec/poppush
<br>
^C
<br>
<p>Sorry, no backtrace for opal_fifo because I have to head to a meeting now.
<br>
<p>-Paul
<br>
<p>On Wed, Jul 1, 2015 at 9:33 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Testing last night's master tarball with &quot;make check&quot; I find that
</span><br>
<span class="quotelev1">&gt; opal_lifo *hangs* on every ppc/linux system I try, including both gcc and
</span><br>
<span class="quotelev1">&gt; xlc, both 32- and 64-bit CPUs and even a little-endian POWER8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attaching gdb to a hung yields:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) thread apply all bt full
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 1 (Thread 0xfff9e4f8f30 (LWP 32858)):
</span><br>
<span class="quotelev1">&gt; #0  0x0000000010001778 in check_lifo_consistency (lifo=0xfffde0100b8,
</span><br>
<span class="quotelev1">&gt; expected_count=100)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/hargrove/SCRATCH/OMPI/openmpi-master-linux-ppc64-xlc-12.1/openmpi-dev-2014-gc8730b5/test/class/opal_lifo.c:73
</span><br>
<span class="quotelev1">&gt;         item = 0x1003d6a8190
</span><br>
<span class="quotelev1">&gt;         count = 215728334
</span><br>
<span class="quotelev1">&gt;         __func__ = &quot;check_lifo_consistency&quot;
</span><br>
<span class="quotelev1">&gt; #1  0x00000000100022e4 in main (argc=1, argv=0xfffde010688)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/hargrove/SCRATCH/OMPI/openmpi-master-linux-ppc64-xlc-12.1/openmpi-dev-2014-gc8730b5/test/class/opal_lifo.c:171
</span><br>
<span class="quotelev1">&gt;         threads = {17590531453408, 17590520967648, 17590510481888,
</span><br>
<span class="quotelev1">&gt; 17590499996128, 17590489510368,
</span><br>
<span class="quotelev1">&gt;           17590479024608, 17590468538848, 17590458053088}
</span><br>
<span class="quotelev1">&gt;         item = 0x1003d6a83c0
</span><br>
<span class="quotelev1">&gt;         prev = 0xfffde0100f0
</span><br>
<span class="quotelev1">&gt;         item2 = 0x1003d6a2cf0
</span><br>
<span class="quotelev1">&gt;         start = {tv_sec = 1435767655, tv_usec = 746823}
</span><br>
<span class="quotelev1">&gt;         stop = {tv_sec = 1435767667, tv_usec = 450808}
</span><br>
<span class="quotelev1">&gt;         total = {tv_sec = 11, tv_usec = 703985}
</span><br>
<span class="quotelev1">&gt;         lifo = {super = {obj_magic_id = 16046253926196952813, obj_class =
</span><br>
<span class="quotelev1">&gt; 0xfff9e431fb0,
</span><br>
<span class="quotelev1">&gt;             obj_reference_count = 1,
</span><br>
<span class="quotelev1">&gt;             cls_init_file_name = 0x10003524
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-master-linux-ppc64-xlc-12.1/openmpi-dev-2014-gc8730b5/test/class/opal_lifo.c&quot;,
</span><br>
<span class="quotelev1">&gt; cls_init_lineno = 96}, opal_lifo_head = {data = {
</span><br>
<span class="quotelev1">&gt;               counter = 0, item = 0x1003d6a8190}}, opal_lifo_ghost =
</span><br>
<span class="quotelev1">&gt; {super = {
</span><br>
<span class="quotelev1">&gt;               obj_magic_id = 16046253926196952813, obj_class =
</span><br>
<span class="quotelev1">&gt; 0xfff9e431e18, obj_reference_count = 1,
</span><br>
<span class="quotelev1">&gt;               cls_init_file_name = 0xfff9e36f528
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-master-linux-ppc64-xlc-12.1/openmpi-dev-2014-gc8730b5/opal/class/opal_lifo.c&quot;,
</span><br>
<span class="quotelev1">&gt; cls_init_lineno = 27},
</span><br>
<span class="quotelev1">&gt;             opal_list_next = 0xfffde0100f0, opal_list_prev = 0x0,
</span><br>
<span class="quotelev1">&gt; item_free = 1,
</span><br>
<span class="quotelev1">&gt;             opal_list_item_refcount = 0, opal_list_item_belong_to = 0x0}}
</span><br>
<span class="quotelev1">&gt;         success = false
</span><br>
<span class="quotelev1">&gt;         timing = 1.4629981249999999e-06
</span><br>
<span class="quotelev1">&gt;         rc = 0
</span><br>
<span class="quotelev1">&gt;         __func__ = &quot;main&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17589.php">Nathan Hjelm: "Re: [OMPI devel] opal_lifo hangs on ppc in master"</a>
<li><strong>Previous message:</strong> <a href="17587.php">Paul Hargrove: "[OMPI devel] opal_lifo hangs on ppc in master"</a>
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
