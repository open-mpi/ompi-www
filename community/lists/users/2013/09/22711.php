<?
$subject_val = "[OMPI users] &quot;make check&quot; hangs on Linux with openmpi-1.6.6a1r29175";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 21 12:58:33 2013" -->
<!-- isoreceived="20130921165833" -->
<!-- sent="Sat, 21 Sep 2013 18:51:51 +0200 (CEST)" -->
<!-- isosent="20130921165151" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;make check&amp;quot; hangs on Linux with openmpi-1.6.6a1r29175" -->
<!-- id="201309211651.r8LGpp9F006331_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] &quot;make check&quot; hangs on Linux with openmpi-1.6.6a1r29175<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-21 12:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22712.php">Siegmar Gross: "[OMPI users] &quot;make check&quot; hangs with openmpi-1.7.3a1r29220 on Linux"</a>
<li><strong>Previous message:</strong> <a href="22710.php">Siegmar Gross: "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I build openmpi-1.6.6a1r29175 with Sun C 5.12 and gcc-4.8.0
<br>
on Linux. Unfortunately &quot;make check&quot; hangs.
<br>
<p>linpc1 openmpi-1.6.6a1r29175-Linux.x86_64.32_cc 138
<br>
&nbsp;&nbsp;&nbsp;tail log.make-check.Linux.x86_64.32_cc 
<br>
&quot;../../../openmpi-1.6.6a1r29175/opal/include/opal/sys/atomic_impl.h&quot;,
<br>
&nbsp;&nbsp;line 165: warning: statement not reached
<br>
&quot;../../../openmpi-1.6.6a1r29175/opal/include/opal/sys/atomic_impl.h&quot;,
<br>
&nbsp;&nbsp;line 190: warning: statement not reached
<br>
&nbsp;&nbsp;CCLD   opal_path_nfs
<br>
make[3]: Leaving directory 
<br>
&nbsp;&nbsp;`/export2/src/openmpi-1.6.6/openmpi-1.6.6a1r29175-Linux.x86_64.32_cc/test/util'
<br>
make  check-TESTS
<br>
make[3]: Entering directory 
<br>
&nbsp;`/export2/src/openmpi-1.6.6/openmpi-1.6.6a1r29175-Linux.x86_64.32_cc/test/util'
<br>
&nbsp;Failure : Mismatch: input &quot;/home/fd1026&quot;, expected:1 got:0
<br>
<p>&nbsp;Failure : Mismatch: input &quot;/home/fdai2368&quot;, expected:1 got:0
<br>
<p><p><p>I get the following output, when I run the program with gdb.
<br>
<p>linpc1 .libs 141 gdb opal_path_nfs 
<br>
GNU gdb (GDB) SUSE (7.3-41.1.2)
<br>
Copyright (C) 2011 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-suse-linux&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
<br>
Reading symbols from /export2/src/openmpi-1.6.6/openmpi-1.6.6a1r29175-Linux.x86_64.32_gcc/test/util/.libs/opal_path_nfs...done.
<br>
(gdb) run
<br>
Starting program: /export2/src/openmpi-1.6.6/openmpi-1.6.6a1r29175-Linux.x86_64.32_gcc/test/util/.libs/opal_path_nfs 
<br>
Missing separate debuginfo for /lib/ld-linux.so.2
<br>
Try: zypper install -C &quot;debuginfo(build-id)=39c1043d2fcf5b72a2199cfb765d020b1faeb863&quot;
<br>
Missing separate debuginfo for /lib/libdl.so.2
<br>
Try: zypper install -C &quot;debuginfo(build-id)=e836358b9da37bddf9adaa7430eb92a0a0b19d16&quot;
<br>
Missing separate debuginfo for /lib/librt.so.1
<br>
Try: zypper install -C &quot;debuginfo(build-id)=c1cd870bd6083af5996fbb10104d4b65ffde6fd6&quot;
<br>
Missing separate debuginfo for /lib/libnsl.so.1
<br>
Try: zypper install -C &quot;debuginfo(build-id)=b59a58d3fd5023cd781e4b594313da5933f9886e&quot;
<br>
Missing separate debuginfo for /lib/libutil.so.1
<br>
Try: zypper install -C &quot;debuginfo(build-id)=9d3744ab88fc1d28542d7aa28a7d16950d09b3a1&quot;
<br>
Missing separate debuginfo for /lib/libm.so.6
<br>
Try: zypper install -C &quot;debuginfo(build-id)=4ef73322578ad9d7b9bb042f0d8c31aecbd2c52d&quot;
<br>
Missing separate debuginfo for /lib/libpthread.so.0
<br>
Try: zypper install -C &quot;debuginfo(build-id)=593f40f908f51dd863dc2cf94b9cb76bd0bae3d8&quot;
<br>
[Thread debugging using libthread_db enabled]
<br>
Missing separate debuginfo for /lib/libc.so.6
<br>
Try: zypper install -C &quot;debuginfo(build-id)=782d835f454ecfa3cdd590574b59c139283cf7ea&quot;
<br>
Detaching after fork from child process 28228.
<br>
&nbsp;Failure : Mismatch: input &quot;/home/fd1026&quot;, expected:1 got:0
<br>
<p>&nbsp;Failure : Mismatch: input &quot;/home/fdai2368&quot;, expected:1 got:0
<br>
<p><p><p>I would be grateful, if somebody can fix the problem. Thank you very much
<br>
for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22712.php">Siegmar Gross: "[OMPI users] &quot;make check&quot; hangs with openmpi-1.7.3a1r29220 on Linux"</a>
<li><strong>Previous message:</strong> <a href="22710.php">Siegmar Gross: "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
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
