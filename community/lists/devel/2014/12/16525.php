<?
$subject_val = "[OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 23:15:54 2014" -->
<!-- isoreceived="20141212041554" -->
<!-- sent="Thu, 11 Dec 2014 20:15:52 -0800" -->
<!-- isosent="20141212041552" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit" -->
<!-- id="CAAvDA14uoU91H-BGY8-FBLnFMSN3XCG1UmaC+yNkULT3ZXCYCg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 23:15:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Previous message:</strong> <a href="16524.php">Paul Hargrove: "[OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Reply:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Sorry to be the bearer of more bad news.
<br>
The &quot;good&quot; news is I've seen the new warning regarding the lack of a
<br>
loopback interface.
<br>
The BAD news is that it is occurring on a Linux cluster that I'ver verified
<br>
DOES have 'lo' configured on the front-end and compute nodes (UP and
<br>
RUNNING according to ifconfig).
<br>
<p>Though run with &quot;-np 2&quot; the warning appears FIVE times.
<br>
ADDITIONALLY, there is a SEGV at exit!
<br>
<p>Unfortunately, despite configuring with --enable-debug, I didn't get line
<br>
numbers from the core (and there was no backtrace printed).
<br>
<p>All of this appears below (and no, &quot;-mca mtl psm&quot; is not a typo or a joke).
<br>
<p>Let me know what tracing flags to apply to gather the info needed to debug
<br>
this.
<br>
<p>-Paul
<br>
<p><p>$ mpirun -mca btl sm,self -np 2 -host n15,n16 -mca mtl psm examples/ring_c
<br>
--------------------------------------------------------------------------
<br>
WARNING: No loopback interface was found. This can cause problems
<br>
when we spawn processes as they are likely to be unable to connect
<br>
back to their host daemon. Sadly, it may take awhile for the connect
<br>
attempt to fail, so you may experience a significant hang time.
<br>
<p>You may wish to ctrl-c out of your job and activate loopback support
<br>
on at least one interface before trying again.
<br>
<p>--------------------------------------------------------------------------
<br>
[... above message FOUR more times ...]
<br>
Process 1 exiting
<br>
Process 0 sending 10 to 1, tag 201 (2 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 0 on node n15 exited on signal
<br>
11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>$ /sbin/ifconfig lo
<br>
lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:481228 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:481228 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:81039065 (77.2 MiB)  TX bytes:81039065 (77.2 MiB)
<br>
<p>$ ssh n15 /sbin/ifconfig lo
<br>
lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:24885 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:24885 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:1509940 (1.4 MiB)  TX bytes:1509940 (1.4 MiB)
<br>
<p>$ ssh n16 /sbin/ifconfig lo
<br>
lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:24938 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:24938 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:1543408 (1.4 MiB)  TX bytes:1543408 (1.4 MiB)
<br>
<p>$ gdb examples/ring_c core.29728
<br>
[...]
<br>
(gdb) where
<br>
#0  0x0000002a97a19980 in ?? ()
<br>
#1  &lt;signal handler called&gt;
<br>
#2  0x0000003a6d40607c in _Unwind_FindEnclosingFunction () from
<br>
/lib64/libgcc_s.so.1
<br>
#3  0x0000003a6d406b57 in _Unwind_RaiseException () from
<br>
/lib64/libgcc_s.so.1
<br>
#4  0x0000003a6d406c4c in _Unwind_ForcedUnwind () from /lib64/libgcc_s.so.1
<br>
#5  0x0000003a6c30ac50 in __pthread_unwind () from
<br>
/lib64/tls/libpthread.so.0
<br>
#6  0x0000003a6c305202 in sigcancel_handler () from
<br>
/lib64/tls/libpthread.so.0
<br>
#7  &lt;signal handler called&gt;
<br>
#8  0x0000003a6b6bd9a2 in poll () from /lib64/tls/libc.so.6
<br>
#9  0x0000002a978f8f7d in ?? ()
<br>
#10 0x002000010000000e in ?? ()
<br>
#11 0x0000000000000000 in ?? ()
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Previous message:</strong> <a href="16524.php">Paul Hargrove: "[OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Reply:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
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
