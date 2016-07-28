<?
$subject_val = "[OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 13:04:51 2009" -->
<!-- isoreceived="20090707170451" -->
<!-- sent="Tue, 7 Jul 2009 13:04:47 -0400" -->
<!-- isosent="20090707170447" -->
<!-- name="Jumper, John" -->
<!-- email="John.Jumper_at_[hidden]" -->
<!-- subject="[OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators" -->
<!-- id="151DC4119461474E88A4476F1F88A2C60C8637_at_maildrd1.nyc.deshaw.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators<br>
<strong>From:</strong> Jumper, John (<em>John.Jumper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 13:04:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9873.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9871.php">Justin: "[OMPI users] Segfault when using valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9911.php">Jeff Squyres: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicatecommunicators"</a>
<li><strong>Reply:</strong> <a href="9911.php">Jeff Squyres: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicatecommunicators"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10367.php">George Bosilca: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am attempting to use coll_tuned_dynamic_rules_filename to tune Open
<br>
MPI 1.3.2.  Based on my testing, it appears that the dynamic rules file
<br>
*only* influences the algorithm selection for MPI_COMM_WORLD.  Any
<br>
duplicate communicators will only use fixed or forced rules, which may
<br>
have much worse performance than the custom-tuned collectives in the
<br>
dynamic rules file.  The following code demonstrates the difference
<br>
between MPI_COMM_WORLD and a duplicate communicator.  
<br>
<p>test.c:
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main( int argc, char** argv ) {
<br>
&nbsp;&nbsp;float u = 0.0, v = 0.0; 
<br>
&nbsp;&nbsp;MPI_Comm world_dup;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;MPI_Comm_dup( MPI_COMM_WORLD, &amp;world_dup );
<br>
<p>&nbsp;&nbsp;MPI_Allreduce( &amp;u, &amp;v, 1, MPI_FLOAT, MPI_SUM, world_dup );
<br>
&nbsp;&nbsp;MPI_Barrier( MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;MPI_Allreduce( &amp;u, &amp;v, 1, MPI_FLOAT, MPI_SUM, MPI_COMM_WORLD );
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>allreduce.ompi:
<br>
1
<br>
2
<br>
1
<br>
9
<br>
1
<br>
0 1 0 0
<br>
<p>invocation:
<br>
orterun -np 9 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca btl self,sm,openib,tcp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca coll_tuned_use_dynamic_rules 1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca coll_tuned_dynamic_rules_filename allreduce.ompi \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca coll_base_verbose 1000 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- test
<br>
<p>This program is run with tracing, and the barrier is only used to
<br>
separate the allreduce calls in the trace.  The trace for one node is at
<br>
the end of the message, and the relevant section is the choice of
<br>
algorithms for the two allreduce calls.  The allreduce.ompi file
<br>
indicates that all size 9 communicators should use the basic linear
<br>
allreduce algorithm.  MPI_COMM_WORLD uses basic_linear, but the
<br>
world_dup communicator uses the fixed algorithm (for this message size,
<br>
the fixed algorithm is recursive doubling).
<br>
<p>Thank you.
<br>
<p>John Jumper
<br>
<p><p><p>Trace of one process for the above program:
<br>
mca: base: components_open: opening coll components
<br>
mca: base: components_open: found loaded component basic
<br>
mca: base: components_open: component basic register function successful
<br>
mca: base: components_open: component basic has no open function
<br>
mca: base: components_open: found loaded component hierarch
<br>
mca: base: components_open: component hierarch has no register function
<br>
mca: base: components_open: component hierarch open function successful
<br>
mca: base: components_open: found loaded component inter
<br>
mca: base: components_open: component inter has no register function
<br>
mca: base: components_open: component inter open function successful
<br>
mca: base: components_open: found loaded component self
<br>
mca: base: components_open: component self has no register function
<br>
mca: base: components_open: component self open function successful
<br>
mca: base: components_open: found loaded component sm
<br>
mca: base: components_open: component sm has no register function
<br>
mca: base: components_open: component sm open function successful
<br>
mca: base: components_open: found loaded component sync
<br>
mca: base: components_open: component sync register function successful
<br>
mca: base: components_open: component sync has no open function
<br>
mca: base: components_open: found loaded component tuned
<br>
mca: base: components_open: component tuned has no register function
<br>
coll:tuned:component_open: done!
<br>
mca: base: components_open: component tuned open function successful
<br>
coll:find_available: querying coll component basic
<br>
coll:find_available: coll component basic is available
<br>
coll:find_available: querying coll component hierarch
<br>
coll:find_available: coll component hierarch is available
<br>
coll:find_available: querying coll component inter
<br>
coll:find_available: coll component inter is available
<br>
coll:find_available: querying coll component self
<br>
coll:find_available: coll component self is available
<br>
coll:find_available: querying coll component sm
<br>
coll:find_available: coll component sm is available
<br>
coll:find_available: querying coll component sync
<br>
coll:find_available: coll component sync is available
<br>
coll:find_available: querying coll component tuned
<br>
coll:find_available: coll component tuned is available
<br>
coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
<br>
coll:base:comm_select: Checking all available modules
<br>
coll:base:comm_select: component available: basic, priority: 10
<br>
coll:base:comm_select: component not available: hierarch
<br>
coll:base:comm_select: component not available: inter
<br>
coll:base:comm_select: component not available: self
<br>
coll:base:comm_select: component not available: sm
<br>
coll:base:comm_select: component not available: sync
<br>
coll:tuned:module_tuned query called
<br>
coll:tuned:module_query using intra_dynamic
<br>
coll:base:comm_select: component available: tuned, priority: 30
<br>
coll:tuned:module_init called.
<br>
coll:tuned:module_init MCW &amp; Dynamic
<br>
coll:tuned:module_init Opening [allreduce.ompi]
<br>
Reading dynamic rule for collective ID 2
<br>
Read communicator count 1 for dynamic rule for collective ID 2
<br>
Read message count 1 for dynamic rule for collective ID 2 and comm size
<br>
9
<br>
Done reading dynamic rule for collective ID 2
<br>
<p>Collectives with rules                  :     1
<br>
Communicator sizes with rules           :     1
<br>
Message sizes with rules                :     1
<br>
Lines in configuration file read                :     0
<br>
coll:tuned:module_init Read 1 valid rules
<br>
Selected the following com rule id 0
<br>
alg_id   2      com_id   0      com_size   9
<br>
number of message sizes   1
<br>
alg_id   2      com_id   0      com_size   9    msg_id   0
<br>
msg_size      0 -&gt; algorithm  1 topo in/out  0  segsize     0
<br>
max_requests    0
<br>
coll:tuned:topo_build_tree Building fo 4 rt 0
<br>
coll:tuned:topo_build_tree Building fo 2 rt 0
<br>
coll:tuned:topo:build_bmtree rt 0
<br>
coll:tuned:topo:build_in_order_bmtree rt 0
<br>
coll:tuned:topo:build_chain fo 4 rt 0
<br>
coll:tuned:topo:build_chain fo 1 rt 0
<br>
coll:tuned:topo_build_in_order_tree Building fo 2 rt 8
<br>
coll:tuned:module_init Tuned is in use
<br>
coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
<br>
coll:base:comm_select: Checking all available modules
<br>
coll:base:comm_select: component available: basic, priority: 10
<br>
coll:base:comm_select: component not available: hierarch
<br>
coll:base:comm_select: component not available: inter
<br>
coll:base:comm_select: component available: self, priority: 75
<br>
coll:base:comm_select: component not available: sm
<br>
coll:base:comm_select: component not available: sync
<br>
coll:tuned:module_tuned query called
<br>
coll:base:comm_select: component not available: tuned
<br>
coll:base:comm_select: new communicator: MPI COMMUNICATOR 4 DUP FROM 0
<br>
(cid 4)
<br>
coll:base:comm_select: Checking all available modules
<br>
coll:base:comm_select: component available: basic, priority: 10
<br>
coll:base:comm_select: component not available: hierarch
<br>
coll:base:comm_select: component not available: inter
<br>
coll:base:comm_select: component not available: self
<br>
coll:base:comm_select: component not available: sm
<br>
coll:base:comm_select: component not available: sync
<br>
coll:tuned:module_tuned query called
<br>
coll:tuned:module_query using intra_dynamic
<br>
coll:base:comm_select: component available: tuned, priority: 30
<br>
coll:tuned:module_init called.
<br>
coll:tuned:topo_build_tree Building fo 4 rt 0
<br>
coll:tuned:topo_build_tree Building fo 2 rt 0
<br>
coll:tuned:topo:build_bmtree rt 0
<br>
coll:tuned:topo:build_in_order_bmtree rt 0
<br>
coll:tuned:topo:build_chain fo 4 rt 0
<br>
coll:tuned:topo:build_chain fo 1 rt 0
<br>
coll:tuned:topo_build_in_order_tree Building fo 2 rt 8
<br>
coll:tuned:module_init Tuned is in use
<br>
ompi_coll_tuned_allreduce_intra_dec_dynamic
<br>
ompi_coll_tuned_allreduce_intra_dec_fixed
<br>
coll:tuned:allreduce_intra_recursivedoubling rank 8
<br>
ompi_coll_tuned_barrier_intra_dec_dynamic
<br>
ompi_coll_tuned_barrier_intra_dec_fixed com_size 9
<br>
ompi_coll_tuned_barrier_intra_bruck rank 8
<br>
ompi_coll_tuned_allreduce_intra_dec_dynamic
<br>
Selected the following msg rule id 0
<br>
alg_id   2      com_id   0      com_size   9    msg_id   0
<br>
msg_size      0 -&gt; algorithm  1 topo in/out  0  segsize     0
<br>
max_requests    0
<br>
coll:tuned:allreduce_intra_do_this algorithm 1 topo fan in/out 0 segsize
<br>
0
<br>
coll:tuned:allreduce_intra_basic_linear rank 8
<br>
coll:tuned:reduce_intra_basic_linear rank 8
<br>
ompi_coll_tuned_bcast_intra_basic_linear rank 8 root 0
<br>
mca: base: close: unloading component basic
<br>
mca: base: close: unloading component hierarch
<br>
mca: base: close: unloading component inter
<br>
mca: base: close: unloading component self
<br>
mca: base: close: component sm closed
<br>
mca: base: close: unloading component sm
<br>
mca: base: close: unloading component sync
<br>
coll:tuned:component_close: called
<br>
coll:tuned:component_close: done!
<br>
mca: base: close: component tuned closed
<br>
mca: base: close: unloading component tuned
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9873.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9871.php">Justin: "[OMPI users] Segfault when using valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9911.php">Jeff Squyres: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicatecommunicators"</a>
<li><strong>Reply:</strong> <a href="9911.php">Jeff Squyres: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicatecommunicators"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10367.php">George Bosilca: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators"</a>
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
