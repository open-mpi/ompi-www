<?
$subject_val = "Re: [OMPI users] openMPI installation on front-end and worker nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 11:10:25 2012" -->
<!-- isoreceived="20120222161025" -->
<!-- sent="Wed, 22 Feb 2012 11:10:18 -0500" -->
<!-- isosent="20120222161018" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI installation on front-end and worker nodes" -->
<!-- id="97E4346A-840E-4534-BD51-D4716D068695_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9C2EA2B8-267F-42C5-8F7D-263899FA6213_at_enea.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI installation on front-end and worker nodes<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 11:10:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18552.php">Jeremy: "[OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18550.php">Rob Latham: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>In reply to:</strong> <a href="18548.php">Salvatore Podda: "[OMPI users]  openMPI installation on front-end and worker nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Salvatore,
<br>
<p>Please see my comment inline.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More generally, in the case of a front-end nodes with a processors definitively different from 
</span><br>
<span class="quotelev1">&gt; worker nodes (same firm i.e.Intel) can openMPI applications compiled on one run correctly
</span><br>
<span class="quotelev1">&gt; on the others?
</span><br>
<p>It is possible to come up with a set of gcc flags that generate a &quot;generic&quot; binary for both systems. The problem is that the generic code would not be optimal for backend nodes. As a result it may effect on applications performance.
<br>
<p>We had a similar setup issues on our platform as well. As a work around, we compiled two version of the code and merged them to single install directory.
<br>
<p>Regards,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18552.php">Jeremy: "[OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18550.php">Rob Latham: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>In reply to:</strong> <a href="18548.php">Salvatore Podda: "[OMPI users]  openMPI installation on front-end and worker nodes"</a>
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
