<?
$subject_val = "[OMPI devel] opal_lifo hangs on ppc in master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 12:34:48 2015" -->
<!-- isoreceived="20150701163448" -->
<!-- sent="Wed, 1 Jul 2015 09:33:53 -0700" -->
<!-- isosent="20150701163353" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_lifo hangs on ppc in master" -->
<!-- id="CAAvDA14Hmx-jjR+0-vpt7Riqp5XL6hTCYN51CXLjADw-fO=Qmg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] opal_lifo hangs on ppc in master<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 12:33:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17588.php">Paul Hargrove: "Re: [OMPI devel] opal_{lifo,fifo} hang on ppc in master"</a>
<li><strong>Previous message:</strong> <a href="17586.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17589.php">Nathan Hjelm: "Re: [OMPI devel] opal_lifo hangs on ppc in master"</a>
<li><strong>Reply:</strong> <a href="17589.php">Nathan Hjelm: "Re: [OMPI devel] opal_lifo hangs on ppc in master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing last night's master tarball with &quot;make check&quot; I find that opal_lifo
<br>
*hangs* on every ppc/linux system I try, including both gcc and xlc, both
<br>
32- and 64-bit CPUs and even a little-endian POWER8.
<br>
<p>Attaching gdb to a hung yields:
<br>
<p>(gdb) thread apply all bt full
<br>
<p>Thread 1 (Thread 0xfff9e4f8f30 (LWP 32858)):
<br>
#0  0x0000000010001778 in check_lifo_consistency (lifo=0xfffde0100b8,
<br>
expected_count=100)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/hargrove/SCRATCH/OMPI/openmpi-master-linux-ppc64-xlc-12.1/openmpi-dev-2014-gc8730b5/test/class/opal_lifo.c:73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = 0x1003d6a8190
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;count = 215728334
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__func__ = &quot;check_lifo_consistency&quot;
<br>
#1  0x00000000100022e4 in main (argc=1, argv=0xfffde010688)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/hargrove/SCRATCH/OMPI/openmpi-master-linux-ppc64-xlc-12.1/openmpi-dev-2014-gc8730b5/test/class/opal_lifo.c:171
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;threads = {17590531453408, 17590520967648, 17590510481888,
<br>
17590499996128, 17590489510368,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17590479024608, 17590468538848, 17590458053088}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = 0x1003d6a83c0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prev = 0xfffde0100f0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item2 = 0x1003d6a2cf0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;start = {tv_sec = 1435767655, tv_usec = 746823}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop = {tv_sec = 1435767667, tv_usec = 450808}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total = {tv_sec = 11, tv_usec = 703985}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lifo = {super = {obj_magic_id = 16046253926196952813, obj_class =
<br>
0xfff9e431fb0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj_reference_count = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cls_init_file_name = 0x10003524
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-master-linux-ppc64-xlc-12.1/openmpi-dev-2014-gc8730b5/test/class/opal_lifo.c&quot;,
<br>
cls_init_lineno = 96}, opal_lifo_head = {data = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counter = 0, item = 0x1003d6a8190}}, opal_lifo_ghost = {super
<br>
= {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj_magic_id = 16046253926196952813, obj_class =
<br>
0xfff9e431e18, obj_reference_count = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cls_init_file_name = 0xfff9e36f528
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-master-linux-ppc64-xlc-12.1/openmpi-dev-2014-gc8730b5/opal/class/opal_lifo.c&quot;,
<br>
cls_init_lineno = 27},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_next = 0xfffde0100f0, opal_list_prev = 0x0, item_free
<br>
= 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_refcount = 0, opal_list_item_belong_to = 0x0}}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;success = false
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;timing = 1.4629981249999999e-06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__func__ = &quot;main&quot;
<br>
<p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17587/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17588.php">Paul Hargrove: "Re: [OMPI devel] opal_{lifo,fifo} hang on ppc in master"</a>
<li><strong>Previous message:</strong> <a href="17586.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17589.php">Nathan Hjelm: "Re: [OMPI devel] opal_lifo hangs on ppc in master"</a>
<li><strong>Reply:</strong> <a href="17589.php">Nathan Hjelm: "Re: [OMPI devel] opal_lifo hangs on ppc in master"</a>
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
