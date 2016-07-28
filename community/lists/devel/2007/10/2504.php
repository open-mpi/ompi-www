<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 17:39:44 2007" -->
<!-- isoreceived="20071025213944" -->
<!-- sent="Thu, 25 Oct 2007 17:39:07 -0400" -->
<!-- isosent="20071025213907" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add &amp;quot;connect&amp;quot; field to openib BTL INI file" -->
<!-- id="0572E360-5103-4882-A2C2-D556F39A46CC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071025151819.GG12525_at_minantech.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 17:39:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2505.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="2503.php">Brian W. Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="2500.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 25, 2007, at 11:18 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I don't think xrc should be used by default even if HW supports it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; special config option is set xrc should be attempted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; XRC is a crippled RC protocol for scalability sake. Its use makes
</span><br>
<span class="quotelev1">&gt; progress of one process depend on behaviour of other processes on the
</span><br>
<span class="quotelev1">&gt; same node which make cause different interesting effects. And of cause
</span><br>
<span class="quotelev1">&gt; SW flow control is not possible when using XRC, so for small jobs it
</span><br>
<span class="quotelev1">&gt; will be actually slower. I don't thinks it is wise to use XRC over
</span><br>
<span class="quotelev1">&gt; regular RC if there is a choice.
</span><br>
<p>Fun stuff.  :-)
<br>
<p><span class="quotelev3">&gt;&gt;&gt; And xrc availability
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can be tested in runtime without additional options in ini file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a flag on the device / port that indicates XRC availability?
</span><br>
<span class="quotelev1">&gt; XRC requires creation of special kind of QP. If this fails XRC is not
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<p>That's awkward, but ok.  :-)
<br>
<p><span class="quotelev2">&gt;&gt; So do you want the arbitration rules for which CPC to be used to be
</span><br>
<span class="quotelev2">&gt;&gt; hard-coded in the openib component (possibly overridden by MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameter to force a specific selection)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Not hard-coded, but controlled by regular mca mechanism, with default
</span><br>
<span class="quotelev1">&gt; behaviour dependant on HCA type. Not something new. We have this with
</span><br>
<span class="quotelev1">&gt; SRQ.
</span><br>
<p>Something like this?
<br>
<p>if (mca_specified)
<br>
&nbsp;&nbsp;&nbsp;setup to use MCA-specified CPC
<br>
else if (iwarp_device)
<br>
&nbsp;&nbsp;&nbsp;setup to use rdma_cm CPC
<br>
else
<br>
&nbsp;&nbsp;&nbsp;setup to use oob CPC
<br>
endif
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2505.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="2503.php">Brian W. Barrett: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="2500.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- nextthread="start" -->
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
