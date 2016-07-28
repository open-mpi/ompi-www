<?
$subject_val = "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 20:48:39 2010" -->
<!-- isoreceived="20100429004839" -->
<!-- sent="Wed, 28 Apr 2010 17:47:52 -0700" -->
<!-- isosent="20100429004752" -->
<!-- name="kishore kumar" -->
<!-- email="kishoreguptaos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0." -->
<!-- id="s2n67ee8d951004281747s36442efu456b93133de627ee_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100429001804.GI24603_at_stikine.its.sfu.ca" -->
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
<strong>Date:</strong> 2010-04-28 20:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12844.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12842.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12842.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12844.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Reply:</strong> <a href="12844.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh..... Thank you for the information.
<br>
<p>The machine has 6GM of RAM and I am creating 4 processes (for 4 cores). Are
<br>
you sure that it is because of lack of resources or some problem with the
<br>
network settings (I want to run the programs only on my server)?
<br>
<p>Is there anyway to do this (I need to run only 4 processes for my project)?
<br>
<p>Thank you.
<br>
<p>Best,
<br>
Kishore Kumar Pusukuri
<br>
<a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a>
<br>
<p><p><p>On 28 April 2010 17:18, Martin Siegert &lt;siegert_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; How much memory is available on that quad core machine?
</span><br>
<span class="quotelev1">&gt; The minimum requirements for MPIM2007 are:
</span><br>
<span class="quotelev1">&gt; 16GB of memory for the whole system or 1GB of memory per rank, whichever
</span><br>
<span class="quotelev1">&gt; is larger.
</span><br>
<span class="quotelev1">&gt; For MPIL2007 you need to use at least 64 processes and a minimum of 128GB
</span><br>
<span class="quotelev1">&gt; (2GB/process) is required.
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
<span class="quotelev1">&gt; On Wed, Apr 28, 2010 at 05:32:12AM -0500, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I don't know much about specmpi, but it seems like it is choosing to
</span><br>
<span class="quotelev2">&gt; &gt;    abort. Maybe the &quot;no room for lattice&quot; has some meaning...?
</span><br>
<span class="quotelev2">&gt; &gt;    -jms
</span><br>
<span class="quotelev2">&gt; &gt;    Sent from my PDA. No type good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Sent: Wed Apr 28 01:47:01 2010
</span><br>
<span class="quotelev2">&gt; &gt;    Subject: [OMPI users] MPI_ABORT was invoked on rank 0 in
</span><br>
<span class="quotelev2">&gt; &gt;    communicatorMPI_COMM_WORLD with errorcode 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Hi,
</span><br>
<span class="quotelev2">&gt; &gt;    I am trying to run SPEC MPI 2007 workload on a quad-core machine.
</span><br>
<span class="quotelev2">&gt; &gt;    However getting this error message. I also tried to use hostfile
</span><br>
<span class="quotelev1">&gt; option
</span><br>
<span class="quotelev2">&gt; &gt;    by specifying localhost slots=4, but still getting the following
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev2">&gt; &gt;    Please help me.
</span><br>
<span class="quotelev2">&gt; &gt;    $mpirun&#194;  --mca btl tcp,sm,self -np 4 su3imp_base.solaris
</span><br>
<span class="quotelev2">&gt; &gt;    SU3 with improved KS action
</span><br>
<span class="quotelev2">&gt; &gt;    Microcanonical simulation with refreshing
</span><br>
<span class="quotelev2">&gt; &gt;    MIMD version 6
</span><br>
<span class="quotelev2">&gt; &gt;    Machine =
</span><br>
<span class="quotelev2">&gt; &gt;    R algorithm
</span><br>
<span class="quotelev2">&gt; &gt;    type 0 for no prompts&#194;  or 1 for prompts
</span><br>
<span class="quotelev2">&gt; &gt;    nflavors 2
</span><br>
<span class="quotelev2">&gt; &gt;    nx 30
</span><br>
<span class="quotelev2">&gt; &gt;    ny 30
</span><br>
<span class="quotelev2">&gt; &gt;    nz 56
</span><br>
<span class="quotelev2">&gt; &gt;    nt 84
</span><br>
<span class="quotelev2">&gt; &gt;    iseed 1234
</span><br>
<span class="quotelev2">&gt; &gt;    LAYOUT = Hypercubes, options = EVENFIRST,
</span><br>
<span class="quotelev2">&gt; &gt;    NODE 0: no room for lattice
</span><br>
<span class="quotelev2">&gt; &gt;    termination: Tue Apr 27 23:41:44 2010
</span><br>
<span class="quotelev2">&gt; &gt;    Termination: node 0, status = 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;    ---
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt;    with errorcode 0.
</span><br>
<span class="quotelev2">&gt; &gt;    NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev2">&gt; &gt;    You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev2">&gt; &gt;    exactly when Open MPI kills them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;    ---
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;    ---
</span><br>
<span class="quotelev2">&gt; &gt;    mpirun has exited due to process rank 0 with PID 17239 on
</span><br>
<span class="quotelev2">&gt; &gt;    node cache-aware exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt; &gt;    have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt;    terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt;    Best,
</span><br>
<span class="quotelev2">&gt; &gt;    Kishore Kumar Pusukuri
</span><br>
<span class="quotelev2">&gt; &gt;    [1]<a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a> &lt;<a href="http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/%7Ekishore</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; References
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    1. <a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a> &lt;<a href="http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/%7Ekishore</a>&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12843/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12844.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12842.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12842.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12844.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Reply:</strong> <a href="12844.php">Martin Siegert: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in	communicatorMPI_COMM_WORLD with errorcode 0."</a>
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
