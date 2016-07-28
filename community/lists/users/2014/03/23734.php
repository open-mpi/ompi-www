<?
$subject_val = "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 02:19:47 2014" -->
<!-- isoreceived="20140302071947" -->
<!-- sent="Sun, 02 Mar 2014 08:19:41 +0100" -->
<!-- isosent="20140302071941" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes" -->
<!-- id="5312DB8D.4000801_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJTHAufNCyHBp=-4L4tK01A2VAK6CVPG3SZkojQvyXGCaEpoYg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 02:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23735.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23733.php">Victor: "[OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>In reply to:</strong> <a href="23733.php">Victor: "[OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23742.php">Victor: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What's your mpirun or mpiexec command-line?
<br>
The error &quot;BTLs attempted: self sm tcp&quot; says that it didn't even try the
<br>
MX BTL (for Open-MX). Did you use the MX MTL instead?
<br>
Are you sure that you actually use Open-MX when not mixing AMD and Intel
<br>
nodes?
<br>
<p>Brice
<br>
<p><p><p>Le 02/03/2014 08:06, Victor a &#233;crit :
<br>
<span class="quotelev1">&gt; I got 4 x AMD A-10 6800K nodes on loan for a few months and added them
</span><br>
<span class="quotelev1">&gt; to my existing Intel nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All nodes share the relevant directories via NFS. I have OpenMPI 1.6.5
</span><br>
<span class="quotelev1">&gt; which was build with Open-MX 1.5.3 support networked via GbE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All nodes run Ubuntu 12.04.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can run a job EITHER on 4 x AMD nodes OR on 2 x Intel nodes, but I
</span><br>
<span class="quotelev1">&gt; cannot run a job on any combination of an AMD and Intel node, ie. 1 x
</span><br>
<span class="quotelev1">&gt; AMD node + 1 x Intel node = error below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error that I get during job setup is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt;     MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt;     that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt;     an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt;     each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt;     specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;       Process 1 ([[2229,1],1]) is on host: AMD-Node-1
</span><br>
<span class="quotelev1">&gt;       Process 2 ([[2229,1],8]) is on host: Intel-Node-1
</span><br>
<span class="quotelev1">&gt;       BTLs attempted: self sm tcp
</span><br>
<span class="quotelev1">&gt;     Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     MPI_INIT has failed because at least one MPI process is unreachable
</span><br>
<span class="quotelev1">&gt;     from another.  This *usually* means that an underlying communication
</span><br>
<span class="quotelev1">&gt;     plugin -- such as a BTL or an MTL -- has either not loaded or not
</span><br>
<span class="quotelev1">&gt;     allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt;     You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev1">&gt;      * Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev1">&gt;        available.
</span><br>
<span class="quotelev1">&gt;      * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;      * Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
</span><br>
<span class="quotelev1">&gt;        if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev1">&gt;        communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     [AMD-Node-1:3932] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;     [AMD-Node-1:3932] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;     [AMD-Node-1:3932] *** Unknown error
</span><br>
<span class="quotelev1">&gt;     [AMD-Node-1:3932] *** MPI_ERRORS_ARE_FATAL: your MPI job will now
</span><br>
<span class="quotelev1">&gt;     abort
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt;     of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt;     double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt;       Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;       Local host: AMD-Node-1
</span><br>
<span class="quotelev1">&gt;       PID:        3932
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I would like to know is, is it actually difficult (impossible) to
</span><br>
<span class="quotelev1">&gt; mix AMD and Intel machines in the same cluster and have them run the
</span><br>
<span class="quotelev1">&gt; same job, or am I missing something obvious, or not so obvious when it
</span><br>
<span class="quotelev1">&gt; comes to the communication stack on the Intel nodes for example. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I set up the AMD nodes just yesterday, but I used the same OpenMPI and
</span><br>
<span class="quotelev1">&gt; Open-MX versions, however I may have inadvertently done something
</span><br>
<span class="quotelev1">&gt; different, so I am thinking (hoping) that it is possible to run such a
</span><br>
<span class="quotelev1">&gt; heterogeneous cluster, and that all I need to do is ensure that all
</span><br>
<span class="quotelev1">&gt; OpenMPI modules are correctly installed on all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need the extra 32 Gb RAM and the AMD nodes bring as I need to
</span><br>
<span class="quotelev1">&gt; validate our CFD application, and our additional Intel nodes are still
</span><br>
<span class="quotelev1">&gt; not here (ETA 2 weeks).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Victor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23734/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23735.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23733.php">Victor: "[OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>In reply to:</strong> <a href="23733.php">Victor: "[OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23742.php">Victor: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
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
