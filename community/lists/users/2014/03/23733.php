<?
$subject_val = "[OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 02:06:04 2014" -->
<!-- isoreceived="20140302070604" -->
<!-- sent="Sun, 2 Mar 2014 15:06:03 +0800" -->
<!-- isosent="20140302070603" -->
<!-- name="Victor" -->
<!-- email="victor.major_at_[hidden]" -->
<!-- subject="[OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes" -->
<!-- id="CAJTHAufNCyHBp=-4L4tK01A2VAK6CVPG3SZkojQvyXGCaEpoYg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes<br>
<strong>From:</strong> Victor (<em>victor.major_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 02:06:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23734.php">Brice Goglin: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Previous message:</strong> <a href="23732.php">tmishima_at_[hidden]: "[OMPI users] Duplicated ticket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23734.php">Brice Goglin: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Reply:</strong> <a href="23734.php">Brice Goglin: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Maybe reply:</strong> <a href="23742.php">Victor: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Reply:</strong> <a href="23911.php">hsaeed: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel	nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I got 4 x AMD A-10 6800K nodes on loan for a few months and added them to
<br>
my existing Intel nodes.
<br>
<p>All nodes share the relevant directories via NFS. I have OpenMPI 1.6.5
<br>
which was build with Open-MX 1.5.3 support networked via GbE.
<br>
<p>All nodes run Ubuntu 12.04.
<br>
<p>Problem:
<br>
<p>I can run a job EITHER on 4 x AMD nodes OR on 2 x Intel nodes, but I cannot
<br>
run a job on any combination of an AMD and Intel node, ie. 1 x AMD node + 1
<br>
x Intel node = error below.
<br>
<p>The error that I get during job setup is:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[2229,1],1]) is on host: AMD-Node-1
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[2229,1],8]) is on host: Intel-Node-1
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: self sm tcp
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_INIT has failed because at least one MPI process is unreachable
</span><br>
<span class="quotelev1">&gt; from another.  This *usually* means that an underlying communication
</span><br>
<span class="quotelev1">&gt; plugin -- such as a BTL or an MTL -- has either not loaded or not
</span><br>
<span class="quotelev1">&gt; allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev1">&gt;  * Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev1">&gt;    available.
</span><br>
<span class="quotelev1">&gt;  * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;  * Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
</span><br>
<span class="quotelev1">&gt;    if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev1">&gt;    communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [AMD-Node-1:3932] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [AMD-Node-1:3932] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [AMD-Node-1:3932] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [AMD-Node-1:3932] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;   Local host: AMD-Node-1
</span><br>
<span class="quotelev1">&gt;   PID:        3932
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><p><p>What I would like to know is, is it actually difficult (impossible) to mix
<br>
AMD and Intel machines in the same cluster and have them run the same job,
<br>
or am I missing something obvious, or not so obvious when it comes to the
<br>
communication stack on the Intel nodes for example.
<br>
<p>I set up the AMD nodes just yesterday, but I used the same OpenMPI and
<br>
Open-MX versions, however I may have inadvertently done something
<br>
different, so I am thinking (hoping) that it is possible to run such a
<br>
heterogeneous cluster, and that all I need to do is ensure that all OpenMPI
<br>
modules are correctly installed on all nodes.
<br>
<p>I need the extra 32 Gb RAM and the AMD nodes bring as I need to validate
<br>
our CFD application, and our additional Intel nodes are still not here (ETA
<br>
2 weeks).
<br>
<p>Thank you,
<br>
<p>Victor
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23733/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23734.php">Brice Goglin: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Previous message:</strong> <a href="23732.php">tmishima_at_[hidden]: "[OMPI users] Duplicated ticket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23734.php">Brice Goglin: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Reply:</strong> <a href="23734.php">Brice Goglin: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Maybe reply:</strong> <a href="23742.php">Victor: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Reply:</strong> <a href="23911.php">hsaeed: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel	nodes"</a>
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
