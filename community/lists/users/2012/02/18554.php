<?
$subject_val = "Re: [OMPI users] openMPI installation on front-end and worker nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 23 13:04:19 2012" -->
<!-- isoreceived="20120223180419" -->
<!-- sent="Thu, 23 Feb 2012 19:04:14 +0100" -->
<!-- isosent="20120223180414" -->
<!-- name="Salvatore Podda" -->
<!-- email="salvatore.podda_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI installation on front-end and worker nodes" -->
<!-- id="1523F9A1-D94F-401E-B16F-8D275F0BB397_at_enea.it" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] openMPI installation on front-end and worker nodes" -->
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
<strong>From:</strong> Salvatore Podda (<em>salvatore.podda_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-23 13:04:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18555.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18553.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Maybe in reply to:</strong> <a href="18549.php">Reuti: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18556.php">Salvatore Podda: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha, thanks for your comment.
<br>
I add the comments inlne.
<br>
<p><span class="quotelev1">&gt; Salvatore,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please see my comment inline.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More generally, in the case of a front-end nodes with a processors definitively different from 
</span><br>
<span class="quotelev2">&gt;&gt; worker nodes (same firm i.e.Intel) can openMPI applications compiled on one run correctly
</span><br>
<span class="quotelev2">&gt;&gt; on the others?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is possible to come up with a set of gcc flags that generate a &quot;generic&quot; binary for both systems. The problem is that the generic code would not be optimal for backend nodes. As a result it may effect on applications performance.
</span><br>
<p>As a matter of fact we had trouble and loss of performance also with the hpl and IMB test
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We had a similar setup issues on our platform as well. As a work around, we compiled two version of the code and merged them to single install directory.
</span><br>
<p>At the moment this is the way we are pursuing. We are doing the same work for the other two compiler, pgi and Intel.
<br>
At the end we are persuading ourselves to have the front-end of the same architecture of the backend nodes also if 
<br>
this can results in a waste of valuable computing resources. Otherwise we are thinking, for the user, to move 
<br>
the compilations, after a test phase on the front-end, on the backend nodes making use of the scheduler.
<br>
<p>Thanks again
<br>
<p>Salvatore
<br>
&nbsp;&nbsp;
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18555.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18553.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Maybe in reply to:</strong> <a href="18549.php">Reuti: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18556.php">Salvatore Podda: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
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
