<?
$subject_val = "Re: [OMPI users] Thread as MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 04:19:56 2010" -->
<!-- isoreceived="20100921081956" -->
<!-- sent="Tue, 21 Sep 2010 09:19:49 +0100" -->
<!-- isosent="20100921081949" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Thread as MPI process" -->
<!-- id="E8227994-F503-4E35-9943-D29FB57E18E3_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimW30_fSYgn3pDmtLR7SeBdu7W7HkBGi2x72b7J_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Thread as MPI process<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 04:19:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14250.php">jody: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14247.php">Mikael Lavoie: "[OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Reply:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Reply:</strong> <a href="14253.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 20 Sep 2010, at 22:24, Mikael Lavoie wrote:
<br>
<span class="quotelev1">&gt; I wanna know if it exist a implementation that permit to run a single host process on the master of the cluster, that will then spawn 1 process per -np X defined thread at the host specified in the host list. The host will then act as a syncronized sender/collecter of the work done.
</span><br>
<p>I don't fully understand you explanation either but I may be able to help clear up what you are asking for:
<br>
<p>If you mean &quot;pthreads&quot; or &quot;linux threads&quot; then no, you cannot have different threads on different nodes under any programming paradigm.
<br>
<p>However if you mean &quot;execution threads&quot; or in MPI parlance &quot;ranks&quot; then yes, under OpenMPI each &quot;rank&quot; will be a separate process on one of the nodes in the host list, as Jody says look at MPI_Comm_Spawn for this.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14250.php">jody: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14247.php">Mikael Lavoie: "[OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Reply:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Reply:</strong> <a href="14253.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
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
