<?
$subject_val = "Re: [OMPI users] Problem in installing; lib files missing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 06:14:39 2010" -->
<!-- isoreceived="20101014101439" -->
<!-- sent="Thu, 14 Oct 2010 06:14:34 -0400" -->
<!-- isosent="20101014101434" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in installing; lib files missing" -->
<!-- id="AF77ECBC-DA7B-4621-B219-3E43D9FB38F4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTik4B_7gDuE2YYb95yvhbYbRddeiaO6cSoTqm77-_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in installing; lib files missing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 06:14:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14461.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14459.php">Kalin Kanov: "[OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>In reply to:</strong> <a href="14451.php">gaurav bhatnagar: "[OMPI users] Problem in installing; lib files missing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 12, 2010, at 2:04 PM, gaurav bhatnagar wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to install openmpi 1.4.1 on my cluster with linux ( RH EL 3 upd 3 ).
</span><br>
<span class="quotelev1">&gt; I want to run Ls dyna job on cluster, but it showed error as some files are missing.
</span><br>
<span class="quotelev1">&gt; I also tried to copy shared lib files from ls dyna but then open mpi stops working.
</span><br>
<p>Can you be more specific?
<br>
<p>Did you install Open MPI and LS-DYNA on every node in your cluster?  Your output files show that you installed to /usr/local, which I am *guessing* is not a network filesystem that is shared between all the nodes on your cluster.
<br>
<p>See <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>.
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
<li><strong>Next message:</strong> <a href="14461.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14459.php">Kalin Kanov: "[OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>In reply to:</strong> <a href="14451.php">gaurav bhatnagar: "[OMPI users] Problem in installing; lib files missing"</a>
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
