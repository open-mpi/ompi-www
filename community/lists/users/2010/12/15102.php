<?
$subject_val = "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 10:56:14 2010" -->
<!-- isoreceived="20101213155614" -->
<!-- sent="Mon, 13 Dec 2010 10:56:10 -0500" -->
<!-- isosent="20101213155610" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu" -->
<!-- id="20101213105610.6231_at_web001.roc2.bluetie.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] curious behavior during wait for broadcast: 100% cpu" -->
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
<strong>Subject:</strong> Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 10:56:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15103.php">Kechagias Apostolos: "[OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Previous message:</strong> <a href="15101.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Maybe in reply to:</strong> <a href="15036.php">Hicham Mouline: "[OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15104.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
very clear, thanks very much.
<br>
&#194;&#160;
<br>
&#194;&#160;
<br>
-----Original Message-----
<br>
From: &quot;Ralph Castain&quot; [rhc_at_[hidden]]
<br>
Date: 13/12/2010 03:49 PM
<br>
To: &quot;Open MPI Users&quot; 
<br>
Subject: Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu
<br>
<p>Thanks for the link!
<br>
<p>Just to clarify for the list, my original statement is essentially correct. When calling sched_yield, we give up the remaining portion of our time slice.
<br>
<p>The issue in the kernel world centers around where to put you in the scheduling cycle once you have called sched_yield. Do you go to the end of the schedule for your priority? Do you go to the end of the schedule for all priorities? Or...where?
<br>
<p>Looks like they decided to not decide, and left several options available. Not entirely clear of the default, and they recommend we not use sched_yield and release the time some other method. We'll take this up on the developer list to see what (if anything) we want to do about it.
<br>
<p>Bottom line for users: the results remain the same. If no other process wants time, you'll continue to see near 100% utilization even if we yield because we will always poll for some time before deciding to yield.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15103.php">Kechagias Apostolos: "[OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Previous message:</strong> <a href="15101.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Maybe in reply to:</strong> <a href="15036.php">Hicham Mouline: "[OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15104.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
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
