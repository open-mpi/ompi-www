<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 19 09:34:08 2005" -->
<!-- isoreceived="20051019143408" -->
<!-- sent="Wed, 19 Oct 2005 16:33:20 +0200" -->
<!-- isosent="20051019143320" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  Registration Cache changes" -->
<!-- id="20051019143320.GA24202_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4922A46A-08CC-4A22-8D0D-B3A9CFC7C61C_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-10-19 09:33:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0453.php">Galen Mark Shipman: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0451.php">George Bosilca: "Re:  build system changes"</a>
<li><strong>In reply to:</strong> <a href="../../2005/09/0388.php">Galen M. Shipman: "Re:  Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0453.php">Galen Mark Shipman: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0453.php">Galen Mark Shipman: "Re:  Registration Cache changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Galen,
<br>
<p>It seams this issue is still present and can be easily triggered.
<br>
(see attached program). Do you have plans to fix it?
<br>
<p>On Wed, Sep 21, 2005 at 12:06:18PM -0600, Galen M. Shipman wrote:
<br>
<span class="quotelev1">&gt; Gleb,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello Galen,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Finally I've got some time to look through the new code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have couple of notes.  In pml_ob1_rdma.c you try to merge
</span><br>
<span class="quotelev3">&gt; &gt;&gt; registrations in the number of places. The code looks like this:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   btl_mpool-&gt;mpool_deregister(btl_mpool, reg);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   btl_mpool-&gt;mpool_register(btl_mpool,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                     new_base,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             new_len,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             MCA_MPOOL_FLAGS_CACHE,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             &amp;reg);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; How do you know reg is not in use? You can't deregister it if  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; somebody
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is using the registration!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Good catch... this should check the reference count and
</span><br>
<span class="quotelev2">&gt; &gt; only deregister when the reference count actually goes to zero...
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
<span class="quotelev1">&gt; Yes, this was a good catch.. This was causing all sorts of fun for us!
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
			Gleb.

</pre>
<p>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="../../att-0452/my.c">my.c</a>
</ul>
<!-- attachment="my.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0453.php">Galen Mark Shipman: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0451.php">George Bosilca: "Re:  build system changes"</a>
<li><strong>In reply to:</strong> <a href="../../2005/09/0388.php">Galen M. Shipman: "Re:  Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0453.php">Galen Mark Shipman: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0453.php">Galen Mark Shipman: "Re:  Registration Cache changes"</a>
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
