<?
$subject_val = "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 00:01:14 2014" -->
<!-- isoreceived="20141212050114" -->
<!-- sent="Fri, 12 Dec 2014 14:01:26 +0900" -->
<!-- isosent="20141212050126" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit" -->
<!-- id="548A76A6.6060007_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="77D1B79D-B970-4257-B8D3-9F7441F32139_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 00:01:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16530.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Previous message:</strong> <a href="16528.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="16527.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16531.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Reply:</strong> <a href="16531.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>here is my understanding of what happens on Linux :
<br>
<p>lo: 127.0.0.1/8
<br>
eth0: 192.168.122.101/24
<br>
<p>mpirun --mca orte_oob_tcp_if_include eth0 ...
<br>
<p>so the mpi task tries to contact orted/mpirun on 192.168.0.1/24
<br>
<p>that works just fine if the loopback interface is active,
<br>
and that hangs if there is no loopback interface.
<br>
<p><p>imho that is a linux oddity, and OMPI has nothing to do with it
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>[root_at_slurm1 ~]# ping -c 3 192.168.122.101
<br>
PING 192.168.122.101 (192.168.122.101) 56(84) bytes of data.
<br>
64 bytes from 192.168.122.101: icmp_seq=1 ttl=64 time=0.013 ms
<br>
64 bytes from 192.168.122.101: icmp_seq=2 ttl=64 time=0.009 ms
<br>
64 bytes from 192.168.122.101: icmp_seq=3 ttl=64 time=0.011 ms
<br>
<p>--- 192.168.122.101 ping statistics ---
<br>
3 packets transmitted, 3 received, 0% packet loss, time 1999ms
<br>
rtt min/avg/max/mdev = 0.009/0.011/0.013/0.001 ms
<br>
<p><p><p>[root_at_slurm1 ~]# ifdown lo
<br>
[root_at_slurm1 ~]# ping -c 3 192.168.122.101
<br>
PING 192.168.122.101 (192.168.122.101) 56(84) bytes of data.
<br>
<p>--- 192.168.122.101 ping statistics ---
<br>
3 packets transmitted, 0 received, 100% packet loss, time 11999ms
<br>
<p><p>On 2014/12/12 13:54, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I honestly think it has to be a selected interface, Gilles, else we will fail to connect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2014, at 8:26 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; about the five warnings :
</span><br>
<span class="quotelev2">&gt;&gt; can you confirm you are running mpirun *not* on n15 nor n16 ?
</span><br>
<span class="quotelev2">&gt;&gt; if my guess is correct, then you can get up to 5 warnings : mpirun + 2 orted + 2 mpi tasks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; do you have any oob_tcp_if_include or oob_tcp_if_exclude settings in your openmpi-mca-params.conf ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is attached a patch to fix this issue.
</span><br>
<span class="quotelev2">&gt;&gt; what we really want is test there is a loopback interface, period.
</span><br>
<span class="quotelev2">&gt;&gt; the current code (my bad for not having reviewed in a timely manner) seems to check
</span><br>
<span class="quotelev2">&gt;&gt; there is a *selected* loopback interface.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/12/12 13:15, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry to be the bearer of more bad news.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &quot;good&quot; news is I've seen the new warning regarding the lack of a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loopback interface.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The BAD news is that it is occurring on a Linux cluster that I'ver verified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DOES have 'lo' configured on the front-end and compute nodes (UP and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RUNNING according to ifconfig).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though run with &quot;-np 2&quot; the warning appears FIVE times.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ADDITIONALLY, there is a SEGV at exit!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, despite configuring with --enable-debug, I didn't get line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; numbers from the core (and there was no backtrace printed).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All of this appears below (and no, &quot;-mca mtl psm&quot; is not a typo or a joke).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know what tracing flags to apply to gather the info needed to debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -mca btl sm,self -np 2 -host n15,n16 -mca mtl psm examples/ring_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: No loopback interface was found. This can cause problems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when we spawn processes as they are likely to be unable to connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back to their host daemon. Sadly, it may take awhile for the connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempt to fail, so you may experience a significant hang time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may wish to ctrl-c out of your job and activate loopback support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on at least one interface before trying again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [... above message FOUR more times ...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 0 on node n15 exited on signal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ /sbin/ifconfig lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX packets:481228 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           TX packets:481228 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX bytes:81039065 (77.2 MiB)  TX bytes:81039065 (77.2 MiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ssh n15 /sbin/ifconfig lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX packets:24885 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           TX packets:24885 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX bytes:1509940 (1.4 MiB)  TX bytes:1509940 (1.4 MiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ssh n16 /sbin/ifconfig lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX packets:24938 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           TX packets:24938 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX bytes:1543408 (1.4 MiB)  TX bytes:1543408 (1.4 MiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gdb examples/ring_c core.29728
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x0000002a97a19980 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x0000003a6d40607c in _Unwind_FindEnclosingFunction () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x0000003a6d406b57 in _Unwind_RaiseException () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x0000003a6d406c4c in _Unwind_ForcedUnwind () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x0000003a6c30ac50 in __pthread_unwind () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x0000003a6c305202 in sigcancel_handler () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  &lt;signal handler called&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8  0x0000003a6b6bd9a2 in poll () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9  0x0000002a978f8f7d in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #10 0x002000010000000e in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #11 0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16525.php">http://www.open-mpi.org/community/lists/devel/2014/12/16525.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16525.php">http://www.open-mpi.org/community/lists/devel/2014/12/16525.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;loopback.diff&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16526.php">http://www.open-mpi.org/community/lists/devel/2014/12/16526.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16527.php">http://www.open-mpi.org/community/lists/devel/2014/12/16527.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16529/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16530.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Previous message:</strong> <a href="16528.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="16527.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16531.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Reply:</strong> <a href="16531.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
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
