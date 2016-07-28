<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 21 08:53:38 2005" -->
<!-- isoreceived="20050921135338" -->
<!-- sent="Wed, 21 Sep 2005 07:53:31 -0600" -->
<!-- isosent="20050921135331" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  Registration Cache changes" -->
<!-- id="433165DB.7080909_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20050921124830.GB3571_at_minantech.com" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-21 08:53:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0388.php">Galen M. Shipman: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0386.php">Tim S. Woodall: "Re:  Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>In reply to:</strong> <a href="0385.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0388.php">Galen M. Shipman: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0388.php">Galen M. Shipman: "Re:  Registration Cache changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; Hello Galen,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally I've got some time to look through the new code.
</span><br>
<span class="quotelev1">&gt; I have couple of notes.  In pml_ob1_rdma.c you try to merge 
</span><br>
<span class="quotelev1">&gt; registrations in the number of places. The code looks like this:
</span><br>
<span class="quotelev1">&gt;   btl_mpool-&gt;mpool_deregister(btl_mpool, reg);
</span><br>
<span class="quotelev1">&gt;   btl_mpool-&gt;mpool_register(btl_mpool, 
</span><br>
<span class="quotelev1">&gt;                     new_base,
</span><br>
<span class="quotelev1">&gt; 		    new_len,
</span><br>
<span class="quotelev1">&gt; 		    MCA_MPOOL_FLAGS_CACHE,
</span><br>
<span class="quotelev1">&gt; 		    &amp;reg);
</span><br>
<span class="quotelev1">&gt; How do you know reg is not in use? You can't deregister it if somebody
</span><br>
<span class="quotelev1">&gt; is using the registration!
</span><br>
<p>Good catch... this should check the reference count and
<br>
only deregister when the reference count actually goes to zero...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0388.php">Galen M. Shipman: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0386.php">Tim S. Woodall: "Re:  Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>In reply to:</strong> <a href="0385.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0388.php">Galen M. Shipman: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0388.php">Galen M. Shipman: "Re:  Registration Cache changes"</a>
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
