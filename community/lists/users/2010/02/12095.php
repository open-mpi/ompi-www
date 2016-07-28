<?
$subject_val = "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 10:10:10 2010" -->
<!-- isoreceived="20100217151010" -->
<!-- sent="Wed, 17 Feb 2010 10:10:04 -0500" -->
<!-- isosent="20100217151004" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial" -->
<!-- id="146E964D-F566-4FF4-9560-4ADBF92E3B37_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="op.u79kl5d3nx0z8g_at_amplitude.informatik.tu-chemnitz.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 10:10:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12096.php">George Bosilca: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>Previous message:</strong> <a href="12094.php">Michael Hofmann: "[OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>In reply to:</strong> <a href="12094.php">Michael Hofmann: "[OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12096.php">George Bosilca: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>Reply:</strong> <a href="12096.php">George Bosilca: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like a bug to me.  I'll file a ticket.
<br>
<p>Thanks for the heads up!
<br>
<p>On Feb 17, 2010, at 3:59 AM, Michael Hofmann wrote:
<br>
<p><span class="quotelev1">&gt; According to the MPI Standard, &quot;only arguments sendbuf, sendcount, 
</span><br>
<span class="quotelev1">&gt; sendtype, root, and comm are significant&quot; on non-root processes in 
</span><br>
<span class="quotelev1">&gt; MPI_Gather. However, in routine &quot;ompi_coll_tuned_gather_intra_binomial&quot; 
</span><br>
<span class="quotelev1">&gt; the value of &quot;rdtype&quot; (&quot;recvtype&quot; of MPI_Gather) is used. This leads to 
</span><br>
<span class="quotelev1">&gt; crash if an uninitialized value is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem exists in version 1.4.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="12096.php">George Bosilca: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>Previous message:</strong> <a href="12094.php">Michael Hofmann: "[OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>In reply to:</strong> <a href="12094.php">Michael Hofmann: "[OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12096.php">George Bosilca: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>Reply:</strong> <a href="12096.php">George Bosilca: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
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
