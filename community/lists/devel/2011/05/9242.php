<?
$subject_val = "Re: [OMPI devel] getting started with grid engine integration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 22:34:58 2011" -->
<!-- isoreceived="20110504023458" -->
<!-- sent="Tue, 3 May 2011 20:34:49 -0600" -->
<!-- isosent="20110504023449" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] getting started with grid engine integration" -->
<!-- id="C56E502F-C0A7-4E5E-AF89-48F87E0CA232_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DC0A61F.1070009_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] getting started with grid engine integration<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 22:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9243.php">Tony Lam: "[OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Previous message:</strong> <a href="9241.php">Maurice Feskanich: "[OMPI devel] getting started with grid engine integration"</a>
<li><strong>In reply to:</strong> <a href="9241.php">Maurice Feskanich: "[OMPI devel] getting started with grid engine integration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 3, 2011, at 7:04 PM, Maurice Feskanich wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My team has been tasked with integrating our grid engine with Open MPI.  I'm looking for information that would shed light on how this is done.  In essence, I need to integrate the way LSF or SGE is integrated.  I've looked at the FAQ, and nosed around in the code, but I don't have a clear idea of which APIs to implement, or where my plugins would be used.
</span><br>
<p>Be happy to provide advice. Without knowing anything about your grid engine, it's a tad difficult to know exactly what you need. In the case of SGE, all that was required was to identify a few envars and point the rsh launcher to &quot;qrsh&quot;. For LSF, it took a little more work.
<br>
<p>There are three main frameworks generally involved:
<br>
<p>1. ras - determines what nodes are being used for this job. You'll see a &quot;gridengine&quot; plugin there that might serve as a model - it supports SGE.
<br>
<p>2. plm - actually launches the ORTE daemons on the remote nodes. You might need your own, or you might be able to piggy-back on rsh the way SGE did - all depends on the specifics of your launcher.
<br>
<p>3. ess - this contains whatever logic required by the launched daemons to identify their process name. If you have a launcher like SGE's, then the name is provided on the daemon cmd line, so no plugin is required. If you launch like LSF, which uses a batch launch method, then the daemons typically use something in their environ to determine their name - and a plugin would be required.
<br>
<p>Each framework is in its respective orte/mca/xxx directory, with each plugin appropriately named underneath that directory. You'll also find an xxx.h file in each framework that describes the API that each plugin must support - often, though, it is easier to understand that API by just using one of the existing plug-ins as an example.
<br>
<p>HTH - feel free to ask questions.
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any and all pointers will be much appreciated,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maury Feskanich
</span><br>
<span class="quotelev1">&gt; Oracle Corp.
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
<li><strong>Next message:</strong> <a href="9243.php">Tony Lam: "[OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Previous message:</strong> <a href="9241.php">Maurice Feskanich: "[OMPI devel] getting started with grid engine integration"</a>
<li><strong>In reply to:</strong> <a href="9241.php">Maurice Feskanich: "[OMPI devel] getting started with grid engine integration"</a>
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
