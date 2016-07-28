<?
$subject_val = "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 07:50:51 2011" -->
<!-- isoreceived="20110927115051" -->
<!-- sent="Tue, 27 Sep 2011 07:50:41 -0400" -->
<!-- isosent="20110927115041" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB" -->
<!-- id="5D42BDD1-297C-4499-A5A3-0885475B7A41_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7F9F9215-FCED-4F75-984A-7F466E5FE740_at_enea.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 07:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17444.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Previous message:</strong> <a href="17442.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17441.php">Salvatore Podda: "[OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17454.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Reply:</strong> <a href="17454.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27, 2011, at 6:35 AM, Salvatore Podda wrote:
<br>
<p><span class="quotelev1">&gt; 	We would like to know if the ethernet interfaces play any role in the startup phase of an opempi job using InfiniBand
</span><br>
<span class="quotelev1">&gt; In this case, where we can found some literature on this topic?
</span><br>
<p>Unfortunately, there's not a lot of docs about this other than people asking questions on this list.
<br>
<p>IP is used by default during Open MPI startup.  Specifically, it is used as our &quot;out of band&quot; communication channel for things like stdin/stdout/stderr redirection, launch command relaying, process control, etc.  The OOB channel is also used by default for bootstrapping IB queue pairs.
<br>
<p>To clarify, note that these are two different things:
<br>
<p>1. the out of band (OOB) channel used for process control, std* routing, etc.
<br>
2. bootstrapping IB queue pairs
<br>
<p>You can change the IB QP bootstrapping to use the OpenFabrics RDMA communications manager (vs. our OOB channel) with the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_openib_if_cpc rdmacm ...
<br>
<p>See if that helps (although the OF RDMA CM has its own scalability issues, also associated with ARP).
<br>
<p>If your cluster is large, you might want to check out the section on our FAQ about large clusters:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=large-clusters">http://www.open-mpi.org/faq/?category=large-clusters</a>
<br>
<p>I don't think there's an entry on there yet about this, but it may also be worthwhile to try enabling the &quot;radix&quot; support; a more scalable version of our OOB channel (i.e., the tree across all the support daemons has a much larger radix and is therefore much flatter).  Los Alamos recently committed an IB UD OOB channel plugin to our development trunk and is comparing its performance to the radix tree to see if it's worthwhile.
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
<li><strong>Next message:</strong> <a href="17444.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Previous message:</strong> <a href="17442.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17441.php">Salvatore Podda: "[OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17454.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Reply:</strong> <a href="17454.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
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
