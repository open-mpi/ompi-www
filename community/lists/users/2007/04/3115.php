<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 22 19:26:05 2007" -->
<!-- isoreceived="20070422232605" -->
<!-- sent="Sun, 22 Apr 2007 16:25:52 -0700 (PDT)" -->
<!-- isosent="20070422232552" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="[OMPI users] How do you switch off paffinity?" -->
<!-- id="Pine.GSO.4.64.0704221620300.9303_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DD36980B-965F-4DEF-9F91-0786A60F26EA_at_cisco.com" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-22 19:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3116.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>In reply to:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3116.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3116.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using a lateish SVN, 1.3a1r14155 (circa April 1st), on a SuSE SLES10
<br>
opteron system which has 2 dual core opterons per node, I can't seem
<br>
to disable processor affinity? I have a small test program which call
<br>
something else to detect CPU binding and whatever I've done it's still
<br>
bound?
<br>
<p>tried:
<br>
<p>--mca mpi_paffinity_processor -1
<br>
--mca mpi_paffinity_processor -99
<br>
--mca mpi_paffinity_processor fred (desperation - still bound!)
<br>
<p>Any help?
<br>
<p>Regards,
<br>
Mostyn
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3116.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>In reply to:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3116.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3116.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
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
