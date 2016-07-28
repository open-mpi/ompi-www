<?
$subject_val = "Re: [OMPI users] new overcommitment warning?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 23:46:23 2014" -->
<!-- isoreceived="20140906034623" -->
<!-- sent="Fri, 5 Sep 2014 20:45:58 -0700" -->
<!-- isosent="20140906034558" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new overcommitment warning?" -->
<!-- id="A03BF1F9-A03B-4887-BA03-46DAEA35381F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LFD.2.03.1409051814090.8164_at_wfu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] new overcommitment warning?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-05 23:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25287.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25285.php">Brock Palen: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="25284.php">Allin Cottrell: "[OMPI users] new overcommitment warning?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25288.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Reply:</strong> <a href="25288.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2014, at 3:34 PM, Allin Cottrell &lt;cottrell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I suspect there is a new (to openmpi 1.8.N?) warning with respect to requesting a number of MPI processes greater than the number of &quot;real&quot; cores on a given machine. I can provide a good deal more information is that's required, but can I just pose it as a question for now? Does anyone know of a a relevant change in the code?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason I'm asking is that I've been experimenting, on a couple of machines and with more than one computational problem, to see if I'm better off restricting the number of MPI processes to the number of &quot;real&quot; or &quot;physical&quot; cores available, or if it's better to allow a larger number of processes up to the number of hyperthreads available (which is twice the number of cores on the machines I'm working on).
</span><br>
<p>If you are going to treat hyperthreads as independent processors, then you should probably set the --use-hwthreads-as-cpus flag so OMPI knows to treat it that way
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to me that openmpi &gt;= 1.8 is giving me a (somewhat obscure and non-user friendly) warning whenever I specify to mpiexec a number of processes &gt; the number of &quot;real&quot; cores -- even if the computation is in fact completed faster that way -- and I'd like to track down what has changed.
</span><br>
<p>Could you pass along the warning? It should only give you a warning if the #procs &gt; #slots as you are then oversubscribed. You can turn that warning off by just add the oversubscribe flag to your mapping directive
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I indicated, I'll be happy to provide more information if this is not enough to understand what I'm talking about.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Allin Cottrell
</span><br>
<span class="quotelev1">&gt; Department of Economics
</span><br>
<span class="quotelev1">&gt; Wake Forest University
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25284.php">http://www.open-mpi.org/community/lists/users/2014/09/25284.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25287.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25285.php">Brock Palen: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="25284.php">Allin Cottrell: "[OMPI users] new overcommitment warning?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25288.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Reply:</strong> <a href="25288.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
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
