<?
$subject_val = "[OMPI users] OPEN MPI error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 18 13:49:27 2013" -->
<!-- isoreceived="20130918174927" -->
<!-- sent="Wed, 18 Sep 2013 10:49:26 -0700" -->
<!-- isosent="20130918174926" -->
<!-- name="justa tester tester" -->
<!-- email="justahtester_at_[hidden]" -->
<!-- subject="[OMPI users] OPEN MPI error" -->
<!-- id="CADgo3qi0Nj4o+qTCakLqEzHnCP-4m6ek+e__c-67Umj_Jttcug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OPEN MPI error<br>
<strong>From:</strong> justa tester tester (<em>justahtester_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-18 13:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22675.php">Gus Correa: "Re: [OMPI users] OPEN MPI error"</a>
<li><strong>Previous message:</strong> <a href="22673.php">basma a.azeem: "[OMPI users] FT problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22675.php">Gus Correa: "Re: [OMPI users] OPEN MPI error"</a>
<li><strong>Reply:</strong> <a href="22675.php">Gus Correa: "Re: [OMPI users] OPEN MPI error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm new to OPEN MPI and have a question in regards to the error I'm seeing
<br>
after compiling the OFED stack to facilitate RDMA and OpenMPI and specified
<br>
the install path of OFED stack and installed Intel MPI Benchmark.  I was
<br>
able to run tcp but when running openib we could not run succesfully we are
<br>
see the error below: OFED version 3.5
<br>
<p>[root_at_dhcp-8-168 imb]# mpirun --mca btl openib,sm,self --mca
<br>
btl_openib_cpc_include rdmacm --mca btl_openib_if_include p2p1  --mca
<br>
btl_openib_verbose 2 -np 2 -hostfile hosts ./3.2.4/src/IMB-MPI1 -npmin 2
<br>
-iter 10 PingPong
<br>
--------------------------------------------------------------------------
<br>
WARNING: One or more nonexistent OpenFabrics devices/ports were
<br>
specified:
<br>
<p>&nbsp;&nbsp;Host:                 dhcp-8-168
<br>
&nbsp;&nbsp;MCA parameter:        mca_btl_if_include
<br>
&nbsp;&nbsp;Nonexistent entities: p2p1
<br>
<p>These entities will be ignored.  You can disable this warning by
<br>
setting the btl_openib_warn_nonexistent_if MCA parameter to 0.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[60771,1],0]) is on host: dhcp-8-168
<br>
&nbsp;&nbsp;Process 2 ([[60771,1],1]) is on host: 169
<br>
&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
MPI_INIT has failed because at least one MPI process is unreachable
<br>
from another.  This *usually* means that an underlying communication
<br>
plugin -- such as a BTL or an MTL -- has either not loaded or not
<br>
allowed itself to be used.  Your MPI job will now abort.
<br>
<p>You may wish to try to narrow down the problem;
<br>
<p>&nbsp;* Check the output of ompi_info to see which BTL/MTL plugins are
<br>
&nbsp;&nbsp;&nbsp;available.
<br>
&nbsp;* Run your application with MPI_THREAD_SINGLE.
<br>
&nbsp;* Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
<br>
&nbsp;&nbsp;&nbsp;if using MTL-based communications) to see exactly which
<br>
&nbsp;&nbsp;&nbsp;communication plugins were considered and/or discarded.
<br>
--------------------------------------------------------------------------
<br>
[dhcp-8-168:3503] *** An error occurred in MPI_Init
<br>
[dhcp-8-168:3503] *** on a NULL communicator
<br>
[dhcp-8-168:3503] *** Unknown error
<br>
[dhcp-8-168:3503] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: dhcp-8-168
<br>
&nbsp;&nbsp;PID:        3503
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 3503 on
<br>
node dhcp-8-168 exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[dhcp-8-168:03501] 1 more process has sent help message
<br>
help-mpi-btl-openib.txt / nonexistent port
<br>
[dhcp-8-168:03501] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
[dhcp-8-168:03501] 1 more process has sent help message help-mca-bml-r2.txt
<br>
/ unreachable proc
<br>
[dhcp-8-168:03501] 1 more process has sent help message help-mpi-runtime /
<br>
mpi_init:startup:pml-add-procs-fail
<br>
[dhcp-8-168:03501] 1 more process has sent help message help-mpi-errors.txt
<br>
/ mpi_errors_are_fatal unknown handle
<br>
[dhcp-8-168:03501] 1 more process has sent help message
<br>
help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
<br>
<p>--Tester
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22675.php">Gus Correa: "Re: [OMPI users] OPEN MPI error"</a>
<li><strong>Previous message:</strong> <a href="22673.php">basma a.azeem: "[OMPI users] FT problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22675.php">Gus Correa: "Re: [OMPI users] OPEN MPI error"</a>
<li><strong>Reply:</strong> <a href="22675.php">Gus Correa: "Re: [OMPI users] OPEN MPI error"</a>
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
