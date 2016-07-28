<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 18:37:18 2009" -->
<!-- isoreceived="20090323223718" -->
<!-- sent="Mon, 23 Mar 2009 16:37:09 -0600" -->
<!-- isosent="20090323223709" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="3484F8E1-96BF-4836-AC2F-F74666A4C051_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="16453513eaf3eb897afa810de17b5fa8_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Collective operations and synchronization<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 18:37:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8560.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8558.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8558.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8560.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8560.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think perhaps you folks are all caught up a tad too much in the  
<br>
standard and not reading the intent of someone's question... :-)
<br>
<p>I believe the original question was concerned with ensuring that all  
<br>
procs had completed MPI_Allreduce before his algorithm attempted other  
<br>
operations. As you folks know, procs can leave MPI_Allreduce at  
<br>
significantly different times. Using an MPI_Barrier after  
<br>
MPI_Allreduce would accomplish the questioner's objective.
<br>
<p>Whether or not the questioner's particular program really -needs- to  
<br>
do that is another matter - one I personally wouldn't attempt to  
<br>
answer without knowing a lot more about what that next step after  
<br>
MPI_Allreduce does.
<br>
<p><p>On Mar 23, 2009, at 3:49 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 23 Mar 2009, at 21:11, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Just one point to emphasize - Eugene said it, but many times people  
</span><br>
<span class="quotelev2">&gt;&gt; don't fully grasp the implication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On an MPI_Allreduce, the algorithm requires that all processes - 
</span><br>
<span class="quotelev2">&gt;&gt; enter- the call before anyone can exit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It does -not- require that they all exit at the same time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So if you want to synchronize on the -exit-, as your question  
</span><br>
<span class="quotelev2">&gt;&gt; indicated, then you must add the MPI_Barrier as you describe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All MPI_Barrier requires is that all processes enter the call before  
</span><br>
<span class="quotelev1">&gt; anyone can exit, I'm not sure that &quot;synchronising on exit&quot; has any  
</span><br>
<span class="quotelev1">&gt; particular meaning at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Putting a MPI_Barrier call immediatly after a MPI_Allreduce call  
</span><br>
<span class="quotelev1">&gt; would be superfluous.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8560.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8558.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8558.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8560.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8560.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
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
