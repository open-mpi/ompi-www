<?
$subject_val = "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 12:21:31 2015" -->
<!-- isoreceived="20150714162131" -->
<!-- sent="Tue, 14 Jul 2015 09:21:26 -0700" -->
<!-- isosent="20150714162126" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines" -->
<!-- id="680DF222-FC4D-4682-AC17-C25C136996F6_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0B97558E6915A6419306E91FD1DACA0E1C5BEA20D1_at_NRCCENMB1.nrc.ca" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-14 12:21:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27279.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27277.php">Audet, Martin: "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines"</a>
<li><strong>In reply to:</strong> <a href="27277.php">Audet, Martin: "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl - thanks for the assist!
<br>
<p>Yes, I&#226;&#128;&#153;ll add it now - waiting for one other problem to be resolved (patch is in the oven), then expect to release tomorrow barring any other problems.
<br>
<p><p><span class="quotelev1">&gt; On Jul 14, 2015, at 9:18 AM, Audet, Martin &lt;Martin.Audet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, this patch applied over OpenMPI 1.8.6 solves my problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached are the new output files for the server and the client when started with &quot;--mca oob_base_verbose 100&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will this patch be included in 1.8.7 ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Martin Audet
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, July 14, 2015 11:10 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Comm_accept() /   MPI_Comm_connect()      fail    between two different machines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to fix the problem when using your example on my cluster - please let me know if it solves things for you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;server_out2.txt.bz2&gt;&lt;client_out2.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27277.php">http://www.open-mpi.org/community/lists/users/2015/07/27277.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27279.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27277.php">Audet, Martin: "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines"</a>
<li><strong>In reply to:</strong> <a href="27277.php">Audet, Martin: "Re: [OMPI users] MPI_Comm_accept() /	MPI_Comm_connect()	fail	between two different machines"</a>
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
