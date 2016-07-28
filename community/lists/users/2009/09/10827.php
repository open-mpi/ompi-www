<?
$subject_val = "Re: [OMPI users] MPI_Comm_accept()/connect() errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 05:09:11 2009" -->
<!-- isoreceived="20090930090911" -->
<!-- sent="Wed, 30 Sep 2009 10:09:05 +0100" -->
<!-- isosent="20090930090905" -->
<!-- name="Blesson Varghese" -->
<!-- email="b.varghese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_accept()/connect() errors" -->
<!-- id="003601ca41ad$a945c4f0$fbd14ed0$_at_ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="02494A40-84E8-4339-8EEC-ED2A26A4E9C0_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-09-30 05:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10828.php">ankur pachauri: "[OMPI users] how to SPMD on openmpi"</a>
<li><strong>Previous message:</strong> <a href="10826.php">ankur pachauri: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>In reply to:</strong> <a href="10821.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10845.php">Blesson Varghese: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply. 
<br>
<p>&nbsp;
<br>
<p>I am running MPI 2.0 on Ubuntu 4.2.4, kernel version 2.6.24.
<br>
<p>&nbsp;
<br>
<p>I ran the server program as mpirun -np 1 server. This program gave me the
<br>
output port as 0.1.0:2000. I used this port name value as the command line
<br>
argument for the client program: mpirun -np 1 client 0.1.1:2000
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
<p><p><p><p><p>Hi,
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10827/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10828.php">ankur pachauri: "[OMPI users] how to SPMD on openmpi"</a>
<li><strong>Previous message:</strong> <a href="10826.php">ankur pachauri: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>In reply to:</strong> <a href="10821.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10845.php">Blesson Varghese: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
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
