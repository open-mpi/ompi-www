<?
$subject_val = "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 12:19:51 2010" -->
<!-- isoreceived="20100210171951" -->
<!-- sent="Wed, 10 Feb 2010 12:19:46 -0500" -->
<!-- isosent="20100210171946" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL" -->
<!-- id="B3198E48-8A2E-48B7-AEFA-0B69645FB3D5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="e7ba66e41002100859g306680afjcd98cc24b92dac95_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 12:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7399.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7397.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7397.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7399.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7399.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2010, at 11:59 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; If I remember correctly, the HPCC pingpong test synchronizes occasionally by
</span><br>
<span class="quotelev2">&gt; &gt; having one process send a zero-byte broadcast to all other processes.
</span><br>
<span class="quotelev2">&gt; &gt;  What's a zero-byte broadcast?  Well, some MPIs apparently send no data, but
</span><br>
<span class="quotelev2">&gt; &gt; do have synchronization semantics.  (No non-root process can exit before the
</span><br>
<span class="quotelev2">&gt; &gt; root process has entered.)  Other MPIs treat the zero-byte broadcasts as
</span><br>
<span class="quotelev2">&gt; &gt; no-ops;  there is no synchronization and then timing results from the HPCC
</span><br>
<span class="quotelev2">&gt; &gt; pingpong test are very misleading.  So far as I can tell, the MPI standard
</span><br>
<span class="quotelev2">&gt; &gt; doesn't address which behavior is correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep... for p2p communication things are more clear (and behavior more
</span><br>
<span class="quotelev1">&gt; consistens in the MPI's out there) regarding zero-length messages...
</span><br>
<span class="quotelev1">&gt; IMHO, collectives should be non-op only in the sense that no actual
</span><br>
<span class="quotelev1">&gt; reduction is made because there are no elements to operate on. I mean,
</span><br>
<span class="quotelev1">&gt; if Reduce(count=1) implies a sync, Reduce(count=0) should also imply a
</span><br>
<span class="quotelev1">&gt; sync...
</span><br>
<p>Sorry to disagree again.  :-)
<br>
<p>The *only* MPI collective operation that guarantees a synchronization is barrier.  The lack of synchronization guarantee for all other collective operations is very explicit in the MPI spec.  Hence, it is perfectly valid for an MPI implementation to do something like a no-op when no data transfer actually needs to take place (except, of course, the fact that Reduce(count=1) isn't defined ;-) ).
<br>
<p><span class="quotelev2">&gt; &gt; The test strikes me as
</span><br>
<span class="quotelev2">&gt; &gt; deficient:  it would have been just as easy to have a single-word broadcast
</span><br>
<span class="quotelev2">&gt; &gt; to implement the synchronization they were looking for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or use MPI_Barrier() ...
</span><br>
<p>This one I agree with.  ;-)
<br>
<p>There's still jitter time on when individual processes *leave* a barrier, but MPI's do actually strive to reduce that jitter when possible.  It's definitely a higher synchronization level than a short broadcast (but then again, you probably could emulate a barrier with short broadcasts if you really want to ;-) ).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7399.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7397.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7397.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7399.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7399.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
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
