<?
$subject_val = "[OMPI users] Oversubscribing in 1.8.3 vs 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 12:14:45 2014" -->
<!-- isoreceived="20141209171445" -->
<!-- sent="Tue, 09 Dec 2014 12:14:32 -0500" -->
<!-- isosent="20141209171432" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] Oversubscribing in 1.8.3 vs 1.6.5" -->
<!-- id="54872DF8.8040402_at_giref.ulaval.ca" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 12:14:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25937.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25935.php">Ralph Castain: "Re: [OMPI users] open mpi and MLX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25937.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25937.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25938.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>we were used to do oversubscribing just to do code validation in nightly 
<br>
automated parallel runs of our code.
<br>
<p>I just compiled openmpi 1.8.3 and launched the whole suit of 
<br>
sequential/parallel tests and noticed a *major* slowdown in 
<br>
oversubscribed parallel tests with 1.8.3 compared to 1.6.5.
<br>
<p>For example, on my computer (2 cpu), a validation test of 64 processes 
<br>
launched with 1.8.3 took 1500 seconds (~29 minutes) to execute, while 
<br>
the very same test compiled with 1.6.5 took only 7.4 seconds!
<br>
<p>To have this result with 1.6.5 we had to set the variable 
<br>
&quot;OMPI_MCA_mpi_yield_when_idle=1&quot;, but it seems to have no effects in 
<br>
1.8.3 when I launch more processes than number of core in my computer, 
<br>
even if it is still mentioned to work (see 
<br>
<a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>). However, 
<br>
when I launch with fewer processes than number of core, then it is 
<br>
faster without &quot;OMPI_MCA_mpi_yield_when_idle=1&quot;, which is the same 
<br>
behavior in 1.6.5.
<br>
<p>I tried to launch with a host file like this:
<br>
<p>localhost slots=2
<br>
<p>but it changed nothing...
<br>
<p>What do I do wrong?
<br>
<p>Is it possible to retrieve &quot;performances&quot; of 1.6.5 for oversubscription?
<br>
<p>Is there a compilation option that I have to enable in 1.8.3?
<br>
<p>Here are the config.log and &quot;ompi_info --all&quot; files for both versions of 
<br>
mpi:
<br>
<p><a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.165.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.165.log.gz</a>
<br>
<a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.183.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.183.log.gz</a>
<br>
<a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.165.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.165.txt.gz</a>
<br>
<a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.183.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.183.txt.gz</a>
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25937.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25935.php">Ralph Castain: "Re: [OMPI users] open mpi and MLX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25937.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25937.php">Nathan Hjelm: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25938.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
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
