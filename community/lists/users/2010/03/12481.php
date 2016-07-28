<?
$subject_val = "Re: [OMPI users] MPI_Init never returns on IA64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 15:30:09 2010" -->
<!-- isoreceived="20100330193009" -->
<!-- sent="Tue, 30 Mar 2010 15:30:04 -0400" -->
<!-- isosent="20100330193004" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init never returns on IA64" -->
<!-- id="F3C901C8-C833-449B-A985-1818D951F0F9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1269976521.4553.19.camel_at_sjackman01.phage.bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init never returns on IA64<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-30 15:30:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12482.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12480.php">Shaun Jackman: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>In reply to:</strong> <a href="12480.php">Shaun Jackman: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 30, 2010, at 3:15 PM, Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested 1.4.2a1r22893, and it does not hang in ompi_free_list_grow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hadn't noticed that the 1.4.1 installation I was using was configured
</span><br>
<span class="quotelev1">&gt; with --enable-mpi-threads. Could that have been related to this problem?
</span><br>
<p>Yes, very definitely.  IBM has been making some good progress in fixing thread-related things in 1.4.2 (and beyond).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12482.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12480.php">Shaun Jackman: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>In reply to:</strong> <a href="12480.php">Shaun Jackman: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
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
