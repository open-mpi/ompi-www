<?
$subject_val = "Re: [OMPI users] MPI_Comm_accept()/connect() errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 07:01:04 2009" -->
<!-- isoreceived="20091001110104" -->
<!-- sent="Thu, 1 Oct 2009 12:00:57 +0100" -->
<!-- isosent="20091001110057" -->
<!-- name="Blesson Varghese" -->
<!-- email="b.varghese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_accept()/connect() errors" -->
<!-- id="002801ca4286$74aa7720$5dff6560$_at_ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_accept()/connect() errors<br>
<strong>From:</strong> Blesson Varghese (<em>b.varghese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 07:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10846.php">Jeff Squyres: "Re: [OMPI users] how to SPMD on openmpi"</a>
<li><strong>Previous message:</strong> <a href="10844.php">ankur pachauri: "Re: [OMPI users] how to SPMD on openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10879.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>Reply:</strong> <a href="10879.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following is the information regarding the error. I am running Open MPI
<br>
1.2.5 on Ubuntu 4.2.4, kernel version 2.6.24
<br>
<p>&nbsp;
<br>
<p>I ran the server program as mpirun -np 1 server. This program gave me the
<br>
output port as 0.1.0:2000. I used this port name value as the command line
<br>
argument for the client program: mpirun -np 1 client 0.1.1:2000.
<br>
<p>&nbsp;
<br>
<p>- The output of the &quot;ompi_info --all&quot; is attached with the email
<br>
<p>- PATH Variable:
<br>
/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr
<br>
/local/maui/bin/:
<br>
<p>- LD_LIBRARY_PATH variable was empty
<br>
<p>- The following is the output of ifconfig on hpcc00 from where the error has
<br>
been generated:
<br>
<p>eth0      Link encap:Ethernet  HWaddr 00:12:3f:4c:2d:78
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:134.225.200.100  Bcast:134.225.200.255
<br>
Mask:255.255.255.0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::212:3fff:fe4c:2d78/64 Scope:Link
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:15912728 errors:0 dropped:0 overruns:0 frame:0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:15312376 errors:0 dropped:0 overruns:0 carrier:0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:2951880321 (2.7 GB)  TX bytes:2788249498 (2.5 GB)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:16
<br>
<p>&nbsp;
<br>
<p>lo        Link encap:Local Loopback
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:3507489 errors:0 dropped:0 overruns:0 frame:0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:3507489 errors:0 dropped:0 overruns:0 carrier:0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:1794266658 (1.6 GB)  TX bytes:1794266658 (1.6 GB)
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Blesson.
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: 29 September 2009 23:59
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPI_Comm_accept()/connect() errors
<br>
<p>&nbsp;
<br>
<p>I will ask the obvious - what version of Open MPI are you running? In what
<br>
environment? What was your command line?
<br>
<p>&nbsp;
<br>
<p>:-)
<br>
<p>&nbsp;
<br>
<p>On Sep 29, 2009, at 3:50 PM, Blesson Varghese wrote:
<br>
<p>&nbsp;
<br>
<p>Hi,
<br>
<p>&nbsp;
<br>
<p>I have been trying to execute the server.c and client.c program provided in
<br>
<a href="http://www.mpi-forum.org/docs/mpi21-report/node213.htm#Node213">http://www.mpi-forum.org/docs/mpi21-report/node213.htm#Node213</a>, using
<br>
accept() and connect() function in MPI. However, the following errors are
<br>
generated.
<br>
<p>&nbsp;
<br>
<p>[hpcc00:16522] *** An error occurred in MPI_Comm_connect
<br>
<p>[hpcc00:16522] *** on communicator MPI_COMM_WORLD
<br>
<p>[hpcc00:16522] *** MPI_ERR_INTERN: internal error
<br>
<p>[hpcc00:16522] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>&nbsp;
<br>
<p>Could anybody please help me?
<br>
<p>&nbsp;
<br>
<p>Many thanks,
<br>
Blesson.
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;
<br>
<p><p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10845/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10845/outputompi.txt">outputompi.txt</a>
</ul>
<!-- attachment="outputompi.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10846.php">Jeff Squyres: "Re: [OMPI users] how to SPMD on openmpi"</a>
<li><strong>Previous message:</strong> <a href="10844.php">ankur pachauri: "Re: [OMPI users] how to SPMD on openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10879.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>Reply:</strong> <a href="10879.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
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
