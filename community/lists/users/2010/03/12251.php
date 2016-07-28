<?
$subject_val = "Re: [OMPI users] Option to use only 7 cores out of 8 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 13:03:47 2010" -->
<!-- isoreceived="20100304180347" -->
<!-- sent="Thu, 04 Mar 2010 18:02:54 +0000" -->
<!-- isosent="20100304180254" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Option to use only 7 cores out of 8 on each node" -->
<!-- id="873a0gge29.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA9640D0AF2F441B_at_CRATUS.ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Option to use only 7 cores out of 8 on each node<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 13:02:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12252.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12250.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12207.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Addepalli, Srirangam V&quot; &lt;srirangam.v.addepalli_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; It works after creating a new pe and even from the command prompt with
</span><br>
<span class="quotelev1">&gt; out using SGE.
</span><br>
<p>You shouldn't need anything special -- I don't.  (It's common to run,
<br>
say, one process per core for benchmarking.)  Running
<br>
<p>&nbsp;&nbsp;mpirun -tag-output -np 14 -npernode 7 hostname
<br>
<p>in 16 slots in the following PE (which confines the run to our 8-core
<br>
nodes) it shows 7 processes on each of 2 nodes.  The nodes have
<br>
exclusive access for MPI jobs, but I don't think that's relevant.
<br>
<p>&nbsp;&nbsp;pe_name            openmpi-8
<br>
&nbsp;&nbsp;slots              999
<br>
&nbsp;&nbsp;user_lists         NONE
<br>
&nbsp;&nbsp;xuser_lists        NONE
<br>
&nbsp;&nbsp;start_proc_args    /bin/true
<br>
&nbsp;&nbsp;stop_proc_args     /bin/true
<br>
&nbsp;&nbsp;allocation_rule    8
<br>
&nbsp;&nbsp;control_slaves     TRUE
<br>
&nbsp;&nbsp;job_is_first_task  FALSE
<br>
&nbsp;&nbsp;urgency_slots      min
<br>
&nbsp;&nbsp;accounting_summary FALSE
<br>
<p>In this case, you'd get the same effect allocating processes -bynode as
<br>
using -npernode.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12252.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12250.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12207.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
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
