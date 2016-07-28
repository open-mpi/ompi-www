<?
$subject_val = "Re: [OMPI users] Problem with sending messages from one of the machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 12:47:05 2010" -->
<!-- isoreceived="20101110174705" -->
<!-- sent="Wed, 10 Nov 2010 09:46:40 -0800" -->
<!-- isosent="20101110174640" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with sending messages from one of the machines" -->
<!-- id="AANLkTimCvNUWZQJP52Szy_emCznrC2hK6Yp9rN76TZKT_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimAqFEsSuQ0J64VvH0epLWgmHCm3KNE2BqJRECq_at_mail.gmail.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 12:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14725.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14717.php">Grzegorz Maj: "[OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14735.php">Jeff Squyres: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14735.php">Jeff Squyres: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you double checked your firewall settings, TCP/IP settings, and SSH
<br>
keys are all setup correctly for all machines including the host?
<br>
<p>On Wed, Nov 10, 2010 at 2:57 AM, Grzegorz Maj &lt;maju3_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I've got a problem with sending messages from one of my machines. It
</span><br>
<span class="quotelev1">&gt; appears during MPI_Send/MPI_Recv and MPI_Bcast. The simplest case I've
</span><br>
<span class="quotelev1">&gt; found is two processes, rank 0 sending a simple message and rank 1
</span><br>
<span class="quotelev1">&gt; receiving this message. I execute these processes using mpirun with
</span><br>
<span class="quotelev1">&gt; -np 2.
</span><br>
<span class="quotelev1">&gt; - when both processes are executed on the host machine, it works fine;
</span><br>
<span class="quotelev1">&gt; - when both processes are executed on client machines (both on the
</span><br>
<span class="quotelev1">&gt; same or different machines), it works fine;
</span><br>
<span class="quotelev1">&gt; - when sender is executed on one of the client machines and receiver
</span><br>
<span class="quotelev1">&gt; on the host machine, it works fine;
</span><br>
<span class="quotelev1">&gt; - when sender is executed on the host machine and receiver on client
</span><br>
<span class="quotelev1">&gt; machine, it blocks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This last case is my problem. When adding option '--mca
</span><br>
<span class="quotelev1">&gt; btl_base_verbose 30' to mpirun, I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; [host:28186] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [host:28186] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [host:28186] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [host:28186] mca: base: components_open: component self has no register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [host:28186] mca: base: components_open: component self open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [host:28186] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [host:28186] mca: base: components_open: component sm has no register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [host:28186] mca: base: components_open: component sm open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [host:28186] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [host:28186] mca: base: components_open: component tcp has no register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [host:28186] mca: base: components_open: component tcp open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [host:28186] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [host:28186] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [host:28186] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [host:28186] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [host:28186] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [host:28186] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; [client01:19803] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [client01:19803] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [client01:19803] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [client01:19803] mca: base: components_open: component self has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [client01:19803] mca: base: components_open: component self open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [client01:19803] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [client01:19803] mca: base: components_open: component sm has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [client01:19803] mca: base: components_open: component sm open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [client01:19803] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [client01:19803] mca: base: components_open: component tcp has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [client01:19803] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [client01:19803] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [client01:19803] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [client01:19803] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [client01:19803] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [client01:19803] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [client01:19803] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; 00 of 2 host
</span><br>
<span class="quotelev1">&gt; [host:28186] btl: tcp: attempting to connect() to address 10.0.7.97 on
</span><br>
<span class="quotelev1">&gt; port 53255
</span><br>
<span class="quotelev1">&gt; 01 of 2 client01
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where lines &quot;00 of 2 host&quot; and &quot;01 of 2 client01&quot; are just my debug
</span><br>
<span class="quotelev1">&gt; saying &quot;mpirank of comm_size hostname&quot;. The last but one line appears
</span><br>
<span class="quotelev1">&gt; in call to Send:
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Send(message, 5, MPI::CHAR, 1, 13);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When executing the sender on host with strace, I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; connect(10, {sa_family=AF_INET, sin_port=htons(1024),
</span><br>
<span class="quotelev1">&gt; sin_addr=inet_addr(&quot;10.0.7.97&quot;)}, 16) = -1 EINPROGRESS (Operation now
</span><br>
<span class="quotelev1">&gt; in progress)
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=10, events=POLLOUT}], 7, 0) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=10, events=POLLOUT}], 7, 0) = 1 ([{fd=10,
</span><br>
<span class="quotelev1">&gt; revents=POLLOUT}])
</span><br>
<span class="quotelev1">&gt; getsockopt(10, SOL_SOCKET, SO_ERROR, [0], [4]) = 0
</span><br>
<span class="quotelev1">&gt; send(10, &quot;D\227\0\1\0\0\0\0&quot;, 8, 0)     = 8
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=10, events=POLLIN}], 7, 0) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=10, events=POLLIN}], 7, 0) = 1 ([{fd=10,
</span><br>
<span class="quotelev1">&gt; revents=POLLIN}])
</span><br>
<span class="quotelev1">&gt; recv(10, &quot;&quot;, 8, 0)                      = 0
</span><br>
<span class="quotelev1">&gt; close(10)                               = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}], 6, 0) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}], 6, 0) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}], 6, 0) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}], 6, 0) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}], 6, 0) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (forever)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For me it looks like the above connect is responsible for establishing
</span><br>
<span class="quotelev1">&gt; connection, but I'm afraid I don't understand what those calls for
</span><br>
<span class="quotelev1">&gt; poll are supposed to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attaching gdb to the sender gives me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0xffffe410 in __kernel_vsyscall ()
</span><br>
<span class="quotelev1">&gt; #1  0x0064993b in poll () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0xf7df07b5 in poll_dispatch () from
</span><br>
<span class="quotelev1">&gt; /home/gmaj/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #3  0xf7def8c3 in opal_event_base_loop () from
</span><br>
<span class="quotelev1">&gt; /home/gmaj/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0xf7defbe7 in opal_event_loop () from
</span><br>
<span class="quotelev1">&gt; /home/gmaj/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #5  0xf7de323b in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /home/gmaj/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #6  0xf7c51455 in mca_pml_ob1_send () from
</span><br>
<span class="quotelev1">&gt; /home/gmaj/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #7  0xf7ed9c60 in PMPI_Send () from /home/gmaj/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x0804e900 in main ()
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If anybody knows what may cause this problem or what may I do to find
</span><br>
<span class="quotelev1">&gt; the reason, any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My open-mpi is version 1.4.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Grzegorz Maj
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14724/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14725.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14717.php">Grzegorz Maj: "[OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14735.php">Jeff Squyres: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14735.php">Jeff Squyres: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
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
