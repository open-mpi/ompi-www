<?
$subject_val = "Re: [OMPI users] valgrind problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 22:25:10 2009" -->
<!-- isoreceived="20090227032510" -->
<!-- sent="Thu, 26 Feb 2009 20:25:01 -0700" -->
<!-- isosent="20090227032501" -->
<!-- name="Justin" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] valgrind problems" -->
<!-- id="49A75D0D.4040405_at_cs.utah.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="525CF7BB-92E2-499C-A2AA-382C437B5B1A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] valgrind problems<br>
<strong>From:</strong> Justin (<em>luitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 22:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8227.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Previous message:</strong> <a href="8225.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>In reply to:</strong> <a href="8225.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8227.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Reply:</strong> <a href="8227.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there any tricks to getting it to work?  When we run with valgrind we 
<br>
get segfaults, valgrind reports errors in different MPI functions for 
<br>
example:
<br>
<p>==3629== Invalid read of size 4
<br>
==3629==    at 0x1CF7AEEC: (within 
<br>
/usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
<br>
==3629==    by 0x1D9C23F4: mca_btl_sm_component_progress (in 
<br>
/usr/lib/openmpi/lib/openmpi/mca_btl_sm.so)
<br>
==3629==    by 0x1D17F14A: mca_bml_r2_progress (in 
<br>
/usr/lib/openmpi/lib/openmpi/mca_bml_r2.so)
<br>
==3629==    by 0x151FCCD9: opal_progress (in 
<br>
/usr/lib/openmpi/lib/libopen-pal.so.0.0.0)
<br>
==3629==    by 0xD09FA94: ompi_request_wait_all (in 
<br>
/usr/lib/openmpi/lib/libmpi.so.0.0.0)
<br>
==3629==    by 0x1E3E47C1: ompi_coll_tuned_sendrecv_actual (in 
<br>
/usr/lib/openmpi/lib/openmpi/mca_coll_tuned.so)
<br>
==3629==    by 0x1E3E9105: 
<br>
ompi_coll_tuned_barrier_intra_recursivedoubling (in 
<br>
/usr/lib/openmpi/lib/openmpi/mca_coll_tuned.so)
<br>
==3629==    by 0xD0B42FF: PMPI_Barrier (in 
<br>
/usr/lib/openmpi/lib/libmpi.so.0.0.0)
<br>
==3629==    by 0x7EA025E: 
<br>
Uintah::DataArchiver::initializeOutput(Uintah::Handle&lt;Uintah::ProblemSpec&gt; 
<br>
const&amp;) (DataArchiver.cc:400)
<br>
==3629==    by 0x899DDDF: 
<br>
Uintah::SimulationController::postGridSetup(Uintah::Handle&lt;Uintah::Grid&gt;&amp;, 
<br>
double&amp;) (SimulationController.cc:352)
<br>
==3629==    by 0x89A8568: Uintah::AMRSimulationController::run() 
<br>
(AMRSimulationController.cc:126)
<br>
==3629==    by 0x408B9F: main (sus.cc:622)
<br>
<p>This is then followed by a segfault.
<br>
<p>Justin
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 26, 2009, at 7:03 PM, Justin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to use valgrind to check if we have any memory problems in 
</span><br>
<span class="quotelev2">&gt;&gt; our code when running with parallel processors.  However,  when I run 
</span><br>
<span class="quotelev2">&gt;&gt; using mpi and valgrind I crashes in various places.  For example some 
</span><br>
<span class="quotelev2">&gt;&gt; of the times it will crash with a segfault within MPI_Allgatherv 
</span><br>
<span class="quotelev2">&gt;&gt; despite the fact that all the arguments to the all gather on all 
</span><br>
<span class="quotelev2">&gt;&gt; processors is completely valid.   If we don't use valgrind the 
</span><br>
<span class="quotelev2">&gt;&gt; program runs just fine.
</span><br>
<span class="quotelev2">&gt;&gt; This is on a Debian(lenny) 64 bit machine using the stock mpi 
</span><br>
<span class="quotelev2">&gt;&gt; package.  The command used to launch the job is: mpirun -np 8 
</span><br>
<span class="quotelev2">&gt;&gt; valgrind -v --log-file=valgrind.%p executable.  Are valgrind and 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi compatible?  Is there any special tricks to getting them to 
</span><br>
<span class="quotelev2">&gt;&gt; work together?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use valgrind internally to track down leaks and other debugging 
</span><br>
<span class="quotelev1">&gt; kinds of things.  So yes, it should work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do try to keep up with the latest latest latest valgrind, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8227.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Previous message:</strong> <a href="8225.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>In reply to:</strong> <a href="8225.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8227.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Reply:</strong> <a href="8227.php">Justin: "Re: [OMPI users] valgrind problems"</a>
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
