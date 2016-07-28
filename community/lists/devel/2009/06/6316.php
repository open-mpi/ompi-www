<?
$subject_val = "[OMPI devel] sm BTL flow management";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 21:40:05 2009" -->
<!-- isoreceived="20090624014005" -->
<!-- sent="Tue, 23 Jun 2009 18:40:11 -0700" -->
<!-- isosent="20090624014011" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] sm BTL flow management" -->
<!-- id="4A4183FB.20507_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] sm BTL flow management<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 21:40:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6317.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6315.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6317.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6317.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a fix for ticket 1944 working, but the broader problem is 
<br>
unpleasant.  E.g., let's say we have zillions of uncountered Bcasts or 
<br>
something.  Say, the root is repeatedly emitting sends, but never 
<br>
polling its in-coming FIFO.  Return fragments will be accumulating, the 
<br>
FIFO will be congested, pending-send queues on peer processes will be 
<br>
growing, etc.  The code now handles this (by growing the pending-send 
<br>
queues and eventually draining them, pre-1.3.2 we would also have 
<br>
handled this by growing the FIFO and using up the shared memory), but 
<br>
the whole thing is disturbing.  E.g., queues might drain only when the 
<br>
root reaches MPI_Finalize.  (Okay, unclear to me what sort of real 
<br>
application would have communications only from one process going out.)
<br>
<p>So, is this (one-way communications, e.g., repeated Bcasts) pathological 
<br>
and not worth worrying about.  Or, are other solutions worth 
<br>
considering?  E.g., I'd like to have a sending process run 
<br>
mca_btl_sm_component_progress occasionally, even if it is successfully 
<br>
completing its sends.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6317.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6315.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6317.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6317.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
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
