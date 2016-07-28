<?
$subject_val = "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 07:50:27 2008" -->
<!-- isoreceived="20081204125027" -->
<!-- sent="Thu, 4 Dec 2008 07:50:16 -0500" -->
<!-- isosent="20081204125016" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2" -->
<!-- id="B34032BB-6873-40A7-B0D5-011686F045B6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4937A735.7060608_at_cs.tu-berlin.de" -->
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
<strong>Date:</strong> 2008-12-04 07:50:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7392.php">Jeff Squyres: "Re: [OMPI users] MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="7390.php">Matthias Hovestadt: "[OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<li><strong>In reply to:</strong> <a href="7390.php">Matthias Hovestadt: "[OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7503.php">Josh Hursey: "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<li><strong>Reply:</strong> <a href="7503.php">Josh Hursey: "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matthias,
<br>
<p>Thank you for the heads up. I'll work on a fix that uses the  
<br>
cr_request_checkpoint() interface instead of cr_request_file() when  
<br>
appropriate.
<br>
<p>I filed a ticket about it if you are interested in tracking the  
<br>
progress on this bug:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1691">https://svn.open-mpi.org/trac/ompi/ticket/1691</a>
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Dec 4, 2008, at 4:47 AM, Matthias Hovestadt wrote:
<br>
<p><span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Berkely recently released a new version of their BLCR. They already
</span><br>
<span class="quotelev1">&gt; marked the function cr_request_file as deprecated in BLCR 0.7.3. Now
</span><br>
<span class="quotelev1">&gt; they removed deprecated functions from libcr API.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since checkpointing support of OMPI is using cr_request_file, all
</span><br>
<span class="quotelev1">&gt; checkpointing operations fail with BLCR 0.8.0b2, making a downgrade
</span><br>
<span class="quotelev1">&gt; to BLCR 0.7.3 necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Matthias
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
<li><strong>Next message:</strong> <a href="7392.php">Jeff Squyres: "Re: [OMPI users] MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="7390.php">Matthias Hovestadt: "[OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<li><strong>In reply to:</strong> <a href="7390.php">Matthias Hovestadt: "[OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7503.php">Josh Hursey: "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<li><strong>Reply:</strong> <a href="7503.php">Josh Hursey: "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
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
