<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 23 07:41:07 2005" -->
<!-- isoreceived="20050923124107" -->
<!-- sent="Fri, 23 Sep 2005 08:41:01 -0400" -->
<!-- isosent="20050923124101" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  why do we need the backward dependencies ?" -->
<!-- id="94a287d30cdd885fdb7f3146aa0724ba_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050923101837.GB19908_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2005-09-23 07:41:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0398.php">Jeff Squyres: "Re:  --with-mvapi/--with-btl-mvapi???"</a>
<li><strong>Previous message:</strong> <a href="0396.php">Jeff Squyres: "mca selection"</a>
<li><strong>In reply to:</strong> <a href="0395.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0402.php">George Bosilca: "Re:  why do we need the backward dependencies ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2005, at 6:18 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; I think I found a small error in the patch, see proposed fix below.
</span><br>
<p>Yep, this showed up in the nightlies as well.
<br>
<p>The issue here is that this component is *always* built statically, and 
<br>
is therefore part of libopal itself (and therefore can't link to it, 
<br>
because it doesn't exist yet).
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
<li><strong>Next message:</strong> <a href="0398.php">Jeff Squyres: "Re:  --with-mvapi/--with-btl-mvapi???"</a>
<li><strong>Previous message:</strong> <a href="0396.php">Jeff Squyres: "mca selection"</a>
<li><strong>In reply to:</strong> <a href="0395.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0402.php">George Bosilca: "Re:  why do we need the backward dependencies ?"</a>
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
