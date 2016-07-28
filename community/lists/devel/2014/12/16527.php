<?
$subject_val = "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 23:54:12 2014" -->
<!-- isoreceived="20141212045412" -->
<!-- sent="Thu, 11 Dec 2014 20:54:08 -0800" -->
<!-- isosent="20141212045408" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit" -->
<!-- id="77D1B79D-B970-4257-B8D3-9F7441F32139_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 23:54:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16528.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>In reply to:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16529.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Reply:</strong> <a href="16529.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I honestly think it has to be a selected interface, Gilles, else we will fail to connect.
<br>
<p><span class="quotelev1">&gt; On Dec 11, 2014, at 8:26 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; about the five warnings :
</span><br>
<span class="quotelev1">&gt; can you confirm you are running mpirun *not* on n15 nor n16 ?
</span><br>
<span class="quotelev1">&gt; if my guess is correct, then you can get up to 5 warnings : mpirun + 2 orted + 2 mpi tasks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; do you have any oob_tcp_if_include or oob_tcp_if_exclude settings in your openmpi-mca-params.conf ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here is attached a patch to fix this issue.
</span><br>
<span class="quotelev1">&gt; what we really want is test there is a loopback interface, period.
</span><br>
<span class="quotelev1">&gt; the current code (my bad for not having reviewed in a timely manner) seems to check
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
<span class="quotelev1">&gt; On 2014/12/12 13:15, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry to be the bearer of more bad news.
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;good&quot; news is I've seen the new warning regarding the lack of a
</span><br>
<span class="quotelev2">&gt;&gt; loopback interface.
</span><br>
<span class="quotelev2">&gt;&gt; The BAD news is that it is occurring on a Linux cluster that I'ver verified
</span><br>
<span class="quotelev2">&gt;&gt; DOES have 'lo' configured on the front-end and compute nodes (UP and
</span><br>
<span class="quotelev2">&gt;&gt; RUNNING according to ifconfig).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Though run with &quot;-np 2&quot; the warning appears FIVE times.
</span><br>
<span class="quotelev2">&gt;&gt; ADDITIONALLY, there is a SEGV at exit!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, despite configuring with --enable-debug, I didn't get line
</span><br>
<span class="quotelev2">&gt;&gt; numbers from the core (and there was no backtrace printed).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All of this appears below (and no, &quot;-mca mtl psm&quot; is not a typo or a joke).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let me know what tracing flags to apply to gather the info needed to debug
</span><br>
<span class="quotelev2">&gt;&gt; this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self -np 2 -host n15,n16 -mca mtl psm examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: No loopback interface was found. This can cause problems
</span><br>
<span class="quotelev2">&gt;&gt; when we spawn processes as they are likely to be unable to connect
</span><br>
<span class="quotelev2">&gt;&gt; back to their host daemon. Sadly, it may take awhile for the connect
</span><br>
<span class="quotelev2">&gt;&gt; attempt to fail, so you may experience a significant hang time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You may wish to ctrl-c out of your job and activate loopback support
</span><br>
<span class="quotelev2">&gt;&gt; on at least one interface before trying again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [... above message FOUR more times ...]
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 exiting
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 exiting
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 0 on node n15 exited on signal
</span><br>
<span class="quotelev2">&gt;&gt; 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ /sbin/ifconfig lo
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:481228 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:481228 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:81039065 (77.2 MiB)  TX bytes:81039065 (77.2 MiB)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ ssh n15 /sbin/ifconfig lo
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:24885 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:24885 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:1509940 (1.4 MiB)  TX bytes:1509940 (1.4 MiB)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ ssh n16 /sbin/ifconfig lo
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:24938 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:24938 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:1543408 (1.4 MiB)  TX bytes:1543408 (1.4 MiB)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ gdb examples/ring_c core.29728
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x0000002a97a19980 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x0000003a6d40607c in _Unwind_FindEnclosingFunction () from
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x0000003a6d406b57 in _Unwind_RaiseException () from
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x0000003a6d406c4c in _Unwind_ForcedUnwind () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x0000003a6c30ac50 in __pthread_unwind () from
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x0000003a6c305202 in sigcancel_handler () from
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #7  &lt;signal handler called&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x0000003a6b6bd9a2 in poll () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x0000002a978f8f7d in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x002000010000000e in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16525.php">http://www.open-mpi.org/community/lists/devel/2014/12/16525.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16525.php">http://www.open-mpi.org/community/lists/devel/2014/12/16525.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; &lt;loopback.diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16526.php">http://www.open-mpi.org/community/lists/devel/2014/12/16526.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16527/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16528.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>In reply to:</strong> <a href="16526.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16529.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Reply:</strong> <a href="16529.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
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
