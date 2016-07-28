<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 21 07:49:13 2005" -->
<!-- isoreceived="20050921124913" -->
<!-- sent="Wed, 21 Sep 2005 15:48:31 +0300" -->
<!-- isosent="20050921124831" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  Registration Cache changes" -->
<!-- id="20050921124830.GB3571_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="75558F2E-963F-41BC-A2A8-5653DF738A99_at_cs.unm.edu" -->
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
<strong>Date:</strong> 2005-09-21 07:48:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0386.php">Tim S. Woodall: "Re:  Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>Previous message:</strong> <a href="0384.php">Brian Barrett: "Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>In reply to:</strong> <a href="0344.php">Galen M. Shipman: "Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0387.php">Tim S. Woodall: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0387.php">Tim S. Woodall: "Re:  Registration Cache changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Galen,
<br>
<p>Finally I've got some time to look through the new code.
<br>
I have couple of notes.  In pml_ob1_rdma.c you try to merge 
<br>
registrations in the number of places. The code looks like this:
<br>
&nbsp;&nbsp;btl_mpool-&gt;mpool_deregister(btl_mpool, reg);
<br>
&nbsp;&nbsp;btl_mpool-&gt;mpool_register(btl_mpool, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_base,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_len,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_MPOOL_FLAGS_CACHE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;reg);
<br>
How do you know reg is not in use? You can't deregister it if somebody
<br>
is using the registration!
<br>
Also I thought about merging registration and I am not sure this is such 
<br>
a good idea. The registration may grow to large and you will not be able
<br>
to shrink it if only small part of it is in use. This may cause the waste 
<br>
of memory. 
<br>
<p>In mca_mpool_base_registration_t structure you save base/bound in byte
<br>
granularity, but we know that kernel works in much coarse resolution.
<br>
Why not to exploit this fact. We can round base/bound to page boundaries.
<br>
We are going to pin this memory anyway. In my patch I introduced
<br>
mpool_pageshift for this.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0386.php">Tim S. Woodall: "Re:  Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>Previous message:</strong> <a href="0384.php">Brian Barrett: "Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>In reply to:</strong> <a href="0344.php">Galen M. Shipman: "Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0387.php">Tim S. Woodall: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0387.php">Tim S. Woodall: "Re:  Registration Cache changes"</a>
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
