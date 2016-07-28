<?
$subject_val = "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 14:10:54 2014" -->
<!-- isoreceived="20140424181054" -->
<!-- sent="Thu, 24 Apr 2014 18:10:53 +0000" -->
<!-- isosent="20140424181053" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)" -->
<!-- id="2DE3ADA9-2952-4259-82B0-F3C805B7E06B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1398285934.6236.50.camel_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 14:10:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24254.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 and hcoll support"</a>
<li><strong>Previous message:</strong> <a href="24252.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="24249.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24252.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 23, 2014, at 4:45 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; is OK. So, if any nonblocking calls are used, one must use mpi.test or
</span><br>
<span class="quotelev2">&gt;&gt; mpi.wait to check if they are complete before trying any blocking calls.
</span><br>
<p>That is also correct -- it's MPI semantics (communications initiated by MPI_Isend / MPI_Irecv must be completed via one of the flavors of MPI_Test or MPI_Wait).
<br>
<p><span class="quotelev1">&gt; That sounds like a different problem than the one I encountered.  The
</span><br>
<span class="quotelev1">&gt; system did get hung up, but the reason was that processes received
</span><br>
<span class="quotelev1">&gt; corrupted R objects, threw an error, and stopped responding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The root of my problem was that objects got garbage collected before the
</span><br>
<span class="quotelev1">&gt; isend completed.  
</span><br>
<p>This is definitely a problem with garbage collecting languages.  MPI needs to control the buffer until the corresponding Test/Wait indicates that MPI has finished with the buffer.
<br>
<p>If the buffer disappears / is changed from underneath MPI, unpredictable/undefined behavior can certainly result.
<br>
<p><span class="quotelev1">&gt; This will happen regardless of subsequent R-level
</span><br>
<span class="quotelev1">&gt; calls (e.g., to mpi.test).  The object to be transmitted is serialized
</span><br>
<span class="quotelev1">&gt; and passed to C, but when the call returns there are no R references to
</span><br>
<span class="quotelev1">&gt; the object--that is, the serialized version of the object--and so it is
</span><br>
<span class="quotelev1">&gt; subject to garbage collection.
</span><br>
<p>Yep.
<br>
<p><span class="quotelev1">&gt; I'd be happy to provide my modifications to get around this.  Although
</span><br>
<span class="quotelev1">&gt; they worked for me, they are not really suitable for general use.  There
</span><br>
<span class="quotelev1">&gt; are 2 main issues: first, I ignored the asynchronous receive since I
</span><br>
<span class="quotelev1">&gt; didn't use it.  Since MPI request objects are used for both sending and
</span><br>
<span class="quotelev1">&gt; receiving, I suspect that mixing irecv's in with code doing isends would
</span><br>
<span class="quotelev1">&gt; not work right.  
</span><br>
<p>FWIW, this works fine.  It's quite common (in C and Fortran) to mix various kinds of MPI_Request handles into a single array-based Test or Wait.  MPI figures it out.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24254.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 and hcoll support"</a>
<li><strong>Previous message:</strong> <a href="24252.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="24249.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24252.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
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
