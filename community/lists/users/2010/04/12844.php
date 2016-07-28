<?
$subject_val = "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 21:00:36 2010" -->
<!-- isoreceived="20100429010036" -->
<!-- sent="Wed, 28 Apr 2010 18:00:31 -0700" -->
<!-- isosent="20100429010031" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0." -->
<!-- id="20100429010031.GB8965_at_stikine.its.sfu.ca" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="s2n67ee8d951004281747s36442efu456b93133de627ee_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-04-28 21:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12845.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12843.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12843.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12845.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Reply:</strong> <a href="12845.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I am quite sure that you need at least 16GB to run SPEC MPIM2007.
<br>
See the FAQ at <a href="http://www.spec.org/mpi2007/docs/faq.html#MemoryMedium">http://www.spec.org/mpi2007/docs/faq.html#MemoryMedium</a>
<br>
Furthermore, the benchmark is designed to run on at least 16p.
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
 
On Wed, Apr 28, 2010 at 05:47:52PM -0700, kishore kumar wrote:
&gt; 
&gt;    Oh..... Thank you for the information.
&gt;    The machine has 6GM of RAM and I am creating 4 processes (for 4 cores).
&gt;    Are you sure that it is because of lack of resources or some problem
&gt;    with the network settings (I want to run the programs only on my
&gt;    server)?
&gt;    Is there anyway to do this (I need to run only 4 processes for my
&gt;    project)?
&gt;    Thank you.
&gt;    Best,
&gt;    Kishore Kumar Pusukuri
&gt;    [1]<a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a>
&gt; 
&gt;    On 28 April 2010 17:18, Martin Siegert &lt;[2]siegert_at_[hidden]&gt; wrote:
&gt; 
&gt;      How much memory is available on that quad core machine?
&gt;      The minimum requirements for MPIM2007 are:
&gt;      16GB of memory for the whole system or 1GB of memory per rank,
&gt;      whichever
&gt;      is larger.
&gt;      For MPIL2007 you need to use at least 64 processes and a minimum of
&gt;      128GB
&gt;      (2GB/process) is required.
&gt;      Cheers,
&gt;      Martin
&gt;      --
&gt;      Martin Siegert
&gt;      Head, Research Computing
&gt;      WestGrid Site Lead
&gt;      IT Services                                phone: 778 782-4691
&gt;      Simon Fraser University                    fax:   778 782-4242
&gt;      Burnaby, British Columbia                  email: [3]siegert_at_[hidden]
&gt;      Canada  V5A 1S6
&gt; 
&gt;    On Wed, Apr 28, 2010 at 05:32:12AM -0500, Jeff Squyres (jsquyres)
&gt;    wrote:
&gt;    &gt;
&gt;    &gt;    I don't know much about specmpi, but it seems like it is choosing
&gt;    to
&gt;    &gt;    abort. Maybe the &quot;no room for lattice&quot; has some meaning...?
&gt;    &gt;    -jms
&gt;    &gt;    Sent from my PDA. No type good.
&gt;    &gt;
&gt;    _______________________________________________________________________
&gt;    &gt;
&gt;    &gt;    From: [4]users-bounces_at_[hidden]
&gt;    &lt;[5]users-bounces_at_[hidden]&gt;
&gt;    &gt;    To: [6]users_at_[hidden] &lt;[7]users_at_[hidden]&gt;
&gt;    &gt;    Sent: Wed Apr 28 01:47:01 2010
&gt;    &gt;    Subject: [OMPI users] MPI_ABORT was invoked on rank 0 in
&gt;    &gt;    communicatorMPI_COMM_WORLD with errorcode 0.
&gt;    &gt;
&gt;    &gt;    Hi,
&gt;    &gt;    I am trying to run SPEC MPI 2007 workload on a quad-core machine.
&gt;    &gt;    However getting this error message. I also tried to use hostfile
&gt;    option
&gt;    &gt;    by specifying localhost slots=4, but still getting the following
&gt;    error.
&gt;    &gt;    Please help me.
&gt; 
&gt;      &gt;    $mpirun&#194;  --mca btl tcp,sm,self -np 4 su3imp_base.solaris
&gt; 
&gt;    &gt;    SU3 with improved KS action
&gt;    &gt;    Microcanonical simulation with refreshing
&gt;    &gt;    MIMD version 6
&gt;    &gt;    Machine =
&gt;    &gt;    R algorithm
&gt; 
&gt;      &gt;    type 0 for no prompts&#194;  or 1 for prompts
&gt; 
&gt;    &gt;    nflavors 2
&gt;    &gt;    nx 30
&gt;    &gt;    ny 30
&gt;    &gt;    nz 56
&gt;    &gt;    nt 84
&gt;    &gt;    iseed 1234
&gt;    &gt;    LAYOUT = Hypercubes, options = EVENFIRST,
&gt;    &gt;    NODE 0: no room for lattice
&gt;    &gt;    termination: Tue Apr 27 23:41:44 2010
&gt;    &gt;    Termination: node 0, status = 1
&gt;    &gt;
&gt;    -----------------------------------------------------------------------
&gt;    &gt;    ---
&gt;    &gt;    MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
&gt;    &gt;    with errorcode 0.
&gt;    &gt;    NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI
&gt;    processes.
&gt;    &gt;    You may or may not see output from other processes, depending on
&gt;    &gt;    exactly when Open MPI kills them.
&gt;    &gt;
&gt;    -----------------------------------------------------------------------
&gt;    &gt;    ---
&gt;    &gt;
&gt;    -----------------------------------------------------------------------
&gt;    &gt;    ---
&gt;    &gt;    mpirun has exited due to process rank 0 with PID 17239 on
&gt;    &gt;    node cache-aware exiting without calling &quot;finalize&quot;. This may
&gt;    &gt;    have caused other processes in the application to be
&gt;    &gt;    terminated by signals sent by mpirun (as reported here).
&gt;    &gt;    Best,
&gt;    &gt;    Kishore Kumar Pusukuri
&gt; 
&gt;      &gt;    [1][8]<a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a>
&gt;      &gt;
&gt;      &gt; References
&gt;      &gt;
&gt;      &gt;    1. [9]<a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a>
&gt; 
&gt;    &gt; _______________________________________________
&gt;    &gt; users mailing list
&gt;    &gt; [10]users_at_[hidden]
&gt;    &gt; [11]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;    _______________________________________________
&gt;    users mailing list
&gt;    [12]users_at_[hidden]
&gt;    [13]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; References
&gt; 
&gt;    1. <a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a>
&gt;    2. mailto:siegert_at_[hidden]
&gt;    3. mailto:siegert_at_[hidden]
&gt;    4. mailto:users-bounces_at_[hidden]
&gt;    5. mailto:users-bounces_at_[hidden]
&gt;    6. mailto:users_at_[hidden]
&gt;    7. mailto:users_at_[hidden]
&gt;    8. <a href="http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/%7Ekishore</a>
&gt;    9. <a href="http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/%7Ekishore</a>
&gt;   10. mailto:users_at_[hidden]
&gt;   11. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;   12. mailto:users_at_[hidden]
&gt;   13. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-- 
Martin Siegert
Head, Research Computing
WestGrid Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12845.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12843.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12843.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12845.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Reply:</strong> <a href="12845.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
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
