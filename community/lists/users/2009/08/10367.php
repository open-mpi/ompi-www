<?
$subject_val = "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 17:08:04 2009" -->
<!-- isoreceived="20090814210804" -->
<!-- sent="Fri, 14 Aug 2009 17:07:53 -0400" -->
<!-- isosent="20090814210753" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators" -->
<!-- id="0B75066B-34EB-4AB8-9A35-9F9E1FAE50DF_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="151DC4119461474E88A4476F1F88A2C60C8637_at_maildrd1.nyc.deshaw.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-14 17:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10368.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Previous message:</strong> <a href="10366.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9872.php">Jumper, John: "[OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John,
<br>
<p>Thanks for your bug report. This issues has been fixed in commit  
<br>
r21825. I'll hope to be able to push it in our next release.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 7, 2009, at 13:04 , Jumper, John wrote:
<br>
<p><span class="quotelev1">&gt; I am attempting to use coll_tuned_dynamic_rules_filename to tune Open
</span><br>
<span class="quotelev1">&gt; MPI 1.3.2.  Based on my testing, it appears that the dynamic rules  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; *only* influences the algorithm selection for MPI_COMM_WORLD.  Any
</span><br>
<span class="quotelev1">&gt; duplicate communicators will only use fixed or forced rules, which may
</span><br>
<span class="quotelev1">&gt; have much worse performance than the custom-tuned collectives in the
</span><br>
<span class="quotelev1">&gt; dynamic rules file.  The following code demonstrates the difference
</span><br>
<span class="quotelev1">&gt; between MPI_COMM_WORLD and a duplicate communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; test.c:
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main( int argc, char** argv ) {
</span><br>
<span class="quotelev1">&gt;  float u = 0.0, v = 0.0;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm world_dup;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_dup( MPI_COMM_WORLD, &amp;world_dup );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Allreduce( &amp;u, &amp;v, 1, MPI_FLOAT, MPI_SUM, world_dup );
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier( MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt;  MPI_Allreduce( &amp;u, &amp;v, 1, MPI_FLOAT, MPI_SUM, MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; allreduce.ompi:
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 9
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 0 1 0 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; invocation:
</span><br>
<span class="quotelev1">&gt; orterun -np 9 \
</span><br>
<span class="quotelev1">&gt;        -mca btl self,sm,openib,tcp \
</span><br>
<span class="quotelev1">&gt;        -mca coll_tuned_use_dynamic_rules 1 \
</span><br>
<span class="quotelev1">&gt;        -mca coll_tuned_dynamic_rules_filename allreduce.ompi \
</span><br>
<span class="quotelev1">&gt;        -mca coll_base_verbose 1000 \
</span><br>
<span class="quotelev1">&gt;        -- test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This program is run with tracing, and the barrier is only used to
</span><br>
<span class="quotelev1">&gt; separate the allreduce calls in the trace.  The trace for one node  
</span><br>
<span class="quotelev1">&gt; is at
</span><br>
<span class="quotelev1">&gt; the end of the message, and the relevant section is the choice of
</span><br>
<span class="quotelev1">&gt; algorithms for the two allreduce calls.  The allreduce.ompi file
</span><br>
<span class="quotelev1">&gt; indicates that all size 9 communicators should use the basic linear
</span><br>
<span class="quotelev1">&gt; allreduce algorithm.  MPI_COMM_WORLD uses basic_linear, but the
</span><br>
<span class="quotelev1">&gt; world_dup communicator uses the fixed algorithm (for this message  
</span><br>
<span class="quotelev1">&gt; size,
</span><br>
<span class="quotelev1">&gt; the fixed algorithm is recursive doubling).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; John Jumper
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trace of one process for the above program:
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: opening coll components
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: found loaded component basic
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component basic register function  
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component basic has no open function
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: found loaded component hierarch
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component hierarch has no register  
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component hierarch open function  
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: found loaded component inter
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component inter has no register function
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component inter open function successful
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: found loaded component sync
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component sync register function  
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component sync has no open function
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: found loaded component tuned
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component tuned has no register function
</span><br>
<span class="quotelev1">&gt; coll:tuned:component_open: done!
</span><br>
<span class="quotelev1">&gt; mca: base: components_open: component tuned open function successful
</span><br>
<span class="quotelev1">&gt; coll:find_available: querying coll component basic
</span><br>
<span class="quotelev1">&gt; coll:find_available: coll component basic is available
</span><br>
<span class="quotelev1">&gt; coll:find_available: querying coll component hierarch
</span><br>
<span class="quotelev1">&gt; coll:find_available: coll component hierarch is available
</span><br>
<span class="quotelev1">&gt; coll:find_available: querying coll component inter
</span><br>
<span class="quotelev1">&gt; coll:find_available: coll component inter is available
</span><br>
<span class="quotelev1">&gt; coll:find_available: querying coll component self
</span><br>
<span class="quotelev1">&gt; coll:find_available: coll component self is available
</span><br>
<span class="quotelev1">&gt; coll:find_available: querying coll component sm
</span><br>
<span class="quotelev1">&gt; coll:find_available: coll component sm is available
</span><br>
<span class="quotelev1">&gt; coll:find_available: querying coll component sync
</span><br>
<span class="quotelev1">&gt; coll:find_available: coll component sync is available
</span><br>
<span class="quotelev1">&gt; coll:find_available: querying coll component tuned
</span><br>
<span class="quotelev1">&gt; coll:find_available: coll component tuned is available
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: new communicator: MPI_COMM_WORLD (cid 0)
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: self
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: sm
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: sync
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_tuned query called
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_query using intra_dynamic
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component available: tuned, priority: 30
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_init called.
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_init MCW &amp; Dynamic
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_init Opening [allreduce.ompi]
</span><br>
<span class="quotelev1">&gt; Reading dynamic rule for collective ID 2
</span><br>
<span class="quotelev1">&gt; Read communicator count 1 for dynamic rule for collective ID 2
</span><br>
<span class="quotelev1">&gt; Read message count 1 for dynamic rule for collective ID 2 and comm  
</span><br>
<span class="quotelev1">&gt; size
</span><br>
<span class="quotelev1">&gt; 9
</span><br>
<span class="quotelev1">&gt; Done reading dynamic rule for collective ID 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Collectives with rules                  :     1
</span><br>
<span class="quotelev1">&gt; Communicator sizes with rules           :     1
</span><br>
<span class="quotelev1">&gt; Message sizes with rules                :     1
</span><br>
<span class="quotelev1">&gt; Lines in configuration file read                :     0
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_init Read 1 valid rules
</span><br>
<span class="quotelev1">&gt; Selected the following com rule id 0
</span><br>
<span class="quotelev1">&gt; alg_id   2      com_id   0      com_size   9
</span><br>
<span class="quotelev1">&gt; number of message sizes   1
</span><br>
<span class="quotelev1">&gt; alg_id   2      com_id   0      com_size   9    msg_id   0
</span><br>
<span class="quotelev1">&gt; msg_size      0 -&gt; algorithm  1 topo in/out  0  segsize     0
</span><br>
<span class="quotelev1">&gt; max_requests    0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo_build_tree Building fo 4 rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo_build_tree Building fo 2 rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo:build_bmtree rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo:build_in_order_bmtree rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo:build_chain fo 4 rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo:build_chain fo 1 rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo_build_in_order_tree Building fo 2 rt 8
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_init Tuned is in use
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: new communicator: MPI_COMM_SELF (cid 1)
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component available: self, priority: 75
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: sm
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: sync
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_tuned query called
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: tuned
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: new communicator: MPI COMMUNICATOR 4 DUP FROM 0
</span><br>
<span class="quotelev1">&gt; (cid 4)
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: self
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: sm
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: sync
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_tuned query called
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_query using intra_dynamic
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component available: tuned, priority: 30
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_init called.
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo_build_tree Building fo 4 rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo_build_tree Building fo 2 rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo:build_bmtree rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo:build_in_order_bmtree rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo:build_chain fo 4 rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo:build_chain fo 1 rt 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:topo_build_in_order_tree Building fo 2 rt 8
</span><br>
<span class="quotelev1">&gt; coll:tuned:module_init Tuned is in use
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_dec_dynamic
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; coll:tuned:allreduce_intra_recursivedoubling rank 8
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_barrier_intra_dec_dynamic
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_barrier_intra_dec_fixed com_size 9
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_barrier_intra_bruck rank 8
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_dec_dynamic
</span><br>
<span class="quotelev1">&gt; Selected the following msg rule id 0
</span><br>
<span class="quotelev1">&gt; alg_id   2      com_id   0      com_size   9    msg_id   0
</span><br>
<span class="quotelev1">&gt; msg_size      0 -&gt; algorithm  1 topo in/out  0  segsize     0
</span><br>
<span class="quotelev1">&gt; max_requests    0
</span><br>
<span class="quotelev1">&gt; coll:tuned:allreduce_intra_do_this algorithm 1 topo fan in/out 0  
</span><br>
<span class="quotelev1">&gt; segsize
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; coll:tuned:allreduce_intra_basic_linear rank 8
</span><br>
<span class="quotelev1">&gt; coll:tuned:reduce_intra_basic_linear rank 8
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_bcast_intra_basic_linear rank 8 root 0
</span><br>
<span class="quotelev1">&gt; mca: base: close: unloading component basic
</span><br>
<span class="quotelev1">&gt; mca: base: close: unloading component hierarch
</span><br>
<span class="quotelev1">&gt; mca: base: close: unloading component inter
</span><br>
<span class="quotelev1">&gt; mca: base: close: unloading component self
</span><br>
<span class="quotelev1">&gt; mca: base: close: component sm closed
</span><br>
<span class="quotelev1">&gt; mca: base: close: unloading component sm
</span><br>
<span class="quotelev1">&gt; mca: base: close: unloading component sync
</span><br>
<span class="quotelev1">&gt; coll:tuned:component_close: called
</span><br>
<span class="quotelev1">&gt; coll:tuned:component_close: done!
</span><br>
<span class="quotelev1">&gt; mca: base: close: component tuned closed
</span><br>
<span class="quotelev1">&gt; mca: base: close: unloading component tuned
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
<li><strong>Next message:</strong> <a href="10368.php">amjad ali: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Previous message:</strong> <a href="10366.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9872.php">Jumper, John: "[OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicate communicators"</a>
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
