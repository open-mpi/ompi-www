<?
$subject_val = "[OMPI users] openmpi 1.6.1 Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 10:28:15 2012" -->
<!-- isoreceived="20120824142815" -->
<!-- sent="Fri, 24 Aug 2012 10:28:09 -0400" -->
<!-- isosent="20120824142809" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.6.1 Questions" -->
<!-- id="2FF467A1-1600-4D3E-BC1F-8A4027CE9959_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.6.1 Questions<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 10:28:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20000.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>Previous message:</strong> <a href="19998.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20000.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>Reply:</strong> <a href="20000.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I grabbed the new OMPI 1.6.1 and ran my test that would cause a hang with 1.6.0 with low registered memory.  From reading the release notes rather than hang I would expect:
<br>
<p>* lower performance/fall back to send/receive.
<br>
* a notice of failed to allocate registered memory
<br>
<p>In my case I still get a hang, is this expected?  This is running with default registered memory limits and I do appreciate  the message that I only have 4GB of registered memory of my 48.  We will also be fixing our load to raise this value, which should make this issue moot.
<br>
<p>Honestly I think what I would want is for MPI to blow up saying &quot;can't allocate registered memory, fatal, contact your admin&quot;, rather than fall back to send/receive and just be slower.
<br>
<p>Am I reading the release notes correctly?  Is there a tunable setting to blow up rather than fallback?
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20000.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>Previous message:</strong> <a href="19998.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20000.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>Reply:</strong> <a href="20000.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
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
