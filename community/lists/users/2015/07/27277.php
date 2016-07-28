<?
$subject_val = "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 12:18:07 2015" -->
<!-- isoreceived="20150714161807" -->
<!-- sent="Tue, 14 Jul 2015 12:18:03 -0400" -->
<!-- isosent="20150714161803" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines" -->
<!-- id="0B97558E6915A6419306E91FD1DACA0E1C5BEA20D1_at_NRCCENMB1.nrc.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE58DAC1-93FC-4CFF-BDF1-D5AB4DF1FDB3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-14 12:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27278.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines"</a>
<li><strong>Previous message:</strong> <a href="27276.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect()	fail	between two different machines"</a>
<li><strong>In reply to:</strong> <a href="27276.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect()	fail	between two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27278.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines"</a>
<li><strong>Reply:</strong> <a href="27278.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this patch applied over OpenMPI 1.8.6 solves my problem.
<br>
<p>Attached are the new output files for the server and the client when started with &quot;--mca oob_base_verbose 100&quot;.
<br>
<p>Will this patch be included in 1.8.7 ?
<br>
<p>Thanks again,
<br>
<p>Martin Audet
<br>
________________________________________
<br>
From: users [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Tuesday, July 14, 2015 11:10 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPI_Comm_accept() /   MPI_Comm_connect()      fail    between two different machines
<br>
<p>This seems to fix the problem when using your example on my cluster - please let me know if it solves things for you
<br>
<p><p>

<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27277/server_out2.txt.bz2">server_out2.txt.bz2</a>
</ul>
<!-- attachment="server_out2.txt.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27277/client_out2.txt.bz2">client_out2.txt.bz2</a>
</ul>
<!-- attachment="client_out2.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27278.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines"</a>
<li><strong>Previous message:</strong> <a href="27276.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect()	fail	between two different machines"</a>
<li><strong>In reply to:</strong> <a href="27276.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect()	fail	between two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27278.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines"</a>
<li><strong>Reply:</strong> <a href="27278.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines"</a>
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
