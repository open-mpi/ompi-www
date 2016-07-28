<?
$subject_val = "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 20:18:09 2010" -->
<!-- isoreceived="20100429001809" -->
<!-- sent="Wed, 28 Apr 2010 17:18:04 -0700" -->
<!-- isosent="20100429001804" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0." -->
<!-- id="20100429001804.GI24603_at_stikine.its.sfu.ca" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA17056771_at_XMB-RCD-205.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0.<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 20:18:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12843.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12841.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12843.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Reply:</strong> <a href="12843.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How much memory is available on that quad core machine?
<br>
The minimum requirements for MPIM2007 are:
<br>
16GB of memory for the whole system or 1GB of memory per rank, whichever
<br>
is larger.
<br>
For MPIL2007 you need to use at least 64 processes and a minimum of 128GB
<br>
(2GB/process) is required.
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
On Wed, Apr 28, 2010 at 05:32:12AM -0500, Jeff Squyres (jsquyres) wrote:
&gt; 
&gt;    I don't know much about specmpi, but it seems like it is choosing to
&gt;    abort. Maybe the &quot;no room for lattice&quot; has some meaning...?
&gt;    -jms
&gt;    Sent from my PDA. No type good.
&gt;    _______________________________________________________________________
&gt; 
&gt;    From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
&gt;    To: users_at_[hidden] &lt;users_at_[hidden]&gt;
&gt;    Sent: Wed Apr 28 01:47:01 2010
&gt;    Subject: [OMPI users] MPI_ABORT was invoked on rank 0 in
&gt;    communicatorMPI_COMM_WORLD with errorcode 0.
&gt; 
&gt;    Hi,
&gt;    I am trying to run SPEC MPI 2007 workload on a quad-core machine.
&gt;    However getting this error message. I also tried to use hostfile option
&gt;    by specifying localhost slots=4, but still getting the following error.
&gt;    Please help me.
&gt;    $mpirun&#194;  --mca btl tcp,sm,self -np 4 su3imp_base.solaris
&gt;    SU3 with improved KS action
&gt;    Microcanonical simulation with refreshing
&gt;    MIMD version 6
&gt;    Machine =
&gt;    R algorithm
&gt;    type 0 for no prompts&#194;  or 1 for prompts
&gt;    nflavors 2
&gt;    nx 30
&gt;    ny 30
&gt;    nz 56
&gt;    nt 84
&gt;    iseed 1234
&gt;    LAYOUT = Hypercubes, options = EVENFIRST,
&gt;    NODE 0: no room for lattice
&gt;    termination: Tue Apr 27 23:41:44 2010
&gt;    Termination: node 0, status = 1
&gt;    -----------------------------------------------------------------------
&gt;    ---
&gt;    MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
&gt;    with errorcode 0.
&gt;    NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
&gt;    You may or may not see output from other processes, depending on
&gt;    exactly when Open MPI kills them.
&gt;    -----------------------------------------------------------------------
&gt;    ---
&gt;    -----------------------------------------------------------------------
&gt;    ---
&gt;    mpirun has exited due to process rank 0 with PID 17239 on
&gt;    node cache-aware exiting without calling &quot;finalize&quot;. This may
&gt;    have caused other processes in the application to be
&gt;    terminated by signals sent by mpirun (as reported here).
&gt;    Best,
&gt;    Kishore Kumar Pusukuri
&gt;    [1]<a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a>
&gt; 
&gt; References
&gt; 
&gt;    1. <a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12843.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12841.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12843.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Reply:</strong> <a href="12843.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
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
