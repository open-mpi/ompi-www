<?
$subject_val = "Re: [OMPI users] Problem with sending messages from one of the machines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 14:15:46 2010" -->
<!-- isoreceived="20101111191546" -->
<!-- sent="Thu, 11 Nov 2010 12:15:34 -0700" -->
<!-- isosent="20101111191534" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with sending messages from one of the machines" -->
<!-- id="F835B72B-129F-48C2-A42E-A04204EE0B7D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikN0k18FSFS8ecXAosPVaLQrJV+nsTi-suURirG_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with sending messages from one of the machines<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 14:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14739.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14737.php">Jeff Squyres: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14736.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14739.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14739.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are two connections to be specified:
<br>
<p>-mca oob_tcp_if_include xxx
<br>
-mca btl_tcp_if_include xxx
<br>
<p><p>On Nov 11, 2010, at 12:04 PM, Krzysztof Zarzycki wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; I'm working with Grzegorz on the mentioned problem. 
</span><br>
<span class="quotelev1">&gt; If I'm correct on checking the firewall settings, &quot;iptables --list&quot; shows an empty list of rules.
</span><br>
<span class="quotelev1">&gt; The second host does not have iptables installed at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So what can be a next reason of this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By the way, how can I enforce mpirun to use specific ethernet interface  for connections, if I have several possible? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Krzysztof 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/11/11 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; I'd check the firewall settings.  The stack trace indicates that the one host is trying to connect to the other (Open MPI initiates non-blocking TCP connections that can be polled on later).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2010, at 12:46 PM, David Zhang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Have you double checked your firewall settings, TCP/IP settings, and SSH keys are all setup correctly for all machines including the host?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Nov 10, 2010 at 2:57 AM, Grzegorz Maj &lt;maju3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; I've got a problem with sending messages from one of my machines. It
</span><br>
<span class="quotelev2">&gt; &gt; appears during MPI_Send/MPI_Recv and MPI_Bcast. The simplest case I've
</span><br>
<span class="quotelev2">&gt; &gt; found is two processes, rank 0 sending a simple message and rank 1
</span><br>
<span class="quotelev2">&gt; &gt; receiving this message. I execute these processes using mpirun with
</span><br>
<span class="quotelev2">&gt; &gt; -np 2.
</span><br>
<span class="quotelev2">&gt; &gt; - when both processes are executed on the host machine, it works fine;
</span><br>
<span class="quotelev2">&gt; &gt; - when both processes are executed on client machines (both on the
</span><br>
<span class="quotelev2">&gt; &gt; same or different machines), it works fine;
</span><br>
<span class="quotelev2">&gt; &gt; - when sender is executed on one of the client machines and receiver
</span><br>
<span class="quotelev2">&gt; &gt; on the host machine, it works fine;
</span><br>
<span class="quotelev2">&gt; &gt; - when sender is executed on the host machine and receiver on client
</span><br>
<span class="quotelev2">&gt; &gt; machine, it blocks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This last case is my problem. When adding option '--mca
</span><br>
<span class="quotelev2">&gt; &gt; btl_base_verbose 30' to mpirun, I get:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] mca: base: components_open: component tcp has no register function
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] select: initializing btl component sm
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] select: init of component sm returned success
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] mca: base: components_open: component self has no
</span><br>
<span class="quotelev2">&gt; &gt; register function
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] mca: base: components_open: component self open
</span><br>
<span class="quotelev2">&gt; &gt; function successful
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] mca: base: components_open: component sm has no
</span><br>
<span class="quotelev2">&gt; &gt; register function
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] mca: base: components_open: component sm open
</span><br>
<span class="quotelev2">&gt; &gt; function successful
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] mca: base: components_open: component tcp has no
</span><br>
<span class="quotelev2">&gt; &gt; register function
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev2">&gt; &gt; function successful
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] select: initializing btl component sm
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] select: init of component sm returned success
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [client01:19803] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt; &gt; 00 of 2 host
</span><br>
<span class="quotelev2">&gt; &gt; [host:28186] btl: tcp: attempting to connect() to address 10.0.7.97 on
</span><br>
<span class="quotelev2">&gt; &gt; port 53255
</span><br>
<span class="quotelev2">&gt; &gt; 01 of 2 client01
</span><br>
<span class="quotelev2">&gt; &gt; ----------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Where lines &quot;00 of 2 host&quot; and &quot;01 of 2 client01&quot; are just my debug
</span><br>
<span class="quotelev2">&gt; &gt; saying &quot;mpirank of comm_size hostname&quot;. The last but one line appears
</span><br>
<span class="quotelev2">&gt; &gt; in call to Send:
</span><br>
<span class="quotelev2">&gt; &gt; MPI::COMM_WORLD.Send(message, 5, MPI::CHAR, 1, 13);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When executing the sender on host with strace, I get:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; connect(10, {sa_family=AF_INET, sin_port=htons(1024),
</span><br>
<span class="quotelev2">&gt; &gt; sin_addr=inet_addr(&quot;10.0.7.97&quot;)}, 16) = -1 EINPROGRESS (Operation now
</span><br>
<span class="quotelev2">&gt; &gt; in progress)
</span><br>
<span class="quotelev2">&gt; &gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=10, events=POLLOUT}], 7, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt; &gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=10, events=POLLOUT}], 7, 0) = 1 ([{fd=10,
</span><br>
<span class="quotelev2">&gt; &gt; revents=POLLOUT}])
</span><br>
<span class="quotelev2">&gt; &gt; getsockopt(10, SOL_SOCKET, SO_ERROR, [0], [4]) = 0
</span><br>
<span class="quotelev2">&gt; &gt; send(10, &quot;D\227\0\1\0\0\0\0&quot;, 8, 0)     = 8
</span><br>
<span class="quotelev2">&gt; &gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=10, events=POLLIN}], 7, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt; &gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=10, events=POLLIN}], 7, 0) = 1 ([{fd=10,
</span><br>
<span class="quotelev2">&gt; &gt; revents=POLLIN}])
</span><br>
<span class="quotelev2">&gt; &gt; recv(10, &quot;&quot;, 8, 0)                      = 0
</span><br>
<span class="quotelev2">&gt; &gt; close(10)                               = 0
</span><br>
<span class="quotelev2">&gt; &gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}], 6, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt; &gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}], 6, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt; &gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}], 6, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt; &gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}], 6, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt; &gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}], 6, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; (forever)
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; ----------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For me it looks like the above connect is responsible for establishing
</span><br>
<span class="quotelev2">&gt; &gt; connection, but I'm afraid I don't understand what those calls for
</span><br>
<span class="quotelev2">&gt; &gt; poll are supposed to do.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attaching gdb to the sender gives me:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0xffffe410 in __kernel_vsyscall ()
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x0064993b in poll () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #2  0xf7df07b5 in poll_dispatch () from /home/gmaj/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #3  0xf7def8c3 in opal_event_base_loop () from
</span><br>
<span class="quotelev2">&gt; &gt; /home/gmaj/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #4  0xf7defbe7 in opal_event_loop () from
</span><br>
<span class="quotelev2">&gt; &gt; /home/gmaj/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #5  0xf7de323b in opal_progress () from /home/gmaj/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #6  0xf7c51455 in mca_pml_ob1_send () from
</span><br>
<span class="quotelev2">&gt; &gt; /home/gmaj/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt; &gt; #7  0xf7ed9c60 in PMPI_Send () from /home/gmaj/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x0804e900 in main ()
</span><br>
<span class="quotelev2">&gt; &gt; ----------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If anybody knows what may cause this problem or what may I do to find
</span><br>
<span class="quotelev2">&gt; &gt; the reason, any help is appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My open-mpi is version 1.4.1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Grzegorz Maj
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; David Zhang
</span><br>
<span class="quotelev2">&gt; &gt; University of California, San Diego
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14738/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14739.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14737.php">Jeff Squyres: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14736.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14739.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14739.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
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
