<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 10:41:16 2007" -->
<!-- isoreceived="20070712144116" -->
<!-- sent="Thu, 12 Jul 2007 08:40:55 -0600" -->
<!-- isosent="20070712144055" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Notes on building and running Open MPI on Red Storm" -->
<!-- id="4DBBDCAE-5FAF-4B94-BB2C-87EA6D7BE13F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="72208BE3C2373746A87FCCEBA1BF1B73026D2B63_at_G3W0069.americas.hpqcorp.net" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 10:40:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1858.php">Joshua Hursey: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Previous message:</strong> <a href="1856.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>In reply to:</strong> <a href="1851.php">Glendenning, Lisa: "[OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1858.php">Joshua Hursey: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Reply:</strong> <a href="1858.php">Joshua Hursey: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 11, 2007, at 4:47 PM, Glendenning, Lisa wrote:
<br>
<p><span class="quotelev1">&gt;   * When linking with libopen-pal, the following warning is normal:  
</span><br>
<span class="quotelev1">&gt; 'In
</span><br>
<span class="quotelev1">&gt; function `checkpoint_response': warning: mkfifo is not implemented and
</span><br>
<span class="quotelev1">&gt; will always fail'
</span><br>
<p>Josh -
<br>
<p>I thought the checkpoint code wasn't built unless requested.  Anyway,  
<br>
if you AC_CHECK_FUNCS for mkfifo, it'll fail on the Cray.  Can you  
<br>
update opal/runtime/opal_cr.c to not have code that calls mkfifo()  
<br>
compiled on platforms that don't have mkfifo?
<br>
<p><p>Thanks,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1858.php">Joshua Hursey: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Previous message:</strong> <a href="1856.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>In reply to:</strong> <a href="1851.php">Glendenning, Lisa: "[OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1858.php">Joshua Hursey: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Reply:</strong> <a href="1858.php">Joshua Hursey: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
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
