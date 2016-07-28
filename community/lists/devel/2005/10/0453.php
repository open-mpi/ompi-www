<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 19 10:05:53 2005" -->
<!-- isoreceived="20051019150553" -->
<!-- sent="Wed, 19 Oct 2005 09:05:41 -0600 (MDT)" -->
<!-- isosent="20051019150541" -->
<!-- name="Galen Mark Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  Registration Cache changes" -->
<!-- id="34946.128.165.0.81.1129734341.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20051019143320.GA24202_at_minantech.com" -->
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
<strong>From:</strong> Galen Mark Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-19 10:05:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0454.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0452.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>In reply to:</strong> <a href="0452.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0454.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0454.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We changed things a bit in the mpool, the deregister will remove the
<br>
registration from the cache and then call release, if the reference count
<br>
is &lt;=0, the memory is then deregistered, otherwise it will be deregistered
<br>
later via another release call. The BTL module increments the reference
<br>
count on the registration so it should not be deregestered until the the
<br>
registration's reference count is decremented in btl_free.
<br>
<p>Are you seeing an actual vapi error with the attached code? If so it is
<br>
probably a reference count issue that we need to deal with.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><span class="quotelev1">&gt; Hello Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seams this issue is still present and can be easily triggered.
</span><br>
<span class="quotelev1">&gt; (see attached program). Do you have plans to fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 21, 2005 at 12:06:18PM -0600, Galen M. Shipman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gleb,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hello Galen,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Finally I've got some time to look through the new code.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I have couple of notes.  In pml_ob1_rdma.c you try to merge
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; registrations in the number of places. The code looks like this:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   btl_mpool-&gt;mpool_deregister(btl_mpool, reg);
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   btl_mpool-&gt;mpool_register(btl_mpool,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;                     new_base,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;             new_len,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;             MCA_MPOOL_FLAGS_CACHE,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;             &amp;reg);
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; How do you know reg is not in use? You can't deregister it if
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; somebody
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; is using the registration!
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Good catch... this should check the reference count and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; only deregister when the reference count actually goes to zero...
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
<span class="quotelev2">&gt;&gt; Yes, this was a good catch.. This was causing all sorts of fun for us!
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0454.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0452.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>In reply to:</strong> <a href="0452.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0454.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0454.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
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
