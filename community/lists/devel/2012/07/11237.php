<?
$subject_val = "Re: [OMPI devel] openib max_cqe";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  5 17:47:55 2012" -->
<!-- isoreceived="20120705214755" -->
<!-- sent="Thu, 5 Jul 2012 17:47:49 -0400" -->
<!-- isosent="20120705214749" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib max_cqe" -->
<!-- id="A6C79FDD-3B91-4F49-9F83-A65F9ED20BEA_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E3455BAF-4D4E-4890-BCEE-CC6D43F3233D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib max_cqe<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-05 17:47:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11238.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11236.php">Jeff Squyres: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>In reply to:</strong> <a href="11236.php">Jeff Squyres: "Re: [OMPI devel] openib max_cqe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11243.php">TERRY DONTJE: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Reply:</strong> <a href="11243.php">TERRY DONTJE: "Re: [OMPI devel] openib max_cqe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; I mentioned on the call that for Mellanox devices (+OFA verbs) this resource is really cheap. Do you run mellanox hca + OFA verbs ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I'll reply because I know Terry is offline for the rest of the day)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, he does.
</span><br>
<p>I asked because SUN used to have own verbs driver.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The heart of the question: is it incorrect to assume that we'll consume (num CQE * CQE size) registered memory for each QP opened?
</span><br>
<p>QP or CQ ?  I think you don't want to assume anything there. Verbs (user and kernel) do their own magic there.
<br>
I think Mellanox should address this question.
<br>
<p>Regards,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11238.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11236.php">Jeff Squyres: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>In reply to:</strong> <a href="11236.php">Jeff Squyres: "Re: [OMPI devel] openib max_cqe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11243.php">TERRY DONTJE: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Reply:</strong> <a href="11243.php">TERRY DONTJE: "Re: [OMPI devel] openib max_cqe"</a>
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
