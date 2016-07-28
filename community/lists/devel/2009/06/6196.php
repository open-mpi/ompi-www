<?
$subject_val = "[OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 07:41:44 2009" -->
<!-- isoreceived="20090609114144" -->
<!-- sent="Tue, 9 Jun 2009 04:41:29 -0700" -->
<!-- isosent="20090609114129" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns" -->
<!-- id="198593C4-70EC-4D74-A3E7-FE7EC5230753_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="053.1ad7083e96cdbd7fc5f77f5ddb3970a8_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 07:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6197.php">Ralph Castain: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<li><strong>Previous message:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6197.php">Ralph Castain: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<li><strong>Reply:</strong> <a href="6197.php">Ralph Castain: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd be in favor of bringing this to v1.3.  Are there other  
<br>
dependencies / would it be difficult?
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;Open MPI&quot; &lt;bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: June 8, 2009 11:31:20 AM PDT
</span><br>
<span class="quotelev1">&gt; Cc: &lt;bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after  
</span><br>
<span class="quotelev1">&gt; ~120 spawns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns
</span><br>
<span class="quotelev1">&gt; ----------------------- 
</span><br>
<span class="quotelev1">&gt; +----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  jsquyres    |        Owner:  rhc
</span><br>
<span class="quotelev1">&gt;     Type:  defect      |       Status:  closed
</span><br>
<span class="quotelev1">&gt; Priority:  critical    |    Milestone:  Open MPI 1.3.4
</span><br>
<span class="quotelev1">&gt;  Version:  1.3 branch  |   Resolution:  fixed
</span><br>
<span class="quotelev1">&gt; Keywords:              |
</span><br>
<span class="quotelev1">&gt; ----------------------- 
</span><br>
<span class="quotelev1">&gt; +----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Changes (by rhc):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * status:  new =&gt; closed
</span><br>
<span class="quotelev1">&gt;   * resolution:  =&gt; fixed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This was due to a very tight loop on comm_spawn not giving enough  
</span><br>
<span class="quotelev1">&gt; time for
</span><br>
<span class="quotelev1">&gt;  the prior proc to completely terminate (and thus free its file
</span><br>
<span class="quotelev1">&gt;  descriptors) before the next proc was launched. Eventually, we  
</span><br>
<span class="quotelev1">&gt; built up a
</span><br>
<span class="quotelev1">&gt;  backlog of terminations to process and ran out of fd's.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  We introduced a check-and-delay in the code that detects we don't  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt;  enough fd's to launch another proc, and then waits a second to see if
</span><br>
<span class="quotelev1">&gt;  enough become free before aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Fixed in trunk - can see if we want to bring it to 1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1927#comment:3">https://svn.open-mpi.org/trac/ompi/ticket/1927#comment:3</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6197.php">Ralph Castain: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<li><strong>Previous message:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6197.php">Ralph Castain: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<li><strong>Reply:</strong> <a href="6197.php">Ralph Castain: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
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
