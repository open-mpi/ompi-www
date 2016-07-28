<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 06:44:32 2014" -->
<!-- isoreceived="20140326104432" -->
<!-- sent="Wed, 26 Mar 2014 11:45:31 +0100" -->
<!-- isosent="20140326104531" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="20140326104531.GB16514_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F2CBF75A-0559-437B-B52B-8C54D174E5EC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] busy waiting and oversubscriptions<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-26 06:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23973.php">Tim Prince: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10:27 Wed 26 Mar     , Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Be aware of a few facts, though:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. There is a fundamental difference between disabling
</span><br>
<span class="quotelev1">&gt; hyperthreading in the BIOS at power-on time and simply running one
</span><br>
<span class="quotelev1">&gt; MPI process per core.  Disabling HT at power-on allocates more
</span><br>
<span class="quotelev1">&gt; hardware resources to the remaining HT that is left is each core
</span><br>
<span class="quotelev1">&gt; (e.g., deeper queues).
</span><br>
<p>Oh, I didn't know that. That's interesting! Do you have any links with
<br>
in-depth info on that?
<br>
<p>Thanks!
<br>
-Andreas
<br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23971/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23973.php">Tim Prince: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
