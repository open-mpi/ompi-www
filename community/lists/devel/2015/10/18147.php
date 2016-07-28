<?
$subject_val = "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 21:06:51 2015" -->
<!-- isoreceived="20151007010651" -->
<!-- sent="Wed, 7 Oct 2015 10:06:41 +0900" -->
<!-- isosent="20151007010641" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trace the openmpi internal function calls in MPI user program" -->
<!-- id="56147021.1050804_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="36263173.1464890.1444154904151.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 21:06:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Previous message:</strong> <a href="18146.php">Nysal Jan K A: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>In reply to:</strong> <a href="18143.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Reply:</strong> <a href="18148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dahai Guo,
<br>
<p><p><p><p><p>On 10/7/2015 3:08 AM, Dahai Guo wrote:
<br>
<span class="quotelev1">&gt; Thanks, Jeff. It is very helpful. some more questions :-):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.  There are many coll components, such as basic, tuned, self, cuda, 
</span><br>
<span class="quotelev1">&gt; sm, and etc.  Are they all selected at the MPI_Init time?  or it just 
</span><br>
<span class="quotelev1">&gt; select those satisfying  some criteria, hardware, communicator size? 
</span><br>
<span class="quotelev1">&gt; or only some specific ones are selected?
</span><br>
some components simply disqualify themselves at MPI_Init time,
<br>
and some other components are not selected when a communicator is created
<br>
(for example coll/sm cannot be used on an communicator with tasks on 
<br>
several nodes,
<br>
note coll_sm_priority is zero by default, so coll/sm is disqualified at 
<br>
MPI_Init time and hence
<br>
this is not a perfect example)
<br>
<p>ompi/mpi/c/barrier.c uses a function pointer to the barrier subroutine,
<br>
and this function pointer has been set when the communicator was created.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.  MPI_Barrier seems choose the exact algorithm for the API in 
</span><br>
<span class="quotelev1">&gt; MPI_Init, since I checked the file ompi/mpi/c/barrier.c, and there is 
</span><br>
<span class="quotelev1">&gt; no choice  except inter/intra judge. Would you please point out in 
</span><br>
<span class="quotelev1">&gt; which code it is selected? So that I can get some hint for other MPI 
</span><br>
<span class="quotelev1">&gt; collective functions selection, and .
</span><br>
<span class="quotelev1">&gt;
</span><br>
most of the time, coll/tuned is used.
<br>
and most of the time, coll_tuned_XXX_intra_dec_fixed is used
<br>
this function will choose the collective algorithm to be used.
<br>
<p>for example, MPI_Barrier invokes 
<br>
ompi_coll_tuned_barrier_intra_dec_fixed, which will choose and invoke 
<br>
one of :
<br>
- ompi_coll_base_barrier_intra_two_procs
<br>
- ompi_coll_base_barrier_intra_bruck
<br>
- ompi_coll_base_barrier_intra_recursivedoubling
<br>
<p>the best way to understand this part is probably to use a debugger, set 
<br>
a breakpoint in MPI_Barrier and step as long as required.
<br>
in most cases, you will end up using the coll/tuned module on an 
<br>
intra-communicator, so unless you plan to develop your own collective 
<br>
module, you can skip the module initialization/selection part.
<br>
<span class="quotelev1">&gt; 3. I saw somewhere  the run-time parameters to choose algorithms, such 
</span><br>
<span class="quotelev1">&gt; as &quot;--mca coll_tuned_reduce_algorithm 5&quot;. Where can I find the 
</span><br>
<span class="quotelev1">&gt; complete list of these kinds of runtime options and their value choices?
</span><br>
<span class="quotelev1">&gt;
</span><br>
you can run ompi_info --all and search for coll_tuned_xxx_algorithm
<br>
for example
<br>
MCA coll: parameter &quot;coll_tuned_barrier_algorithm&quot; (current value: 
<br>
&quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Which barrier algorithm is used. Can be 
<br>
locked down to choice of: 0 ignore, 1 linear, 2 double ring, 3: 
<br>
recursive doubling 4: bruck, 5: two proc only, 6: tree
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valid values: 0:&quot;ignore&quot;, 1:&quot;linear&quot;, 
<br>
2:&quot;double_ring&quot;, 3:&quot;recursive_doubling&quot;, 4:&quot;bruck&quot;, 5:&quot;two_proc&quot;, 6:&quot;tree&quot;
<br>
<p>if you want to force the usage of the bruck (4) algorithm, you can run
<br>
mpirun --mca coll_tuned_use_dynamic_rules 1 --mca 
<br>
coll_tuned_barrier_algorithm 4 ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><span class="quotelev1">&gt; Dahai
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, October 6, 2015 12:25 PM, Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 6, 2015, at 10:19 AM, Dahai Guo &lt;dahaiguo2004_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dahaiguo2004_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Gilles. Some more questions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. how does Open MPI  define the priorities of the different 
</span><br>
<span class="quotelev1">&gt; collective components? what criteria is based on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The priorities are in the range of [0, 100] (100=highest).  The 
</span><br>
<span class="quotelev1">&gt; priorities tend to be fairly coarse-grained; they're mainly based on 
</span><br>
<span class="quotelev1">&gt; relative knowledge of how good / bad a particular algorithm is going 
</span><br>
<span class="quotelev1">&gt; to be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. how does a MPI collective function (MPI_Barrier for example) 
</span><br>
<span class="quotelev1">&gt; choose the exact algorithm it use? based on message size, and 
</span><br>
<span class="quotelev1">&gt; communicator size? any other factors?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes (all of the above).  Meaning: each component is responsible for a) 
</span><br>
<span class="quotelev1">&gt; determining whether it will provide a function pointer for each 
</span><br>
<span class="quotelev1">&gt; operation, and b) what that function pointer's priority should be 
</span><br>
<span class="quotelev1">&gt; (same disclaimer as my last mail: I don't remember offhand if there's 
</span><br>
<span class="quotelev1">&gt; a single priority for the whole component, or on a 
</span><br>
<span class="quotelev1">&gt; per-function-pointer/operation basis).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, the component can use whatever criteria it wants to determine 
</span><br>
<span class="quotelev1">&gt; if it wants to provide a function pointer or not.  E.g., if it only 
</span><br>
<span class="quotelev1">&gt; has algorithms that work with communicators that have a size that is a 
</span><br>
<span class="quotelev1">&gt; power of 2, then it can use that information to determine whether it 
</span><br>
<span class="quotelev1">&gt; wants to provide a function pointer for a new communicator or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. when does MPI_Barrier choose the algorithm?  in ompi_mpi_init? 
</span><br>
<span class="quotelev1">&gt; or  every time the API program calls the MPI_barrier?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A combination of: when the communicator is constructed and when the 
</span><br>
<span class="quotelev1">&gt; barrier is run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I already described the communicator-constructor scenario.  But in 
</span><br>
<span class="quotelev1">&gt; addition to that, it's certainly possible to have a collective 
</span><br>
<span class="quotelev1">&gt; operation dispatch to a function that makes a further run-time based 
</span><br>
<span class="quotelev1">&gt; decision (the tuned collective component does a lot of this).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For barrier that wouldn't really be necessary (because you can setup 
</span><br>
<span class="quotelev1">&gt; everything at communicator constructor time because the MPI_BCAST API 
</span><br>
<span class="quotelev1">&gt; doesn't have any variation in its parameters -- i.e., you know 
</span><br>
<span class="quotelev1">&gt; everything at communicator constructor time).  But for other 
</span><br>
<span class="quotelev1">&gt; operations, you might choose different algorithms depending on the 
</span><br>
<span class="quotelev1">&gt; number of local peers, the size of the message, ...etc.  Hence, you 
</span><br>
<span class="quotelev1">&gt; might want to make the final algorithm dispatch decision when 
</span><br>
<span class="quotelev1">&gt; MPI_GATHER is invoked with the final set of parameters, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4. all the MPI collective functions follow the same procedure to 
</span><br>
<span class="quotelev1">&gt; choose algorithms in the API program?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure how to parse this question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general, all MPI collective operations follow the same procedure to 
</span><br>
<span class="quotelev1">&gt; select which component is selected at communicator constructor time.  
</span><br>
<span class="quotelev1">&gt; When the collective operation is dispatched off to the module at run 
</span><br>
<span class="quotelev1">&gt; time (e.g., when MPI_BCAST is invoked), it's then up to the module to 
</span><br>
<span class="quotelev1">&gt; decide what to do next (i.e., how to actually effect that collective 
</span><br>
<span class="quotelev1">&gt; operation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It would be great if you can point out some main OMPI files and 
</span><br>
<span class="quotelev1">&gt; functions that are involved in the process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to step through the selection process with a debugger 
</span><br>
<span class="quotelev1">&gt; to see what happens.  Set a breakpoint on mca_coll_base_comm_select() 
</span><br>
<span class="quotelev1">&gt; and step through from there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dahai
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tuesday, October 6, 2015 1:08 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; at first, you can check the priorities of the various coll modules
</span><br>
<span class="quotelev2">&gt; &gt; with ompi_info
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ompi_info --all | grep \&quot;coll_ | grep priority
</span><br>
<span class="quotelev2">&gt; &gt;                MCA coll: parameter &quot;coll_basic_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA coll: parameter &quot;coll_inter_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;40&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA coll: parameter &quot;coll_libnbc_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA coll: parameter &quot;coll_ml_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA coll: parameter &quot;coll_self_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;75&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA coll: parameter &quot;coll_sm_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA coll: parameter &quot;coll_tuned_priority&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; value: &quot;30&quot;, data source: default, level: 6 tuner/all, type: int)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; coll_tuned_priority likely the collective module you will be using.
</span><br>
<span class="quotelev2">&gt; &gt; then you can check the various ompi_coll_tuned_*_intra_dec_fixed 
</span><br>
<span class="quotelev1">&gt; functions in
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/coll/tuned/coll_tuned_decision_fixed.c
</span><br>
<span class="quotelev2">&gt; &gt; this is how the tuned collective module selects algorithms based on
</span><br>
<span class="quotelev2">&gt; &gt; communicator size and message size.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sun, Oct 4, 2015 at 11:12 AM, Dahai Guo &lt;dahaiguo2004_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dahaiguo2004_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks, Jeff. I am trying to understand in detail how Open MPI 
</span><br>
<span class="quotelev1">&gt; works in the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; run time. What main functions does it call to select and 
</span><br>
<span class="quotelev1">&gt; initialize the coll
</span><br>
<span class="quotelev3">&gt; &gt; &gt; components? Using the &quot;helloworld&quot; as an example,  how does it 
</span><br>
<span class="quotelev1">&gt; select and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; initialize the MPI_Barrier algorithm?  which C functions are 
</span><br>
<span class="quotelev1">&gt; involved and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; used in the process?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dahai
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Friday, October 2, 2015 7:50 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Oct 2, 2015, at 2:21 PM, Dahai Guo &lt;dahaiguo2004_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dahaiguo2004_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Is there any way to trace open mpi internal function calls in a 
</span><br>
<span class="quotelev1">&gt; MPI user
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; program?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unfortunately, not easily -- other than using a debugger, for example.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; If so, can any one explain it with an example? such as helloworld?  I
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; build open MPI with the VampirTrace options, and compile the 
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; program with picc-vt,. but I didn't get any tracing info.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI is a giant state machine -- MPI_INIT, for example, 
</span><br>
<span class="quotelev1">&gt; invokes slightly
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fewer than a bazillion functions (e.g., it initializes every 
</span><br>
<span class="quotelev1">&gt; framework and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; many components/plugins).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is there something in particular that you're looking for / want to 
</span><br>
<span class="quotelev1">&gt; know
</span><br>
<span class="quotelev3">&gt; &gt; &gt; about?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; D. G.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; int main (int argc, char **argv)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  int rank, size;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  return 0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18125.php">http://www.open-mpi.org/community/lists/devel/2015/10/18125.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18138.php">http://www.open-mpi.org/community/lists/devel/2015/10/18138.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18140.php">http://www.open-mpi.org/community/lists/devel/2015/10/18140.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18143.php">http://www.open-mpi.org/community/lists/devel/2015/10/18143.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18147/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Previous message:</strong> <a href="18146.php">Nysal Jan K A: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>In reply to:</strong> <a href="18143.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Reply:</strong> <a href="18148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
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
