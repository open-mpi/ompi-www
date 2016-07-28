<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 01:30:56 2014" -->
<!-- isoreceived="20140326053056" -->
<!-- sent="Wed, 26 Mar 2014 06:31:47 +0100" -->
<!-- isosent="20140326053147" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="20140326053147.GA30291_at_neuromancer.fritz.box" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1395804609.27857.144.camel_at_localhost" -->
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
<strong>Date:</strong> 2014-03-26 01:31:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23968.php">Ross Boylan: "[OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23968.php">Ross Boylan: "[OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ross-
<br>
<p>On 20:30 Tue 25 Mar     , Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; Even when &quot;idle&quot;, MPI processes use all the CPU.  I thought I remember
</span><br>
<span class="quotelev1">&gt; someone saying that they will be low priority, and so not pose much of
</span><br>
<span class="quotelev1">&gt; an obstacle to other uses of the CPU.
</span><br>
<p>well, if they're blocking in an MPI call, then they'll be doing a busy
<br>
wait, so each thread will easily churn up 100% CPU load.
<br>
<p><span class="quotelev1">&gt; At any rate, my question is whether, if I have processes that spend most
</span><br>
<span class="quotelev1">&gt; of their time waiting to receive a message, I can put more of them than
</span><br>
<span class="quotelev1">&gt; I have physical cores without much slowdown?
</span><br>
<p>AFAICS there will always be a certain slowdown. Is there a reason why
<br>
you would want to oversubscribe your nodes?
<br>
<p><span class="quotelev1">&gt; Does it make any difference if there's hyperthreading with, e.g., 16
</span><br>
<span class="quotelev1">&gt; virtual CPUs based on 8 physical ones?  In general I try to limit to the
</span><br>
<span class="quotelev1">&gt; number of physical cores.
</span><br>
<p>That depends much on the code. If the additional threads run a
<br>
different instruction mix, then you might be able to squeeze out some
<br>
additional performance by adding more than the original 8 threads. But
<br>
I've also seen codes which actually run slower with SMT
<br>
(&quot;hyperthreading&quot;).
<br>
<p>Cheers
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23969/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23968.php">Ross Boylan: "[OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23968.php">Ross Boylan: "[OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
