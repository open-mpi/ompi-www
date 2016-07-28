<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 12:39:58 2007" -->
<!-- isoreceived="20070502163958" -->
<!-- sent="Wed, 02 May 2007 10:39:51 -0600" -->
<!-- isosent="20070502163951" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2.1 problems" -->
<!-- id="C25E1AF7.2ADE%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="463898C7.20602_at_fysik.dtu.dk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-02 12:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3185.php">Chudin, Eugene: "[OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>Previous message:</strong> <a href="3183.php">Harald Servat: "[OMPI users] issues with peruse MSG_ARRIVED events"</a>
<li><strong>In reply to:</strong> <a href="3182.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/2/07 7:57 AM, &quot;Ole Holm Nielsen&quot; &lt;Ole.H.Nielsen_at_[hidden]&gt; wrote:
<br>
<p>&lt;snip&gt;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I'm saying is that users should be able run the same script in different
</span><br>
<span class="quotelev1">&gt; environments, they being Torque or non-Torque, without having to change
</span><br>
<span class="quotelev1">&gt; the arguments to the mpirun command.  Maybe they submit batch jobs to
</span><br>
<span class="quotelev1">&gt; our Linux/Torque cluster, or maybe they run their scripts on their own
</span><br>
<span class="quotelev1">&gt; non-Torque workstation.  The sysadmin may also reserve a set of nodes in the
</span><br>
<span class="quotelev1">&gt; Linux cluster and log in interactively (without using Torque) for test
</span><br>
<span class="quotelev1">&gt; purposes, and in this case the very same mpirun executable file will not
</span><br>
<span class="quotelev1">&gt; use the TM interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMHO, it is highly desirable that the mpirun command is robust when being run
</span><br>
<span class="quotelev1">&gt; in different ways, i.e., mpirun should accept both -np and -machinefile
</span><br>
<span class="quotelev1">&gt; under all circumstances (but preferably print a warning message if it chooses
</span><br>
<span class="quotelev1">&gt; to ignore -machinefile).
</span><br>
<p>No disagreement - we are just trying to understand why you are seeing a
<br>
problem, and trying to get enough info to see where to start debugging.
<br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, except that the above error message is totally unintelligible.
</span><br>
<span class="quotelev1">&gt; There is no conflict in this job between &quot;-np 2&quot; which refers to 2 specific
</span><br>
<span class="quotelev1">&gt; nodes allocated by Torque, and &quot;-machinefile $PBS_NODEFILE&quot; which refers
</span><br>
<span class="quotelev1">&gt; to the very same 2 nodes allocated by Torque.  It is beyond me why the
</span><br>
<span class="quotelev1">&gt; redundant but consistent mpirun node information (in the case of being run
</span><br>
<span class="quotelev1">&gt; under TM control) would cause mpirun to fail as shown above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Just to be clear: &quot;-np 2&quot; does *not* indicate &quot;run on two nodes allocated by
<br>
Torque&quot;. It only instructs us to run two processes on whatever allocation we
<br>
can find.
<br>
<p>The machinefile option instructs us to use the nodes found in that file.
<br>
There is a potential conflict here with the nodes we might find in the
<br>
environment - we are aware of that conflict. We recently had a lengthy
<br>
telecon to discuss the wide variety of conflicting requests we have received
<br>
for how to resolve the problem of both a machinefile and an allocation.
<br>
Believe it or not, there is no consistent definition for that behavior.
<br>
<p>We have arrived at some tentative resolution for that problem, but it won't
<br>
be implemented in the 1.2 code family (will wait for 1.3).
<br>
<p>Meantime, I think we have enough info to chase down why you are encountering
<br>
this message. I'm not entirely sure we will resolve it the way you would
<br>
like as it would conflict with how others want the two combined options to
<br>
behave (and we aren't smart enough to decide who is &quot;right&quot;), but we should
<br>
hopefully at least be able to generate a more intelligible error message.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3185.php">Chudin, Eugene: "[OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>Previous message:</strong> <a href="3183.php">Harald Servat: "[OMPI users] issues with peruse MSG_ARRIVED events"</a>
<li><strong>In reply to:</strong> <a href="3182.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
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
