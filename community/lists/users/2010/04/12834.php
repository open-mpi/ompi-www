<?
$subject_val = "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 06:32:17 2010" -->
<!-- isoreceived="20100428103217" -->
<!-- sent="Wed, 28 Apr 2010 05:32:12 -0500" -->
<!-- isosent="20100428103212" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0." -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA17056771_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="p2p67ee8d951004272347ua97757ddhf80d0202e59e76f0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0.<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 06:32:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12835.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12833.php">Terry Dontje: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12829.php">kishore kumar: "[OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12836.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Reply:</strong> <a href="12836.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Reply:</strong> <a href="12842.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know much about specmpi, but it seems like it is choosing to abort. Maybe the &quot;no room for lattice&quot; has some meaning...? 
<br>

<br>
-jms 
<br>
Sent from my PDA. No type good.
<br>

<br>
________________________________
<br>

<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt; 
<br>
To: users_at_[hidden] &lt;users_at_[hidden]&gt; 
<br>
Sent: Wed Apr 28 01:47:01 2010
<br>
Subject: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0. 
<br>

<br>

<br>
Hi,
<br>
I am trying to run SPEC MPI 2007 workload on a quad-core machine. However getting this error message. I also tried to use hostfile option by specifying localhost slots=4, but still getting the following error. Please help me.
<br>

<br>
$mpirun  --mca btl tcp,sm,self -np 4 su3imp_base.solaris 
<br>
SU3 with improved KS action
<br>
Microcanonical simulation with refreshing
<br>
MIMD version 6
<br>
Machine = 
<br>
R algorithm
<br>
type 0 for no prompts  or 1 for prompts
<br>
nflavors 2
<br>
nx 30
<br>
ny 30
<br>
nz 56
<br>
nt 84
<br>
iseed 1234
<br>
LAYOUT = Hypercubes, options = EVENFIRST,
<br>
NODE 0: no room for lattice
<br>
termination: Tue Apr 27 23:41:44 2010
<br>

<br>
Termination: node 0, status = 1
<br>
--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD 
<br>
with errorcode 0.
<br>

<br>
NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 17239 on
<br>
node cache-aware exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>

<br>

<br>
Best,
<br>
Kishore Kumar Pusukuri
<br>
<a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a>
<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12834/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12835.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12833.php">Terry Dontje: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12829.php">kishore kumar: "[OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12836.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Reply:</strong> <a href="12836.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Reply:</strong> <a href="12842.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
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
