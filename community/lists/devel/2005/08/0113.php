<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 09:36:57 2005" -->
<!-- isoreceived="20050809143657" -->
<!-- sent="Tue, 9 Aug 2005 17:36:17 +0300" -->
<!-- isosent="20050809143617" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  Memory registration question." -->
<!-- id="20050809143617.GL16361_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46781.128.165.148.200.1123597238.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-09 09:36:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0114.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0112.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0111.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0114.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0114.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Aug 09, 2005 at 08:20:38AM -0600, Timothy B. Prins wrote:
<br>
<span class="quotelev1">&gt; Gleb.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The memory pool does not support overlapping registrations. The
</span><br>
<span class="quotelev1">&gt; registrations are stored in a balanced tree, so which ever of the two it
</span><br>
<span class="quotelev1">&gt; encounters first it will return.
</span><br>
This was my impression. Is this inefficient? If wrong module is returned memory 
<br>
will have to be registered one more time. Are you planning to support
<br>
overlapping registrations? I think it could be done with small changes
<br>
to ob1.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim Prins
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I am trying to understand how memory registration works in openMPI and
</span><br>
<span class="quotelev2">&gt; &gt; I have a question. Does mca_mpool_base_(insert|insert) interface supports
</span><br>
<span class="quotelev2">&gt; &gt; overlapping registrations? If one module register memory from 0 to 100
</span><br>
<span class="quotelev2">&gt; &gt; and another from 50 to 150 what mca_mpool_base_find(80) will return to
</span><br>
<span class="quotelev2">&gt; &gt; ob1 module?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0114.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0112.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0111.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0114.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0114.php">Timothy B. Prins: "Re:  Memory registration question."</a>
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
