<?
$subject_val = "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 19:13:26 2008" -->
<!-- isoreceived="20081211001326" -->
<!-- sent="Wed, 10 Dec 2008 19:13:20 -0500" -->
<!-- isosent="20081211001320" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2" -->
<!-- id="52979A69-1A88-4CA0-9DDE-F2C581550BBD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B34032BB-6873-40A7-B0D5-011686F045B6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 19:13:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7504.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Previous message:</strong> <a href="7502.php">doriankrause: "[OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="7391.php">Josh Hursey: "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This issue has been addressed in the Open MPI trunk with r20114. This  
<br>
fix will be moved to the v1.3 branch in the next few days and will be  
<br>
in the eventual v1.3.0 release.
<br>
<p>Thanks again for the heads up on this issue.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Dec 4, 2008, at 7:50 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Matthias,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the heads up. I'll work on a fix that uses the  
</span><br>
<span class="quotelev1">&gt; cr_request_checkpoint() interface instead of cr_request_file() when  
</span><br>
<span class="quotelev1">&gt; appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I filed a ticket about it if you are interested in tracking the  
</span><br>
<span class="quotelev1">&gt; progress on this bug:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/1691">https://svn.open-mpi.org/trac/ompi/ticket/1691</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2008, at 4:47 AM, Matthias Hovestadt wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Berkely recently released a new version of their BLCR. They already
</span><br>
<span class="quotelev2">&gt;&gt; marked the function cr_request_file as deprecated in BLCR 0.7.3. Now
</span><br>
<span class="quotelev2">&gt;&gt; they removed deprecated functions from libcr API.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since checkpointing support of OMPI is using cr_request_file, all
</span><br>
<span class="quotelev2">&gt;&gt; checkpointing operations fail with BLCR 0.8.0b2, making a downgrade
</span><br>
<span class="quotelev2">&gt;&gt; to BLCR 0.7.3 necessary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7504.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Previous message:</strong> <a href="7502.php">doriankrause: "[OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="7391.php">Josh Hursey: "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
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
