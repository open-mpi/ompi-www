<?
$subject_val = "Re: [OMPI users] OPEN MPI error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 18 17:48:47 2013" -->
<!-- isoreceived="20130918214847" -->
<!-- sent="Wed, 18 Sep 2013 17:48:45 -0400" -->
<!-- isosent="20130918214845" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPEN MPI error" -->
<!-- id="523A1FBD.10809_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADgo3qi0Nj4o+qTCakLqEzHnCP-4m6ek+e__c-67Umj_Jttcug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPEN MPI error<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-18 17:48:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22676.php">Fabrice Boyrie: "[OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Previous message:</strong> <a href="22674.php">justa tester tester: "[OMPI users] OPEN MPI error"</a>
<li><strong>In reply to:</strong> <a href="22674.php">justa tester tester: "[OMPI users] OPEN MPI error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi justa tester tester
<br>
<p>Is your p2p1 interface an Infiniband port, or is it Ethernet?
<br>
If it is Ethernet, try removing &quot;--mca btl_openib_if_include p2p1&quot;
<br>
from your mpiexec command line, because it would conflict with
<br>
the other mca parameter you chose &quot;--mca btl openib,sm,self&quot;.
<br>
<p>Simpler may be better: Have you tried to use just
<br>
&quot;--mca btl openib,sm,self&quot; ?
<br>
This way OMPI will find the Infiniband interface(s) for you.
<br>
<p>Justa guessed guess,
<br>
Gus Correa
<br>
<p><p>On 09/18/2013 01:49 PM, justa tester tester wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm new to OPEN MPI and have a question in regards to the error I'm
</span><br>
<span class="quotelev1">&gt; seeing after compiling the OFED stack to facilitate RDMA and OpenMPI and
</span><br>
<span class="quotelev1">&gt; specified the install path of OFED stack and installed Intel MPI
</span><br>
<span class="quotelev1">&gt; Benchmark.  I was able to run tcp but when running openib we could not
</span><br>
<span class="quotelev1">&gt; run succesfully we are see the error below: OFED version 3.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_dhcp-8-168 imb]# mpirun --mca btl openib,sm,self --mca
</span><br>
<span class="quotelev1">&gt; btl_openib_cpc_include rdmacm --mca btl_openib_if_include p2p1  --mca
</span><br>
<span class="quotelev1">&gt; btl_openib_verbose 2 -np 2 -hostfile hosts ./3.2.4/src/IMB-MPI1 -npmin 2
</span><br>
<span class="quotelev1">&gt; -iter 10 PingPong
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: One or more nonexistent OpenFabrics devices/ports were
</span><br>
<span class="quotelev1">&gt; specified:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Host:                 dhcp-8-168
</span><br>
<span class="quotelev1">&gt;    MCA parameter:        mca_btl_if_include
</span><br>
<span class="quotelev1">&gt;    Nonexistent entities: p2p1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These entities will be ignored.  You can disable this warning by
</span><br>
<span class="quotelev1">&gt; setting the btl_openib_warn_nonexistent_if MCA parameter to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Process 1 ([[60771,1],0]) is on host: dhcp-8-168
</span><br>
<span class="quotelev1">&gt;    Process 2 ([[60771,1],1]) is on host: 169
</span><br>
<span class="quotelev1">&gt;    BTLs attempted: self sm
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev1">&gt;     available.
</span><br>
<span class="quotelev1">&gt;   * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;   * Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
</span><br>
<span class="quotelev1">&gt;     if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev1">&gt;     communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [dhcp-8-168:3503] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [dhcp-8-168:3503] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [dhcp-8-168:3503] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [dhcp-8-168:3503] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;    Local host: dhcp-8-168
</span><br>
<span class="quotelev1">&gt;    PID:        3503
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 3503 on
</span><br>
<span class="quotelev1">&gt; node dhcp-8-168 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [dhcp-8-168:03501] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / nonexistent port
</span><br>
<span class="quotelev1">&gt; [dhcp-8-168:03501] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev1">&gt; [dhcp-8-168:03501] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev1">&gt; [dhcp-8-168:03501] 1 more process has sent help message help-mpi-runtime
</span><br>
<span class="quotelev1">&gt; / mpi_init:startup:pml-add-procs-fail
</span><br>
<span class="quotelev1">&gt; [dhcp-8-168:03501] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
</span><br>
<span class="quotelev1">&gt; [dhcp-8-168:03501] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Tester
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22676.php">Fabrice Boyrie: "[OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Previous message:</strong> <a href="22674.php">justa tester tester: "[OMPI users] OPEN MPI error"</a>
<li><strong>In reply to:</strong> <a href="22674.php">justa tester tester: "[OMPI users] OPEN MPI error"</a>
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
