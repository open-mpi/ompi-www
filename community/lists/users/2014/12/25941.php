<?
$subject_val = "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 13:39:42 2014" -->
<!-- isoreceived="20141209183942" -->
<!-- sent="Tue, 09 Dec 2014 13:39:28 -0500" -->
<!-- isosent="20141209183928" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5" -->
<!-- id="548741E0.5050403_at_giref.ulaval.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5487391F.1000205_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 13:39:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25942.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25940.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="25940.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25942.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25942.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>I sorted and &quot;seded&quot; (cat outpout.1.00 |sed 's/default/default 
<br>
value/g'|sed 's/true/1/g' |sed 's/false/0/g') the output.1.00 file from:
<br>
<p>mpirun --output-filename output -mca mpi_show_mca_params all 
<br>
--report-bindings -np 32 myprog
<br>
<p>between a launch with 165 vs 183.
<br>
<p>The diff may be interesting but I can't interpret everything that is 
<br>
written...
<br>
<p>The files are attached...
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>On 12/09/2014 01:02 PM, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; On 12/09/2014 12:24 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you provide an example cmd line you use to launch one of these
</span><br>
<span class="quotelev2">&gt;&gt; tests using 1.8.3? Some of the options changed between the 1.6 and 1.8
</span><br>
<span class="quotelev2">&gt;&gt; series, and we bind by default in 1.8 - the combination may be causing
</span><br>
<span class="quotelev2">&gt;&gt; you a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I very simply launch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -np 32 myprog&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe the result of &quot;-mca mpi_show_mca_params all&quot; would be insightful?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 9, 2014, at 9:14 AM, Eric Chamberland
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we were used to do oversubscribing just to do code validation in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly automated parallel runs of our code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just compiled openmpi 1.8.3 and launched the whole suit of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sequential/parallel tests and noticed a *major* slowdown in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oversubscribed parallel tests with 1.8.3 compared to 1.6.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, on my computer (2 cpu), a validation test of 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes launched with 1.8.3 took 1500 seconds (~29 minutes) to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execute, while the very same test compiled with 1.6.5 took only 7.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seconds!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To have this result with 1.6.5 we had to set the variable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;OMPI_MCA_mpi_yield_when_idle=1&quot;, but it seems to have no effects in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.8.3 when I launch more processes than number of core in my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computer, even if it is still mentioned to work (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when I launch with fewer processes than number of core, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is faster without &quot;OMPI_MCA_mpi_yield_when_idle=1&quot;, which is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same behavior in 1.6.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to launch with a host file like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; localhost slots=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but it changed nothing...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What do I do wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible to retrieve &quot;performances&quot; of 1.6.5 for oversubscription?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a compilation option that I have to enable in 1.8.3?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are the config.log and &quot;ompi_info --all&quot; files for both versions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of mpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.165.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.165.log.gz</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.183.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.183.log.gz</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.165.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.165.txt.gz</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.183.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.183.txt.gz</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25936.php">http://www.open-mpi.org/community/lists/users/2014/12/25936.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25938.php">http://www.open-mpi.org/community/lists/users/2014/12/25938.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25940.php">http://www.open-mpi.org/community/lists/users/2014/12/25940.php</a>
</span><br>
<p><p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25941/output.1.00.filtre.165.sorted">output.1.00.filtre.165.sorted</a>
</ul>
<!-- attachment="output.1.00.filtre.165.sorted" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25941/output.1.00.filtre.183.sorted.seded">output.1.00.filtre.183.sorted.seded</a>
</ul>
<!-- attachment="output.1.00.filtre.183.sorted.seded" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25942.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25940.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="25940.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25942.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25942.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
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
