<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 28 13:44:50 2005" -->
<!-- isoreceived="20050928184450" -->
<!-- sent="Wed, 28 Sep 2005 14:44:41 -0400" -->
<!-- isosent="20050928184441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  --map question" -->
<!-- id="5289d70339d9279b78930ae2442acc23_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f131ef4aec504e25291ad5c4135e595b_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-28 13:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0430.php">Jeff Squyres: "Valgrind 3.0.1 available"</a>
<li><strong>Previous message:</strong> <a href="0428.php">Jeff Squyres: "Re:  --map question"</a>
<li><strong>In reply to:</strong> <a href="0428.php">Jeff Squyres: "Re:  --map question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2005, at 2:40 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; and it should do the Right ordering for you.  If you don't want this,
</span><br>
<span class="quotelev1">&gt; you can change the default mapping to be &quot;by node&quot;, so it will allocate
</span><br>
<span class="quotelev1">&gt; one process per node until all slots are taken.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpirun -np 2 --hostfile hostfile ./x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will put MCW rank 0 on host1 and MCW rank 1 on host2.
</span><br>
<p>That should be:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 --hostfile hostfile --bynode ./x
<br>
<p>Sorry for the confusion...
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
<li><strong>Next message:</strong> <a href="0430.php">Jeff Squyres: "Valgrind 3.0.1 available"</a>
<li><strong>Previous message:</strong> <a href="0428.php">Jeff Squyres: "Re:  --map question"</a>
<li><strong>In reply to:</strong> <a href="0428.php">Jeff Squyres: "Re:  --map question"</a>
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
