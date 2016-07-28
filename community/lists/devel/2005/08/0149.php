<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 15 07:09:23 2005" -->
<!-- isoreceived="20050815120923" -->
<!-- sent="Mon, 15 Aug 2005 08:09:16 -0400" -->
<!-- isosent="20050815120916" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Memory registration question." -->
<!-- id="4a016c242b44a1c8ff33e1a1995225b4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050814125310.GZ16361_at_minantech.com" -->
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
<strong>Date:</strong> 2005-08-15 07:09:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0150.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0148.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0148.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0150.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0150.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 14, 2005, at 8:53 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Lets say application wants to send buffer B to 100 other ranks. It does
</span><br>
<span class="quotelev1">&gt; 100 MPI_Isend (B).
</span><br>
<p>This is actually an erroneous MPI program.  MPI specifically states 
<br>
that a buffer can be used for exactly one communication at a time.
<br>
<p>I don't know if this matters or not, because users will likely still do 
<br>
it, but I thought I'd bring up the point...  :-)
<br>
<p>(returning to [lurk mode] on this thread...)
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
<li><strong>Next message:</strong> <a href="0150.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0148.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0148.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0150.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0150.php">Gleb Natapov: "Re:  Memory registration question."</a>
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
