<?
$subject_val = "Re: [OMPI users] new overcommitment warning?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  6 12:48:51 2014" -->
<!-- isoreceived="20140906164851" -->
<!-- sent="Sat, 6 Sep 2014 09:48:24 -0700" -->
<!-- isosent="20140906164824" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new overcommitment warning?" -->
<!-- id="BDA6D966-FFFE-45B9-BA4E-A073CF11DF69_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LNX.2.03.1409061026310.884_at_wfu.edu" -->
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
<strong>Date:</strong> 2014-09-06 12:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25291.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Previous message:</strong> <a href="25289.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>In reply to:</strong> <a href="25288.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25291.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Reply:</strong> <a href="25291.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 6, 2014, at 7:52 AM, Allin Cottrell &lt;cottrell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 5 Sep 2014, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 5, 2014, at 3:34 PM, Allin Cottrell &lt;cottrell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect there is a new (to openmpi 1.8.N?) warning with respect to requesting a number of MPI processes greater than the number of &quot;real&quot; cores on a given machine. I can provide a good deal more information is that's required, but can I just pose it as a question for now? Does anyone know of a a relevant change in the code?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason I'm asking is that I've been experimenting, on a couple of machines and with more than one computational problem, to see if I'm better off restricting the number of MPI processes to the number of &quot;real&quot; or &quot;physical&quot; cores available, or if it's better to allow a larger number of processes up to the number of hyperthreads available (which is twice the number of cores on the machines I'm working on).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are going to treat hyperthreads as independent processors, then you should probably set the --use-hwthreads-as-cpus flag so OMPI knows to treat it that way
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm, where would I set that? (For reference) mpiexec --version gives
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec (OpenRTE) 1.8.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and if I append --use-hwthreads-as-cpus to my mpiexec command I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec: Error: unknown option &quot;--use-hwthreads-as-cpus&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, via trial and error I've found that these options work: either
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --map-by hwthread OR
</span><br>
<span class="quotelev1">&gt; --oversubscribe (not mentioned in the mpiexec man page)
</span><br>
<p>My apologies - the correct spelling is  --use-hwthread-cpus
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's puzzling me, though, is that the use of these flags was not necessary when, earlier this year, I was running ompi 1.6.5. Neither is it necessary when running ompi 1.7.3 on a different machine. The warning that's printed without these flags seems to be new.
</span><br>
<p>The binding code changed during the course of the 1.7 series to provide more fine-controlled options
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems to me that openmpi &gt;= 1.8 is giving me a (somewhat obscure and non-user friendly) warning whenever I specify to mpiexec a number of processes &gt; the number of &quot;real&quot; cores [...]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you pass along the warning? It should only give you a warning if the #procs &gt; #slots as you are then oversubscribed. You can turn that warning off by just add the oversubscribe flag to your mapping directive
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's what I'm seeing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;quote&gt;
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;   Node:        waverley
</span><br>
<span class="quotelev1">&gt;   #processes:  2
</span><br>
<span class="quotelev1">&gt;   #cpus:       1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; &lt;/quote&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The machine in question has two cores and four threads. The thing that's confusing here is that I'm not aware of supplying any &quot;binding directive&quot;: my command line (for running on a single host) is just this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -np &lt;N&gt; &lt;myprogram&gt; &lt;myprogram-data&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In fact it seems that current ompi &quot;does the right thing&quot; in respect of the division of labor even without the extra flags: depending on the nature of computation, I can get faster times with -np 4 than with -np 2 (and not degradation). It just insists on printing this warning which I'd like to be able to turn off &quot;globally&quot; if possible.
</span><br>
<p>You shouldn't be getting that warning if you aren't specifying a binding option, so it looks like a bug to me. I'll check and see what's going on. You might want to check, however, that you don't have a binding directive hidden in your environment or default MCA param file.
<br>
<p>Meantime, just use the oversubscribe or overload-allowed options to turn it off. You can put those in the default MCA param file if you don't want to add it to the environment or cmd line. The MCA params would be:
<br>
<p>OMPI_MCA_rmaps_base_oversubscribe=1
<br>
<p>If you want to bind the procs to cores, but allow two procs to share the core (each will be bound to both hyperthreads):
<br>
OMPI_MCA_hwloc_base_binding_policy=core:overload
<br>
<p>If you want to bind the procs to the hyperthreads (since one proc will be bound to a hypterthread, no overloading will occur):
<br>
OMPI_MCA_hwloc_base_use_hwthreads_as_cpus=1
<br>
OMPI_MCA_hwloc_base_binding_policy=hwthread
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Allin Cottrell
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25288.php">http://www.open-mpi.org/community/lists/users/2014/09/25288.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25290/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25291.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Previous message:</strong> <a href="25289.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>In reply to:</strong> <a href="25288.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25291.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Reply:</strong> <a href="25291.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
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
