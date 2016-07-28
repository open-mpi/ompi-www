<?
$subject_val = "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 12:24:14 2014" -->
<!-- isoreceived="20141209172414" -->
<!-- sent="Tue, 9 Dec 2014 10:24:13 -0700" -->
<!-- isosent="20141209172413" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5" -->
<!-- id="20141209172413.GD2163_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54872DF8.8040402_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 12:24:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25938.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25936.php">Eric Chamberland: "[OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="25936.php">Eric Chamberland: "[OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25939.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25939.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing that changed between 1.6 and 1.8 is the default binding
<br>
policy. Open MPI 1.6 did not bind by default but 1.8 binds to core. You
<br>
can unset the binding policy by adding --bind-to none.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>On Tue, Dec 09, 2014 at 12:14:32PM -0500, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we were used to do oversubscribing just to do code validation in nightly
</span><br>
<span class="quotelev1">&gt; automated parallel runs of our code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just compiled openmpi 1.8.3 and launched the whole suit of
</span><br>
<span class="quotelev1">&gt; sequential/parallel tests and noticed a *major* slowdown in oversubscribed
</span><br>
<span class="quotelev1">&gt; parallel tests with 1.8.3 compared to 1.6.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, on my computer (2 cpu), a validation test of 64 processes
</span><br>
<span class="quotelev1">&gt; launched with 1.8.3 took 1500 seconds (~29 minutes) to execute, while the
</span><br>
<span class="quotelev1">&gt; very same test compiled with 1.6.5 took only 7.4 seconds!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To have this result with 1.6.5 we had to set the variable
</span><br>
<span class="quotelev1">&gt; &quot;OMPI_MCA_mpi_yield_when_idle=1&quot;, but it seems to have no effects in 1.8.3
</span><br>
<span class="quotelev1">&gt; when I launch more processes than number of core in my computer, even if it
</span><br>
<span class="quotelev1">&gt; is still mentioned to work (see
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>).
</span><br>
<span class="quotelev1">&gt; However, when I launch with fewer processes than number of core, then it is
</span><br>
<span class="quotelev1">&gt; faster without &quot;OMPI_MCA_mpi_yield_when_idle=1&quot;, which is the same behavior
</span><br>
<span class="quotelev1">&gt; in 1.6.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to launch with a host file like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; localhost slots=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but it changed nothing...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do I do wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to retrieve &quot;performances&quot; of 1.6.5 for oversubscription?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a compilation option that I have to enable in 1.8.3?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the config.log and &quot;ompi_info --all&quot; files for both versions of
</span><br>
<span class="quotelev1">&gt; mpi:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.165.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.165.log.gz</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.183.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.183.log.gz</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.165.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.165.txt.gz</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.183.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.183.txt.gz</a>
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
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25936.php">http://www.open-mpi.org/community/lists/users/2014/12/25936.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25937/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25938.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25936.php">Eric Chamberland: "[OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="25936.php">Eric Chamberland: "[OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25939.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25939.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
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
