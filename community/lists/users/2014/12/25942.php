<?
$subject_val = "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 16:02:12 2014" -->
<!-- isoreceived="20141209210212" -->
<!-- sent="Tue, 9 Dec 2014 13:02:08 -0800" -->
<!-- isosent="20141209210208" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5" -->
<!-- id="189AAC24-0BCF-4148-9B21-5CCBB5D8544C_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="548741E0.5050403_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 16:02:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25943.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25941.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="25941.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25943.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25943.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#133;.well, it looks like we are doing the right thing and running unbound when oversubscribed like this. I don&#146;t have any brilliant idea why it would be running so slowly in that situation when compared with 1.6.5 - it could be that yield-when-idle is borked. I&#146;ll try to dig into that notion a bit.
<br>
<p><p><span class="quotelev1">&gt; On Dec 9, 2014, at 10:39 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I sorted and &quot;seded&quot; (cat outpout.1.00 |sed 's/default/default value/g'|sed 's/true/1/g' |sed 's/false/0/g') the output.1.00 file from:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --output-filename output -mca mpi_show_mca_params all --report-bindings -np 32 myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; between a launch with 165 vs 183.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The diff may be interesting but I can't interpret everything that is written...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The files are attached...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/09/2014 01:02 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 12/09/2014 12:24 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you provide an example cmd line you use to launch one of these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tests using 1.8.3? Some of the options changed between the 1.6 and 1.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; series, and we bind by default in 1.8 - the combination may be causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you a problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I very simply launch:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun -np 32 myprog&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the result of &quot;-mca mpi_show_mca_params all&quot; would be insightful?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 9, 2014, at 9:14 AM, Eric Chamberland
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we were used to do oversubscribing just to do code validation in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nightly automated parallel runs of our code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just compiled openmpi 1.8.3 and launched the whole suit of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sequential/parallel tests and noticed a *major* slowdown in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oversubscribed parallel tests with 1.8.3 compared to 1.6.5.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For example, on my computer (2 cpu), a validation test of 64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes launched with 1.8.3 took 1500 seconds (~29 minutes) to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; execute, while the very same test compiled with 1.6.5 took only 7.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seconds!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To have this result with 1.6.5 we had to set the variable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;OMPI_MCA_mpi_yield_when_idle=1&quot;, but it seems to have no effects in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.8.3 when I launch more processes than number of core in my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; computer, even if it is still mentioned to work (see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, when I launch with fewer processes than number of core, then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it is faster without &quot;OMPI_MCA_mpi_yield_when_idle=1&quot;, which is the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same behavior in 1.6.5.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried to launch with a host file like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but it changed nothing...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What do I do wrong?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it possible to retrieve &quot;performances&quot; of 1.6.5 for oversubscription?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a compilation option that I have to enable in 1.8.3?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here are the config.log and &quot;ompi_info --all&quot; files for both versions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of mpi:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.165.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.165.log.gz</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.183.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.183.log.gz</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.165.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.165.txt.gz</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.183.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.183.txt.gz</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25936.php">http://www.open-mpi.org/community/lists/users/2014/12/25936.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25938.php">http://www.open-mpi.org/community/lists/users/2014/12/25938.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25940.php">http://www.open-mpi.org/community/lists/users/2014/12/25940.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;output.1.00.filtre.165.sorted&gt;&lt;output.1.00.filtre.183.sorted.seded&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25943.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25941.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="25941.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25943.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25943.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
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
