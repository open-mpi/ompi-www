<?
$subject_val = "Re: [OMPI devel] Uninitialized ORTE epoch values";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  5 18:31:35 2011" -->
<!-- isoreceived="20110805223135" -->
<!-- sent="Fri, 5 Aug 2011 16:31:27 -0600" -->
<!-- isosent="20110805223127" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Uninitialized ORTE epoch values" -->
<!-- id="5FD8FA53-0B4D-475E-97B4-944196B14445_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="773B9EC0-9EDF-45C1-AED6-2988D5DEC0F1_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Uninitialized ORTE epoch values<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-05 18:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9617.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9615.php">Thomas Herault: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>In reply to:</strong> <a href="9615.php">Thomas Herault: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9617.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the explanation. It kinda begs a question, though - I've noticed that the assignment of epoch seems to circle around in a number of places. We call the ess_base function to get_epoch, and then we assign an epoch. But the base function actually seem to do much, if anything.
<br>
<p>It's somewhat confusing and difficult to trace. I know Wes and I already planned to cleanup some of this once we get back to the orte state machine work, but I'm hoping we can simplify this code somewhat to make it easier to understand and follow.
<br>
<p>Meantime, we'll continue to chase down the problems.
<br>
<p>On Aug 5, 2011, at 4:17 PM, Thomas Herault wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The warnings issued through ess_base_select.c:46 are annoying but harmless. Wesley is going to hunt them and remove them, but they are really issued because of the print:
</span><br>
<span class="quotelev1">&gt; orte_ess_base_proc_get_epoch (ess_base_select.c:46) calls ORTE_NAME_PRINT(proc), which prints proc-&gt;epoch, before proc-&gt;epoch is assigned to the local computed value epoch. This assignment is done in the level just above orte_ess_base_proc_get_epoch: orte_odls_base_default_construct_child_list (odls_base_default_fns.c:737) says proc-&gt;epoch = orte_ess_base_proc_get_epoch(proc);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wesley is going to find where this proc was created to ensure that its epoch field is initialized to INVALID_EPOCH, but what this trace says is really that nothing references it before it is initialized to its correct value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 5 ao&#251;t 2011 &#224; 16:52, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Wes - it isn't the print that's the issue, it's the fact that we have epochs that aren't being initialized, and what else that may be causing to have problems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 5, 2011, at 2:45 PM, Wesley Bland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think these are anything to worry about since they're all print statements, but I will work on these tonight.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Aug 5, 2011 at 3:03 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph and I are trying to track down the mysterious ORTE error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In doing so, I have found at least one fairly repeatable error on my cluster: when running through SLURM the ibm/dynamic/spawn test, where we mpirun 3 procs and then we MPI_COMM_SPAWN 3 more.  Running the orteds through valgrind, I see a bunch of uninitialized epoch issues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached at the 2 valgrind outputs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can these be fixed?  I don't know if they're actual problems or not, but seeing uninitialized values go by makes me extremely nervous.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9617.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9615.php">Thomas Herault: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>In reply to:</strong> <a href="9615.php">Thomas Herault: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9617.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
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
