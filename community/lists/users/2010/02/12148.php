<?
$subject_val = "Re: [OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 21:47:41 2010" -->
<!-- isoreceived="20100225024741" -->
<!-- sent="Wed, 24 Feb 2010 18:47:36 -0800" -->
<!-- isosent="20100225024736" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test" -->
<!-- id="5b7094581002241847m334b32dcw21b5d09844890d1f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="92E3C561-EF4A-4C24-97C3-983165280D25_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 21:47:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12149.php">Amr Hassan: "[OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12147.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test"</a>
<li><strong>In reply to:</strong> <a href="12147.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for confirming.  We'll try valgrind next :)
<br>
<p>On Wed, Feb 24, 2010 at 6:35 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Feb 24, 2010, at 8:17 PM, Brian Budge wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are receiving an error of MPI_ERR_TRUNCATE from MPI_Test (after
</span><br>
<span class="quotelev2">&gt;&gt; enabling the RETURN error handler). &#160;I'm confused as to what might
</span><br>
<span class="quotelev2">&gt;&gt; cause this, as I was assuming that this generally resulted from a recv
</span><br>
<span class="quotelev2">&gt;&gt; call being made requesting fewer bytes than were sent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12149.php">Amr Hassan: "[OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12147.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test"</a>
<li><strong>In reply to:</strong> <a href="12147.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test"</a>
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
