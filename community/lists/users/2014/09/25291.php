<?
$subject_val = "Re: [OMPI users] new overcommitment warning?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  6 14:00:02 2014" -->
<!-- isoreceived="20140906180002" -->
<!-- sent="Sat, 6 Sep 2014 14:00:00 -0400 (EDT)" -->
<!-- isosent="20140906180000" -->
<!-- name="Allin Cottrell" -->
<!-- email="cottrell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new overcommitment warning?" -->
<!-- id="alpine.LNX.2.03.1409061339420.884_at_wfu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDA6D966-FFFE-45B9-BA4E-A073CF11DF69_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-09-06 14:00:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25292.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Previous message:</strong> <a href="25290.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>In reply to:</strong> <a href="25290.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25292.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Reply:</strong> <a href="25292.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 6 Sep 2014, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 6, 2014, at 7:52 AM, Allin Cottrell &lt;cottrell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 5 Sep 2014, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 5, 2014, at 3:34 PM, Allin Cottrell &lt;cottrell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suspect there is a new (to openmpi 1.8.N?) warning with respect to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requesting a number of MPI processes greater than the number of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;real&quot; cores on a given machine. [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are going to treat hyperthreads as independent processors, then 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you should probably set the --use-hwthreads-as-cpus flag so OMPI knows 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to treat it that way
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, where would I set that? (For reference) mpiexec --version gives
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec (OpenRTE) 1.8.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and if I append --use-hwthreads-as-cpus to my mpiexec command I get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec: Error: unknown option &quot;--use-hwthreads-as-cpus&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, via trial and error I've found that these options work: either
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --map-by hwthread OR
</span><br>
<span class="quotelev2">&gt;&gt; --oversubscribe (not mentioned in the mpiexec man page)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My apologies - the correct spelling is  --use-hwthread-cpus
</span><br>
<p>OK, thanks.
<br>
<p><span class="quotelev2">&gt;&gt; What's puzzling me, though, is that the use of these flags was not 
</span><br>
<span class="quotelev2">&gt;&gt; necessary when, earlier this year, I was running ompi 1.6.5. Neither is 
</span><br>
<span class="quotelev2">&gt;&gt; it necessary when running ompi 1.7.3 on a different machine. The 
</span><br>
<span class="quotelev2">&gt;&gt; warning that's printed without these flags seems to be new.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The binding code changed during the course of the 1.7 series to provide 
</span><br>
<span class="quotelev1">&gt; more fine-controlled options
</span><br>
<p>Again, thanks for the info.
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; It seems to me that openmpi &gt;= 1.8 is giving me a (somewhat obscure 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and non-user friendly) warning whenever I specify to mpiexec a number 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of processes &gt; the number of &quot;real&quot; cores [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you pass along the warning? It should only give you a warning if 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the #procs &gt; #slots as you are then oversubscribed. You can turn that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning off by just add the oversubscribe flag to your mapping 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directive
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's what I'm seeing:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;quote&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Bind to:     CORE
</span><br>
<span class="quotelev2">&gt;&gt;   Node:        waverley
</span><br>
<span class="quotelev2">&gt;&gt;   #processes:  2
</span><br>
<span class="quotelev2">&gt;&gt;   #cpus:       1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/quote&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The machine in question has two cores and four threads. The thing 
</span><br>
<span class="quotelev2">&gt;&gt; that's confusing here is that I'm not aware of supplying any &quot;binding 
</span><br>
<span class="quotelev2">&gt;&gt; directive&quot;: my command line (for running on a single host) is just 
</span><br>
<span class="quotelev2">&gt;&gt; this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np &lt;N&gt; &lt;myprogram&gt; &lt;myprogram-data&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You shouldn't be getting that warning if you aren't specifying a binding 
</span><br>
<span class="quotelev1">&gt; option, so it looks like a bug to me. I'll check and see what's going 
</span><br>
<span class="quotelev1">&gt; on. You might want to check, however, that you don't have a binding 
</span><br>
<span class="quotelev1">&gt; directive hidden in your environment or default MCA param file.
</span><br>
<p>I don't think that's the case: the only mca-params.conf file on my system 
<br>
is the default /etc/openmpi/openmpi-mca-params.conf installed by Arch, 
<br>
which is empty apart from comments, and &quot;set | grep MCA&quot; doesn't produce 
<br>
anything.
<br>
<p><span class="quotelev1">&gt; Meantime, just use the oversubscribe or overload-allowed options to turn 
</span><br>
<span class="quotelev1">&gt; it off. You can put those in the default MCA param file if you don't 
</span><br>
<span class="quotelev1">&gt; want to add it to the environment or cmd line. The MCA params would be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rmaps_base_oversubscribe=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to bind the procs to cores, but allow two procs to share the 
</span><br>
<span class="quotelev1">&gt; core (each will be bound to both hyperthreads): 
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_hwloc_base_binding_policy=core:overload
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to bind the procs to the hyperthreads (since one proc will 
</span><br>
<span class="quotelev1">&gt; be bound to a hypterthread, no overloading will occur): 
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_hwloc_base_use_hwthreads_as_cpus=1 
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_hwloc_base_binding_policy=hwthread
</span><br>
<p>Thanks, that's all very useful. One more question: how far back in ompi 
<br>
versions do the relevant mpiexec flags go?
<br>
<p>I ask because the (econometrics) program I work on has a facility for 
<br>
semi-automating use of MPI, which includes formulating a suitable mpiexec 
<br>
call on behalf of the user, and I'm wondering if --oversubscribe and/or 
<br>
--use-hwthread-cpus will &quot;just work&quot;, or might choke earlier versions of
<br>
mpiexec.
<br>
<p>Allin Cottrell
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25292.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Previous message:</strong> <a href="25290.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>In reply to:</strong> <a href="25290.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25292.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Reply:</strong> <a href="25292.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
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
