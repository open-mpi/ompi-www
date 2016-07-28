<?
$subject_val = "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 21:02:31 2010" -->
<!-- isoreceived="20100429010231" -->
<!-- sent="Wed, 28 Apr 2010 18:02:26 -0700" -->
<!-- isosent="20100429010226" -->
<!-- name="kishore kumar" -->
<!-- email="kishoreguptaos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0." -->
<!-- id="u2s67ee8d951004281802uf50fd200w6357caaf9204e43b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100429010031.GB8965_at_stikine.its.sfu.ca" -->
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
<strong>From:</strong> kishore kumar (<em>kishoreguptaos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 21:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12846.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12844.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12844.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many many thanks.
<br>
<p>Best,
<br>
Kishore Kumar Pusukuri
<br>
<a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a>
<br>
<p><p><p>On 28 April 2010 18:00, Martin Siegert &lt;siegert_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I am quite sure that you need at least 16GB to run SPEC MPIM2007.
</span><br>
<span class="quotelev1">&gt; See the FAQ at <a href="http://www.spec.org/mpi2007/docs/faq.html#MemoryMedium">http://www.spec.org/mpi2007/docs/faq.html#MemoryMedium</a>
</span><br>
<span class="quotelev1">&gt; Furthermore, the benchmark is designed to run on at least 16p.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Martin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Martin Siegert
</span><br>
<span class="quotelev1">&gt; Head, Research Computing
</span><br>
<span class="quotelev1">&gt; WestGrid Site Lead
</span><br>
<span class="quotelev1">&gt; IT Services                                phone: 778 782-4691
</span><br>
<span class="quotelev1">&gt; Simon Fraser University                    fax:   778 782-4242
</span><br>
<span class="quotelev1">&gt; Burnaby, British Columbia                  email: siegert_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Canada  V5A 1S6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 28, 2010 at 05:47:52PM -0700, kishore kumar wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Oh..... Thank you for the information.
</span><br>
<span class="quotelev2">&gt; &gt;    The machine has 6GM of RAM and I am creating 4 processes (for 4
</span><br>
<span class="quotelev1">&gt; cores).
</span><br>
<span class="quotelev2">&gt; &gt;    Are you sure that it is because of lack of resources or some problem
</span><br>
<span class="quotelev2">&gt; &gt;    with the network settings (I want to run the programs only on my
</span><br>
<span class="quotelev2">&gt; &gt;    server)?
</span><br>
<span class="quotelev2">&gt; &gt;    Is there anyway to do this (I need to run only 4 processes for my
</span><br>
<span class="quotelev2">&gt; &gt;    project)?
</span><br>
<span class="quotelev2">&gt; &gt;    Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;    Best,
</span><br>
<span class="quotelev2">&gt; &gt;    Kishore Kumar Pusukuri
</span><br>
<span class="quotelev2">&gt; &gt;    [1]<a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a> &lt;<a href="http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/%7Ekishore</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    On 28 April 2010 17:18, Martin Siegert &lt;[2]siegert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      How much memory is available on that quad core machine?
</span><br>
<span class="quotelev2">&gt; &gt;      The minimum requirements for MPIM2007 are:
</span><br>
<span class="quotelev2">&gt; &gt;      16GB of memory for the whole system or 1GB of memory per rank,
</span><br>
<span class="quotelev2">&gt; &gt;      whichever
</span><br>
<span class="quotelev2">&gt; &gt;      is larger.
</span><br>
<span class="quotelev2">&gt; &gt;      For MPIL2007 you need to use at least 64 processes and a minimum of
</span><br>
<span class="quotelev2">&gt; &gt;      128GB
</span><br>
<span class="quotelev2">&gt; &gt;      (2GB/process) is required.
</span><br>
<span class="quotelev2">&gt; &gt;      Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;      Martin
</span><br>
<span class="quotelev2">&gt; &gt;      --
</span><br>
<span class="quotelev2">&gt; &gt;      Martin Siegert
</span><br>
<span class="quotelev2">&gt; &gt;      Head, Research Computing
</span><br>
<span class="quotelev2">&gt; &gt;      WestGrid Site Lead
</span><br>
<span class="quotelev2">&gt; &gt;      IT Services                                phone: 778 782-4691
</span><br>
<span class="quotelev2">&gt; &gt;      Simon Fraser University                    fax:   778 782-4242
</span><br>
<span class="quotelev2">&gt; &gt;      Burnaby, British Columbia                  email: [3]siegert_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;      Canada  V5A 1S6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    On Wed, Apr 28, 2010 at 05:32:12AM -0500, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt; &gt;    wrote:
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    I don't know much about specmpi, but it seems like it is choosing
</span><br>
<span class="quotelev2">&gt; &gt;    to
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    abort. Maybe the &quot;no room for lattice&quot; has some meaning...?
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    -jms
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    Sent from my PDA. No type good.
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    From: [4]users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;[5]users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    To: [6]users_at_[hidden] &lt;[7]users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    Sent: Wed Apr 28 01:47:01 2010
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    Subject: [OMPI users] MPI_ABORT was invoked on rank 0 in
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    communicatorMPI_COMM_WORLD with errorcode 0.
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    Hi,
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    I am trying to run SPEC MPI 2007 workload on a quad-core machine.
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    However getting this error message. I also tried to use hostfile
</span><br>
<span class="quotelev2">&gt; &gt;    option
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    by specifying localhost slots=4, but still getting the following
</span><br>
<span class="quotelev2">&gt; &gt;    error.
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    Please help me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;    $mpirun&#194;  --mca btl tcp,sm,self -np 4 su3imp_base.solaris
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    SU3 with improved KS action
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    Microcanonical simulation with refreshing
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    MIMD version 6
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    Machine =
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    R algorithm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;    type 0 for no prompts&#194;  or 1 for prompts
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    nflavors 2
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    nx 30
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    ny 30
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    nz 56
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    nt 84
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    iseed 1234
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    LAYOUT = Hypercubes, options = EVENFIRST,
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    NODE 0: no room for lattice
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    termination: Tue Apr 27 23:41:44 2010
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    Termination: node 0, status = 1
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  -----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    ---
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    with errorcode 0.
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI
</span><br>
<span class="quotelev2">&gt; &gt;    processes.
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    exactly when Open MPI kills them.
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  -----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    ---
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  -----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    ---
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    mpirun has exited due to process rank 0 with PID 17239 on
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    node cache-aware exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    Best,
</span><br>
<span class="quotelev3">&gt; &gt;    &gt;    Kishore Kumar Pusukuri
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;    [1][8]<a href="http://www.cs.ucr.edu/~kishore<http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/~kishore<http://www.cs.ucr.edu/%7Ekishore</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; References
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;    1. [9]<a href="http://www.cs.ucr.edu/~kishore<http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/~kishore<http://www.cs.ucr.edu/%7Ekishore</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;    &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;    &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;    &gt; [10]users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;    &gt; [11]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;    users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;    [12]users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    [13]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; References
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    1. <a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a> &lt;<a href="http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/%7Ekishore</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    2. mailto:siegert_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    3. mailto:siegert_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    4. mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    5. mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    6. mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    7. mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    8. <a href="http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/%7Ekishore</a>
</span><br>
<span class="quotelev2">&gt; &gt;    9. <a href="http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/%7Ekishore</a>
</span><br>
<span class="quotelev2">&gt; &gt;   10. mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;   11. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;   12. mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;   13. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Martin Siegert
</span><br>
<span class="quotelev1">&gt; Head, Research Computing
</span><br>
<span class="quotelev1">&gt; WestGrid Site Lead
</span><br>
<span class="quotelev1">&gt; IT Services                                phone: 778 782-4691
</span><br>
<span class="quotelev1">&gt; Simon Fraser University                    fax:   778 782-4242
</span><br>
<span class="quotelev1">&gt; Burnaby, British Columbia                  email: siegert_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Canada  V5A 1S6
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12845/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12846.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12844.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12844.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
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
