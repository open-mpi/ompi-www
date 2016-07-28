<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 09:20:42 2005" -->
<!-- isoreceived="20050809142042" -->
<!-- sent="Tue, 9 Aug 2005 08:20:38 -0600 (MDT)" -->
<!-- isosent="20050809142038" -->
<!-- name="Timothy B. Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re:  Memory registration question." -->
<!-- id="46781.128.165.148.200.1123597238.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20050809130748.GK16361_at_minantech.com" -->
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
<strong>From:</strong> Timothy B. Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-09 09:20:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0112.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0110.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0101.php">Gleb Natapov: "Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0113.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0113.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb.
<br>
<p>The memory pool does not support overlapping registrations. The
<br>
registrations are stored in a balanced tree, so which ever of the two it
<br>
encounters first it will return.
<br>
<p><p>Tim Prins
<br>
<p><p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am trying to understand how memory registration works in openMPI and
</span><br>
<span class="quotelev1">&gt; I have a question. Does mca_mpool_base_(insert|insert) interface supports
</span><br>
<span class="quotelev1">&gt; overlapping registrations? If one module register memory from 0 to 100
</span><br>
<span class="quotelev1">&gt; and another from 50 to 150 what mca_mpool_base_find(80) will return to
</span><br>
<span class="quotelev1">&gt; ob1 module?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0112.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0110.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0101.php">Gleb Natapov: "Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0113.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0113.php">Gleb Natapov: "Re:  Memory registration question."</a>
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
