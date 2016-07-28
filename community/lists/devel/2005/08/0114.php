<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 11:22:38 2005" -->
<!-- isoreceived="20050809162238" -->
<!-- sent="Tue, 9 Aug 2005 10:22:34 -0600 (MDT)" -->
<!-- isosent="20050809162234" -->
<!-- name="Timothy B. Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re:  Memory registration question." -->
<!-- id="46560.128.165.148.200.1123604554.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20050809143617.GL16361_at_minantech.com" -->
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
<strong>Date:</strong> 2005-08-09 11:22:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0115.php">Galen Shipman: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0113.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0113.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0122.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0122.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb,
<br>
<p>We just talked about this problem and we decided that we needed to support
<br>
overlapping registrations. Our idea is to add another funtion to the mpool
<br>
that would return a list of registrations that correspond to a base
<br>
address.
<br>
<p>If you have anyother ideas of how to do it please let us know.
<br>
<p><p>Thanks,
<br>
<p>Tim Prins
<br>
<p><span class="quotelev1">&gt; On Tue, Aug 09, 2005 at 08:20:38AM -0600, Timothy B. Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gleb.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The memory pool does not support overlapping registrations. The
</span><br>
<span class="quotelev2">&gt;&gt; registrations are stored in a balanced tree, so which ever of the two it
</span><br>
<span class="quotelev2">&gt;&gt; encounters first it will return.
</span><br>
<span class="quotelev1">&gt; This was my impression. Is this inefficient? If wrong module is returned
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt; will have to be registered one more time. Are you planning to support
</span><br>
<span class="quotelev1">&gt; overlapping registrations? I think it could be done with small changes
</span><br>
<span class="quotelev1">&gt; to ob1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prins
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  I am trying to understand how memory registration works in openMPI
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have a question. Does mca_mpool_base_(insert|insert) interface
</span><br>
<span class="quotelev2">&gt;&gt; supports
</span><br>
<span class="quotelev3">&gt;&gt; &gt; overlapping registrations? If one module register memory from 0 to 100
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and another from 50 to 150 what mca_mpool_base_find(80) will return to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ob1 module?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 			Gleb.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0115.php">Galen Shipman: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0113.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0113.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0122.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0122.php">Gleb Natapov: "Re:  Memory registration question."</a>
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
