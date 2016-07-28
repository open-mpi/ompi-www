<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 21 13:06:24 2005" -->
<!-- isoreceived="20050921180624" -->
<!-- sent="Wed, 21 Sep 2005 12:06:18 -0600" -->
<!-- isosent="20050921180618" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  Registration Cache changes" -->
<!-- id="4922A46A-08CC-4A22-8D0D-B3A9CFC7C61C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="433165DB.7080909_at_lanl.gov" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-21 13:06:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0389.php">Tim S. Woodall: "[Fwd: OMPI mpif.h problems]"</a>
<li><strong>Previous message:</strong> <a href="0387.php">Tim S. Woodall: "Re:  Registration Cache changes"</a>
<li><strong>In reply to:</strong> <a href="0387.php">Tim S. Woodall: "Re:  Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/10/0452.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="../../2005/10/0452.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb,
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Galen,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Finally I've got some time to look through the new code.
</span><br>
<span class="quotelev2">&gt;&gt; I have couple of notes.  In pml_ob1_rdma.c you try to merge
</span><br>
<span class="quotelev2">&gt;&gt; registrations in the number of places. The code looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;   btl_mpool-&gt;mpool_deregister(btl_mpool, reg);
</span><br>
<span class="quotelev2">&gt;&gt;   btl_mpool-&gt;mpool_register(btl_mpool,
</span><br>
<span class="quotelev2">&gt;&gt;                     new_base,
</span><br>
<span class="quotelev2">&gt;&gt;             new_len,
</span><br>
<span class="quotelev2">&gt;&gt;             MCA_MPOOL_FLAGS_CACHE,
</span><br>
<span class="quotelev2">&gt;&gt;             &amp;reg);
</span><br>
<span class="quotelev2">&gt;&gt; How do you know reg is not in use? You can't deregister it if  
</span><br>
<span class="quotelev2">&gt;&gt; somebody
</span><br>
<span class="quotelev2">&gt;&gt; is using the registration!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good catch... this should check the reference count and
</span><br>
<span class="quotelev1">&gt; only deregister when the reference count actually goes to zero...
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
<p>Yes, this was a good catch.. This was causing all sorts of fun for us!
<br>
Thanks,
<br>
<p>Galen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0389.php">Tim S. Woodall: "[Fwd: OMPI mpif.h problems]"</a>
<li><strong>Previous message:</strong> <a href="0387.php">Tim S. Woodall: "Re:  Registration Cache changes"</a>
<li><strong>In reply to:</strong> <a href="0387.php">Tim S. Woodall: "Re:  Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/10/0452.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="../../2005/10/0452.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
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
