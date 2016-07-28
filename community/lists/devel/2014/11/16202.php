<?
$subject_val = "[OMPI devel] simple_spawn test fails using different set of btls.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 11:08:39 2014" -->
<!-- isoreceived="20141105160839" -->
<!-- sent="Wed, 5 Nov 2014 20:08:39 +0400" -->
<!-- isosent="20141105160839" -->
<!-- name="Elena Elkina" -->
<!-- email="elena.elkina_at_[hidden]" -->
<!-- subject="[OMPI devel] simple_spawn test fails using different set of btls." -->
<!-- id="CANhOtjb_Ht=w=96dJLxf8YLSsBCT-jqrczRteZTJ3sGe4=EzMw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] simple_spawn test fails using different set of btls.<br>
<strong>From:</strong> Elena Elkina (<em>elena.elkina_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 11:08:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16203.php">Howard Pritchard: "[OMPI devel] Open MPI Developers F2F Q1 2015 (poll closes on Friday, 7th of November)"</a>
<li><strong>Previous message:</strong> <a href="16201.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16223.php">Gilles Gouaillardet: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<li><strong>Reply:</strong> <a href="16223.php">Gilles Gouaillardet: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>It looks like there is a problem in trunk which reproduces with
<br>
simple_spawn test (orte/test/mpi/simple_spawn.c). It seems to be a n issue
<br>
with pmix. It doesn't reproduce with default set of btls. But it reproduces
<br>
with several btls specified. For example,
<br>
<p>salloc -N5 $OMPI_HOME/install/bin/mpirun -np 33 --map-by node -mca coll ^ml
<br>
-display-map -mca orte_debug_daemons true --leave-session-attached
<br>
--debug-daemons -mca pml ob1 -mca btl *tcp,self*
<br>
./orte/test/mpi/simple_spawn
<br>
<p>gets
<br>
<p>simple_spawn: ../../ompi/group/group_init.c:215:
<br>
ompi_group_increment_proc_count: Assertion `((0xdeafbeedULL &lt;&lt; 32) +
<br>
0xdeafbeedULL) == ((opal_object_t *) (proc_pointer))-&gt;obj_magic_id' failed.
<br>
[sputnik3.vbench.com:28888] [[41877,0],3] orted_cmd: exit cmd, but proc
<br>
[[41877,1],2] is alive
<br>
[sputnik5][[41877,1],29][../../../../../opal/mca/btl/tcp/btl_tcp_endpoint.c:675:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.1.42 failed: Connection refused (111)
<br>
<p>salloc -N1 $OMPI_HOME/install/bin/mpirun -np 3 --map-by node -mca coll ^ml
<br>
-display-map -mca orte_debug_daemons true --leave-session-attached
<br>
--debug-daemons -mca pml ob1 -mca btl *sm,self* ./orte/test/mpi/simple_spawn
<br>
<p>fails with
<br>
<p>At least one pair of MPI processes are unable to reach each other for
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
<p>&nbsp;&nbsp;Process 1 ([[59481,2],0]) is on host: sputnik1
<br>
&nbsp;&nbsp;Process 2 ([[59481,1],0]) is on host: sputnik1
<br>
&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
[sputnik1.vbench.com:22156] [[59481,1],2] ORTE_ERROR_LOG: Unreachable in
<br>
file ../../../../../ompi/mca/dpm/orte/dpm_orte.c at line 485
<br>
<p><p>salloc -N1 $OMPI_HOME/install/bin/mpirun -np 3 --map-by node -mca coll ^ml
<br>
-display-map -mca orte_debug_daemons true --leave-session-attached
<br>
--debug-daemons -mca pml ob1 -mca btl *openib,self*
<br>
&nbsp;./orte/test/mpi/simple_spawn
<br>
<p>also doesn't work:
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
<p>&nbsp;&nbsp;Process 1 ([[60046,1],13]) is on host: sputnik4
<br>
&nbsp;&nbsp;Process 2 ([[60046,2],1]) is on host: sputnik4
<br>
&nbsp;&nbsp;BTLs attempted: openib self
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
[sputnik4.vbench.com:25476] [[60046,1],3] ORTE_ERROR_LOG: Unreachable in
<br>
file ../../../../../ompi/mca/dpm/orte/dpm_orte.c at line 485
<br>
<p><p>*But* combination ^sm,openib seems to work.
<br>
<p>I tried different revisions from the beginning of October. It reproduces on
<br>
them.
<br>
<p>Best regards,
<br>
Elena
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16202/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16203.php">Howard Pritchard: "[OMPI devel] Open MPI Developers F2F Q1 2015 (poll closes on Friday, 7th of November)"</a>
<li><strong>Previous message:</strong> <a href="16201.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16223.php">Gilles Gouaillardet: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<li><strong>Reply:</strong> <a href="16223.php">Gilles Gouaillardet: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
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
