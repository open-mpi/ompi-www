<?
$subject_val = "[OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 02:26:02 2010" -->
<!-- isoreceived="20100825062602" -->
<!-- sent="Tue, 24 Aug 2010 23:25:35 -0700" -->
<!-- isosent="20100825062535" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem" -->
<!-- id="4C74B75F.2060703_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 02:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8345.php">Ralph Castain: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Previous message:</strong> <a href="8343.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 and 1.4.3rc1: type size warnings in ompi_rb_tree test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8376.php">Nysal Jan: "Re: [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<li><strong>Reply:</strong> <a href="8376.php">Nysal Jan: "Re: [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing 1.5rc5 on Linux/PPC64 I get a test failure in &quot;make check&quot; that 
<br>
probably relates to the GPFS filesystems used on this machine.  Not sure 
<br>
if this is a serious error or just an annoyance:
<br>
<p>$  cat /etc/SuSE-release
<br>
SUSE Linux Enterprise Server 10 (ppc)
<br>
VERSION = 10
<br>
PATCHLEVEL = 3
<br>
<p>$ uname -a
<br>
Linux login2 2.6.16.60-0.67.1-ppc64 #1 SMP Thu Aug 5 10:54:46 UTC 2010 
<br>
ppc64 ppc64 ppc64 GNU/Linux
<br>
<p>$ /lib64/libc.so.6
<br>
GNU C Library stable release version 2.4 (20090904), by Roland McGrath 
<br>
et al.
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.
<br>
There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
<br>
PARTICULAR PURPOSE.
<br>
Configured for ppc64-suse-linux.
<br>
Compiled by GNU CC version 4.1.2 20070115 (SUSE Linux).
<br>
Compiled on a Linux 2.6.16 system on 2009-09-04.
<br>
Available extensions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crypt add-on version 2.1 by Michael Glad and others
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU Libidn by Simon Josefsson
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU libio by Per Bothner
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIS(YP)/NIS+ NSS modules 0.19 by Thorsten Kukuk
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Native POSIX Threads Library by Ulrich Drepper et al
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIND-8.2.3-T5B
<br>
Thread-local storage support included.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/libc/bugs.html">http://www.gnu.org/software/libc/bugs.html</a>&gt;.
<br>
<p>$ gcc -m64 --version
<br>
gcc (GCC) 4.1.2 20070115 (SUSE Linux)
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>$ mount | grep gpfs
<br>
/dev/surveyor_software on /gpfs/software type gpfs 
<br>
(rw,mtime,dev=surveyor_software,autostart)
<br>
/dev/surveyor_home on /gpfs/home type gpfs 
<br>
(rw,mtime,dev=surveyor_home,autostart)
<br>
<p>$ [path_to]/openmpi-1.5rc5/configure CC='gcc -m64' CXX='g++ -m64' 
<br>
F77='gfortran -m64' FC='gfortran -m64'
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
gmake[3]: Entering directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-64/test/util'
<br>
&nbsp;&nbsp;CC     opal_path_nfs.o
<br>
&nbsp;&nbsp;CCLD   opal_path_nfs
<br>
gmake[3]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-64/test/util'
<br>
gmake  check-TESTS
<br>
gmake[3]: Entering directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-64/test/util'
<br>
&nbsp;Failure : Mismatch: input &quot;/gpfs/software&quot;, expected:0 got:1
<br>
<p>&nbsp;Failure : Mismatch: input &quot;/gpfs/home&quot;, expected:0 got:1
<br>
<p>SUPPORT: OMPI Test failed: opal_path_nfs() (2 of 17 failed)
<br>
FAIL: opal_path_nfs
<br>
========================================================
<br>
1 of 1 test failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
[...]
<br>
<p><p><p>Same error occurs when configure is run with no argument (yielding an 
<br>
ILP32 build).
<br>
<p>This test does not exist in 1.4.3rc1.
<br>
<p>-Paul
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
<li><strong>Next message:</strong> <a href="8345.php">Ralph Castain: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Previous message:</strong> <a href="8343.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 and 1.4.3rc1: type size warnings in ompi_rb_tree test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8376.php">Nysal Jan: "Re: [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<li><strong>Reply:</strong> <a href="8376.php">Nysal Jan: "Re: [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
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
