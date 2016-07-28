<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 15 07:40:15 2005" -->
<!-- isoreceived="20050815124015" -->
<!-- sent="Mon, 15 Aug 2005 08:40:09 -0400" -->
<!-- isosent="20050815124009" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Memory registration question." -->
<!-- id="df664373e2c1d99c50641a50f532ad29_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050815123720.GA21091_at_minantech.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-15 07:40:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0152.php">Jeff Squyres: "linux paffinity component"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0150.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0159.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 15, 2005, at 8:37 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; This is actually an erroneous MPI program.  MPI specifically states
</span><br>
<span class="quotelev2">&gt;&gt; that a buffer can be used for exactly one communication at a time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This is actually the way MPI_Bcast works right now IMHO :)
</span><br>
<p>Shhh!!
<br>
<p>*Users* aren't allowed to do this.  But we, all-knowing MPI 
<br>
implementors are. ;-)
<br>
<p>But this is certainly a fair point -- we do this kind of behavior 
<br>
internally.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0152.php">Jeff Squyres: "linux paffinity component"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0150.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0159.php">Tim S. Woodall: "Re:  Memory registration question."</a>
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
