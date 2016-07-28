<?
$subject_val = "Re: [OMPI users] new overcommitment warning?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  6 10:52:38 2014" -->
<!-- isoreceived="20140906145238" -->
<!-- sent="Sat, 6 Sep 2014 10:52:36 -0400 (EDT)" -->
<!-- isosent="20140906145236" -->
<!-- name="Allin Cottrell" -->
<!-- email="cottrell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new overcommitment warning?" -->
<!-- id="alpine.LNX.2.03.1409061026310.884_at_wfu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A03BF1F9-A03B-4887-BA03-46DAEA35381F_at_open-mpi.org" -->
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
<strong>From:</strong> Allin Cottrell (<em>cottrell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-06 10:52:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25289.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25287.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25286.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25290.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Reply:</strong> <a href="25290.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 5 Sep 2014, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 5, 2014, at 3:34 PM, Allin Cottrell &lt;cottrell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect there is a new (to openmpi 1.8.N?) warning with respect to 
</span><br>
<span class="quotelev2">&gt;&gt; requesting a number of MPI processes greater than the number of &quot;real&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; cores on a given machine. I can provide a good deal more information is 
</span><br>
<span class="quotelev2">&gt;&gt; that's required, but can I just pose it as a question for now? Does 
</span><br>
<span class="quotelev2">&gt;&gt; anyone know of a a relevant change in the code?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason I'm asking is that I've been experimenting, on a couple of 
</span><br>
<span class="quotelev2">&gt;&gt; machines and with more than one computational problem, to see if I'm 
</span><br>
<span class="quotelev2">&gt;&gt; better off restricting the number of MPI processes to the number of 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;real&quot; or &quot;physical&quot; cores available, or if it's better to allow a 
</span><br>
<span class="quotelev2">&gt;&gt; larger number of processes up to the number of hyperthreads available 
</span><br>
<span class="quotelev2">&gt;&gt; (which is twice the number of cores on the machines I'm working on).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are going to treat hyperthreads as independent processors, then 
</span><br>
<span class="quotelev1">&gt; you should probably set the --use-hwthreads-as-cpus flag so OMPI knows 
</span><br>
<span class="quotelev1">&gt; to treat it that way
</span><br>
<p>Hmm, where would I set that? (For reference) mpiexec --version gives
<br>
<p>mpiexec (OpenRTE) 1.8.2
<br>
<p>and if I append --use-hwthreads-as-cpus to my mpiexec command I get
<br>
<p>mpiexec: Error: unknown option &quot;--use-hwthreads-as-cpus&quot;
<br>
<p>However, via trial and error I've found that these options work: either
<br>
<p>--map-by hwthread OR
<br>
--oversubscribe (not mentioned in the mpiexec man page)
<br>
<p>What's puzzling me, though, is that the use of these flags was not 
<br>
necessary when, earlier this year, I was running ompi 1.6.5. Neither is it 
<br>
necessary when running ompi 1.7.3 on a different machine. The warning 
<br>
that's printed without these flags seems to be new.
<br>
<p><span class="quotelev2">&gt;&gt; It seems to me that openmpi &gt;= 1.8 is giving me a (somewhat obscure and 
</span><br>
<span class="quotelev2">&gt;&gt; non-user friendly) warning whenever I specify to mpiexec a number of 
</span><br>
<span class="quotelev2">&gt;&gt; processes &gt; the number of &quot;real&quot; cores [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you pass along the warning? It should only give you a warning if 
</span><br>
<span class="quotelev1">&gt; the #procs &gt; #slots as you are then oversubscribed. You can turn that 
</span><br>
<span class="quotelev1">&gt; warning off by just add the oversubscribe flag to your mapping directive
</span><br>
<p>Here's what I'm seeing:
<br>
<p>&lt;quote&gt;
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Node:        waverley
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
&lt;/quote&gt;
<br>
<p>The machine in question has two cores and four threads. The thing that's 
<br>
confusing here is that I'm not aware of supplying any &quot;binding directive&quot;: 
<br>
my command line (for running on a single host) is just this:
<br>
<p>mpiexec -np &lt;N&gt; &lt;myprogram&gt; &lt;myprogram-data&gt;
<br>
<p>In fact it seems that current ompi &quot;does the right thing&quot; in respect of 
<br>
the division of labor even without the extra flags: depending on the 
<br>
nature of computation, I can get faster times with -np 4 than with -np 2 
<br>
(and not degradation). It just insists on printing this warning which I'd 
<br>
like to be able to turn off &quot;globally&quot; if possible.
<br>
<p>Allin Cottrell
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25289.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25287.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25286.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25290.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Reply:</strong> <a href="25290.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
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
