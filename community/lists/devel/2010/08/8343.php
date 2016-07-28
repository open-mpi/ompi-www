<?
$subject_val = "[OMPI devel] 1.5rc5 and 1.4.3rc1: type size warnings in ompi_rb_tree test";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 00:58:28 2010" -->
<!-- isoreceived="20100825045828" -->
<!-- sent="Tue, 24 Aug 2010 21:58:10 -0700" -->
<!-- isosent="20100825045810" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5rc5 and 1.4.3rc1: type size warnings in ompi_rb_tree test" -->
<!-- id="4C74A2E2.8000008_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5rc5 and 1.4.3rc1: type size warnings in ompi_rb_tree test<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 00:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8344.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<li><strong>Previous message:</strong> <a href="8342.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Saw this one on Mac OS X 10.6.1 on an x86_64, but not on older Mac's w/ 
<br>
their default 32-bit void*.
<br>
This is present in both the current RCs.
<br>
I've not checked if this is present on non-Mac systems.
<br>
<p>$ uname -a; echo; sw_vers; echo; gcc --version
<br>
Darwin ijog.lbl.gov 10.0.0 Darwin Kernel Version 10.0.0: Fri Jul 31 
<br>
22:47:34 PDT 2009; root:xnu-1456.1.25~1/RELEASE_I386 i386
<br>
<p>ProductName:    Mac OS X
<br>
ProductVersion: 10.6.1
<br>
BuildVersion:   10B504
<br>
<p>i686-apple-darwin10-gcc-4.2.1 (GCC) 4.2.1 (Apple Inc. build 5646)
<br>
Copyright (C) 2007 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>$ [path_to]/openmpi-1.5rc5/configure
<br>
[...]
<br>
<p>$ make
<br>
[...]
<br>
<p>$ make check
<br>
[...]
<br>
Making check in class
<br>
make  ompi_rb_tree opal_bitmap opal_hash_table opal_list 
<br>
opal_value_array opal_pointer_array
<br>
&nbsp;&nbsp;CC     ompi_rb_tree.o
<br>
../../../test/class/ompi_rb_tree.c: In function 'test2':
<br>
../../../test/class/ompi_rb_tree.c:347: warning: cast to pointer from 
<br>
integer of different size
<br>
../../../test/class/ompi_rb_tree.c:365: warning: cast from pointer to 
<br>
integer of different size
<br>
../../../test/class/ompi_rb_tree.c:373: warning: cast from pointer to 
<br>
integer of different size
<br>
[...]
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
<li><strong>Next message:</strong> <a href="8344.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<li><strong>Previous message:</strong> <a href="8342.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
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
