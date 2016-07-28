<?
$subject_val = "Re: [OMPI users] OpenMPI flags conditions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 14:25:57 2010" -->
<!-- isoreceived="20100715182557" -->
<!-- sent="Thu, 15 Jul 2010 11:27:47 -0700" -->
<!-- isosent="20100715182747" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI flags conditions" -->
<!-- id="4C3F5323.8060809_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikLhSnJwMuV-32dw-SabmOYeL5lyHsA0GpHfwV1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI flags conditions<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 14:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13663.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Previous message:</strong> <a href="13661.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>In reply to:</strong> <a href="13647.php">Gabriele Fatigati: "[OMPI users] OpenMPI flags conditions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is it possible to define some set of parameters for a range number of 
</span><br>
<span class="quotelev1">&gt; processors and message size in openmpi-mca-params.conf ? For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if nprocs&lt;256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; some mca parameters...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if nprocs &gt; 256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; other mca parameters..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the same related to message size?
</span><br>
<p>Message size?  Depends on what you mean, but there are already 
<br>
algorithms in OMPI that depend on message size and you can control those 
<br>
dependences somewhat.  E.g., you can set eager/rendezvous crossover 
<br>
sizes.  Apparently, you want something beyond what's already supported 
<br>
today, but the point is that there are already some such controls in 
<br>
there.  Depending on how much more you want, this may be a topic beyond 
<br>
just conf files.  Perhaps what you're requesting requires altogether new 
<br>
MCA parameters.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13663.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Previous message:</strong> <a href="13661.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>In reply to:</strong> <a href="13647.php">Gabriele Fatigati: "[OMPI users] OpenMPI flags conditions"</a>
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
