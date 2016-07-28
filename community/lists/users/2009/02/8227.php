<?
$subject_val = "Re: [OMPI users] valgrind problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 22:27:24 2009" -->
<!-- isoreceived="20090227032724" -->
<!-- sent="Thu, 26 Feb 2009 20:27:15 -0700" -->
<!-- isosent="20090227032715" -->
<!-- name="Justin" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] valgrind problems" -->
<!-- id="49A75D93.5040006_at_cs.utah.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49A75D0D.4040405_at_cs.utah.edu" -->
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
<strong>Date:</strong> 2009-02-26 22:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8228.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Previous message:</strong> <a href="8226.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>In reply to:</strong> <a href="8226.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8228.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Reply:</strong> <a href="8228.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Reply:</strong> <a href="8249.php">Douglas Guptill: "Re: [OMPI users] valgrind problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also the stable version of openmpi on Debian is 1.2.7rc2.  Are there any 
<br>
known issues with this version and valgrid?
<br>
<p>Thanks,
<br>
Justin
<br>
<p>Justin wrote:
<br>
<span class="quotelev1">&gt; Is there any tricks to getting it to work?  When we run with valgrind 
</span><br>
<span class="quotelev1">&gt; we get segfaults, valgrind reports errors in different MPI functions 
</span><br>
<span class="quotelev1">&gt; for example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==3629== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==3629==    at 0x1CF7AEEC: (within 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==3629==    by 0x1D9C23F4: mca_btl_sm_component_progress (in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt; ==3629==    by 0x1D17F14A: mca_bml_r2_progress (in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==3629==    by 0x151FCCD9: opal_progress (in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==3629==    by 0xD09FA94: ompi_request_wait_all (in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==3629==    by 0x1E3E47C1: ompi_coll_tuned_sendrecv_actual (in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_coll_tuned.so)
</span><br>
<span class="quotelev1">&gt; ==3629==    by 0x1E3E9105: 
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_barrier_intra_recursivedoubling (in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_coll_tuned.so)
</span><br>
<span class="quotelev1">&gt; ==3629==    by 0xD0B42FF: PMPI_Barrier (in 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==3629==    by 0x7EA025E: 
</span><br>
<span class="quotelev1">&gt; Uintah::DataArchiver::initializeOutput(Uintah::Handle&lt;Uintah::ProblemSpec&gt; 
</span><br>
<span class="quotelev1">&gt; const&amp;) (DataArchiver.cc:400)
</span><br>
<span class="quotelev1">&gt; ==3629==    by 0x899DDDF: 
</span><br>
<span class="quotelev1">&gt; Uintah::SimulationController::postGridSetup(Uintah::Handle&lt;Uintah::Grid&gt;&amp;, 
</span><br>
<span class="quotelev1">&gt; double&amp;) (SimulationController.cc:352)
</span><br>
<span class="quotelev1">&gt; ==3629==    by 0x89A8568: Uintah::AMRSimulationController::run() 
</span><br>
<span class="quotelev1">&gt; (AMRSimulationController.cc:126)
</span><br>
<span class="quotelev1">&gt; ==3629==    by 0x408B9F: main (sus.cc:622)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is then followed by a segfault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Justin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 26, 2009, at 7:03 PM, Justin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to use valgrind to check if we have any memory problems 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in our code when running with parallel processors.  However,  when I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run using mpi and valgrind I crashes in various places.  For example 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some of the times it will crash with a segfault within 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Allgatherv despite the fact that all the arguments to the all 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gather on all processors is completely valid.   If we don't use 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valgrind the program runs just fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is on a Debian(lenny) 64 bit machine using the stock mpi 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; package.  The command used to launch the job is: mpirun -np 8 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valgrind -v --log-file=valgrind.%p executable.  Are valgrind and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi compatible?  Is there any special tricks to getting them to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work together?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We use valgrind internally to track down leaks and other debugging 
</span><br>
<span class="quotelev2">&gt;&gt; kinds of things.  So yes, it should work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do try to keep up with the latest latest latest valgrind, though.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="8228.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Previous message:</strong> <a href="8226.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>In reply to:</strong> <a href="8226.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8228.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Reply:</strong> <a href="8228.php">Jeff Squyres: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Reply:</strong> <a href="8249.php">Douglas Guptill: "Re: [OMPI users] valgrind problems"</a>
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
