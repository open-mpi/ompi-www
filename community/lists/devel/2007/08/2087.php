<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 16:33:40 2007" -->
<!-- isoreceived="20070806203340" -->
<!-- sent="Mon, 06 Aug 2007 14:33:31 -0600" -->
<!-- isosent="20070806203331" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] Trunk borked?" -->
<!-- id="C2DCE1BB.A5BE%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44DEAC3A-D193-4683-B842-DF2C2D3B103B_at_cisco.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 16:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2088.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2086.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>In reply to:</strong> <a href="2086.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2095.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Reply:</strong> <a href="2095.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/6/07 1:51 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 6, 2007, at 11:49 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. if everything is being done on localhost, I do not see any of
</span><br>
<span class="quotelev2">&gt;&gt; the IO from
</span><br>
<span class="quotelev2">&gt;&gt; the child process. Mpirun executes and completes cleanly, however.
</span><br>
<span class="quotelev2">&gt;&gt; Because,
</span><br>
<span class="quotelev2">&gt;&gt; the spawn'd child terminates so quickly, I haven't been able to
</span><br>
<span class="quotelev2">&gt;&gt; positively
</span><br>
<span class="quotelev2">&gt;&gt; confirm it is actually running - though I have some indication that
</span><br>
<span class="quotelev2">&gt;&gt; it is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is probably my fault somehow;
</span><br>
<p>Isn't everything??  :-)
<br>
<p><span class="quotelev1">&gt; I can look into this but not
</span><br>
<span class="quotelev1">&gt; immediately.  I'm guessing this is related to the IOF fix that I put
</span><br>
<span class="quotelev1">&gt; in last week sometime.  If you can deal without io from the
</span><br>
<span class="quotelev1">&gt; COMM_SPAWN children for a little while, I can look at it in a few
</span><br>
<span class="quotelev1">&gt; days...
</span><br>
<p>No problem, really - just wanted to ensure someone was aware of it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. if running on multiple hosts, I see the output from the child
</span><br>
<span class="quotelev2">&gt;&gt; processes,
</span><br>
<span class="quotelev2">&gt;&gt; but mpirun &quot;hangs&quot; in MPI_Comm_disconnect. A ctrl-C is able to kill
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; entire job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't comment on this one...
</span><br>
<p>Could be related - let's fix the first and see if the second goes away.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas on what might have happened? This was all working not
</span><br>
<span class="quotelev2">&gt;&gt; that long
</span><br>
<span class="quotelev2">&gt;&gt; ago...can't swear to an r-level at the moment, but am hoping
</span><br>
<span class="quotelev2">&gt;&gt; someone has an
</span><br>
<span class="quotelev2">&gt;&gt; idea before I start having to blindly work backwards to find out
</span><br>
<span class="quotelev2">&gt;&gt; what broke
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2088.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2086.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>In reply to:</strong> <a href="2086.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2095.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Reply:</strong> <a href="2095.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
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
