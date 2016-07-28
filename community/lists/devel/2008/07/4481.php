<?
$subject_val = "Re: [OMPI devel] Change in hostfile behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 08:47:27 2008" -->
<!-- isoreceived="20080729124727" -->
<!-- sent="Tue, 29 Jul 2008 08:47:19 -0400" -->
<!-- isosent="20080729124719" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in hostfile behavior" -->
<!-- id="C7EB63EF-A0F5-40B6-8DF7-80C3C75E0C1D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="968FF408-7BE8-4E7B-B249-359E82D271CB_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Change in hostfile behavior<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 08:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4482.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4480.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>In reply to:</strong> <a href="4480.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 29, 2008, at 8:43 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Lenny's point is true - except for the danger of setting that mca  
</span><br>
<span class="quotelev1">&gt; param and its possible impact on ORTE daemons+mpirun - see other  
</span><br>
<span class="quotelev1">&gt; note in that regard. However, it would only be useful if the same  
</span><br>
<span class="quotelev1">&gt; user was doing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe Tim was concerned about the case where two users are  
</span><br>
<span class="quotelev1">&gt; sharing nodes. There is no good solution for that case. Two mpiruns  
</span><br>
<span class="quotelev1">&gt; done by different users that share a node and who have no knowledge  
</span><br>
<span class="quotelev1">&gt; of the other's actions will cause collision.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should probably warn about that in our FAQ or something since  
</span><br>
<span class="quotelev1">&gt; that is a fairly common use-case - only thing I can think of is to  
</span><br>
<span class="quotelev1">&gt; recommend people default to running without affinity and only set it  
</span><br>
<span class="quotelev1">&gt; when they -know- they have sole use of their nodes.
</span><br>
<p>I smell a ticket!  :-)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1425">https://svn.open-mpi.org/trac/ompi/ticket/1425</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4482.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4480.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>In reply to:</strong> <a href="4480.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
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
