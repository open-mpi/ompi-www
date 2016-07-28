<?
$subject_val = "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 06:19:37 2015" -->
<!-- isoreceived="20151007101937" -->
<!-- sent="Wed, 7 Oct 2015 10:19:32 +0000" -->
<!-- isosent="20151007101932" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trace the openmpi internal function calls in MPI user program" -->
<!-- id="278EA7C2-940A-4F2F-B78B-C266ECDCA1A7_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="56147021.1050804_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trace the openmpi internal function calls in MPI user program<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-07 06:19:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18149.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.10.1rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="18147.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>In reply to:</strong> <a href="18147.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a paper from back in 2004, and some of the details have definitely changed since then, but the high-level concepts are likely still to be a good overview of how Open MPI's coll selection process works:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/ics-2004/">http://www.open-mpi.org/papers/ics-2004/</a>
<br>
<p><p><p><span class="quotelev1">&gt; On Oct 6, 2015, at 9:06 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dahai Guo,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/7/2015 3:08 AM, Dahai Guo wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Jeff. It is very helpful. some more questions :-):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1.  There are many coll components, such as basic, tuned, self, cuda, sm, and etc.  Are they all selected at the MPI_Init time?  or it just select those satisfying  some criteria, hardware, communicator size? or only some specific ones are selected?
</span><br>
<span class="quotelev1">&gt; some components simply disqualify themselves at MPI_Init time,
</span><br>
<span class="quotelev1">&gt; and some other components are not selected when a communicator is created
</span><br>
<span class="quotelev1">&gt; (for example coll/sm cannot be used on an communicator with tasks on several nodes,
</span><br>
<span class="quotelev1">&gt; note coll_sm_priority is zero by default, so coll/sm is disqualified at MPI_Init time and hence
</span><br>
<span class="quotelev1">&gt; this is not a perfect example)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi/mpi/c/barrier.c uses a function pointer to the barrier subroutine,
</span><br>
<span class="quotelev1">&gt; and this function pointer has been set when the communicator was created.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 2.  MPI_Barrier seems choose the exact algorithm for the API in MPI_Init, since I checked the file ompi/mpi/c/barrier.c, and there is no choice  except inter/intra judge. Would you please point out in which code it is selected? So that I can get some hint for other MPI collective functions selection, and .
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; most of the time, coll/tuned is used.
</span><br>
<span class="quotelev1">&gt; and most of the time, coll_tuned_XXX_intra_dec_fixed is used
</span><br>
<span class="quotelev1">&gt; this function will choose the collective algorithm to be used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for example, MPI_Barrier invokes ompi_coll_tuned_barrier_intra_dec_fixed, which will choose and invoke one of :
</span><br>
<span class="quotelev1">&gt; - ompi_coll_base_barrier_intra_two_procs
</span><br>
<span class="quotelev1">&gt; - ompi_coll_base_barrier_intra_bruck
</span><br>
<span class="quotelev1">&gt; - ompi_coll_base_barrier_intra_recursivedoubling
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the best way to understand this part is probably to use a debugger, set a breakpoint in MPI_Barrier and step as long as required.
</span><br>
<span class="quotelev1">&gt; in most cases, you will end up using the coll/tuned module on an intra-communicator, so unless you plan to develop your own collective module, you can skip the module initialization/selection part.
</span><br>
<span class="quotelev2">&gt;&gt; 3. I saw somewhere  the run-time parameters to choose algorithms, such as &quot;--mca coll_tuned_reduce_algorithm 5&quot;. Where can I find the complete list of these kinds of runtime options and their value choices?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; you can run ompi_info --all and search for coll_tuned_xxx_algorithm
</span><br>
<span class="quotelev1">&gt; for example
</span><br>
<span class="quotelev1">&gt; MCA coll: parameter &quot;coll_tuned_barrier_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which barrier algorithm is used. Can be locked down to choice of: 0 ignore, 1 linear, 2 double ring, 3: recursive doubling 4: bruck, 5: two proc only, 6: tree
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;linear&quot;, 2:&quot;double_ring&quot;, 3:&quot;recursive_doubling&quot;, 4:&quot;bruck&quot;, 5:&quot;two_proc&quot;, 6:&quot;tree&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if you want to force the usage of the bruck (4) algorithm, you can run
</span><br>
<span class="quotelev1">&gt; mpirun --mca coll_tuned_use_dynamic_rules 1 --mca coll_tuned_barrier_algorithm 4 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dahai 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday, October 6, 2015 12:25 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 6, 2015, at 10:19 AM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks, Gilles. Some more questions:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1. how does Open MPI  define the priorities of the different collective components? what criteria is based on?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The priorities are in the range of [0, 100] (100=highest).  The priorities tend to be fairly coarse-grained; they're mainly based on relative knowledge of how good / bad a particular algorithm is going to be.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2. how does a MPI collective function (MPI_Barrier for example) choose the exact algorithm it use? based on message size, and communicator size? any other factors? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes (all of the above).  Meaning: each component is responsible for a) determining whether it will provide a function pointer for each operation, and b) what that function pointer's priority should be (same disclaimer as my last mail: I don't remember offhand if there's a single priority for the whole component, or on a per-function-pointer/operation basis).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence, the component can use whatever criteria it wants to determine if it wants to provide a function pointer or not.  E.g., if it only has algorithms that work with communicators that have a size that is a power of 2, then it can use that information to determine whether it wants to provide a function pointer for a new communicator or not.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3. when does MPI_Barrier choose the algorithm?  in ompi_mpi_init? or  every time the API program calls the MPI_barrier? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A combination of: when the communicator is constructed and when the barrier is run.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I already described the communicator-constructor scenario.  But in addition to that, it's certainly possible to have a collective operation dispatch to a function that makes a further run-time based decision (the tuned collective component does a lot of this).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For barrier that wouldn't really be necessary (because you can setup everything at communicator constructor time because the MPI_BCAST API doesn't have any variation in its parameters -- i.e., you know everything at communicator constructor time).  But for other operations, you might choose different algorithms depending on the number of local peers, the size of the message, ...etc.  Hence, you might want to make the final algorithm dispatch decision when MPI_GATHER is invoked with the final set of parameters, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 4. all the MPI collective functions follow the same procedure to choose algorithms in the API program?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure how to parse this question.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In general, all MPI collective operations follow the same procedure to select which component is selected at communicator constructor time.  When the collective operation is dispatched off to the module at run time (e.g., when MPI_BCAST is invoked), it's then up to the module to decide what to do next (i.e., how to actually effect that collective operation).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It would be great if you can point out some main OMPI files and functions that are involved in the process.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might want to step through the selection process with a debugger to see what happens.  Set a breakpoint on mca_coll_base_comm_select() and step through from there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dahai
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Tuesday, October 6, 2015 1:08 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; at first, you can check the priorities of the various coll modules
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with ompi_info
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ ompi_info --all | grep \&quot;coll_ | grep priority
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                MCA coll: parameter &quot;coll_basic_priority&quot; (current
</span><br>
<span class="quotelev3">&gt;&gt; &gt; value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                MCA coll: parameter &quot;coll_inter_priority&quot; (current
</span><br>
<span class="quotelev3">&gt;&gt; &gt; value: &quot;40&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                MCA coll: parameter &quot;coll_libnbc_priority&quot; (current
</span><br>
<span class="quotelev3">&gt;&gt; &gt; value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                MCA coll: parameter &quot;coll_ml_priority&quot; (current value:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                MCA coll: parameter &quot;coll_self_priority&quot; (current
</span><br>
<span class="quotelev3">&gt;&gt; &gt; value: &quot;75&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                MCA coll: parameter &quot;coll_sm_priority&quot; (current value:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                MCA coll: parameter &quot;coll_tuned_priority&quot; (current
</span><br>
<span class="quotelev3">&gt;&gt; &gt; value: &quot;30&quot;, data source: default, level: 6 tuner/all, type: int)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; coll_tuned_priority likely the collective module you will be using.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; then you can check the various ompi_coll_tuned_*_intra_dec_fixed functions in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi/mca/coll/tuned/coll_tuned_decision_fixed.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; this is how the tuned collective module selects algorithms based on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; communicator size and message size.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Sun, Oct 4, 2015 at 11:12 AM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thanks, Jeff. I am trying to understand in detail how Open MPI works in the
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; run time. What main functions does it call to select and initialize the coll
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; components? Using the &quot;helloworld&quot; as an example,  how does it select and
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; initialize the MPI_Barrier algorithm?  which C functions are involved and
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; used in the process?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Dahai
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On Friday, October 2, 2015 7:50 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On Oct 2, 2015, at 2:21 PM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Is there any way to trace open mpi internal function calls in a MPI user
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; program?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Unfortunately, not easily -- other than using a debugger, for example.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; If so, can any one explain it with an example? such as helloworld?  I
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; build open MPI with the VampirTrace options, and compile the following
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; program with picc-vt,. but I didn't get any tracing info.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Open MPI is a giant state machine -- MPI_INIT, for example, invokes slightly
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; fewer than a bazillion functions (e.g., it initializes every framework and
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; many components/plugins).
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Is there something in particular that you're looking for / want to know
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; about?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; D. G.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; int main (int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;  int rank, size;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;  printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;  return 0;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18125.php">http://www.open-mpi.org/community/lists/devel/2015/10/18125.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18138.php">http://www.open-mpi.org/community/lists/devel/2015/10/18138.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18140.php">http://www.open-mpi.org/community/lists/devel/2015/10/18140.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18143.php">http://www.open-mpi.org/community/lists/devel/2015/10/18143.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18147.php">http://www.open-mpi.org/community/lists/devel/2015/10/18147.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18149.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.10.1rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="18147.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>In reply to:</strong> <a href="18147.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
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
