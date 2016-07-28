<?
$subject_val = "Re: [OMPI users] calculation progress status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 10:58:33 2013" -->
<!-- isoreceived="20131021145833" -->
<!-- sent="Mon, 21 Oct 2013 15:58:30 +0100" -->
<!-- isosent="20131021145830" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] calculation progress status" -->
<!-- id="CADsB1iCMAUrgHYiJ5k_+G31ORb3t8y9XaJKj6ZqXNvKyUrs4pA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20131021141922.GA8180_at_neuromancer" -->
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
<strong>Subject:</strong> Re: [OMPI users] calculation progress status<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 10:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22810.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Previous message:</strong> <a href="22808.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>In reply to:</strong> <a href="22807.php">Andreas Sch&#228;fer: "Re: [OMPI users] calculation progress status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22810.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Reply:</strong> <a href="22810.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 21 October 2013 15:19, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the solution depends on the details of your code. Will all clients
</span><br>
<span class="quotelev1">&gt; send their progress updates simultaneously? Are you planning for few
</span><br>
<span class="quotelev1">&gt; or many nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For few nodes and non-simultaneous updates you could loop on the root
</span><br>
<span class="quotelev1">&gt; while receiving from MPI_ANY. Clients could send out their updates via
</span><br>
<span class="quotelev1">&gt; MPI_Isend().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're expecting many nodes, this 1-n schema will eventually
</span><br>
<span class="quotelev1">&gt; overwhelm the root node. In that case MPI_Gather() or MPI_Reduce()
</span><br>
<span class="quotelev1">&gt; will perform better. But those require all nodes to participate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Things get complicated if you want non-simultaneous updates from many
</span><br>
<span class="quotelev1">&gt; nodes...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<p><p>Thanks, currently I run a prototype with 32 mpi processes or so. But I
<br>
would deploy to a larger set later.
<br>
<p>===&gt; root process code:
<br>
I) mpi thread
<br>
1. list all n-tuples
<br>
2. split list equally for 32 processes
<br>
3. scatter
<br>
4. loop to evaluate locally f for my section of space
<br>
5. reduce
<br>
<p>II) UI thread
<br>
<p>===&gt; compute mpi process node
<br>
3. scatter list of ntuples
<br>
4. loop to evaluate locally f for my section of space
<br>
5. reduce
<br>
<p><p>The loops 4 are not naturally in sync.
<br>
Would you suggest to modify the loop to do a MPI_ISend after x iterations
<br>
(for the clients) and MPI_IRecv on the root?
<br>
<p>Thanks MM
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22809/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22810.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Previous message:</strong> <a href="22808.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>In reply to:</strong> <a href="22807.php">Andreas Sch&#228;fer: "Re: [OMPI users] calculation progress status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22810.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
<li><strong>Reply:</strong> <a href="22810.php">Andreas Schäfer: "Re: [OMPI users] calculation progress status"</a>
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
