<?
$subject_val = "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 11:06:47 2010" -->
<!-- isoreceived="20100217160647" -->
<!-- sent="Wed, 17 Feb 2010 11:06:38 -0500" -->
<!-- isosent="20100217160638" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial" -->
<!-- id="A3C8732C-27D6-4583-982D-10C9DF161B16_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="146E964D-F566-4FF4-9560-4ADBF92E3B37_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 11:06:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12097.php">Jeff Squyres: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12095.php">Jeff Squyres: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>In reply to:</strong> <a href="12095.php">Jeff Squyres: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Michael. This should be now fixed by commit r22639. I'll push it into the next release.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 17, 2010, at 10:10 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Looks like a bug to me.  I'll file a ticket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the heads up!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 17, 2010, at 3:59 AM, Michael Hofmann wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; According to the MPI Standard, &quot;only arguments sendbuf, sendcount, 
</span><br>
<span class="quotelev2">&gt;&gt; sendtype, root, and comm are significant&quot; on non-root processes in 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Gather. However, in routine &quot;ompi_coll_tuned_gather_intra_binomial&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; the value of &quot;rdtype&quot; (&quot;recvtype&quot; of MPI_Gather) is used. This leads to 
</span><br>
<span class="quotelev2">&gt;&gt; crash if an uninitialized value is used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem exists in version 1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12097.php">Jeff Squyres: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12095.php">Jeff Squyres: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>In reply to:</strong> <a href="12095.php">Jeff Squyres: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
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
