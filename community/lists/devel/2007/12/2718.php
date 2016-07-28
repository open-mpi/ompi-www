<?
$subject_val = "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 09:58:31 2007" -->
<!-- isoreceived="20071205145831" -->
<!-- sent="Wed, 05 Dec 2007 09:58:24 -0500" -->
<!-- isosent="20071205145824" -->
<!-- name="Rolf.Vandevaart_at_[hidden]" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE issue I. Support for non-MPI jobs" -->
<!-- id="4756BC90.9080500_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C37ABC4A.B782%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE issue I. Support for non-MPI jobs<br>
<strong>From:</strong> <a href="mailto:Rolf.Vandevaart_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20RTE%20issue%20I.%20Support%20for%20non-MPI%20jobs"><em>Rolf.Vandevaart_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-12-05 09:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2719.php">Ralph H Castain: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="2717.php">Jon Mason: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>In reply to:</strong> <a href="2709.php">Ralph H Castain: "[OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2719.php">Ralph H Castain: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Reply:</strong> <a href="2719.php">Ralph H Castain: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt;I. Support for non-MPI jobs
</span><br>
<span class="quotelev1">&gt;Considerable complexity currently exists in ORTE because of the stipulation
</span><br>
<span class="quotelev1">&gt;in our first requirements document that users be able to mpirun non-MPI jobs
</span><br>
<span class="quotelev1">&gt;- i.e., that we support such calls as &quot;mpirun -n 100 hostname&quot;. This creates
</span><br>
<span class="quotelev1">&gt;a situation, however, where the RTE cannot know if the application will call
</span><br>
<span class="quotelev1">&gt;MPI_Init (or at least orte_init), which has significant implications to the
</span><br>
<span class="quotelev1">&gt;RTE's architecture. For example, during the launch of the application's
</span><br>
<span class="quotelev1">&gt;processes, the RTE cannot go into any form of blocking receive while waiting
</span><br>
<span class="quotelev1">&gt;for the procs to report a successful startup as this won't occur for
</span><br>
<span class="quotelev1">&gt;execution of something like &quot;hostname&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Jeff has noted that support for non-MPI jobs is not something most (all?)
</span><br>
<span class="quotelev1">&gt;MPIs currently provide, nor something that users are likely to exploit as
</span><br>
<span class="quotelev1">&gt;they can more easily just &quot;qsub hostname&quot; (or the equivalent for that
</span><br>
<span class="quotelev1">&gt;environment). While nice for debugging purposes, therefore, it isn't clear
</span><br>
<span class="quotelev1">&gt;that supporting non-MPI jobs is worth the increased code complexity and
</span><br>
<span class="quotelev1">&gt;fragility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In addition, the fact that we do not know if a job will call Init limits our
</span><br>
<span class="quotelev1">&gt;ability to do collective communications within the RTE, and hence our
</span><br>
<span class="quotelev1">&gt;scalability - see the note on that specific subject for further discussion
</span><br>
<span class="quotelev1">&gt;on this area.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This would be a &quot;regression&quot; in behavior, though, so the questions for the
</span><br>
<span class="quotelev1">&gt;community are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(a) do we want to retain the feature to run non-MPI jobs with mpirun as-is
</span><br>
<span class="quotelev1">&gt;(and accept the tradeoffs, including the one described below in II)?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hi Ralph:
<br>
&nbsp;From a user standpoint, a) would be preferable.  However, as you point 
<br>
out, there are issues.  Are you saying that we cannot do collectives 
<br>
(Item III) if we preserve a?  Or is it that things will just be more 
<br>
complex.  I guess I am looking for more details about what the tradeoffs 
<br>
are for preserving a.
<br>
<p>Having said that, we would probably be OK with b) if that makes things 
<br>
better/faster/robuster.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;(b) do we provide a flag to mpirun (perhaps adding the distinction that
</span><br>
<span class="quotelev1">&gt;&quot;orterun&quot; must be used for non-MPI jobs?) to indicate &quot;this is NOT an MPI
</span><br>
<span class="quotelev1">&gt;job&quot; so we can act accordingly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(c) simply eliminate support for non-MPI jobs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(d) other suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2719.php">Ralph H Castain: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="2717.php">Jon Mason: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>In reply to:</strong> <a href="2709.php">Ralph H Castain: "[OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2719.php">Ralph H Castain: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Reply:</strong> <a href="2719.php">Ralph H Castain: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
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
