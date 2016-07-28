<?
$subject_val = "[OMPI users] Problem with sending messages from one of the machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 05:57:31 2010" -->
<!-- isoreceived="20101110105731" -->
<!-- sent="Wed, 10 Nov 2010 11:57:05 +0100" -->
<!-- isosent="20101110105705" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with sending messages from one of the machines" -->
<!-- id="AANLkTimAqFEsSuQ0J64VvH0epLWgmHCm3KNE2BqJRECq_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with sending messages from one of the machines<br>
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 05:57:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14718.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14716.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14724.php">David Zhang: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14724.php">David Zhang: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I've got a problem with sending messages from one of my machines. It
<br>
appears during MPI_Send/MPI_Recv and MPI_Bcast. The simplest case I've
<br>
found is two processes, rank 0 sending a simple message and rank 1
<br>
receiving this message. I execute these processes using mpirun with
<br>
-np 2.
<br>
- when both processes are executed on the host machine, it works fine;
<br>
- when both processes are executed on client machines (both on the
<br>
same or different machines), it works fine;
<br>
- when sender is executed on one of the client machines and receiver
<br>
on the host machine, it works fine;
<br>
- when sender is executed on the host machine and receiver on client
<br>
machine, it blocks.
<br>
<p>This last case is my problem. When adding option '--mca
<br>
btl_base_verbose 30' to mpirun, I get:
<br>
<p>----------
<br>
[host:28186] mca: base: components_open: Looking for btl components
<br>
[host:28186] mca: base: components_open: opening btl components
<br>
[host:28186] mca: base: components_open: found loaded component self
<br>
[host:28186] mca: base: components_open: component self has no register function
<br>
[host:28186] mca: base: components_open: component self open function successful
<br>
[host:28186] mca: base: components_open: found loaded component sm
<br>
[host:28186] mca: base: components_open: component sm has no register function
<br>
[host:28186] mca: base: components_open: component sm open function successful
<br>
[host:28186] mca: base: components_open: found loaded component tcp
<br>
[host:28186] mca: base: components_open: component tcp has no register function
<br>
[host:28186] mca: base: components_open: component tcp open function successful
<br>
[host:28186] select: initializing btl component self
<br>
[host:28186] select: init of component self returned success
<br>
[host:28186] select: initializing btl component sm
<br>
[host:28186] select: init of component sm returned success
<br>
[host:28186] select: initializing btl component tcp
<br>
[host:28186] select: init of component tcp returned success
<br>
[client01:19803] mca: base: components_open: Looking for btl components
<br>
[client01:19803] mca: base: components_open: opening btl components
<br>
[client01:19803] mca: base: components_open: found loaded component self
<br>
[client01:19803] mca: base: components_open: component self has no
<br>
register function
<br>
[client01:19803] mca: base: components_open: component self open
<br>
function successful
<br>
[client01:19803] mca: base: components_open: found loaded component sm
<br>
[client01:19803] mca: base: components_open: component sm has no
<br>
register function
<br>
[client01:19803] mca: base: components_open: component sm open
<br>
function successful
<br>
[client01:19803] mca: base: components_open: found loaded component tcp
<br>
[client01:19803] mca: base: components_open: component tcp has no
<br>
register function
<br>
[client01:19803] mca: base: components_open: component tcp open
<br>
function successful
<br>
[client01:19803] select: initializing btl component self
<br>
[client01:19803] select: init of component self returned success
<br>
[client01:19803] select: initializing btl component sm
<br>
[client01:19803] select: init of component sm returned success
<br>
[client01:19803] select: initializing btl component tcp
<br>
[client01:19803] select: init of component tcp returned success
<br>
00 of 2 host
<br>
[host:28186] btl: tcp: attempting to connect() to address 10.0.7.97 on
<br>
port 53255
<br>
01 of 2 client01
<br>
----------
<br>
<p>Where lines &quot;00 of 2 host&quot; and &quot;01 of 2 client01&quot; are just my debug
<br>
saying &quot;mpirank of comm_size hostname&quot;. The last but one line appears
<br>
in call to Send:
<br>
MPI::COMM_WORLD.Send(message, 5, MPI::CHAR, 1, 13);
<br>
<p>When executing the sender on host with strace, I get:
<br>
<p>----------
<br>
...
<br>
connect(10, {sa_family=AF_INET, sin_port=htons(1024),
<br>
sin_addr=inet_addr(&quot;10.0.7.97&quot;)}, 16) = -1 EINPROGRESS (Operation now
<br>
in progress)
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
<br>
events=POLLIN}, {fd=10, events=POLLOUT}], 7, 0) = 0 (Timeout)
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
<br>
events=POLLIN}, {fd=10, events=POLLOUT}], 7, 0) = 1 ([{fd=10,
<br>
revents=POLLOUT}])
<br>
getsockopt(10, SOL_SOCKET, SO_ERROR, [0], [4]) = 0
<br>
send(10, &quot;D\227\0\1\0\0\0\0&quot;, 8, 0)     = 8
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
<br>
events=POLLIN}, {fd=10, events=POLLIN}], 7, 0) = 0 (Timeout)
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
<br>
events=POLLIN}, {fd=10, events=POLLIN}], 7, 0) = 1 ([{fd=10,
<br>
revents=POLLIN}])
<br>
recv(10, &quot;&quot;, 8, 0)                      = 0
<br>
close(10)                               = 0
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
<br>
events=POLLIN}], 6, 0) = 0 (Timeout)
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
<br>
events=POLLIN}], 6, 0) = 0 (Timeout)
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
<br>
events=POLLIN}], 6, 0) = 0 (Timeout)
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
<br>
events=POLLIN}], 6, 0) = 0 (Timeout)
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9,
<br>
events=POLLIN}], 6, 0) = 0 (Timeout)
<br>
...
<br>
(forever)
<br>
...
<br>
----------
<br>
<p>For me it looks like the above connect is responsible for establishing
<br>
connection, but I'm afraid I don't understand what those calls for
<br>
poll are supposed to do.
<br>
<p>Attaching gdb to the sender gives me:
<br>
<p>----------
<br>
(gdb) bt
<br>
#0  0xffffe410 in __kernel_vsyscall ()
<br>
#1  0x0064993b in poll () from /lib/libc.so.6
<br>
#2  0xf7df07b5 in poll_dispatch () from /home/gmaj/openmpi/lib/libopen-pal.so.0
<br>
#3  0xf7def8c3 in opal_event_base_loop () from
<br>
/home/gmaj/openmpi/lib/libopen-pal.so.0
<br>
#4  0xf7defbe7 in opal_event_loop () from
<br>
/home/gmaj/openmpi/lib/libopen-pal.so.0
<br>
#5  0xf7de323b in opal_progress () from /home/gmaj/openmpi/lib/libopen-pal.so.0
<br>
#6  0xf7c51455 in mca_pml_ob1_send () from
<br>
/home/gmaj/openmpi/lib/openmpi/mca_pml_ob1.so
<br>
#7  0xf7ed9c60 in PMPI_Send () from /home/gmaj/openmpi/lib/libmpi.so.0
<br>
#8  0x0804e900 in main ()
<br>
----------
<br>
<p>If anybody knows what may cause this problem or what may I do to find
<br>
the reason, any help is appreciated.
<br>
<p>My open-mpi is version 1.4.1.
<br>
<p><p>Regards,
<br>
Grzegorz Maj
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14718.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14716.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14724.php">David Zhang: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14724.php">David Zhang: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
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
