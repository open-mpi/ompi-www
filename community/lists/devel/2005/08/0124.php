<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 10 05:58:38 2005" -->
<!-- isoreceived="20050810105838" -->
<!-- sent="Wed, 10 Aug 2005 06:58:37 -0400" -->
<!-- isosent="20050810105837" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  New version of Valgrind: 3.0.0" -->
<!-- id="332cdc70f0243c77ed0ea6b8d59e6f94_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050810104836.GO16361_at_minantech.com" -->
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
<strong>Date:</strong> 2005-08-10 05:58:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0125.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0123.php">Gleb Natapov: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>In reply to:</strong> <a href="0123.php">Gleb Natapov: "Re:  New version of Valgrind: 3.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0126.php">Ralph H. Castain: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Reply:</strong> <a href="0126.php">Ralph H. Castain: "Re:  New version of Valgrind: 3.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2005, at 6:48 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; If you give an environment variable name to --log-file-qualifier, it
</span><br>
<span class="quotelev2">&gt;&gt; will use the value of that environment variable in the output file
</span><br>
<span class="quotelev2">&gt;&gt; name.  Do we have a suitable environment variable which is globally
</span><br>
<span class="quotelev2">&gt;&gt; available for such a purpose?  (in LAM, we had $LAMRANK, which was 
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt; rank in MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt; I use $OMPI_MCA_ns_nds_vpid for this. Is this good enough?
</span><br>
<p>I knew about this one, but was wondering if we actually have anything 
<br>
that encompasses the entire cellid,jobid,vpid triple, and perhaps uses 
<br>
a nice short name (perhaps one that does not obey the prefix rule -- 
<br>
gasp!).  So I'm guessing this doesn't exist, but would be convenient 
<br>
for exactly this purpose (valgrind's --log-file-qualifier).
<br>
<p>Ralph -- got any opinions here?
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
<li><strong>Next message:</strong> <a href="0125.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0123.php">Gleb Natapov: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>In reply to:</strong> <a href="0123.php">Gleb Natapov: "Re:  New version of Valgrind: 3.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0126.php">Ralph H. Castain: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Reply:</strong> <a href="0126.php">Ralph H. Castain: "Re:  New version of Valgrind: 3.0.0"</a>
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
