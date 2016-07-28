<?
$subject_val = "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 07:46:19 2009" -->
<!-- isoreceived="20090609114619" -->
<!-- sent="Tue, 9 Jun 2009 05:46:05 -0600" -->
<!-- isosent="20090609114605" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns" -->
<!-- id="D6E182FC-3E4B-4869-B7A0-59242215DA90_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="198593C4-70EC-4D74-A3E7-FE7EC5230753_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 07:46:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6198.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6196.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<li><strong>In reply to:</strong> <a href="6196.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6201.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop testfails after ~120 spawns"</a>
<li><strong>Reply:</strong> <a href="6201.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop testfails after ~120 spawns"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think it would be very hard - I would have to create a patch  
<br>
for it, but the fix is completely contained in one file and location.
<br>
<p>I would like to have someone else test it, though, before we move it  
<br>
across. It worked for me, but since it is a race condition, that isn't  
<br>
entirely convincing.
<br>
<p><p>On Jun 9, 2009, at 5:41 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I'd be in favor of bringing this to v1.3.  Are there other  
</span><br>
<span class="quotelev1">&gt; dependencies / would it be difficult?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Open MPI&quot; &lt;bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: June 8, 2009 11:31:20 AM PDT
</span><br>
<span class="quotelev2">&gt;&gt; Cc: &lt;bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails  
</span><br>
<span class="quotelev2">&gt;&gt; after ~120 spawns
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; +----------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Reporter:  jsquyres    |        Owner:  rhc
</span><br>
<span class="quotelev2">&gt;&gt;    Type:  defect      |       Status:  closed
</span><br>
<span class="quotelev2">&gt;&gt; Priority:  critical    |    Milestone:  Open MPI 1.3.4
</span><br>
<span class="quotelev2">&gt;&gt; Version:  1.3 branch  |   Resolution:  fixed
</span><br>
<span class="quotelev2">&gt;&gt; Keywords:              |
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; +----------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Changes (by rhc):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  * status:  new =&gt; closed
</span><br>
<span class="quotelev2">&gt;&gt;  * resolution:  =&gt; fixed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Comment:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was due to a very tight loop on comm_spawn not giving enough  
</span><br>
<span class="quotelev2">&gt;&gt; time for
</span><br>
<span class="quotelev2">&gt;&gt; the prior proc to completely terminate (and thus free its file
</span><br>
<span class="quotelev2">&gt;&gt; descriptors) before the next proc was launched. Eventually, we  
</span><br>
<span class="quotelev2">&gt;&gt; built up a
</span><br>
<span class="quotelev2">&gt;&gt; backlog of terminations to process and ran out of fd's.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We introduced a check-and-delay in the code that detects we don't  
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt; enough fd's to launch another proc, and then waits a second to see if
</span><br>
<span class="quotelev2">&gt;&gt; enough become free before aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fixed in trunk - can see if we want to bring it to 1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1927#comment">https://svn.open-mpi.org/trac/ompi/ticket/1927#comment</a>: 
</span><br>
<span class="quotelev2">&gt;&gt; 3&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="6198.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6196.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<li><strong>In reply to:</strong> <a href="6196.php">Jeff Squyres: "[OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop test fails after ~120 spawns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6201.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop testfails after ~120 spawns"</a>
<li><strong>Reply:</strong> <a href="6201.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop testfails after ~120 spawns"</a>
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
