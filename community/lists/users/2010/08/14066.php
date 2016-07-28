<?
$subject_val = "Re: [OMPI users] padb and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 17 16:43:30 2010" -->
<!-- isoreceived="20100817204330" -->
<!-- sent="Tue, 17 Aug 2010 22:43:18 +0200" -->
<!-- isosent="20100817204318" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] padb and openmpi" -->
<!-- id="C698FD39-7408-4E68-95F8-948A5FC3FB8D_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C6AE0E3.8040403_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] padb and openmpi<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-17 16:43:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14067.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14065.php">Steve Wise: "[OMPI users] padb and openmpi"</a>
<li><strong>In reply to:</strong> <a href="14065.php">Steve Wise: "[OMPI users] padb and openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 17 Aug 2010, at 21:20, Steve Wise wrote:
<br>
<span class="quotelev1">&gt; [ompi_at_hpc-hn1 ~]$ padb  --show-jobs --config-option rmgr=orte
</span><br>
<span class="quotelev1">&gt; 65427
</span><br>
<span class="quotelev1">&gt; [ompi_at_hpc-hn1 ~]$ padb --all --proc-summary --config-option rmgr=orte
</span><br>
<span class="quotelev1">&gt; Warning, failed to locate ranks [0-3]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas on what I am doing wrong?
</span><br>
<p>Nothing that springs to mind, you don't appear to be doing anything unusual.  Could you try the same command and add &quot;--debug all=all&quot; to the command line and send me the output, I'll see if I can see anything.  One quick thing to check is that the ompi-ps command is giving the correct output, this should contain the hostname and pids of each of your processes, you could check this is correct and send me the output as well to check the format hasn't changed again.
<br>
<p>The 3.2 beta release of padb is proving very good, it's purely time that's stopped me turning the handle and making it a fully fledged release so you should try this to see if it makes a difference to your problem.  The website for padb (containing links to it's own mailing lists) is in my signature.
<br>
<p>Ashley (the padb developer)
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14067.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14065.php">Steve Wise: "[OMPI users] padb and openmpi"</a>
<li><strong>In reply to:</strong> <a href="14065.php">Steve Wise: "[OMPI users] padb and openmpi"</a>
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
