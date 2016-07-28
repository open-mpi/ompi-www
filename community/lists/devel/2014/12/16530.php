<?
$subject_val = "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 00:01:51 2014" -->
<!-- isoreceived="20141212050151" -->
<!-- sent="Thu, 11 Dec 2014 21:01:48 -0800" -->
<!-- isosent="20141212050148" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit" -->
<!-- id="CAAvDA14uAOG1n7mBKc8=rPq_ct-MOa=KDtvZvLEMC3B90eu=dg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="548A6E8D.4080402_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 00:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16531.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Previous message:</strong> <a href="16529.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>In reply to:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>You are correct that mpirun is executed on a node other than n15 or n16.
<br>
So, your count to 5 makes sense.
<br>
It does seem a bit excessive, but it should only occur when there is
<br>
problem.
<br>
<p>I have no MCA params file nor any MCA-related environment variables.
<br>
So, there are no oob_tcp_if_{include,exclude} settings in force.
<br>
<p>The patch makes sense to me and appears to fix the problem.
<br>
I'll address Ralph's concern about selected-vs-unselected interface
<br>
separately.
<br>
<p>I still get the SEGV at exit, but that could very well be bit-rot in
<br>
mtl/shm.
<br>
I will investigate more if/when I have time.
<br>
<p>-Paul
<br>
<p>On Thu, Dec 11, 2014 at 8:26 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; about the five warnings :
</span><br>
<span class="quotelev1">&gt; can you confirm you are running mpirun *not* on n15 nor n16 ?
</span><br>
<span class="quotelev1">&gt; if my guess is correct, then you can get up to 5 warnings : mpirun + 2
</span><br>
<span class="quotelev1">&gt; orted + 2 mpi tasks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do you have any oob_tcp_if_include or oob_tcp_if_exclude settings in your
</span><br>
<span class="quotelev1">&gt; openmpi-mca-params.conf ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is attached a patch to fix this issue.
</span><br>
<span class="quotelev1">&gt; what we really want is test there is a loopback interface, period.
</span><br>
<span class="quotelev1">&gt; the current code (my bad for not having reviewed in a timely manner) seems
</span><br>
<span class="quotelev1">&gt; to check
</span><br>
<span class="quotelev1">&gt; there is a *selected* loopback interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/12/12 13:15, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to be the bearer of more bad news.
</span><br>
<span class="quotelev1">&gt; The &quot;good&quot; news is I've seen the new warning regarding the lack of a
</span><br>
<span class="quotelev1">&gt; loopback interface.
</span><br>
<span class="quotelev1">&gt; The BAD news is that it is occurring on a Linux cluster that I'ver verified
</span><br>
<span class="quotelev1">&gt; DOES have 'lo' configured on the front-end and compute nodes (UP and
</span><br>
<span class="quotelev1">&gt; RUNNING according to ifconfig).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Though run with &quot;-np 2&quot; the warning appears FIVE times.
</span><br>
<span class="quotelev1">&gt; ADDITIONALLY, there is a SEGV at exit!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, despite configuring with --enable-debug, I didn't get line
</span><br>
<span class="quotelev1">&gt; numbers from the core (and there was no backtrace printed).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All of this appears below (and no, &quot;-mca mtl psm&quot; is not a typo or a joke).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know what tracing flags to apply to gather the info needed to debug
</span><br>
<span class="quotelev1">&gt; this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self -np 2 -host n15,n16 -mca mtl psm examples/ring_c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: No loopback interface was found. This can cause problems
</span><br>
<span class="quotelev1">&gt; when we spawn processes as they are likely to be unable to connect
</span><br>
<span class="quotelev1">&gt; back to their host daemon. Sadly, it may take awhile for the connect
</span><br>
<span class="quotelev1">&gt; attempt to fail, so you may experience a significant hang time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may wish to ctrl-c out of your job and activate loopback support
</span><br>
<span class="quotelev1">&gt; on at least one interface before trying again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [... above message FOUR more times ...]
</span><br>
<span class="quotelev1">&gt; Process 1 exiting
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev1">&gt; Process 0 exiting
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 0 on node n15 exited on signal
</span><br>
<span class="quotelev1">&gt; 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /sbin/ifconfig lo
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:481228 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:481228 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:81039065 (77.2 MiB)  TX bytes:81039065 (77.2 MiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ssh n15 /sbin/ifconfig lo
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:24885 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:24885 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:1509940 (1.4 MiB)  TX bytes:1509940 (1.4 MiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ssh n16 /sbin/ifconfig lo
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:24938 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:24938 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:1543408 (1.4 MiB)  TX bytes:1543408 (1.4 MiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gdb examples/ring_c core.29728
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x0000002a97a19980 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev1">&gt; #2  0x0000003a6d40607c in _Unwind_FindEnclosingFunction () from
</span><br>
<span class="quotelev1">&gt; /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #3  0x0000003a6d406b57 in _Unwind_RaiseException () from
</span><br>
<span class="quotelev1">&gt; /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #4  0x0000003a6d406c4c in _Unwind_ForcedUnwind () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #5  0x0000003a6c30ac50 in __pthread_unwind () from
</span><br>
<span class="quotelev1">&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x0000003a6c305202 in sigcancel_handler () from
</span><br>
<span class="quotelev1">&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #7  &lt;signal handler called&gt;
</span><br>
<span class="quotelev1">&gt; #8  0x0000003a6b6bd9a2 in poll () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; #9  0x0000002a978f8f7d in ?? ()
</span><br>
<span class="quotelev1">&gt; #10 0x002000010000000e in ?? ()
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16525.php">http://www.open-mpi.org/community/lists/devel/2014/12/16525.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16526.php">http://www.open-mpi.org/community/lists/devel/2014/12/16526.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16530/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16531.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Previous message:</strong> <a href="16529.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>In reply to:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
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
