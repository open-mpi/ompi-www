<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 15:51:38 2007" -->
<!-- isoreceived="20070806195138" -->
<!-- sent="Mon, 6 Aug 2007 13:51:30 -0600" -->
<!-- isosent="20070806195130" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] Trunk borked?" -->
<!-- id="44DEAC3A-D193-4683-B842-DF2C2D3B103B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2DCBB3B.A5B3%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 15:51:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2087.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Previous message:</strong> <a href="2085.php">Ralph H Castain: "[OMPI devel] Trunk borked?"</a>
<li><strong>In reply to:</strong> <a href="2085.php">Ralph H Castain: "[OMPI devel] Trunk borked?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2087.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Reply:</strong> <a href="2087.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 6, 2007, at 11:49 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; 1. if everything is being done on localhost, I do not see any of  
</span><br>
<span class="quotelev1">&gt; the IO from
</span><br>
<span class="quotelev1">&gt; the child process. Mpirun executes and completes cleanly, however.  
</span><br>
<span class="quotelev1">&gt; Because,
</span><br>
<span class="quotelev1">&gt; the spawn'd child terminates so quickly, I haven't been able to  
</span><br>
<span class="quotelev1">&gt; positively
</span><br>
<span class="quotelev1">&gt; confirm it is actually running - though I have some indication that  
</span><br>
<span class="quotelev1">&gt; it is.
</span><br>
<p>This is probably my fault somehow; I can look into this but not  
<br>
immediately.  I'm guessing this is related to the IOF fix that I put  
<br>
in last week sometime.  If you can deal without io from the  
<br>
COMM_SPAWN children for a little while, I can look at it in a few  
<br>
days...
<br>
<p><span class="quotelev1">&gt; 2. if running on multiple hosts, I see the output from the child  
</span><br>
<span class="quotelev1">&gt; processes,
</span><br>
<span class="quotelev1">&gt; but mpirun &quot;hangs&quot; in MPI_Comm_disconnect. A ctrl-C is able to kill  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; entire job.
</span><br>
<p>I can't comment on this one...
<br>
<p><span class="quotelev1">&gt; Any ideas on what might have happened? This was all working not  
</span><br>
<span class="quotelev1">&gt; that long
</span><br>
<span class="quotelev1">&gt; ago...can't swear to an r-level at the moment, but am hoping  
</span><br>
<span class="quotelev1">&gt; someone has an
</span><br>
<span class="quotelev1">&gt; idea before I start having to blindly work backwards to find out  
</span><br>
<span class="quotelev1">&gt; what broke
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2087.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Previous message:</strong> <a href="2085.php">Ralph H Castain: "[OMPI devel] Trunk borked?"</a>
<li><strong>In reply to:</strong> <a href="2085.php">Ralph H Castain: "[OMPI devel] Trunk borked?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2087.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Reply:</strong> <a href="2087.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
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
