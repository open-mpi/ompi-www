<?
$subject_val = "Re: [OMPI users] Axon BTL for OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 09:56:58 2008" -->
<!-- isoreceived="20081212145658" -->
<!-- sent="Fri, 12 Dec 2008 07:56:52 -0700" -->
<!-- isosent="20081212145652" -->
<!-- name="Marcus G. Daniels" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Axon BTL for OpenMPI?" -->
<!-- id="49427BB4.9070001_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="60D178E9-597E-4E98-88E3-AF34EB0FE5F0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Axon BTL for OpenMPI?<br>
<strong>From:</strong> Marcus G. Daniels (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 09:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7520.php">Harald Anlauf: "[OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Previous message:</strong> <a href="7518.php">Ralph Castain: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="7515.php">Jeff Squyres: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7518.php">Ralph Castain: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<span class="quotelev2">&gt;&gt; I'd like to use MPI for features like derived types, and moving 
</span><br>
<span class="quotelev2">&gt;&gt; around non-flat data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should be able to do that today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
The Axon PCIe-to-PCIe RDMA interface has a raw device and an ethernet 
<br>
device in the Linux kernel, and I can indeed using the latter as a 
<br>
workaround.   It's more overhead but not a bottleneck for my 
<br>
application. For those Roadrunner users where that cost cannot be 
<br>
tolerated, the alternative is to use another less featureful non-MPI 
<br>
library...
<br>
<p>Thanks,
<br>
<p>Marcus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7520.php">Harald Anlauf: "[OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Previous message:</strong> <a href="7518.php">Ralph Castain: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="7515.php">Jeff Squyres: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7518.php">Ralph Castain: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
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
