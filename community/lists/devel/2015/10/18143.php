<?
$subject_val = "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 14:11:22 2015" -->
<!-- isoreceived="20151006181122" -->
<!-- sent="Tue, 6 Oct 2015 18:08:24 +0000 (UTC)" -->
<!-- isosent="20151006180824" -->
<!-- name="Dahai Guo" -->
<!-- email="dahaiguo2004_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trace the openmpi internal function calls in MPI user program" -->
<!-- id="36263173.1464890.1444154904151.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0542C0FE-D280-480A-BBC8-49EB11FF3CC7_at_cisco.com" -->
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
<strong>From:</strong> Dahai Guo (<em>dahaiguo2004_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 14:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18144.php">Nysal Jan K A: "[OMPI devel] opal_progress() and finalize"</a>
<li><strong>Previous message:</strong> <a href="18142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>In reply to:</strong> <a href="18142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18147.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Reply:</strong> <a href="18147.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Jeff. It is very helpful. some more questions :-):
<br>
1. &#194;&#160;There are many coll components, such as basic, tuned, self, cuda, sm, and etc. &#194;&#160;Are they all selected at the MPI_Init time? &#194;&#160;or it just select those satisfying &#194;&#160;some criteria, hardware, communicator size? or only some specific ones are selected?&#194;&#160;&#194;&#160;2. &#194;&#160;MPI_Barrier seems choose the exact algorithm for the API in MPI_Init, since I checked the file ompi/mpi/c/barrier.c, and there is no choice &#194;&#160;except inter/intra judge. Would you please point out in which code it is selected? So that I can get some hint for other MPI collective functions selection, and .
<br>
3. I saw somewhere &#194;&#160;the run-time parameters to choose algorithms, such as &quot;--mca coll_tuned_reduce_algorithm 5&quot;. Where can I find the complete list of these kinds of runtime options and their value choices?
<br>
Dahai&#194;&#160; 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Tuesday, October 6, 2015 12:25 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;On Oct 6, 2015, at 10:19 AM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Gilles. Some more questions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. how does Open MPI&#194;&#160; define the priorities of the different collective components? what criteria is based on?
</span><br>
<p>The priorities are in the range of [0, 100] (100=highest).&#194;&#160; The priorities tend to be fairly coarse-grained; they're mainly based on relative knowledge of how good / bad a particular algorithm is going to be.
<br>
<p><span class="quotelev1">&gt; 2. how does a MPI collective function (MPI_Barrier for example) choose the exact algorithm it use? based on message size, and communicator size? any other factors? 
</span><br>
<p>Yes (all of the above).&#194;&#160; Meaning: each component is responsible for a) determining whether it will provide a function pointer for each operation, and b) what that function pointer's priority should be (same disclaimer as my last mail: I don't remember offhand if there's a single priority for the whole component, or on a per-function-pointer/operation basis).
<br>
<p>Hence, the component can use whatever criteria it wants to determine if it wants to provide a function pointer or not.&#194;&#160; E.g., if it only has algorithms that work with communicators that have a size that is a power of 2, then it can use that information to determine whether it wants to provide a function pointer for a new communicator or not.
<br>
<p><span class="quotelev1">&gt; 3. when does MPI_Barrier choose the algorithm?&#194;&#160; in ompi_mpi_init? or&#194;&#160; every time the API program calls the MPI_barrier? 
</span><br>
<p>A combination of: when the communicator is constructed and when the barrier is run.
<br>
<p>I already described the communicator-constructor scenario.&#194;&#160; But in addition to that, it's certainly possible to have a collective operation dispatch to a function that makes a further run-time based decision (the tuned collective component does a lot of this).
<br>
<p>For barrier that wouldn't really be necessary (because you can setup everything at communicator constructor time because the MPI_BCAST API doesn't have any variation in its parameters -- i.e., you know everything at communicator constructor time).&#194;&#160; But for other operations, you might choose different algorithms depending on the number of local peers, the size of the message, ...etc.&#194;&#160; Hence, you might want to make the final algorithm dispatch decision when MPI_GATHER is invoked with the final set of parameters, etc.
<br>
<p><span class="quotelev1">&gt; 4. all the MPI collective functions follow the same procedure to choose algorithms in the API program?
</span><br>
<p>I'm not sure how to parse this question.
<br>
<p>In general, all MPI collective operations follow the same procedure to select which component is selected at communicator constructor time.&#194;&#160; When the collective operation is dispatched off to the module at run time (e.g., when MPI_BCAST is invoked), it's then up to the module to decide what to do next (i.e., how to actually effect that collective operation).
<br>
<p><span class="quotelev1">&gt; It would be great if you can point out some main OMPI files and functions that are involved in the process.
</span><br>
<p>You might want to step through the selection process with a debugger to see what happens.&#194;&#160; Set a breakpoint on mca_coll_base_comm_select() and step through from there.
<br>
<p><p><span class="quotelev1">&gt; Dahai
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday, October 6, 2015 1:08 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at first, you can check the priorities of the various coll modules
</span><br>
<span class="quotelev1">&gt; with ompi_info
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info --all | grep \&quot;coll_ | grep priority
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; MCA coll: parameter &quot;coll_basic_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; MCA coll: parameter &quot;coll_inter_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;40&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; MCA coll: parameter &quot;coll_libnbc_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; MCA coll: parameter &quot;coll_ml_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; MCA coll: parameter &quot;coll_self_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;75&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; MCA coll: parameter &quot;coll_sm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; MCA coll: parameter &quot;coll_tuned_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;30&quot;, data source: default, level: 6 tuner/all, type: int)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; coll_tuned_priority likely the collective module you will be using.
</span><br>
<span class="quotelev1">&gt; then you can check the various ompi_coll_tuned_*_intra_dec_fixed functions in
</span><br>
<span class="quotelev1">&gt; ompi/mca/coll/tuned/coll_tuned_decision_fixed.c
</span><br>
<span class="quotelev1">&gt; this is how the tuned collective module selects algorithms based on
</span><br>
<span class="quotelev1">&gt; communicator size and message size.
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
<span class="quotelev1">&gt; On Sun, Oct 4, 2015 at 11:12 AM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Jeff. I am trying to understand in detail how Open MPI works in the
</span><br>
<span class="quotelev2">&gt; &gt; run time. What main functions does it call to select and initialize the coll
</span><br>
<span class="quotelev2">&gt; &gt; components? Using the &quot;helloworld&quot; as an example,&#194;&#160; how does it select and
</span><br>
<span class="quotelev2">&gt; &gt; initialize the MPI_Barrier algorithm?&#194;&#160; which C functions are involved and
</span><br>
<span class="quotelev2">&gt; &gt; used in the process?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dahai
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Friday, October 2, 2015 7:50 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt; &gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 2, 2015, at 2:21 PM, Dahai Guo &lt;dahaiguo2004_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there any way to trace open mpi internal function calls in a MPI user
</span><br>
<span class="quotelev3">&gt; &gt;&gt; program?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, not easily -- other than using a debugger, for example.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If so, can any one explain it with an example? such as helloworld?&#194;&#160; I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; build open MPI with the VampirTrace options, and compile the following
</span><br>
<span class="quotelev3">&gt; &gt;&gt; program with picc-vt,. but I didn't get any tracing info.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI is a giant state machine -- MPI_INIT, for example, invokes slightly
</span><br>
<span class="quotelev2">&gt; &gt; fewer than a bazillion functions (e.g., it initializes every framework and
</span><br>
<span class="quotelev2">&gt; &gt; many components/plugins).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there something in particular that you're looking for / want to know
</span><br>
<span class="quotelev2">&gt; &gt; about?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; D. G.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; int main (int argc, char **argv)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#194;&#160; int rank, size;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#194;&#160; MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#194;&#160; MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#194;&#160; MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#194;&#160; printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#194;&#160; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#194;&#160; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#194;&#160; return 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18125.php">http://www.open-mpi.org/community/lists/devel/2015/10/18125.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18138.php">http://www.open-mpi.org/community/lists/devel/2015/10/18138.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18140.php">http://www.open-mpi.org/community/lists/devel/2015/10/18140.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18144.php">Nysal Jan K A: "[OMPI devel] opal_progress() and finalize"</a>
<li><strong>Previous message:</strong> <a href="18142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>In reply to:</strong> <a href="18142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18147.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Reply:</strong> <a href="18147.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
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
