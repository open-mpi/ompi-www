<?
$subject_val = "Re: [OMPI devel] Bug";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 19:26:24 2015" -->
<!-- isoreceived="20150622232624" -->
<!-- sent="Tue, 23 Jun 2015 08:26:20 +0900" -->
<!-- isosent="20150622232620" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug" -->
<!-- id="5588999C.30304_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAEcYPwArm+034_fY6Lowbjky7=bHJfj-9Mp_uYvExp17gjb-Hw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-22 19:26:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17521.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>Previous message:</strong> <a href="17519.php">Ralph Castain: "[OMPI devel] PMIx 2.0: seeking input"</a>
<li><strong>In reply to:</strong> <a href="17517.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17521.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>Reply:</strong> <a href="17521.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>here is what you wrote
<br>
<span class="quotelev1">&gt; $ ./configure --prefix=/home/devel/mpi/openmpi/1.8.5 --enable-debug
</span><br>
<span class="quotelev1">&gt; --enable-mem-debug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While running the tests, my terminal was flooded with malloc(0)
</span><br>
<span class="quotelev1">&gt; warnings, below a list of unique lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (coll_libnbc_ireduce_scatter_block.c, 67)
</span><br>
at first glance, i could not find how to reproduce this
<br>
(e.g. coll_libnbc_ireduce_scatter_block.c malloc 0 bytes)
<br>
<p>if you still have the test program that can do that, could you please 
<br>
post it ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/22/2015 11:28 PM, Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; On 21 June 2015 at 19:50, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Lisandro,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there was a regression in 1.8.6 with NBC and zero size messages.
</span><br>
<span class="quotelev2">&gt;&gt; (ironically, the bug was introduced when silencing zero size malloc you
</span><br>
<span class="quotelev2">&gt;&gt; reported
</span><br>
<span class="quotelev2">&gt;&gt; in <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17388.php">http://www.open-mpi.org/community/lists/devel/2015/05/17388.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the attached patch fixes the issue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; OK, I'll try to update 1.8.6 with that patch in my CI infraestructure
</span><br>
<span class="quotelev1">&gt; <a href="https://binstar.org/mpi4py/mpi4py/builds">https://binstar.org/mpi4py/mpi4py/builds</a> . I'll let you know how it
</span><br>
<span class="quotelev1">&gt; goes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in your initial report, you mentionned messages coming from
</span><br>
<span class="quotelev2">&gt;&gt; coll_libnbc_ireduce_scatter_block.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there might be a bug left in this area, but i was unable to reproduce it.
</span><br>
<span class="quotelev2">&gt;&gt; could you please post the code you used initially ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure about your question. The message I reported was about
</span><br>
<span class="quotelev1">&gt; malloc(0) warnings with 1.8.5. Perhaps other changes in 1.8.6 silenced
</span><br>
<span class="quotelev1">&gt; the warnings? IIRC, I reported other problems with (i?)reduce-scatter,
</span><br>
<span class="quotelev1">&gt; but these where fixed in 1.8.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17521.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>Previous message:</strong> <a href="17519.php">Ralph Castain: "[OMPI devel] PMIx 2.0: seeking input"</a>
<li><strong>In reply to:</strong> <a href="17517.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17521.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>Reply:</strong> <a href="17521.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
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
