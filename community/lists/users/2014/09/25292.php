<?
$subject_val = "Re: [OMPI users] new overcommitment warning?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  6 14:18:01 2014" -->
<!-- isoreceived="20140906181801" -->
<!-- sent="Sat, 6 Sep 2014 11:17:35 -0700" -->
<!-- isosent="20140906181735" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new overcommitment warning?" -->
<!-- id="FE64F55D-C6A0-481B-8F0B-6F92A09E0FE5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LNX.2.03.1409061339420.884_at_wfu.edu" -->
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
<strong>Date:</strong> 2014-09-06 14:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25293.php">Gustavo Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25291.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>In reply to:</strong> <a href="25291.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 6, 2014, at 11:00 AM, Allin Cottrell &lt;cottrell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sat, 6 Sep 2014, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 6, 2014, at 7:52 AM, Allin Cottrell &lt;cottrell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 5 Sep 2014, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 5, 2014, at 3:34 PM, Allin Cottrell &lt;cottrell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I suspect there is a new (to openmpi 1.8.N?) warning with respect to requesting a number of MPI processes greater than the number of &quot;real&quot; cores on a given machine. [...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you are going to treat hyperthreads as independent processors, then you should probably set the --use-hwthreads-as-cpus flag so OMPI knows to treat it that way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmm, where would I set that? (For reference) mpiexec --version gives
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec (OpenRTE) 1.8.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and if I append --use-hwthreads-as-cpus to my mpiexec command I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec: Error: unknown option &quot;--use-hwthreads-as-cpus&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, via trial and error I've found that these options work: either
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --map-by hwthread OR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --oversubscribe (not mentioned in the mpiexec man page)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My apologies - the correct spelling is  --use-hwthread-cpus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What's puzzling me, though, is that the use of these flags was not necessary when, earlier this year, I was running ompi 1.6.5. Neither is it necessary when running ompi 1.7.3 on a different machine. The warning that's printed without these flags seems to be new.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The binding code changed during the course of the 1.7 series to provide more fine-controlled options
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, thanks for the info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It seems to me that openmpi &gt;= 1.8 is giving me a (somewhat obscure and non-user friendly) warning whenever I specify to mpiexec a number of processes &gt; the number of &quot;real&quot; cores [...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you pass along the warning? It should only give you a warning if the #procs &gt; #slots as you are then oversubscribed. You can turn that warning off by just add the oversubscribe flag to your mapping directive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's what I'm seeing:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;quote&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Bind to:     CORE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Node:        waverley
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #processes:  2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #cpus:       1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/quote&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The machine in question has two cores and four threads. The thing that's confusing here is that I'm not aware of supplying any &quot;binding directive&quot;: my command line (for running on a single host) is just this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np &lt;N&gt; &lt;myprogram&gt; &lt;myprogram-data&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You shouldn't be getting that warning if you aren't specifying a binding option, so it looks like a bug to me. I'll check and see what's going on. You might want to check, however, that you don't have a binding directive hidden in your environment or default MCA param file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think that's the case: the only mca-params.conf file on my system is the default /etc/openmpi/openmpi-mca-params.conf installed by Arch, which is empty apart from comments, and &quot;set | grep MCA&quot; doesn't produce anything.
</span><br>
<p>Okay - I've replicated the bug here, so I'll address it for 1.8.3. Thanks for letting me know about it!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Meantime, just use the oversubscribe or overload-allowed options to turn it off. You can put those in the default MCA param file if you don't want to add it to the environment or cmd line. The MCA params would be:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rmaps_base_oversubscribe=1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you want to bind the procs to cores, but allow two procs to share the core (each will be bound to both hyperthreads): OMPI_MCA_hwloc_base_binding_policy=core:overload
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you want to bind the procs to the hyperthreads (since one proc will be bound to a hypterthread, no overloading will occur): OMPI_MCA_hwloc_base_use_hwthreads_as_cpus=1 OMPI_MCA_hwloc_base_binding_policy=hwthread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, that's all very useful. One more question: how far back in ompi versions do the relevant mpiexec flags go?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ask because the (econometrics) program I work on has a facility for semi-automating use of MPI, which includes formulating a suitable mpiexec call on behalf of the user, and I'm wondering if --oversubscribe and/or --use-hwthread-cpus will &quot;just work&quot;, or might choke earlier versions of
</span><br>
<span class="quotelev1">&gt; mpiexec.
</span><br>
<p>At least 1.7.4 for the hwthread-cpus - maybe a little further back then that, but definitely not into the 1.6 series.
<br>
<p>The -oversubscribe flag goes all the way back to the beginning release.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25291.php">http://www.open-mpi.org/community/lists/users/2014/09/25291.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25293.php">Gustavo Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25291.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>In reply to:</strong> <a href="25291.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
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
