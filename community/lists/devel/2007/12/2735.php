<?
$subject_val = "[OMPI devel] opal_condition";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 15:12:21 2007" -->
<!-- isoreceived="20071205201221" -->
<!-- sent="Wed, 05 Dec 2007 15:12:20 -0500" -->
<!-- isosent="20071205201220" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_condition" -->
<!-- id="47570624.4030201_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> [OMPI devel] opal_condition<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 15:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2736.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>Previous message:</strong> <a href="2734.php">Tim Prins: "[OMPI devel] opal_condition"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Last night we had one of our threaded builds on the trunk hang when 
<br>
running make check on the test opal_condition in test/threads/
<br>
<p>After running the test about 30-40 times, I was only able to get it to 
<br>
hang once. Looking at it is gdb, we get:
<br>
<p>(gdb) info threads
<br>
&nbsp;&nbsp;&nbsp;3 Thread 1084229984 (LWP 8450)  0x0000002a95e3bba9 in sched_yield () 
<br>
from /lib64/tls/libc.so.6
<br>
&nbsp;&nbsp;&nbsp;2 Thread 1094719840 (LWP 8451)  0xffffffffff600012 in ?? ()
<br>
&nbsp;&nbsp;&nbsp;1 Thread 182904955328 (LWP 8430)  0x0000002a9567309b in pthread_join 
<br>
() from /lib64/tls/libpthread.so.0
<br>
(gdb) thread 2
<br>
[Switching to thread 2 (Thread 1094719840 (LWP 8451))]#0 
<br>
0xffffffffff600012 in ?? ()
<br>
(gdb) bt
<br>
#0  0xffffffffff600012 in ?? ()
<br>
#1  0x0000000000000001 in ?? ()
<br>
#2  0x0000000000000000 in ?? ()
<br>
(gdb) thread 1
<br>
[Switching to thread 1 (Thread 182904955328 (LWP 8430))]#0 
<br>
0x0000002a9567309b in pthread_join () from /lib64/tls/libpthread.so.0
<br>
(gdb) bt
<br>
#0  0x0000002a9567309b in pthread_join () from /lib64/tls/libpthread.so.0
<br>
#1  0x0000002a95794a7d in opal_thread_join () from 
<br>
/san/homedirs/mpiteam/mtt-runs/odin/20071204-Nightly/pb_2/installs/Bp80/src/openmpi-1.3a1r16847/opal/.libs/libopen-pal.so.0
<br>
#2  0x0000000000401684 in main ()
<br>
(gdb) thread 3
<br>
[Switching to thread 3 (Thread 1084229984 (LWP 8450))]#0 
<br>
0x0000002a95e3bba9 in sched_yield () from /lib64/tls/libc.so.6
<br>
(gdb) bt
<br>
#0  0x0000002a95e3bba9 in sched_yield () from /lib64/tls/libc.so.6
<br>
#1  0x0000000000401216 in thr1_run ()
<br>
#2  0x0000002a95672137 in start_thread () from /lib64/tls/libpthread.so.0
<br>
#3  0x0000002a95e53113 in clone () from /lib64/tls/libc.so.6
<br>
(gdb)
<br>
<p><p>I know, this is not very helpful, but I have no idea what is going on. 
<br>
There have been no changes in this code area for a long time.
<br>
<p>Has anyone else seen something like this? Any ideas what is going on?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2736.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>Previous message:</strong> <a href="2734.php">Tim Prins: "[OMPI devel] opal_condition"</a>
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
