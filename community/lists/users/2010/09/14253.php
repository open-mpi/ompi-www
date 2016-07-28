<?
$subject_val = "Re: [OMPI users] Thread as MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 05:12:00 2010" -->
<!-- isoreceived="20100921091200" -->
<!-- sent="Tue, 21 Sep 2010 11:11:43 +0200" -->
<!-- isosent="20100921091143" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Thread as MPI process" -->
<!-- id="70A425A9-A1D7-483C-989A-E9D82D222E6B_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E8227994-F503-4E35-9943-D29FB57E18E3_at_pittman.co.uk" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 05:11:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14254.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14251.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 21.09.2010 um 10:19 schrieb Ashley Pittman:
<br>
<p><span class="quotelev1">&gt; On 20 Sep 2010, at 22:24, Mikael Lavoie wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I wanna know if it exist a implementation that permit to run a single host process on the master of the cluster, that will then spawn 1 process per -np X defined thread at the host specified in the host list. The host will then act as a syncronized sender/collecter of the work done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't fully understand you explanation either but I may be able to help clear up what you are asking for:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you mean &quot;pthreads&quot; or &quot;linux threads&quot; then no, you cannot have different threads on different nodes under any programming paradigm.
</span><br>
<p>There are some efforts like <a href="http://www.kerrighed.org/wiki/index.php/Main_Page">http://www.kerrighed.org/wiki/index.php/Main_Page</a>, but for the current release the thread migration is indeed disabled.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; However if you mean &quot;execution threads&quot; or in MPI parlance &quot;ranks&quot; then yes, under OpenMPI each &quot;rank&quot; will be a separate process on one of the nodes in the host list, as Jody says look at MPI_Comm_Spawn for this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14254.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14251.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
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
