<?
$subject_val = "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 05:04:03 2014" -->
<!-- isoreceived="20141212100403" -->
<!-- sent="Fri, 12 Dec 2014 02:03:58 -0800" -->
<!-- isosent="20141212100358" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit" -->
<!-- id="EC3B4BCF-D77E-4EAB-95C4-D322F9C9E803_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA171-s_bbVqZ1TJpcUrMPi=y3zkBNsMpRsV8s-t3fER8OA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-12 05:03:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16540.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="16538.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="16531.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16530.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl - thanks to both of you for the explanation. I&#146;ll make the adjustment.
<br>
<p><span class="quotelev1">&gt; On Dec 11, 2014, at 9:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;understanding&quot; Gilles just expresses matches my own.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issue that the OP observed on an ARM/Linux system (and I was able to reproduce on Linux w/ any arch) is that when the LO interface is missing Linux is unable to pass loopback messages sent on ANY interface.  The oob_tcp code was trying to connect to a 172.18.0.x address when I reproduced it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In summary:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For LINUX the lack of a loopback interface (selected or not) prevents local connection.
</span><br>
<span class="quotelev1">&gt; For NON-LINUX the lack of a loopback interface MAKES NO DIFFERENCE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I think Gilles's version is correct, but that making the logic (at least the reporting) conditional on Linux might be an improvement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since this is a warning, it might be better to remove from 1.8 until we have more certainty about where/when it matters.  I don't think users will appreciate a &quot;cry wolf&quot; release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 11, 2014 at 9:01 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here is my understanding of what happens on Linux :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo: 127.0.0.1/8 &lt;<a href="http://127.0.0.1/8">http://127.0.0.1/8</a>&gt;
</span><br>
<span class="quotelev1">&gt; eth0: 192.168.122.101/24 &lt;<a href="http://192.168.122.101/24">http://192.168.122.101/24</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca orte_oob_tcp_if_include eth0 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so the mpi task tries to contact orted/mpirun on 192.168.0.1/24 &lt;<a href="http://192.168.0.1/24">http://192.168.0.1/24</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that works just fine if the loopback interface is active,
</span><br>
<span class="quotelev1">&gt; and that hangs if there is no loopback interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; imho that is a linux oddity, and OMPI has nothing to do with it
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
<span class="quotelev1">&gt; [root_at_slurm1 ~]# ping -c 3 192.168.122.101
</span><br>
<span class="quotelev1">&gt; PING 192.168.122.101 (192.168.122.101) 56(84) bytes of data.
</span><br>
<span class="quotelev1">&gt; 64 bytes from 192.168.122.101 &lt;<a href="http://192.168.122.101/">http://192.168.122.101/</a>&gt;: icmp_seq=1 ttl=64 time=0.013 ms
</span><br>
<span class="quotelev1">&gt; 64 bytes from 192.168.122.101 &lt;<a href="http://192.168.122.101/">http://192.168.122.101/</a>&gt;: icmp_seq=2 ttl=64 time=0.009 ms
</span><br>
<span class="quotelev1">&gt; 64 bytes from 192.168.122.101 &lt;<a href="http://192.168.122.101/">http://192.168.122.101/</a>&gt;: icmp_seq=3 ttl=64 time=0.011 ms
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- 192.168.122.101 ping statistics ---
</span><br>
<span class="quotelev1">&gt; 3 packets transmitted, 3 received, 0% packet loss, time 1999ms
</span><br>
<span class="quotelev1">&gt; rtt min/avg/max/mdev = 0.009/0.011/0.013/0.001 ms
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_slurm1 ~]# ifdown lo
</span><br>
<span class="quotelev1">&gt; [root_at_slurm1 ~]# ping -c 3 192.168.122.101
</span><br>
<span class="quotelev1">&gt; PING 192.168.122.101 (192.168.122.101) 56(84) bytes of data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- 192.168.122.101 ping statistics ---
</span><br>
<span class="quotelev1">&gt; 3 packets transmitted, 0 received, 100% packet loss, time 11999ms
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/12/12 13:54, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I honestly think it has to be a selected interface, Gilles, else we will fail to connect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 11, 2014, at 8:26 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about the five warnings :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can you confirm you are running mpirun *not* on n15 nor n16 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if my guess is correct, then you can get up to 5 warnings : mpirun + 2 orted + 2 mpi tasks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do you have any oob_tcp_if_include or oob_tcp_if_exclude settings in your openmpi-mca-params.conf ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here is attached a patch to fix this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what we really want is test there is a loopback interface, period.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the current code (my bad for not having reviewed in a timely manner) seems to check
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is a *selected* loopback interface.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/12/12 13:15, Paul Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry to be the bearer of more bad news.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The &quot;good&quot; news is I've seen the new warning regarding the lack of a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; loopback interface.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The BAD news is that it is occurring on a Linux cluster that I'ver verified
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOES have 'lo' configured on the front-end and compute nodes (UP and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RUNNING according to ifconfig).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Though run with &quot;-np 2&quot; the warning appears FIVE times.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ADDITIONALLY, there is a SEGV at exit!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, despite configuring with --enable-debug, I didn't get line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; numbers from the core (and there was no backtrace printed).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All of this appears below (and no, &quot;-mca mtl psm&quot; is not a typo or a joke).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let me know what tracing flags to apply to gather the info needed to debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -mca btl sm,self -np 2 -host n15,n16 -mca mtl psm examples/ring_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: No loopback interface was found. This can cause problems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when we spawn processes as they are likely to be unable to connect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back to their host daemon. Sadly, it may take awhile for the connect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attempt to fail, so you may experience a significant hang time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You may wish to ctrl-c out of your job and activate loopback support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on at least one interface before trying again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [... above message FOUR more times ...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 0 on node n15 exited on signal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 11 (Segmentation fault).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ /sbin/ifconfig lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX packets:481228 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           TX packets:481228 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX bytes:81039065 (77.2 MiB)  TX bytes:81039065 (77.2 MiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ssh n15 /sbin/ifconfig lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX packets:24885 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           TX packets:24885 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX bytes:1509940 (1.4 MiB)  TX bytes:1509940 (1.4 MiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ssh n16 /sbin/ifconfig lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX packets:24938 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           TX packets:24938 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX bytes:1543408 (1.4 MiB)  TX bytes:1543408 (1.4 MiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ gdb examples/ring_c core.29728
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x0000002a97a19980 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x0000003a6d40607c in _Unwind_FindEnclosingFunction () from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x0000003a6d406b57 in _Unwind_RaiseException () from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x0000003a6d406c4c in _Unwind_ForcedUnwind () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x0000003a6c30ac50 in __pthread_unwind () from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x0000003a6c305202 in sigcancel_handler () from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  &lt;signal handler called&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x0000003a6b6bd9a2 in poll () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #9  0x0000002a978f8f7d in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #10 0x002000010000000e in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #11 0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16525.php">http://www.open-mpi.org/community/lists/devel/2014/12/16525.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16525.php">http://www.open-mpi.org/community/lists/devel/2014/12/16525.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16525.php">http://www.open-mpi.org/community/lists/devel/2014/12/16525.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16525.php">http://www.open-mpi.org/community/lists/devel/2014/12/16525.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt;loopback.diff&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16526.php">http://www.open-mpi.org/community/lists/devel/2014/12/16526.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16526.php">http://www.open-mpi.org/community/lists/devel/2014/12/16526.php</a>&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16527.php">http://www.open-mpi.org/community/lists/devel/2014/12/16527.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16527.php">http://www.open-mpi.org/community/lists/devel/2014/12/16527.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16529.php">http://www.open-mpi.org/community/lists/devel/2014/12/16529.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16529.php">http://www.open-mpi.org/community/lists/devel/2014/12/16529.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16531.php">http://www.open-mpi.org/community/lists/devel/2014/12/16531.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16539/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16540.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="16538.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="16531.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16530.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
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
